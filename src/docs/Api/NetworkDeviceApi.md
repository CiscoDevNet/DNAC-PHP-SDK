# cisco\com\dnac\v1\api\client\NetworkDeviceApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteNetworkDeviceById**](NetworkDeviceApi.md#deleteNetworkDeviceById) | **DELETE** /api/v1/network-device/${id} | Delete network device by ID
[**getNetworkDevice**](NetworkDeviceApi.md#getNetworkDevice) | **GET** /api/v1/network-device | Retrieves all network devices
[**getNetworkDeviceAutocomplete**](NetworkDeviceApi.md#getNetworkDeviceAutocomplete) | **GET** /api/v1/network-device/autocomplete | Retrieves all network devices
[**getNetworkDeviceBriefById**](NetworkDeviceApi.md#getNetworkDeviceBriefById) | **GET** /api/v1/network-device/${id}/brief | Retrieves network device brief by ID
[**getNetworkDeviceById**](NetworkDeviceApi.md#getNetworkDeviceById) | **GET** /api/v1/network-device/${id} | Retrieves network device by ID
[**getNetworkDeviceCollectionScheduleById**](NetworkDeviceApi.md#getNetworkDeviceCollectionScheduleById) | **GET** /api/v1/network-device/${id}/collection-schedule | Retrieves the collection interval specified by device ID
[**getNetworkDeviceCollectionScheduleGlobal**](NetworkDeviceApi.md#getNetworkDeviceCollectionScheduleGlobal) | **GET** /api/v1/network-device/collection-schedule/global | Retrieves the collection interval of all devices
[**getNetworkDeviceConfig**](NetworkDeviceApi.md#getNetworkDeviceConfig) | **GET** /api/v1/network-device/config | Retrieves device config list
[**getNetworkDeviceConfigByNetworkDeviceId**](NetworkDeviceApi.md#getNetworkDeviceConfigByNetworkDeviceId) | **GET** /api/v1/network-device/${networkDeviceId}/config | Retrieves device config
[**getNetworkDeviceConfigCount**](NetworkDeviceApi.md#getNetworkDeviceConfigCount) | **GET** /api/v1/network-device/config/count | Retrieves config count
[**getNetworkDeviceCount**](NetworkDeviceApi.md#getNetworkDeviceCount) | **GET** /api/v1/network-device/count | Retrieves network device count
[**getNetworkDeviceFunctionalCapability**](NetworkDeviceApi.md#getNetworkDeviceFunctionalCapability) | **GET** /api/v1/network-device/functional-capability | Retrieves all functional-capability of devices
[**getNetworkDeviceFunctionalCapabilityById**](NetworkDeviceApi.md#getNetworkDeviceFunctionalCapabilityById) | **GET** /api/v1/network-device/functional-capability/${id} | Gets the functional capability by id
[**getNetworkDeviceFunctionalCcapabilityAutocomplete**](NetworkDeviceApi.md#getNetworkDeviceFunctionalCcapabilityAutocomplete) | **GET** /api/v1/network-device/functional-capability/autocomplete | Retrieve the values of given fields
[**getNetworkDeviceIpAddressByIpAddress**](NetworkDeviceApi.md#getNetworkDeviceIpAddressByIpAddress) | **GET** /api/v1/network-device/ip-address/${ipAddress} | Retrieves network device by IP address
[**getNetworkDeviceMerakiOrganizationById**](NetworkDeviceApi.md#getNetworkDeviceMerakiOrganizationById) | **GET** /api/v1/network-device/${id}/meraki-organization | Get the organizations chosen while adding the meraki dashboard
[**getNetworkDeviceModule**](NetworkDeviceApi.md#getNetworkDeviceModule) | **GET** /api/v1/network-device/module | Gives all the modules associated with given device id
[**getNetworkDeviceModuleById**](NetworkDeviceApi.md#getNetworkDeviceModuleById) | **GET** /api/v1/network-device/module/${id} | Gives Module info by its id
[**getNetworkDeviceModuleCount**](NetworkDeviceApi.md#getNetworkDeviceModuleCount) | **GET** /api/v1/network-device/module/count | Gives total number of Modules
[**getNetworkDevicePollerCliLegitReads**](NetworkDeviceApi.md#getNetworkDevicePollerCliLegitReads) | **GET** /api/v1/network-device-poller/cli/legit-reads | Get all keywords of CLIs accepted by command runner
[**getNetworkDeviceRange**](NetworkDeviceApi.md#getNetworkDeviceRange) | **GET** /api/v1/network-device/${startIndex}/${recordsToReturn} | Retrieves network device by range
[**getNetworkDeviceSerialNumberBySerialNumber**](NetworkDeviceApi.md#getNetworkDeviceSerialNumberBySerialNumber) | **GET** /api/v1/network-device/serial-number/${serialNumber} | Retrieves network device by serial number
[**getNetworkDeviceTenantinfoMacaddress**](NetworkDeviceApi.md#getNetworkDeviceTenantinfoMacaddress) | **GET** /api/v1/network-device/tenantinfo/macaddress | Updates certificate validation status and returns tenantId
[**getNetworkDeviceVlanById**](NetworkDeviceApi.md#getNetworkDeviceVlanById) | **GET** /api/v1/network-device/${id}/vlan | Retrieves list of VLAN data that are associated with interface for a device
[**getNetworkDeviceWirelessInfoById**](NetworkDeviceApi.md#getNetworkDeviceWirelessInfoById) | **GET** /api/v1/network-device/${id}/wireless-info | Retrieves wireless lan conrtoller info by Device ID
[**postNetworkDevice**](NetworkDeviceApi.md#postNetworkDevice) | **POST** /api/v1/network-device | Network device POST api
[**postNetworkDeviceFile**](NetworkDeviceApi.md#postNetworkDeviceFile) | **POST** /api/v1/network-device/file | Export network-device to file
[**postNetworkDevicePollerCliReadRequest**](NetworkDeviceApi.md#postNetworkDevicePollerCliReadRequest) | **POST** /api/v1/network-device-poller/cli/read-request | Run read-only commands on devices to get their real-time configuration
[**putNetworkDevice**](NetworkDeviceApi.md#putNetworkDevice) | **PUT** /api/v1/network-device | Network device sync api
[**putNetworkDeviceBrief**](NetworkDeviceApi.md#putNetworkDeviceBrief) | **PUT** /api/v1/network-device/brief | Updates network device role
[**putNetworkDeviceSync**](NetworkDeviceApi.md#putNetworkDeviceSync) | **PUT** /api/v1/network-device/sync | Network device sync api


# **deleteNetworkDeviceById**
> \cisco\com\dnac\v1\api\client\model\TaskIdResult deleteNetworkDeviceById($id, $is_force_delete)

Delete network device by ID

Removes the network device for the given ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\NetworkDeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Device ID
$is_force_delete = true; // bool | isForceDelete

try {
    $result = $apiInstance->deleteNetworkDeviceById($id, $is_force_delete);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkDeviceApi->deleteNetworkDeviceById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Device ID |
 **is_force_delete** | **bool**| isForceDelete | [optional]

### Return type

[**\cisco\com\dnac\v1\api\client\model\TaskIdResult**](../Model/TaskIdResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNetworkDevice**
> \cisco\com\dnac\v1\api\client\model\NetworkDeviceListResult getNetworkDevice($hostname, $management_ip_address, $mac_address, $location_name, $serial_number, $location, $family, $type, $series, $collection_status, $collection_interval, $not_synced_for_minutes, $error_code, $error_description, $software_version, $software_type, $platform_id, $role, $reachability_status, $up_time, $associated_wlc_ip, $license_name, $license_type, $license_status, $modulename, $moduleequpimenttype, $moduleservicestate, $modulevendorequipmenttype, $modulepartnumber, $moduleoperationstatecode, $id)

Retrieves all network devices

Gets the list of first 500 network devices sorted lexicographically based on host name. It can be filtered using management IP address, mac address, hostname and location name. If id param is provided, it will be returning the list of network-devices for the given id's and other request params will be ignored. In case of autocomplete request, returns the list of specified attributes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\NetworkDeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hostname = array("hostname_example"); // string[] | hostname
$management_ip_address = array("management_ip_address_example"); // string[] | managementIpAddress
$mac_address = array("mac_address_example"); // string[] | macAddress
$location_name = array("location_name_example"); // string[] | locationName
$serial_number = array("serial_number_example"); // string[] | serialNumber
$location = array("location_example"); // string[] | location
$family = array("family_example"); // string[] | family
$type = array("type_example"); // string[] | type
$series = array("series_example"); // string[] | series
$collection_status = array("collection_status_example"); // string[] | collectionStatus
$collection_interval = array("collection_interval_example"); // string[] | collectionInterval
$not_synced_for_minutes = array("not_synced_for_minutes_example"); // string[] | notSyncedForMinutes
$error_code = array("error_code_example"); // string[] | errorCode
$error_description = array("error_description_example"); // string[] | errorDescription
$software_version = array("software_version_example"); // string[] | softwareVersion
$software_type = array("software_type_example"); // string[] | softwareType
$platform_id = array("platform_id_example"); // string[] | platformId
$role = array("role_example"); // string[] | role
$reachability_status = array("reachability_status_example"); // string[] | reachabilityStatus
$up_time = array("up_time_example"); // string[] | upTime
$associated_wlc_ip = array("associated_wlc_ip_example"); // string[] | associatedWlcIp
$license_name = array("license_name_example"); // string[] | licenseName
$license_type = array("license_type_example"); // string[] | licenseType
$license_status = array("license_status_example"); // string[] | licenseStatus
$modulename = array("modulename_example"); // string[] | moduleName
$moduleequpimenttype = array("moduleequpimenttype_example"); // string[] | moduleEqupimentType
$moduleservicestate = array("moduleservicestate_example"); // string[] | moduleServiceState
$modulevendorequipmenttype = array("modulevendorequipmenttype_example"); // string[] | moduleVendorEquipmentType
$modulepartnumber = array("modulepartnumber_example"); // string[] | modulePartNumber
$moduleoperationstatecode = array("moduleoperationstatecode_example"); // string[] | moduleOperationStateCode
$id = "id_example"; // string | Accepts comma separated id's and return list of network-devices for the given id's. If invalid or not-found id's are provided, null entry will be returned in the list.

try {
    $result = $apiInstance->getNetworkDevice($hostname, $management_ip_address, $mac_address, $location_name, $serial_number, $location, $family, $type, $series, $collection_status, $collection_interval, $not_synced_for_minutes, $error_code, $error_description, $software_version, $software_type, $platform_id, $role, $reachability_status, $up_time, $associated_wlc_ip, $license_name, $license_type, $license_status, $modulename, $moduleequpimenttype, $moduleservicestate, $modulevendorequipmenttype, $modulepartnumber, $moduleoperationstatecode, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkDeviceApi->getNetworkDevice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hostname** | [**string[]**](../Model/string.md)| hostname | [optional]
 **management_ip_address** | [**string[]**](../Model/string.md)| managementIpAddress | [optional]
 **mac_address** | [**string[]**](../Model/string.md)| macAddress | [optional]
 **location_name** | [**string[]**](../Model/string.md)| locationName | [optional]
 **serial_number** | [**string[]**](../Model/string.md)| serialNumber | [optional]
 **location** | [**string[]**](../Model/string.md)| location | [optional]
 **family** | [**string[]**](../Model/string.md)| family | [optional]
 **type** | [**string[]**](../Model/string.md)| type | [optional]
 **series** | [**string[]**](../Model/string.md)| series | [optional]
 **collection_status** | [**string[]**](../Model/string.md)| collectionStatus | [optional]
 **collection_interval** | [**string[]**](../Model/string.md)| collectionInterval | [optional]
 **not_synced_for_minutes** | [**string[]**](../Model/string.md)| notSyncedForMinutes | [optional]
 **error_code** | [**string[]**](../Model/string.md)| errorCode | [optional]
 **error_description** | [**string[]**](../Model/string.md)| errorDescription | [optional]
 **software_version** | [**string[]**](../Model/string.md)| softwareVersion | [optional]
 **software_type** | [**string[]**](../Model/string.md)| softwareType | [optional]
 **platform_id** | [**string[]**](../Model/string.md)| platformId | [optional]
 **role** | [**string[]**](../Model/string.md)| role | [optional]
 **reachability_status** | [**string[]**](../Model/string.md)| reachabilityStatus | [optional]
 **up_time** | [**string[]**](../Model/string.md)| upTime | [optional]
 **associated_wlc_ip** | [**string[]**](../Model/string.md)| associatedWlcIp | [optional]
 **license_name** | [**string[]**](../Model/string.md)| licenseName | [optional]
 **license_type** | [**string[]**](../Model/string.md)| licenseType | [optional]
 **license_status** | [**string[]**](../Model/string.md)| licenseStatus | [optional]
 **modulename** | [**string[]**](../Model/string.md)| moduleName | [optional]
 **moduleequpimenttype** | [**string[]**](../Model/string.md)| moduleEqupimentType | [optional]
 **moduleservicestate** | [**string[]**](../Model/string.md)| moduleServiceState | [optional]
 **modulevendorequipmenttype** | [**string[]**](../Model/string.md)| moduleVendorEquipmentType | [optional]
 **modulepartnumber** | [**string[]**](../Model/string.md)| modulePartNumber | [optional]
 **moduleoperationstatecode** | [**string[]**](../Model/string.md)| moduleOperationStateCode | [optional]
 **id** | **string**| Accepts comma separated id&#39;s and return list of network-devices for the given id&#39;s. If invalid or not-found id&#39;s are provided, null entry will be returned in the list. | [optional]

### Return type

[**\cisco\com\dnac\v1\api\client\model\NetworkDeviceListResult**](../Model/NetworkDeviceListResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNetworkDeviceAutocomplete**
> \cisco\com\dnac\v1\api\client\model\RetrievesAllNetworkDevicesResponse getNetworkDeviceAutocomplete($vrf_name, $management_ip_address, $hostname, $mac_address, $family, $collection_status, $collection_interval, $software_version, $software_type, $reachability_status, $reachability_failure_reason, $error_code, $platform_id, $series, $type, $serial_number, $up_time, $role, $role_source, $associated_wlc_ip, $offset, $limit)

Retrieves all network devices

Gets the list of first 500 network devices sorted lexicographically based on host name. It can be filtered using management IP address, mac address, hostname and location name. If id param is provided, it will be returning the list of network-devices for the given id's and other request params will be ignored. In case of autocomplete request, returns the list of specified attributes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\NetworkDeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vrf_name = "vrf_name_example"; // string | vrfName
$management_ip_address = "management_ip_address_example"; // string | managementIpAddress
$hostname = "hostname_example"; // string | hostname
$mac_address = "mac_address_example"; // string | macAddress
$family = "family_example"; // string | family
$collection_status = "collection_status_example"; // string | collectionStatus
$collection_interval = "collection_interval_example"; // string | collectionInterval
$software_version = "software_version_example"; // string | softwareVersion
$software_type = "software_type_example"; // string | softwareType
$reachability_status = "reachability_status_example"; // string | reachabilityStatus
$reachability_failure_reason = "reachability_failure_reason_example"; // string | reachabilityFailureReason
$error_code = "error_code_example"; // string | errorCode
$platform_id = "platform_id_example"; // string | platformId
$series = "series_example"; // string | series
$type = "type_example"; // string | type
$serial_number = "serial_number_example"; // string | serialNumber
$up_time = "up_time_example"; // string | upTime
$role = "role_example"; // string | role
$role_source = "role_source_example"; // string | roleSource
$associated_wlc_ip = "associated_wlc_ip_example"; // string | associatedWlcIp
$offset = "offset_example"; // string | offset
$limit = "limit_example"; // string | limit

try {
    $result = $apiInstance->getNetworkDeviceAutocomplete($vrf_name, $management_ip_address, $hostname, $mac_address, $family, $collection_status, $collection_interval, $software_version, $software_type, $reachability_status, $reachability_failure_reason, $error_code, $platform_id, $series, $type, $serial_number, $up_time, $role, $role_source, $associated_wlc_ip, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkDeviceApi->getNetworkDeviceAutocomplete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vrf_name** | **string**| vrfName | [optional]
 **management_ip_address** | **string**| managementIpAddress | [optional]
 **hostname** | **string**| hostname | [optional]
 **mac_address** | **string**| macAddress | [optional]
 **family** | **string**| family | [optional]
 **collection_status** | **string**| collectionStatus | [optional]
 **collection_interval** | **string**| collectionInterval | [optional]
 **software_version** | **string**| softwareVersion | [optional]
 **software_type** | **string**| softwareType | [optional]
 **reachability_status** | **string**| reachabilityStatus | [optional]
 **reachability_failure_reason** | **string**| reachabilityFailureReason | [optional]
 **error_code** | **string**| errorCode | [optional]
 **platform_id** | **string**| platformId | [optional]
 **series** | **string**| series | [optional]
 **type** | **string**| type | [optional]
 **serial_number** | **string**| serialNumber | [optional]
 **up_time** | **string**| upTime | [optional]
 **role** | **string**| role | [optional]
 **role_source** | **string**| roleSource | [optional]
 **associated_wlc_ip** | **string**| associatedWlcIp | [optional]
 **offset** | **string**| offset | [optional]
 **limit** | **string**| limit | [optional]

### Return type

[**\cisco\com\dnac\v1\api\client\model\RetrievesAllNetworkDevicesResponse**](../Model/RetrievesAllNetworkDevicesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNetworkDeviceBriefById**
> \cisco\com\dnac\v1\api\client\model\NetworkDeviceBriefNIOResult getNetworkDeviceBriefById($id)

Retrieves network device brief by ID

Gets brief network device info such as hostname, management IP address for the given device ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\NetworkDeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Device ID

try {
    $result = $apiInstance->getNetworkDeviceBriefById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkDeviceApi->getNetworkDeviceBriefById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Device ID |

### Return type

[**\cisco\com\dnac\v1\api\client\model\NetworkDeviceBriefNIOResult**](../Model/NetworkDeviceBriefNIOResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNetworkDeviceById**
> \cisco\com\dnac\v1\api\client\model\NetworkDeviceResult getNetworkDeviceById($id)

Retrieves network device by ID

Gets the network device for the given device ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\NetworkDeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Device ID

try {
    $result = $apiInstance->getNetworkDeviceById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkDeviceApi->getNetworkDeviceById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Device ID |

### Return type

[**\cisco\com\dnac\v1\api\client\model\NetworkDeviceResult**](../Model/NetworkDeviceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNetworkDeviceCollectionScheduleById**
> \cisco\com\dnac\v1\api\client\model\CountResult getNetworkDeviceCollectionScheduleById($id)

Retrieves the collection interval specified by device ID

Retrieves collection interval by device id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\NetworkDeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Device ID

try {
    $result = $apiInstance->getNetworkDeviceCollectionScheduleById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkDeviceApi->getNetworkDeviceCollectionScheduleById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Device ID |

### Return type

[**\cisco\com\dnac\v1\api\client\model\CountResult**](../Model/CountResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNetworkDeviceCollectionScheduleGlobal**
> \cisco\com\dnac\v1\api\client\model\CountResult getNetworkDeviceCollectionScheduleGlobal()

Retrieves the collection interval of all devices

Retrieves collection interval of all devices

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\NetworkDeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getNetworkDeviceCollectionScheduleGlobal();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkDeviceApi->getNetworkDeviceCollectionScheduleGlobal: ', $e->getMessage(), PHP_EOL;
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

# **getNetworkDeviceConfig**
> \cisco\com\dnac\v1\api\client\model\RawCliInfoNIOListResult getNetworkDeviceConfig()

Retrieves device config list

Gets the config for all devices

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\NetworkDeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getNetworkDeviceConfig();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkDeviceApi->getNetworkDeviceConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\cisco\com\dnac\v1\api\client\model\RawCliInfoNIOListResult**](../Model/RawCliInfoNIOListResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNetworkDeviceConfigByNetworkDeviceId**
> \cisco\com\dnac\v1\api\client\model\SuccessResult getNetworkDeviceConfigByNetworkDeviceId($network_device_id)

Retrieves device config

Gets the device config by device ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\NetworkDeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$network_device_id = "network_device_id_example"; // string | networkDeviceId

try {
    $result = $apiInstance->getNetworkDeviceConfigByNetworkDeviceId($network_device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkDeviceApi->getNetworkDeviceConfigByNetworkDeviceId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **network_device_id** | **string**| networkDeviceId |

### Return type

[**\cisco\com\dnac\v1\api\client\model\SuccessResult**](../Model/SuccessResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNetworkDeviceConfigCount**
> \cisco\com\dnac\v1\api\client\model\CountResult getNetworkDeviceConfigCount()

Retrieves config count

Gets the count of device configs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\NetworkDeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getNetworkDeviceConfigCount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkDeviceApi->getNetworkDeviceConfigCount: ', $e->getMessage(), PHP_EOL;
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

# **getNetworkDeviceCount**
> \cisco\com\dnac\v1\api\client\model\CountResult getNetworkDeviceCount()

Retrieves network device count

Gets the count of network devices filtered by management IP address, mac address, hostname and location name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\NetworkDeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getNetworkDeviceCount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkDeviceApi->getNetworkDeviceCount: ', $e->getMessage(), PHP_EOL;
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

# **getNetworkDeviceFunctionalCapability**
> \cisco\com\dnac\v1\api\client\model\FunctionalCapabilityListResult getNetworkDeviceFunctionalCapability($device_id, $function_name)

Retrieves all functional-capability of devices

Gets the functional-capability for given devices

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\NetworkDeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$device_id = "device_id_example"; // string | Accepts comma separated deviceid's and return list of functional-capabilities for the given id's. If invalid or not-found id's are provided, null entry will be returned in the list.
$function_name = array("function_name_example"); // string[] | functionName

try {
    $result = $apiInstance->getNetworkDeviceFunctionalCapability($device_id, $function_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkDeviceApi->getNetworkDeviceFunctionalCapability: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **string**| Accepts comma separated deviceid&#39;s and return list of functional-capabilities for the given id&#39;s. If invalid or not-found id&#39;s are provided, null entry will be returned in the list. | [optional]
 **function_name** | [**string[]**](../Model/string.md)| functionName | [optional]

### Return type

[**\cisco\com\dnac\v1\api\client\model\FunctionalCapabilityListResult**](../Model/FunctionalCapabilityListResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNetworkDeviceFunctionalCapabilityById**
> \cisco\com\dnac\v1\api\client\model\FunctionalCapabilityResult getNetworkDeviceFunctionalCapabilityById($id)

Gets the functional capability by id

Retrieve functional capability with given id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\NetworkDeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Device ID

try {
    $result = $apiInstance->getNetworkDeviceFunctionalCapabilityById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkDeviceApi->getNetworkDeviceFunctionalCapabilityById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Device ID |

### Return type

[**\cisco\com\dnac\v1\api\client\model\FunctionalCapabilityResult**](../Model/FunctionalCapabilityResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNetworkDeviceFunctionalCcapabilityAutocomplete**
> \cisco\com\dnac\v1\api\client\model\SuccessResultList getNetworkDeviceFunctionalCcapabilityAutocomplete($function_name)

Retrieve the values of given fields

Gets the field values based on given filter

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\NetworkDeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$function_name = array("function_name_example"); // string[] | functionName

try {
    $result = $apiInstance->getNetworkDeviceFunctionalCcapabilityAutocomplete($function_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkDeviceApi->getNetworkDeviceFunctionalCcapabilityAutocomplete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **function_name** | [**string[]**](../Model/string.md)| functionName | [optional]

### Return type

[**\cisco\com\dnac\v1\api\client\model\SuccessResultList**](../Model/SuccessResultList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNetworkDeviceIpAddressByIpAddress**
> \cisco\com\dnac\v1\api\client\model\NetworkDeviceResult getNetworkDeviceIpAddressByIpAddress($ip_address)

Retrieves network device by IP address

Gets the network device with the given IP address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\NetworkDeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ip_address = "ip_address_example"; // string | Device IP address

try {
    $result = $apiInstance->getNetworkDeviceIpAddressByIpAddress($ip_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkDeviceApi->getNetworkDeviceIpAddressByIpAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ip_address** | **string**| Device IP address |

### Return type

[**\cisco\com\dnac\v1\api\client\model\NetworkDeviceResult**](../Model/NetworkDeviceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNetworkDeviceMerakiOrganizationById**
> \cisco\com\dnac\v1\api\client\model\SuccessResultList getNetworkDeviceMerakiOrganizationById($id)

Get the organizations chosen while adding the meraki dashboard

This method is used to get the selected organizations for the meraki dashboard

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\NetworkDeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | id

try {
    $result = $apiInstance->getNetworkDeviceMerakiOrganizationById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkDeviceApi->getNetworkDeviceMerakiOrganizationById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id |

### Return type

[**\cisco\com\dnac\v1\api\client\model\SuccessResultList**](../Model/SuccessResultList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNetworkDeviceModule**
> \cisco\com\dnac\v1\api\client\model\ModuleListResult getNetworkDeviceModule($device_id, $limit, $offset, $name_list, $vendor_equipment_type_list, $part_number_list, $operational_state_code_list)

Gives all the modules associated with given device id

Get modules of the given device id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\NetworkDeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$device_id = "device_id_example"; // string | deviceId
$limit = "limit_example"; // string | limit
$offset = "offset_example"; // string | offset
$name_list = array("name_list_example"); // string[] | nameList
$vendor_equipment_type_list = array("vendor_equipment_type_list_example"); // string[] | vendorEquipmentTypeList
$part_number_list = array("part_number_list_example"); // string[] | partNumberList
$operational_state_code_list = array("operational_state_code_list_example"); // string[] | operationalStateCodeList

try {
    $result = $apiInstance->getNetworkDeviceModule($device_id, $limit, $offset, $name_list, $vendor_equipment_type_list, $part_number_list, $operational_state_code_list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkDeviceApi->getNetworkDeviceModule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **string**| deviceId |
 **limit** | **string**| limit | [optional]
 **offset** | **string**| offset | [optional]
 **name_list** | [**string[]**](../Model/string.md)| nameList | [optional]
 **vendor_equipment_type_list** | [**string[]**](../Model/string.md)| vendorEquipmentTypeList | [optional]
 **part_number_list** | [**string[]**](../Model/string.md)| partNumberList | [optional]
 **operational_state_code_list** | [**string[]**](../Model/string.md)| operationalStateCodeList | [optional]

### Return type

[**\cisco\com\dnac\v1\api\client\model\ModuleListResult**](../Model/ModuleListResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNetworkDeviceModuleById**
> \cisco\com\dnac\v1\api\client\model\ModuleResult getNetworkDeviceModuleById($id)

Gives Module info by its id

Get module by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\NetworkDeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | id

try {
    $result = $apiInstance->getNetworkDeviceModuleById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkDeviceApi->getNetworkDeviceModuleById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id |

### Return type

[**\cisco\com\dnac\v1\api\client\model\ModuleResult**](../Model/ModuleResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNetworkDeviceModuleCount**
> \cisco\com\dnac\v1\api\client\model\CountResult getNetworkDeviceModuleCount($device_id, $name_list, $vendor_equipment_type_list, $part_number_list, $operational_state_code_list)

Gives total number of Modules

Get Module Count

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\NetworkDeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$device_id = "device_id_example"; // string | deviceId
$name_list = array("name_list_example"); // string[] | nameList
$vendor_equipment_type_list = array("vendor_equipment_type_list_example"); // string[] | vendorEquipmentTypeList
$part_number_list = array("part_number_list_example"); // string[] | partNumberList
$operational_state_code_list = array("operational_state_code_list_example"); // string[] | operationalStateCodeList

try {
    $result = $apiInstance->getNetworkDeviceModuleCount($device_id, $name_list, $vendor_equipment_type_list, $part_number_list, $operational_state_code_list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkDeviceApi->getNetworkDeviceModuleCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **string**| deviceId |
 **name_list** | [**string[]**](../Model/string.md)| nameList | [optional]
 **vendor_equipment_type_list** | [**string[]**](../Model/string.md)| vendorEquipmentTypeList | [optional]
 **part_number_list** | [**string[]**](../Model/string.md)| partNumberList | [optional]
 **operational_state_code_list** | [**string[]**](../Model/string.md)| operationalStateCodeList | [optional]

### Return type

[**\cisco\com\dnac\v1\api\client\model\CountResult**](../Model/CountResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNetworkDevicePollerCliLegitReads**
> \cisco\com\dnac\v1\api\client\model\LegitCliKeyResult getNetworkDevicePollerCliLegitReads()

Get all keywords of CLIs accepted by command runner

Get valid keywords

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\NetworkDeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getNetworkDevicePollerCliLegitReads();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkDeviceApi->getNetworkDevicePollerCliLegitReads: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\cisco\com\dnac\v1\api\client\model\LegitCliKeyResult**](../Model/LegitCliKeyResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNetworkDeviceRange**
> \cisco\com\dnac\v1\api\client\model\NetworkDeviceListResult getNetworkDeviceRange($start_index, $records_to_return)

Retrieves network device by range

Gets the list of network devices for the given range

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\NetworkDeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_index = 56; // int | Start index
$records_to_return = 56; // int | Number of records to return

try {
    $result = $apiInstance->getNetworkDeviceRange($start_index, $records_to_return);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkDeviceApi->getNetworkDeviceRange: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_index** | **int**| Start index |
 **records_to_return** | **int**| Number of records to return |

### Return type

[**\cisco\com\dnac\v1\api\client\model\NetworkDeviceListResult**](../Model/NetworkDeviceListResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNetworkDeviceSerialNumberBySerialNumber**
> \cisco\com\dnac\v1\api\client\model\NetworkDeviceResult getNetworkDeviceSerialNumberBySerialNumber($serial_number)

Retrieves network device by serial number

Gets the network device with the given serial number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\NetworkDeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$serial_number = "serial_number_example"; // string | Device serial number

try {
    $result = $apiInstance->getNetworkDeviceSerialNumberBySerialNumber($serial_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkDeviceApi->getNetworkDeviceSerialNumberBySerialNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serial_number** | **string**| Device serial number |

### Return type

[**\cisco\com\dnac\v1\api\client\model\NetworkDeviceResult**](../Model/NetworkDeviceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNetworkDeviceTenantinfoMacaddress**
> \cisco\com\dnac\v1\api\client\model\RegisterNetworkDeviceResult getNetworkDeviceTenantinfoMacaddress($serial_number, $macaddress)

Updates certificate validation status and returns tenantId

Registers a device for WSA notification

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\NetworkDeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$serial_number = "serial_number_example"; // string | Serial number of the device
$macaddress = "macaddress_example"; // string | Mac addres of the device

try {
    $result = $apiInstance->getNetworkDeviceTenantinfoMacaddress($serial_number, $macaddress);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkDeviceApi->getNetworkDeviceTenantinfoMacaddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serial_number** | **string**| Serial number of the device | [optional]
 **macaddress** | **string**| Mac addres of the device | [optional]

### Return type

[**\cisco\com\dnac\v1\api\client\model\RegisterNetworkDeviceResult**](../Model/RegisterNetworkDeviceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNetworkDeviceVlanById**
> \cisco\com\dnac\v1\api\client\model\VlanListResult getNetworkDeviceVlanById($id, $interface_type)

Retrieves list of VLAN data that are associated with interface for a device

getDeviceVLANData

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\NetworkDeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | deviceUUID
$interface_type = "interface_type_example"; // string | Vlan assocaited with sub-interface

try {
    $result = $apiInstance->getNetworkDeviceVlanById($id, $interface_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkDeviceApi->getNetworkDeviceVlanById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| deviceUUID |
 **interface_type** | **string**| Vlan assocaited with sub-interface | [optional]

### Return type

[**\cisco\com\dnac\v1\api\client\model\VlanListResult**](../Model/VlanListResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNetworkDeviceWirelessInfoById**
> \cisco\com\dnac\v1\api\client\model\WirelessInfoResult getNetworkDeviceWirelessInfoById($id)

Retrieves wireless lan conrtoller info by Device ID

Gets the wireless lan controller info using the given device ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\NetworkDeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Device ID

try {
    $result = $apiInstance->getNetworkDeviceWirelessInfoById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkDeviceApi->getNetworkDeviceWirelessInfoById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Device ID |

### Return type

[**\cisco\com\dnac\v1\api\client\model\WirelessInfoResult**](../Model/WirelessInfoResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postNetworkDevice**
> \cisco\com\dnac\v1\api\client\model\TaskIdResult postNetworkDevice($request)

Network device POST api

Adds the device with given credential

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\NetworkDeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\InventoryDeviceInfo(); // \cisco\com\dnac\v1\api\client\model\InventoryDeviceInfo | request

try {
    $result = $apiInstance->postNetworkDevice($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkDeviceApi->postNetworkDevice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\InventoryDeviceInfo**](../Model/InventoryDeviceInfo.md)| request |

### Return type

[**\cisco\com\dnac\v1\api\client\model\TaskIdResult**](../Model/TaskIdResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postNetworkDeviceFile**
> \cisco\com\dnac\v1\api\client\model\TaskIdResult postNetworkDeviceFile($request)

Export network-device to file

Export the selected network-device to a file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\NetworkDeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\ExportDeviceDTO(); // \cisco\com\dnac\v1\api\client\model\ExportDeviceDTO | request

try {
    $result = $apiInstance->postNetworkDeviceFile($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkDeviceApi->postNetworkDeviceFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\ExportDeviceDTO**](../Model/ExportDeviceDTO.md)| request |

### Return type

[**\cisco\com\dnac\v1\api\client\model\TaskIdResult**](../Model/TaskIdResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postNetworkDevicePollerCliReadRequest**
> \cisco\com\dnac\v1\api\client\model\TaskIdResult postNetworkDevicePollerCliReadRequest($request)

Run read-only commands on devices to get their real-time configuration

Submit request for read-only CLIs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\NetworkDeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\CommandRunnerDTO(); // \cisco\com\dnac\v1\api\client\model\CommandRunnerDTO | request

try {
    $result = $apiInstance->postNetworkDevicePollerCliReadRequest($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkDeviceApi->postNetworkDevicePollerCliReadRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\CommandRunnerDTO**](../Model/CommandRunnerDTO.md)| request |

### Return type

[**\cisco\com\dnac\v1\api\client\model\TaskIdResult**](../Model/TaskIdResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putNetworkDevice**
> \cisco\com\dnac\v1\api\client\model\TaskIdResult putNetworkDevice($request)

Network device sync api

Sync the devices provided as input

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\NetworkDeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\InventoryDeviceInfo(); // \cisco\com\dnac\v1\api\client\model\InventoryDeviceInfo | request

try {
    $result = $apiInstance->putNetworkDevice($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkDeviceApi->putNetworkDevice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\InventoryDeviceInfo**](../Model/InventoryDeviceInfo.md)| request |

### Return type

[**\cisco\com\dnac\v1\api\client\model\TaskIdResult**](../Model/TaskIdResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putNetworkDeviceBrief**
> \cisco\com\dnac\v1\api\client\model\TaskIdResult putNetworkDeviceBrief($request)

Updates network device role

Updates the role of the device as access, core, distribution, border router

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\NetworkDeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\NetworkDeviceBriefNIO(); // \cisco\com\dnac\v1\api\client\model\NetworkDeviceBriefNIO | request

try {
    $result = $apiInstance->putNetworkDeviceBrief($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkDeviceApi->putNetworkDeviceBrief: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\NetworkDeviceBriefNIO**](../Model/NetworkDeviceBriefNIO.md)| request |

### Return type

[**\cisco\com\dnac\v1\api\client\model\TaskIdResult**](../Model/TaskIdResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putNetworkDeviceSync**
> \cisco\com\dnac\v1\api\client\model\TaskIdResult putNetworkDeviceSync($request, $force_sync)

Network device sync api

Sync's the devices. If forceSync param is false (default) then the sync would run in normal priority thread. If forceSync param is true then the sync would run in high priority thread if avaiable, else the sync will fail. Result can be seen in the child task of each device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\NetworkDeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\NetworkDeviceSyncApiRequest(); // \cisco\com\dnac\v1\api\client\model\NetworkDeviceSyncApiRequest | request
$force_sync = true; // bool | forceSync

try {
    $result = $apiInstance->putNetworkDeviceSync($request, $force_sync);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkDeviceApi->putNetworkDeviceSync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\NetworkDeviceSyncApiRequest**](../Model/NetworkDeviceSyncApiRequest.md)| request |
 **force_sync** | **bool**| forceSync | [optional]

### Return type

[**\cisco\com\dnac\v1\api\client\model\TaskIdResult**](../Model/TaskIdResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

