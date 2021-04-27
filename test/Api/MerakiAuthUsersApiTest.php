<?php
/**
 * MerakiAuthUsersApiTest
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
 * MerakiAuthUsersApiTest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MerakiAuthUsersApiTest extends \PHPUnit_Framework_TestCase
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
     * Test case for createNetworkMerakiAuthUser
     *
     * Authorize a user configured with Meraki Authentication for a network (currently supports 802.1X, splash guest, and client VPN users, and currently, organizations have a 50,000 user cap).
     *
     */
    public function testCreateNetworkMerakiAuthUser()
    {
    }

    /**
     * Test case for deleteNetworkMerakiAuthUser
     *
     * Deauthorize a user.
     *
     */
    public function testDeleteNetworkMerakiAuthUser()
    {
    }

    /**
     * Test case for getNetworkMerakiAuthUser
     *
     * Return the Meraki Auth splash guest, RADIUS, or client VPN user.
     *
     */
    public function testGetNetworkMerakiAuthUser()
    {
    }

    /**
     * Test case for getNetworkMerakiAuthUsers
     *
     * List the users configured under Meraki Authentication for a network (splash guest or RADIUS users for a wireless network, or client VPN users for a wired network).
     *
     */
    public function testGetNetworkMerakiAuthUsers()
    {
    }

    /**
     * Test case for updateNetworkMerakiAuthUser
     *
     * Update a user configured with Meraki Authentication (currently, 802.1X RADIUS, splash guest, and client VPN users can be updated).
     *
     */
    public function testUpdateNetworkMerakiAuthUser()
    {
    }
}
