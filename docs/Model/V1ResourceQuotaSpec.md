# V1ResourceQuotaSpec

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**hard** | [**map[string,\UniversityOfAdelaide\OpenShift\Model\ResourceQuantity]**](ResourceQuantity.md) | Hard is the set of desired hard limits for each named resource. More info: http://releases.k8s.io/HEAD/docs/design/admission_control_resource_quota.md#admissioncontrol-plugin-resourcequota | [optional] 
**scopes** | **string[]** | A collection of filters that must match each object tracked by a quota. If not specified, the quota matches all objects. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


