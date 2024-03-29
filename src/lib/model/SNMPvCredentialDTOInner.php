<?php
/**
 * SNMPvCredentialDTOInner
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
 * SNMPvCredentialDTOInner Class Doc Comment
 *
 * @category Class
 * @package  cisco\com\dnac\v1\api\client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SNMPvCredentialDTOInner implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SNMPvCredentialDTO_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'auth_password' => 'string',
        'auth_type' => 'string',
        'comments' => 'string',
        'credential_type' => 'string',
        'description' => 'string',
        'id' => 'string',
        'instance_tenant_id' => 'string',
        'instance_uuid' => 'string',
        'privacy_password' => 'string',
        'privacy_type' => 'string',
        'snmp_mode' => 'string',
        'username' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'auth_password' => null,
        'auth_type' => null,
        'comments' => null,
        'credential_type' => null,
        'description' => null,
        'id' => null,
        'instance_tenant_id' => null,
        'instance_uuid' => null,
        'privacy_password' => null,
        'privacy_type' => null,
        'snmp_mode' => null,
        'username' => null
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
        'auth_password' => 'authPassword',
        'auth_type' => 'authType',
        'comments' => 'comments',
        'credential_type' => 'credentialType',
        'description' => 'description',
        'id' => 'id',
        'instance_tenant_id' => 'instanceTenantId',
        'instance_uuid' => 'instanceUuid',
        'privacy_password' => 'privacyPassword',
        'privacy_type' => 'privacyType',
        'snmp_mode' => 'snmpMode',
        'username' => 'username'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'auth_password' => 'setAuthPassword',
        'auth_type' => 'setAuthType',
        'comments' => 'setComments',
        'credential_type' => 'setCredentialType',
        'description' => 'setDescription',
        'id' => 'setId',
        'instance_tenant_id' => 'setInstanceTenantId',
        'instance_uuid' => 'setInstanceUuid',
        'privacy_password' => 'setPrivacyPassword',
        'privacy_type' => 'setPrivacyType',
        'snmp_mode' => 'setSnmpMode',
        'username' => 'setUsername'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'auth_password' => 'getAuthPassword',
        'auth_type' => 'getAuthType',
        'comments' => 'getComments',
        'credential_type' => 'getCredentialType',
        'description' => 'getDescription',
        'id' => 'getId',
        'instance_tenant_id' => 'getInstanceTenantId',
        'instance_uuid' => 'getInstanceUuid',
        'privacy_password' => 'getPrivacyPassword',
        'privacy_type' => 'getPrivacyType',
        'snmp_mode' => 'getSnmpMode',
        'username' => 'getUsername'
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

    const AUTH_TYPE_SHA = 'SHA';
    const AUTH_TYPE_MD5 = 'MD5';
    const CREDENTIAL_TYPE__GLOBAL = 'GLOBAL';
    const CREDENTIAL_TYPE_APP = 'APP';
    const PRIVACY_TYPE_DES = 'DES';
    const PRIVACY_TYPE_AES128 = 'AES128';
    const SNMP_MODE_AUTHPRIV = 'AUTHPRIV';
    const SNMP_MODE_AUTHNOPRIV = 'AUTHNOPRIV';
    const SNMP_MODE_NOAUTHNOPRIV = 'NOAUTHNOPRIV';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAuthTypeAllowableValues()
    {
        return [
            self::AUTH_TYPE_SHA,
            self::AUTH_TYPE_MD5,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCredentialTypeAllowableValues()
    {
        return [
            self::CREDENTIAL_TYPE__GLOBAL,
            self::CREDENTIAL_TYPE_APP,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPrivacyTypeAllowableValues()
    {
        return [
            self::PRIVACY_TYPE_DES,
            self::PRIVACY_TYPE_AES128,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSnmpModeAllowableValues()
    {
        return [
            self::SNMP_MODE_AUTHPRIV,
            self::SNMP_MODE_AUTHNOPRIV,
            self::SNMP_MODE_NOAUTHNOPRIV,
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
        $this->container['auth_password'] = isset($data['auth_password']) ? $data['auth_password'] : null;
        $this->container['auth_type'] = isset($data['auth_type']) ? $data['auth_type'] : null;
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['credential_type'] = isset($data['credential_type']) ? $data['credential_type'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['instance_tenant_id'] = isset($data['instance_tenant_id']) ? $data['instance_tenant_id'] : null;
        $this->container['instance_uuid'] = isset($data['instance_uuid']) ? $data['instance_uuid'] : null;
        $this->container['privacy_password'] = isset($data['privacy_password']) ? $data['privacy_password'] : null;
        $this->container['privacy_type'] = isset($data['privacy_type']) ? $data['privacy_type'] : null;
        $this->container['snmp_mode'] = isset($data['snmp_mode']) ? $data['snmp_mode'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAuthTypeAllowableValues();
        if (!in_array($this->container['auth_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'auth_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCredentialTypeAllowableValues();
        if (!in_array($this->container['credential_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'credential_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPrivacyTypeAllowableValues();
        if (!in_array($this->container['privacy_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'privacy_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSnmpModeAllowableValues();
        if (!in_array($this->container['snmp_mode'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'snmp_mode', must be one of '%s'",
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

        $allowedValues = $this->getAuthTypeAllowableValues();
        if (!in_array($this->container['auth_type'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getCredentialTypeAllowableValues();
        if (!in_array($this->container['credential_type'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getPrivacyTypeAllowableValues();
        if (!in_array($this->container['privacy_type'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getSnmpModeAllowableValues();
        if (!in_array($this->container['snmp_mode'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets auth_password
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->container['auth_password'];
    }

    /**
     * Sets auth_password
     *
     * @param string $auth_password auth_password
     *
     * @return $this
     */
    public function setAuthPassword($auth_password)
    {
        $this->container['auth_password'] = $auth_password;

        return $this;
    }

    /**
     * Gets auth_type
     *
     * @return string
     */
    public function getAuthType()
    {
        return $this->container['auth_type'];
    }

    /**
     * Sets auth_type
     *
     * @param string $auth_type auth_type
     *
     * @return $this
     */
    public function setAuthType($auth_type)
    {
        $allowedValues = $this->getAuthTypeAllowableValues();
        if (!is_null($auth_type) && !in_array($auth_type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'auth_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['auth_type'] = $auth_type;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param string $comments comments
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets credential_type
     *
     * @return string
     */
    public function getCredentialType()
    {
        return $this->container['credential_type'];
    }

    /**
     * Sets credential_type
     *
     * @param string $credential_type credential_type
     *
     * @return $this
     */
    public function setCredentialType($credential_type)
    {
        $allowedValues = $this->getCredentialTypeAllowableValues();
        if (!is_null($credential_type) && !in_array($credential_type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'credential_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['credential_type'] = $credential_type;

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
     * Gets privacy_password
     *
     * @return string
     */
    public function getPrivacyPassword()
    {
        return $this->container['privacy_password'];
    }

    /**
     * Sets privacy_password
     *
     * @param string $privacy_password privacy_password
     *
     * @return $this
     */
    public function setPrivacyPassword($privacy_password)
    {
        $this->container['privacy_password'] = $privacy_password;

        return $this;
    }

    /**
     * Gets privacy_type
     *
     * @return string
     */
    public function getPrivacyType()
    {
        return $this->container['privacy_type'];
    }

    /**
     * Sets privacy_type
     *
     * @param string $privacy_type privacy_type
     *
     * @return $this
     */
    public function setPrivacyType($privacy_type)
    {
        $allowedValues = $this->getPrivacyTypeAllowableValues();
        if (!is_null($privacy_type) && !in_array($privacy_type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'privacy_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['privacy_type'] = $privacy_type;

        return $this;
    }

    /**
     * Gets snmp_mode
     *
     * @return string
     */
    public function getSnmpMode()
    {
        return $this->container['snmp_mode'];
    }

    /**
     * Sets snmp_mode
     *
     * @param string $snmp_mode snmp_mode
     *
     * @return $this
     */
    public function setSnmpMode($snmp_mode)
    {
        $allowedValues = $this->getSnmpModeAllowableValues();
        if (!is_null($snmp_mode) && !in_array($snmp_mode, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'snmp_mode', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['snmp_mode'] = $snmp_mode;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string $username username
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

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


