<?php
/**
 * OrganizationsorganizationIdbrandingPoliciesAdminSettings
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
 * OrganizationsorganizationIdbrandingPoliciesAdminSettings Class Doc Comment
 *
 * @category Class
 * @description Settings for describing which kinds of admins this policy applies to.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrganizationsorganizationIdbrandingPoliciesAdminSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'organizationsorganizationIdbrandingPolicies_adminSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'applies_to' => 'string',
        'values' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'applies_to' => null,
        'values' => null
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
        'applies_to' => 'appliesTo',
        'values' => 'values'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'applies_to' => 'setAppliesTo',
        'values' => 'setValues'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'applies_to' => 'getAppliesTo',
        'values' => 'getValues'
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

    const APPLIES_TO_ALL_ORGANIZATION_ADMINS = 'All organization admins';
    const APPLIES_TO_ALL_ENTERPRISE_ADMINS = 'All enterprise admins';
    const APPLIES_TO_ALL_NETWORK_ADMINS = 'All network admins';
    const APPLIES_TO_ALL_ADMINS_OF_NETWORKS = 'All admins of networks...';
    const APPLIES_TO_ALL_ADMINS_OF_NETWORKS_TAGGED = 'All admins of networks tagged...';
    const APPLIES_TO_SPECIFIC_ADMINS = 'Specific admins...';
    const APPLIES_TO_ALL_ADMINS = 'All admins';
    const APPLIES_TO_ALL_SAML_ADMINS = 'All SAML admins';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAppliesToAllowableValues()
    {
        return [
            self::APPLIES_TO_ALL_ORGANIZATION_ADMINS,
            self::APPLIES_TO_ALL_ENTERPRISE_ADMINS,
            self::APPLIES_TO_ALL_NETWORK_ADMINS,
            self::APPLIES_TO_ALL_ADMINS_OF_NETWORKS,
            self::APPLIES_TO_ALL_ADMINS_OF_NETWORKS_TAGGED,
            self::APPLIES_TO_SPECIFIC_ADMINS,
            self::APPLIES_TO_ALL_ADMINS,
            self::APPLIES_TO_ALL_SAML_ADMINS,
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
        $this->container['applies_to'] = isset($data['applies_to']) ? $data['applies_to'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAppliesToAllowableValues();
        if (!is_null($this->container['applies_to']) && !in_array($this->container['applies_to'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'applies_to', must be one of '%s'",
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
     * Gets applies_to
     *
     * @return string
     */
    public function getAppliesTo()
    {
        return $this->container['applies_to'];
    }

    /**
     * Sets applies_to
     *
     * @param string $applies_to Which kinds of admins this policy applies to. Can be one of 'All organization admins', 'All enterprise admins', 'All network admins', 'All admins of networks...', 'All admins of networks tagged...', 'Specific admins...', 'All admins' or 'All SAML admins'.
     *
     * @return $this
     */
    public function setAppliesTo($applies_to)
    {
        $allowedValues = $this->getAppliesToAllowableValues();
        if (!is_null($applies_to) && !in_array($applies_to, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'applies_to', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['applies_to'] = $applies_to;

        return $this;
    }

    /**
     * Gets values
     *
     * @return string[]
     */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
     * Sets values
     *
     * @param string[] $values If 'appliesTo' is set to one of 'Specific admins...', 'All admins of networks...' or 'All admins of networks tagged...', then you must specify this 'values' property to provide the set of     entities to apply the branding policy to. For 'Specific admins...', specify an array of admin IDs. For 'All admins of     networks...', specify an array of network IDs and/or configuration template IDs. For 'All admins of networks tagged...',     specify an array of tag names.
     *
     * @return $this
     */
    public function setValues($values)
    {
        $this->container['values'] = $values;

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


