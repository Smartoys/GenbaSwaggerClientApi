# ReservationResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique ID of the reservation | 
**client_transaction_id** | **string** | The unique ID of the transaction as provided by the client | 
**sku** | **string** | SKU of the product | 
**state** | **int** | State of the reservation. Possible values: 0 &#x3D; CREATED, The reservation has been made and can be completed by placing an order with the reservation ID within the expiration time; 1 &#x3D; COMPLETED, An order was placed with the reservation ID; 2 &#x3D; EXPIRED, The reservation has expired and can no longer be completed | 
**order_id** | **string** | Unique ID of the order. Will only be present if the reservation was completed by placing an order with the ID of this reservation | [optional] 
**created** | **string** | Date/time the reservation was made | 
**expiration** | **string** | Date/time the reservation will expire | [optional] 
**communicated_buying_price** | [**\Swagger\Client\Model\BuyingPrice**](BuyingPrice.md) |  | 
**actual_buying_price** | [**\Swagger\Client\Model\BuyingPrice**](BuyingPrice.md) |  | 
**selling_price** | [**\Swagger\Client\Model\SellingPrice**](SellingPrice.md) |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


