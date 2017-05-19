# V1StageInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**durationMilliseconds** | **int** | durationMilliseconds identifies how long the stage took to complete in milliseconds. Note: the duration of a stage can exceed the sum of the duration of the steps within the stage as not all actions are accounted for in explicit build steps. | [optional] 
**name** | **string** | name is a unique identifier for each build stage that occurs. | [optional] 
**startTime** | [**\UniversityOfAdelaide\OpenShift\Model\V1Time**](V1Time.md) | startTime is a timestamp representing the server time when this Stage started. It is represented in RFC3339 form and is in UTC. | [optional] 
**steps** | [**\UniversityOfAdelaide\OpenShift\Model\V1StepInfo[]**](V1StepInfo.md) | steps contains details about each step that occurs during a build stage including start time and duration in milliseconds. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


