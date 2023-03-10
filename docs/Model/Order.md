# # Order

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**version** | **string** | Data model version, its current value should be v1.0.0. |
**zenki_order_id** | **string** | Unique order identifier generated by Zenkipay. |
**order_id** | **string** | Unique order identifier generated by the merchant. | [optional]
**cart_id** | **string** | Unique identifier of the shopping cart that allows identifying the purchase of one or more products or services. | [optional]
**type** | **string** | Indicates the model for the product delivery or service delivery.  Possible values: * WITH_CARRIER    - If a courier is going to be used for the shipment and delivery of the product or service. * WITHOUT_CARRIER - If a courier is not going to be used for the shipment and delivery of the product or service. * MIXED           - If a courier is going to be used to send part of the products or services and another part is delivered without using a courier. |
**country_code_iso2** | **string** | Unique identifier of the country, the definition of the ISO_3166-1 standard is used with 2 characters, see: https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2 or https://www.iso.org/iso-3166-country-codes.html |
**status** | **string** | Order Status  Possible values: * PENDING                   - Waiting for the buyer to pay the payment order. * READY4PAY                 - The buyer has been shown the modal and the order is ready for the buyer to pay for the order with his wallet. * AWAITING_PAYMENT          - A first confirmation has been received by the blockchain network, it is waiting to have the required confirmations. * AWAITING_DELIVERY         - The payment for the product or service has already been made and the delivery of the product or service is in process. * DELIVERED_SERVICE         - The service has already been delivered. * AWAITING_SHIPMENT         - The guide for the products has already been uploaded and the shipment is in process. * SHIPPED                   - The product or service has been shipped. * SHIPMENT_ERROR            - There was a problem in the shipping process. * AWAITING_SHOPPER_APPROVAL - Waiting for approval from the buyer to confirm that they have received the product or service. * DISPUTED                  - The buyer has started a dispute process with the merchant. * PENDING_SHOPPER_RETURN    - The merchant is waiting for the buyer to return the product, as a result of the dispute. * REFUNDED                  - The product or service has been refunded to the buyer. * COMPLETED                 - The buyer confirms the receipt of the product or service satisfactorily and the exchange of the value of the sale to stable currency has been made only if applicable. * SETTLED                   - The merchant transaction has been settled. |
**created_at** | **int** | Date and time when Zenkipay received the request to create the order, in milliseconds and UTC format.  The Unix epoch (or Unix time or POSIX time or Unix timestamp) is the number of seconds elapsed since January 1, 1970 (midnight UTC/GMT), not counting leap seconds (in ISO 8601: 1970-01-01T00: 00:00Z) |
**shopper** | [**\Zenkipay\Model\Shopper**](Shopper.md) |  | [optional]
**breakdown** | [**\Zenkipay\Model\Breakdown**](Breakdown.md) |  |
**payment_info** | [**\Zenkipay\Model\OrderPaymentInfo**](OrderPaymentInfo.md) |  | [optional]
**settlement_info** | [**\Zenkipay\Model\OrderSettlementInfo**](OrderSettlementInfo.md) |  | [optional]
**items** | [**\Zenkipay\Model\Item[]**](Item.md) | Set of products or services considered within the shopping cart. |
**metadata** | **array<string,string>** | Complementary order information that the merchant requires to send and inform Zenkipay. | [optional]
**dispute** | [**\Zenkipay\Model\OrderDispute**](OrderDispute.md) |  | [optional]
**claim** | [**\Zenkipay\Model\OrderClaim**](OrderClaim.md) |  | [optional]
**_links** | [**\Zenkipay\Model\OrderLinks**](OrderLinks.md) |  | [optional]
**payment_signature** | **string** | Signature of the payment order information to display the modal. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
