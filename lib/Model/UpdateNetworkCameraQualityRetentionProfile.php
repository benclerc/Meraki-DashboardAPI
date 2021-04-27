<?php
/**
 * UpdateNetworkCameraQualityRetentionProfile
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
 * UpdateNetworkCameraQualityRetentionProfile Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateNetworkCameraQualityRetentionProfile implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'updateNetworkCameraQualityRetentionProfile';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'motion_based_retention_enabled' => 'bool',
        'restricted_bandwidth_mode_enabled' => 'bool',
        'audio_recording_enabled' => 'bool',
        'cloud_archive_enabled' => 'bool',
        'motion_detector_version' => 'int',
        'schedule_id' => 'string',
        'max_retention_days' => 'int',
        'video_settings' => '\Swagger\Client\Model\NetworksnetworkIdcameraqualityRetentionProfilesVideoSettings'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'motion_based_retention_enabled' => null,
        'restricted_bandwidth_mode_enabled' => null,
        'audio_recording_enabled' => null,
        'cloud_archive_enabled' => null,
        'motion_detector_version' => null,
        'schedule_id' => null,
        'max_retention_days' => null,
        'video_settings' => null
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
        'motion_based_retention_enabled' => 'motionBasedRetentionEnabled',
        'restricted_bandwidth_mode_enabled' => 'restrictedBandwidthModeEnabled',
        'audio_recording_enabled' => 'audioRecordingEnabled',
        'cloud_archive_enabled' => 'cloudArchiveEnabled',
        'motion_detector_version' => 'motionDetectorVersion',
        'schedule_id' => 'scheduleId',
        'max_retention_days' => 'maxRetentionDays',
        'video_settings' => 'videoSettings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'motion_based_retention_enabled' => 'setMotionBasedRetentionEnabled',
        'restricted_bandwidth_mode_enabled' => 'setRestrictedBandwidthModeEnabled',
        'audio_recording_enabled' => 'setAudioRecordingEnabled',
        'cloud_archive_enabled' => 'setCloudArchiveEnabled',
        'motion_detector_version' => 'setMotionDetectorVersion',
        'schedule_id' => 'setScheduleId',
        'max_retention_days' => 'setMaxRetentionDays',
        'video_settings' => 'setVideoSettings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'motion_based_retention_enabled' => 'getMotionBasedRetentionEnabled',
        'restricted_bandwidth_mode_enabled' => 'getRestrictedBandwidthModeEnabled',
        'audio_recording_enabled' => 'getAudioRecordingEnabled',
        'cloud_archive_enabled' => 'getCloudArchiveEnabled',
        'motion_detector_version' => 'getMotionDetectorVersion',
        'schedule_id' => 'getScheduleId',
        'max_retention_days' => 'getMaxRetentionDays',
        'video_settings' => 'getVideoSettings'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['motion_based_retention_enabled'] = isset($data['motion_based_retention_enabled']) ? $data['motion_based_retention_enabled'] : null;
        $this->container['restricted_bandwidth_mode_enabled'] = isset($data['restricted_bandwidth_mode_enabled']) ? $data['restricted_bandwidth_mode_enabled'] : null;
        $this->container['audio_recording_enabled'] = isset($data['audio_recording_enabled']) ? $data['audio_recording_enabled'] : null;
        $this->container['cloud_archive_enabled'] = isset($data['cloud_archive_enabled']) ? $data['cloud_archive_enabled'] : null;
        $this->container['motion_detector_version'] = isset($data['motion_detector_version']) ? $data['motion_detector_version'] : null;
        $this->container['schedule_id'] = isset($data['schedule_id']) ? $data['schedule_id'] : null;
        $this->container['max_retention_days'] = isset($data['max_retention_days']) ? $data['max_retention_days'] : null;
        $this->container['video_settings'] = isset($data['video_settings']) ? $data['video_settings'] : null;
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
     * @param string $name The name of the new profile. Must be unique.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param bool $motion_based_retention_enabled Deletes footage older than 3 days in which no motion was detected. Can be either true or false. Defaults to false.
     *
     * @return $this
     */
    public function setMotionBasedRetentionEnabled($motion_based_retention_enabled)
    {
        $this->container['motion_based_retention_enabled'] = $motion_based_retention_enabled;

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
     * @param bool $restricted_bandwidth_mode_enabled Disable features that require additional bandwidth such as Motion Recap. Can be either true or false. Defaults to false.
     *
     * @return $this
     */
    public function setRestrictedBandwidthModeEnabled($restricted_bandwidth_mode_enabled)
    {
        $this->container['restricted_bandwidth_mode_enabled'] = $restricted_bandwidth_mode_enabled;

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
     * @param bool $audio_recording_enabled Whether or not to record audio. Can be either true or false. Defaults to false.
     *
     * @return $this
     */
    public function setAudioRecordingEnabled($audio_recording_enabled)
    {
        $this->container['audio_recording_enabled'] = $audio_recording_enabled;

        return $this;
    }

    /**
     * Gets cloud_archive_enabled
     *
     * @return bool
     */
    public function getCloudArchiveEnabled()
    {
        return $this->container['cloud_archive_enabled'];
    }

    /**
     * Sets cloud_archive_enabled
     *
     * @param bool $cloud_archive_enabled Create redundant video backup using Cloud Archive. Can be either true or false. Defaults to false.
     *
     * @return $this
     */
    public function setCloudArchiveEnabled($cloud_archive_enabled)
    {
        $this->container['cloud_archive_enabled'] = $cloud_archive_enabled;

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
     * Gets schedule_id
     *
     * @return string
     */
    public function getScheduleId()
    {
        return $this->container['schedule_id'];
    }

    /**
     * Sets schedule_id
     *
     * @param string $schedule_id Schedule for which this camera will record video, or 'null' to always record.
     *
     * @return $this
     */
    public function setScheduleId($schedule_id)
    {
        $this->container['schedule_id'] = $schedule_id;

        return $this;
    }

    /**
     * Gets max_retention_days
     *
     * @return int
     */
    public function getMaxRetentionDays()
    {
        return $this->container['max_retention_days'];
    }

    /**
     * Sets max_retention_days
     *
     * @param int $max_retention_days The maximum number of days for which the data will be stored, or 'null' to keep data until storage space runs out. If the former, it can be one of [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 14, 30, 60, 90] days.
     *
     * @return $this
     */
    public function setMaxRetentionDays($max_retention_days)
    {
        $this->container['max_retention_days'] = $max_retention_days;

        return $this;
    }

    /**
     * Gets video_settings
     *
     * @return \Swagger\Client\Model\NetworksnetworkIdcameraqualityRetentionProfilesVideoSettings
     */
    public function getVideoSettings()
    {
        return $this->container['video_settings'];
    }

    /**
     * Sets video_settings
     *
     * @param \Swagger\Client\Model\NetworksnetworkIdcameraqualityRetentionProfilesVideoSettings $video_settings video_settings
     *
     * @return $this
     */
    public function setVideoSettings($video_settings)
    {
        $this->container['video_settings'] = $video_settings;

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


