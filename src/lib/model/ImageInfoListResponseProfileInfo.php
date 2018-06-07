<?php
/**
 * ImageInfoListResponseProfileInfo
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
 * ImageInfoListResponseProfileInfo Class Doc Comment
 *
 * @category Class
 * @package  cisco\com\dnac\v1\api\client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ImageInfoListResponseProfileInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ImageInfoListResponse_profileInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'description' => 'string',
        'extended_attributes' => 'object',
        'memory' => 'int',
        'product_type' => 'string',
        'profile_name' => 'string',
        'shares' => 'int',
        'v_cpu' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'description' => null,
        'extended_attributes' => null,
        'memory' => null,
        'product_type' => null,
        'profile_name' => null,
        'shares' => null,
        'v_cpu' => null
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
        'description' => 'description',
        'extended_attributes' => 'extendedAttributes',
        'memory' => 'memory',
        'product_type' => 'productType',
        'profile_name' => 'profileName',
        'shares' => 'shares',
        'v_cpu' => 'vCpu'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'extended_attributes' => 'setExtendedAttributes',
        'memory' => 'setMemory',
        'product_type' => 'setProductType',
        'profile_name' => 'setProfileName',
        'shares' => 'setShares',
        'v_cpu' => 'setVCpu'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'extended_attributes' => 'getExtendedAttributes',
        'memory' => 'getMemory',
        'product_type' => 'getProductType',
        'profile_name' => 'getProfileName',
        'shares' => 'getShares',
        'v_cpu' => 'getVCpu'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['extended_attributes'] = isset($data['extended_attributes']) ? $data['extended_attributes'] : null;
        $this->container['memory'] = isset($data['memory']) ? $data['memory'] : null;
        $this->container['product_type'] = isset($data['product_type']) ? $data['product_type'] : null;
        $this->container['profile_name'] = isset($data['profile_name']) ? $data['profile_name'] : null;
        $this->container['shares'] = isset($data['shares']) ? $data['shares'] : null;
        $this->container['v_cpu'] = isset($data['v_cpu']) ? $data['v_cpu'] : null;
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
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets extended_attributes
     *
     * @return object
     */
    public function getExtendedAttributes()
    {
        return $this->container['extended_attributes'];
    }

    /**
     * Sets extended_attributes
     *
     * @param object $extended_attributes extended_attributes
     *
     * @return $this
     */
    public function setExtendedAttributes($extended_attributes)
    {
        $this->container['extended_attributes'] = $extended_attributes;

        return $this;
    }

    /**
     * Gets memory
     *
     * @return int
     */
    public function getMemory()
    {
        return $this->container['memory'];
    }

    /**
     * Sets memory
     *
     * @param int $memory memory
     *
     * @return $this
     */
    public function setMemory($memory)
    {
        $this->container['memory'] = $memory;

        return $this;
    }

    /**
     * Gets product_type
     *
     * @return string
     */
    public function getProductType()
    {
        return $this->container['product_type'];
    }

    /**
     * Sets product_type
     *
     * @param string $product_type product_type
     *
     * @return $this
     */
    public function setProductType($product_type)
    {
        $this->container['product_type'] = $product_type;

        return $this;
    }

    /**
     * Gets profile_name
     *
     * @return string
     */
    public function getProfileName()
    {
        return $this->container['profile_name'];
    }

    /**
     * Sets profile_name
     *
     * @param string $profile_name profile_name
     *
     * @return $this
     */
    public function setProfileName($profile_name)
    {
        $this->container['profile_name'] = $profile_name;

        return $this;
    }

    /**
     * Gets shares
     *
     * @return int
     */
    public function getShares()
    {
        return $this->container['shares'];
    }

    /**
     * Sets shares
     *
     * @param int $shares shares
     *
     * @return $this
     */
    public function setShares($shares)
    {
        $this->container['shares'] = $shares;

        return $this;
    }

    /**
     * Gets v_cpu
     *
     * @return int
     */
    public function getVCpu()
    {
        return $this->container['v_cpu'];
    }

    /**
     * Sets v_cpu
     *
     * @param int $v_cpu v_cpu
     *
     * @return $this
     */
    public function setVCpu($v_cpu)
    {
        $this->container['v_cpu'] = $v_cpu;

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

