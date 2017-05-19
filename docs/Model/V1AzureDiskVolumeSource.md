# V1AzureDiskVolumeSource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cachingMode** | **string** | Host Caching mode: None, Read Only, Read Write. | [optional] 
**diskName** | **string** | The Name of the data disk in the blob storage | 
**diskURI** | **string** | The URI the data disk in the blob storage | 
**fsType** | **string** | Filesystem type to mount. Must be a filesystem type supported by the host operating system. Ex. \&quot;ext4\&quot;, \&quot;xfs\&quot;, \&quot;ntfs\&quot;. Implicitly inferred to be \&quot;ext4\&quot; if unspecified. | [optional] 
**readOnly** | **bool** | Defaults to false (read/write). ReadOnly here will force the ReadOnly setting in VolumeMounts. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


