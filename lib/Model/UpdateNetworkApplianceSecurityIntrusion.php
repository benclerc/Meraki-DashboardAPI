<?php
/**
 * UpdateNetworkApplianceSecurityIntrusion
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
 * The Cisco Meraki Dashboard API is a modern REST API based on the OpenAPI specification.  > Date: 07 July, 2021 > > [What's New](https://meraki.io/whats-new/)  ---  [API Documentation](https://meraki.io/api)  [Community Support](https://meraki.io/community)  [Meraki Homepage](https://www.meraki.com)
 *
 * OpenAPI spec version: 1.11.0
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
 * UpdateNetworkApplianceSecurityIntrusion Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateNetworkApplianceSecurityIntrusion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'updateNetworkApplianceSecurityIntrusion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'mode' => 'string',
        'ids_rulesets' => 'string',
        'protected_networks' => '\Swagger\Client\Model\NetworksnetworkIdappliancesecurityintrusionProtectedNetworks'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'mode' => null,
        'ids_rulesets' => null,
        'protected_networks' => null
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
        'mode' => 'mode',
        'ids_rulesets' => 'idsRulesets',
        'protected_networks' => 'protectedNetworks'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mode' => 'setMode',
        'ids_rulesets' => 'setIdsRulesets',
        'protected_networks' => 'setProtectedNetworks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mode' => 'getMode',
        'ids_rulesets' => 'getIdsRulesets',
        'protected_networks' => 'getProtectedNetworks'
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

    const MODE_PREVENTION = 'prevention';
    const MODE_DETECTION = 'detection';
    const MODE_DISABLED = 'disabled';
    const IDS_RULESETS_CONNECTIVITY = 'connectivity';
    const IDS_RULESETS_BALANCED = 'balanced';
    const IDS_RULESETS_SECURITY = 'security';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getModeAllowableValues()
    {
        return [
            self::MODE_PREVENTION,
            self::MODE_DETECTION,
            self::MODE_DISABLED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIdsRulesetsAllowableValues()
    {
        return [
            self::IDS_RULESETS_CONNECTIVITY,
            self::IDS_RULESETS_BALANCED,
            self::IDS_RULESETS_SECURITY,
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
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['ids_rulesets'] = isset($data['ids_rulesets']) ? $data['ids_rulesets'] : null;
        $this->container['protected_networks'] = isset($data['protected_networks']) ? $data['protected_networks'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getModeAllowableValues();
        if (!is_null($this->container['mode']) && !in_array($this->container['mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'mode', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getIdsRulesetsAllowableValues();
        if (!is_null($this->container['ids_rulesets']) && !in_array($this->container['ids_rulesets'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'ids_rulesets', must be one of '%s'",
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
     * Gets mode
     *
     * @return string
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     *
     * @param string $mode Set mode to 'disabled'/'detection'/'prevention' (optional - omitting will leave current config unchanged)
     *
     * @return $this
     */
    public function setMode($mode)
    {
        $allowedValues = $this->getModeAllowableValues();
        if (!is_null($mode) && !in_array($mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'mode', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['mode'] = $mode;

        return $this;
    }

    /**
     * Gets ids_rulesets
     *
     * @return string
     */
    public function getIdsRulesets()
    {
        return $this->container['ids_rulesets'];
    }

    /**
     * Sets ids_rulesets
     *
     * @param string $ids_rulesets Set the detection ruleset 'connectivity'/'balanced'/'security' (optional - omitting will leave current config unchanged). Default value is 'balanced' if none currently saved
     *
     * @return $this
     */
    public function setIdsRulesets($ids_rulesets)
    {
        $allowedValues = $this->getIdsRulesetsAllowableValues();
        if (!is_null($ids_rulesets) && !in_array($ids_rulesets, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'ids_rulesets', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['ids_rulesets'] = $ids_rulesets;

        return $this;
    }

    /**
     * Gets protected_networks
     *
     * @return \Swagger\Client\Model\NetworksnetworkIdappliancesecurityintrusionProtectedNetworks
     */
    public function getProtectedNetworks()
    {
        return $this->container['protected_networks'];
    }

    /**
     * Sets protected_networks
     *
     * @param \Swagger\Client\Model\NetworksnetworkIdappliancesecurityintrusionProtectedNetworks $protected_networks protected_networks
     *
     * @return $this
     */
    public function setProtectedNetworks($protected_networks)
    {
        $this->container['protected_networks'] = $protected_networks;

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


