<?php
/**
 * NetworksnetworkIdgroupPoliciesScheduling
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
 * NetworksnetworkIdgroupPoliciesScheduling Class Doc Comment
 *
 * @category Class
 * @description The schedule for the group policy. Schedules are applied to days of the week.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NetworksnetworkIdgroupPoliciesScheduling implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'networksnetworkIdgroupPolicies_scheduling';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'enabled' => 'bool',
        'monday' => '\Swagger\Client\Model\NetworksnetworkIdgroupPoliciesSchedulingMonday',
        'tuesday' => '\Swagger\Client\Model\NetworksnetworkIdgroupPoliciesSchedulingTuesday',
        'wednesday' => '\Swagger\Client\Model\NetworksnetworkIdgroupPoliciesSchedulingWednesday',
        'thursday' => '\Swagger\Client\Model\NetworksnetworkIdgroupPoliciesSchedulingThursday',
        'friday' => '\Swagger\Client\Model\NetworksnetworkIdgroupPoliciesSchedulingFriday',
        'saturday' => '\Swagger\Client\Model\NetworksnetworkIdgroupPoliciesSchedulingSaturday',
        'sunday' => '\Swagger\Client\Model\NetworksnetworkIdgroupPoliciesSchedulingSunday'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'enabled' => null,
        'monday' => null,
        'tuesday' => null,
        'wednesday' => null,
        'thursday' => null,
        'friday' => null,
        'saturday' => null,
        'sunday' => null
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
        'monday' => 'monday',
        'tuesday' => 'tuesday',
        'wednesday' => 'wednesday',
        'thursday' => 'thursday',
        'friday' => 'friday',
        'saturday' => 'saturday',
        'sunday' => 'sunday'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enabled' => 'setEnabled',
        'monday' => 'setMonday',
        'tuesday' => 'setTuesday',
        'wednesday' => 'setWednesday',
        'thursday' => 'setThursday',
        'friday' => 'setFriday',
        'saturday' => 'setSaturday',
        'sunday' => 'setSunday'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enabled' => 'getEnabled',
        'monday' => 'getMonday',
        'tuesday' => 'getTuesday',
        'wednesday' => 'getWednesday',
        'thursday' => 'getThursday',
        'friday' => 'getFriday',
        'saturday' => 'getSaturday',
        'sunday' => 'getSunday'
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
        $this->container['monday'] = isset($data['monday']) ? $data['monday'] : null;
        $this->container['tuesday'] = isset($data['tuesday']) ? $data['tuesday'] : null;
        $this->container['wednesday'] = isset($data['wednesday']) ? $data['wednesday'] : null;
        $this->container['thursday'] = isset($data['thursday']) ? $data['thursday'] : null;
        $this->container['friday'] = isset($data['friday']) ? $data['friday'] : null;
        $this->container['saturday'] = isset($data['saturday']) ? $data['saturday'] : null;
        $this->container['sunday'] = isset($data['sunday']) ? $data['sunday'] : null;
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
     * @param bool $enabled Whether scheduling is enabled (true) or disabled (false). Defaults to false. If true, the schedule objects for each day of the week (monday - sunday) are parsed.
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets monday
     *
     * @return \Swagger\Client\Model\NetworksnetworkIdgroupPoliciesSchedulingMonday
     */
    public function getMonday()
    {
        return $this->container['monday'];
    }

    /**
     * Sets monday
     *
     * @param \Swagger\Client\Model\NetworksnetworkIdgroupPoliciesSchedulingMonday $monday monday
     *
     * @return $this
     */
    public function setMonday($monday)
    {
        $this->container['monday'] = $monday;

        return $this;
    }

    /**
     * Gets tuesday
     *
     * @return \Swagger\Client\Model\NetworksnetworkIdgroupPoliciesSchedulingTuesday
     */
    public function getTuesday()
    {
        return $this->container['tuesday'];
    }

    /**
     * Sets tuesday
     *
     * @param \Swagger\Client\Model\NetworksnetworkIdgroupPoliciesSchedulingTuesday $tuesday tuesday
     *
     * @return $this
     */
    public function setTuesday($tuesday)
    {
        $this->container['tuesday'] = $tuesday;

        return $this;
    }

    /**
     * Gets wednesday
     *
     * @return \Swagger\Client\Model\NetworksnetworkIdgroupPoliciesSchedulingWednesday
     */
    public function getWednesday()
    {
        return $this->container['wednesday'];
    }

    /**
     * Sets wednesday
     *
     * @param \Swagger\Client\Model\NetworksnetworkIdgroupPoliciesSchedulingWednesday $wednesday wednesday
     *
     * @return $this
     */
    public function setWednesday($wednesday)
    {
        $this->container['wednesday'] = $wednesday;

        return $this;
    }

    /**
     * Gets thursday
     *
     * @return \Swagger\Client\Model\NetworksnetworkIdgroupPoliciesSchedulingThursday
     */
    public function getThursday()
    {
        return $this->container['thursday'];
    }

    /**
     * Sets thursday
     *
     * @param \Swagger\Client\Model\NetworksnetworkIdgroupPoliciesSchedulingThursday $thursday thursday
     *
     * @return $this
     */
    public function setThursday($thursday)
    {
        $this->container['thursday'] = $thursday;

        return $this;
    }

    /**
     * Gets friday
     *
     * @return \Swagger\Client\Model\NetworksnetworkIdgroupPoliciesSchedulingFriday
     */
    public function getFriday()
    {
        return $this->container['friday'];
    }

    /**
     * Sets friday
     *
     * @param \Swagger\Client\Model\NetworksnetworkIdgroupPoliciesSchedulingFriday $friday friday
     *
     * @return $this
     */
    public function setFriday($friday)
    {
        $this->container['friday'] = $friday;

        return $this;
    }

    /**
     * Gets saturday
     *
     * @return \Swagger\Client\Model\NetworksnetworkIdgroupPoliciesSchedulingSaturday
     */
    public function getSaturday()
    {
        return $this->container['saturday'];
    }

    /**
     * Sets saturday
     *
     * @param \Swagger\Client\Model\NetworksnetworkIdgroupPoliciesSchedulingSaturday $saturday saturday
     *
     * @return $this
     */
    public function setSaturday($saturday)
    {
        $this->container['saturday'] = $saturday;

        return $this;
    }

    /**
     * Gets sunday
     *
     * @return \Swagger\Client\Model\NetworksnetworkIdgroupPoliciesSchedulingSunday
     */
    public function getSunday()
    {
        return $this->container['sunday'];
    }

    /**
     * Sets sunday
     *
     * @param \Swagger\Client\Model\NetworksnetworkIdgroupPoliciesSchedulingSunday $sunday sunday
     *
     * @return $this
     */
    public function setSunday($sunday)
    {
        $this->container['sunday'] = $sunday;

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

