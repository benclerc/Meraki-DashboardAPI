<?php
/**
 * StatsApi
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
 * StatsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StatsApi
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
     * Operation getOrganizationApplianceVpnStats
     *
     * Show VPN history stat for networks in an organization
     *
     * @param  string $organization_id organization_id (required)
     * @param  int $per_page The number of entries per page returned. Acceptable range is 3 - 300. Default is 300. (optional)
     * @param  string $starting_after A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. (optional)
     * @param  string $ending_before A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. (optional)
     * @param  string[] $network_ids A list of Meraki network IDs to filter results to contain only specified networks. E.g.: networkIds[]&#x3D;N_12345678&amp;networkIds[]&#x3D;L_3456 (optional)
     * @param  string $t0 The beginning of the timespan for the data. The maximum lookback period is 31 days from today. (optional)
     * @param  string $t1 The end of the timespan for the data. t1 can be a maximum of 31 days after t0. (optional)
     * @param  float $timespan The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 1 day. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function getOrganizationApplianceVpnStats($organization_id, $per_page = null, $starting_after = null, $ending_before = null, $network_ids = null, $t0 = null, $t1 = null, $timespan = null)
    {
        list($response) = $this->getOrganizationApplianceVpnStatsWithHttpInfo($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $t0, $t1, $timespan);
        return $response;
    }

    /**
     * Operation getOrganizationApplianceVpnStatsWithHttpInfo
     *
     * Show VPN history stat for networks in an organization
     *
     * @param  string $organization_id (required)
     * @param  int $per_page The number of entries per page returned. Acceptable range is 3 - 300. Default is 300. (optional)
     * @param  string $starting_after A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. (optional)
     * @param  string $ending_before A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. (optional)
     * @param  string[] $network_ids A list of Meraki network IDs to filter results to contain only specified networks. E.g.: networkIds[]&#x3D;N_12345678&amp;networkIds[]&#x3D;L_3456 (optional)
     * @param  string $t0 The beginning of the timespan for the data. The maximum lookback period is 31 days from today. (optional)
     * @param  string $t1 The end of the timespan for the data. t1 can be a maximum of 31 days after t0. (optional)
     * @param  float $timespan The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 1 day. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOrganizationApplianceVpnStatsWithHttpInfo($organization_id, $per_page = null, $starting_after = null, $ending_before = null, $network_ids = null, $t0 = null, $t1 = null, $timespan = null)
    {
        $returnType = 'object';
        $request = $this->getOrganizationApplianceVpnStatsRequest($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $t0, $t1, $timespan);

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
     * Operation getOrganizationApplianceVpnStatsAsync
     *
     * Show VPN history stat for networks in an organization
     *
     * @param  string $organization_id (required)
     * @param  int $per_page The number of entries per page returned. Acceptable range is 3 - 300. Default is 300. (optional)
     * @param  string $starting_after A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. (optional)
     * @param  string $ending_before A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. (optional)
     * @param  string[] $network_ids A list of Meraki network IDs to filter results to contain only specified networks. E.g.: networkIds[]&#x3D;N_12345678&amp;networkIds[]&#x3D;L_3456 (optional)
     * @param  string $t0 The beginning of the timespan for the data. The maximum lookback period is 31 days from today. (optional)
     * @param  string $t1 The end of the timespan for the data. t1 can be a maximum of 31 days after t0. (optional)
     * @param  float $timespan The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 1 day. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrganizationApplianceVpnStatsAsync($organization_id, $per_page = null, $starting_after = null, $ending_before = null, $network_ids = null, $t0 = null, $t1 = null, $timespan = null)
    {
        return $this->getOrganizationApplianceVpnStatsAsyncWithHttpInfo($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $t0, $t1, $timespan)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOrganizationApplianceVpnStatsAsyncWithHttpInfo
     *
     * Show VPN history stat for networks in an organization
     *
     * @param  string $organization_id (required)
     * @param  int $per_page The number of entries per page returned. Acceptable range is 3 - 300. Default is 300. (optional)
     * @param  string $starting_after A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. (optional)
     * @param  string $ending_before A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. (optional)
     * @param  string[] $network_ids A list of Meraki network IDs to filter results to contain only specified networks. E.g.: networkIds[]&#x3D;N_12345678&amp;networkIds[]&#x3D;L_3456 (optional)
     * @param  string $t0 The beginning of the timespan for the data. The maximum lookback period is 31 days from today. (optional)
     * @param  string $t1 The end of the timespan for the data. t1 can be a maximum of 31 days after t0. (optional)
     * @param  float $timespan The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 1 day. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrganizationApplianceVpnStatsAsyncWithHttpInfo($organization_id, $per_page = null, $starting_after = null, $ending_before = null, $network_ids = null, $t0 = null, $t1 = null, $timespan = null)
    {
        $returnType = 'object';
        $request = $this->getOrganizationApplianceVpnStatsRequest($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $t0, $t1, $timespan);

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
     * Create request for operation 'getOrganizationApplianceVpnStats'
     *
     * @param  string $organization_id (required)
     * @param  int $per_page The number of entries per page returned. Acceptable range is 3 - 300. Default is 300. (optional)
     * @param  string $starting_after A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. (optional)
     * @param  string $ending_before A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. (optional)
     * @param  string[] $network_ids A list of Meraki network IDs to filter results to contain only specified networks. E.g.: networkIds[]&#x3D;N_12345678&amp;networkIds[]&#x3D;L_3456 (optional)
     * @param  string $t0 The beginning of the timespan for the data. The maximum lookback period is 31 days from today. (optional)
     * @param  string $t1 The end of the timespan for the data. t1 can be a maximum of 31 days after t0. (optional)
     * @param  float $timespan The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 1 day. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getOrganizationApplianceVpnStatsRequest($organization_id, $per_page = null, $starting_after = null, $ending_before = null, $network_ids = null, $t0 = null, $t1 = null, $timespan = null)
    {
        // verify the required parameter 'organization_id' is set
        if ($organization_id === null || (is_array($organization_id) && count($organization_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organization_id when calling getOrganizationApplianceVpnStats'
            );
        }

        $resourcePath = '/organizations/{organizationId}/appliance/vpn/stats';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($per_page !== null) {
            $queryParams['perPage'] = ObjectSerializer::toQueryValue($per_page);
        }
        // query params
        if ($starting_after !== null) {
            $queryParams['startingAfter'] = ObjectSerializer::toQueryValue($starting_after);
        }
        // query params
        if ($ending_before !== null) {
            $queryParams['endingBefore'] = ObjectSerializer::toQueryValue($ending_before);
        }
        // query params
        if (is_array($network_ids)) {
            $queryParams['networkIds'] = $network_ids;
        } else
        if ($network_ids !== null) {
            $queryParams['networkIds'] = ObjectSerializer::toQueryValue($network_ids);
        }
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

        // path params
        if ($organization_id !== null) {
            $resourcePath = str_replace(
                '{' . 'organizationId' . '}',
                ObjectSerializer::toPathValue($organization_id),
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
