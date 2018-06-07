<?php
/*
Copyright (c) 2018 Cisco and/or its affiliates.

This software is licensed to you under the terms of the Cisco Sample
Code License, Version 1.0 (the "License"). You may obtain a copy of the
License at

               https://developer.cisco.com/docs/licenses

All use of the material herein must be in accordance with the terms of
the License. All rights not expressly granted by the License are
reserved. Unless required by applicable law or agreed to separately in
writing, software distributed under the License is distributed on an "AS
IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express
or implied.
*/

require __DIR__ . '/src/vendor/autoload.php';

$DNACHost = ""; // IP Address or hostname of the DNA Center Cluster
$username = ""; // Administrator user name for DNA Center
$password = ""; // Administrator password for DNA Center
$validateSSLCert = false; // Enable/Disable SSL Certificate Verification (Default false)

try {
	// Create a HTTP Client Object
	$client = new GuzzleHttp\Client([
		'allow_redirects' => false,
		'cookies'         => true,
		'verify' 	  => $validateSSLCert
	]);
	
	// Create a Configuration Object containing the Host, Username, & Password
	$config = new cisco\com\dnac\v1\api\client\Configuration();
	$config->setHost("https://" . $DNACHost);
	$config->setUsername($username);
	$config->setPassword($password);
	
	// Create a MiscApi Object we will use to retrieve the Auth Token for subsequent requests
	$misc = new cisco\com\dnac\v1\api\client\api\MiscApi($client, $config);
	$tokenRequest = new cisco\com\dnac\v1\api\client\model\GenerateTokenRequest();
	$tokenResponse = $misc->postAuthToken($tokenRequest,  "Basic " . base64_encode($username . ":" . $password));
	
	// Get the auth token value
	$theToken = $tokenResponse->getToken();
	
	echo "\nAuthenticated with DNA Center instance at " . $DNACHost . ".\n\n";
		  
	// Recreate the HTTP Client object with a default header containing the Auth token
	$client = new GuzzleHttp\Client([
		'allow_redirects' => false,
		'cookies'         => true,
		'verify' 	  => $validateSSLCert,
		'headers' 	  => ['X-AUTH-TOKEN' => $theToken]
	]);

	$apiObj = new cisco\com\dnac\v1\api\client\api\NetworkDeviceApi($client, $config);
	
	echo "Fetching Device Inventory from DNA Center ...\n";
	
	$responseObj = $apiObj->getNetworkDeviceCount();
	$deviceCount = $responseObj->getResponse();
	
	echo "Found [" . $deviceCount . "] devices\n\n";
	
	$deviceInventoryObj = $apiObj->getNetworkDevice();
	$deviceResponse	    = $deviceInventoryObj->getResponse();
	
	$mask = "%-30.30s %-50.50s %-15.15s\n";
	printf($mask, 'Hostname', 'Type', 'Serial Number');
	printf($mask, '--------', '----', '-------------');
	
	
	foreach ($deviceResponse as $device){
		printf($mask, $device->getHostname(), $device->getType(), $device->getSerialNumber());
	}
	
	echo "\n";
} catch (Swagger\Client\ApiException $e) {
    echo 'Caught exception: ', $e->getMessage(), "\n";
    echo 'HTTP response headers: ', print_r($e->getResponseHeaders(), true), "\n";
    echo 'HTTP response body: ', print_r($e->getResponseBody(), true), "\n";
    echo 'HTTP status code: ', $e->getCode(), "\n";
}
?>