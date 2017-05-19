# UniversityOfAdelaide\OpenShift\Apps_v1beta1Api

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAppsV1beta1DeploymentForAllNamespaces**](Apps_v1beta1Api.md#createAppsV1beta1DeploymentForAllNamespaces) | **POST** /apis/apps/v1beta1/deployments | 
[**createAppsV1beta1NamespacedDeployment**](Apps_v1beta1Api.md#createAppsV1beta1NamespacedDeployment) | **POST** /apis/apps/v1beta1/namespaces/{namespace}/deployments | 
[**createAppsV1beta1NamespacedDeploymentRollbackRollback**](Apps_v1beta1Api.md#createAppsV1beta1NamespacedDeploymentRollbackRollback) | **POST** /apis/apps/v1beta1/namespaces/{namespace}/deployments/{name}/rollback | 
[**createAppsV1beta1NamespacedStatefulSet**](Apps_v1beta1Api.md#createAppsV1beta1NamespacedStatefulSet) | **POST** /apis/apps/v1beta1/namespaces/{namespace}/statefulsets | 
[**createAppsV1beta1StatefulSetForAllNamespaces**](Apps_v1beta1Api.md#createAppsV1beta1StatefulSetForAllNamespaces) | **POST** /apis/apps/v1beta1/statefulsets | 
[**deleteAppsV1beta1CollectionNamespacedDeployment**](Apps_v1beta1Api.md#deleteAppsV1beta1CollectionNamespacedDeployment) | **DELETE** /apis/apps/v1beta1/namespaces/{namespace}/deployments | 
[**deleteAppsV1beta1CollectionNamespacedStatefulSet**](Apps_v1beta1Api.md#deleteAppsV1beta1CollectionNamespacedStatefulSet) | **DELETE** /apis/apps/v1beta1/namespaces/{namespace}/statefulsets | 
[**deleteAppsV1beta1NamespacedDeployment**](Apps_v1beta1Api.md#deleteAppsV1beta1NamespacedDeployment) | **DELETE** /apis/apps/v1beta1/namespaces/{namespace}/deployments/{name} | 
[**deleteAppsV1beta1NamespacedStatefulSet**](Apps_v1beta1Api.md#deleteAppsV1beta1NamespacedStatefulSet) | **DELETE** /apis/apps/v1beta1/namespaces/{namespace}/statefulsets/{name} | 
[**getAppsV1beta1APIResources**](Apps_v1beta1Api.md#getAppsV1beta1APIResources) | **GET** /apis/apps/v1beta1/ | 
[**listAppsV1beta1DeploymentForAllNamespaces**](Apps_v1beta1Api.md#listAppsV1beta1DeploymentForAllNamespaces) | **GET** /apis/apps/v1beta1/deployments | 
[**listAppsV1beta1NamespacedDeployment**](Apps_v1beta1Api.md#listAppsV1beta1NamespacedDeployment) | **GET** /apis/apps/v1beta1/namespaces/{namespace}/deployments | 
[**listAppsV1beta1NamespacedStatefulSet**](Apps_v1beta1Api.md#listAppsV1beta1NamespacedStatefulSet) | **GET** /apis/apps/v1beta1/namespaces/{namespace}/statefulsets | 
[**listAppsV1beta1StatefulSetForAllNamespaces**](Apps_v1beta1Api.md#listAppsV1beta1StatefulSetForAllNamespaces) | **GET** /apis/apps/v1beta1/statefulsets | 
[**patchAppsV1beta1NamespacedDeployment**](Apps_v1beta1Api.md#patchAppsV1beta1NamespacedDeployment) | **PATCH** /apis/apps/v1beta1/namespaces/{namespace}/deployments/{name} | 
[**patchAppsV1beta1NamespacedDeploymentStatus**](Apps_v1beta1Api.md#patchAppsV1beta1NamespacedDeploymentStatus) | **PATCH** /apis/apps/v1beta1/namespaces/{namespace}/deployments/{name}/status | 
[**patchAppsV1beta1NamespacedScaleScale**](Apps_v1beta1Api.md#patchAppsV1beta1NamespacedScaleScale) | **PATCH** /apis/apps/v1beta1/namespaces/{namespace}/deployments/{name}/scale | 
[**patchAppsV1beta1NamespacedStatefulSet**](Apps_v1beta1Api.md#patchAppsV1beta1NamespacedStatefulSet) | **PATCH** /apis/apps/v1beta1/namespaces/{namespace}/statefulsets/{name} | 
[**patchAppsV1beta1NamespacedStatefulSetStatus**](Apps_v1beta1Api.md#patchAppsV1beta1NamespacedStatefulSetStatus) | **PATCH** /apis/apps/v1beta1/namespaces/{namespace}/statefulsets/{name}/status | 
[**readAppsV1beta1NamespacedDeployment**](Apps_v1beta1Api.md#readAppsV1beta1NamespacedDeployment) | **GET** /apis/apps/v1beta1/namespaces/{namespace}/deployments/{name} | 
[**readAppsV1beta1NamespacedDeploymentStatus**](Apps_v1beta1Api.md#readAppsV1beta1NamespacedDeploymentStatus) | **GET** /apis/apps/v1beta1/namespaces/{namespace}/deployments/{name}/status | 
[**readAppsV1beta1NamespacedScaleScale**](Apps_v1beta1Api.md#readAppsV1beta1NamespacedScaleScale) | **GET** /apis/apps/v1beta1/namespaces/{namespace}/deployments/{name}/scale | 
[**readAppsV1beta1NamespacedStatefulSet**](Apps_v1beta1Api.md#readAppsV1beta1NamespacedStatefulSet) | **GET** /apis/apps/v1beta1/namespaces/{namespace}/statefulsets/{name} | 
[**readAppsV1beta1NamespacedStatefulSetStatus**](Apps_v1beta1Api.md#readAppsV1beta1NamespacedStatefulSetStatus) | **GET** /apis/apps/v1beta1/namespaces/{namespace}/statefulsets/{name}/status | 
[**replaceAppsV1beta1NamespacedDeployment**](Apps_v1beta1Api.md#replaceAppsV1beta1NamespacedDeployment) | **PUT** /apis/apps/v1beta1/namespaces/{namespace}/deployments/{name} | 
[**replaceAppsV1beta1NamespacedDeploymentStatus**](Apps_v1beta1Api.md#replaceAppsV1beta1NamespacedDeploymentStatus) | **PUT** /apis/apps/v1beta1/namespaces/{namespace}/deployments/{name}/status | 
[**replaceAppsV1beta1NamespacedScaleScale**](Apps_v1beta1Api.md#replaceAppsV1beta1NamespacedScaleScale) | **PUT** /apis/apps/v1beta1/namespaces/{namespace}/deployments/{name}/scale | 
[**replaceAppsV1beta1NamespacedStatefulSet**](Apps_v1beta1Api.md#replaceAppsV1beta1NamespacedStatefulSet) | **PUT** /apis/apps/v1beta1/namespaces/{namespace}/statefulsets/{name} | 
[**replaceAppsV1beta1NamespacedStatefulSetStatus**](Apps_v1beta1Api.md#replaceAppsV1beta1NamespacedStatefulSetStatus) | **PUT** /apis/apps/v1beta1/namespaces/{namespace}/statefulsets/{name}/status | 
[**watchAppsV1beta1DeploymentListForAllNamespaces**](Apps_v1beta1Api.md#watchAppsV1beta1DeploymentListForAllNamespaces) | **GET** /apis/apps/v1beta1/watch/deployments | 
[**watchAppsV1beta1NamespacedDeployment**](Apps_v1beta1Api.md#watchAppsV1beta1NamespacedDeployment) | **GET** /apis/apps/v1beta1/watch/namespaces/{namespace}/deployments/{name} | 
[**watchAppsV1beta1NamespacedDeploymentList**](Apps_v1beta1Api.md#watchAppsV1beta1NamespacedDeploymentList) | **GET** /apis/apps/v1beta1/watch/namespaces/{namespace}/deployments | 
[**watchAppsV1beta1NamespacedStatefulSet**](Apps_v1beta1Api.md#watchAppsV1beta1NamespacedStatefulSet) | **GET** /apis/apps/v1beta1/watch/namespaces/{namespace}/statefulsets/{name} | 
[**watchAppsV1beta1NamespacedStatefulSetList**](Apps_v1beta1Api.md#watchAppsV1beta1NamespacedStatefulSetList) | **GET** /apis/apps/v1beta1/watch/namespaces/{namespace}/statefulsets | 
[**watchAppsV1beta1StatefulSetListForAllNamespaces**](Apps_v1beta1Api.md#watchAppsV1beta1StatefulSetListForAllNamespaces) | **GET** /apis/apps/v1beta1/watch/statefulsets | 


# **createAppsV1beta1DeploymentForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1Deployment createAppsV1beta1DeploymentForAllNamespaces($body, $pretty)



create a Deployment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Apps_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1beta1Deployment(); // \UniversityOfAdelaide\OpenShift\Model\V1beta1Deployment | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createAppsV1beta1DeploymentForAllNamespaces($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Apps_v1beta1Api->createAppsV1beta1DeploymentForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1beta1Deployment**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1beta1Deployment.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1Deployment**](../Model/V1beta1Deployment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAppsV1beta1NamespacedDeployment**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1Deployment createAppsV1beta1NamespacedDeployment($namespace, $body, $pretty)



create a Deployment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Apps_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1beta1Deployment(); // \UniversityOfAdelaide\OpenShift\Model\V1beta1Deployment | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createAppsV1beta1NamespacedDeployment($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Apps_v1beta1Api->createAppsV1beta1NamespacedDeployment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1beta1Deployment**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1beta1Deployment.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1Deployment**](../Model/V1beta1Deployment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAppsV1beta1NamespacedDeploymentRollbackRollback**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1DeploymentRollback createAppsV1beta1NamespacedDeploymentRollbackRollback($name, $namespace, $body, $pretty)



create rollback of a DeploymentRollback

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Apps_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the DeploymentRollback
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1beta1DeploymentRollback(); // \UniversityOfAdelaide\OpenShift\Model\V1beta1DeploymentRollback | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createAppsV1beta1NamespacedDeploymentRollbackRollback($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Apps_v1beta1Api->createAppsV1beta1NamespacedDeploymentRollbackRollback: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the DeploymentRollback |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1beta1DeploymentRollback**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1beta1DeploymentRollback.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1DeploymentRollback**](../Model/V1beta1DeploymentRollback.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAppsV1beta1NamespacedStatefulSet**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1StatefulSet createAppsV1beta1NamespacedStatefulSet($namespace, $body, $pretty)



create a StatefulSet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Apps_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1beta1StatefulSet(); // \UniversityOfAdelaide\OpenShift\Model\V1beta1StatefulSet | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createAppsV1beta1NamespacedStatefulSet($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Apps_v1beta1Api->createAppsV1beta1NamespacedStatefulSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1beta1StatefulSet**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1beta1StatefulSet.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1StatefulSet**](../Model/V1beta1StatefulSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAppsV1beta1StatefulSetForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1StatefulSet createAppsV1beta1StatefulSetForAllNamespaces($body, $pretty)



create a StatefulSet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Apps_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1beta1StatefulSet(); // \UniversityOfAdelaide\OpenShift\Model\V1beta1StatefulSet | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createAppsV1beta1StatefulSetForAllNamespaces($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Apps_v1beta1Api->createAppsV1beta1StatefulSetForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1beta1StatefulSet**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1beta1StatefulSet.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1StatefulSet**](../Model/V1beta1StatefulSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAppsV1beta1CollectionNamespacedDeployment**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteAppsV1beta1CollectionNamespacedDeployment($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



delete collection of Deployment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Apps_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->deleteAppsV1beta1CollectionNamespacedDeployment($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Apps_v1beta1Api->deleteAppsV1beta1CollectionNamespacedDeployment: ', $e->getMessage(), PHP_EOL;
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

# **deleteAppsV1beta1CollectionNamespacedStatefulSet**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteAppsV1beta1CollectionNamespacedStatefulSet($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



delete collection of StatefulSet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Apps_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->deleteAppsV1beta1CollectionNamespacedStatefulSet($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Apps_v1beta1Api->deleteAppsV1beta1CollectionNamespacedStatefulSet: ', $e->getMessage(), PHP_EOL;
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

# **deleteAppsV1beta1NamespacedDeployment**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteAppsV1beta1NamespacedDeployment($name, $namespace, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy)



delete a Deployment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Apps_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Deployment
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions(); // \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$gracePeriodSeconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphanDependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagationPolicy = "propagationPolicy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteAppsV1beta1NamespacedDeployment($name, $namespace, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Apps_v1beta1Api->deleteAppsV1beta1NamespacedDeployment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Deployment |
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

# **deleteAppsV1beta1NamespacedStatefulSet**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteAppsV1beta1NamespacedStatefulSet($name, $namespace, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy)



delete a StatefulSet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Apps_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the StatefulSet
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions(); // \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$gracePeriodSeconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphanDependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagationPolicy = "propagationPolicy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteAppsV1beta1NamespacedStatefulSet($name, $namespace, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Apps_v1beta1Api->deleteAppsV1beta1NamespacedStatefulSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the StatefulSet |
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

# **getAppsV1beta1APIResources**
> \UniversityOfAdelaide\OpenShift\Model\V1APIResourceList getAppsV1beta1APIResources()



get available resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Apps_v1beta1Api(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->getAppsV1beta1APIResources();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Apps_v1beta1Api->getAppsV1beta1APIResources: ', $e->getMessage(), PHP_EOL;
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

# **listAppsV1beta1DeploymentForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1DeploymentList listAppsV1beta1DeploymentForAllNamespaces($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind Deployment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Apps_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listAppsV1beta1DeploymentForAllNamespaces($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Apps_v1beta1Api->listAppsV1beta1DeploymentForAllNamespaces: ', $e->getMessage(), PHP_EOL;
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

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1DeploymentList**](../Model/V1beta1DeploymentList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAppsV1beta1NamespacedDeployment**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1DeploymentList listAppsV1beta1NamespacedDeployment($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind Deployment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Apps_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listAppsV1beta1NamespacedDeployment($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Apps_v1beta1Api->listAppsV1beta1NamespacedDeployment: ', $e->getMessage(), PHP_EOL;
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

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1DeploymentList**](../Model/V1beta1DeploymentList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAppsV1beta1NamespacedStatefulSet**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1StatefulSetList listAppsV1beta1NamespacedStatefulSet($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind StatefulSet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Apps_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listAppsV1beta1NamespacedStatefulSet($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Apps_v1beta1Api->listAppsV1beta1NamespacedStatefulSet: ', $e->getMessage(), PHP_EOL;
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

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1StatefulSetList**](../Model/V1beta1StatefulSetList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAppsV1beta1StatefulSetForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1StatefulSetList listAppsV1beta1StatefulSetForAllNamespaces($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind StatefulSet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Apps_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listAppsV1beta1StatefulSetForAllNamespaces($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Apps_v1beta1Api->listAppsV1beta1StatefulSetForAllNamespaces: ', $e->getMessage(), PHP_EOL;
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

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1StatefulSetList**](../Model/V1beta1StatefulSetList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchAppsV1beta1NamespacedDeployment**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1Deployment patchAppsV1beta1NamespacedDeployment($name, $namespace, $body, $pretty)



partially update the specified Deployment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Apps_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Deployment
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchAppsV1beta1NamespacedDeployment($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Apps_v1beta1Api->patchAppsV1beta1NamespacedDeployment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Deployment |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1Deployment**](../Model/V1beta1Deployment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchAppsV1beta1NamespacedDeploymentStatus**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1Deployment patchAppsV1beta1NamespacedDeploymentStatus($name, $namespace, $body, $pretty)



partially update status of the specified Deployment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Apps_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Deployment
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchAppsV1beta1NamespacedDeploymentStatus($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Apps_v1beta1Api->patchAppsV1beta1NamespacedDeploymentStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Deployment |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1Deployment**](../Model/V1beta1Deployment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchAppsV1beta1NamespacedScaleScale**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1Scale patchAppsV1beta1NamespacedScaleScale($name, $namespace, $body, $pretty)



partially update scale of the specified Scale

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Apps_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Scale
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchAppsV1beta1NamespacedScaleScale($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Apps_v1beta1Api->patchAppsV1beta1NamespacedScaleScale: ', $e->getMessage(), PHP_EOL;
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

# **patchAppsV1beta1NamespacedStatefulSet**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1StatefulSet patchAppsV1beta1NamespacedStatefulSet($name, $namespace, $body, $pretty)



partially update the specified StatefulSet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Apps_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the StatefulSet
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchAppsV1beta1NamespacedStatefulSet($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Apps_v1beta1Api->patchAppsV1beta1NamespacedStatefulSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the StatefulSet |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1StatefulSet**](../Model/V1beta1StatefulSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchAppsV1beta1NamespacedStatefulSetStatus**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1StatefulSet patchAppsV1beta1NamespacedStatefulSetStatus($name, $namespace, $body, $pretty)



partially update status of the specified StatefulSet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Apps_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the StatefulSet
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchAppsV1beta1NamespacedStatefulSetStatus($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Apps_v1beta1Api->patchAppsV1beta1NamespacedStatefulSetStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the StatefulSet |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1StatefulSet**](../Model/V1beta1StatefulSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readAppsV1beta1NamespacedDeployment**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1Deployment readAppsV1beta1NamespacedDeployment($name, $namespace, $pretty, $exact, $export)



read the specified Deployment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Apps_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Deployment
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$exact = true; // bool | Should the export be exact.  Exact export maintains cluster-specific fields like 'Namespace'.
$export = true; // bool | Should this value be exported.  Export strips fields that a user can not specify.

try {
    $result = $api_instance->readAppsV1beta1NamespacedDeployment($name, $namespace, $pretty, $exact, $export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Apps_v1beta1Api->readAppsV1beta1NamespacedDeployment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Deployment |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **exact** | **bool**| Should the export be exact.  Exact export maintains cluster-specific fields like &#39;Namespace&#39;. | [optional]
 **export** | **bool**| Should this value be exported.  Export strips fields that a user can not specify. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1Deployment**](../Model/V1beta1Deployment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readAppsV1beta1NamespacedDeploymentStatus**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1Deployment readAppsV1beta1NamespacedDeploymentStatus($name, $namespace, $pretty)



read status of the specified Deployment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Apps_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Deployment
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->readAppsV1beta1NamespacedDeploymentStatus($name, $namespace, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Apps_v1beta1Api->readAppsV1beta1NamespacedDeploymentStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Deployment |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1Deployment**](../Model/V1beta1Deployment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readAppsV1beta1NamespacedScaleScale**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1Scale readAppsV1beta1NamespacedScaleScale($name, $namespace, $pretty)



read scale of the specified Scale

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Apps_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Scale
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->readAppsV1beta1NamespacedScaleScale($name, $namespace, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Apps_v1beta1Api->readAppsV1beta1NamespacedScaleScale: ', $e->getMessage(), PHP_EOL;
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

# **readAppsV1beta1NamespacedStatefulSet**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1StatefulSet readAppsV1beta1NamespacedStatefulSet($name, $namespace, $pretty, $exact, $export)



read the specified StatefulSet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Apps_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the StatefulSet
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$exact = true; // bool | Should the export be exact.  Exact export maintains cluster-specific fields like 'Namespace'.
$export = true; // bool | Should this value be exported.  Export strips fields that a user can not specify.

try {
    $result = $api_instance->readAppsV1beta1NamespacedStatefulSet($name, $namespace, $pretty, $exact, $export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Apps_v1beta1Api->readAppsV1beta1NamespacedStatefulSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the StatefulSet |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **exact** | **bool**| Should the export be exact.  Exact export maintains cluster-specific fields like &#39;Namespace&#39;. | [optional]
 **export** | **bool**| Should this value be exported.  Export strips fields that a user can not specify. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1StatefulSet**](../Model/V1beta1StatefulSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readAppsV1beta1NamespacedStatefulSetStatus**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1StatefulSet readAppsV1beta1NamespacedStatefulSetStatus($name, $namespace, $pretty)



read status of the specified StatefulSet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Apps_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the StatefulSet
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->readAppsV1beta1NamespacedStatefulSetStatus($name, $namespace, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Apps_v1beta1Api->readAppsV1beta1NamespacedStatefulSetStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the StatefulSet |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1StatefulSet**](../Model/V1beta1StatefulSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceAppsV1beta1NamespacedDeployment**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1Deployment replaceAppsV1beta1NamespacedDeployment($name, $namespace, $body, $pretty)



replace the specified Deployment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Apps_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Deployment
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1beta1Deployment(); // \UniversityOfAdelaide\OpenShift\Model\V1beta1Deployment | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceAppsV1beta1NamespacedDeployment($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Apps_v1beta1Api->replaceAppsV1beta1NamespacedDeployment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Deployment |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1beta1Deployment**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1beta1Deployment.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1Deployment**](../Model/V1beta1Deployment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceAppsV1beta1NamespacedDeploymentStatus**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1Deployment replaceAppsV1beta1NamespacedDeploymentStatus($name, $namespace, $body, $pretty)



replace status of the specified Deployment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Apps_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Deployment
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1beta1Deployment(); // \UniversityOfAdelaide\OpenShift\Model\V1beta1Deployment | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceAppsV1beta1NamespacedDeploymentStatus($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Apps_v1beta1Api->replaceAppsV1beta1NamespacedDeploymentStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Deployment |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1beta1Deployment**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1beta1Deployment.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1Deployment**](../Model/V1beta1Deployment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceAppsV1beta1NamespacedScaleScale**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1Scale replaceAppsV1beta1NamespacedScaleScale($name, $namespace, $body, $pretty)



replace scale of the specified Scale

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Apps_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Scale
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1beta1Scale(); // \UniversityOfAdelaide\OpenShift\Model\V1beta1Scale | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceAppsV1beta1NamespacedScaleScale($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Apps_v1beta1Api->replaceAppsV1beta1NamespacedScaleScale: ', $e->getMessage(), PHP_EOL;
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

# **replaceAppsV1beta1NamespacedStatefulSet**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1StatefulSet replaceAppsV1beta1NamespacedStatefulSet($name, $namespace, $body, $pretty)



replace the specified StatefulSet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Apps_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the StatefulSet
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1beta1StatefulSet(); // \UniversityOfAdelaide\OpenShift\Model\V1beta1StatefulSet | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceAppsV1beta1NamespacedStatefulSet($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Apps_v1beta1Api->replaceAppsV1beta1NamespacedStatefulSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the StatefulSet |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1beta1StatefulSet**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1beta1StatefulSet.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1StatefulSet**](../Model/V1beta1StatefulSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceAppsV1beta1NamespacedStatefulSetStatus**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1StatefulSet replaceAppsV1beta1NamespacedStatefulSetStatus($name, $namespace, $body, $pretty)



replace status of the specified StatefulSet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Apps_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the StatefulSet
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1beta1StatefulSet(); // \UniversityOfAdelaide\OpenShift\Model\V1beta1StatefulSet | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceAppsV1beta1NamespacedStatefulSetStatus($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Apps_v1beta1Api->replaceAppsV1beta1NamespacedStatefulSetStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the StatefulSet |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1beta1StatefulSet**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1beta1StatefulSet.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1StatefulSet**](../Model/V1beta1StatefulSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchAppsV1beta1DeploymentListForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchAppsV1beta1DeploymentListForAllNamespaces($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of Deployment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Apps_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchAppsV1beta1DeploymentListForAllNamespaces($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Apps_v1beta1Api->watchAppsV1beta1DeploymentListForAllNamespaces: ', $e->getMessage(), PHP_EOL;
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

# **watchAppsV1beta1NamespacedDeployment**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchAppsV1beta1NamespacedDeployment($name, $namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch changes to an object of kind Deployment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Apps_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Deployment
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchAppsV1beta1NamespacedDeployment($name, $namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Apps_v1beta1Api->watchAppsV1beta1NamespacedDeployment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Deployment |
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

# **watchAppsV1beta1NamespacedDeploymentList**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchAppsV1beta1NamespacedDeploymentList($namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of Deployment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Apps_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchAppsV1beta1NamespacedDeploymentList($namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Apps_v1beta1Api->watchAppsV1beta1NamespacedDeploymentList: ', $e->getMessage(), PHP_EOL;
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

# **watchAppsV1beta1NamespacedStatefulSet**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchAppsV1beta1NamespacedStatefulSet($name, $namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch changes to an object of kind StatefulSet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Apps_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the StatefulSet
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchAppsV1beta1NamespacedStatefulSet($name, $namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Apps_v1beta1Api->watchAppsV1beta1NamespacedStatefulSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the StatefulSet |
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

# **watchAppsV1beta1NamespacedStatefulSetList**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchAppsV1beta1NamespacedStatefulSetList($namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of StatefulSet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Apps_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchAppsV1beta1NamespacedStatefulSetList($namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Apps_v1beta1Api->watchAppsV1beta1NamespacedStatefulSetList: ', $e->getMessage(), PHP_EOL;
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

# **watchAppsV1beta1StatefulSetListForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchAppsV1beta1StatefulSetListForAllNamespaces($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of StatefulSet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Apps_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchAppsV1beta1StatefulSetListForAllNamespaces($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Apps_v1beta1Api->watchAppsV1beta1StatefulSetListForAllNamespaces: ', $e->getMessage(), PHP_EOL;
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

