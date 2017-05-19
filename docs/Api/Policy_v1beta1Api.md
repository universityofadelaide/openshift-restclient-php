# UniversityOfAdelaide\OpenShift\Policy_v1beta1Api

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPolicyV1beta1NamespacedPodDisruptionBudget**](Policy_v1beta1Api.md#createPolicyV1beta1NamespacedPodDisruptionBudget) | **POST** /apis/policy/v1beta1/namespaces/{namespace}/poddisruptionbudgets | 
[**createPolicyV1beta1PodDisruptionBudgetForAllNamespaces**](Policy_v1beta1Api.md#createPolicyV1beta1PodDisruptionBudgetForAllNamespaces) | **POST** /apis/policy/v1beta1/poddisruptionbudgets | 
[**deletePolicyV1beta1CollectionNamespacedPodDisruptionBudget**](Policy_v1beta1Api.md#deletePolicyV1beta1CollectionNamespacedPodDisruptionBudget) | **DELETE** /apis/policy/v1beta1/namespaces/{namespace}/poddisruptionbudgets | 
[**deletePolicyV1beta1NamespacedPodDisruptionBudget**](Policy_v1beta1Api.md#deletePolicyV1beta1NamespacedPodDisruptionBudget) | **DELETE** /apis/policy/v1beta1/namespaces/{namespace}/poddisruptionbudgets/{name} | 
[**getPolicyV1beta1APIResources**](Policy_v1beta1Api.md#getPolicyV1beta1APIResources) | **GET** /apis/policy/v1beta1/ | 
[**listPolicyV1beta1NamespacedPodDisruptionBudget**](Policy_v1beta1Api.md#listPolicyV1beta1NamespacedPodDisruptionBudget) | **GET** /apis/policy/v1beta1/namespaces/{namespace}/poddisruptionbudgets | 
[**listPolicyV1beta1PodDisruptionBudgetForAllNamespaces**](Policy_v1beta1Api.md#listPolicyV1beta1PodDisruptionBudgetForAllNamespaces) | **GET** /apis/policy/v1beta1/poddisruptionbudgets | 
[**patchPolicyV1beta1NamespacedPodDisruptionBudget**](Policy_v1beta1Api.md#patchPolicyV1beta1NamespacedPodDisruptionBudget) | **PATCH** /apis/policy/v1beta1/namespaces/{namespace}/poddisruptionbudgets/{name} | 
[**patchPolicyV1beta1NamespacedPodDisruptionBudgetStatus**](Policy_v1beta1Api.md#patchPolicyV1beta1NamespacedPodDisruptionBudgetStatus) | **PATCH** /apis/policy/v1beta1/namespaces/{namespace}/poddisruptionbudgets/{name}/status | 
[**readPolicyV1beta1NamespacedPodDisruptionBudget**](Policy_v1beta1Api.md#readPolicyV1beta1NamespacedPodDisruptionBudget) | **GET** /apis/policy/v1beta1/namespaces/{namespace}/poddisruptionbudgets/{name} | 
[**readPolicyV1beta1NamespacedPodDisruptionBudgetStatus**](Policy_v1beta1Api.md#readPolicyV1beta1NamespacedPodDisruptionBudgetStatus) | **GET** /apis/policy/v1beta1/namespaces/{namespace}/poddisruptionbudgets/{name}/status | 
[**replacePolicyV1beta1NamespacedPodDisruptionBudget**](Policy_v1beta1Api.md#replacePolicyV1beta1NamespacedPodDisruptionBudget) | **PUT** /apis/policy/v1beta1/namespaces/{namespace}/poddisruptionbudgets/{name} | 
[**replacePolicyV1beta1NamespacedPodDisruptionBudgetStatus**](Policy_v1beta1Api.md#replacePolicyV1beta1NamespacedPodDisruptionBudgetStatus) | **PUT** /apis/policy/v1beta1/namespaces/{namespace}/poddisruptionbudgets/{name}/status | 
[**watchPolicyV1beta1NamespacedPodDisruptionBudget**](Policy_v1beta1Api.md#watchPolicyV1beta1NamespacedPodDisruptionBudget) | **GET** /apis/policy/v1beta1/watch/namespaces/{namespace}/poddisruptionbudgets/{name} | 
[**watchPolicyV1beta1NamespacedPodDisruptionBudgetList**](Policy_v1beta1Api.md#watchPolicyV1beta1NamespacedPodDisruptionBudgetList) | **GET** /apis/policy/v1beta1/watch/namespaces/{namespace}/poddisruptionbudgets | 
[**watchPolicyV1beta1PodDisruptionBudgetListForAllNamespaces**](Policy_v1beta1Api.md#watchPolicyV1beta1PodDisruptionBudgetListForAllNamespaces) | **GET** /apis/policy/v1beta1/watch/poddisruptionbudgets | 


# **createPolicyV1beta1NamespacedPodDisruptionBudget**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1PodDisruptionBudget createPolicyV1beta1NamespacedPodDisruptionBudget($namespace, $body, $pretty)



create a PodDisruptionBudget

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Policy_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1beta1PodDisruptionBudget(); // \UniversityOfAdelaide\OpenShift\Model\V1beta1PodDisruptionBudget | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createPolicyV1beta1NamespacedPodDisruptionBudget($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Policy_v1beta1Api->createPolicyV1beta1NamespacedPodDisruptionBudget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1beta1PodDisruptionBudget**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1beta1PodDisruptionBudget.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1PodDisruptionBudget**](../Model/V1beta1PodDisruptionBudget.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPolicyV1beta1PodDisruptionBudgetForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1PodDisruptionBudget createPolicyV1beta1PodDisruptionBudgetForAllNamespaces($body, $pretty)



create a PodDisruptionBudget

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Policy_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1beta1PodDisruptionBudget(); // \UniversityOfAdelaide\OpenShift\Model\V1beta1PodDisruptionBudget | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createPolicyV1beta1PodDisruptionBudgetForAllNamespaces($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Policy_v1beta1Api->createPolicyV1beta1PodDisruptionBudgetForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1beta1PodDisruptionBudget**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1beta1PodDisruptionBudget.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1PodDisruptionBudget**](../Model/V1beta1PodDisruptionBudget.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePolicyV1beta1CollectionNamespacedPodDisruptionBudget**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deletePolicyV1beta1CollectionNamespacedPodDisruptionBudget($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



delete collection of PodDisruptionBudget

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Policy_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->deletePolicyV1beta1CollectionNamespacedPodDisruptionBudget($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Policy_v1beta1Api->deletePolicyV1beta1CollectionNamespacedPodDisruptionBudget: ', $e->getMessage(), PHP_EOL;
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

# **deletePolicyV1beta1NamespacedPodDisruptionBudget**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deletePolicyV1beta1NamespacedPodDisruptionBudget($name, $namespace, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy)



delete a PodDisruptionBudget

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Policy_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the PodDisruptionBudget
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions(); // \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$gracePeriodSeconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphanDependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagationPolicy = "propagationPolicy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deletePolicyV1beta1NamespacedPodDisruptionBudget($name, $namespace, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Policy_v1beta1Api->deletePolicyV1beta1NamespacedPodDisruptionBudget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the PodDisruptionBudget |
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

# **getPolicyV1beta1APIResources**
> \UniversityOfAdelaide\OpenShift\Model\V1APIResourceList getPolicyV1beta1APIResources()



get available resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Policy_v1beta1Api(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->getPolicyV1beta1APIResources();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Policy_v1beta1Api->getPolicyV1beta1APIResources: ', $e->getMessage(), PHP_EOL;
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

# **listPolicyV1beta1NamespacedPodDisruptionBudget**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1PodDisruptionBudgetList listPolicyV1beta1NamespacedPodDisruptionBudget($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind PodDisruptionBudget

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Policy_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listPolicyV1beta1NamespacedPodDisruptionBudget($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Policy_v1beta1Api->listPolicyV1beta1NamespacedPodDisruptionBudget: ', $e->getMessage(), PHP_EOL;
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

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1PodDisruptionBudgetList**](../Model/V1beta1PodDisruptionBudgetList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPolicyV1beta1PodDisruptionBudgetForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1PodDisruptionBudgetList listPolicyV1beta1PodDisruptionBudgetForAllNamespaces($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind PodDisruptionBudget

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Policy_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listPolicyV1beta1PodDisruptionBudgetForAllNamespaces($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Policy_v1beta1Api->listPolicyV1beta1PodDisruptionBudgetForAllNamespaces: ', $e->getMessage(), PHP_EOL;
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

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1PodDisruptionBudgetList**](../Model/V1beta1PodDisruptionBudgetList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchPolicyV1beta1NamespacedPodDisruptionBudget**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1PodDisruptionBudget patchPolicyV1beta1NamespacedPodDisruptionBudget($name, $namespace, $body, $pretty)



partially update the specified PodDisruptionBudget

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Policy_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the PodDisruptionBudget
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchPolicyV1beta1NamespacedPodDisruptionBudget($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Policy_v1beta1Api->patchPolicyV1beta1NamespacedPodDisruptionBudget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the PodDisruptionBudget |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1PodDisruptionBudget**](../Model/V1beta1PodDisruptionBudget.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchPolicyV1beta1NamespacedPodDisruptionBudgetStatus**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1PodDisruptionBudget patchPolicyV1beta1NamespacedPodDisruptionBudgetStatus($name, $namespace, $body, $pretty)



partially update status of the specified PodDisruptionBudget

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Policy_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the PodDisruptionBudget
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchPolicyV1beta1NamespacedPodDisruptionBudgetStatus($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Policy_v1beta1Api->patchPolicyV1beta1NamespacedPodDisruptionBudgetStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the PodDisruptionBudget |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1PodDisruptionBudget**](../Model/V1beta1PodDisruptionBudget.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readPolicyV1beta1NamespacedPodDisruptionBudget**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1PodDisruptionBudget readPolicyV1beta1NamespacedPodDisruptionBudget($name, $namespace, $pretty, $exact, $export)



read the specified PodDisruptionBudget

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Policy_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the PodDisruptionBudget
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$exact = true; // bool | Should the export be exact.  Exact export maintains cluster-specific fields like 'Namespace'.
$export = true; // bool | Should this value be exported.  Export strips fields that a user can not specify.

try {
    $result = $api_instance->readPolicyV1beta1NamespacedPodDisruptionBudget($name, $namespace, $pretty, $exact, $export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Policy_v1beta1Api->readPolicyV1beta1NamespacedPodDisruptionBudget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the PodDisruptionBudget |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **exact** | **bool**| Should the export be exact.  Exact export maintains cluster-specific fields like &#39;Namespace&#39;. | [optional]
 **export** | **bool**| Should this value be exported.  Export strips fields that a user can not specify. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1PodDisruptionBudget**](../Model/V1beta1PodDisruptionBudget.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readPolicyV1beta1NamespacedPodDisruptionBudgetStatus**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1PodDisruptionBudget readPolicyV1beta1NamespacedPodDisruptionBudgetStatus($name, $namespace, $pretty)



read status of the specified PodDisruptionBudget

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Policy_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the PodDisruptionBudget
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->readPolicyV1beta1NamespacedPodDisruptionBudgetStatus($name, $namespace, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Policy_v1beta1Api->readPolicyV1beta1NamespacedPodDisruptionBudgetStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the PodDisruptionBudget |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1PodDisruptionBudget**](../Model/V1beta1PodDisruptionBudget.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replacePolicyV1beta1NamespacedPodDisruptionBudget**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1PodDisruptionBudget replacePolicyV1beta1NamespacedPodDisruptionBudget($name, $namespace, $body, $pretty)



replace the specified PodDisruptionBudget

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Policy_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the PodDisruptionBudget
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1beta1PodDisruptionBudget(); // \UniversityOfAdelaide\OpenShift\Model\V1beta1PodDisruptionBudget | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replacePolicyV1beta1NamespacedPodDisruptionBudget($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Policy_v1beta1Api->replacePolicyV1beta1NamespacedPodDisruptionBudget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the PodDisruptionBudget |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1beta1PodDisruptionBudget**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1beta1PodDisruptionBudget.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1PodDisruptionBudget**](../Model/V1beta1PodDisruptionBudget.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replacePolicyV1beta1NamespacedPodDisruptionBudgetStatus**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1PodDisruptionBudget replacePolicyV1beta1NamespacedPodDisruptionBudgetStatus($name, $namespace, $body, $pretty)



replace status of the specified PodDisruptionBudget

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Policy_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the PodDisruptionBudget
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1beta1PodDisruptionBudget(); // \UniversityOfAdelaide\OpenShift\Model\V1beta1PodDisruptionBudget | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replacePolicyV1beta1NamespacedPodDisruptionBudgetStatus($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Policy_v1beta1Api->replacePolicyV1beta1NamespacedPodDisruptionBudgetStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the PodDisruptionBudget |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1beta1PodDisruptionBudget**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1beta1PodDisruptionBudget.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1PodDisruptionBudget**](../Model/V1beta1PodDisruptionBudget.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchPolicyV1beta1NamespacedPodDisruptionBudget**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchPolicyV1beta1NamespacedPodDisruptionBudget($name, $namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch changes to an object of kind PodDisruptionBudget

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Policy_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the PodDisruptionBudget
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchPolicyV1beta1NamespacedPodDisruptionBudget($name, $namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Policy_v1beta1Api->watchPolicyV1beta1NamespacedPodDisruptionBudget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the PodDisruptionBudget |
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

# **watchPolicyV1beta1NamespacedPodDisruptionBudgetList**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchPolicyV1beta1NamespacedPodDisruptionBudgetList($namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of PodDisruptionBudget

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Policy_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchPolicyV1beta1NamespacedPodDisruptionBudgetList($namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Policy_v1beta1Api->watchPolicyV1beta1NamespacedPodDisruptionBudgetList: ', $e->getMessage(), PHP_EOL;
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

# **watchPolicyV1beta1PodDisruptionBudgetListForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchPolicyV1beta1PodDisruptionBudgetListForAllNamespaces($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of PodDisruptionBudget

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Policy_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchPolicyV1beta1PodDisruptionBudgetListForAllNamespaces($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Policy_v1beta1Api->watchPolicyV1beta1PodDisruptionBudgetListForAllNamespaces: ', $e->getMessage(), PHP_EOL;
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

