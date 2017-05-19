# UniversityOfAdelaide\OpenShift\PolicyApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPolicyAPIGroup**](PolicyApi.md#getPolicyAPIGroup) | **GET** /apis/policy/ | 


# **getPolicyAPIGroup**
> \UniversityOfAdelaide\OpenShift\Model\V1APIGroup getPolicyAPIGroup()



get information of a group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\PolicyApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->getPolicyAPIGroup();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PolicyApi->getPolicyAPIGroup: ', $e->getMessage(), PHP_EOL;
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

