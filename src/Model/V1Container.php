<?php
/**
 * V1Container
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
 * V1Container Class Doc Comment
 *
 * @category    Class
 * @description A single application container that you want to run within a pod.
 * @package     UniversityOfAdelaide\OpenShift
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class V1Container implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'v1.Container';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'args' => 'string[]',
        'command' => 'string[]',
        'env' => '\UniversityOfAdelaide\OpenShift\Model\V1EnvVar[]',
        'env_from' => '\UniversityOfAdelaide\OpenShift\Model\V1EnvFromSource[]',
        'image' => 'string',
        'image_pull_policy' => 'string',
        'lifecycle' => '\UniversityOfAdelaide\OpenShift\Model\V1Lifecycle',
        'liveness_probe' => '\UniversityOfAdelaide\OpenShift\Model\V1Probe',
        'name' => 'string',
        'ports' => '\UniversityOfAdelaide\OpenShift\Model\V1ContainerPort[]',
        'readiness_probe' => '\UniversityOfAdelaide\OpenShift\Model\V1Probe',
        'resources' => '\UniversityOfAdelaide\OpenShift\Model\V1ResourceRequirements',
        'security_context' => '\UniversityOfAdelaide\OpenShift\Model\V1SecurityContext',
        'stdin' => 'bool',
        'stdin_once' => 'bool',
        'termination_message_path' => 'string',
        'termination_message_policy' => 'string',
        'tty' => 'bool',
        'volume_mounts' => '\UniversityOfAdelaide\OpenShift\Model\V1VolumeMount[]',
        'working_dir' => 'string'
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
        'args' => 'args',
        'command' => 'command',
        'env' => 'env',
        'env_from' => 'envFrom',
        'image' => 'image',
        'image_pull_policy' => 'imagePullPolicy',
        'lifecycle' => 'lifecycle',
        'liveness_probe' => 'livenessProbe',
        'name' => 'name',
        'ports' => 'ports',
        'readiness_probe' => 'readinessProbe',
        'resources' => 'resources',
        'security_context' => 'securityContext',
        'stdin' => 'stdin',
        'stdin_once' => 'stdinOnce',
        'termination_message_path' => 'terminationMessagePath',
        'termination_message_policy' => 'terminationMessagePolicy',
        'tty' => 'tty',
        'volume_mounts' => 'volumeMounts',
        'working_dir' => 'workingDir'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'args' => 'setArgs',
        'command' => 'setCommand',
        'env' => 'setEnv',
        'env_from' => 'setEnvFrom',
        'image' => 'setImage',
        'image_pull_policy' => 'setImagePullPolicy',
        'lifecycle' => 'setLifecycle',
        'liveness_probe' => 'setLivenessProbe',
        'name' => 'setName',
        'ports' => 'setPorts',
        'readiness_probe' => 'setReadinessProbe',
        'resources' => 'setResources',
        'security_context' => 'setSecurityContext',
        'stdin' => 'setStdin',
        'stdin_once' => 'setStdinOnce',
        'termination_message_path' => 'setTerminationMessagePath',
        'termination_message_policy' => 'setTerminationMessagePolicy',
        'tty' => 'setTty',
        'volume_mounts' => 'setVolumeMounts',
        'working_dir' => 'setWorkingDir'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'args' => 'getArgs',
        'command' => 'getCommand',
        'env' => 'getEnv',
        'env_from' => 'getEnvFrom',
        'image' => 'getImage',
        'image_pull_policy' => 'getImagePullPolicy',
        'lifecycle' => 'getLifecycle',
        'liveness_probe' => 'getLivenessProbe',
        'name' => 'getName',
        'ports' => 'getPorts',
        'readiness_probe' => 'getReadinessProbe',
        'resources' => 'getResources',
        'security_context' => 'getSecurityContext',
        'stdin' => 'getStdin',
        'stdin_once' => 'getStdinOnce',
        'termination_message_path' => 'getTerminationMessagePath',
        'termination_message_policy' => 'getTerminationMessagePolicy',
        'tty' => 'getTty',
        'volume_mounts' => 'getVolumeMounts',
        'working_dir' => 'getWorkingDir'
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
        $this->container['args'] = isset($data['args']) ? $data['args'] : null;
        $this->container['command'] = isset($data['command']) ? $data['command'] : null;
        $this->container['env'] = isset($data['env']) ? $data['env'] : null;
        $this->container['env_from'] = isset($data['env_from']) ? $data['env_from'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['image_pull_policy'] = isset($data['image_pull_policy']) ? $data['image_pull_policy'] : null;
        $this->container['lifecycle'] = isset($data['lifecycle']) ? $data['lifecycle'] : null;
        $this->container['liveness_probe'] = isset($data['liveness_probe']) ? $data['liveness_probe'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ports'] = isset($data['ports']) ? $data['ports'] : null;
        $this->container['readiness_probe'] = isset($data['readiness_probe']) ? $data['readiness_probe'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['security_context'] = isset($data['security_context']) ? $data['security_context'] : null;
        $this->container['stdin'] = isset($data['stdin']) ? $data['stdin'] : null;
        $this->container['stdin_once'] = isset($data['stdin_once']) ? $data['stdin_once'] : null;
        $this->container['termination_message_path'] = isset($data['termination_message_path']) ? $data['termination_message_path'] : null;
        $this->container['termination_message_policy'] = isset($data['termination_message_policy']) ? $data['termination_message_policy'] : null;
        $this->container['tty'] = isset($data['tty']) ? $data['tty'] : null;
        $this->container['volume_mounts'] = isset($data['volume_mounts']) ? $data['volume_mounts'] : null;
        $this->container['working_dir'] = isset($data['working_dir']) ? $data['working_dir'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

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

        if ($this->container['name'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets args
     * @return string[]
     */
    public function getArgs()
    {
        return $this->container['args'];
    }

    /**
     * Sets args
     * @param string[] $args Arguments to the entrypoint. The docker image's CMD is used if this is not provided. Variable references $(VAR_NAME) are expanded using the container's environment. If a variable cannot be resolved, the reference in the input string will be unchanged. The $(VAR_NAME) syntax can be escaped with a double $$, ie: $$(VAR_NAME). Escaped references will never be expanded, regardless of whether the variable exists or not. Cannot be updated. More info: http://kubernetes.io/docs/user-guide/containers#containers-and-commands
     * @return $this
     */
    public function setArgs($args)
    {
        $this->container['args'] = $args;

        return $this;
    }

    /**
     * Gets command
     * @return string[]
     */
    public function getCommand()
    {
        return $this->container['command'];
    }

    /**
     * Sets command
     * @param string[] $command Entrypoint array. Not executed within a shell. The docker image's ENTRYPOINT is used if this is not provided. Variable references $(VAR_NAME) are expanded using the container's environment. If a variable cannot be resolved, the reference in the input string will be unchanged. The $(VAR_NAME) syntax can be escaped with a double $$, ie: $$(VAR_NAME). Escaped references will never be expanded, regardless of whether the variable exists or not. Cannot be updated. More info: http://kubernetes.io/docs/user-guide/containers#containers-and-commands
     * @return $this
     */
    public function setCommand($command)
    {
        $this->container['command'] = $command;

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
     * @param \UniversityOfAdelaide\OpenShift\Model\V1EnvVar[] $env List of environment variables to set in the container. Cannot be updated.
     * @return $this
     */
    public function setEnv($env)
    {
        $this->container['env'] = $env;

        return $this;
    }

    /**
     * Gets env_from
     * @return \UniversityOfAdelaide\OpenShift\Model\V1EnvFromSource[]
     */
    public function getEnvFrom()
    {
        return $this->container['env_from'];
    }

    /**
     * Sets env_from
     * @param \UniversityOfAdelaide\OpenShift\Model\V1EnvFromSource[] $env_from List of sources to populate environment variables in the container. The keys defined within a source must be a C_IDENTIFIER. All invalid keys will be reported as an event when the container is starting. When a key exists in multiple sources, the value associated with the last source will take precedence. Values defined by an Env with a duplicate key will take precedence. Cannot be updated.
     * @return $this
     */
    public function setEnvFrom($env_from)
    {
        $this->container['env_from'] = $env_from;

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
     * @param string $image Docker image name. More info: http://kubernetes.io/docs/user-guide/images
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets image_pull_policy
     * @return string
     */
    public function getImagePullPolicy()
    {
        return $this->container['image_pull_policy'];
    }

    /**
     * Sets image_pull_policy
     * @param string $image_pull_policy Image pull policy. One of Always, Never, IfNotPresent. Defaults to Always if :latest tag is specified, or IfNotPresent otherwise. Cannot be updated. More info: http://kubernetes.io/docs/user-guide/images#updating-images
     * @return $this
     */
    public function setImagePullPolicy($image_pull_policy)
    {
        $this->container['image_pull_policy'] = $image_pull_policy;

        return $this;
    }

    /**
     * Gets lifecycle
     * @return \UniversityOfAdelaide\OpenShift\Model\V1Lifecycle
     */
    public function getLifecycle()
    {
        return $this->container['lifecycle'];
    }

    /**
     * Sets lifecycle
     * @param \UniversityOfAdelaide\OpenShift\Model\V1Lifecycle $lifecycle Actions that the management system should take in response to container lifecycle events. Cannot be updated.
     * @return $this
     */
    public function setLifecycle($lifecycle)
    {
        $this->container['lifecycle'] = $lifecycle;

        return $this;
    }

    /**
     * Gets liveness_probe
     * @return \UniversityOfAdelaide\OpenShift\Model\V1Probe
     */
    public function getLivenessProbe()
    {
        return $this->container['liveness_probe'];
    }

    /**
     * Sets liveness_probe
     * @param \UniversityOfAdelaide\OpenShift\Model\V1Probe $liveness_probe Periodic probe of container liveness. Container will be restarted if the probe fails. Cannot be updated. More info: http://kubernetes.io/docs/user-guide/pod-states#container-probes
     * @return $this
     */
    public function setLivenessProbe($liveness_probe)
    {
        $this->container['liveness_probe'] = $liveness_probe;

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
     * @param string $name Name of the container specified as a DNS_LABEL. Each container in a pod must have a unique name (DNS_LABEL). Cannot be updated.
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets ports
     * @return \UniversityOfAdelaide\OpenShift\Model\V1ContainerPort[]
     */
    public function getPorts()
    {
        return $this->container['ports'];
    }

    /**
     * Sets ports
     * @param \UniversityOfAdelaide\OpenShift\Model\V1ContainerPort[] $ports List of ports to expose from the container. Exposing a port here gives the system additional information about the network connections a container uses, but is primarily informational. Not specifying a port here DOES NOT prevent that port from being exposed. Any port which is listening on the default \"0.0.0.0\" address inside a container will be accessible from the network. Cannot be updated.
     * @return $this
     */
    public function setPorts($ports)
    {
        $this->container['ports'] = $ports;

        return $this;
    }

    /**
     * Gets readiness_probe
     * @return \UniversityOfAdelaide\OpenShift\Model\V1Probe
     */
    public function getReadinessProbe()
    {
        return $this->container['readiness_probe'];
    }

    /**
     * Sets readiness_probe
     * @param \UniversityOfAdelaide\OpenShift\Model\V1Probe $readiness_probe Periodic probe of container service readiness. Container will be removed from service endpoints if the probe fails. Cannot be updated. More info: http://kubernetes.io/docs/user-guide/pod-states#container-probes
     * @return $this
     */
    public function setReadinessProbe($readiness_probe)
    {
        $this->container['readiness_probe'] = $readiness_probe;

        return $this;
    }

    /**
     * Gets resources
     * @return \UniversityOfAdelaide\OpenShift\Model\V1ResourceRequirements
     */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
     * Sets resources
     * @param \UniversityOfAdelaide\OpenShift\Model\V1ResourceRequirements $resources Compute Resources required by this container. Cannot be updated. More info: http://kubernetes.io/docs/user-guide/persistent-volumes#resources
     * @return $this
     */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;

        return $this;
    }

    /**
     * Gets security_context
     * @return \UniversityOfAdelaide\OpenShift\Model\V1SecurityContext
     */
    public function getSecurityContext()
    {
        return $this->container['security_context'];
    }

    /**
     * Sets security_context
     * @param \UniversityOfAdelaide\OpenShift\Model\V1SecurityContext $security_context Security options the pod should run with. More info: http://releases.k8s.io/HEAD/docs/design/security_context.md
     * @return $this
     */
    public function setSecurityContext($security_context)
    {
        $this->container['security_context'] = $security_context;

        return $this;
    }

    /**
     * Gets stdin
     * @return bool
     */
    public function getStdin()
    {
        return $this->container['stdin'];
    }

    /**
     * Sets stdin
     * @param bool $stdin Whether this container should allocate a buffer for stdin in the container runtime. If this is not set, reads from stdin in the container will always result in EOF. Default is false.
     * @return $this
     */
    public function setStdin($stdin)
    {
        $this->container['stdin'] = $stdin;

        return $this;
    }

    /**
     * Gets stdin_once
     * @return bool
     */
    public function getStdinOnce()
    {
        return $this->container['stdin_once'];
    }

    /**
     * Sets stdin_once
     * @param bool $stdin_once Whether the container runtime should close the stdin channel after it has been opened by a single attach. When stdin is true the stdin stream will remain open across multiple attach sessions. If stdinOnce is set to true, stdin is opened on container start, is empty until the first client attaches to stdin, and then remains open and accepts data until the client disconnects, at which time stdin is closed and remains closed until the container is restarted. If this flag is false, a container processes that reads from stdin will never receive an EOF. Default is false
     * @return $this
     */
    public function setStdinOnce($stdin_once)
    {
        $this->container['stdin_once'] = $stdin_once;

        return $this;
    }

    /**
     * Gets termination_message_path
     * @return string
     */
    public function getTerminationMessagePath()
    {
        return $this->container['termination_message_path'];
    }

    /**
     * Sets termination_message_path
     * @param string $termination_message_path Optional: Path at which the file to which the container's termination message will be written is mounted into the container's filesystem. Message written is intended to be brief final status, such as an assertion failure message. Will be truncated by the node if greater than 4096 bytes. The total message length across all containers will be limited to 12kb. Defaults to /dev/termination-log. Cannot be updated.
     * @return $this
     */
    public function setTerminationMessagePath($termination_message_path)
    {
        $this->container['termination_message_path'] = $termination_message_path;

        return $this;
    }

    /**
     * Gets termination_message_policy
     * @return string
     */
    public function getTerminationMessagePolicy()
    {
        return $this->container['termination_message_policy'];
    }

    /**
     * Sets termination_message_policy
     * @param string $termination_message_policy Indicate how the termination message should be populated. File will use the contents of terminationMessagePath to populate the container status message on both success and failure. FallbackToLogsOnError will use the last chunk of container log output if the termination message file is empty and the container exited with an error. The log output is limited to 2048 bytes or 80 lines, whichever is smaller. Defaults to File. Cannot be updated.
     * @return $this
     */
    public function setTerminationMessagePolicy($termination_message_policy)
    {
        $this->container['termination_message_policy'] = $termination_message_policy;

        return $this;
    }

    /**
     * Gets tty
     * @return bool
     */
    public function getTty()
    {
        return $this->container['tty'];
    }

    /**
     * Sets tty
     * @param bool $tty Whether this container should allocate a TTY for itself, also requires 'stdin' to be true. Default is false.
     * @return $this
     */
    public function setTty($tty)
    {
        $this->container['tty'] = $tty;

        return $this;
    }

    /**
     * Gets volume_mounts
     * @return \UniversityOfAdelaide\OpenShift\Model\V1VolumeMount[]
     */
    public function getVolumeMounts()
    {
        return $this->container['volume_mounts'];
    }

    /**
     * Sets volume_mounts
     * @param \UniversityOfAdelaide\OpenShift\Model\V1VolumeMount[] $volume_mounts Pod volumes to mount into the container's filesystem. Cannot be updated.
     * @return $this
     */
    public function setVolumeMounts($volume_mounts)
    {
        $this->container['volume_mounts'] = $volume_mounts;

        return $this;
    }

    /**
     * Gets working_dir
     * @return string
     */
    public function getWorkingDir()
    {
        return $this->container['working_dir'];
    }

    /**
     * Sets working_dir
     * @param string $working_dir Container's working directory. If not specified, the container runtime's default will be used, which might be configured in the container image. Cannot be updated.
     * @return $this
     */
    public function setWorkingDir($working_dir)
    {
        $this->container['working_dir'] = $working_dir;

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

