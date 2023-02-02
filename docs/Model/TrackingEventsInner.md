# # TrackingEventsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | Delivery process states.  Possible values: * TRANSIT              - In delivery process. * DELIVERY             - The product or service has been delivered. * AVAILABLE_FOR_PICKUP - The product or service is ready for the buyer to pick it up at the store. * CANCELED             - The shipment has been cancelled. * FAILED               - There was a problem trying to deliver the product or service. |
**location** | **string** | Place where the event is triggered and the packet is located. |
**description** | **string** | Detail of the error for which the shipment could not be completed or if the product or service was delivered correctly, indicate who received it. |
**created_at** | **int** | Date and time the trace event was logged, in milliseconds and UTC format.  The Unix epoch (or Unix time or POSIX time or Unix timestamp) is the number of seconds elapsed since January 1, 1970 (midnight UTC/GMT), not counting leap seconds (in ISO 8601: 1970-01-01T00: 00:00Z) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
