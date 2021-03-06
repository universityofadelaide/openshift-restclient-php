# V1TLSConfig

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**caCertificate** | **string** | caCertificate provides the cert authority certificate contents | [optional] 
**certificate** | **string** | certificate provides certificate contents | [optional] 
**destinationCACertificate** | **string** | destinationCACertificate provides the contents of the ca certificate of the final destination.  When using reencrypt termination this file should be provided in order to have routers use it for health checks on the secure connection. If this field is not specified, the router may provide its own destination CA and perform hostname validation using the short service name (service.namespace.svc), which allows infrastructure generated certificates to automatically verify. | [optional] 
**insecureEdgeTerminationPolicy** | **string** | insecureEdgeTerminationPolicy indicates the desired behavior for insecure connections to a route. While each router may make its own decisions on which ports to expose, this is normally port 80.  * Allow - traffic is sent to the server on the insecure port (default) * Disable - no traffic is allowed on the insecure port. * Redirect - clients are redirected to the secure port. | [optional] 
**key** | **string** | key provides key file contents | [optional] 
**termination** | **string** | termination indicates termination type. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


