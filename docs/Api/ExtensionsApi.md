# UniversityOfAdelaide\OpenShift\ExtensionsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getExtensionsAPIGroup**](ExtensionsApi.md#getExtensionsAPIGroup) | **GET** /apis/extensions/ | 


# **getExtensionsAPIGroup**
> \UniversityOfAdelaide\OpenShift\Model\V1APIGroup getExtensionsAPIGroup()



get information of a group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: openshift_auth
UniversityOfAdelaide\OpenShift\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ExtensionsApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->getExtensionsAPIGroup();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtensionsApi->getExtensionsAPIGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1APIGroup**](../Model/V1APIGroup.md)

### Authorization

[openshift_auth](../../README.md#openshift_auth)

### HTTP request headers

 - **Content-Type**: application/json, application/yaml, application/vnd.kubernetes.protobuf
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

