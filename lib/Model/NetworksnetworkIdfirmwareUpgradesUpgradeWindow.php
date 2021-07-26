<?php
/**
 * NetworksnetworkIdfirmwareUpgradesUpgradeWindow
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
 * NetworksnetworkIdfirmwareUpgradesUpgradeWindow Class Doc Comment
 *
 * @category Class
 * @description Upgrade window for devices in network
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NetworksnetworkIdfirmwareUpgradesUpgradeWindow implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'networksnetworkIdfirmwareUpgrades_upgradeWindow';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'day_of_week' => 'string',
        'hour_of_day' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'day_of_week' => null,
        'hour_of_day' => null
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
        'day_of_week' => 'dayOfWeek',
        'hour_of_day' => 'hourOfDay'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'day_of_week' => 'setDayOfWeek',
        'hour_of_day' => 'setHourOfDay'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'day_of_week' => 'getDayOfWeek',
        'hour_of_day' => 'getHourOfDay'
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

    const DAY_OF_WEEK_SUN = 'sun';
    const DAY_OF_WEEK_MON = 'mon';
    const DAY_OF_WEEK_TUE = 'tue';
    const DAY_OF_WEEK_WED = 'wed';
    const DAY_OF_WEEK_THU = 'thu';
    const DAY_OF_WEEK_FRI = 'fri';
    const DAY_OF_WEEK_SAT = 'sat';
    const DAY_OF_WEEK_SUNDAY = 'sunday';
    const DAY_OF_WEEK_MONDAY = 'monday';
    const DAY_OF_WEEK_TUESDAY = 'tuesday';
    const DAY_OF_WEEK_WEDNESDAY = 'wednesday';
    const DAY_OF_WEEK_THURSDAY = 'thursday';
    const DAY_OF_WEEK_FRIDAY = 'friday';
    const DAY_OF_WEEK_SATURDAY = 'saturday';
    const HOUR_OF_DAY__000 = '0:00';
    const HOUR_OF_DAY__100 = '1:00';
    const HOUR_OF_DAY__200 = '2:00';
    const HOUR_OF_DAY__300 = '3:00';
    const HOUR_OF_DAY__400 = '4:00';
    const HOUR_OF_DAY__500 = '5:00';
    const HOUR_OF_DAY__600 = '6:00';
    const HOUR_OF_DAY__700 = '7:00';
    const HOUR_OF_DAY__800 = '8:00';
    const HOUR_OF_DAY__900 = '9:00';
    const HOUR_OF_DAY__1000 = '10:00';
    const HOUR_OF_DAY__1100 = '11:00';
    const HOUR_OF_DAY__1200 = '12:00';
    const HOUR_OF_DAY__1300 = '13:00';
    const HOUR_OF_DAY__1400 = '14:00';
    const HOUR_OF_DAY__1500 = '15:00';
    const HOUR_OF_DAY__1600 = '16:00';
    const HOUR_OF_DAY__1700 = '17:00';
    const HOUR_OF_DAY__1800 = '18:00';
    const HOUR_OF_DAY__1900 = '19:00';
    const HOUR_OF_DAY__2000 = '20:00';
    const HOUR_OF_DAY__2100 = '21:00';
    const HOUR_OF_DAY__2200 = '22:00';
    const HOUR_OF_DAY__2300 = '23:00';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDayOfWeekAllowableValues()
    {
        return [
            self::DAY_OF_WEEK_SUN,
            self::DAY_OF_WEEK_MON,
            self::DAY_OF_WEEK_TUE,
            self::DAY_OF_WEEK_WED,
            self::DAY_OF_WEEK_THU,
            self::DAY_OF_WEEK_FRI,
            self::DAY_OF_WEEK_SAT,
            self::DAY_OF_WEEK_SUNDAY,
            self::DAY_OF_WEEK_MONDAY,
            self::DAY_OF_WEEK_TUESDAY,
            self::DAY_OF_WEEK_WEDNESDAY,
            self::DAY_OF_WEEK_THURSDAY,
            self::DAY_OF_WEEK_FRIDAY,
            self::DAY_OF_WEEK_SATURDAY,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHourOfDayAllowableValues()
    {
        return [
            self::HOUR_OF_DAY__000,
            self::HOUR_OF_DAY__100,
            self::HOUR_OF_DAY__200,
            self::HOUR_OF_DAY__300,
            self::HOUR_OF_DAY__400,
            self::HOUR_OF_DAY__500,
            self::HOUR_OF_DAY__600,
            self::HOUR_OF_DAY__700,
            self::HOUR_OF_DAY__800,
            self::HOUR_OF_DAY__900,
            self::HOUR_OF_DAY__1000,
            self::HOUR_OF_DAY__1100,
            self::HOUR_OF_DAY__1200,
            self::HOUR_OF_DAY__1300,
            self::HOUR_OF_DAY__1400,
            self::HOUR_OF_DAY__1500,
            self::HOUR_OF_DAY__1600,
            self::HOUR_OF_DAY__1700,
            self::HOUR_OF_DAY__1800,
            self::HOUR_OF_DAY__1900,
            self::HOUR_OF_DAY__2000,
            self::HOUR_OF_DAY__2100,
            self::HOUR_OF_DAY__2200,
            self::HOUR_OF_DAY__2300,
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
        $this->container['day_of_week'] = isset($data['day_of_week']) ? $data['day_of_week'] : null;
        $this->container['hour_of_day'] = isset($data['hour_of_day']) ? $data['hour_of_day'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDayOfWeekAllowableValues();
        if (!is_null($this->container['day_of_week']) && !in_array($this->container['day_of_week'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'day_of_week', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getHourOfDayAllowableValues();
        if (!is_null($this->container['hour_of_day']) && !in_array($this->container['hour_of_day'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'hour_of_day', must be one of '%s'",
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
     * Gets day_of_week
     *
     * @return string
     */
    public function getDayOfWeek()
    {
        return $this->container['day_of_week'];
    }

    /**
     * Sets day_of_week
     *
     * @param string $day_of_week Day of the week
     *
     * @return $this
     */
    public function setDayOfWeek($day_of_week)
    {
        $allowedValues = $this->getDayOfWeekAllowableValues();
        if (!is_null($day_of_week) && !in_array($day_of_week, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'day_of_week', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['day_of_week'] = $day_of_week;

        return $this;
    }

    /**
     * Gets hour_of_day
     *
     * @return string
     */
    public function getHourOfDay()
    {
        return $this->container['hour_of_day'];
    }

    /**
     * Sets hour_of_day
     *
     * @param string $hour_of_day Hour of the day
     *
     * @return $this
     */
    public function setHourOfDay($hour_of_day)
    {
        $allowedValues = $this->getHourOfDayAllowableValues();
        if (!is_null($hour_of_day) && !in_array($hour_of_day, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'hour_of_day', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['hour_of_day'] = $hour_of_day;

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


