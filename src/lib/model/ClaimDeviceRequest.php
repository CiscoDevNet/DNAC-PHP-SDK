<?php
/**
 * ClaimDeviceRequest
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
 * ClaimDeviceRequest Class Doc Comment
 *
 * @category Class
 * @package  cisco\com\dnac\v1\api\client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ClaimDeviceRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ClaimDeviceRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'config_file_url' => 'string',
        'config_id' => 'string',
        'device_claim_list' => '\cisco\com\dnac\v1\api\client\model\ResetRequestDeviceResetList[]',
        'file_service_id' => 'string',
        'image_id' => 'string',
        'image_url' => 'string',
        'project_id' => 'string',
        'workflow_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'config_file_url' => null,
        'config_id' => null,
        'device_claim_list' => null,
        'file_service_id' => null,
        'image_id' => null,
        'image_url' => null,
        'project_id' => null,
        'workflow_id' => null
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
        'config_file_url' => 'configFileUrl',
        'config_id' => 'configId',
        'device_claim_list' => 'deviceClaimList',
        'file_service_id' => 'fileServiceId',
        'image_id' => 'imageId',
        'image_url' => 'imageUrl',
        'project_id' => 'projectId',
        'workflow_id' => 'workflowId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'config_file_url' => 'setConfigFileUrl',
        'config_id' => 'setConfigId',
        'device_claim_list' => 'setDeviceClaimList',
        'file_service_id' => 'setFileServiceId',
        'image_id' => 'setImageId',
        'image_url' => 'setImageUrl',
        'project_id' => 'setProjectId',
        'workflow_id' => 'setWorkflowId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'config_file_url' => 'getConfigFileUrl',
        'config_id' => 'getConfigId',
        'device_claim_list' => 'getDeviceClaimList',
        'file_service_id' => 'getFileServiceId',
        'image_id' => 'getImageId',
        'image_url' => 'getImageUrl',
        'project_id' => 'getProjectId',
        'workflow_id' => 'getWorkflowId'
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
        $this->container['config_file_url'] = isset($data['config_file_url']) ? $data['config_file_url'] : null;
        $this->container['config_id'] = isset($data['config_id']) ? $data['config_id'] : null;
        $this->container['device_claim_list'] = isset($data['device_claim_list']) ? $data['device_claim_list'] : null;
        $this->container['file_service_id'] = isset($data['file_service_id']) ? $data['file_service_id'] : null;
        $this->container['image_id'] = isset($data['image_id']) ? $data['image_id'] : null;
        $this->container['image_url'] = isset($data['image_url']) ? $data['image_url'] : null;
        $this->container['project_id'] = isset($data['project_id']) ? $data['project_id'] : null;
        $this->container['workflow_id'] = isset($data['workflow_id']) ? $data['workflow_id'] : null;
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
     * Gets config_file_url
     *
     * @return string
     */
    public function getConfigFileUrl()
    {
        return $this->container['config_file_url'];
    }

    /**
     * Sets config_file_url
     *
     * @param string $config_file_url config_file_url
     *
     * @return $this
     */
    public function setConfigFileUrl($config_file_url)
    {
        $this->container['config_file_url'] = $config_file_url;

        return $this;
    }

    /**
     * Gets config_id
     *
     * @return string
     */
    public function getConfigId()
    {
        return $this->container['config_id'];
    }

    /**
     * Sets config_id
     *
     * @param string $config_id config_id
     *
     * @return $this
     */
    public function setConfigId($config_id)
    {
        $this->container['config_id'] = $config_id;

        return $this;
    }

    /**
     * Gets device_claim_list
     *
     * @return \cisco\com\dnac\v1\api\client\model\ResetRequestDeviceResetList[]
     */
    public function getDeviceClaimList()
    {
        return $this->container['device_claim_list'];
    }

    /**
     * Sets device_claim_list
     *
     * @param \cisco\com\dnac\v1\api\client\model\ResetRequestDeviceResetList[] $device_claim_list device_claim_list
     *
     * @return $this
     */
    public function setDeviceClaimList($device_claim_list)
    {
        $this->container['device_claim_list'] = $device_claim_list;

        return $this;
    }

    /**
     * Gets file_service_id
     *
     * @return string
     */
    public function getFileServiceId()
    {
        return $this->container['file_service_id'];
    }

    /**
     * Sets file_service_id
     *
     * @param string $file_service_id file_service_id
     *
     * @return $this
     */
    public function setFileServiceId($file_service_id)
    {
        $this->container['file_service_id'] = $file_service_id;

        return $this;
    }

    /**
     * Gets image_id
     *
     * @return string
     */
    public function getImageId()
    {
        return $this->container['image_id'];
    }

    /**
     * Sets image_id
     *
     * @param string $image_id image_id
     *
     * @return $this
     */
    public function setImageId($image_id)
    {
        $this->container['image_id'] = $image_id;

        return $this;
    }

    /**
     * Gets image_url
     *
     * @return string
     */
    public function getImageUrl()
    {
        return $this->container['image_url'];
    }

    /**
     * Sets image_url
     *
     * @param string $image_url image_url
     *
     * @return $this
     */
    public function setImageUrl($image_url)
    {
        $this->container['image_url'] = $image_url;

        return $this;
    }

    /**
     * Gets project_id
     *
     * @return string
     */
    public function getProjectId()
    {
        return $this->container['project_id'];
    }

    /**
     * Sets project_id
     *
     * @param string $project_id project_id
     *
     * @return $this
     */
    public function setProjectId($project_id)
    {
        $this->container['project_id'] = $project_id;

        return $this;
    }

    /**
     * Gets workflow_id
     *
     * @return string
     */
    public function getWorkflowId()
    {
        return $this->container['workflow_id'];
    }

    /**
     * Sets workflow_id
     *
     * @param string $workflow_id workflow_id
     *
     * @return $this
     */
    public function setWorkflowId($workflow_id)
    {
        $this->container['workflow_id'] = $workflow_id;

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


