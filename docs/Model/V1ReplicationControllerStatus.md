# V1ReplicationControllerStatus

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**availableReplicas** | **int** | The number of available replicas (ready for at least minReadySeconds) for this replication controller. | [optional] 
**conditions** | [**\UniversityOfAdelaide\OpenShift\Model\V1ReplicationControllerCondition[]**](V1ReplicationControllerCondition.md) | Represents the latest available observations of a replication controller&#39;s current state. | [optional] 
**fullyLabeledReplicas** | **int** | The number of pods that have labels matching the labels of the pod template of the replication controller. | [optional] 
**observedGeneration** | **int** | ObservedGeneration reflects the generation of the most recently observed replication controller. | [optional] 
**readyReplicas** | **int** | The number of ready replicas for this replication controller. | [optional] 
**replicas** | **int** | Replicas is the most recently oberved number of replicas. More info: http://kubernetes.io/docs/user-guide/replication-controller#what-is-a-replication-controller | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


