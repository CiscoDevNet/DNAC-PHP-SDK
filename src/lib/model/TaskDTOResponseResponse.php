<?php
/**
 * TaskDTOResponseResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  cisco\com\dnac\v1\api\client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Swagger
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace cisco\com\dnac\v1\api\client\model;

use \ArrayAccess;
use \cisco\com\dnac\v1\api\client\ObjectSerializer;

/**
 * TaskDTOResponseResponse Class Doc Comment
 *
 * @category Class
 * @package  cisco\com\dnac\v1\api\client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaskDTOResponseResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TaskDTOResponse_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'additional_status_url' => 'string',
        'data' => 'string',
        'end_time' => 'string',
        'error_code' => 'string',
        'error_key' => 'string',
        'failure_reason' => 'string',
        'id' => 'string',
        'instance_tenant_id' => 'string',
        'is_error' => 'bool',
        'last_update' => 'string',
        'operation_id_list' => 'object',
        'parent_id' => 'string',
        'progress' => 'string',
        'root_id' => 'string',
        'service_type' => 'string',
        'start_time' => 'string',
        'username' => 'string',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'additional_status_url' => null,
        'data' => null,
        'end_time' => null,
        'error_code' => null,
        'error_key' => null,
        'failure_reason' => null,
        'id' => null,
        'instance_tenant_id' => null,
        'is_error' => null,
        'last_update' => null,
        'operation_id_list' => null,
        'parent_id' => null,
        'progress' => null,
        'root_id' => null,
        'service_type' => null,
        'start_time' => null,
        'username' => null,
        'version' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'additional_status_url' => 'additionalStatusURL',
        'data' => 'data',
        'end_time' => 'endTime',
        'error_code' => 'errorCode',
        'error_key' => 'errorKey',
        'failure_reason' => 'failureReason',
        'id' => 'id',
        'instance_tenant_id' => 'instanceTenantId',
        'is_error' => 'isError',
        'last_update' => 'lastUpdate',
        'operation_id_list' => 'operationIdList',
        'parent_id' => 'parentId',
        'progress' => 'progress',
        'root_id' => 'rootId',
        'service_type' => 'serviceType',
        'start_time' => 'startTime',
        'username' => 'username',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additional_status_url' => 'setAdditionalStatusUrl',
        'data' => 'setData',
        'end_time' => 'setEndTime',
        'error_code' => 'setErrorCode',
        'error_key' => 'setErrorKey',
        'failure_reason' => 'setFailureReason',
        'id' => 'setId',
        'instance_tenant_id' => 'setInstanceTenantId',
        'is_error' => 'setIsError',
        'last_update' => 'setLastUpdate',
        'operation_id_list' => 'setOperationIdList',
        'parent_id' => 'setParentId',
        'progress' => 'setProgress',
        'root_id' => 'setRootId',
        'service_type' => 'setServiceType',
        'start_time' => 'setStartTime',
        'username' => 'setUsername',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additional_status_url' => 'getAdditionalStatusUrl',
        'data' => 'getData',
        'end_time' => 'getEndTime',
        'error_code' => 'getErrorCode',
        'error_key' => 'getErrorKey',
        'failure_reason' => 'getFailureReason',
        'id' => 'getId',
        'instance_tenant_id' => 'getInstanceTenantId',
        'is_error' => 'getIsError',
        'last_update' => 'getLastUpdate',
        'operation_id_list' => 'getOperationIdList',
        'parent_id' => 'getParentId',
        'progress' => 'getProgress',
        'root_id' => 'getRootId',
        'service_type' => 'getServiceType',
        'start_time' => 'getStartTime',
        'username' => 'getUsername',
        'version' => 'getVersion'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['additional_status_url'] = isset($data['additional_status_url']) ? $data['additional_status_url'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['end_time'] = isset($data['end_time']) ? $data['end_time'] : null;
        $this->container['error_code'] = isset($data['error_code']) ? $data['error_code'] : null;
        $this->container['error_key'] = isset($data['error_key']) ? $data['error_key'] : null;
        $this->container['failure_reason'] = isset($data['failure_reason']) ? $data['failure_reason'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['instance_tenant_id'] = isset($data['instance_tenant_id']) ? $data['instance_tenant_id'] : null;
        $this->container['is_error'] = isset($data['is_error']) ? $data['is_error'] : null;
        $this->container['last_update'] = isset($data['last_update']) ? $data['last_update'] : null;
        $this->container['operation_id_list'] = isset($data['operation_id_list']) ? $data['operation_id_list'] : null;
        $this->container['parent_id'] = isset($data['parent_id']) ? $data['parent_id'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['root_id'] = isset($data['root_id']) ? $data['root_id'] : null;
        $this->container['service_type'] = isset($data['service_type']) ? $data['service_type'] : null;
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets additional_status_url
     *
     * @return string
     */
    public function getAdditionalStatusUrl()
    {
        return $this->container['additional_status_url'];
    }

    /**
     * Sets additional_status_url
     *
     * @param string $additional_status_url additional_status_url
     *
     * @return $this
     */
    public function setAdditionalStatusUrl($additional_status_url)
    {
        $this->container['additional_status_url'] = $additional_status_url;

        return $this;
    }

    /**
     * Gets data
     *
     * @return string
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param string $data data
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets end_time
     *
     * @return string
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     *
     * @param string $end_time end_time
     *
     * @return $this
     */
    public function setEndTime($end_time)
    {
        $this->container['end_time'] = $end_time;

        return $this;
    }

    /**
     * Gets error_code
     *
     * @return string
     */
    public function getErrorCode()
    {
        return $this->container['error_code'];
    }

    /**
     * Sets error_code
     *
     * @param string $error_code error_code
     *
     * @return $this
     */
    public function setErrorCode($error_code)
    {
        $this->container['error_code'] = $error_code;

        return $this;
    }

    /**
     * Gets error_key
     *
     * @return string
     */
    public function getErrorKey()
    {
        return $this->container['error_key'];
    }

    /**
     * Sets error_key
     *
     * @param string $error_key error_key
     *
     * @return $this
     */
    public function setErrorKey($error_key)
    {
        $this->container['error_key'] = $error_key;

        return $this;
    }

    /**
     * Gets failure_reason
     *
     * @return string
     */
    public function getFailureReason()
    {
        return $this->container['failure_reason'];
    }

    /**
     * Sets failure_reason
     *
     * @param string $failure_reason failure_reason
     *
     * @return $this
     */
    public function setFailureReason($failure_reason)
    {
        $this->container['failure_reason'] = $failure_reason;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets instance_tenant_id
     *
     * @return string
     */
    public function getInstanceTenantId()
    {
        return $this->container['instance_tenant_id'];
    }

    /**
     * Sets instance_tenant_id
     *
     * @param string $instance_tenant_id instance_tenant_id
     *
     * @return $this
     */
    public function setInstanceTenantId($instance_tenant_id)
    {
        $this->container['instance_tenant_id'] = $instance_tenant_id;

        return $this;
    }

    /**
     * Gets is_error
     *
     * @return bool
     */
    public function getIsError()
    {
        return $this->container['is_error'];
    }

    /**
     * Sets is_error
     *
     * @param bool $is_error is_error
     *
     * @return $this
     */
    public function setIsError($is_error)
    {
        $this->container['is_error'] = $is_error;

        return $this;
    }

    /**
     * Gets last_update
     *
     * @return string
     */
    public function getLastUpdate()
    {
        return $this->container['last_update'];
    }

    /**
     * Sets last_update
     *
     * @param string $last_update last_update
     *
     * @return $this
     */
    public function setLastUpdate($last_update)
    {
        $this->container['last_update'] = $last_update;

        return $this;
    }

    /**
     * Gets operation_id_list
     *
     * @return object
     */
    public function getOperationIdList()
    {
        return $this->container['operation_id_list'];
    }

    /**
     * Sets operation_id_list
     *
     * @param object $operation_id_list operation_id_list
     *
     * @return $this
     */
    public function setOperationIdList($operation_id_list)
    {
        $this->container['operation_id_list'] = $operation_id_list;

        return $this;
    }

    /**
     * Gets parent_id
     *
     * @return string
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     *
     * @param string $parent_id parent_id
     *
     * @return $this
     */
    public function setParentId($parent_id)
    {
        $this->container['parent_id'] = $parent_id;

        return $this;
    }

    /**
     * Gets progress
     *
     * @return string
     */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
     * Sets progress
     *
     * @param string $progress progress
     *
     * @return $this
     */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;

        return $this;
    }

    /**
     * Gets root_id
     *
     * @return string
     */
    public function getRootId()
    {
        return $this->container['root_id'];
    }

    /**
     * Sets root_id
     *
     * @param string $root_id root_id
     *
     * @return $this
     */
    public function setRootId($root_id)
    {
        $this->container['root_id'] = $root_id;

        return $this;
    }

    /**
     * Gets service_type
     *
     * @return string
     */
    public function getServiceType()
    {
        return $this->container['service_type'];
    }

    /**
     * Sets service_type
     *
     * @param string $service_type service_type
     *
     * @return $this
     */
    public function setServiceType($service_type)
    {
        $this->container['service_type'] = $service_type;

        return $this;
    }

    /**
     * Gets start_time
     *
     * @return string
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param string $start_time start_time
     *
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string $username username
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


