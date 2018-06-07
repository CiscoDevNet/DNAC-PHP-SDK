<?php
/**
 * PathResponseResultResponseNetworkElementsInfo
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
 * PathResponseResultResponseNetworkElementsInfo Class Doc Comment
 *
 * @category Class
 * @package  cisco\com\dnac\v1\api\client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PathResponseResultResponseNetworkElementsInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PathResponseResult_response_networkElementsInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accuracy_list' => '\cisco\com\dnac\v1\api\client\model\PathResponseResultResponseAccuracyList[]',
        'detailed_status' => '\cisco\com\dnac\v1\api\client\model\PathResponseResultResponseDetailedStatus',
        'device_statistics' => '\cisco\com\dnac\v1\api\client\model\PathResponseResultResponseDeviceStatistics',
        'device_stats_collection' => 'string',
        'device_stats_collection_failure_reason' => 'string',
        'egress_interface' => '\cisco\com\dnac\v1\api\client\model\PathResponseResultResponseEgressInterface',
        'flex_connect' => '\cisco\com\dnac\v1\api\client\model\PathResponseResultResponseFlexConnect',
        'id' => 'string',
        'ingress_interface' => '\cisco\com\dnac\v1\api\client\model\PathResponseResultResponseEgressInterface',
        'ip' => 'string',
        'link_information_source' => 'string',
        'name' => 'string',
        'perf_mon_collection' => 'string',
        'perf_mon_collection_failure_reason' => 'string',
        'perf_monitor_statistics' => '\cisco\com\dnac\v1\api\client\model\PathResponseResultResponsePerfMonStatistics[]',
        'role' => 'string',
        'ssid' => 'string',
        'tunnels' => 'string[]',
        'type' => 'string',
        'wlan_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accuracy_list' => null,
        'detailed_status' => null,
        'device_statistics' => null,
        'device_stats_collection' => null,
        'device_stats_collection_failure_reason' => null,
        'egress_interface' => null,
        'flex_connect' => null,
        'id' => null,
        'ingress_interface' => null,
        'ip' => null,
        'link_information_source' => null,
        'name' => null,
        'perf_mon_collection' => null,
        'perf_mon_collection_failure_reason' => null,
        'perf_monitor_statistics' => null,
        'role' => null,
        'ssid' => null,
        'tunnels' => null,
        'type' => null,
        'wlan_id' => null
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
        'accuracy_list' => 'accuracyList',
        'detailed_status' => 'detailedStatus',
        'device_statistics' => 'deviceStatistics',
        'device_stats_collection' => 'deviceStatsCollection',
        'device_stats_collection_failure_reason' => 'deviceStatsCollectionFailureReason',
        'egress_interface' => 'egressInterface',
        'flex_connect' => 'flexConnect',
        'id' => 'id',
        'ingress_interface' => 'ingressInterface',
        'ip' => 'ip',
        'link_information_source' => 'linkInformationSource',
        'name' => 'name',
        'perf_mon_collection' => 'perfMonCollection',
        'perf_mon_collection_failure_reason' => 'perfMonCollectionFailureReason',
        'perf_monitor_statistics' => 'perfMonitorStatistics',
        'role' => 'role',
        'ssid' => 'ssid',
        'tunnels' => 'tunnels',
        'type' => 'type',
        'wlan_id' => 'wlanId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accuracy_list' => 'setAccuracyList',
        'detailed_status' => 'setDetailedStatus',
        'device_statistics' => 'setDeviceStatistics',
        'device_stats_collection' => 'setDeviceStatsCollection',
        'device_stats_collection_failure_reason' => 'setDeviceStatsCollectionFailureReason',
        'egress_interface' => 'setEgressInterface',
        'flex_connect' => 'setFlexConnect',
        'id' => 'setId',
        'ingress_interface' => 'setIngressInterface',
        'ip' => 'setIp',
        'link_information_source' => 'setLinkInformationSource',
        'name' => 'setName',
        'perf_mon_collection' => 'setPerfMonCollection',
        'perf_mon_collection_failure_reason' => 'setPerfMonCollectionFailureReason',
        'perf_monitor_statistics' => 'setPerfMonitorStatistics',
        'role' => 'setRole',
        'ssid' => 'setSsid',
        'tunnels' => 'setTunnels',
        'type' => 'setType',
        'wlan_id' => 'setWlanId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accuracy_list' => 'getAccuracyList',
        'detailed_status' => 'getDetailedStatus',
        'device_statistics' => 'getDeviceStatistics',
        'device_stats_collection' => 'getDeviceStatsCollection',
        'device_stats_collection_failure_reason' => 'getDeviceStatsCollectionFailureReason',
        'egress_interface' => 'getEgressInterface',
        'flex_connect' => 'getFlexConnect',
        'id' => 'getId',
        'ingress_interface' => 'getIngressInterface',
        'ip' => 'getIp',
        'link_information_source' => 'getLinkInformationSource',
        'name' => 'getName',
        'perf_mon_collection' => 'getPerfMonCollection',
        'perf_mon_collection_failure_reason' => 'getPerfMonCollectionFailureReason',
        'perf_monitor_statistics' => 'getPerfMonitorStatistics',
        'role' => 'getRole',
        'ssid' => 'getSsid',
        'tunnels' => 'getTunnels',
        'type' => 'getType',
        'wlan_id' => 'getWlanId'
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
        $this->container['accuracy_list'] = isset($data['accuracy_list']) ? $data['accuracy_list'] : null;
        $this->container['detailed_status'] = isset($data['detailed_status']) ? $data['detailed_status'] : null;
        $this->container['device_statistics'] = isset($data['device_statistics']) ? $data['device_statistics'] : null;
        $this->container['device_stats_collection'] = isset($data['device_stats_collection']) ? $data['device_stats_collection'] : null;
        $this->container['device_stats_collection_failure_reason'] = isset($data['device_stats_collection_failure_reason']) ? $data['device_stats_collection_failure_reason'] : null;
        $this->container['egress_interface'] = isset($data['egress_interface']) ? $data['egress_interface'] : null;
        $this->container['flex_connect'] = isset($data['flex_connect']) ? $data['flex_connect'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['ingress_interface'] = isset($data['ingress_interface']) ? $data['ingress_interface'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['link_information_source'] = isset($data['link_information_source']) ? $data['link_information_source'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['perf_mon_collection'] = isset($data['perf_mon_collection']) ? $data['perf_mon_collection'] : null;
        $this->container['perf_mon_collection_failure_reason'] = isset($data['perf_mon_collection_failure_reason']) ? $data['perf_mon_collection_failure_reason'] : null;
        $this->container['perf_monitor_statistics'] = isset($data['perf_monitor_statistics']) ? $data['perf_monitor_statistics'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['ssid'] = isset($data['ssid']) ? $data['ssid'] : null;
        $this->container['tunnels'] = isset($data['tunnels']) ? $data['tunnels'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['wlan_id'] = isset($data['wlan_id']) ? $data['wlan_id'] : null;
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
     * Gets accuracy_list
     *
     * @return \cisco\com\dnac\v1\api\client\model\PathResponseResultResponseAccuracyList[]
     */
    public function getAccuracyList()
    {
        return $this->container['accuracy_list'];
    }

    /**
     * Sets accuracy_list
     *
     * @param \cisco\com\dnac\v1\api\client\model\PathResponseResultResponseAccuracyList[] $accuracy_list accuracy_list
     *
     * @return $this
     */
    public function setAccuracyList($accuracy_list)
    {
        $this->container['accuracy_list'] = $accuracy_list;

        return $this;
    }

    /**
     * Gets detailed_status
     *
     * @return \cisco\com\dnac\v1\api\client\model\PathResponseResultResponseDetailedStatus
     */
    public function getDetailedStatus()
    {
        return $this->container['detailed_status'];
    }

    /**
     * Sets detailed_status
     *
     * @param \cisco\com\dnac\v1\api\client\model\PathResponseResultResponseDetailedStatus $detailed_status detailed_status
     *
     * @return $this
     */
    public function setDetailedStatus($detailed_status)
    {
        $this->container['detailed_status'] = $detailed_status;

        return $this;
    }

    /**
     * Gets device_statistics
     *
     * @return \cisco\com\dnac\v1\api\client\model\PathResponseResultResponseDeviceStatistics
     */
    public function getDeviceStatistics()
    {
        return $this->container['device_statistics'];
    }

    /**
     * Sets device_statistics
     *
     * @param \cisco\com\dnac\v1\api\client\model\PathResponseResultResponseDeviceStatistics $device_statistics device_statistics
     *
     * @return $this
     */
    public function setDeviceStatistics($device_statistics)
    {
        $this->container['device_statistics'] = $device_statistics;

        return $this;
    }

    /**
     * Gets device_stats_collection
     *
     * @return string
     */
    public function getDeviceStatsCollection()
    {
        return $this->container['device_stats_collection'];
    }

    /**
     * Sets device_stats_collection
     *
     * @param string $device_stats_collection device_stats_collection
     *
     * @return $this
     */
    public function setDeviceStatsCollection($device_stats_collection)
    {
        $this->container['device_stats_collection'] = $device_stats_collection;

        return $this;
    }

    /**
     * Gets device_stats_collection_failure_reason
     *
     * @return string
     */
    public function getDeviceStatsCollectionFailureReason()
    {
        return $this->container['device_stats_collection_failure_reason'];
    }

    /**
     * Sets device_stats_collection_failure_reason
     *
     * @param string $device_stats_collection_failure_reason device_stats_collection_failure_reason
     *
     * @return $this
     */
    public function setDeviceStatsCollectionFailureReason($device_stats_collection_failure_reason)
    {
        $this->container['device_stats_collection_failure_reason'] = $device_stats_collection_failure_reason;

        return $this;
    }

    /**
     * Gets egress_interface
     *
     * @return \cisco\com\dnac\v1\api\client\model\PathResponseResultResponseEgressInterface
     */
    public function getEgressInterface()
    {
        return $this->container['egress_interface'];
    }

    /**
     * Sets egress_interface
     *
     * @param \cisco\com\dnac\v1\api\client\model\PathResponseResultResponseEgressInterface $egress_interface egress_interface
     *
     * @return $this
     */
    public function setEgressInterface($egress_interface)
    {
        $this->container['egress_interface'] = $egress_interface;

        return $this;
    }

    /**
     * Gets flex_connect
     *
     * @return \cisco\com\dnac\v1\api\client\model\PathResponseResultResponseFlexConnect
     */
    public function getFlexConnect()
    {
        return $this->container['flex_connect'];
    }

    /**
     * Sets flex_connect
     *
     * @param \cisco\com\dnac\v1\api\client\model\PathResponseResultResponseFlexConnect $flex_connect flex_connect
     *
     * @return $this
     */
    public function setFlexConnect($flex_connect)
    {
        $this->container['flex_connect'] = $flex_connect;

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
     * Gets ingress_interface
     *
     * @return \cisco\com\dnac\v1\api\client\model\PathResponseResultResponseEgressInterface
     */
    public function getIngressInterface()
    {
        return $this->container['ingress_interface'];
    }

    /**
     * Sets ingress_interface
     *
     * @param \cisco\com\dnac\v1\api\client\model\PathResponseResultResponseEgressInterface $ingress_interface ingress_interface
     *
     * @return $this
     */
    public function setIngressInterface($ingress_interface)
    {
        $this->container['ingress_interface'] = $ingress_interface;

        return $this;
    }

    /**
     * Gets ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
     * Sets ip
     *
     * @param string $ip ip
     *
     * @return $this
     */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;

        return $this;
    }

    /**
     * Gets link_information_source
     *
     * @return string
     */
    public function getLinkInformationSource()
    {
        return $this->container['link_information_source'];
    }

    /**
     * Sets link_information_source
     *
     * @param string $link_information_source link_information_source
     *
     * @return $this
     */
    public function setLinkInformationSource($link_information_source)
    {
        $this->container['link_information_source'] = $link_information_source;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets perf_mon_collection
     *
     * @return string
     */
    public function getPerfMonCollection()
    {
        return $this->container['perf_mon_collection'];
    }

    /**
     * Sets perf_mon_collection
     *
     * @param string $perf_mon_collection perf_mon_collection
     *
     * @return $this
     */
    public function setPerfMonCollection($perf_mon_collection)
    {
        $this->container['perf_mon_collection'] = $perf_mon_collection;

        return $this;
    }

    /**
     * Gets perf_mon_collection_failure_reason
     *
     * @return string
     */
    public function getPerfMonCollectionFailureReason()
    {
        return $this->container['perf_mon_collection_failure_reason'];
    }

    /**
     * Sets perf_mon_collection_failure_reason
     *
     * @param string $perf_mon_collection_failure_reason perf_mon_collection_failure_reason
     *
     * @return $this
     */
    public function setPerfMonCollectionFailureReason($perf_mon_collection_failure_reason)
    {
        $this->container['perf_mon_collection_failure_reason'] = $perf_mon_collection_failure_reason;

        return $this;
    }

    /**
     * Gets perf_monitor_statistics
     *
     * @return \cisco\com\dnac\v1\api\client\model\PathResponseResultResponsePerfMonStatistics[]
     */
    public function getPerfMonitorStatistics()
    {
        return $this->container['perf_monitor_statistics'];
    }

    /**
     * Sets perf_monitor_statistics
     *
     * @param \cisco\com\dnac\v1\api\client\model\PathResponseResultResponsePerfMonStatistics[] $perf_monitor_statistics perf_monitor_statistics
     *
     * @return $this
     */
    public function setPerfMonitorStatistics($perf_monitor_statistics)
    {
        $this->container['perf_monitor_statistics'] = $perf_monitor_statistics;

        return $this;
    }

    /**
     * Gets role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param string $role role
     *
     * @return $this
     */
    public function setRole($role)
    {
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets ssid
     *
     * @return string
     */
    public function getSsid()
    {
        return $this->container['ssid'];
    }

    /**
     * Sets ssid
     *
     * @param string $ssid ssid
     *
     * @return $this
     */
    public function setSsid($ssid)
    {
        $this->container['ssid'] = $ssid;

        return $this;
    }

    /**
     * Gets tunnels
     *
     * @return string[]
     */
    public function getTunnels()
    {
        return $this->container['tunnels'];
    }

    /**
     * Sets tunnels
     *
     * @param string[] $tunnels tunnels
     *
     * @return $this
     */
    public function setTunnels($tunnels)
    {
        $this->container['tunnels'] = $tunnels;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets wlan_id
     *
     * @return string
     */
    public function getWlanId()
    {
        return $this->container['wlan_id'];
    }

    /**
     * Sets wlan_id
     *
     * @param string $wlan_id wlan_id
     *
     * @return $this
     */
    public function setWlanId($wlan_id)
    {
        $this->container['wlan_id'] = $wlan_id;

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

