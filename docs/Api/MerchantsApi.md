# Zenkipay\MerchantsApi

All URIs are relative to https://api.zenki.fi, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getMerchantInfo()**](MerchantsApi.md#getMerchantInfo) | **GET** /v1/pay/me | Merchant information |


## `getMerchantInfo()`

```php
getMerchantInfo($content_type, $accept, $x_zenki_plugin_id, $accept_language): \Zenkipay\Model\Merchant
```

Merchant information

The current configuration of the merchnat is obtained.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (ACCESS_TOKEN) authorization: JWTAuth
$config = Zenkipay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zenkipay\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string | Content type accepted.
$accept = application/json; // string | Accepted formats.
$x_zenki_plugin_id = 4188918f7da1547d13e3; // string | Unique customer identifier used to establish connection with Zenkipay services.
$accept_language = en; // string | Indicates the language type code for which the content of the services response is returned according to the language reported.  The definition of the ISO_639 standard is used. See: https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes or https://www.iso.org/iso-639-language-codes.html

try {
    $result = $apiInstance->getMerchantInfo($content_type, $accept, $x_zenki_plugin_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->getMerchantInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_type** | **string**| Content type accepted. | |
| **accept** | **string**| Accepted formats. | |
| **x_zenki_plugin_id** | **string**| Unique customer identifier used to establish connection with Zenkipay services. | [optional] |
| **accept_language** | **string**| Indicates the language type code for which the content of the services response is returned according to the language reported.  The definition of the ISO_639 standard is used. See: https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes or https://www.iso.org/iso-639-language-codes.html | [optional] |

### Return type

[**\Zenkipay\Model\Merchant**](../Model/Merchant.md)

### Authorization

[JWTAuth](../../README.md#JWTAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
