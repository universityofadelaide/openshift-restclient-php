# V1ScaleIOVolumeSource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fsType** | **string** | Filesystem type to mount. Must be a filesystem type supported by the host operating system. Ex. \&quot;ext4\&quot;, \&quot;xfs\&quot;, \&quot;ntfs\&quot;. Implicitly inferred to be \&quot;ext4\&quot; if unspecified. | [optional] 
**gateway** | **string** | The host address of the ScaleIO API Gateway. | 
**protectionDomain** | **string** | The name of the Protection Domain for the configured storage (defaults to \&quot;default\&quot;). | [optional] 
**readOnly** | **bool** | Defaults to false (read/write). ReadOnly here will force the ReadOnly setting in VolumeMounts. | [optional] 
**secretRef** | [**\UniversityOfAdelaide\OpenShift\Model\V1LocalObjectReference**](V1LocalObjectReference.md) | SecretRef references to the secret for ScaleIO user and other sensitive information. If this is not provided, Login operation will fail. | 
**sslEnabled** | **bool** | Flag to enable/disable SSL communication with Gateway, default false | [optional] 
**storageMode** | **string** | Indicates whether the storage for a volume should be thick or thin (defaults to \&quot;thin\&quot;). | [optional] 
**storagePool** | **string** | The Storage Pool associated with the protection domain (defaults to \&quot;default\&quot;). | [optional] 
**system** | **string** | The name of the storage system as configured in ScaleIO. | 
**volumeName** | **string** | The name of a volume already created in the ScaleIO system that is associated with this volume source. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


