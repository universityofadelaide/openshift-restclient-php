# UniversityOfAdelaide\OpenShift\Certificates_v1beta1Api

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCertificatesV1beta1CertificateSigningRequest**](Certificates_v1beta1Api.md#createCertificatesV1beta1CertificateSigningRequest) | **POST** /apis/certificates.k8s.io/v1beta1/certificatesigningrequests | 
[**deleteCertificatesV1beta1CertificateSigningRequest**](Certificates_v1beta1Api.md#deleteCertificatesV1beta1CertificateSigningRequest) | **DELETE** /apis/certificates.k8s.io/v1beta1/certificatesigningrequests/{name} | 
[**deleteCertificatesV1beta1CollectionCertificateSigningRequest**](Certificates_v1beta1Api.md#deleteCertificatesV1beta1CollectionCertificateSigningRequest) | **DELETE** /apis/certificates.k8s.io/v1beta1/certificatesigningrequests | 
[**getCertificatesV1beta1APIResources**](Certificates_v1beta1Api.md#getCertificatesV1beta1APIResources) | **GET** /apis/certificates.k8s.io/v1beta1/ | 
[**listCertificatesV1beta1CertificateSigningRequest**](Certificates_v1beta1Api.md#listCertificatesV1beta1CertificateSigningRequest) | **GET** /apis/certificates.k8s.io/v1beta1/certificatesigningrequests | 
[**patchCertificatesV1beta1CertificateSigningRequest**](Certificates_v1beta1Api.md#patchCertificatesV1beta1CertificateSigningRequest) | **PATCH** /apis/certificates.k8s.io/v1beta1/certificatesigningrequests/{name} | 
[**readCertificatesV1beta1CertificateSigningRequest**](Certificates_v1beta1Api.md#readCertificatesV1beta1CertificateSigningRequest) | **GET** /apis/certificates.k8s.io/v1beta1/certificatesigningrequests/{name} | 
[**replaceCertificatesV1beta1CertificateSigningRequest**](Certificates_v1beta1Api.md#replaceCertificatesV1beta1CertificateSigningRequest) | **PUT** /apis/certificates.k8s.io/v1beta1/certificatesigningrequests/{name} | 
[**replaceCertificatesV1beta1CertificateSigningRequestApproval**](Certificates_v1beta1Api.md#replaceCertificatesV1beta1CertificateSigningRequestApproval) | **PUT** /apis/certificates.k8s.io/v1beta1/certificatesigningrequests/{name}/approval | 
[**replaceCertificatesV1beta1CertificateSigningRequestStatus**](Certificates_v1beta1Api.md#replaceCertificatesV1beta1CertificateSigningRequestStatus) | **PUT** /apis/certificates.k8s.io/v1beta1/certificatesigningrequests/{name}/status | 
[**watchCertificatesV1beta1CertificateSigningRequest**](Certificates_v1beta1Api.md#watchCertificatesV1beta1CertificateSigningRequest) | **GET** /apis/certificates.k8s.io/v1beta1/watch/certificatesigningrequests/{name} | 
[**watchCertificatesV1beta1CertificateSigningRequestList**](Certificates_v1beta1Api.md#watchCertificatesV1beta1CertificateSigningRequestList) | **GET** /apis/certificates.k8s.io/v1beta1/watch/certificatesigningrequests | 


# **createCertificatesV1beta1CertificateSigningRequest**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1CertificateSigningRequest createCertificatesV1beta1CertificateSigningRequest($body, $pretty)



create a CertificateSigningRequest

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Certificates_v1beta1Api();
$body = new \UniversityOfAdelaide\OpenShift\Model\V1beta1CertificateSigningRequest(); // \UniversityOfAdelaide\OpenShift\Model\V1beta1CertificateSigningRequest | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createCertificatesV1beta1CertificateSigningRequest($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Certificates_v1beta1Api->createCertificatesV1beta1CertificateSigningRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1beta1CertificateSigningRequest**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1beta1CertificateSigningRequest.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1CertificateSigningRequest**](../Model/V1beta1CertificateSigningRequest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCertificatesV1beta1CertificateSigningRequest**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteCertificatesV1beta1CertificateSigningRequest($name, $body, $pretty, $grace_period_seconds, $orphan_dependents, $propagation_policy)



delete a CertificateSigningRequest

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Certificates_v1beta1Api();
$name = "name_example"; // string | name of the CertificateSigningRequest
$body = new \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions(); // \UniversityOfAdelaide\OpenShift\Model\V1DeleteOptions | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$grace_period_seconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphan_dependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagation_policy = "propagation_policy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteCertificatesV1beta1CertificateSigningRequest($name, $body, $pretty, $grace_period_seconds, $orphan_dependents, $propagation_policy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Certificates_v1beta1Api->deleteCertificatesV1beta1CertificateSigningRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the CertificateSigningRequest |
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

# **deleteCertificatesV1beta1CollectionCertificateSigningRequest**
> \UniversityOfAdelaide\OpenShift\Model\V1Status deleteCertificatesV1beta1CollectionCertificateSigningRequest($pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch)



delete collection of CertificateSigningRequest

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Certificates_v1beta1Api();
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->deleteCertificatesV1beta1CollectionCertificateSigningRequest($pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Certificates_v1beta1Api->deleteCertificatesV1beta1CollectionCertificateSigningRequest: ', $e->getMessage(), PHP_EOL;
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

# **getCertificatesV1beta1APIResources**
> \UniversityOfAdelaide\OpenShift\Model\V1APIResourceList getCertificatesV1beta1APIResources()



get available resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Certificates_v1beta1Api();

try {
    $result = $api_instance->getCertificatesV1beta1APIResources();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Certificates_v1beta1Api->getCertificatesV1beta1APIResources: ', $e->getMessage(), PHP_EOL;
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

# **listCertificatesV1beta1CertificateSigningRequest**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1CertificateSigningRequestList listCertificatesV1beta1CertificateSigningRequest($pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch)



list or watch objects of kind CertificateSigningRequest

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Certificates_v1beta1Api();
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listCertificatesV1beta1CertificateSigningRequest($pretty, $field_selector, $label_selector, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Certificates_v1beta1Api->listCertificatesV1beta1CertificateSigningRequest: ', $e->getMessage(), PHP_EOL;
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

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1CertificateSigningRequestList**](../Model/V1beta1CertificateSigningRequestList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchCertificatesV1beta1CertificateSigningRequest**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1CertificateSigningRequest patchCertificatesV1beta1CertificateSigningRequest($name, $body, $pretty)



partially update the specified CertificateSigningRequest

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Certificates_v1beta1Api();
$name = "name_example"; // string | name of the CertificateSigningRequest
$body = new \UniversityOfAdelaide\OpenShift\Model\V1Patch(); // \UniversityOfAdelaide\OpenShift\Model\V1Patch | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchCertificatesV1beta1CertificateSigningRequest($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Certificates_v1beta1Api->patchCertificatesV1beta1CertificateSigningRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the CertificateSigningRequest |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1Patch**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1Patch.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1CertificateSigningRequest**](../Model/V1beta1CertificateSigningRequest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readCertificatesV1beta1CertificateSigningRequest**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1CertificateSigningRequest readCertificatesV1beta1CertificateSigningRequest($name, $pretty, $exact, $export)



read the specified CertificateSigningRequest

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Certificates_v1beta1Api();
$name = "name_example"; // string | name of the CertificateSigningRequest
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$exact = true; // bool | Should the export be exact.  Exact export maintains cluster-specific fields like 'Namespace'.
$export = true; // bool | Should this value be exported.  Export strips fields that a user can not specify.

try {
    $result = $api_instance->readCertificatesV1beta1CertificateSigningRequest($name, $pretty, $exact, $export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Certificates_v1beta1Api->readCertificatesV1beta1CertificateSigningRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the CertificateSigningRequest |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **exact** | **bool**| Should the export be exact.  Exact export maintains cluster-specific fields like &#39;Namespace&#39;. | [optional]
 **export** | **bool**| Should this value be exported.  Export strips fields that a user can not specify. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1CertificateSigningRequest**](../Model/V1beta1CertificateSigningRequest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceCertificatesV1beta1CertificateSigningRequest**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1CertificateSigningRequest replaceCertificatesV1beta1CertificateSigningRequest($name, $body, $pretty)



replace the specified CertificateSigningRequest

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Certificates_v1beta1Api();
$name = "name_example"; // string | name of the CertificateSigningRequest
$body = new \UniversityOfAdelaide\OpenShift\Model\V1beta1CertificateSigningRequest(); // \UniversityOfAdelaide\OpenShift\Model\V1beta1CertificateSigningRequest | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceCertificatesV1beta1CertificateSigningRequest($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Certificates_v1beta1Api->replaceCertificatesV1beta1CertificateSigningRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the CertificateSigningRequest |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1beta1CertificateSigningRequest**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1beta1CertificateSigningRequest.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1CertificateSigningRequest**](../Model/V1beta1CertificateSigningRequest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceCertificatesV1beta1CertificateSigningRequestApproval**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1CertificateSigningRequest replaceCertificatesV1beta1CertificateSigningRequestApproval($name, $body, $pretty)



replace approval of the specified CertificateSigningRequest

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Certificates_v1beta1Api();
$name = "name_example"; // string | name of the CertificateSigningRequest
$body = new \UniversityOfAdelaide\OpenShift\Model\V1beta1CertificateSigningRequest(); // \UniversityOfAdelaide\OpenShift\Model\V1beta1CertificateSigningRequest | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceCertificatesV1beta1CertificateSigningRequestApproval($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Certificates_v1beta1Api->replaceCertificatesV1beta1CertificateSigningRequestApproval: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the CertificateSigningRequest |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1beta1CertificateSigningRequest**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1beta1CertificateSigningRequest.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1CertificateSigningRequest**](../Model/V1beta1CertificateSigningRequest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceCertificatesV1beta1CertificateSigningRequestStatus**
> \UniversityOfAdelaide\OpenShift\Model\V1beta1CertificateSigningRequest replaceCertificatesV1beta1CertificateSigningRequestStatus($name, $body, $pretty)



replace status of the specified CertificateSigningRequest

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Certificates_v1beta1Api();
$name = "name_example"; // string | name of the CertificateSigningRequest
$body = new \UniversityOfAdelaide\OpenShift\Model\V1beta1CertificateSigningRequest(); // \UniversityOfAdelaide\OpenShift\Model\V1beta1CertificateSigningRequest | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceCertificatesV1beta1CertificateSigningRequestStatus($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Certificates_v1beta1Api->replaceCertificatesV1beta1CertificateSigningRequestStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the CertificateSigningRequest |
 **body** | [**\UniversityOfAdelaide\OpenShift\Model\V1beta1CertificateSigningRequest**](../Model/\UniversityOfAdelaide\OpenShift\Model\V1beta1CertificateSigningRequest.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\UniversityOfAdelaide\OpenShift\Model\V1beta1CertificateSigningRequest**](../Model/V1beta1CertificateSigningRequest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchCertificatesV1beta1CertificateSigningRequest**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchCertificatesV1beta1CertificateSigningRequest($name, $field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch)



watch changes to an object of kind CertificateSigningRequest

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Certificates_v1beta1Api();
$name = "name_example"; // string | name of the CertificateSigningRequest
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchCertificatesV1beta1CertificateSigningRequest($name, $field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Certificates_v1beta1Api->watchCertificatesV1beta1CertificateSigningRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the CertificateSigningRequest |
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

# **watchCertificatesV1beta1CertificateSigningRequestList**
> \UniversityOfAdelaide\OpenShift\Model\V1WatchEvent watchCertificatesV1beta1CertificateSigningRequestList($field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch)



watch individual changes to a list of CertificateSigningRequest

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new UniversityOfAdelaide\OpenShift\Api\Certificates_v1beta1Api();
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->watchCertificatesV1beta1CertificateSigningRequestList($field_selector, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Certificates_v1beta1Api->watchCertificatesV1beta1CertificateSigningRequestList: ', $e->getMessage(), PHP_EOL;
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

