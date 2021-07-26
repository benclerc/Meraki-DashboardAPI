<?php
/**
 * SiteToSiteVpnApi
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
 * SiteToSiteVpnApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SiteToSiteVpnApi
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
     * Operation getNetworkApplianceVpnSiteToSiteVpn
     *
     * Return the site-to-site VPN settings of a network
     *
     * @param  string $network_id network_id (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function getNetworkApplianceVpnSiteToSiteVpn($network_id)
    {
        list($response) = $this->getNetworkApplianceVpnSiteToSiteVpnWithHttpInfo($network_id);
        return $response;
    }

    /**
     * Operation getNetworkApplianceVpnSiteToSiteVpnWithHttpInfo
     *
     * Return the site-to-site VPN settings of a network
     *
     * @param  string $network_id (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function getNetworkApplianceVpnSiteToSiteVpnWithHttpInfo($network_id)
    {
        $returnType = 'object';
        $request = $this->getNetworkApplianceVpnSiteToSiteVpnRequest($network_id);

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
     * Operation getNetworkApplianceVpnSiteToSiteVpnAsync
     *
     * Return the site-to-site VPN settings of a network
     *
     * @param  string $network_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getNetworkApplianceVpnSiteToSiteVpnAsync($network_id)
    {
        return $this->getNetworkApplianceVpnSiteToSiteVpnAsyncWithHttpInfo($network_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getNetworkApplianceVpnSiteToSiteVpnAsyncWithHttpInfo
     *
     * Return the site-to-site VPN settings of a network
     *
     * @param  string $network_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getNetworkApplianceVpnSiteToSiteVpnAsyncWithHttpInfo($network_id)
    {
        $returnType = 'object';
        $request = $this->getNetworkApplianceVpnSiteToSiteVpnRequest($network_id);

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
     * Create request for operation 'getNetworkApplianceVpnSiteToSiteVpn'
     *
     * @param  string $network_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getNetworkApplianceVpnSiteToSiteVpnRequest($network_id)
    {
        // verify the required parameter 'network_id' is set
        if ($network_id === null || (is_array($network_id) && count($network_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $network_id when calling getNetworkApplianceVpnSiteToSiteVpn'
            );
        }

        $resourcePath = '/networks/{networkId}/appliance/vpn/siteToSiteVpn';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($network_id !== null) {
            $resourcePath = str_replace(
                '{' . 'networkId' . '}',
                ObjectSerializer::toPathValue($network_id),
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
     * Operation updateNetworkApplianceVpnSiteToSiteVpn
     *
     * Update the site-to-site VPN settings of a network
     *
     * @param  string $network_id network_id (required)
     * @param  \Swagger\Client\Model\UpdateNetworkApplianceVpnSiteToSiteVpn $update_network_appliance_vpn_site_to_site_vpn update_network_appliance_vpn_site_to_site_vpn (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function updateNetworkApplianceVpnSiteToSiteVpn($network_id, $update_network_appliance_vpn_site_to_site_vpn)
    {
        list($response) = $this->updateNetworkApplianceVpnSiteToSiteVpnWithHttpInfo($network_id, $update_network_appliance_vpn_site_to_site_vpn);
        return $response;
    }

    /**
     * Operation updateNetworkApplianceVpnSiteToSiteVpnWithHttpInfo
     *
     * Update the site-to-site VPN settings of a network
     *
     * @param  string $network_id (required)
     * @param  \Swagger\Client\Model\UpdateNetworkApplianceVpnSiteToSiteVpn $update_network_appliance_vpn_site_to_site_vpn (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateNetworkApplianceVpnSiteToSiteVpnWithHttpInfo($network_id, $update_network_appliance_vpn_site_to_site_vpn)
    {
        $returnType = 'object';
        $request = $this->updateNetworkApplianceVpnSiteToSiteVpnRequest($network_id, $update_network_appliance_vpn_site_to_site_vpn);

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
     * Operation updateNetworkApplianceVpnSiteToSiteVpnAsync
     *
     * Update the site-to-site VPN settings of a network
     *
     * @param  string $network_id (required)
     * @param  \Swagger\Client\Model\UpdateNetworkApplianceVpnSiteToSiteVpn $update_network_appliance_vpn_site_to_site_vpn (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateNetworkApplianceVpnSiteToSiteVpnAsync($network_id, $update_network_appliance_vpn_site_to_site_vpn)
    {
        return $this->updateNetworkApplianceVpnSiteToSiteVpnAsyncWithHttpInfo($network_id, $update_network_appliance_vpn_site_to_site_vpn)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateNetworkApplianceVpnSiteToSiteVpnAsyncWithHttpInfo
     *
     * Update the site-to-site VPN settings of a network
     *
     * @param  string $network_id (required)
     * @param  \Swagger\Client\Model\UpdateNetworkApplianceVpnSiteToSiteVpn $update_network_appliance_vpn_site_to_site_vpn (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateNetworkApplianceVpnSiteToSiteVpnAsyncWithHttpInfo($network_id, $update_network_appliance_vpn_site_to_site_vpn)
    {
        $returnType = 'object';
        $request = $this->updateNetworkApplianceVpnSiteToSiteVpnRequest($network_id, $update_network_appliance_vpn_site_to_site_vpn);

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
     * Create request for operation 'updateNetworkApplianceVpnSiteToSiteVpn'
     *
     * @param  string $network_id (required)
     * @param  \Swagger\Client\Model\UpdateNetworkApplianceVpnSiteToSiteVpn $update_network_appliance_vpn_site_to_site_vpn (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateNetworkApplianceVpnSiteToSiteVpnRequest($network_id, $update_network_appliance_vpn_site_to_site_vpn)
    {
        // verify the required parameter 'network_id' is set
        if ($network_id === null || (is_array($network_id) && count($network_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $network_id when calling updateNetworkApplianceVpnSiteToSiteVpn'
            );
        }
        // verify the required parameter 'update_network_appliance_vpn_site_to_site_vpn' is set
        if ($update_network_appliance_vpn_site_to_site_vpn === null || (is_array($update_network_appliance_vpn_site_to_site_vpn) && count($update_network_appliance_vpn_site_to_site_vpn) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $update_network_appliance_vpn_site_to_site_vpn when calling updateNetworkApplianceVpnSiteToSiteVpn'
            );
        }

        $resourcePath = '/networks/{networkId}/appliance/vpn/siteToSiteVpn';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($network_id !== null) {
            $resourcePath = str_replace(
                '{' . 'networkId' . '}',
                ObjectSerializer::toPathValue($network_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($update_network_appliance_vpn_site_to_site_vpn)) {
            $_tempBody = $update_network_appliance_vpn_site_to_site_vpn;
        }

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
            'PUT',
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
