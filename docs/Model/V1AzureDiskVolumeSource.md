# V1AzureDiskVolumeSource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**caching_mode** | **string** | Host Caching mode: None, Read Only, Read Write. | [optional] 
**disk_name** | **string** | The Name of the data disk in the blob storage | 
**disk_uri** | **string** | The URI the data disk in the blob storage | 
**fs_type** | **string** | Filesystem type to mount. Must be a filesystem type supported by the host operating system. Ex. \&quot;ext4\&quot;, \&quot;xfs\&quot;, \&quot;ntfs\&quot;. Implicitly inferred to be \&quot;ext4\&quot; if unspecified. | [optional] 
**read_only** | **bool** | Defaults to false (read/write). ReadOnly here will force the ReadOnly setting in VolumeMounts. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


