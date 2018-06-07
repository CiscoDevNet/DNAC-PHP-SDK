# cisco\com\dnac\v1\api\client\ImageApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getImageImportation**](ImageApi.md#getImageImportation) | **GET** /api/v1/image/importation | Get image details with filter
[**postImageActivationDevice**](ImageApi.md#postImageActivationDevice) | **POST** /api/v1/image/activation/device | Trigger activation on a device
[**postImageDistribution**](ImageApi.md#postImageDistribution) | **POST** /api/v1/image/distribution | Trigger distribution of an image
[**postImageImportationSourceFile**](ImageApi.md#postImageImportationSourceFile) | **POST** /api/v1/image/importation/source/file | Import an image from local file system
[**postImageImportationSourceUrl**](ImageApi.md#postImageImportationSourceUrl) | **POST** /api/v1/image/importation/source/url | Trigger now or schedule import of an image from a URL


# **getImageImportation**
> \cisco\com\dnac\v1\api\client\model\ImageInfoListResponse getImageImportation($image_uuid, $name, $family, $application_type, $image_integrity_status, $version, $image_series, $image_name, $is_tagged_golden, $is_cco_recommended, $is_cco_latest, $created_time, $image_size_greater_than, $image_size_lesser_than, $sort_by, $sort_order, $limit, $offset)

Get image details with filter

Get image details based on filter criteria, use % for like operations. Example: filterByName = cat3k%

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$image_uuid = "image_uuid_example"; // string | imageUuid
$name = "name_example"; // string | name
$family = "family_example"; // string | family
$application_type = "application_type_example"; // string | applicationType
$image_integrity_status = "image_integrity_status_example"; // string | imageIntegrityStatus - FAILURE, UNKNOWN, VERIFIED
$version = "version_example"; // string | software Image Version
$image_series = "image_series_example"; // string | image Series
$image_name = "image_name_example"; // string | image Name
$is_tagged_golden = true; // bool | is Tagged Golden
$is_cco_recommended = true; // bool | is recommended from cisco.com
$is_cco_latest = true; // bool | is latest from cisco.com
$created_time = 56; // int | time in milliseconds (epoch format)
$image_size_greater_than = 56; // int | size in bytes
$image_size_lesser_than = 56; // int | size in bytes
$sort_by = "sort_by_example"; // string | sort results by this field
$sort_order = "sort_order_example"; // string | sort order - 'asc' or 'des'. Default is asc
$limit = 56; // int | limit
$offset = 56; // int | offset

try {
    $result = $apiInstance->getImageImportation($image_uuid, $name, $family, $application_type, $image_integrity_status, $version, $image_series, $image_name, $is_tagged_golden, $is_cco_recommended, $is_cco_latest, $created_time, $image_size_greater_than, $image_size_lesser_than, $sort_by, $sort_order, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->getImageImportation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_uuid** | **string**| imageUuid | [optional]
 **name** | **string**| name | [optional]
 **family** | **string**| family | [optional]
 **application_type** | **string**| applicationType | [optional]
 **image_integrity_status** | **string**| imageIntegrityStatus - FAILURE, UNKNOWN, VERIFIED | [optional]
 **version** | **string**| software Image Version | [optional]
 **image_series** | **string**| image Series | [optional]
 **image_name** | **string**| image Name | [optional]
 **is_tagged_golden** | **bool**| is Tagged Golden | [optional]
 **is_cco_recommended** | **bool**| is recommended from cisco.com | [optional]
 **is_cco_latest** | **bool**| is latest from cisco.com | [optional]
 **created_time** | **int**| time in milliseconds (epoch format) | [optional]
 **image_size_greater_than** | **int**| size in bytes | [optional]
 **image_size_lesser_than** | **int**| size in bytes | [optional]
 **sort_by** | **string**| sort results by this field | [optional]
 **sort_order** | **string**| sort order - &#39;asc&#39; or &#39;des&#39;. Default is asc | [optional]
 **limit** | **int**| limit | [optional]
 **offset** | **int**| offset | [optional]

### Return type

[**\cisco\com\dnac\v1\api\client\model\ImageInfoListResponse**](../Model/ImageInfoListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postImageActivationDevice**
> \cisco\com\dnac\v1\api\client\model\TaskIdResult postImageActivationDevice($request, $client_type, $client_url, $schedule_validate)

Trigger activation on a device

Performs activation of an image on a given device.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\ActivateDTO(); // \cisco\com\dnac\v1\api\client\model\ActivateDTO | request
$client_type = "client_type_example"; // string | Client-type (Optional)
$client_url = "client_url_example"; // string | Client-url (Optional)
$schedule_validate = true; // bool | scheduleValidate, validates data before schedule (Optional)

try {
    $result = $apiInstance->postImageActivationDevice($request, $client_type, $client_url, $schedule_validate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->postImageActivationDevice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\ActivateDTO**](../Model/ActivateDTO.md)| request |
 **client_type** | **string**| Client-type (Optional) | [optional]
 **client_url** | **string**| Client-url (Optional) | [optional]
 **schedule_validate** | **bool**| scheduleValidate, validates data before schedule (Optional) | [optional]

### Return type

[**\cisco\com\dnac\v1\api\client\model\TaskIdResult**](../Model/TaskIdResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postImageDistribution**
> \cisco\com\dnac\v1\api\client\model\TaskIdResult postImageDistribution($request)

Trigger distribution of an image

Performs distribution of an image to a given device.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\DistributeDTO(); // \cisco\com\dnac\v1\api\client\model\DistributeDTO | request

try {
    $result = $apiInstance->postImageDistribution($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->postImageDistribution: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\DistributeDTO**](../Model/DistributeDTO.md)| request |

### Return type

[**\cisco\com\dnac\v1\api\client\model\TaskIdResult**](../Model/TaskIdResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postImageImportationSourceFile**
> \cisco\com\dnac\v1\api\client\model\TaskIdResult postImageImportationSourceFile($is_third_party, $third_party_vendor, $third_party_image_family, $third_party_application_type)

Import an image from local file system

Imports an image to SWIM image repository from local file system. The image files with extensions bin, img, tar, smu, pie, aes, iso, ova, tar_gz and qcow2 are supported. Set siteUuid as -1 to tag as golden image.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_third_party = true; // bool | Third party Image check
$third_party_vendor = "third_party_vendor_example"; // string | Third Party Vendor
$third_party_image_family = "third_party_image_family_example"; // string | Third Party image family
$third_party_application_type = "third_party_application_type_example"; // string | Third Party Application Type

try {
    $result = $apiInstance->postImageImportationSourceFile($is_third_party, $third_party_vendor, $third_party_image_family, $third_party_application_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->postImageImportationSourceFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **is_third_party** | **bool**| Third party Image check | [optional]
 **third_party_vendor** | **string**| Third Party Vendor | [optional]
 **third_party_image_family** | **string**| Third Party image family | [optional]
 **third_party_application_type** | **string**| Third Party Application Type | [optional]

### Return type

[**\cisco\com\dnac\v1\api\client\model\TaskIdResult**](../Model/TaskIdResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postImageImportationSourceUrl**
> \cisco\com\dnac\v1\api\client\model\TaskIdResult postImageImportationSourceUrl($request, $schedule_at, $schedule_desc, $schedule_origin)

Trigger now or schedule import of an image from a URL

Imports an image to SWIM image repository, source is any ftp or http URL. The image files with extensions bin, img, tar, smu, pie, aes, iso, ova, tar_gz and qcow2 are supported. Set siteUuid as -1 to tag as golden image.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\ImageImportFromUrlDTO(); // \cisco\com\dnac\v1\api\client\model\ImageImportFromUrlDTO | request
$schedule_at = "schedule_at_example"; // string | Epoch Time (The number of milli-seconds since January 1 1970 UTC) at which the distribution should be scheduled (Optional)
$schedule_desc = "schedule_desc_example"; // string | Custom Description (Optional)
$schedule_origin = "schedule_origin_example"; // string | Originator of this call (Optional)

try {
    $result = $apiInstance->postImageImportationSourceUrl($request, $schedule_at, $schedule_desc, $schedule_origin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->postImageImportationSourceUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\ImageImportFromUrlDTO**](../Model/ImageImportFromUrlDTO.md)| request |
 **schedule_at** | **string**| Epoch Time (The number of milli-seconds since January 1 1970 UTC) at which the distribution should be scheduled (Optional) | [optional]
 **schedule_desc** | **string**| Custom Description (Optional) | [optional]
 **schedule_origin** | **string**| Originator of this call (Optional) | [optional]

### Return type

[**\cisco\com\dnac\v1\api\client\model\TaskIdResult**](../Model/TaskIdResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

