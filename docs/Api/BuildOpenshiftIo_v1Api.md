# UniversityOfAdelaide\OpenShift\BuildOpenshiftIo_v1Api

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**connectBuildOpenshiftIoV1PostNamespacedBinaryBuildRequestOptionsInstantiatebinary**](BuildOpenshiftIo_v1Api.md#connectBuildOpenshiftIoV1PostNamespacedBinaryBuildRequestOptionsInstantiatebinary) | **POST** /apis/build.openshift.io/v1/namespaces/{namespace}/buildconfigs/{name}/instantiatebinary | 
[**connectBuildOpenshiftIoV1PostNamespacedBuildWebhooks**](BuildOpenshiftIo_v1Api.md#connectBuildOpenshiftIoV1PostNamespacedBuildWebhooks) | **POST** /apis/build.openshift.io/v1/namespaces/{namespace}/buildconfigs/{name}/webhooks | 
[**connectBuildOpenshiftIoV1PostNamespacedBuildWebhooksWithPath**](BuildOpenshiftIo_v1Api.md#connectBuildOpenshiftIoV1PostNamespacedBuildWebhooksWithPath) | **POST** /apis/build.openshift.io/v1/namespaces/{namespace}/buildconfigs/{name}/webhooks/{path} | 
[**createBuildOpenshiftIoV1BuildConfigForAllNamespaces**](BuildOpenshiftIo_v1Api.md#createBuildOpenshiftIoV1BuildConfigForAllNamespaces) | **POST** /apis/build.openshift.io/v1/buildconfigs | 
[**createBuildOpenshiftIoV1BuildForAllNamespaces**](BuildOpenshiftIo_v1Api.md#createBuildOpenshiftIoV1BuildForAllNamespaces) | **POST** /apis/build.openshift.io/v1/builds | 
[**createBuildOpenshiftIoV1NamespacedBuild**](BuildOpenshiftIo_v1Api.md#createBuildOpenshiftIoV1NamespacedBuild) | **POST** /apis/build.openshift.io/v1/namespaces/{namespace}/builds | 
[**createBuildOpenshiftIoV1NamespacedBuildConfig**](BuildOpenshiftIo_v1Api.md#createBuildOpenshiftIoV1NamespacedBuildConfig) | **POST** /apis/build.openshift.io/v1/namespaces/{namespace}/buildconfigs | 
[**createBuildOpenshiftIoV1NamespacedBuildRequestClone**](BuildOpenshiftIo_v1Api.md#createBuildOpenshiftIoV1NamespacedBuildRequestClone) | **POST** /apis/build.openshift.io/v1/namespaces/{namespace}/builds/{name}/clone | 
[**createBuildOpenshiftIoV1NamespacedBuildRequestInstantiate**](BuildOpenshiftIo_v1Api.md#createBuildOpenshiftIoV1NamespacedBuildRequestInstantiate) | **POST** /apis/build.openshift.io/v1/namespaces/{namespace}/buildconfigs/{name}/instantiate | 
[**deleteBuildOpenshiftIoV1CollectionNamespacedBuild**](BuildOpenshiftIo_v1Api.md#deleteBuildOpenshiftIoV1CollectionNamespacedBuild) | **DELETE** /apis/build.openshift.io/v1/namespaces/{namespace}/builds | 
[**deleteBuildOpenshiftIoV1CollectionNamespacedBuildConfig**](BuildOpenshiftIo_v1Api.md#deleteBuildOpenshiftIoV1CollectionNamespacedBuildConfig) | **DELETE** /apis/build.openshift.io/v1/namespaces/{namespace}/buildconfigs | 
[**deleteBuildOpenshiftIoV1NamespacedBuild**](BuildOpenshiftIo_v1Api.md#deleteBuildOpenshiftIoV1NamespacedBuild) | **DELETE** /apis/build.openshift.io/v1/namespaces/{namespace}/builds/{name} | 
[**deleteBuildOpenshiftIoV1NamespacedBuildConfig**](BuildOpenshiftIo_v1Api.md#deleteBuildOpenshiftIoV1NamespacedBuildConfig) | **DELETE** /apis/build.openshift.io/v1/namespaces/{namespace}/buildconfigs/{name} | 
[**getBuildOpenshiftIoV1APIResources**](BuildOpenshiftIo_v1Api.md#getBuildOpenshiftIoV1APIResources) | **GET** /apis/build.openshift.io/v1/ | 
[**listBuildOpenshiftIoV1BuildConfigForAllNamespaces**](BuildOpenshiftIo_v1Api.md#listBuildOpenshiftIoV1BuildConfigForAllNamespaces) | **GET** /apis/build.openshift.io/v1/buildconfigs | 
[**listBuildOpenshiftIoV1BuildForAllNamespaces**](BuildOpenshiftIo_v1Api.md#listBuildOpenshiftIoV1BuildForAllNamespaces) | **GET** /apis/build.openshift.io/v1/builds | 
[**listBuildOpenshiftIoV1NamespacedBuild**](BuildOpenshiftIo_v1Api.md#listBuildOpenshiftIoV1NamespacedBuild) | **GET** /apis/build.openshift.io/v1/namespaces/{namespace}/builds | 
[**listBuildOpenshiftIoV1NamespacedBuildConfig**](BuildOpenshiftIo_v1Api.md#listBuildOpenshiftIoV1NamespacedBuildConfig) | **GET** /apis/build.openshift.io/v1/namespaces/{namespace}/buildconfigs | 
[**patchBuildOpenshiftIoV1NamespacedBuild**](BuildOpenshiftIo_v1Api.md#patchBuildOpenshiftIoV1NamespacedBuild) | **PATCH** /apis/build.openshift.io/v1/namespaces/{namespace}/builds/{name} | 
[**patchBuildOpenshiftIoV1NamespacedBuildConfig**](BuildOpenshiftIo_v1Api.md#patchBuildOpenshiftIoV1NamespacedBuildConfig) | **PATCH** /apis/build.openshift.io/v1/namespaces/{namespace}/buildconfigs/{name} | 
[**readBuildOpenshiftIoV1NamespacedBuild**](BuildOpenshiftIo_v1Api.md#readBuildOpenshiftIoV1NamespacedBuild) | **GET** /apis/build.openshift.io/v1/namespaces/{namespace}/builds/{name} | 
[**readBuildOpenshiftIoV1NamespacedBuildConfig**](BuildOpenshiftIo_v1Api.md#readBuildOpenshiftIoV1NamespacedBuildConfig) | **GET** /apis/build.openshift.io/v1/namespaces/{namespace}/buildconfigs/{name} | 
[**readBuildOpenshiftIoV1NamespacedBuildLogLog**](BuildOpenshiftIo_v1Api.md#readBuildOpenshiftIoV1NamespacedBuildLogLog) | **GET** /apis/build.openshift.io/v1/namespaces/{namespace}/builds/{name}/log | 
[**replaceBuildOpenshiftIoV1NamespacedBuild**](BuildOpenshiftIo_v1Api.md#replaceBuildOpenshiftIoV1NamespacedBuild) | **PUT** /apis/build.openshift.io/v1/namespaces/{namespace}/builds/{name} | 
[**replaceBuildOpenshiftIoV1NamespacedBuildConfig**](BuildOpenshiftIo_v1Api.md#replaceBuildOpenshiftIoV1NamespacedBuildConfig) | **PUT** /apis/build.openshift.io/v1/namespaces/{namespace}/buildconfigs/{name} | 
[**replaceBuildOpenshiftIoV1NamespacedBuildDetails**](BuildOpenshiftIo_v1Api.md#replaceBuildOpenshiftIoV1NamespacedBuildDetails) | **PUT** /apis/build.openshift.io/v1/namespaces/{namespace}/builds/{name}/details | 
[**watchBuildOpenshiftIoV1BuildConfigListForAllNamespaces**](BuildOpenshiftIo_v1Api.md#watchBuildOpenshiftIoV1BuildConfigListForAllNamespaces) | **GET** /apis/build.openshift.io/v1/watch/buildconfigs | 
[**watchBuildOpenshiftIoV1BuildListForAllNamespaces**](BuildOpenshiftIo_v1Api.md#watchBuildOpenshiftIoV1BuildListForAllNamespaces) | **GET** /apis/build.openshift.io/v1/watch/builds | 
[**watchBuildOpenshiftIoV1NamespacedBuild**](BuildOpenshiftIo_v1Api.md#watchBuildOpenshiftIoV1NamespacedBuild) | **GET** /apis/build.openshift.io/v1/watch/namespaces/{namespace}/builds/{name} | 
[**watchBuildOpenshiftIoV1NamespacedBuildConfig**](BuildOpenshiftIo_v1Api.md#watchBuildOpenshiftIoV1NamespacedBuildConfig) | **GET** /apis/build.openshift.io/v1/watch/namespaces/{namespace}/buildconfigs/{name} | 
[**watchBuildOpenshiftIoV1NamespacedBuildConfigList**](BuildOpenshiftIo_v1Api.md#watchBuildOpenshiftIoV1NamespacedBuildConfigList) | **GET** /apis/build.openshift.io/v1/watch/namespaces/{namespace}/buildconfigs | 
[**watchBuildOpenshiftIoV1NamespacedBuildList**](BuildOpenshiftIo_v1Api.md#watchBuildOpenshiftIoV1NamespacedBuildList) | **GET** /apis/build.openshift.io/v1/watch/namespaces/{namespace}/builds | 


# **connectBuildOpenshiftIoV1PostNamespacedBinaryBuildRequestOptionsInstantiatebinary**
> string connectBuildOpenshiftIoV1PostNamespacedBinaryBuildRequestOptionsInstantiatebinary($name, $namespace, $asFile, $revisionAuthorEmail, $revisionAuthorName, $revisionCommit, $revisionCommitterEmail, $revisionCommitterName, $revisionMessage)



connect POST requests to instantiatebinary of BinaryBuildRequestOptions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\BuildOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the BinaryBuildRequestOptions
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$asFile = "asFile_example"; // string | asFile determines if the binary should be created as a file within the source rather than extracted as an archive
$revisionAuthorEmail = "revisionAuthorEmail_example"; // string | revision.authorEmail of the source control user
$revisionAuthorName = "revisionAuthorName_example"; // string | revision.authorName of the source control user
$revisionCommit = "revisionCommit_example"; // string | revision.commit is the value identifying a specific commit
$revisionCommitterEmail = "revisionCommitterEmail_example"; // string | revision.committerEmail of the source control user
$revisionCommitterName = "revisionCommitterName_example"; // string | revision.committerName of the source control user
$revisionMessage = "revisionMessage_example"; // string | revision.message is the description of a specific commit

try {
    $result = $api_instance->connectBuildOpenshiftIoV1PostNamespacedBinaryBuildRequestOptionsInstantiatebinary($name, $namespace, $asFile, $revisionAuthorEmail, $revisionAuthorName, $revisionCommit, $revisionCommitterEmail, $revisionCommitterName, $revisionMessage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildOpenshiftIo_v1Api->connectBuildOpenshiftIoV1PostNamespacedBinaryBuildRequestOptionsInstantiatebinary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the BinaryBuildRequestOptions |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **asFile** | **string**| asFile determines if the binary should be created as a file within the source rather than extracted as an archive | [optional]
 **revisionAuthorEmail** | **string**| revision.authorEmail of the source control user | [optional]
 **revisionAuthorName** | **string**| revision.authorName of the source control user | [optional]
 **revisionCommit** | **string**| revision.commit is the value identifying a specific commit | [optional]
 **revisionCommitterEmail** | **string**| revision.committerEmail of the source control user | [optional]
 **revisionCommitterName** | **string**| revision.committerName of the source control user | [optional]
 **revisionMessage** | **string**| revision.message is the description of a specific commit | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **connectBuildOpenshiftIoV1PostNamespacedBuildWebhooks**
> string connectBuildOpenshiftIoV1PostNamespacedBuildWebhooks($name, $namespace, $path)



connect POST requests to webhooks of Build

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\BuildOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Build
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$path = "path_example"; // string | Path is the URL path to use for the current proxy request to pod.

try {
    $result = $api_instance->connectBuildOpenshiftIoV1PostNamespacedBuildWebhooks($name, $namespace, $path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildOpenshiftIo_v1Api->connectBuildOpenshiftIoV1PostNamespacedBuildWebhooks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Build |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **path** | **string**| Path is the URL path to use for the current proxy request to pod. | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **connectBuildOpenshiftIoV1PostNamespacedBuildWebhooksWithPath**
> string connectBuildOpenshiftIoV1PostNamespacedBuildWebhooksWithPath($name, $namespace, $path, $path2)



connect POST requests to webhooks of Build

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\BuildOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Build
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$path = "path_example"; // string | path to the resource
$path2 = "path_example"; // string | Path is the URL path to use for the current proxy request to pod.

try {
    $result = $api_instance->connectBuildOpenshiftIoV1PostNamespacedBuildWebhooksWithPath($name, $namespace, $path, $path2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildOpenshiftIo_v1Api->connectBuildOpenshiftIoV1PostNamespacedBuildWebhooksWithPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Build |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **path** | **string**| path to the resource |
 **path2** | **string**| Path is the URL path to use for the current proxy request to pod. | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createBuildOpenshiftIoV1BuildConfigForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1BuildConfig createBuildOpenshiftIoV1BuildConfigForAllNamespaces($body, $pretty)



create a BuildConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\BuildOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1BuildConfig(); // \UniversityOfAdelaide\OpenShift\Model\V1BuildConfig | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createBuildOpenshiftIoV1BuildConfigForAllNamespaces($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildOpenshiftIo_v1Api->createBuildOpenshiftIoV1BuildConfigForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1BuildConfig**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1BuildConfig.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1BuildConfig**](../Model/V1BuildConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createBuildOpenshiftIoV1BuildForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1Build createBuildOpenshiftIoV1BuildForAllNamespaces($body, $pretty)



create a Build

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\BuildOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Build(); // \UniversityOfAdelaide\OpenShift\Model\V1Build | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createBuildOpenshiftIoV1BuildForAllNamespaces($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildOpenshiftIo_v1Api->createBuildOpenshiftIoV1BuildForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Build**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Build.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Build**](../Model/V1Build.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createBuildOpenshiftIoV1NamespacedBuild**
> \UniversityOfAdelaide\OpenShift\Model\V1Build createBuildOpenshiftIoV1NamespacedBuild($namespace, $body, $pretty)



create a Build

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\BuildOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Build(); // \UniversityOfAdelaide\OpenShift\Model\V1Build | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createBuildOpenshiftIoV1NamespacedBuild($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildOpenshiftIo_v1Api->createBuildOpenshiftIoV1NamespacedBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Build**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Build.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Build**](../Model/V1Build.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createBuildOpenshiftIoV1NamespacedBuildConfig**
> \UniversityOfAdelaide\OpenShift\Model\V1BuildConfig createBuildOpenshiftIoV1NamespacedBuildConfig($namespace, $body, $pretty)



create a BuildConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\BuildOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1BuildConfig(); // \UniversityOfAdelaide\OpenShift\Model\V1BuildConfig | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createBuildOpenshiftIoV1NamespacedBuildConfig($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildOpenshiftIo_v1Api->createBuildOpenshiftIoV1NamespacedBuildConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1BuildConfig**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1BuildConfig.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1BuildConfig**](../Model/V1BuildConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createBuildOpenshiftIoV1NamespacedBuildRequestClone**
> \UniversityOfAdelaide\OpenShift\Model\V1BuildRequest createBuildOpenshiftIoV1NamespacedBuildRequestClone($name, $namespace, $body, $pretty)



create clone of a BuildRequest

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\BuildOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the BuildRequest
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1BuildRequest(); // \UniversityOfAdelaide\OpenShift\Model\V1BuildRequest | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createBuildOpenshiftIoV1NamespacedBuildRequestClone($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildOpenshiftIo_v1Api->createBuildOpenshiftIoV1NamespacedBuildRequestClone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the BuildRequest |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1BuildRequest**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1BuildRequest.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1BuildRequest**](../Model/V1BuildRequest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createBuildOpenshiftIoV1NamespacedBuildRequestInstantiate**
> \UniversityOfAdelaide\OpenShift\Model\V1BuildRequest createBuildOpenshiftIoV1NamespacedBuildRequestInstantiate($name, $namespace, $body, $pretty)



create instantiate of a BuildRequest

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\BuildOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the BuildRequest
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1BuildRequest(); // \UniversityOfAdelaide\OpenShift\Model\V1BuildRequest | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createBuildOpenshiftIoV1NamespacedBuildRequestInstantiate($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildOpenshiftIo_v1Api->createBuildOpenshiftIoV1NamespacedBuildRequestInstantiate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the BuildRequest |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1BuildRequest**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1BuildRequest.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1BuildRequest**](../Model/V1BuildRequest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBuildOpenshiftIoV1CollectionNamespacedBuild**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteBuildOpenshiftIoV1CollectionNamespacedBuild($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



delete collection of Build

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\BuildOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->deleteBuildOpenshiftIoV1CollectionNamespacedBuild($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildOpenshiftIo_v1Api->deleteBuildOpenshiftIoV1CollectionNamespacedBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBuildOpenshiftIoV1CollectionNamespacedBuildConfig**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteBuildOpenshiftIoV1CollectionNamespacedBuildConfig($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



delete collection of BuildConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\BuildOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->deleteBuildOpenshiftIoV1CollectionNamespacedBuildConfig($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildOpenshiftIo_v1Api->deleteBuildOpenshiftIoV1CollectionNamespacedBuildConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBuildOpenshiftIoV1NamespacedBuild**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteBuildOpenshiftIoV1NamespacedBuild($name, $namespace, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy)



delete a Build

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\BuildOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Build
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions(); // \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$gracePeriodSeconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphanDependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagationPolicy = "propagationPolicy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteBuildOpenshiftIoV1NamespacedBuild($name, $namespace, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildOpenshiftIo_v1Api->deleteBuildOpenshiftIoV1NamespacedBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Build |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **gracePeriodSeconds** | **int**| The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately. | [optional]
 **orphanDependents** | **bool**| Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \&quot;orphan\&quot; finalizer will be added to/removed from the object&#39;s finalizers list. Either this field or PropagationPolicy may be set, but not both. | [optional]
 **propagationPolicy** | **string**| Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBuildOpenshiftIoV1NamespacedBuildConfig**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteBuildOpenshiftIoV1NamespacedBuildConfig($name, $namespace, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy)



delete a BuildConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\BuildOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the BuildConfig
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions(); // \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$gracePeriodSeconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphanDependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagationPolicy = "propagationPolicy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteBuildOpenshiftIoV1NamespacedBuildConfig($name, $namespace, $body, $pretty, $gracePeriodSeconds, $orphanDependents, $propagationPolicy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildOpenshiftIo_v1Api->deleteBuildOpenshiftIoV1NamespacedBuildConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the BuildConfig |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **gracePeriodSeconds** | **int**| The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately. | [optional]
 **orphanDependents** | **bool**| Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \&quot;orphan\&quot; finalizer will be added to/removed from the object&#39;s finalizers list. Either this field or PropagationPolicy may be set, but not both. | [optional]
 **propagationPolicy** | **string**| Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Status**](../Model/V1Status.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuildOpenshiftIoV1APIResources**
> \UniversityOfAdelaide\OpenShift\Model\V1APIResourceList getBuildOpenshiftIoV1APIResources()



get available resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\BuildOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->getBuildOpenshiftIoV1APIResources();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildOpenshiftIo_v1Api->getBuildOpenshiftIoV1APIResources: ', $e->getMessage(), PHP_EOL;
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

# **listBuildOpenshiftIoV1BuildConfigForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1BuildConfigList listBuildOpenshiftIoV1BuildConfigForAllNamespaces($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind BuildConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\BuildOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listBuildOpenshiftIoV1BuildConfigForAllNamespaces($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildOpenshiftIo_v1Api->listBuildOpenshiftIoV1BuildConfigForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1BuildConfigList**](../Model/V1BuildConfigList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listBuildOpenshiftIoV1BuildForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1BuildList listBuildOpenshiftIoV1BuildForAllNamespaces($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind Build

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\BuildOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listBuildOpenshiftIoV1BuildForAllNamespaces($pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildOpenshiftIo_v1Api->listBuildOpenshiftIoV1BuildForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1BuildList**](../Model/V1BuildList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listBuildOpenshiftIoV1NamespacedBuild**
> \UniversityOfAdelaide\OpenShift\Model\V1BuildList listBuildOpenshiftIoV1NamespacedBuild($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind Build

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\BuildOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listBuildOpenshiftIoV1NamespacedBuild($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildOpenshiftIo_v1Api->listBuildOpenshiftIoV1NamespacedBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1BuildList**](../Model/V1BuildList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listBuildOpenshiftIoV1NamespacedBuildConfig**
> \UniversityOfAdelaide\OpenShift\Model\V1BuildConfigList listBuildOpenshiftIoV1NamespacedBuildConfig($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch)



list or watch objects of kind BuildConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\BuildOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listBuildOpenshiftIoV1NamespacedBuildConfig($namespace, $pretty, $fieldSelector, $labelSelector, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildOpenshiftIo_v1Api->listBuildOpenshiftIoV1NamespacedBuildConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1BuildConfigList**](../Model/V1BuildConfigList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchBuildOpenshiftIoV1NamespacedBuild**
> \UniversityOfAdelaide\OpenShift\Model\V1Build patchBuildOpenshiftIoV1NamespacedBuild($name, $namespace, $body, $pretty)



partially update the specified Build

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\BuildOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Build
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchBuildOpenshiftIoV1NamespacedBuild($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildOpenshiftIo_v1Api->patchBuildOpenshiftIoV1NamespacedBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Build |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Build**](../Model/V1Build.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchBuildOpenshiftIoV1NamespacedBuildConfig**
> \UniversityOfAdelaide\OpenShift\Model\V1BuildConfig patchBuildOpenshiftIoV1NamespacedBuildConfig($name, $namespace, $body, $pretty)



partially update the specified BuildConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\BuildOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the BuildConfig
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchBuildOpenshiftIoV1NamespacedBuildConfig($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildOpenshiftIo_v1Api->patchBuildOpenshiftIoV1NamespacedBuildConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the BuildConfig |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1BuildConfig**](../Model/V1BuildConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readBuildOpenshiftIoV1NamespacedBuild**
> \UniversityOfAdelaide\OpenShift\Model\V1Build readBuildOpenshiftIoV1NamespacedBuild($name, $namespace, $pretty, $exact, $export)



read the specified Build

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\BuildOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Build
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$exact = true; // bool | Should the export be exact.  Exact export maintains cluster-specific fields like 'Namespace'.
$export = true; // bool | Should this value be exported.  Export strips fields that a user can not specify.

try {
    $result = $api_instance->readBuildOpenshiftIoV1NamespacedBuild($name, $namespace, $pretty, $exact, $export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildOpenshiftIo_v1Api->readBuildOpenshiftIoV1NamespacedBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Build |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **exact** | **bool**| Should the export be exact.  Exact export maintains cluster-specific fields like &#39;Namespace&#39;. | [optional]
 **export** | **bool**| Should this value be exported.  Export strips fields that a user can not specify. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Build**](../Model/V1Build.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readBuildOpenshiftIoV1NamespacedBuildConfig**
> \UniversityOfAdelaide\OpenShift\Model\V1BuildConfig readBuildOpenshiftIoV1NamespacedBuildConfig($name, $namespace, $pretty, $exact, $export)



read the specified BuildConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\BuildOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the BuildConfig
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$exact = true; // bool | Should the export be exact.  Exact export maintains cluster-specific fields like 'Namespace'.
$export = true; // bool | Should this value be exported.  Export strips fields that a user can not specify.

try {
    $result = $api_instance->readBuildOpenshiftIoV1NamespacedBuildConfig($name, $namespace, $pretty, $exact, $export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildOpenshiftIo_v1Api->readBuildOpenshiftIoV1NamespacedBuildConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the BuildConfig |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **exact** | **bool**| Should the export be exact.  Exact export maintains cluster-specific fields like &#39;Namespace&#39;. | [optional]
 **export** | **bool**| Should this value be exported.  Export strips fields that a user can not specify. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1BuildConfig**](../Model/V1BuildConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readBuildOpenshiftIoV1NamespacedBuildLogLog**
> \UniversityOfAdelaide\OpenShift\Model\V1BuildLog readBuildOpenshiftIoV1NamespacedBuildLogLog($name, $namespace, $container, $follow, $limitBytes, $nowait, $pretty, $previous, $sinceSeconds, $tailLines, $timestamps, $version)



read log of the specified BuildLog

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\BuildOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the BuildLog
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$container = "container_example"; // string | cointainer for which to stream logs. Defaults to only container if there is one container in the pod.
$follow = true; // bool | follow if true indicates that the build log should be streamed until the build terminates.
$limitBytes = 56; // int | limitBytes, If set, is the number of bytes to read from the server before terminating the log output. This may not display a complete final line of logging, and may return slightly more or slightly less than the specified limit.
$nowait = true; // bool | noWait if true causes the call to return immediately even if the build is not available yet. Otherwise the server will wait until the build has started.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$previous = true; // bool | previous returns previous build logs. Defaults to false.
$sinceSeconds = 56; // int | sinceSeconds is a relative time in seconds before the current time from which to show logs. If this value precedes the time a pod was started, only logs since the pod start will be returned. If this value is in the future, no logs will be returned. Only one of sinceSeconds or sinceTime may be specified.
$tailLines = 56; // int | tailLines, If set, is the number of lines from the end of the logs to show. If not specified, logs are shown from the creation of the container or sinceSeconds or sinceTime
$timestamps = true; // bool | timestamps, If true, add an RFC3339 or RFC3339Nano timestamp at the beginning of every line of log output. Defaults to false.
$version = 56; // int | version of the build for which to view logs.

try {
    $result = $api_instance->readBuildOpenshiftIoV1NamespacedBuildLogLog($name, $namespace, $container, $follow, $limitBytes, $nowait, $pretty, $previous, $sinceSeconds, $tailLines, $timestamps, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildOpenshiftIo_v1Api->readBuildOpenshiftIoV1NamespacedBuildLogLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the BuildLog |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **container** | **string**| cointainer for which to stream logs. Defaults to only container if there is one container in the pod. | [optional]
 **follow** | **bool**| follow if true indicates that the build log should be streamed until the build terminates. | [optional]
 **limitBytes** | **int**| limitBytes, If set, is the number of bytes to read from the server before terminating the log output. This may not display a complete final line of logging, and may return slightly more or slightly less than the specified limit. | [optional]
 **nowait** | **bool**| noWait if true causes the call to return immediately even if the build is not available yet. Otherwise the server will wait until the build has started. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **previous** | **bool**| previous returns previous build logs. Defaults to false. | [optional]
 **sinceSeconds** | **int**| sinceSeconds is a relative time in seconds before the current time from which to show logs. If this value precedes the time a pod was started, only logs since the pod start will be returned. If this value is in the future, no logs will be returned. Only one of sinceSeconds or sinceTime may be specified. | [optional]
 **tailLines** | **int**| tailLines, If set, is the number of lines from the end of the logs to show. If not specified, logs are shown from the creation of the container or sinceSeconds or sinceTime | [optional]
 **timestamps** | **bool**| timestamps, If true, add an RFC3339 or RFC3339Nano timestamp at the beginning of every line of log output. Defaults to false. | [optional]
 **version** | **int**| version of the build for which to view logs. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1BuildLog**](../Model/V1BuildLog.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceBuildOpenshiftIoV1NamespacedBuild**
> \UniversityOfAdelaide\OpenShift\Model\V1Build replaceBuildOpenshiftIoV1NamespacedBuild($name, $namespace, $body, $pretty)



replace the specified Build

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\BuildOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Build
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Build(); // \UniversityOfAdelaide\OpenShift\Model\V1Build | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceBuildOpenshiftIoV1NamespacedBuild($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildOpenshiftIo_v1Api->replaceBuildOpenshiftIoV1NamespacedBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Build |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Build**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Build.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Build**](../Model/V1Build.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceBuildOpenshiftIoV1NamespacedBuildConfig**
> \UniversityOfAdelaide\OpenShift\Model\V1BuildConfig replaceBuildOpenshiftIoV1NamespacedBuildConfig($name, $namespace, $body, $pretty)



replace the specified BuildConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\BuildOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the BuildConfig
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1BuildConfig(); // \UniversityOfAdelaide\OpenShift\Model\V1BuildConfig | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceBuildOpenshiftIoV1NamespacedBuildConfig($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildOpenshiftIo_v1Api->replaceBuildOpenshiftIoV1NamespacedBuildConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the BuildConfig |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1BuildConfig**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1BuildConfig.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1BuildConfig**](../Model/V1BuildConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceBuildOpenshiftIoV1NamespacedBuildDetails**
> \UniversityOfAdelaide\OpenShift\Model\V1Build replaceBuildOpenshiftIoV1NamespacedBuildDetails($name, $namespace, $body, $pretty)



replace details of the specified Build

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\BuildOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Build
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Build(); // \UniversityOfAdelaide\OpenShift\Model\V1Build | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceBuildOpenshiftIoV1NamespacedBuildDetails($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildOpenshiftIo_v1Api->replaceBuildOpenshiftIoV1NamespacedBuildDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Build |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Build**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Build.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1Build**](../Model/V1Build.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchBuildOpenshiftIoV1BuildConfigListForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchBuildOpenshiftIoV1BuildConfigListForAllNamespaces($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of BuildConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\BuildOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchBuildOpenshiftIoV1BuildConfigListForAllNamespaces($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildOpenshiftIo_v1Api->watchBuildOpenshiftIoV1BuildConfigListForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchBuildOpenshiftIoV1BuildListForAllNamespaces**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchBuildOpenshiftIoV1BuildListForAllNamespaces($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of Build

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\BuildOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchBuildOpenshiftIoV1BuildListForAllNamespaces($fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildOpenshiftIo_v1Api->watchBuildOpenshiftIoV1BuildListForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchBuildOpenshiftIoV1NamespacedBuild**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchBuildOpenshiftIoV1NamespacedBuild($name, $namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch changes to an object of kind Build

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\BuildOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the Build
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchBuildOpenshiftIoV1NamespacedBuild($name, $namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildOpenshiftIo_v1Api->watchBuildOpenshiftIoV1NamespacedBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the Build |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchBuildOpenshiftIoV1NamespacedBuildConfig**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchBuildOpenshiftIoV1NamespacedBuildConfig($name, $namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch changes to an object of kind BuildConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\BuildOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the BuildConfig
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchBuildOpenshiftIoV1NamespacedBuildConfig($name, $namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildOpenshiftIo_v1Api->watchBuildOpenshiftIoV1NamespacedBuildConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the BuildConfig |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchBuildOpenshiftIoV1NamespacedBuildConfigList**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchBuildOpenshiftIoV1NamespacedBuildConfigList($namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of BuildConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\BuildOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchBuildOpenshiftIoV1NamespacedBuildConfigList($namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildOpenshiftIo_v1Api->watchBuildOpenshiftIoV1NamespacedBuildConfigList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchBuildOpenshiftIoV1NamespacedBuildList**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchBuildOpenshiftIoV1NamespacedBuildList($namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch)



watch individual changes to a list of Build

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\BuildOpenshiftIo_v1Api(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$fieldSelector = "fieldSelector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$labelSelector = "labelSelector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resourceVersion = "resourceVersion_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeoutSeconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchBuildOpenshiftIoV1NamespacedBuildList($namespace, $fieldSelector, $labelSelector, $pretty, $resourceVersion, $timeoutSeconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildOpenshiftIo_v1Api->watchBuildOpenshiftIoV1NamespacedBuildList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **fieldSelector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **labelSelector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resourceVersion** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeoutSeconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1WatchEvent**](../Model/V1WatchEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

