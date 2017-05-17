# UniversityOfAdelaide\OpenShift\ProjectOpenshiftIo_v1Api

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProjectOpenshiftIoV1Project**](ProjectOpenshiftIo_v1Api.md#createProjectOpenshiftIoV1Project) | **POST** /apis/project.openshift.io/v1/projects | 
[**createProjectOpenshiftIoV1ProjectRequest**](ProjectOpenshiftIo_v1Api.md#createProjectOpenshiftIoV1ProjectRequest) | **POST** /apis/project.openshift.io/v1/projectrequests | 
[**deleteProjectOpenshiftIoV1Project**](ProjectOpenshiftIo_v1Api.md#deleteProjectOpenshiftIoV1Project) | **DELETE** /apis/project.openshift.io/v1/projects/{name} | 
[**getProjectOpenshiftIoV1APIResources**](ProjectOpenshiftIo_v1Api.md#getProjectOpenshiftIoV1APIResources) | **GET** /apis/project.openshift.io/v1/ | 
[**listProjectOpenshiftIoV1Project**](ProjectOpenshiftIo_v1Api.md#listProjectOpenshiftIoV1Project) | **GET** /apis/project.openshift.io/v1/projects | 
[**listProjectOpenshiftIoV1ProjectRequest**](ProjectOpenshiftIo_v1Api.md#listProjectOpenshiftIoV1ProjectRequest) | **GET** /apis/project.openshift.io/v1/projectrequests | 
[**patchProjectOpenshiftIoV1Project**](ProjectOpenshiftIo_v1Api.md#patchProjectOpenshiftIoV1Project) | **PATCH** /apis/project.openshift.io/v1/projects/{name} | 
[**readProjectOpenshiftIoV1Project**](ProjectOpenshiftIo_v1Api.md#readProjectOpenshiftIoV1Project) | **GET** /apis/project.openshift.io/v1/projects/{name} | 
[**replaceProjectOpenshiftIoV1Project**](ProjectOpenshiftIo_v1Api.md#replaceProjectOpenshiftIoV1Project) | **PUT** /apis/project.openshift.io/v1/projects/{name} | 
[**watchProjectOpenshiftIoV1Project**](ProjectOpenshiftIo_v1Api.md#watchProjectOpenshiftIoV1Project) | **GET** /apis/project.openshift.io/v1/watch/projects/{name} | 
[**watchProjectOpenshiftIoV1ProjectList**](ProjectOpenshiftIo_v1Api.md#watchProjectOpenshiftIoV1ProjectList) | **GET** /apis/project.openshift.io/v1/watch/projects | 


# **createProjectOpenshiftIoV1Project**
> \UniversityOfAdelaide\OpenShift\Model\V1Project createProjectOpenshiftIoV1Project($body, $pretty)



create a Project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ProjectOpenshiftIo_v1Api();
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Project(); // \UniversityOfAdelaide\OpenShift\Model\V1Project | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createProjectOpenshiftIoV1Project($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectOpenshiftIo_v1Api->createProjectOpenshiftIoV1Project: ', $e->getMessage(), PHP_EOL;
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

# **createProjectOpenshiftIoV1ProjectRequest**
> \UniversityOfAdelaide\OpenShift\Model\V1ProjectRequest createProjectOpenshiftIoV1ProjectRequest($body, $pretty)



create a ProjectRequest

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ProjectOpenshiftIo_v1Api();
$body = new \UniversityOfAdelaide\OpenShift\Model\V1ProjectRequest(); // \UniversityOfAdelaide\OpenShift\Model\V1ProjectRequest | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createProjectOpenshiftIoV1ProjectRequest($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectOpenshiftIo_v1Api->createProjectOpenshiftIoV1ProjectRequest: ', $e->getMessage(), PHP_EOL;
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

# **deleteProjectOpenshiftIoV1Project**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteProjectOpenshiftIoV1Project($name, $pretty)



delete a Project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ProjectOpenshiftIo_v1Api();
$name = "name_example"; // string | name of the Project
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->deleteProjectOpenshiftIoV1Project($name, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectOpenshiftIo_v1Api->deleteProjectOpenshiftIoV1Project: ', $e->getMessage(), PHP_EOL;
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

# **getProjectOpenshiftIoV1APIResources**
> \UniversityOfAdelaide\OpenShift\Model\V1APIResourceList getProjectOpenshiftIoV1APIResources()



get available resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ProjectOpenshiftIo_v1Api();

try {
    $result = $api_instance->getProjectOpenshiftIoV1APIResources();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectOpenshiftIo_v1Api->getProjectOpenshiftIoV1APIResources: ', $e->getMessage(), PHP_EOL;
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

# **listProjectOpenshiftIoV1Project**
> \UniversityOfAdelaide\OpenShift\Model\V1ProjectList listProjectOpenshiftIoV1Project($pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch)



list or watch objects of kind Project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ProjectOpenshiftIo_v1Api();
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listProjectOpenshiftIoV1Project($pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectOpenshiftIo_v1Api->listProjectOpenshiftIoV1Project: ', $e->getMessage(), PHP_EOL;
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

[**\UniversityOfAdelaide\OpenShift\Model\V1ProjectList**](../Model/V1ProjectList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listProjectOpenshiftIoV1ProjectRequest**
> \UniversityOfAdelaide\OpenShift\Model\V1Status listProjectOpenshiftIoV1ProjectRequest($pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch)



list objects of kind ProjectRequest

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ProjectOpenshiftIo_v1Api();
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listProjectOpenshiftIoV1ProjectRequest($pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectOpenshiftIo_v1Api->listProjectOpenshiftIoV1ProjectRequest: ', $e->getMessage(), PHP_EOL;
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
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchProjectOpenshiftIoV1Project**
> \UniversityOfAdelaide\OpenShift\Model\V1Project patchProjectOpenshiftIoV1Project($name, $body, $pretty)



partially update the specified Project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ProjectOpenshiftIo_v1Api();
$name = "name_example"; // string | name of the Project
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchProjectOpenshiftIoV1Project($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectOpenshiftIo_v1Api->patchProjectOpenshiftIoV1Project: ', $e->getMessage(), PHP_EOL;
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

# **readProjectOpenshiftIoV1Project**
> \UniversityOfAdelaide\OpenShift\Model\V1Project readProjectOpenshiftIoV1Project($name, $pretty)



read the specified Project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ProjectOpenshiftIo_v1Api();
$name = "name_example"; // string | name of the Project
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->readProjectOpenshiftIoV1Project($name, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectOpenshiftIo_v1Api->readProjectOpenshiftIoV1Project: ', $e->getMessage(), PHP_EOL;
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

# **replaceProjectOpenshiftIoV1Project**
> \UniversityOfAdelaide\OpenShift\Model\V1Project replaceProjectOpenshiftIoV1Project($name, $body, $pretty)



replace the specified Project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ProjectOpenshiftIo_v1Api();
$name = "name_example"; // string | name of the Project
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Project(); // \UniversityOfAdelaide\OpenShift\Model\V1Project | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceProjectOpenshiftIoV1Project($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectOpenshiftIo_v1Api->replaceProjectOpenshiftIoV1Project: ', $e->getMessage(), PHP_EOL;
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

# **watchProjectOpenshiftIoV1Project**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchProjectOpenshiftIoV1Project($name, $field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch)



watch changes to an object of kind Project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ProjectOpenshiftIo_v1Api();
$name = "name_example"; // string | name of the Project
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchProjectOpenshiftIoV1Project($name, $field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectOpenshiftIo_v1Api->watchProjectOpenshiftIoV1Project: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Project |
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

# **watchProjectOpenshiftIoV1ProjectList**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchProjectOpenshiftIoV1ProjectList($field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch)



watch individual changes to a list of Project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ProjectOpenshiftIo_v1Api();
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchProjectOpenshiftIoV1ProjectList($field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectOpenshiftIo_v1Api->watchProjectOpenshiftIoV1ProjectList: ', $e->getMessage(), PHP_EOL;
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

