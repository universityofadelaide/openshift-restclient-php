# UniversityOfAdelaide\OpenShift\DefaultApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createNamespacedProcessedTemplate**](DefaultApi.md#createNamespacedProcessedTemplate) | **POST** /oapi/v1/namespaces/{namespace}/processedtemplates | 
[**createNamespacedProcessedTemplateV1**](DefaultApi.md#createNamespacedProcessedTemplateV1) | **POST** /apis/template.openshift.io/v1/namespaces/{namespace}/processedtemplates | 
[**createProcessedTemplateForAllNamespaces**](DefaultApi.md#createProcessedTemplateForAllNamespaces) | **POST** /apis/template.openshift.io/v1/processedtemplates | 
[**createProcessedTemplateForAllNamespacesV1**](DefaultApi.md#createProcessedTemplateForAllNamespacesV1) | **POST** /oapi/v1/processedtemplates | 


# **createNamespacedProcessedTemplate**
> \UniversityOfAdelaide\OpenShift\Model\V1Template createNamespacedProcessedTemplate($namespace, $body, $pretty)



create a Template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: openshift_auth
UniversityOfAdelaide\OpenShift\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\DefaultApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Template(); // \UniversityOfAdelaide\OpenShift\Model\V1Template | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createNamespacedProcessedTemplate($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createNamespacedProcessedTemplate: ', $e->getMessage(), PHP_EOL;
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

[openshift_auth](../../README.md#openshift_auth)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNamespacedProcessedTemplateV1**
> \UniversityOfAdelaide\OpenShift\Model\V1Template createNamespacedProcessedTemplateV1($namespace, $body, $pretty)



create a Template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: openshift_auth
UniversityOfAdelaide\OpenShift\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\DefaultApi(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Template(); // \UniversityOfAdelaide\OpenShift\Model\V1Template | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createNamespacedProcessedTemplateV1($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createNamespacedProcessedTemplateV1: ', $e->getMessage(), PHP_EOL;
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

[openshift_auth](../../README.md#openshift_auth)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createProcessedTemplateForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1Template createProcessedTemplateForAllNamespaces($body, $pretty)



create a Template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: openshift_auth
UniversityOfAdelaide\OpenShift\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\DefaultApi(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Template(); // \UniversityOfAdelaide\OpenShift\Model\V1Template | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createProcessedTemplateForAllNamespaces($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createProcessedTemplateForAllNamespaces: ', $e->getMessage(), PHP_EOL;
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

[openshift_auth](../../README.md#openshift_auth)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createProcessedTemplateForAllNamespacesV1**
> \UniversityOfAdelaide\OpenShift\Model\V1Template createProcessedTemplateForAllNamespacesV1($body, $pretty)



create a Template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: openshift_auth
UniversityOfAdelaide\OpenShift\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\DefaultApi(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Template(); // \UniversityOfAdelaide\OpenShift\Model\V1Template | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createProcessedTemplateForAllNamespacesV1($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createProcessedTemplateForAllNamespacesV1: ', $e->getMessage(), PHP_EOL;
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

[openshift_auth](../../README.md#openshift_auth)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

