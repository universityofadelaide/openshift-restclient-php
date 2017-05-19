# V1DeploymentRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**apiVersion** | **string** | APIVersion defines the versioned schema of this representation of an object. Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#resources | [optional] 
**excludeTriggers** | **string[]** | ExcludeTriggers instructs the instantiator to avoid processing the specified triggers. This field overrides the triggers from latest and allows clients to control specific logic. This field is ignored if not specified. | [optional] 
**force** | **bool** | Force will try to force a new deployment to run. If the deployment config is paused, then setting this to true will return an Invalid error. | 
**kind** | **string** | Kind is a string value representing the REST resource this object represents. Servers may infer this from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#types-kinds | [optional] 
**latest** | **bool** | Latest will update the deployment config with the latest state from all triggers. | 
**name** | **string** | Name of the deployment config for requesting a new deployment. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


