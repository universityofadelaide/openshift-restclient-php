# UniversityOfAdelaide\OpenShift\Authentication_v1Api

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAuthenticationV1TokenReview**](Authentication_v1Api.md#createAuthenticationV1TokenReview) | **POST** /apis/authentication.k8s.io/v1/tokenreviews | 
[**getAuthenticationV1APIResources**](Authentication_v1Api.md#getAuthenticationV1APIResources) | **GET** /apis/authentication.k8s.io/v1/ | 


# **createAuthenticationV1TokenReview**
> \UniversityOfAdelaide\OpenShift\Model\V1TokenReview createAuthenticationV1TokenReview($body, $pretty)



create a TokenReview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Authentication_v1Api();
$body = new \UniversityOfAdelaide\OpenShift\Model\V1TokenReview(); // \UniversityOfAdelaide\OpenShift\Model\V1TokenReview | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createAuthenticationV1TokenReview($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Authentication_v1Api->createAuthenticationV1TokenReview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1TokenReview**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1TokenReview.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1TokenReview**](../Model/V1TokenReview.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAuthenticationV1APIResources**
> \UniversityOfAdelaide\OpenShift\Model\V1APIResourceList getAuthenticationV1APIResources()



get available resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Authentication_v1Api();

try {
    $result = $api_instance->getAuthenticationV1APIResources();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Authentication_v1Api->getAuthenticationV1APIResources: ', $e->getMessage(), PHP_EOL;
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

