<?php
/**
 * NetworksnetworkIdappliancevpnbgpNeighbors
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
 * NetworksnetworkIdappliancevpnbgpNeighbors Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NetworksnetworkIdappliancevpnbgpNeighbors implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'networksnetworkIdappliancevpnbgp_neighbors';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ip' => 'string',
        'remote_as_number' => 'int',
        'receive_limit' => 'int',
        'allow_transit' => 'bool',
        'ebgp_hold_timer' => 'int',
        'ebgp_multihop' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ip' => null,
        'remote_as_number' => null,
        'receive_limit' => null,
        'allow_transit' => null,
        'ebgp_hold_timer' => null,
        'ebgp_multihop' => null
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
        'ip' => 'ip',
        'remote_as_number' => 'remoteAsNumber',
        'receive_limit' => 'receiveLimit',
        'allow_transit' => 'allowTransit',
        'ebgp_hold_timer' => 'ebgpHoldTimer',
        'ebgp_multihop' => 'ebgpMultihop'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ip' => 'setIp',
        'remote_as_number' => 'setRemoteAsNumber',
        'receive_limit' => 'setReceiveLimit',
        'allow_transit' => 'setAllowTransit',
        'ebgp_hold_timer' => 'setEbgpHoldTimer',
        'ebgp_multihop' => 'setEbgpMultihop'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ip' => 'getIp',
        'remote_as_number' => 'getRemoteAsNumber',
        'receive_limit' => 'getReceiveLimit',
        'allow_transit' => 'getAllowTransit',
        'ebgp_hold_timer' => 'getEbgpHoldTimer',
        'ebgp_multihop' => 'getEbgpMultihop'
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
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['remote_as_number'] = isset($data['remote_as_number']) ? $data['remote_as_number'] : null;
        $this->container['receive_limit'] = isset($data['receive_limit']) ? $data['receive_limit'] : null;
        $this->container['allow_transit'] = isset($data['allow_transit']) ? $data['allow_transit'] : null;
        $this->container['ebgp_hold_timer'] = isset($data['ebgp_hold_timer']) ? $data['ebgp_hold_timer'] : null;
        $this->container['ebgp_multihop'] = isset($data['ebgp_multihop']) ? $data['ebgp_multihop'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['ip'] === null) {
            $invalidProperties[] = "'ip' can't be null";
        }
        if ($this->container['remote_as_number'] === null) {
            $invalidProperties[] = "'remote_as_number' can't be null";
        }
        if ($this->container['ebgp_hold_timer'] === null) {
            $invalidProperties[] = "'ebgp_hold_timer' can't be null";
        }
        if ($this->container['ebgp_multihop'] === null) {
            $invalidProperties[] = "'ebgp_multihop' can't be null";
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
     * @param string $ip IP address of the neighbor.
     *
     * @return $this
     */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;

        return $this;
    }

    /**
     * Gets remote_as_number
     *
     * @return int
     */
    public function getRemoteAsNumber()
    {
        return $this->container['remote_as_number'];
    }

    /**
     * Sets remote_as_number
     *
     * @param int $remote_as_number Remote ASN of the neighbor. The remote ASN must be an integer between 1 and 4294967295.
     *
     * @return $this
     */
    public function setRemoteAsNumber($remote_as_number)
    {
        $this->container['remote_as_number'] = $remote_as_number;

        return $this;
    }

    /**
     * Gets receive_limit
     *
     * @return int
     */
    public function getReceiveLimit()
    {
        return $this->container['receive_limit'];
    }

    /**
     * Sets receive_limit
     *
     * @param int $receive_limit The receive limit is the maximum number of routes that can be received from any BGP peer. The receive limit must be an integer between 0 and 4294967295. When absent, it defaults to 0.
     *
     * @return $this
     */
    public function setReceiveLimit($receive_limit)
    {
        $this->container['receive_limit'] = $receive_limit;

        return $this;
    }

    /**
     * Gets allow_transit
     *
     * @return bool
     */
    public function getAllowTransit()
    {
        return $this->container['allow_transit'];
    }

    /**
     * Sets allow_transit
     *
     * @param bool $allow_transit When this feature is on, the Meraki device will advertise routes learned from other Autonomous Systems, thereby allowing traffic between Autonomous Systems to transit this AS. When absent, it defaults to false.
     *
     * @return $this
     */
    public function setAllowTransit($allow_transit)
    {
        $this->container['allow_transit'] = $allow_transit;

        return $this;
    }

    /**
     * Gets ebgp_hold_timer
     *
     * @return int
     */
    public function getEbgpHoldTimer()
    {
        return $this->container['ebgp_hold_timer'];
    }

    /**
     * Sets ebgp_hold_timer
     *
     * @param int $ebgp_hold_timer The EBGP hold timer in seconds for each neighbor. The EBGP hold timer must be an integer between 12 and 240.
     *
     * @return $this
     */
    public function setEbgpHoldTimer($ebgp_hold_timer)
    {
        $this->container['ebgp_hold_timer'] = $ebgp_hold_timer;

        return $this;
    }

    /**
     * Gets ebgp_multihop
     *
     * @return int
     */
    public function getEbgpMultihop()
    {
        return $this->container['ebgp_multihop'];
    }

    /**
     * Sets ebgp_multihop
     *
     * @param int $ebgp_multihop Configure this if the neighbor is not adjacent. The EBGP multi-hop must be an integer between 1 and 255.
     *
     * @return $this
     */
    public function setEbgpMultihop($ebgp_multihop)
    {
        $this->container['ebgp_multihop'] = $ebgp_multihop;

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


