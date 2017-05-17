# V1ResourceRequirements

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**limits** | [**map[string,\UniversityOfAdelaide\OpenShift\Model\ResourceQuantity]**](ResourceQuantity.md) | Limits describes the maximum amount of compute resources allowed. More info: http://kubernetes.io/docs/user-guide/compute-resources/ | [optional] 
**requests** | [**map[string,\UniversityOfAdelaide\OpenShift\Model\ResourceQuantity]**](ResourceQuantity.md) | Requests describes the minimum amount of compute resources required. If Requests is omitted for a container, it defaults to Limits if that is explicitly specified, otherwise to an implementation-defined value. More info: http://kubernetes.io/docs/user-guide/compute-resources/ | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


