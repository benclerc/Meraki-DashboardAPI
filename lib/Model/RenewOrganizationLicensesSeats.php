<?php
/**
 * RenewOrganizationLicensesSeats
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
 * RenewOrganizationLicensesSeats Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RenewOrganizationLicensesSeats implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'renewOrganizationLicensesSeats';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'license_id_to_renew' => 'string',
        'unused_license_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'license_id_to_renew' => null,
        'unused_license_id' => null
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
        'license_id_to_renew' => 'licenseIdToRenew',
        'unused_license_id' => 'unusedLicenseId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'license_id_to_renew' => 'setLicenseIdToRenew',
        'unused_license_id' => 'setUnusedLicenseId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'license_id_to_renew' => 'getLicenseIdToRenew',
        'unused_license_id' => 'getUnusedLicenseId'
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
        $this->container['license_id_to_renew'] = isset($data['license_id_to_renew']) ? $data['license_id_to_renew'] : null;
        $this->container['unused_license_id'] = isset($data['unused_license_id']) ? $data['unused_license_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['license_id_to_renew'] === null) {
            $invalidProperties[] = "'license_id_to_renew' can't be null";
        }
        if ($this->container['unused_license_id'] === null) {
            $invalidProperties[] = "'unused_license_id' can't be null";
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
     * Gets license_id_to_renew
     *
     * @return string
     */
    public function getLicenseIdToRenew()
    {
        return $this->container['license_id_to_renew'];
    }

    /**
     * Sets license_id_to_renew
     *
     * @param string $license_id_to_renew The ID of the SM license to renew. This license must already be assigned to an SM network
     *
     * @return $this
     */
    public function setLicenseIdToRenew($license_id_to_renew)
    {
        $this->container['license_id_to_renew'] = $license_id_to_renew;

        return $this;
    }

    /**
     * Gets unused_license_id
     *
     * @return string
     */
    public function getUnusedLicenseId()
    {
        return $this->container['unused_license_id'];
    }

    /**
     * Sets unused_license_id
     *
     * @param string $unused_license_id The SM license to use to renew the seats on 'licenseIdToRenew'. This license must have at least as many seats available as there are seats on 'licenseIdToRenew'
     *
     * @return $this
     */
    public function setUnusedLicenseId($unused_license_id)
    {
        $this->container['unused_license_id'] = $unused_license_id;

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

