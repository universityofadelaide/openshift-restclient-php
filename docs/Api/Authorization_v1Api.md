# UniversityOfAdelaide\OpenShift\Authorization_v1Api

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAuthorizationV1LocalSubjectAccessReviewForAllNamespaces**](Authorization_v1Api.md#createAuthorizationV1LocalSubjectAccessReviewForAllNamespaces) | **POST** /apis/authorization.k8s.io/v1/localsubjectaccessreviews | 
[**createAuthorizationV1NamespacedLocalSubjectAccessReview**](Authorization_v1Api.md#createAuthorizationV1NamespacedLocalSubjectAccessReview) | **POST** /apis/authorization.k8s.io/v1/namespaces/{namespace}/localsubjectaccessreviews | 
[**createAuthorizationV1SelfSubjectAccessReview**](Authorization_v1Api.md#createAuthorizationV1SelfSubjectAccessReview) | **POST** /apis/authorization.k8s.io/v1/selfsubjectaccessreviews | 
[**createAuthorizationV1SubjectAccessReview**](Authorization_v1Api.md#createAuthorizationV1SubjectAccessReview) | **POST** /apis/authorization.k8s.io/v1/subjectaccessreviews | 
[**getAuthorizationV1APIResources**](Authorization_v1Api.md#getAuthorizationV1APIResources) | **GET** /apis/authorization.k8s.io/v1/ | 


# **createAuthorizationV1LocalSubjectAccessReviewForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1LocalSubjectAccessReview createAuthorizationV1LocalSubjectAccessReviewForAllNamespaces($body, $pretty)



create a LocalSubjectAccessReview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: openshift_auth
UniversityOfAdelaide\OpenShift\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Authorization_v1Api(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1LocalSubjectAccessReview(); // \UniversityOfAdelaide\OpenShift\Model\V1LocalSubjectAccessReview | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createAuthorizationV1LocalSubjectAccessReviewForAllNamespaces($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Authorization_v1Api->createAuthorizationV1LocalSubjectAccessReviewForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1LocalSubjectAccessReview**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1LocalSubjectAccessReview.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1LocalSubjectAccessReview**](../Model/V1LocalSubjectAccessReview.md)

### Authorization

[openshift_auth](../../README.md#openshift_auth)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAuthorizationV1NamespacedLocalSubjectAccessReview**
> \UniversityOfAdelaide\OpenShift\Model\V1LocalSubjectAccessReview createAuthorizationV1NamespacedLocalSubjectAccessReview($namespace, $body, $pretty)



create a LocalSubjectAccessReview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: openshift_auth
UniversityOfAdelaide\OpenShift\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Authorization_v1Api(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1LocalSubjectAccessReview(); // \UniversityOfAdelaide\OpenShift\Model\V1LocalSubjectAccessReview | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createAuthorizationV1NamespacedLocalSubjectAccessReview($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Authorization_v1Api->createAuthorizationV1NamespacedLocalSubjectAccessReview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1LocalSubjectAccessReview**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1LocalSubjectAccessReview.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1LocalSubjectAccessReview**](../Model/V1LocalSubjectAccessReview.md)

### Authorization

[openshift_auth](../../README.md#openshift_auth)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAuthorizationV1SelfSubjectAccessReview**
> \UniversityOfAdelaide\OpenShift\Model\V1SelfSubjectAccessReview createAuthorizationV1SelfSubjectAccessReview($body, $pretty)



create a SelfSubjectAccessReview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: openshift_auth
UniversityOfAdelaide\OpenShift\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Authorization_v1Api(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1SelfSubjectAccessReview(); // \UniversityOfAdelaide\OpenShift\Model\V1SelfSubjectAccessReview | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createAuthorizationV1SelfSubjectAccessReview($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Authorization_v1Api->createAuthorizationV1SelfSubjectAccessReview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1SelfSubjectAccessReview**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1SelfSubjectAccessReview.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1SelfSubjectAccessReview**](../Model/V1SelfSubjectAccessReview.md)

### Authorization

[openshift_auth](../../README.md#openshift_auth)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAuthorizationV1SubjectAccessReview**
> \UniversityOfAdelaide\OpenShift\Model\V1SubjectAccessReview createAuthorizationV1SubjectAccessReview($body, $pretty)



create a SubjectAccessReview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: openshift_auth
UniversityOfAdelaide\OpenShift\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Authorization_v1Api(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1SubjectAccessReview(); // \UniversityOfAdelaide\OpenShift\Model\V1SubjectAccessReview | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createAuthorizationV1SubjectAccessReview($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Authorization_v1Api->createAuthorizationV1SubjectAccessReview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1SubjectAccessReview**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1SubjectAccessReview.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1SubjectAccessReview**](../Model/V1SubjectAccessReview.md)

### Authorization

[openshift_auth](../../README.md#openshift_auth)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAuthorizationV1APIResources**
> \UniversityOfAdelaide\OpenShift\Model\V1APIResourceList getAuthorizationV1APIResources()



get available resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: openshift_auth
UniversityOfAdelaide\OpenShift\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Authorization_v1Api(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->getAuthorizationV1APIResources();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Authorization_v1Api->getAuthorizationV1APIResources: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1APIResourceList**](../Model/V1APIResourceList.md)

### Authorization

[openshift_auth](../../README.md#openshift_auth)

### HTTP request headers

 - **Content-Type**: application/json, application/yaml, application/vnd.kubernetes.protobuf
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

