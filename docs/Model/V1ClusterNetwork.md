# V1ClusterNetwork

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**api_version** | **string** | APIVersion defines the versioned schema of this representation of an object. Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#resources | [optional] 
**hostsubnetlength** | **int** | HostSubnetLength is the number of bits of network to allocate to each node. eg, 8 would mean that each node would have a /24 slice of the overlay network for its pods | 
**kind** | **string** | Kind is a string value representing the REST resource this object represents. Servers may infer this from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#types-kinds | [optional] 
**metadata** | [**\UniversityOfAdelaide\OpenShift\Model\V1ObjectMeta**](V1ObjectMeta.md) | Standard object&#39;s metadata. | [optional] 
**network** | **string** | Network is a CIDR string specifying the global overlay network&#39;s L3 space | 
**plugin_name** | **string** | PluginName is the name of the network plugin being used | [optional] 
**service_network** | **string** | ServiceNetwork is the CIDR range that Service IP addresses are allocated from | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


