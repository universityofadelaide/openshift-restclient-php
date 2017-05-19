# V1ImageChangeTrigger

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from** | [**\UniversityOfAdelaide\OpenShift\Model\V1ObjectReference**](V1ObjectReference.md) | from is a reference to an ImageStreamTag that will trigger a build when updated It is optional. If no From is specified, the From image from the build strategy will be used. Only one ImageChangeTrigger with an empty From reference is allowed in a build configuration. | [optional] 
**lastTriggeredImageID** | **string** | lastTriggeredImageID is used internally by the ImageChangeController to save last used image ID for build | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


