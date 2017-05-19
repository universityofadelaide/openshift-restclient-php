# V1ObjectReference

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**apiVersion** | **string** | API version of the referent. | [optional] 
**fieldPath** | **string** | If referring to a piece of an object instead of an entire object, this string should contain a valid JSON/Go field access statement, such as desiredState.manifest.containers[2]. For example, if the object reference is to a container within a pod, this would take on a value like: \&quot;spec.containers{name}\&quot; (where \&quot;name\&quot; refers to the name of the container that triggered the event) or if no container name is specified \&quot;spec.containers[2]\&quot; (container with index 2 in this pod). This syntax is chosen only to have some well-defined way of referencing a part of an object. | [optional] 
**kind** | **string** | Kind of the referent. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#types-kinds | [optional] 
**name** | **string** | Name of the referent. More info: http://kubernetes.io/docs/user-guide/identifiers#names | [optional] 
**namespace** | **string** | Namespace of the referent. More info: http://kubernetes.io/docs/user-guide/namespaces | [optional] 
**resourceVersion** | **string** | Specific resourceVersion to which this reference is made, if any. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#concurrency-control-and-consistency | [optional] 
**uid** | **string** | UID of the referent. More info: http://kubernetes.io/docs/user-guide/identifiers#uids | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


