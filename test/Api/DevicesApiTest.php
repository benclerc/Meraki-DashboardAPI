<?php
/**
 * DevicesApiTest
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
 * Please update the test case below to test the endpoint.
 */

namespace Swagger\Client;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * DevicesApiTest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DevicesApiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for blinkDeviceLeds
     *
     * Blink the LEDs on a device.
     *
     */
    public function testBlinkDeviceLeds()
    {
    }

    /**
     * Test case for checkinNetworkSmDevices
     *
     * Force check-in a set of devices.
     *
     */
    public function testCheckinNetworkSmDevices()
    {
    }

    /**
     * Test case for claimNetworkDevices
     *
     * Claim devices into a network. (Note: for recently claimed devices, it may take a few minutes for API requsts against that device to succeed).
     *
     */
    public function testClaimNetworkDevices()
    {
    }

    /**
     * Test case for cloneOrganizationSwitchDevices
     *
     * Clone port-level and some switch-level configuration settings from a source switch to one or more target switches.
     *
     */
    public function testCloneOrganizationSwitchDevices()
    {
    }

    /**
     * Test case for getDevice
     *
     * Return a single device.
     *
     */
    public function testGetDevice()
    {
    }

    /**
     * Test case for getDeviceClients
     *
     * List the clients of a device, up to a maximum of a month ago.
     *
     */
    public function testGetDeviceClients()
    {
    }

    /**
     * Test case for getDeviceLldpCdp
     *
     * List LLDP and CDP information for a device.
     *
     */
    public function testGetDeviceLldpCdp()
    {
    }

    /**
     * Test case for getDeviceLossAndLatencyHistory
     *
     * Get the uplink loss percentage and latency in milliseconds, and goodput in kilobits per second for a wired network device..
     *
     */
    public function testGetDeviceLossAndLatencyHistory()
    {
    }

    /**
     * Test case for getDeviceManagementInterface
     *
     * Return the management interface settings for a device.
     *
     */
    public function testGetDeviceManagementInterface()
    {
    }

    /**
     * Test case for getNetworkDevices
     *
     * List the devices in a network.
     *
     */
    public function testGetNetworkDevices()
    {
    }

    /**
     * Test case for getNetworkSmDeviceCellularUsageHistory
     *
     * Return the client's daily cellular data usage history.
     *
     */
    public function testGetNetworkSmDeviceCellularUsageHistory()
    {
    }

    /**
     * Test case for getNetworkSmDeviceCerts
     *
     * List the certs on a device.
     *
     */
    public function testGetNetworkSmDeviceCerts()
    {
    }

    /**
     * Test case for getNetworkSmDeviceConnectivity
     *
     * Returns historical connectivity data (whether a device is regularly checking in to Dashboard)..
     *
     */
    public function testGetNetworkSmDeviceConnectivity()
    {
    }

    /**
     * Test case for getNetworkSmDeviceDesktopLogs
     *
     * Return historical records of various Systems Manager network connection details for desktop devices..
     *
     */
    public function testGetNetworkSmDeviceDesktopLogs()
    {
    }

    /**
     * Test case for getNetworkSmDeviceDeviceCommandLogs
     *
     * Return historical records of commands sent to Systems Manager devices.
     *
     */
    public function testGetNetworkSmDeviceDeviceCommandLogs()
    {
    }

    /**
     * Test case for getNetworkSmDeviceDeviceProfiles
     *
     * Get the profiles associated with a device.
     *
     */
    public function testGetNetworkSmDeviceDeviceProfiles()
    {
    }

    /**
     * Test case for getNetworkSmDeviceNetworkAdapters
     *
     * List the network adapters of a device.
     *
     */
    public function testGetNetworkSmDeviceNetworkAdapters()
    {
    }

    /**
     * Test case for getNetworkSmDevicePerformanceHistory
     *
     * Return historical records of various Systems Manager client metrics for desktop devices..
     *
     */
    public function testGetNetworkSmDevicePerformanceHistory()
    {
    }

    /**
     * Test case for getNetworkSmDeviceRestrictions
     *
     * List the restrictions on a device.
     *
     */
    public function testGetNetworkSmDeviceRestrictions()
    {
    }

    /**
     * Test case for getNetworkSmDeviceSecurityCenters
     *
     * List the security centers on a device.
     *
     */
    public function testGetNetworkSmDeviceSecurityCenters()
    {
    }

    /**
     * Test case for getNetworkSmDeviceSoftwares
     *
     * Get a list of softwares associated with a device.
     *
     */
    public function testGetNetworkSmDeviceSoftwares()
    {
    }

    /**
     * Test case for getNetworkSmDeviceWlanLists
     *
     * List the saved SSID names on a device.
     *
     */
    public function testGetNetworkSmDeviceWlanLists()
    {
    }

    /**
     * Test case for getNetworkSmDevices
     *
     * List the devices enrolled in an SM network with various specified fields and filters.
     *
     */
    public function testGetNetworkSmDevices()
    {
    }

    /**
     * Test case for getNetworkWirelessDevicesConnectionStats
     *
     * Aggregated connectivity info for this network, grouped by node.
     *
     */
    public function testGetNetworkWirelessDevicesConnectionStats()
    {
    }

    /**
     * Test case for getNetworkWirelessDevicesLatencyStats
     *
     * Aggregated latency info for this network, grouped by node.
     *
     */
    public function testGetNetworkWirelessDevicesLatencyStats()
    {
    }

    /**
     * Test case for getOrganizationDevices
     *
     * List the devices in an organization.
     *
     */
    public function testGetOrganizationDevices()
    {
    }

    /**
     * Test case for getOrganizationDevicesStatuses
     *
     * List the status of every Meraki device in the organization.
     *
     */
    public function testGetOrganizationDevicesStatuses()
    {
    }

    /**
     * Test case for getOrganizationDevicesUplinksLossAndLatency
     *
     * Return the uplink loss and latency for every MX in the organization from at latest 2 minutes ago.
     *
     */
    public function testGetOrganizationDevicesUplinksLossAndLatency()
    {
    }

    /**
     * Test case for lockNetworkSmDevices
     *
     * Lock a set of devices.
     *
     */
    public function testLockNetworkSmDevices()
    {
    }

    /**
     * Test case for modifyNetworkSmDevicesTags
     *
     * Add, delete, or update the tags of a set of devices.
     *
     */
    public function testModifyNetworkSmDevicesTags()
    {
    }

    /**
     * Test case for moveNetworkSmDevices
     *
     * Move a set of devices to a new network.
     *
     */
    public function testMoveNetworkSmDevices()
    {
    }

    /**
     * Test case for rebootDevice
     *
     * Reboot a device.
     *
     */
    public function testRebootDevice()
    {
    }

    /**
     * Test case for refreshNetworkSmDeviceDetails
     *
     * Refresh the details of a device.
     *
     */
    public function testRefreshNetworkSmDeviceDetails()
    {
    }

    /**
     * Test case for removeNetworkDevices
     *
     * Remove a single device.
     *
     */
    public function testRemoveNetworkDevices()
    {
    }

    /**
     * Test case for unenrollNetworkSmDevice
     *
     * Unenroll a device.
     *
     */
    public function testUnenrollNetworkSmDevice()
    {
    }

    /**
     * Test case for updateDevice
     *
     * Update the attributes of a device.
     *
     */
    public function testUpdateDevice()
    {
    }

    /**
     * Test case for updateDeviceManagementInterface
     *
     * Update the management interface settings for a device.
     *
     */
    public function testUpdateDeviceManagementInterface()
    {
    }

    /**
     * Test case for updateNetworkSmDevicesFields
     *
     * Modify the fields of a device.
     *
     */
    public function testUpdateNetworkSmDevicesFields()
    {
    }

    /**
     * Test case for wipeNetworkSmDevices
     *
     * Wipe a device.
     *
     */
    public function testWipeNetworkSmDevices()
    {
    }
}
