# Zenkipay\OrdersApi

All URIs are relative to https://api.zenki.fi, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrder()**](OrdersApi.md#createOrder) | **POST** /v1/pay/orders | Payment order registration |
| [**getOrder()**](OrdersApi.md#getOrder) | **GET** /v1/pay/orders/{zenkiOrderId} | Order information |
| [**updateOrder()**](OrdersApi.md#updateOrder) | **PATCH** /v1/pay/orders/{zenkiOrderId} | Order update for payment |


## `createOrder()`

```php
createOrder($content_type, $accept, $x_zenki_plugin_id, $accept_language, $create_order): \Zenkipay\Model\Order
```

Payment order registration

Service that allows registering a payment order and associating it with a merchant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (ACCESS_TOKEN) authorization: JWTAuth
$config = Zenkipay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zenkipay\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string | Content type accepted.
$accept = application/json; // string | Accepted formats.
$x_zenki_plugin_id = 4188918f7da1547d13e3; // string | Unique customer identifier used to establish connection with Zenkipay services.
$accept_language = en; // string | Indicates the language type code for which the content of the services response is returned according to the language reported.  The definition of the ISO_639 standard is used. See: https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes or https://www.iso.org/iso-639-language-codes.html
$create_order = new \Zenkipay\Model\CreateOrder(); // \Zenkipay\Model\CreateOrder | A JSON structure will be sent that will have the required information to create an order.

try {
    $result = $apiInstance->createOrder($content_type, $accept, $x_zenki_plugin_id, $accept_language, $create_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->createOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_type** | **string**| Content type accepted. | |
| **accept** | **string**| Accepted formats. | |
| **x_zenki_plugin_id** | **string**| Unique customer identifier used to establish connection with Zenkipay services. | [optional] |
| **accept_language** | **string**| Indicates the language type code for which the content of the services response is returned according to the language reported.  The definition of the ISO_639 standard is used. See: https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes or https://www.iso.org/iso-639-language-codes.html | [optional] |
| **create_order** | [**\Zenkipay\Model\CreateOrder**](../Model/CreateOrder.md)| A JSON structure will be sent that will have the required information to create an order. | [optional] |

### Return type

[**\Zenkipay\Model\Order**](../Model/Order.md)

### Authorization

[JWTAuth](../../README.md#JWTAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/hal+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrder()`

```php
getOrder($zenki_order_id, $content_type, $accept, $x_zenki_plugin_id, $accept_language): \Zenkipay\Model\Order
```

Order information

Order information is obtained based on the Zenkipay order id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (ACCESS_TOKEN) authorization: JWTAuth
$config = Zenkipay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zenkipay\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zenki_order_id = 'zenki_order_id_example'; // string | Unique order identifier generated by Zenkipay.
$content_type = application/json; // string | Content type accepted.
$accept = application/json; // string | Accepted formats.
$x_zenki_plugin_id = 4188918f7da1547d13e3; // string | Unique customer identifier used to establish connection with Zenkipay services.
$accept_language = en; // string | Indicates the language type code for which the content of the services response is returned according to the language reported.  The definition of the ISO_639 standard is used. See: https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes or https://www.iso.org/iso-639-language-codes.html

try {
    $result = $apiInstance->getOrder($zenki_order_id, $content_type, $accept, $x_zenki_plugin_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zenki_order_id** | **string**| Unique order identifier generated by Zenkipay. | |
| **content_type** | **string**| Content type accepted. | |
| **accept** | **string**| Accepted formats. | |
| **x_zenki_plugin_id** | **string**| Unique customer identifier used to establish connection with Zenkipay services. | [optional] |
| **accept_language** | **string**| Indicates the language type code for which the content of the services response is returned according to the language reported.  The definition of the ISO_639 standard is used. See: https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes or https://www.iso.org/iso-639-language-codes.html | [optional] |

### Return type

[**\Zenkipay\Model\Order**](../Model/Order.md)

### Authorization

[JWTAuth](../../README.md#JWTAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/hal+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrder()`

```php
updateOrder($zenki_order_id, $content_type, $accept, $x_zenki_plugin_id, $accept_language, $update_order): \Zenkipay\Model\Order
```

Order update for payment

Service that allows updating a payment order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (ACCESS_TOKEN) authorization: JWTAuth
$config = Zenkipay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zenkipay\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zenki_order_id = 3a89e750101049108eb884e3d2e1d7ba; // string | Unique order identifier generated by Zenkipay.
$content_type = application/json; // string | Content type accepted.
$accept = application/json; // string | Accepted formats.
$x_zenki_plugin_id = 4188918f7da1547d13e3; // string | Unique customer identifier used to establish connection with Zenkipay services.
$accept_language = en; // string | Indicates the language type code for which the content of the services response is returned according to the language reported.  The definition of the ISO_639 standard is used. See: https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes or https://www.iso.org/iso-639-language-codes.html
$update_order = new \Zenkipay\Model\UpdateOrder(); // \Zenkipay\Model\UpdateOrder | A JSON structure will be sent that will have the required information to update an order.

try {
    $result = $apiInstance->updateOrder($zenki_order_id, $content_type, $accept, $x_zenki_plugin_id, $accept_language, $update_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->updateOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zenki_order_id** | **string**| Unique order identifier generated by Zenkipay. | |
| **content_type** | **string**| Content type accepted. | |
| **accept** | **string**| Accepted formats. | |
| **x_zenki_plugin_id** | **string**| Unique customer identifier used to establish connection with Zenkipay services. | [optional] |
| **accept_language** | **string**| Indicates the language type code for which the content of the services response is returned according to the language reported.  The definition of the ISO_639 standard is used. See: https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes or https://www.iso.org/iso-639-language-codes.html | [optional] |
| **update_order** | [**\Zenkipay\Model\UpdateOrder**](../Model/UpdateOrder.md)| A JSON structure will be sent that will have the required information to update an order. | [optional] |

### Return type

[**\Zenkipay\Model\Order**](../Model/Order.md)

### Authorization

[JWTAuth](../../README.md#JWTAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/hal+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
