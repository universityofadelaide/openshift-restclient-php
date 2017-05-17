<?php
/**
 * V1RecreateDeploymentStrategyParams
 *
 * PHP version 5
 *
 * @category Class
 * @package  UniversityOfAdelaide\OpenShift
 * @author   Swaagger Codegen team
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

namespace UniversityOfAdelaide\OpenShift\Model;

use \ArrayAccess;

/**
 * V1RecreateDeploymentStrategyParams Class Doc Comment
 *
 * @category    Class
 * @description RecreateDeploymentStrategyParams are the input to the Recreate deployment strategy.
 * @package     UniversityOfAdelaide\OpenShift
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class V1RecreateDeploymentStrategyParams implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'v1.RecreateDeploymentStrategyParams';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'mid' => '\UniversityOfAdelaide\OpenShift\Model\V1LifecycleHook',
        'post' => '\UniversityOfAdelaide\OpenShift\Model\V1LifecycleHook',
        'pre' => '\UniversityOfAdelaide\OpenShift\Model\V1LifecycleHook',
        'timeout_seconds' => 'int'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'mid' => 'mid',
        'post' => 'post',
        'pre' => 'pre',
        'timeout_seconds' => 'timeoutSeconds'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'mid' => 'setMid',
        'post' => 'setPost',
        'pre' => 'setPre',
        'timeout_seconds' => 'setTimeoutSeconds'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'mid' => 'getMid',
        'post' => 'getPost',
        'pre' => 'getPre',
        'timeout_seconds' => 'getTimeoutSeconds'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['mid'] = isset($data['mid']) ? $data['mid'] : null;
        $this->container['post'] = isset($data['post']) ? $data['post'] : null;
        $this->container['pre'] = isset($data['pre']) ? $data['pre'] : null;
        $this->container['timeout_seconds'] = isset($data['timeout_seconds']) ? $data['timeout_seconds'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets mid
     * @return \UniversityOfAdelaide\OpenShift\Model\V1LifecycleHook
     */
    public function getMid()
    {
        return $this->container['mid'];
    }

    /**
     * Sets mid
     * @param \UniversityOfAdelaide\OpenShift\Model\V1LifecycleHook $mid Mid is a lifecycle hook which is executed while the deployment is scaled down to zero before the first new pod is created. All LifecycleHookFailurePolicy values are supported.
     * @return $this
     */
    public function setMid($mid)
    {
        $this->container['mid'] = $mid;

        return $this;
    }

    /**
     * Gets post
     * @return \UniversityOfAdelaide\OpenShift\Model\V1LifecycleHook
     */
    public function getPost()
    {
        return $this->container['post'];
    }

    /**
     * Sets post
     * @param \UniversityOfAdelaide\OpenShift\Model\V1LifecycleHook $post Post is a lifecycle hook which is executed after the strategy has finished all deployment logic. All LifecycleHookFailurePolicy values are supported.
     * @return $this
     */
    public function setPost($post)
    {
        $this->container['post'] = $post;

        return $this;
    }

    /**
     * Gets pre
     * @return \UniversityOfAdelaide\OpenShift\Model\V1LifecycleHook
     */
    public function getPre()
    {
        return $this->container['pre'];
    }

    /**
     * Sets pre
     * @param \UniversityOfAdelaide\OpenShift\Model\V1LifecycleHook $pre Pre is a lifecycle hook which is executed before the strategy manipulates the deployment. All LifecycleHookFailurePolicy values are supported.
     * @return $this
     */
    public function setPre($pre)
    {
        $this->container['pre'] = $pre;

        return $this;
    }

    /**
     * Gets timeout_seconds
     * @return int
     */
    public function getTimeoutSeconds()
    {
        return $this->container['timeout_seconds'];
    }

    /**
     * Sets timeout_seconds
     * @param int $timeout_seconds TimeoutSeconds is the time to wait for updates before giving up. If the value is nil, a default will be used.
     * @return $this
     */
    public function setTimeoutSeconds($timeout_seconds)
    {
        $this->container['timeout_seconds'] = $timeout_seconds;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\UniversityOfAdelaide\OpenShift\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\UniversityOfAdelaide\OpenShift\ObjectSerializer::sanitizeForSerialization($this));
    }
}

