# V2alpha1ResourceMetricSource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | name is the name of the resource in question. | 
**targetAverageUtilization** | **int** | targetAverageUtilization is the target value of the average of the resource metric across all relevant pods, represented as a percentage of the requested value of the resource for the pods. | [optional] 
**targetAverageValue** | [**\UniversityOfAdelaide\OpenShift\Model\ResourceQuantity**](ResourceQuantity.md) | targetAverageValue is the the target value of the average of the resource metric across all relevant pods, as a raw value (instead of as a percentage of the request), similar to the \&quot;pods\&quot; metric source type. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


