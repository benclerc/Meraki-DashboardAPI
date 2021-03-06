<?php
/**
 * UpdateNetworkSwitchRoutingOspf
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
 * UpdateNetworkSwitchRoutingOspf Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateNetworkSwitchRoutingOspf implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'updateNetworkSwitchRoutingOspf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'enabled' => 'bool',
        'hello_timer_in_seconds' => 'int',
        'dead_timer_in_seconds' => 'int',
        'areas' => '\Swagger\Client\Model\NetworksnetworkIdswitchroutingospfAreas[]',
        'md5_authentication_enabled' => 'bool',
        'md5_authentication_key' => '\Swagger\Client\Model\NetworksnetworkIdswitchroutingospfMd5AuthenticationKey'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'enabled' => null,
        'hello_timer_in_seconds' => null,
        'dead_timer_in_seconds' => null,
        'areas' => null,
        'md5_authentication_enabled' => null,
        'md5_authentication_key' => null
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
        'hello_timer_in_seconds' => 'helloTimerInSeconds',
        'dead_timer_in_seconds' => 'deadTimerInSeconds',
        'areas' => 'areas',
        'md5_authentication_enabled' => 'md5AuthenticationEnabled',
        'md5_authentication_key' => 'md5AuthenticationKey'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enabled' => 'setEnabled',
        'hello_timer_in_seconds' => 'setHelloTimerInSeconds',
        'dead_timer_in_seconds' => 'setDeadTimerInSeconds',
        'areas' => 'setAreas',
        'md5_authentication_enabled' => 'setMd5AuthenticationEnabled',
        'md5_authentication_key' => 'setMd5AuthenticationKey'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enabled' => 'getEnabled',
        'hello_timer_in_seconds' => 'getHelloTimerInSeconds',
        'dead_timer_in_seconds' => 'getDeadTimerInSeconds',
        'areas' => 'getAreas',
        'md5_authentication_enabled' => 'getMd5AuthenticationEnabled',
        'md5_authentication_key' => 'getMd5AuthenticationKey'
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
        $this->container['hello_timer_in_seconds'] = isset($data['hello_timer_in_seconds']) ? $data['hello_timer_in_seconds'] : null;
        $this->container['dead_timer_in_seconds'] = isset($data['dead_timer_in_seconds']) ? $data['dead_timer_in_seconds'] : null;
        $this->container['areas'] = isset($data['areas']) ? $data['areas'] : null;
        $this->container['md5_authentication_enabled'] = isset($data['md5_authentication_enabled']) ? $data['md5_authentication_enabled'] : null;
        $this->container['md5_authentication_key'] = isset($data['md5_authentication_key']) ? $data['md5_authentication_key'] : null;
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
     * @param bool $enabled Boolean value to enable or disable OSPF routing. OSPF routing is disabled by default.
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets hello_timer_in_seconds
     *
     * @return int
     */
    public function getHelloTimerInSeconds()
    {
        return $this->container['hello_timer_in_seconds'];
    }

    /**
     * Sets hello_timer_in_seconds
     *
     * @param int $hello_timer_in_seconds Time interval in seconds at which hello packet will be sent to OSPF neighbors to maintain connectivity. Value must be between 1 and 255. Default is 10 seconds
     *
     * @return $this
     */
    public function setHelloTimerInSeconds($hello_timer_in_seconds)
    {
        $this->container['hello_timer_in_seconds'] = $hello_timer_in_seconds;

        return $this;
    }

    /**
     * Gets dead_timer_in_seconds
     *
     * @return int
     */
    public function getDeadTimerInSeconds()
    {
        return $this->container['dead_timer_in_seconds'];
    }

    /**
     * Sets dead_timer_in_seconds
     *
     * @param int $dead_timer_in_seconds Time interval to determine when the peer will be declare inactive/dead. Value must be between 1 and 65535
     *
     * @return $this
     */
    public function setDeadTimerInSeconds($dead_timer_in_seconds)
    {
        $this->container['dead_timer_in_seconds'] = $dead_timer_in_seconds;

        return $this;
    }

    /**
     * Gets areas
     *
     * @return \Swagger\Client\Model\NetworksnetworkIdswitchroutingospfAreas[]
     */
    public function getAreas()
    {
        return $this->container['areas'];
    }

    /**
     * Sets areas
     *
     * @param \Swagger\Client\Model\NetworksnetworkIdswitchroutingospfAreas[] $areas OSPF areas
     *
     * @return $this
     */
    public function setAreas($areas)
    {
        $this->container['areas'] = $areas;

        return $this;
    }

    /**
     * Gets md5_authentication_enabled
     *
     * @return bool
     */
    public function getMd5AuthenticationEnabled()
    {
        return $this->container['md5_authentication_enabled'];
    }

    /**
     * Sets md5_authentication_enabled
     *
     * @param bool $md5_authentication_enabled Boolean value to enable or disable MD5 authentication. MD5 authentication is disabled by default.
     *
     * @return $this
     */
    public function setMd5AuthenticationEnabled($md5_authentication_enabled)
    {
        $this->container['md5_authentication_enabled'] = $md5_authentication_enabled;

        return $this;
    }

    /**
     * Gets md5_authentication_key
     *
     * @return \Swagger\Client\Model\NetworksnetworkIdswitchroutingospfMd5AuthenticationKey
     */
    public function getMd5AuthenticationKey()
    {
        return $this->container['md5_authentication_key'];
    }

    /**
     * Sets md5_authentication_key
     *
     * @param \Swagger\Client\Model\NetworksnetworkIdswitchroutingospfMd5AuthenticationKey $md5_authentication_key md5_authentication_key
     *
     * @return $this
     */
    public function setMd5AuthenticationKey($md5_authentication_key)
    {
        $this->container['md5_authentication_key'] = $md5_authentication_key;

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


