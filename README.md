# Zenkipay API SDK for PHP

Definition of technical specification of the product; Zenkipay is a gateway
cryptocurrency payment system that allows merchant's to receive payments on their
e-commerce portals. Unlike other platforms,
Zenkipay ensures customer satisfaction through its payment process.
guarantee deposit (delivered product and expected quality) to settle
payment to the merchant, thus avoiding the loss of client assets due to
online scams.

For more information, please visit [https://www.zenki.fi/](https://www.zenki.fi/).

## Installation & Usage

Build date: Thu Feb 23 23:12:20 UTC 2023 
 ### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Zenkipay\Api\AuthenticationAndAuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = application/json; // string | Tipo de contenido aceptado.
$accept = application/json; // string | Formatos aceptados.
$request_token_o_auth2 = new \Zenkipay\Model\RequestTokenOAuth2(); // \Zenkipay\Model\RequestTokenOAuth2 | Parameters for OAuth 2 token creation.

try {
    $result = $apiInstance->createToken($content_type, $accept, $request_token_o_auth2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationAndAuthorizationApi->createToken: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.zenki.fi*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuthenticationAndAuthorizationApi* | [**createToken**](docs/Api/AuthenticationAndAuthorizationApi.md#createtoken) | **POST** /v1/oauth/tokens | Create an authentication token in Zenki
*EscrowApi* | [**updateEscrow**](docs/Api/EscrowApi.md#updateescrow) | **PATCH** /v1/pay/escrow/{zenkiOrderId}/fulfillments | Escrow update
*MerchantsApi* | [**getMerchantInfo**](docs/Api/MerchantsApi.md#getmerchantinfo) | **GET** /v1/pay/me | Merchant information
*OrdersApi* | [**createOrder**](docs/Api/OrdersApi.md#createorder) | **POST** /v1/pay/orders | Payment order registration
*OrdersApi* | [**getOrder**](docs/Api/OrdersApi.md#getorder) | **GET** /v1/pay/orders/{zenkiOrderId} | Order information
*OrdersApi* | [**updateOrder**](docs/Api/OrdersApi.md#updateorder) | **PATCH** /v1/pay/orders/{zenkiOrderId} | Order update for payment
*RefundsApi* | [**getRefundOrder**](docs/Api/RefundsApi.md#getrefundorder) | **GET** /v1/pay/orders/{zenkiOrderId}/refunds/{zenkiRefundId} | Request refunds for an order
*RefundsApi* | [**registerRefundOrder**](docs/Api/RefundsApi.md#registerrefundorder) | **POST** /v1/pay/orders/{zenkiOrderId}/refunds | Register of refunds for an order
*TrackingApi* | [**addEventTracking**](docs/Api/TrackingApi.md#addeventtracking) | **PATCH** /v1/pay/orders/{zenkiOrderId}/tracking/{zenkiTrackId} | Shipping Status Update
*TrackingApi* | [**registerTrackingOrders**](docs/Api/TrackingApi.md#registertrackingorders) | **POST** /v1/pay/orders/{zenkiOrderId}/tracking | Registration number for tracking
*WebhooksApi* | [**sendEvent**](docs/Api/WebhooksApi.md#sendevent) | **POST** /URL_MERCHANT | Event notifications for merchant

## Models

- [AddTracking](docs/Model/AddTracking.md)
- [AddTrackingEvent](docs/Model/AddTrackingEvent.md)
- [AuthenticationErrorResponse](docs/Model/AuthenticationErrorResponse.md)
- [Breakdown](docs/Model/Breakdown.md)
- [CreateOrder](docs/Model/CreateOrder.md)
- [CryptoPayment](docs/Model/CryptoPayment.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [ErrorResponseValidationErrorsInner](docs/Model/ErrorResponseValidationErrorsInner.md)
- [Item](docs/Model/Item.md)
- [Merchant](docs/Model/Merchant.md)
- [MerchantCryptoAssetsInner](docs/Model/MerchantCryptoAssetsInner.md)
- [MerchantEscrowConfig](docs/Model/MerchantEscrowConfig.md)
- [MerchantIntegrationConfig](docs/Model/MerchantIntegrationConfig.md)
- [MerchantIntegrationConfigPluginsInner](docs/Model/MerchantIntegrationConfigPluginsInner.md)
- [MerchantMerchantInfo](docs/Model/MerchantMerchantInfo.md)
- [Order](docs/Model/Order.md)
- [OrderClaim](docs/Model/OrderClaim.md)
- [OrderDispute](docs/Model/OrderDispute.md)
- [OrderLinks](docs/Model/OrderLinks.md)
- [OrderLinksRefund](docs/Model/OrderLinksRefund.md)
- [OrderPaymentInfo](docs/Model/OrderPaymentInfo.md)
- [OrderPaymentInfoCryptoLove](docs/Model/OrderPaymentInfoCryptoLove.md)
- [OrderPaymentInfoExchangeRate](docs/Model/OrderPaymentInfoExchangeRate.md)
- [OrderSettlementInfo](docs/Model/OrderSettlementInfo.md)
- [OrderSettlementInfoCryptoSettlement](docs/Model/OrderSettlementInfoCryptoSettlement.md)
- [Refund](docs/Model/Refund.md)
- [RefundFiatOriginalPayment](docs/Model/RefundFiatOriginalPayment.md)
- [RequestRefund](docs/Model/RequestRefund.md)
- [RequestTokenOAuth2](docs/Model/RequestTokenOAuth2.md)
- [Shopper](docs/Model/Shopper.md)
- [TokenOAuth2](docs/Model/TokenOAuth2.md)
- [Tracking](docs/Model/Tracking.md)
- [TrackingEventsInner](docs/Model/TrackingEventsInner.md)
- [TrackingExternalCourier](docs/Model/TrackingExternalCourier.md)
- [UpdateOrder](docs/Model/UpdateOrder.md)
- [UpdateOrderShopper](docs/Model/UpdateOrderShopper.md)
- [Webhook](docs/Model/Webhook.md)

## Authorization

### JWTAuth

- **Type**: Bearer authentication (ACCESS_TOKEN)

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@zenki.fi

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
