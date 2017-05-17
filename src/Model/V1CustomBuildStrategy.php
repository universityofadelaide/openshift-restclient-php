<?php
/**
 * V1CustomBuildStrategy
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
 * V1CustomBuildStrategy Class Doc Comment
 *
 * @category    Class
 * @description CustomBuildStrategy defines input parameters specific to Custom build.
 * @package     UniversityOfAdelaide\OpenShift
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class V1CustomBuildStrategy implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'v1.CustomBuildStrategy';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'build_api_version' => 'string',
        'env' => '\UniversityOfAdelaide\OpenShift\Model\V1EnvVar[]',
        'expose_docker_socket' => 'bool',
        'force_pull' => 'bool',
        'from' => '\UniversityOfAdelaide\OpenShift\Model\V1ObjectReference',
        'pull_secret' => '\UniversityOfAdelaide\OpenShift\Model\V1LocalObjectReference',
        'secrets' => '\UniversityOfAdelaide\OpenShift\Model\V1SecretSpec[]'
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
        'build_api_version' => 'buildAPIVersion',
        'env' => 'env',
        'expose_docker_socket' => 'exposeDockerSocket',
        'force_pull' => 'forcePull',
        'from' => 'from',
        'pull_secret' => 'pullSecret',
        'secrets' => 'secrets'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'build_api_version' => 'setBuildApiVersion',
        'env' => 'setEnv',
        'expose_docker_socket' => 'setExposeDockerSocket',
        'force_pull' => 'setForcePull',
        'from' => 'setFrom',
        'pull_secret' => 'setPullSecret',
        'secrets' => 'setSecrets'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'build_api_version' => 'getBuildApiVersion',
        'env' => 'getEnv',
        'expose_docker_socket' => 'getExposeDockerSocket',
        'force_pull' => 'getForcePull',
        'from' => 'getFrom',
        'pull_secret' => 'getPullSecret',
        'secrets' => 'getSecrets'
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
        $this->container['build_api_version'] = isset($data['build_api_version']) ? $data['build_api_version'] : null;
        $this->container['env'] = isset($data['env']) ? $data['env'] : null;
        $this->container['expose_docker_socket'] = isset($data['expose_docker_socket']) ? $data['expose_docker_socket'] : null;
        $this->container['force_pull'] = isset($data['force_pull']) ? $data['force_pull'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['pull_secret'] = isset($data['pull_secret']) ? $data['pull_secret'] : null;
        $this->container['secrets'] = isset($data['secrets']) ? $data['secrets'] : null;
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
        return true;
    }


    /**
     * Gets build_api_version
     * @return string
     */
    public function getBuildApiVersion()
    {
        return $this->container['build_api_version'];
    }

    /**
     * Sets build_api_version
     * @param string $build_api_version buildAPIVersion is the requested API version for the Build object serialized and passed to the custom builder
     * @return $this
     */
    public function setBuildApiVersion($build_api_version)
    {
        $this->container['build_api_version'] = $build_api_version;

        return $this;
    }

    /**
     * Gets env
     * @return \UniversityOfAdelaide\OpenShift\Model\V1EnvVar[]
     */
    public function getEnv()
    {
        return $this->container['env'];
    }

    /**
     * Sets env
     * @param \UniversityOfAdelaide\OpenShift\Model\V1EnvVar[] $env env contains additional environment variables you want to pass into a builder container. ValueFrom is not supported.
     * @return $this
     */
    public function setEnv($env)
    {
        $this->container['env'] = $env;

        return $this;
    }

    /**
     * Gets expose_docker_socket
     * @return bool
     */
    public function getExposeDockerSocket()
    {
        return $this->container['expose_docker_socket'];
    }

    /**
     * Sets expose_docker_socket
     * @param bool $expose_docker_socket exposeDockerSocket will allow running Docker commands (and build Docker images) from inside the Docker container.
     * @return $this
     */
    public function setExposeDockerSocket($expose_docker_socket)
    {
        $this->container['expose_docker_socket'] = $expose_docker_socket;

        return $this;
    }

    /**
     * Gets force_pull
     * @return bool
     */
    public function getForcePull()
    {
        return $this->container['force_pull'];
    }

    /**
     * Sets force_pull
     * @param bool $force_pull forcePull describes if the controller should configure the build pod to always pull the images for the builder or only pull if it is not present locally
     * @return $this
     */
    public function setForcePull($force_pull)
    {
        $this->container['force_pull'] = $force_pull;

        return $this;
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
     * @param \UniversityOfAdelaide\OpenShift\Model\V1ObjectReference $from from is reference to an DockerImage, ImageStreamTag, or ImageStreamImage from which the docker image should be pulled
     * @return $this
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets pull_secret
     * @return \UniversityOfAdelaide\OpenShift\Model\V1LocalObjectReference
     */
    public function getPullSecret()
    {
        return $this->container['pull_secret'];
    }

    /**
     * Sets pull_secret
     * @param \UniversityOfAdelaide\OpenShift\Model\V1LocalObjectReference $pull_secret pullSecret is the name of a Secret that would be used for setting up the authentication for pulling the Docker images from the private Docker registries
     * @return $this
     */
    public function setPullSecret($pull_secret)
    {
        $this->container['pull_secret'] = $pull_secret;

        return $this;
    }

    /**
     * Gets secrets
     * @return \UniversityOfAdelaide\OpenShift\Model\V1SecretSpec[]
     */
    public function getSecrets()
    {
        return $this->container['secrets'];
    }

    /**
     * Sets secrets
     * @param \UniversityOfAdelaide\OpenShift\Model\V1SecretSpec[] $secrets secrets is a list of additional secrets that will be included in the build pod
     * @return $this
     */
    public function setSecrets($secrets)
    {
        $this->container['secrets'] = $secrets;

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


