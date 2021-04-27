<?php
/**
 * UpdateOrganizationLoginSecurity
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
 * UpdateOrganizationLoginSecurity Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateOrganizationLoginSecurity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'updateOrganizationLoginSecurity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'enforce_password_expiration' => 'bool',
        'password_expiration_days' => 'int',
        'enforce_different_passwords' => 'bool',
        'num_different_passwords' => 'int',
        'enforce_strong_passwords' => 'bool',
        'enforce_account_lockout' => 'bool',
        'account_lockout_attempts' => 'int',
        'enforce_idle_timeout' => 'bool',
        'idle_timeout_minutes' => 'int',
        'enforce_two_factor_auth' => 'bool',
        'enforce_login_ip_ranges' => 'bool',
        'login_ip_ranges' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'enforce_password_expiration' => null,
        'password_expiration_days' => null,
        'enforce_different_passwords' => null,
        'num_different_passwords' => null,
        'enforce_strong_passwords' => null,
        'enforce_account_lockout' => null,
        'account_lockout_attempts' => null,
        'enforce_idle_timeout' => null,
        'idle_timeout_minutes' => null,
        'enforce_two_factor_auth' => null,
        'enforce_login_ip_ranges' => null,
        'login_ip_ranges' => null
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
        'enforce_password_expiration' => 'enforcePasswordExpiration',
        'password_expiration_days' => 'passwordExpirationDays',
        'enforce_different_passwords' => 'enforceDifferentPasswords',
        'num_different_passwords' => 'numDifferentPasswords',
        'enforce_strong_passwords' => 'enforceStrongPasswords',
        'enforce_account_lockout' => 'enforceAccountLockout',
        'account_lockout_attempts' => 'accountLockoutAttempts',
        'enforce_idle_timeout' => 'enforceIdleTimeout',
        'idle_timeout_minutes' => 'idleTimeoutMinutes',
        'enforce_two_factor_auth' => 'enforceTwoFactorAuth',
        'enforce_login_ip_ranges' => 'enforceLoginIpRanges',
        'login_ip_ranges' => 'loginIpRanges'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enforce_password_expiration' => 'setEnforcePasswordExpiration',
        'password_expiration_days' => 'setPasswordExpirationDays',
        'enforce_different_passwords' => 'setEnforceDifferentPasswords',
        'num_different_passwords' => 'setNumDifferentPasswords',
        'enforce_strong_passwords' => 'setEnforceStrongPasswords',
        'enforce_account_lockout' => 'setEnforceAccountLockout',
        'account_lockout_attempts' => 'setAccountLockoutAttempts',
        'enforce_idle_timeout' => 'setEnforceIdleTimeout',
        'idle_timeout_minutes' => 'setIdleTimeoutMinutes',
        'enforce_two_factor_auth' => 'setEnforceTwoFactorAuth',
        'enforce_login_ip_ranges' => 'setEnforceLoginIpRanges',
        'login_ip_ranges' => 'setLoginIpRanges'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enforce_password_expiration' => 'getEnforcePasswordExpiration',
        'password_expiration_days' => 'getPasswordExpirationDays',
        'enforce_different_passwords' => 'getEnforceDifferentPasswords',
        'num_different_passwords' => 'getNumDifferentPasswords',
        'enforce_strong_passwords' => 'getEnforceStrongPasswords',
        'enforce_account_lockout' => 'getEnforceAccountLockout',
        'account_lockout_attempts' => 'getAccountLockoutAttempts',
        'enforce_idle_timeout' => 'getEnforceIdleTimeout',
        'idle_timeout_minutes' => 'getIdleTimeoutMinutes',
        'enforce_two_factor_auth' => 'getEnforceTwoFactorAuth',
        'enforce_login_ip_ranges' => 'getEnforceLoginIpRanges',
        'login_ip_ranges' => 'getLoginIpRanges'
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
        $this->container['enforce_password_expiration'] = isset($data['enforce_password_expiration']) ? $data['enforce_password_expiration'] : null;
        $this->container['password_expiration_days'] = isset($data['password_expiration_days']) ? $data['password_expiration_days'] : null;
        $this->container['enforce_different_passwords'] = isset($data['enforce_different_passwords']) ? $data['enforce_different_passwords'] : null;
        $this->container['num_different_passwords'] = isset($data['num_different_passwords']) ? $data['num_different_passwords'] : null;
        $this->container['enforce_strong_passwords'] = isset($data['enforce_strong_passwords']) ? $data['enforce_strong_passwords'] : null;
        $this->container['enforce_account_lockout'] = isset($data['enforce_account_lockout']) ? $data['enforce_account_lockout'] : null;
        $this->container['account_lockout_attempts'] = isset($data['account_lockout_attempts']) ? $data['account_lockout_attempts'] : null;
        $this->container['enforce_idle_timeout'] = isset($data['enforce_idle_timeout']) ? $data['enforce_idle_timeout'] : null;
        $this->container['idle_timeout_minutes'] = isset($data['idle_timeout_minutes']) ? $data['idle_timeout_minutes'] : null;
        $this->container['enforce_two_factor_auth'] = isset($data['enforce_two_factor_auth']) ? $data['enforce_two_factor_auth'] : null;
        $this->container['enforce_login_ip_ranges'] = isset($data['enforce_login_ip_ranges']) ? $data['enforce_login_ip_ranges'] : null;
        $this->container['login_ip_ranges'] = isset($data['login_ip_ranges']) ? $data['login_ip_ranges'] : null;
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
     * Gets enforce_password_expiration
     *
     * @return bool
     */
    public function getEnforcePasswordExpiration()
    {
        return $this->container['enforce_password_expiration'];
    }

    /**
     * Sets enforce_password_expiration
     *
     * @param bool $enforce_password_expiration Boolean indicating whether users are forced to change their password every X number of days.
     *
     * @return $this
     */
    public function setEnforcePasswordExpiration($enforce_password_expiration)
    {
        $this->container['enforce_password_expiration'] = $enforce_password_expiration;

        return $this;
    }

    /**
     * Gets password_expiration_days
     *
     * @return int
     */
    public function getPasswordExpirationDays()
    {
        return $this->container['password_expiration_days'];
    }

    /**
     * Sets password_expiration_days
     *
     * @param int $password_expiration_days Number of days after which users will be forced to change their password.
     *
     * @return $this
     */
    public function setPasswordExpirationDays($password_expiration_days)
    {
        $this->container['password_expiration_days'] = $password_expiration_days;

        return $this;
    }

    /**
     * Gets enforce_different_passwords
     *
     * @return bool
     */
    public function getEnforceDifferentPasswords()
    {
        return $this->container['enforce_different_passwords'];
    }

    /**
     * Sets enforce_different_passwords
     *
     * @param bool $enforce_different_passwords Boolean indicating whether users, when setting a new password, are forced to choose a new password that is different from any past passwords.
     *
     * @return $this
     */
    public function setEnforceDifferentPasswords($enforce_different_passwords)
    {
        $this->container['enforce_different_passwords'] = $enforce_different_passwords;

        return $this;
    }

    /**
     * Gets num_different_passwords
     *
     * @return int
     */
    public function getNumDifferentPasswords()
    {
        return $this->container['num_different_passwords'];
    }

    /**
     * Sets num_different_passwords
     *
     * @param int $num_different_passwords Number of recent passwords that new password must be distinct from.
     *
     * @return $this
     */
    public function setNumDifferentPasswords($num_different_passwords)
    {
        $this->container['num_different_passwords'] = $num_different_passwords;

        return $this;
    }

    /**
     * Gets enforce_strong_passwords
     *
     * @return bool
     */
    public function getEnforceStrongPasswords()
    {
        return $this->container['enforce_strong_passwords'];
    }

    /**
     * Sets enforce_strong_passwords
     *
     * @param bool $enforce_strong_passwords Boolean indicating whether users will be forced to choose strong passwords for their accounts. Strong passwords are at least 8 characters that contain 3 of the following: number, uppercase letter, lowercase letter, and symbol
     *
     * @return $this
     */
    public function setEnforceStrongPasswords($enforce_strong_passwords)
    {
        $this->container['enforce_strong_passwords'] = $enforce_strong_passwords;

        return $this;
    }

    /**
     * Gets enforce_account_lockout
     *
     * @return bool
     */
    public function getEnforceAccountLockout()
    {
        return $this->container['enforce_account_lockout'];
    }

    /**
     * Sets enforce_account_lockout
     *
     * @param bool $enforce_account_lockout Boolean indicating whether users' Dashboard accounts will be locked out after a specified number of consecutive failed login attempts.
     *
     * @return $this
     */
    public function setEnforceAccountLockout($enforce_account_lockout)
    {
        $this->container['enforce_account_lockout'] = $enforce_account_lockout;

        return $this;
    }

    /**
     * Gets account_lockout_attempts
     *
     * @return int
     */
    public function getAccountLockoutAttempts()
    {
        return $this->container['account_lockout_attempts'];
    }

    /**
     * Sets account_lockout_attempts
     *
     * @param int $account_lockout_attempts Number of consecutive failed login attempts after which users' accounts will be locked.
     *
     * @return $this
     */
    public function setAccountLockoutAttempts($account_lockout_attempts)
    {
        $this->container['account_lockout_attempts'] = $account_lockout_attempts;

        return $this;
    }

    /**
     * Gets enforce_idle_timeout
     *
     * @return bool
     */
    public function getEnforceIdleTimeout()
    {
        return $this->container['enforce_idle_timeout'];
    }

    /**
     * Sets enforce_idle_timeout
     *
     * @param bool $enforce_idle_timeout Boolean indicating whether users will be logged out after being idle for the specified number of minutes.
     *
     * @return $this
     */
    public function setEnforceIdleTimeout($enforce_idle_timeout)
    {
        $this->container['enforce_idle_timeout'] = $enforce_idle_timeout;

        return $this;
    }

    /**
     * Gets idle_timeout_minutes
     *
     * @return int
     */
    public function getIdleTimeoutMinutes()
    {
        return $this->container['idle_timeout_minutes'];
    }

    /**
     * Sets idle_timeout_minutes
     *
     * @param int $idle_timeout_minutes Number of minutes users can remain idle before being logged out of their accounts.
     *
     * @return $this
     */
    public function setIdleTimeoutMinutes($idle_timeout_minutes)
    {
        $this->container['idle_timeout_minutes'] = $idle_timeout_minutes;

        return $this;
    }

    /**
     * Gets enforce_two_factor_auth
     *
     * @return bool
     */
    public function getEnforceTwoFactorAuth()
    {
        return $this->container['enforce_two_factor_auth'];
    }

    /**
     * Sets enforce_two_factor_auth
     *
     * @param bool $enforce_two_factor_auth Boolean indicating whether users in this organization will be required to use an extra verification code when logging in to Dashboard. This code will be sent to their mobile phone via SMS, or can be generated by the Google Authenticator application.
     *
     * @return $this
     */
    public function setEnforceTwoFactorAuth($enforce_two_factor_auth)
    {
        $this->container['enforce_two_factor_auth'] = $enforce_two_factor_auth;

        return $this;
    }

    /**
     * Gets enforce_login_ip_ranges
     *
     * @return bool
     */
    public function getEnforceLoginIpRanges()
    {
        return $this->container['enforce_login_ip_ranges'];
    }

    /**
     * Sets enforce_login_ip_ranges
     *
     * @param bool $enforce_login_ip_ranges Boolean indicating whether organization will restrict access to Dashboard (including the API) from certain IP addresses.
     *
     * @return $this
     */
    public function setEnforceLoginIpRanges($enforce_login_ip_ranges)
    {
        $this->container['enforce_login_ip_ranges'] = $enforce_login_ip_ranges;

        return $this;
    }

    /**
     * Gets login_ip_ranges
     *
     * @return string[]
     */
    public function getLoginIpRanges()
    {
        return $this->container['login_ip_ranges'];
    }

    /**
     * Sets login_ip_ranges
     *
     * @param string[] $login_ip_ranges List of acceptable IP ranges. Entries can be single IP addresses, IP address ranges, and CIDR subnets.
     *
     * @return $this
     */
    public function setLoginIpRanges($login_ip_ranges)
    {
        $this->container['login_ip_ranges'] = $login_ip_ranges;

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

