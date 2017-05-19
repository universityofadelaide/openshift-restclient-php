# V1DeploymentConfigRollback

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**apiVersion** | **string** | APIVersion defines the versioned schema of this representation of an object. Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#resources | [optional] 
**kind** | **string** | Kind is a string value representing the REST resource this object represents. Servers may infer this from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#types-kinds | [optional] 
**name** | **string** | Name of the deployment config that will be rolled back. | 
**spec** | [**\UniversityOfAdelaide\OpenShift\Model\V1DeploymentConfigRollbackSpec**](V1DeploymentConfigRollbackSpec.md) | Spec defines the options to rollback generation. | 
**updatedAnnotations** | **map[string,string]** | UpdatedAnnotations is a set of new annotations that will be added in the deployment config. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


