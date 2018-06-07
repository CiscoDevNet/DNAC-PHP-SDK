# cisco\com\dnac\v1\api\client\DnaIntentApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteDnaIntentDeleteApplication**](DnaIntentApi.md#deleteDnaIntentDeleteApplication) | **DELETE** /dna/intent/api/v1/delete-application | Delete Application
[**deleteDnaIntentDeleteApplicationSet**](DnaIntentApi.md#deleteDnaIntentDeleteApplicationSet) | **DELETE** /dna/intent/api/v1/delete-application-set | Delete Application Set
[**deleteDnaIntentDeleteSsid**](DnaIntentApi.md#deleteDnaIntentDeleteSsid) | **DELETE** /dna/intent/api/v1/delete-ssid/${deviceName}/${wirelessNetworkProfileName}/${ssidName}/${interfaceName} | Delete SSID
[**getDnaIntentApplicationCount**](DnaIntentApi.md#getDnaIntentApplicationCount) | **GET** /dna/intent/api/v1/application/count | Get Applications Count
[**getDnaIntentApplicationPolicy**](DnaIntentApi.md#getDnaIntentApplicationPolicy) | **GET** /dna/intent/api/v1/application-policy | Get Application Policies
[**getDnaIntentApplicationSetCount**](DnaIntentApi.md#getDnaIntentApplicationSetCount) | **GET** /dna/intent/api/v1/application-set/count | Get Application Sets Count
[**getDnaIntentApplicationSets**](DnaIntentApi.md#getDnaIntentApplicationSets) | **GET** /dna/intent/api/v1/application-sets | Get Application Sets
[**getDnaIntentApplications**](DnaIntentApi.md#getDnaIntentApplications) | **GET** /dna/intent/api/v1/applications | Get Applications
[**getDnaIntentClieDetail**](DnaIntentApi.md#getDnaIntentClieDetail) | **GET** /dna/intent/api/v1/client-detail | Client Detail
[**getDnaIntentClientHealth**](DnaIntentApi.md#getDnaIntentClientHealth) | **GET** /dna/intent/api/v1/client-health | Client Health
[**getDnaIntentNetworkDeviceDetail**](DnaIntentApi.md#getDnaIntentNetworkDeviceDetail) | **GET** /dna/intent/api/v1/network-device-detail | Network Device Detail
[**getDnaIntentNetworkHealth**](DnaIntentApi.md#getDnaIntentNetworkHealth) | **GET** /dna/intent/api/v1/network-health | Network Health
[**getDnaIntentSiteHierarchy**](DnaIntentApi.md#getDnaIntentSiteHierarchy) | **GET** /dna/intent/api/v1/site-hierarchy | Site Hierarchy
[**postDnaIntentCreateApplication**](DnaIntentApi.md#postDnaIntentCreateApplication) | **POST** /dna/intent/api/v1/create-application | Post Application
[**postDnaIntentCreateApplicationPolicy**](DnaIntentApi.md#postDnaIntentCreateApplicationPolicy) | **POST** /dna/intent/api/v1/create-application-policy | Post Application Policy Intent
[**postDnaIntentCreateApplicationSet**](DnaIntentApi.md#postDnaIntentCreateApplicationSet) | **POST** /dna/intent/api/v1/create-application-set | Post Application Set
[**postDnaIntentCreateSsid**](DnaIntentApi.md#postDnaIntentCreateSsid) | **POST** /dna/intent/api/v1/create-ssid | Create SSID
[**putDnaIntentUpdateApplication**](DnaIntentApi.md#putDnaIntentUpdateApplication) | **PUT** /dna/intent/api/v1/update-application | Edit Application


# **deleteDnaIntentDeleteApplication**
> deleteDnaIntentDeleteApplication($application_id, $__runsync, $__timeout)

Delete Application

Invoke the API to delete a custom application

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\DnaIntentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$application_id = ""; // string | 
$__runsync = false; // bool | Enable this parameter to execute the API and return a response synchronously
$__timeout = 10; // float | During synchronous execution, this defines the maximum time to wait for a response, before the API execution is terminated

try {
    $apiInstance->deleteDnaIntentDeleteApplication($application_id, $__runsync, $__timeout);
} catch (Exception $e) {
    echo 'Exception when calling DnaIntentApi->deleteDnaIntentDeleteApplication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **string**|  | [default to ]
 **__runsync** | **bool**| Enable this parameter to execute the API and return a response synchronously | [optional] [default to false]
 **__timeout** | **float**| During synchronous execution, this defines the maximum time to wait for a response, before the API execution is terminated | [optional] [default to 10]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDnaIntentDeleteApplicationSet**
> deleteDnaIntentDeleteApplicationSet($application_set_id, $__runsync, $__timeout)

Delete Application Set

Invoke the API to delete a custom application

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\DnaIntentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$application_set_id = ""; // string | 
$__runsync = false; // bool | Enable this parameter to execute the API and return a response synchronously
$__timeout = 10; // float | During synchronous execution, this defines the maximum time to wait for a response, before the API execution is terminated

try {
    $apiInstance->deleteDnaIntentDeleteApplicationSet($application_set_id, $__runsync, $__timeout);
} catch (Exception $e) {
    echo 'Exception when calling DnaIntentApi->deleteDnaIntentDeleteApplicationSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_set_id** | **string**|  | [default to ]
 **__runsync** | **bool**| Enable this parameter to execute the API and return a response synchronously | [optional] [default to false]
 **__timeout** | **float**| During synchronous execution, this defines the maximum time to wait for a response, before the API execution is terminated | [optional] [default to 10]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDnaIntentDeleteSsid**
> \cisco\com\dnac\v1\api\client\model\DeleteSSIDResponse deleteDnaIntentDeleteSsid($device_name, $wireless_network_profile_name, $ssid_name, $interface_name, $__runsync, $__timeout)

Delete SSID

De-provision WLC, also removes wireless network profile, SSID and dynamic interface

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\DnaIntentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$device_name = "device_name_example"; // string | 
$wireless_network_profile_name = "wireless_network_profile_name_example"; // string | 
$ssid_name = "ssid_name_example"; // string | 
$interface_name = "interface_name_example"; // string | 
$__runsync = false; // bool | Enable this parameter to execute the API and return a response synchronously
$__timeout = 10; // float | During synchronous execution, this defines the maximum time to wait for a response, before the API execution is terminated

try {
    $result = $apiInstance->deleteDnaIntentDeleteSsid($device_name, $wireless_network_profile_name, $ssid_name, $interface_name, $__runsync, $__timeout);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DnaIntentApi->deleteDnaIntentDeleteSsid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_name** | **string**|  |
 **wireless_network_profile_name** | **string**|  |
 **ssid_name** | **string**|  |
 **interface_name** | **string**|  |
 **__runsync** | **bool**| Enable this parameter to execute the API and return a response synchronously | [optional] [default to false]
 **__timeout** | **float**| During synchronous execution, this defines the maximum time to wait for a response, before the API execution is terminated | [optional] [default to 10]

### Return type

[**\cisco\com\dnac\v1\api\client\model\DeleteSSIDResponse**](../Model/DeleteSSIDResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDnaIntentApplicationCount**
> getDnaIntentApplicationCount($count, $__runsync, $__timeout)

Get Applications Count

Invoke the API to return the number of defined applications

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\DnaIntentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$count = "count_example"; // string | 
$__runsync = false; // bool | Enable this parameter to execute the API and return a response synchronously
$__timeout = 10; // float | During synchronous execution, this defines the maximum time to wait for a response, before the API execution is terminated

try {
    $apiInstance->getDnaIntentApplicationCount($count, $__runsync, $__timeout);
} catch (Exception $e) {
    echo 'Exception when calling DnaIntentApi->getDnaIntentApplicationCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **string**|  |
 **__runsync** | **bool**| Enable this parameter to execute the API and return a response synchronously | [optional] [default to false]
 **__timeout** | **float**| During synchronous execution, this defines the maximum time to wait for a response, before the API execution is terminated | [optional] [default to 10]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDnaIntentApplicationPolicy**
> getDnaIntentApplicationPolicy($__runsync, $__timeout, $offset, $limit, $application_policy_namespace)

Get Application Policies

Invoke the API to return all (or specific) application-policy(ies)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\DnaIntentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$__runsync = false; // bool | Enable this parameter to execute the API and return a response synchronously
$__timeout = 10; // float | During synchronous execution, this defines the maximum time to wait for a response, before the API execution is terminated
$offset = 1; // float | 
$limit = 500; // float | 
$application_policy_namespace = ""; // string | 

try {
    $apiInstance->getDnaIntentApplicationPolicy($__runsync, $__timeout, $offset, $limit, $application_policy_namespace);
} catch (Exception $e) {
    echo 'Exception when calling DnaIntentApi->getDnaIntentApplicationPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **__runsync** | **bool**| Enable this parameter to execute the API and return a response synchronously | [optional] [default to false]
 **__timeout** | **float**| During synchronous execution, this defines the maximum time to wait for a response, before the API execution is terminated | [optional] [default to 10]
 **offset** | **float**|  | [optional] [default to 1]
 **limit** | **float**|  | [optional] [default to 500]
 **application_policy_namespace** | **string**|  | [optional] [default to ]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDnaIntentApplicationSetCount**
> getDnaIntentApplicationSetCount($count, $__runsync, $__timeout)

Get Application Sets Count

Invoke the API to return the number of defined application sets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\DnaIntentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$count = "count_example"; // string | 
$__runsync = false; // bool | Enable this parameter to execute the API and return a response synchronously
$__timeout = 10; // float | During synchronous execution, this defines the maximum time to wait for a response, before the API execution is terminated

try {
    $apiInstance->getDnaIntentApplicationSetCount($count, $__runsync, $__timeout);
} catch (Exception $e) {
    echo 'Exception when calling DnaIntentApi->getDnaIntentApplicationSetCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **string**|  |
 **__runsync** | **bool**| Enable this parameter to execute the API and return a response synchronously | [optional] [default to false]
 **__timeout** | **float**| During synchronous execution, this defines the maximum time to wait for a response, before the API execution is terminated | [optional] [default to 10]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDnaIntentApplicationSets**
> getDnaIntentApplicationSets($__runsync, $__timeout, $offset, $limit, $application_set_name)

Get Application Sets

Invoke the API to return all (or specific) defined application-set(s)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\DnaIntentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$__runsync = false; // bool | Enable this parameter to execute the API and return a response synchronously
$__timeout = 10; // float | During synchronous execution, this defines the maximum time to wait for a response, before the API execution is terminated
$offset = 1; // float | 
$limit = 500; // float | 
$application_set_name = ""; // string | 

try {
    $apiInstance->getDnaIntentApplicationSets($__runsync, $__timeout, $offset, $limit, $application_set_name);
} catch (Exception $e) {
    echo 'Exception when calling DnaIntentApi->getDnaIntentApplicationSets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **__runsync** | **bool**| Enable this parameter to execute the API and return a response synchronously | [optional] [default to false]
 **__timeout** | **float**| During synchronous execution, this defines the maximum time to wait for a response, before the API execution is terminated | [optional] [default to 10]
 **offset** | **float**|  | [optional] [default to 1]
 **limit** | **float**|  | [optional] [default to 500]
 **application_set_name** | **string**|  | [optional] [default to ]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDnaIntentApplications**
> getDnaIntentApplications($__runsync, $__timeout, $offset, $limit, $application_name)

Get Applications

Invoke the API to return the list of all (or specific) defined application(s)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\DnaIntentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$__runsync = false; // bool | Enable this parameter to execute the API and return a response synchronously
$__timeout = 10; // float | During synchronous execution, this defines the maximum time to wait for a response, before the API execution is terminated
$offset = 1; // float | 
$limit = 500; // float | 
$application_name = ""; // string | 

try {
    $apiInstance->getDnaIntentApplications($__runsync, $__timeout, $offset, $limit, $application_name);
} catch (Exception $e) {
    echo 'Exception when calling DnaIntentApi->getDnaIntentApplications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **__runsync** | **bool**| Enable this parameter to execute the API and return a response synchronously | [optional] [default to false]
 **__timeout** | **float**| During synchronous execution, this defines the maximum time to wait for a response, before the API execution is terminated | [optional] [default to 10]
 **offset** | **float**|  | [optional] [default to 1]
 **limit** | **float**|  | [optional] [default to 500]
 **application_name** | **string**|  | [optional] [default to ]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDnaIntentClieDetail**
> \cisco\com\dnac\v1\api\client\model\ClientDetailResponse getDnaIntentClieDetail($timestamp, $mac_address, $__runsync, $__timeout)

Client Detail

Get Client Details for a single client

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\DnaIntentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$timestamp = ""; // string | timestamp
$mac_address = ""; // string | MAC Address of the client
$__runsync = false; // bool | Enable this parameter to execute the API and return a response synchronously
$__timeout = 10; // float | During synchronous execution, this defines the maximum time to wait for a response, before the API execution is terminated

try {
    $result = $apiInstance->getDnaIntentClieDetail($timestamp, $mac_address, $__runsync, $__timeout);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DnaIntentApi->getDnaIntentClieDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **timestamp** | **string**| timestamp | [default to ]
 **mac_address** | **string**| MAC Address of the client | [default to ]
 **__runsync** | **bool**| Enable this parameter to execute the API and return a response synchronously | [optional] [default to false]
 **__timeout** | **float**| During synchronous execution, this defines the maximum time to wait for a response, before the API execution is terminated | [optional] [default to 10]

### Return type

[**\cisco\com\dnac\v1\api\client\model\ClientDetailResponse**](../Model/ClientDetailResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDnaIntentClientHealth**
> \cisco\com\dnac\v1\api\client\model\ClientHealthResponse getDnaIntentClientHealth($start_time, $end_time, $__runsync, $__timeout)

Client Health

Get overall Client Health along with beak down on categories of wired and wireless

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\DnaIntentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_time = ""; // string | Start Time
$end_time = ""; // string | End Time
$__runsync = false; // bool | Enable this parameter to execute the API and return a response synchronously
$__timeout = 10; // float | During synchronous execution, this defines the maximum time to wait for a response, before the API execution is terminated

try {
    $result = $apiInstance->getDnaIntentClientHealth($start_time, $end_time, $__runsync, $__timeout);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DnaIntentApi->getDnaIntentClientHealth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_time** | **string**| Start Time | [default to ]
 **end_time** | **string**| End Time | [default to ]
 **__runsync** | **bool**| Enable this parameter to execute the API and return a response synchronously | [optional] [default to false]
 **__timeout** | **float**| During synchronous execution, this defines the maximum time to wait for a response, before the API execution is terminated | [optional] [default to 10]

### Return type

[**\cisco\com\dnac\v1\api\client\model\ClientHealthResponse**](../Model/ClientHealthResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDnaIntentNetworkDeviceDetail**
> \cisco\com\dnac\v1\api\client\model\NetworkDeviceDetailResponse getDnaIntentNetworkDeviceDetail($__runsync, $__timeout, $timestamp, $search_by, $identifier)

Network Device Detail

Get Network Device Detail

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\DnaIntentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$__runsync = false; // bool | Enable this parameter to execute the API and return a response synchronously
$__timeout = 10; // float | During synchronous execution, this defines the maximum time to wait for a response, before the API execution is terminated
$timestamp = ""; // string | timestamp
$search_by = ""; // string | MAC Address or UUID or Name of the Device
$identifier = ""; // string | macAddress or uuid or nwDeviceName

try {
    $result = $apiInstance->getDnaIntentNetworkDeviceDetail($__runsync, $__timeout, $timestamp, $search_by, $identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DnaIntentApi->getDnaIntentNetworkDeviceDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **__runsync** | **bool**| Enable this parameter to execute the API and return a response synchronously | [optional] [default to false]
 **__timeout** | **float**| During synchronous execution, this defines the maximum time to wait for a response, before the API execution is terminated | [optional] [default to 10]
 **timestamp** | **string**| timestamp | [optional] [default to ]
 **search_by** | **string**| MAC Address or UUID or Name of the Device | [optional] [default to ]
 **identifier** | **string**| macAddress or uuid or nwDeviceName | [optional] [default to ]

### Return type

[**\cisco\com\dnac\v1\api\client\model\NetworkDeviceDetailResponse**](../Model/NetworkDeviceDetailResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDnaIntentNetworkHealth**
> getDnaIntentNetworkHealth($start_time, $end_time, $__runsync, $__timeout)

Network Health

Network Devices and their health by category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\DnaIntentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_time = ""; // string | Start Time
$end_time = ""; // string | End Time
$__runsync = false; // bool | Enable this parameter to execute the API and return a response synchronously
$__timeout = 10; // float | During synchronous execution, this defines the maximum time to wait for a response, before the API execution is terminated

try {
    $apiInstance->getDnaIntentNetworkHealth($start_time, $end_time, $__runsync, $__timeout);
} catch (Exception $e) {
    echo 'Exception when calling DnaIntentApi->getDnaIntentNetworkHealth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_time** | **string**| Start Time | [default to ]
 **end_time** | **string**| End Time | [default to ]
 **__runsync** | **bool**| Enable this parameter to execute the API and return a response synchronously | [optional] [default to false]
 **__timeout** | **float**| During synchronous execution, this defines the maximum time to wait for a response, before the API execution is terminated | [optional] [default to 10]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDnaIntentSiteHierarchy**
> \cisco\com\dnac\v1\api\client\model\SiteHierarchyResponse getDnaIntentSiteHierarchy($timestamp, $__runsync, $__timeout)

Site Hierarchy

Site Hierarchy along with health Info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\DnaIntentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$timestamp = ""; // string | Timestamp
$__runsync = false; // bool | Enable this parameter to execute the API and return a response synchronously
$__timeout = 10; // float | During synchronous execution, this defines the maximum time to wait for a response, before the API execution is terminated

try {
    $result = $apiInstance->getDnaIntentSiteHierarchy($timestamp, $__runsync, $__timeout);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DnaIntentApi->getDnaIntentSiteHierarchy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **timestamp** | **string**| Timestamp | [default to ]
 **__runsync** | **bool**| Enable this parameter to execute the API and return a response synchronously | [optional] [default to false]
 **__timeout** | **float**| During synchronous execution, this defines the maximum time to wait for a response, before the API execution is terminated | [optional] [default to 10]

### Return type

[**\cisco\com\dnac\v1\api\client\model\SiteHierarchyResponse**](../Model/SiteHierarchyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postDnaIntentCreateApplication**
> postDnaIntentCreateApplication($__runsync, $__timeout)

Post Application

Invoke the API to create a custom application

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\DnaIntentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$__runsync = false; // bool | Enable this parameter to execute the API and return a response synchronously
$__timeout = 10; // float | During synchronous execution, this defines the maximum time to wait for a response, before the API execution is terminated

try {
    $apiInstance->postDnaIntentCreateApplication($__runsync, $__timeout);
} catch (Exception $e) {
    echo 'Exception when calling DnaIntentApi->postDnaIntentCreateApplication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **__runsync** | **bool**| Enable this parameter to execute the API and return a response synchronously | [optional] [default to false]
 **__timeout** | **float**| During synchronous execution, this defines the maximum time to wait for a response, before the API execution is terminated | [optional] [default to 10]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postDnaIntentCreateApplicationPolicy**
> postDnaIntentCreateApplicationPolicy($__runsync, $__timeout)

Post Application Policy Intent

Invoke the API to create, modify or delete an application-policy

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\DnaIntentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$__runsync = false; // bool | Enable this parameter to execute the API and return a response synchronously
$__timeout = 10; // float | During synchronous execution, this defines the maximum time to wait for a response, before the API execution is terminated

try {
    $apiInstance->postDnaIntentCreateApplicationPolicy($__runsync, $__timeout);
} catch (Exception $e) {
    echo 'Exception when calling DnaIntentApi->postDnaIntentCreateApplicationPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **__runsync** | **bool**| Enable this parameter to execute the API and return a response synchronously | [optional] [default to false]
 **__timeout** | **float**| During synchronous execution, this defines the maximum time to wait for a response, before the API execution is terminated | [optional] [default to 10]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postDnaIntentCreateApplicationSet**
> postDnaIntentCreateApplicationSet($__runsync, $__timeout)

Post Application Set

Invoke the API to create a custom application set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\DnaIntentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$__runsync = false; // bool | Enable this parameter to execute the API and return a response synchronously
$__timeout = 10; // float | During synchronous execution, this defines the maximum time to wait for a response, before the API execution is terminated

try {
    $apiInstance->postDnaIntentCreateApplicationSet($__runsync, $__timeout);
} catch (Exception $e) {
    echo 'Exception when calling DnaIntentApi->postDnaIntentCreateApplicationSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **__runsync** | **bool**| Enable this parameter to execute the API and return a response synchronously | [optional] [default to false]
 **__timeout** | **float**| During synchronous execution, this defines the maximum time to wait for a response, before the API execution is terminated | [optional] [default to 10]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postDnaIntentCreateSsid**
> \cisco\com\dnac\v1\api\client\model\CreateSSIDResponse postDnaIntentCreateSsid($request, $__runsync, $__timeout)

Create SSID

Creates non fabric enterprise SSID, dynamic interface, Wireless Network Profile and provisions WLC and AP

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\DnaIntentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\CreateSSIDRequest(); // \cisco\com\dnac\v1\api\client\model\CreateSSIDRequest | request
$__runsync = false; // bool | Enable this parameter to execute the API and return a response synchronously
$__timeout = 10; // float | During synchronous execution, this defines the maximum time to wait for a response, before the API execution is terminated

try {
    $result = $apiInstance->postDnaIntentCreateSsid($request, $__runsync, $__timeout);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DnaIntentApi->postDnaIntentCreateSsid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\CreateSSIDRequest**](../Model/CreateSSIDRequest.md)| request |
 **__runsync** | **bool**| Enable this parameter to execute the API and return a response synchronously | [optional] [default to false]
 **__timeout** | **float**| During synchronous execution, this defines the maximum time to wait for a response, before the API execution is terminated | [optional] [default to 10]

### Return type

[**\cisco\com\dnac\v1\api\client\model\CreateSSIDResponse**](../Model/CreateSSIDResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putDnaIntentUpdateApplication**
> putDnaIntentUpdateApplication($__runsync, $__timeout)

Edit Application

Invoke the API to create a custom application

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\DnaIntentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$__runsync = false; // bool | Enable this parameter to execute the API and return a response synchronously
$__timeout = 10; // float | During synchronous execution, this defines the maximum time to wait for a response, before the API execution is terminated

try {
    $apiInstance->putDnaIntentUpdateApplication($__runsync, $__timeout);
} catch (Exception $e) {
    echo 'Exception when calling DnaIntentApi->putDnaIntentUpdateApplication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **__runsync** | **bool**| Enable this parameter to execute the API and return a response synchronously | [optional] [default to false]
 **__timeout** | **float**| During synchronous execution, this defines the maximum time to wait for a response, before the API execution is terminated | [optional] [default to 10]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

