# UniversityOfAdelaide\OpenShift\VersionApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCodeVersion**](VersionApi.md#getCodeVersion) | **GET** /version/ | 


# **getCodeVersion**
> \UniversityOfAdelaide\OpenShift\Model\VersionInfo getCodeVersion()



get the code version

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\VersionApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->getCodeVersion();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VersionApi->getCodeVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\VersionInfo**](../Model/VersionInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

