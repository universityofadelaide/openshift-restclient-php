# V1RouteIngress

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**conditions** | [**\UniversityOfAdelaide\OpenShift\Model\V1RouteIngressCondition[]**](V1RouteIngressCondition.md) | Conditions is the state of the route, may be empty. | [optional] 
**host** | **string** | Host is the host string under which the route is exposed; this value is required | [optional] 
**routerCanonicalHostname** | **string** | CanonicalHostname is the external host name for the router that can be used as a CNAME for the host requested for this route. This value is optional and may not be set in all cases. | [optional] 
**routerName** | **string** | Name is a name chosen by the router to identify itself; this value is required | [optional] 
**wildcardPolicy** | **string** | Wildcard policy is the wildcard policy that was allowed where this route is exposed. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


