# V1PolicyBinding

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**apiVersion** | **string** | APIVersion defines the versioned schema of this representation of an object. Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#resources | [optional] 
**kind** | **string** | Kind is a string value representing the REST resource this object represents. Servers may infer this from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#types-kinds | [optional] 
**lastModified** | [**\UniversityOfAdelaide\OpenShift\Model\V1Time**](V1Time.md) | LastModified is the last time that any part of the PolicyBinding was created, updated, or deleted | 
**metadata** | [**\UniversityOfAdelaide\OpenShift\Model\V1ObjectMeta**](V1ObjectMeta.md) | Standard object&#39;s metadata. | [optional] 
**policyRef** | [**\UniversityOfAdelaide\OpenShift\Model\V1ObjectReference**](V1ObjectReference.md) | PolicyRef is a reference to the Policy that contains all the Roles that this PolicyBinding&#39;s RoleBindings may reference | 
**roleBindings** | [**\UniversityOfAdelaide\OpenShift\Model\V1NamedRoleBinding[]**](V1NamedRoleBinding.md) | RoleBindings holds all the RoleBindings held by this PolicyBinding, mapped by RoleBinding.Name | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


