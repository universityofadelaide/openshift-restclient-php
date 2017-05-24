# UniversityOfAdelaide\OpenShift\CoreApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCoreAPIVersions**](CoreApi.md#getCoreAPIVersions) | **GET** /api/ | 


# **getCoreAPIVersions**
> \UniversityOfAdelaide\OpenShift\Model\V1APIVersions getCoreAPIVersions()



get available API versions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: openshift_auth
UniversityOfAdelaide\OpenShift\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\CoreApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->getCoreAPIVersions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->getCoreAPIVersions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1APIVersions**](../Model/V1APIVersions.md)

### Authorization

[openshift_auth](../../README.md#openshift_auth)

### HTTP request headers

 - **Content-Type**: application/json, application/yaml, application/vnd.kubernetes.protobuf
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

