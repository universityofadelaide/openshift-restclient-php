# V1SourceBuildStrategy

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**env** | [**\UniversityOfAdelaide\OpenShift\Model\V1EnvVar[]**](V1EnvVar.md) | env contains additional environment variables you want to pass into a builder container. ValueFrom is not supported. | [optional] 
**forcePull** | **bool** | forcePull describes if the builder should pull the images from registry prior to building. | [optional] 
**from** | [**\UniversityOfAdelaide\OpenShift\Model\V1ObjectReference**](V1ObjectReference.md) | from is reference to an DockerImage, ImageStreamTag, or ImageStreamImage from which the docker image should be pulled | 
**incremental** | **bool** | incremental flag forces the Source build to do incremental builds if true. | [optional] 
**pullSecret** | [**\UniversityOfAdelaide\OpenShift\Model\V1LocalObjectReference**](V1LocalObjectReference.md) | pullSecret is the name of a Secret that would be used for setting up the authentication for pulling the Docker images from the private Docker registries | [optional] 
**runtimeArtifacts** | [**\UniversityOfAdelaide\OpenShift\Model\V1ImageSourcePath[]**](V1ImageSourcePath.md) | runtimeArtifacts specifies a list of source/destination pairs that will be copied from the builder to the runtime image. sourcePath can be a file or directory. destinationDir must be a directory. destinationDir can also be empty or equal to \&quot;.\&quot;, in this case it just refers to the root of WORKDIR. Deprecated: This feature will be removed in a future release. Use ImageSource to copy binary artifacts created from one build into a separate runtime image. | [optional] 
**runtimeImage** | [**\UniversityOfAdelaide\OpenShift\Model\V1ObjectReference**](V1ObjectReference.md) | runtimeImage is an optional image that is used to run an application without unneeded dependencies installed. The building of the application is still done in the builder image but, post build, you can copy the needed artifacts in the runtime image for use. Deprecated: This feature will be removed in a future release. Use ImageSource to copy binary artifacts created from one build into a separate runtime image. | [optional] 
**scripts** | **string** | scripts is the location of Source scripts | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


