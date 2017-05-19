# V1DeploymentConfigStatus

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**availableReplicas** | **int** | AvailableReplicas is the total number of available pods targeted by this deployment config. | 
**conditions** | [**\UniversityOfAdelaide\OpenShift\Model\V1DeploymentCondition[]**](V1DeploymentCondition.md) | Conditions represents the latest available observations of a deployment config&#39;s current state. | [optional] 
**details** | [**\UniversityOfAdelaide\OpenShift\Model\V1DeploymentDetails**](V1DeploymentDetails.md) | Details are the reasons for the update to this deployment config. This could be based on a change made by the user or caused by an automatic trigger | [optional] 
**latestVersion** | **int** | LatestVersion is used to determine whether the current deployment associated with a deployment config is out of sync. | 
**observedGeneration** | **int** | ObservedGeneration is the most recent generation observed by the deployment config controller. | 
**readyReplicas** | **int** | Total number of ready pods targeted by this deployment. | [optional] 
**replicas** | **int** | Replicas is the total number of pods targeted by this deployment config. | 
**unavailableReplicas** | **int** | UnavailableReplicas is the total number of unavailable pods targeted by this deployment config. | 
**updatedReplicas** | **int** | UpdatedReplicas is the total number of non-terminated pods targeted by this deployment config that have the desired template spec. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


