<?php
/**
 * V1OAuthAccessToken
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
 * V1OAuthAccessToken Class Doc Comment
 *
 * @category    Class
 * @description OAuthAccessToken describes an OAuth access token
 * @package     UniversityOfAdelaide\OpenShift
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class V1OAuthAccessToken implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'v1.OAuthAccessToken';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'api_version' => 'string',
        'authorize_token' => 'string',
        'client_name' => 'string',
        'expires_in' => 'int',
        'kind' => 'string',
        'metadata' => '\UniversityOfAdelaide\OpenShift\Model\V1ObjectMeta',
        'redirect_uri' => 'string',
        'refresh_token' => 'string',
        'scopes' => 'string[]',
        'user_name' => 'string',
        'user_uid' => 'string'
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
        'authorize_token' => 'authorizeToken',
        'client_name' => 'clientName',
        'expires_in' => 'expiresIn',
        'kind' => 'kind',
        'metadata' => 'metadata',
        'redirect_uri' => 'redirectURI',
        'refresh_token' => 'refreshToken',
        'scopes' => 'scopes',
        'user_name' => 'userName',
        'user_uid' => 'userUID'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'api_version' => 'setApiVersion',
        'authorize_token' => 'setAuthorizeToken',
        'client_name' => 'setClientName',
        'expires_in' => 'setExpiresIn',
        'kind' => 'setKind',
        'metadata' => 'setMetadata',
        'redirect_uri' => 'setRedirectUri',
        'refresh_token' => 'setRefreshToken',
        'scopes' => 'setScopes',
        'user_name' => 'setUserName',
        'user_uid' => 'setUserUid'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'api_version' => 'getApiVersion',
        'authorize_token' => 'getAuthorizeToken',
        'client_name' => 'getClientName',
        'expires_in' => 'getExpiresIn',
        'kind' => 'getKind',
        'metadata' => 'getMetadata',
        'redirect_uri' => 'getRedirectUri',
        'refresh_token' => 'getRefreshToken',
        'scopes' => 'getScopes',
        'user_name' => 'getUserName',
        'user_uid' => 'getUserUid'
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
        $this->container['authorize_token'] = isset($data['authorize_token']) ? $data['authorize_token'] : null;
        $this->container['client_name'] = isset($data['client_name']) ? $data['client_name'] : null;
        $this->container['expires_in'] = isset($data['expires_in']) ? $data['expires_in'] : null;
        $this->container['kind'] = isset($data['kind']) ? $data['kind'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['redirect_uri'] = isset($data['redirect_uri']) ? $data['redirect_uri'] : null;
        $this->container['refresh_token'] = isset($data['refresh_token']) ? $data['refresh_token'] : null;
        $this->container['scopes'] = isset($data['scopes']) ? $data['scopes'] : null;
        $this->container['user_name'] = isset($data['user_name']) ? $data['user_name'] : null;
        $this->container['user_uid'] = isset($data['user_uid']) ? $data['user_uid'] : null;
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
     * Gets authorize_token
     * @return string
     */
    public function getAuthorizeToken()
    {
        return $this->container['authorize_token'];
    }

    /**
     * Sets authorize_token
     * @param string $authorize_token AuthorizeToken contains the token that authorized this token
     * @return $this
     */
    public function setAuthorizeToken($authorize_token)
    {
        $this->container['authorize_token'] = $authorize_token;

        return $this;
    }

    /**
     * Gets client_name
     * @return string
     */
    public function getClientName()
    {
        return $this->container['client_name'];
    }

    /**
     * Sets client_name
     * @param string $client_name ClientName references the client that created this token.
     * @return $this
     */
    public function setClientName($client_name)
    {
        $this->container['client_name'] = $client_name;

        return $this;
    }

    /**
     * Gets expires_in
     * @return int
     */
    public function getExpiresIn()
    {
        return $this->container['expires_in'];
    }

    /**
     * Sets expires_in
     * @param int $expires_in ExpiresIn is the seconds from CreationTime before this token expires.
     * @return $this
     */
    public function setExpiresIn($expires_in)
    {
        $this->container['expires_in'] = $expires_in;

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
     * Gets metadata
     * @return \UniversityOfAdelaide\OpenShift\Model\V1ObjectMeta
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     * @param \UniversityOfAdelaide\OpenShift\Model\V1ObjectMeta $metadata Standard object's metadata.
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets redirect_uri
     * @return string
     */
    public function getRedirectUri()
    {
        return $this->container['redirect_uri'];
    }

    /**
     * Sets redirect_uri
     * @param string $redirect_uri RedirectURI is the redirection associated with the token.
     * @return $this
     */
    public function setRedirectUri($redirect_uri)
    {
        $this->container['redirect_uri'] = $redirect_uri;

        return $this;
    }

    /**
     * Gets refresh_token
     * @return string
     */
    public function getRefreshToken()
    {
        return $this->container['refresh_token'];
    }

    /**
     * Sets refresh_token
     * @param string $refresh_token RefreshToken is the value by which this token can be renewed. Can be blank.
     * @return $this
     */
    public function setRefreshToken($refresh_token)
    {
        $this->container['refresh_token'] = $refresh_token;

        return $this;
    }

    /**
     * Gets scopes
     * @return string[]
     */
    public function getScopes()
    {
        return $this->container['scopes'];
    }

    /**
     * Sets scopes
     * @param string[] $scopes Scopes is an array of the requested scopes.
     * @return $this
     */
    public function setScopes($scopes)
    {
        $this->container['scopes'] = $scopes;

        return $this;
    }

    /**
     * Gets user_name
     * @return string
     */
    public function getUserName()
    {
        return $this->container['user_name'];
    }

    /**
     * Sets user_name
     * @param string $user_name UserName is the user name associated with this token
     * @return $this
     */
    public function setUserName($user_name)
    {
        $this->container['user_name'] = $user_name;

        return $this;
    }

    /**
     * Gets user_uid
     * @return string
     */
    public function getUserUid()
    {
        return $this->container['user_uid'];
    }

    /**
     * Sets user_uid
     * @param string $user_uid UserUID is the unique UID associated with this token
     * @return $this
     */
    public function setUserUid($user_uid)
    {
        $this->container['user_uid'] = $user_uid;

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

