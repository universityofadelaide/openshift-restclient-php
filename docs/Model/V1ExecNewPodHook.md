# V1ExecNewPodHook

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**command** | **string[]** | Command is the action command and its arguments. | 
**containerName** | **string** | ContainerName is the name of a container in the deployment pod template whose Docker image will be used for the hook pod&#39;s container. | 
**env** | [**\UniversityOfAdelaide\OpenShift\Model\V1EnvVar[]**](V1EnvVar.md) | Env is a set of environment variables to supply to the hook pod&#39;s container. | [optional] 
**volumes** | **string[]** | Volumes is a list of named volumes from the pod template which should be copied to the hook pod. Volumes names not found in pod spec are ignored. An empty list means no volumes will be copied. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


