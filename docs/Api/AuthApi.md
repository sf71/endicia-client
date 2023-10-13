# OpenAPI\Client\AuthApi

All URIs are relative to https://api.stampsendicia.com/sera, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAuthorize()**](AuthApi.md#getAuthorize) | **GET** /authorize | Get Authorization Code |
| [**postOauthToken()**](AuthApi.md#postOauthToken) | **POST** /oauth/token | Get/Refresh Access Token |


## `getAuthorize()`

```php
getAuthorize($client_id, $response_type, $redirect_uri)
```
### URI(s):
- https://signin.testing.stampsendicia.com 
Get Authorization Code

Integrators call this endpoint to receive a 302 redirect to a hosted HTML login page. Once the user completes the login page, they will be redirected to the URL specified in `redirect_uri` with an authorization code contained in the `code` query parameter. For example, if the `redirect_uri` is \"https://www.stamps.com\", the user will be directed to \"https://www.stamps.com/?code=&lt;AuthorizationCode&gt;\" on successful login. Use this authorization code to generate an access_token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string | _Client ID_<br/>Identifies the integrated application connecting to SERA
$response_type = code; // string | _Response Type_<br/>Set to `code` for the authorization code flow
$redirect_uri = 'redirect_uri_example'; // string | _Redirect URI_<br/>The login page will redirect to this URI on successful login

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->getAuthorize($client_id, $response_type, $redirect_uri, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->getAuthorize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**| _Client ID_&lt;br/&gt;Identifies the integrated application connecting to SERA | [optional] |
| **response_type** | **string**| _Response Type_&lt;br/&gt;Set to &#x60;code&#x60; for the authorization code flow | [optional] |
| **redirect_uri** | **string**| _Redirect URI_&lt;br/&gt;The login page will redirect to this URI on successful login | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postOauthToken()`

```php
postOauthToken($body): \OpenAPI\Client\Model\PostOauthToken200Response
```
### URI(s):
- https://signin.testing.stampsendicia.com 
Get/Refresh Access Token

Integrators call this endpoint with a valid authorization `code` or `refresh_token` and use the `access_token` from the response to access SERA.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = array('key' => new \OpenAPI\Client\Model\OneOf()); // OneOf | 

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->postOauthToken($body, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->postOauthToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **OneOf**|  | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PostOauthToken200Response**](../Model/PostOauthToken200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
