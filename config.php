<?php

class GenbaConfiguration {
	public $customerAccountNumber;
	public $certificateLocation;
	public $certificatePassword;
	public $resourceID;
	public $identifierUrl;
	public $baseUrl;
	public $pingEndpoint;
	public $tenantID;
	public $authUrl;
	public $audience;
}

$genbaConfig = new GenbaConfiguration();
// ****************************************************************************************************
// Etailer specific configuration - Fill in your data
// ****************************************************************************************************

// Can be found in 'My Account' in the onboarding portal
$genbaConfig->customerAccountNumber = "[YOUR_CUSTOMER_ACCOUNT_NUMBER]";

// Upload your certificate in the onboarding portal
$genbaConfig->certificateLocation = "file:///[LOCATION_TO_YOUR_CERTIFICATE]";
$genbaConfig->certificatePassword = "[PASSWORD_OF_YOUR_CERTIFICATE]";

// ****************************************************************************************************
// Sandbox configuration
// ****************************************************************************************************

$genbaConfig->resourceID = "77f1a141-003b-4b0e-b5e6-198220417ce9";
$genbaConfig->identifierUrl = "https://aad-snd.genbadigital.io/" . $genbaConfig->customerAccountNumber;
$genbaConfig->baseUrl = 'https://sandbox.genbadigital.io';
$genbaConfig->pingEndpoint = $genbaConfig->baseUrl . '/api/v3-8/ping';

// ****************************************************************************************************
// Production configuration
// ****************************************************************************************************

//$resourceID = "77f1a141-003b-4b0e-b5e6-198220417ce9";
//$identifierUrl = "https://aad.genbadigital.io/" . $customerAccountNumber;
//$genbaConfig->baseUrl = 'https://api.genbadigital.io';
//$genbaConfig->pingEndpoint = $genbaConfig->baseUrl . '/api/v3-8/ping';

// ****************************************************************************************************
// Universal configuration
// ****************************************************************************************************

$genbaConfig->tenantID = "aad.genbadigital.io";
$genbaConfig->authUrl = "https://login.microsoftonline.com/" . $genbaConfig->tenantID;
$genbaConfig->audience = $genbaConfig->authUrl . "/oauth2/token";

?>