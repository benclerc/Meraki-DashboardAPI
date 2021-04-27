<?php
/**
 * NetworksnetworkIdwirelessssidsnumberLocalRadiusCertificateAuthentication
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
 * NetworksnetworkIdwirelessssidsnumberLocalRadiusCertificateAuthentication Class Doc Comment
 *
 * @category Class
 * @description The current setting for certificate verification.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NetworksnetworkIdwirelessssidsnumberLocalRadiusCertificateAuthentication implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'networksnetworkIdwirelessssidsnumber_localRadius_certificateAuthentication';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'enabled' => 'bool',
        'use_ldap' => 'bool',
        'use_ocsp' => 'bool',
        'ocsp_responder_url' => 'string',
        'client_root_ca_certificate' => '\Swagger\Client\Model\NetworksnetworkIdwirelessssidsnumberLocalRadiusCertificateAuthenticationClientRootCaCertificate'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'enabled' => null,
        'use_ldap' => null,
        'use_ocsp' => null,
        'ocsp_responder_url' => null,
        'client_root_ca_certificate' => null
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
        'use_ldap' => 'useLdap',
        'use_ocsp' => 'useOcsp',
        'ocsp_responder_url' => 'ocspResponderUrl',
        'client_root_ca_certificate' => 'clientRootCaCertificate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enabled' => 'setEnabled',
        'use_ldap' => 'setUseLdap',
        'use_ocsp' => 'setUseOcsp',
        'ocsp_responder_url' => 'setOcspResponderUrl',
        'client_root_ca_certificate' => 'setClientRootCaCertificate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enabled' => 'getEnabled',
        'use_ldap' => 'getUseLdap',
        'use_ocsp' => 'getUseOcsp',
        'ocsp_responder_url' => 'getOcspResponderUrl',
        'client_root_ca_certificate' => 'getClientRootCaCertificate'
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
        $this->container['use_ldap'] = isset($data['use_ldap']) ? $data['use_ldap'] : null;
        $this->container['use_ocsp'] = isset($data['use_ocsp']) ? $data['use_ocsp'] : null;
        $this->container['ocsp_responder_url'] = isset($data['ocsp_responder_url']) ? $data['ocsp_responder_url'] : null;
        $this->container['client_root_ca_certificate'] = isset($data['client_root_ca_certificate']) ? $data['client_root_ca_certificate'] : null;
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
     * @param bool $enabled Whether or not to use EAP-TLS certificate-based authentication to validate wireless clients.
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets use_ldap
     *
     * @return bool
     */
    public function getUseLdap()
    {
        return $this->container['use_ldap'];
    }

    /**
     * Sets use_ldap
     *
     * @param bool $use_ldap Whether or not to verify the certificate with LDAP.
     *
     * @return $this
     */
    public function setUseLdap($use_ldap)
    {
        $this->container['use_ldap'] = $use_ldap;

        return $this;
    }

    /**
     * Gets use_ocsp
     *
     * @return bool
     */
    public function getUseOcsp()
    {
        return $this->container['use_ocsp'];
    }

    /**
     * Sets use_ocsp
     *
     * @param bool $use_ocsp Whether or not to verify the certificate with OCSP.
     *
     * @return $this
     */
    public function setUseOcsp($use_ocsp)
    {
        $this->container['use_ocsp'] = $use_ocsp;

        return $this;
    }

    /**
     * Gets ocsp_responder_url
     *
     * @return string
     */
    public function getOcspResponderUrl()
    {
        return $this->container['ocsp_responder_url'];
    }

    /**
     * Sets ocsp_responder_url
     *
     * @param string $ocsp_responder_url (Optional) The URL of the OCSP responder to verify client certificate status.
     *
     * @return $this
     */
    public function setOcspResponderUrl($ocsp_responder_url)
    {
        $this->container['ocsp_responder_url'] = $ocsp_responder_url;

        return $this;
    }

    /**
     * Gets client_root_ca_certificate
     *
     * @return \Swagger\Client\Model\NetworksnetworkIdwirelessssidsnumberLocalRadiusCertificateAuthenticationClientRootCaCertificate
     */
    public function getClientRootCaCertificate()
    {
        return $this->container['client_root_ca_certificate'];
    }

    /**
     * Sets client_root_ca_certificate
     *
     * @param \Swagger\Client\Model\NetworksnetworkIdwirelessssidsnumberLocalRadiusCertificateAuthenticationClientRootCaCertificate $client_root_ca_certificate client_root_ca_certificate
     *
     * @return $this
     */
    public function setClientRootCaCertificate($client_root_ca_certificate)
    {
        $this->container['client_root_ca_certificate'] = $client_root_ca_certificate;

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


