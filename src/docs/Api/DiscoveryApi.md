# cisco\com\dnac\v1\api\client\DiscoveryApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteDiscovery**](DiscoveryApi.md#deleteDiscovery) | **DELETE** /api/v1/discovery | Deletes all discovery
[**deleteDiscoveryById**](DiscoveryApi.md#deleteDiscoveryById) | **DELETE** /api/v1/discovery/${id} | Deletes the discovery specified by id
[**deleteDiscoveryRange**](DiscoveryApi.md#deleteDiscoveryRange) | **DELETE** /api/v1/discovery/${startIndex}/${recordsToDelete} | Deletes the discovery in the given range
[**getDiscoveryAutoCompleteById**](DiscoveryApi.md#getDiscoveryAutoCompleteById) | **GET** /api/v1/discovery/${id}/autoComplete | Retrieve autoComplete values from a discovery based on id
[**getDiscoveryById**](DiscoveryApi.md#getDiscoveryById) | **GET** /api/v1/discovery/${id} | Retrieves the discovery specified by id
[**getDiscoveryCount**](DiscoveryApi.md#getDiscoveryCount) | **GET** /api/v1/discovery/count | Retrieves the number of discoveries
[**getDiscoveryJob**](DiscoveryApi.md#getDiscoveryJob) | **GET** /api/v1/discovery/job | Retrieves the list of discovery jobs for the given IP
[**getDiscoveryJobById**](DiscoveryApi.md#getDiscoveryJobById) | **GET** /api/v1/discovery/${id}/job | Retrieves list of discovery jobs for the specified discovery id
[**getDiscoveryNetworkDeviceByIdRange**](DiscoveryApi.md#getDiscoveryNetworkDeviceByIdRange) | **GET** /api/v1/discovery/${id}/network-device/${startIndex}/${recordsToReturn} | Retrieves the range of network devices discovered for the given discovery
[**getDiscoveryNetworkDeviceCountById**](DiscoveryApi.md#getDiscoveryNetworkDeviceCountById) | **GET** /api/v1/discovery/${id}/network-device/count | Retrieves the number of network devices discovered in the discovery specified by id
[**getDiscoveryNetworkNetworkDeviceById**](DiscoveryApi.md#getDiscoveryNetworkNetworkDeviceById) | **GET** /api/v1/discovery/${id}/network-device | Retrieves the network devices discovered in the discovery specified by id
[**getDiscoveryRange**](DiscoveryApi.md#getDiscoveryRange) | **GET** /api/v1/discovery/${startIndex}/${recordsToReturn} | Retrieves the discovery in the given range
[**getDiscoverySummaryById**](DiscoveryApi.md#getDiscoverySummaryById) | **GET** /api/v1/discovery/${id}/summary | Retrieve network devices from a discovery on given filters
[**postDiscovery**](DiscoveryApi.md#postDiscovery) | **POST** /api/v1/discovery | Starts a new discovery process and returns a task-id
[**putDiscovery**](DiscoveryApi.md#putDiscovery) | **PUT** /api/v1/discovery | Updates an existing discovery specified by id - only for starting/stopping the discovery


# **deleteDiscovery**
> \cisco\com\dnac\v1\api\client\model\TaskIdResult deleteDiscovery()

Deletes all discovery

Stops all the discoveries and removes them

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\DiscoveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->deleteDiscovery();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscoveryApi->deleteDiscovery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\cisco\com\dnac\v1\api\client\model\TaskIdResult**](../Model/TaskIdResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDiscoveryById**
> \cisco\com\dnac\v1\api\client\model\TaskIdResult deleteDiscoveryById($id)

Deletes the discovery specified by id

Stops the discovery for the given ID and removes it

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\DiscoveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Discovery ID

try {
    $result = $apiInstance->deleteDiscoveryById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscoveryApi->deleteDiscoveryById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Discovery ID |

### Return type

[**\cisco\com\dnac\v1\api\client\model\TaskIdResult**](../Model/TaskIdResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDiscoveryRange**
> \cisco\com\dnac\v1\api\client\model\TaskIdResult deleteDiscoveryRange($start_index, $records_to_delete)

Deletes the discovery in the given range

Stops discovery for the given range and removes them

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\DiscoveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_index = 56; // int | Start index
$records_to_delete = 56; // int | Number of records to delete

try {
    $result = $apiInstance->deleteDiscoveryRange($start_index, $records_to_delete);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscoveryApi->deleteDiscoveryRange: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_index** | **int**| Start index |
 **records_to_delete** | **int**| Number of records to delete |

### Return type

[**\cisco\com\dnac\v1\api\client\model\TaskIdResult**](../Model/TaskIdResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDiscoveryAutoCompleteById**
> \cisco\com\dnac\v1\api\client\model\SuccessResultList getDiscoveryAutoCompleteById($id, $task_id, $ip_address, $ping_status, $snmp_status, $cli_status, $netconf_status, $http_status)

Retrieve autoComplete values from a discovery based on id

Gets the autoComplete values from a discovery job

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\DiscoveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | id
$task_id = "task_id_example"; // string | taskId
$ip_address = "ip_address_example"; // string | ipAddress
$ping_status = "ping_status_example"; // string | pingStatus
$snmp_status = "snmp_status_example"; // string | snmpStatus
$cli_status = "cli_status_example"; // string | cliStatus
$netconf_status = "netconf_status_example"; // string | netconfStatus
$http_status = "http_status_example"; // string | httpStatus

try {
    $result = $apiInstance->getDiscoveryAutoCompleteById($id, $task_id, $ip_address, $ping_status, $snmp_status, $cli_status, $netconf_status, $http_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscoveryApi->getDiscoveryAutoCompleteById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id |
 **task_id** | **string**| taskId | [optional]
 **ip_address** | **string**| ipAddress | [optional]
 **ping_status** | **string**| pingStatus | [optional]
 **snmp_status** | **string**| snmpStatus | [optional]
 **cli_status** | **string**| cliStatus | [optional]
 **netconf_status** | **string**| netconfStatus | [optional]
 **http_status** | **string**| httpStatus | [optional]

### Return type

[**\cisco\com\dnac\v1\api\client\model\SuccessResultList**](../Model/SuccessResultList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDiscoveryById**
> \cisco\com\dnac\v1\api\client\model\DiscoveryNIOResult getDiscoveryById($id)

Retrieves the discovery specified by id

Gets discovery by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\DiscoveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Discovery ID

try {
    $result = $apiInstance->getDiscoveryById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscoveryApi->getDiscoveryById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Discovery ID |

### Return type

[**\cisco\com\dnac\v1\api\client\model\DiscoveryNIOResult**](../Model/DiscoveryNIOResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDiscoveryCount**
> \cisco\com\dnac\v1\api\client\model\CountResult getDiscoveryCount()

Retrieves the number of discoveries

Gets the count of all available discovery jobs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\DiscoveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getDiscoveryCount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscoveryApi->getDiscoveryCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\cisco\com\dnac\v1\api\client\model\CountResult**](../Model/CountResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDiscoveryJob**
> \cisco\com\dnac\v1\api\client\model\DiscoveryJobNIOListResult getDiscoveryJob($ip_address, $offset, $limit, $name)

Retrieves the list of discovery jobs for the given IP

Gets the list of discovery jobs for the given IP

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\DiscoveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ip_address = "ip_address_example"; // string | ipAddress
$offset = 56; // int | offset
$limit = 56; // int | limit
$name = "name_example"; // string | name

try {
    $result = $apiInstance->getDiscoveryJob($ip_address, $offset, $limit, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscoveryApi->getDiscoveryJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ip_address** | **string**| ipAddress |
 **offset** | **int**| offset | [optional]
 **limit** | **int**| limit | [optional]
 **name** | **string**| name | [optional]

### Return type

[**\cisco\com\dnac\v1\api\client\model\DiscoveryJobNIOListResult**](../Model/DiscoveryJobNIOListResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDiscoveryJobById**
> \cisco\com\dnac\v1\api\client\model\DiscoveryJobNIOListResult getDiscoveryJobById($id, $offset, $limit, $ip_address)

Retrieves list of discovery jobs for the specified discovery id

Gets the list of discovery jobs for the given id. The result can optionally be filtered based on IP

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\DiscoveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Discovery ID
$offset = 56; // int | offset
$limit = 56; // int | limit
$ip_address = "ip_address_example"; // string | ipAddress

try {
    $result = $apiInstance->getDiscoveryJobById($id, $offset, $limit, $ip_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscoveryApi->getDiscoveryJobById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Discovery ID |
 **offset** | **int**| offset | [optional]
 **limit** | **int**| limit | [optional]
 **ip_address** | **string**| ipAddress | [optional]

### Return type

[**\cisco\com\dnac\v1\api\client\model\DiscoveryJobNIOListResult**](../Model/DiscoveryJobNIOListResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDiscoveryNetworkDeviceByIdRange**
> \cisco\com\dnac\v1\api\client\model\NetworkDeviceNIOListResult getDiscoveryNetworkDeviceByIdRange($id, $start_index, $records_to_return, $task_id)

Retrieves the range of network devices discovered for the given discovery

Gets the network devices discovered for the given discovery and for the given range. The maximum number of records that could be retrieved is 500

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\DiscoveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Discovery ID
$start_index = 56; // int | Start index
$records_to_return = 56; // int | Number of records to return
$task_id = "task_id_example"; // string | taskId

try {
    $result = $apiInstance->getDiscoveryNetworkDeviceByIdRange($id, $start_index, $records_to_return, $task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscoveryApi->getDiscoveryNetworkDeviceByIdRange: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Discovery ID |
 **start_index** | **int**| Start index |
 **records_to_return** | **int**| Number of records to return |
 **task_id** | **string**| taskId | [optional]

### Return type

[**\cisco\com\dnac\v1\api\client\model\NetworkDeviceNIOListResult**](../Model/NetworkDeviceNIOListResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDiscoveryNetworkDeviceCountById**
> \cisco\com\dnac\v1\api\client\model\CountResult getDiscoveryNetworkDeviceCountById($id, $task_id)

Retrieves the number of network devices discovered in the discovery specified by id

Gets the count of network devices discovered in the given discovery

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\DiscoveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Discovery ID
$task_id = "task_id_example"; // string | taskId

try {
    $result = $apiInstance->getDiscoveryNetworkDeviceCountById($id, $task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscoveryApi->getDiscoveryNetworkDeviceCountById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Discovery ID |
 **task_id** | **string**| taskId | [optional]

### Return type

[**\cisco\com\dnac\v1\api\client\model\CountResult**](../Model/CountResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDiscoveryNetworkNetworkDeviceById**
> \cisco\com\dnac\v1\api\client\model\NetworkDeviceNIOListResult getDiscoveryNetworkNetworkDeviceById($id, $task_id)

Retrieves the network devices discovered in the discovery specified by id

Gets the network devices discovered for the given discovery

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\DiscoveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | id
$task_id = "task_id_example"; // string | taskId

try {
    $result = $apiInstance->getDiscoveryNetworkNetworkDeviceById($id, $task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscoveryApi->getDiscoveryNetworkNetworkDeviceById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id |
 **task_id** | **string**| taskId | [optional]

### Return type

[**\cisco\com\dnac\v1\api\client\model\NetworkDeviceNIOListResult**](../Model/NetworkDeviceNIOListResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDiscoveryRange**
> \cisco\com\dnac\v1\api\client\model\DiscoveryNIOListResult getDiscoveryRange($start_index, $records_to_return)

Retrieves the discovery in the given range

Gets the discovery for the range specified

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\DiscoveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_index = 56; // int | Start index
$records_to_return = 56; // int | Number of records to return

try {
    $result = $apiInstance->getDiscoveryRange($start_index, $records_to_return);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscoveryApi->getDiscoveryRange: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_index** | **int**| Start index |
 **records_to_return** | **int**| Number of records to return |

### Return type

[**\cisco\com\dnac\v1\api\client\model\DiscoveryNIOListResult**](../Model/DiscoveryNIOListResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDiscoverySummaryById**
> \cisco\com\dnac\v1\api\client\model\CountResult getDiscoverySummaryById($id, $task_id, $sort_by, $sort_order, $ip_address, $ping_status, $snmp_status, $cli_status, $netconf_status, $http_status)

Retrieve network devices from a discovery on given filters

Gets the network devices from a discovery job based on given filters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\DiscoveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | id
$task_id = "task_id_example"; // string | taskId
$sort_by = "sort_by_example"; // string | sortBy
$sort_order = "sort_order_example"; // string | sortOrder
$ip_address = array("ip_address_example"); // string[] | ipAddress
$ping_status = array("ping_status_example"); // string[] | pingStatus
$snmp_status = array("snmp_status_example"); // string[] | snmpStatus
$cli_status = array("cli_status_example"); // string[] | cliStatus
$netconf_status = array("netconf_status_example"); // string[] | netconfStatus
$http_status = array("http_status_example"); // string[] | httpStatus

try {
    $result = $apiInstance->getDiscoverySummaryById($id, $task_id, $sort_by, $sort_order, $ip_address, $ping_status, $snmp_status, $cli_status, $netconf_status, $http_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscoveryApi->getDiscoverySummaryById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id |
 **task_id** | **string**| taskId | [optional]
 **sort_by** | **string**| sortBy | [optional]
 **sort_order** | **string**| sortOrder | [optional]
 **ip_address** | [**string[]**](../Model/string.md)| ipAddress | [optional]
 **ping_status** | [**string[]**](../Model/string.md)| pingStatus | [optional]
 **snmp_status** | [**string[]**](../Model/string.md)| snmpStatus | [optional]
 **cli_status** | [**string[]**](../Model/string.md)| cliStatus | [optional]
 **netconf_status** | [**string[]**](../Model/string.md)| netconfStatus | [optional]
 **http_status** | [**string[]**](../Model/string.md)| httpStatus | [optional]

### Return type

[**\cisco\com\dnac\v1\api\client\model\CountResult**](../Model/CountResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postDiscovery**
> \cisco\com\dnac\v1\api\client\model\TaskIdResult postDiscovery($request)

Starts a new discovery process and returns a task-id

Initiates discovery with the given parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\DiscoveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\InventoryRequest(); // \cisco\com\dnac\v1\api\client\model\InventoryRequest | request

try {
    $result = $apiInstance->postDiscovery($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscoveryApi->postDiscovery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\InventoryRequest**](../Model/InventoryRequest.md)| request |

### Return type

[**\cisco\com\dnac\v1\api\client\model\TaskIdResult**](../Model/TaskIdResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putDiscovery**
> \cisco\com\dnac\v1\api\client\model\TaskIdResult putDiscovery($request)

Updates an existing discovery specified by id - only for starting/stopping the discovery

Stops or starts an existing discovery

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\DiscoveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\DiscoveryNIO(); // \cisco\com\dnac\v1\api\client\model\DiscoveryNIO | request

try {
    $result = $apiInstance->putDiscovery($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscoveryApi->putDiscovery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\DiscoveryNIO**](../Model/DiscoveryNIO.md)| request |

### Return type

[**\cisco\com\dnac\v1\api\client\model\TaskIdResult**](../Model/TaskIdResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

