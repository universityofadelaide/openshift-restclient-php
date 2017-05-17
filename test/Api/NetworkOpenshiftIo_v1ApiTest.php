<?php
/**
 * NetworkOpenshiftIo_v1ApiTest
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
 * Please update the test case below to test the endpoint.
 */

namespace UniversityOfAdelaide\OpenShift;

use \UniversityOfAdelaide\OpenShift\Configuration;
use \UniversityOfAdelaide\OpenShift\ApiClient;
use \UniversityOfAdelaide\OpenShift\ApiException;
use \UniversityOfAdelaide\OpenShift\ObjectSerializer;

/**
 * NetworkOpenshiftIo_v1ApiTest Class Doc Comment
 *
 * @category Class
 * @package  UniversityOfAdelaide\OpenShift
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NetworkOpenshiftIo_v1ApiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {

    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {

    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {

    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {

    }

    /**
     * Test case for createNetworkOpenshiftIoV1ClusterNetwork
     *
     * .
     *
     */
    public function testCreateNetworkOpenshiftIoV1ClusterNetwork()
    {

    }

    /**
     * Test case for createNetworkOpenshiftIoV1EgressNetworkPolicyForAllNamespaces
     *
     * .
     *
     */
    public function testCreateNetworkOpenshiftIoV1EgressNetworkPolicyForAllNamespaces()
    {

    }

    /**
     * Test case for createNetworkOpenshiftIoV1HostSubnet
     *
     * .
     *
     */
    public function testCreateNetworkOpenshiftIoV1HostSubnet()
    {

    }

    /**
     * Test case for createNetworkOpenshiftIoV1NamespacedEgressNetworkPolicy
     *
     * .
     *
     */
    public function testCreateNetworkOpenshiftIoV1NamespacedEgressNetworkPolicy()
    {

    }

    /**
     * Test case for createNetworkOpenshiftIoV1NetNamespace
     *
     * .
     *
     */
    public function testCreateNetworkOpenshiftIoV1NetNamespace()
    {

    }

    /**
     * Test case for deleteNetworkOpenshiftIoV1ClusterNetwork
     *
     * .
     *
     */
    public function testDeleteNetworkOpenshiftIoV1ClusterNetwork()
    {

    }

    /**
     * Test case for deleteNetworkOpenshiftIoV1CollectionClusterNetwork
     *
     * .
     *
     */
    public function testDeleteNetworkOpenshiftIoV1CollectionClusterNetwork()
    {

    }

    /**
     * Test case for deleteNetworkOpenshiftIoV1CollectionHostSubnet
     *
     * .
     *
     */
    public function testDeleteNetworkOpenshiftIoV1CollectionHostSubnet()
    {

    }

    /**
     * Test case for deleteNetworkOpenshiftIoV1CollectionNamespacedEgressNetworkPolicy
     *
     * .
     *
     */
    public function testDeleteNetworkOpenshiftIoV1CollectionNamespacedEgressNetworkPolicy()
    {

    }

    /**
     * Test case for deleteNetworkOpenshiftIoV1CollectionNetNamespace
     *
     * .
     *
     */
    public function testDeleteNetworkOpenshiftIoV1CollectionNetNamespace()
    {

    }

    /**
     * Test case for deleteNetworkOpenshiftIoV1HostSubnet
     *
     * .
     *
     */
    public function testDeleteNetworkOpenshiftIoV1HostSubnet()
    {

    }

    /**
     * Test case for deleteNetworkOpenshiftIoV1NamespacedEgressNetworkPolicy
     *
     * .
     *
     */
    public function testDeleteNetworkOpenshiftIoV1NamespacedEgressNetworkPolicy()
    {

    }

    /**
     * Test case for deleteNetworkOpenshiftIoV1NetNamespace
     *
     * .
     *
     */
    public function testDeleteNetworkOpenshiftIoV1NetNamespace()
    {

    }

    /**
     * Test case for getNetworkOpenshiftIoV1APIResources
     *
     * .
     *
     */
    public function testGetNetworkOpenshiftIoV1APIResources()
    {

    }

    /**
     * Test case for listNetworkOpenshiftIoV1ClusterNetwork
     *
     * .
     *
     */
    public function testListNetworkOpenshiftIoV1ClusterNetwork()
    {

    }

    /**
     * Test case for listNetworkOpenshiftIoV1EgressNetworkPolicyForAllNamespaces
     *
     * .
     *
     */
    public function testListNetworkOpenshiftIoV1EgressNetworkPolicyForAllNamespaces()
    {

    }

    /**
     * Test case for listNetworkOpenshiftIoV1HostSubnet
     *
     * .
     *
     */
    public function testListNetworkOpenshiftIoV1HostSubnet()
    {

    }

    /**
     * Test case for listNetworkOpenshiftIoV1NamespacedEgressNetworkPolicy
     *
     * .
     *
     */
    public function testListNetworkOpenshiftIoV1NamespacedEgressNetworkPolicy()
    {

    }

    /**
     * Test case for listNetworkOpenshiftIoV1NetNamespace
     *
     * .
     *
     */
    public function testListNetworkOpenshiftIoV1NetNamespace()
    {

    }

    /**
     * Test case for patchNetworkOpenshiftIoV1ClusterNetwork
     *
     * .
     *
     */
    public function testPatchNetworkOpenshiftIoV1ClusterNetwork()
    {

    }

    /**
     * Test case for patchNetworkOpenshiftIoV1HostSubnet
     *
     * .
     *
     */
    public function testPatchNetworkOpenshiftIoV1HostSubnet()
    {

    }

    /**
     * Test case for patchNetworkOpenshiftIoV1NamespacedEgressNetworkPolicy
     *
     * .
     *
     */
    public function testPatchNetworkOpenshiftIoV1NamespacedEgressNetworkPolicy()
    {

    }

    /**
     * Test case for patchNetworkOpenshiftIoV1NetNamespace
     *
     * .
     *
     */
    public function testPatchNetworkOpenshiftIoV1NetNamespace()
    {

    }

    /**
     * Test case for readNetworkOpenshiftIoV1ClusterNetwork
     *
     * .
     *
     */
    public function testReadNetworkOpenshiftIoV1ClusterNetwork()
    {

    }

    /**
     * Test case for readNetworkOpenshiftIoV1HostSubnet
     *
     * .
     *
     */
    public function testReadNetworkOpenshiftIoV1HostSubnet()
    {

    }

    /**
     * Test case for readNetworkOpenshiftIoV1NamespacedEgressNetworkPolicy
     *
     * .
     *
     */
    public function testReadNetworkOpenshiftIoV1NamespacedEgressNetworkPolicy()
    {

    }

    /**
     * Test case for readNetworkOpenshiftIoV1NetNamespace
     *
     * .
     *
     */
    public function testReadNetworkOpenshiftIoV1NetNamespace()
    {

    }

    /**
     * Test case for replaceNetworkOpenshiftIoV1ClusterNetwork
     *
     * .
     *
     */
    public function testReplaceNetworkOpenshiftIoV1ClusterNetwork()
    {

    }

    /**
     * Test case for replaceNetworkOpenshiftIoV1HostSubnet
     *
     * .
     *
     */
    public function testReplaceNetworkOpenshiftIoV1HostSubnet()
    {

    }

    /**
     * Test case for replaceNetworkOpenshiftIoV1NamespacedEgressNetworkPolicy
     *
     * .
     *
     */
    public function testReplaceNetworkOpenshiftIoV1NamespacedEgressNetworkPolicy()
    {

    }

    /**
     * Test case for replaceNetworkOpenshiftIoV1NetNamespace
     *
     * .
     *
     */
    public function testReplaceNetworkOpenshiftIoV1NetNamespace()
    {

    }

    /**
     * Test case for watchNetworkOpenshiftIoV1ClusterNetwork
     *
     * .
     *
     */
    public function testWatchNetworkOpenshiftIoV1ClusterNetwork()
    {

    }

    /**
     * Test case for watchNetworkOpenshiftIoV1ClusterNetworkList
     *
     * .
     *
     */
    public function testWatchNetworkOpenshiftIoV1ClusterNetworkList()
    {

    }

    /**
     * Test case for watchNetworkOpenshiftIoV1EgressNetworkPolicyListForAllNamespaces
     *
     * .
     *
     */
    public function testWatchNetworkOpenshiftIoV1EgressNetworkPolicyListForAllNamespaces()
    {

    }

    /**
     * Test case for watchNetworkOpenshiftIoV1HostSubnet
     *
     * .
     *
     */
    public function testWatchNetworkOpenshiftIoV1HostSubnet()
    {

    }

    /**
     * Test case for watchNetworkOpenshiftIoV1HostSubnetList
     *
     * .
     *
     */
    public function testWatchNetworkOpenshiftIoV1HostSubnetList()
    {

    }

    /**
     * Test case for watchNetworkOpenshiftIoV1NamespacedEgressNetworkPolicy
     *
     * .
     *
     */
    public function testWatchNetworkOpenshiftIoV1NamespacedEgressNetworkPolicy()
    {

    }

    /**
     * Test case for watchNetworkOpenshiftIoV1NamespacedEgressNetworkPolicyList
     *
     * .
     *
     */
    public function testWatchNetworkOpenshiftIoV1NamespacedEgressNetworkPolicyList()
    {

    }

    /**
     * Test case for watchNetworkOpenshiftIoV1NetNamespace
     *
     * .
     *
     */
    public function testWatchNetworkOpenshiftIoV1NetNamespace()
    {

    }

    /**
     * Test case for watchNetworkOpenshiftIoV1NetNamespaceList
     *
     * .
     *
     */
    public function testWatchNetworkOpenshiftIoV1NetNamespaceList()
    {

    }

}