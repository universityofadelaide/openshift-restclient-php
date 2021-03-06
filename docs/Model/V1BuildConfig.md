# V1BuildConfig

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**apiVersion** | **string** | APIVersion defines the versioned schema of this representation of an object. Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#resources | [optional] 
**kind** | **string** | Kind is a string value representing the REST resource this object represents. Servers may infer this from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#types-kinds | [optional] 
**metadata** | [**\UniversityOfAdelaide\OpenShift\Model\V1ObjectMeta**](V1ObjectMeta.md) | metadata for BuildConfig. | [optional] 
**spec** | [**\UniversityOfAdelaide\OpenShift\Model\V1BuildConfigSpec**](V1BuildConfigSpec.md) | spec holds all the input necessary to produce a new build, and the conditions when to trigger them. | 
**status** | [**\UniversityOfAdelaide\OpenShift\Model\V1BuildConfigStatus**](V1BuildConfigStatus.md) | status holds any relevant information about a build config | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


