# UniversityOfAdelaide\OpenShift\SecurityOpenshiftIo_v1Api

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSecurityOpenshiftIoV1NamespacedPodSecurityPolicyReview**](SecurityOpenshiftIo_v1Api.md#createSecurityOpenshiftIoV1NamespacedPodSecurityPolicyReview) | **POST** /apis/security.openshift.io/v1/namespaces/{namespace}/podsecuritypolicyreviews | 
[**createSecurityOpenshiftIoV1NamespacedPodSecurityPolicySelfSubjectReview**](SecurityOpenshiftIo_v1Api.md#createSecurityOpenshiftIoV1NamespacedPodSecurityPolicySelfSubjectReview) | **POST** /apis/security.openshift.io/v1/namespaces/{namespace}/podsecuritypolicyselfsubjectreviews | 
[**createSecurityOpenshiftIoV1NamespacedPodSecurityPolicySubjectReview**](SecurityOpenshiftIo_v1Api.md#createSecurityOpenshiftIoV1NamespacedPodSecurityPolicySubjectReview) | **POST** /apis/security.openshift.io/v1/namespaces/{namespace}/podsecuritypolicysubjectreviews | 
[**createSecurityOpenshiftIoV1PodSecurityPolicyReviewForAllNamespaces**](SecurityOpenshiftIo_v1Api.md#createSecurityOpenshiftIoV1PodSecurityPolicyReviewForAllNamespaces) | **POST** /apis/security.openshift.io/v1/podsecuritypolicyreviews | 
[**createSecurityOpenshiftIoV1PodSecurityPolicySelfSubjectReviewForAllNamespaces**](SecurityOpenshiftIo_v1Api.md#createSecurityOpenshiftIoV1PodSecurityPolicySelfSubjectReviewForAllNamespaces) | **POST** /apis/security.openshift.io/v1/podsecuritypolicyselfsubjectreviews | 
[**createSecurityOpenshiftIoV1PodSecurityPolicySubjectReviewForAllNamespaces**](SecurityOpenshiftIo_v1Api.md#createSecurityOpenshiftIoV1PodSecurityPolicySubjectReviewForAllNamespaces) | **POST** /apis/security.openshift.io/v1/podsecuritypolicysubjectreviews | 
[**getSecurityOpenshiftIoV1APIResources**](SecurityOpenshiftIo_v1Api.md#getSecurityOpenshiftIoV1APIResources) | **GET** /apis/security.openshift.io/v1/ | 


# **createSecurityOpenshiftIoV1NamespacedPodSecurityPolicyReview**
> \UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicyReview createSecurityOpenshiftIoV1NamespacedPodSecurityPolicyReview($namespace, $body, $pretty)



create a PodSecurityPolicyReview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\SecurityOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicyReview(); // \UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicyReview | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createSecurityOpenshiftIoV1NamespacedPodSecurityPolicyReview($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityOpenshiftIo_v1Api->createSecurityOpenshiftIoV1NamespacedPodSecurityPolicyReview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicyReview**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicyReview.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicyReview**](../Model/V1PodSecurityPolicyReview.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSecurityOpenshiftIoV1NamespacedPodSecurityPolicySelfSubjectReview**
> \UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySelfSubjectReview createSecurityOpenshiftIoV1NamespacedPodSecurityPolicySelfSubjectReview($namespace, $body, $pretty)



create a PodSecurityPolicySelfSubjectReview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\SecurityOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySelfSubjectReview(); // \UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySelfSubjectReview | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createSecurityOpenshiftIoV1NamespacedPodSecurityPolicySelfSubjectReview($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityOpenshiftIo_v1Api->createSecurityOpenshiftIoV1NamespacedPodSecurityPolicySelfSubjectReview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySelfSubjectReview**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySelfSubjectReview.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySelfSubjectReview**](../Model/V1PodSecurityPolicySelfSubjectReview.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSecurityOpenshiftIoV1NamespacedPodSecurityPolicySubjectReview**
> \UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySubjectReview createSecurityOpenshiftIoV1NamespacedPodSecurityPolicySubjectReview($namespace, $body, $pretty)



create a PodSecurityPolicySubjectReview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\SecurityOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySubjectReview(); // \UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySubjectReview | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createSecurityOpenshiftIoV1NamespacedPodSecurityPolicySubjectReview($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityOpenshiftIo_v1Api->createSecurityOpenshiftIoV1NamespacedPodSecurityPolicySubjectReview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySubjectReview**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySubjectReview.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySubjectReview**](../Model/V1PodSecurityPolicySubjectReview.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSecurityOpenshiftIoV1PodSecurityPolicyReviewForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicyReview createSecurityOpenshiftIoV1PodSecurityPolicyReviewForAllNamespaces($body, $pretty)



create a PodSecurityPolicyReview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\SecurityOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicyReview(); // \UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicyReview | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createSecurityOpenshiftIoV1PodSecurityPolicyReviewForAllNamespaces($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityOpenshiftIo_v1Api->createSecurityOpenshiftIoV1PodSecurityPolicyReviewForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicyReview**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicyReview.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicyReview**](../Model/V1PodSecurityPolicyReview.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSecurityOpenshiftIoV1PodSecurityPolicySelfSubjectReviewForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySelfSubjectReview createSecurityOpenshiftIoV1PodSecurityPolicySelfSubjectReviewForAllNamespaces($body, $pretty)



create a PodSecurityPolicySelfSubjectReview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\SecurityOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySelfSubjectReview(); // \UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySelfSubjectReview | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createSecurityOpenshiftIoV1PodSecurityPolicySelfSubjectReviewForAllNamespaces($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityOpenshiftIo_v1Api->createSecurityOpenshiftIoV1PodSecurityPolicySelfSubjectReviewForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySelfSubjectReview**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySelfSubjectReview.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySelfSubjectReview**](../Model/V1PodSecurityPolicySelfSubjectReview.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSecurityOpenshiftIoV1PodSecurityPolicySubjectReviewForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySubjectReview createSecurityOpenshiftIoV1PodSecurityPolicySubjectReviewForAllNamespaces($body, $pretty)



create a PodSecurityPolicySubjectReview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\SecurityOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySubjectReview(); // \UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySubjectReview | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createSecurityOpenshiftIoV1PodSecurityPolicySubjectReviewForAllNamespaces($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityOpenshiftIo_v1Api->createSecurityOpenshiftIoV1PodSecurityPolicySubjectReviewForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySubjectReview**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySubjectReview.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1PodSecurityPolicySubjectReview**](../Model/V1PodSecurityPolicySubjectReview.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSecurityOpenshiftIoV1APIResources**
> \UniversityOfAdelaide\OpenShift\Model\V1APIResourceList getSecurityOpenshiftIoV1APIResources()



get available resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\SecurityOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->getSecurityOpenshiftIoV1APIResources();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityOpenshiftIo_v1Api->getSecurityOpenshiftIoV1APIResources: ', $e->getMessage(), PHP_EOL;
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

