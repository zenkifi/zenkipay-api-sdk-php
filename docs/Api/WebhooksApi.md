# fi.zenki.zenkipay.api\WebhooksApi

All URIs are relative to https://api.zenki.fi, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**sendEvent()**](WebhooksApi.md#sendEvent) | **POST** /URL_MERCHANT | Event notifications for merchant |


## `sendEvent()`

```php
sendEvent($svix_id, $svix_timestamp, $svix_signature, $content_type, $webhook)
```

Event notifications for merchant

Service that allows different events to be sent to the merchant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new fi.zenki.zenkipay.api\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$svix_id = msg_2HYAP5mNDMxY0LurmzrPvGYJTdq; // string | Unique message identifier for the webhook message. This identifier is unique across all messages, but will be the same when the same webhook is forwarded (for example, due to a previous error).
$svix_timestamp = 1668451615; // string | Date and time when the webhook is sent to the merchant, in milliseconds and UTC format.  The Unix epoch (or Unix time or POSIX time or Unix timestamp) is the number of seconds elapsed since January 1, 1970 (midnight UTC/GMT), not counting leap seconds (in ISO 8601: 1970-01-01T00: 00:00Z)
$svix_signature = v1,HNHAxGk8b5lX2xC1uVUQy6AXgmPKrfNV4I+yENBC4Fk=; // string | Base64 encoded signature (delimited by spaces) on the sent content, the signature is generated from the following structure: signed_content = \"${svix_id}.${svix_timestamp}.${body}\".
$content_type = application/json; // string | Content Type accepted.
$webhook = new \fi.zenki.zenkipay.api\fi.zenki.zenkipay.api.model\Webhook(); // \fi.zenki.zenkipay.api\fi.zenki.zenkipay.api.model\Webhook | A JSON structure will be sent that will have the information about the event to notify the merchant.

try {
    $apiInstance->sendEvent($svix_id, $svix_timestamp, $svix_signature, $content_type, $webhook);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->sendEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **svix_id** | **string**| Unique message identifier for the webhook message. This identifier is unique across all messages, but will be the same when the same webhook is forwarded (for example, due to a previous error). | |
| **svix_timestamp** | **string**| Date and time when the webhook is sent to the merchant, in milliseconds and UTC format.  The Unix epoch (or Unix time or POSIX time or Unix timestamp) is the number of seconds elapsed since January 1, 1970 (midnight UTC/GMT), not counting leap seconds (in ISO 8601: 1970-01-01T00: 00:00Z) | |
| **svix_signature** | **string**| Base64 encoded signature (delimited by spaces) on the sent content, the signature is generated from the following structure: signed_content &#x3D; \&quot;${svix_id}.${svix_timestamp}.${body}\&quot;. | |
| **content_type** | **string**| Content Type accepted. | |
| **webhook** | [**\fi.zenki.zenkipay.api\fi.zenki.zenkipay.api.model\Webhook**](../Model/Webhook.md)| A JSON structure will be sent that will have the information about the event to notify the merchant. | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
