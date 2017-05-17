# UniversityOfAdelaide\OpenShift\Settings_v1alpha1Api

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSettingsV1alpha1NamespacedPodPreset**](Settings_v1alpha1Api.md#createSettingsV1alpha1NamespacedPodPreset) | **POST** /apis/settings.k8s.io/v1alpha1/namespaces/{namespace}/podpresets | 
[**createSettingsV1alpha1PodPresetForAllNamespaces**](Settings_v1alpha1Api.md#createSettingsV1alpha1PodPresetForAllNamespaces) | **POST** /apis/settings.k8s.io/v1alpha1/podpresets | 
[**deleteSettingsV1alpha1CollectionNamespacedPodPreset**](Settings_v1alpha1Api.md#deleteSettingsV1alpha1CollectionNamespacedPodPreset) | **DELETE** /apis/settings.k8s.io/v1alpha1/namespaces/{namespace}/podpresets | 
[**deleteSettingsV1alpha1NamespacedPodPreset**](Settings_v1alpha1Api.md#deleteSettingsV1alpha1NamespacedPodPreset) | **DELETE** /apis/settings.k8s.io/v1alpha1/namespaces/{namespace}/podpresets/{name} | 
[**getSettingsV1alpha1APIResources**](Settings_v1alpha1Api.md#getSettingsV1alpha1APIResources) | **GET** /apis/settings.k8s.io/v1alpha1/ | 
[**listSettingsV1alpha1NamespacedPodPreset**](Settings_v1alpha1Api.md#listSettingsV1alpha1NamespacedPodPreset) | **GET** /apis/settings.k8s.io/v1alpha1/namespaces/{namespace}/podpresets | 
[**listSettingsV1alpha1PodPresetForAllNamespaces**](Settings_v1alpha1Api.md#listSettingsV1alpha1PodPresetForAllNamespaces) | **GET** /apis/settings.k8s.io/v1alpha1/podpresets | 
[**patchSettingsV1alpha1NamespacedPodPreset**](Settings_v1alpha1Api.md#patchSettingsV1alpha1NamespacedPodPreset) | **PATCH** /apis/settings.k8s.io/v1alpha1/namespaces/{namespace}/podpresets/{name} | 
[**readSettingsV1alpha1NamespacedPodPreset**](Settings_v1alpha1Api.md#readSettingsV1alpha1NamespacedPodPreset) | **GET** /apis/settings.k8s.io/v1alpha1/namespaces/{namespace}/podpresets/{name} | 
[**replaceSettingsV1alpha1NamespacedPodPreset**](Settings_v1alpha1Api.md#replaceSettingsV1alpha1NamespacedPodPreset) | **PUT** /apis/settings.k8s.io/v1alpha1/namespaces/{namespace}/podpresets/{name} | 
[**watchSettingsV1alpha1NamespacedPodPreset**](Settings_v1alpha1Api.md#watchSettingsV1alpha1NamespacedPodPreset) | **GET** /apis/settings.k8s.io/v1alpha1/watch/namespaces/{namespace}/podpresets/{name} | 
[**watchSettingsV1alpha1NamespacedPodPresetList**](Settings_v1alpha1Api.md#watchSettingsV1alpha1NamespacedPodPresetList) | **GET** /apis/settings.k8s.io/v1alpha1/watch/namespaces/{namespace}/podpresets | 
[**watchSettingsV1alpha1PodPresetListForAllNamespaces**](Settings_v1alpha1Api.md#watchSettingsV1alpha1PodPresetListForAllNamespaces) | **GET** /apis/settings.k8s.io/v1alpha1/watch/podpresets | 


# **createSettingsV1alpha1NamespacedPodPreset**
> \UniversityOfAdelaide\OpenShift\Model\V1alpha1PodPreset createSettingsV1alpha1NamespacedPodPreset($namespace, $body, $pretty)



create a PodPreset

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Settings_v1alpha1Api();
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1alpha1PodPreset(); // \UniversityOfAdelaide\OpenShift\Model\V1alpha1PodPreset | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createSettingsV1alpha1NamespacedPodPreset($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Settings_v1alpha1Api->createSettingsV1alpha1NamespacedPodPreset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1alpha1PodPreset**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1alpha1PodPreset.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1alpha1PodPreset**](../Model/V1alpha1PodPreset.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSettingsV1alpha1PodPresetForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1alpha1PodPreset createSettingsV1alpha1PodPresetForAllNamespaces($body, $pretty)



create a PodPreset

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Settings_v1alpha1Api();
$body = new \UniversityOfAdelaide\OpenShift\Model\V1alpha1PodPreset(); // \UniversityOfAdelaide\OpenShift\Model\V1alpha1PodPreset | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createSettingsV1alpha1PodPresetForAllNamespaces($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Settings_v1alpha1Api->createSettingsV1alpha1PodPresetForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1alpha1PodPreset**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1alpha1PodPreset.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1alpha1PodPreset**](../Model/V1alpha1PodPreset.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSettingsV1alpha1CollectionNamespacedPodPreset**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteSettingsV1alpha1CollectionNamespacedPodPreset($namespace, $pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch)



delete collection of PodPreset

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Settings_v1alpha1Api();
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->deleteSettingsV1alpha1CollectionNamespacedPodPreset($namespace, $pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Settings_v1alpha1Api->deleteSettingsV1alpha1CollectionNamespacedPodPreset: ', $e->getMessage(), PHP_EOL;
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

# **deleteSettingsV1alpha1NamespacedPodPreset**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteSettingsV1alpha1NamespacedPodPreset($name, $namespace, $body, $pretty, $grace_period_seconds, $orphan_dependents, $propagation_policy)



delete a PodPreset

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Settings_v1alpha1Api();
$name = "name_example"; // string | name of the PodPreset
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions(); // \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$grace_period_seconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphan_dependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagation_policy = "propagation_policy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteSettingsV1alpha1NamespacedPodPreset($name, $namespace, $body, $pretty, $grace_period_seconds, $orphan_dependents, $propagation_policy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Settings_v1alpha1Api->deleteSettingsV1alpha1NamespacedPodPreset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the PodPreset |
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

# **getSettingsV1alpha1APIResources**
> \UniversityOfAdelaide\OpenShift\Model\V1APIResourceList getSettingsV1alpha1APIResources()



get available resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Settings_v1alpha1Api();

try {
    $result = $api_instance->getSettingsV1alpha1APIResources();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Settings_v1alpha1Api->getSettingsV1alpha1APIResources: ', $e->getMessage(), PHP_EOL;
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

# **listSettingsV1alpha1NamespacedPodPreset**
> \UniversityOfAdelaide\OpenShift\Model\V1alpha1PodPresetList listSettingsV1alpha1NamespacedPodPreset($namespace, $pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch)



list or watch objects of kind PodPreset

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Settings_v1alpha1Api();
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listSettingsV1alpha1NamespacedPodPreset($namespace, $pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Settings_v1alpha1Api->listSettingsV1alpha1NamespacedPodPreset: ', $e->getMessage(), PHP_EOL;
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

[**\UniversityOfAdelaide\OpenShift\Model\V1alpha1PodPresetList**](../Model/V1alpha1PodPresetList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listSettingsV1alpha1PodPresetForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1alpha1PodPresetList listSettingsV1alpha1PodPresetForAllNamespaces($pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch)



list or watch objects of kind PodPreset

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Settings_v1alpha1Api();
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listSettingsV1alpha1PodPresetForAllNamespaces($pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Settings_v1alpha1Api->listSettingsV1alpha1PodPresetForAllNamespaces: ', $e->getMessage(), PHP_EOL;
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

[**\UniversityOfAdelaide\OpenShift\Model\V1alpha1PodPresetList**](../Model/V1alpha1PodPresetList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchSettingsV1alpha1NamespacedPodPreset**
> \UniversityOfAdelaide\OpenShift\Model\V1alpha1PodPreset patchSettingsV1alpha1NamespacedPodPreset($name, $namespace, $body, $pretty)



partially update the specified PodPreset

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Settings_v1alpha1Api();
$name = "name_example"; // string | name of the PodPreset
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchSettingsV1alpha1NamespacedPodPreset($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Settings_v1alpha1Api->patchSettingsV1alpha1NamespacedPodPreset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the PodPreset |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1alpha1PodPreset**](../Model/V1alpha1PodPreset.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readSettingsV1alpha1NamespacedPodPreset**
> \UniversityOfAdelaide\OpenShift\Model\V1alpha1PodPreset readSettingsV1alpha1NamespacedPodPreset($name, $namespace, $pretty, $exact, $export)



read the specified PodPreset

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Settings_v1alpha1Api();
$name = "name_example"; // string | name of the PodPreset
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$exact = true; // bool | Should the export be exact.  Exact export maintains cluster-specific fields like 'Namespace'.
$export = true; // bool | Should this value be exported.  Export strips fields that a user can not specify.

try {
    $result = $api_instance->readSettingsV1alpha1NamespacedPodPreset($name, $namespace, $pretty, $exact, $export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Settings_v1alpha1Api->readSettingsV1alpha1NamespacedPodPreset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the PodPreset |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **exact** | **bool**| Should the export be exact.  Exact export maintains cluster-specific fields like &#39;Namespace&#39;. | [optional]
 **export** | **bool**| Should this value be exported.  Export strips fields that a user can not specify. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1alpha1PodPreset**](../Model/V1alpha1PodPreset.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceSettingsV1alpha1NamespacedPodPreset**
> \UniversityOfAdelaide\OpenShift\Model\V1alpha1PodPreset replaceSettingsV1alpha1NamespacedPodPreset($name, $namespace, $body, $pretty)



replace the specified PodPreset

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Settings_v1alpha1Api();
$name = "name_example"; // string | name of the PodPreset
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1alpha1PodPreset(); // \UniversityOfAdelaide\OpenShift\Model\V1alpha1PodPreset | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceSettingsV1alpha1NamespacedPodPreset($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Settings_v1alpha1Api->replaceSettingsV1alpha1NamespacedPodPreset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the PodPreset |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1alpha1PodPreset**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1alpha1PodPreset.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1alpha1PodPreset**](../Model/V1alpha1PodPreset.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchSettingsV1alpha1NamespacedPodPreset**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchSettingsV1alpha1NamespacedPodPreset($name, $namespace, $field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch)



watch changes to an object of kind PodPreset

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Settings_v1alpha1Api();
$name = "name_example"; // string | name of the PodPreset
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchSettingsV1alpha1NamespacedPodPreset($name, $namespace, $field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Settings_v1alpha1Api->watchSettingsV1alpha1NamespacedPodPreset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the PodPreset |
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

# **watchSettingsV1alpha1NamespacedPodPresetList**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchSettingsV1alpha1NamespacedPodPresetList($namespace, $field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch)



watch individual changes to a list of PodPreset

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Settings_v1alpha1Api();
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchSettingsV1alpha1NamespacedPodPresetList($namespace, $field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Settings_v1alpha1Api->watchSettingsV1alpha1NamespacedPodPresetList: ', $e->getMessage(), PHP_EOL;
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

# **watchSettingsV1alpha1PodPresetListForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchSettingsV1alpha1PodPresetListForAllNamespaces($field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch)



watch individual changes to a list of PodPreset

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Settings_v1alpha1Api();
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchSettingsV1alpha1PodPresetListForAllNamespaces($field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Settings_v1alpha1Api->watchSettingsV1alpha1PodPresetListForAllNamespaces: ', $e->getMessage(), PHP_EOL;
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

