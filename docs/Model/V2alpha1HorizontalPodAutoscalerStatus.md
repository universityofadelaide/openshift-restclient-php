# V2alpha1HorizontalPodAutoscalerStatus

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currentMetrics** | [**\UniversityOfAdelaide\OpenShift\Model\V2alpha1MetricStatus[]**](V2alpha1MetricStatus.md) | currentMetrics is the last read state of the metrics used by this autoscaler. | 
**currentReplicas** | **int** | currentReplicas is current number of replicas of pods managed by this autoscaler, as last seen by the autoscaler. | 
**desiredReplicas** | **int** | desiredReplicas is the desired number of replicas of pods managed by this autoscaler, as last calculated by the autoscaler. | 
**lastScaleTime** | [**\UniversityOfAdelaide\OpenShift\Model\V1Time**](V1Time.md) | lastScaleTime is the last time the HorizontalPodAutoscaler scaled the number of pods, used by the autoscaler to control how often the number of pods is changed. | [optional] 
**observedGeneration** | **int** | observedGeneration is the most recent generation observed by this autoscaler. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


