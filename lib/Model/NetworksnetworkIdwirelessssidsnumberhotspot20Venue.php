<?php
/**
 * NetworksnetworkIdwirelessssidsnumberhotspot20Venue
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
 * NetworksnetworkIdwirelessssidsnumberhotspot20Venue Class Doc Comment
 *
 * @category Class
 * @description Venue settings for this SSID
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NetworksnetworkIdwirelessssidsnumberhotspot20Venue implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'networksnetworkIdwirelessssidsnumberhotspot20_venue';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'type' => null
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
        'name' => 'name',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'type' => 'getType'
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

    const TYPE_UNSPECIFIED = 'Unspecified';
    const TYPE_UNSPECIFIED_ASSEMBLY = 'Unspecified Assembly';
    const TYPE_ARENA = 'Arena';
    const TYPE_STADIUM = 'Stadium';
    const TYPE_PASSENGER_TERMINAL = 'Passenger Terminal';
    const TYPE_AMPHITHEATER = 'Amphitheater';
    const TYPE_AMUSEMENT_PARK = 'Amusement Park';
    const TYPE_PLACE_OF_WORSHIP = 'Place of Worship';
    const TYPE_CONVENTION_CENTER = 'Convention Center';
    const TYPE_LIBRARY = 'Library';
    const TYPE_MUSEUM = 'Museum';
    const TYPE_RESTAURANT = 'Restaurant';
    const TYPE_THEATER = 'Theater';
    const TYPE_BAR = 'Bar';
    const TYPE_COFFEE_SHOP = 'Coffee Shop';
    const TYPE_ZOO_OR_AQUARIUM = 'Zoo or Aquarium';
    const TYPE_EMERGENCY_COORDINATION_CENTER = 'Emergency Coordination Center';
    const TYPE_UNSPECIFIED_BUSINESS = 'Unspecified Business';
    const TYPE_DOCTOR_OR_DENTIST_OFFICE = 'Doctor or Dentist office';
    const TYPE_BANK = 'Bank';
    const TYPE_FIRE_STATION = 'Fire Station';
    const TYPE_POLICE_STATION = 'Police Station';
    const TYPE_POST_OFFICE = 'Post Office';
    const TYPE_PROFESSIONAL_OFFICE = 'Professional Office';
    const TYPE_RESEARCH_AND_DEVELOPMENT_FACILITY = 'Research and Development Facility';
    const TYPE_ATTORNEY_OFFICE = 'Attorney Office';
    const TYPE_UNSPECIFIED_EDUCATIONAL = 'Unspecified Educational';
    const TYPE_SCHOOL_PRIMARY = 'School, Primary';
    const TYPE_SCHOOL_SECONDARY = 'School, Secondary';
    const TYPE_UNIVERSITY_OR_COLLEGE = 'University or College';
    const TYPE_UNSPECIFIED_FACTORY_AND_INDUSTRIAL = 'Unspecified Factory and Industrial';
    const TYPE_FACTORY = 'Factory';
    const TYPE_UNSPECIFIED_INSTITUTIONAL = 'Unspecified Institutional';
    const TYPE_HOSPITAL = 'Hospital';
    const TYPE_LONG_TERM_CARE_FACILITY = 'Long-Term Care Facility';
    const TYPE_ALCOHOL_AND_DRUG_REHABILITATION_CENTER = 'Alcohol and Drug Rehabilitation Center';
    const TYPE_GROUP_HOME = 'Group Home';
    const TYPE_PRISON_OR_JAIL = 'Prison or Jail';
    const TYPE_UNSPECIFIED_MERCANTILE = 'Unspecified Mercantile';
    const TYPE_RETAIL_STORE = 'Retail Store';
    const TYPE_GROCERY_MARKET = 'Grocery Market';
    const TYPE_AUTOMOTIVE_SERVICE_STATION = 'Automotive Service Station';
    const TYPE_SHOPPING_MALL = 'Shopping Mall';
    const TYPE_GAS_STATION = 'Gas Station';
    const TYPE_UNSPECIFIED_RESIDENTIAL = 'Unspecified Residential';
    const TYPE_PRIVATE_RESIDENCE = 'Private Residence';
    const TYPE_HOTEL_OR_MOTEL = 'Hotel or Motel';
    const TYPE_DORMITORY = 'Dormitory';
    const TYPE_BOARDING_HOUSE = 'Boarding House';
    const TYPE_UNSPECIFIED_STORAGE = 'Unspecified Storage';
    const TYPE_UNSPECIFIED_UTILITY_AND_MISCELLANEOUS = 'Unspecified Utility and Miscellaneous';
    const TYPE_UNSPECIFIED_VEHICULAR = 'Unspecified Vehicular';
    const TYPE_AUTOMOBILE_OR_TRUCK = 'Automobile or Truck';
    const TYPE_AIRPLANE = 'Airplane';
    const TYPE_BUS = 'Bus';
    const TYPE_FERRY = 'Ferry';
    const TYPE_SHIP_OR_BOAT = 'Ship or Boat';
    const TYPE_TRAIN = 'Train';
    const TYPE_MOTOR_BIKE = 'Motor Bike';
    const TYPE_UNSPECIFIED_OUTDOOR = 'Unspecified Outdoor';
    const TYPE_MUNI_MESH_NETWORK = 'Muni-mesh Network';
    const TYPE_CITY_PARK = 'City Park';
    const TYPE_REST_AREA = 'Rest Area';
    const TYPE_TRAFFIC_CONTROL = 'Traffic Control';
    const TYPE_BUS_STOP = 'Bus Stop';
    const TYPE_KIOSK = 'Kiosk';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_UNSPECIFIED,
            self::TYPE_UNSPECIFIED_ASSEMBLY,
            self::TYPE_ARENA,
            self::TYPE_STADIUM,
            self::TYPE_PASSENGER_TERMINAL,
            self::TYPE_AMPHITHEATER,
            self::TYPE_AMUSEMENT_PARK,
            self::TYPE_PLACE_OF_WORSHIP,
            self::TYPE_CONVENTION_CENTER,
            self::TYPE_LIBRARY,
            self::TYPE_MUSEUM,
            self::TYPE_RESTAURANT,
            self::TYPE_THEATER,
            self::TYPE_BAR,
            self::TYPE_COFFEE_SHOP,
            self::TYPE_ZOO_OR_AQUARIUM,
            self::TYPE_EMERGENCY_COORDINATION_CENTER,
            self::TYPE_UNSPECIFIED_BUSINESS,
            self::TYPE_DOCTOR_OR_DENTIST_OFFICE,
            self::TYPE_BANK,
            self::TYPE_FIRE_STATION,
            self::TYPE_POLICE_STATION,
            self::TYPE_POST_OFFICE,
            self::TYPE_PROFESSIONAL_OFFICE,
            self::TYPE_RESEARCH_AND_DEVELOPMENT_FACILITY,
            self::TYPE_ATTORNEY_OFFICE,
            self::TYPE_UNSPECIFIED_EDUCATIONAL,
            self::TYPE_SCHOOL_PRIMARY,
            self::TYPE_SCHOOL_SECONDARY,
            self::TYPE_UNIVERSITY_OR_COLLEGE,
            self::TYPE_UNSPECIFIED_FACTORY_AND_INDUSTRIAL,
            self::TYPE_FACTORY,
            self::TYPE_UNSPECIFIED_INSTITUTIONAL,
            self::TYPE_HOSPITAL,
            self::TYPE_LONG_TERM_CARE_FACILITY,
            self::TYPE_ALCOHOL_AND_DRUG_REHABILITATION_CENTER,
            self::TYPE_GROUP_HOME,
            self::TYPE_PRISON_OR_JAIL,
            self::TYPE_UNSPECIFIED_MERCANTILE,
            self::TYPE_RETAIL_STORE,
            self::TYPE_GROCERY_MARKET,
            self::TYPE_AUTOMOTIVE_SERVICE_STATION,
            self::TYPE_SHOPPING_MALL,
            self::TYPE_GAS_STATION,
            self::TYPE_UNSPECIFIED_RESIDENTIAL,
            self::TYPE_PRIVATE_RESIDENCE,
            self::TYPE_HOTEL_OR_MOTEL,
            self::TYPE_DORMITORY,
            self::TYPE_BOARDING_HOUSE,
            self::TYPE_UNSPECIFIED_STORAGE,
            self::TYPE_UNSPECIFIED_UTILITY_AND_MISCELLANEOUS,
            self::TYPE_UNSPECIFIED_VEHICULAR,
            self::TYPE_AUTOMOBILE_OR_TRUCK,
            self::TYPE_AIRPLANE,
            self::TYPE_BUS,
            self::TYPE_FERRY,
            self::TYPE_SHIP_OR_BOAT,
            self::TYPE_TRAIN,
            self::TYPE_MOTOR_BIKE,
            self::TYPE_UNSPECIFIED_OUTDOOR,
            self::TYPE_MUNI_MESH_NETWORK,
            self::TYPE_CITY_PARK,
            self::TYPE_REST_AREA,
            self::TYPE_TRAFFIC_CONTROL,
            self::TYPE_BUS_STOP,
            self::TYPE_KIOSK,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Venue name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string $type Venue type ('Unspecified', 'Unspecified Assembly', 'Arena', 'Stadium', 'Passenger Terminal', 'Amphitheater', 'Amusement Park', 'Place of Worship', 'Convention Center', 'Library', 'Museum', 'Restaurant', 'Theater', 'Bar', 'Coffee Shop', 'Zoo or Aquarium', 'Emergency Coordination Center', 'Unspecified Business', 'Doctor or Dentist office', 'Bank', 'Fire Station', 'Police Station', 'Post Office', 'Professional Office', 'Research and Development Facility', 'Attorney Office', 'Unspecified Educational', 'School, Primary', 'School, Secondary', 'University or College', 'Unspecified Factory and Industrial', 'Factory', 'Unspecified Institutional', 'Hospital', 'Long-Term Care Facility', 'Alcohol and Drug Rehabilitation Center', 'Group Home', 'Prison or Jail', 'Unspecified Mercantile', 'Retail Store', 'Grocery Market', 'Automotive Service Station', 'Shopping Mall', 'Gas Station', 'Unspecified Residential', 'Private Residence', 'Hotel or Motel', 'Dormitory', 'Boarding House', 'Unspecified Storage', 'Unspecified Utility and Miscellaneous', 'Unspecified Vehicular', 'Automobile or Truck', 'Airplane', 'Bus', 'Ferry', 'Ship or Boat', 'Train', 'Motor Bike', 'Unspecified Outdoor', 'Muni-mesh Network', 'City Park', 'Rest Area', 'Traffic Control', 'Bus Stop', 'Kiosk')
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

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

