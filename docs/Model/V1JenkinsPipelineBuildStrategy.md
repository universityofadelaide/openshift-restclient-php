# V1JenkinsPipelineBuildStrategy

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**env** | [**\UniversityOfAdelaide\OpenShift\Model\V1EnvVar[]**](V1EnvVar.md) | env contains additional environment variables you want to pass into a build pipeline. ValueFrom is not supported. | [optional] 
**jenkinsfile** | **string** | Jenkinsfile defines the optional raw contents of a Jenkinsfile which defines a Jenkins pipeline build. | [optional] 
**jenkinsfilePath** | **string** | JenkinsfilePath is the optional path of the Jenkinsfile that will be used to configure the pipeline relative to the root of the context (contextDir). If both JenkinsfilePath &amp; Jenkinsfile are both not specified, this defaults to Jenkinsfile in the root of the specified contextDir. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


