# OrderResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique ID of the order | 
**client_transaction_id** | **string** | The unique ID of the transaction as provided by the client | 
**sku** | **string** | SKU of the product | 
**created** | **string** | Date/time the order was placed | 
**state** | **int** | State of the order. Possible values: 0 &#x3D; BACK_ORDERED, The order is being processed in the background, and will not contain serials until completed; 1 &#x3D; PRE_ORDERED, The order does not contain serials yet, and will change state as soon as the product is released; 2 &#x3D; DELIVERED, The order has been completed and serials are available in the response; 3 &#x3D; RETURNED, The order has been returned and serials will no longer be visible; 4 &#x3D; CREATED, This state will normally only occur when initial processing of the order is still in progress | 
**communicated_buying_price** | [**\Swagger\Client\Model\BuyingPrice**](BuyingPrice.md) |  | 
**actual_buying_price** | [**\Swagger\Client\Model\BuyingPrice**](BuyingPrice.md) |  | 
**selling_price** | [**\Swagger\Client\Model\SellingPrice**](SellingPrice.md) |  | 
**reservation_id** | **string** | Unique ID of the reservation that originates this order | [optional] 
**keys** | [**\Swagger\Client\Model\Key[]**](Key.md) | A list of serial keys | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


