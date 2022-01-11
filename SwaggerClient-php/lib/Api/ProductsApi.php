<?php
/**
 * ProductsApi
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
 * ProductsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductsApi
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
     * Operation productsGetProductAsync
     *
     * Return information about a product
     *
     * @param  string $sku The SKU of the product which you want to retrieve (required)
     * @param  string $authorization Access token from AAD. Should start with &#39;Bearer &#39;. (required)
     * @param  string $etailerid The affiliated eTailer for which you wish to retrieve the product (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\ProductResponse
     */
    public function productsGetProductAsync($sku, $authorization, $etailerid = null)
    {
        list($response) = $this->productsGetProductAsyncWithHttpInfo($sku, $authorization, $etailerid);
        return $response;
    }

    /**
     * Operation productsGetProductAsyncWithHttpInfo
     *
     * Return information about a product
     *
     * @param  string $sku The SKU of the product which you want to retrieve (required)
     * @param  string $authorization Access token from AAD. Should start with &#39;Bearer &#39;. (required)
     * @param  string $etailerid The affiliated eTailer for which you wish to retrieve the product (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\ProductResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function productsGetProductAsyncWithHttpInfo($sku, $authorization, $etailerid = null)
    {
        $returnType = '\Swagger\Client\Model\ProductResponse';
        $request = $this->productsGetProductAsyncRequest($sku, $authorization, $etailerid);

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
                        '\Swagger\Client\Model\ProductResponse',
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
                case 404:
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
     * Operation productsGetProductAsyncAsync
     *
     * Return information about a product
     *
     * @param  string $sku The SKU of the product which you want to retrieve (required)
     * @param  string $authorization Access token from AAD. Should start with &#39;Bearer &#39;. (required)
     * @param  string $etailerid The affiliated eTailer for which you wish to retrieve the product (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function productsGetProductAsyncAsync($sku, $authorization, $etailerid = null)
    {
        return $this->productsGetProductAsyncAsyncWithHttpInfo($sku, $authorization, $etailerid)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation productsGetProductAsyncAsyncWithHttpInfo
     *
     * Return information about a product
     *
     * @param  string $sku The SKU of the product which you want to retrieve (required)
     * @param  string $authorization Access token from AAD. Should start with &#39;Bearer &#39;. (required)
     * @param  string $etailerid The affiliated eTailer for which you wish to retrieve the product (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function productsGetProductAsyncAsyncWithHttpInfo($sku, $authorization, $etailerid = null)
    {
        $returnType = '\Swagger\Client\Model\ProductResponse';
        $request = $this->productsGetProductAsyncRequest($sku, $authorization, $etailerid);

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
     * Create request for operation 'productsGetProductAsync'
     *
     * @param  string $sku The SKU of the product which you want to retrieve (required)
     * @param  string $authorization Access token from AAD. Should start with &#39;Bearer &#39;. (required)
     * @param  string $etailerid The affiliated eTailer for which you wish to retrieve the product (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function productsGetProductAsyncRequest($sku, $authorization, $etailerid = null)
    {
        // verify the required parameter 'sku' is set
        if ($sku === null || (is_array($sku) && count($sku) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sku when calling productsGetProductAsync'
            );
        }
        // verify the required parameter 'authorization' is set
        if ($authorization === null || (is_array($authorization) && count($authorization) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $authorization when calling productsGetProductAsync'
            );
        }

        $resourcePath = '/api/v3-0/products/{sku}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($etailerid !== null) {
            $queryParams['etailerid'] = ObjectSerializer::toQueryValue($etailerid);
        }
        // header params
        if ($authorization !== null) {
            $headerParams['Authorization'] = ObjectSerializer::toHeaderValue($authorization);
        }

        // path params
        if ($sku !== null) {
            $resourcePath = str_replace(
                '{' . 'sku' . '}',
                ObjectSerializer::toPathValue($sku),
                $resourcePath
            );
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
     * Operation productsGetProductsAsync
     *
     * Gets a collection of available products
     *
     * @param  string $authorization Access token from AAD. Should start with &#39;Bearer &#39;. (required)
     * @param  string $continuationtoken A continuation token returned in an earlier response (optional)
     * @param  bool $include_meta Whether or not to include meta data in the response (optional)
     * @param  string $from_date When a valid date is supplied for this parameter, only the changes since that date will be returned (format: YYYY-MM-DD) (optional)
     * @param  bool $deleted Provide &#x60;true&#x60; for this parameter, together with the &#x60;fromDate&#x60; parameter, to obtain a list of deleted products since the provided date (optional)
     * @param  string $country_code Filter on products that are allowed in a certain country (optional)
     * @param  string $etailerid The affiliated eTailer for which you wish to retrieve the product list (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\ProductsResponse
     */
    public function productsGetProductsAsync($authorization, $continuationtoken = null, $include_meta = null, $from_date = null, $deleted = null, $country_code = null, $etailerid = null)
    {
        list($response) = $this->productsGetProductsAsyncWithHttpInfo($authorization, $continuationtoken, $include_meta, $from_date, $deleted, $country_code, $etailerid);
        return $response;
    }

    /**
     * Operation productsGetProductsAsyncWithHttpInfo
     *
     * Gets a collection of available products
     *
     * @param  string $authorization Access token from AAD. Should start with &#39;Bearer &#39;. (required)
     * @param  string $continuationtoken A continuation token returned in an earlier response (optional)
     * @param  bool $include_meta Whether or not to include meta data in the response (optional)
     * @param  string $from_date When a valid date is supplied for this parameter, only the changes since that date will be returned (format: YYYY-MM-DD) (optional)
     * @param  bool $deleted Provide &#x60;true&#x60; for this parameter, together with the &#x60;fromDate&#x60; parameter, to obtain a list of deleted products since the provided date (optional)
     * @param  string $country_code Filter on products that are allowed in a certain country (optional)
     * @param  string $etailerid The affiliated eTailer for which you wish to retrieve the product list (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\ProductsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function productsGetProductsAsyncWithHttpInfo($authorization, $continuationtoken = null, $include_meta = null, $from_date = null, $deleted = null, $country_code = null, $etailerid = null)
    {
        $returnType = '\Swagger\Client\Model\ProductsResponse';
        $request = $this->productsGetProductsAsyncRequest($authorization, $continuationtoken, $include_meta, $from_date, $deleted, $country_code, $etailerid);

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
                        '\Swagger\Client\Model\ProductsResponse',
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
     * Operation productsGetProductsAsyncAsync
     *
     * Gets a collection of available products
     *
     * @param  string $authorization Access token from AAD. Should start with &#39;Bearer &#39;. (required)
     * @param  string $continuationtoken A continuation token returned in an earlier response (optional)
     * @param  bool $include_meta Whether or not to include meta data in the response (optional)
     * @param  string $from_date When a valid date is supplied for this parameter, only the changes since that date will be returned (format: YYYY-MM-DD) (optional)
     * @param  bool $deleted Provide &#x60;true&#x60; for this parameter, together with the &#x60;fromDate&#x60; parameter, to obtain a list of deleted products since the provided date (optional)
     * @param  string $country_code Filter on products that are allowed in a certain country (optional)
     * @param  string $etailerid The affiliated eTailer for which you wish to retrieve the product list (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function productsGetProductsAsyncAsync($authorization, $continuationtoken = null, $include_meta = null, $from_date = null, $deleted = null, $country_code = null, $etailerid = null)
    {
        return $this->productsGetProductsAsyncAsyncWithHttpInfo($authorization, $continuationtoken, $include_meta, $from_date, $deleted, $country_code, $etailerid)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation productsGetProductsAsyncAsyncWithHttpInfo
     *
     * Gets a collection of available products
     *
     * @param  string $authorization Access token from AAD. Should start with &#39;Bearer &#39;. (required)
     * @param  string $continuationtoken A continuation token returned in an earlier response (optional)
     * @param  bool $include_meta Whether or not to include meta data in the response (optional)
     * @param  string $from_date When a valid date is supplied for this parameter, only the changes since that date will be returned (format: YYYY-MM-DD) (optional)
     * @param  bool $deleted Provide &#x60;true&#x60; for this parameter, together with the &#x60;fromDate&#x60; parameter, to obtain a list of deleted products since the provided date (optional)
     * @param  string $country_code Filter on products that are allowed in a certain country (optional)
     * @param  string $etailerid The affiliated eTailer for which you wish to retrieve the product list (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function productsGetProductsAsyncAsyncWithHttpInfo($authorization, $continuationtoken = null, $include_meta = null, $from_date = null, $deleted = null, $country_code = null, $etailerid = null)
    {
        $returnType = '\Swagger\Client\Model\ProductsResponse';
        $request = $this->productsGetProductsAsyncRequest($authorization, $continuationtoken, $include_meta, $from_date, $deleted, $country_code, $etailerid);

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
     * Create request for operation 'productsGetProductsAsync'
     *
     * @param  string $authorization Access token from AAD. Should start with &#39;Bearer &#39;. (required)
     * @param  string $continuationtoken A continuation token returned in an earlier response (optional)
     * @param  bool $include_meta Whether or not to include meta data in the response (optional)
     * @param  string $from_date When a valid date is supplied for this parameter, only the changes since that date will be returned (format: YYYY-MM-DD) (optional)
     * @param  bool $deleted Provide &#x60;true&#x60; for this parameter, together with the &#x60;fromDate&#x60; parameter, to obtain a list of deleted products since the provided date (optional)
     * @param  string $country_code Filter on products that are allowed in a certain country (optional)
     * @param  string $etailerid The affiliated eTailer for which you wish to retrieve the product list (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function productsGetProductsAsyncRequest($authorization, $continuationtoken = null, $include_meta = null, $from_date = null, $deleted = null, $country_code = null, $etailerid = null)
    {
        // verify the required parameter 'authorization' is set
        if ($authorization === null || (is_array($authorization) && count($authorization) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $authorization when calling productsGetProductsAsync'
            );
        }

        $resourcePath = '/api/v3-0/products';
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
        if ($include_meta !== null) {
            $queryParams['includeMeta'] = ObjectSerializer::toQueryValue($include_meta);
        }
        // query params
        if ($from_date !== null) {
            $queryParams['fromDate'] = ObjectSerializer::toQueryValue($from_date);
        }
        // query params
        if ($deleted !== null) {
            $queryParams['deleted'] = ObjectSerializer::toQueryValue($deleted);
        }
        // query params
        if ($country_code !== null) {
            $queryParams['countryCode'] = ObjectSerializer::toQueryValue($country_code);
        }
        // query params
        if ($etailerid !== null) {
            $queryParams['etailerid'] = ObjectSerializer::toQueryValue($etailerid);
        }
        // header params
        if ($authorization !== null) {
            $headerParams['Authorization'] = ObjectSerializer::toHeaderValue($authorization);
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