# V1ISCSIVolumeSource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chapAuthDiscovery** | **bool** | whether support iSCSI Discovery CHAP authentication | [optional] 
**chapAuthSession** | **bool** | whether support iSCSI Session CHAP authentication | [optional] 
**fsType** | **string** | Filesystem type of the volume that you want to mount. Tip: Ensure that the filesystem type is supported by the host operating system. Examples: \&quot;ext4\&quot;, \&quot;xfs\&quot;, \&quot;ntfs\&quot;. Implicitly inferred to be \&quot;ext4\&quot; if unspecified. More info: http://kubernetes.io/docs/user-guide/volumes#iscsi | [optional] 
**iqn** | **string** | Target iSCSI Qualified Name. | 
**iscsiInterface** | **string** | Optional: Defaults to &#39;default&#39; (tcp). iSCSI interface name that uses an iSCSI transport. | [optional] 
**lun** | **int** | iSCSI target lun number. | 
**portals** | **string[]** | iSCSI target portal List. The portal is either an IP or ip_addr:port if the port is other than default (typically TCP ports 860 and 3260). | [optional] 
**readOnly** | **bool** | ReadOnly here will force the ReadOnly setting in VolumeMounts. Defaults to false. | [optional] 
**secretRef** | [**\UniversityOfAdelaide\OpenShift\Model\V1LocalObjectReference**](V1LocalObjectReference.md) | CHAP secret for iSCSI target and initiator authentication | [optional] 
**targetPortal** | **string** | iSCSI target portal. The portal is either an IP or ip_addr:port if the port is other than default (typically TCP ports 860 and 3260). | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


