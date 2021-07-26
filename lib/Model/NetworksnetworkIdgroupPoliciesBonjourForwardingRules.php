<?php
/**
 * NetworksnetworkIdgroupPoliciesBonjourForwardingRules
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
 * NetworksnetworkIdgroupPoliciesBonjourForwardingRules Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NetworksnetworkIdgroupPoliciesBonjourForwardingRules implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'networksnetworkIdgroupPolicies_bonjourForwarding_rules';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'description' => 'string',
        'vlan_id' => 'string',
        'services' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'description' => null,
        'vlan_id' => null,
        'services' => null
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
        'description' => 'description',
        'vlan_id' => 'vlanId',
        'services' => 'services'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'vlan_id' => 'setVlanId',
        'services' => 'setServices'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'vlan_id' => 'getVlanId',
        'services' => 'getServices'
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

    const SERVICES_ALL_SERVICES = 'All Services';
    const SERVICES_AIR_PLAY = 'AirPlay';
    const SERVICES_AFP = 'AFP';
    const SERVICES_BIT_TORRENT = 'BitTorrent';
    const SERVICES_FTP = 'FTP';
    const SERVICES_I_CHAT = 'iChat';
    const SERVICES_I_TUNES = 'iTunes';
    const SERVICES_PRINTERS = 'Printers';
    const SERVICES_SAMBA = 'Samba';
    const SERVICES_SCANNERS = 'Scanners';
    const SERVICES_SSH = 'SSH';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getServicesAllowableValues()
    {
        return [
            self::SERVICES_ALL_SERVICES,
            self::SERVICES_AIR_PLAY,
            self::SERVICES_AFP,
            self::SERVICES_BIT_TORRENT,
            self::SERVICES_FTP,
            self::SERVICES_I_CHAT,
            self::SERVICES_I_TUNES,
            self::SERVICES_PRINTERS,
            self::SERVICES_SAMBA,
            self::SERVICES_SCANNERS,
            self::SERVICES_SSH,
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['vlan_id'] = isset($data['vlan_id']) ? $data['vlan_id'] : null;
        $this->container['services'] = isset($data['services']) ? $data['services'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['vlan_id'] === null) {
            $invalidProperties[] = "'vlan_id' can't be null";
        }
        if ($this->container['services'] === null) {
            $invalidProperties[] = "'services' can't be null";
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
     * @param string $description A description for your Bonjour forwarding rule. Optional.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * @param string $vlan_id The ID of the service VLAN. Required.
     *
     * @return $this
     */
    public function setVlanId($vlan_id)
    {
        $this->container['vlan_id'] = $vlan_id;

        return $this;
    }

    /**
     * Gets services
     *
     * @return string[]
     */
    public function getServices()
    {
        return $this->container['services'];
    }

    /**
     * Sets services
     *
     * @param string[] $services A list of Bonjour services. At least one service must be specified. Available services are 'All Services', 'AirPlay', 'AFP', 'BitTorrent', 'FTP', 'iChat', 'iTunes', 'Printers', 'Samba', 'Scanners' and 'SSH'
     *
     * @return $this
     */
    public function setServices($services)
    {
        $allowedValues = $this->getServicesAllowableValues();
        if (array_diff($services, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'services', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['services'] = $services;

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


