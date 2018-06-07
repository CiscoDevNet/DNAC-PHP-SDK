# cisco\com\dnac\v1\api\client\FlowAnalysisApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteFlowAnalysisByFlowAnalysisId**](FlowAnalysisApi.md#deleteFlowAnalysisByFlowAnalysisId) | **DELETE** /api/v1/flow-analysis/${flowAnalysisId} | Deletes a flow analysis request
[**getFlowAnalysis**](FlowAnalysisApi.md#getFlowAnalysis) | **GET** /api/v1/flow-analysis | Retrieves a summary of all flow analyses stored
[**getFlowAnalysisByFlowAnalysisId**](FlowAnalysisApi.md#getFlowAnalysisByFlowAnalysisId) | **GET** /api/v1/flow-analysis/${flowAnalysisId} | Retrieves result of a previously requested flow analysis


# **deleteFlowAnalysisByFlowAnalysisId**
> \cisco\com\dnac\v1\api\client\model\TaskIdResult deleteFlowAnalysisByFlowAnalysisId($flow_analysis_id)

Deletes a flow analysis request

Deletes a flow analysis request by its id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\FlowAnalysisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flow_analysis_id = "flow_analysis_id_example"; // string | Flow analysis request id

try {
    $result = $apiInstance->deleteFlowAnalysisByFlowAnalysisId($flow_analysis_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowAnalysisApi->deleteFlowAnalysisByFlowAnalysisId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flow_analysis_id** | **string**| Flow analysis request id |

### Return type

[**\cisco\com\dnac\v1\api\client\model\TaskIdResult**](../Model/TaskIdResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFlowAnalysis**
> \cisco\com\dnac\v1\api\client\model\FlowAnalysisListOutput getFlowAnalysis($periodic_refresh, $source_ip, $dest_ip, $source_port, $dest_port, $gt_create_time, $lt_create_time, $protocol, $status, $task_id, $last_update_time, $limit, $offset, $order, $sort_by)

Retrieves a summary of all flow analyses stored

Retrieves a summary of all flow analyses stored. Filters the results by given parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\FlowAnalysisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$periodic_refresh = true; // bool | Is analysis periodically refreshed?
$source_ip = "source_ip_example"; // string | Source IP address
$dest_ip = "dest_ip_example"; // string | Destination IP adress
$source_port = "source_port_example"; // string | Source port
$dest_port = "dest_port_example"; // string | Destination port
$gt_create_time = "gt_create_time_example"; // string | Analyses requested after this time
$lt_create_time = "lt_create_time_example"; // string | Analyses requested before this time
$protocol = "protocol_example"; // string | Protocol
$status = "status_example"; // string | Status
$task_id = "task_id_example"; // string | Task ID
$last_update_time = "last_update_time_example"; // string | Last update time
$limit = "limit_example"; // string | Number of resources returned
$offset = "offset_example"; // string | Start index of resources returned (1-based)
$order = "order_example"; // string | Order by this field
$sort_by = "sort_by_example"; // string | Sort by this field

try {
    $result = $apiInstance->getFlowAnalysis($periodic_refresh, $source_ip, $dest_ip, $source_port, $dest_port, $gt_create_time, $lt_create_time, $protocol, $status, $task_id, $last_update_time, $limit, $offset, $order, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowAnalysisApi->getFlowAnalysis: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **periodic_refresh** | **bool**| Is analysis periodically refreshed? | [optional]
 **source_ip** | **string**| Source IP address | [optional]
 **dest_ip** | **string**| Destination IP adress | [optional]
 **source_port** | **string**| Source port | [optional]
 **dest_port** | **string**| Destination port | [optional]
 **gt_create_time** | **string**| Analyses requested after this time | [optional]
 **lt_create_time** | **string**| Analyses requested before this time | [optional]
 **protocol** | **string**| Protocol | [optional]
 **status** | **string**| Status | [optional]
 **task_id** | **string**| Task ID | [optional]
 **last_update_time** | **string**| Last update time | [optional]
 **limit** | **string**| Number of resources returned | [optional]
 **offset** | **string**| Start index of resources returned (1-based) | [optional]
 **order** | **string**| Order by this field | [optional]
 **sort_by** | **string**| Sort by this field | [optional]

### Return type

[**\cisco\com\dnac\v1\api\client\model\FlowAnalysisListOutput**](../Model/FlowAnalysisListOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFlowAnalysisByFlowAnalysisId**
> \cisco\com\dnac\v1\api\client\model\PathResponseResult getFlowAnalysisByFlowAnalysisId($flow_analysis_id)

Retrieves result of a previously requested flow analysis

Retrieves result of a previously requested flow analysis by its Flow Analysis id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\FlowAnalysisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flow_analysis_id = "flow_analysis_id_example"; // string | Flow analysis request id

try {
    $result = $apiInstance->getFlowAnalysisByFlowAnalysisId($flow_analysis_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowAnalysisApi->getFlowAnalysisByFlowAnalysisId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flow_analysis_id** | **string**| Flow analysis request id |

### Return type

[**\cisco\com\dnac\v1\api\client\model\PathResponseResult**](../Model/PathResponseResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

