# OpenAPI\Client\CarriersApi

All URIs are relative to https://api.stampsendicia.com/sera, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteV1Carriers()**](CarriersApi.md#deleteV1Carriers) | **DELETE** /v1/carriers/{carrier} | Disconnect a Carrier Account |
| [**deleteV1PickupsPickupId()**](CarriersApi.md#deleteV1PickupsPickupId) | **DELETE** /v1/pickups/{pickup_id} | Cancel a Carrier Pickup |
| [**getV1CarrierServices()**](CarriersApi.md#getV1CarrierServices) | **GET** /v1/carrier-services | Get All Available Carrier Services |
| [**getV1Tracking()**](CarriersApi.md#getV1Tracking) | **GET** /v1/tracking | Track a Package |
| [**postV1Carriers()**](CarriersApi.md#postV1Carriers) | **POST** /v1/carriers/{carrier} | Connect a Carrier Account |
| [**postV1ContainerLabels()**](CarriersApi.md#postV1ContainerLabels) | **POST** /v1/container-labels | Create a Container Label |
| [**postV1Manifests()**](CarriersApi.md#postV1Manifests) | **POST** /v1/manifests | Create a Carrier Manifest or USPS SCAN form |
| [**postV1Pickups()**](CarriersApi.md#postV1Pickups) | **POST** /v1/pickups | Request a Carrier Pickup |


## `deleteV1Carriers()`

```php
deleteV1Carriers($carrier)
```

Disconnect a Carrier Account

Call this endpoint to disconnect your existing carrier account from SERA.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: SERA (Production)
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: SERA (Staging)
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CarriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carrier = 'carrier_example'; // string

try {
    $apiInstance->deleteV1Carriers($carrier);
} catch (Exception $e) {
    echo 'Exception when calling CarriersApi->deleteV1Carriers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **carrier** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[SERA (Production)](../../README.md#SERA (Production)), [SERA (Staging)](../../README.md#SERA (Staging))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteV1PickupsPickupId()`

```php
deleteV1PickupsPickupId($pickup_id)
```

Cancel a Carrier Pickup

To cancel a carrier pickup, call this endpoint with the `pickup_id` in the URL. No request body is needed.  The status of your request will be returned in the response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: SERA (Production)
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: SERA (Staging)
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CarriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pickup_id = 'pickup_id_example'; // string

try {
    $apiInstance->deleteV1PickupsPickupId($pickup_id);
} catch (Exception $e) {
    echo 'Exception when calling CarriersApi->deleteV1PickupsPickupId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pickup_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[SERA (Production)](../../README.md#SERA (Production)), [SERA (Staging)](../../README.md#SERA (Staging))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getV1CarrierServices()`

```php
getV1CarrierServices($ship_date): \OpenAPI\Client\Model\GetV1CarrierServices200Response
```

Get All Available Carrier Services

As carrier service availability may vary based on user accounts, integrations may call this endpoint to receive a JSON object detailing the specific services and service limitations to present to users.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: SERA (Production)
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: SERA (Staging)
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CarriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ship_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | An optional query parameter to customize the response to the services and rules available on a specific date

try {
    $result = $apiInstance->getV1CarrierServices($ship_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarriersApi->getV1CarrierServices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ship_date** | **\DateTime**| An optional query parameter to customize the response to the services and rules available on a specific date | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetV1CarrierServices200Response**](../Model/GetV1CarrierServices200Response.md)

### Authorization

[SERA (Production)](../../README.md#SERA (Production)), [SERA (Staging)](../../README.md#SERA (Staging))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getV1Tracking()`

```php
getV1Tracking($carrier, $tracking_number): \OpenAPI\Client\Model\GetV1Tracking200Response
```

Track a Package

After shipping a package, most integrators also need to periodically check on the status of a package. This endpoint retrieves and returns standardized tracking events for a given shipment. Include a valid `carrier_code` and `tracking_number` in the request’s query string to select the appropriate shipment.  The response will consist of the shipment’s current status and a full array of `tracking_event`s with timestamps for each event. Because SERA standardizes carrier tracking for our supported carriers, integrators do not need to do any extra work to retrieve or interpret tracking status information on a carrier-by-carrier basis.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: SERA (Production)
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: SERA (Staging)
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CarriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carrier = 'carrier_example'; // string
$tracking_number = 'tracking_number_example'; // string

try {
    $result = $apiInstance->getV1Tracking($carrier, $tracking_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarriersApi->getV1Tracking: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **carrier** | **string**|  | [optional] |
| **tracking_number** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetV1Tracking200Response**](../Model/GetV1Tracking200Response.md)

### Authorization

[SERA (Production)](../../README.md#SERA (Production)), [SERA (Staging)](../../README.md#SERA (Staging))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postV1Carriers()`

```php
postV1Carriers($carrier, $post_v1_carriers_request)
```

Connect a Carrier Account

Call this endpoint to connect your existing carrier account to SERA.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: SERA (Production)
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: SERA (Staging)
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CarriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carrier = 'carrier_example'; // string
$post_v1_carriers_request = new \OpenAPI\Client\Model\PostV1CarriersRequest(); // \OpenAPI\Client\Model\PostV1CarriersRequest

try {
    $apiInstance->postV1Carriers($carrier, $post_v1_carriers_request);
} catch (Exception $e) {
    echo 'Exception when calling CarriersApi->postV1Carriers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **carrier** | **string**|  | |
| **post_v1_carriers_request** | [**\OpenAPI\Client\Model\PostV1CarriersRequest**](../Model/PostV1CarriersRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[SERA (Production)](../../README.md#SERA (Production)), [SERA (Staging)](../../README.md#SERA (Staging))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postV1ContainerLabels()`

```php
postV1ContainerLabels($body): \OpenAPI\Client\Model\PostV1ContainerLabels200Response
```

Create a Container Label

Depending on the carrier and types of packages, a container label may be needed when shipping multiple packages at once in a container. Users can generate a container label two ways:  1. Submit a `from_address` and `ship_date`. SERA will collect any matching prints to generate a container label for. 2. Submit a list of `label_ids` to generate a container label for.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: SERA (Production)
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: SERA (Staging)
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CarriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \OpenAPI\Client\Model\OneOf()); // OneOf

try {
    $result = $apiInstance->postV1ContainerLabels($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarriersApi->postV1ContainerLabels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **OneOf**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PostV1ContainerLabels200Response**](../Model/PostV1ContainerLabels200Response.md)

### Authorization

[SERA (Production)](../../README.md#SERA (Production)), [SERA (Staging)](../../README.md#SERA (Staging))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postV1Manifests()`

```php
postV1Manifests($body): \OpenAPI\Client\Model\PostV1Manifests200Response
```

Create a Carrier Manifest or USPS SCAN form

Depending on the carrier, a printed manifest (also called a SCAN form for USPS) may be needed when shipping multiple packages at once. Users can generate a manifest one of two ways:  1. Submit a `from_address` and `ship_date`. SERA will collect any matching prints to generate a manifest for. 2. Submit a list of `label_ids` to generate a manifest for.  The response will contain URLs for printable manifests in the requested format.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: SERA (Production)
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: SERA (Staging)
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CarriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \OpenAPI\Client\Model\OneOf()); // OneOf | 

try {
    $result = $apiInstance->postV1Manifests($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarriersApi->postV1Manifests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **OneOf**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PostV1Manifests200Response**](../Model/PostV1Manifests200Response.md)

### Authorization

[SERA (Production)](../../README.md#SERA (Production)), [SERA (Staging)](../../README.md#SERA (Staging))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postV1Pickups()`

```php
postV1Pickups($body): \OpenAPI\Client\Model\PostV1Pickups200Response
```

Request a Carrier Pickup

Carrier pickups can be scheduled by calling this endpoint with a `carrier_code` and a preferred pickup time.  The response will contain `pickup_window` information along with information about the pickup request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: SERA (Production)
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: SERA (Staging)
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CarriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \OpenAPI\Client\Model\OneOf()); // OneOf | 

try {
    $result = $apiInstance->postV1Pickups($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarriersApi->postV1Pickups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **OneOf**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PostV1Pickups200Response**](../Model/PostV1Pickups200Response.md)

### Authorization

[SERA (Production)](../../README.md#SERA (Production)), [SERA (Staging)](../../README.md#SERA (Staging))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
