# fi.zenki.zenkipay.api\AuthenticationAndAuthorizationApi

All URIs are relative to https://api.zenki.fi, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createToken()**](AuthenticationAndAuthorizationApi.md#createToken) | **POST** /v1/oauth/tokens | Create an authentication token in Zenki |


## `createToken()`

```php
createToken($content_type, $accept, $request_token_o_auth2): \fi.zenki.zenkipay.api\fi.zenki.zenkipay.api.model\TokenOAuth2
```

Create an authentication token in Zenki

This request must be sent each time it is required to generate a token to consume Zenki services.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new fi.zenki.zenkipay.api\Api\AuthenticationAndAuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = application/json; // string | Tipo de contenido aceptado.
$accept = application/json; // string | Formatos aceptados.
$request_token_o_auth2 = new \fi.zenki.zenkipay.api\fi.zenki.zenkipay.api.model\RequestTokenOAuth2(); // \fi.zenki.zenkipay.api\fi.zenki.zenkipay.api.model\RequestTokenOAuth2 | Parameters for OAuth 2 token creation.

try {
    $result = $apiInstance->createToken($content_type, $accept, $request_token_o_auth2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationAndAuthorizationApi->createToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_type** | **string**| Tipo de contenido aceptado. | |
| **accept** | **string**| Formatos aceptados. | |
| **request_token_o_auth2** | [**\fi.zenki.zenkipay.api\fi.zenki.zenkipay.api.model\RequestTokenOAuth2**](../Model/RequestTokenOAuth2.md)| Parameters for OAuth 2 token creation. | [optional] |

### Return type

[**\fi.zenki.zenkipay.api\fi.zenki.zenkipay.api.model\TokenOAuth2**](../Model/TokenOAuth2.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
