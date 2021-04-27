<?php
/**
 * SplashApi
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
 * SplashApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SplashApi
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
     * Operation getNetworkWirelessSsidSplashSettings
     *
     * Display the splash page settings for the given SSID
     *
     * @param  string $network_id network_id (required)
     * @param  string $number number (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function getNetworkWirelessSsidSplashSettings($network_id, $number)
    {
        list($response) = $this->getNetworkWirelessSsidSplashSettingsWithHttpInfo($network_id, $number);
        return $response;
    }

    /**
     * Operation getNetworkWirelessSsidSplashSettingsWithHttpInfo
     *
     * Display the splash page settings for the given SSID
     *
     * @param  string $network_id (required)
     * @param  string $number (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function getNetworkWirelessSsidSplashSettingsWithHttpInfo($network_id, $number)
    {
        $returnType = 'object';
        $request = $this->getNetworkWirelessSsidSplashSettingsRequest($network_id, $number);

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
     * Operation getNetworkWirelessSsidSplashSettingsAsync
     *
     * Display the splash page settings for the given SSID
     *
     * @param  string $network_id (required)
     * @param  string $number (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getNetworkWirelessSsidSplashSettingsAsync($network_id, $number)
    {
        return $this->getNetworkWirelessSsidSplashSettingsAsyncWithHttpInfo($network_id, $number)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getNetworkWirelessSsidSplashSettingsAsyncWithHttpInfo
     *
     * Display the splash page settings for the given SSID
     *
     * @param  string $network_id (required)
     * @param  string $number (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getNetworkWirelessSsidSplashSettingsAsyncWithHttpInfo($network_id, $number)
    {
        $returnType = 'object';
        $request = $this->getNetworkWirelessSsidSplashSettingsRequest($network_id, $number);

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
     * Create request for operation 'getNetworkWirelessSsidSplashSettings'
     *
     * @param  string $network_id (required)
     * @param  string $number (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getNetworkWirelessSsidSplashSettingsRequest($network_id, $number)
    {
        // verify the required parameter 'network_id' is set
        if ($network_id === null || (is_array($network_id) && count($network_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $network_id when calling getNetworkWirelessSsidSplashSettings'
            );
        }
        // verify the required parameter 'number' is set
        if ($number === null || (is_array($number) && count($number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $number when calling getNetworkWirelessSsidSplashSettings'
            );
        }

        $resourcePath = '/networks/{networkId}/wireless/ssids/{number}/splash/settings';
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
        // path params
        if ($number !== null) {
            $resourcePath = str_replace(
                '{' . 'number' . '}',
                ObjectSerializer::toPathValue($number),
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
     * Operation updateNetworkWirelessSsidSplashSettings
     *
     * Modify the splash page settings for the given SSID
     *
     * @param  string $network_id network_id (required)
     * @param  string $number number (required)
     * @param  \Swagger\Client\Model\UpdateNetworkWirelessSsidSplashSettings $update_network_wireless_ssid_splash_settings update_network_wireless_ssid_splash_settings (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function updateNetworkWirelessSsidSplashSettings($network_id, $number, $update_network_wireless_ssid_splash_settings = null)
    {
        list($response) = $this->updateNetworkWirelessSsidSplashSettingsWithHttpInfo($network_id, $number, $update_network_wireless_ssid_splash_settings);
        return $response;
    }

    /**
     * Operation updateNetworkWirelessSsidSplashSettingsWithHttpInfo
     *
     * Modify the splash page settings for the given SSID
     *
     * @param  string $network_id (required)
     * @param  string $number (required)
     * @param  \Swagger\Client\Model\UpdateNetworkWirelessSsidSplashSettings $update_network_wireless_ssid_splash_settings (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateNetworkWirelessSsidSplashSettingsWithHttpInfo($network_id, $number, $update_network_wireless_ssid_splash_settings = null)
    {
        $returnType = 'object';
        $request = $this->updateNetworkWirelessSsidSplashSettingsRequest($network_id, $number, $update_network_wireless_ssid_splash_settings);

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
     * Operation updateNetworkWirelessSsidSplashSettingsAsync
     *
     * Modify the splash page settings for the given SSID
     *
     * @param  string $network_id (required)
     * @param  string $number (required)
     * @param  \Swagger\Client\Model\UpdateNetworkWirelessSsidSplashSettings $update_network_wireless_ssid_splash_settings (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateNetworkWirelessSsidSplashSettingsAsync($network_id, $number, $update_network_wireless_ssid_splash_settings = null)
    {
        return $this->updateNetworkWirelessSsidSplashSettingsAsyncWithHttpInfo($network_id, $number, $update_network_wireless_ssid_splash_settings)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateNetworkWirelessSsidSplashSettingsAsyncWithHttpInfo
     *
     * Modify the splash page settings for the given SSID
     *
     * @param  string $network_id (required)
     * @param  string $number (required)
     * @param  \Swagger\Client\Model\UpdateNetworkWirelessSsidSplashSettings $update_network_wireless_ssid_splash_settings (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateNetworkWirelessSsidSplashSettingsAsyncWithHttpInfo($network_id, $number, $update_network_wireless_ssid_splash_settings = null)
    {
        $returnType = 'object';
        $request = $this->updateNetworkWirelessSsidSplashSettingsRequest($network_id, $number, $update_network_wireless_ssid_splash_settings);

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
     * Create request for operation 'updateNetworkWirelessSsidSplashSettings'
     *
     * @param  string $network_id (required)
     * @param  string $number (required)
     * @param  \Swagger\Client\Model\UpdateNetworkWirelessSsidSplashSettings $update_network_wireless_ssid_splash_settings (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateNetworkWirelessSsidSplashSettingsRequest($network_id, $number, $update_network_wireless_ssid_splash_settings = null)
    {
        // verify the required parameter 'network_id' is set
        if ($network_id === null || (is_array($network_id) && count($network_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $network_id when calling updateNetworkWirelessSsidSplashSettings'
            );
        }
        // verify the required parameter 'number' is set
        if ($number === null || (is_array($number) && count($number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $number when calling updateNetworkWirelessSsidSplashSettings'
            );
        }

        $resourcePath = '/networks/{networkId}/wireless/ssids/{number}/splash/settings';
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
        // path params
        if ($number !== null) {
            $resourcePath = str_replace(
                '{' . 'number' . '}',
                ObjectSerializer::toPathValue($number),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($update_network_wireless_ssid_splash_settings)) {
            $_tempBody = $update_network_wireless_ssid_splash_settings;
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
