<?php
/**
 * NetworksnetworkIdappliancetrafficShapinguplinkSelectionVpnTrafficUplinkPreferences
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
 * NetworksnetworkIdappliancetrafficShapinguplinkSelectionVpnTrafficUplinkPreferences Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NetworksnetworkIdappliancetrafficShapinguplinkSelectionVpnTrafficUplinkPreferences implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'networksnetworkIdappliancetrafficShapinguplinkSelection_vpnTrafficUplinkPreferences';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'traffic_filters' => '\Swagger\Client\Model\NetworksnetworkIdappliancetrafficShapinguplinkSelectionTrafficFilters1[]',
        'preferred_uplink' => 'string',
        'fail_over_criterion' => 'string',
        'performance_class' => '\Swagger\Client\Model\NetworksnetworkIdappliancetrafficShapinguplinkSelectionPerformanceClass'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'traffic_filters' => null,
        'preferred_uplink' => null,
        'fail_over_criterion' => null,
        'performance_class' => null
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
        'traffic_filters' => 'trafficFilters',
        'preferred_uplink' => 'preferredUplink',
        'fail_over_criterion' => 'failOverCriterion',
        'performance_class' => 'performanceClass'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'traffic_filters' => 'setTrafficFilters',
        'preferred_uplink' => 'setPreferredUplink',
        'fail_over_criterion' => 'setFailOverCriterion',
        'performance_class' => 'setPerformanceClass'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'traffic_filters' => 'getTrafficFilters',
        'preferred_uplink' => 'getPreferredUplink',
        'fail_over_criterion' => 'getFailOverCriterion',
        'performance_class' => 'getPerformanceClass'
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

    const PREFERRED_UPLINK_WAN1 = 'wan1';
    const PREFERRED_UPLINK_WAN2 = 'wan2';
    const PREFERRED_UPLINK_BEST_FOR_VO_IP = 'bestForVoIP';
    const PREFERRED_UPLINK_LOAD_BALANCING = 'loadBalancing';
    const PREFERRED_UPLINK_DEFAULT_UPLINK = 'defaultUplink';
    const FAIL_OVER_CRITERION_POOR_PERFORMANCE = 'poorPerformance';
    const FAIL_OVER_CRITERION_UPLINK_DOWN = 'uplinkDown';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPreferredUplinkAllowableValues()
    {
        return [
            self::PREFERRED_UPLINK_WAN1,
            self::PREFERRED_UPLINK_WAN2,
            self::PREFERRED_UPLINK_BEST_FOR_VO_IP,
            self::PREFERRED_UPLINK_LOAD_BALANCING,
            self::PREFERRED_UPLINK_DEFAULT_UPLINK,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFailOverCriterionAllowableValues()
    {
        return [
            self::FAIL_OVER_CRITERION_POOR_PERFORMANCE,
            self::FAIL_OVER_CRITERION_UPLINK_DOWN,
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
        $this->container['traffic_filters'] = isset($data['traffic_filters']) ? $data['traffic_filters'] : null;
        $this->container['preferred_uplink'] = isset($data['preferred_uplink']) ? $data['preferred_uplink'] : null;
        $this->container['fail_over_criterion'] = isset($data['fail_over_criterion']) ? $data['fail_over_criterion'] : null;
        $this->container['performance_class'] = isset($data['performance_class']) ? $data['performance_class'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['traffic_filters'] === null) {
            $invalidProperties[] = "'traffic_filters' can't be null";
        }
        if ($this->container['preferred_uplink'] === null) {
            $invalidProperties[] = "'preferred_uplink' can't be null";
        }
        $allowedValues = $this->getPreferredUplinkAllowableValues();
        if (!is_null($this->container['preferred_uplink']) && !in_array($this->container['preferred_uplink'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'preferred_uplink', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getFailOverCriterionAllowableValues();
        if (!is_null($this->container['fail_over_criterion']) && !in_array($this->container['fail_over_criterion'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'fail_over_criterion', must be one of '%s'",
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
     * Gets traffic_filters
     *
     * @return \Swagger\Client\Model\NetworksnetworkIdappliancetrafficShapinguplinkSelectionTrafficFilters1[]
     */
    public function getTrafficFilters()
    {
        return $this->container['traffic_filters'];
    }

    /**
     * Sets traffic_filters
     *
     * @param \Swagger\Client\Model\NetworksnetworkIdappliancetrafficShapinguplinkSelectionTrafficFilters1[] $traffic_filters Array of traffic filters for this uplink preference rule
     *
     * @return $this
     */
    public function setTrafficFilters($traffic_filters)
    {
        $this->container['traffic_filters'] = $traffic_filters;

        return $this;
    }

    /**
     * Gets preferred_uplink
     *
     * @return string
     */
    public function getPreferredUplink()
    {
        return $this->container['preferred_uplink'];
    }

    /**
     * Sets preferred_uplink
     *
     * @param string $preferred_uplink Preferred uplink for this uplink preference rule. Must be one of: 'wan1', 'wan2', 'bestForVoIP', 'loadBalancing' or 'defaultUplink'
     *
     * @return $this
     */
    public function setPreferredUplink($preferred_uplink)
    {
        $allowedValues = $this->getPreferredUplinkAllowableValues();
        if (!in_array($preferred_uplink, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'preferred_uplink', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['preferred_uplink'] = $preferred_uplink;

        return $this;
    }

    /**
     * Gets fail_over_criterion
     *
     * @return string
     */
    public function getFailOverCriterion()
    {
        return $this->container['fail_over_criterion'];
    }

    /**
     * Sets fail_over_criterion
     *
     * @param string $fail_over_criterion Fail over criterion for this uplink preference rule. Must be one of: 'poorPerformance' or 'uplinkDown'
     *
     * @return $this
     */
    public function setFailOverCriterion($fail_over_criterion)
    {
        $allowedValues = $this->getFailOverCriterionAllowableValues();
        if (!is_null($fail_over_criterion) && !in_array($fail_over_criterion, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'fail_over_criterion', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['fail_over_criterion'] = $fail_over_criterion;

        return $this;
    }

    /**
     * Gets performance_class
     *
     * @return \Swagger\Client\Model\NetworksnetworkIdappliancetrafficShapinguplinkSelectionPerformanceClass
     */
    public function getPerformanceClass()
    {
        return $this->container['performance_class'];
    }

    /**
     * Sets performance_class
     *
     * @param \Swagger\Client\Model\NetworksnetworkIdappliancetrafficShapinguplinkSelectionPerformanceClass $performance_class performance_class
     *
     * @return $this
     */
    public function setPerformanceClass($performance_class)
    {
        $this->container['performance_class'] = $performance_class;

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


