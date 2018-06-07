# cisco\com\dnac\v1\api\client\TemplateProgrammerApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteTemplateProgrammerProjectByProjectId**](TemplateProgrammerApi.md#deleteTemplateProgrammerProjectByProjectId) | **DELETE** /api/v1/template-programmer/project/${projectId} | Deletes the project
[**deleteTemplateProgrammerTemplateByTemplateId**](TemplateProgrammerApi.md#deleteTemplateProgrammerTemplateByTemplateId) | **DELETE** /api/v1/template-programmer/template/${templateId} | Deletes the template
[**getTemplateProgrammerProject**](TemplateProgrammerApi.md#getTemplateProgrammerProject) | **GET** /api/v1/template-programmer/project | Gets a list of projects
[**getTemplateProgrammerTemplate**](TemplateProgrammerApi.md#getTemplateProgrammerTemplate) | **GET** /api/v1/template-programmer/template | Gets the templates available depending on the criteria
[**getTemplateProgrammerTemplateDeployStatusByDeploymentId**](TemplateProgrammerApi.md#getTemplateProgrammerTemplateDeployStatusByDeploymentId) | **GET** /api/v1/template-programmer/template/deploy/status/${deploymentId} | Status of template deployment
[**getTemplateProgrammerTemplateVersionByTempleteId**](TemplateProgrammerApi.md#getTemplateProgrammerTemplateVersionByTempleteId) | **GET** /api/v1/template-programmer/template/version/${templateId} | Gets all the versions of a given template
[**postTemplateProgrammerProject**](TemplateProgrammerApi.md#postTemplateProgrammerProject) | **POST** /api/v1/template-programmer/project | Create Project
[**postTemplateProgrammerProjectTemplateByProjectId**](TemplateProgrammerApi.md#postTemplateProgrammerProjectTemplateByProjectId) | **POST** /api/v1/template-programmer/project/${projectId}/template | Create Template
[**postTemplateProgrammerTemplateDeploy**](TemplateProgrammerApi.md#postTemplateProgrammerTemplateDeploy) | **POST** /api/v1/template-programmer/template/deploy | Deploy Template
[**postTemplateProgrammerTemplateVersion**](TemplateProgrammerApi.md#postTemplateProgrammerTemplateVersion) | **POST** /api/v1/template-programmer/template/version | Version Template
[**putTemplateProgrammerProject**](TemplateProgrammerApi.md#putTemplateProgrammerProject) | **PUT** /api/v1/template-programmer/project | Update Project
[**putTemplateProgrammerTemplate**](TemplateProgrammerApi.md#putTemplateProgrammerTemplate) | **PUT** /api/v1/template-programmer/template | Update Template
[**putTemplateProgrammerTemplatePreview**](TemplateProgrammerApi.md#putTemplateProgrammerTemplatePreview) | **PUT** /api/v1/template-programmer/template/preview | Preview Template
[**templateProgrammerTemplateByTemplateId**](TemplateProgrammerApi.md#templateProgrammerTemplateByTemplateId) | **GET** /api/v1/template-programmer/template/${templateId} | Gets details of a given template


# **deleteTemplateProgrammerProjectByProjectId**
> \cisco\com\dnac\v1\api\client\model\TaskIdResult deleteTemplateProgrammerProjectByProjectId($project_id)

Deletes the project

Deletes the project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\TemplateProgrammerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | projectId

try {
    $result = $apiInstance->deleteTemplateProgrammerProjectByProjectId($project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateProgrammerApi->deleteTemplateProgrammerProjectByProjectId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| projectId |

### Return type

[**\cisco\com\dnac\v1\api\client\model\TaskIdResult**](../Model/TaskIdResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTemplateProgrammerTemplateByTemplateId**
> \cisco\com\dnac\v1\api\client\model\TaskIdResult deleteTemplateProgrammerTemplateByTemplateId($template_id)

Deletes the template

Deletes the template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\TemplateProgrammerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$template_id = "template_id_example"; // string | templateId

try {
    $result = $apiInstance->deleteTemplateProgrammerTemplateByTemplateId($template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateProgrammerApi->deleteTemplateProgrammerTemplateByTemplateId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **string**| templateId |

### Return type

[**\cisco\com\dnac\v1\api\client\model\TaskIdResult**](../Model/TaskIdResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTemplateProgrammerProject**
> \cisco\com\dnac\v1\api\client\model\CollectionProjectDTO getTemplateProgrammerProject($name)

Gets a list of projects

List the projects

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\TemplateProgrammerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Name of project to be searched

try {
    $result = $apiInstance->getTemplateProgrammerProject($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateProgrammerApi->getTemplateProgrammerProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of project to be searched | [optional]

### Return type

[**\cisco\com\dnac\v1\api\client\model\CollectionProjectDTO**](../Model/CollectionProjectDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTemplateProgrammerTemplate**
> \cisco\com\dnac\v1\api\client\model\CollectionTemplateInfo getTemplateProgrammerTemplate($project_id, $software_type, $software_version, $product_family, $product_series, $product_type, $include_head, $filter_conflicting_templates)

Gets the templates available depending on the criteria

Gets the templates available depending on the criteria

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\TemplateProgrammerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | projectId
$software_type = "software_type_example"; // string | softwareType
$software_version = "software_version_example"; // string | softwareVersion
$product_family = "product_family_example"; // string | productFamily
$product_series = "product_series_example"; // string | productSeries
$product_type = "product_type_example"; // string | productType
$include_head = true; // bool | includeHead
$filter_conflicting_templates = true; // bool | filterConflictingTemplates

try {
    $result = $apiInstance->getTemplateProgrammerTemplate($project_id, $software_type, $software_version, $product_family, $product_series, $product_type, $include_head, $filter_conflicting_templates);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateProgrammerApi->getTemplateProgrammerTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| projectId | [optional]
 **software_type** | **string**| softwareType | [optional]
 **software_version** | **string**| softwareVersion | [optional]
 **product_family** | **string**| productFamily | [optional]
 **product_series** | **string**| productSeries | [optional]
 **product_type** | **string**| productType | [optional]
 **include_head** | **bool**| includeHead | [optional]
 **filter_conflicting_templates** | **bool**| filterConflictingTemplates | [optional]

### Return type

[**\cisco\com\dnac\v1\api\client\model\CollectionTemplateInfo**](../Model/CollectionTemplateInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTemplateProgrammerTemplateDeployStatusByDeploymentId**
> \cisco\com\dnac\v1\api\client\model\TemplateDeploymentStatusDTO getTemplateProgrammerTemplateDeployStatusByDeploymentId($deployment_id)

Status of template deployment

API to retrieve the status of template deployment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\TemplateProgrammerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$deployment_id = "deployment_id_example"; // string | deploymentId

try {
    $result = $apiInstance->getTemplateProgrammerTemplateDeployStatusByDeploymentId($deployment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateProgrammerApi->getTemplateProgrammerTemplateDeployStatusByDeploymentId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deployment_id** | **string**| deploymentId |

### Return type

[**\cisco\com\dnac\v1\api\client\model\TemplateDeploymentStatusDTO**](../Model/TemplateDeploymentStatusDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTemplateProgrammerTemplateVersionByTempleteId**
> \cisco\com\dnac\v1\api\client\model\CollectionTemplateInfo getTemplateProgrammerTemplateVersionByTempleteId($template_id)

Gets all the versions of a given template

Get all the versions of template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\TemplateProgrammerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$template_id = "template_id_example"; // string | templateId

try {
    $result = $apiInstance->getTemplateProgrammerTemplateVersionByTempleteId($template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateProgrammerApi->getTemplateProgrammerTemplateVersionByTempleteId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **string**| templateId |

### Return type

[**\cisco\com\dnac\v1\api\client\model\CollectionTemplateInfo**](../Model/CollectionTemplateInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTemplateProgrammerProject**
> \cisco\com\dnac\v1\api\client\model\TaskIdResult postTemplateProgrammerProject($request)

Create Project

This API is used to create a new project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\TemplateProgrammerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\ProjectDTO(); // \cisco\com\dnac\v1\api\client\model\ProjectDTO | request

try {
    $result = $apiInstance->postTemplateProgrammerProject($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateProgrammerApi->postTemplateProgrammerProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\ProjectDTO**](../Model/ProjectDTO.md)| request |

### Return type

[**\cisco\com\dnac\v1\api\client\model\TaskIdResult**](../Model/TaskIdResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTemplateProgrammerProjectTemplateByProjectId**
> \cisco\com\dnac\v1\api\client\model\TaskIdResult postTemplateProgrammerProjectTemplateByProjectId($request, $project_id)

Create Template

API to create a template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\TemplateProgrammerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\TemplateDTO(); // \cisco\com\dnac\v1\api\client\model\TemplateDTO | request
$project_id = "project_id_example"; // string | projectId

try {
    $result = $apiInstance->postTemplateProgrammerProjectTemplateByProjectId($request, $project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateProgrammerApi->postTemplateProgrammerProjectTemplateByProjectId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\TemplateDTO**](../Model/TemplateDTO.md)| request |
 **project_id** | **string**| projectId |

### Return type

[**\cisco\com\dnac\v1\api\client\model\TaskIdResult**](../Model/TaskIdResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTemplateProgrammerTemplateDeploy**
> \cisco\com\dnac\v1\api\client\model\TemplateDeploymentStatusDTO postTemplateProgrammerTemplateDeploy($request)

Deploy Template

API to deploy a template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\TemplateProgrammerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\TemplateDeploymentInfo(); // \cisco\com\dnac\v1\api\client\model\TemplateDeploymentInfo | request

try {
    $result = $apiInstance->postTemplateProgrammerTemplateDeploy($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateProgrammerApi->postTemplateProgrammerTemplateDeploy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\TemplateDeploymentInfo**](../Model/TemplateDeploymentInfo.md)| request |

### Return type

[**\cisco\com\dnac\v1\api\client\model\TemplateDeploymentStatusDTO**](../Model/TemplateDeploymentStatusDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTemplateProgrammerTemplateVersion**
> \cisco\com\dnac\v1\api\client\model\TaskIdResult postTemplateProgrammerTemplateVersion($request)

Version Template

API to version the current contents of the template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\TemplateProgrammerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\TemplateVersionRequestDTO(); // \cisco\com\dnac\v1\api\client\model\TemplateVersionRequestDTO | request

try {
    $result = $apiInstance->postTemplateProgrammerTemplateVersion($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateProgrammerApi->postTemplateProgrammerTemplateVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\TemplateVersionRequestDTO**](../Model/TemplateVersionRequestDTO.md)| request |

### Return type

[**\cisco\com\dnac\v1\api\client\model\TaskIdResult**](../Model/TaskIdResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTemplateProgrammerProject**
> \cisco\com\dnac\v1\api\client\model\TaskIdResult putTemplateProgrammerProject($request)

Update Project

This API is used to update an existing project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\TemplateProgrammerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\ProjectDTO(); // \cisco\com\dnac\v1\api\client\model\ProjectDTO | request

try {
    $result = $apiInstance->putTemplateProgrammerProject($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateProgrammerApi->putTemplateProgrammerProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\ProjectDTO**](../Model/ProjectDTO.md)| request |

### Return type

[**\cisco\com\dnac\v1\api\client\model\TaskIdResult**](../Model/TaskIdResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTemplateProgrammerTemplate**
> \cisco\com\dnac\v1\api\client\model\TaskIdResult putTemplateProgrammerTemplate($request)

Update Template

API to update a template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\TemplateProgrammerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\TemplateDTO(); // \cisco\com\dnac\v1\api\client\model\TemplateDTO | request

try {
    $result = $apiInstance->putTemplateProgrammerTemplate($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateProgrammerApi->putTemplateProgrammerTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\TemplateDTO**](../Model/TemplateDTO.md)| request |

### Return type

[**\cisco\com\dnac\v1\api\client\model\TaskIdResult**](../Model/TaskIdResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTemplateProgrammerTemplatePreview**
> \cisco\com\dnac\v1\api\client\model\TemplatePreviewResponseDTO putTemplateProgrammerTemplatePreview($request)

Preview Template

API to preview a template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\TemplateProgrammerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \cisco\com\dnac\v1\api\client\model\TemplatePreviewRequestDTO(); // \cisco\com\dnac\v1\api\client\model\TemplatePreviewRequestDTO | request

try {
    $result = $apiInstance->putTemplateProgrammerTemplatePreview($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateProgrammerApi->putTemplateProgrammerTemplatePreview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\cisco\com\dnac\v1\api\client\model\TemplatePreviewRequestDTO**](../Model/TemplatePreviewRequestDTO.md)| request |

### Return type

[**\cisco\com\dnac\v1\api\client\model\TemplatePreviewResponseDTO**](../Model/TemplatePreviewResponseDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templateProgrammerTemplateByTemplateId**
> \cisco\com\dnac\v1\api\client\model\TemplateDTO templateProgrammerTemplateByTemplateId($template_id)

Gets details of a given template

Details of the template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new cisco\com\dnac\v1\api\client\Api\TemplateProgrammerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$template_id = "template_id_example"; // string | templateId

try {
    $result = $apiInstance->templateProgrammerTemplateByTemplateId($template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateProgrammerApi->templateProgrammerTemplateByTemplateId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **string**| templateId |

### Return type

[**\cisco\com\dnac\v1\api\client\model\TemplateDTO**](../Model/TemplateDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

