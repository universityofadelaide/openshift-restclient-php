# V1ClusterResourceQuota

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**api_version** | **string** | APIVersion defines the versioned schema of this representation of an object. Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#resources | [optional] 
**kind** | **string** | Kind is a string value representing the REST resource this object represents. Servers may infer this from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#types-kinds | [optional] 
**metadata** | [**\UniversityOfAdelaide\OpenShift\Model\V1ObjectMeta**](V1ObjectMeta.md) | Standard object&#39;s metadata. | 
**spec** | [**\UniversityOfAdelaide\OpenShift\Model\V1ClusterResourceQuotaSpec**](V1ClusterResourceQuotaSpec.md) | Spec defines the desired quota | 
**status** | [**\UniversityOfAdelaide\OpenShift\Model\V1ClusterResourceQuotaStatus**](V1ClusterResourceQuotaStatus.md) | Status defines the actual enforced quota and its current usage | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


