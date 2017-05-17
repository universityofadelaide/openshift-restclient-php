# V1LifecycleHook

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**exec_new_pod** | [**\UniversityOfAdelaide\OpenShift\Model\V1ExecNewPodHook**](V1ExecNewPodHook.md) | ExecNewPod specifies the options for a lifecycle hook backed by a pod. | [optional] 
**failure_policy** | **string** | FailurePolicy specifies what action to take if the hook fails. | 
**tag_images** | [**\UniversityOfAdelaide\OpenShift\Model\V1TagImageHook[]**](V1TagImageHook.md) | TagImages instructs the deployer to tag the current image referenced under a container onto an image stream tag. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


