# cisco\com\dnac\v1\api\client\TaskApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTask**](TaskApi.md#getTask) | **GET** /api/v1/task | Get filtered tasks
[**getTaskByTaskId**](TaskApi.md#getTaskByTaskId) | **GET** /api/v1/task/${taskId} | getTruststoreFileCount
[**getTaskCount**](TaskApi.md#getTaskCount) | **GET** /api/v1/task/count | Get task count
[**getTaskOperationByOperationIdRange**](TaskApi.md#getTaskOperationByOperationIdRange) | **GET** /api/v1/task/operation/${operationId}/${offset}/${limit} | getTaskByOperationId
[**getTaskTreeByTaskId**](TaskApi.md#getTaskTreeByTaskId) | **GET** /api/v1/task/${taskId}/tree | Get Task Tree


# **getTask**
> \cisco\com\dnac\v1\api\client\model\TaskDTOListResponse getTask($start_time, $end_time, $data, $error_code, $service_type, $username, $progress, $is_error, $failure_reason, $parent_id, $offset, $limit, $sort_by, $order)

Get filtered tasks

This method is used to retrieve task(s) based on various filters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_time = "start_time_example"; // string | This is the epoch start time from which tasks need to be fetched
$end_time = "end_time_example"; // string | This is the epoch end time upto which audit records need to be fetched
$data = "data_example"; // string | Fetch tasks that contains this data
$error_code = "error_code_example"; // string | Fetch tasks that have this error code
$service_type = "service_type_example"; // string | Fetch tasks with this service type
$username = "username_example"; // string | Fetch tasks with this username
$progress = "progress_example"; // string | Fetch tasks that contains this progress
$is_error = "is_error_example"; // string | Fetch tasks ended as success or failure. Valid values: true, false
$failure_reason = "failure_reason_example"; // string | Fetch tasks that contains this failure reason
$parent_id = "parent_id_example"; // string | Fetch tasks that have this parent Id
$offset = "offset_example"; // string | offset
$limit = "limit_example"; // string | limit
$sort_by = "sort_by_example"; // string | Sort results by this field
$order = "order_example"; // string | Sort order - asc or dsc

try {
    $result = $apiInstance->getTask($start_time, $end_time, $data, $error_code, $service_type, $username, $progress, $is_error, $failure_reason, $parent_id, $offset, $limit, $sort_by, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_time** | **string**| This is the epoch start time from which tasks need to be fetched | [optional]
 **end_time** | **string**| This is the epoch end time upto which audit records need to be fetched | [optional]
 **data** | **string**| Fetch tasks that contains this data | [optional]
 **error_code** | **string**| Fetch tasks that have this error code | [optional]
 **service_type** | **string**| Fetch tasks with this service type | [optional]
 **username** | **string**| Fetch tasks with this username | [optional]
 **progress** | **string**| Fetch tasks that contains this progress | [optional]
 **is_error** | **string**| Fetch tasks ended as success or failure. Valid values: true, false | [optional]
 **failure_reason** | **string**| Fetch tasks that contains this failure reason | [optional]
 **parent_id** | **string**| Fetch tasks that have this parent Id | [optional]
 **offset** | **string**| offset | [optional]
 **limit** | **string**| limit | [optional]
 **sort_by** | **string**| Sort results by this field | [optional]
 **order** | **string**| Sort order - asc or dsc | [optional]

### Return type

[**\cisco\com\dnac\v1\api\client\model\TaskDTOListResponse**](../Model/TaskDTOListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTaskByTaskId**
> \cisco\com\dnac\v1\api\client\model\TaskDTOResponse getTaskByTaskId($task_id)

getTruststoreFileCount

This method is used to retrieve a task based on their id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$task_id = "task_id_example"; // string | UUID of the Task

try {
    $result = $apiInstance->getTaskByTaskId($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getTaskByTaskId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| UUID of the Task |

### Return type

[**\cisco\com\dnac\v1\api\client\model\TaskDTOResponse**](../Model/TaskDTOResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTaskCount**
> \cisco\com\dnac\v1\api\client\model\CountResult getTaskCount($start_time, $end_time, $data, $error_code, $service_type, $username, $progress, $is_error, $failure_reason, $parent_id)

Get task count

This method is used to retrieve task count

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_time = "start_time_example"; // string | This is the epoch start time from which tasks need to be fetched
$end_time = "end_time_example"; // string | This is the epoch end time upto which audit records need to be fetched
$data = "data_example"; // string | Fetch tasks that contains this data
$error_code = "error_code_example"; // string | Fetch tasks that have this error code
$service_type = "service_type_example"; // string | Fetch tasks with this service type
$username = "username_example"; // string | Fetch tasks with this username
$progress = "progress_example"; // string | Fetch tasks that contains this progress
$is_error = "is_error_example"; // string | Fetch tasks ended as success or failure. Valid values: true, false
$failure_reason = "failure_reason_example"; // string | Fetch tasks that contains this failure reason
$parent_id = "parent_id_example"; // string | Fetch tasks that have this parent Id

try {
    $result = $apiInstance->getTaskCount($start_time, $end_time, $data, $error_code, $service_type, $username, $progress, $is_error, $failure_reason, $parent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getTaskCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_time** | **string**| This is the epoch start time from which tasks need to be fetched | [optional]
 **end_time** | **string**| This is the epoch end time upto which audit records need to be fetched | [optional]
 **data** | **string**| Fetch tasks that contains this data | [optional]
 **error_code** | **string**| Fetch tasks that have this error code | [optional]
 **service_type** | **string**| Fetch tasks with this service type | [optional]
 **username** | **string**| Fetch tasks with this username | [optional]
 **progress** | **string**| Fetch tasks that contains this progress | [optional]
 **is_error** | **string**| Fetch tasks ended as success or failure. Valid values: true, false | [optional]
 **failure_reason** | **string**| Fetch tasks that contains this failure reason | [optional]
 **parent_id** | **string**| Fetch tasks that have this parent Id | [optional]

### Return type

[**\cisco\com\dnac\v1\api\client\model\CountResult**](../Model/CountResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTaskOperationByOperationIdRange**
> \cisco\com\dnac\v1\api\client\model\TaskDTOListResponse getTaskOperationByOperationIdRange($operation_id, $offset, $limit)

getTaskByOperationId

This method is used to find root tasks assoicated to an operationid

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$operation_id = "operation_id_example"; // string | operationId
$offset = 56; // int | Index, minimum value is 0
$limit = 56; // int | The maximum value of {limit} supported is 500. <br/> Base 1 indexing for {limit}, minimum value is 1

try {
    $result = $apiInstance->getTaskOperationByOperationIdRange($operation_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getTaskOperationByOperationIdRange: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **operation_id** | **string**| operationId |
 **offset** | **int**| Index, minimum value is 0 |
 **limit** | **int**| The maximum value of {limit} supported is 500. &lt;br/&gt; Base 1 indexing for {limit}, minimum value is 1 |

### Return type

[**\cisco\com\dnac\v1\api\client\model\TaskDTOListResponse**](../Model/TaskDTOListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTaskTreeByTaskId**
> \cisco\com\dnac\v1\api\client\model\TaskDTOListResponse getTaskTreeByTaskId($task_id)

Get Task Tree

This method is used to retrieve a task with its children tasks based on their id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$task_id = "task_id_example"; // string | UUID of the Task

try {
    $result = $apiInstance->getTaskTreeByTaskId($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getTaskTreeByTaskId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| UUID of the Task |

### Return type

[**\cisco\com\dnac\v1\api\client\model\TaskDTOListResponse**](../Model/TaskDTOListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

