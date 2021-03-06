<?php
/**
 * OnboardingApi
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
 * OnboardingApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OnboardingApi
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
     * Operation getOrganizationCameraOnboardingStatuses
     *
     * Fetch onboarding status of cameras
     *
     * @param  string $organization_id organization_id (required)
     * @param  string[] $serials A list of serial numbers. The returned cameras will be filtered to only include these serials. (optional)
     * @param  string[] $network_ids A list of network IDs. The returned cameras will be filtered to only include these networks. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function getOrganizationCameraOnboardingStatuses($organization_id, $serials = null, $network_ids = null)
    {
        list($response) = $this->getOrganizationCameraOnboardingStatusesWithHttpInfo($organization_id, $serials, $network_ids);
        return $response;
    }

    /**
     * Operation getOrganizationCameraOnboardingStatusesWithHttpInfo
     *
     * Fetch onboarding status of cameras
     *
     * @param  string $organization_id (required)
     * @param  string[] $serials A list of serial numbers. The returned cameras will be filtered to only include these serials. (optional)
     * @param  string[] $network_ids A list of network IDs. The returned cameras will be filtered to only include these networks. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOrganizationCameraOnboardingStatusesWithHttpInfo($organization_id, $serials = null, $network_ids = null)
    {
        $returnType = 'object';
        $request = $this->getOrganizationCameraOnboardingStatusesRequest($organization_id, $serials, $network_ids);

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
     * Operation getOrganizationCameraOnboardingStatusesAsync
     *
     * Fetch onboarding status of cameras
     *
     * @param  string $organization_id (required)
     * @param  string[] $serials A list of serial numbers. The returned cameras will be filtered to only include these serials. (optional)
     * @param  string[] $network_ids A list of network IDs. The returned cameras will be filtered to only include these networks. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrganizationCameraOnboardingStatusesAsync($organization_id, $serials = null, $network_ids = null)
    {
        return $this->getOrganizationCameraOnboardingStatusesAsyncWithHttpInfo($organization_id, $serials, $network_ids)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOrganizationCameraOnboardingStatusesAsyncWithHttpInfo
     *
     * Fetch onboarding status of cameras
     *
     * @param  string $organization_id (required)
     * @param  string[] $serials A list of serial numbers. The returned cameras will be filtered to only include these serials. (optional)
     * @param  string[] $network_ids A list of network IDs. The returned cameras will be filtered to only include these networks. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrganizationCameraOnboardingStatusesAsyncWithHttpInfo($organization_id, $serials = null, $network_ids = null)
    {
        $returnType = 'object';
        $request = $this->getOrganizationCameraOnboardingStatusesRequest($organization_id, $serials, $network_ids);

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
     * Create request for operation 'getOrganizationCameraOnboardingStatuses'
     *
     * @param  string $organization_id (required)
     * @param  string[] $serials A list of serial numbers. The returned cameras will be filtered to only include these serials. (optional)
     * @param  string[] $network_ids A list of network IDs. The returned cameras will be filtered to only include these networks. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getOrganizationCameraOnboardingStatusesRequest($organization_id, $serials = null, $network_ids = null)
    {
        // verify the required parameter 'organization_id' is set
        if ($organization_id === null || (is_array($organization_id) && count($organization_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organization_id when calling getOrganizationCameraOnboardingStatuses'
            );
        }

        $resourcePath = '/organizations/{organizationId}/camera/onboarding/statuses';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($serials)) {
            $queryParams['serials'] = $serials;
        } else
        if ($serials !== null) {
            $queryParams['serials'] = ObjectSerializer::toQueryValue($serials);
        }
        // query params
        if (is_array($network_ids)) {
            $queryParams['networkIds'] = $network_ids;
        } else
        if ($network_ids !== null) {
            $queryParams['networkIds'] = ObjectSerializer::toQueryValue($network_ids);
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
     * Operation updateOrganizationCameraOnboardingStatuses
     *
     * Notify that credential handoff to camera has completed
     *
     * @param  string $organization_id organization_id (required)
     * @param  \Swagger\Client\Model\UpdateOrganizationCameraOnboardingStatuses $update_organization_camera_onboarding_statuses update_organization_camera_onboarding_statuses (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function updateOrganizationCameraOnboardingStatuses($organization_id, $update_organization_camera_onboarding_statuses = null)
    {
        list($response) = $this->updateOrganizationCameraOnboardingStatusesWithHttpInfo($organization_id, $update_organization_camera_onboarding_statuses);
        return $response;
    }

    /**
     * Operation updateOrganizationCameraOnboardingStatusesWithHttpInfo
     *
     * Notify that credential handoff to camera has completed
     *
     * @param  string $organization_id (required)
     * @param  \Swagger\Client\Model\UpdateOrganizationCameraOnboardingStatuses $update_organization_camera_onboarding_statuses (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateOrganizationCameraOnboardingStatusesWithHttpInfo($organization_id, $update_organization_camera_onboarding_statuses = null)
    {
        $returnType = 'object';
        $request = $this->updateOrganizationCameraOnboardingStatusesRequest($organization_id, $update_organization_camera_onboarding_statuses);

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
     * Operation updateOrganizationCameraOnboardingStatusesAsync
     *
     * Notify that credential handoff to camera has completed
     *
     * @param  string $organization_id (required)
     * @param  \Swagger\Client\Model\UpdateOrganizationCameraOnboardingStatuses $update_organization_camera_onboarding_statuses (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateOrganizationCameraOnboardingStatusesAsync($organization_id, $update_organization_camera_onboarding_statuses = null)
    {
        return $this->updateOrganizationCameraOnboardingStatusesAsyncWithHttpInfo($organization_id, $update_organization_camera_onboarding_statuses)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateOrganizationCameraOnboardingStatusesAsyncWithHttpInfo
     *
     * Notify that credential handoff to camera has completed
     *
     * @param  string $organization_id (required)
     * @param  \Swagger\Client\Model\UpdateOrganizationCameraOnboardingStatuses $update_organization_camera_onboarding_statuses (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateOrganizationCameraOnboardingStatusesAsyncWithHttpInfo($organization_id, $update_organization_camera_onboarding_statuses = null)
    {
        $returnType = 'object';
        $request = $this->updateOrganizationCameraOnboardingStatusesRequest($organization_id, $update_organization_camera_onboarding_statuses);

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
     * Create request for operation 'updateOrganizationCameraOnboardingStatuses'
     *
     * @param  string $organization_id (required)
     * @param  \Swagger\Client\Model\UpdateOrganizationCameraOnboardingStatuses $update_organization_camera_onboarding_statuses (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateOrganizationCameraOnboardingStatusesRequest($organization_id, $update_organization_camera_onboarding_statuses = null)
    {
        // verify the required parameter 'organization_id' is set
        if ($organization_id === null || (is_array($organization_id) && count($organization_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organization_id when calling updateOrganizationCameraOnboardingStatuses'
            );
        }

        $resourcePath = '/organizations/{organizationId}/camera/onboarding/statuses';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


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
        if (isset($update_organization_camera_onboarding_statuses)) {
            $_tempBody = $update_organization_camera_onboarding_statuses;
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
