# UniversityOfAdelaide\OpenShift\ApisApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAPIVersions**](ApisApi.md#getAPIVersions) | **GET** /apis/ | 


# **getAPIVersions**
> \UniversityOfAdelaide\OpenShift\Model\V1APIGroupList getAPIVersions()



get available API versions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ApisApi();

try {
    $result = $api_instance->getAPIVersions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApisApi->getAPIVersions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1APIGroupList**](../Model/V1APIGroupList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/yaml, application/vnd.kubernetes.protobuf
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

