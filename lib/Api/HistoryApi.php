<?php
/**
 * HistoryApi
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

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * HistoryApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HistoryApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getDeviceCameraAnalyticsZoneHistory
     *
     * Return historical records for analytic zones
     *
     * @param  string $serial serial (required)
     * @param  string $zone_id zone_id (required)
     * @param  string $t0 The beginning of the timespan for the data. The maximum lookback period is 365 days from today. (optional)
     * @param  string $t1 The end of the timespan for the data. t1 can be a maximum of 14 hours after t0. (optional)
     * @param  float $timespan The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 14 hours. The default is 1 hour. (optional)
     * @param  int $resolution The time resolution in seconds for returned data. The valid resolutions are: 60. The default is 60. (optional)
     * @param  string $object_type [optional] The object type for which analytics will be retrieved. The default object type is person. The available types are [person, vehicle]. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function getDeviceCameraAnalyticsZoneHistory($serial, $zone_id, $t0 = null, $t1 = null, $timespan = null, $resolution = null, $object_type = null)
    {
        list($response) = $this->getDeviceCameraAnalyticsZoneHistoryWithHttpInfo($serial, $zone_id, $t0, $t1, $timespan, $resolution, $object_type);
        return $response;
    }

    /**
     * Operation getDeviceCameraAnalyticsZoneHistoryWithHttpInfo
     *
     * Return historical records for analytic zones
     *
     * @param  string $serial (required)
     * @param  string $zone_id (required)
     * @param  string $t0 The beginning of the timespan for the data. The maximum lookback period is 365 days from today. (optional)
     * @param  string $t1 The end of the timespan for the data. t1 can be a maximum of 14 hours after t0. (optional)
     * @param  float $timespan The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 14 hours. The default is 1 hour. (optional)
     * @param  int $resolution The time resolution in seconds for returned data. The valid resolutions are: 60. The default is 60. (optional)
     * @param  string $object_type [optional] The object type for which analytics will be retrieved. The default object type is person. The available types are [person, vehicle]. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function getDeviceCameraAnalyticsZoneHistoryWithHttpInfo($serial, $zone_id, $t0 = null, $t1 = null, $timespan = null, $resolution = null, $object_type = null)
    {
        $returnType = 'object';
        $request = $this->getDeviceCameraAnalyticsZoneHistoryRequest($serial, $zone_id, $t0, $t1, $timespan, $resolution, $object_type);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getDeviceCameraAnalyticsZoneHistoryAsync
     *
     * Return historical records for analytic zones
     *
     * @param  string $serial (required)
     * @param  string $zone_id (required)
     * @param  string $t0 The beginning of the timespan for the data. The maximum lookback period is 365 days from today. (optional)
     * @param  string $t1 The end of the timespan for the data. t1 can be a maximum of 14 hours after t0. (optional)
     * @param  float $timespan The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 14 hours. The default is 1 hour. (optional)
     * @param  int $resolution The time resolution in seconds for returned data. The valid resolutions are: 60. The default is 60. (optional)
     * @param  string $object_type [optional] The object type for which analytics will be retrieved. The default object type is person. The available types are [person, vehicle]. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDeviceCameraAnalyticsZoneHistoryAsync($serial, $zone_id, $t0 = null, $t1 = null, $timespan = null, $resolution = null, $object_type = null)
    {
        return $this->getDeviceCameraAnalyticsZoneHistoryAsyncWithHttpInfo($serial, $zone_id, $t0, $t1, $timespan, $resolution, $object_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getDeviceCameraAnalyticsZoneHistoryAsyncWithHttpInfo
     *
     * Return historical records for analytic zones
     *
     * @param  string $serial (required)
     * @param  string $zone_id (required)
     * @param  string $t0 The beginning of the timespan for the data. The maximum lookback period is 365 days from today. (optional)
     * @param  string $t1 The end of the timespan for the data. t1 can be a maximum of 14 hours after t0. (optional)
     * @param  float $timespan The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 14 hours. The default is 1 hour. (optional)
     * @param  int $resolution The time resolution in seconds for returned data. The valid resolutions are: 60. The default is 60. (optional)
     * @param  string $object_type [optional] The object type for which analytics will be retrieved. The default object type is person. The available types are [person, vehicle]. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDeviceCameraAnalyticsZoneHistoryAsyncWithHttpInfo($serial, $zone_id, $t0 = null, $t1 = null, $timespan = null, $resolution = null, $object_type = null)
    {
        $returnType = 'object';
        $request = $this->getDeviceCameraAnalyticsZoneHistoryRequest($serial, $zone_id, $t0, $t1, $timespan, $resolution, $object_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getDeviceCameraAnalyticsZoneHistory'
     *
     * @param  string $serial (required)
     * @param  string $zone_id (required)
     * @param  string $t0 The beginning of the timespan for the data. The maximum lookback period is 365 days from today. (optional)
     * @param  string $t1 The end of the timespan for the data. t1 can be a maximum of 14 hours after t0. (optional)
     * @param  float $timespan The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 14 hours. The default is 1 hour. (optional)
     * @param  int $resolution The time resolution in seconds for returned data. The valid resolutions are: 60. The default is 60. (optional)
     * @param  string $object_type [optional] The object type for which analytics will be retrieved. The default object type is person. The available types are [person, vehicle]. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getDeviceCameraAnalyticsZoneHistoryRequest($serial, $zone_id, $t0 = null, $t1 = null, $timespan = null, $resolution = null, $object_type = null)
    {
        // verify the required parameter 'serial' is set
        if ($serial === null || (is_array($serial) && count($serial) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $serial when calling getDeviceCameraAnalyticsZoneHistory'
            );
        }
        // verify the required parameter 'zone_id' is set
        if ($zone_id === null || (is_array($zone_id) && count($zone_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $zone_id when calling getDeviceCameraAnalyticsZoneHistory'
            );
        }

        $resourcePath = '/devices/{serial}/camera/analytics/zones/{zoneId}/history';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($t0 !== null) {
            $queryParams['t0'] = ObjectSerializer::toQueryValue($t0);
        }
        // query params
        if ($t1 !== null) {
            $queryParams['t1'] = ObjectSerializer::toQueryValue($t1);
        }
        // query params
        if ($timespan !== null) {
            $queryParams['timespan'] = ObjectSerializer::toQueryValue($timespan);
        }
        // query params
        if ($resolution !== null) {
            $queryParams['resolution'] = ObjectSerializer::toQueryValue($resolution);
        }
        // query params
        if ($object_type !== null) {
            $queryParams['objectType'] = ObjectSerializer::toQueryValue($object_type);
        }

        // path params
        if ($serial !== null) {
            $resourcePath = str_replace(
                '{' . 'serial' . '}',
                ObjectSerializer::toPathValue($serial),
                $resourcePath
            );
        }
        // path params
        if ($zone_id !== null) {
            $resourcePath = str_replace(
                '{' . 'zoneId' . '}',
                ObjectSerializer::toPathValue($zone_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-Cisco-Meraki-API-Key');
        if ($apiKey !== null) {
            $headers['X-Cisco-Meraki-API-Key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
