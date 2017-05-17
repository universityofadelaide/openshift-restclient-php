<?php
/**
 * UserOpenshiftIo_v1ApiTest
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
 * UserOpenshiftIo_v1ApiTest Class Doc Comment
 *
 * @category Class
 * @package  UniversityOfAdelaide\OpenShift
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserOpenshiftIo_v1ApiTest extends \PHPUnit_Framework_TestCase
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
     * Test case for createUserOpenshiftIoV1Group
     *
     * .
     *
     */
    public function testCreateUserOpenshiftIoV1Group()
    {

    }

    /**
     * Test case for createUserOpenshiftIoV1Identity
     *
     * .
     *
     */
    public function testCreateUserOpenshiftIoV1Identity()
    {

    }

    /**
     * Test case for createUserOpenshiftIoV1User
     *
     * .
     *
     */
    public function testCreateUserOpenshiftIoV1User()
    {

    }

    /**
     * Test case for createUserOpenshiftIoV1UserIdentityMapping
     *
     * .
     *
     */
    public function testCreateUserOpenshiftIoV1UserIdentityMapping()
    {

    }

    /**
     * Test case for deleteUserOpenshiftIoV1CollectionGroup
     *
     * .
     *
     */
    public function testDeleteUserOpenshiftIoV1CollectionGroup()
    {

    }

    /**
     * Test case for deleteUserOpenshiftIoV1CollectionIdentity
     *
     * .
     *
     */
    public function testDeleteUserOpenshiftIoV1CollectionIdentity()
    {

    }

    /**
     * Test case for deleteUserOpenshiftIoV1CollectionUser
     *
     * .
     *
     */
    public function testDeleteUserOpenshiftIoV1CollectionUser()
    {

    }

    /**
     * Test case for deleteUserOpenshiftIoV1Group
     *
     * .
     *
     */
    public function testDeleteUserOpenshiftIoV1Group()
    {

    }

    /**
     * Test case for deleteUserOpenshiftIoV1Identity
     *
     * .
     *
     */
    public function testDeleteUserOpenshiftIoV1Identity()
    {

    }

    /**
     * Test case for deleteUserOpenshiftIoV1User
     *
     * .
     *
     */
    public function testDeleteUserOpenshiftIoV1User()
    {

    }

    /**
     * Test case for deleteUserOpenshiftIoV1UserIdentityMapping
     *
     * .
     *
     */
    public function testDeleteUserOpenshiftIoV1UserIdentityMapping()
    {

    }

    /**
     * Test case for getUserOpenshiftIoV1APIResources
     *
     * .
     *
     */
    public function testGetUserOpenshiftIoV1APIResources()
    {

    }

    /**
     * Test case for listUserOpenshiftIoV1Group
     *
     * .
     *
     */
    public function testListUserOpenshiftIoV1Group()
    {

    }

    /**
     * Test case for listUserOpenshiftIoV1Identity
     *
     * .
     *
     */
    public function testListUserOpenshiftIoV1Identity()
    {

    }

    /**
     * Test case for listUserOpenshiftIoV1User
     *
     * .
     *
     */
    public function testListUserOpenshiftIoV1User()
    {

    }

    /**
     * Test case for patchUserOpenshiftIoV1Group
     *
     * .
     *
     */
    public function testPatchUserOpenshiftIoV1Group()
    {

    }

    /**
     * Test case for patchUserOpenshiftIoV1Identity
     *
     * .
     *
     */
    public function testPatchUserOpenshiftIoV1Identity()
    {

    }

    /**
     * Test case for patchUserOpenshiftIoV1User
     *
     * .
     *
     */
    public function testPatchUserOpenshiftIoV1User()
    {

    }

    /**
     * Test case for patchUserOpenshiftIoV1UserIdentityMapping
     *
     * .
     *
     */
    public function testPatchUserOpenshiftIoV1UserIdentityMapping()
    {

    }

    /**
     * Test case for readUserOpenshiftIoV1Group
     *
     * .
     *
     */
    public function testReadUserOpenshiftIoV1Group()
    {

    }

    /**
     * Test case for readUserOpenshiftIoV1Identity
     *
     * .
     *
     */
    public function testReadUserOpenshiftIoV1Identity()
    {

    }

    /**
     * Test case for readUserOpenshiftIoV1User
     *
     * .
     *
     */
    public function testReadUserOpenshiftIoV1User()
    {

    }

    /**
     * Test case for readUserOpenshiftIoV1UserIdentityMapping
     *
     * .
     *
     */
    public function testReadUserOpenshiftIoV1UserIdentityMapping()
    {

    }

    /**
     * Test case for replaceUserOpenshiftIoV1Group
     *
     * .
     *
     */
    public function testReplaceUserOpenshiftIoV1Group()
    {

    }

    /**
     * Test case for replaceUserOpenshiftIoV1Identity
     *
     * .
     *
     */
    public function testReplaceUserOpenshiftIoV1Identity()
    {

    }

    /**
     * Test case for replaceUserOpenshiftIoV1User
     *
     * .
     *
     */
    public function testReplaceUserOpenshiftIoV1User()
    {

    }

    /**
     * Test case for replaceUserOpenshiftIoV1UserIdentityMapping
     *
     * .
     *
     */
    public function testReplaceUserOpenshiftIoV1UserIdentityMapping()
    {

    }

    /**
     * Test case for watchUserOpenshiftIoV1Group
     *
     * .
     *
     */
    public function testWatchUserOpenshiftIoV1Group()
    {

    }

    /**
     * Test case for watchUserOpenshiftIoV1GroupList
     *
     * .
     *
     */
    public function testWatchUserOpenshiftIoV1GroupList()
    {

    }

    /**
     * Test case for watchUserOpenshiftIoV1Identity
     *
     * .
     *
     */
    public function testWatchUserOpenshiftIoV1Identity()
    {

    }

    /**
     * Test case for watchUserOpenshiftIoV1IdentityList
     *
     * .
     *
     */
    public function testWatchUserOpenshiftIoV1IdentityList()
    {

    }

    /**
     * Test case for watchUserOpenshiftIoV1User
     *
     * .
     *
     */
    public function testWatchUserOpenshiftIoV1User()
    {

    }

    /**
     * Test case for watchUserOpenshiftIoV1UserList
     *
     * .
     *
     */
    public function testWatchUserOpenshiftIoV1UserList()
    {

    }

}
