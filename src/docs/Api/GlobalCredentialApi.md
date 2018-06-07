# cisco\com\dnac\v1\api\client\GlobalCredentialApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteGlobalCredentialByGlobalCredentialId**](GlobalCredentialApi.md#deleteGlobalCredentialByGlobalCredentialId) | **DELETE** /api/v1/global-credential/${globalCredentialId} | Retrieves global credential by ID
[**getGlobalCredential**](GlobalCredentialApi.md#getGlobalCredential) | **GET** /api/v1/global-credential | Retrieves global credential for the given credential sub type
[**getGlobalCredentialById**](GlobalCredentialApi.md#getGlobalCredentialById) | **GET** /api/v1/global-credential/${id} | Retrieves credential sub type for the given credential Id
[**postGlobalCredentialCli**](GlobalCredentialApi.md#postGlobalCredentialCli) | **POST** /api/v1/global-credential/cli | Creates global CLI credential
[**postGlobalCredentialHttpRead**](GlobalCredentialApi.md#postGlobalCredentialHttpRead) | **POST** /api/v1/global-credential/http-read | Creates global HTTP read credentials
[**postGlobalCredentialHttpWrite**](GlobalCredentialApi.md#postGlobalCredentialHttpWrite) | **POST** /api/v1/global-credential/http-write | Creates global HTTP write credentials
[**postGlobalCredentialNetconf**](GlobalCredentialApi.md#postGlobalCredentialNetconf) | **POST** /api/v1/global-credential/netconf | Creates global netconf credential
[**postGlobalCredentialSnmpv2ReadCommunity**](GlobalCredentialApi.md#postGlobalCredentialSnmpv2ReadCommunity) | **POST** /api/v1/global-credential/snmpv2-read-community | Creates global SNMP read community
[**postGlobalCredentialSnmpv2WriteCommunity**](GlobalCredentialApi.md#postGlobalCredentialSnmpv2WriteCommunity) | **POST** /api/v1/global-credential/snmpv2-write-community | Creates global SNMP write community
[**postGlobalCredentialSnmpv3**](GlobalCredentialApi.md#postGlobalCredentialSnmpv3) | **POST** /api/v1/global-credential/snmpv3 | Creates global SNMPv3 credential
[**putGlobalCredentialByGlobalCredentialId**](GlobalCredentialApi.md#putGlobalCredentialByGlobalCredentialId) | **PUT** /api/v1/global-credential/${globalCredentialId} | Update global credential for network devices in site(s)
[**putGlobalCredentialCli**](GlobalCredentialApi.md#putGlobalCredentialCli) | **PUT** /api/v1/global-credential/cli | Updates global CLI credential
[**putGlobalCredentialHttpRead**](GlobalCredentialApi.md#putGlobalCredentialHttpRead) | **PUT** /api/v1/global-credential/http-read | Updates global HTTP Read credential
[**putGlobalCredentialHttpWrite**](GlobalCredentialApi.md#putGlobalCredentialHttpWrite) | **PUT** /api/v1/global-credential/http-write | Updates global HTTP Write credential
[**putGlobalCredentialNetconf**](GlobalCredentialApi.md#putGlobalCredentialNetconf) | **PUT** /api/v1/global-credential/netconf | Updates global netconf credential
[**putGlobalCredentialSnmpv2ReadCommunity**](GlobalCredentialApi.md#putGlobalCredentialSnmpv2ReadCommunity) | **PUT** /api/v1/global-credential/snmpv2-read-community | Updates global SNMP read community
[**putGlobalCredentialSnmpv2WriteCommunity**](GlobalCredentialApi.md#putGlobalCredentialSnmpv2WriteCommunity) | **PUT** /api/v1/global-credential/snmpv2-write-community | Updates global SNMP write community
[**putGlobalCredentialSnmpv3**](GlobalCredentialApi.md#putGlobalCredentialSnmpv3) | **PUT** /api/v1/global-credential/snmpv3 | Updates global SNMPv3 credential


# **deleteGlobalCredentialByGlobalCredentialId**
> \cisco\com\dnac\v1\api\client\model\TaskIdResult deleteGlobalCredentialByGlobalCredentialId($global_credential_id)

Retrieves global credential by ID

This method is used to delete global credential for the given ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\GlobalCredentialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$global_credential_id = "global_credential_id_example"; // string | ID of global-credential

try {
    $result = $apiInstance->deleteGlobalCredentialByGlobalCredentialId($global_credential_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalCredentialApi->deleteGlobalCredentialByGlobalCredentialId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **global_credential_id** | **string**| ID of global-credential |

### Return type

[**\cisco\com\dnac\v1\api\client\model\TaskIdResult**](../Model/TaskIdResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGlobalCredential**
> \cisco\com\dnac\v1\api\client\model\GlobalCredentialListResult getGlobalCredential($credential_sub_type, $sort_by, $order)

Retrieves global credential for the given credential sub type

This method is used to get global credential for the given credential sub type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\GlobalCredentialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$credential_sub_type = "credential_sub_type_example"; // string | Credential type as CLI / SNMPV2_READ_COMMUNITY / SNMPV2_WRITE_COMMUNITY / SNMPV3 / HTTP_WRITE / HTTP_READ / NETCONF
$sort_by = "sort_by_example"; // string | sortBy
$order = "order_example"; // string | order

try {
    $result = $apiInstance->getGlobalCredential($credential_sub_type, $sort_by, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalCredentialApi->getGlobalCredential: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credential_sub_type** | **string**| Credential type as CLI / SNMPV2_READ_COMMUNITY / SNMPV2_WRITE_COMMUNITY / SNMPV3 / HTTP_WRITE / HTTP_READ / NETCONF | [optional]
 **sort_by** | **string**| sortBy | [optional]
 **order** | **string**| order | [optional]

### Return type

[**\cisco\com\dnac\v1\api\client\model\GlobalCredentialListResult**](../Model/GlobalCredentialListResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGlobalCredentialById**
> \cisco\com\dnac\v1\api\client\model\GlobalCredentialSubTypeResult getGlobalCredentialById($id)

Retrieves credential sub type for the given credential Id

This method is used to get credential sub type for the given Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\GlobalCredentialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Global Credential ID

try {
    $result = $apiInstance->getGlobalCredentialById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalCredentialApi->getGlobalCredentialById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Global Credential ID |

### Return type

[**\cisco\com\dnac\v1\api\client\model\GlobalCredentialSubTypeResult**](../Model/GlobalCredentialSubTypeResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postGlobalCredentialCli**
> \cisco\com\dnac\v1\api\client\model\TaskIdResult postGlobalCredentialCli($request)

Creates global CLI credential

This method is used to add global CLI credential

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\GlobalCredentialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\CLICredentialDTO(); // \cisco\com\dnac\v1\api\client\model\CLICredentialDTO | request

try {
    $result = $apiInstance->postGlobalCredentialCli($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalCredentialApi->postGlobalCredentialCli: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\CLICredentialDTO**](../Model/CLICredentialDTO.md)| request |

### Return type

[**\cisco\com\dnac\v1\api\client\model\TaskIdResult**](../Model/TaskIdResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postGlobalCredentialHttpRead**
> \cisco\com\dnac\v1\api\client\model\TaskIdResult postGlobalCredentialHttpRead($request)

Creates global HTTP read credentials

This method is used to add HTTP read credentials

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\GlobalCredentialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\HTTPReadCredentialDTO(); // \cisco\com\dnac\v1\api\client\model\HTTPReadCredentialDTO | request

try {
    $result = $apiInstance->postGlobalCredentialHttpRead($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalCredentialApi->postGlobalCredentialHttpRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\HTTPReadCredentialDTO**](../Model/HTTPReadCredentialDTO.md)| request |

### Return type

[**\cisco\com\dnac\v1\api\client\model\TaskIdResult**](../Model/TaskIdResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postGlobalCredentialHttpWrite**
> \cisco\com\dnac\v1\api\client\model\TaskIdResult postGlobalCredentialHttpWrite($request)

Creates global HTTP write credentials

This method is used to add global HTTP write credentials

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\GlobalCredentialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\HTTPWriteCredentialDTO(); // \cisco\com\dnac\v1\api\client\model\HTTPWriteCredentialDTO | request

try {
    $result = $apiInstance->postGlobalCredentialHttpWrite($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalCredentialApi->postGlobalCredentialHttpWrite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\HTTPWriteCredentialDTO**](../Model/HTTPWriteCredentialDTO.md)| request |

### Return type

[**\cisco\com\dnac\v1\api\client\model\TaskIdResult**](../Model/TaskIdResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postGlobalCredentialNetconf**
> \cisco\com\dnac\v1\api\client\model\TaskIdResult postGlobalCredentialNetconf($request)

Creates global netconf credential

This method is used to add global netconf credential

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\GlobalCredentialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\NetconfCredentialDTO(); // \cisco\com\dnac\v1\api\client\model\NetconfCredentialDTO | request

try {
    $result = $apiInstance->postGlobalCredentialNetconf($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalCredentialApi->postGlobalCredentialNetconf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\NetconfCredentialDTO**](../Model/NetconfCredentialDTO.md)| request |

### Return type

[**\cisco\com\dnac\v1\api\client\model\TaskIdResult**](../Model/TaskIdResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postGlobalCredentialSnmpv2ReadCommunity**
> \cisco\com\dnac\v1\api\client\model\TaskIdResult postGlobalCredentialSnmpv2ReadCommunity($request)

Creates global SNMP read community

This method is used to add global SNMP read community

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\GlobalCredentialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\SNMPvReadCommunityDTO(); // \cisco\com\dnac\v1\api\client\model\SNMPvReadCommunityDTO | request

try {
    $result = $apiInstance->postGlobalCredentialSnmpv2ReadCommunity($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalCredentialApi->postGlobalCredentialSnmpv2ReadCommunity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\SNMPvReadCommunityDTO**](../Model/SNMPvReadCommunityDTO.md)| request |

### Return type

[**\cisco\com\dnac\v1\api\client\model\TaskIdResult**](../Model/TaskIdResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postGlobalCredentialSnmpv2WriteCommunity**
> \cisco\com\dnac\v1\api\client\model\TaskIdResult postGlobalCredentialSnmpv2WriteCommunity($request)

Creates global SNMP write community

This method is used to add global SNMP write community

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\GlobalCredentialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\SNMPvWriteCommunityDTO(); // \cisco\com\dnac\v1\api\client\model\SNMPvWriteCommunityDTO | request

try {
    $result = $apiInstance->postGlobalCredentialSnmpv2WriteCommunity($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalCredentialApi->postGlobalCredentialSnmpv2WriteCommunity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\SNMPvWriteCommunityDTO**](../Model/SNMPvWriteCommunityDTO.md)| request |

### Return type

[**\cisco\com\dnac\v1\api\client\model\TaskIdResult**](../Model/TaskIdResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postGlobalCredentialSnmpv3**
> \cisco\com\dnac\v1\api\client\model\TaskIdResult postGlobalCredentialSnmpv3($request)

Creates global SNMPv3 credential

This method is used to add global SNMPv3 credential

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\GlobalCredentialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\SNMPvCredentialDTO(); // \cisco\com\dnac\v1\api\client\model\SNMPvCredentialDTO | request

try {
    $result = $apiInstance->postGlobalCredentialSnmpv3($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalCredentialApi->postGlobalCredentialSnmpv3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\SNMPvCredentialDTO**](../Model/SNMPvCredentialDTO.md)| request |

### Return type

[**\cisco\com\dnac\v1\api\client\model\TaskIdResult**](../Model/TaskIdResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putGlobalCredentialByGlobalCredentialId**
> \cisco\com\dnac\v1\api\client\model\TaskIdResult putGlobalCredentialByGlobalCredentialId($request, $global_credential_id)

Update global credential for network devices in site(s)

Update global credential for network devices in site(s)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\GlobalCredentialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\SitesInfoDTO(); // \cisco\com\dnac\v1\api\client\model\SitesInfoDTO | request
$global_credential_id = "global_credential_id_example"; // string | Global credential Uuid

try {
    $result = $apiInstance->putGlobalCredentialByGlobalCredentialId($request, $global_credential_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalCredentialApi->putGlobalCredentialByGlobalCredentialId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\SitesInfoDTO**](../Model/SitesInfoDTO.md)| request |
 **global_credential_id** | **string**| Global credential Uuid |

### Return type

[**\cisco\com\dnac\v1\api\client\model\TaskIdResult**](../Model/TaskIdResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putGlobalCredentialCli**
> \cisco\com\dnac\v1\api\client\model\TaskIdResult putGlobalCredentialCli($request)

Updates global CLI credential

This method is used to update global CLI credential

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\GlobalCredentialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\CLICredentialDTO(); // \cisco\com\dnac\v1\api\client\model\CLICredentialDTO | request

try {
    $result = $apiInstance->putGlobalCredentialCli($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalCredentialApi->putGlobalCredentialCli: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\CLICredentialDTO**](../Model/CLICredentialDTO.md)| request |

### Return type

[**\cisco\com\dnac\v1\api\client\model\TaskIdResult**](../Model/TaskIdResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putGlobalCredentialHttpRead**
> \cisco\com\dnac\v1\api\client\model\TaskIdResult putGlobalCredentialHttpRead($request)

Updates global HTTP Read credential

This method is used to update global HTTP Read credential

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\GlobalCredentialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\HTTPReadCredentialDTO(); // \cisco\com\dnac\v1\api\client\model\HTTPReadCredentialDTO | request

try {
    $result = $apiInstance->putGlobalCredentialHttpRead($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalCredentialApi->putGlobalCredentialHttpRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\HTTPReadCredentialDTO**](../Model/HTTPReadCredentialDTO.md)| request |

### Return type

[**\cisco\com\dnac\v1\api\client\model\TaskIdResult**](../Model/TaskIdResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putGlobalCredentialHttpWrite**
> \cisco\com\dnac\v1\api\client\model\TaskIdResult putGlobalCredentialHttpWrite($request)

Updates global HTTP Write credential

This method is used to update global HTTP Write credential

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\GlobalCredentialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\HTTPWriteCredentialDTO(); // \cisco\com\dnac\v1\api\client\model\HTTPWriteCredentialDTO | request

try {
    $result = $apiInstance->putGlobalCredentialHttpWrite($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalCredentialApi->putGlobalCredentialHttpWrite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\HTTPWriteCredentialDTO**](../Model/HTTPWriteCredentialDTO.md)| request |

### Return type

[**\cisco\com\dnac\v1\api\client\model\TaskIdResult**](../Model/TaskIdResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putGlobalCredentialNetconf**
> \cisco\com\dnac\v1\api\client\model\TaskIdResult putGlobalCredentialNetconf($request)

Updates global netconf credential

This method is used to update global netconf credential

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\GlobalCredentialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\NetconfCredentialDTO(); // \cisco\com\dnac\v1\api\client\model\NetconfCredentialDTO | request

try {
    $result = $apiInstance->putGlobalCredentialNetconf($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalCredentialApi->putGlobalCredentialNetconf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\NetconfCredentialDTO**](../Model/NetconfCredentialDTO.md)| request |

### Return type

[**\cisco\com\dnac\v1\api\client\model\TaskIdResult**](../Model/TaskIdResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putGlobalCredentialSnmpv2ReadCommunity**
> \cisco\com\dnac\v1\api\client\model\TaskIdResult putGlobalCredentialSnmpv2ReadCommunity($request)

Updates global SNMP read community

This method is used to update global SNMP read community

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\GlobalCredentialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\SNMPvReadCommunityDTO(); // \cisco\com\dnac\v1\api\client\model\SNMPvReadCommunityDTO | request

try {
    $result = $apiInstance->putGlobalCredentialSnmpv2ReadCommunity($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalCredentialApi->putGlobalCredentialSnmpv2ReadCommunity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\SNMPvReadCommunityDTO**](../Model/SNMPvReadCommunityDTO.md)| request |

### Return type

[**\cisco\com\dnac\v1\api\client\model\TaskIdResult**](../Model/TaskIdResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putGlobalCredentialSnmpv2WriteCommunity**
> \cisco\com\dnac\v1\api\client\model\TaskIdResult putGlobalCredentialSnmpv2WriteCommunity($request)

Updates global SNMP write community

This method is used to update global SNMP write community

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\GlobalCredentialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\SNMPvWriteCommunityDTO(); // \cisco\com\dnac\v1\api\client\model\SNMPvWriteCommunityDTO | request

try {
    $result = $apiInstance->putGlobalCredentialSnmpv2WriteCommunity($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalCredentialApi->putGlobalCredentialSnmpv2WriteCommunity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\SNMPvWriteCommunityDTO**](../Model/SNMPvWriteCommunityDTO.md)| request |

### Return type

[**\cisco\com\dnac\v1\api\client\model\TaskIdResult**](../Model/TaskIdResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putGlobalCredentialSnmpv3**
> \cisco\com\dnac\v1\api\client\model\TaskIdResult putGlobalCredentialSnmpv3($request)

Updates global SNMPv3 credential

This method is used to update global SNMPv3 credential

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\GlobalCredentialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\SNMPvCredentialDTO(); // \cisco\com\dnac\v1\api\client\model\SNMPvCredentialDTO | request

try {
    $result = $apiInstance->putGlobalCredentialSnmpv3($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalCredentialApi->putGlobalCredentialSnmpv3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\SNMPvCredentialDTO**](../Model/SNMPvCredentialDTO.md)| request |

### Return type

[**\cisco\com\dnac\v1\api\client\model\TaskIdResult**](../Model/TaskIdResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

