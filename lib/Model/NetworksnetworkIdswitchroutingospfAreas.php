<?php
/**
 * NetworksnetworkIdswitchroutingospfAreas
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
 * NetworksnetworkIdswitchroutingospfAreas Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NetworksnetworkIdswitchroutingospfAreas implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'networksnetworkIdswitchroutingospf_areas';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'area_id' => 'int',
        'area_name' => 'string',
        'area_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'area_id' => null,
        'area_name' => null,
        'area_type' => null
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
        'area_id' => 'areaId',
        'area_name' => 'areaName',
        'area_type' => 'areaType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'area_id' => 'setAreaId',
        'area_name' => 'setAreaName',
        'area_type' => 'setAreaType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'area_id' => 'getAreaId',
        'area_name' => 'getAreaName',
        'area_type' => 'getAreaType'
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

    const AREA_TYPE_NORMAL = 'normal';
    const AREA_TYPE_STUB = 'stub';
    const AREA_TYPE_NSSA = 'nssa';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAreaTypeAllowableValues()
    {
        return [
            self::AREA_TYPE_NORMAL,
            self::AREA_TYPE_STUB,
            self::AREA_TYPE_NSSA,
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
        $this->container['area_id'] = isset($data['area_id']) ? $data['area_id'] : null;
        $this->container['area_name'] = isset($data['area_name']) ? $data['area_name'] : null;
        $this->container['area_type'] = isset($data['area_type']) ? $data['area_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['area_id'] === null) {
            $invalidProperties[] = "'area_id' can't be null";
        }
        if ($this->container['area_name'] === null) {
            $invalidProperties[] = "'area_name' can't be null";
        }
        if ($this->container['area_type'] === null) {
            $invalidProperties[] = "'area_type' can't be null";
        }
        $allowedValues = $this->getAreaTypeAllowableValues();
        if (!is_null($this->container['area_type']) && !in_array($this->container['area_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'area_type', must be one of '%s'",
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
     * Gets area_id
     *
     * @return int
     */
    public function getAreaId()
    {
        return $this->container['area_id'];
    }

    /**
     * Sets area_id
     *
     * @param int $area_id OSPF area ID
     *
     * @return $this
     */
    public function setAreaId($area_id)
    {
        $this->container['area_id'] = $area_id;

        return $this;
    }

    /**
     * Gets area_name
     *
     * @return string
     */
    public function getAreaName()
    {
        return $this->container['area_name'];
    }

    /**
     * Sets area_name
     *
     * @param string $area_name Name of the OSPF area
     *
     * @return $this
     */
    public function setAreaName($area_name)
    {
        $this->container['area_name'] = $area_name;

        return $this;
    }

    /**
     * Gets area_type
     *
     * @return string
     */
    public function getAreaType()
    {
        return $this->container['area_type'];
    }

    /**
     * Sets area_type
     *
     * @param string $area_type Area types in OSPF. Must be one of: [\"normal\", \"stub\", \"nssa\"]
     *
     * @return $this
     */
    public function setAreaType($area_type)
    {
        $allowedValues = $this->getAreaTypeAllowableValues();
        if (!in_array($area_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'area_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['area_type'] = $area_type;

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


