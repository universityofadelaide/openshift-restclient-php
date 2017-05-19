# V1HorizontalPodAutoscalerStatus

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currentCPUUtilizationPercentage** | **int** | current average CPU utilization over all pods, represented as a percentage of requested CPU, e.g. 70 means that an average pod is using now 70% of its requested CPU. | [optional] 
**currentReplicas** | **int** | current number of replicas of pods managed by this autoscaler. | 
**desiredReplicas** | **int** | desired number of replicas of pods managed by this autoscaler. | 
**lastScaleTime** | [**\UniversityOfAdelaide\OpenShift\Model\V1Time**](V1Time.md) | last time the HorizontalPodAutoscaler scaled the number of pods; used by the autoscaler to control how often the number of pods is changed. | [optional] 
**observedGeneration** | **int** | most recent generation observed by this autoscaler. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


