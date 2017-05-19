# UniversityOfAdelaide\OpenShift\Authorization_v1beta1Api

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAuthorizationV1beta1LocalSubjectAccessReviewForAllNamespaces**](Authorization_v1beta1Api.md#createAuthorizationV1beta1LocalSubjectAccessReviewForAllNamespaces) | **POST** /apis/authorization.k8s.io/v1beta1/localsubjectaccessreviews | 
[**createAuthorizationV1beta1NamespacedLocalSubjectAccessReview**](Authorization_v1beta1Api.md#createAuthorizationV1beta1NamespacedLocalSubjectAccessReview) | **POST** /apis/authorization.k8s.io/v1beta1/namespaces/{namespace}/localsubjectaccessreviews | 
[**createAuthorizationV1beta1SelfSubjectAccessReview**](Authorization_v1beta1Api.md#createAuthorizationV1beta1SelfSubjectAccessReview) | **POST** /apis/authorization.k8s.io/v1beta1/selfsubjectaccessreviews | 
[**createAuthorizationV1beta1SubjectAccessReview**](Authorization_v1beta1Api.md#createAuthorizationV1beta1SubjectAccessReview) | **POST** /apis/authorization.k8s.io/v1beta1/subjectaccessreviews | 
[**getAuthorizationV1beta1APIResources**](Authorization_v1beta1Api.md#getAuthorizationV1beta1APIResources) | **GET** /apis/authorization.k8s.io/v1beta1/ | 


# **createAuthorizationV1beta1LocalSubjectAccessReviewForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1LocalSubjectAccessReview createAuthorizationV1beta1LocalSubjectAccessReviewForAllNamespaces($body, $pretty)



create a LocalSubjectAccessReview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Authorization_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1beta1LocalSubjectAccessReview(); // \UniversityOfAdelaide\OpenShift\Model\V1beta1LocalSubjectAccessReview | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createAuthorizationV1beta1LocalSubjectAccessReviewForAllNamespaces($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Authorization_v1beta1Api->createAuthorizationV1beta1LocalSubjectAccessReviewForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1beta1LocalSubjectAccessReview**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1beta1LocalSubjectAccessReview.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1LocalSubjectAccessReview**](../Model/V1beta1LocalSubjectAccessReview.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAuthorizationV1beta1NamespacedLocalSubjectAccessReview**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1LocalSubjectAccessReview createAuthorizationV1beta1NamespacedLocalSubjectAccessReview($namespace, $body, $pretty)



create a LocalSubjectAccessReview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Authorization_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1beta1LocalSubjectAccessReview(); // \UniversityOfAdelaide\OpenShift\Model\V1beta1LocalSubjectAccessReview | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createAuthorizationV1beta1NamespacedLocalSubjectAccessReview($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Authorization_v1beta1Api->createAuthorizationV1beta1NamespacedLocalSubjectAccessReview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1beta1LocalSubjectAccessReview**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1beta1LocalSubjectAccessReview.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1LocalSubjectAccessReview**](../Model/V1beta1LocalSubjectAccessReview.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAuthorizationV1beta1SelfSubjectAccessReview**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1SelfSubjectAccessReview createAuthorizationV1beta1SelfSubjectAccessReview($body, $pretty)



create a SelfSubjectAccessReview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Authorization_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1beta1SelfSubjectAccessReview(); // \UniversityOfAdelaide\OpenShift\Model\V1beta1SelfSubjectAccessReview | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createAuthorizationV1beta1SelfSubjectAccessReview($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Authorization_v1beta1Api->createAuthorizationV1beta1SelfSubjectAccessReview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1beta1SelfSubjectAccessReview**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1beta1SelfSubjectAccessReview.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1SelfSubjectAccessReview**](../Model/V1beta1SelfSubjectAccessReview.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAuthorizationV1beta1SubjectAccessReview**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1SubjectAccessReview createAuthorizationV1beta1SubjectAccessReview($body, $pretty)



create a SubjectAccessReview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Authorization_v1beta1Api(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1beta1SubjectAccessReview(); // \UniversityOfAdelaide\OpenShift\Model\V1beta1SubjectAccessReview | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createAuthorizationV1beta1SubjectAccessReview($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Authorization_v1beta1Api->createAuthorizationV1beta1SubjectAccessReview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1beta1SubjectAccessReview**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1beta1SubjectAccessReview.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1SubjectAccessReview**](../Model/V1beta1SubjectAccessReview.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAuthorizationV1beta1APIResources**
> \UniversityOfAdelaide\OpenShift\Model\V1APIResourceList getAuthorizationV1beta1APIResources()



get available resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Authorization_v1beta1Api(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->getAuthorizationV1beta1APIResources();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Authorization_v1beta1Api->getAuthorizationV1beta1APIResources: ', $e->getMessage(), PHP_EOL;
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

