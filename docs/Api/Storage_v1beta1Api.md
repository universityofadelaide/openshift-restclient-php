# UniversityOfAdelaide\OpenShift\Storage_v1beta1Api

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createStorageV1beta1StorageClass**](Storage_v1beta1Api.md#createStorageV1beta1StorageClass) | **POST** /apis/storage.k8s.io/v1beta1/storageclasses | 
[**deleteStorageV1beta1CollectionStorageClass**](Storage_v1beta1Api.md#deleteStorageV1beta1CollectionStorageClass) | **DELETE** /apis/storage.k8s.io/v1beta1/storageclasses | 
[**deleteStorageV1beta1StorageClass**](Storage_v1beta1Api.md#deleteStorageV1beta1StorageClass) | **DELETE** /apis/storage.k8s.io/v1beta1/storageclasses/{name} | 
[**getStorageV1beta1APIResources**](Storage_v1beta1Api.md#getStorageV1beta1APIResources) | **GET** /apis/storage.k8s.io/v1beta1/ | 
[**listStorageV1beta1StorageClass**](Storage_v1beta1Api.md#listStorageV1beta1StorageClass) | **GET** /apis/storage.k8s.io/v1beta1/storageclasses | 
[**patchStorageV1beta1StorageClass**](Storage_v1beta1Api.md#patchStorageV1beta1StorageClass) | **PATCH** /apis/storage.k8s.io/v1beta1/storageclasses/{name} | 
[**readStorageV1beta1StorageClass**](Storage_v1beta1Api.md#readStorageV1beta1StorageClass) | **GET** /apis/storage.k8s.io/v1beta1/storageclasses/{name} | 
[**replaceStorageV1beta1StorageClass**](Storage_v1beta1Api.md#replaceStorageV1beta1StorageClass) | **PUT** /apis/storage.k8s.io/v1beta1/storageclasses/{name} | 
[**watchStorageV1beta1StorageClass**](Storage_v1beta1Api.md#watchStorageV1beta1StorageClass) | **GET** /apis/storage.k8s.io/v1beta1/watch/storageclasses/{name} | 
[**watchStorageV1beta1StorageClassList**](Storage_v1beta1Api.md#watchStorageV1beta1StorageClassList) | **GET** /apis/storage.k8s.io/v1beta1/watch/storageclasses | 


# **createStorageV1beta1StorageClass**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1StorageClass createStorageV1beta1StorageClass($body, $pretty)



create a StorageClass

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Storage_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1beta1StorageClass(); // \UniversityOfAdelaide\OpenShift\Model\V1beta1StorageClass | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createStorageV1beta1StorageClass($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Storage_v1beta1Api->createStorageV1beta1StorageClass: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1beta1StorageClass**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1beta1StorageClass.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1StorageClass**](../Model/V1beta1StorageClass.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteStorageV1beta1CollectionStorageClass**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteStorageV1beta1CollectionStorageClass($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



delete collection of StorageClass

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Storage_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->deleteStorageV1beta1CollectionStorageClass($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Storage_v1beta1Api->deleteStorageV1beta1CollectionStorageClass: ', $e->getMessage(), PHP_EOL;
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

# **deleteStorageV1beta1StorageClass**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteStorageV1beta1StorageClass($name, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy)



delete a StorageClass

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Storage_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the StorageClass
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions(); // \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$gracePeriodSeconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphanDependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagationPolicy = "propagationPolicy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteStorageV1beta1StorageClass($name, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Storage_v1beta1Api->deleteStorageV1beta1StorageClass: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the StorageClass |
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

# **getStorageV1beta1APIResources**
> \UniversityOfAdelaide\OpenShift\Model\V1APIResourceList getStorageV1beta1APIResources()



get available resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Storage_v1beta1Api(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->getStorageV1beta1APIResources();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Storage_v1beta1Api->getStorageV1beta1APIResources: ', $e->getMessage(), PHP_EOL;
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

# **listStorageV1beta1StorageClass**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1StorageClassList listStorageV1beta1StorageClass($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind StorageClass

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Storage_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listStorageV1beta1StorageClass($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Storage_v1beta1Api->listStorageV1beta1StorageClass: ', $e->getMessage(), PHP_EOL;
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

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1StorageClassList**](../Model/V1beta1StorageClassList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchStorageV1beta1StorageClass**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1StorageClass patchStorageV1beta1StorageClass($name, $body, $pretty)



partially update the specified StorageClass

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Storage_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the StorageClass
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchStorageV1beta1StorageClass($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Storage_v1beta1Api->patchStorageV1beta1StorageClass: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the StorageClass |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1StorageClass**](../Model/V1beta1StorageClass.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readStorageV1beta1StorageClass**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1StorageClass readStorageV1beta1StorageClass($name, $pretty, $exact, $export)



read the specified StorageClass

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Storage_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the StorageClass
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$exact = true; // bool | Should the export be exact.  Exact export maintains cluster-specific fields like 'Namespace'.
$export = true; // bool | Should this value be exported.  Export strips fields that a user can not specify.

try {
    $result = $api_instance->readStorageV1beta1StorageClass($name, $pretty, $exact, $export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Storage_v1beta1Api->readStorageV1beta1StorageClass: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the StorageClass |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **exact** | **bool**| Should the export be exact.  Exact export maintains cluster-specific fields like &#39;Namespace&#39;. | [optional]
 **export** | **bool**| Should this value be exported.  Export strips fields that a user can not specify. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1StorageClass**](../Model/V1beta1StorageClass.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceStorageV1beta1StorageClass**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1StorageClass replaceStorageV1beta1StorageClass($name, $body, $pretty)



replace the specified StorageClass

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Storage_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the StorageClass
$body = new \UniversityOfAdelaide\OpenShift\Model\V1beta1StorageClass(); // \UniversityOfAdelaide\OpenShift\Model\V1beta1StorageClass | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceStorageV1beta1StorageClass($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Storage_v1beta1Api->replaceStorageV1beta1StorageClass: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the StorageClass |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1beta1StorageClass**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1beta1StorageClass.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1StorageClass**](../Model/V1beta1StorageClass.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchStorageV1beta1StorageClass**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchStorageV1beta1StorageClass($name, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch changes to an object of kind StorageClass

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Storage_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the StorageClass
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchStorageV1beta1StorageClass($name, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Storage_v1beta1Api->watchStorageV1beta1StorageClass: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the StorageClass |
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

# **watchStorageV1beta1StorageClassList**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchStorageV1beta1StorageClassList($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of StorageClass

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Storage_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchStorageV1beta1StorageClassList($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Storage_v1beta1Api->watchStorageV1beta1StorageClassList: ', $e->getMessage(), PHP_EOL;
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

