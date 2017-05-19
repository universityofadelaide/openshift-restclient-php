<?php
/**
 * V1PodStatus
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
 * V1PodStatus Class Doc Comment
 *
 * @category    Class
 * @description PodStatus represents information about the status of a pod. Status may trail the actual state of a system.
 * @package     UniversityOfAdelaide\OpenShift
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class V1PodStatus implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'v1.PodStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'conditions' => '\UniversityOfAdelaide\OpenShift\Model\V1PodCondition[]',
        'containerStatuses' => '\UniversityOfAdelaide\OpenShift\Model\V1ContainerStatus[]',
        'hostIP' => 'string',
        'initContainerStatuses' => '\UniversityOfAdelaide\OpenShift\Model\V1ContainerStatus[]',
        'message' => 'string',
        'phase' => 'string',
        'podIP' => 'string',
        'qosClass' => 'string',
        'reason' => 'string',
        'startTime' => '\UniversityOfAdelaide\OpenShift\Model\V1Time'
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
        'conditions' => 'conditions',
        'containerStatuses' => 'containerStatuses',
        'hostIP' => 'hostIP',
        'initContainerStatuses' => 'initContainerStatuses',
        'message' => 'message',
        'phase' => 'phase',
        'podIP' => 'podIP',
        'qosClass' => 'qosClass',
        'reason' => 'reason',
        'startTime' => 'startTime'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'conditions' => 'setConditions',
        'containerStatuses' => 'setContainerStatuses',
        'hostIP' => 'setHostIP',
        'initContainerStatuses' => 'setInitContainerStatuses',
        'message' => 'setMessage',
        'phase' => 'setPhase',
        'podIP' => 'setPodIP',
        'qosClass' => 'setQosClass',
        'reason' => 'setReason',
        'startTime' => 'setStartTime'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'conditions' => 'getConditions',
        'containerStatuses' => 'getContainerStatuses',
        'hostIP' => 'getHostIP',
        'initContainerStatuses' => 'getInitContainerStatuses',
        'message' => 'getMessage',
        'phase' => 'getPhase',
        'podIP' => 'getPodIP',
        'qosClass' => 'getQosClass',
        'reason' => 'getReason',
        'startTime' => 'getStartTime'
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
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['containerStatuses'] = isset($data['containerStatuses']) ? $data['containerStatuses'] : null;
        $this->container['hostIP'] = isset($data['hostIP']) ? $data['hostIP'] : null;
        $this->container['initContainerStatuses'] = isset($data['initContainerStatuses']) ? $data['initContainerStatuses'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['phase'] = isset($data['phase']) ? $data['phase'] : null;
        $this->container['podIP'] = isset($data['podIP']) ? $data['podIP'] : null;
        $this->container['qosClass'] = isset($data['qosClass']) ? $data['qosClass'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
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
     * Gets conditions
     * @return \UniversityOfAdelaide\OpenShift\Model\V1PodCondition[]
     */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
     * Sets conditions
     * @param \UniversityOfAdelaide\OpenShift\Model\V1PodCondition[] $conditions Current service state of pod. More info: http://kubernetes.io/docs/user-guide/pod-states#pod-conditions
     * @return $this
     */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;

        return $this;
    }

    /**
     * Gets containerStatuses
     * @return \UniversityOfAdelaide\OpenShift\Model\V1ContainerStatus[]
     */
    public function getContainerStatuses()
    {
        return $this->container['containerStatuses'];
    }

    /**
     * Sets containerStatuses
     * @param \UniversityOfAdelaide\OpenShift\Model\V1ContainerStatus[] $containerStatuses The list has one entry per container in the manifest. Each entry is currently the output of `docker inspect`. More info: http://kubernetes.io/docs/user-guide/pod-states#container-statuses
     * @return $this
     */
    public function setContainerStatuses($containerStatuses)
    {
        $this->container['containerStatuses'] = $containerStatuses;

        return $this;
    }

    /**
     * Gets hostIP
     * @return string
     */
    public function getHostIP()
    {
        return $this->container['hostIP'];
    }

    /**
     * Sets hostIP
     * @param string $hostIP IP address of the host to which the pod is assigned. Empty if not yet scheduled.
     * @return $this
     */
    public function setHostIP($hostIP)
    {
        $this->container['hostIP'] = $hostIP;

        return $this;
    }

    /**
     * Gets initContainerStatuses
     * @return \UniversityOfAdelaide\OpenShift\Model\V1ContainerStatus[]
     */
    public function getInitContainerStatuses()
    {
        return $this->container['initContainerStatuses'];
    }

    /**
     * Sets initContainerStatuses
     * @param \UniversityOfAdelaide\OpenShift\Model\V1ContainerStatus[] $initContainerStatuses The list has one entry per init container in the manifest. The most recent successful init container will have ready = true, the most recently started container will have startTime set. More info: http://kubernetes.io/docs/user-guide/pod-states#container-statuses
     * @return $this
     */
    public function setInitContainerStatuses($initContainerStatuses)
    {
        $this->container['initContainerStatuses'] = $initContainerStatuses;

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
     * @param string $message A human readable message indicating details about why the pod is in this condition.
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets phase
     * @return string
     */
    public function getPhase()
    {
        return $this->container['phase'];
    }

    /**
     * Sets phase
     * @param string $phase Current condition of the pod. More info: http://kubernetes.io/docs/user-guide/pod-states#pod-phase
     * @return $this
     */
    public function setPhase($phase)
    {
        $this->container['phase'] = $phase;

        return $this;
    }

    /**
     * Gets podIP
     * @return string
     */
    public function getPodIP()
    {
        return $this->container['podIP'];
    }

    /**
     * Sets podIP
     * @param string $podIP IP address allocated to the pod. Routable at least within the cluster. Empty if not yet allocated.
     * @return $this
     */
    public function setPodIP($podIP)
    {
        $this->container['podIP'] = $podIP;

        return $this;
    }

    /**
     * Gets qosClass
     * @return string
     */
    public function getQosClass()
    {
        return $this->container['qosClass'];
    }

    /**
     * Sets qosClass
     * @param string $qosClass The Quality of Service (QOS) classification assigned to the pod based on resource requirements See PodQOSClass type for available QOS classes More info: https://github.com/kubernetes/kubernetes/blob/master/docs/design/resource-qos.md
     * @return $this
     */
    public function setQosClass($qosClass)
    {
        $this->container['qosClass'] = $qosClass;

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
     * @param string $reason A brief CamelCase message indicating details about why the pod is in this state. e.g. 'OutOfDisk'
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets startTime
     * @return \UniversityOfAdelaide\OpenShift\Model\V1Time
     */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
     * Sets startTime
     * @param \UniversityOfAdelaide\OpenShift\Model\V1Time $startTime RFC 3339 date and time at which the object was acknowledged by the Kubelet. This is before the Kubelet pulled the container image(s) for the pod.
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;

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


