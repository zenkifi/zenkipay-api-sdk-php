# # OrderPaymentInfoExchangeRate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from** | **string** | Unique currency code of the country that is reported in the order, the ISO 4217 standard definition with 3 characters is used, see:https://es.wikipedia.org/wiki/ISO_4217 or https://www.iso.org/iso-4217-currency-codes.html |
**to** | **string** | Unique currency code of the country which is used to settle the merchant always in USD, the ISO 4217 standard definition is used with 3 characters, see: https://es.wikipedia.org/wiki/ISO_4217 or https://www.iso.org/iso-4217-currency-codes.html |
**value** | **float** | Value of the exchange rate used to convert between local currency and USD. |
**amount** | **float** | Amount paid in USD. | [optional]
**timestamp** | **int** | Date and time in which the purchase and sale of the cryptocurrency was made, in milliseconds and UTC format.  The Unix epoch (or Unix time or POSIX time or Unix timestamp) is the number of seconds elapsed since January 1, 1970 (midnight UTC/GMT), not counting leap seconds (in ISO 8601: 1970-01-01T00: 00:00Z) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
