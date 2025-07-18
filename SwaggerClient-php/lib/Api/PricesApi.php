<?php
/**
 * PricesApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Genba Digital Distribution API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.2
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
 * PricesApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PricesApi
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
     * Operation pricesGetPricesAsync
     *
     * Gets a collection of prices
     *
     * @param  string $authorization Access token from AAD. Should start with &#39;Bearer &#39;. (required)
     * @param  string $continuationtoken A continuation token returned in an earlier response (optional)
     * @param  string $etailerid The affiliated eTailer for which you wish to retrieve the product list (optional)
     * @param  string $productSku The productid which you wish to retrieve the price list
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\PricesResponse
     */
    public function pricesGetPricesAsync($authorization, $continuationtoken = null, $etailerid = null, $productSku = null)
    {
        list($response) = $this->pricesGetPricesAsyncWithHttpInfo($authorization, $continuationtoken, $etailerid, $productSku);
        return $response;
    }

    /**
     * Operation pricesGetPricesAsyncWithHttpInfo
     *
     * Gets a collection of prices
     *
     * @param  string $authorization Access token from AAD. Should start with &#39;Bearer &#39;. (required)
     * @param  string $continuationtoken A continuation token returned in an earlier response (optional)
     * @param  string $etailerid The affiliated eTailer for which you wish to retrieve the product list (optional)
     * @param  string $productSku The productid which you wish to retrieve the price list
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\PricesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function pricesGetPricesAsyncWithHttpInfo($authorization, $continuationtoken = null, $etailerid = null, $productSku = null)
    {
        $returnType = '\Swagger\Client\Model\PricesResponse';
        $request = $this->pricesGetPricesAsyncRequest($authorization, $continuationtoken, $etailerid, $productSku);

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
                        '\Swagger\Client\Model\PricesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\ErrorResponseBody',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\ErrorResponseBody',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\ErrorResponseBody',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation pricesGetPricesAsyncAsync
     *
     * Gets a collection of prices
     *
     * @param  string $authorization Access token from AAD. Should start with &#39;Bearer &#39;. (required)
     * @param  string $continuationtoken A continuation token returned in an earlier response (optional)
     * @param  string $etailerid The affiliated eTailer for which you wish to retrieve the product list (optional)
     * @param  string $productSku The productid which you wish to retrieve the price list
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function pricesGetPricesAsyncAsync($authorization, $continuationtoken = null, $etailerid = null, $productSku = null)
    {
        return $this->pricesGetPricesAsyncAsyncWithHttpInfo($authorization, $continuationtoken, $etailerid, $productSku)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation pricesGetPricesAsyncAsyncWithHttpInfo
     *
     * Gets a collection of prices
     *
     * @param  string $authorization Access token from AAD. Should start with &#39;Bearer &#39;. (required)
     * @param  string $continuationtoken A continuation token returned in an earlier response (optional)
     * @param  string $etailerid The affiliated eTailer for which you wish to retrieve the product list (optional)
     * @param  string $productSku The productid which you wish to retrieve the price list
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function pricesGetPricesAsyncAsyncWithHttpInfo($authorization, $continuationtoken = null, $etailerid = null, $productSku = null)
    {
        $returnType = '\Swagger\Client\Model\PricesResponse';
        $request = $this->pricesGetPricesAsyncRequest($authorization, $continuationtoken, $etailerid, $productSku);

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
     * Create request for operation 'pricesGetPricesAsync'
     *
     * @param  string $authorization Access token from AAD. Should start with &#39;Bearer &#39;. (required)
     * @param  string $continuationtoken A continuation token returned in an earlier response (optional)
     * @param  string $etailerid The affiliated eTailer for which you wish to retrieve the product list (optional)
     * @param  string $productSku The productid which you wish to retrieve the price list
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function pricesGetPricesAsyncRequest($authorization, $continuationtoken = null, $etailerid = null, $productSku = null)
    {
        // verify the required parameter 'authorization' is set
        if ($authorization === null || (is_array($authorization) && count($authorization) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $authorization when calling pricesGetPricesAsync'
            );
        }

        $resourcePath = '/api/v4-0/prices';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($continuationtoken !== null) {
            $queryParams['continuationtoken'] = ObjectSerializer::toQueryValue($continuationtoken);
        }
        // query params
        if ($etailerid !== null) {
            $queryParams['etailerid'] = ObjectSerializer::toQueryValue($etailerid);
        }
        // header params
        if ($authorization !== null) {
            $headerParams['x-api-key'] = ObjectSerializer::toHeaderValue($authorization);
        }
        //products params
        if($productSku !== null) {
            $queryParams['sku'] = ObjectSerializer::toQueryValue($productSku);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/json'],
                []
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

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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

