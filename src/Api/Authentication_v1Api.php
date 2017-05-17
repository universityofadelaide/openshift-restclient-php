<?php
/**
 * Authentication_v1Api
 * PHP version 5
 *
 * @category Class
 * @package  UniversityOfAdelaide\OpenShift
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * OpenShift API (with Kubernetes)
 *
 * OpenShift provides builds, application lifecycle, image content management, and administrative policy on top of Kubernetes. The API allows consistent management of those objects.  All API operations are authenticated via an Authorization bearer token that is provided for service accounts as a generated secret (in JWT form) or via the native OAuth endpoint located at /oauth/authorize. Core infrastructure components may use client certificates that require no authentication.  All API operations return a 'resourceVersion' string that represents the version of the object in the underlying storage. The standard LIST operation performs a snapshot read of the underlying objects, returning a resourceVersion representing a consistent version of the listed objects. The WATCH operation allows all updates to a set of objects after the provided resourceVersion to be observed by a client. By listing and beginning a watch from the returned resourceVersion, clients may observe a consistent view of the state of one or more objects. Note that WATCH always returns the update after the provided resourceVersion. Watch may be extended a limited time in the past - using etcd 2 the watch window is 1000 events (which on a large cluster may only be a few tens of seconds) so clients must explicitly handle the \"watch to old error\" by re-listing.  Objects are divided into two rough categories - those that have a lifecycle and must reflect the state of the cluster, and those that have no state. Objects with lifecycle typically have three main sections:  * 'metadata' common to all objects * a 'spec' that represents the desired state * a 'status' that represents how much of the desired state is reflected on   the cluster at the current time  Objects that have no state have 'metadata' but may lack a 'spec' or 'status' section.  Objects are divided into those that are namespace scoped (only exist inside of a namespace) and those that are cluster scoped (exist outside of a namespace). A namespace scoped resource will be deleted when the namespace is deleted and cannot be created if the namespace has not yet been created or is in the process of deletion. Cluster scoped resources are typically only accessible to admins - resources like nodes, persistent volumes, and cluster policy.  All objects have a schema that is a combination of the 'kind' and 'apiVersion' fields. This schema is additive only for any given version - no backwards incompatible changes are allowed without incrementing the apiVersion. The server will return and accept a number of standard responses that share a common schema - for instance, the common error type is 'metav1.Status' (described below) and will be returned on any error from the API server.  The API is available in multiple serialization formats - the default is JSON (Accept: application/json and Content-Type: application/json) but clients may also use YAML (application/yaml) or the native Protobuf schema (application/vnd.kubernetes.protobuf). Note that the format of the WATCH API call is slightly different - for JSON it returns newline delimited objects while for Protobuf it returns length-delimited frames (4 bytes in network-order) that contain a 'versioned.Watch' Protobuf object.  See the OpenShift documentation at https://docs.openshift.org for more information.
 *
 * OpenAPI spec version: latest
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace UniversityOfAdelaide\OpenShift\Api;

use \UniversityOfAdelaide\OpenShift\ApiClient;
use \UniversityOfAdelaide\OpenShift\ApiException;
use \UniversityOfAdelaide\OpenShift\Configuration;
use \UniversityOfAdelaide\OpenShift\ObjectSerializer;

/**
 * Authentication_v1Api Class Doc Comment
 *
 * @category Class
 * @package  UniversityOfAdelaide\OpenShift
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Authentication_v1Api
{
    /**
     * API Client
     *
     * @var \UniversityOfAdelaide\OpenShift\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \UniversityOfAdelaide\OpenShift\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\UniversityOfAdelaide\OpenShift\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \UniversityOfAdelaide\OpenShift\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \UniversityOfAdelaide\OpenShift\ApiClient $apiClient set the API client
     *
     * @return Authentication_v1Api
     */
    public function setApiClient(\UniversityOfAdelaide\OpenShift\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createAuthenticationV1TokenReview
     *
     * 
     *
     * @param \UniversityOfAdelaide\OpenShift\Model\V1TokenReview $body  (required)
     * @param string $pretty If &#39;true&#39;, then the output is pretty printed. (optional)
     * @throws \UniversityOfAdelaide\OpenShift\ApiException on non-2xx response
     * @return \UniversityOfAdelaide\OpenShift\Model\V1TokenReview
     */
    public function createAuthenticationV1TokenReview($body, $pretty = null)
    {
        list($response) = $this->createAuthenticationV1TokenReviewWithHttpInfo($body, $pretty);
        return $response;
    }

    /**
     * Operation createAuthenticationV1TokenReviewWithHttpInfo
     *
     * 
     *
     * @param \UniversityOfAdelaide\OpenShift\Model\V1TokenReview $body  (required)
     * @param string $pretty If &#39;true&#39;, then the output is pretty printed. (optional)
     * @throws \UniversityOfAdelaide\OpenShift\ApiException on non-2xx response
     * @return array of \UniversityOfAdelaide\OpenShift\Model\V1TokenReview, HTTP status code, HTTP response headers (array of strings)
     */
    public function createAuthenticationV1TokenReviewWithHttpInfo($body, $pretty = null)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling createAuthenticationV1TokenReview');
        }
        // parse inputs
        $resourcePath = "/apis/authentication.k8s.io/v1/tokenreviews";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/yaml', 'application/vnd.kubernetes.protobuf']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['*/*']);

        // query params
        if ($pretty !== null) {
            $queryParams['pretty'] = $this->apiClient->getSerializer()->toQueryValue($pretty);
        }
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\UniversityOfAdelaide\OpenShift\Model\V1TokenReview',
                '/apis/authentication.k8s.io/v1/tokenreviews'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\UniversityOfAdelaide\OpenShift\Model\V1TokenReview', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\UniversityOfAdelaide\OpenShift\Model\V1TokenReview', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getAuthenticationV1APIResources
     *
     * 
     *
     * @throws \UniversityOfAdelaide\OpenShift\ApiException on non-2xx response
     * @return \UniversityOfAdelaide\OpenShift\Model\V1APIResourceList
     */
    public function getAuthenticationV1APIResources()
    {
        list($response) = $this->getAuthenticationV1APIResourcesWithHttpInfo();
        return $response;
    }

    /**
     * Operation getAuthenticationV1APIResourcesWithHttpInfo
     *
     * 
     *
     * @throws \UniversityOfAdelaide\OpenShift\ApiException on non-2xx response
     * @return array of \UniversityOfAdelaide\OpenShift\Model\V1APIResourceList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAuthenticationV1APIResourcesWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/apis/authentication.k8s.io/v1/";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/yaml', 'application/vnd.kubernetes.protobuf']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/yaml', 'application/vnd.kubernetes.protobuf']);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\UniversityOfAdelaide\OpenShift\Model\V1APIResourceList',
                '/apis/authentication.k8s.io/v1/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\UniversityOfAdelaide\OpenShift\Model\V1APIResourceList', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\UniversityOfAdelaide\OpenShift\Model\V1APIResourceList', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
