<?php
/**
 * V1DeploymentConfigStatus
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
 * V1DeploymentConfigStatus Class Doc Comment
 *
 * @category    Class
 * @description DeploymentConfigStatus represents the current deployment state.
 * @package     UniversityOfAdelaide\OpenShift
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class V1DeploymentConfigStatus implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'v1.DeploymentConfigStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'available_replicas' => 'int',
        'conditions' => '\UniversityOfAdelaide\OpenShift\Model\V1DeploymentCondition[]',
        'details' => '\UniversityOfAdelaide\OpenShift\Model\V1DeploymentDetails',
        'latest_version' => 'int',
        'observed_generation' => 'int',
        'ready_replicas' => 'int',
        'replicas' => 'int',
        'unavailable_replicas' => 'int',
        'updated_replicas' => 'int'
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
        'available_replicas' => 'availableReplicas',
        'conditions' => 'conditions',
        'details' => 'details',
        'latest_version' => 'latestVersion',
        'observed_generation' => 'observedGeneration',
        'ready_replicas' => 'readyReplicas',
        'replicas' => 'replicas',
        'unavailable_replicas' => 'unavailableReplicas',
        'updated_replicas' => 'updatedReplicas'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'available_replicas' => 'setAvailableReplicas',
        'conditions' => 'setConditions',
        'details' => 'setDetails',
        'latest_version' => 'setLatestVersion',
        'observed_generation' => 'setObservedGeneration',
        'ready_replicas' => 'setReadyReplicas',
        'replicas' => 'setReplicas',
        'unavailable_replicas' => 'setUnavailableReplicas',
        'updated_replicas' => 'setUpdatedReplicas'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'available_replicas' => 'getAvailableReplicas',
        'conditions' => 'getConditions',
        'details' => 'getDetails',
        'latest_version' => 'getLatestVersion',
        'observed_generation' => 'getObservedGeneration',
        'ready_replicas' => 'getReadyReplicas',
        'replicas' => 'getReplicas',
        'unavailable_replicas' => 'getUnavailableReplicas',
        'updated_replicas' => 'getUpdatedReplicas'
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
        $this->container['available_replicas'] = isset($data['available_replicas']) ? $data['available_replicas'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['latest_version'] = isset($data['latest_version']) ? $data['latest_version'] : null;
        $this->container['observed_generation'] = isset($data['observed_generation']) ? $data['observed_generation'] : null;
        $this->container['ready_replicas'] = isset($data['ready_replicas']) ? $data['ready_replicas'] : null;
        $this->container['replicas'] = isset($data['replicas']) ? $data['replicas'] : null;
        $this->container['unavailable_replicas'] = isset($data['unavailable_replicas']) ? $data['unavailable_replicas'] : null;
        $this->container['updated_replicas'] = isset($data['updated_replicas']) ? $data['updated_replicas'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['available_replicas'] === null) {
            $invalid_properties[] = "'available_replicas' can't be null";
        }
        if ($this->container['latest_version'] === null) {
            $invalid_properties[] = "'latest_version' can't be null";
        }
        if ($this->container['observed_generation'] === null) {
            $invalid_properties[] = "'observed_generation' can't be null";
        }
        if ($this->container['replicas'] === null) {
            $invalid_properties[] = "'replicas' can't be null";
        }
        if ($this->container['unavailable_replicas'] === null) {
            $invalid_properties[] = "'unavailable_replicas' can't be null";
        }
        if ($this->container['updated_replicas'] === null) {
            $invalid_properties[] = "'updated_replicas' can't be null";
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

        if ($this->container['available_replicas'] === null) {
            return false;
        }
        if ($this->container['latest_version'] === null) {
            return false;
        }
        if ($this->container['observed_generation'] === null) {
            return false;
        }
        if ($this->container['replicas'] === null) {
            return false;
        }
        if ($this->container['unavailable_replicas'] === null) {
            return false;
        }
        if ($this->container['updated_replicas'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets available_replicas
     * @return int
     */
    public function getAvailableReplicas()
    {
        return $this->container['available_replicas'];
    }

    /**
     * Sets available_replicas
     * @param int $available_replicas AvailableReplicas is the total number of available pods targeted by this deployment config.
     * @return $this
     */
    public function setAvailableReplicas($available_replicas)
    {
        $this->container['available_replicas'] = $available_replicas;

        return $this;
    }

    /**
     * Gets conditions
     * @return \UniversityOfAdelaide\OpenShift\Model\V1DeploymentCondition[]
     */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
     * Sets conditions
     * @param \UniversityOfAdelaide\OpenShift\Model\V1DeploymentCondition[] $conditions Conditions represents the latest available observations of a deployment config's current state.
     * @return $this
     */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;

        return $this;
    }

    /**
     * Gets details
     * @return \UniversityOfAdelaide\OpenShift\Model\V1DeploymentDetails
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     * @param \UniversityOfAdelaide\OpenShift\Model\V1DeploymentDetails $details Details are the reasons for the update to this deployment config. This could be based on a change made by the user or caused by an automatic trigger
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets latest_version
     * @return int
     */
    public function getLatestVersion()
    {
        return $this->container['latest_version'];
    }

    /**
     * Sets latest_version
     * @param int $latest_version LatestVersion is used to determine whether the current deployment associated with a deployment config is out of sync.
     * @return $this
     */
    public function setLatestVersion($latest_version)
    {
        $this->container['latest_version'] = $latest_version;

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
     * @param int $observed_generation ObservedGeneration is the most recent generation observed by the deployment config controller.
     * @return $this
     */
    public function setObservedGeneration($observed_generation)
    {
        $this->container['observed_generation'] = $observed_generation;

        return $this;
    }

    /**
     * Gets ready_replicas
     * @return int
     */
    public function getReadyReplicas()
    {
        return $this->container['ready_replicas'];
    }

    /**
     * Sets ready_replicas
     * @param int $ready_replicas Total number of ready pods targeted by this deployment.
     * @return $this
     */
    public function setReadyReplicas($ready_replicas)
    {
        $this->container['ready_replicas'] = $ready_replicas;

        return $this;
    }

    /**
     * Gets replicas
     * @return int
     */
    public function getReplicas()
    {
        return $this->container['replicas'];
    }

    /**
     * Sets replicas
     * @param int $replicas Replicas is the total number of pods targeted by this deployment config.
     * @return $this
     */
    public function setReplicas($replicas)
    {
        $this->container['replicas'] = $replicas;

        return $this;
    }

    /**
     * Gets unavailable_replicas
     * @return int
     */
    public function getUnavailableReplicas()
    {
        return $this->container['unavailable_replicas'];
    }

    /**
     * Sets unavailable_replicas
     * @param int $unavailable_replicas UnavailableReplicas is the total number of unavailable pods targeted by this deployment config.
     * @return $this
     */
    public function setUnavailableReplicas($unavailable_replicas)
    {
        $this->container['unavailable_replicas'] = $unavailable_replicas;

        return $this;
    }

    /**
     * Gets updated_replicas
     * @return int
     */
    public function getUpdatedReplicas()
    {
        return $this->container['updated_replicas'];
    }

    /**
     * Sets updated_replicas
     * @param int $updated_replicas UpdatedReplicas is the total number of non-terminated pods targeted by this deployment config that have the desired template spec.
     * @return $this
     */
    public function setUpdatedReplicas($updated_replicas)
    {
        $this->container['updated_replicas'] = $updated_replicas;

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


