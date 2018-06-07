<?php
/**
 * DeviceInner
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
 * DeviceInner Class Doc Comment
 *
 * @category Class
 * @package  cisco\com\dnac\v1\api\client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DeviceInner implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Device_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        '_id' => 'string',
        'device_info' => '\cisco\com\dnac\v1\api\client\model\DeviceInnerDeviceInfo',
        'run_summary_list' => '\cisco\com\dnac\v1\api\client\model\DeviceInnerRunSummaryList[]',
        'system_reset_workflow' => '\cisco\com\dnac\v1\api\client\model\DeviceInnerSystemResetWorkflow',
        'system_workflow' => '\cisco\com\dnac\v1\api\client\model\DeviceInnerSystemResetWorkflow',
        'tenant_id' => 'string',
        'version' => 'int',
        'workflow' => '\cisco\com\dnac\v1\api\client\model\DeviceInnerSystemResetWorkflow',
        'workflow_parameters' => '\cisco\com\dnac\v1\api\client\model\DeviceInnerWorkflowParameters'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        '_id' => null,
        'device_info' => null,
        'run_summary_list' => null,
        'system_reset_workflow' => null,
        'system_workflow' => null,
        'tenant_id' => null,
        'version' => null,
        'workflow' => null,
        'workflow_parameters' => null
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
        '_id' => '_id',
        'device_info' => 'deviceInfo',
        'run_summary_list' => 'runSummaryList',
        'system_reset_workflow' => 'systemResetWorkflow',
        'system_workflow' => 'systemWorkflow',
        'tenant_id' => 'tenantId',
        'version' => 'version',
        'workflow' => 'workflow',
        'workflow_parameters' => 'workflowParameters'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_id' => 'setId',
        'device_info' => 'setDeviceInfo',
        'run_summary_list' => 'setRunSummaryList',
        'system_reset_workflow' => 'setSystemResetWorkflow',
        'system_workflow' => 'setSystemWorkflow',
        'tenant_id' => 'setTenantId',
        'version' => 'setVersion',
        'workflow' => 'setWorkflow',
        'workflow_parameters' => 'setWorkflowParameters'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_id' => 'getId',
        'device_info' => 'getDeviceInfo',
        'run_summary_list' => 'getRunSummaryList',
        'system_reset_workflow' => 'getSystemResetWorkflow',
        'system_workflow' => 'getSystemWorkflow',
        'tenant_id' => 'getTenantId',
        'version' => 'getVersion',
        'workflow' => 'getWorkflow',
        'workflow_parameters' => 'getWorkflowParameters'
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
        $this->container['_id'] = isset($data['_id']) ? $data['_id'] : null;
        $this->container['device_info'] = isset($data['device_info']) ? $data['device_info'] : null;
        $this->container['run_summary_list'] = isset($data['run_summary_list']) ? $data['run_summary_list'] : null;
        $this->container['system_reset_workflow'] = isset($data['system_reset_workflow']) ? $data['system_reset_workflow'] : null;
        $this->container['system_workflow'] = isset($data['system_workflow']) ? $data['system_workflow'] : null;
        $this->container['tenant_id'] = isset($data['tenant_id']) ? $data['tenant_id'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['workflow'] = isset($data['workflow']) ? $data['workflow'] : null;
        $this->container['workflow_parameters'] = isset($data['workflow_parameters']) ? $data['workflow_parameters'] : null;
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
     * Gets _id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['_id'];
    }

    /**
     * Sets _id
     *
     * @param string $_id _id
     *
     * @return $this
     */
    public function setId($_id)
    {
        $this->container['_id'] = $_id;

        return $this;
    }

    /**
     * Gets device_info
     *
     * @return \cisco\com\dnac\v1\api\client\model\DeviceInnerDeviceInfo
     */
    public function getDeviceInfo()
    {
        return $this->container['device_info'];
    }

    /**
     * Sets device_info
     *
     * @param \cisco\com\dnac\v1\api\client\model\DeviceInnerDeviceInfo $device_info device_info
     *
     * @return $this
     */
    public function setDeviceInfo($device_info)
    {
        $this->container['device_info'] = $device_info;

        return $this;
    }

    /**
     * Gets run_summary_list
     *
     * @return \cisco\com\dnac\v1\api\client\model\DeviceInnerRunSummaryList[]
     */
    public function getRunSummaryList()
    {
        return $this->container['run_summary_list'];
    }

    /**
     * Sets run_summary_list
     *
     * @param \cisco\com\dnac\v1\api\client\model\DeviceInnerRunSummaryList[] $run_summary_list run_summary_list
     *
     * @return $this
     */
    public function setRunSummaryList($run_summary_list)
    {
        $this->container['run_summary_list'] = $run_summary_list;

        return $this;
    }

    /**
     * Gets system_reset_workflow
     *
     * @return \cisco\com\dnac\v1\api\client\model\DeviceInnerSystemResetWorkflow
     */
    public function getSystemResetWorkflow()
    {
        return $this->container['system_reset_workflow'];
    }

    /**
     * Sets system_reset_workflow
     *
     * @param \cisco\com\dnac\v1\api\client\model\DeviceInnerSystemResetWorkflow $system_reset_workflow system_reset_workflow
     *
     * @return $this
     */
    public function setSystemResetWorkflow($system_reset_workflow)
    {
        $this->container['system_reset_workflow'] = $system_reset_workflow;

        return $this;
    }

    /**
     * Gets system_workflow
     *
     * @return \cisco\com\dnac\v1\api\client\model\DeviceInnerSystemResetWorkflow
     */
    public function getSystemWorkflow()
    {
        return $this->container['system_workflow'];
    }

    /**
     * Sets system_workflow
     *
     * @param \cisco\com\dnac\v1\api\client\model\DeviceInnerSystemResetWorkflow $system_workflow system_workflow
     *
     * @return $this
     */
    public function setSystemWorkflow($system_workflow)
    {
        $this->container['system_workflow'] = $system_workflow;

        return $this;
    }

    /**
     * Gets tenant_id
     *
     * @return string
     */
    public function getTenantId()
    {
        return $this->container['tenant_id'];
    }

    /**
     * Sets tenant_id
     *
     * @param string $tenant_id tenant_id
     *
     * @return $this
     */
    public function setTenantId($tenant_id)
    {
        $this->container['tenant_id'] = $tenant_id;

        return $this;
    }

    /**
     * Gets version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets workflow
     *
     * @return \cisco\com\dnac\v1\api\client\model\DeviceInnerSystemResetWorkflow
     */
    public function getWorkflow()
    {
        return $this->container['workflow'];
    }

    /**
     * Sets workflow
     *
     * @param \cisco\com\dnac\v1\api\client\model\DeviceInnerSystemResetWorkflow $workflow workflow
     *
     * @return $this
     */
    public function setWorkflow($workflow)
    {
        $this->container['workflow'] = $workflow;

        return $this;
    }

    /**
     * Gets workflow_parameters
     *
     * @return \cisco\com\dnac\v1\api\client\model\DeviceInnerWorkflowParameters
     */
    public function getWorkflowParameters()
    {
        return $this->container['workflow_parameters'];
    }

    /**
     * Sets workflow_parameters
     *
     * @param \cisco\com\dnac\v1\api\client\model\DeviceInnerWorkflowParameters $workflow_parameters workflow_parameters
     *
     * @return $this
     */
    public function setWorkflowParameters($workflow_parameters)
    {
        $this->container['workflow_parameters'] = $workflow_parameters;

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


