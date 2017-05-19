<?php
/**
 * V2alpha1CronJobSpec
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
 * V2alpha1CronJobSpec Class Doc Comment
 *
 * @category    Class
 * @description CronJobSpec describes how the job execution will look like and when it will actually run.
 * @package     UniversityOfAdelaide\OpenShift
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class V2alpha1CronJobSpec implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'v2alpha1.CronJobSpec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'concurrencyPolicy' => 'string',
        'failedJobsHistoryLimit' => 'int',
        'jobTemplate' => '\UniversityOfAdelaide\OpenShift\Model\V2alpha1JobTemplateSpec',
        'schedule' => 'string',
        'startingDeadlineSeconds' => 'int',
        'successfulJobsHistoryLimit' => 'int',
        'suspend' => 'bool'
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
        'concurrencyPolicy' => 'concurrencyPolicy',
        'failedJobsHistoryLimit' => 'failedJobsHistoryLimit',
        'jobTemplate' => 'jobTemplate',
        'schedule' => 'schedule',
        'startingDeadlineSeconds' => 'startingDeadlineSeconds',
        'successfulJobsHistoryLimit' => 'successfulJobsHistoryLimit',
        'suspend' => 'suspend'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'concurrencyPolicy' => 'setConcurrencyPolicy',
        'failedJobsHistoryLimit' => 'setFailedJobsHistoryLimit',
        'jobTemplate' => 'setJobTemplate',
        'schedule' => 'setSchedule',
        'startingDeadlineSeconds' => 'setStartingDeadlineSeconds',
        'successfulJobsHistoryLimit' => 'setSuccessfulJobsHistoryLimit',
        'suspend' => 'setSuspend'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'concurrencyPolicy' => 'getConcurrencyPolicy',
        'failedJobsHistoryLimit' => 'getFailedJobsHistoryLimit',
        'jobTemplate' => 'getJobTemplate',
        'schedule' => 'getSchedule',
        'startingDeadlineSeconds' => 'getStartingDeadlineSeconds',
        'successfulJobsHistoryLimit' => 'getSuccessfulJobsHistoryLimit',
        'suspend' => 'getSuspend'
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
        $this->container['concurrencyPolicy'] = isset($data['concurrencyPolicy']) ? $data['concurrencyPolicy'] : null;
        $this->container['failedJobsHistoryLimit'] = isset($data['failedJobsHistoryLimit']) ? $data['failedJobsHistoryLimit'] : null;
        $this->container['jobTemplate'] = isset($data['jobTemplate']) ? $data['jobTemplate'] : null;
        $this->container['schedule'] = isset($data['schedule']) ? $data['schedule'] : null;
        $this->container['startingDeadlineSeconds'] = isset($data['startingDeadlineSeconds']) ? $data['startingDeadlineSeconds'] : null;
        $this->container['successfulJobsHistoryLimit'] = isset($data['successfulJobsHistoryLimit']) ? $data['successfulJobsHistoryLimit'] : null;
        $this->container['suspend'] = isset($data['suspend']) ? $data['suspend'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['jobTemplate'] === null) {
            $invalid_properties[] = "'jobTemplate' can't be null";
        }
        if ($this->container['schedule'] === null) {
            $invalid_properties[] = "'schedule' can't be null";
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

        if ($this->container['jobTemplate'] === null) {
            return false;
        }
        if ($this->container['schedule'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets concurrencyPolicy
     * @return string
     */
    public function getConcurrencyPolicy()
    {
        return $this->container['concurrencyPolicy'];
    }

    /**
     * Sets concurrencyPolicy
     * @param string $concurrencyPolicy ConcurrencyPolicy specifies how to treat concurrent executions of a Job.
     * @return $this
     */
    public function setConcurrencyPolicy($concurrencyPolicy)
    {
        $this->container['concurrencyPolicy'] = $concurrencyPolicy;

        return $this;
    }

    /**
     * Gets failedJobsHistoryLimit
     * @return int
     */
    public function getFailedJobsHistoryLimit()
    {
        return $this->container['failedJobsHistoryLimit'];
    }

    /**
     * Sets failedJobsHistoryLimit
     * @param int $failedJobsHistoryLimit The number of failed finished jobs to retain. This is a pointer to distinguish between explicit zero and not specified.
     * @return $this
     */
    public function setFailedJobsHistoryLimit($failedJobsHistoryLimit)
    {
        $this->container['failedJobsHistoryLimit'] = $failedJobsHistoryLimit;

        return $this;
    }

    /**
     * Gets jobTemplate
     * @return \UniversityOfAdelaide\OpenShift\Model\V2alpha1JobTemplateSpec
     */
    public function getJobTemplate()
    {
        return $this->container['jobTemplate'];
    }

    /**
     * Sets jobTemplate
     * @param \UniversityOfAdelaide\OpenShift\Model\V2alpha1JobTemplateSpec $jobTemplate JobTemplate is the object that describes the job that will be created when executing a CronJob.
     * @return $this
     */
    public function setJobTemplate($jobTemplate)
    {
        $this->container['jobTemplate'] = $jobTemplate;

        return $this;
    }

    /**
     * Gets schedule
     * @return string
     */
    public function getSchedule()
    {
        return $this->container['schedule'];
    }

    /**
     * Sets schedule
     * @param string $schedule Schedule contains the schedule in Cron format, see https://en.wikipedia.org/wiki/Cron.
     * @return $this
     */
    public function setSchedule($schedule)
    {
        $this->container['schedule'] = $schedule;

        return $this;
    }

    /**
     * Gets startingDeadlineSeconds
     * @return int
     */
    public function getStartingDeadlineSeconds()
    {
        return $this->container['startingDeadlineSeconds'];
    }

    /**
     * Sets startingDeadlineSeconds
     * @param int $startingDeadlineSeconds Optional deadline in seconds for starting the job if it misses scheduled time for any reason.  Missed jobs executions will be counted as failed ones.
     * @return $this
     */
    public function setStartingDeadlineSeconds($startingDeadlineSeconds)
    {
        $this->container['startingDeadlineSeconds'] = $startingDeadlineSeconds;

        return $this;
    }

    /**
     * Gets successfulJobsHistoryLimit
     * @return int
     */
    public function getSuccessfulJobsHistoryLimit()
    {
        return $this->container['successfulJobsHistoryLimit'];
    }

    /**
     * Sets successfulJobsHistoryLimit
     * @param int $successfulJobsHistoryLimit The number of successful finished jobs to retain. This is a pointer to distinguish between explicit zero and not specified.
     * @return $this
     */
    public function setSuccessfulJobsHistoryLimit($successfulJobsHistoryLimit)
    {
        $this->container['successfulJobsHistoryLimit'] = $successfulJobsHistoryLimit;

        return $this;
    }

    /**
     * Gets suspend
     * @return bool
     */
    public function getSuspend()
    {
        return $this->container['suspend'];
    }

    /**
     * Sets suspend
     * @param bool $suspend Suspend flag tells the controller to suspend subsequent executions, it does not apply to already started executions.  Defaults to false.
     * @return $this
     */
    public function setSuspend($suspend)
    {
        $this->container['suspend'] = $suspend;

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


