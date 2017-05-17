<?php
/**
 * V1DeploymentConfigRollbackSpec
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
 * V1DeploymentConfigRollbackSpec Class Doc Comment
 *
 * @category    Class
 * @description DeploymentConfigRollbackSpec represents the options for rollback generation.
 * @package     UniversityOfAdelaide\OpenShift
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class V1DeploymentConfigRollbackSpec implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'v1.DeploymentConfigRollbackSpec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'from' => '\UniversityOfAdelaide\OpenShift\Model\V1ObjectReference',
        'include_replication_meta' => 'bool',
        'include_strategy' => 'bool',
        'include_template' => 'bool',
        'include_triggers' => 'bool',
        'revision' => 'int'
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
        'from' => 'from',
        'include_replication_meta' => 'includeReplicationMeta',
        'include_strategy' => 'includeStrategy',
        'include_template' => 'includeTemplate',
        'include_triggers' => 'includeTriggers',
        'revision' => 'revision'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'from' => 'setFrom',
        'include_replication_meta' => 'setIncludeReplicationMeta',
        'include_strategy' => 'setIncludeStrategy',
        'include_template' => 'setIncludeTemplate',
        'include_triggers' => 'setIncludeTriggers',
        'revision' => 'setRevision'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'from' => 'getFrom',
        'include_replication_meta' => 'getIncludeReplicationMeta',
        'include_strategy' => 'getIncludeStrategy',
        'include_template' => 'getIncludeTemplate',
        'include_triggers' => 'getIncludeTriggers',
        'revision' => 'getRevision'
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
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['include_replication_meta'] = isset($data['include_replication_meta']) ? $data['include_replication_meta'] : null;
        $this->container['include_strategy'] = isset($data['include_strategy']) ? $data['include_strategy'] : null;
        $this->container['include_template'] = isset($data['include_template']) ? $data['include_template'] : null;
        $this->container['include_triggers'] = isset($data['include_triggers']) ? $data['include_triggers'] : null;
        $this->container['revision'] = isset($data['revision']) ? $data['revision'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['from'] === null) {
            $invalid_properties[] = "'from' can't be null";
        }
        if ($this->container['include_replication_meta'] === null) {
            $invalid_properties[] = "'include_replication_meta' can't be null";
        }
        if ($this->container['include_strategy'] === null) {
            $invalid_properties[] = "'include_strategy' can't be null";
        }
        if ($this->container['include_template'] === null) {
            $invalid_properties[] = "'include_template' can't be null";
        }
        if ($this->container['include_triggers'] === null) {
            $invalid_properties[] = "'include_triggers' can't be null";
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

        if ($this->container['from'] === null) {
            return false;
        }
        if ($this->container['include_replication_meta'] === null) {
            return false;
        }
        if ($this->container['include_strategy'] === null) {
            return false;
        }
        if ($this->container['include_template'] === null) {
            return false;
        }
        if ($this->container['include_triggers'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets from
     * @return \UniversityOfAdelaide\OpenShift\Model\V1ObjectReference
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     * @param \UniversityOfAdelaide\OpenShift\Model\V1ObjectReference $from From points to a ReplicationController which is a deployment.
     * @return $this
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets include_replication_meta
     * @return bool
     */
    public function getIncludeReplicationMeta()
    {
        return $this->container['include_replication_meta'];
    }

    /**
     * Sets include_replication_meta
     * @param bool $include_replication_meta IncludeReplicationMeta specifies whether to include the replica count and selector.
     * @return $this
     */
    public function setIncludeReplicationMeta($include_replication_meta)
    {
        $this->container['include_replication_meta'] = $include_replication_meta;

        return $this;
    }

    /**
     * Gets include_strategy
     * @return bool
     */
    public function getIncludeStrategy()
    {
        return $this->container['include_strategy'];
    }

    /**
     * Sets include_strategy
     * @param bool $include_strategy IncludeStrategy specifies whether to include the deployment Strategy.
     * @return $this
     */
    public function setIncludeStrategy($include_strategy)
    {
        $this->container['include_strategy'] = $include_strategy;

        return $this;
    }

    /**
     * Gets include_template
     * @return bool
     */
    public function getIncludeTemplate()
    {
        return $this->container['include_template'];
    }

    /**
     * Sets include_template
     * @param bool $include_template IncludeTemplate specifies whether to include the PodTemplateSpec.
     * @return $this
     */
    public function setIncludeTemplate($include_template)
    {
        $this->container['include_template'] = $include_template;

        return $this;
    }

    /**
     * Gets include_triggers
     * @return bool
     */
    public function getIncludeTriggers()
    {
        return $this->container['include_triggers'];
    }

    /**
     * Sets include_triggers
     * @param bool $include_triggers IncludeTriggers specifies whether to include config Triggers.
     * @return $this
     */
    public function setIncludeTriggers($include_triggers)
    {
        $this->container['include_triggers'] = $include_triggers;

        return $this;
    }

    /**
     * Gets revision
     * @return int
     */
    public function getRevision()
    {
        return $this->container['revision'];
    }

    /**
     * Sets revision
     * @param int $revision Revision to rollback to. If set to 0, rollback to the last revision.
     * @return $this
     */
    public function setRevision($revision)
    {
        $this->container['revision'] = $revision;

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

