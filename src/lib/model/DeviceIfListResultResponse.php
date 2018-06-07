<?php
/**
 * DeviceIfListResultResponse
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
 * DeviceIfListResultResponse Class Doc Comment
 *
 * @category Class
 * @package  cisco\com\dnac\v1\api\client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DeviceIfListResultResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DeviceIfListResult_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'admin_status' => 'string',
        'class_name' => 'string',
        'description' => 'string',
        'device_id' => 'string',
        'duplex' => 'string',
        'id' => 'string',
        'if_index' => 'string',
        'instance_tenant_id' => 'string',
        'instance_uuid' => 'string',
        'interface_type' => 'string',
        'ipv4_address' => 'string',
        'ipv4_mask' => 'string',
        'isis_support' => 'string',
        'last_updated' => 'string',
        'mac_address' => 'string',
        'mapped_physical_interface_id' => 'string',
        'mapped_physical_interface_name' => 'string',
        'media_type' => 'string',
        'native_vlan_id' => 'string',
        'ospf_support' => 'string',
        'pid' => 'string',
        'port_mode' => 'string',
        'port_name' => 'string',
        'port_type' => 'string',
        'serial_no' => 'string',
        'series' => 'string',
        'speed' => 'string',
        'status' => 'string',
        'vlan_id' => 'string',
        'voice_vlan' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'admin_status' => null,
        'class_name' => null,
        'description' => null,
        'device_id' => null,
        'duplex' => null,
        'id' => null,
        'if_index' => null,
        'instance_tenant_id' => null,
        'instance_uuid' => null,
        'interface_type' => null,
        'ipv4_address' => null,
        'ipv4_mask' => null,
        'isis_support' => null,
        'last_updated' => null,
        'mac_address' => null,
        'mapped_physical_interface_id' => null,
        'mapped_physical_interface_name' => null,
        'media_type' => null,
        'native_vlan_id' => null,
        'ospf_support' => null,
        'pid' => null,
        'port_mode' => null,
        'port_name' => null,
        'port_type' => null,
        'serial_no' => null,
        'series' => null,
        'speed' => null,
        'status' => null,
        'vlan_id' => null,
        'voice_vlan' => null
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
        'admin_status' => 'adminStatus',
        'class_name' => 'className',
        'description' => 'description',
        'device_id' => 'deviceId',
        'duplex' => 'duplex',
        'id' => 'id',
        'if_index' => 'ifIndex',
        'instance_tenant_id' => 'instanceTenantId',
        'instance_uuid' => 'instanceUuid',
        'interface_type' => 'interfaceType',
        'ipv4_address' => 'ipv4Address',
        'ipv4_mask' => 'ipv4Mask',
        'isis_support' => 'isisSupport',
        'last_updated' => 'lastUpdated',
        'mac_address' => 'macAddress',
        'mapped_physical_interface_id' => 'mappedPhysicalInterfaceId',
        'mapped_physical_interface_name' => 'mappedPhysicalInterfaceName',
        'media_type' => 'mediaType',
        'native_vlan_id' => 'nativeVlanId',
        'ospf_support' => 'ospfSupport',
        'pid' => 'pid',
        'port_mode' => 'portMode',
        'port_name' => 'portName',
        'port_type' => 'portType',
        'serial_no' => 'serialNo',
        'series' => 'series',
        'speed' => 'speed',
        'status' => 'status',
        'vlan_id' => 'vlanId',
        'voice_vlan' => 'voiceVlan'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'admin_status' => 'setAdminStatus',
        'class_name' => 'setClassName',
        'description' => 'setDescription',
        'device_id' => 'setDeviceId',
        'duplex' => 'setDuplex',
        'id' => 'setId',
        'if_index' => 'setIfIndex',
        'instance_tenant_id' => 'setInstanceTenantId',
        'instance_uuid' => 'setInstanceUuid',
        'interface_type' => 'setInterfaceType',
        'ipv4_address' => 'setIpv4Address',
        'ipv4_mask' => 'setIpv4Mask',
        'isis_support' => 'setIsisSupport',
        'last_updated' => 'setLastUpdated',
        'mac_address' => 'setMacAddress',
        'mapped_physical_interface_id' => 'setMappedPhysicalInterfaceId',
        'mapped_physical_interface_name' => 'setMappedPhysicalInterfaceName',
        'media_type' => 'setMediaType',
        'native_vlan_id' => 'setNativeVlanId',
        'ospf_support' => 'setOspfSupport',
        'pid' => 'setPid',
        'port_mode' => 'setPortMode',
        'port_name' => 'setPortName',
        'port_type' => 'setPortType',
        'serial_no' => 'setSerialNo',
        'series' => 'setSeries',
        'speed' => 'setSpeed',
        'status' => 'setStatus',
        'vlan_id' => 'setVlanId',
        'voice_vlan' => 'setVoiceVlan'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'admin_status' => 'getAdminStatus',
        'class_name' => 'getClassName',
        'description' => 'getDescription',
        'device_id' => 'getDeviceId',
        'duplex' => 'getDuplex',
        'id' => 'getId',
        'if_index' => 'getIfIndex',
        'instance_tenant_id' => 'getInstanceTenantId',
        'instance_uuid' => 'getInstanceUuid',
        'interface_type' => 'getInterfaceType',
        'ipv4_address' => 'getIpv4Address',
        'ipv4_mask' => 'getIpv4Mask',
        'isis_support' => 'getIsisSupport',
        'last_updated' => 'getLastUpdated',
        'mac_address' => 'getMacAddress',
        'mapped_physical_interface_id' => 'getMappedPhysicalInterfaceId',
        'mapped_physical_interface_name' => 'getMappedPhysicalInterfaceName',
        'media_type' => 'getMediaType',
        'native_vlan_id' => 'getNativeVlanId',
        'ospf_support' => 'getOspfSupport',
        'pid' => 'getPid',
        'port_mode' => 'getPortMode',
        'port_name' => 'getPortName',
        'port_type' => 'getPortType',
        'serial_no' => 'getSerialNo',
        'series' => 'getSeries',
        'speed' => 'getSpeed',
        'status' => 'getStatus',
        'vlan_id' => 'getVlanId',
        'voice_vlan' => 'getVoiceVlan'
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
        $this->container['admin_status'] = isset($data['admin_status']) ? $data['admin_status'] : null;
        $this->container['class_name'] = isset($data['class_name']) ? $data['class_name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['device_id'] = isset($data['device_id']) ? $data['device_id'] : null;
        $this->container['duplex'] = isset($data['duplex']) ? $data['duplex'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['if_index'] = isset($data['if_index']) ? $data['if_index'] : null;
        $this->container['instance_tenant_id'] = isset($data['instance_tenant_id']) ? $data['instance_tenant_id'] : null;
        $this->container['instance_uuid'] = isset($data['instance_uuid']) ? $data['instance_uuid'] : null;
        $this->container['interface_type'] = isset($data['interface_type']) ? $data['interface_type'] : null;
        $this->container['ipv4_address'] = isset($data['ipv4_address']) ? $data['ipv4_address'] : null;
        $this->container['ipv4_mask'] = isset($data['ipv4_mask']) ? $data['ipv4_mask'] : null;
        $this->container['isis_support'] = isset($data['isis_support']) ? $data['isis_support'] : null;
        $this->container['last_updated'] = isset($data['last_updated']) ? $data['last_updated'] : null;
        $this->container['mac_address'] = isset($data['mac_address']) ? $data['mac_address'] : null;
        $this->container['mapped_physical_interface_id'] = isset($data['mapped_physical_interface_id']) ? $data['mapped_physical_interface_id'] : null;
        $this->container['mapped_physical_interface_name'] = isset($data['mapped_physical_interface_name']) ? $data['mapped_physical_interface_name'] : null;
        $this->container['media_type'] = isset($data['media_type']) ? $data['media_type'] : null;
        $this->container['native_vlan_id'] = isset($data['native_vlan_id']) ? $data['native_vlan_id'] : null;
        $this->container['ospf_support'] = isset($data['ospf_support']) ? $data['ospf_support'] : null;
        $this->container['pid'] = isset($data['pid']) ? $data['pid'] : null;
        $this->container['port_mode'] = isset($data['port_mode']) ? $data['port_mode'] : null;
        $this->container['port_name'] = isset($data['port_name']) ? $data['port_name'] : null;
        $this->container['port_type'] = isset($data['port_type']) ? $data['port_type'] : null;
        $this->container['serial_no'] = isset($data['serial_no']) ? $data['serial_no'] : null;
        $this->container['series'] = isset($data['series']) ? $data['series'] : null;
        $this->container['speed'] = isset($data['speed']) ? $data['speed'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['vlan_id'] = isset($data['vlan_id']) ? $data['vlan_id'] : null;
        $this->container['voice_vlan'] = isset($data['voice_vlan']) ? $data['voice_vlan'] : null;
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
     * Gets admin_status
     *
     * @return string
     */
    public function getAdminStatus()
    {
        return $this->container['admin_status'];
    }

    /**
     * Sets admin_status
     *
     * @param string $admin_status admin_status
     *
     * @return $this
     */
    public function setAdminStatus($admin_status)
    {
        $this->container['admin_status'] = $admin_status;

        return $this;
    }

    /**
     * Gets class_name
     *
     * @return string
     */
    public function getClassName()
    {
        return $this->container['class_name'];
    }

    /**
     * Sets class_name
     *
     * @param string $class_name class_name
     *
     * @return $this
     */
    public function setClassName($class_name)
    {
        $this->container['class_name'] = $class_name;

        return $this;
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
     * Gets duplex
     *
     * @return string
     */
    public function getDuplex()
    {
        return $this->container['duplex'];
    }

    /**
     * Sets duplex
     *
     * @param string $duplex duplex
     *
     * @return $this
     */
    public function setDuplex($duplex)
    {
        $this->container['duplex'] = $duplex;

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
     * Gets if_index
     *
     * @return string
     */
    public function getIfIndex()
    {
        return $this->container['if_index'];
    }

    /**
     * Sets if_index
     *
     * @param string $if_index if_index
     *
     * @return $this
     */
    public function setIfIndex($if_index)
    {
        $this->container['if_index'] = $if_index;

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
     * Gets interface_type
     *
     * @return string
     */
    public function getInterfaceType()
    {
        return $this->container['interface_type'];
    }

    /**
     * Sets interface_type
     *
     * @param string $interface_type interface_type
     *
     * @return $this
     */
    public function setInterfaceType($interface_type)
    {
        $this->container['interface_type'] = $interface_type;

        return $this;
    }

    /**
     * Gets ipv4_address
     *
     * @return string
     */
    public function getIpv4Address()
    {
        return $this->container['ipv4_address'];
    }

    /**
     * Sets ipv4_address
     *
     * @param string $ipv4_address ipv4_address
     *
     * @return $this
     */
    public function setIpv4Address($ipv4_address)
    {
        $this->container['ipv4_address'] = $ipv4_address;

        return $this;
    }

    /**
     * Gets ipv4_mask
     *
     * @return string
     */
    public function getIpv4Mask()
    {
        return $this->container['ipv4_mask'];
    }

    /**
     * Sets ipv4_mask
     *
     * @param string $ipv4_mask ipv4_mask
     *
     * @return $this
     */
    public function setIpv4Mask($ipv4_mask)
    {
        $this->container['ipv4_mask'] = $ipv4_mask;

        return $this;
    }

    /**
     * Gets isis_support
     *
     * @return string
     */
    public function getIsisSupport()
    {
        return $this->container['isis_support'];
    }

    /**
     * Sets isis_support
     *
     * @param string $isis_support isis_support
     *
     * @return $this
     */
    public function setIsisSupport($isis_support)
    {
        $this->container['isis_support'] = $isis_support;

        return $this;
    }

    /**
     * Gets last_updated
     *
     * @return string
     */
    public function getLastUpdated()
    {
        return $this->container['last_updated'];
    }

    /**
     * Sets last_updated
     *
     * @param string $last_updated last_updated
     *
     * @return $this
     */
    public function setLastUpdated($last_updated)
    {
        $this->container['last_updated'] = $last_updated;

        return $this;
    }

    /**
     * Gets mac_address
     *
     * @return string
     */
    public function getMacAddress()
    {
        return $this->container['mac_address'];
    }

    /**
     * Sets mac_address
     *
     * @param string $mac_address mac_address
     *
     * @return $this
     */
    public function setMacAddress($mac_address)
    {
        $this->container['mac_address'] = $mac_address;

        return $this;
    }

    /**
     * Gets mapped_physical_interface_id
     *
     * @return string
     */
    public function getMappedPhysicalInterfaceId()
    {
        return $this->container['mapped_physical_interface_id'];
    }

    /**
     * Sets mapped_physical_interface_id
     *
     * @param string $mapped_physical_interface_id mapped_physical_interface_id
     *
     * @return $this
     */
    public function setMappedPhysicalInterfaceId($mapped_physical_interface_id)
    {
        $this->container['mapped_physical_interface_id'] = $mapped_physical_interface_id;

        return $this;
    }

    /**
     * Gets mapped_physical_interface_name
     *
     * @return string
     */
    public function getMappedPhysicalInterfaceName()
    {
        return $this->container['mapped_physical_interface_name'];
    }

    /**
     * Sets mapped_physical_interface_name
     *
     * @param string $mapped_physical_interface_name mapped_physical_interface_name
     *
     * @return $this
     */
    public function setMappedPhysicalInterfaceName($mapped_physical_interface_name)
    {
        $this->container['mapped_physical_interface_name'] = $mapped_physical_interface_name;

        return $this;
    }

    /**
     * Gets media_type
     *
     * @return string
     */
    public function getMediaType()
    {
        return $this->container['media_type'];
    }

    /**
     * Sets media_type
     *
     * @param string $media_type media_type
     *
     * @return $this
     */
    public function setMediaType($media_type)
    {
        $this->container['media_type'] = $media_type;

        return $this;
    }

    /**
     * Gets native_vlan_id
     *
     * @return string
     */
    public function getNativeVlanId()
    {
        return $this->container['native_vlan_id'];
    }

    /**
     * Sets native_vlan_id
     *
     * @param string $native_vlan_id native_vlan_id
     *
     * @return $this
     */
    public function setNativeVlanId($native_vlan_id)
    {
        $this->container['native_vlan_id'] = $native_vlan_id;

        return $this;
    }

    /**
     * Gets ospf_support
     *
     * @return string
     */
    public function getOspfSupport()
    {
        return $this->container['ospf_support'];
    }

    /**
     * Sets ospf_support
     *
     * @param string $ospf_support ospf_support
     *
     * @return $this
     */
    public function setOspfSupport($ospf_support)
    {
        $this->container['ospf_support'] = $ospf_support;

        return $this;
    }

    /**
     * Gets pid
     *
     * @return string
     */
    public function getPid()
    {
        return $this->container['pid'];
    }

    /**
     * Sets pid
     *
     * @param string $pid pid
     *
     * @return $this
     */
    public function setPid($pid)
    {
        $this->container['pid'] = $pid;

        return $this;
    }

    /**
     * Gets port_mode
     *
     * @return string
     */
    public function getPortMode()
    {
        return $this->container['port_mode'];
    }

    /**
     * Sets port_mode
     *
     * @param string $port_mode port_mode
     *
     * @return $this
     */
    public function setPortMode($port_mode)
    {
        $this->container['port_mode'] = $port_mode;

        return $this;
    }

    /**
     * Gets port_name
     *
     * @return string
     */
    public function getPortName()
    {
        return $this->container['port_name'];
    }

    /**
     * Sets port_name
     *
     * @param string $port_name port_name
     *
     * @return $this
     */
    public function setPortName($port_name)
    {
        $this->container['port_name'] = $port_name;

        return $this;
    }

    /**
     * Gets port_type
     *
     * @return string
     */
    public function getPortType()
    {
        return $this->container['port_type'];
    }

    /**
     * Sets port_type
     *
     * @param string $port_type port_type
     *
     * @return $this
     */
    public function setPortType($port_type)
    {
        $this->container['port_type'] = $port_type;

        return $this;
    }

    /**
     * Gets serial_no
     *
     * @return string
     */
    public function getSerialNo()
    {
        return $this->container['serial_no'];
    }

    /**
     * Sets serial_no
     *
     * @param string $serial_no serial_no
     *
     * @return $this
     */
    public function setSerialNo($serial_no)
    {
        $this->container['serial_no'] = $serial_no;

        return $this;
    }

    /**
     * Gets series
     *
     * @return string
     */
    public function getSeries()
    {
        return $this->container['series'];
    }

    /**
     * Sets series
     *
     * @param string $series series
     *
     * @return $this
     */
    public function setSeries($series)
    {
        $this->container['series'] = $series;

        return $this;
    }

    /**
     * Gets speed
     *
     * @return string
     */
    public function getSpeed()
    {
        return $this->container['speed'];
    }

    /**
     * Sets speed
     *
     * @param string $speed speed
     *
     * @return $this
     */
    public function setSpeed($speed)
    {
        $this->container['speed'] = $speed;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets vlan_id
     *
     * @return string
     */
    public function getVlanId()
    {
        return $this->container['vlan_id'];
    }

    /**
     * Sets vlan_id
     *
     * @param string $vlan_id vlan_id
     *
     * @return $this
     */
    public function setVlanId($vlan_id)
    {
        $this->container['vlan_id'] = $vlan_id;

        return $this;
    }

    /**
     * Gets voice_vlan
     *
     * @return string
     */
    public function getVoiceVlan()
    {
        return $this->container['voice_vlan'];
    }

    /**
     * Sets voice_vlan
     *
     * @param string $voice_vlan voice_vlan
     *
     * @return $this
     */
    public function setVoiceVlan($voice_vlan)
    {
        $this->container['voice_vlan'] = $voice_vlan;

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


