# UniversityOfAdelaide\OpenShift\OsapiApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOsapiVersion**](OsapiApi.md#getOsapiVersion) | **GET** /osapi/ | 


# **getOsapiVersion**
> getOsapiVersion()



list supported server API versions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: openshift_auth
UniversityOfAdelaide\OpenShift\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\OsapiApi(new \Http\Adapter\Guzzle6\Client());

try {
    $api_instance->getOsapiVersion();
} catch (Exception $e) {
    echo 'Exception when calling OsapiApi->getOsapiVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[openshift_auth](../../README.md#openshift_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

