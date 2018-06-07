<?php
/**
 * DiscoveryJobNIOListResultResponse
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
 * DiscoveryJobNIOListResultResponse Class Doc Comment
 *
 * @category Class
 * @package  cisco\com\dnac\v1\api\client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DiscoveryJobNIOListResultResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DiscoveryJobNIOListResult_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'attribute_info' => 'object',
        'cli_status' => 'string',
        'discovery_status' => 'string',
        'end_time' => 'string',
        'http_status' => 'string',
        'id' => 'string',
        'inventory_collection_status' => 'string',
        'inventory_reachability_status' => 'string',
        'ip_address' => 'string',
        'job_status' => 'string',
        'name' => 'string',
        'netconf_status' => 'string',
        'ping_status' => 'string',
        'snmp_status' => 'string',
        'start_time' => 'string',
        'task_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'attribute_info' => null,
        'cli_status' => null,
        'discovery_status' => null,
        'end_time' => null,
        'http_status' => null,
        'id' => null,
        'inventory_collection_status' => null,
        'inventory_reachability_status' => null,
        'ip_address' => null,
        'job_status' => null,
        'name' => null,
        'netconf_status' => null,
        'ping_status' => null,
        'snmp_status' => null,
        'start_time' => null,
        'task_id' => null
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
        'attribute_info' => 'attributeInfo',
        'cli_status' => 'cliStatus',
        'discovery_status' => 'discoveryStatus',
        'end_time' => 'endTime',
        'http_status' => 'httpStatus',
        'id' => 'id',
        'inventory_collection_status' => 'inventoryCollectionStatus',
        'inventory_reachability_status' => 'inventoryReachabilityStatus',
        'ip_address' => 'ipAddress',
        'job_status' => 'jobStatus',
        'name' => 'name',
        'netconf_status' => 'netconfStatus',
        'ping_status' => 'pingStatus',
        'snmp_status' => 'snmpStatus',
        'start_time' => 'startTime',
        'task_id' => 'taskId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attribute_info' => 'setAttributeInfo',
        'cli_status' => 'setCliStatus',
        'discovery_status' => 'setDiscoveryStatus',
        'end_time' => 'setEndTime',
        'http_status' => 'setHttpStatus',
        'id' => 'setId',
        'inventory_collection_status' => 'setInventoryCollectionStatus',
        'inventory_reachability_status' => 'setInventoryReachabilityStatus',
        'ip_address' => 'setIpAddress',
        'job_status' => 'setJobStatus',
        'name' => 'setName',
        'netconf_status' => 'setNetconfStatus',
        'ping_status' => 'setPingStatus',
        'snmp_status' => 'setSnmpStatus',
        'start_time' => 'setStartTime',
        'task_id' => 'setTaskId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attribute_info' => 'getAttributeInfo',
        'cli_status' => 'getCliStatus',
        'discovery_status' => 'getDiscoveryStatus',
        'end_time' => 'getEndTime',
        'http_status' => 'getHttpStatus',
        'id' => 'getId',
        'inventory_collection_status' => 'getInventoryCollectionStatus',
        'inventory_reachability_status' => 'getInventoryReachabilityStatus',
        'ip_address' => 'getIpAddress',
        'job_status' => 'getJobStatus',
        'name' => 'getName',
        'netconf_status' => 'getNetconfStatus',
        'ping_status' => 'getPingStatus',
        'snmp_status' => 'getSnmpStatus',
        'start_time' => 'getStartTime',
        'task_id' => 'getTaskId'
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
        $this->container['attribute_info'] = isset($data['attribute_info']) ? $data['attribute_info'] : null;
        $this->container['cli_status'] = isset($data['cli_status']) ? $data['cli_status'] : null;
        $this->container['discovery_status'] = isset($data['discovery_status']) ? $data['discovery_status'] : null;
        $this->container['end_time'] = isset($data['end_time']) ? $data['end_time'] : null;
        $this->container['http_status'] = isset($data['http_status']) ? $data['http_status'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['inventory_collection_status'] = isset($data['inventory_collection_status']) ? $data['inventory_collection_status'] : null;
        $this->container['inventory_reachability_status'] = isset($data['inventory_reachability_status']) ? $data['inventory_reachability_status'] : null;
        $this->container['ip_address'] = isset($data['ip_address']) ? $data['ip_address'] : null;
        $this->container['job_status'] = isset($data['job_status']) ? $data['job_status'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['netconf_status'] = isset($data['netconf_status']) ? $data['netconf_status'] : null;
        $this->container['ping_status'] = isset($data['ping_status']) ? $data['ping_status'] : null;
        $this->container['snmp_status'] = isset($data['snmp_status']) ? $data['snmp_status'] : null;
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['task_id'] = isset($data['task_id']) ? $data['task_id'] : null;
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
     * Gets attribute_info
     *
     * @return object
     */
    public function getAttributeInfo()
    {
        return $this->container['attribute_info'];
    }

    /**
     * Sets attribute_info
     *
     * @param object $attribute_info attribute_info
     *
     * @return $this
     */
    public function setAttributeInfo($attribute_info)
    {
        $this->container['attribute_info'] = $attribute_info;

        return $this;
    }

    /**
     * Gets cli_status
     *
     * @return string
     */
    public function getCliStatus()
    {
        return $this->container['cli_status'];
    }

    /**
     * Sets cli_status
     *
     * @param string $cli_status cli_status
     *
     * @return $this
     */
    public function setCliStatus($cli_status)
    {
        $this->container['cli_status'] = $cli_status;

        return $this;
    }

    /**
     * Gets discovery_status
     *
     * @return string
     */
    public function getDiscoveryStatus()
    {
        return $this->container['discovery_status'];
    }

    /**
     * Sets discovery_status
     *
     * @param string $discovery_status discovery_status
     *
     * @return $this
     */
    public function setDiscoveryStatus($discovery_status)
    {
        $this->container['discovery_status'] = $discovery_status;

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
     * Gets http_status
     *
     * @return string
     */
    public function getHttpStatus()
    {
        return $this->container['http_status'];
    }

    /**
     * Sets http_status
     *
     * @param string $http_status http_status
     *
     * @return $this
     */
    public function setHttpStatus($http_status)
    {
        $this->container['http_status'] = $http_status;

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
     * Gets inventory_collection_status
     *
     * @return string
     */
    public function getInventoryCollectionStatus()
    {
        return $this->container['inventory_collection_status'];
    }

    /**
     * Sets inventory_collection_status
     *
     * @param string $inventory_collection_status inventory_collection_status
     *
     * @return $this
     */
    public function setInventoryCollectionStatus($inventory_collection_status)
    {
        $this->container['inventory_collection_status'] = $inventory_collection_status;

        return $this;
    }

    /**
     * Gets inventory_reachability_status
     *
     * @return string
     */
    public function getInventoryReachabilityStatus()
    {
        return $this->container['inventory_reachability_status'];
    }

    /**
     * Sets inventory_reachability_status
     *
     * @param string $inventory_reachability_status inventory_reachability_status
     *
     * @return $this
     */
    public function setInventoryReachabilityStatus($inventory_reachability_status)
    {
        $this->container['inventory_reachability_status'] = $inventory_reachability_status;

        return $this;
    }

    /**
     * Gets ip_address
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->container['ip_address'];
    }

    /**
     * Sets ip_address
     *
     * @param string $ip_address ip_address
     *
     * @return $this
     */
    public function setIpAddress($ip_address)
    {
        $this->container['ip_address'] = $ip_address;

        return $this;
    }

    /**
     * Gets job_status
     *
     * @return string
     */
    public function getJobStatus()
    {
        return $this->container['job_status'];
    }

    /**
     * Sets job_status
     *
     * @param string $job_status job_status
     *
     * @return $this
     */
    public function setJobStatus($job_status)
    {
        $this->container['job_status'] = $job_status;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets netconf_status
     *
     * @return string
     */
    public function getNetconfStatus()
    {
        return $this->container['netconf_status'];
    }

    /**
     * Sets netconf_status
     *
     * @param string $netconf_status netconf_status
     *
     * @return $this
     */
    public function setNetconfStatus($netconf_status)
    {
        $this->container['netconf_status'] = $netconf_status;

        return $this;
    }

    /**
     * Gets ping_status
     *
     * @return string
     */
    public function getPingStatus()
    {
        return $this->container['ping_status'];
    }

    /**
     * Sets ping_status
     *
     * @param string $ping_status ping_status
     *
     * @return $this
     */
    public function setPingStatus($ping_status)
    {
        $this->container['ping_status'] = $ping_status;

        return $this;
    }

    /**
     * Gets snmp_status
     *
     * @return string
     */
    public function getSnmpStatus()
    {
        return $this->container['snmp_status'];
    }

    /**
     * Sets snmp_status
     *
     * @param string $snmp_status snmp_status
     *
     * @return $this
     */
    public function setSnmpStatus($snmp_status)
    {
        $this->container['snmp_status'] = $snmp_status;

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
     * Gets task_id
     *
     * @return string
     */
    public function getTaskId()
    {
        return $this->container['task_id'];
    }

    /**
     * Sets task_id
     *
     * @param string $task_id task_id
     *
     * @return $this
     */
    public function setTaskId($task_id)
    {
        $this->container['task_id'] = $task_id;

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


