<?php
/**
 * SettingsDefaultProfile
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
 * SettingsDefaultProfile Class Doc Comment
 *
 * @category Class
 * @package  cisco\com\dnac\v1\api\client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SettingsDefaultProfile implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Settings_defaultProfile';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cert' => 'string',
        'fqdn_addresses' => 'string[]',
        'ip_addresses' => 'string[]',
        'port' => 'int',
        'proxy' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cert' => null,
        'fqdn_addresses' => null,
        'ip_addresses' => null,
        'port' => null,
        'proxy' => null
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
        'cert' => 'cert',
        'fqdn_addresses' => 'fqdnAddresses',
        'ip_addresses' => 'ipAddresses',
        'port' => 'port',
        'proxy' => 'proxy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cert' => 'setCert',
        'fqdn_addresses' => 'setFqdnAddresses',
        'ip_addresses' => 'setIpAddresses',
        'port' => 'setPort',
        'proxy' => 'setProxy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cert' => 'getCert',
        'fqdn_addresses' => 'getFqdnAddresses',
        'ip_addresses' => 'getIpAddresses',
        'port' => 'getPort',
        'proxy' => 'getProxy'
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
        $this->container['cert'] = isset($data['cert']) ? $data['cert'] : null;
        $this->container['fqdn_addresses'] = isset($data['fqdn_addresses']) ? $data['fqdn_addresses'] : null;
        $this->container['ip_addresses'] = isset($data['ip_addresses']) ? $data['ip_addresses'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['proxy'] = isset($data['proxy']) ? $data['proxy'] : null;
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
     * Gets cert
     *
     * @return string
     */
    public function getCert()
    {
        return $this->container['cert'];
    }

    /**
     * Sets cert
     *
     * @param string $cert cert
     *
     * @return $this
     */
    public function setCert($cert)
    {
        $this->container['cert'] = $cert;

        return $this;
    }

    /**
     * Gets fqdn_addresses
     *
     * @return string[]
     */
    public function getFqdnAddresses()
    {
        return $this->container['fqdn_addresses'];
    }

    /**
     * Sets fqdn_addresses
     *
     * @param string[] $fqdn_addresses fqdn_addresses
     *
     * @return $this
     */
    public function setFqdnAddresses($fqdn_addresses)
    {
        $this->container['fqdn_addresses'] = $fqdn_addresses;

        return $this;
    }

    /**
     * Gets ip_addresses
     *
     * @return string[]
     */
    public function getIpAddresses()
    {
        return $this->container['ip_addresses'];
    }

    /**
     * Sets ip_addresses
     *
     * @param string[] $ip_addresses ip_addresses
     *
     * @return $this
     */
    public function setIpAddresses($ip_addresses)
    {
        $this->container['ip_addresses'] = $ip_addresses;

        return $this;
    }

    /**
     * Gets port
     *
     * @return int
     */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
     * Sets port
     *
     * @param int $port port
     *
     * @return $this
     */
    public function setPort($port)
    {
        $this->container['port'] = $port;

        return $this;
    }

    /**
     * Gets proxy
     *
     * @return bool
     */
    public function getProxy()
    {
        return $this->container['proxy'];
    }

    /**
     * Sets proxy
     *
     * @param bool $proxy proxy
     *
     * @return $this
     */
    public function setProxy($proxy)
    {
        $this->container['proxy'] = $proxy;

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


