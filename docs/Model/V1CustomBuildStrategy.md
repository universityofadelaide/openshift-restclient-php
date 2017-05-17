# V1CustomBuildStrategy

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**build_api_version** | **string** | buildAPIVersion is the requested API version for the Build object serialized and passed to the custom builder | [optional] 
**env** | [**\UniversityOfAdelaide\OpenShift\Model\V1EnvVar[]**](V1EnvVar.md) | env contains additional environment variables you want to pass into a builder container. ValueFrom is not supported. | [optional] 
**expose_docker_socket** | **bool** | exposeDockerSocket will allow running Docker commands (and build Docker images) from inside the Docker container. | [optional] 
**force_pull** | **bool** | forcePull describes if the controller should configure the build pod to always pull the images for the builder or only pull if it is not present locally | [optional] 
**from** | [**\UniversityOfAdelaide\OpenShift\Model\V1ObjectReference**](V1ObjectReference.md) | from is reference to an DockerImage, ImageStreamTag, or ImageStreamImage from which the docker image should be pulled | 
**pull_secret** | [**\UniversityOfAdelaide\OpenShift\Model\V1LocalObjectReference**](V1LocalObjectReference.md) | pullSecret is the name of a Secret that would be used for setting up the authentication for pulling the Docker images from the private Docker registries | [optional] 
**secrets** | [**\UniversityOfAdelaide\OpenShift\Model\V1SecretSpec[]**](V1SecretSpec.md) | secrets is a list of additional secrets that will be included in the build pod | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

