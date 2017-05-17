# UniversityOfAdelaide\OpenShift\ImageOpenshiftIo_v1Api

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createImageOpenshiftIoV1Image**](ImageOpenshiftIo_v1Api.md#createImageOpenshiftIoV1Image) | **POST** /apis/image.openshift.io/v1/images | 
[**createImageOpenshiftIoV1ImageSignature**](ImageOpenshiftIo_v1Api.md#createImageOpenshiftIoV1ImageSignature) | **POST** /apis/image.openshift.io/v1/imagesignatures | 
[**createImageOpenshiftIoV1ImageStreamForAllNamespaces**](ImageOpenshiftIo_v1Api.md#createImageOpenshiftIoV1ImageStreamForAllNamespaces) | **POST** /apis/image.openshift.io/v1/imagestreams | 
[**createImageOpenshiftIoV1ImageStreamImportForAllNamespaces**](ImageOpenshiftIo_v1Api.md#createImageOpenshiftIoV1ImageStreamImportForAllNamespaces) | **POST** /apis/image.openshift.io/v1/imagestreamimports | 
[**createImageOpenshiftIoV1ImageStreamMappingForAllNamespaces**](ImageOpenshiftIo_v1Api.md#createImageOpenshiftIoV1ImageStreamMappingForAllNamespaces) | **POST** /apis/image.openshift.io/v1/imagestreammappings | 
[**createImageOpenshiftIoV1ImageStreamTagForAllNamespaces**](ImageOpenshiftIo_v1Api.md#createImageOpenshiftIoV1ImageStreamTagForAllNamespaces) | **POST** /apis/image.openshift.io/v1/imagestreamtags | 
[**createImageOpenshiftIoV1NamespacedImageStream**](ImageOpenshiftIo_v1Api.md#createImageOpenshiftIoV1NamespacedImageStream) | **POST** /apis/image.openshift.io/v1/namespaces/{namespace}/imagestreams | 
[**createImageOpenshiftIoV1NamespacedImageStreamImport**](ImageOpenshiftIo_v1Api.md#createImageOpenshiftIoV1NamespacedImageStreamImport) | **POST** /apis/image.openshift.io/v1/namespaces/{namespace}/imagestreamimports | 
[**createImageOpenshiftIoV1NamespacedImageStreamMapping**](ImageOpenshiftIo_v1Api.md#createImageOpenshiftIoV1NamespacedImageStreamMapping) | **POST** /apis/image.openshift.io/v1/namespaces/{namespace}/imagestreammappings | 
[**createImageOpenshiftIoV1NamespacedImageStreamTag**](ImageOpenshiftIo_v1Api.md#createImageOpenshiftIoV1NamespacedImageStreamTag) | **POST** /apis/image.openshift.io/v1/namespaces/{namespace}/imagestreamtags | 
[**deleteImageOpenshiftIoV1CollectionImage**](ImageOpenshiftIo_v1Api.md#deleteImageOpenshiftIoV1CollectionImage) | **DELETE** /apis/image.openshift.io/v1/images | 
[**deleteImageOpenshiftIoV1CollectionNamespacedImageStream**](ImageOpenshiftIo_v1Api.md#deleteImageOpenshiftIoV1CollectionNamespacedImageStream) | **DELETE** /apis/image.openshift.io/v1/namespaces/{namespace}/imagestreams | 
[**deleteImageOpenshiftIoV1Image**](ImageOpenshiftIo_v1Api.md#deleteImageOpenshiftIoV1Image) | **DELETE** /apis/image.openshift.io/v1/images/{name} | 
[**deleteImageOpenshiftIoV1ImageSignature**](ImageOpenshiftIo_v1Api.md#deleteImageOpenshiftIoV1ImageSignature) | **DELETE** /apis/image.openshift.io/v1/imagesignatures/{name} | 
[**deleteImageOpenshiftIoV1NamespacedImageStream**](ImageOpenshiftIo_v1Api.md#deleteImageOpenshiftIoV1NamespacedImageStream) | **DELETE** /apis/image.openshift.io/v1/namespaces/{namespace}/imagestreams/{name} | 
[**deleteImageOpenshiftIoV1NamespacedImageStreamTag**](ImageOpenshiftIo_v1Api.md#deleteImageOpenshiftIoV1NamespacedImageStreamTag) | **DELETE** /apis/image.openshift.io/v1/namespaces/{namespace}/imagestreamtags/{name} | 
[**getImageOpenshiftIoV1APIResources**](ImageOpenshiftIo_v1Api.md#getImageOpenshiftIoV1APIResources) | **GET** /apis/image.openshift.io/v1/ | 
[**listImageOpenshiftIoV1Image**](ImageOpenshiftIo_v1Api.md#listImageOpenshiftIoV1Image) | **GET** /apis/image.openshift.io/v1/images | 
[**listImageOpenshiftIoV1ImageStreamForAllNamespaces**](ImageOpenshiftIo_v1Api.md#listImageOpenshiftIoV1ImageStreamForAllNamespaces) | **GET** /apis/image.openshift.io/v1/imagestreams | 
[**listImageOpenshiftIoV1ImageStreamTagForAllNamespaces**](ImageOpenshiftIo_v1Api.md#listImageOpenshiftIoV1ImageStreamTagForAllNamespaces) | **GET** /apis/image.openshift.io/v1/imagestreamtags | 
[**listImageOpenshiftIoV1NamespacedImageStream**](ImageOpenshiftIo_v1Api.md#listImageOpenshiftIoV1NamespacedImageStream) | **GET** /apis/image.openshift.io/v1/namespaces/{namespace}/imagestreams | 
[**listImageOpenshiftIoV1NamespacedImageStreamTag**](ImageOpenshiftIo_v1Api.md#listImageOpenshiftIoV1NamespacedImageStreamTag) | **GET** /apis/image.openshift.io/v1/namespaces/{namespace}/imagestreamtags | 
[**patchImageOpenshiftIoV1Image**](ImageOpenshiftIo_v1Api.md#patchImageOpenshiftIoV1Image) | **PATCH** /apis/image.openshift.io/v1/images/{name} | 
[**patchImageOpenshiftIoV1NamespacedImageStream**](ImageOpenshiftIo_v1Api.md#patchImageOpenshiftIoV1NamespacedImageStream) | **PATCH** /apis/image.openshift.io/v1/namespaces/{namespace}/imagestreams/{name} | 
[**patchImageOpenshiftIoV1NamespacedImageStreamStatus**](ImageOpenshiftIo_v1Api.md#patchImageOpenshiftIoV1NamespacedImageStreamStatus) | **PATCH** /apis/image.openshift.io/v1/namespaces/{namespace}/imagestreams/{name}/status | 
[**patchImageOpenshiftIoV1NamespacedImageStreamTag**](ImageOpenshiftIo_v1Api.md#patchImageOpenshiftIoV1NamespacedImageStreamTag) | **PATCH** /apis/image.openshift.io/v1/namespaces/{namespace}/imagestreamtags/{name} | 
[**readImageOpenshiftIoV1Image**](ImageOpenshiftIo_v1Api.md#readImageOpenshiftIoV1Image) | **GET** /apis/image.openshift.io/v1/images/{name} | 
[**readImageOpenshiftIoV1NamespacedImageStream**](ImageOpenshiftIo_v1Api.md#readImageOpenshiftIoV1NamespacedImageStream) | **GET** /apis/image.openshift.io/v1/namespaces/{namespace}/imagestreams/{name} | 
[**readImageOpenshiftIoV1NamespacedImageStreamImage**](ImageOpenshiftIo_v1Api.md#readImageOpenshiftIoV1NamespacedImageStreamImage) | **GET** /apis/image.openshift.io/v1/namespaces/{namespace}/imagestreamimages/{name} | 
[**readImageOpenshiftIoV1NamespacedImageStreamStatus**](ImageOpenshiftIo_v1Api.md#readImageOpenshiftIoV1NamespacedImageStreamStatus) | **GET** /apis/image.openshift.io/v1/namespaces/{namespace}/imagestreams/{name}/status | 
[**readImageOpenshiftIoV1NamespacedImageStreamTag**](ImageOpenshiftIo_v1Api.md#readImageOpenshiftIoV1NamespacedImageStreamTag) | **GET** /apis/image.openshift.io/v1/namespaces/{namespace}/imagestreamtags/{name} | 
[**readImageOpenshiftIoV1NamespacedSecretListSecrets**](ImageOpenshiftIo_v1Api.md#readImageOpenshiftIoV1NamespacedSecretListSecrets) | **GET** /apis/image.openshift.io/v1/namespaces/{namespace}/imagestreams/{name}/secrets | 
[**replaceImageOpenshiftIoV1Image**](ImageOpenshiftIo_v1Api.md#replaceImageOpenshiftIoV1Image) | **PUT** /apis/image.openshift.io/v1/images/{name} | 
[**replaceImageOpenshiftIoV1NamespacedImageStream**](ImageOpenshiftIo_v1Api.md#replaceImageOpenshiftIoV1NamespacedImageStream) | **PUT** /apis/image.openshift.io/v1/namespaces/{namespace}/imagestreams/{name} | 
[**replaceImageOpenshiftIoV1NamespacedImageStreamStatus**](ImageOpenshiftIo_v1Api.md#replaceImageOpenshiftIoV1NamespacedImageStreamStatus) | **PUT** /apis/image.openshift.io/v1/namespaces/{namespace}/imagestreams/{name}/status | 
[**replaceImageOpenshiftIoV1NamespacedImageStreamTag**](ImageOpenshiftIo_v1Api.md#replaceImageOpenshiftIoV1NamespacedImageStreamTag) | **PUT** /apis/image.openshift.io/v1/namespaces/{namespace}/imagestreamtags/{name} | 
[**watchImageOpenshiftIoV1Image**](ImageOpenshiftIo_v1Api.md#watchImageOpenshiftIoV1Image) | **GET** /apis/image.openshift.io/v1/watch/images/{name} | 
[**watchImageOpenshiftIoV1ImageList**](ImageOpenshiftIo_v1Api.md#watchImageOpenshiftIoV1ImageList) | **GET** /apis/image.openshift.io/v1/watch/images | 
[**watchImageOpenshiftIoV1ImageStreamListForAllNamespaces**](ImageOpenshiftIo_v1Api.md#watchImageOpenshiftIoV1ImageStreamListForAllNamespaces) | **GET** /apis/image.openshift.io/v1/watch/imagestreams | 
[**watchImageOpenshiftIoV1NamespacedImageStream**](ImageOpenshiftIo_v1Api.md#watchImageOpenshiftIoV1NamespacedImageStream) | **GET** /apis/image.openshift.io/v1/watch/namespaces/{namespace}/imagestreams/{name} | 
[**watchImageOpenshiftIoV1NamespacedImageStreamList**](ImageOpenshiftIo_v1Api.md#watchImageOpenshiftIoV1NamespacedImageStreamList) | **GET** /apis/image.openshift.io/v1/watch/namespaces/{namespace}/imagestreams | 


# **createImageOpenshiftIoV1Image**
> \UniversityOfAdelaide\OpenShift\Model\V1Image createImageOpenshiftIoV1Image($body, $pretty)



create an Image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ImageOpenshiftIo_v1Api();
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Image(); // \UniversityOfAdelaide\OpenShift\Model\V1Image | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createImageOpenshiftIoV1Image($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageOpenshiftIo_v1Api->createImageOpenshiftIoV1Image: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Image**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Image.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Image**](../Model/V1Image.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createImageOpenshiftIoV1ImageSignature**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageSignature createImageOpenshiftIoV1ImageSignature($body, $pretty)



create an ImageSignature

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ImageOpenshiftIo_v1Api();
$body = new \UniversityOfAdelaide\OpenShift\Model\V1ImageSignature(); // \UniversityOfAdelaide\OpenShift\Model\V1ImageSignature | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createImageOpenshiftIoV1ImageSignature($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageOpenshiftIo_v1Api->createImageOpenshiftIoV1ImageSignature: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1ImageSignature**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1ImageSignature.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageSignature**](../Model/V1ImageSignature.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createImageOpenshiftIoV1ImageStreamForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageStream createImageOpenshiftIoV1ImageStreamForAllNamespaces($body, $pretty)



create an ImageStream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ImageOpenshiftIo_v1Api();
$body = new \UniversityOfAdelaide\OpenShift\Model\V1ImageStream(); // \UniversityOfAdelaide\OpenShift\Model\V1ImageStream | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createImageOpenshiftIoV1ImageStreamForAllNamespaces($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageOpenshiftIo_v1Api->createImageOpenshiftIoV1ImageStreamForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1ImageStream**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1ImageStream.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageStream**](../Model/V1ImageStream.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createImageOpenshiftIoV1ImageStreamImportForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamImport createImageOpenshiftIoV1ImageStreamImportForAllNamespaces($body, $pretty)



create an ImageStreamImport

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ImageOpenshiftIo_v1Api();
$body = new \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamImport(); // \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamImport | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createImageOpenshiftIoV1ImageStreamImportForAllNamespaces($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageOpenshiftIo_v1Api->createImageOpenshiftIoV1ImageStreamImportForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamImport**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamImport.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamImport**](../Model/V1ImageStreamImport.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createImageOpenshiftIoV1ImageStreamMappingForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamMapping createImageOpenshiftIoV1ImageStreamMappingForAllNamespaces($body, $pretty)



create an ImageStreamMapping

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ImageOpenshiftIo_v1Api();
$body = new \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamMapping(); // \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamMapping | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createImageOpenshiftIoV1ImageStreamMappingForAllNamespaces($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageOpenshiftIo_v1Api->createImageOpenshiftIoV1ImageStreamMappingForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamMapping**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamMapping.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamMapping**](../Model/V1ImageStreamMapping.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createImageOpenshiftIoV1ImageStreamTagForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTag createImageOpenshiftIoV1ImageStreamTagForAllNamespaces($body, $pretty)



create an ImageStreamTag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ImageOpenshiftIo_v1Api();
$body = new \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTag(); // \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTag | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createImageOpenshiftIoV1ImageStreamTagForAllNamespaces($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageOpenshiftIo_v1Api->createImageOpenshiftIoV1ImageStreamTagForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTag**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTag.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTag**](../Model/V1ImageStreamTag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createImageOpenshiftIoV1NamespacedImageStream**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageStream createImageOpenshiftIoV1NamespacedImageStream($namespace, $body, $pretty)



create an ImageStream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ImageOpenshiftIo_v1Api();
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1ImageStream(); // \UniversityOfAdelaide\OpenShift\Model\V1ImageStream | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createImageOpenshiftIoV1NamespacedImageStream($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageOpenshiftIo_v1Api->createImageOpenshiftIoV1NamespacedImageStream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1ImageStream**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1ImageStream.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageStream**](../Model/V1ImageStream.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createImageOpenshiftIoV1NamespacedImageStreamImport**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamImport createImageOpenshiftIoV1NamespacedImageStreamImport($namespace, $body, $pretty)



create an ImageStreamImport

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ImageOpenshiftIo_v1Api();
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamImport(); // \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamImport | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createImageOpenshiftIoV1NamespacedImageStreamImport($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageOpenshiftIo_v1Api->createImageOpenshiftIoV1NamespacedImageStreamImport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamImport**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamImport.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamImport**](../Model/V1ImageStreamImport.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createImageOpenshiftIoV1NamespacedImageStreamMapping**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamMapping createImageOpenshiftIoV1NamespacedImageStreamMapping($namespace, $body, $pretty)



create an ImageStreamMapping

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ImageOpenshiftIo_v1Api();
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamMapping(); // \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamMapping | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createImageOpenshiftIoV1NamespacedImageStreamMapping($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageOpenshiftIo_v1Api->createImageOpenshiftIoV1NamespacedImageStreamMapping: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamMapping**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamMapping.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamMapping**](../Model/V1ImageStreamMapping.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createImageOpenshiftIoV1NamespacedImageStreamTag**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTag createImageOpenshiftIoV1NamespacedImageStreamTag($namespace, $body, $pretty)



create an ImageStreamTag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ImageOpenshiftIo_v1Api();
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTag(); // \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTag | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createImageOpenshiftIoV1NamespacedImageStreamTag($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageOpenshiftIo_v1Api->createImageOpenshiftIoV1NamespacedImageStreamTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTag**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTag.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTag**](../Model/V1ImageStreamTag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteImageOpenshiftIoV1CollectionImage**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteImageOpenshiftIoV1CollectionImage($pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch)



delete collection of Image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ImageOpenshiftIo_v1Api();
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->deleteImageOpenshiftIoV1CollectionImage($pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageOpenshiftIo_v1Api->deleteImageOpenshiftIoV1CollectionImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **field_selector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **label_selector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resource_version** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeout_seconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteImageOpenshiftIoV1CollectionNamespacedImageStream**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteImageOpenshiftIoV1CollectionNamespacedImageStream($namespace, $pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch)



delete collection of ImageStream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ImageOpenshiftIo_v1Api();
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->deleteImageOpenshiftIoV1CollectionNamespacedImageStream($namespace, $pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageOpenshiftIo_v1Api->deleteImageOpenshiftIoV1CollectionNamespacedImageStream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **field_selector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **label_selector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resource_version** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeout_seconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteImageOpenshiftIoV1Image**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteImageOpenshiftIoV1Image($name, $body, $pretty, $grace_period_seconds, $orphan_dependents, $propagation_policy)



delete an Image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ImageOpenshiftIo_v1Api();
$name = "name_example"; // string | name of the Image
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions(); // \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$grace_period_seconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphan_dependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagation_policy = "propagation_policy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteImageOpenshiftIoV1Image($name, $body, $pretty, $grace_period_seconds, $orphan_dependents, $propagation_policy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageOpenshiftIo_v1Api->deleteImageOpenshiftIoV1Image: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Image |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **grace_period_seconds** | **int**| The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately. | [optional]
 **orphan_dependents** | **bool**| Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \&quot;orphan\&quot; finalizer will be added to/removed from the object&#39;s finalizers list. Either this field or PropagationPolicy may be set, but not both. | [optional]
 **propagation_policy** | **string**| Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteImageOpenshiftIoV1ImageSignature**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteImageOpenshiftIoV1ImageSignature($name, $pretty)



delete an ImageSignature

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ImageOpenshiftIo_v1Api();
$name = "name_example"; // string | name of the ImageSignature
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->deleteImageOpenshiftIoV1ImageSignature($name, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageOpenshiftIo_v1Api->deleteImageOpenshiftIoV1ImageSignature: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ImageSignature |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteImageOpenshiftIoV1NamespacedImageStream**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteImageOpenshiftIoV1NamespacedImageStream($name, $namespace, $body, $pretty, $grace_period_seconds, $orphan_dependents, $propagation_policy)



delete an ImageStream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ImageOpenshiftIo_v1Api();
$name = "name_example"; // string | name of the ImageStream
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions(); // \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$grace_period_seconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphan_dependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagation_policy = "propagation_policy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteImageOpenshiftIoV1NamespacedImageStream($name, $namespace, $body, $pretty, $grace_period_seconds, $orphan_dependents, $propagation_policy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageOpenshiftIo_v1Api->deleteImageOpenshiftIoV1NamespacedImageStream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ImageStream |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **grace_period_seconds** | **int**| The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately. | [optional]
 **orphan_dependents** | **bool**| Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \&quot;orphan\&quot; finalizer will be added to/removed from the object&#39;s finalizers list. Either this field or PropagationPolicy may be set, but not both. | [optional]
 **propagation_policy** | **string**| Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteImageOpenshiftIoV1NamespacedImageStreamTag**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteImageOpenshiftIoV1NamespacedImageStreamTag($name, $namespace, $pretty)



delete an ImageStreamTag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ImageOpenshiftIo_v1Api();
$name = "name_example"; // string | name of the ImageStreamTag
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->deleteImageOpenshiftIoV1NamespacedImageStreamTag($name, $namespace, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageOpenshiftIo_v1Api->deleteImageOpenshiftIoV1NamespacedImageStreamTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ImageStreamTag |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getImageOpenshiftIoV1APIResources**
> \UniversityOfAdelaide\OpenShift\Model\V1APIResourceList getImageOpenshiftIoV1APIResources()



get available resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ImageOpenshiftIo_v1Api();

try {
    $result = $api_instance->getImageOpenshiftIoV1APIResources();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageOpenshiftIo_v1Api->getImageOpenshiftIoV1APIResources: ', $e->getMessage(), PHP_EOL;
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

# **listImageOpenshiftIoV1Image**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageList listImageOpenshiftIoV1Image($pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch)



list or watch objects of kind Image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ImageOpenshiftIo_v1Api();
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listImageOpenshiftIoV1Image($pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageOpenshiftIo_v1Api->listImageOpenshiftIoV1Image: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **field_selector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **label_selector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resource_version** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeout_seconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageList**](../Model/V1ImageList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listImageOpenshiftIoV1ImageStreamForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamList listImageOpenshiftIoV1ImageStreamForAllNamespaces($pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch)



list or watch objects of kind ImageStream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ImageOpenshiftIo_v1Api();
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listImageOpenshiftIoV1ImageStreamForAllNamespaces($pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageOpenshiftIo_v1Api->listImageOpenshiftIoV1ImageStreamForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **field_selector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **label_selector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resource_version** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeout_seconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamList**](../Model/V1ImageStreamList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listImageOpenshiftIoV1ImageStreamTagForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTagList listImageOpenshiftIoV1ImageStreamTagForAllNamespaces($pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch)



list objects of kind ImageStreamTag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ImageOpenshiftIo_v1Api();
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listImageOpenshiftIoV1ImageStreamTagForAllNamespaces($pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageOpenshiftIo_v1Api->listImageOpenshiftIoV1ImageStreamTagForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **field_selector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **label_selector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resource_version** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeout_seconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTagList**](../Model/V1ImageStreamTagList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listImageOpenshiftIoV1NamespacedImageStream**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamList listImageOpenshiftIoV1NamespacedImageStream($namespace, $pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch)



list or watch objects of kind ImageStream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ImageOpenshiftIo_v1Api();
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listImageOpenshiftIoV1NamespacedImageStream($namespace, $pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageOpenshiftIo_v1Api->listImageOpenshiftIoV1NamespacedImageStream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **field_selector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **label_selector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resource_version** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeout_seconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamList**](../Model/V1ImageStreamList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listImageOpenshiftIoV1NamespacedImageStreamTag**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTagList listImageOpenshiftIoV1NamespacedImageStreamTag($namespace, $pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch)



list objects of kind ImageStreamTag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ImageOpenshiftIo_v1Api();
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listImageOpenshiftIoV1NamespacedImageStreamTag($namespace, $pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageOpenshiftIo_v1Api->listImageOpenshiftIoV1NamespacedImageStreamTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **field_selector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **label_selector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resource_version** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeout_seconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTagList**](../Model/V1ImageStreamTagList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchImageOpenshiftIoV1Image**
> \UniversityOfAdelaide\OpenShift\Model\V1Image patchImageOpenshiftIoV1Image($name, $body, $pretty)



partially update the specified Image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ImageOpenshiftIo_v1Api();
$name = "name_example"; // string | name of the Image
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchImageOpenshiftIoV1Image($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageOpenshiftIo_v1Api->patchImageOpenshiftIoV1Image: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Image |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Image**](../Model/V1Image.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchImageOpenshiftIoV1NamespacedImageStream**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageStream patchImageOpenshiftIoV1NamespacedImageStream($name, $namespace, $body, $pretty)



partially update the specified ImageStream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ImageOpenshiftIo_v1Api();
$name = "name_example"; // string | name of the ImageStream
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchImageOpenshiftIoV1NamespacedImageStream($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageOpenshiftIo_v1Api->patchImageOpenshiftIoV1NamespacedImageStream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ImageStream |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageStream**](../Model/V1ImageStream.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchImageOpenshiftIoV1NamespacedImageStreamStatus**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageStream patchImageOpenshiftIoV1NamespacedImageStreamStatus($name, $namespace, $body, $pretty)



partially update status of the specified ImageStream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ImageOpenshiftIo_v1Api();
$name = "name_example"; // string | name of the ImageStream
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchImageOpenshiftIoV1NamespacedImageStreamStatus($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageOpenshiftIo_v1Api->patchImageOpenshiftIoV1NamespacedImageStreamStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ImageStream |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageStream**](../Model/V1ImageStream.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchImageOpenshiftIoV1NamespacedImageStreamTag**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTag patchImageOpenshiftIoV1NamespacedImageStreamTag($name, $namespace, $body, $pretty)



partially update the specified ImageStreamTag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ImageOpenshiftIo_v1Api();
$name = "name_example"; // string | name of the ImageStreamTag
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchImageOpenshiftIoV1NamespacedImageStreamTag($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageOpenshiftIo_v1Api->patchImageOpenshiftIoV1NamespacedImageStreamTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ImageStreamTag |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTag**](../Model/V1ImageStreamTag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readImageOpenshiftIoV1Image**
> \UniversityOfAdelaide\OpenShift\Model\V1Image readImageOpenshiftIoV1Image($name, $pretty, $exact, $export)



read the specified Image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ImageOpenshiftIo_v1Api();
$name = "name_example"; // string | name of the Image
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$exact = true; // bool | Should the export be exact.  Exact export maintains cluster-specific fields like 'Namespace'.
$export = true; // bool | Should this value be exported.  Export strips fields that a user can not specify.

try {
    $result = $api_instance->readImageOpenshiftIoV1Image($name, $pretty, $exact, $export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageOpenshiftIo_v1Api->readImageOpenshiftIoV1Image: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Image |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **exact** | **bool**| Should the export be exact.  Exact export maintains cluster-specific fields like &#39;Namespace&#39;. | [optional]
 **export** | **bool**| Should this value be exported.  Export strips fields that a user can not specify. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Image**](../Model/V1Image.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readImageOpenshiftIoV1NamespacedImageStream**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageStream readImageOpenshiftIoV1NamespacedImageStream($name, $namespace, $pretty, $exact, $export)



read the specified ImageStream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ImageOpenshiftIo_v1Api();
$name = "name_example"; // string | name of the ImageStream
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$exact = true; // bool | Should the export be exact.  Exact export maintains cluster-specific fields like 'Namespace'.
$export = true; // bool | Should this value be exported.  Export strips fields that a user can not specify.

try {
    $result = $api_instance->readImageOpenshiftIoV1NamespacedImageStream($name, $namespace, $pretty, $exact, $export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageOpenshiftIo_v1Api->readImageOpenshiftIoV1NamespacedImageStream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ImageStream |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **exact** | **bool**| Should the export be exact.  Exact export maintains cluster-specific fields like &#39;Namespace&#39;. | [optional]
 **export** | **bool**| Should this value be exported.  Export strips fields that a user can not specify. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageStream**](../Model/V1ImageStream.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readImageOpenshiftIoV1NamespacedImageStreamImage**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamImage readImageOpenshiftIoV1NamespacedImageStreamImage($name, $namespace, $pretty)



read the specified ImageStreamImage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ImageOpenshiftIo_v1Api();
$name = "name_example"; // string | name of the ImageStreamImage
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->readImageOpenshiftIoV1NamespacedImageStreamImage($name, $namespace, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageOpenshiftIo_v1Api->readImageOpenshiftIoV1NamespacedImageStreamImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ImageStreamImage |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamImage**](../Model/V1ImageStreamImage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readImageOpenshiftIoV1NamespacedImageStreamStatus**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageStream readImageOpenshiftIoV1NamespacedImageStreamStatus($name, $namespace, $pretty)



read status of the specified ImageStream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ImageOpenshiftIo_v1Api();
$name = "name_example"; // string | name of the ImageStream
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->readImageOpenshiftIoV1NamespacedImageStreamStatus($name, $namespace, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageOpenshiftIo_v1Api->readImageOpenshiftIoV1NamespacedImageStreamStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ImageStream |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageStream**](../Model/V1ImageStream.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readImageOpenshiftIoV1NamespacedImageStreamTag**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTag readImageOpenshiftIoV1NamespacedImageStreamTag($name, $namespace, $pretty)



read the specified ImageStreamTag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ImageOpenshiftIo_v1Api();
$name = "name_example"; // string | name of the ImageStreamTag
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->readImageOpenshiftIoV1NamespacedImageStreamTag($name, $namespace, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageOpenshiftIo_v1Api->readImageOpenshiftIoV1NamespacedImageStreamTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ImageStreamTag |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTag**](../Model/V1ImageStreamTag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readImageOpenshiftIoV1NamespacedSecretListSecrets**
> \UniversityOfAdelaide\OpenShift\Model\V1SecretList readImageOpenshiftIoV1NamespacedSecretListSecrets($name, $namespace, $field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch)



read secrets of the specified SecretList

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ImageOpenshiftIo_v1Api();
$name = "name_example"; // string | name of the SecretList
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->readImageOpenshiftIoV1NamespacedSecretListSecrets($name, $namespace, $field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageOpenshiftIo_v1Api->readImageOpenshiftIoV1NamespacedSecretListSecrets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the SecretList |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **field_selector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **label_selector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resource_version** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeout_seconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1SecretList**](../Model/V1SecretList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceImageOpenshiftIoV1Image**
> \UniversityOfAdelaide\OpenShift\Model\V1Image replaceImageOpenshiftIoV1Image($name, $body, $pretty)



replace the specified Image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ImageOpenshiftIo_v1Api();
$name = "name_example"; // string | name of the Image
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Image(); // \UniversityOfAdelaide\OpenShift\Model\V1Image | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceImageOpenshiftIoV1Image($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageOpenshiftIo_v1Api->replaceImageOpenshiftIoV1Image: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Image |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Image**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Image.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Image**](../Model/V1Image.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceImageOpenshiftIoV1NamespacedImageStream**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageStream replaceImageOpenshiftIoV1NamespacedImageStream($name, $namespace, $body, $pretty)



replace the specified ImageStream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ImageOpenshiftIo_v1Api();
$name = "name_example"; // string | name of the ImageStream
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1ImageStream(); // \UniversityOfAdelaide\OpenShift\Model\V1ImageStream | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceImageOpenshiftIoV1NamespacedImageStream($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageOpenshiftIo_v1Api->replaceImageOpenshiftIoV1NamespacedImageStream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ImageStream |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1ImageStream**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1ImageStream.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageStream**](../Model/V1ImageStream.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceImageOpenshiftIoV1NamespacedImageStreamStatus**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageStream replaceImageOpenshiftIoV1NamespacedImageStreamStatus($name, $namespace, $body, $pretty)



replace status of the specified ImageStream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ImageOpenshiftIo_v1Api();
$name = "name_example"; // string | name of the ImageStream
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1ImageStream(); // \UniversityOfAdelaide\OpenShift\Model\V1ImageStream | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceImageOpenshiftIoV1NamespacedImageStreamStatus($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageOpenshiftIo_v1Api->replaceImageOpenshiftIoV1NamespacedImageStreamStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ImageStream |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1ImageStream**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1ImageStream.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageStream**](../Model/V1ImageStream.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceImageOpenshiftIoV1NamespacedImageStreamTag**
> \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTag replaceImageOpenshiftIoV1NamespacedImageStreamTag($name, $namespace, $body, $pretty)



replace the specified ImageStreamTag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ImageOpenshiftIo_v1Api();
$name = "name_example"; // string | name of the ImageStreamTag
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTag(); // \UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTag | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceImageOpenshiftIoV1NamespacedImageStreamTag($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageOpenshiftIo_v1Api->replaceImageOpenshiftIoV1NamespacedImageStreamTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ImageStreamTag |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTag**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTag.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1ImageStreamTag**](../Model/V1ImageStreamTag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchImageOpenshiftIoV1Image**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchImageOpenshiftIoV1Image($name, $field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch)



watch changes to an object of kind Image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ImageOpenshiftIo_v1Api();
$name = "name_example"; // string | name of the Image
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchImageOpenshiftIoV1Image($name, $field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageOpenshiftIo_v1Api->watchImageOpenshiftIoV1Image: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Image |
 **field_selector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **label_selector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resource_version** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeout_seconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchImageOpenshiftIoV1ImageList**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchImageOpenshiftIoV1ImageList($field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch)



watch individual changes to a list of Image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ImageOpenshiftIo_v1Api();
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchImageOpenshiftIoV1ImageList($field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageOpenshiftIo_v1Api->watchImageOpenshiftIoV1ImageList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **field_selector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **label_selector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resource_version** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeout_seconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchImageOpenshiftIoV1ImageStreamListForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchImageOpenshiftIoV1ImageStreamListForAllNamespaces($field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch)



watch individual changes to a list of ImageStream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ImageOpenshiftIo_v1Api();
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchImageOpenshiftIoV1ImageStreamListForAllNamespaces($field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageOpenshiftIo_v1Api->watchImageOpenshiftIoV1ImageStreamListForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **field_selector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **label_selector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resource_version** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeout_seconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchImageOpenshiftIoV1NamespacedImageStream**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchImageOpenshiftIoV1NamespacedImageStream($name, $namespace, $field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch)



watch changes to an object of kind ImageStream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ImageOpenshiftIo_v1Api();
$name = "name_example"; // string | name of the ImageStream
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchImageOpenshiftIoV1NamespacedImageStream($name, $namespace, $field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageOpenshiftIo_v1Api->watchImageOpenshiftIoV1NamespacedImageStream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the ImageStream |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **field_selector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **label_selector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resource_version** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeout_seconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchImageOpenshiftIoV1NamespacedImageStreamList**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchImageOpenshiftIoV1NamespacedImageStreamList($namespace, $field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch)



watch individual changes to a list of ImageStream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\ImageOpenshiftIo_v1Api();
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchImageOpenshiftIoV1NamespacedImageStreamList($namespace, $field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageOpenshiftIo_v1Api->watchImageOpenshiftIoV1NamespacedImageStreamList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **field_selector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **label_selector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resource_version** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeout_seconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

