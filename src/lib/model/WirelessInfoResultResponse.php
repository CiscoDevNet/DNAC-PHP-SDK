<?php
/**
 * WirelessInfoResultResponse
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
 * WirelessInfoResultResponse Class Doc Comment
 *
 * @category Class
 * @package  cisco\com\dnac\v1\api\client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WirelessInfoResultResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WirelessInfoResult_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'admin_enabled_ports' => 'int[]',
        'ap_group_name' => 'string',
        'device_id' => 'string',
        'eth_mac_address' => 'string',
        'flex_group_name' => 'string',
        'id' => 'string',
        'instance_tenant_id' => 'string',
        'instance_uuid' => 'string',
        'lag_mode_enabled' => 'bool',
        'netconf_enabled' => 'bool',
        'wireless_license_info' => 'string',
        'wireless_package_installed' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'admin_enabled_ports' => null,
        'ap_group_name' => null,
        'device_id' => null,
        'eth_mac_address' => null,
        'flex_group_name' => null,
        'id' => null,
        'instance_tenant_id' => null,
        'instance_uuid' => null,
        'lag_mode_enabled' => null,
        'netconf_enabled' => null,
        'wireless_license_info' => null,
        'wireless_package_installed' => null
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
        'admin_enabled_ports' => 'adminEnabledPorts',
        'ap_group_name' => 'apGroupName',
        'device_id' => 'deviceId',
        'eth_mac_address' => 'ethMacAddress',
        'flex_group_name' => 'flexGroupName',
        'id' => 'id',
        'instance_tenant_id' => 'instanceTenantId',
        'instance_uuid' => 'instanceUuid',
        'lag_mode_enabled' => 'lagModeEnabled',
        'netconf_enabled' => 'netconfEnabled',
        'wireless_license_info' => 'wirelessLicenseInfo',
        'wireless_package_installed' => 'wirelessPackageInstalled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'admin_enabled_ports' => 'setAdminEnabledPorts',
        'ap_group_name' => 'setApGroupName',
        'device_id' => 'setDeviceId',
        'eth_mac_address' => 'setEthMacAddress',
        'flex_group_name' => 'setFlexGroupName',
        'id' => 'setId',
        'instance_tenant_id' => 'setInstanceTenantId',
        'instance_uuid' => 'setInstanceUuid',
        'lag_mode_enabled' => 'setLagModeEnabled',
        'netconf_enabled' => 'setNetconfEnabled',
        'wireless_license_info' => 'setWirelessLicenseInfo',
        'wireless_package_installed' => 'setWirelessPackageInstalled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'admin_enabled_ports' => 'getAdminEnabledPorts',
        'ap_group_name' => 'getApGroupName',
        'device_id' => 'getDeviceId',
        'eth_mac_address' => 'getEthMacAddress',
        'flex_group_name' => 'getFlexGroupName',
        'id' => 'getId',
        'instance_tenant_id' => 'getInstanceTenantId',
        'instance_uuid' => 'getInstanceUuid',
        'lag_mode_enabled' => 'getLagModeEnabled',
        'netconf_enabled' => 'getNetconfEnabled',
        'wireless_license_info' => 'getWirelessLicenseInfo',
        'wireless_package_installed' => 'getWirelessPackageInstalled'
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

    const WIRELESS_LICENSE_INFO_ADVANTAGE = 'ADVANTAGE';
    const WIRELESS_LICENSE_INFO_ESSENTIALS = 'ESSENTIALS';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWirelessLicenseInfoAllowableValues()
    {
        return [
            self::WIRELESS_LICENSE_INFO_ADVANTAGE,
            self::WIRELESS_LICENSE_INFO_ESSENTIALS,
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
        $this->container['admin_enabled_ports'] = isset($data['admin_enabled_ports']) ? $data['admin_enabled_ports'] : null;
        $this->container['ap_group_name'] = isset($data['ap_group_name']) ? $data['ap_group_name'] : null;
        $this->container['device_id'] = isset($data['device_id']) ? $data['device_id'] : null;
        $this->container['eth_mac_address'] = isset($data['eth_mac_address']) ? $data['eth_mac_address'] : null;
        $this->container['flex_group_name'] = isset($data['flex_group_name']) ? $data['flex_group_name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['instance_tenant_id'] = isset($data['instance_tenant_id']) ? $data['instance_tenant_id'] : null;
        $this->container['instance_uuid'] = isset($data['instance_uuid']) ? $data['instance_uuid'] : null;
        $this->container['lag_mode_enabled'] = isset($data['lag_mode_enabled']) ? $data['lag_mode_enabled'] : null;
        $this->container['netconf_enabled'] = isset($data['netconf_enabled']) ? $data['netconf_enabled'] : null;
        $this->container['wireless_license_info'] = isset($data['wireless_license_info']) ? $data['wireless_license_info'] : null;
        $this->container['wireless_package_installed'] = isset($data['wireless_package_installed']) ? $data['wireless_package_installed'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getWirelessLicenseInfoAllowableValues();
        if (!in_array($this->container['wireless_license_info'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'wireless_license_info', must be one of '%s'",
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

        $allowedValues = $this->getWirelessLicenseInfoAllowableValues();
        if (!in_array($this->container['wireless_license_info'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets admin_enabled_ports
     *
     * @return int[]
     */
    public function getAdminEnabledPorts()
    {
        return $this->container['admin_enabled_ports'];
    }

    /**
     * Sets admin_enabled_ports
     *
     * @param int[] $admin_enabled_ports admin_enabled_ports
     *
     * @return $this
     */
    public function setAdminEnabledPorts($admin_enabled_ports)
    {
        $this->container['admin_enabled_ports'] = $admin_enabled_ports;

        return $this;
    }

    /**
     * Gets ap_group_name
     *
     * @return string
     */
    public function getApGroupName()
    {
        return $this->container['ap_group_name'];
    }

    /**
     * Sets ap_group_name
     *
     * @param string $ap_group_name ap_group_name
     *
     * @return $this
     */
    public function setApGroupName($ap_group_name)
    {
        $this->container['ap_group_name'] = $ap_group_name;

        return $this;
    }

    /**
     * Gets device_id
     *
     * @return string
     */
    public function getDeviceId()
    {
        return $this->container['device_id'];
    }

    /**
     * Sets device_id
     *
     * @param string $device_id device_id
     *
     * @return $this
     */
    public function setDeviceId($device_id)
    {
        $this->container['device_id'] = $device_id;

        return $this;
    }

    /**
     * Gets eth_mac_address
     *
     * @return string
     */
    public function getEthMacAddress()
    {
        return $this->container['eth_mac_address'];
    }

    /**
     * Sets eth_mac_address
     *
     * @param string $eth_mac_address eth_mac_address
     *
     * @return $this
     */
    public function setEthMacAddress($eth_mac_address)
    {
        $this->container['eth_mac_address'] = $eth_mac_address;

        return $this;
    }

    /**
     * Gets flex_group_name
     *
     * @return string
     */
    public function getFlexGroupName()
    {
        return $this->container['flex_group_name'];
    }

    /**
     * Sets flex_group_name
     *
     * @param string $flex_group_name flex_group_name
     *
     * @return $this
     */
    public function setFlexGroupName($flex_group_name)
    {
        $this->container['flex_group_name'] = $flex_group_name;

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
     * Gets lag_mode_enabled
     *
     * @return bool
     */
    public function getLagModeEnabled()
    {
        return $this->container['lag_mode_enabled'];
    }

    /**
     * Sets lag_mode_enabled
     *
     * @param bool $lag_mode_enabled lag_mode_enabled
     *
     * @return $this
     */
    public function setLagModeEnabled($lag_mode_enabled)
    {
        $this->container['lag_mode_enabled'] = $lag_mode_enabled;

        return $this;
    }

    /**
     * Gets netconf_enabled
     *
     * @return bool
     */
    public function getNetconfEnabled()
    {
        return $this->container['netconf_enabled'];
    }

    /**
     * Sets netconf_enabled
     *
     * @param bool $netconf_enabled netconf_enabled
     *
     * @return $this
     */
    public function setNetconfEnabled($netconf_enabled)
    {
        $this->container['netconf_enabled'] = $netconf_enabled;

        return $this;
    }

    /**
     * Gets wireless_license_info
     *
     * @return string
     */
    public function getWirelessLicenseInfo()
    {
        return $this->container['wireless_license_info'];
    }

    /**
     * Sets wireless_license_info
     *
     * @param string $wireless_license_info wireless_license_info
     *
     * @return $this
     */
    public function setWirelessLicenseInfo($wireless_license_info)
    {
        $allowedValues = $this->getWirelessLicenseInfoAllowableValues();
        if (!is_null($wireless_license_info) && !in_array($wireless_license_info, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'wireless_license_info', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['wireless_license_info'] = $wireless_license_info;

        return $this;
    }

    /**
     * Gets wireless_package_installed
     *
     * @return bool
     */
    public function getWirelessPackageInstalled()
    {
        return $this->container['wireless_package_installed'];
    }

    /**
     * Sets wireless_package_installed
     *
     * @param bool $wireless_package_installed wireless_package_installed
     *
     * @return $this
     */
    public function setWirelessPackageInstalled($wireless_package_installed)
    {
        $this->container['wireless_package_installed'] = $wireless_package_installed;

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


