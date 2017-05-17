# UniversityOfAdelaide\OpenShift\SecurityOpenshiftIoApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSecurityOpenshiftIoAPIGroup**](SecurityOpenshiftIoApi.md#getSecurityOpenshiftIoAPIGroup) | **GET** /apis/security.openshift.io/ | 


# **getSecurityOpenshiftIoAPIGroup**
> \UniversityOfAdelaide\OpenShift\Model\V1APIGroup getSecurityOpenshiftIoAPIGroup()



get information of a group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\SecurityOpenshiftIoApi();

try {
    $result = $api_instance->getSecurityOpenshiftIoAPIGroup();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityOpenshiftIoApi->getSecurityOpenshiftIoAPIGroup: ', $e->getMessage(), PHP_EOL;
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

