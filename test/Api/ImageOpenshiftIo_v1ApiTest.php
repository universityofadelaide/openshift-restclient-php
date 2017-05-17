<?php
/**
 * ImageOpenshiftIo_v1ApiTest
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
 * ImageOpenshiftIo_v1ApiTest Class Doc Comment
 *
 * @category Class
 * @package  UniversityOfAdelaide\OpenShift
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ImageOpenshiftIo_v1ApiTest extends \PHPUnit_Framework_TestCase
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
     * Test case for createImageOpenshiftIoV1Image
     *
     * .
     *
     */
    public function testCreateImageOpenshiftIoV1Image()
    {

    }

    /**
     * Test case for createImageOpenshiftIoV1ImageSignature
     *
     * .
     *
     */
    public function testCreateImageOpenshiftIoV1ImageSignature()
    {

    }

    /**
     * Test case for createImageOpenshiftIoV1ImageStreamForAllNamespaces
     *
     * .
     *
     */
    public function testCreateImageOpenshiftIoV1ImageStreamForAllNamespaces()
    {

    }

    /**
     * Test case for createImageOpenshiftIoV1ImageStreamImportForAllNamespaces
     *
     * .
     *
     */
    public function testCreateImageOpenshiftIoV1ImageStreamImportForAllNamespaces()
    {

    }

    /**
     * Test case for createImageOpenshiftIoV1ImageStreamMappingForAllNamespaces
     *
     * .
     *
     */
    public function testCreateImageOpenshiftIoV1ImageStreamMappingForAllNamespaces()
    {

    }

    /**
     * Test case for createImageOpenshiftIoV1ImageStreamTagForAllNamespaces
     *
     * .
     *
     */
    public function testCreateImageOpenshiftIoV1ImageStreamTagForAllNamespaces()
    {

    }

    /**
     * Test case for createImageOpenshiftIoV1NamespacedImageStream
     *
     * .
     *
     */
    public function testCreateImageOpenshiftIoV1NamespacedImageStream()
    {

    }

    /**
     * Test case for createImageOpenshiftIoV1NamespacedImageStreamImport
     *
     * .
     *
     */
    public function testCreateImageOpenshiftIoV1NamespacedImageStreamImport()
    {

    }

    /**
     * Test case for createImageOpenshiftIoV1NamespacedImageStreamMapping
     *
     * .
     *
     */
    public function testCreateImageOpenshiftIoV1NamespacedImageStreamMapping()
    {

    }

    /**
     * Test case for createImageOpenshiftIoV1NamespacedImageStreamTag
     *
     * .
     *
     */
    public function testCreateImageOpenshiftIoV1NamespacedImageStreamTag()
    {

    }

    /**
     * Test case for deleteImageOpenshiftIoV1CollectionImage
     *
     * .
     *
     */
    public function testDeleteImageOpenshiftIoV1CollectionImage()
    {

    }

    /**
     * Test case for deleteImageOpenshiftIoV1CollectionNamespacedImageStream
     *
     * .
     *
     */
    public function testDeleteImageOpenshiftIoV1CollectionNamespacedImageStream()
    {

    }

    /**
     * Test case for deleteImageOpenshiftIoV1Image
     *
     * .
     *
     */
    public function testDeleteImageOpenshiftIoV1Image()
    {

    }

    /**
     * Test case for deleteImageOpenshiftIoV1ImageSignature
     *
     * .
     *
     */
    public function testDeleteImageOpenshiftIoV1ImageSignature()
    {

    }

    /**
     * Test case for deleteImageOpenshiftIoV1NamespacedImageStream
     *
     * .
     *
     */
    public function testDeleteImageOpenshiftIoV1NamespacedImageStream()
    {

    }

    /**
     * Test case for deleteImageOpenshiftIoV1NamespacedImageStreamTag
     *
     * .
     *
     */
    public function testDeleteImageOpenshiftIoV1NamespacedImageStreamTag()
    {

    }

    /**
     * Test case for getImageOpenshiftIoV1APIResources
     *
     * .
     *
     */
    public function testGetImageOpenshiftIoV1APIResources()
    {

    }

    /**
     * Test case for listImageOpenshiftIoV1Image
     *
     * .
     *
     */
    public function testListImageOpenshiftIoV1Image()
    {

    }

    /**
     * Test case for listImageOpenshiftIoV1ImageStreamForAllNamespaces
     *
     * .
     *
     */
    public function testListImageOpenshiftIoV1ImageStreamForAllNamespaces()
    {

    }

    /**
     * Test case for listImageOpenshiftIoV1ImageStreamTagForAllNamespaces
     *
     * .
     *
     */
    public function testListImageOpenshiftIoV1ImageStreamTagForAllNamespaces()
    {

    }

    /**
     * Test case for listImageOpenshiftIoV1NamespacedImageStream
     *
     * .
     *
     */
    public function testListImageOpenshiftIoV1NamespacedImageStream()
    {

    }

    /**
     * Test case for listImageOpenshiftIoV1NamespacedImageStreamTag
     *
     * .
     *
     */
    public function testListImageOpenshiftIoV1NamespacedImageStreamTag()
    {

    }

    /**
     * Test case for patchImageOpenshiftIoV1Image
     *
     * .
     *
     */
    public function testPatchImageOpenshiftIoV1Image()
    {

    }

    /**
     * Test case for patchImageOpenshiftIoV1NamespacedImageStream
     *
     * .
     *
     */
    public function testPatchImageOpenshiftIoV1NamespacedImageStream()
    {

    }

    /**
     * Test case for patchImageOpenshiftIoV1NamespacedImageStreamStatus
     *
     * .
     *
     */
    public function testPatchImageOpenshiftIoV1NamespacedImageStreamStatus()
    {

    }

    /**
     * Test case for patchImageOpenshiftIoV1NamespacedImageStreamTag
     *
     * .
     *
     */
    public function testPatchImageOpenshiftIoV1NamespacedImageStreamTag()
    {

    }

    /**
     * Test case for readImageOpenshiftIoV1Image
     *
     * .
     *
     */
    public function testReadImageOpenshiftIoV1Image()
    {

    }

    /**
     * Test case for readImageOpenshiftIoV1NamespacedImageStream
     *
     * .
     *
     */
    public function testReadImageOpenshiftIoV1NamespacedImageStream()
    {

    }

    /**
     * Test case for readImageOpenshiftIoV1NamespacedImageStreamImage
     *
     * .
     *
     */
    public function testReadImageOpenshiftIoV1NamespacedImageStreamImage()
    {

    }

    /**
     * Test case for readImageOpenshiftIoV1NamespacedImageStreamStatus
     *
     * .
     *
     */
    public function testReadImageOpenshiftIoV1NamespacedImageStreamStatus()
    {

    }

    /**
     * Test case for readImageOpenshiftIoV1NamespacedImageStreamTag
     *
     * .
     *
     */
    public function testReadImageOpenshiftIoV1NamespacedImageStreamTag()
    {

    }

    /**
     * Test case for readImageOpenshiftIoV1NamespacedSecretListSecrets
     *
     * .
     *
     */
    public function testReadImageOpenshiftIoV1NamespacedSecretListSecrets()
    {

    }

    /**
     * Test case for replaceImageOpenshiftIoV1Image
     *
     * .
     *
     */
    public function testReplaceImageOpenshiftIoV1Image()
    {

    }

    /**
     * Test case for replaceImageOpenshiftIoV1NamespacedImageStream
     *
     * .
     *
     */
    public function testReplaceImageOpenshiftIoV1NamespacedImageStream()
    {

    }

    /**
     * Test case for replaceImageOpenshiftIoV1NamespacedImageStreamStatus
     *
     * .
     *
     */
    public function testReplaceImageOpenshiftIoV1NamespacedImageStreamStatus()
    {

    }

    /**
     * Test case for replaceImageOpenshiftIoV1NamespacedImageStreamTag
     *
     * .
     *
     */
    public function testReplaceImageOpenshiftIoV1NamespacedImageStreamTag()
    {

    }

    /**
     * Test case for watchImageOpenshiftIoV1Image
     *
     * .
     *
     */
    public function testWatchImageOpenshiftIoV1Image()
    {

    }

    /**
     * Test case for watchImageOpenshiftIoV1ImageList
     *
     * .
     *
     */
    public function testWatchImageOpenshiftIoV1ImageList()
    {

    }

    /**
     * Test case for watchImageOpenshiftIoV1ImageStreamListForAllNamespaces
     *
     * .
     *
     */
    public function testWatchImageOpenshiftIoV1ImageStreamListForAllNamespaces()
    {

    }

    /**
     * Test case for watchImageOpenshiftIoV1NamespacedImageStream
     *
     * .
     *
     */
    public function testWatchImageOpenshiftIoV1NamespacedImageStream()
    {

    }

    /**
     * Test case for watchImageOpenshiftIoV1NamespacedImageStreamList
     *
     * .
     *
     */
    public function testWatchImageOpenshiftIoV1NamespacedImageStreamList()
    {

    }

}