# UniversityOfAdelaide\OpenShift\AuthorizationApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAuthorizationAPIGroup**](AuthorizationApi.md#getAuthorizationAPIGroup) | **GET** /apis/authorization.k8s.io/ | 


# **getAuthorizationAPIGroup**
> \UniversityOfAdelaide\OpenShift\Model\V1APIGroup getAuthorizationAPIGroup()



get information of a group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\AuthorizationApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->getAuthorizationAPIGroup();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->getAuthorizationAPIGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1APIGroup**](../Model/V1APIGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/yaml, application/vnd.kubernetes.protobuf
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

