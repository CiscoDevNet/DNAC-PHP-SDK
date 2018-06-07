<?php
/**
 * MiscApi
 * PHP version 5
 *
 * @category Class
 * @package  cisco\com\dnac\v1\api\client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Swagger
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace cisco\com\dnac\v1\api\client\api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use cisco\com\dnac\v1\api\client\ApiException;
use cisco\com\dnac\v1\api\client\Configuration;
use cisco\com\dnac\v1\api\client\HeaderSelector;
use cisco\com\dnac\v1\api\client\ObjectSerializer;

/**
 * MiscApi Class Doc Comment
 *
 * @category Class
 * @package  cisco\com\dnac\v1\api\client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MiscApi
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
     * Operation getSnmpProperty
     *
     * Retrieves SNMP properties
     *
     *
     * @throws \cisco\com\dnac\v1\api\client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \cisco\com\dnac\v1\api\client\model\SystemPropertyListResult
     */
    public function getSnmpProperty()
    {
        list($response) = $this->getSnmpPropertyWithHttpInfo();
        return $response;
    }

    /**
     * Operation getSnmpPropertyWithHttpInfo
     *
     * Retrieves SNMP properties
     *
     *
     * @throws \cisco\com\dnac\v1\api\client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \cisco\com\dnac\v1\api\client\model\SystemPropertyListResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSnmpPropertyWithHttpInfo()
    {
        $returnType = '\cisco\com\dnac\v1\api\client\model\SystemPropertyListResult';
        $request = $this->getSnmpPropertyRequest();

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
                        '\cisco\com\dnac\v1\api\client\model\SystemPropertyListResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getSnmpPropertyAsync
     *
     * Retrieves SNMP properties
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSnmpPropertyAsync()
    {
        return $this->getSnmpPropertyAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getSnmpPropertyAsyncWithHttpInfo
     *
     * Retrieves SNMP properties
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSnmpPropertyAsyncWithHttpInfo()
    {
        $returnType = '\cisco\com\dnac\v1\api\client\model\SystemPropertyListResult';
        $request = $this->getSnmpPropertyRequest();

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
     * Create request for operation 'getSnmpProperty'
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getSnmpPropertyRequest()
    {

        $resourcePath = '/api/v1/snmp-property';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



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
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
     * Operation postAuthToken
     *
     * Generate Token
     *
     * @param  \cisco\com\dnac\v1\api\client\model\GenerateTokenRequest $request request (required)
     * @param  string $authorization &lt;username:password&gt; of 64 based encoded string (required)
     *
     * @throws \cisco\com\dnac\v1\api\client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \cisco\com\dnac\v1\api\client\model\GenerateTokenResponse
     */
    public function postAuthToken($request, $authorization)
    {
        list($response) = $this->postAuthTokenWithHttpInfo($request, $authorization);
        return $response;
    }

    /**
     * Operation postAuthTokenWithHttpInfo
     *
     * Generate Token
     *
     * @param  \cisco\com\dnac\v1\api\client\model\GenerateTokenRequest $request request (required)
     * @param  string $authorization &lt;username:password&gt; of 64 based encoded string (required)
     *
     * @throws \cisco\com\dnac\v1\api\client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \cisco\com\dnac\v1\api\client\model\GenerateTokenResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function postAuthTokenWithHttpInfo($request, $authorization)
    {
        $returnType = '\cisco\com\dnac\v1\api\client\model\GenerateTokenResponse';
        $request = $this->postAuthTokenRequest($request, $authorization);

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
                        '\cisco\com\dnac\v1\api\client\model\GenerateTokenResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation postAuthTokenAsync
     *
     * Generate Token
     *
     * @param  \cisco\com\dnac\v1\api\client\model\GenerateTokenRequest $request request (required)
     * @param  string $authorization &lt;username:password&gt; of 64 based encoded string (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postAuthTokenAsync($request, $authorization)
    {
        return $this->postAuthTokenAsyncWithHttpInfo($request, $authorization)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation postAuthTokenAsyncWithHttpInfo
     *
     * Generate Token
     *
     * @param  \cisco\com\dnac\v1\api\client\model\GenerateTokenRequest $request request (required)
     * @param  string $authorization &lt;username:password&gt; of 64 based encoded string (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postAuthTokenAsyncWithHttpInfo($request, $authorization)
    {
        $returnType = '\cisco\com\dnac\v1\api\client\model\GenerateTokenResponse';
        $request = $this->postAuthTokenRequest($request, $authorization);

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
     * Create request for operation 'postAuthToken'
     *
     * @param  \cisco\com\dnac\v1\api\client\model\GenerateTokenRequest $request request (required)
     * @param  string $authorization &lt;username:password&gt; of 64 based encoded string (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postAuthTokenRequest($request, $authorization)
    {
        // verify the required parameter 'request' is set
        if ($request === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $request when calling postAuthToken'
            );
        }
        // verify the required parameter 'authorization' is set
        if ($authorization === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $authorization when calling postAuthToken'
            );
        }

        $resourcePath = '/api/system/v1/auth/token';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($authorization !== null) {
            $headerParams['Authorization'] = ObjectSerializer::toHeaderValue($authorization);
        }


        // body params
        $_tempBody = null;
        if (isset($request)) {
            $_tempBody = $request;
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
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation postFlowAnalysis
     *
     * Initiates a new flow analysis
     *
     * @param  \cisco\com\dnac\v1\api\client\model\FlowAnalysisRequest $request request (required)
     *
     * @throws \cisco\com\dnac\v1\api\client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \cisco\com\dnac\v1\api\client\model\FlowAnalysisRequestResultOutput
     */
    public function postFlowAnalysis($request)
    {
        list($response) = $this->postFlowAnalysisWithHttpInfo($request);
        return $response;
    }

    /**
     * Operation postFlowAnalysisWithHttpInfo
     *
     * Initiates a new flow analysis
     *
     * @param  \cisco\com\dnac\v1\api\client\model\FlowAnalysisRequest $request request (required)
     *
     * @throws \cisco\com\dnac\v1\api\client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \cisco\com\dnac\v1\api\client\model\FlowAnalysisRequestResultOutput, HTTP status code, HTTP response headers (array of strings)
     */
    public function postFlowAnalysisWithHttpInfo($request)
    {
        $returnType = '\cisco\com\dnac\v1\api\client\model\FlowAnalysisRequestResultOutput';
        $request = $this->postFlowAnalysisRequest($request);

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
                        '\cisco\com\dnac\v1\api\client\model\FlowAnalysisRequestResultOutput',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation postFlowAnalysisAsync
     *
     * Initiates a new flow analysis
     *
     * @param  \cisco\com\dnac\v1\api\client\model\FlowAnalysisRequest $request request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postFlowAnalysisAsync($request)
    {
        return $this->postFlowAnalysisAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation postFlowAnalysisAsyncWithHttpInfo
     *
     * Initiates a new flow analysis
     *
     * @param  \cisco\com\dnac\v1\api\client\model\FlowAnalysisRequest $request request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postFlowAnalysisAsyncWithHttpInfo($request)
    {
        $returnType = '\cisco\com\dnac\v1\api\client\model\FlowAnalysisRequestResultOutput';
        $request = $this->postFlowAnalysisRequest($request);

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
     * Create request for operation 'postFlowAnalysis'
     *
     * @param  \cisco\com\dnac\v1\api\client\model\FlowAnalysisRequest $request request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postFlowAnalysisRequest($request)
    {
        // verify the required parameter 'request' is set
        if ($request === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $request when calling postFlowAnalysis'
            );
        }

        $resourcePath = '/api/v1/flow-analysis';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($request)) {
            $_tempBody = $request;
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
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation postSnmpProperty
     *
     * Creates or updates SNMP properties
     *
     * @param  \cisco\com\dnac\v1\api\client\model\SystemPropertyNameAndIntValueDTO $request request (required)
     *
     * @throws \cisco\com\dnac\v1\api\client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \cisco\com\dnac\v1\api\client\model\TaskIdResult
     */
    public function postSnmpProperty($request)
    {
        list($response) = $this->postSnmpPropertyWithHttpInfo($request);
        return $response;
    }

    /**
     * Operation postSnmpPropertyWithHttpInfo
     *
     * Creates or updates SNMP properties
     *
     * @param  \cisco\com\dnac\v1\api\client\model\SystemPropertyNameAndIntValueDTO $request request (required)
     *
     * @throws \cisco\com\dnac\v1\api\client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \cisco\com\dnac\v1\api\client\model\TaskIdResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function postSnmpPropertyWithHttpInfo($request)
    {
        $returnType = '\cisco\com\dnac\v1\api\client\model\TaskIdResult';
        $request = $this->postSnmpPropertyRequest($request);

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
                        '\cisco\com\dnac\v1\api\client\model\TaskIdResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation postSnmpPropertyAsync
     *
     * Creates or updates SNMP properties
     *
     * @param  \cisco\com\dnac\v1\api\client\model\SystemPropertyNameAndIntValueDTO $request request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postSnmpPropertyAsync($request)
    {
        return $this->postSnmpPropertyAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation postSnmpPropertyAsyncWithHttpInfo
     *
     * Creates or updates SNMP properties
     *
     * @param  \cisco\com\dnac\v1\api\client\model\SystemPropertyNameAndIntValueDTO $request request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postSnmpPropertyAsyncWithHttpInfo($request)
    {
        $returnType = '\cisco\com\dnac\v1\api\client\model\TaskIdResult';
        $request = $this->postSnmpPropertyRequest($request);

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
     * Create request for operation 'postSnmpProperty'
     *
     * @param  \cisco\com\dnac\v1\api\client\model\SystemPropertyNameAndIntValueDTO $request request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postSnmpPropertyRequest($request)
    {
        // verify the required parameter 'request' is set
        if ($request === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $request when calling postSnmpProperty'
            );
        }

        $resourcePath = '/api/v1/snmp-property';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($request)) {
            $_tempBody = $request;
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
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
            'POST',
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
