# cisco\com\dnac\v1\api\client\MiscApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSnmpProperty**](MiscApi.md#getSnmpProperty) | **GET** /api/v1/snmp-property | Retrieves SNMP properties
[**postAuthToken**](MiscApi.md#postAuthToken) | **POST** /api/system/v1/auth/token | Generate Token
[**postFlowAnalysis**](MiscApi.md#postFlowAnalysis) | **POST** /api/v1/flow-analysis | Initiates a new flow analysis
[**postSnmpProperty**](MiscApi.md#postSnmpProperty) | **POST** /api/v1/snmp-property | Creates or updates SNMP properties


# **getSnmpProperty**
> \cisco\com\dnac\v1\api\client\model\SystemPropertyListResult getSnmpProperty()

Retrieves SNMP properties

This method is used to get SNMP properties

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\MiscApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getSnmpProperty();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscApi->getSnmpProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\cisco\com\dnac\v1\api\client\model\SystemPropertyListResult**](../Model/SystemPropertyListResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAuthToken**
> \cisco\com\dnac\v1\api\client\model\GenerateTokenResponse postAuthToken($request, $authorization)

Generate Token

This method is used to generate token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\MiscApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\GenerateTokenRequest(); // \cisco\com\dnac\v1\api\client\model\GenerateTokenRequest | request
$authorization = "Basic YWRtaW46TWFnbGV2MTIz"; // string | <username:password> of 64 based encoded string

try {
    $result = $apiInstance->postAuthToken($request, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscApi->postAuthToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\GenerateTokenRequest**](../Model/GenerateTokenRequest.md)| request |
 **authorization** | **string**| &lt;username:password&gt; of 64 based encoded string | [default to Basic YWRtaW46TWFnbGV2MTIz]

### Return type

[**\cisco\com\dnac\v1\api\client\model\GenerateTokenResponse**](../Model/GenerateTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postFlowAnalysis**
> \cisco\com\dnac\v1\api\client\model\FlowAnalysisRequestResultOutput postFlowAnalysis($request)

Initiates a new flow analysis

Initiates a new flow analysis with periodic refresh and stat collection options. Returns a request id and a task id to get results and follow progress.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\MiscApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\FlowAnalysisRequest(); // \cisco\com\dnac\v1\api\client\model\FlowAnalysisRequest | request

try {
    $result = $apiInstance->postFlowAnalysis($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscApi->postFlowAnalysis: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\FlowAnalysisRequest**](../Model/FlowAnalysisRequest.md)| request |

### Return type

[**\cisco\com\dnac\v1\api\client\model\FlowAnalysisRequestResultOutput**](../Model/FlowAnalysisRequestResultOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSnmpProperty**
> \cisco\com\dnac\v1\api\client\model\TaskIdResult postSnmpProperty($request)

Creates or updates SNMP properties

This method is used to add SNMP properties

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\MiscApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\SystemPropertyNameAndIntValueDTO(); // \cisco\com\dnac\v1\api\client\model\SystemPropertyNameAndIntValueDTO | request

try {
    $result = $apiInstance->postSnmpProperty($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscApi->postSnmpProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\SystemPropertyNameAndIntValueDTO**](../Model/SystemPropertyNameAndIntValueDTO.md)| request |

### Return type

[**\cisco\com\dnac\v1\api\client\model\TaskIdResult**](../Model/TaskIdResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

