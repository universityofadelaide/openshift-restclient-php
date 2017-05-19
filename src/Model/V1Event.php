<?php
/**
 * V1Event
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
 * V1Event Class Doc Comment
 *
 * @category    Class
 * @description Event is a report of an event somewhere in the cluster.
 * @package     UniversityOfAdelaide\OpenShift
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class V1Event implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'v1.Event';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'apiVersion' => 'string',
        'count' => 'int',
        'firstTimestamp' => '\UniversityOfAdelaide\OpenShift\Model\V1Time',
        'involvedObject' => '\UniversityOfAdelaide\OpenShift\Model\V1ObjectReference',
        'kind' => 'string',
        'lastTimestamp' => '\UniversityOfAdelaide\OpenShift\Model\V1Time',
        'message' => 'string',
        'metadata' => '\UniversityOfAdelaide\OpenShift\Model\V1ObjectMeta',
        'reason' => 'string',
        'source' => '\UniversityOfAdelaide\OpenShift\Model\V1EventSource',
        'type' => 'string'
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
        'apiVersion' => 'apiVersion',
        'count' => 'count',
        'firstTimestamp' => 'firstTimestamp',
        'involvedObject' => 'involvedObject',
        'kind' => 'kind',
        'lastTimestamp' => 'lastTimestamp',
        'message' => 'message',
        'metadata' => 'metadata',
        'reason' => 'reason',
        'source' => 'source',
        'type' => 'type'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'apiVersion' => 'setApiVersion',
        'count' => 'setCount',
        'firstTimestamp' => 'setFirstTimestamp',
        'involvedObject' => 'setInvolvedObject',
        'kind' => 'setKind',
        'lastTimestamp' => 'setLastTimestamp',
        'message' => 'setMessage',
        'metadata' => 'setMetadata',
        'reason' => 'setReason',
        'source' => 'setSource',
        'type' => 'setType'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'apiVersion' => 'getApiVersion',
        'count' => 'getCount',
        'firstTimestamp' => 'getFirstTimestamp',
        'involvedObject' => 'getInvolvedObject',
        'kind' => 'getKind',
        'lastTimestamp' => 'getLastTimestamp',
        'message' => 'getMessage',
        'metadata' => 'getMetadata',
        'reason' => 'getReason',
        'source' => 'getSource',
        'type' => 'getType'
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
        $this->container['apiVersion'] = isset($data['apiVersion']) ? $data['apiVersion'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['firstTimestamp'] = isset($data['firstTimestamp']) ? $data['firstTimestamp'] : null;
        $this->container['involvedObject'] = isset($data['involvedObject']) ? $data['involvedObject'] : null;
        $this->container['kind'] = isset($data['kind']) ? $data['kind'] : null;
        $this->container['lastTimestamp'] = isset($data['lastTimestamp']) ? $data['lastTimestamp'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['involvedObject'] === null) {
            $invalid_properties[] = "'involvedObject' can't be null";
        }
        if ($this->container['metadata'] === null) {
            $invalid_properties[] = "'metadata' can't be null";
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

        if ($this->container['involvedObject'] === null) {
            return false;
        }
        if ($this->container['metadata'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets apiVersion
     * @return string
     */
    public function getApiVersion()
    {
        return $this->container['apiVersion'];
    }

    /**
     * Sets apiVersion
     * @param string $apiVersion APIVersion defines the versioned schema of this representation of an object. Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#resources
     * @return $this
     */
    public function setApiVersion($apiVersion)
    {
        $this->container['apiVersion'] = $apiVersion;

        return $this;
    }

    /**
     * Gets count
     * @return int
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     * @param int $count The number of times this event has occurred.
     * @return $this
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets firstTimestamp
     * @return \UniversityOfAdelaide\OpenShift\Model\V1Time
     */
    public function getFirstTimestamp()
    {
        return $this->container['firstTimestamp'];
    }

    /**
     * Sets firstTimestamp
     * @param \UniversityOfAdelaide\OpenShift\Model\V1Time $firstTimestamp The time at which the event was first recorded. (Time of server receipt is in TypeMeta.)
     * @return $this
     */
    public function setFirstTimestamp($firstTimestamp)
    {
        $this->container['firstTimestamp'] = $firstTimestamp;

        return $this;
    }

    /**
     * Gets involvedObject
     * @return \UniversityOfAdelaide\OpenShift\Model\V1ObjectReference
     */
    public function getInvolvedObject()
    {
        return $this->container['involvedObject'];
    }

    /**
     * Sets involvedObject
     * @param \UniversityOfAdelaide\OpenShift\Model\V1ObjectReference $involvedObject The object that this event is about.
     * @return $this
     */
    public function setInvolvedObject($involvedObject)
    {
        $this->container['involvedObject'] = $involvedObject;

        return $this;
    }

    /**
     * Gets kind
     * @return string
     */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
     * Sets kind
     * @param string $kind Kind is a string value representing the REST resource this object represents. Servers may infer this from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#types-kinds
     * @return $this
     */
    public function setKind($kind)
    {
        $this->container['kind'] = $kind;

        return $this;
    }

    /**
     * Gets lastTimestamp
     * @return \UniversityOfAdelaide\OpenShift\Model\V1Time
     */
    public function getLastTimestamp()
    {
        return $this->container['lastTimestamp'];
    }

    /**
     * Sets lastTimestamp
     * @param \UniversityOfAdelaide\OpenShift\Model\V1Time $lastTimestamp The time at which the most recent occurrence of this event was recorded.
     * @return $this
     */
    public function setLastTimestamp($lastTimestamp)
    {
        $this->container['lastTimestamp'] = $lastTimestamp;

        return $this;
    }

    /**
     * Gets message
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     * @param string $message A human-readable description of the status of this operation.
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets metadata
     * @return \UniversityOfAdelaide\OpenShift\Model\V1ObjectMeta
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     * @param \UniversityOfAdelaide\OpenShift\Model\V1ObjectMeta $metadata Standard object's metadata. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#metadata
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets reason
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     * @param string $reason This should be a short, machine understandable string that gives the reason for the transition into the object's current status.
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets source
     * @return \UniversityOfAdelaide\OpenShift\Model\V1EventSource
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     * @param \UniversityOfAdelaide\OpenShift\Model\V1EventSource $source The component reporting this event. Should be a short machine understandable string.
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type Type of this event (Normal, Warning), new types could be added in the future
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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


