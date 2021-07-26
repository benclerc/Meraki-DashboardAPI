<?php
/**
 * OrganizationsorganizationIdadaptivePolicyaclsRules
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
 * OrganizationsorganizationIdadaptivePolicyaclsRules Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrganizationsorganizationIdadaptivePolicyaclsRules implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'organizationsorganizationIdadaptivePolicyacls_rules';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'policy' => 'string',
        'protocol' => 'string',
        'src_port' => 'string',
        'dst_port' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'policy' => null,
        'protocol' => null,
        'src_port' => null,
        'dst_port' => null
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
        'policy' => 'policy',
        'protocol' => 'protocol',
        'src_port' => 'srcPort',
        'dst_port' => 'dstPort'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'policy' => 'setPolicy',
        'protocol' => 'setProtocol',
        'src_port' => 'setSrcPort',
        'dst_port' => 'setDstPort'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'policy' => 'getPolicy',
        'protocol' => 'getProtocol',
        'src_port' => 'getSrcPort',
        'dst_port' => 'getDstPort'
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

    const POLICY_ALLOW = 'allow';
    const POLICY_DENY = 'deny';
    const PROTOCOL_TCP = 'tcp';
    const PROTOCOL_UDP = 'udp';
    const PROTOCOL_ICMP = 'icmp';
    const PROTOCOL_ANY = 'any';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPolicyAllowableValues()
    {
        return [
            self::POLICY_ALLOW,
            self::POLICY_DENY,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProtocolAllowableValues()
    {
        return [
            self::PROTOCOL_TCP,
            self::PROTOCOL_UDP,
            self::PROTOCOL_ICMP,
            self::PROTOCOL_ANY,
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
        $this->container['policy'] = isset($data['policy']) ? $data['policy'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['src_port'] = isset($data['src_port']) ? $data['src_port'] : null;
        $this->container['dst_port'] = isset($data['dst_port']) ? $data['dst_port'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['policy'] === null) {
            $invalidProperties[] = "'policy' can't be null";
        }
        $allowedValues = $this->getPolicyAllowableValues();
        if (!is_null($this->container['policy']) && !in_array($this->container['policy'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'policy', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['protocol'] === null) {
            $invalidProperties[] = "'protocol' can't be null";
        }
        $allowedValues = $this->getProtocolAllowableValues();
        if (!is_null($this->container['protocol']) && !in_array($this->container['protocol'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'protocol', must be one of '%s'",
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
     * Gets policy
     *
     * @return string
     */
    public function getPolicy()
    {
        return $this->container['policy'];
    }

    /**
     * Sets policy
     *
     * @param string $policy 'allow' or 'deny' traffic specified by this rule.
     *
     * @return $this
     */
    public function setPolicy($policy)
    {
        $allowedValues = $this->getPolicyAllowableValues();
        if (!in_array($policy, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'policy', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['policy'] = $policy;

        return $this;
    }

    /**
     * Gets protocol
     *
     * @return string
     */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
     * Sets protocol
     *
     * @param string $protocol The type of protocol (must be 'tcp', 'udp', 'icmp' or 'any').
     *
     * @return $this
     */
    public function setProtocol($protocol)
    {
        $allowedValues = $this->getProtocolAllowableValues();
        if (!in_array($protocol, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'protocol', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['protocol'] = $protocol;

        return $this;
    }

    /**
     * Gets src_port
     *
     * @return string
     */
    public function getSrcPort()
    {
        return $this->container['src_port'];
    }

    /**
     * Sets src_port
     *
     * @param string $src_port Source port. Must be in the format of single port: '1', port list: '1,2' or port range: '1-10', and in the range of 1-65535, or 'any'. Default is 'any'.
     *
     * @return $this
     */
    public function setSrcPort($src_port)
    {
        $this->container['src_port'] = $src_port;

        return $this;
    }

    /**
     * Gets dst_port
     *
     * @return string
     */
    public function getDstPort()
    {
        return $this->container['dst_port'];
    }

    /**
     * Sets dst_port
     *
     * @param string $dst_port Destination port. Must be in the format of single port: '1', port list: '1,2' or port range: '1-10', and in the range of 1-65535, or 'any'. Default is 'any'.
     *
     * @return $this
     */
    public function setDstPort($dst_port)
    {
        $this->container['dst_port'] = $dst_port;

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


