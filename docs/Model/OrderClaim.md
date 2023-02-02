# # OrderClaim

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reason** | **string** | Reason for filing the claim. | [optional]
**status** | **string** | Claim current status.      Possible values: * OPEN     - The claim process has started. * REFUND   - The claim process has been closed and a partial or full refund of the full amount of the order has been made. * RESOLVED - The claim process has been closed without making any reimbursement movement to the buyer, only the payment transaction is associated with the indicated order. * REJECTED - When the claim does not apply, because it tries to associate a payment that does not match the transaction data. |
**created_at** | **int** | Date and time the clearing started, in milliseconds and UTC format.      The Unix epoch (or Unix time or POSIX time or Unix timestamp) is the number of seconds elapsed since January 1, 1970 (midnight UTC/GMT), not counting leap seconds (in ISO 8601: 1970-01-01T00: 00:00Z) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
