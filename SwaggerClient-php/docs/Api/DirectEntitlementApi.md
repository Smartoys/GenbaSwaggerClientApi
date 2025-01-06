# Swagger\Client\DirectEntitlementApi

All URIs are relative to *https://api-dev.genbadigital.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**directEntitlementActivateAsync**](DirectEntitlementApi.md#directEntitlementActivateAsync) | **POST** /api/v3-11/directentitlement/activations | Perform a direct entitlement activation
[**directEntitlementPerformActivationActionAsync**](DirectEntitlementApi.md#directEntitlementPerformActivationActionAsync) | **POST** /api/v3-11/directentitlement/activations/{activationid} | Perform an action on an activation
[**directEntitlementPerformRedemptionActionAsync**](DirectEntitlementApi.md#directEntitlementPerformRedemptionActionAsync) | **POST** /api/v3-11/directentitlement/redemptions/{redemptionid} | Perform an action on a redemption
[**directEntitlementRedeemAsync**](DirectEntitlementApi.md#directEntitlementRedeemAsync) | **POST** /api/v3-11/directentitlement/redemptions | Perform a direct entitlement redemption
[**directEntitlementRetrieveActivationAsync**](DirectEntitlementApi.md#directEntitlementRetrieveActivationAsync) | **GET** /api/v3-11/directentitlement/activations/{activationid} | Retrieve a direct entitlement activation
[**directEntitlementRetrieveActivationByCtidAsync**](DirectEntitlementApi.md#directEntitlementRetrieveActivationByCtidAsync) | **GET** /api/v3-11/directentitlement/activations/ctid/{ctid} | Retrieve a direct entitlement activation by its Client Transaction ID
[**directEntitlementRetrieveRedemptionAsync**](DirectEntitlementApi.md#directEntitlementRetrieveRedemptionAsync) | **GET** /api/v3-11/directentitlement/redemptions/{redemptionid} | Retrieve a direct entitlement redemption
[**directEntitlementRetrieveRedemptionByCtidAsync**](DirectEntitlementApi.md#directEntitlementRetrieveRedemptionByCtidAsync) | **GET** /api/v3-11/directentitlement/redemptions/ctid/{ctid} | Retrieve a direct entitlement redemption by its Client Transaction ID


# **directEntitlementActivateAsync**
> \Swagger\Client\Model\DirectEntitlementResponse directEntitlementActivateAsync($request, $authorization)

Perform a direct entitlement activation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DirectEntitlementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\DirectEntitlementActivationRequest(); // \Swagger\Client\Model\DirectEntitlementActivationRequest | Request specifying your direct entitlement activation
$authorization = "authorization_example"; // string | Access token from AAD. Should start with 'Bearer '.

try {
    $result = $apiInstance->directEntitlementActivateAsync($request, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectEntitlementApi->directEntitlementActivateAsync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\DirectEntitlementActivationRequest**](../Model/DirectEntitlementActivationRequest.md)| Request specifying your direct entitlement activation |
 **authorization** | **string**| Access token from AAD. Should start with &#39;Bearer &#39;. |

### Return type

[**\Swagger\Client\Model\DirectEntitlementResponse**](../Model/DirectEntitlementResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **directEntitlementPerformActivationActionAsync**
> \Swagger\Client\Model\DirectEntitlementResponse directEntitlementPerformActivationActionAsync($activationid, $action, $authorization)

Perform an action on an activation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DirectEntitlementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$activationid = "activationid_example"; // string | Unique ID of the activation
$action = new \Swagger\Client\Model\DirectEntitlementAction(); // \Swagger\Client\Model\DirectEntitlementAction | The action you want to perform
$authorization = "authorization_example"; // string | Access token from AAD. Should start with 'Bearer '.

try {
    $result = $apiInstance->directEntitlementPerformActivationActionAsync($activationid, $action, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectEntitlementApi->directEntitlementPerformActivationActionAsync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activationid** | **string**| Unique ID of the activation |
 **action** | [**\Swagger\Client\Model\DirectEntitlementAction**](../Model/DirectEntitlementAction.md)| The action you want to perform |
 **authorization** | **string**| Access token from AAD. Should start with &#39;Bearer &#39;. |

### Return type

[**\Swagger\Client\Model\DirectEntitlementResponse**](../Model/DirectEntitlementResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **directEntitlementPerformRedemptionActionAsync**
> \Swagger\Client\Model\DirectEntitlementResponse directEntitlementPerformRedemptionActionAsync($redemptionid, $action, $authorization)

Perform an action on a redemption

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DirectEntitlementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$redemptionid = "redemptionid_example"; // string | Unique ID of the redemption
$action = new \Swagger\Client\Model\DirectEntitlementAction(); // \Swagger\Client\Model\DirectEntitlementAction | The action you want to perform
$authorization = "authorization_example"; // string | Access token from AAD. Should start with 'Bearer '.

try {
    $result = $apiInstance->directEntitlementPerformRedemptionActionAsync($redemptionid, $action, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectEntitlementApi->directEntitlementPerformRedemptionActionAsync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **redemptionid** | **string**| Unique ID of the redemption |
 **action** | [**\Swagger\Client\Model\DirectEntitlementAction**](../Model/DirectEntitlementAction.md)| The action you want to perform |
 **authorization** | **string**| Access token from AAD. Should start with &#39;Bearer &#39;. |

### Return type

[**\Swagger\Client\Model\DirectEntitlementResponse**](../Model/DirectEntitlementResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **directEntitlementRedeemAsync**
> \Swagger\Client\Model\DirectEntitlementResponse directEntitlementRedeemAsync($request, $authorization)

Perform a direct entitlement redemption

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DirectEntitlementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\DirectEntitlementRedemptionRequest(); // \Swagger\Client\Model\DirectEntitlementRedemptionRequest | Information about the redemption to be performed
$authorization = "authorization_example"; // string | Access token from AAD. Should start with 'Bearer '.

try {
    $result = $apiInstance->directEntitlementRedeemAsync($request, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectEntitlementApi->directEntitlementRedeemAsync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\DirectEntitlementRedemptionRequest**](../Model/DirectEntitlementRedemptionRequest.md)| Information about the redemption to be performed |
 **authorization** | **string**| Access token from AAD. Should start with &#39;Bearer &#39;. |

### Return type

[**\Swagger\Client\Model\DirectEntitlementResponse**](../Model/DirectEntitlementResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **directEntitlementRetrieveActivationAsync**
> \Swagger\Client\Model\DirectEntitlementResponse directEntitlementRetrieveActivationAsync($activationid, $authorization)

Retrieve a direct entitlement activation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DirectEntitlementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$activationid = "activationid_example"; // string | The ID of the activation your want to retrieve
$authorization = "authorization_example"; // string | Access token from AAD. Should start with 'Bearer '.

try {
    $result = $apiInstance->directEntitlementRetrieveActivationAsync($activationid, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectEntitlementApi->directEntitlementRetrieveActivationAsync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activationid** | **string**| The ID of the activation your want to retrieve |
 **authorization** | **string**| Access token from AAD. Should start with &#39;Bearer &#39;. |

### Return type

[**\Swagger\Client\Model\DirectEntitlementResponse**](../Model/DirectEntitlementResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **directEntitlementRetrieveActivationByCtidAsync**
> \Swagger\Client\Model\DirectEntitlementResponse directEntitlementRetrieveActivationByCtidAsync($ctid, $authorization)

Retrieve a direct entitlement activation by its Client Transaction ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DirectEntitlementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ctid = "ctid_example"; // string | The Client Transaction ID of the activation you want to retrieve
$authorization = "authorization_example"; // string | Access token from AAD. Should start with 'Bearer '.

try {
    $result = $apiInstance->directEntitlementRetrieveActivationByCtidAsync($ctid, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectEntitlementApi->directEntitlementRetrieveActivationByCtidAsync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ctid** | **string**| The Client Transaction ID of the activation you want to retrieve |
 **authorization** | **string**| Access token from AAD. Should start with &#39;Bearer &#39;. |

### Return type

[**\Swagger\Client\Model\DirectEntitlementResponse**](../Model/DirectEntitlementResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **directEntitlementRetrieveRedemptionAsync**
> \Swagger\Client\Model\DirectEntitlementResponse directEntitlementRetrieveRedemptionAsync($redemptionid, $authorization)

Retrieve a direct entitlement redemption

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DirectEntitlementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$redemptionid = "redemptionid_example"; // string | Unique ID of the redemption
$authorization = "authorization_example"; // string | Access token from AAD. Should start with 'Bearer '.

try {
    $result = $apiInstance->directEntitlementRetrieveRedemptionAsync($redemptionid, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectEntitlementApi->directEntitlementRetrieveRedemptionAsync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **redemptionid** | **string**| Unique ID of the redemption |
 **authorization** | **string**| Access token from AAD. Should start with &#39;Bearer &#39;. |

### Return type

[**\Swagger\Client\Model\DirectEntitlementResponse**](../Model/DirectEntitlementResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **directEntitlementRetrieveRedemptionByCtidAsync**
> \Swagger\Client\Model\DirectEntitlementResponse directEntitlementRetrieveRedemptionByCtidAsync($ctid, $authorization)

Retrieve a direct entitlement redemption by its Client Transaction ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DirectEntitlementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ctid = "ctid_example"; // string | Client Transaction ID of the redemption
$authorization = "authorization_example"; // string | Access token from AAD. Should start with 'Bearer '.

try {
    $result = $apiInstance->directEntitlementRetrieveRedemptionByCtidAsync($ctid, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectEntitlementApi->directEntitlementRetrieveRedemptionByCtidAsync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ctid** | **string**| Client Transaction ID of the redemption |
 **authorization** | **string**| Access token from AAD. Should start with &#39;Bearer &#39;. |

### Return type

[**\Swagger\Client\Model\DirectEntitlementResponse**](../Model/DirectEntitlementResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

