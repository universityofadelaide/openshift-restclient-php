# UniversityOfAdelaide\OpenShift\RbacAuthorization_v1beta1Api

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRbacAuthorizationV1beta1ClusterRole**](RbacAuthorization_v1beta1Api.md#createRbacAuthorizationV1beta1ClusterRole) | **POST** /apis/rbac.authorization.k8s.io/v1beta1/clusterroles | 
[**createRbacAuthorizationV1beta1ClusterRoleBinding**](RbacAuthorization_v1beta1Api.md#createRbacAuthorizationV1beta1ClusterRoleBinding) | **POST** /apis/rbac.authorization.k8s.io/v1beta1/clusterrolebindings | 
[**createRbacAuthorizationV1beta1NamespacedRole**](RbacAuthorization_v1beta1Api.md#createRbacAuthorizationV1beta1NamespacedRole) | **POST** /apis/rbac.authorization.k8s.io/v1beta1/namespaces/{namespace}/roles | 
[**createRbacAuthorizationV1beta1NamespacedRoleBinding**](RbacAuthorization_v1beta1Api.md#createRbacAuthorizationV1beta1NamespacedRoleBinding) | **POST** /apis/rbac.authorization.k8s.io/v1beta1/namespaces/{namespace}/rolebindings | 
[**createRbacAuthorizationV1beta1RoleBindingForAllNamespaces**](RbacAuthorization_v1beta1Api.md#createRbacAuthorizationV1beta1RoleBindingForAllNamespaces) | **POST** /apis/rbac.authorization.k8s.io/v1beta1/rolebindings | 
[**createRbacAuthorizationV1beta1RoleForAllNamespaces**](RbacAuthorization_v1beta1Api.md#createRbacAuthorizationV1beta1RoleForAllNamespaces) | **POST** /apis/rbac.authorization.k8s.io/v1beta1/roles | 
[**deleteRbacAuthorizationV1beta1ClusterRole**](RbacAuthorization_v1beta1Api.md#deleteRbacAuthorizationV1beta1ClusterRole) | **DELETE** /apis/rbac.authorization.k8s.io/v1beta1/clusterroles/{name} | 
[**deleteRbacAuthorizationV1beta1ClusterRoleBinding**](RbacAuthorization_v1beta1Api.md#deleteRbacAuthorizationV1beta1ClusterRoleBinding) | **DELETE** /apis/rbac.authorization.k8s.io/v1beta1/clusterrolebindings/{name} | 
[**deleteRbacAuthorizationV1beta1CollectionClusterRole**](RbacAuthorization_v1beta1Api.md#deleteRbacAuthorizationV1beta1CollectionClusterRole) | **DELETE** /apis/rbac.authorization.k8s.io/v1beta1/clusterroles | 
[**deleteRbacAuthorizationV1beta1CollectionClusterRoleBinding**](RbacAuthorization_v1beta1Api.md#deleteRbacAuthorizationV1beta1CollectionClusterRoleBinding) | **DELETE** /apis/rbac.authorization.k8s.io/v1beta1/clusterrolebindings | 
[**deleteRbacAuthorizationV1beta1CollectionNamespacedRole**](RbacAuthorization_v1beta1Api.md#deleteRbacAuthorizationV1beta1CollectionNamespacedRole) | **DELETE** /apis/rbac.authorization.k8s.io/v1beta1/namespaces/{namespace}/roles | 
[**deleteRbacAuthorizationV1beta1CollectionNamespacedRoleBinding**](RbacAuthorization_v1beta1Api.md#deleteRbacAuthorizationV1beta1CollectionNamespacedRoleBinding) | **DELETE** /apis/rbac.authorization.k8s.io/v1beta1/namespaces/{namespace}/rolebindings | 
[**deleteRbacAuthorizationV1beta1NamespacedRole**](RbacAuthorization_v1beta1Api.md#deleteRbacAuthorizationV1beta1NamespacedRole) | **DELETE** /apis/rbac.authorization.k8s.io/v1beta1/namespaces/{namespace}/roles/{name} | 
[**deleteRbacAuthorizationV1beta1NamespacedRoleBinding**](RbacAuthorization_v1beta1Api.md#deleteRbacAuthorizationV1beta1NamespacedRoleBinding) | **DELETE** /apis/rbac.authorization.k8s.io/v1beta1/namespaces/{namespace}/rolebindings/{name} | 
[**getRbacAuthorizationV1beta1APIResources**](RbacAuthorization_v1beta1Api.md#getRbacAuthorizationV1beta1APIResources) | **GET** /apis/rbac.authorization.k8s.io/v1beta1/ | 
[**listRbacAuthorizationV1beta1ClusterRole**](RbacAuthorization_v1beta1Api.md#listRbacAuthorizationV1beta1ClusterRole) | **GET** /apis/rbac.authorization.k8s.io/v1beta1/clusterroles | 
[**listRbacAuthorizationV1beta1ClusterRoleBinding**](RbacAuthorization_v1beta1Api.md#listRbacAuthorizationV1beta1ClusterRoleBinding) | **GET** /apis/rbac.authorization.k8s.io/v1beta1/clusterrolebindings | 
[**listRbacAuthorizationV1beta1NamespacedRole**](RbacAuthorization_v1beta1Api.md#listRbacAuthorizationV1beta1NamespacedRole) | **GET** /apis/rbac.authorization.k8s.io/v1beta1/namespaces/{namespace}/roles | 
[**listRbacAuthorizationV1beta1NamespacedRoleBinding**](RbacAuthorization_v1beta1Api.md#listRbacAuthorizationV1beta1NamespacedRoleBinding) | **GET** /apis/rbac.authorization.k8s.io/v1beta1/namespaces/{namespace}/rolebindings | 
[**listRbacAuthorizationV1beta1RoleBindingForAllNamespaces**](RbacAuthorization_v1beta1Api.md#listRbacAuthorizationV1beta1RoleBindingForAllNamespaces) | **GET** /apis/rbac.authorization.k8s.io/v1beta1/rolebindings | 
[**listRbacAuthorizationV1beta1RoleForAllNamespaces**](RbacAuthorization_v1beta1Api.md#listRbacAuthorizationV1beta1RoleForAllNamespaces) | **GET** /apis/rbac.authorization.k8s.io/v1beta1/roles | 
[**patchRbacAuthorizationV1beta1ClusterRole**](RbacAuthorization_v1beta1Api.md#patchRbacAuthorizationV1beta1ClusterRole) | **PATCH** /apis/rbac.authorization.k8s.io/v1beta1/clusterroles/{name} | 
[**patchRbacAuthorizationV1beta1ClusterRoleBinding**](RbacAuthorization_v1beta1Api.md#patchRbacAuthorizationV1beta1ClusterRoleBinding) | **PATCH** /apis/rbac.authorization.k8s.io/v1beta1/clusterrolebindings/{name} | 
[**patchRbacAuthorizationV1beta1NamespacedRole**](RbacAuthorization_v1beta1Api.md#patchRbacAuthorizationV1beta1NamespacedRole) | **PATCH** /apis/rbac.authorization.k8s.io/v1beta1/namespaces/{namespace}/roles/{name} | 
[**patchRbacAuthorizationV1beta1NamespacedRoleBinding**](RbacAuthorization_v1beta1Api.md#patchRbacAuthorizationV1beta1NamespacedRoleBinding) | **PATCH** /apis/rbac.authorization.k8s.io/v1beta1/namespaces/{namespace}/rolebindings/{name} | 
[**readRbacAuthorizationV1beta1ClusterRole**](RbacAuthorization_v1beta1Api.md#readRbacAuthorizationV1beta1ClusterRole) | **GET** /apis/rbac.authorization.k8s.io/v1beta1/clusterroles/{name} | 
[**readRbacAuthorizationV1beta1ClusterRoleBinding**](RbacAuthorization_v1beta1Api.md#readRbacAuthorizationV1beta1ClusterRoleBinding) | **GET** /apis/rbac.authorization.k8s.io/v1beta1/clusterrolebindings/{name} | 
[**readRbacAuthorizationV1beta1NamespacedRole**](RbacAuthorization_v1beta1Api.md#readRbacAuthorizationV1beta1NamespacedRole) | **GET** /apis/rbac.authorization.k8s.io/v1beta1/namespaces/{namespace}/roles/{name} | 
[**readRbacAuthorizationV1beta1NamespacedRoleBinding**](RbacAuthorization_v1beta1Api.md#readRbacAuthorizationV1beta1NamespacedRoleBinding) | **GET** /apis/rbac.authorization.k8s.io/v1beta1/namespaces/{namespace}/rolebindings/{name} | 
[**replaceRbacAuthorizationV1beta1ClusterRole**](RbacAuthorization_v1beta1Api.md#replaceRbacAuthorizationV1beta1ClusterRole) | **PUT** /apis/rbac.authorization.k8s.io/v1beta1/clusterroles/{name} | 
[**replaceRbacAuthorizationV1beta1ClusterRoleBinding**](RbacAuthorization_v1beta1Api.md#replaceRbacAuthorizationV1beta1ClusterRoleBinding) | **PUT** /apis/rbac.authorization.k8s.io/v1beta1/clusterrolebindings/{name} | 
[**replaceRbacAuthorizationV1beta1NamespacedRole**](RbacAuthorization_v1beta1Api.md#replaceRbacAuthorizationV1beta1NamespacedRole) | **PUT** /apis/rbac.authorization.k8s.io/v1beta1/namespaces/{namespace}/roles/{name} | 
[**replaceRbacAuthorizationV1beta1NamespacedRoleBinding**](RbacAuthorization_v1beta1Api.md#replaceRbacAuthorizationV1beta1NamespacedRoleBinding) | **PUT** /apis/rbac.authorization.k8s.io/v1beta1/namespaces/{namespace}/rolebindings/{name} | 
[**watchRbacAuthorizationV1beta1ClusterRole**](RbacAuthorization_v1beta1Api.md#watchRbacAuthorizationV1beta1ClusterRole) | **GET** /apis/rbac.authorization.k8s.io/v1beta1/watch/clusterroles/{name} | 
[**watchRbacAuthorizationV1beta1ClusterRoleBinding**](RbacAuthorization_v1beta1Api.md#watchRbacAuthorizationV1beta1ClusterRoleBinding) | **GET** /apis/rbac.authorization.k8s.io/v1beta1/watch/clusterrolebindings/{name} | 
[**watchRbacAuthorizationV1beta1ClusterRoleBindingList**](RbacAuthorization_v1beta1Api.md#watchRbacAuthorizationV1beta1ClusterRoleBindingList) | **GET** /apis/rbac.authorization.k8s.io/v1beta1/watch/clusterrolebindings | 
[**watchRbacAuthorizationV1beta1ClusterRoleList**](RbacAuthorization_v1beta1Api.md#watchRbacAuthorizationV1beta1ClusterRoleList) | **GET** /apis/rbac.authorization.k8s.io/v1beta1/watch/clusterroles | 
[**watchRbacAuthorizationV1beta1NamespacedRole**](RbacAuthorization_v1beta1Api.md#watchRbacAuthorizationV1beta1NamespacedRole) | **GET** /apis/rbac.authorization.k8s.io/v1beta1/watch/namespaces/{namespace}/roles/{name} | 
[**watchRbacAuthorizationV1beta1NamespacedRoleBinding**](RbacAuthorization_v1beta1Api.md#watchRbacAuthorizationV1beta1NamespacedRoleBinding) | **GET** /apis/rbac.authorization.k8s.io/v1beta1/watch/namespaces/{namespace}/rolebindings/{name} | 
[**watchRbacAuthorizationV1beta1NamespacedRoleBindingList**](RbacAuthorization_v1beta1Api.md#watchRbacAuthorizationV1beta1NamespacedRoleBindingList) | **GET** /apis/rbac.authorization.k8s.io/v1beta1/watch/namespaces/{namespace}/rolebindings | 
[**watchRbacAuthorizationV1beta1NamespacedRoleList**](RbacAuthorization_v1beta1Api.md#watchRbacAuthorizationV1beta1NamespacedRoleList) | **GET** /apis/rbac.authorization.k8s.io/v1beta1/watch/namespaces/{namespace}/roles | 
[**watchRbacAuthorizationV1beta1RoleBindingListForAllNamespaces**](RbacAuthorization_v1beta1Api.md#watchRbacAuthorizationV1beta1RoleBindingListForAllNamespaces) | **GET** /apis/rbac.authorization.k8s.io/v1beta1/watch/rolebindings | 
[**watchRbacAuthorizationV1beta1RoleListForAllNamespaces**](RbacAuthorization_v1beta1Api.md#watchRbacAuthorizationV1beta1RoleListForAllNamespaces) | **GET** /apis/rbac.authorization.k8s.io/v1beta1/watch/roles | 


# **createRbacAuthorizationV1beta1ClusterRole**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1ClusterRole createRbacAuthorizationV1beta1ClusterRole($body, $pretty)



create a ClusterRole

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\RbacAuthorization_v1beta1Api();
$body = new \UniversityOfAdelaide\OpenShift\Model\V1beta1ClusterRole(); // \UniversityOfAdelaide\OpenShift\Model\V1beta1ClusterRole | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createRbacAuthorizationV1beta1ClusterRole($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RbacAuthorization_v1beta1Api->createRbacAuthorizationV1beta1ClusterRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1beta1ClusterRole**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1beta1ClusterRole.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1ClusterRole**](../Model/V1beta1ClusterRole.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRbacAuthorizationV1beta1ClusterRoleBinding**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1ClusterRoleBinding createRbacAuthorizationV1beta1ClusterRoleBinding($body, $pretty)



create a ClusterRoleBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\RbacAuthorization_v1beta1Api();
$body = new \UniversityOfAdelaide\OpenShift\Model\V1beta1ClusterRoleBinding(); // \UniversityOfAdelaide\OpenShift\Model\V1beta1ClusterRoleBinding | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createRbacAuthorizationV1beta1ClusterRoleBinding($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RbacAuthorization_v1beta1Api->createRbacAuthorizationV1beta1ClusterRoleBinding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1beta1ClusterRoleBinding**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1beta1ClusterRoleBinding.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1ClusterRoleBinding**](../Model/V1beta1ClusterRoleBinding.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRbacAuthorizationV1beta1NamespacedRole**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1Role createRbacAuthorizationV1beta1NamespacedRole($namespace, $body, $pretty)



create a Role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\RbacAuthorization_v1beta1Api();
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1beta1Role(); // \UniversityOfAdelaide\OpenShift\Model\V1beta1Role | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createRbacAuthorizationV1beta1NamespacedRole($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RbacAuthorization_v1beta1Api->createRbacAuthorizationV1beta1NamespacedRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1beta1Role**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1beta1Role.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1Role**](../Model/V1beta1Role.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRbacAuthorizationV1beta1NamespacedRoleBinding**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1RoleBinding createRbacAuthorizationV1beta1NamespacedRoleBinding($namespace, $body, $pretty)



create a RoleBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\RbacAuthorization_v1beta1Api();
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1beta1RoleBinding(); // \UniversityOfAdelaide\OpenShift\Model\V1beta1RoleBinding | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createRbacAuthorizationV1beta1NamespacedRoleBinding($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RbacAuthorization_v1beta1Api->createRbacAuthorizationV1beta1NamespacedRoleBinding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1beta1RoleBinding**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1beta1RoleBinding.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1RoleBinding**](../Model/V1beta1RoleBinding.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRbacAuthorizationV1beta1RoleBindingForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1RoleBinding createRbacAuthorizationV1beta1RoleBindingForAllNamespaces($body, $pretty)



create a RoleBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\RbacAuthorization_v1beta1Api();
$body = new \UniversityOfAdelaide\OpenShift\Model\V1beta1RoleBinding(); // \UniversityOfAdelaide\OpenShift\Model\V1beta1RoleBinding | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createRbacAuthorizationV1beta1RoleBindingForAllNamespaces($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RbacAuthorization_v1beta1Api->createRbacAuthorizationV1beta1RoleBindingForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1beta1RoleBinding**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1beta1RoleBinding.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1RoleBinding**](../Model/V1beta1RoleBinding.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRbacAuthorizationV1beta1RoleForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1Role createRbacAuthorizationV1beta1RoleForAllNamespaces($body, $pretty)



create a Role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\RbacAuthorization_v1beta1Api();
$body = new \UniversityOfAdelaide\OpenShift\Model\V1beta1Role(); // \UniversityOfAdelaide\OpenShift\Model\V1beta1Role | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createRbacAuthorizationV1beta1RoleForAllNamespaces($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RbacAuthorization_v1beta1Api->createRbacAuthorizationV1beta1RoleForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1beta1Role**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1beta1Role.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1Role**](../Model/V1beta1Role.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRbacAuthorizationV1beta1ClusterRole**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteRbacAuthorizationV1beta1ClusterRole($name, $body, $pretty, $grace_period_seconds, $orphan_dependents, $propagation_policy)



delete a ClusterRole

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\RbacAuthorization_v1beta1Api();
$name = "name_example"; // string | name of the ClusterRole
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions(); // \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$grace_period_seconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphan_dependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagation_policy = "propagation_policy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteRbacAuthorizationV1beta1ClusterRole($name, $body, $pretty, $grace_period_seconds, $orphan_dependents, $propagation_policy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RbacAuthorization_v1beta1Api->deleteRbacAuthorizationV1beta1ClusterRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ClusterRole |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **grace_period_seconds** | **int**| The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately. | [optional]
 **orphan_dependents** | **bool**| Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \&quot;orphan\&quot; finalizer will be added to/removed from the object&#39;s finalizers list. Either this field or PropagationPolicy may be set, but not both. | [optional]
 **propagation_policy** | **string**| Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRbacAuthorizationV1beta1ClusterRoleBinding**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteRbacAuthorizationV1beta1ClusterRoleBinding($name, $body, $pretty, $grace_period_seconds, $orphan_dependents, $propagation_policy)



delete a ClusterRoleBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\RbacAuthorization_v1beta1Api();
$name = "name_example"; // string | name of the ClusterRoleBinding
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions(); // \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$grace_period_seconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphan_dependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagation_policy = "propagation_policy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteRbacAuthorizationV1beta1ClusterRoleBinding($name, $body, $pretty, $grace_period_seconds, $orphan_dependents, $propagation_policy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RbacAuthorization_v1beta1Api->deleteRbacAuthorizationV1beta1ClusterRoleBinding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ClusterRoleBinding |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **grace_period_seconds** | **int**| The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately. | [optional]
 **orphan_dependents** | **bool**| Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \&quot;orphan\&quot; finalizer will be added to/removed from the object&#39;s finalizers list. Either this field or PropagationPolicy may be set, but not both. | [optional]
 **propagation_policy** | **string**| Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRbacAuthorizationV1beta1CollectionClusterRole**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteRbacAuthorizationV1beta1CollectionClusterRole($pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch)



delete collection of ClusterRole

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\RbacAuthorization_v1beta1Api();
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->deleteRbacAuthorizationV1beta1CollectionClusterRole($pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RbacAuthorization_v1beta1Api->deleteRbacAuthorizationV1beta1CollectionClusterRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **field_selector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **label_selector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resource_version** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeout_seconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRbacAuthorizationV1beta1CollectionClusterRoleBinding**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteRbacAuthorizationV1beta1CollectionClusterRoleBinding($pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch)



delete collection of ClusterRoleBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\RbacAuthorization_v1beta1Api();
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->deleteRbacAuthorizationV1beta1CollectionClusterRoleBinding($pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RbacAuthorization_v1beta1Api->deleteRbacAuthorizationV1beta1CollectionClusterRoleBinding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **field_selector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **label_selector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resource_version** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeout_seconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRbacAuthorizationV1beta1CollectionNamespacedRole**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteRbacAuthorizationV1beta1CollectionNamespacedRole($namespace, $pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch)



delete collection of Role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\RbacAuthorization_v1beta1Api();
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->deleteRbacAuthorizationV1beta1CollectionNamespacedRole($namespace, $pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RbacAuthorization_v1beta1Api->deleteRbacAuthorizationV1beta1CollectionNamespacedRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **field_selector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **label_selector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resource_version** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeout_seconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRbacAuthorizationV1beta1CollectionNamespacedRoleBinding**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteRbacAuthorizationV1beta1CollectionNamespacedRoleBinding($namespace, $pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch)



delete collection of RoleBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\RbacAuthorization_v1beta1Api();
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->deleteRbacAuthorizationV1beta1CollectionNamespacedRoleBinding($namespace, $pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RbacAuthorization_v1beta1Api->deleteRbacAuthorizationV1beta1CollectionNamespacedRoleBinding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **field_selector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **label_selector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resource_version** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeout_seconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRbacAuthorizationV1beta1NamespacedRole**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteRbacAuthorizationV1beta1NamespacedRole($name, $namespace, $body, $pretty, $grace_period_seconds, $orphan_dependents, $propagation_policy)



delete a Role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\RbacAuthorization_v1beta1Api();
$name = "name_example"; // string | name of the Role
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions(); // \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$grace_period_seconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphan_dependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagation_policy = "propagation_policy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteRbacAuthorizationV1beta1NamespacedRole($name, $namespace, $body, $pretty, $grace_period_seconds, $orphan_dependents, $propagation_policy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RbacAuthorization_v1beta1Api->deleteRbacAuthorizationV1beta1NamespacedRole: ', $e->getMessage(), PHP_EOL;
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
 **grace_period_seconds** | **int**| The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately. | [optional]
 **orphan_dependents** | **bool**| Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \&quot;orphan\&quot; finalizer will be added to/removed from the object&#39;s finalizers list. Either this field or PropagationPolicy may be set, but not both. | [optional]
 **propagation_policy** | **string**| Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRbacAuthorizationV1beta1NamespacedRoleBinding**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteRbacAuthorizationV1beta1NamespacedRoleBinding($name, $namespace, $body, $pretty, $grace_period_seconds, $orphan_dependents, $propagation_policy)



delete a RoleBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\RbacAuthorization_v1beta1Api();
$name = "name_example"; // string | name of the RoleBinding
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions(); // \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$grace_period_seconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphan_dependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagation_policy = "propagation_policy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteRbacAuthorizationV1beta1NamespacedRoleBinding($name, $namespace, $body, $pretty, $grace_period_seconds, $orphan_dependents, $propagation_policy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RbacAuthorization_v1beta1Api->deleteRbacAuthorizationV1beta1NamespacedRoleBinding: ', $e->getMessage(), PHP_EOL;
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
 **grace_period_seconds** | **int**| The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately. | [optional]
 **orphan_dependents** | **bool**| Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \&quot;orphan\&quot; finalizer will be added to/removed from the object&#39;s finalizers list. Either this field or PropagationPolicy may be set, but not both. | [optional]
 **propagation_policy** | **string**| Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRbacAuthorizationV1beta1APIResources**
> \UniversityOfAdelaide\OpenShift\Model\V1APIResourceList getRbacAuthorizationV1beta1APIResources()



get available resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\RbacAuthorization_v1beta1Api();

try {
    $result = $api_instance->getRbacAuthorizationV1beta1APIResources();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RbacAuthorization_v1beta1Api->getRbacAuthorizationV1beta1APIResources: ', $e->getMessage(), PHP_EOL;
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

# **listRbacAuthorizationV1beta1ClusterRole**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1ClusterRoleList listRbacAuthorizationV1beta1ClusterRole($pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch)



list or watch objects of kind ClusterRole

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\RbacAuthorization_v1beta1Api();
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listRbacAuthorizationV1beta1ClusterRole($pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RbacAuthorization_v1beta1Api->listRbacAuthorizationV1beta1ClusterRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **field_selector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **label_selector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resource_version** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeout_seconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1ClusterRoleList**](../Model/V1beta1ClusterRoleList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listRbacAuthorizationV1beta1ClusterRoleBinding**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1ClusterRoleBindingList listRbacAuthorizationV1beta1ClusterRoleBinding($pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch)



list or watch objects of kind ClusterRoleBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\RbacAuthorization_v1beta1Api();
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listRbacAuthorizationV1beta1ClusterRoleBinding($pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RbacAuthorization_v1beta1Api->listRbacAuthorizationV1beta1ClusterRoleBinding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **field_selector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **label_selector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resource_version** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeout_seconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1ClusterRoleBindingList**](../Model/V1beta1ClusterRoleBindingList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listRbacAuthorizationV1beta1NamespacedRole**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1RoleList listRbacAuthorizationV1beta1NamespacedRole($namespace, $pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch)



list or watch objects of kind Role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\RbacAuthorization_v1beta1Api();
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listRbacAuthorizationV1beta1NamespacedRole($namespace, $pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RbacAuthorization_v1beta1Api->listRbacAuthorizationV1beta1NamespacedRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **field_selector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **label_selector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resource_version** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeout_seconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1RoleList**](../Model/V1beta1RoleList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listRbacAuthorizationV1beta1NamespacedRoleBinding**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1RoleBindingList listRbacAuthorizationV1beta1NamespacedRoleBinding($namespace, $pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch)



list or watch objects of kind RoleBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\RbacAuthorization_v1beta1Api();
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listRbacAuthorizationV1beta1NamespacedRoleBinding($namespace, $pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RbacAuthorization_v1beta1Api->listRbacAuthorizationV1beta1NamespacedRoleBinding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **field_selector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **label_selector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resource_version** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeout_seconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1RoleBindingList**](../Model/V1beta1RoleBindingList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listRbacAuthorizationV1beta1RoleBindingForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1RoleBindingList listRbacAuthorizationV1beta1RoleBindingForAllNamespaces($pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch)



list or watch objects of kind RoleBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\RbacAuthorization_v1beta1Api();
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listRbacAuthorizationV1beta1RoleBindingForAllNamespaces($pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RbacAuthorization_v1beta1Api->listRbacAuthorizationV1beta1RoleBindingForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **field_selector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **label_selector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resource_version** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeout_seconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1RoleBindingList**](../Model/V1beta1RoleBindingList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listRbacAuthorizationV1beta1RoleForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1RoleList listRbacAuthorizationV1beta1RoleForAllNamespaces($pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch)



list or watch objects of kind Role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\RbacAuthorization_v1beta1Api();
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listRbacAuthorizationV1beta1RoleForAllNamespaces($pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RbacAuthorization_v1beta1Api->listRbacAuthorizationV1beta1RoleForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **field_selector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **label_selector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resource_version** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeout_seconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1RoleList**](../Model/V1beta1RoleList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchRbacAuthorizationV1beta1ClusterRole**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1ClusterRole patchRbacAuthorizationV1beta1ClusterRole($name, $body, $pretty)



partially update the specified ClusterRole

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\RbacAuthorization_v1beta1Api();
$name = "name_example"; // string | name of the ClusterRole
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchRbacAuthorizationV1beta1ClusterRole($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RbacAuthorization_v1beta1Api->patchRbacAuthorizationV1beta1ClusterRole: ', $e->getMessage(), PHP_EOL;
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

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1ClusterRole**](../Model/V1beta1ClusterRole.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchRbacAuthorizationV1beta1ClusterRoleBinding**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1ClusterRoleBinding patchRbacAuthorizationV1beta1ClusterRoleBinding($name, $body, $pretty)



partially update the specified ClusterRoleBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\RbacAuthorization_v1beta1Api();
$name = "name_example"; // string | name of the ClusterRoleBinding
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchRbacAuthorizationV1beta1ClusterRoleBinding($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RbacAuthorization_v1beta1Api->patchRbacAuthorizationV1beta1ClusterRoleBinding: ', $e->getMessage(), PHP_EOL;
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

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1ClusterRoleBinding**](../Model/V1beta1ClusterRoleBinding.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchRbacAuthorizationV1beta1NamespacedRole**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1Role patchRbacAuthorizationV1beta1NamespacedRole($name, $namespace, $body, $pretty)



partially update the specified Role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\RbacAuthorization_v1beta1Api();
$name = "name_example"; // string | name of the Role
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchRbacAuthorizationV1beta1NamespacedRole($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RbacAuthorization_v1beta1Api->patchRbacAuthorizationV1beta1NamespacedRole: ', $e->getMessage(), PHP_EOL;
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

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1Role**](../Model/V1beta1Role.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchRbacAuthorizationV1beta1NamespacedRoleBinding**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1RoleBinding patchRbacAuthorizationV1beta1NamespacedRoleBinding($name, $namespace, $body, $pretty)



partially update the specified RoleBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\RbacAuthorization_v1beta1Api();
$name = "name_example"; // string | name of the RoleBinding
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchRbacAuthorizationV1beta1NamespacedRoleBinding($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RbacAuthorization_v1beta1Api->patchRbacAuthorizationV1beta1NamespacedRoleBinding: ', $e->getMessage(), PHP_EOL;
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

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1RoleBinding**](../Model/V1beta1RoleBinding.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readRbacAuthorizationV1beta1ClusterRole**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1ClusterRole readRbacAuthorizationV1beta1ClusterRole($name, $pretty)



read the specified ClusterRole

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\RbacAuthorization_v1beta1Api();
$name = "name_example"; // string | name of the ClusterRole
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->readRbacAuthorizationV1beta1ClusterRole($name, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RbacAuthorization_v1beta1Api->readRbacAuthorizationV1beta1ClusterRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ClusterRole |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1ClusterRole**](../Model/V1beta1ClusterRole.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readRbacAuthorizationV1beta1ClusterRoleBinding**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1ClusterRoleBinding readRbacAuthorizationV1beta1ClusterRoleBinding($name, $pretty)



read the specified ClusterRoleBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\RbacAuthorization_v1beta1Api();
$name = "name_example"; // string | name of the ClusterRoleBinding
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->readRbacAuthorizationV1beta1ClusterRoleBinding($name, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RbacAuthorization_v1beta1Api->readRbacAuthorizationV1beta1ClusterRoleBinding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ClusterRoleBinding |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1ClusterRoleBinding**](../Model/V1beta1ClusterRoleBinding.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readRbacAuthorizationV1beta1NamespacedRole**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1Role readRbacAuthorizationV1beta1NamespacedRole($name, $namespace, $pretty)



read the specified Role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\RbacAuthorization_v1beta1Api();
$name = "name_example"; // string | name of the Role
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->readRbacAuthorizationV1beta1NamespacedRole($name, $namespace, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RbacAuthorization_v1beta1Api->readRbacAuthorizationV1beta1NamespacedRole: ', $e->getMessage(), PHP_EOL;
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

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1Role**](../Model/V1beta1Role.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readRbacAuthorizationV1beta1NamespacedRoleBinding**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1RoleBinding readRbacAuthorizationV1beta1NamespacedRoleBinding($name, $namespace, $pretty)



read the specified RoleBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\RbacAuthorization_v1beta1Api();
$name = "name_example"; // string | name of the RoleBinding
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->readRbacAuthorizationV1beta1NamespacedRoleBinding($name, $namespace, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RbacAuthorization_v1beta1Api->readRbacAuthorizationV1beta1NamespacedRoleBinding: ', $e->getMessage(), PHP_EOL;
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

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1RoleBinding**](../Model/V1beta1RoleBinding.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceRbacAuthorizationV1beta1ClusterRole**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1ClusterRole replaceRbacAuthorizationV1beta1ClusterRole($name, $body, $pretty)



replace the specified ClusterRole

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\RbacAuthorization_v1beta1Api();
$name = "name_example"; // string | name of the ClusterRole
$body = new \UniversityOfAdelaide\OpenShift\Model\V1beta1ClusterRole(); // \UniversityOfAdelaide\OpenShift\Model\V1beta1ClusterRole | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceRbacAuthorizationV1beta1ClusterRole($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RbacAuthorization_v1beta1Api->replaceRbacAuthorizationV1beta1ClusterRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ClusterRole |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1beta1ClusterRole**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1beta1ClusterRole.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1ClusterRole**](../Model/V1beta1ClusterRole.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceRbacAuthorizationV1beta1ClusterRoleBinding**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1ClusterRoleBinding replaceRbacAuthorizationV1beta1ClusterRoleBinding($name, $body, $pretty)



replace the specified ClusterRoleBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\RbacAuthorization_v1beta1Api();
$name = "name_example"; // string | name of the ClusterRoleBinding
$body = new \UniversityOfAdelaide\OpenShift\Model\V1beta1ClusterRoleBinding(); // \UniversityOfAdelaide\OpenShift\Model\V1beta1ClusterRoleBinding | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceRbacAuthorizationV1beta1ClusterRoleBinding($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RbacAuthorization_v1beta1Api->replaceRbacAuthorizationV1beta1ClusterRoleBinding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ClusterRoleBinding |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1beta1ClusterRoleBinding**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1beta1ClusterRoleBinding.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1ClusterRoleBinding**](../Model/V1beta1ClusterRoleBinding.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceRbacAuthorizationV1beta1NamespacedRole**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1Role replaceRbacAuthorizationV1beta1NamespacedRole($name, $namespace, $body, $pretty)



replace the specified Role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\RbacAuthorization_v1beta1Api();
$name = "name_example"; // string | name of the Role
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1beta1Role(); // \UniversityOfAdelaide\OpenShift\Model\V1beta1Role | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceRbacAuthorizationV1beta1NamespacedRole($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RbacAuthorization_v1beta1Api->replaceRbacAuthorizationV1beta1NamespacedRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Role |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1beta1Role**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1beta1Role.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1Role**](../Model/V1beta1Role.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceRbacAuthorizationV1beta1NamespacedRoleBinding**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1RoleBinding replaceRbacAuthorizationV1beta1NamespacedRoleBinding($name, $namespace, $body, $pretty)



replace the specified RoleBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\RbacAuthorization_v1beta1Api();
$name = "name_example"; // string | name of the RoleBinding
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1beta1RoleBinding(); // \UniversityOfAdelaide\OpenShift\Model\V1beta1RoleBinding | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceRbacAuthorizationV1beta1NamespacedRoleBinding($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RbacAuthorization_v1beta1Api->replaceRbacAuthorizationV1beta1NamespacedRoleBinding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the RoleBinding |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1beta1RoleBinding**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1beta1RoleBinding.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1RoleBinding**](../Model/V1beta1RoleBinding.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchRbacAuthorizationV1beta1ClusterRole**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchRbacAuthorizationV1beta1ClusterRole($name, $field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch)



watch changes to an object of kind ClusterRole

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\RbacAuthorization_v1beta1Api();
$name = "name_example"; // string | name of the ClusterRole
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchRbacAuthorizationV1beta1ClusterRole($name, $field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RbacAuthorization_v1beta1Api->watchRbacAuthorizationV1beta1ClusterRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ClusterRole |
 **field_selector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **label_selector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resource_version** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeout_seconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchRbacAuthorizationV1beta1ClusterRoleBinding**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchRbacAuthorizationV1beta1ClusterRoleBinding($name, $field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch)



watch changes to an object of kind ClusterRoleBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\RbacAuthorization_v1beta1Api();
$name = "name_example"; // string | name of the ClusterRoleBinding
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchRbacAuthorizationV1beta1ClusterRoleBinding($name, $field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RbacAuthorization_v1beta1Api->watchRbacAuthorizationV1beta1ClusterRoleBinding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ClusterRoleBinding |
 **field_selector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **label_selector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resource_version** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeout_seconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchRbacAuthorizationV1beta1ClusterRoleBindingList**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchRbacAuthorizationV1beta1ClusterRoleBindingList($field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch)



watch individual changes to a list of ClusterRoleBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\RbacAuthorization_v1beta1Api();
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchRbacAuthorizationV1beta1ClusterRoleBindingList($field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RbacAuthorization_v1beta1Api->watchRbacAuthorizationV1beta1ClusterRoleBindingList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **field_selector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **label_selector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resource_version** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeout_seconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchRbacAuthorizationV1beta1ClusterRoleList**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchRbacAuthorizationV1beta1ClusterRoleList($field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch)



watch individual changes to a list of ClusterRole

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\RbacAuthorization_v1beta1Api();
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchRbacAuthorizationV1beta1ClusterRoleList($field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RbacAuthorization_v1beta1Api->watchRbacAuthorizationV1beta1ClusterRoleList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **field_selector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **label_selector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resource_version** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeout_seconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchRbacAuthorizationV1beta1NamespacedRole**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchRbacAuthorizationV1beta1NamespacedRole($name, $namespace, $field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch)



watch changes to an object of kind Role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\RbacAuthorization_v1beta1Api();
$name = "name_example"; // string | name of the Role
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchRbacAuthorizationV1beta1NamespacedRole($name, $namespace, $field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RbacAuthorization_v1beta1Api->watchRbacAuthorizationV1beta1NamespacedRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Role |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **field_selector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **label_selector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resource_version** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeout_seconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchRbacAuthorizationV1beta1NamespacedRoleBinding**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchRbacAuthorizationV1beta1NamespacedRoleBinding($name, $namespace, $field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch)



watch changes to an object of kind RoleBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\RbacAuthorization_v1beta1Api();
$name = "name_example"; // string | name of the RoleBinding
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchRbacAuthorizationV1beta1NamespacedRoleBinding($name, $namespace, $field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RbacAuthorization_v1beta1Api->watchRbacAuthorizationV1beta1NamespacedRoleBinding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the RoleBinding |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **field_selector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **label_selector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resource_version** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeout_seconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchRbacAuthorizationV1beta1NamespacedRoleBindingList**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchRbacAuthorizationV1beta1NamespacedRoleBindingList($namespace, $field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch)



watch individual changes to a list of RoleBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\RbacAuthorization_v1beta1Api();
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchRbacAuthorizationV1beta1NamespacedRoleBindingList($namespace, $field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RbacAuthorization_v1beta1Api->watchRbacAuthorizationV1beta1NamespacedRoleBindingList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **field_selector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **label_selector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resource_version** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeout_seconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchRbacAuthorizationV1beta1NamespacedRoleList**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchRbacAuthorizationV1beta1NamespacedRoleList($namespace, $field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch)



watch individual changes to a list of Role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\RbacAuthorization_v1beta1Api();
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchRbacAuthorizationV1beta1NamespacedRoleList($namespace, $field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RbacAuthorization_v1beta1Api->watchRbacAuthorizationV1beta1NamespacedRoleList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **field_selector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **label_selector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resource_version** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeout_seconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchRbacAuthorizationV1beta1RoleBindingListForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchRbacAuthorizationV1beta1RoleBindingListForAllNamespaces($field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch)



watch individual changes to a list of RoleBinding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\RbacAuthorization_v1beta1Api();
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchRbacAuthorizationV1beta1RoleBindingListForAllNamespaces($field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RbacAuthorization_v1beta1Api->watchRbacAuthorizationV1beta1RoleBindingListForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **field_selector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **label_selector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resource_version** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeout_seconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchRbacAuthorizationV1beta1RoleListForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchRbacAuthorizationV1beta1RoleListForAllNamespaces($field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch)



watch individual changes to a list of Role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\RbacAuthorization_v1beta1Api();
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchRbacAuthorizationV1beta1RoleListForAllNamespaces($field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RbacAuthorization_v1beta1Api->watchRbacAuthorizationV1beta1RoleListForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **field_selector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **label_selector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resource_version** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeout_seconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

