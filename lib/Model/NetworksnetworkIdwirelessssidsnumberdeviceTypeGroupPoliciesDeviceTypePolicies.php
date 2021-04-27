<?php
/**
 * NetworksnetworkIdwirelessssidsnumberdeviceTypeGroupPoliciesDeviceTypePolicies
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Meraki Dashboard API
 *
 * The Cisco Meraki Dashboard API is a modern REST API based on the OpenAPI specification.  > Date: 27 April, 2021 > > [What's New](https://meraki.io/whats-new/)  ---  [API Documentation](https://meraki.io/api)  [Community Support](https://meraki.io/community)  [Meraki Homepage](https://www.meraki.com)
 *
 * OpenAPI spec version: 1.0.0-streaming
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.19
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * NetworksnetworkIdwirelessssidsnumberdeviceTypeGroupPoliciesDeviceTypePolicies Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NetworksnetworkIdwirelessssidsnumberdeviceTypeGroupPoliciesDeviceTypePolicies implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'networksnetworkIdwirelessssidsnumberdeviceTypeGroupPolicies_deviceTypePolicies';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'device_type' => 'string',
        'device_policy' => 'string',
        'group_policy_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'device_type' => null,
        'device_policy' => null,
        'group_policy_id' => null
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
        'device_type' => 'deviceType',
        'device_policy' => 'devicePolicy',
        'group_policy_id' => 'groupPolicyId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'device_type' => 'setDeviceType',
        'device_policy' => 'setDevicePolicy',
        'group_policy_id' => 'setGroupPolicyId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'device_type' => 'getDeviceType',
        'device_policy' => 'getDevicePolicy',
        'group_policy_id' => 'getGroupPolicyId'
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

    const DEVICE_TYPE_ANDROID = 'Android';
    const DEVICE_TYPE_BLACK_BERRY = 'BlackBerry';
    const DEVICE_TYPE_CHROME_OS = 'Chrome OS';
    const DEVICE_TYPE_I_PAD = 'iPad';
    const DEVICE_TYPE_I_PHONE = 'iPhone';
    const DEVICE_TYPE_I_POD = 'iPod';
    const DEVICE_TYPE_MAC_OS_X = 'Mac OS X';
    const DEVICE_TYPE_WINDOWS = 'Windows';
    const DEVICE_TYPE_WINDOWS_PHONE = 'Windows Phone';
    const DEVICE_TYPE_BN_NOOK = 'B&N Nook';
    const DEVICE_TYPE_OTHER_OS = 'Other OS';
    const DEVICE_POLICY_ALLOWED = 'Allowed';
    const DEVICE_POLICY_BLOCKED = 'Blocked';
    const DEVICE_POLICY_GROUP_POLICY = 'Group policy';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDeviceTypeAllowableValues()
    {
        return [
            self::DEVICE_TYPE_ANDROID,
            self::DEVICE_TYPE_BLACK_BERRY,
            self::DEVICE_TYPE_CHROME_OS,
            self::DEVICE_TYPE_I_PAD,
            self::DEVICE_TYPE_I_PHONE,
            self::DEVICE_TYPE_I_POD,
            self::DEVICE_TYPE_MAC_OS_X,
            self::DEVICE_TYPE_WINDOWS,
            self::DEVICE_TYPE_WINDOWS_PHONE,
            self::DEVICE_TYPE_BN_NOOK,
            self::DEVICE_TYPE_OTHER_OS,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDevicePolicyAllowableValues()
    {
        return [
            self::DEVICE_POLICY_ALLOWED,
            self::DEVICE_POLICY_BLOCKED,
            self::DEVICE_POLICY_GROUP_POLICY,
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
        $this->container['device_type'] = isset($data['device_type']) ? $data['device_type'] : null;
        $this->container['device_policy'] = isset($data['device_policy']) ? $data['device_policy'] : null;
        $this->container['group_policy_id'] = isset($data['group_policy_id']) ? $data['group_policy_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['device_type'] === null) {
            $invalidProperties[] = "'device_type' can't be null";
        }
        $allowedValues = $this->getDeviceTypeAllowableValues();
        if (!is_null($this->container['device_type']) && !in_array($this->container['device_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'device_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['device_policy'] === null) {
            $invalidProperties[] = "'device_policy' can't be null";
        }
        $allowedValues = $this->getDevicePolicyAllowableValues();
        if (!is_null($this->container['device_policy']) && !in_array($this->container['device_policy'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'device_policy', must be one of '%s'",
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets device_type
     *
     * @return string
     */
    public function getDeviceType()
    {
        return $this->container['device_type'];
    }

    /**
     * Sets device_type
     *
     * @param string $device_type The device type. Can be one of 'Android', 'BlackBerry', 'Chrome OS', 'iPad', 'iPhone', 'iPod', 'Mac OS X', 'Windows', 'Windows Phone', 'B&N Nook' or 'Other OS'
     *
     * @return $this
     */
    public function setDeviceType($device_type)
    {
        $allowedValues = $this->getDeviceTypeAllowableValues();
        if (!in_array($device_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'device_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['device_type'] = $device_type;

        return $this;
    }

    /**
     * Gets device_policy
     *
     * @return string
     */
    public function getDevicePolicy()
    {
        return $this->container['device_policy'];
    }

    /**
     * Sets device_policy
     *
     * @param string $device_policy The device policy. Can be one of 'Allowed', 'Blocked' or 'Group policy'
     *
     * @return $this
     */
    public function setDevicePolicy($device_policy)
    {
        $allowedValues = $this->getDevicePolicyAllowableValues();
        if (!in_array($device_policy, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'device_policy', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['device_policy'] = $device_policy;

        return $this;
    }

    /**
     * Gets group_policy_id
     *
     * @return int
     */
    public function getGroupPolicyId()
    {
        return $this->container['group_policy_id'];
    }

    /**
     * Sets group_policy_id
     *
     * @param int $group_policy_id ID of the group policy object.
     *
     * @return $this
     */
    public function setGroupPolicyId($group_policy_id)
    {
        $this->container['group_policy_id'] = $group_policy_id;

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


