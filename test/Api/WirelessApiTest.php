<?php
/**
 * WirelessApiTest
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
 * Please update the test case below to test the endpoint.
 */

namespace Swagger\Client;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * WirelessApiTest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WirelessApiTest extends \PHPUnit_Framework_TestCase
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
     * Test case for createNetworkWirelessRfProfile
     *
     * Creates new RF profile for this network.
     *
     */
    public function testCreateNetworkWirelessRfProfile()
    {
    }

    /**
     * Test case for createNetworkWirelessSsidIdentityPsk
     *
     * Create an Identity PSK.
     *
     */
    public function testCreateNetworkWirelessSsidIdentityPsk()
    {
    }

    /**
     * Test case for deleteNetworkWirelessRfProfile
     *
     * Delete a RF Profile.
     *
     */
    public function testDeleteNetworkWirelessRfProfile()
    {
    }

    /**
     * Test case for deleteNetworkWirelessSsidIdentityPsk
     *
     * Delete an Identity PSK.
     *
     */
    public function testDeleteNetworkWirelessSsidIdentityPsk()
    {
    }

    /**
     * Test case for getDeviceWirelessBluetoothSettings
     *
     * Return the bluetooth settings for a wireless device.
     *
     */
    public function testGetDeviceWirelessBluetoothSettings()
    {
    }

    /**
     * Test case for getDeviceWirelessConnectionStats
     *
     * Aggregated connectivity info for a given AP on this network.
     *
     */
    public function testGetDeviceWirelessConnectionStats()
    {
    }

    /**
     * Test case for getDeviceWirelessLatencyStats
     *
     * Aggregated latency info for a given AP on this network.
     *
     */
    public function testGetDeviceWirelessLatencyStats()
    {
    }

    /**
     * Test case for getDeviceWirelessRadioSettings
     *
     * Return the radio settings of a device.
     *
     */
    public function testGetDeviceWirelessRadioSettings()
    {
    }

    /**
     * Test case for getDeviceWirelessStatus
     *
     * Return the SSID statuses of an access point.
     *
     */
    public function testGetDeviceWirelessStatus()
    {
    }

    /**
     * Test case for getNetworkWirelessAirMarshal
     *
     * List Air Marshal scan results from a network.
     *
     */
    public function testGetNetworkWirelessAirMarshal()
    {
    }

    /**
     * Test case for getNetworkWirelessAlternateManagementInterface
     *
     * Return alternate management interface and devices with IP assigned.
     *
     */
    public function testGetNetworkWirelessAlternateManagementInterface()
    {
    }

    /**
     * Test case for getNetworkWirelessBilling
     *
     * Return the billing settings of this network.
     *
     */
    public function testGetNetworkWirelessBilling()
    {
    }

    /**
     * Test case for getNetworkWirelessBluetoothSettings
     *
     * Return the Bluetooth settings for a network. <a href=\"https://documentation.meraki.com/MR/Bluetooth/Bluetooth_Low_Energy_(BLE)\">Bluetooth settings</a> must be enabled on the network..
     *
     */
    public function testGetNetworkWirelessBluetoothSettings()
    {
    }

    /**
     * Test case for getNetworkWirelessChannelUtilizationHistory
     *
     * Return AP channel utilization over time for a device or network client.
     *
     */
    public function testGetNetworkWirelessChannelUtilizationHistory()
    {
    }

    /**
     * Test case for getNetworkWirelessClientConnectionStats
     *
     * Aggregated connectivity info for a given client on this network.
     *
     */
    public function testGetNetworkWirelessClientConnectionStats()
    {
    }

    /**
     * Test case for getNetworkWirelessClientConnectivityEvents
     *
     * List the wireless connectivity events for a client within a network in the timespan..
     *
     */
    public function testGetNetworkWirelessClientConnectivityEvents()
    {
    }

    /**
     * Test case for getNetworkWirelessClientCountHistory
     *
     * Return wireless client counts over time for a network, device, or network client.
     *
     */
    public function testGetNetworkWirelessClientCountHistory()
    {
    }

    /**
     * Test case for getNetworkWirelessClientLatencyHistory
     *
     * Return the latency history for a client.
     *
     */
    public function testGetNetworkWirelessClientLatencyHistory()
    {
    }

    /**
     * Test case for getNetworkWirelessClientLatencyStats
     *
     * Aggregated latency info for a given client on this network.
     *
     */
    public function testGetNetworkWirelessClientLatencyStats()
    {
    }

    /**
     * Test case for getNetworkWirelessClientsConnectionStats
     *
     * Aggregated connectivity info for this network, grouped by clients.
     *
     */
    public function testGetNetworkWirelessClientsConnectionStats()
    {
    }

    /**
     * Test case for getNetworkWirelessClientsLatencyStats
     *
     * Aggregated latency info for this network, grouped by clients.
     *
     */
    public function testGetNetworkWirelessClientsLatencyStats()
    {
    }

    /**
     * Test case for getNetworkWirelessConnectionStats
     *
     * Aggregated connectivity info for this network.
     *
     */
    public function testGetNetworkWirelessConnectionStats()
    {
    }

    /**
     * Test case for getNetworkWirelessDataRateHistory
     *
     * Return PHY data rates over time for a network, device, or network client.
     *
     */
    public function testGetNetworkWirelessDataRateHistory()
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
     * Test case for getNetworkWirelessFailedConnections
     *
     * List of all failed client connection events on this network in a given time range.
     *
     */
    public function testGetNetworkWirelessFailedConnections()
    {
    }

    /**
     * Test case for getNetworkWirelessLatencyHistory
     *
     * Return average wireless latency over time for a network, device, or network client.
     *
     */
    public function testGetNetworkWirelessLatencyHistory()
    {
    }

    /**
     * Test case for getNetworkWirelessLatencyStats
     *
     * Aggregated latency info for this network.
     *
     */
    public function testGetNetworkWirelessLatencyStats()
    {
    }

    /**
     * Test case for getNetworkWirelessMeshStatuses
     *
     * List wireless mesh statuses for repeaters.
     *
     */
    public function testGetNetworkWirelessMeshStatuses()
    {
    }

    /**
     * Test case for getNetworkWirelessRfProfile
     *
     * Return a RF profile.
     *
     */
    public function testGetNetworkWirelessRfProfile()
    {
    }

    /**
     * Test case for getNetworkWirelessRfProfiles
     *
     * List the non-basic RF profiles for this network.
     *
     */
    public function testGetNetworkWirelessRfProfiles()
    {
    }

    /**
     * Test case for getNetworkWirelessSettings
     *
     * Return the wireless settings for a network.
     *
     */
    public function testGetNetworkWirelessSettings()
    {
    }

    /**
     * Test case for getNetworkWirelessSignalQualityHistory
     *
     * Return signal quality (SNR/RSSI) over time for a device or network client.
     *
     */
    public function testGetNetworkWirelessSignalQualityHistory()
    {
    }

    /**
     * Test case for getNetworkWirelessSsid
     *
     * Return a single MR SSID.
     *
     */
    public function testGetNetworkWirelessSsid()
    {
    }

    /**
     * Test case for getNetworkWirelessSsidBonjourForwarding
     *
     * List the Bonjour forwarding setting and rules for the SSID.
     *
     */
    public function testGetNetworkWirelessSsidBonjourForwarding()
    {
    }

    /**
     * Test case for getNetworkWirelessSsidDeviceTypeGroupPolicies
     *
     * List the device type group policies for the SSID.
     *
     */
    public function testGetNetworkWirelessSsidDeviceTypeGroupPolicies()
    {
    }

    /**
     * Test case for getNetworkWirelessSsidFirewallL3FirewallRules
     *
     * Return the L3 firewall rules for an SSID on an MR network.
     *
     */
    public function testGetNetworkWirelessSsidFirewallL3FirewallRules()
    {
    }

    /**
     * Test case for getNetworkWirelessSsidFirewallL7FirewallRules
     *
     * Return the L7 firewall rules for an SSID on an MR network.
     *
     */
    public function testGetNetworkWirelessSsidFirewallL7FirewallRules()
    {
    }

    /**
     * Test case for getNetworkWirelessSsidIdentityPsk
     *
     * Return an Identity PSK.
     *
     */
    public function testGetNetworkWirelessSsidIdentityPsk()
    {
    }

    /**
     * Test case for getNetworkWirelessSsidIdentityPsks
     *
     * List all Identity PSKs in a wireless network.
     *
     */
    public function testGetNetworkWirelessSsidIdentityPsks()
    {
    }

    /**
     * Test case for getNetworkWirelessSsidSplashSettings
     *
     * Display the splash page settings for the given SSID.
     *
     */
    public function testGetNetworkWirelessSsidSplashSettings()
    {
    }

    /**
     * Test case for getNetworkWirelessSsidTrafficShapingRules
     *
     * Display the traffic shaping settings for a SSID on an MR network.
     *
     */
    public function testGetNetworkWirelessSsidTrafficShapingRules()
    {
    }

    /**
     * Test case for getNetworkWirelessSsidVpn
     *
     * List the VPN settings for the SSID..
     *
     */
    public function testGetNetworkWirelessSsidVpn()
    {
    }

    /**
     * Test case for getNetworkWirelessSsids
     *
     * List the MR SSIDs in a network.
     *
     */
    public function testGetNetworkWirelessSsids()
    {
    }

    /**
     * Test case for getNetworkWirelessUsageHistory
     *
     * Return AP usage over time for a device or network client.
     *
     */
    public function testGetNetworkWirelessUsageHistory()
    {
    }

    /**
     * Test case for updateDeviceWirelessBluetoothSettings
     *
     * Update the bluetooth settings for a wireless device.
     *
     */
    public function testUpdateDeviceWirelessBluetoothSettings()
    {
    }

    /**
     * Test case for updateDeviceWirelessRadioSettings
     *
     * Update the radio settings of a device.
     *
     */
    public function testUpdateDeviceWirelessRadioSettings()
    {
    }

    /**
     * Test case for updateNetworkWirelessAlternateManagementInterface
     *
     * Update alternate management interface and device static IP.
     *
     */
    public function testUpdateNetworkWirelessAlternateManagementInterface()
    {
    }

    /**
     * Test case for updateNetworkWirelessBilling
     *
     * Update the billing settings.
     *
     */
    public function testUpdateNetworkWirelessBilling()
    {
    }

    /**
     * Test case for updateNetworkWirelessBluetoothSettings
     *
     * Update the Bluetooth settings for a network.
     *
     */
    public function testUpdateNetworkWirelessBluetoothSettings()
    {
    }

    /**
     * Test case for updateNetworkWirelessRfProfile
     *
     * Updates specified RF profile for this network.
     *
     */
    public function testUpdateNetworkWirelessRfProfile()
    {
    }

    /**
     * Test case for updateNetworkWirelessSettings
     *
     * Update the wireless settings for a network.
     *
     */
    public function testUpdateNetworkWirelessSettings()
    {
    }

    /**
     * Test case for updateNetworkWirelessSsid
     *
     * Update the attributes of an MR SSID.
     *
     */
    public function testUpdateNetworkWirelessSsid()
    {
    }

    /**
     * Test case for updateNetworkWirelessSsidBonjourForwarding
     *
     * Update the bonjour forwarding setting and rules for the SSID.
     *
     */
    public function testUpdateNetworkWirelessSsidBonjourForwarding()
    {
    }

    /**
     * Test case for updateNetworkWirelessSsidDeviceTypeGroupPolicies
     *
     * Update the device type group policies for the SSID.
     *
     */
    public function testUpdateNetworkWirelessSsidDeviceTypeGroupPolicies()
    {
    }

    /**
     * Test case for updateNetworkWirelessSsidFirewallL3FirewallRules
     *
     * Update the L3 firewall rules of an SSID on an MR network.
     *
     */
    public function testUpdateNetworkWirelessSsidFirewallL3FirewallRules()
    {
    }

    /**
     * Test case for updateNetworkWirelessSsidFirewallL7FirewallRules
     *
     * Update the L7 firewall rules of an SSID on an MR network.
     *
     */
    public function testUpdateNetworkWirelessSsidFirewallL7FirewallRules()
    {
    }

    /**
     * Test case for updateNetworkWirelessSsidIdentityPsk
     *
     * Update an Identity PSK.
     *
     */
    public function testUpdateNetworkWirelessSsidIdentityPsk()
    {
    }

    /**
     * Test case for updateNetworkWirelessSsidSplashSettings
     *
     * Modify the splash page settings for the given SSID.
     *
     */
    public function testUpdateNetworkWirelessSsidSplashSettings()
    {
    }

    /**
     * Test case for updateNetworkWirelessSsidTrafficShapingRules
     *
     * Update the traffic shaping settings for an SSID on an MR network.
     *
     */
    public function testUpdateNetworkWirelessSsidTrafficShapingRules()
    {
    }

    /**
     * Test case for updateNetworkWirelessSsidVpn
     *
     * Update the VPN settings for the SSID.
     *
     */
    public function testUpdateNetworkWirelessSsidVpn()
    {
    }
}