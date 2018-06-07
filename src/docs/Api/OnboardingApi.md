# cisco\com\dnac\v1\api\client\OnboardingApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteOnboardingPnpDeviceById**](OnboardingApi.md#deleteOnboardingPnpDeviceById) | **DELETE** /api/v1/onboarding/pnp-device/${id} | Delete Device
[**deleteOnboardingPnpSettingsVacct**](OnboardingApi.md#deleteOnboardingPnpSettingsVacct) | **DELETE** /api/v1/onboarding/pnp-settings/vacct | Deregister Virtual Account
[**deleteOnboardingPnpWorkflowById**](OnboardingApi.md#deleteOnboardingPnpWorkflowById) | **DELETE** /api/v1/onboarding/pnp-workflow/${id} | Delete Workflow
[**getOnboardingPnpDevice**](OnboardingApi.md#getOnboardingPnpDevice) | **GET** /api/v1/onboarding/pnp-device | List devices
[**getOnboardingPnpDeviceById**](OnboardingApi.md#getOnboardingPnpDeviceById) | **GET** /api/v1/onboarding/pnp-device/${id} | Get Device by ID
[**getOnboardingPnpDeviceCcount**](OnboardingApi.md#getOnboardingPnpDeviceCcount) | **GET** /api/v1/onboarding/pnp-device/count | Get Device Count
[**getOnboardingPnpDeviceDashboardCount**](OnboardingApi.md#getOnboardingPnpDeviceDashboardCount) | **GET** /api/v1/onboarding/pnp-device/dashboard/count | Get Categorized Device Count
[**getOnboardingPnpDeviceHistory**](OnboardingApi.md#getOnboardingPnpDeviceHistory) | **GET** /api/v1/onboarding/pnp-device/history | Get Device History
[**getOnboardingPnpDeviceSacctVacctSyncResultByDomainAndName**](OnboardingApi.md#getOnboardingPnpDeviceSacctVacctSyncResultByDomainAndName) | **GET** /api/v1/onboarding/pnp-device/sacct/${domain}/vacct/${name}/sync-result | Get Sync Result for Virtual Account
[**getOnboardingPnpSettings**](OnboardingApi.md#getOnboardingPnpSettings) | **GET** /api/v1/onboarding/pnp-settings | View Settings
[**getOnboardingPnpSettingsSacct**](OnboardingApi.md#getOnboardingPnpSettingsSacct) | **GET** /api/v1/onboarding/pnp-settings/sacct | Get Smart Account List
[**getOnboardingPnpSettingsSacctVacctByDomain**](OnboardingApi.md#getOnboardingPnpSettingsSacctVacctByDomain) | **GET** /api/v1/onboarding/pnp-settings/sacct/${domain}/vacct | Get Virtual Account List
[**getOnboardingPnpWorkflow**](OnboardingApi.md#getOnboardingPnpWorkflow) | **GET** /api/v1/onboarding/pnp-workflow | List Workflows
[**getOnboardingPnpWorkflowById**](OnboardingApi.md#getOnboardingPnpWorkflowById) | **GET** /api/v1/onboarding/pnp-workflow/${id} | Get Workflow
[**getOnboardingPnpWorkflowCount**](OnboardingApi.md#getOnboardingPnpWorkflowCount) | **GET** /api/v1/onboarding/pnp-workflow/count | Get Workflow Count
[**postOnboardingPnpDevice**](OnboardingApi.md#postOnboardingPnpDevice) | **POST** /api/v1/onboarding/pnp-device | Create Device
[**postOnboardingPnpDeviceClaim**](OnboardingApi.md#postOnboardingPnpDeviceClaim) | **POST** /api/v1/onboarding/pnp-device/claim | Claim Device(s)
[**postOnboardingPnpDeviceImport**](OnboardingApi.md#postOnboardingPnpDeviceImport) | **POST** /api/v1/onboarding/pnp-device/import | Import Many Devices
[**postOnboardingPnpDeviceProvision**](OnboardingApi.md#postOnboardingPnpDeviceProvision) | **POST** /api/v1/onboarding/pnp-device/provision | Provision Device
[**postOnboardingPnpDeviceReset**](OnboardingApi.md#postOnboardingPnpDeviceReset) | **POST** /api/v1/onboarding/pnp-device/reset | Reset Device
[**postOnboardingPnpDeviceUnclaim**](OnboardingApi.md#postOnboardingPnpDeviceUnclaim) | **POST** /api/v1/onboarding/pnp-device/unclaim | Un-Claim Device
[**postOnboardingPnpDeviceVacctSync**](OnboardingApi.md#postOnboardingPnpDeviceVacctSync) | **POST** /api/v1/onboarding/pnp-device/vacct-sync | Sync Virtual Account Devices
[**postOnboardingPnpSettingsSavacct**](OnboardingApi.md#postOnboardingPnpSettingsSavacct) | **POST** /api/v1/onboarding/pnp-settings/savacct | Add Virtual Account
[**postOnboardingPnpWorkflow**](OnboardingApi.md#postOnboardingPnpWorkflow) | **POST** /api/v1/onboarding/pnp-workflow | Create Workflow
[**putOnboardingPnpDeviceById**](OnboardingApi.md#putOnboardingPnpDeviceById) | **PUT** /api/v1/onboarding/pnp-device/${id} | Update Device
[**putOnboardingPnpSettings**](OnboardingApi.md#putOnboardingPnpSettings) | **PUT** /api/v1/onboarding/pnp-settings | Update Settings
[**putOnboardingPnpSettingsSavacct**](OnboardingApi.md#putOnboardingPnpSettingsSavacct) | **PUT** /api/v1/onboarding/pnp-settings/savacct | Edit PnP Server Profile
[**putOnboardingPnpWorkflowById**](OnboardingApi.md#putOnboardingPnpWorkflowById) | **PUT** /api/v1/onboarding/pnp-workflow/${id} | Update Workflow


# **deleteOnboardingPnpDeviceById**
> \cisco\com\dnac\v1\api\client\model\DeleteDeviceResponse deleteOnboardingPnpDeviceById($id)

Delete Device

This API is used to delete the specified device from the database.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | id

try {
    $result = $apiInstance->deleteOnboardingPnpDeviceById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->deleteOnboardingPnpDeviceById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id |

### Return type

[**\cisco\com\dnac\v1\api\client\model\DeleteDeviceResponse**](../Model/DeleteDeviceResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOnboardingPnpSettingsVacct**
> \cisco\com\dnac\v1\api\client\model\DeregisterVirtualAccountResponse deleteOnboardingPnpSettingsVacct($domain, $name)

Deregister Virtual Account

This API is used to deregister the specified smart account & virtual account info and the associated device information from the PnP System & database. The devices associated with the deregistered virtual account are removed from the PnP database as well. The deregistered smart & virtual account info is returned in the response.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$domain = "domain_example"; // string | Smart Account Domain
$name = "name_example"; // string | Virtual Account Name

try {
    $result = $apiInstance->deleteOnboardingPnpSettingsVacct($domain, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->deleteOnboardingPnpSettingsVacct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain** | **string**| Smart Account Domain |
 **name** | **string**| Virtual Account Name |

### Return type

[**\cisco\com\dnac\v1\api\client\model\DeregisterVirtualAccountResponse**](../Model/DeregisterVirtualAccountResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOnboardingPnpWorkflowById**
> \cisco\com\dnac\v1\api\client\model\DeleteWorkflowResponse deleteOnboardingPnpWorkflowById($id)

Delete Workflow

Delete a workflow given its id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | id

try {
    $result = $apiInstance->deleteOnboardingPnpWorkflowById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->deleteOnboardingPnpWorkflowById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id |

### Return type

[**\cisco\com\dnac\v1\api\client\model\DeleteWorkflowResponse**](../Model/DeleteWorkflowResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOnboardingPnpDevice**
> \cisco\com\dnac\v1\api\client\model\ListDevicesResponse getOnboardingPnpDevice($limit, $offset, $sort, $sort_order, $serial_number, $state, $onb_state, $cm_state, $name, $pid, $source, $project_id, $workflow_id, $project_name, $workflow_name, $smart_account_id, $virtual_account_id, $last_contact)

List devices

This API is used to get the list of devices that match the provided filter. Pagination and sorting are also supported. If a limit is not specified, it will default to return 50 devices.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | Limits number of results
$offset = 56; // int | Index of first result
$sort = array("sort_example"); // string[] | Comma seperated list of fields to sort on
$sort_order = "sort_order_example"; // string | Sort Order Ascending (asc) or Descending (des)
$serial_number = array("serial_number_example"); // string[] | Device Serial Number
$state = array("state_example"); // string[] | Device State
$onb_state = array("onb_state_example"); // string[] | Device Onboarding State
$cm_state = array("cm_state_example"); // string[] | Device Connection Manager State
$name = array("name_example"); // string[] | Device Name
$pid = array("pid_example"); // string[] | Device ProductId
$source = array("source_example"); // string[] | Device Source
$project_id = array("project_id_example"); // string[] | Device Project Id
$workflow_id = array("workflow_id_example"); // string[] | Device Workflow Id
$project_name = array("project_name_example"); // string[] | Device Project Name
$workflow_name = array("workflow_name_example"); // string[] | Device Workflow Name
$smart_account_id = array("smart_account_id_example"); // string[] | Device Smart Account
$virtual_account_id = array("virtual_account_id_example"); // string[] | Device Virtual Account
$last_contact = true; // bool | Device Has Contacted lastContact > 0

try {
    $result = $apiInstance->getOnboardingPnpDevice($limit, $offset, $sort, $sort_order, $serial_number, $state, $onb_state, $cm_state, $name, $pid, $source, $project_id, $workflow_id, $project_name, $workflow_name, $smart_account_id, $virtual_account_id, $last_contact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->getOnboardingPnpDevice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limits number of results | [optional]
 **offset** | **int**| Index of first result | [optional]
 **sort** | [**string[]**](../Model/string.md)| Comma seperated list of fields to sort on | [optional]
 **sort_order** | **string**| Sort Order Ascending (asc) or Descending (des) | [optional]
 **serial_number** | [**string[]**](../Model/string.md)| Device Serial Number | [optional]
 **state** | [**string[]**](../Model/string.md)| Device State | [optional]
 **onb_state** | [**string[]**](../Model/string.md)| Device Onboarding State | [optional]
 **cm_state** | [**string[]**](../Model/string.md)| Device Connection Manager State | [optional]
 **name** | [**string[]**](../Model/string.md)| Device Name | [optional]
 **pid** | [**string[]**](../Model/string.md)| Device ProductId | [optional]
 **source** | [**string[]**](../Model/string.md)| Device Source | [optional]
 **project_id** | [**string[]**](../Model/string.md)| Device Project Id | [optional]
 **workflow_id** | [**string[]**](../Model/string.md)| Device Workflow Id | [optional]
 **project_name** | [**string[]**](../Model/string.md)| Device Project Name | [optional]
 **workflow_name** | [**string[]**](../Model/string.md)| Device Workflow Name | [optional]
 **smart_account_id** | [**string[]**](../Model/string.md)| Device Smart Account | [optional]
 **virtual_account_id** | [**string[]**](../Model/string.md)| Device Virtual Account | [optional]
 **last_contact** | **bool**| Device Has Contacted lastContact &gt; 0 | [optional]

### Return type

[**\cisco\com\dnac\v1\api\client\model\ListDevicesResponse**](../Model/ListDevicesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOnboardingPnpDeviceById**
> \cisco\com\dnac\v1\api\client\model\GetDeviceByIDResponse getOnboardingPnpDeviceById($id)

Get Device by ID

Get device details of the device with input device id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | id

try {
    $result = $apiInstance->getOnboardingPnpDeviceById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->getOnboardingPnpDeviceById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id |

### Return type

[**\cisco\com\dnac\v1\api\client\model\GetDeviceByIDResponse**](../Model/GetDeviceByIDResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOnboardingPnpDeviceCcount**
> \cisco\com\dnac\v1\api\client\model\GetDeviceCountResponse getOnboardingPnpDeviceCcount($serial_number, $state, $onb_state, $cm_state, $name, $pid, $source, $project_id, $workflow_id, $project_name, $workflow_name, $smart_account_id, $virtual_account_id, $last_contact)

Get Device Count

This API is used to get the number of the devices matching provided filters. This is useful for pageination.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$serial_number = array("serial_number_example"); // string[] | Device Serial Number
$state = array("state_example"); // string[] | Device State
$onb_state = array("onb_state_example"); // string[] | Device Onboarding State
$cm_state = array("cm_state_example"); // string[] | Device Connection Manager State
$name = array("name_example"); // string[] | Device Name
$pid = array("pid_example"); // string[] | Device ProductId
$source = array("source_example"); // string[] | Device Source
$project_id = array("project_id_example"); // string[] | Device Project Id
$workflow_id = array("workflow_id_example"); // string[] | Device Workflow Id
$project_name = array("project_name_example"); // string[] | Device Project Name
$workflow_name = array("workflow_name_example"); // string[] | Device Workflow Name
$smart_account_id = array("smart_account_id_example"); // string[] | Device Smart Account
$virtual_account_id = array("virtual_account_id_example"); // string[] | Device Virtual Account
$last_contact = true; // bool | Device Has Contacted lastContact > 0

try {
    $result = $apiInstance->getOnboardingPnpDeviceCcount($serial_number, $state, $onb_state, $cm_state, $name, $pid, $source, $project_id, $workflow_id, $project_name, $workflow_name, $smart_account_id, $virtual_account_id, $last_contact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->getOnboardingPnpDeviceCcount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serial_number** | [**string[]**](../Model/string.md)| Device Serial Number | [optional]
 **state** | [**string[]**](../Model/string.md)| Device State | [optional]
 **onb_state** | [**string[]**](../Model/string.md)| Device Onboarding State | [optional]
 **cm_state** | [**string[]**](../Model/string.md)| Device Connection Manager State | [optional]
 **name** | [**string[]**](../Model/string.md)| Device Name | [optional]
 **pid** | [**string[]**](../Model/string.md)| Device ProductId | [optional]
 **source** | [**string[]**](../Model/string.md)| Device Source | [optional]
 **project_id** | [**string[]**](../Model/string.md)| Device Project Id | [optional]
 **workflow_id** | [**string[]**](../Model/string.md)| Device Workflow Id | [optional]
 **project_name** | [**string[]**](../Model/string.md)| Device Project Name | [optional]
 **workflow_name** | [**string[]**](../Model/string.md)| Device Workflow Name | [optional]
 **smart_account_id** | [**string[]**](../Model/string.md)| Device Smart Account | [optional]
 **virtual_account_id** | [**string[]**](../Model/string.md)| Device Virtual Account | [optional]
 **last_contact** | **bool**| Device Has Contacted lastContact &gt; 0 | [optional]

### Return type

[**\cisco\com\dnac\v1\api\client\model\GetDeviceCountResponse**](../Model/GetDeviceCountResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOnboardingPnpDeviceDashboardCount**
> \cisco\com\dnac\v1\api\client\model\GetCategorizedDeviceCountResponse getOnboardingPnpDeviceDashboardCount($category)

Get Categorized Device Count

Get Categorized Device Count

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$category = "category_example"; // string | Valid Values: state, errorState, onbState or source

try {
    $result = $apiInstance->getOnboardingPnpDeviceDashboardCount($category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->getOnboardingPnpDeviceDashboardCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category** | **string**| Valid Values: state, errorState, onbState or source |

### Return type

[**\cisco\com\dnac\v1\api\client\model\GetCategorizedDeviceCountResponse**](../Model/GetCategorizedDeviceCountResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOnboardingPnpDeviceHistory**
> \cisco\com\dnac\v1\api\client\model\GetDeviceHistoryResponse getOnboardingPnpDeviceHistory($serial_number, $sort, $sort_order)

Get Device History

Retrieves history for a specific device. Serial Number is a required parameter

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$serial_number = "serial_number_example"; // string | Device Serial Number
$sort = array("sort_example"); // string[] | Comma seperated list of fields to sort on
$sort_order = "sort_order_example"; // string | Sort Order Ascending (asc) or Descending (des)

try {
    $result = $apiInstance->getOnboardingPnpDeviceHistory($serial_number, $sort, $sort_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->getOnboardingPnpDeviceHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serial_number** | **string**| Device Serial Number |
 **sort** | [**string[]**](../Model/string.md)| Comma seperated list of fields to sort on | [optional]
 **sort_order** | **string**| Sort Order Ascending (asc) or Descending (des) | [optional]

### Return type

[**\cisco\com\dnac\v1\api\client\model\GetDeviceHistoryResponse**](../Model/GetDeviceHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOnboardingPnpDeviceSacctVacctSyncResultByDomainAndName**
> \cisco\com\dnac\v1\api\client\model\GetSyncResultForVirtualAccountResponse getOnboardingPnpDeviceSacctVacctSyncResultByDomainAndName($domain, $name)

Get Sync Result for Virtual Account

This API is used to get the device sync info from the given smart account & virtual account with the PnP database. The SAVAMapping object which has the list of devices synced since the last sync is returned in the response.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$domain = "domain_example"; // string | Smart Account Domain
$name = "name_example"; // string | Virtual Account Name

try {
    $result = $apiInstance->getOnboardingPnpDeviceSacctVacctSyncResultByDomainAndName($domain, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->getOnboardingPnpDeviceSacctVacctSyncResultByDomainAndName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain** | **string**| Smart Account Domain |
 **name** | **string**| Virtual Account Name |

### Return type

[**\cisco\com\dnac\v1\api\client\model\GetSyncResultForVirtualAccountResponse**](../Model/GetSyncResultForVirtualAccountResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOnboardingPnpSettings**
> \cisco\com\dnac\v1\api\client\model\ViewSettingsResponse getOnboardingPnpSettings()

View Settings

Get this user's list of global PnP settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getOnboardingPnpSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->getOnboardingPnpSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\cisco\com\dnac\v1\api\client\model\ViewSettingsResponse**](../Model/ViewSettingsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOnboardingPnpSettingsSacct**
> \cisco\com\dnac\v1\api\client\model\GetSmartAccountListResponse getOnboardingPnpSettingsSacct()

Get Smart Account List

This API is used to get list of Smart Accounts. The list of smart account domains is returned in the response.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getOnboardingPnpSettingsSacct();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->getOnboardingPnpSettingsSacct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\cisco\com\dnac\v1\api\client\model\GetSmartAccountListResponse**](../Model/GetSmartAccountListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOnboardingPnpSettingsSacctVacctByDomain**
> \cisco\com\dnac\v1\api\client\model\GetVirtualAccountListResponse getOnboardingPnpSettingsSacctVacctByDomain($domain)

Get Virtual Account List

This API is used to get list of Virtual Accounts associated with the specified Smart Account. The list of virtual account names is returned in the response.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$domain = "domain_example"; // string | Smart Account Domain

try {
    $result = $apiInstance->getOnboardingPnpSettingsSacctVacctByDomain($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->getOnboardingPnpSettingsSacctVacctByDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain** | **string**| Smart Account Domain |

### Return type

[**\cisco\com\dnac\v1\api\client\model\GetVirtualAccountListResponse**](../Model/GetVirtualAccountListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOnboardingPnpWorkflow**
> \cisco\com\dnac\v1\api\client\model\ListWorkflowsResponse getOnboardingPnpWorkflow($limit, $offset, $sort, $sort_order, $type, $name)

List Workflows

This API is used to get the list of workflows that match the provided filter. Pagination and sorting are also supported. If a limit is not specified, it will default to return 50 workflows.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | Limits number of results
$offset = 56; // int | Index of first result
$sort = array("sort_example"); // string[] | Comma seperated lost of fields to sort on
$sort_order = "sort_order_example"; // string | Sort Order Ascending (asc) or Descending (des)
$type = array("type_example"); // string[] | Workflow Type
$name = array("name_example"); // string[] | Workflow Name

try {
    $result = $apiInstance->getOnboardingPnpWorkflow($limit, $offset, $sort, $sort_order, $type, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->getOnboardingPnpWorkflow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limits number of results | [optional]
 **offset** | **int**| Index of first result | [optional]
 **sort** | [**string[]**](../Model/string.md)| Comma seperated lost of fields to sort on | [optional]
 **sort_order** | **string**| Sort Order Ascending (asc) or Descending (des) | [optional]
 **type** | [**string[]**](../Model/string.md)| Workflow Type | [optional]
 **name** | [**string[]**](../Model/string.md)| Workflow Name | [optional]

### Return type

[**\cisco\com\dnac\v1\api\client\model\ListWorkflowsResponse**](../Model/ListWorkflowsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOnboardingPnpWorkflowById**
> \cisco\com\dnac\v1\api\client\model\GetWorkflowResponse getOnboardingPnpWorkflowById($id)

Get Workflow

Get a workflow given its id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | id

try {
    $result = $apiInstance->getOnboardingPnpWorkflowById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->getOnboardingPnpWorkflowById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id |

### Return type

[**\cisco\com\dnac\v1\api\client\model\GetWorkflowResponse**](../Model/GetWorkflowResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOnboardingPnpWorkflowCount**
> \cisco\com\dnac\v1\api\client\model\GetWorkflowCountResponse getOnboardingPnpWorkflowCount($name)

Get Workflow Count

This API is used to get the number of the workflows.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = array("name_example"); // string[] | Workflow Name

try {
    $result = $apiInstance->getOnboardingPnpWorkflowCount($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->getOnboardingPnpWorkflowCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | [**string[]**](../Model/string.md)| Workflow Name | [optional]

### Return type

[**\cisco\com\dnac\v1\api\client\model\GetWorkflowCountResponse**](../Model/GetWorkflowCountResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOnboardingPnpDevice**
> \cisco\com\dnac\v1\api\client\model\CreateDeviceResponse postOnboardingPnpDevice($request)

Create Device

This API is used to add a Planned device to the PnP database. A Planned device is a device that the customer has bought and/or is planning to manage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\Device(); // \cisco\com\dnac\v1\api\client\model\Device | request

try {
    $result = $apiInstance->postOnboardingPnpDevice($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->postOnboardingPnpDevice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\Device**](../Model/Device.md)| request |

### Return type

[**\cisco\com\dnac\v1\api\client\model\CreateDeviceResponse**](../Model/CreateDeviceResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOnboardingPnpDeviceClaim**
> \cisco\com\dnac\v1\api\client\model\ClaimDevicesResponse postOnboardingPnpDeviceClaim($request)

Claim Device(s)

This API is used to assign a project & workflow (i.e. claim) one of more devices.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\ClaimDeviceRequest(); // \cisco\com\dnac\v1\api\client\model\ClaimDeviceRequest | request

try {
    $result = $apiInstance->postOnboardingPnpDeviceClaim($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->postOnboardingPnpDeviceClaim: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\ClaimDeviceRequest**](../Model/ClaimDeviceRequest.md)| request |

### Return type

[**\cisco\com\dnac\v1\api\client\model\ClaimDevicesResponse**](../Model/ClaimDevicesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOnboardingPnpDeviceImport**
> \cisco\com\dnac\v1\api\client\model\ImportManyDevicesResponse postOnboardingPnpDeviceImport($request)

Import Many Devices

This API is used to import a list of Planned devices to the PnP database. A Planned device is a device that the customer has bought and/or is planning to manage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\Device(); // \cisco\com\dnac\v1\api\client\model\Device | request

try {
    $result = $apiInstance->postOnboardingPnpDeviceImport($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->postOnboardingPnpDeviceImport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\Device**](../Model/Device.md)| request |

### Return type

[**\cisco\com\dnac\v1\api\client\model\ImportManyDevicesResponse**](../Model/ImportManyDevicesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOnboardingPnpDeviceProvision**
> \cisco\com\dnac\v1\api\client\model\ProvisionDeviceResponse postOnboardingPnpDeviceProvision($request)

Provision Device

This API is used push one or more devices to Provisoned state and add them to inventory.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\PushProvisionRequest(); // \cisco\com\dnac\v1\api\client\model\PushProvisionRequest | request

try {
    $result = $apiInstance->postOnboardingPnpDeviceProvision($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->postOnboardingPnpDeviceProvision: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\PushProvisionRequest**](../Model/PushProvisionRequest.md)| request |

### Return type

[**\cisco\com\dnac\v1\api\client\model\ProvisionDeviceResponse**](../Model/ProvisionDeviceResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOnboardingPnpDeviceReset**
> \cisco\com\dnac\v1\api\client\model\ResetDeviceResponse postOnboardingPnpDeviceReset($request)

Reset Device

This API is used to recover a device from a Workflow Execution Error state.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\ResetRequest(); // \cisco\com\dnac\v1\api\client\model\ResetRequest | request

try {
    $result = $apiInstance->postOnboardingPnpDeviceReset($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->postOnboardingPnpDeviceReset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\ResetRequest**](../Model/ResetRequest.md)| request |

### Return type

[**\cisco\com\dnac\v1\api\client\model\ResetDeviceResponse**](../Model/ResetDeviceResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOnboardingPnpDeviceUnclaim**
> \cisco\com\dnac\v1\api\client\model\UnClaimDeviceResponse postOnboardingPnpDeviceUnclaim($request)

Un-Claim Device

This API is used to unassign the project and workflow from one or more device.A device can only be unclaimed if it has not begun provisioning.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\UnclaimRequest(); // \cisco\com\dnac\v1\api\client\model\UnclaimRequest | request

try {
    $result = $apiInstance->postOnboardingPnpDeviceUnclaim($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->postOnboardingPnpDeviceUnclaim: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\UnclaimRequest**](../Model/UnclaimRequest.md)| request |

### Return type

[**\cisco\com\dnac\v1\api\client\model\UnClaimDeviceResponse**](../Model/UnClaimDeviceResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOnboardingPnpDeviceVacctSync**
> \cisco\com\dnac\v1\api\client\model\SyncVirtualAccountDevicesResponse postOnboardingPnpDeviceVacctSync($request)

Sync Virtual Account Devices

This API is used to sync the device info from the given smart account & virtual account with the PnP database. The list of synced devices is returned in the response.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\SAVAMapping(); // \cisco\com\dnac\v1\api\client\model\SAVAMapping | request

try {
    $result = $apiInstance->postOnboardingPnpDeviceVacctSync($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->postOnboardingPnpDeviceVacctSync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\SAVAMapping**](../Model/SAVAMapping.md)| request |

### Return type

[**\cisco\com\dnac\v1\api\client\model\SyncVirtualAccountDevicesResponse**](../Model/SyncVirtualAccountDevicesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOnboardingPnpSettingsSavacct**
> \cisco\com\dnac\v1\api\client\model\AddVirtualAccountResponse postOnboardingPnpSettingsSavacct($request)

Add Virtual Account

This API is used to register a Smart Account, Virtual Account and the relevant server profile info with the PnP System & database. The devices present in the registered virtual account are synced with the PnP database as well. The new profile is returned in the response.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\SAVAMapping(); // \cisco\com\dnac\v1\api\client\model\SAVAMapping | request

try {
    $result = $apiInstance->postOnboardingPnpSettingsSavacct($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->postOnboardingPnpSettingsSavacct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\SAVAMapping**](../Model/SAVAMapping.md)| request |

### Return type

[**\cisco\com\dnac\v1\api\client\model\AddVirtualAccountResponse**](../Model/AddVirtualAccountResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOnboardingPnpWorkflow**
> \cisco\com\dnac\v1\api\client\model\CreateWorkflowResponse postOnboardingPnpWorkflow($request)

Create Workflow

This API is used to add a PnP Workflow along with the relevant tasks in the workflow into the PnP database.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\Workflow(); // \cisco\com\dnac\v1\api\client\model\Workflow | request

try {
    $result = $apiInstance->postOnboardingPnpWorkflow($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->postOnboardingPnpWorkflow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\Workflow**](../Model/Workflow.md)| request |

### Return type

[**\cisco\com\dnac\v1\api\client\model\CreateWorkflowResponse**](../Model/CreateWorkflowResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putOnboardingPnpDeviceById**
> \cisco\com\dnac\v1\api\client\model\UpdateDeviceResponse putOnboardingPnpDeviceById($request, $id)

Update Device

This API is used to update device details of a device that exists in the PnP database.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\Device(); // \cisco\com\dnac\v1\api\client\model\Device | request
$id = "id_example"; // string | id

try {
    $result = $apiInstance->putOnboardingPnpDeviceById($request, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->putOnboardingPnpDeviceById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\Device**](../Model/Device.md)| request |
 **id** | **string**| id |

### Return type

[**\cisco\com\dnac\v1\api\client\model\UpdateDeviceResponse**](../Model/UpdateDeviceResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putOnboardingPnpSettings**
> \cisco\com\dnac\v1\api\client\model\UpdateSettingsResponse putOnboardingPnpSettings($request)

Update Settings

Change this user's list of global PnP settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\Settings(); // \cisco\com\dnac\v1\api\client\model\Settings | request

try {
    $result = $apiInstance->putOnboardingPnpSettings($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->putOnboardingPnpSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\Settings**](../Model/Settings.md)| request |

### Return type

[**\cisco\com\dnac\v1\api\client\model\UpdateSettingsResponse**](../Model/UpdateSettingsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putOnboardingPnpSettingsSavacct**
> \cisco\com\dnac\v1\api\client\model\EditPnPServerProfileResponse putOnboardingPnpSettingsSavacct($request)

Edit PnP Server Profile

This API is used to edit the PnP Server profile in a registered Virtual Account in the PnP database.The edited smart & virtual account info is returned in the response.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\SAVAMapping(); // \cisco\com\dnac\v1\api\client\model\SAVAMapping | request

try {
    $result = $apiInstance->putOnboardingPnpSettingsSavacct($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->putOnboardingPnpSettingsSavacct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\SAVAMapping**](../Model/SAVAMapping.md)| request |

### Return type

[**\cisco\com\dnac\v1\api\client\model\EditPnPServerProfileResponse**](../Model/EditPnPServerProfileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putOnboardingPnpWorkflowById**
> \cisco\com\dnac\v1\api\client\model\UpdateWorkflowResponse putOnboardingPnpWorkflowById($request, $id)

Update Workflow

Update an existing workflow

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\Workflow(); // \cisco\com\dnac\v1\api\client\model\Workflow | request
$id = "id_example"; // string | id

try {
    $result = $apiInstance->putOnboardingPnpWorkflowById($request, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->putOnboardingPnpWorkflowById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\Workflow**](../Model/Workflow.md)| request |
 **id** | **string**| id |

### Return type

[**\cisco\com\dnac\v1\api\client\model\UpdateWorkflowResponse**](../Model/UpdateWorkflowResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

