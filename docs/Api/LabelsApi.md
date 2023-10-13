# OpenAPI\Client\LabelsApi

All URIs are relative to https://api.stampsendicia.com/sera, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getV1LabelsLabelId()**](LabelsApi.md#getV1LabelsLabelId) | **GET** /v1/labels/{label_id} | Reprint a Label |
| [**postV1AddressesValidate()**](LabelsApi.md#postV1AddressesValidate) | **POST** /v1/addresses/validate | Validate an Address |
| [**postV1Labels()**](LabelsApi.md#postV1Labels) | **POST** /v1/labels | Create a Label |
| [**postV1Rates()**](LabelsApi.md#postV1Rates) | **POST** /v1/rates | View Shipping Rates |
| [**putV1LabelsLabelIdVoid()**](LabelsApi.md#putV1LabelsLabelIdVoid) | **PUT** /v1/labels/{label_id}/void | Void a Label |


## `getV1LabelsLabelId()`

```php
getV1LabelsLabelId($label_id, $label_size, $label_format, $label_output_type): \OpenAPI\Client\Model\GetV1LabelsLabelId200Response
```

Reprint a Label

Call this endpoint with an existing `label_id` to request the label image or data of a previously-created label. This will allow for an application to implement reprint functionality. Users are allowed to specify new label options to make non-material modifications to the reprinted label.  Note users are only allowed to reprint labels originally printed from their user account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: SERA (Production)
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: SERA (Staging)
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$label_id = 'label_id_example'; // string | _Label ID_<br/>The `label_id` of the original label
$label_size = 'label_size_example'; // string | _Label Size_
$label_format = 'label_format_example'; // string | _Label Format_
$label_output_type = 'label_output_type_example'; // string | _Label Output Type_<br/>Specify `url` to request a URL to an image containing the label. Specify `base64` to receive base64-encoded image data.

try {
    $result = $apiInstance->getV1LabelsLabelId($label_id, $label_size, $label_format, $label_output_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->getV1LabelsLabelId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **label_id** | **string**| _Label ID_&lt;br/&gt;The &#x60;label_id&#x60; of the original label | |
| **label_size** | **string**| _Label Size_ | [optional] |
| **label_format** | **string**| _Label Format_ | [optional] |
| **label_output_type** | **string**| _Label Output Type_&lt;br/&gt;Specify &#x60;url&#x60; to request a URL to an image containing the label. Specify &#x60;base64&#x60; to receive base64-encoded image data. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetV1LabelsLabelId200Response**](../Model/GetV1LabelsLabelId200Response.md)

### Authorization

[SERA (Production)](../../README.md#SERA (Production)), [SERA (Staging)](../../README.md#SERA (Staging))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postV1AddressesValidate()`

```php
postV1AddressesValidate($address_validation): \OpenAPI\Client\Model\PostV1AddressesValidate200ResponseInner[]
```

Validate an Address

To help improve package deliverability, it is best practice to fully validate all addresses used while shipping. While it’s not required that users ship to fully-validated addresses, it is required that users ship to addresses with at least partial validation: a validated city, state, and postal code are required when shipping domestically.  Occasionally, if SERA cannot automatically validate an address while creating a shipping label, the integration may need to explicitly request address validation. To do this, submit the address to this endpoint.  In the response, SERA will return the address validation status along with any applicable candidate addresses. The user or application should review the candidate addresses and select one for use in shipping if it is correct.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: SERA (Production)
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: SERA (Staging)
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_validation = array(new \OpenAPI\Client\Model\AddressValidation()); // \OpenAPI\Client\Model\AddressValidation[]

try {
    $result = $apiInstance->postV1AddressesValidate($address_validation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->postV1AddressesValidate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address_validation** | [**\OpenAPI\Client\Model\AddressValidation[]**](../Model/AddressValidation.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PostV1AddressesValidate200ResponseInner[]**](../Model/PostV1AddressesValidate200ResponseInner.md)

### Authorization

[SERA (Production)](../../README.md#SERA (Production)), [SERA (Staging)](../../README.md#SERA (Staging))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postV1Labels()`

```php
postV1Labels($post_v1_labels_request): \OpenAPI\Client\Model\PostV1Labels200Response
```

Create a Label

<a name=\"CreateALabel\"></a>Once a specific rate is selected as described in <a href=\"#ViewShippingRates\">View Shipping Rates</a>, include the rate details in a request to this endpoint to purchase the shipping label.  For most labels, the rate amount will be deducted from the account balance when the label is created with this step. Be sure to have sufficient account balance for this before requesting the label or an error will be generated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: SERA (Production)
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: SERA (Staging)
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_v1_labels_request = new \OpenAPI\Client\Model\PostV1LabelsRequest(); // \OpenAPI\Client\Model\PostV1LabelsRequest | 

try {
    $result = $apiInstance->postV1Labels($post_v1_labels_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->postV1Labels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_v1_labels_request** | [**\OpenAPI\Client\Model\PostV1LabelsRequest**](../Model/PostV1LabelsRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PostV1Labels200Response**](../Model/PostV1Labels200Response.md)

### Authorization

[SERA (Production)](../../README.md#SERA (Production)), [SERA (Staging)](../../README.md#SERA (Staging))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postV1Rates()`

```php
postV1Rates($carriers, $post_v1_rates_request): \OpenAPI\Client\Model\PostV1Rates200ResponseInner[]
```

View Shipping Rates

<a name=\"ViewShippingRates\"></a>Rates contains all of a single shipment’s details, from origin and destination addresses to weight, carrier, and service options. Users can search for and compare different rates with calls to this SERA endpoint. In order to create a shipping label, a specific rate should be selected from the numerous available options and combinations.  This endpoint optionally accepts details about the shipment to narrow down the available rates. If available, add information such as the `To` and `From` addresses (or even just ZIP codes), along with package weight, type, and dimensions to the request body to receive a list of rates filtered for those attributes.  When searching for a specific rate, try to include as much information as possible in the initial request to receive a list of available rates more closely filtered to what is needed. If looking for a broad list of rates (for example, to populate a selection dialog), omit specific package information to receive an unfiltered list of available rates.  Using the response, it is up to the user or integration’s logic to select the desired rate. Once selected, the integration can use those rate details when [creating a label](#CreateALabel). Rates will vary by `carrier_code` and `service_code` (such as \"usps_priority_mail\" for USPS Priority Mail) and may be further customized with any available `advanced_options` (such as Signature Confirmation or Insurance).  While testing, feel free to modify the example request to reflect various specific shipment details. Also, be sure to update the `ship_date` to a date that is not in the past or an error will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: SERA (Production)
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: SERA (Staging)
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carriers = 'carriers_example'; // string
$post_v1_rates_request = new \OpenAPI\Client\Model\PostV1RatesRequest(); // \OpenAPI\Client\Model\PostV1RatesRequest | 

try {
    $result = $apiInstance->postV1Rates($carriers, $post_v1_rates_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->postV1Rates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **carriers** | **string**|  | [optional] |
| **post_v1_rates_request** | [**\OpenAPI\Client\Model\PostV1RatesRequest**](../Model/PostV1RatesRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PostV1Rates200ResponseInner[]**](../Model/PostV1Rates200ResponseInner.md)

### Authorization

[SERA (Production)](../../README.md#SERA (Production)), [SERA (Staging)](../../README.md#SERA (Staging))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putV1LabelsLabelIdVoid()`

```php
putV1LabelsLabelIdVoid($label_id)
```

Void a Label

Users must void unused prepaid labels to request a refund. The carrier may need to verify the label was not used in order to authorize a refund. As a result, it may take 2–3 weeks to approve a refund request once submitted.  To request a refund, call this endpoint with a valid `label_id` (as returned in the original label's response) in the URL to identify the label to cancel. Pay-On-Use labels are not eligible to be voided.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: SERA (Production)
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: SERA (Staging)
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$label_id = 'label_id_example'; // string

try {
    $apiInstance->putV1LabelsLabelIdVoid($label_id);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->putV1LabelsLabelIdVoid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **label_id** | **string**|  | |

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
