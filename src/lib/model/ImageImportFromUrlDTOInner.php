<?php
/**
 * ImageImportFromUrlDTOInner
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
 * ImageImportFromUrlDTOInner Class Doc Comment
 *
 * @category Class
 * @package  cisco\com\dnac\v1\api\client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ImageImportFromUrlDTOInner implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ImageImportFromUrlDTO_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'application_type' => 'string',
        'image_family' => 'string',
        'source_url' => 'string',
        'third_party' => 'bool',
        'vendor' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'application_type' => null,
        'image_family' => null,
        'source_url' => null,
        'third_party' => null,
        'vendor' => null
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
        'application_type' => 'applicationType',
        'image_family' => 'imageFamily',
        'source_url' => 'sourceURL',
        'third_party' => 'thirdParty',
        'vendor' => 'vendor'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'application_type' => 'setApplicationType',
        'image_family' => 'setImageFamily',
        'source_url' => 'setSourceUrl',
        'third_party' => 'setThirdParty',
        'vendor' => 'setVendor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'application_type' => 'getApplicationType',
        'image_family' => 'getImageFamily',
        'source_url' => 'getSourceUrl',
        'third_party' => 'getThirdParty',
        'vendor' => 'getVendor'
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
        $this->container['application_type'] = isset($data['application_type']) ? $data['application_type'] : null;
        $this->container['image_family'] = isset($data['image_family']) ? $data['image_family'] : null;
        $this->container['source_url'] = isset($data['source_url']) ? $data['source_url'] : null;
        $this->container['third_party'] = isset($data['third_party']) ? $data['third_party'] : null;
        $this->container['vendor'] = isset($data['vendor']) ? $data['vendor'] : null;
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
     * Gets application_type
     *
     * @return string
     */
    public function getApplicationType()
    {
        return $this->container['application_type'];
    }

    /**
     * Sets application_type
     *
     * @param string $application_type application_type
     *
     * @return $this
     */
    public function setApplicationType($application_type)
    {
        $this->container['application_type'] = $application_type;

        return $this;
    }

    /**
     * Gets image_family
     *
     * @return string
     */
    public function getImageFamily()
    {
        return $this->container['image_family'];
    }

    /**
     * Sets image_family
     *
     * @param string $image_family image_family
     *
     * @return $this
     */
    public function setImageFamily($image_family)
    {
        $this->container['image_family'] = $image_family;

        return $this;
    }

    /**
     * Gets source_url
     *
     * @return string
     */
    public function getSourceUrl()
    {
        return $this->container['source_url'];
    }

    /**
     * Sets source_url
     *
     * @param string $source_url source_url
     *
     * @return $this
     */
    public function setSourceUrl($source_url)
    {
        $this->container['source_url'] = $source_url;

        return $this;
    }

    /**
     * Gets third_party
     *
     * @return bool
     */
    public function getThirdParty()
    {
        return $this->container['third_party'];
    }

    /**
     * Sets third_party
     *
     * @param bool $third_party third_party
     *
     * @return $this
     */
    public function setThirdParty($third_party)
    {
        $this->container['third_party'] = $third_party;

        return $this;
    }

    /**
     * Gets vendor
     *
     * @return string
     */
    public function getVendor()
    {
        return $this->container['vendor'];
    }

    /**
     * Sets vendor
     *
     * @param string $vendor vendor
     *
     * @return $this
     */
    public function setVendor($vendor)
    {
        $this->container['vendor'] = $vendor;

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


