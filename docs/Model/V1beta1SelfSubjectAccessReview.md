# V1beta1SelfSubjectAccessReview

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**apiVersion** | **string** | APIVersion defines the versioned schema of this representation of an object. Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#resources | [optional] 
**kind** | **string** | Kind is a string value representing the REST resource this object represents. Servers may infer this from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#types-kinds | [optional] 
**metadata** | [**\UniversityOfAdelaide\OpenShift\Model\V1ObjectMeta**](V1ObjectMeta.md) |  | [optional] 
**spec** | [**\UniversityOfAdelaide\OpenShift\Model\V1beta1SelfSubjectAccessReviewSpec**](V1beta1SelfSubjectAccessReviewSpec.md) | Spec holds information about the request being evaluated.  user and groups must be empty | 
**status** | [**\UniversityOfAdelaide\OpenShift\Model\V1beta1SubjectAccessReviewStatus**](V1beta1SubjectAccessReviewStatus.md) | Status is filled in by the server and indicates whether the request is allowed or not | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


