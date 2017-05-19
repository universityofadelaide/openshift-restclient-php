# UniversityOfAdelaide\OpenShift\ProjectOpenshiftIoApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getProjectOpenshiftIoAPIGroup**](ProjectOpenshiftIoApi.md#getProjectOpenshiftIoAPIGroup) | **GET** /apis/project.openshift.io/ | 


# **getProjectOpenshiftIoAPIGroup**
> \UniversityOfAdelaide\OpenShift\Model\V1APIGroup getProjectOpenshiftIoAPIGroup()



get information of a group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ProjectOpenshiftIoApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->getProjectOpenshiftIoAPIGroup();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectOpenshiftIoApi->getProjectOpenshiftIoAPIGroup: ', $e->getMessage(), PHP_EOL;
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

