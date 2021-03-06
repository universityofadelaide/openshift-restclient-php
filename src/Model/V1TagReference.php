<?php
/**
 * V1TagReference
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
 * V1TagReference Class Doc Comment
 *
 * @category    Class
 * @description TagReference specifies optional annotations for images using this tag and an optional reference to an ImageStreamTag, ImageStreamImage, or DockerImage this tag should track.
 * @package     UniversityOfAdelaide\OpenShift
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class V1TagReference implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'v1.TagReference';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'annotations' => 'map[string,string]',
        'from' => '\UniversityOfAdelaide\OpenShift\Model\V1ObjectReference',
        'generation' => 'int',
        'importPolicy' => '\UniversityOfAdelaide\OpenShift\Model\V1TagImportPolicy',
        'name' => 'string',
        'reference' => 'bool',
        'referencePolicy' => '\UniversityOfAdelaide\OpenShift\Model\V1TagReferencePolicy'
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
        'annotations' => 'annotations',
        'from' => 'from',
        'generation' => 'generation',
        'importPolicy' => 'importPolicy',
        'name' => 'name',
        'reference' => 'reference',
        'referencePolicy' => 'referencePolicy'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'annotations' => 'setAnnotations',
        'from' => 'setFrom',
        'generation' => 'setGeneration',
        'importPolicy' => 'setImportPolicy',
        'name' => 'setName',
        'reference' => 'setReference',
        'referencePolicy' => 'setReferencePolicy'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'annotations' => 'getAnnotations',
        'from' => 'getFrom',
        'generation' => 'getGeneration',
        'importPolicy' => 'getImportPolicy',
        'name' => 'getName',
        'reference' => 'getReference',
        'referencePolicy' => 'getReferencePolicy'
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
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['generation'] = isset($data['generation']) ? $data['generation'] : null;
        $this->container['importPolicy'] = isset($data['importPolicy']) ? $data['importPolicy'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['referencePolicy'] = isset($data['referencePolicy']) ? $data['referencePolicy'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['annotations'] === null) {
            $invalid_properties[] = "'annotations' can't be null";
        }
        if ($this->container['generation'] === null) {
            $invalid_properties[] = "'generation' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
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

        if ($this->container['annotations'] === null) {
            return false;
        }
        if ($this->container['generation'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets annotations
     * @return map[string,string]
     */
    public function getAnnotations()
    {
        return $this->container['annotations'];
    }

    /**
     * Sets annotations
     * @param map[string,string] $annotations Annotations associated with images using this tag
     * @return $this
     */
    public function setAnnotations($annotations)
    {
        $this->container['annotations'] = $annotations;

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
     * @param \UniversityOfAdelaide\OpenShift\Model\V1ObjectReference $from From is a reference to an image stream tag or image stream this tag should track
     * @return $this
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets generation
     * @return int
     */
    public function getGeneration()
    {
        return $this->container['generation'];
    }

    /**
     * Sets generation
     * @param int $generation Generation is the image stream generation that updated this tag - setting it to 0 is an indication that the generation must be updated. Legacy clients will send this as nil, which means the client doesn't know or care.
     * @return $this
     */
    public function setGeneration($generation)
    {
        $this->container['generation'] = $generation;

        return $this;
    }

    /**
     * Gets importPolicy
     * @return \UniversityOfAdelaide\OpenShift\Model\V1TagImportPolicy
     */
    public function getImportPolicy()
    {
        return $this->container['importPolicy'];
    }

    /**
     * Sets importPolicy
     * @param \UniversityOfAdelaide\OpenShift\Model\V1TagImportPolicy $importPolicy Import is information that controls how images may be imported by the server.
     * @return $this
     */
    public function setImportPolicy($importPolicy)
    {
        $this->container['importPolicy'] = $importPolicy;

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
     * @param string $name Name of the tag
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets reference
     * @return bool
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     * @param bool $reference Reference states if the tag will be imported. Default value is false, which means the tag will be imported.
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets referencePolicy
     * @return \UniversityOfAdelaide\OpenShift\Model\V1TagReferencePolicy
     */
    public function getReferencePolicy()
    {
        return $this->container['referencePolicy'];
    }

    /**
     * Sets referencePolicy
     * @param \UniversityOfAdelaide\OpenShift\Model\V1TagReferencePolicy $referencePolicy ReferencePolicy defines how other components should consume the image
     * @return $this
     */
    public function setReferencePolicy($referencePolicy)
    {
        $this->container['referencePolicy'] = $referencePolicy;

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


