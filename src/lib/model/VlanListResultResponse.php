<?php
/**
 * VlanListResultResponse
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
 * VlanListResultResponse Class Doc Comment
 *
 * @category Class
 * @package  cisco\com\dnac\v1\api\client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VlanListResultResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VlanListResult_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'interface_name' => 'string',
        'ip_address' => 'string',
        'mask' => 'int',
        'network_address' => 'string',
        'number_of_i_ps' => 'int',
        'prefix' => 'string',
        'vlan_number' => 'int',
        'vlan_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'interface_name' => null,
        'ip_address' => null,
        'mask' => null,
        'network_address' => null,
        'number_of_i_ps' => null,
        'prefix' => null,
        'vlan_number' => null,
        'vlan_type' => null
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
        'interface_name' => 'interfaceName',
        'ip_address' => 'ipAddress',
        'mask' => 'mask',
        'network_address' => 'networkAddress',
        'number_of_i_ps' => 'numberOfIPs',
        'prefix' => 'prefix',
        'vlan_number' => 'vlanNumber',
        'vlan_type' => 'vlanType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'interface_name' => 'setInterfaceName',
        'ip_address' => 'setIpAddress',
        'mask' => 'setMask',
        'network_address' => 'setNetworkAddress',
        'number_of_i_ps' => 'setNumberOfIPs',
        'prefix' => 'setPrefix',
        'vlan_number' => 'setVlanNumber',
        'vlan_type' => 'setVlanType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'interface_name' => 'getInterfaceName',
        'ip_address' => 'getIpAddress',
        'mask' => 'getMask',
        'network_address' => 'getNetworkAddress',
        'number_of_i_ps' => 'getNumberOfIPs',
        'prefix' => 'getPrefix',
        'vlan_number' => 'getVlanNumber',
        'vlan_type' => 'getVlanType'
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
        $this->container['interface_name'] = isset($data['interface_name']) ? $data['interface_name'] : null;
        $this->container['ip_address'] = isset($data['ip_address']) ? $data['ip_address'] : null;
        $this->container['mask'] = isset($data['mask']) ? $data['mask'] : null;
        $this->container['network_address'] = isset($data['network_address']) ? $data['network_address'] : null;
        $this->container['number_of_i_ps'] = isset($data['number_of_i_ps']) ? $data['number_of_i_ps'] : null;
        $this->container['prefix'] = isset($data['prefix']) ? $data['prefix'] : null;
        $this->container['vlan_number'] = isset($data['vlan_number']) ? $data['vlan_number'] : null;
        $this->container['vlan_type'] = isset($data['vlan_type']) ? $data['vlan_type'] : null;
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
     * Gets interface_name
     *
     * @return string
     */
    public function getInterfaceName()
    {
        return $this->container['interface_name'];
    }

    /**
     * Sets interface_name
     *
     * @param string $interface_name interface_name
     *
     * @return $this
     */
    public function setInterfaceName($interface_name)
    {
        $this->container['interface_name'] = $interface_name;

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
     * Gets mask
     *
     * @return int
     */
    public function getMask()
    {
        return $this->container['mask'];
    }

    /**
     * Sets mask
     *
     * @param int $mask mask
     *
     * @return $this
     */
    public function setMask($mask)
    {
        $this->container['mask'] = $mask;

        return $this;
    }

    /**
     * Gets network_address
     *
     * @return string
     */
    public function getNetworkAddress()
    {
        return $this->container['network_address'];
    }

    /**
     * Sets network_address
     *
     * @param string $network_address network_address
     *
     * @return $this
     */
    public function setNetworkAddress($network_address)
    {
        $this->container['network_address'] = $network_address;

        return $this;
    }

    /**
     * Gets number_of_i_ps
     *
     * @return int
     */
    public function getNumberOfIPs()
    {
        return $this->container['number_of_i_ps'];
    }

    /**
     * Sets number_of_i_ps
     *
     * @param int $number_of_i_ps number_of_i_ps
     *
     * @return $this
     */
    public function setNumberOfIPs($number_of_i_ps)
    {
        $this->container['number_of_i_ps'] = $number_of_i_ps;

        return $this;
    }

    /**
     * Gets prefix
     *
     * @return string
     */
    public function getPrefix()
    {
        return $this->container['prefix'];
    }

    /**
     * Sets prefix
     *
     * @param string $prefix prefix
     *
     * @return $this
     */
    public function setPrefix($prefix)
    {
        $this->container['prefix'] = $prefix;

        return $this;
    }

    /**
     * Gets vlan_number
     *
     * @return int
     */
    public function getVlanNumber()
    {
        return $this->container['vlan_number'];
    }

    /**
     * Sets vlan_number
     *
     * @param int $vlan_number vlan_number
     *
     * @return $this
     */
    public function setVlanNumber($vlan_number)
    {
        $this->container['vlan_number'] = $vlan_number;

        return $this;
    }

    /**
     * Gets vlan_type
     *
     * @return string
     */
    public function getVlanType()
    {
        return $this->container['vlan_type'];
    }

    /**
     * Sets vlan_type
     *
     * @param string $vlan_type vlan_type
     *
     * @return $this
     */
    public function setVlanType($vlan_type)
    {
        $this->container['vlan_type'] = $vlan_type;

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


