<?php
/**
 * UpdateDeviceCameraQualityAndRetention
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
 * UpdateDeviceCameraQualityAndRetention Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateDeviceCameraQualityAndRetention implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'updateDeviceCameraQualityAndRetention';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'profile_id' => 'string',
        'motion_based_retention_enabled' => 'bool',
        'audio_recording_enabled' => 'bool',
        'restricted_bandwidth_mode_enabled' => 'bool',
        'quality' => 'string',
        'resolution' => 'string',
        'motion_detector_version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'profile_id' => null,
        'motion_based_retention_enabled' => null,
        'audio_recording_enabled' => null,
        'restricted_bandwidth_mode_enabled' => null,
        'quality' => null,
        'resolution' => null,
        'motion_detector_version' => null
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
        'profile_id' => 'profileId',
        'motion_based_retention_enabled' => 'motionBasedRetentionEnabled',
        'audio_recording_enabled' => 'audioRecordingEnabled',
        'restricted_bandwidth_mode_enabled' => 'restrictedBandwidthModeEnabled',
        'quality' => 'quality',
        'resolution' => 'resolution',
        'motion_detector_version' => 'motionDetectorVersion'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'profile_id' => 'setProfileId',
        'motion_based_retention_enabled' => 'setMotionBasedRetentionEnabled',
        'audio_recording_enabled' => 'setAudioRecordingEnabled',
        'restricted_bandwidth_mode_enabled' => 'setRestrictedBandwidthModeEnabled',
        'quality' => 'setQuality',
        'resolution' => 'setResolution',
        'motion_detector_version' => 'setMotionDetectorVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'profile_id' => 'getProfileId',
        'motion_based_retention_enabled' => 'getMotionBasedRetentionEnabled',
        'audio_recording_enabled' => 'getAudioRecordingEnabled',
        'restricted_bandwidth_mode_enabled' => 'getRestrictedBandwidthModeEnabled',
        'quality' => 'getQuality',
        'resolution' => 'getResolution',
        'motion_detector_version' => 'getMotionDetectorVersion'
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

    const QUALITY_STANDARD = 'Standard';
    const QUALITY_HIGH = 'High';
    const QUALITY_ENHANCED = 'Enhanced';
    const RESOLUTION__1280X720 = '1280x720';
    const RESOLUTION__1920X1080 = '1920x1080';
    const RESOLUTION__1080X1080 = '1080x1080';
    const RESOLUTION__2058X2058 = '2058x2058';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getQualityAllowableValues()
    {
        return [
            self::QUALITY_STANDARD,
            self::QUALITY_HIGH,
            self::QUALITY_ENHANCED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getResolutionAllowableValues()
    {
        return [
            self::RESOLUTION__1280X720,
            self::RESOLUTION__1920X1080,
            self::RESOLUTION__1080X1080,
            self::RESOLUTION__2058X2058,
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
        $this->container['profile_id'] = isset($data['profile_id']) ? $data['profile_id'] : null;
        $this->container['motion_based_retention_enabled'] = isset($data['motion_based_retention_enabled']) ? $data['motion_based_retention_enabled'] : null;
        $this->container['audio_recording_enabled'] = isset($data['audio_recording_enabled']) ? $data['audio_recording_enabled'] : null;
        $this->container['restricted_bandwidth_mode_enabled'] = isset($data['restricted_bandwidth_mode_enabled']) ? $data['restricted_bandwidth_mode_enabled'] : null;
        $this->container['quality'] = isset($data['quality']) ? $data['quality'] : null;
        $this->container['resolution'] = isset($data['resolution']) ? $data['resolution'] : null;
        $this->container['motion_detector_version'] = isset($data['motion_detector_version']) ? $data['motion_detector_version'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getQualityAllowableValues();
        if (!is_null($this->container['quality']) && !in_array($this->container['quality'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'quality', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getResolutionAllowableValues();
        if (!is_null($this->container['resolution']) && !in_array($this->container['resolution'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'resolution', must be one of '%s'",
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
     * Gets profile_id
     *
     * @return string
     */
    public function getProfileId()
    {
        return $this->container['profile_id'];
    }

    /**
     * Sets profile_id
     *
     * @param string $profile_id The ID of a quality and retention profile to assign to the camera. The profile's settings will override all of the per-camera quality and retention settings. If the value of this parameter is null, any existing profile will be unassigned from the camera.
     *
     * @return $this
     */
    public function setProfileId($profile_id)
    {
        $this->container['profile_id'] = $profile_id;

        return $this;
    }

    /**
     * Gets motion_based_retention_enabled
     *
     * @return bool
     */
    public function getMotionBasedRetentionEnabled()
    {
        return $this->container['motion_based_retention_enabled'];
    }

    /**
     * Sets motion_based_retention_enabled
     *
     * @param bool $motion_based_retention_enabled Boolean indicating if motion-based retention is enabled(true) or disabled(false) on the camera.
     *
     * @return $this
     */
    public function setMotionBasedRetentionEnabled($motion_based_retention_enabled)
    {
        $this->container['motion_based_retention_enabled'] = $motion_based_retention_enabled;

        return $this;
    }

    /**
     * Gets audio_recording_enabled
     *
     * @return bool
     */
    public function getAudioRecordingEnabled()
    {
        return $this->container['audio_recording_enabled'];
    }

    /**
     * Sets audio_recording_enabled
     *
     * @param bool $audio_recording_enabled Boolean indicating if audio recording is enabled(true) or disabled(false) on the camera
     *
     * @return $this
     */
    public function setAudioRecordingEnabled($audio_recording_enabled)
    {
        $this->container['audio_recording_enabled'] = $audio_recording_enabled;

        return $this;
    }

    /**
     * Gets restricted_bandwidth_mode_enabled
     *
     * @return bool
     */
    public function getRestrictedBandwidthModeEnabled()
    {
        return $this->container['restricted_bandwidth_mode_enabled'];
    }

    /**
     * Sets restricted_bandwidth_mode_enabled
     *
     * @param bool $restricted_bandwidth_mode_enabled Boolean indicating if restricted bandwidth is enabled(true) or disabled(false) on the camera
     *
     * @return $this
     */
    public function setRestrictedBandwidthModeEnabled($restricted_bandwidth_mode_enabled)
    {
        $this->container['restricted_bandwidth_mode_enabled'] = $restricted_bandwidth_mode_enabled;

        return $this;
    }

    /**
     * Gets quality
     *
     * @return string
     */
    public function getQuality()
    {
        return $this->container['quality'];
    }

    /**
     * Sets quality
     *
     * @param string $quality Quality of the camera. Can be one of 'Standard', 'High' or 'Enhanced'. Not all qualities are supported by every camera model.
     *
     * @return $this
     */
    public function setQuality($quality)
    {
        $allowedValues = $this->getQualityAllowableValues();
        if (!is_null($quality) && !in_array($quality, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'quality', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['quality'] = $quality;

        return $this;
    }

    /**
     * Gets resolution
     *
     * @return string
     */
    public function getResolution()
    {
        return $this->container['resolution'];
    }

    /**
     * Sets resolution
     *
     * @param string $resolution Resolution of the camera. Can be one of '1280x720', '1920x1080', '1080x1080' or '2058x2058'. Not all resolutions are supported by every camera model.
     *
     * @return $this
     */
    public function setResolution($resolution)
    {
        $allowedValues = $this->getResolutionAllowableValues();
        if (!is_null($resolution) && !in_array($resolution, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'resolution', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['resolution'] = $resolution;

        return $this;
    }

    /**
     * Gets motion_detector_version
     *
     * @return int
     */
    public function getMotionDetectorVersion()
    {
        return $this->container['motion_detector_version'];
    }

    /**
     * Sets motion_detector_version
     *
     * @param int $motion_detector_version The version of the motion detector that will be used by the camera. Only applies to Gen 2 cameras. Defaults to v2.
     *
     * @return $this
     */
    public function setMotionDetectorVersion($motion_detector_version)
    {
        $this->container['motion_detector_version'] = $motion_detector_version;

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


