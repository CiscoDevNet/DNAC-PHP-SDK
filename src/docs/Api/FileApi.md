# cisco\com\dnac\v1\api\client\FileApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getFileByFileId**](FileApi.md#getFileByFileId) | **GET** /api/v1/file/${fileId} | Downloads a file referred by the fileId
[**getFileNamespace**](FileApi.md#getFileNamespace) | **GET** /api/v1/file/namespace | Returns list of available namespaces
[**getFileNamespaceByNameSpace**](FileApi.md#getFileNamespaceByNameSpace) | **GET** /api/v1/file/namespace/${nameSpace} | Returns list of files under a specific namespace


# **getFileByFileId**
> \cisco\com\dnac\v1\api\client\model\DownloadsAFileReferredByTheFileIdResponse getFileByFileId($file_id)

Downloads a file referred by the fileId

This method is used to download a file referred by the fileId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = "file_id_example"; // string | File Identification number

try {
    $result = $apiInstance->getFileByFileId($file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->getFileByFileId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_id** | **string**| File Identification number |

### Return type

[**\cisco\com\dnac\v1\api\client\model\DownloadsAFileReferredByTheFileIdResponse**](../Model/DownloadsAFileReferredByTheFileIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFileNamespace**
> \cisco\com\dnac\v1\api\client\model\NameSpaceListResult getFileNamespace()

Returns list of available namespaces

This method is used to obtain a list of available namespaces

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getFileNamespace();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->getFileNamespace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\cisco\com\dnac\v1\api\client\model\NameSpaceListResult**](../Model/NameSpaceListResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFileNamespaceByNameSpace**
> \cisco\com\dnac\v1\api\client\model\FileObjectListResult getFileNamespaceByNameSpace($name_space)

Returns list of files under a specific namespace

This method is used to obtain a list of files under a specific namespace

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name_space = "name_space_example"; // string | A listing of fileId's

try {
    $result = $apiInstance->getFileNamespaceByNameSpace($name_space);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->getFileNamespaceByNameSpace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name_space** | **string**| A listing of fileId&#39;s |

### Return type

[**\cisco\com\dnac\v1\api\client\model\FileObjectListResult**](../Model/FileObjectListResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

