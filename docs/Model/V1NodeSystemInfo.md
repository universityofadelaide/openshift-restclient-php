# V1NodeSystemInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**architecture** | **string** | The Architecture reported by the node | 
**bootID** | **string** | Boot ID reported by the node. | 
**containerRuntimeVersion** | **string** | ContainerRuntime Version reported by the node through runtime remote API (e.g. docker://1.5.0). | 
**kernelVersion** | **string** | Kernel Version reported by the node from &#39;uname -r&#39; (e.g. 3.16.0-0.bpo.4-amd64). | 
**kubeProxyVersion** | **string** | KubeProxy Version reported by the node. | 
**kubeletVersion** | **string** | Kubelet Version reported by the node. | 
**machineID** | **string** | MachineID reported by the node. For unique machine identification in the cluster this field is prefered. Learn more from man(5) machine-id: http://man7.org/linux/man-pages/man5/machine-id.5.html | 
**operatingSystem** | **string** | The Operating System reported by the node | 
**osImage** | **string** | OS Image reported by the node from /etc/os-release (e.g. Debian GNU/Linux 7 (wheezy)). | 
**systemUUID** | **string** | SystemUUID reported by the node. For unique machine identification MachineID is prefered. This field is specific to Red Hat hosts https://access.redhat.com/documentation/en-US/Red_Hat_Subscription_Management/1/html/RHSM/getting-system-uuid.html | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


