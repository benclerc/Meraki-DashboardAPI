<?php
/**
 * UpdateNetworkWirelessSsidSplashSettings
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
 * UpdateNetworkWirelessSsidSplashSettings Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateNetworkWirelessSsidSplashSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'updateNetworkWirelessSsidSplashSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'splash_url' => 'string',
        'use_splash_url' => 'bool',
        'splash_timeout' => 'int',
        'redirect_url' => 'string',
        'use_redirect_url' => 'bool',
        'welcome_message' => 'string',
        'splash_logo' => '\Swagger\Client\Model\NetworksnetworkIdwirelessssidsnumbersplashsettingsSplashLogo',
        'splash_image' => '\Swagger\Client\Model\NetworksnetworkIdwirelessssidsnumbersplashsettingsSplashImage',
        'splash_prepaid_front' => '\Swagger\Client\Model\NetworksnetworkIdwirelessssidsnumbersplashsettingsSplashPrepaidFront',
        'block_all_traffic_before_sign_on' => 'bool',
        'controller_disconnection_behavior' => 'string',
        'allow_simultaneous_logins' => 'bool',
        'guest_sponsorship' => '\Swagger\Client\Model\NetworksnetworkIdwirelessssidsnumbersplashsettingsGuestSponsorship',
        'billing' => '\Swagger\Client\Model\NetworksnetworkIdwirelessssidsnumbersplashsettingsBilling'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'splash_url' => null,
        'use_splash_url' => null,
        'splash_timeout' => null,
        'redirect_url' => null,
        'use_redirect_url' => null,
        'welcome_message' => null,
        'splash_logo' => null,
        'splash_image' => null,
        'splash_prepaid_front' => null,
        'block_all_traffic_before_sign_on' => null,
        'controller_disconnection_behavior' => null,
        'allow_simultaneous_logins' => null,
        'guest_sponsorship' => null,
        'billing' => null
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
        'splash_url' => 'splashUrl',
        'use_splash_url' => 'useSplashUrl',
        'splash_timeout' => 'splashTimeout',
        'redirect_url' => 'redirectUrl',
        'use_redirect_url' => 'useRedirectUrl',
        'welcome_message' => 'welcomeMessage',
        'splash_logo' => 'splashLogo',
        'splash_image' => 'splashImage',
        'splash_prepaid_front' => 'splashPrepaidFront',
        'block_all_traffic_before_sign_on' => 'blockAllTrafficBeforeSignOn',
        'controller_disconnection_behavior' => 'controllerDisconnectionBehavior',
        'allow_simultaneous_logins' => 'allowSimultaneousLogins',
        'guest_sponsorship' => 'guestSponsorship',
        'billing' => 'billing'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'splash_url' => 'setSplashUrl',
        'use_splash_url' => 'setUseSplashUrl',
        'splash_timeout' => 'setSplashTimeout',
        'redirect_url' => 'setRedirectUrl',
        'use_redirect_url' => 'setUseRedirectUrl',
        'welcome_message' => 'setWelcomeMessage',
        'splash_logo' => 'setSplashLogo',
        'splash_image' => 'setSplashImage',
        'splash_prepaid_front' => 'setSplashPrepaidFront',
        'block_all_traffic_before_sign_on' => 'setBlockAllTrafficBeforeSignOn',
        'controller_disconnection_behavior' => 'setControllerDisconnectionBehavior',
        'allow_simultaneous_logins' => 'setAllowSimultaneousLogins',
        'guest_sponsorship' => 'setGuestSponsorship',
        'billing' => 'setBilling'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'splash_url' => 'getSplashUrl',
        'use_splash_url' => 'getUseSplashUrl',
        'splash_timeout' => 'getSplashTimeout',
        'redirect_url' => 'getRedirectUrl',
        'use_redirect_url' => 'getUseRedirectUrl',
        'welcome_message' => 'getWelcomeMessage',
        'splash_logo' => 'getSplashLogo',
        'splash_image' => 'getSplashImage',
        'splash_prepaid_front' => 'getSplashPrepaidFront',
        'block_all_traffic_before_sign_on' => 'getBlockAllTrafficBeforeSignOn',
        'controller_disconnection_behavior' => 'getControllerDisconnectionBehavior',
        'allow_simultaneous_logins' => 'getAllowSimultaneousLogins',
        'guest_sponsorship' => 'getGuestSponsorship',
        'billing' => 'getBilling'
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

    const CONTROLLER_DISCONNECTION_BEHAVIOR_OPEN = 'open';
    const CONTROLLER_DISCONNECTION_BEHAVIOR_RESTRICTED = 'restricted';
    const CONTROLLER_DISCONNECTION_BEHAVIOR__DEFAULT = 'default';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getControllerDisconnectionBehaviorAllowableValues()
    {
        return [
            self::CONTROLLER_DISCONNECTION_BEHAVIOR_OPEN,
            self::CONTROLLER_DISCONNECTION_BEHAVIOR_RESTRICTED,
            self::CONTROLLER_DISCONNECTION_BEHAVIOR__DEFAULT,
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
        $this->container['splash_url'] = isset($data['splash_url']) ? $data['splash_url'] : null;
        $this->container['use_splash_url'] = isset($data['use_splash_url']) ? $data['use_splash_url'] : null;
        $this->container['splash_timeout'] = isset($data['splash_timeout']) ? $data['splash_timeout'] : null;
        $this->container['redirect_url'] = isset($data['redirect_url']) ? $data['redirect_url'] : null;
        $this->container['use_redirect_url'] = isset($data['use_redirect_url']) ? $data['use_redirect_url'] : null;
        $this->container['welcome_message'] = isset($data['welcome_message']) ? $data['welcome_message'] : null;
        $this->container['splash_logo'] = isset($data['splash_logo']) ? $data['splash_logo'] : null;
        $this->container['splash_image'] = isset($data['splash_image']) ? $data['splash_image'] : null;
        $this->container['splash_prepaid_front'] = isset($data['splash_prepaid_front']) ? $data['splash_prepaid_front'] : null;
        $this->container['block_all_traffic_before_sign_on'] = isset($data['block_all_traffic_before_sign_on']) ? $data['block_all_traffic_before_sign_on'] : null;
        $this->container['controller_disconnection_behavior'] = isset($data['controller_disconnection_behavior']) ? $data['controller_disconnection_behavior'] : null;
        $this->container['allow_simultaneous_logins'] = isset($data['allow_simultaneous_logins']) ? $data['allow_simultaneous_logins'] : null;
        $this->container['guest_sponsorship'] = isset($data['guest_sponsorship']) ? $data['guest_sponsorship'] : null;
        $this->container['billing'] = isset($data['billing']) ? $data['billing'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getControllerDisconnectionBehaviorAllowableValues();
        if (!is_null($this->container['controller_disconnection_behavior']) && !in_array($this->container['controller_disconnection_behavior'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'controller_disconnection_behavior', must be one of '%s'",
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
     * Gets splash_url
     *
     * @return string
     */
    public function getSplashUrl()
    {
        return $this->container['splash_url'];
    }

    /**
     * Sets splash_url
     *
     * @param string $splash_url [optional] The custom splash URL of the click-through splash page. Note that the URL can be configured without necessarily being used. In order to enable the custom URL, see 'useSplashUrl'
     *
     * @return $this
     */
    public function setSplashUrl($splash_url)
    {
        $this->container['splash_url'] = $splash_url;

        return $this;
    }

    /**
     * Gets use_splash_url
     *
     * @return bool
     */
    public function getUseSplashUrl()
    {
        return $this->container['use_splash_url'];
    }

    /**
     * Sets use_splash_url
     *
     * @param bool $use_splash_url [optional] Boolean indicating whether the users will be redirected to the custom splash url. A custom splash URL must be set if this is true. Note that depending on your SSID's access control settings, it may not be possible to use the custom splash URL.
     *
     * @return $this
     */
    public function setUseSplashUrl($use_splash_url)
    {
        $this->container['use_splash_url'] = $use_splash_url;

        return $this;
    }

    /**
     * Gets splash_timeout
     *
     * @return int
     */
    public function getSplashTimeout()
    {
        return $this->container['splash_timeout'];
    }

    /**
     * Sets splash_timeout
     *
     * @param int $splash_timeout Splash timeout in minutes. This will determine how often users will see the splash page.
     *
     * @return $this
     */
    public function setSplashTimeout($splash_timeout)
    {
        $this->container['splash_timeout'] = $splash_timeout;

        return $this;
    }

    /**
     * Gets redirect_url
     *
     * @return string
     */
    public function getRedirectUrl()
    {
        return $this->container['redirect_url'];
    }

    /**
     * Sets redirect_url
     *
     * @param string $redirect_url The custom redirect URL where the users will go after the splash page.
     *
     * @return $this
     */
    public function setRedirectUrl($redirect_url)
    {
        $this->container['redirect_url'] = $redirect_url;

        return $this;
    }

    /**
     * Gets use_redirect_url
     *
     * @return bool
     */
    public function getUseRedirectUrl()
    {
        return $this->container['use_redirect_url'];
    }

    /**
     * Sets use_redirect_url
     *
     * @param bool $use_redirect_url The Boolean indicating whether the the user will be redirected to the custom redirect URL after the splash page. A custom redirect URL must be set if this is true.
     *
     * @return $this
     */
    public function setUseRedirectUrl($use_redirect_url)
    {
        $this->container['use_redirect_url'] = $use_redirect_url;

        return $this;
    }

    /**
     * Gets welcome_message
     *
     * @return string
     */
    public function getWelcomeMessage()
    {
        return $this->container['welcome_message'];
    }

    /**
     * Sets welcome_message
     *
     * @param string $welcome_message The welcome message for the users on the splash page.
     *
     * @return $this
     */
    public function setWelcomeMessage($welcome_message)
    {
        $this->container['welcome_message'] = $welcome_message;

        return $this;
    }

    /**
     * Gets splash_logo
     *
     * @return \Swagger\Client\Model\NetworksnetworkIdwirelessssidsnumbersplashsettingsSplashLogo
     */
    public function getSplashLogo()
    {
        return $this->container['splash_logo'];
    }

    /**
     * Sets splash_logo
     *
     * @param \Swagger\Client\Model\NetworksnetworkIdwirelessssidsnumbersplashsettingsSplashLogo $splash_logo splash_logo
     *
     * @return $this
     */
    public function setSplashLogo($splash_logo)
    {
        $this->container['splash_logo'] = $splash_logo;

        return $this;
    }

    /**
     * Gets splash_image
     *
     * @return \Swagger\Client\Model\NetworksnetworkIdwirelessssidsnumbersplashsettingsSplashImage
     */
    public function getSplashImage()
    {
        return $this->container['splash_image'];
    }

    /**
     * Sets splash_image
     *
     * @param \Swagger\Client\Model\NetworksnetworkIdwirelessssidsnumbersplashsettingsSplashImage $splash_image splash_image
     *
     * @return $this
     */
    public function setSplashImage($splash_image)
    {
        $this->container['splash_image'] = $splash_image;

        return $this;
    }

    /**
     * Gets splash_prepaid_front
     *
     * @return \Swagger\Client\Model\NetworksnetworkIdwirelessssidsnumbersplashsettingsSplashPrepaidFront
     */
    public function getSplashPrepaidFront()
    {
        return $this->container['splash_prepaid_front'];
    }

    /**
     * Sets splash_prepaid_front
     *
     * @param \Swagger\Client\Model\NetworksnetworkIdwirelessssidsnumbersplashsettingsSplashPrepaidFront $splash_prepaid_front splash_prepaid_front
     *
     * @return $this
     */
    public function setSplashPrepaidFront($splash_prepaid_front)
    {
        $this->container['splash_prepaid_front'] = $splash_prepaid_front;

        return $this;
    }

    /**
     * Gets block_all_traffic_before_sign_on
     *
     * @return bool
     */
    public function getBlockAllTrafficBeforeSignOn()
    {
        return $this->container['block_all_traffic_before_sign_on'];
    }

    /**
     * Sets block_all_traffic_before_sign_on
     *
     * @param bool $block_all_traffic_before_sign_on How restricted allowing traffic should be. If true, all traffic types are blocked until the splash page is acknowledged. If false, all non-HTTP traffic is allowed before the splash page is acknowledged.
     *
     * @return $this
     */
    public function setBlockAllTrafficBeforeSignOn($block_all_traffic_before_sign_on)
    {
        $this->container['block_all_traffic_before_sign_on'] = $block_all_traffic_before_sign_on;

        return $this;
    }

    /**
     * Gets controller_disconnection_behavior
     *
     * @return string
     */
    public function getControllerDisconnectionBehavior()
    {
        return $this->container['controller_disconnection_behavior'];
    }

    /**
     * Sets controller_disconnection_behavior
     *
     * @param string $controller_disconnection_behavior How login attempts should be handled when the controller is unreachable. Can be either 'open', 'restricted', or 'default'.
     *
     * @return $this
     */
    public function setControllerDisconnectionBehavior($controller_disconnection_behavior)
    {
        $allowedValues = $this->getControllerDisconnectionBehaviorAllowableValues();
        if (!is_null($controller_disconnection_behavior) && !in_array($controller_disconnection_behavior, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'controller_disconnection_behavior', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['controller_disconnection_behavior'] = $controller_disconnection_behavior;

        return $this;
    }

    /**
     * Gets allow_simultaneous_logins
     *
     * @return bool
     */
    public function getAllowSimultaneousLogins()
    {
        return $this->container['allow_simultaneous_logins'];
    }

    /**
     * Sets allow_simultaneous_logins
     *
     * @param bool $allow_simultaneous_logins Whether or not to allow simultaneous logins from different devices.
     *
     * @return $this
     */
    public function setAllowSimultaneousLogins($allow_simultaneous_logins)
    {
        $this->container['allow_simultaneous_logins'] = $allow_simultaneous_logins;

        return $this;
    }

    /**
     * Gets guest_sponsorship
     *
     * @return \Swagger\Client\Model\NetworksnetworkIdwirelessssidsnumbersplashsettingsGuestSponsorship
     */
    public function getGuestSponsorship()
    {
        return $this->container['guest_sponsorship'];
    }

    /**
     * Sets guest_sponsorship
     *
     * @param \Swagger\Client\Model\NetworksnetworkIdwirelessssidsnumbersplashsettingsGuestSponsorship $guest_sponsorship guest_sponsorship
     *
     * @return $this
     */
    public function setGuestSponsorship($guest_sponsorship)
    {
        $this->container['guest_sponsorship'] = $guest_sponsorship;

        return $this;
    }

    /**
     * Gets billing
     *
     * @return \Swagger\Client\Model\NetworksnetworkIdwirelessssidsnumbersplashsettingsBilling
     */
    public function getBilling()
    {
        return $this->container['billing'];
    }

    /**
     * Sets billing
     *
     * @param \Swagger\Client\Model\NetworksnetworkIdwirelessssidsnumbersplashsettingsBilling $billing billing
     *
     * @return $this
     */
    public function setBilling($billing)
    {
        $this->container['billing'] = $billing;

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


