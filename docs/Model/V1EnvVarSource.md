# V1EnvVarSource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**configMapKeyRef** | [**\UniversityOfAdelaide\OpenShift\Model\V1ConfigMapKeySelector**](V1ConfigMapKeySelector.md) | Selects a key of a ConfigMap. | [optional] 
**fieldRef** | [**\UniversityOfAdelaide\OpenShift\Model\V1ObjectFieldSelector**](V1ObjectFieldSelector.md) | Selects a field of the pod: supports metadata.name, metadata.namespace, metadata.labels, metadata.annotations, spec.nodeName, spec.serviceAccountName, status.podIP. | [optional] 
**resourceFieldRef** | [**\UniversityOfAdelaide\OpenShift\Model\V1ResourceFieldSelector**](V1ResourceFieldSelector.md) | Selects a resource of the container: only resources limits and requests (limits.cpu, limits.memory, requests.cpu and requests.memory) are currently supported. | [optional] 
**secretKeyRef** | [**\UniversityOfAdelaide\OpenShift\Model\V1SecretKeySelector**](V1SecretKeySelector.md) | Selects a key of a secret in the pod&#39;s namespace | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


