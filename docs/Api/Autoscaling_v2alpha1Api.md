# UniversityOfAdelaide\OpenShift\Autoscaling_v2alpha1Api

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAutoscalingV2alpha1HorizontalPodAutoscalerForAllNamespaces**](Autoscaling_v2alpha1Api.md#createAutoscalingV2alpha1HorizontalPodAutoscalerForAllNamespaces) | **POST** /apis/autoscaling/v2alpha1/horizontalpodautoscalers | 
[**createAutoscalingV2alpha1NamespacedHorizontalPodAutoscaler**](Autoscaling_v2alpha1Api.md#createAutoscalingV2alpha1NamespacedHorizontalPodAutoscaler) | **POST** /apis/autoscaling/v2alpha1/namespaces/{namespace}/horizontalpodautoscalers | 
[**deleteAutoscalingV2alpha1CollectionNamespacedHorizontalPodAutoscaler**](Autoscaling_v2alpha1Api.md#deleteAutoscalingV2alpha1CollectionNamespacedHorizontalPodAutoscaler) | **DELETE** /apis/autoscaling/v2alpha1/namespaces/{namespace}/horizontalpodautoscalers | 
[**deleteAutoscalingV2alpha1NamespacedHorizontalPodAutoscaler**](Autoscaling_v2alpha1Api.md#deleteAutoscalingV2alpha1NamespacedHorizontalPodAutoscaler) | **DELETE** /apis/autoscaling/v2alpha1/namespaces/{namespace}/horizontalpodautoscalers/{name} | 
[**getAutoscalingV2alpha1APIResources**](Autoscaling_v2alpha1Api.md#getAutoscalingV2alpha1APIResources) | **GET** /apis/autoscaling/v2alpha1/ | 
[**listAutoscalingV2alpha1HorizontalPodAutoscalerForAllNamespaces**](Autoscaling_v2alpha1Api.md#listAutoscalingV2alpha1HorizontalPodAutoscalerForAllNamespaces) | **GET** /apis/autoscaling/v2alpha1/horizontalpodautoscalers | 
[**listAutoscalingV2alpha1NamespacedHorizontalPodAutoscaler**](Autoscaling_v2alpha1Api.md#listAutoscalingV2alpha1NamespacedHorizontalPodAutoscaler) | **GET** /apis/autoscaling/v2alpha1/namespaces/{namespace}/horizontalpodautoscalers | 
[**patchAutoscalingV2alpha1NamespacedHorizontalPodAutoscaler**](Autoscaling_v2alpha1Api.md#patchAutoscalingV2alpha1NamespacedHorizontalPodAutoscaler) | **PATCH** /apis/autoscaling/v2alpha1/namespaces/{namespace}/horizontalpodautoscalers/{name} | 
[**patchAutoscalingV2alpha1NamespacedHorizontalPodAutoscalerStatus**](Autoscaling_v2alpha1Api.md#patchAutoscalingV2alpha1NamespacedHorizontalPodAutoscalerStatus) | **PATCH** /apis/autoscaling/v2alpha1/namespaces/{namespace}/horizontalpodautoscalers/{name}/status | 
[**readAutoscalingV2alpha1NamespacedHorizontalPodAutoscaler**](Autoscaling_v2alpha1Api.md#readAutoscalingV2alpha1NamespacedHorizontalPodAutoscaler) | **GET** /apis/autoscaling/v2alpha1/namespaces/{namespace}/horizontalpodautoscalers/{name} | 
[**readAutoscalingV2alpha1NamespacedHorizontalPodAutoscalerStatus**](Autoscaling_v2alpha1Api.md#readAutoscalingV2alpha1NamespacedHorizontalPodAutoscalerStatus) | **GET** /apis/autoscaling/v2alpha1/namespaces/{namespace}/horizontalpodautoscalers/{name}/status | 
[**replaceAutoscalingV2alpha1NamespacedHorizontalPodAutoscaler**](Autoscaling_v2alpha1Api.md#replaceAutoscalingV2alpha1NamespacedHorizontalPodAutoscaler) | **PUT** /apis/autoscaling/v2alpha1/namespaces/{namespace}/horizontalpodautoscalers/{name} | 
[**replaceAutoscalingV2alpha1NamespacedHorizontalPodAutoscalerStatus**](Autoscaling_v2alpha1Api.md#replaceAutoscalingV2alpha1NamespacedHorizontalPodAutoscalerStatus) | **PUT** /apis/autoscaling/v2alpha1/namespaces/{namespace}/horizontalpodautoscalers/{name}/status | 
[**watchAutoscalingV2alpha1HorizontalPodAutoscalerListForAllNamespaces**](Autoscaling_v2alpha1Api.md#watchAutoscalingV2alpha1HorizontalPodAutoscalerListForAllNamespaces) | **GET** /apis/autoscaling/v2alpha1/watch/horizontalpodautoscalers | 
[**watchAutoscalingV2alpha1NamespacedHorizontalPodAutoscaler**](Autoscaling_v2alpha1Api.md#watchAutoscalingV2alpha1NamespacedHorizontalPodAutoscaler) | **GET** /apis/autoscaling/v2alpha1/watch/namespaces/{namespace}/horizontalpodautoscalers/{name} | 
[**watchAutoscalingV2alpha1NamespacedHorizontalPodAutoscalerList**](Autoscaling_v2alpha1Api.md#watchAutoscalingV2alpha1NamespacedHorizontalPodAutoscalerList) | **GET** /apis/autoscaling/v2alpha1/watch/namespaces/{namespace}/horizontalpodautoscalers | 


# **createAutoscalingV2alpha1HorizontalPodAutoscalerForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V2alpha1HorizontalPodAutoscaler createAutoscalingV2alpha1HorizontalPodAutoscalerForAllNamespaces($body, $pretty)



create a HorizontalPodAutoscaler

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Autoscaling_v2alpha1Api(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V2alpha1HorizontalPodAutoscaler(); // \UniversityOfAdelaide\OpenShift\Model\V2alpha1HorizontalPodAutoscaler | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createAutoscalingV2alpha1HorizontalPodAutoscalerForAllNamespaces($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Autoscaling_v2alpha1Api->createAutoscalingV2alpha1HorizontalPodAutoscalerForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V2alpha1HorizontalPodAutoscaler**](../Model/\UniversityOfAdelaide\OpenShift\Model\V2alpha1HorizontalPodAutoscaler.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V2alpha1HorizontalPodAutoscaler**](../Model/V2alpha1HorizontalPodAutoscaler.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAutoscalingV2alpha1NamespacedHorizontalPodAutoscaler**
> \UniversityOfAdelaide\OpenShift\Model\V2alpha1HorizontalPodAutoscaler createAutoscalingV2alpha1NamespacedHorizontalPodAutoscaler($namespace, $body, $pretty)



create a HorizontalPodAutoscaler

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Autoscaling_v2alpha1Api(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V2alpha1HorizontalPodAutoscaler(); // \UniversityOfAdelaide\OpenShift\Model\V2alpha1HorizontalPodAutoscaler | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createAutoscalingV2alpha1NamespacedHorizontalPodAutoscaler($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Autoscaling_v2alpha1Api->createAutoscalingV2alpha1NamespacedHorizontalPodAutoscaler: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V2alpha1HorizontalPodAutoscaler**](../Model/\UniversityOfAdelaide\OpenShift\Model\V2alpha1HorizontalPodAutoscaler.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V2alpha1HorizontalPodAutoscaler**](../Model/V2alpha1HorizontalPodAutoscaler.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAutoscalingV2alpha1CollectionNamespacedHorizontalPodAutoscaler**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteAutoscalingV2alpha1CollectionNamespacedHorizontalPodAutoscaler($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



delete collection of HorizontalPodAutoscaler

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Autoscaling_v2alpha1Api(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->deleteAutoscalingV2alpha1CollectionNamespacedHorizontalPodAutoscaler($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Autoscaling_v2alpha1Api->deleteAutoscalingV2alpha1CollectionNamespacedHorizontalPodAutoscaler: ', $e->getMessage(), PHP_EOL;
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

# **deleteAutoscalingV2alpha1NamespacedHorizontalPodAutoscaler**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteAutoscalingV2alpha1NamespacedHorizontalPodAutoscaler($name, $namespace, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy)



delete a HorizontalPodAutoscaler

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Autoscaling_v2alpha1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the HorizontalPodAutoscaler
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions(); // \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$gracePeriodSeconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphanDependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagationPolicy = "propagationPolicy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteAutoscalingV2alpha1NamespacedHorizontalPodAutoscaler($name, $namespace, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Autoscaling_v2alpha1Api->deleteAutoscalingV2alpha1NamespacedHorizontalPodAutoscaler: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the HorizontalPodAutoscaler |
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

# **getAutoscalingV2alpha1APIResources**
> \UniversityOfAdelaide\OpenShift\Model\V1APIResourceList getAutoscalingV2alpha1APIResources()



get available resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Autoscaling_v2alpha1Api(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->getAutoscalingV2alpha1APIResources();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Autoscaling_v2alpha1Api->getAutoscalingV2alpha1APIResources: ', $e->getMessage(), PHP_EOL;
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

# **listAutoscalingV2alpha1HorizontalPodAutoscalerForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V2alpha1HorizontalPodAutoscalerList listAutoscalingV2alpha1HorizontalPodAutoscalerForAllNamespaces($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind HorizontalPodAutoscaler

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Autoscaling_v2alpha1Api(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listAutoscalingV2alpha1HorizontalPodAutoscalerForAllNamespaces($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Autoscaling_v2alpha1Api->listAutoscalingV2alpha1HorizontalPodAutoscalerForAllNamespaces: ', $e->getMessage(), PHP_EOL;
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

[**\UniversityOfAdelaide\OpenShift\Model\V2alpha1HorizontalPodAutoscalerList**](../Model/V2alpha1HorizontalPodAutoscalerList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAutoscalingV2alpha1NamespacedHorizontalPodAutoscaler**
> \UniversityOfAdelaide\OpenShift\Model\V2alpha1HorizontalPodAutoscalerList listAutoscalingV2alpha1NamespacedHorizontalPodAutoscaler($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind HorizontalPodAutoscaler

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Autoscaling_v2alpha1Api(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listAutoscalingV2alpha1NamespacedHorizontalPodAutoscaler($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Autoscaling_v2alpha1Api->listAutoscalingV2alpha1NamespacedHorizontalPodAutoscaler: ', $e->getMessage(), PHP_EOL;
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

[**\UniversityOfAdelaide\OpenShift\Model\V2alpha1HorizontalPodAutoscalerList**](../Model/V2alpha1HorizontalPodAutoscalerList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchAutoscalingV2alpha1NamespacedHorizontalPodAutoscaler**
> \UniversityOfAdelaide\OpenShift\Model\V2alpha1HorizontalPodAutoscaler patchAutoscalingV2alpha1NamespacedHorizontalPodAutoscaler($name, $namespace, $body, $pretty)



partially update the specified HorizontalPodAutoscaler

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Autoscaling_v2alpha1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the HorizontalPodAutoscaler
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchAutoscalingV2alpha1NamespacedHorizontalPodAutoscaler($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Autoscaling_v2alpha1Api->patchAutoscalingV2alpha1NamespacedHorizontalPodAutoscaler: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the HorizontalPodAutoscaler |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V2alpha1HorizontalPodAutoscaler**](../Model/V2alpha1HorizontalPodAutoscaler.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchAutoscalingV2alpha1NamespacedHorizontalPodAutoscalerStatus**
> \UniversityOfAdelaide\OpenShift\Model\V2alpha1HorizontalPodAutoscaler patchAutoscalingV2alpha1NamespacedHorizontalPodAutoscalerStatus($name, $namespace, $body, $pretty)



partially update status of the specified HorizontalPodAutoscaler

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Autoscaling_v2alpha1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the HorizontalPodAutoscaler
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchAutoscalingV2alpha1NamespacedHorizontalPodAutoscalerStatus($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Autoscaling_v2alpha1Api->patchAutoscalingV2alpha1NamespacedHorizontalPodAutoscalerStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the HorizontalPodAutoscaler |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V2alpha1HorizontalPodAutoscaler**](../Model/V2alpha1HorizontalPodAutoscaler.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readAutoscalingV2alpha1NamespacedHorizontalPodAutoscaler**
> \UniversityOfAdelaide\OpenShift\Model\V2alpha1HorizontalPodAutoscaler readAutoscalingV2alpha1NamespacedHorizontalPodAutoscaler($name, $namespace, $pretty, $exact, $export)



read the specified HorizontalPodAutoscaler

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Autoscaling_v2alpha1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the HorizontalPodAutoscaler
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$exact = true; // bool | Should the export be exact.  Exact export maintains cluster-specific fields like 'Namespace'.
$export = true; // bool | Should this value be exported.  Export strips fields that a user can not specify.

try {
    $result = $api_instance->readAutoscalingV2alpha1NamespacedHorizontalPodAutoscaler($name, $namespace, $pretty, $exact, $export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Autoscaling_v2alpha1Api->readAutoscalingV2alpha1NamespacedHorizontalPodAutoscaler: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the HorizontalPodAutoscaler |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **exact** | **bool**| Should the export be exact.  Exact export maintains cluster-specific fields like &#39;Namespace&#39;. | [optional]
 **export** | **bool**| Should this value be exported.  Export strips fields that a user can not specify. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V2alpha1HorizontalPodAutoscaler**](../Model/V2alpha1HorizontalPodAutoscaler.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readAutoscalingV2alpha1NamespacedHorizontalPodAutoscalerStatus**
> \UniversityOfAdelaide\OpenShift\Model\V2alpha1HorizontalPodAutoscaler readAutoscalingV2alpha1NamespacedHorizontalPodAutoscalerStatus($name, $namespace, $pretty)



read status of the specified HorizontalPodAutoscaler

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Autoscaling_v2alpha1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the HorizontalPodAutoscaler
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->readAutoscalingV2alpha1NamespacedHorizontalPodAutoscalerStatus($name, $namespace, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Autoscaling_v2alpha1Api->readAutoscalingV2alpha1NamespacedHorizontalPodAutoscalerStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the HorizontalPodAutoscaler |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V2alpha1HorizontalPodAutoscaler**](../Model/V2alpha1HorizontalPodAutoscaler.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceAutoscalingV2alpha1NamespacedHorizontalPodAutoscaler**
> \UniversityOfAdelaide\OpenShift\Model\V2alpha1HorizontalPodAutoscaler replaceAutoscalingV2alpha1NamespacedHorizontalPodAutoscaler($name, $namespace, $body, $pretty)



replace the specified HorizontalPodAutoscaler

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Autoscaling_v2alpha1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the HorizontalPodAutoscaler
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V2alpha1HorizontalPodAutoscaler(); // \UniversityOfAdelaide\OpenShift\Model\V2alpha1HorizontalPodAutoscaler | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceAutoscalingV2alpha1NamespacedHorizontalPodAutoscaler($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Autoscaling_v2alpha1Api->replaceAutoscalingV2alpha1NamespacedHorizontalPodAutoscaler: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the HorizontalPodAutoscaler |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V2alpha1HorizontalPodAutoscaler**](../Model/\UniversityOfAdelaide\OpenShift\Model\V2alpha1HorizontalPodAutoscaler.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V2alpha1HorizontalPodAutoscaler**](../Model/V2alpha1HorizontalPodAutoscaler.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceAutoscalingV2alpha1NamespacedHorizontalPodAutoscalerStatus**
> \UniversityOfAdelaide\OpenShift\Model\V2alpha1HorizontalPodAutoscaler replaceAutoscalingV2alpha1NamespacedHorizontalPodAutoscalerStatus($name, $namespace, $body, $pretty)



replace status of the specified HorizontalPodAutoscaler

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Autoscaling_v2alpha1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the HorizontalPodAutoscaler
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V2alpha1HorizontalPodAutoscaler(); // \UniversityOfAdelaide\OpenShift\Model\V2alpha1HorizontalPodAutoscaler | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceAutoscalingV2alpha1NamespacedHorizontalPodAutoscalerStatus($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Autoscaling_v2alpha1Api->replaceAutoscalingV2alpha1NamespacedHorizontalPodAutoscalerStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the HorizontalPodAutoscaler |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V2alpha1HorizontalPodAutoscaler**](../Model/\UniversityOfAdelaide\OpenShift\Model\V2alpha1HorizontalPodAutoscaler.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V2alpha1HorizontalPodAutoscaler**](../Model/V2alpha1HorizontalPodAutoscaler.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchAutoscalingV2alpha1HorizontalPodAutoscalerListForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchAutoscalingV2alpha1HorizontalPodAutoscalerListForAllNamespaces($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of HorizontalPodAutoscaler

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Autoscaling_v2alpha1Api(new \Http\Adapter\Guzzle6\Client());
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchAutoscalingV2alpha1HorizontalPodAutoscalerListForAllNamespaces($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Autoscaling_v2alpha1Api->watchAutoscalingV2alpha1HorizontalPodAutoscalerListForAllNamespaces: ', $e->getMessage(), PHP_EOL;
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

# **watchAutoscalingV2alpha1NamespacedHorizontalPodAutoscaler**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchAutoscalingV2alpha1NamespacedHorizontalPodAutoscaler($name, $namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch changes to an object of kind HorizontalPodAutoscaler

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Autoscaling_v2alpha1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the HorizontalPodAutoscaler
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchAutoscalingV2alpha1NamespacedHorizontalPodAutoscaler($name, $namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Autoscaling_v2alpha1Api->watchAutoscalingV2alpha1NamespacedHorizontalPodAutoscaler: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the HorizontalPodAutoscaler |
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

# **watchAutoscalingV2alpha1NamespacedHorizontalPodAutoscalerList**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchAutoscalingV2alpha1NamespacedHorizontalPodAutoscalerList($namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of HorizontalPodAutoscaler

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Autoscaling_v2alpha1Api(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchAutoscalingV2alpha1NamespacedHorizontalPodAutoscalerList($namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Autoscaling_v2alpha1Api->watchAutoscalingV2alpha1NamespacedHorizontalPodAutoscalerList: ', $e->getMessage(), PHP_EOL;
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

