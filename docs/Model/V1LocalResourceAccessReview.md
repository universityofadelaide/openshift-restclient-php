# V1LocalResourceAccessReview

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**api_version** | **string** | APIVersion defines the versioned schema of this representation of an object. Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#resources | [optional] 
**content** | [**\UniversityOfAdelaide\OpenShift\Model\RuntimeRawExtension**](RuntimeRawExtension.md) | Content is the actual content of the request for create and update | [optional] 
**is_non_resource_url** | **bool** | IsNonResourceURL is true if this is a request for a non-resource URL (outside of the resource hieraarchy) | 
**kind** | **string** | Kind is a string value representing the REST resource this object represents. Servers may infer this from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#types-kinds | [optional] 
**namespace** | **string** | Namespace is the namespace of the action being requested.  Currently, there is no distinction between no namespace and all namespaces | 
**path** | **string** | Path is the path of a non resource URL | 
**resource** | **string** | Resource is one of the existing resource types | 
**resource_api_group** | **string** | Group is the API group of the resource Serialized as resourceAPIGroup to avoid confusion with the &#39;groups&#39; field when inlined | 
**resource_api_version** | **string** | Version is the API version of the resource Serialized as resourceAPIVersion to avoid confusion with TypeMeta.apiVersion and ObjectMeta.resourceVersion when inlined | 
**resource_name** | **string** | ResourceName is the name of the resource being requested for a \&quot;get\&quot; or deleted for a \&quot;delete\&quot; | 
**verb** | **string** | Verb is one of: get, list, watch, create, update, delete | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


