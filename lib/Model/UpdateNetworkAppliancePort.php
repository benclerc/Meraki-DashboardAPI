<?php
/**
 * UpdateNetworkAppliancePort
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
 * UpdateNetworkAppliancePort Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateNetworkAppliancePort implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'updateNetworkAppliancePort';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'enabled' => 'bool',
        'drop_untagged_traffic' => 'bool',
        'type' => 'string',
        'vlan' => 'int',
        'allowed_vlans' => 'string',
        'access_policy' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'enabled' => null,
        'drop_untagged_traffic' => null,
        'type' => null,
        'vlan' => null,
        'allowed_vlans' => null,
        'access_policy' => null
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
        'enabled' => 'enabled',
        'drop_untagged_traffic' => 'dropUntaggedTraffic',
        'type' => 'type',
        'vlan' => 'vlan',
        'allowed_vlans' => 'allowedVlans',
        'access_policy' => 'accessPolicy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enabled' => 'setEnabled',
        'drop_untagged_traffic' => 'setDropUntaggedTraffic',
        'type' => 'setType',
        'vlan' => 'setVlan',
        'allowed_vlans' => 'setAllowedVlans',
        'access_policy' => 'setAccessPolicy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enabled' => 'getEnabled',
        'drop_untagged_traffic' => 'getDropUntaggedTraffic',
        'type' => 'getType',
        'vlan' => 'getVlan',
        'allowed_vlans' => 'getAllowedVlans',
        'access_policy' => 'getAccessPolicy'
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
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['drop_untagged_traffic'] = isset($data['drop_untagged_traffic']) ? $data['drop_untagged_traffic'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['vlan'] = isset($data['vlan']) ? $data['vlan'] : null;
        $this->container['allowed_vlans'] = isset($data['allowed_vlans']) ? $data['allowed_vlans'] : null;
        $this->container['access_policy'] = isset($data['access_policy']) ? $data['access_policy'] : null;
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool $enabled The status of the port
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets drop_untagged_traffic
     *
     * @return bool
     */
    public function getDropUntaggedTraffic()
    {
        return $this->container['drop_untagged_traffic'];
    }

    /**
     * Sets drop_untagged_traffic
     *
     * @param bool $drop_untagged_traffic Trunk port can Drop all Untagged traffic. When true, no VLAN is required. Access ports cannot have dropUntaggedTraffic set to true.
     *
     * @return $this
     */
    public function setDropUntaggedTraffic($drop_untagged_traffic)
    {
        $this->container['drop_untagged_traffic'] = $drop_untagged_traffic;

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
     * @param string $type The type of the port: 'access' or 'trunk'.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets vlan
     *
     * @return int
     */
    public function getVlan()
    {
        return $this->container['vlan'];
    }

    /**
     * Sets vlan
     *
     * @param int $vlan Native VLAN when the port is in Trunk mode. Access VLAN when the port is in Access mode.
     *
     * @return $this
     */
    public function setVlan($vlan)
    {
        $this->container['vlan'] = $vlan;

        return $this;
    }

    /**
     * Gets allowed_vlans
     *
     * @return string
     */
    public function getAllowedVlans()
    {
        return $this->container['allowed_vlans'];
    }

    /**
     * Sets allowed_vlans
     *
     * @param string $allowed_vlans Comma-delimited list of the VLAN ID's allowed on the port, or 'all' to permit all VLAN's on the port.
     *
     * @return $this
     */
    public function setAllowedVlans($allowed_vlans)
    {
        $this->container['allowed_vlans'] = $allowed_vlans;

        return $this;
    }

    /**
     * Gets access_policy
     *
     * @return string
     */
    public function getAccessPolicy()
    {
        return $this->container['access_policy'];
    }

    /**
     * Sets access_policy
     *
     * @param string $access_policy The name of the policy. Only applicable to Access ports. Valid values are: 'open', '8021x-radius', 'mac-radius', 'hybris-radius' for MX64 or Z3 or any MX supporting the per port authentication feature. Otherwise, 'open' is the only valid value and 'open' is the default value if the field is missing.
     *
     * @return $this
     */
    public function setAccessPolicy($access_policy)
    {
        $this->container['access_policy'] = $access_policy;

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


