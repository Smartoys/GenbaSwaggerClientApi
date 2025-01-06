# Swagger\Client\PingApi

All URIs are relative to *https://api-dev.genbadigital.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pingPingAsync**](PingApi.md#pingPingAsync) | **GET** /api/v3-11/ping | Test connection to the API


# **pingPingAsync**
> \Swagger\Client\Model\PingResponse pingPingAsync($authorization)

Test connection to the API

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Access token from AAD. Should start with 'Bearer '.

try {
    $result = $apiInstance->pingPingAsync($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PingApi->pingPingAsync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Access token from AAD. Should start with &#39;Bearer &#39;. |

### Return type

[**\Swagger\Client\Model\PingResponse**](../Model/PingResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

