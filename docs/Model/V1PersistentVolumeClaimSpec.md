# V1PersistentVolumeClaimSpec

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accessModes** | **string[]** | AccessModes contains the desired access modes the volume should have. More info: http://kubernetes.io/docs/user-guide/persistent-volumes#access-modes-1 | [optional] 
**resources** | [**\UniversityOfAdelaide\OpenShift\Model\V1ResourceRequirements**](V1ResourceRequirements.md) | Resources represents the minimum resources the volume should have. More info: http://kubernetes.io/docs/user-guide/persistent-volumes#resources | [optional] 
**selector** | [**\UniversityOfAdelaide\OpenShift\Model\V1LabelSelector**](V1LabelSelector.md) | A label query over volumes to consider for binding. | [optional] 
**storageClassName** | **string** | Name of the StorageClass required by the claim. More info: http://kubernetes.io/docs/user-guide/persistent-volumes#class-1 | [optional] 
**volumeName** | **string** | VolumeName is the binding reference to the PersistentVolume backing this claim. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


