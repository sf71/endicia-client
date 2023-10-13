# OpenAPI\Client\AccountInfoApi

All URIs are relative to https://api.stampsendicia.com/sera, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getV1Account()**](AccountInfoApi.md#getV1Account) | **GET** /v1/account | Get Account Info |
| [**getV1Balance()**](AccountInfoApi.md#getV1Balance) | **GET** /v1/balance | Get Current Account Balance |
| [**getV1SecurityQuestions()**](AccountInfoApi.md#getV1SecurityQuestions) | **GET** /v1/security_questions | Get Available Account Security Questions |
| [**getV1Url()**](AccountInfoApi.md#getV1Url) | **GET** /v1/url | Get Hosted URL |
| [**postV1BalanceAddFunds()**](AccountInfoApi.md#postV1BalanceAddFunds) | **POST** /v1/balance/add-funds | Add Funds to Account Balance |
| [**putV1AccountSecurityQuestions()**](AccountInfoApi.md#putV1AccountSecurityQuestions) | **PUT** /v1/account/security_questions | Set Account Security Questions |


## `getV1Account()`

```php
getV1Account(): \OpenAPI\Client\Model\GetV1Account200Response
```

Get Account Info

This endpoint will return account information associated with the active user account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: SERA (Production)
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: SERA (Staging)
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getV1Account();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountInfoApi->getV1Account: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\GetV1Account200Response**](../Model/GetV1Account200Response.md)

### Authorization

[SERA (Production)](../../README.md#SERA (Production)), [SERA (Staging)](../../README.md#SERA (Staging))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getV1Balance()`

```php
getV1Balance(): \OpenAPI\Client\Model\AccountBalance
```

Get Current Account Balance

The current account balance can be checked by calling this endpoint with no request body. The response will contain the account’s current balance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: SERA (Production)
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: SERA (Staging)
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getV1Balance();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountInfoApi->getV1Balance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\AccountBalance**](../Model/AccountBalance.md)

### Authorization

[SERA (Production)](../../README.md#SERA (Production)), [SERA (Staging)](../../README.md#SERA (Staging))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getV1SecurityQuestions()`

```php
getV1SecurityQuestions(): \OpenAPI\Client\Model\GetV1SecurityQuestions200ResponseInner[]
```

Get Available Account Security Questions

Call this to see the full list of available security questions. To set security questions for an account that does not have them, call `PUT /v1/account/security_questions`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: SERA (Production)
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: SERA (Staging)
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getV1SecurityQuestions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountInfoApi->getV1SecurityQuestions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\GetV1SecurityQuestions200ResponseInner[]**](../Model/GetV1SecurityQuestions200ResponseInner.md)

### Authorization

[SERA (Production)](../../README.md#SERA (Production)), [SERA (Staging)](../../README.md#SERA (Staging))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getV1Url()`

```php
getV1Url($url_type, $application_context): \OpenAPI\Client\Model\GetV1Url200Response
```

Get Hosted URL

There are several account management operations that are available to Stamps.com/Endicia users. Rather than duplicate that functionality in the form of API access, creating an additional burden on integrators to create the interface for it, SERA allows the integrator to obtain the URL of Stamps.com/Endicia-hosted web pages to perform these operations. Call this endpoint with a specific `url_type` query parameter to receive the URL of the hosted page.  The URLs returned from this endpoint are specific to the user and session, allowing the web interface to display information tailored for the user without requiring the user to re-authenticate. The URL is only valid for one request, so the URL should be immediately navigated to in a browser and not stored by the integration.  URLs to the following Stamps.com web pages are available through this web method: Home, Account Settings, Edit Cost Codes, Online Reports, and Help.  Through special arrangement, the Stamps.com/Endicia-hosted pages may be co-branded for the integrator. When this is done, an optional query parameter, `application_context`, may be included to customize the appearance and behavior of the hosted web page.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: SERA (Production)
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: SERA (Staging)
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$url_type = 'url_type_example'; // string | _URL Type_<br/>
$application_context = 'application_context_example'; // string | _Application Context_<br/>Through special arrangement with Stamps.com, the Stamps.com/Endicia-hosted web pages may be co-branded for the integrator. When this is done, an additional query parameter, `application_context`, can be set to control the behavior of the customized web page.

try {
    $result = $apiInstance->getV1Url($url_type, $application_context);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountInfoApi->getV1Url: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **url_type** | **string**| _URL Type_&lt;br/&gt; | |
| **application_context** | **string**| _Application Context_&lt;br/&gt;Through special arrangement with Stamps.com, the Stamps.com/Endicia-hosted web pages may be co-branded for the integrator. When this is done, an additional query parameter, &#x60;application_context&#x60;, can be set to control the behavior of the customized web page. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetV1Url200Response**](../Model/GetV1Url200Response.md)

### Authorization

[SERA (Production)](../../README.md#SERA (Production)), [SERA (Staging)](../../README.md#SERA (Staging))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postV1BalanceAddFunds()`

```php
postV1BalanceAddFunds($post_v1_balance_add_funds_request): \OpenAPI\Client\Model\AccountBalance
```

Add Funds to Account Balance

To add funds to the account balance, call this endpoint with the amount you wish to add in the request body. A successful response will contain the current balance on the account.  In the SERA production environment, adding funds to the account balance will charge the account’s default payment method. In contrast, funds added in the SERA staging environment will not cost anything; staging account balances are funded with \"play money.\"

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: SERA (Production)
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: SERA (Staging)
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_v1_balance_add_funds_request = new \OpenAPI\Client\Model\PostV1BalanceAddFundsRequest(); // \OpenAPI\Client\Model\PostV1BalanceAddFundsRequest

try {
    $result = $apiInstance->postV1BalanceAddFunds($post_v1_balance_add_funds_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountInfoApi->postV1BalanceAddFunds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_v1_balance_add_funds_request** | [**\OpenAPI\Client\Model\PostV1BalanceAddFundsRequest**](../Model/PostV1BalanceAddFundsRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AccountBalance**](../Model/AccountBalance.md)

### Authorization

[SERA (Production)](../../README.md#SERA (Production)), [SERA (Staging)](../../README.md#SERA (Staging))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putV1AccountSecurityQuestions()`

```php
putV1AccountSecurityQuestions($put_v1_account_security_questions_request)
```

Set Account Security Questions

Call this endpoint to set security questions for an account that doesn't have them. Call `GET /v1/security_questions` to see the full list of available security questions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: SERA (Production)
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: SERA (Staging)
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$put_v1_account_security_questions_request = new \OpenAPI\Client\Model\PutV1AccountSecurityQuestionsRequest(); // \OpenAPI\Client\Model\PutV1AccountSecurityQuestionsRequest

try {
    $apiInstance->putV1AccountSecurityQuestions($put_v1_account_security_questions_request);
} catch (Exception $e) {
    echo 'Exception when calling AccountInfoApi->putV1AccountSecurityQuestions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **put_v1_account_security_questions_request** | [**\OpenAPI\Client\Model\PutV1AccountSecurityQuestionsRequest**](../Model/PutV1AccountSecurityQuestionsRequest.md)|  | [optional] |

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
