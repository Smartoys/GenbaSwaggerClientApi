# Swagger\Client\PromotionsApi

All URIs are relative to *https://api-dev.genbadigital.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**promotionsGetPromotionsAsync**](PromotionsApi.md#promotionsGetPromotionsAsync) | **GET** /api/v3-11/promotions | Gets a collection of available promotions


# **promotionsGetPromotionsAsync**
> \Swagger\Client\Model\PromotionsResponse promotionsGetPromotionsAsync($authorization, $continuationtoken, $from_date, $to_date)

Gets a collection of available promotions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Access token from AAD. Should start with 'Bearer '.
$continuationtoken = "continuationtoken_example"; // string | A continuation token returned in an earlier response
$from_date = "from_date_example"; // string | When a valid date is supplied for this parameter, only the promotions ending after this date will be returned (format: YYYY-MM-DD)
$to_date = "to_date_example"; // string | When a valid date is supplied for this parameter, only the promotions starting before this date will be returned (format: YYYY-MM-DD)

try {
    $result = $apiInstance->promotionsGetPromotionsAsync($authorization, $continuationtoken, $from_date, $to_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->promotionsGetPromotionsAsync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Access token from AAD. Should start with &#39;Bearer &#39;. |
 **continuationtoken** | **string**| A continuation token returned in an earlier response | [optional]
 **from_date** | **string**| When a valid date is supplied for this parameter, only the promotions ending after this date will be returned (format: YYYY-MM-DD) | [optional]
 **to_date** | **string**| When a valid date is supplied for this parameter, only the promotions starting before this date will be returned (format: YYYY-MM-DD) | [optional]

### Return type

[**\Swagger\Client\Model\PromotionsResponse**](../Model/PromotionsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

