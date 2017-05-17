# V1beta1PodDisruptionBudget

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**api_version** | **string** | APIVersion defines the versioned schema of this representation of an object. Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#resources | [optional] 
**kind** | **string** | Kind is a string value representing the REST resource this object represents. Servers may infer this from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#types-kinds | [optional] 
**metadata** | [**\UniversityOfAdelaide\OpenShift\Model\V1ObjectMeta**](V1ObjectMeta.md) |  | [optional] 
**spec** | [**\UniversityOfAdelaide\OpenShift\Model\V1beta1PodDisruptionBudgetSpec**](V1beta1PodDisruptionBudgetSpec.md) | Specification of the desired behavior of the PodDisruptionBudget. | [optional] 
**status** | [**\UniversityOfAdelaide\OpenShift\Model\V1beta1PodDisruptionBudgetStatus**](V1beta1PodDisruptionBudgetStatus.md) | Most recently observed status of the PodDisruptionBudget. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


