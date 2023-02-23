# # Item

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**external_id** | **string** | Unique identifier of the product or service assigned by the merchant. | [optional]
**quantity** | **int** | Total number of products or services of the order of the same type. |
**unit_price** | **float** | Unit price of the product or service. |
**name** | **string** | Short name of the product or service. |
**description** | **string** | Description of the product or service. | [optional]
**type** | **string** | Indicates the model for the product delivery or service delivery.  Possible values: * WITH_CARRIER    - If a courier is going to be used for the shipment and delivery of the product or service. * WITHOUT_CARRIER - If a courier is not going to be used for the shipment and delivery of the product or service. | [optional]
**thumbnail_url** | **string** | Product image URL (thumbnail). | [optional]
**metadata** | **array<string,string>** | Complementary information of the product or service that is required to be reported or kept in the Zenkipay system. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
