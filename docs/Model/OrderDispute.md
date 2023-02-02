# # OrderDispute

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | Dispute current status.  Possible values: * OPEN     - The dispute process has started. * REFUND   - The dispute process has been closed and a partial or full refund of the full amount of the order has been made. * RESOLVED - The dispute process has been closed without making any refund movement to the buyer. |
**created_at** | **int** | Date and time the dispute started, in milliseconds and UTC format.      The Unix epoch (or Unix time or POSIX time or Unix timestamp) is the number of seconds elapsed since January 1, 1970 (midnight UTC/GMT), not counting leap seconds (in ISO 8601: 1970-01-01T00: 00:00Z) |
**resolution_request_type** | **string** | Support type requested from Zenki staff.  Possible values: * REQUEST_REFUND      - Request for support from Zenki staff to make a refund. * REQUEST_CONCILIATED - Request to Zenki staff to reconcile dispute between buyer and merchant. | [optional]
**resolution_request_at** | **int** | Date and time in which the dispute was finalized and a final resolution of the process was given to the buyer, in milliseconds and UTC format.      The Unix epoch (or Unix time or POSIX time or Unix timestamp) is the number of seconds elapsed since January 1, 1970 (midnight UTC/GMT), not counting leap seconds (in ISO 8601: 1970-01-01T00: 00:00Z) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
