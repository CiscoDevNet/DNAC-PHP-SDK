# cisco\com\dnac\v1\api\client\TopologyApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTopologyL2ByVlanId**](TopologyApi.md#getTopologyL2ByVlanId) | **GET** /api/v1/topology/l2/${vlanID} | getL2Topology
[**getTopologyL3ByTopologyType**](TopologyApi.md#getTopologyL3ByTopologyType) | **GET** /api/v1/topology/l3/${topologyType} | getL3Topology
[**getTopologyPhysicalTopology**](TopologyApi.md#getTopologyPhysicalTopology) | **GET** /api/v1/topology/physical-topology | getPhysicalTopology
[**getTopologySiteTopology**](TopologyApi.md#getTopologySiteTopology) | **GET** /api/v1/topology/site-topology | getSiteTopology
[**getTopologyVlanVlanNames**](TopologyApi.md#getTopologyVlanVlanNames) | **GET** /api/v1/topology/vlan/vlan-names | getVlanNames


# **getTopologyL2ByVlanId**
> \cisco\com\dnac\v1\api\client\model\TopologyResult getTopologyL2ByVlanId($vlan_id)

getL2Topology

This method is used to obtain the Layer 2 topology by Vlan ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\TopologyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vlan_id = "vlan_id_example"; // string | Vlan Name for e.g Vlan1, Vlan23 etc

try {
    $result = $apiInstance->getTopologyL2ByVlanId($vlan_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TopologyApi->getTopologyL2ByVlanId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vlan_id** | **string**| Vlan Name for e.g Vlan1, Vlan23 etc |

### Return type

[**\cisco\com\dnac\v1\api\client\model\TopologyResult**](../Model/TopologyResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTopologyL3ByTopologyType**
> \cisco\com\dnac\v1\api\client\model\TopologyResult getTopologyL3ByTopologyType($topology_type)

getL3Topology

This method is used to obtain Layer 3 device topology by routing protocol type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\TopologyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$topology_type = "topology_type_example"; // string | Type of topology(OSPF,ISIS,etc)

try {
    $result = $apiInstance->getTopologyL3ByTopologyType($topology_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TopologyApi->getTopologyL3ByTopologyType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **topology_type** | **string**| Type of topology(OSPF,ISIS,etc) |

### Return type

[**\cisco\com\dnac\v1\api\client\model\TopologyResult**](../Model/TopologyResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTopologyPhysicalTopology**
> \cisco\com\dnac\v1\api\client\model\TopologyResult getTopologyPhysicalTopology($node_type)

getPhysicalTopology

This method is used to obtain the raw physical topology and filter based on nodeType

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\TopologyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$node_type = "node_type_example"; // string | nodeType

try {
    $result = $apiInstance->getTopologyPhysicalTopology($node_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TopologyApi->getTopologyPhysicalTopology: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_type** | **string**| nodeType | [optional]

### Return type

[**\cisco\com\dnac\v1\api\client\model\TopologyResult**](../Model/TopologyResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTopologySiteTopology**
> \cisco\com\dnac\v1\api\client\model\SiteResult getTopologySiteTopology()

getSiteTopology

This method is used to obtain the site topology

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\TopologyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getTopologySiteTopology();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TopologyApi->getTopologySiteTopology: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\cisco\com\dnac\v1\api\client\model\SiteResult**](../Model/SiteResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTopologyVlanVlanNames**
> \cisco\com\dnac\v1\api\client\model\VlanNamesResult getTopologyVlanVlanNames()

getVlanNames

This method is used to obtain the list of vlan names

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\TopologyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getTopologyVlanVlanNames();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TopologyApi->getTopologyVlanVlanNames: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\cisco\com\dnac\v1\api\client\model\VlanNamesResult**](../Model/VlanNamesResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

