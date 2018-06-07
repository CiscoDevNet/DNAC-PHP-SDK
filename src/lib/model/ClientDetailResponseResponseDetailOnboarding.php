<?php
/**
 * ClientDetailResponseResponseDetailOnboarding
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
 * ClientDetailResponseResponseDetailOnboarding Class Doc Comment
 *
 * @category Class
 * @package  cisco\com\dnac\v1\api\client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ClientDetailResponseResponseDetailOnboarding implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ClientDetailResponse_response_detail_onboarding';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'average_run_duration' => 'string',
        'max_run_duration' => 'string',
        'average_assoc_duration' => 'string',
        'max_assoc_duration' => 'string',
        'average_auth_duration' => 'string',
        'max_auth_duration' => 'string',
        'average_dhcp_duration' => 'string',
        'max_dhcp_duration' => 'string',
        'aaa_server_ip' => 'string',
        'dhcp_server_ip' => 'string',
        'auth_done_time' => 'string',
        'assoc_done_time' => 'string',
        'dhcp_done_time' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'average_run_duration' => null,
        'max_run_duration' => null,
        'average_assoc_duration' => null,
        'max_assoc_duration' => null,
        'average_auth_duration' => null,
        'max_auth_duration' => null,
        'average_dhcp_duration' => null,
        'max_dhcp_duration' => null,
        'aaa_server_ip' => null,
        'dhcp_server_ip' => null,
        'auth_done_time' => null,
        'assoc_done_time' => null,
        'dhcp_done_time' => null
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
        'average_run_duration' => 'averageRunDuration',
        'max_run_duration' => 'maxRunDuration',
        'average_assoc_duration' => 'averageAssocDuration',
        'max_assoc_duration' => 'maxAssocDuration',
        'average_auth_duration' => 'averageAuthDuration',
        'max_auth_duration' => 'maxAuthDuration',
        'average_dhcp_duration' => 'averageDhcpDuration',
        'max_dhcp_duration' => 'maxDhcpDuration',
        'aaa_server_ip' => 'aaaServerIp',
        'dhcp_server_ip' => 'dhcpServerIp',
        'auth_done_time' => 'authDoneTime',
        'assoc_done_time' => 'assocDoneTime',
        'dhcp_done_time' => 'dhcpDoneTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'average_run_duration' => 'setAverageRunDuration',
        'max_run_duration' => 'setMaxRunDuration',
        'average_assoc_duration' => 'setAverageAssocDuration',
        'max_assoc_duration' => 'setMaxAssocDuration',
        'average_auth_duration' => 'setAverageAuthDuration',
        'max_auth_duration' => 'setMaxAuthDuration',
        'average_dhcp_duration' => 'setAverageDhcpDuration',
        'max_dhcp_duration' => 'setMaxDhcpDuration',
        'aaa_server_ip' => 'setAaaServerIp',
        'dhcp_server_ip' => 'setDhcpServerIp',
        'auth_done_time' => 'setAuthDoneTime',
        'assoc_done_time' => 'setAssocDoneTime',
        'dhcp_done_time' => 'setDhcpDoneTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'average_run_duration' => 'getAverageRunDuration',
        'max_run_duration' => 'getMaxRunDuration',
        'average_assoc_duration' => 'getAverageAssocDuration',
        'max_assoc_duration' => 'getMaxAssocDuration',
        'average_auth_duration' => 'getAverageAuthDuration',
        'max_auth_duration' => 'getMaxAuthDuration',
        'average_dhcp_duration' => 'getAverageDhcpDuration',
        'max_dhcp_duration' => 'getMaxDhcpDuration',
        'aaa_server_ip' => 'getAaaServerIp',
        'dhcp_server_ip' => 'getDhcpServerIp',
        'auth_done_time' => 'getAuthDoneTime',
        'assoc_done_time' => 'getAssocDoneTime',
        'dhcp_done_time' => 'getDhcpDoneTime'
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
        $this->container['average_run_duration'] = isset($data['average_run_duration']) ? $data['average_run_duration'] : null;
        $this->container['max_run_duration'] = isset($data['max_run_duration']) ? $data['max_run_duration'] : null;
        $this->container['average_assoc_duration'] = isset($data['average_assoc_duration']) ? $data['average_assoc_duration'] : null;
        $this->container['max_assoc_duration'] = isset($data['max_assoc_duration']) ? $data['max_assoc_duration'] : null;
        $this->container['average_auth_duration'] = isset($data['average_auth_duration']) ? $data['average_auth_duration'] : null;
        $this->container['max_auth_duration'] = isset($data['max_auth_duration']) ? $data['max_auth_duration'] : null;
        $this->container['average_dhcp_duration'] = isset($data['average_dhcp_duration']) ? $data['average_dhcp_duration'] : null;
        $this->container['max_dhcp_duration'] = isset($data['max_dhcp_duration']) ? $data['max_dhcp_duration'] : null;
        $this->container['aaa_server_ip'] = isset($data['aaa_server_ip']) ? $data['aaa_server_ip'] : null;
        $this->container['dhcp_server_ip'] = isset($data['dhcp_server_ip']) ? $data['dhcp_server_ip'] : null;
        $this->container['auth_done_time'] = isset($data['auth_done_time']) ? $data['auth_done_time'] : null;
        $this->container['assoc_done_time'] = isset($data['assoc_done_time']) ? $data['assoc_done_time'] : null;
        $this->container['dhcp_done_time'] = isset($data['dhcp_done_time']) ? $data['dhcp_done_time'] : null;
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
     * Gets average_run_duration
     *
     * @return string
     */
    public function getAverageRunDuration()
    {
        return $this->container['average_run_duration'];
    }

    /**
     * Sets average_run_duration
     *
     * @param string $average_run_duration average_run_duration
     *
     * @return $this
     */
    public function setAverageRunDuration($average_run_duration)
    {
        $this->container['average_run_duration'] = $average_run_duration;

        return $this;
    }

    /**
     * Gets max_run_duration
     *
     * @return string
     */
    public function getMaxRunDuration()
    {
        return $this->container['max_run_duration'];
    }

    /**
     * Sets max_run_duration
     *
     * @param string $max_run_duration max_run_duration
     *
     * @return $this
     */
    public function setMaxRunDuration($max_run_duration)
    {
        $this->container['max_run_duration'] = $max_run_duration;

        return $this;
    }

    /**
     * Gets average_assoc_duration
     *
     * @return string
     */
    public function getAverageAssocDuration()
    {
        return $this->container['average_assoc_duration'];
    }

    /**
     * Sets average_assoc_duration
     *
     * @param string $average_assoc_duration average_assoc_duration
     *
     * @return $this
     */
    public function setAverageAssocDuration($average_assoc_duration)
    {
        $this->container['average_assoc_duration'] = $average_assoc_duration;

        return $this;
    }

    /**
     * Gets max_assoc_duration
     *
     * @return string
     */
    public function getMaxAssocDuration()
    {
        return $this->container['max_assoc_duration'];
    }

    /**
     * Sets max_assoc_duration
     *
     * @param string $max_assoc_duration max_assoc_duration
     *
     * @return $this
     */
    public function setMaxAssocDuration($max_assoc_duration)
    {
        $this->container['max_assoc_duration'] = $max_assoc_duration;

        return $this;
    }

    /**
     * Gets average_auth_duration
     *
     * @return string
     */
    public function getAverageAuthDuration()
    {
        return $this->container['average_auth_duration'];
    }

    /**
     * Sets average_auth_duration
     *
     * @param string $average_auth_duration average_auth_duration
     *
     * @return $this
     */
    public function setAverageAuthDuration($average_auth_duration)
    {
        $this->container['average_auth_duration'] = $average_auth_duration;

        return $this;
    }

    /**
     * Gets max_auth_duration
     *
     * @return string
     */
    public function getMaxAuthDuration()
    {
        return $this->container['max_auth_duration'];
    }

    /**
     * Sets max_auth_duration
     *
     * @param string $max_auth_duration max_auth_duration
     *
     * @return $this
     */
    public function setMaxAuthDuration($max_auth_duration)
    {
        $this->container['max_auth_duration'] = $max_auth_duration;

        return $this;
    }

    /**
     * Gets average_dhcp_duration
     *
     * @return string
     */
    public function getAverageDhcpDuration()
    {
        return $this->container['average_dhcp_duration'];
    }

    /**
     * Sets average_dhcp_duration
     *
     * @param string $average_dhcp_duration average_dhcp_duration
     *
     * @return $this
     */
    public function setAverageDhcpDuration($average_dhcp_duration)
    {
        $this->container['average_dhcp_duration'] = $average_dhcp_duration;

        return $this;
    }

    /**
     * Gets max_dhcp_duration
     *
     * @return string
     */
    public function getMaxDhcpDuration()
    {
        return $this->container['max_dhcp_duration'];
    }

    /**
     * Sets max_dhcp_duration
     *
     * @param string $max_dhcp_duration max_dhcp_duration
     *
     * @return $this
     */
    public function setMaxDhcpDuration($max_dhcp_duration)
    {
        $this->container['max_dhcp_duration'] = $max_dhcp_duration;

        return $this;
    }

    /**
     * Gets aaa_server_ip
     *
     * @return string
     */
    public function getAaaServerIp()
    {
        return $this->container['aaa_server_ip'];
    }

    /**
     * Sets aaa_server_ip
     *
     * @param string $aaa_server_ip aaa_server_ip
     *
     * @return $this
     */
    public function setAaaServerIp($aaa_server_ip)
    {
        $this->container['aaa_server_ip'] = $aaa_server_ip;

        return $this;
    }

    /**
     * Gets dhcp_server_ip
     *
     * @return string
     */
    public function getDhcpServerIp()
    {
        return $this->container['dhcp_server_ip'];
    }

    /**
     * Sets dhcp_server_ip
     *
     * @param string $dhcp_server_ip dhcp_server_ip
     *
     * @return $this
     */
    public function setDhcpServerIp($dhcp_server_ip)
    {
        $this->container['dhcp_server_ip'] = $dhcp_server_ip;

        return $this;
    }

    /**
     * Gets auth_done_time
     *
     * @return string
     */
    public function getAuthDoneTime()
    {
        return $this->container['auth_done_time'];
    }

    /**
     * Sets auth_done_time
     *
     * @param string $auth_done_time auth_done_time
     *
     * @return $this
     */
    public function setAuthDoneTime($auth_done_time)
    {
        $this->container['auth_done_time'] = $auth_done_time;

        return $this;
    }

    /**
     * Gets assoc_done_time
     *
     * @return string
     */
    public function getAssocDoneTime()
    {
        return $this->container['assoc_done_time'];
    }

    /**
     * Sets assoc_done_time
     *
     * @param string $assoc_done_time assoc_done_time
     *
     * @return $this
     */
    public function setAssocDoneTime($assoc_done_time)
    {
        $this->container['assoc_done_time'] = $assoc_done_time;

        return $this;
    }

    /**
     * Gets dhcp_done_time
     *
     * @return string
     */
    public function getDhcpDoneTime()
    {
        return $this->container['dhcp_done_time'];
    }

    /**
     * Sets dhcp_done_time
     *
     * @param string $dhcp_done_time dhcp_done_time
     *
     * @return $this
     */
    public function setDhcpDoneTime($dhcp_done_time)
    {
        $this->container['dhcp_done_time'] = $dhcp_done_time;

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

