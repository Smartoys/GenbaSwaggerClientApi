# Swagger\Client\PricesApi

All URIs are relative to *https://api-dev.genbadigital.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pricesGetPricesAsync**](PricesApi.md#pricesGetPricesAsync) | **GET** /api/v3-11/prices | Gets a collection of prices


# **pricesGetPricesAsync**
> \Swagger\Client\Model\PricesResponse pricesGetPricesAsync($authorization, $continuationtoken, $etailerid)

Gets a collection of prices

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Access token from AAD. Should start with 'Bearer '.
$continuationtoken = "continuationtoken_example"; // string | A continuation token returned in an earlier response
$etailerid = "etailerid_example"; // string | The affiliated eTailer for which you wish to retrieve the product list

try {
    $result = $apiInstance->pricesGetPricesAsync($authorization, $continuationtoken, $etailerid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricesApi->pricesGetPricesAsync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Access token from AAD. Should start with &#39;Bearer &#39;. |
 **continuationtoken** | **string**| A continuation token returned in an earlier response | [optional]
 **etailerid** | **string**| The affiliated eTailer for which you wish to retrieve the product list | [optional]

### Return type

[**\Swagger\Client\Model\PricesResponse**](../Model/PricesResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

