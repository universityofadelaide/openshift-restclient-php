<?php
/**
 * V1beta1PodDisruptionBudgetStatus
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
 * V1beta1PodDisruptionBudgetStatus Class Doc Comment
 *
 * @category    Class
 * @description PodDisruptionBudgetStatus represents information about the status of a PodDisruptionBudget. Status may trail the actual state of a system.
 * @package     UniversityOfAdelaide\OpenShift
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class V1beta1PodDisruptionBudgetStatus implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'v1beta1.PodDisruptionBudgetStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'current_healthy' => 'int',
        'desired_healthy' => 'int',
        'disrupted_pods' => 'map[string,\UniversityOfAdelaide\OpenShift\Model\V1Time]',
        'disruptions_allowed' => 'int',
        'expected_pods' => 'int',
        'observed_generation' => 'int'
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
        'current_healthy' => 'currentHealthy',
        'desired_healthy' => 'desiredHealthy',
        'disrupted_pods' => 'disruptedPods',
        'disruptions_allowed' => 'disruptionsAllowed',
        'expected_pods' => 'expectedPods',
        'observed_generation' => 'observedGeneration'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'current_healthy' => 'setCurrentHealthy',
        'desired_healthy' => 'setDesiredHealthy',
        'disrupted_pods' => 'setDisruptedPods',
        'disruptions_allowed' => 'setDisruptionsAllowed',
        'expected_pods' => 'setExpectedPods',
        'observed_generation' => 'setObservedGeneration'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'current_healthy' => 'getCurrentHealthy',
        'desired_healthy' => 'getDesiredHealthy',
        'disrupted_pods' => 'getDisruptedPods',
        'disruptions_allowed' => 'getDisruptionsAllowed',
        'expected_pods' => 'getExpectedPods',
        'observed_generation' => 'getObservedGeneration'
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
        $this->container['current_healthy'] = isset($data['current_healthy']) ? $data['current_healthy'] : null;
        $this->container['desired_healthy'] = isset($data['desired_healthy']) ? $data['desired_healthy'] : null;
        $this->container['disrupted_pods'] = isset($data['disrupted_pods']) ? $data['disrupted_pods'] : null;
        $this->container['disruptions_allowed'] = isset($data['disruptions_allowed']) ? $data['disruptions_allowed'] : null;
        $this->container['expected_pods'] = isset($data['expected_pods']) ? $data['expected_pods'] : null;
        $this->container['observed_generation'] = isset($data['observed_generation']) ? $data['observed_generation'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['current_healthy'] === null) {
            $invalid_properties[] = "'current_healthy' can't be null";
        }
        if ($this->container['desired_healthy'] === null) {
            $invalid_properties[] = "'desired_healthy' can't be null";
        }
        if ($this->container['disrupted_pods'] === null) {
            $invalid_properties[] = "'disrupted_pods' can't be null";
        }
        if ($this->container['disruptions_allowed'] === null) {
            $invalid_properties[] = "'disruptions_allowed' can't be null";
        }
        if ($this->container['expected_pods'] === null) {
            $invalid_properties[] = "'expected_pods' can't be null";
        }
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

        if ($this->container['current_healthy'] === null) {
            return false;
        }
        if ($this->container['desired_healthy'] === null) {
            return false;
        }
        if ($this->container['disrupted_pods'] === null) {
            return false;
        }
        if ($this->container['disruptions_allowed'] === null) {
            return false;
        }
        if ($this->container['expected_pods'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets current_healthy
     * @return int
     */
    public function getCurrentHealthy()
    {
        return $this->container['current_healthy'];
    }

    /**
     * Sets current_healthy
     * @param int $current_healthy current number of healthy pods
     * @return $this
     */
    public function setCurrentHealthy($current_healthy)
    {
        $this->container['current_healthy'] = $current_healthy;

        return $this;
    }

    /**
     * Gets desired_healthy
     * @return int
     */
    public function getDesiredHealthy()
    {
        return $this->container['desired_healthy'];
    }

    /**
     * Sets desired_healthy
     * @param int $desired_healthy minimum desired number of healthy pods
     * @return $this
     */
    public function setDesiredHealthy($desired_healthy)
    {
        $this->container['desired_healthy'] = $desired_healthy;

        return $this;
    }

    /**
     * Gets disrupted_pods
     * @return map[string,\UniversityOfAdelaide\OpenShift\Model\V1Time]
     */
    public function getDisruptedPods()
    {
        return $this->container['disrupted_pods'];
    }

    /**
     * Sets disrupted_pods
     * @param map[string,\UniversityOfAdelaide\OpenShift\Model\V1Time] $disrupted_pods DisruptedPods contains information about pods whose eviction was processed by the API server eviction subresource handler but has not yet been observed by the PodDisruptionBudget controller. A pod will be in this map from the time when the API server processed the eviction request to the time when the pod is seen by PDB controller as having been marked for deletion (or after a timeout). The key in the map is the name of the pod and the value is the time when the API server processed the eviction request. If the deletion didn't occur and a pod is still there it will be removed from the list automatically by PodDisruptionBudget controller after some time. If everything goes smooth this map should be empty for the most of the time. Large number of entries in the map may indicate problems with pod deletions.
     * @return $this
     */
    public function setDisruptedPods($disrupted_pods)
    {
        $this->container['disrupted_pods'] = $disrupted_pods;

        return $this;
    }

    /**
     * Gets disruptions_allowed
     * @return int
     */
    public function getDisruptionsAllowed()
    {
        return $this->container['disruptions_allowed'];
    }

    /**
     * Sets disruptions_allowed
     * @param int $disruptions_allowed Number of pod disruptions that are currently allowed.
     * @return $this
     */
    public function setDisruptionsAllowed($disruptions_allowed)
    {
        $this->container['disruptions_allowed'] = $disruptions_allowed;

        return $this;
    }

    /**
     * Gets expected_pods
     * @return int
     */
    public function getExpectedPods()
    {
        return $this->container['expected_pods'];
    }

    /**
     * Sets expected_pods
     * @param int $expected_pods total number of pods counted by this disruption budget
     * @return $this
     */
    public function setExpectedPods($expected_pods)
    {
        $this->container['expected_pods'] = $expected_pods;

        return $this;
    }

    /**
     * Gets observed_generation
     * @return int
     */
    public function getObservedGeneration()
    {
        return $this->container['observed_generation'];
    }

    /**
     * Sets observed_generation
     * @param int $observed_generation Most recent generation observed when updating this PDB status. PodDisruptionsAllowed and other status informatio is valid only if observedGeneration equals to PDB's object generation.
     * @return $this
     */
    public function setObservedGeneration($observed_generation)
    {
        $this->container['observed_generation'] = $observed_generation;

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


