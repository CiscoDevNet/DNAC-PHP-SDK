<?php
/**
 * PathResponseResultResponseDeviceStatisticsCpuStatistics
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
 * PathResponseResultResponseDeviceStatisticsCpuStatistics Class Doc Comment
 *
 * @category Class
 * @package  cisco\com\dnac\v1\api\client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PathResponseResultResponseDeviceStatisticsCpuStatistics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PathResponseResult_response_deviceStatistics_cpuStatistics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'five_min_usage_in_percentage' => 'float',
        'five_secs_usage_in_percentage' => 'float',
        'one_min_usage_in_percentage' => 'float',
        'refreshed_at' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'five_min_usage_in_percentage' => null,
        'five_secs_usage_in_percentage' => null,
        'one_min_usage_in_percentage' => null,
        'refreshed_at' => null
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
        'five_min_usage_in_percentage' => 'fiveMinUsageInPercentage',
        'five_secs_usage_in_percentage' => 'fiveSecsUsageInPercentage',
        'one_min_usage_in_percentage' => 'oneMinUsageInPercentage',
        'refreshed_at' => 'refreshedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'five_min_usage_in_percentage' => 'setFiveMinUsageInPercentage',
        'five_secs_usage_in_percentage' => 'setFiveSecsUsageInPercentage',
        'one_min_usage_in_percentage' => 'setOneMinUsageInPercentage',
        'refreshed_at' => 'setRefreshedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'five_min_usage_in_percentage' => 'getFiveMinUsageInPercentage',
        'five_secs_usage_in_percentage' => 'getFiveSecsUsageInPercentage',
        'one_min_usage_in_percentage' => 'getOneMinUsageInPercentage',
        'refreshed_at' => 'getRefreshedAt'
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
        $this->container['five_min_usage_in_percentage'] = isset($data['five_min_usage_in_percentage']) ? $data['five_min_usage_in_percentage'] : null;
        $this->container['five_secs_usage_in_percentage'] = isset($data['five_secs_usage_in_percentage']) ? $data['five_secs_usage_in_percentage'] : null;
        $this->container['one_min_usage_in_percentage'] = isset($data['one_min_usage_in_percentage']) ? $data['one_min_usage_in_percentage'] : null;
        $this->container['refreshed_at'] = isset($data['refreshed_at']) ? $data['refreshed_at'] : null;
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
     * Gets five_min_usage_in_percentage
     *
     * @return float
     */
    public function getFiveMinUsageInPercentage()
    {
        return $this->container['five_min_usage_in_percentage'];
    }

    /**
     * Sets five_min_usage_in_percentage
     *
     * @param float $five_min_usage_in_percentage five_min_usage_in_percentage
     *
     * @return $this
     */
    public function setFiveMinUsageInPercentage($five_min_usage_in_percentage)
    {
        $this->container['five_min_usage_in_percentage'] = $five_min_usage_in_percentage;

        return $this;
    }

    /**
     * Gets five_secs_usage_in_percentage
     *
     * @return float
     */
    public function getFiveSecsUsageInPercentage()
    {
        return $this->container['five_secs_usage_in_percentage'];
    }

    /**
     * Sets five_secs_usage_in_percentage
     *
     * @param float $five_secs_usage_in_percentage five_secs_usage_in_percentage
     *
     * @return $this
     */
    public function setFiveSecsUsageInPercentage($five_secs_usage_in_percentage)
    {
        $this->container['five_secs_usage_in_percentage'] = $five_secs_usage_in_percentage;

        return $this;
    }

    /**
     * Gets one_min_usage_in_percentage
     *
     * @return float
     */
    public function getOneMinUsageInPercentage()
    {
        return $this->container['one_min_usage_in_percentage'];
    }

    /**
     * Sets one_min_usage_in_percentage
     *
     * @param float $one_min_usage_in_percentage one_min_usage_in_percentage
     *
     * @return $this
     */
    public function setOneMinUsageInPercentage($one_min_usage_in_percentage)
    {
        $this->container['one_min_usage_in_percentage'] = $one_min_usage_in_percentage;

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

