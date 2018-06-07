<?php
/**
 * FunctionalCapabilityListResultFunctionalCapability
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
 * FunctionalCapabilityListResultFunctionalCapability Class Doc Comment
 *
 * @category Class
 * @package  cisco\com\dnac\v1\api\client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FunctionalCapabilityListResultFunctionalCapability implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FunctionalCapabilityListResult_functionalCapability';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'attribute_info' => 'object',
        'function_details' => '\cisco\com\dnac\v1\api\client\model\FunctionalCapabilityListResultFunctionDetails[]',
        'function_name' => 'string',
        'function_op_state' => 'string',
        'id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'attribute_info' => null,
        'function_details' => null,
        'function_name' => null,
        'function_op_state' => null,
        'id' => null
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
        'function_details' => 'functionDetails',
        'function_name' => 'functionName',
        'function_op_state' => 'functionOpState',
        'id' => 'id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attribute_info' => 'setAttributeInfo',
        'function_details' => 'setFunctionDetails',
        'function_name' => 'setFunctionName',
        'function_op_state' => 'setFunctionOpState',
        'id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attribute_info' => 'getAttributeInfo',
        'function_details' => 'getFunctionDetails',
        'function_name' => 'getFunctionName',
        'function_op_state' => 'getFunctionOpState',
        'id' => 'getId'
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

    const FUNCTION_OP_STATE_UNKNOWN = 'UNKNOWN';
    const FUNCTION_OP_STATE_NOT_APPLICABLE = 'NOT_APPLICABLE';
    const FUNCTION_OP_STATE_DISABLED = 'DISABLED';
    const FUNCTION_OP_STATE_ENABLED = 'ENABLED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFunctionOpStateAllowableValues()
    {
        return [
            self::FUNCTION_OP_STATE_UNKNOWN,
            self::FUNCTION_OP_STATE_NOT_APPLICABLE,
            self::FUNCTION_OP_STATE_DISABLED,
            self::FUNCTION_OP_STATE_ENABLED,
        ];
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
        $this->container['function_details'] = isset($data['function_details']) ? $data['function_details'] : null;
        $this->container['function_name'] = isset($data['function_name']) ? $data['function_name'] : null;
        $this->container['function_op_state'] = isset($data['function_op_state']) ? $data['function_op_state'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getFunctionOpStateAllowableValues();
        if (!in_array($this->container['function_op_state'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'function_op_state', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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

        $allowedValues = $this->getFunctionOpStateAllowableValues();
        if (!in_array($this->container['function_op_state'], $allowedValues)) {
            return false;
        }
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
     * Gets function_details
     *
     * @return \cisco\com\dnac\v1\api\client\model\FunctionalCapabilityListResultFunctionDetails[]
     */
    public function getFunctionDetails()
    {
        return $this->container['function_details'];
    }

    /**
     * Sets function_details
     *
     * @param \cisco\com\dnac\v1\api\client\model\FunctionalCapabilityListResultFunctionDetails[] $function_details function_details
     *
     * @return $this
     */
    public function setFunctionDetails($function_details)
    {
        $this->container['function_details'] = $function_details;

        return $this;
    }

    /**
     * Gets function_name
     *
     * @return string
     */
    public function getFunctionName()
    {
        return $this->container['function_name'];
    }

    /**
     * Sets function_name
     *
     * @param string $function_name function_name
     *
     * @return $this
     */
    public function setFunctionName($function_name)
    {
        $this->container['function_name'] = $function_name;

        return $this;
    }

    /**
     * Gets function_op_state
     *
     * @return string
     */
    public function getFunctionOpState()
    {
        return $this->container['function_op_state'];
    }

    /**
     * Sets function_op_state
     *
     * @param string $function_op_state function_op_state
     *
     * @return $this
     */
    public function setFunctionOpState($function_op_state)
    {
        $allowedValues = $this->getFunctionOpStateAllowableValues();
        if (!is_null($function_op_state) && !in_array($function_op_state, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'function_op_state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['function_op_state'] = $function_op_state;

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


