# V1ContainerStateTerminated

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**containerID** | **string** | Container&#39;s ID in the format &#39;docker://&lt;container_id&gt;&#39; | [optional] 
**exitCode** | **int** | Exit status from the last termination of the container | 
**finishedAt** | [**\UniversityOfAdelaide\OpenShift\Model\V1Time**](V1Time.md) | Time at which the container last terminated | [optional] 
**message** | **string** | Message regarding the last termination of the container | [optional] 
**reason** | **string** | (brief) reason from the last termination of the container | [optional] 
**signal** | **int** | Signal from the last termination of the container | [optional] 
**startedAt** | [**\UniversityOfAdelaide\OpenShift\Model\V1Time**](V1Time.md) | Time at which previous execution of the container started | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


