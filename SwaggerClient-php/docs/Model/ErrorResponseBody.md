# ErrorResponseBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **int** | Possible values: 1000 &#x3D; AUTH_MISSING_CREDENTIALS, Authorization failed because the credentials were missing; 1001 &#x3D; AUTH_INVALID_CREDENTIALS, Authorization failed because the credentials were invalid; 1002 &#x3D; AUTH_ACCOUNT_INACTIVE, Authorization failed because your account is not active; 2000 &#x3D; OBJECT_NOT_FOUND, The object you are requesting does not exist or is inaccessible to your account; 2001 &#x3D; PRODUCT_NOT_ALLOWED, Your account is not allowed to order or reserve this product; 2002 &#x3D; ACTION_NOT_ALLOWED, The action you are trying to perform is not allowed; 2003 &#x3D; RESERVATION_NOT_ALLOWED, Your account has reached its maximum amount of open reservations; 2004 &#x3D; INVALID_REQUEST, The request is malformed. See the details of the response for more information; 2005 &#x3D; INVALID_PARAMETER, The request is malformed. See the details of the response for more information; 2006 &#x3D; ETAILER_NOT_ALLOWED, You are not allowed to act on the behalf of the eTailer you addressed in your request; 3000 &#x3D; EXTERNAL_ERROR, An error occurred while contacting a third party; 4000 &#x3D; INTERNAL_ERROR, An unexpected error occurred. Please contact support | 
**details** | **string** | Detailed explanation of the error | 
**reference** | **int** | A reference number that can be used by Genba to identify your error | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


