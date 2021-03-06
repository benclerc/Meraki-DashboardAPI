<?php
/**
 * UpdateNetworkSettings
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
 * UpdateNetworkSettings Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateNetworkSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'updateNetworkSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'local_status_page_enabled' => 'bool',
        'remote_status_page_enabled' => 'bool',
        'secure_connect' => '\Swagger\Client\Model\NetworksnetworkIdsettingsSecureConnect'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'local_status_page_enabled' => null,
        'remote_status_page_enabled' => null,
        'secure_connect' => null
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
        'local_status_page_enabled' => 'localStatusPageEnabled',
        'remote_status_page_enabled' => 'remoteStatusPageEnabled',
        'secure_connect' => 'secureConnect'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'local_status_page_enabled' => 'setLocalStatusPageEnabled',
        'remote_status_page_enabled' => 'setRemoteStatusPageEnabled',
        'secure_connect' => 'setSecureConnect'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'local_status_page_enabled' => 'getLocalStatusPageEnabled',
        'remote_status_page_enabled' => 'getRemoteStatusPageEnabled',
        'secure_connect' => 'getSecureConnect'
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
        $this->container['local_status_page_enabled'] = isset($data['local_status_page_enabled']) ? $data['local_status_page_enabled'] : null;
        $this->container['remote_status_page_enabled'] = isset($data['remote_status_page_enabled']) ? $data['remote_status_page_enabled'] : null;
        $this->container['secure_connect'] = isset($data['secure_connect']) ? $data['secure_connect'] : null;
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
     * Gets local_status_page_enabled
     *
     * @return bool
     */
    public function getLocalStatusPageEnabled()
    {
        return $this->container['local_status_page_enabled'];
    }

    /**
     * Sets local_status_page_enabled
     *
     * @param bool $local_status_page_enabled Enables / disables the local device status pages (<a target='_blank' href='http://my.meraki.com/'>my.meraki.com, </a><a target='_blank' href='http://ap.meraki.com/'>ap.meraki.com, </a><a target='_blank' href='http://switch.meraki.com/'>switch.meraki.com, </a><a target='_blank' href='http://wired.meraki.com/'>wired.meraki.com</a>). Optional (defaults to false)
     *
     * @return $this
     */
    public function setLocalStatusPageEnabled($local_status_page_enabled)
    {
        $this->container['local_status_page_enabled'] = $local_status_page_enabled;

        return $this;
    }

    /**
     * Gets remote_status_page_enabled
     *
     * @return bool
     */
    public function getRemoteStatusPageEnabled()
    {
        return $this->container['remote_status_page_enabled'];
    }

    /**
     * Sets remote_status_page_enabled
     *
     * @param bool $remote_status_page_enabled Enables / disables access to the device status page (<a target='_blank'>http://[device's LAN IP])</a>. Optional. Can only be set if localStatusPageEnabled is set to true
     *
     * @return $this
     */
    public function setRemoteStatusPageEnabled($remote_status_page_enabled)
    {
        $this->container['remote_status_page_enabled'] = $remote_status_page_enabled;

        return $this;
    }

    /**
     * Gets secure_connect
     *
     * @return \Swagger\Client\Model\NetworksnetworkIdsettingsSecureConnect
     */
    public function getSecureConnect()
    {
        return $this->container['secure_connect'];
    }

    /**
     * Sets secure_connect
     *
     * @param \Swagger\Client\Model\NetworksnetworkIdsettingsSecureConnect $secure_connect secure_connect
     *
     * @return $this
     */
    public function setSecureConnect($secure_connect)
    {
        $this->container['secure_connect'] = $secure_connect;

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


