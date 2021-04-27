<?php
/**
 * NetworksnetworkIdgroupPoliciesFirewallAndTrafficShaping
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
 * NetworksnetworkIdgroupPoliciesFirewallAndTrafficShaping Class Doc Comment
 *
 * @category Class
 * @description The firewall and traffic shaping rules and settings for your policy.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NetworksnetworkIdgroupPoliciesFirewallAndTrafficShaping implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'networksnetworkIdgroupPolicies_firewallAndTrafficShaping';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'settings' => 'string',
        'traffic_shaping_rules' => '\Swagger\Client\Model\NetworksnetworkIdgroupPoliciesFirewallAndTrafficShapingTrafficShapingRules[]',
        'l3_firewall_rules' => '\Swagger\Client\Model\NetworksnetworkIdgroupPoliciesFirewallAndTrafficShapingL3FirewallRules[]',
        'l7_firewall_rules' => '\Swagger\Client\Model\NetworksnetworkIdgroupPoliciesFirewallAndTrafficShapingL7FirewallRules[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'settings' => null,
        'traffic_shaping_rules' => null,
        'l3_firewall_rules' => null,
        'l7_firewall_rules' => null
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
        'settings' => 'settings',
        'traffic_shaping_rules' => 'trafficShapingRules',
        'l3_firewall_rules' => 'l3FirewallRules',
        'l7_firewall_rules' => 'l7FirewallRules'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'settings' => 'setSettings',
        'traffic_shaping_rules' => 'setTrafficShapingRules',
        'l3_firewall_rules' => 'setL3FirewallRules',
        'l7_firewall_rules' => 'setL7FirewallRules'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'settings' => 'getSettings',
        'traffic_shaping_rules' => 'getTrafficShapingRules',
        'l3_firewall_rules' => 'getL3FirewallRules',
        'l7_firewall_rules' => 'getL7FirewallRules'
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

    const SETTINGS_NETWORK_DEFAULT = 'network default';
    const SETTINGS_IGNORE = 'ignore';
    const SETTINGS_CUSTOM = 'custom';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSettingsAllowableValues()
    {
        return [
            self::SETTINGS_NETWORK_DEFAULT,
            self::SETTINGS_IGNORE,
            self::SETTINGS_CUSTOM,
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
        $this->container['settings'] = isset($data['settings']) ? $data['settings'] : null;
        $this->container['traffic_shaping_rules'] = isset($data['traffic_shaping_rules']) ? $data['traffic_shaping_rules'] : null;
        $this->container['l3_firewall_rules'] = isset($data['l3_firewall_rules']) ? $data['l3_firewall_rules'] : null;
        $this->container['l7_firewall_rules'] = isset($data['l7_firewall_rules']) ? $data['l7_firewall_rules'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSettingsAllowableValues();
        if (!is_null($this->container['settings']) && !in_array($this->container['settings'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'settings', must be one of '%s'",
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
     * Gets settings
     *
     * @return string
     */
    public function getSettings()
    {
        return $this->container['settings'];
    }

    /**
     * Sets settings
     *
     * @param string $settings How firewall and traffic shaping rules are enforced. Can be 'network default', 'ignore' or 'custom'.
     *
     * @return $this
     */
    public function setSettings($settings)
    {
        $allowedValues = $this->getSettingsAllowableValues();
        if (!is_null($settings) && !in_array($settings, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'settings', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['settings'] = $settings;

        return $this;
    }

    /**
     * Gets traffic_shaping_rules
     *
     * @return \Swagger\Client\Model\NetworksnetworkIdgroupPoliciesFirewallAndTrafficShapingTrafficShapingRules[]
     */
    public function getTrafficShapingRules()
    {
        return $this->container['traffic_shaping_rules'];
    }

    /**
     * Sets traffic_shaping_rules
     *
     * @param \Swagger\Client\Model\NetworksnetworkIdgroupPoliciesFirewallAndTrafficShapingTrafficShapingRules[] $traffic_shaping_rules An array of traffic shaping rules. Rules are applied in the order that     they are specified in. An empty list (or null) means no rules. Note that     you are allowed a maximum of 8 rules.
     *
     * @return $this
     */
    public function setTrafficShapingRules($traffic_shaping_rules)
    {
        $this->container['traffic_shaping_rules'] = $traffic_shaping_rules;

        return $this;
    }

    /**
     * Gets l3_firewall_rules
     *
     * @return \Swagger\Client\Model\NetworksnetworkIdgroupPoliciesFirewallAndTrafficShapingL3FirewallRules[]
     */
    public function getL3FirewallRules()
    {
        return $this->container['l3_firewall_rules'];
    }

    /**
     * Sets l3_firewall_rules
     *
     * @param \Swagger\Client\Model\NetworksnetworkIdgroupPoliciesFirewallAndTrafficShapingL3FirewallRules[] $l3_firewall_rules An ordered array of the L3 firewall rules
     *
     * @return $this
     */
    public function setL3FirewallRules($l3_firewall_rules)
    {
        $this->container['l3_firewall_rules'] = $l3_firewall_rules;

        return $this;
    }

    /**
     * Gets l7_firewall_rules
     *
     * @return \Swagger\Client\Model\NetworksnetworkIdgroupPoliciesFirewallAndTrafficShapingL7FirewallRules[]
     */
    public function getL7FirewallRules()
    {
        return $this->container['l7_firewall_rules'];
    }

    /**
     * Sets l7_firewall_rules
     *
     * @param \Swagger\Client\Model\NetworksnetworkIdgroupPoliciesFirewallAndTrafficShapingL7FirewallRules[] $l7_firewall_rules An ordered array of L7 firewall rules
     *
     * @return $this
     */
    public function setL7FirewallRules($l7_firewall_rules)
    {
        $this->container['l7_firewall_rules'] = $l7_firewall_rules;

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


