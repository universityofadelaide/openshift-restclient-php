<?php
/**
 * V1ContainerStatus
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
 * V1ContainerStatus Class Doc Comment
 *
 * @category    Class
 * @description ContainerStatus contains details for the current status of this container.
 * @package     UniversityOfAdelaide\OpenShift
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class V1ContainerStatus implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'v1.ContainerStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'container_id' => 'string',
        'image' => 'string',
        'image_id' => 'string',
        'last_state' => '\UniversityOfAdelaide\OpenShift\Model\V1ContainerState',
        'name' => 'string',
        'ready' => 'bool',
        'restart_count' => 'int',
        'state' => '\UniversityOfAdelaide\OpenShift\Model\V1ContainerState'
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
        'container_id' => 'containerID',
        'image' => 'image',
        'image_id' => 'imageID',
        'last_state' => 'lastState',
        'name' => 'name',
        'ready' => 'ready',
        'restart_count' => 'restartCount',
        'state' => 'state'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'container_id' => 'setContainerId',
        'image' => 'setImage',
        'image_id' => 'setImageId',
        'last_state' => 'setLastState',
        'name' => 'setName',
        'ready' => 'setReady',
        'restart_count' => 'setRestartCount',
        'state' => 'setState'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'container_id' => 'getContainerId',
        'image' => 'getImage',
        'image_id' => 'getImageId',
        'last_state' => 'getLastState',
        'name' => 'getName',
        'ready' => 'getReady',
        'restart_count' => 'getRestartCount',
        'state' => 'getState'
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
        $this->container['container_id'] = isset($data['container_id']) ? $data['container_id'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['image_id'] = isset($data['image_id']) ? $data['image_id'] : null;
        $this->container['last_state'] = isset($data['last_state']) ? $data['last_state'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ready'] = isset($data['ready']) ? $data['ready'] : null;
        $this->container['restart_count'] = isset($data['restart_count']) ? $data['restart_count'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['image'] === null) {
            $invalid_properties[] = "'image' can't be null";
        }
        if ($this->container['image_id'] === null) {
            $invalid_properties[] = "'image_id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['ready'] === null) {
            $invalid_properties[] = "'ready' can't be null";
        }
        if ($this->container['restart_count'] === null) {
            $invalid_properties[] = "'restart_count' can't be null";
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

        if ($this->container['image'] === null) {
            return false;
        }
        if ($this->container['image_id'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['ready'] === null) {
            return false;
        }
        if ($this->container['restart_count'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets container_id
     * @return string
     */
    public function getContainerId()
    {
        return $this->container['container_id'];
    }

    /**
     * Sets container_id
     * @param string $container_id Container's ID in the format 'docker://<container_id>'. More info: http://kubernetes.io/docs/user-guide/container-environment#container-information
     * @return $this
     */
    public function setContainerId($container_id)
    {
        $this->container['container_id'] = $container_id;

        return $this;
    }

    /**
     * Gets image
     * @return string
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     * @param string $image The image the container is running. More info: http://kubernetes.io/docs/user-guide/images
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets image_id
     * @return string
     */
    public function getImageId()
    {
        return $this->container['image_id'];
    }

    /**
     * Sets image_id
     * @param string $image_id ImageID of the container's image.
     * @return $this
     */
    public function setImageId($image_id)
    {
        $this->container['image_id'] = $image_id;

        return $this;
    }

    /**
     * Gets last_state
     * @return \UniversityOfAdelaide\OpenShift\Model\V1ContainerState
     */
    public function getLastState()
    {
        return $this->container['last_state'];
    }

    /**
     * Sets last_state
     * @param \UniversityOfAdelaide\OpenShift\Model\V1ContainerState $last_state Details about the container's last termination condition.
     * @return $this
     */
    public function setLastState($last_state)
    {
        $this->container['last_state'] = $last_state;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name This must be a DNS_LABEL. Each container in a pod must have a unique name. Cannot be updated.
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets ready
     * @return bool
     */
    public function getReady()
    {
        return $this->container['ready'];
    }

    /**
     * Sets ready
     * @param bool $ready Specifies whether the container has passed its readiness probe.
     * @return $this
     */
    public function setReady($ready)
    {
        $this->container['ready'] = $ready;

        return $this;
    }

    /**
     * Gets restart_count
     * @return int
     */
    public function getRestartCount()
    {
        return $this->container['restart_count'];
    }

    /**
     * Sets restart_count
     * @param int $restart_count The number of times the container has been restarted, currently based on the number of dead containers that have not yet been removed. Note that this is calculated from dead containers. But those containers are subject to garbage collection. This value will get capped at 5 by GC.
     * @return $this
     */
    public function setRestartCount($restart_count)
    {
        $this->container['restart_count'] = $restart_count;

        return $this;
    }

    /**
     * Gets state
     * @return \UniversityOfAdelaide\OpenShift\Model\V1ContainerState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param \UniversityOfAdelaide\OpenShift\Model\V1ContainerState $state Details about the container's current condition.
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

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


