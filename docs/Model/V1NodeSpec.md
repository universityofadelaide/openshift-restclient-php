# V1NodeSpec

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**externalID** | **string** | External ID of the node assigned by some machine database (e.g. a cloud provider). Deprecated. | [optional] 
**podCIDR** | **string** | PodCIDR represents the pod IP range assigned to the node. | [optional] 
**providerID** | **string** | ID of the node assigned by the cloud provider in the format: &lt;ProviderName&gt;://&lt;ProviderSpecificNodeID&gt; | [optional] 
**taints** | [**\UniversityOfAdelaide\OpenShift\Model\V1Taint[]**](V1Taint.md) | If specified, the node&#39;s taints. | [optional] 
**unschedulable** | **bool** | Unschedulable controls node schedulability of new pods. By default, node is schedulable. More info: http://releases.k8s.io/HEAD/docs/admin/node.md#manual-node-administration | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


