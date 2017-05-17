# V1beta1CertificateSigningRequestSpec

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**extra** | [**map[string,string[]]**](array.md) | Extra information about the requesting user. See user.Info interface for details. | [optional] 
**groups** | **string[]** | Group information about the requesting user. See user.Info interface for details. | [optional] 
**request** | **string** | Base64-encoded PKCS#10 CSR data | 
**uid** | **string** | UID information about the requesting user. See user.Info interface for details. | [optional] 
**usages** | **string[]** | allowedUsages specifies a set of usage contexts the key will be valid for. See: https://tools.ietf.org/html/rfc5280#section-4.2.1.3      https://tools.ietf.org/html/rfc5280#section-4.2.1.12 | [optional] 
**username** | **string** | Information about the requesting user. See user.Info interface for details. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


