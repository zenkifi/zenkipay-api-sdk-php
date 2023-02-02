# # MerchantMerchantInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**commercial_name** | **string** | Commercial name of the merchant that you registered when you created your Zenki account. |
**legal_name** | **string** | Merchant legal name that you register during the Zenki account activation process. | [optional]
**account_type** | **string** | Merchant account type.  Possible values: * PERSONAL - Natural person with commercial activity. * ENTITY - Company with commercial activity |
**kyc_status** | **string** | State of the documentary process in which the merchant is located.  Possible values: * PENDING      - Indicates that you still need to send information or documents to complete your KYC process. * APPROVED     - The documentary registration process has been completed and the Zenki staff has authorized the business to operate. * REQUEST_INFO - Zenki Staff requested more information or change in trade documents. * REJECTED     - Zenki Staff definitively rejected the merchant request. |
**integration_status** | **string** | Status of the integration process in merchant is located.  Possible values: * PENDING   - It indicates that the merchant has not yet concluded its technical integration process and is not yet in a productive environment. * COMPLETED - Indicates that the merchant has completed its technical integration process and is already in production or live. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
