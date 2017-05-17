# UniversityOfAdelaide\OpenShift\Autoscaling_v1Api

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAutoscalingV1HorizontalPodAutoscalerForAllNamespaces**](Autoscaling_v1Api.md#createAutoscalingV1HorizontalPodAutoscalerForAllNamespaces) | **POST** /apis/autoscaling/v1/horizontalpodautoscalers | 
[**createAutoscalingV1NamespacedHorizontalPodAutoscaler**](Autoscaling_v1Api.md#createAutoscalingV1NamespacedHorizontalPodAutoscaler) | **POST** /apis/autoscaling/v1/namespaces/{namespace}/horizontalpodautoscalers | 
[**deleteAutoscalingV1CollectionNamespacedHorizontalPodAutoscaler**](Autoscaling_v1Api.md#deleteAutoscalingV1CollectionNamespacedHorizontalPodAutoscaler) | **DELETE** /apis/autoscaling/v1/namespaces/{namespace}/horizontalpodautoscalers | 
[**deleteAutoscalingV1NamespacedHorizontalPodAutoscaler**](Autoscaling_v1Api.md#deleteAutoscalingV1NamespacedHorizontalPodAutoscaler) | **DELETE** /apis/autoscaling/v1/namespaces/{namespace}/horizontalpodautoscalers/{name} | 
[**getAutoscalingV1APIResources**](Autoscaling_v1Api.md#getAutoscalingV1APIResources) | **GET** /apis/autoscaling/v1/ | 
[**listAutoscalingV1HorizontalPodAutoscalerForAllNamespaces**](Autoscaling_v1Api.md#listAutoscalingV1HorizontalPodAutoscalerForAllNamespaces) | **GET** /apis/autoscaling/v1/horizontalpodautoscalers | 
[**listAutoscalingV1NamespacedHorizontalPodAutoscaler**](Autoscaling_v1Api.md#listAutoscalingV1NamespacedHorizontalPodAutoscaler) | **GET** /apis/autoscaling/v1/namespaces/{namespace}/horizontalpodautoscalers | 
[**patchAutoscalingV1NamespacedHorizontalPodAutoscaler**](Autoscaling_v1Api.md#patchAutoscalingV1NamespacedHorizontalPodAutoscaler) | **PATCH** /apis/autoscaling/v1/namespaces/{namespace}/horizontalpodautoscalers/{name} | 
[**patchAutoscalingV1NamespacedHorizontalPodAutoscalerStatus**](Autoscaling_v1Api.md#patchAutoscalingV1NamespacedHorizontalPodAutoscalerStatus) | **PATCH** /apis/autoscaling/v1/namespaces/{namespace}/horizontalpodautoscalers/{name}/status | 
[**readAutoscalingV1NamespacedHorizontalPodAutoscaler**](Autoscaling_v1Api.md#readAutoscalingV1NamespacedHorizontalPodAutoscaler) | **GET** /apis/autoscaling/v1/namespaces/{namespace}/horizontalpodautoscalers/{name} | 
[**readAutoscalingV1NamespacedHorizontalPodAutoscalerStatus**](Autoscaling_v1Api.md#readAutoscalingV1NamespacedHorizontalPodAutoscalerStatus) | **GET** /apis/autoscaling/v1/namespaces/{namespace}/horizontalpodautoscalers/{name}/status | 
[**replaceAutoscalingV1NamespacedHorizontalPodAutoscaler**](Autoscaling_v1Api.md#replaceAutoscalingV1NamespacedHorizontalPodAutoscaler) | **PUT** /apis/autoscaling/v1/namespaces/{namespace}/horizontalpodautoscalers/{name} | 
[**replaceAutoscalingV1NamespacedHorizontalPodAutoscalerStatus**](Autoscaling_v1Api.md#replaceAutoscalingV1NamespacedHorizontalPodAutoscalerStatus) | **PUT** /apis/autoscaling/v1/namespaces/{namespace}/horizontalpodautoscalers/{name}/status | 
[**watchAutoscalingV1HorizontalPodAutoscalerListForAllNamespaces**](Autoscaling_v1Api.md#watchAutoscalingV1HorizontalPodAutoscalerListForAllNamespaces) | **GET** /apis/autoscaling/v1/watch/horizontalpodautoscalers | 
[**watchAutoscalingV1NamespacedHorizontalPodAutoscaler**](Autoscaling_v1Api.md#watchAutoscalingV1NamespacedHorizontalPodAutoscaler) | **GET** /apis/autoscaling/v1/watch/namespaces/{namespace}/horizontalpodautoscalers/{name} | 
[**watchAutoscalingV1NamespacedHorizontalPodAutoscalerList**](Autoscaling_v1Api.md#watchAutoscalingV1NamespacedHorizontalPodAutoscalerList) | **GET** /apis/autoscaling/v1/watch/namespaces/{namespace}/horizontalpodautoscalers | 


# **createAutoscalingV1HorizontalPodAutoscalerForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1HorizontalPodAutoscaler createAutoscalingV1HorizontalPodAutoscalerForAllNamespaces($body, $pretty)



create a HorizontalPodAutoscaler

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Autoscaling_v1Api();
$body = new \UniversityOfAdelaide\OpenShift\Model\V1HorizontalPodAutoscaler(); // \UniversityOfAdelaide\OpenShift\Model\V1HorizontalPodAutoscaler | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createAutoscalingV1HorizontalPodAutoscalerForAllNamespaces($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Autoscaling_v1Api->createAutoscalingV1HorizontalPodAutoscalerForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1HorizontalPodAutoscaler**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1HorizontalPodAutoscaler.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1HorizontalPodAutoscaler**](../Model/V1HorizontalPodAutoscaler.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAutoscalingV1NamespacedHorizontalPodAutoscaler**
> \UniversityOfAdelaide\OpenShift\Model\V1HorizontalPodAutoscaler createAutoscalingV1NamespacedHorizontalPodAutoscaler($namespace, $body, $pretty)



create a HorizontalPodAutoscaler

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Autoscaling_v1Api();
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1HorizontalPodAutoscaler(); // \UniversityOfAdelaide\OpenShift\Model\V1HorizontalPodAutoscaler | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createAutoscalingV1NamespacedHorizontalPodAutoscaler($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Autoscaling_v1Api->createAutoscalingV1NamespacedHorizontalPodAutoscaler: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1HorizontalPodAutoscaler**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1HorizontalPodAutoscaler.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1HorizontalPodAutoscaler**](../Model/V1HorizontalPodAutoscaler.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAutoscalingV1CollectionNamespacedHorizontalPodAutoscaler**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteAutoscalingV1CollectionNamespacedHorizontalPodAutoscaler($namespace, $pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch)



delete collection of HorizontalPodAutoscaler

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Autoscaling_v1Api();
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->deleteAutoscalingV1CollectionNamespacedHorizontalPodAutoscaler($namespace, $pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Autoscaling_v1Api->deleteAutoscalingV1CollectionNamespacedHorizontalPodAutoscaler: ', $e->getMessage(), PHP_EOL;
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

# **deleteAutoscalingV1NamespacedHorizontalPodAutoscaler**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteAutoscalingV1NamespacedHorizontalPodAutoscaler($name, $namespace, $body, $pretty, $grace_period_seconds, $orphan_dependents, $propagation_policy)



delete a HorizontalPodAutoscaler

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Autoscaling_v1Api();
$name = "name_example"; // string | name of the HorizontalPodAutoscaler
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions(); // \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$grace_period_seconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphan_dependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagation_policy = "propagation_policy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteAutoscalingV1NamespacedHorizontalPodAutoscaler($name, $namespace, $body, $pretty, $grace_period_seconds, $orphan_dependents, $propagation_policy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Autoscaling_v1Api->deleteAutoscalingV1NamespacedHorizontalPodAutoscaler: ', $e->getMessage(), PHP_EOL;
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

# **getAutoscalingV1APIResources**
> \UniversityOfAdelaide\OpenShift\Model\V1APIResourceList getAutoscalingV1APIResources()



get available resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Autoscaling_v1Api();

try {
    $result = $api_instance->getAutoscalingV1APIResources();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Autoscaling_v1Api->getAutoscalingV1APIResources: ', $e->getMessage(), PHP_EOL;
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

# **listAutoscalingV1HorizontalPodAutoscalerForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1HorizontalPodAutoscalerList listAutoscalingV1HorizontalPodAutoscalerForAllNamespaces($pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch)



list or watch objects of kind HorizontalPodAutoscaler

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Autoscaling_v1Api();
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listAutoscalingV1HorizontalPodAutoscalerForAllNamespaces($pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Autoscaling_v1Api->listAutoscalingV1HorizontalPodAutoscalerForAllNamespaces: ', $e->getMessage(), PHP_EOL;
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

[**\UniversityOfAdelaide\OpenShift\Model\V1HorizontalPodAutoscalerList**](../Model/V1HorizontalPodAutoscalerList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAutoscalingV1NamespacedHorizontalPodAutoscaler**
> \UniversityOfAdelaide\OpenShift\Model\V1HorizontalPodAutoscalerList listAutoscalingV1NamespacedHorizontalPodAutoscaler($namespace, $pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch)



list or watch objects of kind HorizontalPodAutoscaler

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Autoscaling_v1Api();
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listAutoscalingV1NamespacedHorizontalPodAutoscaler($namespace, $pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Autoscaling_v1Api->listAutoscalingV1NamespacedHorizontalPodAutoscaler: ', $e->getMessage(), PHP_EOL;
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

[**\UniversityOfAdelaide\OpenShift\Model\V1HorizontalPodAutoscalerList**](../Model/V1HorizontalPodAutoscalerList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchAutoscalingV1NamespacedHorizontalPodAutoscaler**
> \UniversityOfAdelaide\OpenShift\Model\V1HorizontalPodAutoscaler patchAutoscalingV1NamespacedHorizontalPodAutoscaler($name, $namespace, $body, $pretty)



partially update the specified HorizontalPodAutoscaler

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Autoscaling_v1Api();
$name = "name_example"; // string | name of the HorizontalPodAutoscaler
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchAutoscalingV1NamespacedHorizontalPodAutoscaler($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Autoscaling_v1Api->patchAutoscalingV1NamespacedHorizontalPodAutoscaler: ', $e->getMessage(), PHP_EOL;
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

[**\UniversityOfAdelaide\OpenShift\Model\V1HorizontalPodAutoscaler**](../Model/V1HorizontalPodAutoscaler.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchAutoscalingV1NamespacedHorizontalPodAutoscalerStatus**
> \UniversityOfAdelaide\OpenShift\Model\V1HorizontalPodAutoscaler patchAutoscalingV1NamespacedHorizontalPodAutoscalerStatus($name, $namespace, $body, $pretty)



partially update status of the specified HorizontalPodAutoscaler

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Autoscaling_v1Api();
$name = "name_example"; // string | name of the HorizontalPodAutoscaler
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchAutoscalingV1NamespacedHorizontalPodAutoscalerStatus($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Autoscaling_v1Api->patchAutoscalingV1NamespacedHorizontalPodAutoscalerStatus: ', $e->getMessage(), PHP_EOL;
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

[**\UniversityOfAdelaide\OpenShift\Model\V1HorizontalPodAutoscaler**](../Model/V1HorizontalPodAutoscaler.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readAutoscalingV1NamespacedHorizontalPodAutoscaler**
> \UniversityOfAdelaide\OpenShift\Model\V1HorizontalPodAutoscaler readAutoscalingV1NamespacedHorizontalPodAutoscaler($name, $namespace, $pretty, $exact, $export)



read the specified HorizontalPodAutoscaler

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Autoscaling_v1Api();
$name = "name_example"; // string | name of the HorizontalPodAutoscaler
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$exact = true; // bool | Should the export be exact.  Exact export maintains cluster-specific fields like 'Namespace'.
$export = true; // bool | Should this value be exported.  Export strips fields that a user can not specify.

try {
    $result = $api_instance->readAutoscalingV1NamespacedHorizontalPodAutoscaler($name, $namespace, $pretty, $exact, $export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Autoscaling_v1Api->readAutoscalingV1NamespacedHorizontalPodAutoscaler: ', $e->getMessage(), PHP_EOL;
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

[**\UniversityOfAdelaide\OpenShift\Model\V1HorizontalPodAutoscaler**](../Model/V1HorizontalPodAutoscaler.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readAutoscalingV1NamespacedHorizontalPodAutoscalerStatus**
> \UniversityOfAdelaide\OpenShift\Model\V1HorizontalPodAutoscaler readAutoscalingV1NamespacedHorizontalPodAutoscalerStatus($name, $namespace, $pretty)



read status of the specified HorizontalPodAutoscaler

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Autoscaling_v1Api();
$name = "name_example"; // string | name of the HorizontalPodAutoscaler
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->readAutoscalingV1NamespacedHorizontalPodAutoscalerStatus($name, $namespace, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Autoscaling_v1Api->readAutoscalingV1NamespacedHorizontalPodAutoscalerStatus: ', $e->getMessage(), PHP_EOL;
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

[**\UniversityOfAdelaide\OpenShift\Model\V1HorizontalPodAutoscaler**](../Model/V1HorizontalPodAutoscaler.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceAutoscalingV1NamespacedHorizontalPodAutoscaler**
> \UniversityOfAdelaide\OpenShift\Model\V1HorizontalPodAutoscaler replaceAutoscalingV1NamespacedHorizontalPodAutoscaler($name, $namespace, $body, $pretty)



replace the specified HorizontalPodAutoscaler

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Autoscaling_v1Api();
$name = "name_example"; // string | name of the HorizontalPodAutoscaler
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1HorizontalPodAutoscaler(); // \UniversityOfAdelaide\OpenShift\Model\V1HorizontalPodAutoscaler | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceAutoscalingV1NamespacedHorizontalPodAutoscaler($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Autoscaling_v1Api->replaceAutoscalingV1NamespacedHorizontalPodAutoscaler: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the HorizontalPodAutoscaler |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1HorizontalPodAutoscaler**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1HorizontalPodAutoscaler.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1HorizontalPodAutoscaler**](../Model/V1HorizontalPodAutoscaler.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceAutoscalingV1NamespacedHorizontalPodAutoscalerStatus**
> \UniversityOfAdelaide\OpenShift\Model\V1HorizontalPodAutoscaler replaceAutoscalingV1NamespacedHorizontalPodAutoscalerStatus($name, $namespace, $body, $pretty)



replace status of the specified HorizontalPodAutoscaler

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Autoscaling_v1Api();
$name = "name_example"; // string | name of the HorizontalPodAutoscaler
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1HorizontalPodAutoscaler(); // \UniversityOfAdelaide\OpenShift\Model\V1HorizontalPodAutoscaler | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceAutoscalingV1NamespacedHorizontalPodAutoscalerStatus($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Autoscaling_v1Api->replaceAutoscalingV1NamespacedHorizontalPodAutoscalerStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the HorizontalPodAutoscaler |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1HorizontalPodAutoscaler**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1HorizontalPodAutoscaler.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1HorizontalPodAutoscaler**](../Model/V1HorizontalPodAutoscaler.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchAutoscalingV1HorizontalPodAutoscalerListForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchAutoscalingV1HorizontalPodAutoscalerListForAllNamespaces($field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch)



watch individual changes to a list of HorizontalPodAutoscaler

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Autoscaling_v1Api();
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchAutoscalingV1HorizontalPodAutoscalerListForAllNamespaces($field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Autoscaling_v1Api->watchAutoscalingV1HorizontalPodAutoscalerListForAllNamespaces: ', $e->getMessage(), PHP_EOL;
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

# **watchAutoscalingV1NamespacedHorizontalPodAutoscaler**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchAutoscalingV1NamespacedHorizontalPodAutoscaler($name, $namespace, $field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch)



watch changes to an object of kind HorizontalPodAutoscaler

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Autoscaling_v1Api();
$name = "name_example"; // string | name of the HorizontalPodAutoscaler
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchAutoscalingV1NamespacedHorizontalPodAutoscaler($name, $namespace, $field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Autoscaling_v1Api->watchAutoscalingV1NamespacedHorizontalPodAutoscaler: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the HorizontalPodAutoscaler |
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

# **watchAutoscalingV1NamespacedHorizontalPodAutoscalerList**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchAutoscalingV1NamespacedHorizontalPodAutoscalerList($namespace, $field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch)



watch individual changes to a list of HorizontalPodAutoscaler

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Autoscaling_v1Api();
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchAutoscalingV1NamespacedHorizontalPodAutoscalerList($namespace, $field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Autoscaling_v1Api->watchAutoscalingV1NamespacedHorizontalPodAutoscalerList: ', $e->getMessage(), PHP_EOL;
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

