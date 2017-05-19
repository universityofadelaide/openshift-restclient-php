# UniversityOfAdelaide\OpenShift\OapiApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**connectPostNamespacedBinaryBuildRequestOptionsInstantiatebinary**](OapiApi.md#connectPostNamespacedBinaryBuildRequestOptionsInstantiatebinary) | **POST** /oapi/v1/namespaces/{namespace}/buildconfigs/{name}/instantiatebinary | 
[**connectPostNamespacedBuildWebhooks**](OapiApi.md#connectPostNamespacedBuildWebhooks) | **POST** /oapi/v1/namespaces/{namespace}/buildconfigs/{name}/webhooks | 
[**connectPostNamespacedBuildWebhooksWithPath**](OapiApi.md#connectPostNamespacedBuildWebhooksWithPath) | **POST** /oapi/v1/namespaces/{namespace}/buildconfigs/{name}/webhooks/{path} | 
[**createBuildConfigForAllNamespaces**](OapiApi.md#createBuildConfigForAllNamespaces) | **POST** /oapi/v1/buildconfigs | 
[**createBuildForAllNamespaces**](OapiApi.md#createBuildForAllNamespaces) | **POST** /oapi/v1/builds | 
[**createClusterNetwork**](OapiApi.md#createClusterNetwork) | **POST** /oapi/v1/clusternetworks | 
[**createClusterPolicy**](OapiApi.md#createClusterPolicy) | **POST** /oapi/v1/clusterpolicies | 
[**createClusterPolicyBinding**](OapiApi.md#createClusterPolicyBinding) | **POST** /oapi/v1/clusterpolicybindings | 
[**createClusterResourceQuota**](OapiApi.md#createClusterResourceQuota) | **POST** /oapi/v1/clusterresourcequotas | 
[**createClusterRole**](OapiApi.md#createClusterRole) | **POST** /oapi/v1/clusterroles | 
[**createClusterRoleBinding**](OapiApi.md#createClusterRoleBinding) | **POST** /oapi/v1/clusterrolebindings | 
[**createDeploymentConfigForAllNamespaces**](OapiApi.md#createDeploymentConfigForAllNamespaces) | **POST** /oapi/v1/deploymentconfigs | 
[**createDeploymentConfigRollbackForAllNamespaces**](OapiApi.md#createDeploymentConfigRollbackForAllNamespaces) | **POST** /oapi/v1/deploymentconfigrollbacks | 
[**createEgressNetworkPolicyForAllNamespaces**](OapiApi.md#createEgressNetworkPolicyForAllNamespaces) | **POST** /oapi/v1/egressnetworkpolicies | 
[**createGroup**](OapiApi.md#createGroup) | **POST** /oapi/v1/groups | 
[**createHostSubnet**](OapiApi.md#createHostSubnet) | **POST** /oapi/v1/hostsubnets | 
[**createIdentity**](OapiApi.md#createIdentity) | **POST** /oapi/v1/identities | 
[**createImage**](OapiApi.md#createImage) | **POST** /oapi/v1/images | 
[**createImageSignature**](OapiApi.md#createImageSignature) | **POST** /oapi/v1/imagesignatures | 
[**createImageStreamForAllNamespaces**](OapiApi.md#createImageStreamForAllNamespaces) | **POST** /oapi/v1/imagestreams | 
[**createImageStreamImportForAllNamespaces**](OapiApi.md#createImageStreamImportForAllNamespaces) | **POST** /oapi/v1/imagestreamimports | 
[**createImageStreamMappingForAllNamespaces**](OapiApi.md#createImageStreamMappingForAllNamespaces) | **POST** /oapi/v1/imagestreammappings | 
[**createImageStreamTagForAllNamespaces**](OapiApi.md#createImageStreamTagForAllNamespaces) | **POST** /oapi/v1/imagestreamtags | 
[**createLocalResourceAccessReviewForAllNamespaces**](OapiApi.md#createLocalResourceAccessReviewForAllNamespaces) | **POST** /oapi/v1/localresourceaccessreviews | 
[**createLocalSubjectAccessReviewForAllNamespaces**](OapiApi.md#createLocalSubjectAccessReviewForAllNamespaces) | **POST** /oapi/v1/localsubjectaccessreviews | 
[**createNamespacedBuild**](OapiApi.md#createNamespacedBuild) | **POST** /oapi/v1/namespaces/{namespace}/builds | 
[**createNamespacedBuildConfig**](OapiApi.md#createNamespacedBuildConfig) | **POST** /oapi/v1/namespaces/{namespace}/buildconfigs | 
[**createNamespacedBuildRequestClone**](OapiApi.md#createNamespacedBuildRequestClone) | **POST** /oapi/v1/namespaces/{namespace}/builds/{name}/clone | 
[**createNamespacedBuildRequestInstantiate**](OapiApi.md#createNamespacedBuildRequestInstantiate) | **POST** /oapi/v1/namespaces/{namespace}/buildconfigs/{name}/instantiate | 
[**createNamespacedDeploymentConfig**](OapiApi.md#createNamespacedDeploymentConfig) | **POST** /oapi/v1/namespaces/{namespace}/deploymentconfigs | 
[**createNamespacedDeploymentConfigRollback**](OapiApi.md#createNamespacedDeploymentConfigRollback) | **POST** /oapi/v1/namespaces/{namespace}/deploymentconfigrollbacks | 
[**createNamespacedDeploymentConfigRollbackRollback**](OapiApi.md#createNamespacedDeploymentConfigRollbackRollback) | **POST** /oapi/v1/namespaces/{namespace}/deploymentconfigs/{name}/rollback | 
[**createNamespacedDeploymentRequestInstantiate**](OapiApi.md#createNamespacedDeploymentRequestInstantiate) | **POST** /oapi/v1/namespaces/{namespace}/deploymentconfigs/{name}/instantiate | 
[**createNamespacedEgressNetworkPolicy**](OapiApi.md#createNamespacedEgressNetworkPolicy) | **POST** /oapi/v1/namespaces/{namespace}/egressnetworkpolicies | 
[**createNamespacedImageStream**](OapiApi.md#createNamespacedImageStream) | **POST** /oapi/v1/namespaces/{namespace}/imagestreams | 
[**createNamespacedImageStreamImport**](OapiApi.md#createNamespacedImageStreamImport) | **POST** /oapi/v1/namespaces/{namespace}/imagestreamimports | 
[**createNamespacedImageStreamMapping**](OapiApi.md#createNamespacedImageStreamMapping) | **POST** /oapi/v1/namespaces/{namespace}/imagestreammappings | 
[**createNamespacedImageStreamTag**](OapiApi.md#createNamespacedImageStreamTag) | **POST** /oapi/v1/namespaces/{namespace}/imagestreamtags | 
[**createNamespacedLocalResourceAccessReview**](OapiApi.md#createNamespacedLocalResourceAccessReview) | **POST** /oapi/v1/namespaces/{namespace}/localresourceaccessreviews | 
[**createNamespacedLocalSubjectAccessReview**](OapiApi.md#createNamespacedLocalSubjectAccessReview) | **POST** /oapi/v1/namespaces/{namespace}/localsubjectaccessreviews | 
[**createNamespacedPodSecurityPolicyReview**](OapiApi.md#createNamespacedPodSecurityPolicyReview) | **POST** /oapi/v1/namespaces/{namespace}/podsecuritypolicyreviews | 
[**createNamespacedPodSecurityPolicySelfSubjectReview**](OapiApi.md#createNamespacedPodSecurityPolicySelfSubjectReview) | **POST** /oapi/v1/namespaces/{namespace}/podsecuritypolicyselfsubjectreviews | 
[**createNamespacedPodSecurityPolicySubjectReview**](OapiApi.md#createNamespacedPodSecurityPolicySubjectReview) | **POST** /oapi/v1/namespaces/{namespace}/podsecuritypolicysubjectreviews | 
[**createNamespacedPolicy**](OapiApi.md#createNamespacedPolicy) | **POST** /oapi/v1/namespaces/{namespace}/policies | 
[**createNamespacedPolicyBinding**](OapiApi.md#createNamespacedPolicyBinding) | **POST** /oapi/v1/namespaces/{namespace}/policybindings | 
[**createNamespacedResourceAccessReview**](OapiApi.md#createNamespacedResourceAccessReview) | **POST** /oapi/v1/namespaces/{namespace}/resourceaccessreviews | 
[**createNamespacedRole**](OapiApi.md#createNamespacedRole) | **POST** /oapi/v1/namespaces/{namespace}/roles | 
[**createNamespacedRoleBinding**](OapiApi.md#createNamespacedRoleBinding) | **POST** /oapi/v1/namespaces/{namespace}/rolebindings | 
[**createNamespacedRoleBindingRestriction**](OapiApi.md#createNamespacedRoleBindingRestriction) | **POST** /oapi/v1/namespaces/{namespace}/rolebindingrestrictions | 
[**createNamespacedRoute**](OapiApi.md#createNamespacedRoute) | **POST** /oapi/v1/namespaces/{namespace}/routes | 
[**createNamespacedSelfSubjectRulesReview**](OapiApi.md#createNamespacedSelfSubjectRulesReview) | **POST** /oapi/v1/namespaces/{namespace}/selfsubjectrulesreviews | 
[**createNamespacedSubjectAccessReview**](OapiApi.md#createNamespacedSubjectAccessReview) | **POST** /oapi/v1/namespaces/{namespace}/subjectaccessreviews | 
[**createNamespacedSubjectRulesReview**](OapiApi.md#createNamespacedSubjectRulesReview) | **POST** /oapi/v1/namespaces/{namespace}/subjectrulesreviews | 
[**createNamespacedTemplate**](OapiApi.md#createNamespacedTemplate) | **POST** /oapi/v1/namespaces/{namespace}/templates | 
[**createNetNamespace**](OapiApi.md#createNetNamespace) | **POST** /oapi/v1/netnamespaces | 
[**createOAuthAccessToken**](OapiApi.md#createOAuthAccessToken) | **POST** /oapi/v1/oauthaccesstokens | 
[**createOAuthAuthorizeToken**](OapiApi.md#createOAuthAuthorizeToken) | **POST** /oapi/v1/oauthauthorizetokens | 
[**createOAuthClient**](OapiApi.md#createOAuthClient) | **POST** /oapi/v1/oauthclients | 
[**createOAuthClientAuthorization**](OapiApi.md#createOAuthClientAuthorization) | **POST** /oapi/v1/oauthclientauthorizations | 
[**createPodSecurityPolicyReviewForAllNamespaces**](OapiApi.md#createPodSecurityPolicyReviewForAllNamespaces) | **POST** /oapi/v1/podsecuritypolicyreviews | 
[**createPodSecurityPolicySelfSubjectReviewForAllNamespaces**](OapiApi.md#createPodSecurityPolicySelfSubjectReviewForAllNamespaces) | **POST** /oapi/v1/podsecuritypolicyselfsubjectreviews | 
[**createPodSecurityPolicySubjectReviewForAllNamespaces**](OapiApi.md#createPodSecurityPolicySubjectReviewForAllNamespaces) | **POST** /oapi/v1/podsecuritypolicysubjectreviews | 
[**createPolicyBindingForAllNamespaces**](OapiApi.md#createPolicyBindingForAllNamespaces) | **POST** /oapi/v1/policybindings | 
[**createPolicyForAllNamespaces**](OapiApi.md#createPolicyForAllNamespaces) | **POST** /oapi/v1/policies | 
[**createProject**](OapiApi.md#createProject) | **POST** /oapi/v1/projects | 
[**createProjectRequest**](OapiApi.md#createProjectRequest) | **POST** /oapi/v1/projectrequests | 
[**createResourceAccessReviewForAllNamespaces**](OapiApi.md#createResourceAccessReviewForAllNamespaces) | **POST** /oapi/v1/resourceaccessreviews | 
[**createRoleBindingForAllNamespaces**](OapiApi.md#createRoleBindingForAllNamespaces) | **POST** /oapi/v1/rolebindings | 
[**createRoleBindingRestrictionForAllNamespaces**](OapiApi.md#createRoleBindingRestrictionForAllNamespaces) | **POST** /oapi/v1/rolebindingrestrictions | 
[**createRoleForAllNamespaces**](OapiApi.md#createRoleForAllNamespaces) | **POST** /oapi/v1/roles | 
[**createRouteForAllNamespaces**](OapiApi.md#createRouteForAllNamespaces) | **POST** /oapi/v1/routes | 
[**createSelfSubjectRulesReviewForAllNamespaces**](OapiApi.md#createSelfSubjectRulesReviewForAllNamespaces) | **POST** /oapi/v1/selfsubjectrulesreviews | 
[**createSubjectAccessReviewForAllNamespaces**](OapiApi.md#createSubjectAccessReviewForAllNamespaces) | **POST** /oapi/v1/subjectaccessreviews | 
[**createSubjectRulesReviewForAllNamespaces**](OapiApi.md#createSubjectRulesReviewForAllNamespaces) | **POST** /oapi/v1/subjectrulesreviews | 
[**createTemplateForAllNamespaces**](OapiApi.md#createTemplateForAllNamespaces) | **POST** /oapi/v1/templates | 
[**createUser**](OapiApi.md#createUser) | **POST** /oapi/v1/users | 
[**createUserIdentityMapping**](OapiApi.md#createUserIdentityMapping) | **POST** /oapi/v1/useridentitymappings | 
[**deleteClusterNetwork**](OapiApi.md#deleteClusterNetwork) | **DELETE** /oapi/v1/clusternetworks/{name} | 
[**deleteClusterPolicy**](OapiApi.md#deleteClusterPolicy) | **DELETE** /oapi/v1/clusterpolicies/{name} | 
[**deleteClusterPolicyBinding**](OapiApi.md#deleteClusterPolicyBinding) | **DELETE** /oapi/v1/clusterpolicybindings/{name} | 
[**deleteClusterResourceQuota**](OapiApi.md#deleteClusterResourceQuota) | **DELETE** /oapi/v1/clusterresourcequotas/{name} | 
[**deleteClusterRole**](OapiApi.md#deleteClusterRole) | **DELETE** /oapi/v1/clusterroles/{name} | 
[**deleteClusterRoleBinding**](OapiApi.md#deleteClusterRoleBinding) | **DELETE** /oapi/v1/clusterrolebindings/{name} | 
[**deleteCollectionClusterNetwork**](OapiApi.md#deleteCollectionClusterNetwork) | **DELETE** /oapi/v1/clusternetworks | 
[**deleteCollectionClusterPolicy**](OapiApi.md#deleteCollectionClusterPolicy) | **DELETE** /oapi/v1/clusterpolicies | 
[**deleteCollectionClusterPolicyBinding**](OapiApi.md#deleteCollectionClusterPolicyBinding) | **DELETE** /oapi/v1/clusterpolicybindings | 
[**deleteCollectionClusterResourceQuota**](OapiApi.md#deleteCollectionClusterResourceQuota) | **DELETE** /oapi/v1/clusterresourcequotas | 
[**deleteCollectionGroup**](OapiApi.md#deleteCollectionGroup) | **DELETE** /oapi/v1/groups | 
[**deleteCollectionHostSubnet**](OapiApi.md#deleteCollectionHostSubnet) | **DELETE** /oapi/v1/hostsubnets | 
[**deleteCollectionIdentity**](OapiApi.md#deleteCollectionIdentity) | **DELETE** /oapi/v1/identities | 
[**deleteCollectionImage**](OapiApi.md#deleteCollectionImage) | **DELETE** /oapi/v1/images | 
[**deleteCollectionNamespacedBuild**](OapiApi.md#deleteCollectionNamespacedBuild) | **DELETE** /oapi/v1/namespaces/{namespace}/builds | 
[**deleteCollectionNamespacedBuildConfig**](OapiApi.md#deleteCollectionNamespacedBuildConfig) | **DELETE** /oapi/v1/namespaces/{namespace}/buildconfigs | 
[**deleteCollectionNamespacedDeploymentConfig**](OapiApi.md#deleteCollectionNamespacedDeploymentConfig) | **DELETE** /oapi/v1/namespaces/{namespace}/deploymentconfigs | 
[**deleteCollectionNamespacedEgressNetworkPolicy**](OapiApi.md#deleteCollectionNamespacedEgressNetworkPolicy) | **DELETE** /oapi/v1/namespaces/{namespace}/egressnetworkpolicies | 
[**deleteCollectionNamespacedImageStream**](OapiApi.md#deleteCollectionNamespacedImageStream) | **DELETE** /oapi/v1/namespaces/{namespace}/imagestreams | 
[**deleteCollectionNamespacedPolicy**](OapiApi.md#deleteCollectionNamespacedPolicy) | **DELETE** /oapi/v1/namespaces/{namespace}/policies | 
[**deleteCollectionNamespacedPolicyBinding**](OapiApi.md#deleteCollectionNamespacedPolicyBinding) | **DELETE** /oapi/v1/namespaces/{namespace}/policybindings | 
[**deleteCollectionNamespacedRoleBindingRestriction**](OapiApi.md#deleteCollectionNamespacedRoleBindingRestriction) | **DELETE** /oapi/v1/namespaces/{namespace}/rolebindingrestrictions | 
[**deleteCollectionNamespacedRoute**](OapiApi.md#deleteCollectionNamespacedRoute) | **DELETE** /oapi/v1/namespaces/{namespace}/routes | 
[**deleteCollectionNamespacedTemplate**](OapiApi.md#deleteCollectionNamespacedTemplate) | **DELETE** /oapi/v1/namespaces/{namespace}/templates | 
[**deleteCollectionNetNamespace**](OapiApi.md#deleteCollectionNetNamespace) | **DELETE** /oapi/v1/netnamespaces | 
[**deleteCollectionOAuthAccessToken**](OapiApi.md#deleteCollectionOAuthAccessToken) | **DELETE** /oapi/v1/oauthaccesstokens | 
[**deleteCollectionOAuthAuthorizeToken**](OapiApi.md#deleteCollectionOAuthAuthorizeToken) | **DELETE** /oapi/v1/oauthauthorizetokens | 
[**deleteCollectionOAuthClient**](OapiApi.md#deleteCollectionOAuthClient) | **DELETE** /oapi/v1/oauthclients | 
[**deleteCollectionOAuthClientAuthorization**](OapiApi.md#deleteCollectionOAuthClientAuthorization) | **DELETE** /oapi/v1/oauthclientauthorizations | 
[**deleteCollectionUser**](OapiApi.md#deleteCollectionUser) | **DELETE** /oapi/v1/users | 
[**deleteGroup**](OapiApi.md#deleteGroup) | **DELETE** /oapi/v1/groups/{name} | 
[**deleteHostSubnet**](OapiApi.md#deleteHostSubnet) | **DELETE** /oapi/v1/hostsubnets/{name} | 
[**deleteIdentity**](OapiApi.md#deleteIdentity) | **DELETE** /oapi/v1/identities/{name} | 
[**deleteImage**](OapiApi.md#deleteImage) | **DELETE** /oapi/v1/images/{name} | 
[**deleteImageSignature**](OapiApi.md#deleteImageSignature) | **DELETE** /oapi/v1/imagesignatures/{name} | 
[**deleteNamespacedBuild**](OapiApi.md#deleteNamespacedBuild) | **DELETE** /oapi/v1/namespaces/{namespace}/builds/{name} | 
[**deleteNamespacedBuildConfig**](OapiApi.md#deleteNamespacedBuildConfig) | **DELETE** /oapi/v1/namespaces/{namespace}/buildconfigs/{name} | 
[**deleteNamespacedDeploymentConfig**](OapiApi.md#deleteNamespacedDeploymentConfig) | **DELETE** /oapi/v1/namespaces/{namespace}/deploymentconfigs/{name} | 
[**deleteNamespacedEgressNetworkPolicy**](OapiApi.md#deleteNamespacedEgressNetworkPolicy) | **DELETE** /oapi/v1/namespaces/{namespace}/egressnetworkpolicies/{name} | 
[**deleteNamespacedImageStream**](OapiApi.md#deleteNamespacedImageStream) | **DELETE** /oapi/v1/namespaces/{namespace}/imagestreams/{name} | 
[**deleteNamespacedImageStreamTag**](OapiApi.md#deleteNamespacedImageStreamTag) | **DELETE** /oapi/v1/namespaces/{namespace}/imagestreamtags/{name} | 
[**deleteNamespacedPolicy**](OapiApi.md#deleteNamespacedPolicy) | **DELETE** /oapi/v1/namespaces/{namespace}/policies/{name} | 
[**deleteNamespacedPolicyBinding**](OapiApi.md#deleteNamespacedPolicyBinding) | **DELETE** /oapi/v1/namespaces/{namespace}/policybindings/{name} | 
[**deleteNamespacedRole**](OapiApi.md#deleteNamespacedRole) | **DELETE** /oapi/v1/namespaces/{namespace}/roles/{name} | 
[**deleteNamespacedRoleBinding**](OapiApi.md#deleteNamespacedRoleBinding) | **DELETE** /oapi/v1/namespaces/{namespace}/rolebindings/{name} | 
[**deleteNamespacedRoleBindingRestriction**](OapiApi.md#deleteNamespacedRoleBindingRestriction) | **DELETE** /oapi/v1/namespaces/{namespace}/rolebindingrestrictions/{name} | 
[**deleteNamespacedRoute**](OapiApi.md#deleteNamespacedRoute) | **DELETE** /oapi/v1/namespaces/{namespace}/routes/{name} | 
[**deleteNamespacedTemplate**](OapiApi.md#deleteNamespacedTemplate) | **DELETE** /oapi/v1/namespaces/{namespace}/templates/{name} | 
[**deleteNetNamespace**](OapiApi.md#deleteNetNamespace) | **DELETE** /oapi/v1/netnamespaces/{name} | 
[**deleteOAuthAccessToken**](OapiApi.md#deleteOAuthAccessToken) | **DELETE** /oapi/v1/oauthaccesstokens/{name} | 
[**deleteOAuthAuthorizeToken**](OapiApi.md#deleteOAuthAuthorizeToken) | **DELETE** /oapi/v1/oauthauthorizetokens/{name} | 
[**deleteOAuthClient**](OapiApi.md#deleteOAuthClient) | **DELETE** /oapi/v1/oauthclients/{name} | 
[**deleteOAuthClientAuthorization**](OapiApi.md#deleteOAuthClientAuthorization) | **DELETE** /oapi/v1/oauthclientauthorizations/{name} | 
[**deleteProject**](OapiApi.md#deleteProject) | **DELETE** /oapi/v1/projects/{name} | 
[**deleteUser**](OapiApi.md#deleteUser) | **DELETE** /oapi/v1/users/{name} | 
[**deleteUserIdentityMapping**](OapiApi.md#deleteUserIdentityMapping) | **DELETE** /oapi/v1/useridentitymappings/{name} | 
[**getAPIResources**](OapiApi.md#getAPIResources) | **GET** /oapi/v1/ | 
[**getOapiVersion**](OapiApi.md#getOapiVersion) | **GET** /oapi/ | 
[**listAppliedClusterResourceQuotaForAllNamespaces**](OapiApi.md#listAppliedClusterResourceQuotaForAllNamespaces) | **GET** /oapi/v1/appliedclusterresourcequotas | 
[**listBuildConfigForAllNamespaces**](OapiApi.md#listBuildConfigForAllNamespaces) | **GET** /oapi/v1/buildconfigs | 
[**listBuildForAllNamespaces**](OapiApi.md#listBuildForAllNamespaces) | **GET** /oapi/v1/builds | 
[**listClusterNetwork**](OapiApi.md#listClusterNetwork) | **GET** /oapi/v1/clusternetworks | 
[**listClusterPolicy**](OapiApi.md#listClusterPolicy) | **GET** /oapi/v1/clusterpolicies | 
[**listClusterPolicyBinding**](OapiApi.md#listClusterPolicyBinding) | **GET** /oapi/v1/clusterpolicybindings | 
[**listClusterResourceQuota**](OapiApi.md#listClusterResourceQuota) | **GET** /oapi/v1/clusterresourcequotas | 
[**listClusterRole**](OapiApi.md#listClusterRole) | **GET** /oapi/v1/clusterroles | 
[**listClusterRoleBinding**](OapiApi.md#listClusterRoleBinding) | **GET** /oapi/v1/clusterrolebindings | 
[**listDeploymentConfigForAllNamespaces**](OapiApi.md#listDeploymentConfigForAllNamespaces) | **GET** /oapi/v1/deploymentconfigs | 
[**listEgressNetworkPolicyForAllNamespaces**](OapiApi.md#listEgressNetworkPolicyForAllNamespaces) | **GET** /oapi/v1/egressnetworkpolicies | 
[**listGroup**](OapiApi.md#listGroup) | **GET** /oapi/v1/groups | 
[**listHostSubnet**](OapiApi.md#listHostSubnet) | **GET** /oapi/v1/hostsubnets | 
[**listIdentity**](OapiApi.md#listIdentity) | **GET** /oapi/v1/identities | 
[**listImage**](OapiApi.md#listImage) | **GET** /oapi/v1/images | 
[**listImageStreamForAllNamespaces**](OapiApi.md#listImageStreamForAllNamespaces) | **GET** /oapi/v1/imagestreams | 
[**listImageStreamTagForAllNamespaces**](OapiApi.md#listImageStreamTagForAllNamespaces) | **GET** /oapi/v1/imagestreamtags | 
[**listNamespacedAppliedClusterResourceQuota**](OapiApi.md#listNamespacedAppliedClusterResourceQuota) | **GET** /oapi/v1/namespaces/{namespace}/appliedclusterresourcequotas | 
[**listNamespacedBuild**](OapiApi.md#listNamespacedBuild) | **GET** /oapi/v1/namespaces/{namespace}/builds | 
[**listNamespacedBuildConfig**](OapiApi.md#listNamespacedBuildConfig) | **GET** /oapi/v1/namespaces/{namespace}/buildconfigs | 
[**listNamespacedDeploymentConfig**](OapiApi.md#listNamespacedDeploymentConfig) | **GET** /oapi/v1/namespaces/{namespace}/deploymentconfigs | 
[**listNamespacedEgressNetworkPolicy**](OapiApi.md#listNamespacedEgressNetworkPolicy) | **GET** /oapi/v1/namespaces/{namespace}/egressnetworkpolicies | 
[**listNamespacedImageStream**](OapiApi.md#listNamespacedImageStream) | **GET** /oapi/v1/namespaces/{namespace}/imagestreams | 
[**listNamespacedImageStreamTag**](OapiApi.md#listNamespacedImageStreamTag) | **GET** /oapi/v1/namespaces/{namespace}/imagestreamtags | 
[**listNamespacedPolicy**](OapiApi.md#listNamespacedPolicy) | **GET** /oapi/v1/namespaces/{namespace}/policies | 
[**listNamespacedPolicyBinding**](OapiApi.md#listNamespacedPolicyBinding) | **GET** /oapi/v1/namespaces/{namespace}/policybindings | 
[**listNamespacedRole**](OapiApi.md#listNamespacedRole) | **GET** /oapi/v1/namespaces/{namespace}/roles | 
[**listNamespacedRoleBinding**](OapiApi.md#listNamespacedRoleBinding) | **GET** /oapi/v1/namespaces/{namespace}/rolebindings | 
[**listNamespacedRoleBindingRestriction**](OapiApi.md#listNamespacedRoleBindingRestriction) | **GET** /oapi/v1/namespaces/{namespace}/rolebindingrestrictions | 
[**listNamespacedRoute**](OapiApi.md#listNamespacedRoute) | **GET** /oapi/v1/namespaces/{namespace}/routes | 
[**listNamespacedTemplate**](OapiApi.md#listNamespacedTemplate) | **GET** /oapi/v1/namespaces/{namespace}/templates | 
[**listNetNamespace**](OapiApi.md#listNetNamespace) | **GET** /oapi/v1/netnamespaces | 
[**listOAuthAccessToken**](OapiApi.md#listOAuthAccessToken) | **GET** /oapi/v1/oauthaccesstokens | 
[**listOAuthAuthorizeToken**](OapiApi.md#listOAuthAuthorizeToken) | **GET** /oapi/v1/oauthauthorizetokens | 
[**listOAuthClient**](OapiApi.md#listOAuthClient) | **GET** /oapi/v1/oauthclients | 
[**listOAuthClientAuthorization**](OapiApi.md#listOAuthClientAuthorization) | **GET** /oapi/v1/oauthclientauthorizations | 
[**listPolicyBindingForAllNamespaces**](OapiApi.md#listPolicyBindingForAllNamespaces) | **GET** /oapi/v1/policybindings | 
[**listPolicyForAllNamespaces**](OapiApi.md#listPolicyForAllNamespaces) | **GET** /oapi/v1/policies | 
[**listProject**](OapiApi.md#listProject) | **GET** /oapi/v1/projects | 
[**listProjectRequest**](OapiApi.md#listProjectRequest) | **GET** /oapi/v1/projectrequests | 
[**listRoleBindingForAllNamespaces**](OapiApi.md#listRoleBindingForAllNamespaces) | **GET** /oapi/v1/rolebindings | 
[**listRoleBindingRestrictionForAllNamespaces**](OapiApi.md#listRoleBindingRestrictionForAllNamespaces) | **GET** /oapi/v1/rolebindingrestrictions | 
[**listRoleForAllNamespaces**](OapiApi.md#listRoleForAllNamespaces) | **GET** /oapi/v1/roles | 
[**listRouteForAllNamespaces**](OapiApi.md#listRouteForAllNamespaces) | **GET** /oapi/v1/routes | 
[**listTemplateForAllNamespaces**](OapiApi.md#listTemplateForAllNamespaces) | **GET** /oapi/v1/templates | 
[**listUser**](OapiApi.md#listUser) | **GET** /oapi/v1/users | 
[**patchClusterNetwork**](OapiApi.md#patchClusterNetwork) | **PATCH** /oapi/v1/clusternetworks/{name} | 
[**patchClusterPolicy**](OapiApi.md#patchClusterPolicy) | **PATCH** /oapi/v1/clusterpolicies/{name} | 
[**patchClusterPolicyBinding**](OapiApi.md#patchClusterPolicyBinding) | **PATCH** /oapi/v1/clusterpolicybindings/{name} | 
[**patchClusterResourceQuota**](OapiApi.md#patchClusterResourceQuota) | **PATCH** /oapi/v1/clusterresourcequotas/{name} | 
[**patchClusterResourceQuotaStatus**](OapiApi.md#patchClusterResourceQuotaStatus) | **PATCH** /oapi/v1/clusterresourcequotas/{name}/status | 
[**patchClusterRole**](OapiApi.md#patchClusterRole) | **PATCH** /oapi/v1/clusterroles/{name} | 
[**patchClusterRoleBinding**](OapiApi.md#patchClusterRoleBinding) | **PATCH** /oapi/v1/clusterrolebindings/{name} | 
[**patchGroup**](OapiApi.md#patchGroup) | **PATCH** /oapi/v1/groups/{name} | 
[**patchHostSubnet**](OapiApi.md#patchHostSubnet) | **PATCH** /oapi/v1/hostsubnets/{name} | 
[**patchIdentity**](OapiApi.md#patchIdentity) | **PATCH** /oapi/v1/identities/{name} | 
[**patchImage**](OapiApi.md#patchImage) | **PATCH** /oapi/v1/images/{name} | 
[**patchNamespacedBuild**](OapiApi.md#patchNamespacedBuild) | **PATCH** /oapi/v1/namespaces/{namespace}/builds/{name} | 
[**patchNamespacedBuildConfig**](OapiApi.md#patchNamespacedBuildConfig) | **PATCH** /oapi/v1/namespaces/{namespace}/buildconfigs/{name} | 
[**patchNamespacedDeploymentConfig**](OapiApi.md#patchNamespacedDeploymentConfig) | **PATCH** /oapi/v1/namespaces/{namespace}/deploymentconfigs/{name} | 
[**patchNamespacedDeploymentConfigStatus**](OapiApi.md#patchNamespacedDeploymentConfigStatus) | **PATCH** /oapi/v1/namespaces/{namespace}/deploymentconfigs/{name}/status | 
[**patchNamespacedEgressNetworkPolicy**](OapiApi.md#patchNamespacedEgressNetworkPolicy) | **PATCH** /oapi/v1/namespaces/{namespace}/egressnetworkpolicies/{name} | 
[**patchNamespacedImageStream**](OapiApi.md#patchNamespacedImageStream) | **PATCH** /oapi/v1/namespaces/{namespace}/imagestreams/{name} | 
[**patchNamespacedImageStreamStatus**](OapiApi.md#patchNamespacedImageStreamStatus) | **PATCH** /oapi/v1/namespaces/{namespace}/imagestreams/{name}/status | 
[**patchNamespacedImageStreamTag**](OapiApi.md#patchNamespacedImageStreamTag) | **PATCH** /oapi/v1/namespaces/{namespace}/imagestreamtags/{name} | 
[**patchNamespacedPolicy**](OapiApi.md#patchNamespacedPolicy) | **PATCH** /oapi/v1/namespaces/{namespace}/policies/{name} | 
[**patchNamespacedPolicyBinding**](OapiApi.md#patchNamespacedPolicyBinding) | **PATCH** /oapi/v1/namespaces/{namespace}/policybindings/{name} | 
[**patchNamespacedRole**](OapiApi.md#patchNamespacedRole) | **PATCH** /oapi/v1/namespaces/{namespace}/roles/{name} | 
[**patchNamespacedRoleBinding**](OapiApi.md#patchNamespacedRoleBinding) | **PATCH** /oapi/v1/namespaces/{namespace}/rolebindings/{name} | 
[**patchNamespacedRoleBindingRestriction**](OapiApi.md#patchNamespacedRoleBindingRestriction) | **PATCH** /oapi/v1/namespaces/{namespace}/rolebindingrestrictions/{name} | 
[**patchNamespacedRoute**](OapiApi.md#patchNamespacedRoute) | **PATCH** /oapi/v1/namespaces/{namespace}/routes/{name} | 
[**patchNamespacedRouteStatus**](OapiApi.md#patchNamespacedRouteStatus) | **PATCH** /oapi/v1/namespaces/{namespace}/routes/{name}/status | 
[**patchNamespacedScaleScale**](OapiApi.md#patchNamespacedScaleScale) | **PATCH** /oapi/v1/namespaces/{namespace}/deploymentconfigs/{name}/scale | 
[**patchNamespacedTemplate**](OapiApi.md#patchNamespacedTemplate) | **PATCH** /oapi/v1/namespaces/{namespace}/templates/{name} | 
[**patchNetNamespace**](OapiApi.md#patchNetNamespace) | **PATCH** /oapi/v1/netnamespaces/{name} | 
[**patchOAuthAccessToken**](OapiApi.md#patchOAuthAccessToken) | **PATCH** /oapi/v1/oauthaccesstokens/{name} | 
[**patchOAuthAuthorizeToken**](OapiApi.md#patchOAuthAuthorizeToken) | **PATCH** /oapi/v1/oauthauthorizetokens/{name} | 
[**patchOAuthClient**](OapiApi.md#patchOAuthClient) | **PATCH** /oapi/v1/oauthclients/{name} | 
[**patchOAuthClientAuthorization**](OapiApi.md#patchOAuthClientAuthorization) | **PATCH** /oapi/v1/oauthclientauthorizations/{name} | 
[**patchProject**](OapiApi.md#patchProject) | **PATCH** /oapi/v1/projects/{name} | 
[**patchUser**](OapiApi.md#patchUser) | **PATCH** /oapi/v1/users/{name} | 
[**patchUserIdentityMapping**](OapiApi.md#patchUserIdentityMapping) | **PATCH** /oapi/v1/useridentitymappings/{name} | 
[**readClusterNetwork**](OapiApi.md#readClusterNetwork) | **GET** /oapi/v1/clusternetworks/{name} | 
[**readClusterPolicy**](OapiApi.md#readClusterPolicy) | **GET** /oapi/v1/clusterpolicies/{name} | 
[**readClusterPolicyBinding**](OapiApi.md#readClusterPolicyBinding) | **GET** /oapi/v1/clusterpolicybindings/{name} | 
[**readClusterResourceQuota**](OapiApi.md#readClusterResourceQuota) | **GET** /oapi/v1/clusterresourcequotas/{name} | 
[**readClusterResourceQuotaStatus**](OapiApi.md#readClusterResourceQuotaStatus) | **GET** /oapi/v1/clusterresourcequotas/{name}/status | 
[**readClusterRole**](OapiApi.md#readClusterRole) | **GET** /oapi/v1/clusterroles/{name} | 
[**readClusterRoleBinding**](OapiApi.md#readClusterRoleBinding) | **GET** /oapi/v1/clusterrolebindings/{name} | 
[**readGroup**](OapiApi.md#readGroup) | **GET** /oapi/v1/groups/{name} | 
[**readHostSubnet**](OapiApi.md#readHostSubnet) | **GET** /oapi/v1/hostsubnets/{name} | 
[**readIdentity**](OapiApi.md#readIdentity) | **GET** /oapi/v1/identities/{name} | 
[**readImage**](OapiApi.md#readImage) | **GET** /oapi/v1/images/{name} | 
[**readNamespacedAppliedClusterResourceQuota**](OapiApi.md#readNamespacedAppliedClusterResourceQuota) | **GET** /oapi/v1/namespaces/{namespace}/appliedclusterresourcequotas/{name} | 
[**readNamespacedBuild**](OapiApi.md#readNamespacedBuild) | **GET** /oapi/v1/namespaces/{namespace}/builds/{name} | 
[**readNamespacedBuildConfig**](OapiApi.md#readNamespacedBuildConfig) | **GET** /oapi/v1/namespaces/{namespace}/buildconfigs/{name} | 
[**readNamespacedBuildLogLog**](OapiApi.md#readNamespacedBuildLogLog) | **GET** /oapi/v1/namespaces/{namespace}/builds/{name}/log | 
[**readNamespacedDeploymentConfig**](OapiApi.md#readNamespacedDeploymentConfig) | **GET** /oapi/v1/namespaces/{namespace}/deploymentconfigs/{name} | 
[**readNamespacedDeploymentConfigStatus**](OapiApi.md#readNamespacedDeploymentConfigStatus) | **GET** /oapi/v1/namespaces/{namespace}/deploymentconfigs/{name}/status | 
[**readNamespacedDeploymentLogLog**](OapiApi.md#readNamespacedDeploymentLogLog) | **GET** /oapi/v1/namespaces/{namespace}/deploymentconfigs/{name}/log | 
[**readNamespacedEgressNetworkPolicy**](OapiApi.md#readNamespacedEgressNetworkPolicy) | **GET** /oapi/v1/namespaces/{namespace}/egressnetworkpolicies/{name} | 
[**readNamespacedImageStream**](OapiApi.md#readNamespacedImageStream) | **GET** /oapi/v1/namespaces/{namespace}/imagestreams/{name} | 
[**readNamespacedImageStreamImage**](OapiApi.md#readNamespacedImageStreamImage) | **GET** /oapi/v1/namespaces/{namespace}/imagestreamimages/{name} | 
[**readNamespacedImageStreamStatus**](OapiApi.md#readNamespacedImageStreamStatus) | **GET** /oapi/v1/namespaces/{namespace}/imagestreams/{name}/status | 
[**readNamespacedImageStreamTag**](OapiApi.md#readNamespacedImageStreamTag) | **GET** /oapi/v1/namespaces/{namespace}/imagestreamtags/{name} | 
[**readNamespacedPolicy**](OapiApi.md#readNamespacedPolicy) | **GET** /oapi/v1/namespaces/{namespace}/policies/{name} | 
[**readNamespacedPolicyBinding**](OapiApi.md#readNamespacedPolicyBinding) | **GET** /oapi/v1/namespaces/{namespace}/policybindings/{name} | 
[**readNamespacedRole**](OapiApi.md#readNamespacedRole) | **GET** /oapi/v1/namespaces/{namespace}/roles/{name} | 
[**readNamespacedRoleBinding**](OapiApi.md#readNamespacedRoleBinding) | **GET** /oapi/v1/namespaces/{namespace}/rolebindings/{name} | 
[**readNamespacedRoleBindingRestriction**](OapiApi.md#readNamespacedRoleBindingRestriction) | **GET** /oapi/v1/namespaces/{namespace}/rolebindingrestrictions/{name} | 
[**readNamespacedRoute**](OapiApi.md#readNamespacedRoute) | **GET** /oapi/v1/namespaces/{namespace}/routes/{name} | 
[**readNamespacedRouteStatus**](OapiApi.md#readNamespacedRouteStatus) | **GET** /oapi/v1/namespaces/{namespace}/routes/{name}/status | 
[**readNamespacedScaleScale**](OapiApi.md#readNamespacedScaleScale) | **GET** /oapi/v1/namespaces/{namespace}/deploymentconfigs/{name}/scale | 
[**readNamespacedSecretListSecrets**](OapiApi.md#readNamespacedSecretListSecrets) | **GET** /oapi/v1/namespaces/{namespace}/imagestreams/{name}/secrets | 
[**readNamespacedTemplate**](OapiApi.md#readNamespacedTemplate) | **GET** /oapi/v1/namespaces/{namespace}/templates/{name} | 
[**readNetNamespace**](OapiApi.md#readNetNamespace) | **GET** /oapi/v1/netnamespaces/{name} | 
[**readOAuthAccessToken**](OapiApi.md#readOAuthAccessToken) | **GET** /oapi/v1/oauthaccesstokens/{name} | 
[**readOAuthAuthorizeToken**](OapiApi.md#readOAuthAuthorizeToken) | **GET** /oapi/v1/oauthauthorizetokens/{name} | 
[**readOAuthClient**](OapiApi.md#readOAuthClient) | **GET** /oapi/v1/oauthclients/{name} | 
[**readOAuthClientAuthorization**](OapiApi.md#readOAuthClientAuthorization) | **GET** /oapi/v1/oauthclientauthorizations/{name} | 
[**readProject**](OapiApi.md#readProject) | **GET** /oapi/v1/projects/{name} | 
[**readUser**](OapiApi.md#readUser) | **GET** /oapi/v1/users/{name} | 
[**readUserIdentityMapping**](OapiApi.md#readUserIdentityMapping) | **GET** /oapi/v1/useridentitymappings/{name} | 
[**replaceClusterNetwork**](OapiApi.md#replaceClusterNetwork) | **PUT** /oapi/v1/clusternetworks/{name} | 
[**replaceClusterPolicy**](OapiApi.md#replaceClusterPolicy) | **PUT** /oapi/v1/clusterpolicies/{name} | 
[**replaceClusterPolicyBinding**](OapiApi.md#replaceClusterPolicyBinding) | **PUT** /oapi/v1/clusterpolicybindings/{name} | 
[**replaceClusterResourceQuota**](OapiApi.md#replaceClusterResourceQuota) | **PUT** /oapi/v1/clusterresourcequotas/{name} | 
[**replaceClusterResourceQuotaStatus**](OapiApi.md#replaceClusterResourceQuotaStatus) | **PUT** /oapi/v1/clusterresourcequotas/{name}/status | 
[**replaceClusterRole**](OapiApi.md#replaceClusterRole) | **PUT** /oapi/v1/clusterroles/{name} | 
[**replaceClusterRoleBinding**](OapiApi.md#replaceClusterRoleBinding) | **PUT** /oapi/v1/clusterrolebindings/{name} | 
[**replaceGroup**](OapiApi.md#replaceGroup) | **PUT** /oapi/v1/groups/{name} | 
[**replaceHostSubnet**](OapiApi.md#replaceHostSubnet) | **PUT** /oapi/v1/hostsubnets/{name} | 
[**replaceIdentity**](OapiApi.md#replaceIdentity) | **PUT** /oapi/v1/identities/{name} | 
[**replaceImage**](OapiApi.md#replaceImage) | **PUT** /oapi/v1/images/{name} | 
[**replaceNamespacedBuild**](OapiApi.md#replaceNamespacedBuild) | **PUT** /oapi/v1/namespaces/{namespace}/builds/{name} | 
[**replaceNamespacedBuildConfig**](OapiApi.md#replaceNamespacedBuildConfig) | **PUT** /oapi/v1/namespaces/{namespace}/buildconfigs/{name} | 
[**replaceNamespacedBuildDetails**](OapiApi.md#replaceNamespacedBuildDetails) | **PUT** /oapi/v1/namespaces/{namespace}/builds/{name}/details | 
[**replaceNamespacedDeploymentConfig**](OapiApi.md#replaceNamespacedDeploymentConfig) | **PUT** /oapi/v1/namespaces/{namespace}/deploymentconfigs/{name} | 
[**replaceNamespacedDeploymentConfigStatus**](OapiApi.md#replaceNamespacedDeploymentConfigStatus) | **PUT** /oapi/v1/namespaces/{namespace}/deploymentconfigs/{name}/status | 
[**replaceNamespacedEgressNetworkPolicy**](OapiApi.md#replaceNamespacedEgressNetworkPolicy) | **PUT** /oapi/v1/namespaces/{namespace}/egressnetworkpolicies/{name} | 
[**replaceNamespacedImageStream**](OapiApi.md#replaceNamespacedImageStream) | **PUT** /oapi/v1/namespaces/{namespace}/imagestreams/{name} | 
[**replaceNamespacedImageStreamStatus**](OapiApi.md#replaceNamespacedImageStreamStatus) | **PUT** /oapi/v1/namespaces/{namespace}/imagestreams/{name}/status | 
[**replaceNamespacedImageStreamTag**](OapiApi.md#replaceNamespacedImageStreamTag) | **PUT** /oapi/v1/namespaces/{namespace}/imagestreamtags/{name} | 
[**replaceNamespacedPolicy**](OapiApi.md#replaceNamespacedPolicy) | **PUT** /oapi/v1/namespaces/{namespace}/policies/{name} | 
[**replaceNamespacedPolicyBinding**](OapiApi.md#replaceNamespacedPolicyBinding) | **PUT** /oapi/v1/namespaces/{namespace}/policybindings/{name} | 
[**replaceNamespacedRole**](OapiApi.md#replaceNamespacedRole) | **PUT** /oapi/v1/namespaces/{namespace}/roles/{name} | 
[**replaceNamespacedRoleBinding**](OapiApi.md#replaceNamespacedRoleBinding) | **PUT** /oapi/v1/namespaces/{namespace}/rolebindings/{name} | 
[**replaceNamespacedRoleBindingRestriction**](OapiApi.md#replaceNamespacedRoleBindingRestriction) | **PUT** /oapi/v1/namespaces/{namespace}/rolebindingrestrictions/{name} | 
[**replaceNamespacedRoute**](OapiApi.md#replaceNamespacedRoute) | **PUT** /oapi/v1/namespaces/{namespace}/routes/{name} | 
[**replaceNamespacedRouteStatus**](OapiApi.md#replaceNamespacedRouteStatus) | **PUT** /oapi/v1/namespaces/{namespace}/routes/{name}/status | 
[**replaceNamespacedScaleScale**](OapiApi.md#replaceNamespacedScaleScale) | **PUT** /oapi/v1/namespaces/{namespace}/deploymentconfigs/{name}/scale | 
[**replaceNamespacedTemplate**](OapiApi.md#replaceNamespacedTemplate) | **PUT** /oapi/v1/namespaces/{namespace}/templates/{name} | 
[**replaceNetNamespace**](OapiApi.md#replaceNetNamespace) | **PUT** /oapi/v1/netnamespaces/{name} | 
[**replaceOAuthAccessToken**](OapiApi.md#replaceOAuthAccessToken) | **PUT** /oapi/v1/oauthaccesstokens/{name} | 
[**replaceOAuthAuthorizeToken**](OapiApi.md#replaceOAuthAuthorizeToken) | **PUT** /oapi/v1/oauthauthorizetokens/{name} | 
[**replaceOAuthClient**](OapiApi.md#replaceOAuthClient) | **PUT** /oapi/v1/oauthclients/{name} | 
[**replaceOAuthClientAuthorization**](OapiApi.md#replaceOAuthClientAuthorization) | **PUT** /oapi/v1/oauthclientauthorizations/{name} | 
[**replaceProject**](OapiApi.md#replaceProject) | **PUT** /oapi/v1/projects/{name} | 
[**replaceUser**](OapiApi.md#replaceUser) | **PUT** /oapi/v1/users/{name} | 
[**replaceUserIdentityMapping**](OapiApi.md#replaceUserIdentityMapping) | **PUT** /oapi/v1/useridentitymappings/{name} | 
[**watchBuildConfigListForAllNamespaces**](OapiApi.md#watchBuildConfigListForAllNamespaces) | **GET** /oapi/v1/watch/buildconfigs | 
[**watchBuildListForAllNamespaces**](OapiApi.md#watchBuildListForAllNamespaces) | **GET** /oapi/v1/watch/builds | 
[**watchClusterNetwork**](OapiApi.md#watchClusterNetwork) | **GET** /oapi/v1/watch/clusternetworks/{name} | 
[**watchClusterNetworkList**](OapiApi.md#watchClusterNetworkList) | **GET** /oapi/v1/watch/clusternetworks | 
[**watchClusterPolicy**](OapiApi.md#watchClusterPolicy) | **GET** /oapi/v1/watch/clusterpolicies/{name} | 
[**watchClusterPolicyBinding**](OapiApi.md#watchClusterPolicyBinding) | **GET** /oapi/v1/watch/clusterpolicybindings/{name} | 
[**watchClusterPolicyBindingList**](OapiApi.md#watchClusterPolicyBindingList) | **GET** /oapi/v1/watch/clusterpolicybindings | 
[**watchClusterPolicyList**](OapiApi.md#watchClusterPolicyList) | **GET** /oapi/v1/watch/clusterpolicies | 
[**watchClusterResourceQuota**](OapiApi.md#watchClusterResourceQuota) | **GET** /oapi/v1/watch/clusterresourcequotas/{name} | 
[**watchClusterResourceQuotaList**](OapiApi.md#watchClusterResourceQuotaList) | **GET** /oapi/v1/watch/clusterresourcequotas | 
[**watchDeploymentConfigListForAllNamespaces**](OapiApi.md#watchDeploymentConfigListForAllNamespaces) | **GET** /oapi/v1/watch/deploymentconfigs | 
[**watchEgressNetworkPolicyListForAllNamespaces**](OapiApi.md#watchEgressNetworkPolicyListForAllNamespaces) | **GET** /oapi/v1/watch/egressnetworkpolicies | 
[**watchGroup**](OapiApi.md#watchGroup) | **GET** /oapi/v1/watch/groups/{name} | 
[**watchGroupList**](OapiApi.md#watchGroupList) | **GET** /oapi/v1/watch/groups | 
[**watchHostSubnet**](OapiApi.md#watchHostSubnet) | **GET** /oapi/v1/watch/hostsubnets/{name} | 
[**watchHostSubnetList**](OapiApi.md#watchHostSubnetList) | **GET** /oapi/v1/watch/hostsubnets | 
[**watchIdentity**](OapiApi.md#watchIdentity) | **GET** /oapi/v1/watch/identities/{name} | 
[**watchIdentityList**](OapiApi.md#watchIdentityList) | **GET** /oapi/v1/watch/identities | 
[**watchImage**](OapiApi.md#watchImage) | **GET** /oapi/v1/watch/images/{name} | 
[**watchImageList**](OapiApi.md#watchImageList) | **GET** /oapi/v1/watch/images | 
[**watchImageStreamListForAllNamespaces**](OapiApi.md#watchImageStreamListForAllNamespaces) | **GET** /oapi/v1/watch/imagestreams | 
[**watchNamespacedBuild**](OapiApi.md#watchNamespacedBuild) | **GET** /oapi/v1/watch/namespaces/{namespace}/builds/{name} | 
[**watchNamespacedBuildConfig**](OapiApi.md#watchNamespacedBuildConfig) | **GET** /oapi/v1/watch/namespaces/{namespace}/buildconfigs/{name} | 
[**watchNamespacedBuildConfigList**](OapiApi.md#watchNamespacedBuildConfigList) | **GET** /oapi/v1/watch/namespaces/{namespace}/buildconfigs | 
[**watchNamespacedBuildList**](OapiApi.md#watchNamespacedBuildList) | **GET** /oapi/v1/watch/namespaces/{namespace}/builds | 
[**watchNamespacedDeploymentConfig**](OapiApi.md#watchNamespacedDeploymentConfig) | **GET** /oapi/v1/watch/namespaces/{namespace}/deploymentconfigs/{name} | 
[**watchNamespacedDeploymentConfigList**](OapiApi.md#watchNamespacedDeploymentConfigList) | **GET** /oapi/v1/watch/namespaces/{namespace}/deploymentconfigs | 
[**watchNamespacedEgressNetworkPolicy**](OapiApi.md#watchNamespacedEgressNetworkPolicy) | **GET** /oapi/v1/watch/namespaces/{namespace}/egressnetworkpolicies/{name} | 
[**watchNamespacedEgressNetworkPolicyList**](OapiApi.md#watchNamespacedEgressNetworkPolicyList) | **GET** /oapi/v1/watch/namespaces/{namespace}/egressnetworkpolicies | 
[**watchNamespacedImageStream**](OapiApi.md#watchNamespacedImageStream) | **GET** /oapi/v1/watch/namespaces/{namespace}/imagestreams/{name} | 
[**watchNamespacedImageStreamList**](OapiApi.md#watchNamespacedImageStreamList) | **GET** /oapi/v1/watch/namespaces/{namespace}/imagestreams | 
[**watchNamespacedPolicy**](OapiApi.md#watchNamespacedPolicy) | **GET** /oapi/v1/watch/namespaces/{namespace}/policies/{name} | 
[**watchNamespacedPolicyBinding**](OapiApi.md#watchNamespacedPolicyBinding) | **GET** /oapi/v1/watch/namespaces/{namespace}/policybindings/{name} | 
[**watchNamespacedPolicyBindingList**](OapiApi.md#watchNamespacedPolicyBindingList) | **GET** /oapi/v1/watch/namespaces/{namespace}/policybindings | 
[**watchNamespacedPolicyList**](OapiApi.md#watchNamespacedPolicyList) | **GET** /oapi/v1/watch/namespaces/{namespace}/policies | 
[**watchNamespacedRoleBindingRestriction**](OapiApi.md#watchNamespacedRoleBindingRestriction) | **GET** /oapi/v1/watch/namespaces/{namespace}/rolebindingrestrictions/{name} | 
[**watchNamespacedRoleBindingRestrictionList**](OapiApi.md#watchNamespacedRoleBindingRestrictionList) | **GET** /oapi/v1/watch/namespaces/{namespace}/rolebindingrestrictions | 
[**watchNamespacedRoute**](OapiApi.md#watchNamespacedRoute) | **GET** /oapi/v1/watch/namespaces/{namespace}/routes/{name} | 
[**watchNamespacedRouteList**](OapiApi.md#watchNamespacedRouteList) | **GET** /oapi/v1/watch/namespaces/{namespace}/routes | 
[**watchNamespacedTemplate**](OapiApi.md#watchNamespacedTemplate) | **GET** /oapi/v1/watch/namespaces/{namespace}/templates/{name} | 
[**watchNamespacedTemplateList**](OapiApi.md#watchNamespacedTemplateList) | **GET** /oapi/v1/watch/namespaces/{namespace}/templates | 
[**watchNetNamespace**](OapiApi.md#watchNetNamespace) | **GET** /oapi/v1/watch/netnamespaces/{name} | 
[**watchNetNamespaceList**](OapiApi.md#watchNetNamespaceList) | **GET** /oapi/v1/watch/netnamespaces | 
[**watchOAuthAccessToken**](OapiApi.md#watchOAuthAccessToken) | **GET** /oapi/v1/watch/oauthaccesstokens/{name} | 
[**watchOAuthAccessTokenList**](OapiApi.md#watchOAuthAccessTokenList) | **GET** /oapi/v1/watch/oauthaccesstokens | 
[**watchOAuthAuthorizeToken**](OapiApi.md#watchOAuthAuthorizeToken) | **GET** /oapi/v1/watch/oauthauthorizetokens/{name} | 
[**watchOAuthAuthorizeTokenList**](OapiApi.md#watchOAuthAuthorizeTokenList) | **GET** /oapi/v1/watch/oauthauthorizetokens | 
[**watchOAuthClient**](OapiApi.md#watchOAuthClient) | **GET** /oapi/v1/watch/oauthclients/{name} | 
[**watchOAuthClientAuthorization**](OapiApi.md#watchOAuthClientAuthorization) | **GET** /oapi/v1/watch/oauthclientauthorizations/{name} | 
[**watchOAuthClientAuthorizationList**](OapiApi.md#watchOAuthClientAuthorizationList) | **GET** /oapi/v1/watch/oauthclientauthorizations | 
[**watchOAuthClientList**](OapiApi.md#watchOAuthClientList) | **GET** /oapi/v1/watch/oauthclients | 
[**watchPolicyBindingListForAllNamespaces**](OapiApi.md#watchPolicyBindingListForAllNamespaces) | **GET** /oapi/v1/watch/policybindings | 
[**watchPolicyListForAllNamespaces**](OapiApi.md#watchPolicyListForAllNamespaces) | **GET** /oapi/v1/watch/policies | 
[**watchProject**](OapiApi.md#watchProject) | **GET** /oapi/v1/watch/projects/{name} | 
[**watchProjectList**](OapiApi.md#watchProjectList) | **GET** /oapi/v1/watch/projects | 
[**watchRoleBindingRestrictionListForAllNamespaces**](OapiApi.md#watchRoleBindingRestrictionListForAllNamespaces) | **GET** /oapi/v1/watch/rolebindingrestrictions | 
[**watchRouteListForAllNamespaces**](OapiApi.md#watchRouteListForAllNamespaces) | **GET** /oapi/v1/watch/routes | 
[**watchTemplateListForAllNamespaces**](OapiApi.md#watchTemplateListForAllNamespaces) | **GET** /oapi/v1/watch/templates | 
[**watchUser**](OapiApi.md#watchUser) | **GET** /oapi/v1/watch/users/{name} | 
[**watchUserList**](OapiApi.md#watchUserList) | **GET** /oapi/v1/watch/users | 


# **connectPostNamespacedBinaryBuildRequestOptionsInstantiatebinary**
> string connectPostNamespacedBinaryBuildRequestOptionsInstantiatebinary($name, $namespace, $asFile, $revisionAuthorEmail, $revisionAuthorName, $revisionCommit, $revisionCommitterEmail, $revisionCommitterName, $revisionMessage)



connect POST requests to instantiatebinary of BinaryBuildRequestOptions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the BinaryBuildRequestOptions
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$asFile = "asFile_example"; // string | asFile determines if the binary should be created as a file within the source rather than extracted as an archive
$revisionAuthorEmail = "revisionAuthorEmail_example"; // string | revision.authorEmail of the source control user
$revisionAuthorName = "revisionAuthorName_example"; // string | revision.authorName of the source control user
$revisionCommit = "revisionCommit_example"; // string | revision.commit is the value identifying a specific commit
$revisionCommitterEmail = "revisionCommitterEmail_example"; // string | revision.committerEmail of the source control user
$revisionCommitterName = "revisionCommitterName_example"; // string | revision.committerName of the source control user
$revisionMessage = "revisionMessage_example"; // string | revision.message is the description of a specific commit

try {
    $result = $api_instance->connectPostNamespacedBinaryBuildRequestOptionsInstantiatebinary($name, $namespace, $asFile, $revisionAuthorEmail, $revisionAuthorName, $revisionCommit, $revisionCommitterEmail, $revisionCommitterName, $revisionMessage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->connectPostNamespacedBinaryBuildRequestOptionsInstantiatebinary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the BinaryBuildRequestOptions |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **asFile** | **string**| asFile determines if the binary should be created as a file within the source rather than extracted as an archive | [optional]
 **revisionAuthorEmail** | **string**| revision.authorEmail of the source control user | [optional]
 **revisionAuthorName** | **string**| revision.authorName of the source control user | [optional]
 **revisionCommit** | **string**| revision.commit is the value identifying a specific commit | [optional]
 **revisionCommitterEmail** | **string**| revision.committerEmail of the source control user | [optional]
 **revisionCommitterName** | **string**| revision.committerName of the source control user | [optional]
 **revisionMessage** | **string**| revision.message is the description of a specific commit | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **connectPostNamespacedBuildWebhooks**
> string connectPostNamespacedBuildWebhooks($name, $namespace, $path)



connect POST requests to webhooks of Build

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Build
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$path = "path_example"; // string | Path is the URL path to use for the current proxy request to pod.

try {
    $result = $api_instance->connectPostNamespacedBuildWebhooks($name, $namespace, $path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->connectPostNamespacedBuildWebhooks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Build |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **path** | **string**| Path is the URL path to use for the current proxy request to pod. | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **connectPostNamespacedBuildWebhooksWithPath**
> string connectPostNamespacedBuildWebhooksWithPath($name, $namespace, $path, $path2)



connect POST requests to webhooks of Build

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Build
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$path = "path_example"; // string | path to the resource
$path2 = "path_example"; // string | Path is the URL path to use for the current proxy request to pod.

try {
    $result = $api_instance->connectPostNamespacedBuildWebhooksWithPath($name, $namespace, $path, $path2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->connectPostNamespacedBuildWebhooksWithPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Build |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **path** | **string**| path to the resource |
 **path2** | **string**| Path is the URL path to use for the current proxy request to pod. | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createBuildConfigForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1BuildConfig createBuildConfigForAllNamespaces($body, $pretty)



create a BuildConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1BuildConfig(); // \UniversityOfAdelaide\OpenShift\Model\V1BuildConfig | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createBuildConfigForAllNamespaces($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createBuildConfigForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1BuildConfig**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1BuildConfig.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1BuildConfig**](../Model/V1BuildConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createBuildForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1Build createBuildForAllNamespaces($body, $pretty)



create a Build

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Build(); // \UniversityOfAdelaide\OpenShift\Model\V1Build | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createBuildForAllNamespaces($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createBuildForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Build**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Build.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Build**](../Model/V1Build.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createClusterNetwork**
> \UniversityOfAdelaide\OpenShift\Model\V1ClusterNetwork createClusterNetwork($body, $pretty)



create a ClusterNetwork

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1ClusterNetwork(); // \UniversityOfAdelaide\OpenShift\Model\V1ClusterNetwork | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createClusterNetwork($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createClusterNetwork: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1ClusterNetwork**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1ClusterNetwork.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ClusterNetwork**](../Model/V1ClusterNetwork.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createClusterPolicy**
> \UniversityOfAdelaide\OpenShift\Model\V1ClusterPolicy createClusterPolicy($body, $pretty)



create a ClusterPolicy

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1ClusterPolicy(); // \UniversityOfAdelaide\OpenShift\Model\V1ClusterPolicy | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createClusterPolicy($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createClusterPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1ClusterPolicy**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1ClusterPolicy.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ClusterPolicy**](../Model/V1ClusterPolicy.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createClusterPolicyBinding**
> \UniversityOfAdelaide\OpenShift\Model\V1ClusterPolicyBinding createClusterPolicyBinding($body, $pretty)



create a ClusterPolicyBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1ClusterPolicyBinding(); // \UniversityOfAdelaide\OpenShift\Model\V1ClusterPolicyBinding | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createClusterPolicyBinding($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createClusterPolicyBinding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1ClusterPolicyBinding**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1ClusterPolicyBinding.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ClusterPolicyBinding**](../Model/V1ClusterPolicyBinding.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createClusterResourceQuota**
> \UniversityOfAdelaide\OpenShift\Model\V1ClusterResourceQuota createClusterResourceQuota($body, $pretty)



create a ClusterResourceQuota

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1ClusterResourceQuota(); // \UniversityOfAdelaide\OpenShift\Model\V1ClusterResourceQuota | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createClusterResourceQuota($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createClusterResourceQuota: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1ClusterResourceQuota**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1ClusterResourceQuota.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ClusterResourceQuota**](../Model/V1ClusterResourceQuota.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createClusterRole**
> \UniversityOfAdelaide\OpenShift\Model\V1ClusterRole createClusterRole($body, $pretty)



create a ClusterRole

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1ClusterRole(); // \UniversityOfAdelaide\OpenShift\Model\V1ClusterRole | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createClusterRole($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createClusterRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1ClusterRole**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1ClusterRole.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ClusterRole**](../Model/V1ClusterRole.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createClusterRoleBinding**
> \UniversityOfAdelaide\OpenShift\Model\V1ClusterRoleBinding createClusterRoleBinding($body, $pretty)



create a ClusterRoleBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1ClusterRoleBinding(); // \UniversityOfAdelaide\OpenShift\Model\V1ClusterRoleBinding | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createClusterRoleBinding($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createClusterRoleBinding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1ClusterRoleBinding**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1ClusterRoleBinding.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ClusterRoleBinding**](../Model/V1ClusterRoleBinding.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDeploymentConfigForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig createDeploymentConfigForAllNamespaces($body, $pretty)



create a DeploymentConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig(); // \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createDeploymentConfigForAllNamespaces($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createDeploymentConfigForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig**](../Model/V1DeploymentConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDeploymentConfigRollbackForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfigRollback createDeploymentConfigRollbackForAllNamespaces($body, $pretty)



create a DeploymentConfigRollback

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfigRollback(); // \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfigRollback | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createDeploymentConfigRollbackForAllNamespaces($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createDeploymentConfigRollbackForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfigRollback**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfigRollback.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfigRollback**](../Model/V1DeploymentConfigRollback.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createEgressNetworkPolicyForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1EgressNetworkPolicy createEgressNetworkPolicyForAllNamespaces($body, $pretty)



create an EgressNetworkPolicy

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1EgressNetworkPolicy(); // \UniversityOfAdelaide\OpenShift\Model\V1EgressNetworkPolicy | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createEgressNetworkPolicyForAllNamespaces($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createEgressNetworkPolicyForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1EgressNetworkPolicy**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1EgressNetworkPolicy.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1EgressNetworkPolicy**](../Model/V1EgressNetworkPolicy.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createGroup**
> \UniversityOfAdelaide\OpenShift\Model\V1Group createGroup($body, $pretty)



create a Group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Group(); // \UniversityOfAdelaide\OpenShift\Model\V1Group | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createGroup($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Group**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Group.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Group**](../Model/V1Group.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createHostSubnet**
> \UniversityOfAdelaide\OpenShift\Model\V1HostSubnet createHostSubnet($body, $pretty)



create a HostSubnet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1HostSubnet(); // \UniversityOfAdelaide\OpenShift\Model\V1HostSubnet | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createHostSubnet($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createHostSubnet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1HostSubnet**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1HostSubnet.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1HostSubnet**](../Model/V1HostSubnet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createIdentity**
> \UniversityOfAdelaide\OpenShift\Model\V1Identity createIdentity($body, $pretty)



create an Identity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Identity(); // \UniversityOfAdelaide\OpenShift\Model\V1Identity | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createIdentity($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createIdentity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Identity**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Identity.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Identity**](../Model/V1Identity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createImage**
> \UniversityOfAdelaide\OpenShift\Model\V1Image createImage($body, $pretty)



create an Image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Image(); // \UniversityOfAdelaide\OpenShift\Model\V1Image | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createImage($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Image**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Image.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Image**](../Model/V1Image.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createImageSignature**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageSignature createImageSignature($body, $pretty)



create an ImageSignature

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1ImageSignature(); // \UniversityOfAdelaide\OpenShift\Model\V1ImageSignature | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createImageSignature($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createImageSignature: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1ImageSignature**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1ImageSignature.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageSignature**](../Model/V1ImageSignature.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createImageStreamForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageStream createImageStreamForAllNamespaces($body, $pretty)



create an ImageStream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1ImageStream(); // \UniversityOfAdelaide\OpenShift\Model\V1ImageStream | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createImageStreamForAllNamespaces($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createImageStreamForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1ImageStream**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1ImageStream.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageStream**](../Model/V1ImageStream.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createImageStreamImportForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamImport createImageStreamImportForAllNamespaces($body, $pretty)



create an ImageStreamImport

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamImport(); // \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamImport | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createImageStreamImportForAllNamespaces($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createImageStreamImportForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamImport**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamImport.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamImport**](../Model/V1ImageStreamImport.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createImageStreamMappingForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamMapping createImageStreamMappingForAllNamespaces($body, $pretty)



create an ImageStreamMapping

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamMapping(); // \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamMapping | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createImageStreamMappingForAllNamespaces($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createImageStreamMappingForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamMapping**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamMapping.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamMapping**](../Model/V1ImageStreamMapping.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createImageStreamTagForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTag createImageStreamTagForAllNamespaces($body, $pretty)



create an ImageStreamTag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTag(); // \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTag | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createImageStreamTagForAllNamespaces($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createImageStreamTagForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTag**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTag.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTag**](../Model/V1ImageStreamTag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createLocalResourceAccessReviewForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1LocalResourceAccessReview createLocalResourceAccessReviewForAllNamespaces($body, $pretty)



create a LocalResourceAccessReview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1LocalResourceAccessReview(); // \UniversityOfAdelaide\OpenShift\Model\V1LocalResourceAccessReview | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createLocalResourceAccessReviewForAllNamespaces($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createLocalResourceAccessReviewForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1LocalResourceAccessReview**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1LocalResourceAccessReview.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1LocalResourceAccessReview**](../Model/V1LocalResourceAccessReview.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createLocalSubjectAccessReviewForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1LocalSubjectAccessReview createLocalSubjectAccessReviewForAllNamespaces($body, $pretty)



create a LocalSubjectAccessReview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1LocalSubjectAccessReview(); // \UniversityOfAdelaide\OpenShift\Model\V1LocalSubjectAccessReview | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createLocalSubjectAccessReviewForAllNamespaces($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createLocalSubjectAccessReviewForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1LocalSubjectAccessReview**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1LocalSubjectAccessReview.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1LocalSubjectAccessReview**](../Model/V1LocalSubjectAccessReview.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNamespacedBuild**
> \UniversityOfAdelaide\OpenShift\Model\V1Build createNamespacedBuild($namespace, $body, $pretty)



create a Build

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Build(); // \UniversityOfAdelaide\OpenShift\Model\V1Build | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createNamespacedBuild($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createNamespacedBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Build**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Build.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Build**](../Model/V1Build.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNamespacedBuildConfig**
> \UniversityOfAdelaide\OpenShift\Model\V1BuildConfig createNamespacedBuildConfig($namespace, $body, $pretty)



create a BuildConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1BuildConfig(); // \UniversityOfAdelaide\OpenShift\Model\V1BuildConfig | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createNamespacedBuildConfig($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createNamespacedBuildConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1BuildConfig**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1BuildConfig.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1BuildConfig**](../Model/V1BuildConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNamespacedBuildRequestClone**
> \UniversityOfAdelaide\OpenShift\Model\V1BuildRequest createNamespacedBuildRequestClone($name, $namespace, $body, $pretty)



create clone of a BuildRequest

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the BuildRequest
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1BuildRequest(); // \UniversityOfAdelaide\OpenShift\Model\V1BuildRequest | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createNamespacedBuildRequestClone($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createNamespacedBuildRequestClone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the BuildRequest |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1BuildRequest**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1BuildRequest.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1BuildRequest**](../Model/V1BuildRequest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNamespacedBuildRequestInstantiate**
> \UniversityOfAdelaide\OpenShift\Model\V1BuildRequest createNamespacedBuildRequestInstantiate($name, $namespace, $body, $pretty)



create instantiate of a BuildRequest

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the BuildRequest
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1BuildRequest(); // \UniversityOfAdelaide\OpenShift\Model\V1BuildRequest | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createNamespacedBuildRequestInstantiate($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createNamespacedBuildRequestInstantiate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the BuildRequest |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1BuildRequest**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1BuildRequest.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1BuildRequest**](../Model/V1BuildRequest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNamespacedDeploymentConfig**
> \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig createNamespacedDeploymentConfig($namespace, $body, $pretty)



create a DeploymentConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig(); // \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createNamespacedDeploymentConfig($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createNamespacedDeploymentConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig**](../Model/V1DeploymentConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNamespacedDeploymentConfigRollback**
> \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfigRollback createNamespacedDeploymentConfigRollback($namespace, $body, $pretty)



create a DeploymentConfigRollback

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfigRollback(); // \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfigRollback | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createNamespacedDeploymentConfigRollback($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createNamespacedDeploymentConfigRollback: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfigRollback**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfigRollback.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfigRollback**](../Model/V1DeploymentConfigRollback.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNamespacedDeploymentConfigRollbackRollback**
> \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfigRollback createNamespacedDeploymentConfigRollbackRollback($name, $namespace, $body, $pretty)



create rollback of a DeploymentConfigRollback

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the DeploymentConfigRollback
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfigRollback(); // \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfigRollback | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createNamespacedDeploymentConfigRollbackRollback($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createNamespacedDeploymentConfigRollbackRollback: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the DeploymentConfigRollback |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfigRollback**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfigRollback.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfigRollback**](../Model/V1DeploymentConfigRollback.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNamespacedDeploymentRequestInstantiate**
> \UniversityOfAdelaide\OpenShift\Model\V1DeploymentRequest createNamespacedDeploymentRequestInstantiate($name, $namespace, $body, $pretty)



create instantiate of a DeploymentRequest

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the DeploymentRequest
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeploymentRequest(); // \UniversityOfAdelaide\OpenShift\Model\V1DeploymentRequest | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createNamespacedDeploymentRequestInstantiate($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createNamespacedDeploymentRequestInstantiate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the DeploymentRequest |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1DeploymentRequest**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1DeploymentRequest.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1DeploymentRequest**](../Model/V1DeploymentRequest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNamespacedEgressNetworkPolicy**
> \UniversityOfAdelaide\OpenShift\Model\V1EgressNetworkPolicy createNamespacedEgressNetworkPolicy($namespace, $body, $pretty)



create an EgressNetworkPolicy

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1EgressNetworkPolicy(); // \UniversityOfAdelaide\OpenShift\Model\V1EgressNetworkPolicy | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createNamespacedEgressNetworkPolicy($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createNamespacedEgressNetworkPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1EgressNetworkPolicy**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1EgressNetworkPolicy.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1EgressNetworkPolicy**](../Model/V1EgressNetworkPolicy.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNamespacedImageStream**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageStream createNamespacedImageStream($namespace, $body, $pretty)



create an ImageStream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1ImageStream(); // \UniversityOfAdelaide\OpenShift\Model\V1ImageStream | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createNamespacedImageStream($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createNamespacedImageStream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1ImageStream**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1ImageStream.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageStream**](../Model/V1ImageStream.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNamespacedImageStreamImport**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamImport createNamespacedImageStreamImport($namespace, $body, $pretty)



create an ImageStreamImport

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamImport(); // \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamImport | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createNamespacedImageStreamImport($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createNamespacedImageStreamImport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamImport**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamImport.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamImport**](../Model/V1ImageStreamImport.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNamespacedImageStreamMapping**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamMapping createNamespacedImageStreamMapping($namespace, $body, $pretty)



create an ImageStreamMapping

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamMapping(); // \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamMapping | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createNamespacedImageStreamMapping($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createNamespacedImageStreamMapping: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamMapping**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamMapping.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamMapping**](../Model/V1ImageStreamMapping.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNamespacedImageStreamTag**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTag createNamespacedImageStreamTag($namespace, $body, $pretty)



create an ImageStreamTag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTag(); // \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTag | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createNamespacedImageStreamTag($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createNamespacedImageStreamTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTag**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTag.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTag**](../Model/V1ImageStreamTag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNamespacedLocalResourceAccessReview**
> \UniversityOfAdelaide\OpenShift\Model\V1LocalResourceAccessReview createNamespacedLocalResourceAccessReview($namespace, $body, $pretty)



create a LocalResourceAccessReview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1LocalResourceAccessReview(); // \UniversityOfAdelaide\OpenShift\Model\V1LocalResourceAccessReview | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createNamespacedLocalResourceAccessReview($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createNamespacedLocalResourceAccessReview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1LocalResourceAccessReview**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1LocalResourceAccessReview.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1LocalResourceAccessReview**](../Model/V1LocalResourceAccessReview.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNamespacedLocalSubjectAccessReview**
> \UniversityOfAdelaide\OpenShift\Model\V1LocalSubjectAccessReview createNamespacedLocalSubjectAccessReview($namespace, $body, $pretty)



create a LocalSubjectAccessReview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1LocalSubjectAccessReview(); // \UniversityOfAdelaide\OpenShift\Model\V1LocalSubjectAccessReview | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createNamespacedLocalSubjectAccessReview($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createNamespacedLocalSubjectAccessReview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1LocalSubjectAccessReview**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1LocalSubjectAccessReview.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1LocalSubjectAccessReview**](../Model/V1LocalSubjectAccessReview.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNamespacedPodSecurityPolicyReview**
> \UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicyReview createNamespacedPodSecurityPolicyReview($namespace, $body, $pretty)



create a PodSecurityPolicyReview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicyReview(); // \UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicyReview | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createNamespacedPodSecurityPolicyReview($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createNamespacedPodSecurityPolicyReview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicyReview**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicyReview.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicyReview**](../Model/V1PodSecurityPolicyReview.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNamespacedPodSecurityPolicySelfSubjectReview**
> \UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySelfSubjectReview createNamespacedPodSecurityPolicySelfSubjectReview($namespace, $body, $pretty)



create a PodSecurityPolicySelfSubjectReview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySelfSubjectReview(); // \UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySelfSubjectReview | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createNamespacedPodSecurityPolicySelfSubjectReview($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createNamespacedPodSecurityPolicySelfSubjectReview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySelfSubjectReview**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySelfSubjectReview.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySelfSubjectReview**](../Model/V1PodSecurityPolicySelfSubjectReview.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNamespacedPodSecurityPolicySubjectReview**
> \UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySubjectReview createNamespacedPodSecurityPolicySubjectReview($namespace, $body, $pretty)



create a PodSecurityPolicySubjectReview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySubjectReview(); // \UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySubjectReview | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createNamespacedPodSecurityPolicySubjectReview($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createNamespacedPodSecurityPolicySubjectReview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySubjectReview**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySubjectReview.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySubjectReview**](../Model/V1PodSecurityPolicySubjectReview.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNamespacedPolicy**
> \UniversityOfAdelaide\OpenShift\Model\V1Policy createNamespacedPolicy($namespace, $body, $pretty)



create a Policy

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Policy(); // \UniversityOfAdelaide\OpenShift\Model\V1Policy | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createNamespacedPolicy($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createNamespacedPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Policy**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Policy.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Policy**](../Model/V1Policy.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNamespacedPolicyBinding**
> \UniversityOfAdelaide\OpenShift\Model\V1PolicyBinding createNamespacedPolicyBinding($namespace, $body, $pretty)



create a PolicyBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1PolicyBinding(); // \UniversityOfAdelaide\OpenShift\Model\V1PolicyBinding | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createNamespacedPolicyBinding($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createNamespacedPolicyBinding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1PolicyBinding**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1PolicyBinding.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1PolicyBinding**](../Model/V1PolicyBinding.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNamespacedResourceAccessReview**
> \UniversityOfAdelaide\OpenShift\Model\V1ResourceAccessReview createNamespacedResourceAccessReview($namespace, $body, $pretty)



create a ResourceAccessReview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1ResourceAccessReview(); // \UniversityOfAdelaide\OpenShift\Model\V1ResourceAccessReview | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createNamespacedResourceAccessReview($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createNamespacedResourceAccessReview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1ResourceAccessReview**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1ResourceAccessReview.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ResourceAccessReview**](../Model/V1ResourceAccessReview.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNamespacedRole**
> \UniversityOfAdelaide\OpenShift\Model\V1Role createNamespacedRole($namespace, $body, $pretty)



create a Role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Role(); // \UniversityOfAdelaide\OpenShift\Model\V1Role | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createNamespacedRole($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createNamespacedRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Role**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Role.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Role**](../Model/V1Role.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNamespacedRoleBinding**
> \UniversityOfAdelaide\OpenShift\Model\V1RoleBinding createNamespacedRoleBinding($namespace, $body, $pretty)



create a RoleBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1RoleBinding(); // \UniversityOfAdelaide\OpenShift\Model\V1RoleBinding | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createNamespacedRoleBinding($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createNamespacedRoleBinding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1RoleBinding**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1RoleBinding.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1RoleBinding**](../Model/V1RoleBinding.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNamespacedRoleBindingRestriction**
> \UniversityOfAdelaide\OpenShift\Model\V1RoleBindingRestriction createNamespacedRoleBindingRestriction($namespace, $body, $pretty)



create a RoleBindingRestriction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1RoleBindingRestriction(); // \UniversityOfAdelaide\OpenShift\Model\V1RoleBindingRestriction | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createNamespacedRoleBindingRestriction($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createNamespacedRoleBindingRestriction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1RoleBindingRestriction**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1RoleBindingRestriction.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1RoleBindingRestriction**](../Model/V1RoleBindingRestriction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNamespacedRoute**
> \UniversityOfAdelaide\OpenShift\Model\V1Route createNamespacedRoute($namespace, $body, $pretty)



create a Route

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Route(); // \UniversityOfAdelaide\OpenShift\Model\V1Route | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createNamespacedRoute($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createNamespacedRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Route**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Route.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Route**](../Model/V1Route.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNamespacedSelfSubjectRulesReview**
> \UniversityOfAdelaide\OpenShift\Model\V1SelfSubjectRulesReview createNamespacedSelfSubjectRulesReview($namespace, $body, $pretty)



create a SelfSubjectRulesReview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1SelfSubjectRulesReview(); // \UniversityOfAdelaide\OpenShift\Model\V1SelfSubjectRulesReview | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createNamespacedSelfSubjectRulesReview($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createNamespacedSelfSubjectRulesReview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1SelfSubjectRulesReview**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1SelfSubjectRulesReview.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1SelfSubjectRulesReview**](../Model/V1SelfSubjectRulesReview.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNamespacedSubjectAccessReview**
> \UniversityOfAdelaide\OpenShift\Model\V1SubjectAccessReview createNamespacedSubjectAccessReview($namespace, $body, $pretty)



create a SubjectAccessReview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1SubjectAccessReview(); // \UniversityOfAdelaide\OpenShift\Model\V1SubjectAccessReview | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createNamespacedSubjectAccessReview($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createNamespacedSubjectAccessReview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1SubjectAccessReview**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1SubjectAccessReview.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1SubjectAccessReview**](../Model/V1SubjectAccessReview.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNamespacedSubjectRulesReview**
> \UniversityOfAdelaide\OpenShift\Model\V1SubjectRulesReview createNamespacedSubjectRulesReview($namespace, $body, $pretty)



create a SubjectRulesReview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1SubjectRulesReview(); // \UniversityOfAdelaide\OpenShift\Model\V1SubjectRulesReview | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createNamespacedSubjectRulesReview($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createNamespacedSubjectRulesReview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1SubjectRulesReview**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1SubjectRulesReview.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1SubjectRulesReview**](../Model/V1SubjectRulesReview.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNamespacedTemplate**
> \UniversityOfAdelaide\OpenShift\Model\V1Template createNamespacedTemplate($namespace, $body, $pretty)



create a Template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Template(); // \UniversityOfAdelaide\OpenShift\Model\V1Template | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createNamespacedTemplate($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createNamespacedTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Template**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Template.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Template**](../Model/V1Template.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNetNamespace**
> \UniversityOfAdelaide\OpenShift\Model\V1NetNamespace createNetNamespace($body, $pretty)



create a NetNamespace

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1NetNamespace(); // \UniversityOfAdelaide\OpenShift\Model\V1NetNamespace | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createNetNamespace($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createNetNamespace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1NetNamespace**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1NetNamespace.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1NetNamespace**](../Model/V1NetNamespace.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOAuthAccessToken**
> \UniversityOfAdelaide\OpenShift\Model\V1OAuthAccessToken createOAuthAccessToken($body, $pretty)



create an OAuthAccessToken

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1OAuthAccessToken(); // \UniversityOfAdelaide\OpenShift\Model\V1OAuthAccessToken | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createOAuthAccessToken($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createOAuthAccessToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1OAuthAccessToken**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1OAuthAccessToken.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1OAuthAccessToken**](../Model/V1OAuthAccessToken.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOAuthAuthorizeToken**
> \UniversityOfAdelaide\OpenShift\Model\V1OAuthAuthorizeToken createOAuthAuthorizeToken($body, $pretty)



create an OAuthAuthorizeToken

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1OAuthAuthorizeToken(); // \UniversityOfAdelaide\OpenShift\Model\V1OAuthAuthorizeToken | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createOAuthAuthorizeToken($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createOAuthAuthorizeToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1OAuthAuthorizeToken**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1OAuthAuthorizeToken.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1OAuthAuthorizeToken**](../Model/V1OAuthAuthorizeToken.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOAuthClient**
> \UniversityOfAdelaide\OpenShift\Model\V1OAuthClient createOAuthClient($body, $pretty)



create an OAuthClient

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1OAuthClient(); // \UniversityOfAdelaide\OpenShift\Model\V1OAuthClient | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createOAuthClient($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createOAuthClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1OAuthClient**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1OAuthClient.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1OAuthClient**](../Model/V1OAuthClient.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOAuthClientAuthorization**
> \UniversityOfAdelaide\OpenShift\Model\V1OAuthClientAuthorization createOAuthClientAuthorization($body, $pretty)



create an OAuthClientAuthorization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1OAuthClientAuthorization(); // \UniversityOfAdelaide\OpenShift\Model\V1OAuthClientAuthorization | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createOAuthClientAuthorization($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createOAuthClientAuthorization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1OAuthClientAuthorization**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1OAuthClientAuthorization.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1OAuthClientAuthorization**](../Model/V1OAuthClientAuthorization.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPodSecurityPolicyReviewForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicyReview createPodSecurityPolicyReviewForAllNamespaces($body, $pretty)



create a PodSecurityPolicyReview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicyReview(); // \UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicyReview | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createPodSecurityPolicyReviewForAllNamespaces($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createPodSecurityPolicyReviewForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicyReview**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicyReview.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicyReview**](../Model/V1PodSecurityPolicyReview.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPodSecurityPolicySelfSubjectReviewForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySelfSubjectReview createPodSecurityPolicySelfSubjectReviewForAllNamespaces($body, $pretty)



create a PodSecurityPolicySelfSubjectReview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySelfSubjectReview(); // \UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySelfSubjectReview | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createPodSecurityPolicySelfSubjectReviewForAllNamespaces($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createPodSecurityPolicySelfSubjectReviewForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySelfSubjectReview**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySelfSubjectReview.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySelfSubjectReview**](../Model/V1PodSecurityPolicySelfSubjectReview.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPodSecurityPolicySubjectReviewForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySubjectReview createPodSecurityPolicySubjectReviewForAllNamespaces($body, $pretty)



create a PodSecurityPolicySubjectReview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySubjectReview(); // \UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySubjectReview | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createPodSecurityPolicySubjectReviewForAllNamespaces($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createPodSecurityPolicySubjectReviewForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySubjectReview**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySubjectReview.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySubjectReview**](../Model/V1PodSecurityPolicySubjectReview.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPolicyBindingForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1PolicyBinding createPolicyBindingForAllNamespaces($body, $pretty)



create a PolicyBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1PolicyBinding(); // \UniversityOfAdelaide\OpenShift\Model\V1PolicyBinding | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createPolicyBindingForAllNamespaces($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createPolicyBindingForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1PolicyBinding**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1PolicyBinding.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1PolicyBinding**](../Model/V1PolicyBinding.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPolicyForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1Policy createPolicyForAllNamespaces($body, $pretty)



create a Policy

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Policy(); // \UniversityOfAdelaide\OpenShift\Model\V1Policy | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createPolicyForAllNamespaces($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createPolicyForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Policy**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Policy.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Policy**](../Model/V1Policy.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createProject**
> \UniversityOfAdelaide\OpenShift\Model\V1Project createProject($body, $pretty)



create a Project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Project(); // \UniversityOfAdelaide\OpenShift\Model\V1Project | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createProject($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Project**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Project.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Project**](../Model/V1Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createProjectRequest**
> \UniversityOfAdelaide\OpenShift\Model\V1ProjectRequest createProjectRequest($body, $pretty)



create a ProjectRequest

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1ProjectRequest(); // \UniversityOfAdelaide\OpenShift\Model\V1ProjectRequest | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createProjectRequest($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createProjectRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1ProjectRequest**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1ProjectRequest.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ProjectRequest**](../Model/V1ProjectRequest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createResourceAccessReviewForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1ResourceAccessReview createResourceAccessReviewForAllNamespaces($body, $pretty)



create a ResourceAccessReview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1ResourceAccessReview(); // \UniversityOfAdelaide\OpenShift\Model\V1ResourceAccessReview | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createResourceAccessReviewForAllNamespaces($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createResourceAccessReviewForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1ResourceAccessReview**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1ResourceAccessReview.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ResourceAccessReview**](../Model/V1ResourceAccessReview.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRoleBindingForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1RoleBinding createRoleBindingForAllNamespaces($body, $pretty)



create a RoleBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1RoleBinding(); // \UniversityOfAdelaide\OpenShift\Model\V1RoleBinding | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createRoleBindingForAllNamespaces($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createRoleBindingForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1RoleBinding**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1RoleBinding.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1RoleBinding**](../Model/V1RoleBinding.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRoleBindingRestrictionForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1RoleBindingRestriction createRoleBindingRestrictionForAllNamespaces($body, $pretty)



create a RoleBindingRestriction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1RoleBindingRestriction(); // \UniversityOfAdelaide\OpenShift\Model\V1RoleBindingRestriction | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createRoleBindingRestrictionForAllNamespaces($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createRoleBindingRestrictionForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1RoleBindingRestriction**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1RoleBindingRestriction.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1RoleBindingRestriction**](../Model/V1RoleBindingRestriction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRoleForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1Role createRoleForAllNamespaces($body, $pretty)



create a Role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Role(); // \UniversityOfAdelaide\OpenShift\Model\V1Role | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createRoleForAllNamespaces($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createRoleForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Role**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Role.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Role**](../Model/V1Role.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRouteForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1Route createRouteForAllNamespaces($body, $pretty)



create a Route

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Route(); // \UniversityOfAdelaide\OpenShift\Model\V1Route | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createRouteForAllNamespaces($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createRouteForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Route**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Route.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Route**](../Model/V1Route.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSelfSubjectRulesReviewForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1SelfSubjectRulesReview createSelfSubjectRulesReviewForAllNamespaces($body, $pretty)



create a SelfSubjectRulesReview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1SelfSubjectRulesReview(); // \UniversityOfAdelaide\OpenShift\Model\V1SelfSubjectRulesReview | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createSelfSubjectRulesReviewForAllNamespaces($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createSelfSubjectRulesReviewForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1SelfSubjectRulesReview**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1SelfSubjectRulesReview.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1SelfSubjectRulesReview**](../Model/V1SelfSubjectRulesReview.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSubjectAccessReviewForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1SubjectAccessReview createSubjectAccessReviewForAllNamespaces($body, $pretty)



create a SubjectAccessReview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1SubjectAccessReview(); // \UniversityOfAdelaide\OpenShift\Model\V1SubjectAccessReview | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createSubjectAccessReviewForAllNamespaces($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createSubjectAccessReviewForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1SubjectAccessReview**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1SubjectAccessReview.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1SubjectAccessReview**](../Model/V1SubjectAccessReview.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSubjectRulesReviewForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1SubjectRulesReview createSubjectRulesReviewForAllNamespaces($body, $pretty)



create a SubjectRulesReview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1SubjectRulesReview(); // \UniversityOfAdelaide\OpenShift\Model\V1SubjectRulesReview | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createSubjectRulesReviewForAllNamespaces($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createSubjectRulesReviewForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1SubjectRulesReview**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1SubjectRulesReview.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1SubjectRulesReview**](../Model/V1SubjectRulesReview.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createTemplateForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1Template createTemplateForAllNamespaces($body, $pretty)



create a Template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Template(); // \UniversityOfAdelaide\OpenShift\Model\V1Template | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createTemplateForAllNamespaces($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createTemplateForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Template**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Template.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Template**](../Model/V1Template.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createUser**
> \UniversityOfAdelaide\OpenShift\Model\V1User createUser($body, $pretty)



create an User

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1User(); // \UniversityOfAdelaide\OpenShift\Model\V1User | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createUser($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1User**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1User.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1User**](../Model/V1User.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createUserIdentityMapping**
> \UniversityOfAdelaide\OpenShift\Model\V1UserIdentityMapping createUserIdentityMapping($body, $pretty)



create an UserIdentityMapping

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1UserIdentityMapping(); // \UniversityOfAdelaide\OpenShift\Model\V1UserIdentityMapping | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createUserIdentityMapping($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->createUserIdentityMapping: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1UserIdentityMapping**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1UserIdentityMapping.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1UserIdentityMapping**](../Model/V1UserIdentityMapping.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteClusterNetwork**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteClusterNetwork($name, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy)



delete a ClusterNetwork

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the ClusterNetwork
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions(); // \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$gracePeriodSeconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphanDependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagationPolicy = "propagationPolicy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteClusterNetwork($name, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteClusterNetwork: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ClusterNetwork |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **gracePeriodSeconds** | **int**| The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately. | [optional]
 **orphanDependents** | **bool**| Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \&quot;orphan\&quot; finalizer will be added to/removed from the object&#39;s finalizers list. Either this field or PropagationPolicy may be set, but not both. | [optional]
 **propagationPolicy** | **string**| Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteClusterPolicy**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteClusterPolicy($name, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy)



delete a ClusterPolicy

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the ClusterPolicy
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions(); // \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$gracePeriodSeconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphanDependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagationPolicy = "propagationPolicy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteClusterPolicy($name, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteClusterPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ClusterPolicy |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **gracePeriodSeconds** | **int**| The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately. | [optional]
 **orphanDependents** | **bool**| Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \&quot;orphan\&quot; finalizer will be added to/removed from the object&#39;s finalizers list. Either this field or PropagationPolicy may be set, but not both. | [optional]
 **propagationPolicy** | **string**| Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteClusterPolicyBinding**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteClusterPolicyBinding($name, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy)



delete a ClusterPolicyBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the ClusterPolicyBinding
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions(); // \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$gracePeriodSeconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphanDependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagationPolicy = "propagationPolicy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteClusterPolicyBinding($name, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteClusterPolicyBinding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ClusterPolicyBinding |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **gracePeriodSeconds** | **int**| The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately. | [optional]
 **orphanDependents** | **bool**| Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \&quot;orphan\&quot; finalizer will be added to/removed from the object&#39;s finalizers list. Either this field or PropagationPolicy may be set, but not both. | [optional]
 **propagationPolicy** | **string**| Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteClusterResourceQuota**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteClusterResourceQuota($name, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy)



delete a ClusterResourceQuota

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the ClusterResourceQuota
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions(); // \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$gracePeriodSeconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphanDependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagationPolicy = "propagationPolicy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteClusterResourceQuota($name, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteClusterResourceQuota: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ClusterResourceQuota |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **gracePeriodSeconds** | **int**| The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately. | [optional]
 **orphanDependents** | **bool**| Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \&quot;orphan\&quot; finalizer will be added to/removed from the object&#39;s finalizers list. Either this field or PropagationPolicy may be set, but not both. | [optional]
 **propagationPolicy** | **string**| Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteClusterRole**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteClusterRole($name, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy)



delete a ClusterRole

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the ClusterRole
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions(); // \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$gracePeriodSeconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphanDependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagationPolicy = "propagationPolicy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteClusterRole($name, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteClusterRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ClusterRole |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **gracePeriodSeconds** | **int**| The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately. | [optional]
 **orphanDependents** | **bool**| Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \&quot;orphan\&quot; finalizer will be added to/removed from the object&#39;s finalizers list. Either this field or PropagationPolicy may be set, but not both. | [optional]
 **propagationPolicy** | **string**| Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteClusterRoleBinding**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteClusterRoleBinding($name, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy)



delete a ClusterRoleBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the ClusterRoleBinding
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions(); // \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$gracePeriodSeconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphanDependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagationPolicy = "propagationPolicy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteClusterRoleBinding($name, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteClusterRoleBinding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ClusterRoleBinding |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **gracePeriodSeconds** | **int**| The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately. | [optional]
 **orphanDependents** | **bool**| Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \&quot;orphan\&quot; finalizer will be added to/removed from the object&#39;s finalizers list. Either this field or PropagationPolicy may be set, but not both. | [optional]
 **propagationPolicy** | **string**| Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCollectionClusterNetwork**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteCollectionClusterNetwork($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



delete collection of ClusterNetwork

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->deleteCollectionClusterNetwork($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteCollectionClusterNetwork: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCollectionClusterPolicy**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteCollectionClusterPolicy($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



delete collection of ClusterPolicy

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->deleteCollectionClusterPolicy($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteCollectionClusterPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCollectionClusterPolicyBinding**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteCollectionClusterPolicyBinding($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



delete collection of ClusterPolicyBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->deleteCollectionClusterPolicyBinding($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteCollectionClusterPolicyBinding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCollectionClusterResourceQuota**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteCollectionClusterResourceQuota($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



delete collection of ClusterResourceQuota

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->deleteCollectionClusterResourceQuota($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteCollectionClusterResourceQuota: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCollectionGroup**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteCollectionGroup($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



delete collection of Group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->deleteCollectionGroup($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteCollectionGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCollectionHostSubnet**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteCollectionHostSubnet($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



delete collection of HostSubnet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->deleteCollectionHostSubnet($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteCollectionHostSubnet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCollectionIdentity**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteCollectionIdentity($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



delete collection of Identity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->deleteCollectionIdentity($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteCollectionIdentity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCollectionImage**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteCollectionImage($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



delete collection of Image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->deleteCollectionImage($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteCollectionImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCollectionNamespacedBuild**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteCollectionNamespacedBuild($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



delete collection of Build

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->deleteCollectionNamespacedBuild($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteCollectionNamespacedBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCollectionNamespacedBuildConfig**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteCollectionNamespacedBuildConfig($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



delete collection of BuildConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->deleteCollectionNamespacedBuildConfig($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteCollectionNamespacedBuildConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCollectionNamespacedDeploymentConfig**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteCollectionNamespacedDeploymentConfig($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



delete collection of DeploymentConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->deleteCollectionNamespacedDeploymentConfig($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteCollectionNamespacedDeploymentConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCollectionNamespacedEgressNetworkPolicy**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteCollectionNamespacedEgressNetworkPolicy($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



delete collection of EgressNetworkPolicy

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->deleteCollectionNamespacedEgressNetworkPolicy($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteCollectionNamespacedEgressNetworkPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCollectionNamespacedImageStream**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteCollectionNamespacedImageStream($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



delete collection of ImageStream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->deleteCollectionNamespacedImageStream($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteCollectionNamespacedImageStream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCollectionNamespacedPolicy**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteCollectionNamespacedPolicy($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



delete collection of Policy

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->deleteCollectionNamespacedPolicy($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteCollectionNamespacedPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCollectionNamespacedPolicyBinding**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteCollectionNamespacedPolicyBinding($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



delete collection of PolicyBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->deleteCollectionNamespacedPolicyBinding($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteCollectionNamespacedPolicyBinding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCollectionNamespacedRoleBindingRestriction**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteCollectionNamespacedRoleBindingRestriction($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



delete collection of RoleBindingRestriction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->deleteCollectionNamespacedRoleBindingRestriction($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteCollectionNamespacedRoleBindingRestriction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCollectionNamespacedRoute**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteCollectionNamespacedRoute($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



delete collection of Route

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->deleteCollectionNamespacedRoute($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteCollectionNamespacedRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCollectionNamespacedTemplate**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteCollectionNamespacedTemplate($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



delete collection of Template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->deleteCollectionNamespacedTemplate($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteCollectionNamespacedTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCollectionNetNamespace**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteCollectionNetNamespace($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



delete collection of NetNamespace

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->deleteCollectionNetNamespace($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteCollectionNetNamespace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCollectionOAuthAccessToken**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteCollectionOAuthAccessToken($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



delete collection of OAuthAccessToken

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->deleteCollectionOAuthAccessToken($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteCollectionOAuthAccessToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCollectionOAuthAuthorizeToken**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteCollectionOAuthAuthorizeToken($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



delete collection of OAuthAuthorizeToken

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->deleteCollectionOAuthAuthorizeToken($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteCollectionOAuthAuthorizeToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCollectionOAuthClient**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteCollectionOAuthClient($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



delete collection of OAuthClient

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->deleteCollectionOAuthClient($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteCollectionOAuthClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCollectionOAuthClientAuthorization**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteCollectionOAuthClientAuthorization($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



delete collection of OAuthClientAuthorization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->deleteCollectionOAuthClientAuthorization($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteCollectionOAuthClientAuthorization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCollectionUser**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteCollectionUser($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



delete collection of User

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->deleteCollectionUser($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteCollectionUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteGroup**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteGroup($name, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy)



delete a Group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Group
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions(); // \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$gracePeriodSeconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphanDependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagationPolicy = "propagationPolicy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteGroup($name, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Group |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **gracePeriodSeconds** | **int**| The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately. | [optional]
 **orphanDependents** | **bool**| Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \&quot;orphan\&quot; finalizer will be added to/removed from the object&#39;s finalizers list. Either this field or PropagationPolicy may be set, but not both. | [optional]
 **propagationPolicy** | **string**| Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteHostSubnet**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteHostSubnet($name, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy)



delete a HostSubnet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the HostSubnet
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions(); // \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$gracePeriodSeconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphanDependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagationPolicy = "propagationPolicy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteHostSubnet($name, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteHostSubnet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the HostSubnet |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **gracePeriodSeconds** | **int**| The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately. | [optional]
 **orphanDependents** | **bool**| Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \&quot;orphan\&quot; finalizer will be added to/removed from the object&#39;s finalizers list. Either this field or PropagationPolicy may be set, but not both. | [optional]
 **propagationPolicy** | **string**| Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteIdentity**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteIdentity($name, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy)



delete an Identity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Identity
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions(); // \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$gracePeriodSeconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphanDependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagationPolicy = "propagationPolicy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteIdentity($name, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteIdentity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Identity |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **gracePeriodSeconds** | **int**| The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately. | [optional]
 **orphanDependents** | **bool**| Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \&quot;orphan\&quot; finalizer will be added to/removed from the object&#39;s finalizers list. Either this field or PropagationPolicy may be set, but not both. | [optional]
 **propagationPolicy** | **string**| Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteImage**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteImage($name, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy)



delete an Image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Image
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions(); // \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$gracePeriodSeconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphanDependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagationPolicy = "propagationPolicy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteImage($name, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Image |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **gracePeriodSeconds** | **int**| The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately. | [optional]
 **orphanDependents** | **bool**| Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \&quot;orphan\&quot; finalizer will be added to/removed from the object&#39;s finalizers list. Either this field or PropagationPolicy may be set, but not both. | [optional]
 **propagationPolicy** | **string**| Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteImageSignature**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteImageSignature($name, $pretty)



delete an ImageSignature

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the ImageSignature
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->deleteImageSignature($name, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteImageSignature: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ImageSignature |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteNamespacedBuild**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteNamespacedBuild($name, $namespace, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy)



delete a Build

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Build
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions(); // \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$gracePeriodSeconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphanDependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagationPolicy = "propagationPolicy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteNamespacedBuild($name, $namespace, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteNamespacedBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Build |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **gracePeriodSeconds** | **int**| The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately. | [optional]
 **orphanDependents** | **bool**| Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \&quot;orphan\&quot; finalizer will be added to/removed from the object&#39;s finalizers list. Either this field or PropagationPolicy may be set, but not both. | [optional]
 **propagationPolicy** | **string**| Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteNamespacedBuildConfig**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteNamespacedBuildConfig($name, $namespace, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy)



delete a BuildConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the BuildConfig
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions(); // \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$gracePeriodSeconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphanDependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagationPolicy = "propagationPolicy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteNamespacedBuildConfig($name, $namespace, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteNamespacedBuildConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the BuildConfig |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **gracePeriodSeconds** | **int**| The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately. | [optional]
 **orphanDependents** | **bool**| Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \&quot;orphan\&quot; finalizer will be added to/removed from the object&#39;s finalizers list. Either this field or PropagationPolicy may be set, but not both. | [optional]
 **propagationPolicy** | **string**| Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteNamespacedDeploymentConfig**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteNamespacedDeploymentConfig($name, $namespace, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy)



delete a DeploymentConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the DeploymentConfig
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions(); // \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$gracePeriodSeconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphanDependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagationPolicy = "propagationPolicy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteNamespacedDeploymentConfig($name, $namespace, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteNamespacedDeploymentConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the DeploymentConfig |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **gracePeriodSeconds** | **int**| The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately. | [optional]
 **orphanDependents** | **bool**| Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \&quot;orphan\&quot; finalizer will be added to/removed from the object&#39;s finalizers list. Either this field or PropagationPolicy may be set, but not both. | [optional]
 **propagationPolicy** | **string**| Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteNamespacedEgressNetworkPolicy**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteNamespacedEgressNetworkPolicy($name, $namespace, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy)



delete an EgressNetworkPolicy

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the EgressNetworkPolicy
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions(); // \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$gracePeriodSeconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphanDependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagationPolicy = "propagationPolicy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteNamespacedEgressNetworkPolicy($name, $namespace, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteNamespacedEgressNetworkPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the EgressNetworkPolicy |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **gracePeriodSeconds** | **int**| The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately. | [optional]
 **orphanDependents** | **bool**| Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \&quot;orphan\&quot; finalizer will be added to/removed from the object&#39;s finalizers list. Either this field or PropagationPolicy may be set, but not both. | [optional]
 **propagationPolicy** | **string**| Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteNamespacedImageStream**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteNamespacedImageStream($name, $namespace, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy)



delete an ImageStream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the ImageStream
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions(); // \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$gracePeriodSeconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphanDependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagationPolicy = "propagationPolicy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteNamespacedImageStream($name, $namespace, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteNamespacedImageStream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ImageStream |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **gracePeriodSeconds** | **int**| The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately. | [optional]
 **orphanDependents** | **bool**| Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \&quot;orphan\&quot; finalizer will be added to/removed from the object&#39;s finalizers list. Either this field or PropagationPolicy may be set, but not both. | [optional]
 **propagationPolicy** | **string**| Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteNamespacedImageStreamTag**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteNamespacedImageStreamTag($name, $namespace, $pretty)



delete an ImageStreamTag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the ImageStreamTag
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->deleteNamespacedImageStreamTag($name, $namespace, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteNamespacedImageStreamTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ImageStreamTag |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteNamespacedPolicy**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteNamespacedPolicy($name, $namespace, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy)



delete a Policy

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Policy
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions(); // \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$gracePeriodSeconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphanDependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagationPolicy = "propagationPolicy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteNamespacedPolicy($name, $namespace, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteNamespacedPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Policy |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **gracePeriodSeconds** | **int**| The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately. | [optional]
 **orphanDependents** | **bool**| Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \&quot;orphan\&quot; finalizer will be added to/removed from the object&#39;s finalizers list. Either this field or PropagationPolicy may be set, but not both. | [optional]
 **propagationPolicy** | **string**| Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteNamespacedPolicyBinding**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteNamespacedPolicyBinding($name, $namespace, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy)



delete a PolicyBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the PolicyBinding
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions(); // \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$gracePeriodSeconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphanDependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagationPolicy = "propagationPolicy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteNamespacedPolicyBinding($name, $namespace, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteNamespacedPolicyBinding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the PolicyBinding |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **gracePeriodSeconds** | **int**| The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately. | [optional]
 **orphanDependents** | **bool**| Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \&quot;orphan\&quot; finalizer will be added to/removed from the object&#39;s finalizers list. Either this field or PropagationPolicy may be set, but not both. | [optional]
 **propagationPolicy** | **string**| Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteNamespacedRole**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteNamespacedRole($name, $namespace, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy)



delete a Role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Role
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions(); // \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$gracePeriodSeconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphanDependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagationPolicy = "propagationPolicy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteNamespacedRole($name, $namespace, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteNamespacedRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Role |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **gracePeriodSeconds** | **int**| The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately. | [optional]
 **orphanDependents** | **bool**| Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \&quot;orphan\&quot; finalizer will be added to/removed from the object&#39;s finalizers list. Either this field or PropagationPolicy may be set, but not both. | [optional]
 **propagationPolicy** | **string**| Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteNamespacedRoleBinding**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteNamespacedRoleBinding($name, $namespace, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy)



delete a RoleBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the RoleBinding
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions(); // \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$gracePeriodSeconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphanDependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagationPolicy = "propagationPolicy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteNamespacedRoleBinding($name, $namespace, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteNamespacedRoleBinding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the RoleBinding |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **gracePeriodSeconds** | **int**| The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately. | [optional]
 **orphanDependents** | **bool**| Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \&quot;orphan\&quot; finalizer will be added to/removed from the object&#39;s finalizers list. Either this field or PropagationPolicy may be set, but not both. | [optional]
 **propagationPolicy** | **string**| Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteNamespacedRoleBindingRestriction**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteNamespacedRoleBindingRestriction($name, $namespace, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy)



delete a RoleBindingRestriction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the RoleBindingRestriction
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions(); // \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$gracePeriodSeconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphanDependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagationPolicy = "propagationPolicy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteNamespacedRoleBindingRestriction($name, $namespace, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteNamespacedRoleBindingRestriction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the RoleBindingRestriction |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **gracePeriodSeconds** | **int**| The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately. | [optional]
 **orphanDependents** | **bool**| Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \&quot;orphan\&quot; finalizer will be added to/removed from the object&#39;s finalizers list. Either this field or PropagationPolicy may be set, but not both. | [optional]
 **propagationPolicy** | **string**| Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteNamespacedRoute**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteNamespacedRoute($name, $namespace, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy)



delete a Route

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Route
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions(); // \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$gracePeriodSeconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphanDependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagationPolicy = "propagationPolicy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteNamespacedRoute($name, $namespace, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteNamespacedRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Route |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **gracePeriodSeconds** | **int**| The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately. | [optional]
 **orphanDependents** | **bool**| Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \&quot;orphan\&quot; finalizer will be added to/removed from the object&#39;s finalizers list. Either this field or PropagationPolicy may be set, but not both. | [optional]
 **propagationPolicy** | **string**| Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteNamespacedTemplate**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteNamespacedTemplate($name, $namespace, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy)



delete a Template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Template
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions(); // \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$gracePeriodSeconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphanDependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagationPolicy = "propagationPolicy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteNamespacedTemplate($name, $namespace, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteNamespacedTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Template |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **gracePeriodSeconds** | **int**| The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately. | [optional]
 **orphanDependents** | **bool**| Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \&quot;orphan\&quot; finalizer will be added to/removed from the object&#39;s finalizers list. Either this field or PropagationPolicy may be set, but not both. | [optional]
 **propagationPolicy** | **string**| Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteNetNamespace**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteNetNamespace($name, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy)



delete a NetNamespace

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the NetNamespace
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions(); // \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$gracePeriodSeconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphanDependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagationPolicy = "propagationPolicy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteNetNamespace($name, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteNetNamespace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the NetNamespace |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **gracePeriodSeconds** | **int**| The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately. | [optional]
 **orphanDependents** | **bool**| Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \&quot;orphan\&quot; finalizer will be added to/removed from the object&#39;s finalizers list. Either this field or PropagationPolicy may be set, but not both. | [optional]
 **propagationPolicy** | **string**| Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOAuthAccessToken**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteOAuthAccessToken($name, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy)



delete an OAuthAccessToken

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the OAuthAccessToken
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions(); // \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$gracePeriodSeconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphanDependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagationPolicy = "propagationPolicy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteOAuthAccessToken($name, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteOAuthAccessToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the OAuthAccessToken |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **gracePeriodSeconds** | **int**| The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately. | [optional]
 **orphanDependents** | **bool**| Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \&quot;orphan\&quot; finalizer will be added to/removed from the object&#39;s finalizers list. Either this field or PropagationPolicy may be set, but not both. | [optional]
 **propagationPolicy** | **string**| Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOAuthAuthorizeToken**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteOAuthAuthorizeToken($name, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy)



delete an OAuthAuthorizeToken

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the OAuthAuthorizeToken
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions(); // \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$gracePeriodSeconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphanDependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagationPolicy = "propagationPolicy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteOAuthAuthorizeToken($name, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteOAuthAuthorizeToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the OAuthAuthorizeToken |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **gracePeriodSeconds** | **int**| The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately. | [optional]
 **orphanDependents** | **bool**| Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \&quot;orphan\&quot; finalizer will be added to/removed from the object&#39;s finalizers list. Either this field or PropagationPolicy may be set, but not both. | [optional]
 **propagationPolicy** | **string**| Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOAuthClient**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteOAuthClient($name, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy)



delete an OAuthClient

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the OAuthClient
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions(); // \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$gracePeriodSeconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphanDependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagationPolicy = "propagationPolicy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteOAuthClient($name, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteOAuthClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the OAuthClient |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **gracePeriodSeconds** | **int**| The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately. | [optional]
 **orphanDependents** | **bool**| Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \&quot;orphan\&quot; finalizer will be added to/removed from the object&#39;s finalizers list. Either this field or PropagationPolicy may be set, but not both. | [optional]
 **propagationPolicy** | **string**| Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOAuthClientAuthorization**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteOAuthClientAuthorization($name, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy)



delete an OAuthClientAuthorization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the OAuthClientAuthorization
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions(); // \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$gracePeriodSeconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphanDependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagationPolicy = "propagationPolicy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteOAuthClientAuthorization($name, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteOAuthClientAuthorization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the OAuthClientAuthorization |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **gracePeriodSeconds** | **int**| The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately. | [optional]
 **orphanDependents** | **bool**| Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \&quot;orphan\&quot; finalizer will be added to/removed from the object&#39;s finalizers list. Either this field or PropagationPolicy may be set, but not both. | [optional]
 **propagationPolicy** | **string**| Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProject**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteProject($name, $pretty)



delete a Project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Project
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->deleteProject($name, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Project |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUser**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteUser($name, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy)



delete an User

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the User
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions(); // \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$gracePeriodSeconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphanDependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagationPolicy = "propagationPolicy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteUser($name, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the User |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **gracePeriodSeconds** | **int**| The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately. | [optional]
 **orphanDependents** | **bool**| Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \&quot;orphan\&quot; finalizer will be added to/removed from the object&#39;s finalizers list. Either this field or PropagationPolicy may be set, but not both. | [optional]
 **propagationPolicy** | **string**| Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUserIdentityMapping**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteUserIdentityMapping($name, $pretty)



delete an UserIdentityMapping

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the UserIdentityMapping
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->deleteUserIdentityMapping($name, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->deleteUserIdentityMapping: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the UserIdentityMapping |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAPIResources**
> \UniversityOfAdelaide\OpenShift\Model\V1APIResourceList getAPIResources()



get available resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->getAPIResources();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->getAPIResources: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1APIResourceList**](../Model/V1APIResourceList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/yaml, application/vnd.kubernetes.protobuf
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOapiVersion**
> getOapiVersion()



list supported server API versions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());

try {
    $api_instance->getOapiVersion();
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->getOapiVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAppliedClusterResourceQuotaForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1AppliedClusterResourceQuotaList listAppliedClusterResourceQuotaForAllNamespaces($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



list objects of kind AppliedClusterResourceQuota

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listAppliedClusterResourceQuotaForAllNamespaces($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->listAppliedClusterResourceQuotaForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1AppliedClusterResourceQuotaList**](../Model/V1AppliedClusterResourceQuotaList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listBuildConfigForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1BuildConfigList listBuildConfigForAllNamespaces($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind BuildConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listBuildConfigForAllNamespaces($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->listBuildConfigForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1BuildConfigList**](../Model/V1BuildConfigList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listBuildForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1BuildList listBuildForAllNamespaces($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind Build

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listBuildForAllNamespaces($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->listBuildForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1BuildList**](../Model/V1BuildList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listClusterNetwork**
> \UniversityOfAdelaide\OpenShift\Model\V1ClusterNetworkList listClusterNetwork($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind ClusterNetwork

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listClusterNetwork($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->listClusterNetwork: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ClusterNetworkList**](../Model/V1ClusterNetworkList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listClusterPolicy**
> \UniversityOfAdelaide\OpenShift\Model\V1ClusterPolicyList listClusterPolicy($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind ClusterPolicy

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listClusterPolicy($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->listClusterPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ClusterPolicyList**](../Model/V1ClusterPolicyList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listClusterPolicyBinding**
> \UniversityOfAdelaide\OpenShift\Model\V1ClusterPolicyBindingList listClusterPolicyBinding($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind ClusterPolicyBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listClusterPolicyBinding($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->listClusterPolicyBinding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ClusterPolicyBindingList**](../Model/V1ClusterPolicyBindingList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listClusterResourceQuota**
> \UniversityOfAdelaide\OpenShift\Model\V1ClusterResourceQuotaList listClusterResourceQuota($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind ClusterResourceQuota

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listClusterResourceQuota($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->listClusterResourceQuota: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ClusterResourceQuotaList**](../Model/V1ClusterResourceQuotaList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listClusterRole**
> \UniversityOfAdelaide\OpenShift\Model\V1ClusterRoleList listClusterRole($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list objects of kind ClusterRole

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listClusterRole($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->listClusterRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ClusterRoleList**](../Model/V1ClusterRoleList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listClusterRoleBinding**
> \UniversityOfAdelaide\OpenShift\Model\V1ClusterRoleBindingList listClusterRoleBinding($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list objects of kind ClusterRoleBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listClusterRoleBinding($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->listClusterRoleBinding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ClusterRoleBindingList**](../Model/V1ClusterRoleBindingList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listDeploymentConfigForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfigList listDeploymentConfigForAllNamespaces($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind DeploymentConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listDeploymentConfigForAllNamespaces($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->listDeploymentConfigForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfigList**](../Model/V1DeploymentConfigList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listEgressNetworkPolicyForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1EgressNetworkPolicyList listEgressNetworkPolicyForAllNamespaces($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind EgressNetworkPolicy

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listEgressNetworkPolicyForAllNamespaces($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->listEgressNetworkPolicyForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1EgressNetworkPolicyList**](../Model/V1EgressNetworkPolicyList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listGroup**
> \UniversityOfAdelaide\OpenShift\Model\V1GroupList listGroup($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind Group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listGroup($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->listGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1GroupList**](../Model/V1GroupList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listHostSubnet**
> \UniversityOfAdelaide\OpenShift\Model\V1HostSubnetList listHostSubnet($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind HostSubnet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listHostSubnet($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->listHostSubnet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1HostSubnetList**](../Model/V1HostSubnetList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listIdentity**
> \UniversityOfAdelaide\OpenShift\Model\V1IdentityList listIdentity($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind Identity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listIdentity($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->listIdentity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1IdentityList**](../Model/V1IdentityList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listImage**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageList listImage($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind Image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listImage($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->listImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageList**](../Model/V1ImageList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listImageStreamForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamList listImageStreamForAllNamespaces($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind ImageStream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listImageStreamForAllNamespaces($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->listImageStreamForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamList**](../Model/V1ImageStreamList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listImageStreamTagForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTagList listImageStreamTagForAllNamespaces($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list objects of kind ImageStreamTag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listImageStreamTagForAllNamespaces($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->listImageStreamTagForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTagList**](../Model/V1ImageStreamTagList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listNamespacedAppliedClusterResourceQuota**
> \UniversityOfAdelaide\OpenShift\Model\V1AppliedClusterResourceQuotaList listNamespacedAppliedClusterResourceQuota($namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



list objects of kind AppliedClusterResourceQuota

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listNamespacedAppliedClusterResourceQuota($namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->listNamespacedAppliedClusterResourceQuota: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1AppliedClusterResourceQuotaList**](../Model/V1AppliedClusterResourceQuotaList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listNamespacedBuild**
> \UniversityOfAdelaide\OpenShift\Model\V1BuildList listNamespacedBuild($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind Build

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listNamespacedBuild($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->listNamespacedBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1BuildList**](../Model/V1BuildList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listNamespacedBuildConfig**
> \UniversityOfAdelaide\OpenShift\Model\V1BuildConfigList listNamespacedBuildConfig($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind BuildConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listNamespacedBuildConfig($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->listNamespacedBuildConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1BuildConfigList**](../Model/V1BuildConfigList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listNamespacedDeploymentConfig**
> \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfigList listNamespacedDeploymentConfig($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind DeploymentConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listNamespacedDeploymentConfig($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->listNamespacedDeploymentConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfigList**](../Model/V1DeploymentConfigList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listNamespacedEgressNetworkPolicy**
> \UniversityOfAdelaide\OpenShift\Model\V1EgressNetworkPolicyList listNamespacedEgressNetworkPolicy($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind EgressNetworkPolicy

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listNamespacedEgressNetworkPolicy($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->listNamespacedEgressNetworkPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1EgressNetworkPolicyList**](../Model/V1EgressNetworkPolicyList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listNamespacedImageStream**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamList listNamespacedImageStream($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind ImageStream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listNamespacedImageStream($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->listNamespacedImageStream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamList**](../Model/V1ImageStreamList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listNamespacedImageStreamTag**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTagList listNamespacedImageStreamTag($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list objects of kind ImageStreamTag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listNamespacedImageStreamTag($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->listNamespacedImageStreamTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTagList**](../Model/V1ImageStreamTagList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listNamespacedPolicy**
> \UniversityOfAdelaide\OpenShift\Model\V1PolicyList listNamespacedPolicy($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind Policy

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listNamespacedPolicy($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->listNamespacedPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1PolicyList**](../Model/V1PolicyList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listNamespacedPolicyBinding**
> \UniversityOfAdelaide\OpenShift\Model\V1PolicyBindingList listNamespacedPolicyBinding($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind PolicyBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listNamespacedPolicyBinding($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->listNamespacedPolicyBinding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1PolicyBindingList**](../Model/V1PolicyBindingList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listNamespacedRole**
> \UniversityOfAdelaide\OpenShift\Model\V1RoleList listNamespacedRole($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list objects of kind Role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listNamespacedRole($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->listNamespacedRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1RoleList**](../Model/V1RoleList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listNamespacedRoleBinding**
> \UniversityOfAdelaide\OpenShift\Model\V1RoleBindingList listNamespacedRoleBinding($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list objects of kind RoleBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listNamespacedRoleBinding($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->listNamespacedRoleBinding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1RoleBindingList**](../Model/V1RoleBindingList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listNamespacedRoleBindingRestriction**
> \UniversityOfAdelaide\OpenShift\Model\V1RoleBindingRestrictionList listNamespacedRoleBindingRestriction($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind RoleBindingRestriction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listNamespacedRoleBindingRestriction($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->listNamespacedRoleBindingRestriction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1RoleBindingRestrictionList**](../Model/V1RoleBindingRestrictionList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listNamespacedRoute**
> \UniversityOfAdelaide\OpenShift\Model\V1RouteList listNamespacedRoute($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind Route

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listNamespacedRoute($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->listNamespacedRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1RouteList**](../Model/V1RouteList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listNamespacedTemplate**
> \UniversityOfAdelaide\OpenShift\Model\V1TemplateList listNamespacedTemplate($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind Template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listNamespacedTemplate($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->listNamespacedTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1TemplateList**](../Model/V1TemplateList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listNetNamespace**
> \UniversityOfAdelaide\OpenShift\Model\V1NetNamespaceList listNetNamespace($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind NetNamespace

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listNetNamespace($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->listNetNamespace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1NetNamespaceList**](../Model/V1NetNamespaceList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listOAuthAccessToken**
> \UniversityOfAdelaide\OpenShift\Model\V1OAuthAccessTokenList listOAuthAccessToken($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind OAuthAccessToken

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listOAuthAccessToken($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->listOAuthAccessToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1OAuthAccessTokenList**](../Model/V1OAuthAccessTokenList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listOAuthAuthorizeToken**
> \UniversityOfAdelaide\OpenShift\Model\V1OAuthAuthorizeTokenList listOAuthAuthorizeToken($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind OAuthAuthorizeToken

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listOAuthAuthorizeToken($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->listOAuthAuthorizeToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1OAuthAuthorizeTokenList**](../Model/V1OAuthAuthorizeTokenList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listOAuthClient**
> \UniversityOfAdelaide\OpenShift\Model\V1OAuthClientList listOAuthClient($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind OAuthClient

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listOAuthClient($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->listOAuthClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1OAuthClientList**](../Model/V1OAuthClientList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listOAuthClientAuthorization**
> \UniversityOfAdelaide\OpenShift\Model\V1OAuthClientAuthorizationList listOAuthClientAuthorization($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind OAuthClientAuthorization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listOAuthClientAuthorization($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->listOAuthClientAuthorization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1OAuthClientAuthorizationList**](../Model/V1OAuthClientAuthorizationList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPolicyBindingForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1PolicyBindingList listPolicyBindingForAllNamespaces($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind PolicyBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listPolicyBindingForAllNamespaces($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->listPolicyBindingForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1PolicyBindingList**](../Model/V1PolicyBindingList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPolicyForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1PolicyList listPolicyForAllNamespaces($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind Policy

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listPolicyForAllNamespaces($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->listPolicyForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1PolicyList**](../Model/V1PolicyList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listProject**
> \UniversityOfAdelaide\OpenShift\Model\V1ProjectList listProject($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind Project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listProject($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->listProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ProjectList**](../Model/V1ProjectList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listProjectRequest**
> \UniversityOfAdelaide\OpenShift\Model\V1Status listProjectRequest($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list objects of kind ProjectRequest

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listProjectRequest($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->listProjectRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listRoleBindingForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1RoleBindingList listRoleBindingForAllNamespaces($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list objects of kind RoleBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listRoleBindingForAllNamespaces($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->listRoleBindingForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1RoleBindingList**](../Model/V1RoleBindingList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listRoleBindingRestrictionForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1RoleBindingRestrictionList listRoleBindingRestrictionForAllNamespaces($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind RoleBindingRestriction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listRoleBindingRestrictionForAllNamespaces($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->listRoleBindingRestrictionForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1RoleBindingRestrictionList**](../Model/V1RoleBindingRestrictionList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listRoleForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1RoleList listRoleForAllNamespaces($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list objects of kind Role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listRoleForAllNamespaces($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->listRoleForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1RoleList**](../Model/V1RoleList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listRouteForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1RouteList listRouteForAllNamespaces($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind Route

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listRouteForAllNamespaces($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->listRouteForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1RouteList**](../Model/V1RouteList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listTemplateForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1TemplateList listTemplateForAllNamespaces($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind Template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listTemplateForAllNamespaces($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->listTemplateForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1TemplateList**](../Model/V1TemplateList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listUser**
> \UniversityOfAdelaide\OpenShift\Model\V1UserList listUser($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind User

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listUser($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->listUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1UserList**](../Model/V1UserList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchClusterNetwork**
> \UniversityOfAdelaide\OpenShift\Model\V1ClusterNetwork patchClusterNetwork($name, $body, $pretty)



partially update the specified ClusterNetwork

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the ClusterNetwork
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchClusterNetwork($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->patchClusterNetwork: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ClusterNetwork |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ClusterNetwork**](../Model/V1ClusterNetwork.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchClusterPolicy**
> \UniversityOfAdelaide\OpenShift\Model\V1ClusterPolicy patchClusterPolicy($name, $body, $pretty)



partially update the specified ClusterPolicy

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the ClusterPolicy
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchClusterPolicy($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->patchClusterPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ClusterPolicy |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ClusterPolicy**](../Model/V1ClusterPolicy.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchClusterPolicyBinding**
> \UniversityOfAdelaide\OpenShift\Model\V1ClusterPolicyBinding patchClusterPolicyBinding($name, $body, $pretty)



partially update the specified ClusterPolicyBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the ClusterPolicyBinding
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchClusterPolicyBinding($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->patchClusterPolicyBinding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ClusterPolicyBinding |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ClusterPolicyBinding**](../Model/V1ClusterPolicyBinding.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchClusterResourceQuota**
> \UniversityOfAdelaide\OpenShift\Model\V1ClusterResourceQuota patchClusterResourceQuota($name, $body, $pretty)



partially update the specified ClusterResourceQuota

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the ClusterResourceQuota
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchClusterResourceQuota($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->patchClusterResourceQuota: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ClusterResourceQuota |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ClusterResourceQuota**](../Model/V1ClusterResourceQuota.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchClusterResourceQuotaStatus**
> \UniversityOfAdelaide\OpenShift\Model\V1ClusterResourceQuota patchClusterResourceQuotaStatus($name, $body, $pretty)



partially update status of the specified ClusterResourceQuota

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the ClusterResourceQuota
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchClusterResourceQuotaStatus($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->patchClusterResourceQuotaStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ClusterResourceQuota |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ClusterResourceQuota**](../Model/V1ClusterResourceQuota.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchClusterRole**
> \UniversityOfAdelaide\OpenShift\Model\V1ClusterRole patchClusterRole($name, $body, $pretty)



partially update the specified ClusterRole

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the ClusterRole
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchClusterRole($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->patchClusterRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ClusterRole |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ClusterRole**](../Model/V1ClusterRole.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchClusterRoleBinding**
> \UniversityOfAdelaide\OpenShift\Model\V1ClusterRoleBinding patchClusterRoleBinding($name, $body, $pretty)



partially update the specified ClusterRoleBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the ClusterRoleBinding
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchClusterRoleBinding($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->patchClusterRoleBinding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ClusterRoleBinding |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ClusterRoleBinding**](../Model/V1ClusterRoleBinding.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchGroup**
> \UniversityOfAdelaide\OpenShift\Model\V1Group patchGroup($name, $body, $pretty)



partially update the specified Group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Group
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchGroup($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->patchGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Group |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Group**](../Model/V1Group.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchHostSubnet**
> \UniversityOfAdelaide\OpenShift\Model\V1HostSubnet patchHostSubnet($name, $body, $pretty)



partially update the specified HostSubnet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the HostSubnet
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchHostSubnet($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->patchHostSubnet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the HostSubnet |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1HostSubnet**](../Model/V1HostSubnet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchIdentity**
> \UniversityOfAdelaide\OpenShift\Model\V1Identity patchIdentity($name, $body, $pretty)



partially update the specified Identity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Identity
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchIdentity($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->patchIdentity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Identity |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Identity**](../Model/V1Identity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchImage**
> \UniversityOfAdelaide\OpenShift\Model\V1Image patchImage($name, $body, $pretty)



partially update the specified Image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Image
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchImage($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->patchImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Image |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Image**](../Model/V1Image.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchNamespacedBuild**
> \UniversityOfAdelaide\OpenShift\Model\V1Build patchNamespacedBuild($name, $namespace, $body, $pretty)



partially update the specified Build

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Build
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchNamespacedBuild($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->patchNamespacedBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Build |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Build**](../Model/V1Build.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchNamespacedBuildConfig**
> \UniversityOfAdelaide\OpenShift\Model\V1BuildConfig patchNamespacedBuildConfig($name, $namespace, $body, $pretty)



partially update the specified BuildConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the BuildConfig
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchNamespacedBuildConfig($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->patchNamespacedBuildConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the BuildConfig |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1BuildConfig**](../Model/V1BuildConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchNamespacedDeploymentConfig**
> \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig patchNamespacedDeploymentConfig($name, $namespace, $body, $pretty)



partially update the specified DeploymentConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the DeploymentConfig
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchNamespacedDeploymentConfig($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->patchNamespacedDeploymentConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the DeploymentConfig |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig**](../Model/V1DeploymentConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchNamespacedDeploymentConfigStatus**
> \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig patchNamespacedDeploymentConfigStatus($name, $namespace, $body, $pretty)



partially update status of the specified DeploymentConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the DeploymentConfig
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchNamespacedDeploymentConfigStatus($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->patchNamespacedDeploymentConfigStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the DeploymentConfig |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig**](../Model/V1DeploymentConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchNamespacedEgressNetworkPolicy**
> \UniversityOfAdelaide\OpenShift\Model\V1EgressNetworkPolicy patchNamespacedEgressNetworkPolicy($name, $namespace, $body, $pretty)



partially update the specified EgressNetworkPolicy

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the EgressNetworkPolicy
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchNamespacedEgressNetworkPolicy($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->patchNamespacedEgressNetworkPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the EgressNetworkPolicy |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1EgressNetworkPolicy**](../Model/V1EgressNetworkPolicy.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchNamespacedImageStream**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageStream patchNamespacedImageStream($name, $namespace, $body, $pretty)



partially update the specified ImageStream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the ImageStream
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchNamespacedImageStream($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->patchNamespacedImageStream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ImageStream |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageStream**](../Model/V1ImageStream.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchNamespacedImageStreamStatus**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageStream patchNamespacedImageStreamStatus($name, $namespace, $body, $pretty)



partially update status of the specified ImageStream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the ImageStream
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchNamespacedImageStreamStatus($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->patchNamespacedImageStreamStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ImageStream |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageStream**](../Model/V1ImageStream.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchNamespacedImageStreamTag**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTag patchNamespacedImageStreamTag($name, $namespace, $body, $pretty)



partially update the specified ImageStreamTag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the ImageStreamTag
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchNamespacedImageStreamTag($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->patchNamespacedImageStreamTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ImageStreamTag |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTag**](../Model/V1ImageStreamTag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchNamespacedPolicy**
> \UniversityOfAdelaide\OpenShift\Model\V1Policy patchNamespacedPolicy($name, $namespace, $body, $pretty)



partially update the specified Policy

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Policy
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchNamespacedPolicy($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->patchNamespacedPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Policy |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Policy**](../Model/V1Policy.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchNamespacedPolicyBinding**
> \UniversityOfAdelaide\OpenShift\Model\V1PolicyBinding patchNamespacedPolicyBinding($name, $namespace, $body, $pretty)



partially update the specified PolicyBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the PolicyBinding
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchNamespacedPolicyBinding($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->patchNamespacedPolicyBinding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the PolicyBinding |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1PolicyBinding**](../Model/V1PolicyBinding.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchNamespacedRole**
> \UniversityOfAdelaide\OpenShift\Model\V1Role patchNamespacedRole($name, $namespace, $body, $pretty)



partially update the specified Role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Role
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchNamespacedRole($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->patchNamespacedRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Role |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Role**](../Model/V1Role.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchNamespacedRoleBinding**
> \UniversityOfAdelaide\OpenShift\Model\V1RoleBinding patchNamespacedRoleBinding($name, $namespace, $body, $pretty)



partially update the specified RoleBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the RoleBinding
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchNamespacedRoleBinding($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->patchNamespacedRoleBinding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the RoleBinding |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1RoleBinding**](../Model/V1RoleBinding.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchNamespacedRoleBindingRestriction**
> \UniversityOfAdelaide\OpenShift\Model\V1RoleBindingRestriction patchNamespacedRoleBindingRestriction($name, $namespace, $body, $pretty)



partially update the specified RoleBindingRestriction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the RoleBindingRestriction
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchNamespacedRoleBindingRestriction($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->patchNamespacedRoleBindingRestriction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the RoleBindingRestriction |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1RoleBindingRestriction**](../Model/V1RoleBindingRestriction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchNamespacedRoute**
> \UniversityOfAdelaide\OpenShift\Model\V1Route patchNamespacedRoute($name, $namespace, $body, $pretty)



partially update the specified Route

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Route
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchNamespacedRoute($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->patchNamespacedRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Route |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Route**](../Model/V1Route.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchNamespacedRouteStatus**
> \UniversityOfAdelaide\OpenShift\Model\V1Route patchNamespacedRouteStatus($name, $namespace, $body, $pretty)



partially update status of the specified Route

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Route
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchNamespacedRouteStatus($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->patchNamespacedRouteStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Route |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Route**](../Model/V1Route.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchNamespacedScaleScale**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1Scale patchNamespacedScaleScale($name, $namespace, $body, $pretty)



partially update scale of the specified Scale

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Scale
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchNamespacedScaleScale($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->patchNamespacedScaleScale: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Scale |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1Scale**](../Model/V1beta1Scale.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchNamespacedTemplate**
> \UniversityOfAdelaide\OpenShift\Model\V1Template patchNamespacedTemplate($name, $namespace, $body, $pretty)



partially update the specified Template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Template
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchNamespacedTemplate($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->patchNamespacedTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Template |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Template**](../Model/V1Template.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchNetNamespace**
> \UniversityOfAdelaide\OpenShift\Model\V1NetNamespace patchNetNamespace($name, $body, $pretty)



partially update the specified NetNamespace

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the NetNamespace
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchNetNamespace($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->patchNetNamespace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the NetNamespace |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1NetNamespace**](../Model/V1NetNamespace.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchOAuthAccessToken**
> \UniversityOfAdelaide\OpenShift\Model\V1OAuthAccessToken patchOAuthAccessToken($name, $body, $pretty)



partially update the specified OAuthAccessToken

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the OAuthAccessToken
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchOAuthAccessToken($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->patchOAuthAccessToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the OAuthAccessToken |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1OAuthAccessToken**](../Model/V1OAuthAccessToken.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchOAuthAuthorizeToken**
> \UniversityOfAdelaide\OpenShift\Model\V1OAuthAuthorizeToken patchOAuthAuthorizeToken($name, $body, $pretty)



partially update the specified OAuthAuthorizeToken

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the OAuthAuthorizeToken
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchOAuthAuthorizeToken($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->patchOAuthAuthorizeToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the OAuthAuthorizeToken |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1OAuthAuthorizeToken**](../Model/V1OAuthAuthorizeToken.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchOAuthClient**
> \UniversityOfAdelaide\OpenShift\Model\V1OAuthClient patchOAuthClient($name, $body, $pretty)



partially update the specified OAuthClient

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the OAuthClient
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchOAuthClient($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->patchOAuthClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the OAuthClient |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1OAuthClient**](../Model/V1OAuthClient.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchOAuthClientAuthorization**
> \UniversityOfAdelaide\OpenShift\Model\V1OAuthClientAuthorization patchOAuthClientAuthorization($name, $body, $pretty)



partially update the specified OAuthClientAuthorization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the OAuthClientAuthorization
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchOAuthClientAuthorization($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->patchOAuthClientAuthorization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the OAuthClientAuthorization |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1OAuthClientAuthorization**](../Model/V1OAuthClientAuthorization.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchProject**
> \UniversityOfAdelaide\OpenShift\Model\V1Project patchProject($name, $body, $pretty)



partially update the specified Project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Project
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchProject($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->patchProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Project |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Project**](../Model/V1Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchUser**
> \UniversityOfAdelaide\OpenShift\Model\V1User patchUser($name, $body, $pretty)



partially update the specified User

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the User
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchUser($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->patchUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the User |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1User**](../Model/V1User.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchUserIdentityMapping**
> \UniversityOfAdelaide\OpenShift\Model\V1UserIdentityMapping patchUserIdentityMapping($name, $body, $pretty)



partially update the specified UserIdentityMapping

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the UserIdentityMapping
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchUserIdentityMapping($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->patchUserIdentityMapping: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the UserIdentityMapping |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1UserIdentityMapping**](../Model/V1UserIdentityMapping.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readClusterNetwork**
> \UniversityOfAdelaide\OpenShift\Model\V1ClusterNetwork readClusterNetwork($name, $pretty, $exact, $export)



read the specified ClusterNetwork

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the ClusterNetwork
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$exact = true; // bool | Should the export be exact.  Exact export maintains cluster-specific fields like 'Namespace'.
$export = true; // bool | Should this value be exported.  Export strips fields that a user can not specify.

try {
    $result = $api_instance->readClusterNetwork($name, $pretty, $exact, $export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->readClusterNetwork: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ClusterNetwork |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **exact** | **bool**| Should the export be exact.  Exact export maintains cluster-specific fields like &#39;Namespace&#39;. | [optional]
 **export** | **bool**| Should this value be exported.  Export strips fields that a user can not specify. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ClusterNetwork**](../Model/V1ClusterNetwork.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readClusterPolicy**
> \UniversityOfAdelaide\OpenShift\Model\V1ClusterPolicy readClusterPolicy($name, $pretty, $exact, $export)



read the specified ClusterPolicy

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the ClusterPolicy
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$exact = true; // bool | Should the export be exact.  Exact export maintains cluster-specific fields like 'Namespace'.
$export = true; // bool | Should this value be exported.  Export strips fields that a user can not specify.

try {
    $result = $api_instance->readClusterPolicy($name, $pretty, $exact, $export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->readClusterPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ClusterPolicy |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **exact** | **bool**| Should the export be exact.  Exact export maintains cluster-specific fields like &#39;Namespace&#39;. | [optional]
 **export** | **bool**| Should this value be exported.  Export strips fields that a user can not specify. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ClusterPolicy**](../Model/V1ClusterPolicy.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readClusterPolicyBinding**
> \UniversityOfAdelaide\OpenShift\Model\V1ClusterPolicyBinding readClusterPolicyBinding($name, $pretty, $exact, $export)



read the specified ClusterPolicyBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the ClusterPolicyBinding
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$exact = true; // bool | Should the export be exact.  Exact export maintains cluster-specific fields like 'Namespace'.
$export = true; // bool | Should this value be exported.  Export strips fields that a user can not specify.

try {
    $result = $api_instance->readClusterPolicyBinding($name, $pretty, $exact, $export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->readClusterPolicyBinding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ClusterPolicyBinding |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **exact** | **bool**| Should the export be exact.  Exact export maintains cluster-specific fields like &#39;Namespace&#39;. | [optional]
 **export** | **bool**| Should this value be exported.  Export strips fields that a user can not specify. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ClusterPolicyBinding**](../Model/V1ClusterPolicyBinding.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readClusterResourceQuota**
> \UniversityOfAdelaide\OpenShift\Model\V1ClusterResourceQuota readClusterResourceQuota($name, $pretty, $exact, $export)



read the specified ClusterResourceQuota

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the ClusterResourceQuota
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$exact = true; // bool | Should the export be exact.  Exact export maintains cluster-specific fields like 'Namespace'.
$export = true; // bool | Should this value be exported.  Export strips fields that a user can not specify.

try {
    $result = $api_instance->readClusterResourceQuota($name, $pretty, $exact, $export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->readClusterResourceQuota: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ClusterResourceQuota |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **exact** | **bool**| Should the export be exact.  Exact export maintains cluster-specific fields like &#39;Namespace&#39;. | [optional]
 **export** | **bool**| Should this value be exported.  Export strips fields that a user can not specify. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ClusterResourceQuota**](../Model/V1ClusterResourceQuota.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readClusterResourceQuotaStatus**
> \UniversityOfAdelaide\OpenShift\Model\V1ClusterResourceQuota readClusterResourceQuotaStatus($name, $pretty)



read status of the specified ClusterResourceQuota

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the ClusterResourceQuota
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->readClusterResourceQuotaStatus($name, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->readClusterResourceQuotaStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ClusterResourceQuota |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ClusterResourceQuota**](../Model/V1ClusterResourceQuota.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readClusterRole**
> \UniversityOfAdelaide\OpenShift\Model\V1ClusterRole readClusterRole($name, $pretty)



read the specified ClusterRole

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the ClusterRole
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->readClusterRole($name, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->readClusterRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ClusterRole |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ClusterRole**](../Model/V1ClusterRole.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readClusterRoleBinding**
> \UniversityOfAdelaide\OpenShift\Model\V1ClusterRoleBinding readClusterRoleBinding($name, $pretty)



read the specified ClusterRoleBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the ClusterRoleBinding
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->readClusterRoleBinding($name, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->readClusterRoleBinding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ClusterRoleBinding |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ClusterRoleBinding**](../Model/V1ClusterRoleBinding.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readGroup**
> \UniversityOfAdelaide\OpenShift\Model\V1Group readGroup($name, $pretty, $exact, $export)



read the specified Group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Group
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$exact = true; // bool | Should the export be exact.  Exact export maintains cluster-specific fields like 'Namespace'.
$export = true; // bool | Should this value be exported.  Export strips fields that a user can not specify.

try {
    $result = $api_instance->readGroup($name, $pretty, $exact, $export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->readGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Group |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **exact** | **bool**| Should the export be exact.  Exact export maintains cluster-specific fields like &#39;Namespace&#39;. | [optional]
 **export** | **bool**| Should this value be exported.  Export strips fields that a user can not specify. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Group**](../Model/V1Group.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readHostSubnet**
> \UniversityOfAdelaide\OpenShift\Model\V1HostSubnet readHostSubnet($name, $pretty, $exact, $export)



read the specified HostSubnet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the HostSubnet
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$exact = true; // bool | Should the export be exact.  Exact export maintains cluster-specific fields like 'Namespace'.
$export = true; // bool | Should this value be exported.  Export strips fields that a user can not specify.

try {
    $result = $api_instance->readHostSubnet($name, $pretty, $exact, $export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->readHostSubnet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the HostSubnet |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **exact** | **bool**| Should the export be exact.  Exact export maintains cluster-specific fields like &#39;Namespace&#39;. | [optional]
 **export** | **bool**| Should this value be exported.  Export strips fields that a user can not specify. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1HostSubnet**](../Model/V1HostSubnet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readIdentity**
> \UniversityOfAdelaide\OpenShift\Model\V1Identity readIdentity($name, $pretty, $exact, $export)



read the specified Identity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Identity
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$exact = true; // bool | Should the export be exact.  Exact export maintains cluster-specific fields like 'Namespace'.
$export = true; // bool | Should this value be exported.  Export strips fields that a user can not specify.

try {
    $result = $api_instance->readIdentity($name, $pretty, $exact, $export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->readIdentity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Identity |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **exact** | **bool**| Should the export be exact.  Exact export maintains cluster-specific fields like &#39;Namespace&#39;. | [optional]
 **export** | **bool**| Should this value be exported.  Export strips fields that a user can not specify. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Identity**](../Model/V1Identity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readImage**
> \UniversityOfAdelaide\OpenShift\Model\V1Image readImage($name, $pretty, $exact, $export)



read the specified Image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Image
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$exact = true; // bool | Should the export be exact.  Exact export maintains cluster-specific fields like 'Namespace'.
$export = true; // bool | Should this value be exported.  Export strips fields that a user can not specify.

try {
    $result = $api_instance->readImage($name, $pretty, $exact, $export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->readImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Image |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **exact** | **bool**| Should the export be exact.  Exact export maintains cluster-specific fields like &#39;Namespace&#39;. | [optional]
 **export** | **bool**| Should this value be exported.  Export strips fields that a user can not specify. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Image**](../Model/V1Image.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readNamespacedAppliedClusterResourceQuota**
> \UniversityOfAdelaide\OpenShift\Model\V1AppliedClusterResourceQuota readNamespacedAppliedClusterResourceQuota($name, $namespace, $pretty)



read the specified AppliedClusterResourceQuota

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the AppliedClusterResourceQuota
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->readNamespacedAppliedClusterResourceQuota($name, $namespace, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->readNamespacedAppliedClusterResourceQuota: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the AppliedClusterResourceQuota |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1AppliedClusterResourceQuota**](../Model/V1AppliedClusterResourceQuota.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readNamespacedBuild**
> \UniversityOfAdelaide\OpenShift\Model\V1Build readNamespacedBuild($name, $namespace, $pretty, $exact, $export)



read the specified Build

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Build
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$exact = true; // bool | Should the export be exact.  Exact export maintains cluster-specific fields like 'Namespace'.
$export = true; // bool | Should this value be exported.  Export strips fields that a user can not specify.

try {
    $result = $api_instance->readNamespacedBuild($name, $namespace, $pretty, $exact, $export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->readNamespacedBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Build |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **exact** | **bool**| Should the export be exact.  Exact export maintains cluster-specific fields like &#39;Namespace&#39;. | [optional]
 **export** | **bool**| Should this value be exported.  Export strips fields that a user can not specify. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Build**](../Model/V1Build.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readNamespacedBuildConfig**
> \UniversityOfAdelaide\OpenShift\Model\V1BuildConfig readNamespacedBuildConfig($name, $namespace, $pretty, $exact, $export)



read the specified BuildConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the BuildConfig
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$exact = true; // bool | Should the export be exact.  Exact export maintains cluster-specific fields like 'Namespace'.
$export = true; // bool | Should this value be exported.  Export strips fields that a user can not specify.

try {
    $result = $api_instance->readNamespacedBuildConfig($name, $namespace, $pretty, $exact, $export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->readNamespacedBuildConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the BuildConfig |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **exact** | **bool**| Should the export be exact.  Exact export maintains cluster-specific fields like &#39;Namespace&#39;. | [optional]
 **export** | **bool**| Should this value be exported.  Export strips fields that a user can not specify. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1BuildConfig**](../Model/V1BuildConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readNamespacedBuildLogLog**
> \UniversityOfAdelaide\OpenShift\Model\V1BuildLog readNamespacedBuildLogLog($name, $namespace, $container, $follow, $limitBytes, $nowait, $pretty, $previous, $sinceSeconds, $tailLines, $timestamps, $version)



read log of the specified BuildLog

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the BuildLog
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$container = "container_example"; // string | cointainer for which to stream logs. Defaults to only container if there is one container in the pod.
$follow = true; // bool | follow if true indicates that the build log should be streamed until the build terminates.
$limitBytes = 56; // int | limitBytes, If set, is the number of bytes to read from the server before terminating the log output. This may not display a complete final line of logging, and may return slightly more or slightly less than the specified limit.
$nowait = true; // bool | noWait if true causes the call to return immediately even if the build is not available yet. Otherwise the server will wait until the build has started.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$previous = true; // bool | previous returns previous build logs. Defaults to false.
$sinceSeconds = 56; // int | sinceSeconds is a relative time in seconds before the current time from which to show logs. If this value precedes the time a pod was started, only logs since the pod start will be returned. If this value is in the future, no logs will be returned. Only one of sinceSeconds or sinceTime may be specified.
$tailLines = 56; // int | tailLines, If set, is the number of lines from the end of the logs to show. If not specified, logs are shown from the creation of the container or sinceSeconds or sinceTime
$timestamps = true; // bool | timestamps, If true, add an RFC3339 or RFC3339Nano timestamp at the beginning of every line of log output. Defaults to false.
$version = 56; // int | version of the build for which to view logs.

try {
    $result = $api_instance->readNamespacedBuildLogLog($name, $namespace, $container, $follow, $limitBytes, $nowait, $pretty, $previous, $sinceSeconds, $tailLines, $timestamps, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->readNamespacedBuildLogLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the BuildLog |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **container** | **string**| cointainer for which to stream logs. Defaults to only container if there is one container in the pod. | [optional]
 **follow** | **bool**| follow if true indicates that the build log should be streamed until the build terminates. | [optional]
 **limitBytes** | **int**| limitBytes, If set, is the number of bytes to read from the server before terminating the log output. This may not display a complete final line of logging, and may return slightly more or slightly less than the specified limit. | [optional]
 **nowait** | **bool**| noWait if true causes the call to return immediately even if the build is not available yet. Otherwise the server will wait until the build has started. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **previous** | **bool**| previous returns previous build logs. Defaults to false. | [optional]
 **sinceSeconds** | **int**| sinceSeconds is a relative time in seconds before the current time from which to show logs. If this value precedes the time a pod was started, only logs since the pod start will be returned. If this value is in the future, no logs will be returned. Only one of sinceSeconds or sinceTime may be specified. | [optional]
 **tailLines** | **int**| tailLines, If set, is the number of lines from the end of the logs to show. If not specified, logs are shown from the creation of the container or sinceSeconds or sinceTime | [optional]
 **timestamps** | **bool**| timestamps, If true, add an RFC3339 or RFC3339Nano timestamp at the beginning of every line of log output. Defaults to false. | [optional]
 **version** | **int**| version of the build for which to view logs. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1BuildLog**](../Model/V1BuildLog.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readNamespacedDeploymentConfig**
> \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig readNamespacedDeploymentConfig($name, $namespace, $pretty, $exact, $export)



read the specified DeploymentConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the DeploymentConfig
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$exact = true; // bool | Should the export be exact.  Exact export maintains cluster-specific fields like 'Namespace'.
$export = true; // bool | Should this value be exported.  Export strips fields that a user can not specify.

try {
    $result = $api_instance->readNamespacedDeploymentConfig($name, $namespace, $pretty, $exact, $export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->readNamespacedDeploymentConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the DeploymentConfig |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **exact** | **bool**| Should the export be exact.  Exact export maintains cluster-specific fields like &#39;Namespace&#39;. | [optional]
 **export** | **bool**| Should this value be exported.  Export strips fields that a user can not specify. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig**](../Model/V1DeploymentConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readNamespacedDeploymentConfigStatus**
> \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig readNamespacedDeploymentConfigStatus($name, $namespace, $pretty)



read status of the specified DeploymentConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the DeploymentConfig
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->readNamespacedDeploymentConfigStatus($name, $namespace, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->readNamespacedDeploymentConfigStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the DeploymentConfig |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig**](../Model/V1DeploymentConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readNamespacedDeploymentLogLog**
> \UniversityOfAdelaide\OpenShift\Model\V1DeploymentLog readNamespacedDeploymentLogLog($name, $namespace, $container, $follow, $limitBytes, $nowait, $pretty, $previous, $sinceSeconds, $tailLines, $timestamps, $version)



read log of the specified DeploymentLog

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the DeploymentLog
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$container = "container_example"; // string | The container for which to stream logs. Defaults to only container if there is one container in the pod.
$follow = true; // bool | Follow if true indicates that the build log should be streamed until the build terminates.
$limitBytes = 56; // int | If set, the number of bytes to read from the server before terminating the log output. This may not display a complete final line of logging, and may return slightly more or slightly less than the specified limit.
$nowait = true; // bool | NoWait if true causes the call to return immediately even if the deployment is not available yet. Otherwise the server will wait until the deployment has started.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$previous = true; // bool | Return previous deployment logs. Defaults to false.
$sinceSeconds = 56; // int | A relative time in seconds before the current time from which to show logs. If this value precedes the time a pod was started, only logs since the pod start will be returned. If this value is in the future, no logs will be returned. Only one of sinceSeconds or sinceTime may be specified.
$tailLines = 56; // int | If set, the number of lines from the end of the logs to show. If not specified, logs are shown from the creation of the container or sinceSeconds or sinceTime
$timestamps = true; // bool | If true, add an RFC3339 or RFC3339Nano timestamp at the beginning of every line of log output. Defaults to false.
$version = 56; // int | Version of the deployment for which to view logs.

try {
    $result = $api_instance->readNamespacedDeploymentLogLog($name, $namespace, $container, $follow, $limitBytes, $nowait, $pretty, $previous, $sinceSeconds, $tailLines, $timestamps, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->readNamespacedDeploymentLogLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the DeploymentLog |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **container** | **string**| The container for which to stream logs. Defaults to only container if there is one container in the pod. | [optional]
 **follow** | **bool**| Follow if true indicates that the build log should be streamed until the build terminates. | [optional]
 **limitBytes** | **int**| If set, the number of bytes to read from the server before terminating the log output. This may not display a complete final line of logging, and may return slightly more or slightly less than the specified limit. | [optional]
 **nowait** | **bool**| NoWait if true causes the call to return immediately even if the deployment is not available yet. Otherwise the server will wait until the deployment has started. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **previous** | **bool**| Return previous deployment logs. Defaults to false. | [optional]
 **sinceSeconds** | **int**| A relative time in seconds before the current time from which to show logs. If this value precedes the time a pod was started, only logs since the pod start will be returned. If this value is in the future, no logs will be returned. Only one of sinceSeconds or sinceTime may be specified. | [optional]
 **tailLines** | **int**| If set, the number of lines from the end of the logs to show. If not specified, logs are shown from the creation of the container or sinceSeconds or sinceTime | [optional]
 **timestamps** | **bool**| If true, add an RFC3339 or RFC3339Nano timestamp at the beginning of every line of log output. Defaults to false. | [optional]
 **version** | **int**| Version of the deployment for which to view logs. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1DeploymentLog**](../Model/V1DeploymentLog.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readNamespacedEgressNetworkPolicy**
> \UniversityOfAdelaide\OpenShift\Model\V1EgressNetworkPolicy readNamespacedEgressNetworkPolicy($name, $namespace, $pretty, $exact, $export)



read the specified EgressNetworkPolicy

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the EgressNetworkPolicy
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$exact = true; // bool | Should the export be exact.  Exact export maintains cluster-specific fields like 'Namespace'.
$export = true; // bool | Should this value be exported.  Export strips fields that a user can not specify.

try {
    $result = $api_instance->readNamespacedEgressNetworkPolicy($name, $namespace, $pretty, $exact, $export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->readNamespacedEgressNetworkPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the EgressNetworkPolicy |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **exact** | **bool**| Should the export be exact.  Exact export maintains cluster-specific fields like &#39;Namespace&#39;. | [optional]
 **export** | **bool**| Should this value be exported.  Export strips fields that a user can not specify. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1EgressNetworkPolicy**](../Model/V1EgressNetworkPolicy.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readNamespacedImageStream**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageStream readNamespacedImageStream($name, $namespace, $pretty, $exact, $export)



read the specified ImageStream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the ImageStream
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$exact = true; // bool | Should the export be exact.  Exact export maintains cluster-specific fields like 'Namespace'.
$export = true; // bool | Should this value be exported.  Export strips fields that a user can not specify.

try {
    $result = $api_instance->readNamespacedImageStream($name, $namespace, $pretty, $exact, $export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->readNamespacedImageStream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ImageStream |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **exact** | **bool**| Should the export be exact.  Exact export maintains cluster-specific fields like &#39;Namespace&#39;. | [optional]
 **export** | **bool**| Should this value be exported.  Export strips fields that a user can not specify. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageStream**](../Model/V1ImageStream.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readNamespacedImageStreamImage**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamImage readNamespacedImageStreamImage($name, $namespace, $pretty)



read the specified ImageStreamImage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the ImageStreamImage
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->readNamespacedImageStreamImage($name, $namespace, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->readNamespacedImageStreamImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ImageStreamImage |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamImage**](../Model/V1ImageStreamImage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readNamespacedImageStreamStatus**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageStream readNamespacedImageStreamStatus($name, $namespace, $pretty)



read status of the specified ImageStream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the ImageStream
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->readNamespacedImageStreamStatus($name, $namespace, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->readNamespacedImageStreamStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ImageStream |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageStream**](../Model/V1ImageStream.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readNamespacedImageStreamTag**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTag readNamespacedImageStreamTag($name, $namespace, $pretty)



read the specified ImageStreamTag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the ImageStreamTag
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->readNamespacedImageStreamTag($name, $namespace, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->readNamespacedImageStreamTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ImageStreamTag |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTag**](../Model/V1ImageStreamTag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readNamespacedPolicy**
> \UniversityOfAdelaide\OpenShift\Model\V1Policy readNamespacedPolicy($name, $namespace, $pretty, $exact, $export)



read the specified Policy

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Policy
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$exact = true; // bool | Should the export be exact.  Exact export maintains cluster-specific fields like 'Namespace'.
$export = true; // bool | Should this value be exported.  Export strips fields that a user can not specify.

try {
    $result = $api_instance->readNamespacedPolicy($name, $namespace, $pretty, $exact, $export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->readNamespacedPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Policy |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **exact** | **bool**| Should the export be exact.  Exact export maintains cluster-specific fields like &#39;Namespace&#39;. | [optional]
 **export** | **bool**| Should this value be exported.  Export strips fields that a user can not specify. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Policy**](../Model/V1Policy.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readNamespacedPolicyBinding**
> \UniversityOfAdelaide\OpenShift\Model\V1PolicyBinding readNamespacedPolicyBinding($name, $namespace, $pretty, $exact, $export)



read the specified PolicyBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the PolicyBinding
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$exact = true; // bool | Should the export be exact.  Exact export maintains cluster-specific fields like 'Namespace'.
$export = true; // bool | Should this value be exported.  Export strips fields that a user can not specify.

try {
    $result = $api_instance->readNamespacedPolicyBinding($name, $namespace, $pretty, $exact, $export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->readNamespacedPolicyBinding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the PolicyBinding |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **exact** | **bool**| Should the export be exact.  Exact export maintains cluster-specific fields like &#39;Namespace&#39;. | [optional]
 **export** | **bool**| Should this value be exported.  Export strips fields that a user can not specify. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1PolicyBinding**](../Model/V1PolicyBinding.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readNamespacedRole**
> \UniversityOfAdelaide\OpenShift\Model\V1Role readNamespacedRole($name, $namespace, $pretty)



read the specified Role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Role
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->readNamespacedRole($name, $namespace, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->readNamespacedRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Role |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Role**](../Model/V1Role.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readNamespacedRoleBinding**
> \UniversityOfAdelaide\OpenShift\Model\V1RoleBinding readNamespacedRoleBinding($name, $namespace, $pretty)



read the specified RoleBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the RoleBinding
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->readNamespacedRoleBinding($name, $namespace, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->readNamespacedRoleBinding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the RoleBinding |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1RoleBinding**](../Model/V1RoleBinding.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readNamespacedRoleBindingRestriction**
> \UniversityOfAdelaide\OpenShift\Model\V1RoleBindingRestriction readNamespacedRoleBindingRestriction($name, $namespace, $pretty, $exact, $export)



read the specified RoleBindingRestriction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the RoleBindingRestriction
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$exact = true; // bool | Should the export be exact.  Exact export maintains cluster-specific fields like 'Namespace'.
$export = true; // bool | Should this value be exported.  Export strips fields that a user can not specify.

try {
    $result = $api_instance->readNamespacedRoleBindingRestriction($name, $namespace, $pretty, $exact, $export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->readNamespacedRoleBindingRestriction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the RoleBindingRestriction |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **exact** | **bool**| Should the export be exact.  Exact export maintains cluster-specific fields like &#39;Namespace&#39;. | [optional]
 **export** | **bool**| Should this value be exported.  Export strips fields that a user can not specify. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1RoleBindingRestriction**](../Model/V1RoleBindingRestriction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readNamespacedRoute**
> \UniversityOfAdelaide\OpenShift\Model\V1Route readNamespacedRoute($name, $namespace, $pretty, $exact, $export)



read the specified Route

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Route
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$exact = true; // bool | Should the export be exact.  Exact export maintains cluster-specific fields like 'Namespace'.
$export = true; // bool | Should this value be exported.  Export strips fields that a user can not specify.

try {
    $result = $api_instance->readNamespacedRoute($name, $namespace, $pretty, $exact, $export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->readNamespacedRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Route |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **exact** | **bool**| Should the export be exact.  Exact export maintains cluster-specific fields like &#39;Namespace&#39;. | [optional]
 **export** | **bool**| Should this value be exported.  Export strips fields that a user can not specify. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Route**](../Model/V1Route.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readNamespacedRouteStatus**
> \UniversityOfAdelaide\OpenShift\Model\V1Route readNamespacedRouteStatus($name, $namespace, $pretty)



read status of the specified Route

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Route
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->readNamespacedRouteStatus($name, $namespace, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->readNamespacedRouteStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Route |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Route**](../Model/V1Route.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readNamespacedScaleScale**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1Scale readNamespacedScaleScale($name, $namespace, $pretty)



read scale of the specified Scale

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Scale
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->readNamespacedScaleScale($name, $namespace, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->readNamespacedScaleScale: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Scale |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1Scale**](../Model/V1beta1Scale.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readNamespacedSecretListSecrets**
> \UniversityOfAdelaide\OpenShift\Model\V1SecretList readNamespacedSecretListSecrets($name, $namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



read secrets of the specified SecretList

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the SecretList
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->readNamespacedSecretListSecrets($name, $namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->readNamespacedSecretListSecrets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the SecretList |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1SecretList**](../Model/V1SecretList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readNamespacedTemplate**
> \UniversityOfAdelaide\OpenShift\Model\V1Template readNamespacedTemplate($name, $namespace, $pretty, $exact, $export)



read the specified Template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Template
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$exact = true; // bool | Should the export be exact.  Exact export maintains cluster-specific fields like 'Namespace'.
$export = true; // bool | Should this value be exported.  Export strips fields that a user can not specify.

try {
    $result = $api_instance->readNamespacedTemplate($name, $namespace, $pretty, $exact, $export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->readNamespacedTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Template |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **exact** | **bool**| Should the export be exact.  Exact export maintains cluster-specific fields like &#39;Namespace&#39;. | [optional]
 **export** | **bool**| Should this value be exported.  Export strips fields that a user can not specify. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Template**](../Model/V1Template.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readNetNamespace**
> \UniversityOfAdelaide\OpenShift\Model\V1NetNamespace readNetNamespace($name, $pretty, $exact, $export)



read the specified NetNamespace

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the NetNamespace
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$exact = true; // bool | Should the export be exact.  Exact export maintains cluster-specific fields like 'Namespace'.
$export = true; // bool | Should this value be exported.  Export strips fields that a user can not specify.

try {
    $result = $api_instance->readNetNamespace($name, $pretty, $exact, $export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->readNetNamespace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the NetNamespace |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **exact** | **bool**| Should the export be exact.  Exact export maintains cluster-specific fields like &#39;Namespace&#39;. | [optional]
 **export** | **bool**| Should this value be exported.  Export strips fields that a user can not specify. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1NetNamespace**](../Model/V1NetNamespace.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readOAuthAccessToken**
> \UniversityOfAdelaide\OpenShift\Model\V1OAuthAccessToken readOAuthAccessToken($name, $pretty, $exact, $export)



read the specified OAuthAccessToken

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the OAuthAccessToken
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$exact = true; // bool | Should the export be exact.  Exact export maintains cluster-specific fields like 'Namespace'.
$export = true; // bool | Should this value be exported.  Export strips fields that a user can not specify.

try {
    $result = $api_instance->readOAuthAccessToken($name, $pretty, $exact, $export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->readOAuthAccessToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the OAuthAccessToken |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **exact** | **bool**| Should the export be exact.  Exact export maintains cluster-specific fields like &#39;Namespace&#39;. | [optional]
 **export** | **bool**| Should this value be exported.  Export strips fields that a user can not specify. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1OAuthAccessToken**](../Model/V1OAuthAccessToken.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readOAuthAuthorizeToken**
> \UniversityOfAdelaide\OpenShift\Model\V1OAuthAuthorizeToken readOAuthAuthorizeToken($name, $pretty, $exact, $export)



read the specified OAuthAuthorizeToken

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the OAuthAuthorizeToken
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$exact = true; // bool | Should the export be exact.  Exact export maintains cluster-specific fields like 'Namespace'.
$export = true; // bool | Should this value be exported.  Export strips fields that a user can not specify.

try {
    $result = $api_instance->readOAuthAuthorizeToken($name, $pretty, $exact, $export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->readOAuthAuthorizeToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the OAuthAuthorizeToken |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **exact** | **bool**| Should the export be exact.  Exact export maintains cluster-specific fields like &#39;Namespace&#39;. | [optional]
 **export** | **bool**| Should this value be exported.  Export strips fields that a user can not specify. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1OAuthAuthorizeToken**](../Model/V1OAuthAuthorizeToken.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readOAuthClient**
> \UniversityOfAdelaide\OpenShift\Model\V1OAuthClient readOAuthClient($name, $pretty, $exact, $export)



read the specified OAuthClient

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the OAuthClient
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$exact = true; // bool | Should the export be exact.  Exact export maintains cluster-specific fields like 'Namespace'.
$export = true; // bool | Should this value be exported.  Export strips fields that a user can not specify.

try {
    $result = $api_instance->readOAuthClient($name, $pretty, $exact, $export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->readOAuthClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the OAuthClient |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **exact** | **bool**| Should the export be exact.  Exact export maintains cluster-specific fields like &#39;Namespace&#39;. | [optional]
 **export** | **bool**| Should this value be exported.  Export strips fields that a user can not specify. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1OAuthClient**](../Model/V1OAuthClient.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readOAuthClientAuthorization**
> \UniversityOfAdelaide\OpenShift\Model\V1OAuthClientAuthorization readOAuthClientAuthorization($name, $pretty, $exact, $export)



read the specified OAuthClientAuthorization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the OAuthClientAuthorization
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$exact = true; // bool | Should the export be exact.  Exact export maintains cluster-specific fields like 'Namespace'.
$export = true; // bool | Should this value be exported.  Export strips fields that a user can not specify.

try {
    $result = $api_instance->readOAuthClientAuthorization($name, $pretty, $exact, $export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->readOAuthClientAuthorization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the OAuthClientAuthorization |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **exact** | **bool**| Should the export be exact.  Exact export maintains cluster-specific fields like &#39;Namespace&#39;. | [optional]
 **export** | **bool**| Should this value be exported.  Export strips fields that a user can not specify. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1OAuthClientAuthorization**](../Model/V1OAuthClientAuthorization.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readProject**
> \UniversityOfAdelaide\OpenShift\Model\V1Project readProject($name, $pretty)



read the specified Project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Project
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->readProject($name, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->readProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Project |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Project**](../Model/V1Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readUser**
> \UniversityOfAdelaide\OpenShift\Model\V1User readUser($name, $pretty, $exact, $export)



read the specified User

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the User
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$exact = true; // bool | Should the export be exact.  Exact export maintains cluster-specific fields like 'Namespace'.
$export = true; // bool | Should this value be exported.  Export strips fields that a user can not specify.

try {
    $result = $api_instance->readUser($name, $pretty, $exact, $export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->readUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the User |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **exact** | **bool**| Should the export be exact.  Exact export maintains cluster-specific fields like &#39;Namespace&#39;. | [optional]
 **export** | **bool**| Should this value be exported.  Export strips fields that a user can not specify. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1User**](../Model/V1User.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readUserIdentityMapping**
> \UniversityOfAdelaide\OpenShift\Model\V1UserIdentityMapping readUserIdentityMapping($name, $pretty)



read the specified UserIdentityMapping

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the UserIdentityMapping
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->readUserIdentityMapping($name, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->readUserIdentityMapping: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the UserIdentityMapping |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1UserIdentityMapping**](../Model/V1UserIdentityMapping.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceClusterNetwork**
> \UniversityOfAdelaide\OpenShift\Model\V1ClusterNetwork replaceClusterNetwork($name, $body, $pretty)



replace the specified ClusterNetwork

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the ClusterNetwork
$body = new \UniversityOfAdelaide\OpenShift\Model\V1ClusterNetwork(); // \UniversityOfAdelaide\OpenShift\Model\V1ClusterNetwork | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceClusterNetwork($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->replaceClusterNetwork: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ClusterNetwork |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1ClusterNetwork**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1ClusterNetwork.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ClusterNetwork**](../Model/V1ClusterNetwork.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceClusterPolicy**
> \UniversityOfAdelaide\OpenShift\Model\V1ClusterPolicy replaceClusterPolicy($name, $body, $pretty)



replace the specified ClusterPolicy

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the ClusterPolicy
$body = new \UniversityOfAdelaide\OpenShift\Model\V1ClusterPolicy(); // \UniversityOfAdelaide\OpenShift\Model\V1ClusterPolicy | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceClusterPolicy($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->replaceClusterPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ClusterPolicy |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1ClusterPolicy**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1ClusterPolicy.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ClusterPolicy**](../Model/V1ClusterPolicy.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceClusterPolicyBinding**
> \UniversityOfAdelaide\OpenShift\Model\V1ClusterPolicyBinding replaceClusterPolicyBinding($name, $body, $pretty)



replace the specified ClusterPolicyBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the ClusterPolicyBinding
$body = new \UniversityOfAdelaide\OpenShift\Model\V1ClusterPolicyBinding(); // \UniversityOfAdelaide\OpenShift\Model\V1ClusterPolicyBinding | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceClusterPolicyBinding($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->replaceClusterPolicyBinding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ClusterPolicyBinding |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1ClusterPolicyBinding**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1ClusterPolicyBinding.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ClusterPolicyBinding**](../Model/V1ClusterPolicyBinding.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceClusterResourceQuota**
> \UniversityOfAdelaide\OpenShift\Model\V1ClusterResourceQuota replaceClusterResourceQuota($name, $body, $pretty)



replace the specified ClusterResourceQuota

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the ClusterResourceQuota
$body = new \UniversityOfAdelaide\OpenShift\Model\V1ClusterResourceQuota(); // \UniversityOfAdelaide\OpenShift\Model\V1ClusterResourceQuota | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceClusterResourceQuota($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->replaceClusterResourceQuota: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ClusterResourceQuota |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1ClusterResourceQuota**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1ClusterResourceQuota.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ClusterResourceQuota**](../Model/V1ClusterResourceQuota.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceClusterResourceQuotaStatus**
> \UniversityOfAdelaide\OpenShift\Model\V1ClusterResourceQuota replaceClusterResourceQuotaStatus($name, $body, $pretty)



replace status of the specified ClusterResourceQuota

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the ClusterResourceQuota
$body = new \UniversityOfAdelaide\OpenShift\Model\V1ClusterResourceQuota(); // \UniversityOfAdelaide\OpenShift\Model\V1ClusterResourceQuota | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceClusterResourceQuotaStatus($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->replaceClusterResourceQuotaStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ClusterResourceQuota |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1ClusterResourceQuota**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1ClusterResourceQuota.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ClusterResourceQuota**](../Model/V1ClusterResourceQuota.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceClusterRole**
> \UniversityOfAdelaide\OpenShift\Model\V1ClusterRole replaceClusterRole($name, $body, $pretty)



replace the specified ClusterRole

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the ClusterRole
$body = new \UniversityOfAdelaide\OpenShift\Model\V1ClusterRole(); // \UniversityOfAdelaide\OpenShift\Model\V1ClusterRole | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceClusterRole($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->replaceClusterRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ClusterRole |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1ClusterRole**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1ClusterRole.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ClusterRole**](../Model/V1ClusterRole.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceClusterRoleBinding**
> \UniversityOfAdelaide\OpenShift\Model\V1ClusterRoleBinding replaceClusterRoleBinding($name, $body, $pretty)



replace the specified ClusterRoleBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the ClusterRoleBinding
$body = new \UniversityOfAdelaide\OpenShift\Model\V1ClusterRoleBinding(); // \UniversityOfAdelaide\OpenShift\Model\V1ClusterRoleBinding | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceClusterRoleBinding($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->replaceClusterRoleBinding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ClusterRoleBinding |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1ClusterRoleBinding**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1ClusterRoleBinding.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ClusterRoleBinding**](../Model/V1ClusterRoleBinding.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceGroup**
> \UniversityOfAdelaide\OpenShift\Model\V1Group replaceGroup($name, $body, $pretty)



replace the specified Group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Group
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Group(); // \UniversityOfAdelaide\OpenShift\Model\V1Group | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceGroup($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->replaceGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Group |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Group**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Group.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Group**](../Model/V1Group.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceHostSubnet**
> \UniversityOfAdelaide\OpenShift\Model\V1HostSubnet replaceHostSubnet($name, $body, $pretty)



replace the specified HostSubnet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the HostSubnet
$body = new \UniversityOfAdelaide\OpenShift\Model\V1HostSubnet(); // \UniversityOfAdelaide\OpenShift\Model\V1HostSubnet | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceHostSubnet($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->replaceHostSubnet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the HostSubnet |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1HostSubnet**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1HostSubnet.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1HostSubnet**](../Model/V1HostSubnet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceIdentity**
> \UniversityOfAdelaide\OpenShift\Model\V1Identity replaceIdentity($name, $body, $pretty)



replace the specified Identity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Identity
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Identity(); // \UniversityOfAdelaide\OpenShift\Model\V1Identity | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceIdentity($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->replaceIdentity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Identity |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Identity**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Identity.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Identity**](../Model/V1Identity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceImage**
> \UniversityOfAdelaide\OpenShift\Model\V1Image replaceImage($name, $body, $pretty)



replace the specified Image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Image
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Image(); // \UniversityOfAdelaide\OpenShift\Model\V1Image | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceImage($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->replaceImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Image |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Image**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Image.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Image**](../Model/V1Image.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceNamespacedBuild**
> \UniversityOfAdelaide\OpenShift\Model\V1Build replaceNamespacedBuild($name, $namespace, $body, $pretty)



replace the specified Build

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Build
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Build(); // \UniversityOfAdelaide\OpenShift\Model\V1Build | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceNamespacedBuild($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->replaceNamespacedBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Build |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Build**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Build.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Build**](../Model/V1Build.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceNamespacedBuildConfig**
> \UniversityOfAdelaide\OpenShift\Model\V1BuildConfig replaceNamespacedBuildConfig($name, $namespace, $body, $pretty)



replace the specified BuildConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the BuildConfig
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1BuildConfig(); // \UniversityOfAdelaide\OpenShift\Model\V1BuildConfig | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceNamespacedBuildConfig($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->replaceNamespacedBuildConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the BuildConfig |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1BuildConfig**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1BuildConfig.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1BuildConfig**](../Model/V1BuildConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceNamespacedBuildDetails**
> \UniversityOfAdelaide\OpenShift\Model\V1Build replaceNamespacedBuildDetails($name, $namespace, $body, $pretty)



replace details of the specified Build

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Build
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Build(); // \UniversityOfAdelaide\OpenShift\Model\V1Build | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceNamespacedBuildDetails($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->replaceNamespacedBuildDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Build |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Build**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Build.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Build**](../Model/V1Build.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceNamespacedDeploymentConfig**
> \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig replaceNamespacedDeploymentConfig($name, $namespace, $body, $pretty)



replace the specified DeploymentConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the DeploymentConfig
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig(); // \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceNamespacedDeploymentConfig($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->replaceNamespacedDeploymentConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the DeploymentConfig |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig**](../Model/V1DeploymentConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceNamespacedDeploymentConfigStatus**
> \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig replaceNamespacedDeploymentConfigStatus($name, $namespace, $body, $pretty)



replace status of the specified DeploymentConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the DeploymentConfig
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig(); // \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceNamespacedDeploymentConfigStatus($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->replaceNamespacedDeploymentConfigStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the DeploymentConfig |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig**](../Model/V1DeploymentConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceNamespacedEgressNetworkPolicy**
> \UniversityOfAdelaide\OpenShift\Model\V1EgressNetworkPolicy replaceNamespacedEgressNetworkPolicy($name, $namespace, $body, $pretty)



replace the specified EgressNetworkPolicy

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the EgressNetworkPolicy
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1EgressNetworkPolicy(); // \UniversityOfAdelaide\OpenShift\Model\V1EgressNetworkPolicy | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceNamespacedEgressNetworkPolicy($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->replaceNamespacedEgressNetworkPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the EgressNetworkPolicy |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1EgressNetworkPolicy**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1EgressNetworkPolicy.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1EgressNetworkPolicy**](../Model/V1EgressNetworkPolicy.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceNamespacedImageStream**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageStream replaceNamespacedImageStream($name, $namespace, $body, $pretty)



replace the specified ImageStream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the ImageStream
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1ImageStream(); // \UniversityOfAdelaide\OpenShift\Model\V1ImageStream | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceNamespacedImageStream($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->replaceNamespacedImageStream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ImageStream |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1ImageStream**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1ImageStream.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageStream**](../Model/V1ImageStream.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceNamespacedImageStreamStatus**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageStream replaceNamespacedImageStreamStatus($name, $namespace, $body, $pretty)



replace status of the specified ImageStream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the ImageStream
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1ImageStream(); // \UniversityOfAdelaide\OpenShift\Model\V1ImageStream | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceNamespacedImageStreamStatus($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->replaceNamespacedImageStreamStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ImageStream |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1ImageStream**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1ImageStream.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageStream**](../Model/V1ImageStream.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceNamespacedImageStreamTag**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTag replaceNamespacedImageStreamTag($name, $namespace, $body, $pretty)



replace the specified ImageStreamTag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the ImageStreamTag
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTag(); // \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTag | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceNamespacedImageStreamTag($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->replaceNamespacedImageStreamTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ImageStreamTag |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTag**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTag.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTag**](../Model/V1ImageStreamTag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceNamespacedPolicy**
> \UniversityOfAdelaide\OpenShift\Model\V1Policy replaceNamespacedPolicy($name, $namespace, $body, $pretty)



replace the specified Policy

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Policy
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Policy(); // \UniversityOfAdelaide\OpenShift\Model\V1Policy | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceNamespacedPolicy($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->replaceNamespacedPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Policy |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Policy**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Policy.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Policy**](../Model/V1Policy.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceNamespacedPolicyBinding**
> \UniversityOfAdelaide\OpenShift\Model\V1PolicyBinding replaceNamespacedPolicyBinding($name, $namespace, $body, $pretty)



replace the specified PolicyBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the PolicyBinding
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1PolicyBinding(); // \UniversityOfAdelaide\OpenShift\Model\V1PolicyBinding | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceNamespacedPolicyBinding($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->replaceNamespacedPolicyBinding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the PolicyBinding |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1PolicyBinding**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1PolicyBinding.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1PolicyBinding**](../Model/V1PolicyBinding.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceNamespacedRole**
> \UniversityOfAdelaide\OpenShift\Model\V1Role replaceNamespacedRole($name, $namespace, $body, $pretty)



replace the specified Role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Role
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Role(); // \UniversityOfAdelaide\OpenShift\Model\V1Role | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceNamespacedRole($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->replaceNamespacedRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Role |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Role**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Role.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Role**](../Model/V1Role.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceNamespacedRoleBinding**
> \UniversityOfAdelaide\OpenShift\Model\V1RoleBinding replaceNamespacedRoleBinding($name, $namespace, $body, $pretty)



replace the specified RoleBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the RoleBinding
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1RoleBinding(); // \UniversityOfAdelaide\OpenShift\Model\V1RoleBinding | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceNamespacedRoleBinding($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->replaceNamespacedRoleBinding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the RoleBinding |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1RoleBinding**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1RoleBinding.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1RoleBinding**](../Model/V1RoleBinding.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceNamespacedRoleBindingRestriction**
> \UniversityOfAdelaide\OpenShift\Model\V1RoleBindingRestriction replaceNamespacedRoleBindingRestriction($name, $namespace, $body, $pretty)



replace the specified RoleBindingRestriction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the RoleBindingRestriction
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1RoleBindingRestriction(); // \UniversityOfAdelaide\OpenShift\Model\V1RoleBindingRestriction | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceNamespacedRoleBindingRestriction($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->replaceNamespacedRoleBindingRestriction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the RoleBindingRestriction |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1RoleBindingRestriction**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1RoleBindingRestriction.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1RoleBindingRestriction**](../Model/V1RoleBindingRestriction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceNamespacedRoute**
> \UniversityOfAdelaide\OpenShift\Model\V1Route replaceNamespacedRoute($name, $namespace, $body, $pretty)



replace the specified Route

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Route
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Route(); // \UniversityOfAdelaide\OpenShift\Model\V1Route | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceNamespacedRoute($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->replaceNamespacedRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Route |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Route**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Route.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Route**](../Model/V1Route.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceNamespacedRouteStatus**
> \UniversityOfAdelaide\OpenShift\Model\V1Route replaceNamespacedRouteStatus($name, $namespace, $body, $pretty)



replace status of the specified Route

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Route
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Route(); // \UniversityOfAdelaide\OpenShift\Model\V1Route | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceNamespacedRouteStatus($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->replaceNamespacedRouteStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Route |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Route**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Route.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Route**](../Model/V1Route.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceNamespacedScaleScale**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1Scale replaceNamespacedScaleScale($name, $namespace, $body, $pretty)



replace scale of the specified Scale

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Scale
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1beta1Scale(); // \UniversityOfAdelaide\OpenShift\Model\V1beta1Scale | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceNamespacedScaleScale($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->replaceNamespacedScaleScale: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Scale |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1beta1Scale**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1beta1Scale.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1Scale**](../Model/V1beta1Scale.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceNamespacedTemplate**
> \UniversityOfAdelaide\OpenShift\Model\V1Template replaceNamespacedTemplate($name, $namespace, $body, $pretty)



replace the specified Template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Template
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Template(); // \UniversityOfAdelaide\OpenShift\Model\V1Template | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceNamespacedTemplate($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->replaceNamespacedTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Template |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Template**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Template.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Template**](../Model/V1Template.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceNetNamespace**
> \UniversityOfAdelaide\OpenShift\Model\V1NetNamespace replaceNetNamespace($name, $body, $pretty)



replace the specified NetNamespace

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the NetNamespace
$body = new \UniversityOfAdelaide\OpenShift\Model\V1NetNamespace(); // \UniversityOfAdelaide\OpenShift\Model\V1NetNamespace | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceNetNamespace($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->replaceNetNamespace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the NetNamespace |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1NetNamespace**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1NetNamespace.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1NetNamespace**](../Model/V1NetNamespace.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceOAuthAccessToken**
> \UniversityOfAdelaide\OpenShift\Model\V1OAuthAccessToken replaceOAuthAccessToken($name, $body, $pretty)



replace the specified OAuthAccessToken

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the OAuthAccessToken
$body = new \UniversityOfAdelaide\OpenShift\Model\V1OAuthAccessToken(); // \UniversityOfAdelaide\OpenShift\Model\V1OAuthAccessToken | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceOAuthAccessToken($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->replaceOAuthAccessToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the OAuthAccessToken |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1OAuthAccessToken**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1OAuthAccessToken.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1OAuthAccessToken**](../Model/V1OAuthAccessToken.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceOAuthAuthorizeToken**
> \UniversityOfAdelaide\OpenShift\Model\V1OAuthAuthorizeToken replaceOAuthAuthorizeToken($name, $body, $pretty)



replace the specified OAuthAuthorizeToken

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the OAuthAuthorizeToken
$body = new \UniversityOfAdelaide\OpenShift\Model\V1OAuthAuthorizeToken(); // \UniversityOfAdelaide\OpenShift\Model\V1OAuthAuthorizeToken | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceOAuthAuthorizeToken($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->replaceOAuthAuthorizeToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the OAuthAuthorizeToken |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1OAuthAuthorizeToken**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1OAuthAuthorizeToken.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1OAuthAuthorizeToken**](../Model/V1OAuthAuthorizeToken.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceOAuthClient**
> \UniversityOfAdelaide\OpenShift\Model\V1OAuthClient replaceOAuthClient($name, $body, $pretty)



replace the specified OAuthClient

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the OAuthClient
$body = new \UniversityOfAdelaide\OpenShift\Model\V1OAuthClient(); // \UniversityOfAdelaide\OpenShift\Model\V1OAuthClient | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceOAuthClient($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->replaceOAuthClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the OAuthClient |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1OAuthClient**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1OAuthClient.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1OAuthClient**](../Model/V1OAuthClient.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceOAuthClientAuthorization**
> \UniversityOfAdelaide\OpenShift\Model\V1OAuthClientAuthorization replaceOAuthClientAuthorization($name, $body, $pretty)



replace the specified OAuthClientAuthorization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the OAuthClientAuthorization
$body = new \UniversityOfAdelaide\OpenShift\Model\V1OAuthClientAuthorization(); // \UniversityOfAdelaide\OpenShift\Model\V1OAuthClientAuthorization | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceOAuthClientAuthorization($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->replaceOAuthClientAuthorization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the OAuthClientAuthorization |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1OAuthClientAuthorization**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1OAuthClientAuthorization.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1OAuthClientAuthorization**](../Model/V1OAuthClientAuthorization.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceProject**
> \UniversityOfAdelaide\OpenShift\Model\V1Project replaceProject($name, $body, $pretty)



replace the specified Project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Project
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Project(); // \UniversityOfAdelaide\OpenShift\Model\V1Project | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceProject($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->replaceProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Project |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Project**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Project.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Project**](../Model/V1Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceUser**
> \UniversityOfAdelaide\OpenShift\Model\V1User replaceUser($name, $body, $pretty)



replace the specified User

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the User
$body = new \UniversityOfAdelaide\OpenShift\Model\V1User(); // \UniversityOfAdelaide\OpenShift\Model\V1User | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceUser($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->replaceUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the User |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1User**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1User.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1User**](../Model/V1User.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceUserIdentityMapping**
> \UniversityOfAdelaide\OpenShift\Model\V1UserIdentityMapping replaceUserIdentityMapping($name, $body, $pretty)



replace the specified UserIdentityMapping

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the UserIdentityMapping
$body = new \UniversityOfAdelaide\OpenShift\Model\V1UserIdentityMapping(); // \UniversityOfAdelaide\OpenShift\Model\V1UserIdentityMapping | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceUserIdentityMapping($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->replaceUserIdentityMapping: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the UserIdentityMapping |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1UserIdentityMapping**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1UserIdentityMapping.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1UserIdentityMapping**](../Model/V1UserIdentityMapping.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchBuildConfigListForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchBuildConfigListForAllNamespaces($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of BuildConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchBuildConfigListForAllNamespaces($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchBuildConfigListForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchBuildListForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchBuildListForAllNamespaces($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of Build

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchBuildListForAllNamespaces($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchBuildListForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchClusterNetwork**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchClusterNetwork($name, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch changes to an object of kind ClusterNetwork

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the ClusterNetwork
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchClusterNetwork($name, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchClusterNetwork: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ClusterNetwork |
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchClusterNetworkList**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchClusterNetworkList($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of ClusterNetwork

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchClusterNetworkList($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchClusterNetworkList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchClusterPolicy**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchClusterPolicy($name, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch changes to an object of kind ClusterPolicy

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the ClusterPolicy
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchClusterPolicy($name, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchClusterPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ClusterPolicy |
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchClusterPolicyBinding**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchClusterPolicyBinding($name, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch changes to an object of kind ClusterPolicyBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the ClusterPolicyBinding
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchClusterPolicyBinding($name, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchClusterPolicyBinding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ClusterPolicyBinding |
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchClusterPolicyBindingList**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchClusterPolicyBindingList($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of ClusterPolicyBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchClusterPolicyBindingList($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchClusterPolicyBindingList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchClusterPolicyList**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchClusterPolicyList($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of ClusterPolicy

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchClusterPolicyList($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchClusterPolicyList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchClusterResourceQuota**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchClusterResourceQuota($name, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch changes to an object of kind ClusterResourceQuota

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the ClusterResourceQuota
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchClusterResourceQuota($name, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchClusterResourceQuota: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ClusterResourceQuota |
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchClusterResourceQuotaList**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchClusterResourceQuotaList($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of ClusterResourceQuota

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchClusterResourceQuotaList($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchClusterResourceQuotaList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchDeploymentConfigListForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchDeploymentConfigListForAllNamespaces($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of DeploymentConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchDeploymentConfigListForAllNamespaces($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchDeploymentConfigListForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchEgressNetworkPolicyListForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchEgressNetworkPolicyListForAllNamespaces($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of EgressNetworkPolicy

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchEgressNetworkPolicyListForAllNamespaces($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchEgressNetworkPolicyListForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchGroup**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchGroup($name, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch changes to an object of kind Group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Group
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchGroup($name, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Group |
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchGroupList**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchGroupList($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of Group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchGroupList($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchGroupList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchHostSubnet**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchHostSubnet($name, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch changes to an object of kind HostSubnet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the HostSubnet
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchHostSubnet($name, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchHostSubnet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the HostSubnet |
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchHostSubnetList**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchHostSubnetList($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of HostSubnet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchHostSubnetList($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchHostSubnetList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchIdentity**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchIdentity($name, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch changes to an object of kind Identity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Identity
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchIdentity($name, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchIdentity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Identity |
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchIdentityList**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchIdentityList($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of Identity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchIdentityList($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchIdentityList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchImage**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchImage($name, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch changes to an object of kind Image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Image
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchImage($name, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Image |
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchImageList**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchImageList($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of Image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchImageList($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchImageList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchImageStreamListForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchImageStreamListForAllNamespaces($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of ImageStream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchImageStreamListForAllNamespaces($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchImageStreamListForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchNamespacedBuild**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchNamespacedBuild($name, $namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch changes to an object of kind Build

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Build
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchNamespacedBuild($name, $namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchNamespacedBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Build |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchNamespacedBuildConfig**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchNamespacedBuildConfig($name, $namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch changes to an object of kind BuildConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the BuildConfig
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchNamespacedBuildConfig($name, $namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchNamespacedBuildConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the BuildConfig |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchNamespacedBuildConfigList**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchNamespacedBuildConfigList($namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of BuildConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchNamespacedBuildConfigList($namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchNamespacedBuildConfigList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchNamespacedBuildList**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchNamespacedBuildList($namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of Build

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchNamespacedBuildList($namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchNamespacedBuildList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchNamespacedDeploymentConfig**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchNamespacedDeploymentConfig($name, $namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch changes to an object of kind DeploymentConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the DeploymentConfig
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchNamespacedDeploymentConfig($name, $namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchNamespacedDeploymentConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the DeploymentConfig |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchNamespacedDeploymentConfigList**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchNamespacedDeploymentConfigList($namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of DeploymentConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchNamespacedDeploymentConfigList($namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchNamespacedDeploymentConfigList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchNamespacedEgressNetworkPolicy**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchNamespacedEgressNetworkPolicy($name, $namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch changes to an object of kind EgressNetworkPolicy

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the EgressNetworkPolicy
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchNamespacedEgressNetworkPolicy($name, $namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchNamespacedEgressNetworkPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the EgressNetworkPolicy |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchNamespacedEgressNetworkPolicyList**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchNamespacedEgressNetworkPolicyList($namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of EgressNetworkPolicy

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchNamespacedEgressNetworkPolicyList($namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchNamespacedEgressNetworkPolicyList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchNamespacedImageStream**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchNamespacedImageStream($name, $namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch changes to an object of kind ImageStream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the ImageStream
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchNamespacedImageStream($name, $namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchNamespacedImageStream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ImageStream |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchNamespacedImageStreamList**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchNamespacedImageStreamList($namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of ImageStream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchNamespacedImageStreamList($namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchNamespacedImageStreamList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchNamespacedPolicy**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchNamespacedPolicy($name, $namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch changes to an object of kind Policy

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Policy
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchNamespacedPolicy($name, $namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchNamespacedPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Policy |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchNamespacedPolicyBinding**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchNamespacedPolicyBinding($name, $namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch changes to an object of kind PolicyBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the PolicyBinding
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchNamespacedPolicyBinding($name, $namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchNamespacedPolicyBinding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the PolicyBinding |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchNamespacedPolicyBindingList**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchNamespacedPolicyBindingList($namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of PolicyBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchNamespacedPolicyBindingList($namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchNamespacedPolicyBindingList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchNamespacedPolicyList**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchNamespacedPolicyList($namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of Policy

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchNamespacedPolicyList($namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchNamespacedPolicyList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchNamespacedRoleBindingRestriction**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchNamespacedRoleBindingRestriction($name, $namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch changes to an object of kind RoleBindingRestriction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the RoleBindingRestriction
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchNamespacedRoleBindingRestriction($name, $namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchNamespacedRoleBindingRestriction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the RoleBindingRestriction |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchNamespacedRoleBindingRestrictionList**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchNamespacedRoleBindingRestrictionList($namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of RoleBindingRestriction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchNamespacedRoleBindingRestrictionList($namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchNamespacedRoleBindingRestrictionList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchNamespacedRoute**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchNamespacedRoute($name, $namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch changes to an object of kind Route

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Route
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchNamespacedRoute($name, $namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchNamespacedRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Route |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchNamespacedRouteList**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchNamespacedRouteList($namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of Route

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchNamespacedRouteList($namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchNamespacedRouteList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchNamespacedTemplate**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchNamespacedTemplate($name, $namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch changes to an object of kind Template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Template
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchNamespacedTemplate($name, $namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchNamespacedTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Template |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchNamespacedTemplateList**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchNamespacedTemplateList($namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of Template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchNamespacedTemplateList($namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchNamespacedTemplateList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchNetNamespace**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchNetNamespace($name, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch changes to an object of kind NetNamespace

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the NetNamespace
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchNetNamespace($name, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchNetNamespace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the NetNamespace |
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchNetNamespaceList**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchNetNamespaceList($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of NetNamespace

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchNetNamespaceList($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchNetNamespaceList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchOAuthAccessToken**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchOAuthAccessToken($name, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch changes to an object of kind OAuthAccessToken

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the OAuthAccessToken
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchOAuthAccessToken($name, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchOAuthAccessToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the OAuthAccessToken |
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchOAuthAccessTokenList**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchOAuthAccessTokenList($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of OAuthAccessToken

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchOAuthAccessTokenList($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchOAuthAccessTokenList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchOAuthAuthorizeToken**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchOAuthAuthorizeToken($name, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch changes to an object of kind OAuthAuthorizeToken

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the OAuthAuthorizeToken
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchOAuthAuthorizeToken($name, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchOAuthAuthorizeToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the OAuthAuthorizeToken |
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchOAuthAuthorizeTokenList**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchOAuthAuthorizeTokenList($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of OAuthAuthorizeToken

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchOAuthAuthorizeTokenList($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchOAuthAuthorizeTokenList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchOAuthClient**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchOAuthClient($name, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch changes to an object of kind OAuthClient

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the OAuthClient
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchOAuthClient($name, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchOAuthClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the OAuthClient |
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchOAuthClientAuthorization**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchOAuthClientAuthorization($name, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch changes to an object of kind OAuthClientAuthorization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the OAuthClientAuthorization
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchOAuthClientAuthorization($name, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchOAuthClientAuthorization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the OAuthClientAuthorization |
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchOAuthClientAuthorizationList**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchOAuthClientAuthorizationList($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of OAuthClientAuthorization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchOAuthClientAuthorizationList($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchOAuthClientAuthorizationList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchOAuthClientList**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchOAuthClientList($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of OAuthClient

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchOAuthClientList($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchOAuthClientList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchPolicyBindingListForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchPolicyBindingListForAllNamespaces($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of PolicyBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchPolicyBindingListForAllNamespaces($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchPolicyBindingListForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchPolicyListForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchPolicyListForAllNamespaces($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of Policy

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchPolicyListForAllNamespaces($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchPolicyListForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchProject**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchProject($name, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch changes to an object of kind Project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Project
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchProject($name, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Project |
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchProjectList**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchProjectList($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of Project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchProjectList($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchProjectList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchRoleBindingRestrictionListForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchRoleBindingRestrictionListForAllNamespaces($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of RoleBindingRestriction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchRoleBindingRestrictionListForAllNamespaces($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchRoleBindingRestrictionListForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchRouteListForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchRouteListForAllNamespaces($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of Route

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchRouteListForAllNamespaces($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchRouteListForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchTemplateListForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchTemplateListForAllNamespaces($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of Template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchTemplateListForAllNamespaces($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchTemplateListForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchUser**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchUser($name, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch changes to an object of kind User

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the User
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchUser($name, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the User |
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchUserList**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchUserList($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of User

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OapiApi(new \Http\Adapter\Guzzle6\Client());
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchUserList($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OapiApi->watchUserList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

