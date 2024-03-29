<?php
/**
 * DeviceInnerDeviceInfoNeighborLinks
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
 * DeviceInnerDeviceInfoNeighborLinks Class Doc Comment
 *
 * @category Class
 * @package  cisco\com\dnac\v1\api\client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DeviceInnerDeviceInfoNeighborLinks implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Device_inner_deviceInfo_neighborLinks';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'local_interface_name' => 'string',
        'local_mac_address' => 'string',
        'local_short_interface_name' => 'string',
        'remote_device_name' => 'string',
        'remote_interface_name' => 'string',
        'remote_mac_address' => 'string',
        'remote_platform' => 'string',
        'remote_short_interface_name' => 'string',
        'remote_version' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'local_interface_name' => null,
        'local_mac_address' => null,
        'local_short_interface_name' => null,
        'remote_device_name' => null,
        'remote_interface_name' => null,
        'remote_mac_address' => null,
        'remote_platform' => null,
        'remote_short_interface_name' => null,
        'remote_version' => null
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
        'local_interface_name' => 'localInterfaceName',
        'local_mac_address' => 'localMacAddress',
        'local_short_interface_name' => 'localShortInterfaceName',
        'remote_device_name' => 'remoteDeviceName',
        'remote_interface_name' => 'remoteInterfaceName',
        'remote_mac_address' => 'remoteMacAddress',
        'remote_platform' => 'remotePlatform',
        'remote_short_interface_name' => 'remoteShortInterfaceName',
        'remote_version' => 'remoteVersion'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'local_interface_name' => 'setLocalInterfaceName',
        'local_mac_address' => 'setLocalMacAddress',
        'local_short_interface_name' => 'setLocalShortInterfaceName',
        'remote_device_name' => 'setRemoteDeviceName',
        'remote_interface_name' => 'setRemoteInterfaceName',
        'remote_mac_address' => 'setRemoteMacAddress',
        'remote_platform' => 'setRemotePlatform',
        'remote_short_interface_name' => 'setRemoteShortInterfaceName',
        'remote_version' => 'setRemoteVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'local_interface_name' => 'getLocalInterfaceName',
        'local_mac_address' => 'getLocalMacAddress',
        'local_short_interface_name' => 'getLocalShortInterfaceName',
        'remote_device_name' => 'getRemoteDeviceName',
        'remote_interface_name' => 'getRemoteInterfaceName',
        'remote_mac_address' => 'getRemoteMacAddress',
        'remote_platform' => 'getRemotePlatform',
        'remote_short_interface_name' => 'getRemoteShortInterfaceName',
        'remote_version' => 'getRemoteVersion'
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
        $this->container['local_interface_name'] = isset($data['local_interface_name']) ? $data['local_interface_name'] : null;
        $this->container['local_mac_address'] = isset($data['local_mac_address']) ? $data['local_mac_address'] : null;
        $this->container['local_short_interface_name'] = isset($data['local_short_interface_name']) ? $data['local_short_interface_name'] : null;
        $this->container['remote_device_name'] = isset($data['remote_device_name']) ? $data['remote_device_name'] : null;
        $this->container['remote_interface_name'] = isset($data['remote_interface_name']) ? $data['remote_interface_name'] : null;
        $this->container['remote_mac_address'] = isset($data['remote_mac_address']) ? $data['remote_mac_address'] : null;
        $this->container['remote_platform'] = isset($data['remote_platform']) ? $data['remote_platform'] : null;
        $this->container['remote_short_interface_name'] = isset($data['remote_short_interface_name']) ? $data['remote_short_interface_name'] : null;
        $this->container['remote_version'] = isset($data['remote_version']) ? $data['remote_version'] : null;
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
     * Gets local_interface_name
     *
     * @return string
     */
    public function getLocalInterfaceName()
    {
        return $this->container['local_interface_name'];
    }

    /**
     * Sets local_interface_name
     *
     * @param string $local_interface_name local_interface_name
     *
     * @return $this
     */
    public function setLocalInterfaceName($local_interface_name)
    {
        $this->container['local_interface_name'] = $local_interface_name;

        return $this;
    }

    /**
     * Gets local_mac_address
     *
     * @return string
     */
    public function getLocalMacAddress()
    {
        return $this->container['local_mac_address'];
    }

    /**
     * Sets local_mac_address
     *
     * @param string $local_mac_address local_mac_address
     *
     * @return $this
     */
    public function setLocalMacAddress($local_mac_address)
    {
        $this->container['local_mac_address'] = $local_mac_address;

        return $this;
    }

    /**
     * Gets local_short_interface_name
     *
     * @return string
     */
    public function getLocalShortInterfaceName()
    {
        return $this->container['local_short_interface_name'];
    }

    /**
     * Sets local_short_interface_name
     *
     * @param string $local_short_interface_name local_short_interface_name
     *
     * @return $this
     */
    public function setLocalShortInterfaceName($local_short_interface_name)
    {
        $this->container['local_short_interface_name'] = $local_short_interface_name;

        return $this;
    }

    /**
     * Gets remote_device_name
     *
     * @return string
     */
    public function getRemoteDeviceName()
    {
        return $this->container['remote_device_name'];
    }

    /**
     * Sets remote_device_name
     *
     * @param string $remote_device_name remote_device_name
     *
     * @return $this
     */
    public function setRemoteDeviceName($remote_device_name)
    {
        $this->container['remote_device_name'] = $remote_device_name;

        return $this;
    }

    /**
     * Gets remote_interface_name
     *
     * @return string
     */
    public function getRemoteInterfaceName()
    {
        return $this->container['remote_interface_name'];
    }

    /**
     * Sets remote_interface_name
     *
     * @param string $remote_interface_name remote_interface_name
     *
     * @return $this
     */
    public function setRemoteInterfaceName($remote_interface_name)
    {
        $this->container['remote_interface_name'] = $remote_interface_name;

        return $this;
    }

    /**
     * Gets remote_mac_address
     *
     * @return string
     */
    public function getRemoteMacAddress()
    {
        return $this->container['remote_mac_address'];
    }

    /**
     * Sets remote_mac_address
     *
     * @param string $remote_mac_address remote_mac_address
     *
     * @return $this
     */
    public function setRemoteMacAddress($remote_mac_address)
    {
        $this->container['remote_mac_address'] = $remote_mac_address;

        return $this;
    }

    /**
     * Gets remote_platform
     *
     * @return string
     */
    public function getRemotePlatform()
    {
        return $this->container['remote_platform'];
    }

    /**
     * Sets remote_platform
     *
     * @param string $remote_platform remote_platform
     *
     * @return $this
     */
    public function setRemotePlatform($remote_platform)
    {
        $this->container['remote_platform'] = $remote_platform;

        return $this;
    }

    /**
     * Gets remote_short_interface_name
     *
     * @return string
     */
    public function getRemoteShortInterfaceName()
    {
        return $this->container['remote_short_interface_name'];
    }

    /**
     * Sets remote_short_interface_name
     *
     * @param string $remote_short_interface_name remote_short_interface_name
     *
     * @return $this
     */
    public function setRemoteShortInterfaceName($remote_short_interface_name)
    {
        $this->container['remote_short_interface_name'] = $remote_short_interface_name;

        return $this;
    }

    /**
     * Gets remote_version
     *
     * @return string
     */
    public function getRemoteVersion()
    {
        return $this->container['remote_version'];
    }

    /**
     * Sets remote_version
     *
     * @param string $remote_version remote_version
     *
     * @return $this
     */
    public function setRemoteVersion($remote_version)
    {
        $this->container['remote_version'] = $remote_version;

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


