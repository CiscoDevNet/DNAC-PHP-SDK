<?php
/**
 * RawCliInfoNIOListResultResponse
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
 * RawCliInfoNIOListResultResponse Class Doc Comment
 *
 * @category Class
 * @package  cisco\com\dnac\v1\api\client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RawCliInfoNIOListResultResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RawCliInfoNIOListResult_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'attribute_info' => 'object',
        'cdp_neighbors' => 'string',
        'health_monitor' => 'string',
        'id' => 'string',
        'intf_description' => 'string',
        'inventory' => 'string',
        'ip_intf_brief' => 'string',
        'mac_address_table' => 'string',
        'running_config' => 'string',
        'snmp' => 'string',
        'version' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'attribute_info' => null,
        'cdp_neighbors' => null,
        'health_monitor' => null,
        'id' => null,
        'intf_description' => null,
        'inventory' => null,
        'ip_intf_brief' => null,
        'mac_address_table' => null,
        'running_config' => null,
        'snmp' => null,
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
        'attribute_info' => 'attributeInfo',
        'cdp_neighbors' => 'cdpNeighbors',
        'health_monitor' => 'healthMonitor',
        'id' => 'id',
        'intf_description' => 'intfDescription',
        'inventory' => 'inventory',
        'ip_intf_brief' => 'ipIntfBrief',
        'mac_address_table' => 'macAddressTable',
        'running_config' => 'runningConfig',
        'snmp' => 'snmp',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attribute_info' => 'setAttributeInfo',
        'cdp_neighbors' => 'setCdpNeighbors',
        'health_monitor' => 'setHealthMonitor',
        'id' => 'setId',
        'intf_description' => 'setIntfDescription',
        'inventory' => 'setInventory',
        'ip_intf_brief' => 'setIpIntfBrief',
        'mac_address_table' => 'setMacAddressTable',
        'running_config' => 'setRunningConfig',
        'snmp' => 'setSnmp',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attribute_info' => 'getAttributeInfo',
        'cdp_neighbors' => 'getCdpNeighbors',
        'health_monitor' => 'getHealthMonitor',
        'id' => 'getId',
        'intf_description' => 'getIntfDescription',
        'inventory' => 'getInventory',
        'ip_intf_brief' => 'getIpIntfBrief',
        'mac_address_table' => 'getMacAddressTable',
        'running_config' => 'getRunningConfig',
        'snmp' => 'getSnmp',
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
        $this->container['attribute_info'] = isset($data['attribute_info']) ? $data['attribute_info'] : null;
        $this->container['cdp_neighbors'] = isset($data['cdp_neighbors']) ? $data['cdp_neighbors'] : null;
        $this->container['health_monitor'] = isset($data['health_monitor']) ? $data['health_monitor'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['intf_description'] = isset($data['intf_description']) ? $data['intf_description'] : null;
        $this->container['inventory'] = isset($data['inventory']) ? $data['inventory'] : null;
        $this->container['ip_intf_brief'] = isset($data['ip_intf_brief']) ? $data['ip_intf_brief'] : null;
        $this->container['mac_address_table'] = isset($data['mac_address_table']) ? $data['mac_address_table'] : null;
        $this->container['running_config'] = isset($data['running_config']) ? $data['running_config'] : null;
        $this->container['snmp'] = isset($data['snmp']) ? $data['snmp'] : null;
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
     * Gets cdp_neighbors
     *
     * @return string
     */
    public function getCdpNeighbors()
    {
        return $this->container['cdp_neighbors'];
    }

    /**
     * Sets cdp_neighbors
     *
     * @param string $cdp_neighbors cdp_neighbors
     *
     * @return $this
     */
    public function setCdpNeighbors($cdp_neighbors)
    {
        $this->container['cdp_neighbors'] = $cdp_neighbors;

        return $this;
    }

    /**
     * Gets health_monitor
     *
     * @return string
     */
    public function getHealthMonitor()
    {
        return $this->container['health_monitor'];
    }

    /**
     * Sets health_monitor
     *
     * @param string $health_monitor health_monitor
     *
     * @return $this
     */
    public function setHealthMonitor($health_monitor)
    {
        $this->container['health_monitor'] = $health_monitor;

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
     * Gets intf_description
     *
     * @return string
     */
    public function getIntfDescription()
    {
        return $this->container['intf_description'];
    }

    /**
     * Sets intf_description
     *
     * @param string $intf_description intf_description
     *
     * @return $this
     */
    public function setIntfDescription($intf_description)
    {
        $this->container['intf_description'] = $intf_description;

        return $this;
    }

    /**
     * Gets inventory
     *
     * @return string
     */
    public function getInventory()
    {
        return $this->container['inventory'];
    }

    /**
     * Sets inventory
     *
     * @param string $inventory inventory
     *
     * @return $this
     */
    public function setInventory($inventory)
    {
        $this->container['inventory'] = $inventory;

        return $this;
    }

    /**
     * Gets ip_intf_brief
     *
     * @return string
     */
    public function getIpIntfBrief()
    {
        return $this->container['ip_intf_brief'];
    }

    /**
     * Sets ip_intf_brief
     *
     * @param string $ip_intf_brief ip_intf_brief
     *
     * @return $this
     */
    public function setIpIntfBrief($ip_intf_brief)
    {
        $this->container['ip_intf_brief'] = $ip_intf_brief;

        return $this;
    }

    /**
     * Gets mac_address_table
     *
     * @return string
     */
    public function getMacAddressTable()
    {
        return $this->container['mac_address_table'];
    }

    /**
     * Sets mac_address_table
     *
     * @param string $mac_address_table mac_address_table
     *
     * @return $this
     */
    public function setMacAddressTable($mac_address_table)
    {
        $this->container['mac_address_table'] = $mac_address_table;

        return $this;
    }

    /**
     * Gets running_config
     *
     * @return string
     */
    public function getRunningConfig()
    {
        return $this->container['running_config'];
    }

    /**
     * Sets running_config
     *
     * @param string $running_config running_config
     *
     * @return $this
     */
    public function setRunningConfig($running_config)
    {
        $this->container['running_config'] = $running_config;

        return $this;
    }

    /**
     * Gets snmp
     *
     * @return string
     */
    public function getSnmp()
    {
        return $this->container['snmp'];
    }

    /**
     * Sets snmp
     *
     * @param string $snmp snmp
     *
     * @return $this
     */
    public function setSnmp($snmp)
    {
        $this->container['snmp'] = $snmp;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version version
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


