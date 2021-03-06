# V1Image

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**apiVersion** | **string** | APIVersion defines the versioned schema of this representation of an object. Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#resources | [optional] 
**dockerImageConfig** | **string** | DockerImageConfig is a JSON blob that the runtime uses to set up the container. This is a part of manifest schema v2. | [optional] 
**dockerImageLayers** | [**\UniversityOfAdelaide\OpenShift\Model\V1ImageLayer[]**](V1ImageLayer.md) | DockerImageLayers represents the layers in the image. May not be set if the image does not define that data. | 
**dockerImageManifest** | **string** | DockerImageManifest is the raw JSON of the manifest | [optional] 
**dockerImageManifestMediaType** | **string** | DockerImageManifestMediaType specifies the mediaType of manifest. This is a part of manifest schema v2. | [optional] 
**dockerImageMetadata** | [**\UniversityOfAdelaide\OpenShift\Model\RuntimeRawExtension**](RuntimeRawExtension.md) | DockerImageMetadata contains metadata about this image | [optional] 
**dockerImageMetadataVersion** | **string** | DockerImageMetadataVersion conveys the version of the object, which if empty defaults to \&quot;1.0\&quot; | [optional] 
**dockerImageReference** | **string** | DockerImageReference is the string that can be used to pull this image. | [optional] 
**dockerImageSignatures** | **string[]** | DockerImageSignatures provides the signatures as opaque blobs. This is a part of manifest schema v1. | [optional] 
**kind** | **string** | Kind is a string value representing the REST resource this object represents. Servers may infer this from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#types-kinds | [optional] 
**metadata** | [**\UniversityOfAdelaide\OpenShift\Model\V1ObjectMeta**](V1ObjectMeta.md) | Standard object&#39;s metadata. | [optional] 
**signatures** | [**\UniversityOfAdelaide\OpenShift\Model\V1ImageSignature[]**](V1ImageSignature.md) | Signatures holds all signatures of the image. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


