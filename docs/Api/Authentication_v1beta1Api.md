# UniversityOfAdelaide\OpenShift\Authentication_v1beta1Api

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAuthenticationV1beta1TokenReview**](Authentication_v1beta1Api.md#createAuthenticationV1beta1TokenReview) | **POST** /apis/authentication.k8s.io/v1beta1/tokenreviews | 
[**getAuthenticationV1beta1APIResources**](Authentication_v1beta1Api.md#getAuthenticationV1beta1APIResources) | **GET** /apis/authentication.k8s.io/v1beta1/ | 


# **createAuthenticationV1beta1TokenReview**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1TokenReview createAuthenticationV1beta1TokenReview($body, $pretty)



create a TokenReview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Authentication_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1beta1TokenReview(); // \UniversityOfAdelaide\OpenShift\Model\V1beta1TokenReview | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createAuthenticationV1beta1TokenReview($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Authentication_v1beta1Api->createAuthenticationV1beta1TokenReview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1beta1TokenReview**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1beta1TokenReview.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1TokenReview**](../Model/V1beta1TokenReview.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAuthenticationV1beta1APIResources**
> \UniversityOfAdelaide\OpenShift\Model\V1APIResourceList getAuthenticationV1beta1APIResources()



get available resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Authentication_v1beta1Api(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->getAuthenticationV1beta1APIResources();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Authentication_v1beta1Api->getAuthenticationV1beta1APIResources: ', $e->getMessage(), PHP_EOL;
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

