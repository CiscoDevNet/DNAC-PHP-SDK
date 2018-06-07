# cisco\com\dnac\v1\api\client\InterfaceApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getInterface**](InterfaceApi.md#getInterface) | **GET** /api/v1/interface | Retrieves all interfaces
[**getInterfaceById**](InterfaceApi.md#getInterfaceById) | **GET** /api/v1/interface/${id} | Retrieves interface by ID
[**getInterfaceCount**](InterfaceApi.md#getInterfaceCount) | **GET** /api/v1/interface/count | Retrieves interface count
[**getInterfaceIpAddressByIpAddress**](InterfaceApi.md#getInterfaceIpAddressByIpAddress) | **GET** /api/v1/interface/ip-address/${ipAddress} | Retrieves interfaces by IP address
[**getInterfaceIsis**](InterfaceApi.md#getInterfaceIsis) | **GET** /api/v1/interface/isis | Retrieves ISIS interfaces
[**getInterfaceNetworkDeviceByDeviceId**](InterfaceApi.md#getInterfaceNetworkDeviceByDeviceId) | **GET** /api/v1/interface/network-device/${deviceId} | Retrieves device interfaces
[**getInterfaceNetworkDeviceCountByDeviceId**](InterfaceApi.md#getInterfaceNetworkDeviceCountByDeviceId) | **GET** /api/v1/interface/network-device/${deviceId}/count | Retrieves device interface count
[**getInterfaceNetworkDeviceInterfaceNameByDeviceId**](InterfaceApi.md#getInterfaceNetworkDeviceInterfaceNameByDeviceId) | **GET** /api/v1/interface/network-device/${deviceId}/interface-name | Retrieves interface for the given device and interface name
[**getInterfaceOspf**](InterfaceApi.md#getInterfaceOspf) | **GET** /api/v1/interface/ospf | Retrieves OSPF interfaces
[**getNetworkDeviceByDeviceIdRange**](InterfaceApi.md#getNetworkDeviceByDeviceIdRange) | **GET** /api/v1/interface/network-device/${deviceId}/${startIndex}/${recordsToReturn} | Retrieves device interfaces in the given range


# **getInterface**
> \cisco\com\dnac\v1\api\client\model\DeviceIfListResult getInterface()

Retrieves all interfaces

Gets all available interfaces with a maximum limit of 500

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\InterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getInterface();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InterfaceApi->getInterface: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\cisco\com\dnac\v1\api\client\model\DeviceIfListResult**](../Model/DeviceIfListResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInterfaceById**
> \cisco\com\dnac\v1\api\client\model\DeviceIfResult getInterfaceById($id)

Retrieves interface by ID

Gets the interface for the given interface ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\InterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Interface ID

try {
    $result = $apiInstance->getInterfaceById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InterfaceApi->getInterfaceById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Interface ID |

### Return type

[**\cisco\com\dnac\v1\api\client\model\DeviceIfResult**](../Model/DeviceIfResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInterfaceCount**
> \cisco\com\dnac\v1\api\client\model\CountResult getInterfaceCount()

Retrieves interface count

Gets the count of interfaces for all devices

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\InterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getInterfaceCount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InterfaceApi->getInterfaceCount: ', $e->getMessage(), PHP_EOL;
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

# **getInterfaceIpAddressByIpAddress**
> \cisco\com\dnac\v1\api\client\model\DeviceIfListResult getInterfaceIpAddressByIpAddress($ip_address)

Retrieves interfaces by IP address

Gets list of interfaces with the given IP address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\InterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ip_address = "ip_address_example"; // string | IP address of the interface

try {
    $result = $apiInstance->getInterfaceIpAddressByIpAddress($ip_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InterfaceApi->getInterfaceIpAddressByIpAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ip_address** | **string**| IP address of the interface |

### Return type

[**\cisco\com\dnac\v1\api\client\model\DeviceIfListResult**](../Model/DeviceIfListResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInterfaceIsis**
> \cisco\com\dnac\v1\api\client\model\DeviceIfListResult getInterfaceIsis()

Retrieves ISIS interfaces

Gets the interfaces that has ISIS enabled

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\InterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getInterfaceIsis();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InterfaceApi->getInterfaceIsis: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\cisco\com\dnac\v1\api\client\model\DeviceIfListResult**](../Model/DeviceIfListResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInterfaceNetworkDeviceByDeviceId**
> \cisco\com\dnac\v1\api\client\model\DeviceIfListResult getInterfaceNetworkDeviceByDeviceId($device_id)

Retrieves device interfaces

Gets list of interfaces for the given device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\InterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$device_id = "device_id_example"; // string | Device ID

try {
    $result = $apiInstance->getInterfaceNetworkDeviceByDeviceId($device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InterfaceApi->getInterfaceNetworkDeviceByDeviceId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **string**| Device ID |

### Return type

[**\cisco\com\dnac\v1\api\client\model\DeviceIfListResult**](../Model/DeviceIfListResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInterfaceNetworkDeviceCountByDeviceId**
> \cisco\com\dnac\v1\api\client\model\CountResult getInterfaceNetworkDeviceCountByDeviceId($device_id)

Retrieves device interface count

Gets the interface count for the given device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\InterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$device_id = "device_id_example"; // string | Device ID

try {
    $result = $apiInstance->getInterfaceNetworkDeviceCountByDeviceId($device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InterfaceApi->getInterfaceNetworkDeviceCountByDeviceId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **string**| Device ID |

### Return type

[**\cisco\com\dnac\v1\api\client\model\CountResult**](../Model/CountResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInterfaceNetworkDeviceInterfaceNameByDeviceId**
> \cisco\com\dnac\v1\api\client\model\DeviceIfResult getInterfaceNetworkDeviceInterfaceNameByDeviceId($device_id, $name)

Retrieves interface for the given device and interface name

Gets the interface for the given device ID and for the given interface name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\InterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$device_id = "device_id_example"; // string | Device ID
$name = "name_example"; // string | Interface name

try {
    $result = $apiInstance->getInterfaceNetworkDeviceInterfaceNameByDeviceId($device_id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InterfaceApi->getInterfaceNetworkDeviceInterfaceNameByDeviceId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **string**| Device ID |
 **name** | **string**| Interface name |

### Return type

[**\cisco\com\dnac\v1\api\client\model\DeviceIfResult**](../Model/DeviceIfResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInterfaceOspf**
> \cisco\com\dnac\v1\api\client\model\DeviceIfListResult getInterfaceOspf()

Retrieves OSPF interfaces

Gets the interfaces that has OSPF enabled

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\InterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getInterfaceOspf();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InterfaceApi->getInterfaceOspf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\cisco\com\dnac\v1\api\client\model\DeviceIfListResult**](../Model/DeviceIfListResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNetworkDeviceByDeviceIdRange**
> \cisco\com\dnac\v1\api\client\model\DeviceIfListResult getNetworkDeviceByDeviceIdRange($device_id, $start_index, $records_to_return)

Retrieves device interfaces in the given range

Gets the list of interfaces for the device for the specified range

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\InterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$device_id = "device_id_example"; // string | Device ID
$start_index = 56; // int | Start index
$records_to_return = 56; // int | Number of records to return

try {
    $result = $apiInstance->getNetworkDeviceByDeviceIdRange($device_id, $start_index, $records_to_return);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InterfaceApi->getNetworkDeviceByDeviceIdRange: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **string**| Device ID |
 **start_index** | **int**| Start index |
 **records_to_return** | **int**| Number of records to return |

### Return type

[**\cisco\com\dnac\v1\api\client\model\DeviceIfListResult**](../Model/DeviceIfListResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

