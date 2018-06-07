<?php
/**
 * SystemPropertyListResultResponse
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
 * SystemPropertyListResultResponse Class Doc Comment
 *
 * @category Class
 * @package  cisco\com\dnac\v1\api\client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SystemPropertyListResultResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SystemPropertyListResult_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'instance_tenant_id' => 'string',
        'instance_uuid' => 'string',
        'int_value' => 'int',
        'system_property_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'instance_tenant_id' => null,
        'instance_uuid' => null,
        'int_value' => null,
        'system_property_name' => null
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
        'id' => 'id',
        'instance_tenant_id' => 'instanceTenantId',
        'instance_uuid' => 'instanceUuid',
        'int_value' => 'intValue',
        'system_property_name' => 'systemPropertyName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'instance_tenant_id' => 'setInstanceTenantId',
        'instance_uuid' => 'setInstanceUuid',
        'int_value' => 'setIntValue',
        'system_property_name' => 'setSystemPropertyName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'instance_tenant_id' => 'getInstanceTenantId',
        'instance_uuid' => 'getInstanceUuid',
        'int_value' => 'getIntValue',
        'system_property_name' => 'getSystemPropertyName'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['instance_tenant_id'] = isset($data['instance_tenant_id']) ? $data['instance_tenant_id'] : null;
        $this->container['instance_uuid'] = isset($data['instance_uuid']) ? $data['instance_uuid'] : null;
        $this->container['int_value'] = isset($data['int_value']) ? $data['int_value'] : null;
        $this->container['system_property_name'] = isset($data['system_property_name']) ? $data['system_property_name'] : null;
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
     * Gets instance_tenant_id
     *
     * @return string
     */
    public function getInstanceTenantId()
    {
        return $this->container['instance_tenant_id'];
    }

    /**
     * Sets instance_tenant_id
     *
     * @param string $instance_tenant_id instance_tenant_id
     *
     * @return $this
     */
    public function setInstanceTenantId($instance_tenant_id)
    {
        $this->container['instance_tenant_id'] = $instance_tenant_id;

        return $this;
    }

    /**
     * Gets instance_uuid
     *
     * @return string
     */
    public function getInstanceUuid()
    {
        return $this->container['instance_uuid'];
    }

    /**
     * Sets instance_uuid
     *
     * @param string $instance_uuid instance_uuid
     *
     * @return $this
     */
    public function setInstanceUuid($instance_uuid)
    {
        $this->container['instance_uuid'] = $instance_uuid;

        return $this;
    }

    /**
     * Gets int_value
     *
     * @return int
     */
    public function getIntValue()
    {
        return $this->container['int_value'];
    }

    /**
     * Sets int_value
     *
     * @param int $int_value int_value
     *
     * @return $this
     */
    public function setIntValue($int_value)
    {
        $this->container['int_value'] = $int_value;

        return $this;
    }

    /**
     * Gets system_property_name
     *
     * @return string
     */
    public function getSystemPropertyName()
    {
        return $this->container['system_property_name'];
    }

    /**
     * Sets system_property_name
     *
     * @param string $system_property_name system_property_name
     *
     * @return $this
     */
    public function setSystemPropertyName($system_property_name)
    {
        $this->container['system_property_name'] = $system_property_name;

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

