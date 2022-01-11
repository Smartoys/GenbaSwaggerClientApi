<?php
use \Firebase\JWT\JWT;

class CertificateResult {
	public $validFrom;
	public $validTo;
	public $thumbprint;
	public $pkey;
}

function ReadCertificate($certLocation, $centPassword) {
	$data = file_get_contents($certLocation);
	$success = openssl_pkcs12_read($data, $certs, $centPassword);
	if ($success == false) {
		throw new Exception('Unable to read certificate');
	}

	$cert = $certs['cert'];
	$pkey = $certs['pkey'];
	$certinfo = openssl_x509_parse($cert);
	$validFrom = $certinfo['validFrom_time_t'];
	$validTo = $certinfo['validTo_time_t'];
	$thumbprintRaw = openssl_x509_fingerprint($cert, 'sha1', true);
	$thumbprint = base64_encode($thumbprintRaw);
	$result = new CertificateResult();
	$result->validFrom = $validFrom;
	$result->validTo = $validTo;
	$result->thumbprint = $thumbprint;
	$result->pkey = $pkey;
	return $result;
}

function CreateJwt($thumbprint, $audience, $validFrom, $validTo, $identifierUrl, $pkey) {
	$header = array(
		"alg" => "RS256",
		"typ" => "JWT",
		"x5t" => $thumbprint
	);
	$body = array(
		"aud" => $audience,
		"exp" => $validTo,
		"iss" => $identifierUrl,
		"jti" => NewGuid(),
		"nbf" => $validFrom,
		"sub" => $identifierUrl
	);
	$jwt = JWT::encode($body, $pkey, 'RS256', null, $header);
	return $jwt;
}

function GetToken($resourceID, $identifierUrl, $audience, $jwt) {
	$postdata = "resource=" . urlencode($resourceID);
	$postdata .= "&client_id=" . urlencode($identifierUrl);
	$postdata .= '&client_assertion_type=urn%3Aietf%3Aparams%3Aoauth%3Aclient-assertion-type%3Ajwt-bearer';
	$postdata .= "&grant_type=client_credentials";
	$postdata .= "&client_assertion=" . urlencode($jwt);

	$tokenRequest = curl_init();
	curl_setopt($tokenRequest, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($tokenRequest, CURLOPT_URL, $audience);
	curl_setopt($tokenRequest, CURLOPT_POSTFIELDS, $postdata);
	curl_setopt($tokenRequest, CURLOPT_SSL_VERIFYPEER, 0);

	$tokenResponse = curl_exec($tokenRequest);
	echo $tokenResponse;
	echo curl_error($tokenRequest);
	curl_close($tokenRequest);
	
	$data = json_decode($tokenResponse);
	$accessToken = $data->access_token;
	return $accessToken;
}

function NewGuid()
{
    if (function_exists('com_create_guid') === true)
    {
        return trim(com_create_guid(), '{}');
    }

    return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
}
?>