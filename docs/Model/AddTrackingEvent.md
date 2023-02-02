# # AddTrackingEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | Delivery process states.  Possible values: * TRANSIT              - In delivery process. * DELIVERY             - The product or service has been delivered. * AVAILABLE_FOR_PICKUP - The product or service is ready for the buyer to pick it up at the store. * CANCELED             - The shipment has been cancelled. * FAILED               - There was a problem trying to deliver the product or service. |
**location** | **string** | Place where the event is triggered and the packet is located. |
**description** | **string** | Detail of the error for which the shipment could not be completed or if the product or service was delivered correctly, indicate who received it. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
