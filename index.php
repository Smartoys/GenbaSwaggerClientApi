<?php

require_once "vendor/autoload.php";
require_once "config.php";
require_once "authentication.php";

use GuzzleHttp\Client;
use Swagger\Client\Configuration;
use Swagger\Client\Api;


echo "<h1>Let's connect to Genba!</h1>";

// Load certificate
echo "<h2>Certificate</h2>";
$certificateResult = ReadCertificate($genbaConfig->certificateLocation, $genbaConfig->certificatePassword);
echo '<p>Valid from: ' . $certificateResult->validFrom . '</p>';
echo '<p>Valid to: ' . $certificateResult->validTo . '</p>';
echo '<p>Thumbprint: ' . $certificateResult->thumbprint . '</p>';

// Create JWT
echo "<h2>JWT</h2>";
$jwt = CreateJwt($certificateResult->thumbprint, $genbaConfig->audience, $certificateResult->validFrom, $certificateResult->validTo, $genbaConfig->identifierUrl, $certificateResult->pkey);
echo $jwt;

// Send request to Azure Active Directory
echo "<h2>Access token</h2>";
$accessToken = GetToken($genbaConfig->resourceID, $genbaConfig->identifierUrl, $genbaConfig->audience, $jwt);
echo $accessToken;

// Send ping to Genba API
echo "<h2>Ping response</h2>";
$client = new Client();
$config = new Configuration();
$config->setAccessToken(null);
$config->setHost($genbaConfig->baseUrl);
$pingApi = new Swagger\Client\Api\PingApi($client, $config);
try {
	$pingResponse = $pingApi->pingPingAsync('Bearer ' . $accessToken);
	echo $pingResponse;
}
catch (Swagger\Client\ApiException $api_exc) {
	echo $api_exc->getResponseBody();
}
catch (Exception $exc) {
	var_dump($exc);
}

// Get products from Genba API
echo "<h2>Products</h2>";
echo "<h3>Page 1</h3>";
$productsApi = new Swagger\Client\Api\ProductsApi($client, $config);
try {
	$productsResponse = $productsApi->productsGetProductsAsync('Bearer ' . $accessToken);
	echo $productsResponse;
	
	$productData = json_decode($productsResponse);
	if ($productData->ContinuationToken != null) {
		echo "<h3>Page 2</h3>";
		$productsResponse2 = $productsApi->productsGetProductsAsync('Bearer ' . $accessToken, $productData->ContinuationToken);
		echo $productsResponse2;
	}
}
catch (Swagger\Client\ApiException $api_exc) {
	echo $api_exc->getResponseBody();
}
catch (Exception $exc) {
	var_dump($exc);
}

// Get prices from Genba API
echo "<h2>Prices</h2>";
echo "<h3>Page 1</h3>";
$pricesApi = new Swagger\Client\Api\PricesApi($client, $config);
try {
	$pricesResponse = $pricesApi->pricesGetPricesAsync('Bearer ' . $accessToken);
	echo $pricesResponse;
	
	$priceData = json_decode($pricesResponse);
	if ($priceData->ContinuationToken != null) {
		echo "<h3>Page 2</h3>";
		$pricesResponse2 = $pricesApi->pricesGetPricesAsync('Bearer ' . $accessToken, $priceData->ContinuationToken);
		echo $pricesResponse2;
	}
}
catch (Swagger\Client\ApiException $api_exc) {
	echo $api_exc->getResponseBody();
}
catch (Exception $exc) {
	var_dump($exc);
}

?>