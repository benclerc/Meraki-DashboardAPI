<?php
/**
 * CreateOrganizationAdmin
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
 * CreateOrganizationAdmin Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateOrganizationAdmin implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'createOrganizationAdmin';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'email' => 'string',
        'name' => 'string',
        'org_access' => 'string',
        'tags' => '\Swagger\Client\Model\OrganizationsorganizationIdadminsTags[]',
        'networks' => '\Swagger\Client\Model\OrganizationsorganizationIdadminsNetworks[]',
        'authentication_method' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'email' => null,
        'name' => null,
        'org_access' => null,
        'tags' => null,
        'networks' => null,
        'authentication_method' => null
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
        'email' => 'email',
        'name' => 'name',
        'org_access' => 'orgAccess',
        'tags' => 'tags',
        'networks' => 'networks',
        'authentication_method' => 'authenticationMethod'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'email' => 'setEmail',
        'name' => 'setName',
        'org_access' => 'setOrgAccess',
        'tags' => 'setTags',
        'networks' => 'setNetworks',
        'authentication_method' => 'setAuthenticationMethod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'email' => 'getEmail',
        'name' => 'getName',
        'org_access' => 'getOrgAccess',
        'tags' => 'getTags',
        'networks' => 'getNetworks',
        'authentication_method' => 'getAuthenticationMethod'
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

    const ORG_ACCESS_FULL = 'full';
    const ORG_ACCESS_READ_ONLY = 'read-only';
    const ORG_ACCESS_ENTERPRISE = 'enterprise';
    const ORG_ACCESS_NONE = 'none';
    const AUTHENTICATION_METHOD_EMAIL = 'Email';
    const AUTHENTICATION_METHOD_CISCO_SECURE_X_SIGN_ON = 'Cisco SecureX Sign-On';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOrgAccessAllowableValues()
    {
        return [
            self::ORG_ACCESS_FULL,
            self::ORG_ACCESS_READ_ONLY,
            self::ORG_ACCESS_ENTERPRISE,
            self::ORG_ACCESS_NONE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAuthenticationMethodAllowableValues()
    {
        return [
            self::AUTHENTICATION_METHOD_EMAIL,
            self::AUTHENTICATION_METHOD_CISCO_SECURE_X_SIGN_ON,
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
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['org_access'] = isset($data['org_access']) ? $data['org_access'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['networks'] = isset($data['networks']) ? $data['networks'] : null;
        $this->container['authentication_method'] = isset($data['authentication_method']) ? $data['authentication_method'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['org_access'] === null) {
            $invalidProperties[] = "'org_access' can't be null";
        }
        $allowedValues = $this->getOrgAccessAllowableValues();
        if (!is_null($this->container['org_access']) && !in_array($this->container['org_access'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'org_access', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAuthenticationMethodAllowableValues();
        if (!is_null($this->container['authentication_method']) && !in_array($this->container['authentication_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'authentication_method', must be one of '%s'",
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
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email The email of the dashboard administrator. This attribute can not be updated.
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
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
     * @param string $name The name of the dashboard administrator
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets org_access
     *
     * @return string
     */
    public function getOrgAccess()
    {
        return $this->container['org_access'];
    }

    /**
     * Sets org_access
     *
     * @param string $org_access The privilege of the dashboard administrator on the organization. Can be one of 'full', 'read-only', 'enterprise' or 'none'
     *
     * @return $this
     */
    public function setOrgAccess($org_access)
    {
        $allowedValues = $this->getOrgAccessAllowableValues();
        if (!in_array($org_access, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'org_access', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['org_access'] = $org_access;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return \Swagger\Client\Model\OrganizationsorganizationIdadminsTags[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \Swagger\Client\Model\OrganizationsorganizationIdadminsTags[] $tags The list of tags that the dashboard administrator has privileges on
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets networks
     *
     * @return \Swagger\Client\Model\OrganizationsorganizationIdadminsNetworks[]
     */
    public function getNetworks()
    {
        return $this->container['networks'];
    }

    /**
     * Sets networks
     *
     * @param \Swagger\Client\Model\OrganizationsorganizationIdadminsNetworks[] $networks The list of networks that the dashboard administrator has privileges on
     *
     * @return $this
     */
    public function setNetworks($networks)
    {
        $this->container['networks'] = $networks;

        return $this;
    }

    /**
     * Gets authentication_method
     *
     * @return string
     */
    public function getAuthenticationMethod()
    {
        return $this->container['authentication_method'];
    }

    /**
     * Sets authentication_method
     *
     * @param string $authentication_method The method of authentication the user will use to sign in to the Meraki dashboard. Can be one of 'Email' or 'Cisco SecureX Sign-On'. The default is Email authentication
     *
     * @return $this
     */
    public function setAuthenticationMethod($authentication_method)
    {
        $allowedValues = $this->getAuthenticationMethodAllowableValues();
        if (!is_null($authentication_method) && !in_array($authentication_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'authentication_method', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['authentication_method'] = $authentication_method;

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


