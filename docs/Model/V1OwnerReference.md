# V1OwnerReference

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**apiVersion** | **string** | API version of the referent. | 
**blockOwnerDeletion** | **bool** | If true, AND if the owner has the \&quot;foregroundDeletion\&quot; finalizer, then the owner cannot be deleted from the key-value store until this reference is removed. Defaults to false. To set this field, a user needs \&quot;delete\&quot; permission of the owner, otherwise 422 (Unprocessable Entity) will be returned. | [optional] 
**controller** | **bool** | If true, this reference points to the managing controller. | [optional] 
**kind** | **string** | Kind of the referent. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#types-kinds | 
**name** | **string** | Name of the referent. More info: http://kubernetes.io/docs/user-guide/identifiers#names | 
**uid** | **string** | UID of the referent. More info: http://kubernetes.io/docs/user-guide/identifiers#uids | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


