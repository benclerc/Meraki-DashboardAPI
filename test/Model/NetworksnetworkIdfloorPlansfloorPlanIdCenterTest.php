<?php
/**
 * NetworksnetworkIdfloorPlansfloorPlanIdCenterTest
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
 * Please update the test case below to test the model.
 */

namespace Swagger\Client;

/**
 * NetworksnetworkIdfloorPlansfloorPlanIdCenterTest Class Doc Comment
 *
 * @category    Class
 * @description The longitude and latitude of the center of your floor plan. If you want to change the geolocation data of your floor plan, either the &#39;center&#39; or two adjacent corners (e.g. &#39;topLeftCorner&#39; and &#39;bottomLeftCorner&#39;) must be specified. If &#39;center&#39; is specified, the floor plan is placed over that point with no rotation. If two adjacent corners are specified, the floor plan is rotated to line up with the two specified points. The aspect ratio of the floor plan&#39;s image is preserved regardless of which corners/center are specified. (This means if that more than two corners are specified, only two corners may be used to preserve the floor plan&#39;s aspect ratio.). No two points can have the same latitude, longitude pair.
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class NetworksnetworkIdfloorPlansfloorPlanIdCenterTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
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
     * Test "NetworksnetworkIdfloorPlansfloorPlanIdCenter"
     */
    public function testNetworksnetworkIdfloorPlansfloorPlanIdCenter()
    {
    }

    /**
     * Test attribute "lat"
     */
    public function testPropertyLat()
    {
    }

    /**
     * Test attribute "lng"
     */
    public function testPropertyLng()
    {
    }
}
