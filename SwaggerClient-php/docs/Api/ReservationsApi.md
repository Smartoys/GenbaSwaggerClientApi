# Swagger\Client\ReservationsApi

All URIs are relative to *https://api-dev.genbadigital.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**reservationsGetReservation**](ReservationsApi.md#reservationsGetReservation) | **GET** /api/v3-8/reservations/{reservationid} | Retrieve a reservation
[**reservationsPlaceReservationAsync**](ReservationsApi.md#reservationsPlaceReservationAsync) | **POST** /api/v3-8/reservations | Place a reservation for a product


# **reservationsGetReservation**
> \Swagger\Client\Model\ReservationResponse reservationsGetReservation($reservationid, $authorization)

Retrieve a reservation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ReservationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reservationid = "reservationid_example"; // string | The unique identifier of the reservation
$authorization = "authorization_example"; // string | Access token from AAD. Should start with 'Bearer '.

try {
    $result = $apiInstance->reservationsGetReservation($reservationid, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReservationsApi->reservationsGetReservation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reservationid** | **string**| The unique identifier of the reservation |
 **authorization** | **string**| Access token from AAD. Should start with &#39;Bearer &#39;. |

### Return type

[**\Swagger\Client\Model\ReservationResponse**](../Model/ReservationResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reservationsPlaceReservationAsync**
> \Swagger\Client\Model\ReservationResponse reservationsPlaceReservationAsync($request, $authorization)

Place a reservation for a product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ReservationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\ReservationRequest(); // \Swagger\Client\Model\ReservationRequest | Request for the reservation
$authorization = "authorization_example"; // string | Access token from AAD. Should start with 'Bearer '.

try {
    $result = $apiInstance->reservationsPlaceReservationAsync($request, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReservationsApi->reservationsPlaceReservationAsync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ReservationRequest**](../Model/ReservationRequest.md)| Request for the reservation |
 **authorization** | **string**| Access token from AAD. Should start with &#39;Bearer &#39;. |

### Return type

[**\Swagger\Client\Model\ReservationResponse**](../Model/ReservationResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

