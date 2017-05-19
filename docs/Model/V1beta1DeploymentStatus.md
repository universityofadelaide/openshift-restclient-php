# V1beta1DeploymentStatus

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**availableReplicas** | **int** | Total number of available pods (ready for at least minReadySeconds) targeted by this deployment. | [optional] 
**conditions** | [**\UniversityOfAdelaide\OpenShift\Model\V1beta1DeploymentCondition[]**](V1beta1DeploymentCondition.md) | Represents the latest available observations of a deployment&#39;s current state. | [optional] 
**observedGeneration** | **int** | The generation observed by the deployment controller. | [optional] 
**readyReplicas** | **int** | Total number of ready pods targeted by this deployment. | [optional] 
**replicas** | **int** | Total number of non-terminated pods targeted by this deployment (their labels match the selector). | [optional] 
**unavailableReplicas** | **int** | Total number of unavailable pods targeted by this deployment. | [optional] 
**updatedReplicas** | **int** | Total number of non-terminated pods targeted by this deployment that have the desired template spec. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


