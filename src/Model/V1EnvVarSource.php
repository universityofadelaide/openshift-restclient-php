<?php
/**
 * V1EnvVarSource
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
 * V1EnvVarSource Class Doc Comment
 *
 * @category    Class
 * @description EnvVarSource represents a source for the value of an EnvVar.
 * @package     UniversityOfAdelaide\OpenShift
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class V1EnvVarSource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'v1.EnvVarSource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'config_map_key_ref' => '\UniversityOfAdelaide\OpenShift\Model\V1ConfigMapKeySelector',
        'field_ref' => '\UniversityOfAdelaide\OpenShift\Model\V1ObjectFieldSelector',
        'resource_field_ref' => '\UniversityOfAdelaide\OpenShift\Model\V1ResourceFieldSelector',
        'secret_key_ref' => '\UniversityOfAdelaide\OpenShift\Model\V1SecretKeySelector'
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
        'config_map_key_ref' => 'configMapKeyRef',
        'field_ref' => 'fieldRef',
        'resource_field_ref' => 'resourceFieldRef',
        'secret_key_ref' => 'secretKeyRef'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'config_map_key_ref' => 'setConfigMapKeyRef',
        'field_ref' => 'setFieldRef',
        'resource_field_ref' => 'setResourceFieldRef',
        'secret_key_ref' => 'setSecretKeyRef'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'config_map_key_ref' => 'getConfigMapKeyRef',
        'field_ref' => 'getFieldRef',
        'resource_field_ref' => 'getResourceFieldRef',
        'secret_key_ref' => 'getSecretKeyRef'
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
        $this->container['config_map_key_ref'] = isset($data['config_map_key_ref']) ? $data['config_map_key_ref'] : null;
        $this->container['field_ref'] = isset($data['field_ref']) ? $data['field_ref'] : null;
        $this->container['resource_field_ref'] = isset($data['resource_field_ref']) ? $data['resource_field_ref'] : null;
        $this->container['secret_key_ref'] = isset($data['secret_key_ref']) ? $data['secret_key_ref'] : null;
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
     * Gets config_map_key_ref
     * @return \UniversityOfAdelaide\OpenShift\Model\V1ConfigMapKeySelector
     */
    public function getConfigMapKeyRef()
    {
        return $this->container['config_map_key_ref'];
    }

    /**
     * Sets config_map_key_ref
     * @param \UniversityOfAdelaide\OpenShift\Model\V1ConfigMapKeySelector $config_map_key_ref Selects a key of a ConfigMap.
     * @return $this
     */
    public function setConfigMapKeyRef($config_map_key_ref)
    {
        $this->container['config_map_key_ref'] = $config_map_key_ref;

        return $this;
    }

    /**
     * Gets field_ref
     * @return \UniversityOfAdelaide\OpenShift\Model\V1ObjectFieldSelector
     */
    public function getFieldRef()
    {
        return $this->container['field_ref'];
    }

    /**
     * Sets field_ref
     * @param \UniversityOfAdelaide\OpenShift\Model\V1ObjectFieldSelector $field_ref Selects a field of the pod: supports metadata.name, metadata.namespace, metadata.labels, metadata.annotations, spec.nodeName, spec.serviceAccountName, status.podIP.
     * @return $this
     */
    public function setFieldRef($field_ref)
    {
        $this->container['field_ref'] = $field_ref;

        return $this;
    }

    /**
     * Gets resource_field_ref
     * @return \UniversityOfAdelaide\OpenShift\Model\V1ResourceFieldSelector
     */
    public function getResourceFieldRef()
    {
        return $this->container['resource_field_ref'];
    }

    /**
     * Sets resource_field_ref
     * @param \UniversityOfAdelaide\OpenShift\Model\V1ResourceFieldSelector $resource_field_ref Selects a resource of the container: only resources limits and requests (limits.cpu, limits.memory, requests.cpu and requests.memory) are currently supported.
     * @return $this
     */
    public function setResourceFieldRef($resource_field_ref)
    {
        $this->container['resource_field_ref'] = $resource_field_ref;

        return $this;
    }

    /**
     * Gets secret_key_ref
     * @return \UniversityOfAdelaide\OpenShift\Model\V1SecretKeySelector
     */
    public function getSecretKeyRef()
    {
        return $this->container['secret_key_ref'];
    }

    /**
     * Sets secret_key_ref
     * @param \UniversityOfAdelaide\OpenShift\Model\V1SecretKeySelector $secret_key_ref Selects a key of a secret in the pod's namespace
     * @return $this
     */
    public function setSecretKeyRef($secret_key_ref)
    {
        $this->container['secret_key_ref'] = $secret_key_ref;

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

