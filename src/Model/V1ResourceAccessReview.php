<?php
/**
 * V1ResourceAccessReview
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
 * V1ResourceAccessReview Class Doc Comment
 *
 * @category    Class
 * @description ResourceAccessReview is a means to request a list of which users and groups are authorized to perform the action specified by spec
 * @package     UniversityOfAdelaide\OpenShift
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class V1ResourceAccessReview implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'v1.ResourceAccessReview';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'api_version' => 'string',
        'content' => '\UniversityOfAdelaide\OpenShift\Model\RuntimeRawExtension',
        'is_non_resource_url' => 'bool',
        'kind' => 'string',
        'namespace' => 'string',
        'path' => 'string',
        'resource' => 'string',
        'resource_api_group' => 'string',
        'resource_api_version' => 'string',
        'resource_name' => 'string',
        'verb' => 'string'
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
        'api_version' => 'apiVersion',
        'content' => 'content',
        'is_non_resource_url' => 'isNonResourceURL',
        'kind' => 'kind',
        'namespace' => 'namespace',
        'path' => 'path',
        'resource' => 'resource',
        'resource_api_group' => 'resourceAPIGroup',
        'resource_api_version' => 'resourceAPIVersion',
        'resource_name' => 'resourceName',
        'verb' => 'verb'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'api_version' => 'setApiVersion',
        'content' => 'setContent',
        'is_non_resource_url' => 'setIsNonResourceUrl',
        'kind' => 'setKind',
        'namespace' => 'setNamespace',
        'path' => 'setPath',
        'resource' => 'setResource',
        'resource_api_group' => 'setResourceApiGroup',
        'resource_api_version' => 'setResourceApiVersion',
        'resource_name' => 'setResourceName',
        'verb' => 'setVerb'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'api_version' => 'getApiVersion',
        'content' => 'getContent',
        'is_non_resource_url' => 'getIsNonResourceUrl',
        'kind' => 'getKind',
        'namespace' => 'getNamespace',
        'path' => 'getPath',
        'resource' => 'getResource',
        'resource_api_group' => 'getResourceApiGroup',
        'resource_api_version' => 'getResourceApiVersion',
        'resource_name' => 'getResourceName',
        'verb' => 'getVerb'
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
        $this->container['api_version'] = isset($data['api_version']) ? $data['api_version'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['is_non_resource_url'] = isset($data['is_non_resource_url']) ? $data['is_non_resource_url'] : null;
        $this->container['kind'] = isset($data['kind']) ? $data['kind'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['resource'] = isset($data['resource']) ? $data['resource'] : null;
        $this->container['resource_api_group'] = isset($data['resource_api_group']) ? $data['resource_api_group'] : null;
        $this->container['resource_api_version'] = isset($data['resource_api_version']) ? $data['resource_api_version'] : null;
        $this->container['resource_name'] = isset($data['resource_name']) ? $data['resource_name'] : null;
        $this->container['verb'] = isset($data['verb']) ? $data['verb'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['is_non_resource_url'] === null) {
            $invalid_properties[] = "'is_non_resource_url' can't be null";
        }
        if ($this->container['namespace'] === null) {
            $invalid_properties[] = "'namespace' can't be null";
        }
        if ($this->container['path'] === null) {
            $invalid_properties[] = "'path' can't be null";
        }
        if ($this->container['resource'] === null) {
            $invalid_properties[] = "'resource' can't be null";
        }
        if ($this->container['resource_api_group'] === null) {
            $invalid_properties[] = "'resource_api_group' can't be null";
        }
        if ($this->container['resource_api_version'] === null) {
            $invalid_properties[] = "'resource_api_version' can't be null";
        }
        if ($this->container['resource_name'] === null) {
            $invalid_properties[] = "'resource_name' can't be null";
        }
        if ($this->container['verb'] === null) {
            $invalid_properties[] = "'verb' can't be null";
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

        if ($this->container['is_non_resource_url'] === null) {
            return false;
        }
        if ($this->container['namespace'] === null) {
            return false;
        }
        if ($this->container['path'] === null) {
            return false;
        }
        if ($this->container['resource'] === null) {
            return false;
        }
        if ($this->container['resource_api_group'] === null) {
            return false;
        }
        if ($this->container['resource_api_version'] === null) {
            return false;
        }
        if ($this->container['resource_name'] === null) {
            return false;
        }
        if ($this->container['verb'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets api_version
     * @return string
     */
    public function getApiVersion()
    {
        return $this->container['api_version'];
    }

    /**
     * Sets api_version
     * @param string $api_version APIVersion defines the versioned schema of this representation of an object. Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#resources
     * @return $this
     */
    public function setApiVersion($api_version)
    {
        $this->container['api_version'] = $api_version;

        return $this;
    }

    /**
     * Gets content
     * @return \UniversityOfAdelaide\OpenShift\Model\RuntimeRawExtension
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     * @param \UniversityOfAdelaide\OpenShift\Model\RuntimeRawExtension $content Content is the actual content of the request for create and update
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets is_non_resource_url
     * @return bool
     */
    public function getIsNonResourceUrl()
    {
        return $this->container['is_non_resource_url'];
    }

    /**
     * Sets is_non_resource_url
     * @param bool $is_non_resource_url IsNonResourceURL is true if this is a request for a non-resource URL (outside of the resource hieraarchy)
     * @return $this
     */
    public function setIsNonResourceUrl($is_non_resource_url)
    {
        $this->container['is_non_resource_url'] = $is_non_resource_url;

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
     * Gets namespace
     * @return string
     */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
     * Sets namespace
     * @param string $namespace Namespace is the namespace of the action being requested.  Currently, there is no distinction between no namespace and all namespaces
     * @return $this
     */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;

        return $this;
    }

    /**
     * Gets path
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     * @param string $path Path is the path of a non resource URL
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets resource
     * @return string
     */
    public function getResource()
    {
        return $this->container['resource'];
    }

    /**
     * Sets resource
     * @param string $resource Resource is one of the existing resource types
     * @return $this
     */
    public function setResource($resource)
    {
        $this->container['resource'] = $resource;

        return $this;
    }

    /**
     * Gets resource_api_group
     * @return string
     */
    public function getResourceApiGroup()
    {
        return $this->container['resource_api_group'];
    }

    /**
     * Sets resource_api_group
     * @param string $resource_api_group Group is the API group of the resource Serialized as resourceAPIGroup to avoid confusion with the 'groups' field when inlined
     * @return $this
     */
    public function setResourceApiGroup($resource_api_group)
    {
        $this->container['resource_api_group'] = $resource_api_group;

        return $this;
    }

    /**
     * Gets resource_api_version
     * @return string
     */
    public function getResourceApiVersion()
    {
        return $this->container['resource_api_version'];
    }

    /**
     * Sets resource_api_version
     * @param string $resource_api_version Version is the API version of the resource Serialized as resourceAPIVersion to avoid confusion with TypeMeta.apiVersion and ObjectMeta.resourceVersion when inlined
     * @return $this
     */
    public function setResourceApiVersion($resource_api_version)
    {
        $this->container['resource_api_version'] = $resource_api_version;

        return $this;
    }

    /**
     * Gets resource_name
     * @return string
     */
    public function getResourceName()
    {
        return $this->container['resource_name'];
    }

    /**
     * Sets resource_name
     * @param string $resource_name ResourceName is the name of the resource being requested for a \"get\" or deleted for a \"delete\"
     * @return $this
     */
    public function setResourceName($resource_name)
    {
        $this->container['resource_name'] = $resource_name;

        return $this;
    }

    /**
     * Gets verb
     * @return string
     */
    public function getVerb()
    {
        return $this->container['verb'];
    }

    /**
     * Sets verb
     * @param string $verb Verb is one of: get, list, watch, create, update, delete
     * @return $this
     */
    public function setVerb($verb)
    {
        $this->container['verb'] = $verb;

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

