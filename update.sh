#!/bin/bash
set -e

# Automated client updater.

# Usage ./update.sh [swagger codegen git ref]
# Requirements: Docker.

# Clone swager codegen repo.
git clone git@github.com:swagger-api/swagger-codegen.git
cd swagger-codegen

# Switch to correct branch.
git checkout ${1:-2.3.0}

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
  -i https://github.com/openshift/origin/raw/master/api/swagger-spec/openshift-openapi-spec.json \
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
