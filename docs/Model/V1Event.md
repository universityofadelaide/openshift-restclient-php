# V1Event

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**apiVersion** | **string** | APIVersion defines the versioned schema of this representation of an object. Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#resources | [optional] 
**count** | **int** | The number of times this event has occurred. | [optional] 
**firstTimestamp** | [**\UniversityOfAdelaide\OpenShift\Model\V1Time**](V1Time.md) | The time at which the event was first recorded. (Time of server receipt is in TypeMeta.) | [optional] 
**involvedObject** | [**\UniversityOfAdelaide\OpenShift\Model\V1ObjectReference**](V1ObjectReference.md) | The object that this event is about. | 
**kind** | **string** | Kind is a string value representing the REST resource this object represents. Servers may infer this from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#types-kinds | [optional] 
**lastTimestamp** | [**\UniversityOfAdelaide\OpenShift\Model\V1Time**](V1Time.md) | The time at which the most recent occurrence of this event was recorded. | [optional] 
**message** | **string** | A human-readable description of the status of this operation. | [optional] 
**metadata** | [**\UniversityOfAdelaide\OpenShift\Model\V1ObjectMeta**](V1ObjectMeta.md) | Standard object&#39;s metadata. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#metadata | 
**reason** | **string** | This should be a short, machine understandable string that gives the reason for the transition into the object&#39;s current status. | [optional] 
**source** | [**\UniversityOfAdelaide\OpenShift\Model\V1EventSource**](V1EventSource.md) | The component reporting this event. Should be a short machine understandable string. | [optional] 
**type** | **string** | Type of this event (Normal, Warning), new types could be added in the future | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


