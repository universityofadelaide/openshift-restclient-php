# UniversityOfAdelaide\OpenShift\AppsOpenshiftIo_v1Api

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAppsOpenshiftIoV1DeploymentConfigForAllNamespaces**](AppsOpenshiftIo_v1Api.md#createAppsOpenshiftIoV1DeploymentConfigForAllNamespaces) | **POST** /apis/apps.openshift.io/v1/deploymentconfigs | 
[**createAppsOpenshiftIoV1NamespacedDeploymentConfig**](AppsOpenshiftIo_v1Api.md#createAppsOpenshiftIoV1NamespacedDeploymentConfig) | **POST** /apis/apps.openshift.io/v1/namespaces/{namespace}/deploymentconfigs | 
[**createAppsOpenshiftIoV1NamespacedDeploymentConfigRollbackRollback**](AppsOpenshiftIo_v1Api.md#createAppsOpenshiftIoV1NamespacedDeploymentConfigRollbackRollback) | **POST** /apis/apps.openshift.io/v1/namespaces/{namespace}/deploymentconfigs/{name}/rollback | 
[**createAppsOpenshiftIoV1NamespacedDeploymentRequestInstantiate**](AppsOpenshiftIo_v1Api.md#createAppsOpenshiftIoV1NamespacedDeploymentRequestInstantiate) | **POST** /apis/apps.openshift.io/v1/namespaces/{namespace}/deploymentconfigs/{name}/instantiate | 
[**deleteAppsOpenshiftIoV1CollectionNamespacedDeploymentConfig**](AppsOpenshiftIo_v1Api.md#deleteAppsOpenshiftIoV1CollectionNamespacedDeploymentConfig) | **DELETE** /apis/apps.openshift.io/v1/namespaces/{namespace}/deploymentconfigs | 
[**deleteAppsOpenshiftIoV1NamespacedDeploymentConfig**](AppsOpenshiftIo_v1Api.md#deleteAppsOpenshiftIoV1NamespacedDeploymentConfig) | **DELETE** /apis/apps.openshift.io/v1/namespaces/{namespace}/deploymentconfigs/{name} | 
[**getAppsOpenshiftIoV1APIResources**](AppsOpenshiftIo_v1Api.md#getAppsOpenshiftIoV1APIResources) | **GET** /apis/apps.openshift.io/v1/ | 
[**listAppsOpenshiftIoV1DeploymentConfigForAllNamespaces**](AppsOpenshiftIo_v1Api.md#listAppsOpenshiftIoV1DeploymentConfigForAllNamespaces) | **GET** /apis/apps.openshift.io/v1/deploymentconfigs | 
[**listAppsOpenshiftIoV1NamespacedDeploymentConfig**](AppsOpenshiftIo_v1Api.md#listAppsOpenshiftIoV1NamespacedDeploymentConfig) | **GET** /apis/apps.openshift.io/v1/namespaces/{namespace}/deploymentconfigs | 
[**patchAppsOpenshiftIoV1NamespacedDeploymentConfig**](AppsOpenshiftIo_v1Api.md#patchAppsOpenshiftIoV1NamespacedDeploymentConfig) | **PATCH** /apis/apps.openshift.io/v1/namespaces/{namespace}/deploymentconfigs/{name} | 
[**patchAppsOpenshiftIoV1NamespacedDeploymentConfigStatus**](AppsOpenshiftIo_v1Api.md#patchAppsOpenshiftIoV1NamespacedDeploymentConfigStatus) | **PATCH** /apis/apps.openshift.io/v1/namespaces/{namespace}/deploymentconfigs/{name}/status | 
[**patchAppsOpenshiftIoV1NamespacedScaleScale**](AppsOpenshiftIo_v1Api.md#patchAppsOpenshiftIoV1NamespacedScaleScale) | **PATCH** /apis/apps.openshift.io/v1/namespaces/{namespace}/deploymentconfigs/{name}/scale | 
[**readAppsOpenshiftIoV1NamespacedDeploymentConfig**](AppsOpenshiftIo_v1Api.md#readAppsOpenshiftIoV1NamespacedDeploymentConfig) | **GET** /apis/apps.openshift.io/v1/namespaces/{namespace}/deploymentconfigs/{name} | 
[**readAppsOpenshiftIoV1NamespacedDeploymentConfigStatus**](AppsOpenshiftIo_v1Api.md#readAppsOpenshiftIoV1NamespacedDeploymentConfigStatus) | **GET** /apis/apps.openshift.io/v1/namespaces/{namespace}/deploymentconfigs/{name}/status | 
[**readAppsOpenshiftIoV1NamespacedDeploymentLogLog**](AppsOpenshiftIo_v1Api.md#readAppsOpenshiftIoV1NamespacedDeploymentLogLog) | **GET** /apis/apps.openshift.io/v1/namespaces/{namespace}/deploymentconfigs/{name}/log | 
[**readAppsOpenshiftIoV1NamespacedScaleScale**](AppsOpenshiftIo_v1Api.md#readAppsOpenshiftIoV1NamespacedScaleScale) | **GET** /apis/apps.openshift.io/v1/namespaces/{namespace}/deploymentconfigs/{name}/scale | 
[**replaceAppsOpenshiftIoV1NamespacedDeploymentConfig**](AppsOpenshiftIo_v1Api.md#replaceAppsOpenshiftIoV1NamespacedDeploymentConfig) | **PUT** /apis/apps.openshift.io/v1/namespaces/{namespace}/deploymentconfigs/{name} | 
[**replaceAppsOpenshiftIoV1NamespacedDeploymentConfigStatus**](AppsOpenshiftIo_v1Api.md#replaceAppsOpenshiftIoV1NamespacedDeploymentConfigStatus) | **PUT** /apis/apps.openshift.io/v1/namespaces/{namespace}/deploymentconfigs/{name}/status | 
[**replaceAppsOpenshiftIoV1NamespacedScaleScale**](AppsOpenshiftIo_v1Api.md#replaceAppsOpenshiftIoV1NamespacedScaleScale) | **PUT** /apis/apps.openshift.io/v1/namespaces/{namespace}/deploymentconfigs/{name}/scale | 
[**watchAppsOpenshiftIoV1DeploymentConfigListForAllNamespaces**](AppsOpenshiftIo_v1Api.md#watchAppsOpenshiftIoV1DeploymentConfigListForAllNamespaces) | **GET** /apis/apps.openshift.io/v1/watch/deploymentconfigs | 
[**watchAppsOpenshiftIoV1NamespacedDeploymentConfig**](AppsOpenshiftIo_v1Api.md#watchAppsOpenshiftIoV1NamespacedDeploymentConfig) | **GET** /apis/apps.openshift.io/v1/watch/namespaces/{namespace}/deploymentconfigs/{name} | 
[**watchAppsOpenshiftIoV1NamespacedDeploymentConfigList**](AppsOpenshiftIo_v1Api.md#watchAppsOpenshiftIoV1NamespacedDeploymentConfigList) | **GET** /apis/apps.openshift.io/v1/watch/namespaces/{namespace}/deploymentconfigs | 


# **createAppsOpenshiftIoV1DeploymentConfigForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig createAppsOpenshiftIoV1DeploymentConfigForAllNamespaces($body, $pretty)



create a DeploymentConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\AppsOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig(); // \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createAppsOpenshiftIoV1DeploymentConfigForAllNamespaces($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsOpenshiftIo_v1Api->createAppsOpenshiftIoV1DeploymentConfigForAllNamespaces: ', $e->getMessage(), PHP_EOL;
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

# **createAppsOpenshiftIoV1NamespacedDeploymentConfig**
> \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig createAppsOpenshiftIoV1NamespacedDeploymentConfig($namespace, $body, $pretty)



create a DeploymentConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\AppsOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig(); // \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createAppsOpenshiftIoV1NamespacedDeploymentConfig($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsOpenshiftIo_v1Api->createAppsOpenshiftIoV1NamespacedDeploymentConfig: ', $e->getMessage(), PHP_EOL;
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

# **createAppsOpenshiftIoV1NamespacedDeploymentConfigRollbackRollback**
> \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfigRollback createAppsOpenshiftIoV1NamespacedDeploymentConfigRollbackRollback($name, $namespace, $body, $pretty)



create rollback of a DeploymentConfigRollback

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\AppsOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the DeploymentConfigRollback
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfigRollback(); // \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfigRollback | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createAppsOpenshiftIoV1NamespacedDeploymentConfigRollbackRollback($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsOpenshiftIo_v1Api->createAppsOpenshiftIoV1NamespacedDeploymentConfigRollbackRollback: ', $e->getMessage(), PHP_EOL;
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

# **createAppsOpenshiftIoV1NamespacedDeploymentRequestInstantiate**
> \UniversityOfAdelaide\OpenShift\Model\V1DeploymentRequest createAppsOpenshiftIoV1NamespacedDeploymentRequestInstantiate($name, $namespace, $body, $pretty)



create instantiate of a DeploymentRequest

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\AppsOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the DeploymentRequest
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeploymentRequest(); // \UniversityOfAdelaide\OpenShift\Model\V1DeploymentRequest | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createAppsOpenshiftIoV1NamespacedDeploymentRequestInstantiate($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsOpenshiftIo_v1Api->createAppsOpenshiftIoV1NamespacedDeploymentRequestInstantiate: ', $e->getMessage(), PHP_EOL;
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

# **deleteAppsOpenshiftIoV1CollectionNamespacedDeploymentConfig**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteAppsOpenshiftIoV1CollectionNamespacedDeploymentConfig($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



delete collection of DeploymentConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\AppsOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->deleteAppsOpenshiftIoV1CollectionNamespacedDeploymentConfig($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsOpenshiftIo_v1Api->deleteAppsOpenshiftIoV1CollectionNamespacedDeploymentConfig: ', $e->getMessage(), PHP_EOL;
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

# **deleteAppsOpenshiftIoV1NamespacedDeploymentConfig**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteAppsOpenshiftIoV1NamespacedDeploymentConfig($name, $namespace, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy)



delete a DeploymentConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\AppsOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the DeploymentConfig
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions(); // \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$gracePeriodSeconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphanDependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagationPolicy = "propagationPolicy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteAppsOpenshiftIoV1NamespacedDeploymentConfig($name, $namespace, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsOpenshiftIo_v1Api->deleteAppsOpenshiftIoV1NamespacedDeploymentConfig: ', $e->getMessage(), PHP_EOL;
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

# **getAppsOpenshiftIoV1APIResources**
> \UniversityOfAdelaide\OpenShift\Model\V1APIResourceList getAppsOpenshiftIoV1APIResources()



get available resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\AppsOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->getAppsOpenshiftIoV1APIResources();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsOpenshiftIo_v1Api->getAppsOpenshiftIoV1APIResources: ', $e->getMessage(), PHP_EOL;
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

# **listAppsOpenshiftIoV1DeploymentConfigForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfigList listAppsOpenshiftIoV1DeploymentConfigForAllNamespaces($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind DeploymentConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\AppsOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listAppsOpenshiftIoV1DeploymentConfigForAllNamespaces($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsOpenshiftIo_v1Api->listAppsOpenshiftIoV1DeploymentConfigForAllNamespaces: ', $e->getMessage(), PHP_EOL;
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

# **listAppsOpenshiftIoV1NamespacedDeploymentConfig**
> \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfigList listAppsOpenshiftIoV1NamespacedDeploymentConfig($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind DeploymentConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\AppsOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listAppsOpenshiftIoV1NamespacedDeploymentConfig($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsOpenshiftIo_v1Api->listAppsOpenshiftIoV1NamespacedDeploymentConfig: ', $e->getMessage(), PHP_EOL;
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

# **patchAppsOpenshiftIoV1NamespacedDeploymentConfig**
> \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig patchAppsOpenshiftIoV1NamespacedDeploymentConfig($name, $namespace, $body, $pretty)



partially update the specified DeploymentConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\AppsOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the DeploymentConfig
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchAppsOpenshiftIoV1NamespacedDeploymentConfig($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsOpenshiftIo_v1Api->patchAppsOpenshiftIoV1NamespacedDeploymentConfig: ', $e->getMessage(), PHP_EOL;
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

# **patchAppsOpenshiftIoV1NamespacedDeploymentConfigStatus**
> \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig patchAppsOpenshiftIoV1NamespacedDeploymentConfigStatus($name, $namespace, $body, $pretty)



partially update status of the specified DeploymentConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\AppsOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the DeploymentConfig
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchAppsOpenshiftIoV1NamespacedDeploymentConfigStatus($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsOpenshiftIo_v1Api->patchAppsOpenshiftIoV1NamespacedDeploymentConfigStatus: ', $e->getMessage(), PHP_EOL;
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

# **patchAppsOpenshiftIoV1NamespacedScaleScale**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1Scale patchAppsOpenshiftIoV1NamespacedScaleScale($name, $namespace, $body, $pretty)



partially update scale of the specified Scale

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\AppsOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Scale
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchAppsOpenshiftIoV1NamespacedScaleScale($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsOpenshiftIo_v1Api->patchAppsOpenshiftIoV1NamespacedScaleScale: ', $e->getMessage(), PHP_EOL;
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

# **readAppsOpenshiftIoV1NamespacedDeploymentConfig**
> \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig readAppsOpenshiftIoV1NamespacedDeploymentConfig($name, $namespace, $pretty, $exact, $export)



read the specified DeploymentConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\AppsOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the DeploymentConfig
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$exact = true; // bool | Should the export be exact.  Exact export maintains cluster-specific fields like 'Namespace'.
$export = true; // bool | Should this value be exported.  Export strips fields that a user can not specify.

try {
    $result = $api_instance->readAppsOpenshiftIoV1NamespacedDeploymentConfig($name, $namespace, $pretty, $exact, $export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsOpenshiftIo_v1Api->readAppsOpenshiftIoV1NamespacedDeploymentConfig: ', $e->getMessage(), PHP_EOL;
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

# **readAppsOpenshiftIoV1NamespacedDeploymentConfigStatus**
> \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig readAppsOpenshiftIoV1NamespacedDeploymentConfigStatus($name, $namespace, $pretty)



read status of the specified DeploymentConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\AppsOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the DeploymentConfig
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->readAppsOpenshiftIoV1NamespacedDeploymentConfigStatus($name, $namespace, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsOpenshiftIo_v1Api->readAppsOpenshiftIoV1NamespacedDeploymentConfigStatus: ', $e->getMessage(), PHP_EOL;
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

# **readAppsOpenshiftIoV1NamespacedDeploymentLogLog**
> \UniversityOfAdelaide\OpenShift\Model\V1DeploymentLog readAppsOpenshiftIoV1NamespacedDeploymentLogLog($name, $namespace, $container, $follow, $limitBytes, $nowait, $pretty, $previous, $sinceSeconds, $tailLines, $timestamps, $version)



read log of the specified DeploymentLog

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\AppsOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
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
    $result = $api_instance->readAppsOpenshiftIoV1NamespacedDeploymentLogLog($name, $namespace, $container, $follow, $limitBytes, $nowait, $pretty, $previous, $sinceSeconds, $tailLines, $timestamps, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsOpenshiftIo_v1Api->readAppsOpenshiftIoV1NamespacedDeploymentLogLog: ', $e->getMessage(), PHP_EOL;
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

# **readAppsOpenshiftIoV1NamespacedScaleScale**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1Scale readAppsOpenshiftIoV1NamespacedScaleScale($name, $namespace, $pretty)



read scale of the specified Scale

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\AppsOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Scale
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->readAppsOpenshiftIoV1NamespacedScaleScale($name, $namespace, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsOpenshiftIo_v1Api->readAppsOpenshiftIoV1NamespacedScaleScale: ', $e->getMessage(), PHP_EOL;
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

# **replaceAppsOpenshiftIoV1NamespacedDeploymentConfig**
> \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig replaceAppsOpenshiftIoV1NamespacedDeploymentConfig($name, $namespace, $body, $pretty)



replace the specified DeploymentConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\AppsOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the DeploymentConfig
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig(); // \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceAppsOpenshiftIoV1NamespacedDeploymentConfig($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsOpenshiftIo_v1Api->replaceAppsOpenshiftIoV1NamespacedDeploymentConfig: ', $e->getMessage(), PHP_EOL;
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

# **replaceAppsOpenshiftIoV1NamespacedDeploymentConfigStatus**
> \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig replaceAppsOpenshiftIoV1NamespacedDeploymentConfigStatus($name, $namespace, $body, $pretty)



replace status of the specified DeploymentConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\AppsOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the DeploymentConfig
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig(); // \UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfig | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceAppsOpenshiftIoV1NamespacedDeploymentConfigStatus($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsOpenshiftIo_v1Api->replaceAppsOpenshiftIoV1NamespacedDeploymentConfigStatus: ', $e->getMessage(), PHP_EOL;
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

# **replaceAppsOpenshiftIoV1NamespacedScaleScale**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1Scale replaceAppsOpenshiftIoV1NamespacedScaleScale($name, $namespace, $body, $pretty)



replace scale of the specified Scale

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\AppsOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Scale
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1beta1Scale(); // \UniversityOfAdelaide\OpenShift\Model\V1beta1Scale | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceAppsOpenshiftIoV1NamespacedScaleScale($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsOpenshiftIo_v1Api->replaceAppsOpenshiftIoV1NamespacedScaleScale: ', $e->getMessage(), PHP_EOL;
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

# **watchAppsOpenshiftIoV1DeploymentConfigListForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchAppsOpenshiftIoV1DeploymentConfigListForAllNamespaces($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of DeploymentConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\AppsOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchAppsOpenshiftIoV1DeploymentConfigListForAllNamespaces($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsOpenshiftIo_v1Api->watchAppsOpenshiftIoV1DeploymentConfigListForAllNamespaces: ', $e->getMessage(), PHP_EOL;
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

# **watchAppsOpenshiftIoV1NamespacedDeploymentConfig**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchAppsOpenshiftIoV1NamespacedDeploymentConfig($name, $namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch changes to an object of kind DeploymentConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\AppsOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the DeploymentConfig
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchAppsOpenshiftIoV1NamespacedDeploymentConfig($name, $namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsOpenshiftIo_v1Api->watchAppsOpenshiftIoV1NamespacedDeploymentConfig: ', $e->getMessage(), PHP_EOL;
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

# **watchAppsOpenshiftIoV1NamespacedDeploymentConfigList**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchAppsOpenshiftIoV1NamespacedDeploymentConfigList($namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of DeploymentConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\AppsOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchAppsOpenshiftIoV1NamespacedDeploymentConfigList($namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsOpenshiftIo_v1Api->watchAppsOpenshiftIoV1NamespacedDeploymentConfigList: ', $e->getMessage(), PHP_EOL;
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

