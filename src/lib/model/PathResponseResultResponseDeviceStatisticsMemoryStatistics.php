<?php
/**
 * PathResponseResultResponseDeviceStatisticsMemoryStatistics
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
 * PathResponseResultResponseDeviceStatisticsMemoryStatistics Class Doc Comment
 *
 * @category Class
 * @package  cisco\com\dnac\v1\api\client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PathResponseResultResponseDeviceStatisticsMemoryStatistics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PathResponseResult_response_deviceStatistics_memoryStatistics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'memory_usage' => 'int',
        'refreshed_at' => 'int',
        'total_memory' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'memory_usage' => null,
        'refreshed_at' => null,
        'total_memory' => null
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
        'memory_usage' => 'memoryUsage',
        'refreshed_at' => 'refreshedAt',
        'total_memory' => 'totalMemory'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'memory_usage' => 'setMemoryUsage',
        'refreshed_at' => 'setRefreshedAt',
        'total_memory' => 'setTotalMemory'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'memory_usage' => 'getMemoryUsage',
        'refreshed_at' => 'getRefreshedAt',
        'total_memory' => 'getTotalMemory'
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
        $this->container['memory_usage'] = isset($data['memory_usage']) ? $data['memory_usage'] : null;
        $this->container['refreshed_at'] = isset($data['refreshed_at']) ? $data['refreshed_at'] : null;
        $this->container['total_memory'] = isset($data['total_memory']) ? $data['total_memory'] : null;
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
     * Gets memory_usage
     *
     * @return int
     */
    public function getMemoryUsage()
    {
        return $this->container['memory_usage'];
    }

    /**
     * Sets memory_usage
     *
     * @param int $memory_usage memory_usage
     *
     * @return $this
     */
    public function setMemoryUsage($memory_usage)
    {
        $this->container['memory_usage'] = $memory_usage;

        return $this;
    }

    /**
     * Gets refreshed_at
     *
     * @return int
     */
    public function getRefreshedAt()
    {
        return $this->container['refreshed_at'];
    }

    /**
     * Sets refreshed_at
     *
     * @param int $refreshed_at refreshed_at
     *
     * @return $this
     */
    public function setRefreshedAt($refreshed_at)
    {
        $this->container['refreshed_at'] = $refreshed_at;

        return $this;
    }

    /**
     * Gets total_memory
     *
     * @return int
     */
    public function getTotalMemory()
    {
        return $this->container['total_memory'];
    }

    /**
     * Sets total_memory
     *
     * @param int $total_memory total_memory
     *
     * @return $this
     */
    public function setTotalMemory($total_memory)
    {
        $this->container['total_memory'] = $total_memory;

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


