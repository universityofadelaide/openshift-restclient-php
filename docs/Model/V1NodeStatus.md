# V1NodeStatus

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**addresses** | [**\UniversityOfAdelaide\OpenShift\Model\V1NodeAddress[]**](V1NodeAddress.md) | List of addresses reachable to the node. Queried from cloud provider, if available. More info: http://releases.k8s.io/HEAD/docs/admin/node.md#node-addresses | [optional] 
**allocatable** | [**map[string,\UniversityOfAdelaide\OpenShift\Model\ResourceQuantity]**](ResourceQuantity.md) | Allocatable represents the resources of a node that are available for scheduling. Defaults to Capacity. | [optional] 
**capacity** | [**map[string,\UniversityOfAdelaide\OpenShift\Model\ResourceQuantity]**](ResourceQuantity.md) | Capacity represents the total resources of a node. More info: http://kubernetes.io/docs/user-guide/persistent-volumes#capacity for more details. | [optional] 
**conditions** | [**\UniversityOfAdelaide\OpenShift\Model\V1NodeCondition[]**](V1NodeCondition.md) | Conditions is an array of current observed node conditions. More info: http://releases.k8s.io/HEAD/docs/admin/node.md#node-condition | [optional] 
**daemonEndpoints** | [**\UniversityOfAdelaide\OpenShift\Model\V1NodeDaemonEndpoints**](V1NodeDaemonEndpoints.md) | Endpoints of daemons running on the Node. | [optional] 
**images** | [**\UniversityOfAdelaide\OpenShift\Model\V1ContainerImage[]**](V1ContainerImage.md) | List of container images on this node | [optional] 
**nodeInfo** | [**\UniversityOfAdelaide\OpenShift\Model\V1NodeSystemInfo**](V1NodeSystemInfo.md) | Set of ids/uuids to uniquely identify the node. More info: http://releases.k8s.io/HEAD/docs/admin/node.md#node-info | [optional] 
**phase** | **string** | NodePhase is the recently observed lifecycle phase of the node. More info: http://releases.k8s.io/HEAD/docs/admin/node.md#node-phase The field is never populated, and now is deprecated. | [optional] 
**volumesAttached** | [**\UniversityOfAdelaide\OpenShift\Model\V1AttachedVolume[]**](V1AttachedVolume.md) | List of volumes that are attached to the node. | [optional] 
**volumesInUse** | **string[]** | List of attachable volumes in use (mounted) by the node. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


