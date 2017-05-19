# V1DeploymentConfigRollbackSpec

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from** | [**\UniversityOfAdelaide\OpenShift\Model\V1ObjectReference**](V1ObjectReference.md) | From points to a ReplicationController which is a deployment. | 
**includeReplicationMeta** | **bool** | IncludeReplicationMeta specifies whether to include the replica count and selector. | 
**includeStrategy** | **bool** | IncludeStrategy specifies whether to include the deployment Strategy. | 
**includeTemplate** | **bool** | IncludeTemplate specifies whether to include the PodTemplateSpec. | 
**includeTriggers** | **bool** | IncludeTriggers specifies whether to include config Triggers. | 
**revision** | **int** | Revision to rollback to. If set to 0, rollback to the last revision. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


