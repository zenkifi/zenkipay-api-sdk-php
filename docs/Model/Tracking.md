# # Tracking

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**zenki_tracking_id** | **string** | Unique tracking identifier generated by Zenkipay. |
**courier_type** | **string** | Courier type used to deliver the product or service.  Possible values: * EXTERNAL - In case of using an existing courier company, it must be indicated that the shipment will be external and the trackingId field must be informed. * INTERNAL - In case of using the merchant&#39;s own infrastructure to make the shipment, it must be indicated that the shipment will be internal and the courierName field must be informed. |
**tracking_id** | **string** | Unique tracking identifier generated by a courier. | [optional]
**courier_name** | **string** | Internal courier name of the merchant used to deliver the service or product. | [optional]
**external_courier** | [**\Zenkipay\Model\TrackingExternalCourier**](TrackingExternalCourier.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
