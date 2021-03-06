# V1BuildConfigSpec

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**completionDeadlineSeconds** | **int** | completionDeadlineSeconds is an optional duration in seconds, counted from the time when a build pod gets scheduled in the system, that the build may be active on a node before the system actively tries to terminate the build; value must be positive integer | [optional] 
**failedBuildsHistoryLimit** | **int** | failedBuildsHistoryLimit is the number of old failed builds to retain. If not specified, all failed builds are retained. | [optional] 
**nodeSelector** | **map[string,string]** | nodeSelector is a selector which must be true for the build pod to fit on a node If nil, it can be overridden by default build nodeselector values for the cluster. If set to an empty map or a map with any values, default build nodeselector values are ignored. | 
**output** | [**\UniversityOfAdelaide\OpenShift\Model\V1BuildOutput**](V1BuildOutput.md) | output describes the Docker image the Strategy should produce. | [optional] 
**postCommit** | [**\UniversityOfAdelaide\OpenShift\Model\V1BuildPostCommitSpec**](V1BuildPostCommitSpec.md) | postCommit is a build hook executed after the build output image is committed, before it is pushed to a registry. | [optional] 
**resources** | [**\UniversityOfAdelaide\OpenShift\Model\V1ResourceRequirements**](V1ResourceRequirements.md) | resources computes resource requirements to execute the build. | [optional] 
**revision** | [**\UniversityOfAdelaide\OpenShift\Model\V1SourceRevision**](V1SourceRevision.md) | revision is the information from the source for a specific repo snapshot. This is optional. | [optional] 
**runPolicy** | **string** | RunPolicy describes how the new build created from this build configuration will be scheduled for execution. This is optional, if not specified we default to \&quot;Serial\&quot;. | [optional] 
**serviceAccount** | **string** | serviceAccount is the name of the ServiceAccount to use to run the pod created by this build. The pod will be allowed to use secrets referenced by the ServiceAccount | [optional] 
**source** | [**\UniversityOfAdelaide\OpenShift\Model\V1BuildSource**](V1BuildSource.md) | source describes the SCM in use. | [optional] 
**strategy** | [**\UniversityOfAdelaide\OpenShift\Model\V1BuildStrategy**](V1BuildStrategy.md) | strategy defines how to perform a build. | 
**successfulBuildsHistoryLimit** | **int** | successfulBuildsHistoryLimit is the number of old successful builds to retain. If not specified, all successful builds are retained. | [optional] 
**triggers** | [**\UniversityOfAdelaide\OpenShift\Model\V1BuildTriggerPolicy[]**](V1BuildTriggerPolicy.md) | triggers determine how new Builds can be launched from a BuildConfig. If no triggers are defined, a new build can only occur as a result of an explicit client build creation. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


