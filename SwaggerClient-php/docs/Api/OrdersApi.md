# Swagger\Client\OrdersApi

All URIs are relative to *https://api-dev.genbadigital.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ordersGetOrderAsync**](OrdersApi.md#ordersGetOrderAsync) | **GET** /api/v3-0/orders/{orderid} | Retrieve an order
[**ordersGetOrderByCtidAsync**](OrdersApi.md#ordersGetOrderByCtidAsync) | **GET** /api/v3-0/orders/ctid/{ctid} | Retrieve an order by CTID
[**ordersPerformOrderActionAsync**](OrdersApi.md#ordersPerformOrderActionAsync) | **POST** /api/v3-0/orders/{orderid} | Perform an action on an order
[**ordersPlaceOrderAsync**](OrdersApi.md#ordersPlaceOrderAsync) | **POST** /api/v3-0/orders | Order a product key


# **ordersGetOrderAsync**
> \Swagger\Client\Model\OrderResponse ordersGetOrderAsync($orderid, $authorization)

Retrieve an order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderid = "orderid_example"; // string | The unique ID of the order
$authorization = "authorization_example"; // string | Access token from AAD. Should start with 'Bearer '.

try {
    $result = $apiInstance->ordersGetOrderAsync($orderid, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersGetOrderAsync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderid** | **string**| The unique ID of the order |
 **authorization** | **string**| Access token from AAD. Should start with &#39;Bearer &#39;. |

### Return type

[**\Swagger\Client\Model\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersGetOrderByCtidAsync**
> \Swagger\Client\Model\OrderResponse ordersGetOrderByCtidAsync($ctid, $authorization)

Retrieve an order by CTID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ctid = "ctid_example"; // string | Client transaction ID
$authorization = "authorization_example"; // string | Access token from AAD. Should start with 'Bearer '.

try {
    $result = $apiInstance->ordersGetOrderByCtidAsync($ctid, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersGetOrderByCtidAsync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ctid** | **string**| Client transaction ID |
 **authorization** | **string**| Access token from AAD. Should start with &#39;Bearer &#39;. |

### Return type

[**\Swagger\Client\Model\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersPerformOrderActionAsync**
> \Swagger\Client\Model\OrderResponse ordersPerformOrderActionAsync($orderid, $action, $authorization)

Perform an action on an order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderid = "orderid_example"; // string | The unique ID of the order
$action = new \Swagger\Client\Model\OrderAction(); // \Swagger\Client\Model\OrderAction | The action you want to perform
$authorization = "authorization_example"; // string | Access token from AAD. Should start with 'Bearer '.

try {
    $result = $apiInstance->ordersPerformOrderActionAsync($orderid, $action, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersPerformOrderActionAsync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderid** | **string**| The unique ID of the order |
 **action** | [**\Swagger\Client\Model\OrderAction**](../Model/OrderAction.md)| The action you want to perform |
 **authorization** | **string**| Access token from AAD. Should start with &#39;Bearer &#39;. |

### Return type

[**\Swagger\Client\Model\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersPlaceOrderAsync**
> \Swagger\Client\Model\OrderResponse ordersPlaceOrderAsync($request, $authorization)

Order a product key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\OrderRequest(); // \Swagger\Client\Model\OrderRequest | Request specifying your order
$authorization = "authorization_example"; // string | Access token from AAD. Should start with 'Bearer '.

try {
    $result = $apiInstance->ordersPlaceOrderAsync($request, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersPlaceOrderAsync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\OrderRequest**](../Model/OrderRequest.md)| Request specifying your order |
 **authorization** | **string**| Access token from AAD. Should start with &#39;Bearer &#39;. |

### Return type

[**\Swagger\Client\Model\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

