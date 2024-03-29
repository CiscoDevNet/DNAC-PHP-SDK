<?php
/**
 * ImageInfoListResponseResponse
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
 * ImageInfoListResponseResponse Class Doc Comment
 *
 * @category Class
 * @package  cisco\com\dnac\v1\api\client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ImageInfoListResponseResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ImageInfoListResponse_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'applicable_devices_for_image' => '\cisco\com\dnac\v1\api\client\model\ImageInfoListResponseApplicableDevicesForImage[]',
        'application_type' => 'string',
        'created_time' => 'string',
        'extended_attributes' => 'object',
        'family' => 'string',
        'feature' => 'string',
        'file_service_id' => 'string',
        'file_size' => 'string',
        'image_integrity_status' => 'string',
        'image_name' => 'string',
        'image_series' => 'string[]',
        'image_source' => 'string',
        'image_type' => 'string',
        'image_uuid' => 'string',
        'import_source_type' => 'string',
        'is_tagged_golden' => 'bool',
        'md5_checksum' => 'string',
        'name' => 'string',
        'profile_info' => '\cisco\com\dnac\v1\api\client\model\ImageInfoListResponseProfileInfo[]',
        'sha_check_sum' => 'string',
        'vendor' => 'string',
        'version' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'applicable_devices_for_image' => null,
        'application_type' => null,
        'created_time' => null,
        'extended_attributes' => null,
        'family' => null,
        'feature' => null,
        'file_service_id' => null,
        'file_size' => null,
        'image_integrity_status' => null,
        'image_name' => null,
        'image_series' => null,
        'image_source' => null,
        'image_type' => null,
        'image_uuid' => null,
        'import_source_type' => null,
        'is_tagged_golden' => null,
        'md5_checksum' => null,
        'name' => null,
        'profile_info' => null,
        'sha_check_sum' => null,
        'vendor' => null,
        'version' => null
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
        'applicable_devices_for_image' => 'applicableDevicesForImage',
        'application_type' => 'applicationType',
        'created_time' => 'createdTime',
        'extended_attributes' => 'extendedAttributes',
        'family' => 'family',
        'feature' => 'feature',
        'file_service_id' => 'fileServiceId',
        'file_size' => 'fileSize',
        'image_integrity_status' => 'imageIntegrityStatus',
        'image_name' => 'imageName',
        'image_series' => 'imageSeries',
        'image_source' => 'imageSource',
        'image_type' => 'imageType',
        'image_uuid' => 'imageUuid',
        'import_source_type' => 'importSourceType',
        'is_tagged_golden' => 'isTaggedGolden',
        'md5_checksum' => 'md5Checksum',
        'name' => 'name',
        'profile_info' => 'profileInfo',
        'sha_check_sum' => 'shaCheckSum',
        'vendor' => 'vendor',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'applicable_devices_for_image' => 'setApplicableDevicesForImage',
        'application_type' => 'setApplicationType',
        'created_time' => 'setCreatedTime',
        'extended_attributes' => 'setExtendedAttributes',
        'family' => 'setFamily',
        'feature' => 'setFeature',
        'file_service_id' => 'setFileServiceId',
        'file_size' => 'setFileSize',
        'image_integrity_status' => 'setImageIntegrityStatus',
        'image_name' => 'setImageName',
        'image_series' => 'setImageSeries',
        'image_source' => 'setImageSource',
        'image_type' => 'setImageType',
        'image_uuid' => 'setImageUuid',
        'import_source_type' => 'setImportSourceType',
        'is_tagged_golden' => 'setIsTaggedGolden',
        'md5_checksum' => 'setMd5Checksum',
        'name' => 'setName',
        'profile_info' => 'setProfileInfo',
        'sha_check_sum' => 'setShaCheckSum',
        'vendor' => 'setVendor',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'applicable_devices_for_image' => 'getApplicableDevicesForImage',
        'application_type' => 'getApplicationType',
        'created_time' => 'getCreatedTime',
        'extended_attributes' => 'getExtendedAttributes',
        'family' => 'getFamily',
        'feature' => 'getFeature',
        'file_service_id' => 'getFileServiceId',
        'file_size' => 'getFileSize',
        'image_integrity_status' => 'getImageIntegrityStatus',
        'image_name' => 'getImageName',
        'image_series' => 'getImageSeries',
        'image_source' => 'getImageSource',
        'image_type' => 'getImageType',
        'image_uuid' => 'getImageUuid',
        'import_source_type' => 'getImportSourceType',
        'is_tagged_golden' => 'getIsTaggedGolden',
        'md5_checksum' => 'getMd5Checksum',
        'name' => 'getName',
        'profile_info' => 'getProfileInfo',
        'sha_check_sum' => 'getShaCheckSum',
        'vendor' => 'getVendor',
        'version' => 'getVersion'
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

    const IMPORT_SOURCE_TYPE_DEVICE = 'DEVICE';
    const IMPORT_SOURCE_TYPE_REMOTEURL = 'REMOTEURL';
    const IMPORT_SOURCE_TYPE_CCO = 'CCO';
    const IMPORT_SOURCE_TYPE_FILESYSTEM = 'FILESYSTEM';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getImportSourceTypeAllowableValues()
    {
        return [
            self::IMPORT_SOURCE_TYPE_DEVICE,
            self::IMPORT_SOURCE_TYPE_REMOTEURL,
            self::IMPORT_SOURCE_TYPE_CCO,
            self::IMPORT_SOURCE_TYPE_FILESYSTEM,
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
        $this->container['applicable_devices_for_image'] = isset($data['applicable_devices_for_image']) ? $data['applicable_devices_for_image'] : null;
        $this->container['application_type'] = isset($data['application_type']) ? $data['application_type'] : null;
        $this->container['created_time'] = isset($data['created_time']) ? $data['created_time'] : null;
        $this->container['extended_attributes'] = isset($data['extended_attributes']) ? $data['extended_attributes'] : null;
        $this->container['family'] = isset($data['family']) ? $data['family'] : null;
        $this->container['feature'] = isset($data['feature']) ? $data['feature'] : null;
        $this->container['file_service_id'] = isset($data['file_service_id']) ? $data['file_service_id'] : null;
        $this->container['file_size'] = isset($data['file_size']) ? $data['file_size'] : null;
        $this->container['image_integrity_status'] = isset($data['image_integrity_status']) ? $data['image_integrity_status'] : null;
        $this->container['image_name'] = isset($data['image_name']) ? $data['image_name'] : null;
        $this->container['image_series'] = isset($data['image_series']) ? $data['image_series'] : null;
        $this->container['image_source'] = isset($data['image_source']) ? $data['image_source'] : null;
        $this->container['image_type'] = isset($data['image_type']) ? $data['image_type'] : null;
        $this->container['image_uuid'] = isset($data['image_uuid']) ? $data['image_uuid'] : null;
        $this->container['import_source_type'] = isset($data['import_source_type']) ? $data['import_source_type'] : null;
        $this->container['is_tagged_golden'] = isset($data['is_tagged_golden']) ? $data['is_tagged_golden'] : null;
        $this->container['md5_checksum'] = isset($data['md5_checksum']) ? $data['md5_checksum'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['profile_info'] = isset($data['profile_info']) ? $data['profile_info'] : null;
        $this->container['sha_check_sum'] = isset($data['sha_check_sum']) ? $data['sha_check_sum'] : null;
        $this->container['vendor'] = isset($data['vendor']) ? $data['vendor'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getImportSourceTypeAllowableValues();
        if (!in_array($this->container['import_source_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'import_source_type', must be one of '%s'",
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

        $allowedValues = $this->getImportSourceTypeAllowableValues();
        if (!in_array($this->container['import_source_type'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets applicable_devices_for_image
     *
     * @return \cisco\com\dnac\v1\api\client\model\ImageInfoListResponseApplicableDevicesForImage[]
     */
    public function getApplicableDevicesForImage()
    {
        return $this->container['applicable_devices_for_image'];
    }

    /**
     * Sets applicable_devices_for_image
     *
     * @param \cisco\com\dnac\v1\api\client\model\ImageInfoListResponseApplicableDevicesForImage[] $applicable_devices_for_image applicable_devices_for_image
     *
     * @return $this
     */
    public function setApplicableDevicesForImage($applicable_devices_for_image)
    {
        $this->container['applicable_devices_for_image'] = $applicable_devices_for_image;

        return $this;
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
     * Gets created_time
     *
     * @return string
     */
    public function getCreatedTime()
    {
        return $this->container['created_time'];
    }

    /**
     * Sets created_time
     *
     * @param string $created_time created_time
     *
     * @return $this
     */
    public function setCreatedTime($created_time)
    {
        $this->container['created_time'] = $created_time;

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
     * Gets family
     *
     * @return string
     */
    public function getFamily()
    {
        return $this->container['family'];
    }

    /**
     * Sets family
     *
     * @param string $family family
     *
     * @return $this
     */
    public function setFamily($family)
    {
        $this->container['family'] = $family;

        return $this;
    }

    /**
     * Gets feature
     *
     * @return string
     */
    public function getFeature()
    {
        return $this->container['feature'];
    }

    /**
     * Sets feature
     *
     * @param string $feature feature
     *
     * @return $this
     */
    public function setFeature($feature)
    {
        $this->container['feature'] = $feature;

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
     * Gets file_size
     *
     * @return string
     */
    public function getFileSize()
    {
        return $this->container['file_size'];
    }

    /**
     * Sets file_size
     *
     * @param string $file_size file_size
     *
     * @return $this
     */
    public function setFileSize($file_size)
    {
        $this->container['file_size'] = $file_size;

        return $this;
    }

    /**
     * Gets image_integrity_status
     *
     * @return string
     */
    public function getImageIntegrityStatus()
    {
        return $this->container['image_integrity_status'];
    }

    /**
     * Sets image_integrity_status
     *
     * @param string $image_integrity_status image_integrity_status
     *
     * @return $this
     */
    public function setImageIntegrityStatus($image_integrity_status)
    {
        $this->container['image_integrity_status'] = $image_integrity_status;

        return $this;
    }

    /**
     * Gets image_name
     *
     * @return string
     */
    public function getImageName()
    {
        return $this->container['image_name'];
    }

    /**
     * Sets image_name
     *
     * @param string $image_name image_name
     *
     * @return $this
     */
    public function setImageName($image_name)
    {
        $this->container['image_name'] = $image_name;

        return $this;
    }

    /**
     * Gets image_series
     *
     * @return string[]
     */
    public function getImageSeries()
    {
        return $this->container['image_series'];
    }

    /**
     * Sets image_series
     *
     * @param string[] $image_series image_series
     *
     * @return $this
     */
    public function setImageSeries($image_series)
    {
        $this->container['image_series'] = $image_series;

        return $this;
    }

    /**
     * Gets image_source
     *
     * @return string
     */
    public function getImageSource()
    {
        return $this->container['image_source'];
    }

    /**
     * Sets image_source
     *
     * @param string $image_source image_source
     *
     * @return $this
     */
    public function setImageSource($image_source)
    {
        $this->container['image_source'] = $image_source;

        return $this;
    }

    /**
     * Gets image_type
     *
     * @return string
     */
    public function getImageType()
    {
        return $this->container['image_type'];
    }

    /**
     * Sets image_type
     *
     * @param string $image_type image_type
     *
     * @return $this
     */
    public function setImageType($image_type)
    {
        $this->container['image_type'] = $image_type;

        return $this;
    }

    /**
     * Gets image_uuid
     *
     * @return string
     */
    public function getImageUuid()
    {
        return $this->container['image_uuid'];
    }

    /**
     * Sets image_uuid
     *
     * @param string $image_uuid image_uuid
     *
     * @return $this
     */
    public function setImageUuid($image_uuid)
    {
        $this->container['image_uuid'] = $image_uuid;

        return $this;
    }

    /**
     * Gets import_source_type
     *
     * @return string
     */
    public function getImportSourceType()
    {
        return $this->container['import_source_type'];
    }

    /**
     * Sets import_source_type
     *
     * @param string $import_source_type import_source_type
     *
     * @return $this
     */
    public function setImportSourceType($import_source_type)
    {
        $allowedValues = $this->getImportSourceTypeAllowableValues();
        if (!is_null($import_source_type) && !in_array($import_source_type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'import_source_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['import_source_type'] = $import_source_type;

        return $this;
    }

    /**
     * Gets is_tagged_golden
     *
     * @return bool
     */
    public function getIsTaggedGolden()
    {
        return $this->container['is_tagged_golden'];
    }

    /**
     * Sets is_tagged_golden
     *
     * @param bool $is_tagged_golden is_tagged_golden
     *
     * @return $this
     */
    public function setIsTaggedGolden($is_tagged_golden)
    {
        $this->container['is_tagged_golden'] = $is_tagged_golden;

        return $this;
    }

    /**
     * Gets md5_checksum
     *
     * @return string
     */
    public function getMd5Checksum()
    {
        return $this->container['md5_checksum'];
    }

    /**
     * Sets md5_checksum
     *
     * @param string $md5_checksum md5_checksum
     *
     * @return $this
     */
    public function setMd5Checksum($md5_checksum)
    {
        $this->container['md5_checksum'] = $md5_checksum;

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
     * Gets profile_info
     *
     * @return \cisco\com\dnac\v1\api\client\model\ImageInfoListResponseProfileInfo[]
     */
    public function getProfileInfo()
    {
        return $this->container['profile_info'];
    }

    /**
     * Sets profile_info
     *
     * @param \cisco\com\dnac\v1\api\client\model\ImageInfoListResponseProfileInfo[] $profile_info profile_info
     *
     * @return $this
     */
    public function setProfileInfo($profile_info)
    {
        $this->container['profile_info'] = $profile_info;

        return $this;
    }

    /**
     * Gets sha_check_sum
     *
     * @return string
     */
    public function getShaCheckSum()
    {
        return $this->container['sha_check_sum'];
    }

    /**
     * Sets sha_check_sum
     *
     * @param string $sha_check_sum sha_check_sum
     *
     * @return $this
     */
    public function setShaCheckSum($sha_check_sum)
    {
        $this->container['sha_check_sum'] = $sha_check_sum;

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
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

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


