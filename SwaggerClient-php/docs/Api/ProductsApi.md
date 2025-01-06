# Swagger\Client\ProductsApi

All URIs are relative to *https://api-dev.genbadigital.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**productsGetProductAsync**](ProductsApi.md#productsGetProductAsync) | **GET** /api/v3-11/products/{sku} | Return information about a product
[**productsGetProductsAsync**](ProductsApi.md#productsGetProductsAsync) | **GET** /api/v3-11/products | Gets a collection of available products


# **productsGetProductAsync**
> \Swagger\Client\Model\ProductResponse productsGetProductAsync($sku, $authorization, $etailerid)

Return information about a product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | The SKU of the product which you want to retrieve
$authorization = "authorization_example"; // string | Access token from AAD. Should start with 'Bearer '.
$etailerid = "etailerid_example"; // string | The affiliated eTailer for which you wish to retrieve the product

try {
    $result = $apiInstance->productsGetProductAsync($sku, $authorization, $etailerid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsGetProductAsync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | [**string**](../Model/.md)| The SKU of the product which you want to retrieve |
 **authorization** | **string**| Access token from AAD. Should start with &#39;Bearer &#39;. |
 **etailerid** | **string**| The affiliated eTailer for which you wish to retrieve the product | [optional]

### Return type

[**\Swagger\Client\Model\ProductResponse**](../Model/ProductResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsGetProductsAsync**
> \Swagger\Client\Model\ProductsResponse productsGetProductsAsync($authorization, $continuationtoken, $include_meta, $from_date, $deleted, $country_code, $etailerid)

Gets a collection of available products

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Access token from AAD. Should start with 'Bearer '.
$continuationtoken = "continuationtoken_example"; // string | A continuation token returned in an earlier response
$include_meta = true; // bool | Whether or not to include meta data in the response
$from_date = "from_date_example"; // string | When a valid date is supplied for this parameter, only the changes since that date will be returned (format: YYYY-MM-DD)
$deleted = true; // bool | Provide `true` for this parameter, together with the `fromDate` parameter, to obtain a list of deleted products since the provided date
$country_code = "country_code_example"; // string | Filter on products that are allowed in a certain country
$etailerid = "etailerid_example"; // string | The affiliated eTailer for which you wish to retrieve the product list

try {
    $result = $apiInstance->productsGetProductsAsync($authorization, $continuationtoken, $include_meta, $from_date, $deleted, $country_code, $etailerid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsGetProductsAsync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Access token from AAD. Should start with &#39;Bearer &#39;. |
 **continuationtoken** | **string**| A continuation token returned in an earlier response | [optional]
 **include_meta** | **bool**| Whether or not to include meta data in the response | [optional]
 **from_date** | **string**| When a valid date is supplied for this parameter, only the changes since that date will be returned (format: YYYY-MM-DD) | [optional]
 **deleted** | **bool**| Provide &#x60;true&#x60; for this parameter, together with the &#x60;fromDate&#x60; parameter, to obtain a list of deleted products since the provided date | [optional]
 **country_code** | **string**| Filter on products that are allowed in a certain country | [optional]
 **etailerid** | **string**| The affiliated eTailer for which you wish to retrieve the product list | [optional]

### Return type

[**\Swagger\Client\Model\ProductsResponse**](../Model/ProductsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

