# # MerchantEscrowConfig

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_type** | **string** | Indicates the model for the product delivery or service delivery.  Possible values: * WITH_CARRIER    - If a courier is going to be used for the shipment and delivery of the product or service. * WITHOUT_CARRIER - If a courier is not going to be used for the shipment and delivery of the product or service. * MIXED           - If a courier is going to be used to send part of the products or services and another part is delivered without using a courier. | [optional]
**shopper_notification** | **int** | Number of hours to wait for the merchant to notify Zenki that they have delivered the services to the shopper. Time is expressed in hours. | [optional]
**time_wait_to_approval** | **int** | Number of hours that Zenki will wait for confirmation from the buyer before approving the payment and releasing the funds to the merchant. Time is expressed in hours. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
