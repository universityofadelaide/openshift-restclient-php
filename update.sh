#!/bin/bash
set -e

# Automated client updater.

# Usage ./update.sh [swagger codegen git ref]
# Requirements: Docker, jq.

# Clone swager codegen repo.
git clone git@github.com:swagger-api/swagger-codegen.git
cd swagger-codegen

# Switch to correct branch.
git checkout ${1:-2.3.0}

# Fetch OpenShift OpenAPI spec.
curl -Ls https://raw.githubusercontent.com/openshift/origin/master/api/swagger-spec/openshift-openapi-spec.json > openshift-openapi-spec.json

# If not set, add securityDefinitions to spec.
# @see https://github.com/openshift/origin/issues/14268
if ! grep -q securityDefinitions openshift-openapi-spec.json; then
    tee security-definitions.json > /dev/null <<EOF
{
    "securityDefinitions": {
        "openshift_auth": {
            "type": "oauth2",
            "authorizationUrl": "http://localhost/oauth/authorize",
            "flow": "implicit",
            "scopes": {
                "write:openshift": "modify",
                "read:openshift": "read"
            }
        }
    },
    "security": [
        {
            "openshift_auth": [
                "write:openshift",
                "read:openshift"
            ]
        }
    ]
}
EOF
    mv openshift-openapi-spec.json openshift-openapi-spec-original.json
    jq -s add openshift-openapi-spec-original.json security-definitions.json > openshift-openapi-spec.json
fi

# Put config in repo root dir.
tee config.json > /dev/null <<EOF
{
  "gitUserId": "universityofadelaide",
  "gitRepoId": "openshift-restclient-php",
  "invokerPackage": "UniversityOfAdelaide\\\\OpenShift",
  "srcBasePath": "src",
  "variableNamingConvention": "camelCase"
}
EOF

# Run swagger codegen generate.
./run-in-docker.sh generate \
  -l php \
  -i /gen/openshift-openapi-spec.json \
  -D packagePath=openshift-restclient-php \
  -c /gen/config.json \
  -o /gen/out

# Fix permissions (requires root permissions).
sudo chown -R $(whoami):$(whoami) out

# Delete old client, excluding this script, the git dir and swagger repo.
cd ..
ls -A | grep -v "update.sh\|\.git\|swagger-codegen" | xargs rm -rf

# Move new client into place.
mv swagger-codegen/out/openshift-restclient-php/* ./

# Remove codegen repo.
sudo rm -rf swagger-codegen

echo -e "\nNew client built. Next steps: git add . && git commit"
