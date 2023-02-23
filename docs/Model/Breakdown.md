# # Breakdown

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currency_code_iso3** | **string** | Unique code of the currency of the country, the definition of the ISO 4217 standard is used with 3 characters, see: https://es.wikipedia.org/wiki/ISO_4217 or https://www.iso.org/iso-4217-currency-codes.html. |
**total_items_amount** | **float** | Sum of the total cost of the items (quantity * unitPrice). |
**shipment_amount** | **float** | Shipping cost, in case of not applying its value must be 0. |
**subtotal_amount** | **float** | Sum of total_items_amount plus shipment_amount. |
**taxes_amount** | **float** | Taxes, if not applied, its value must be 0. |
**local_taxes_amount** | **float** | Local taxes, if not applied, its value must be 0. | [optional]
**import_costs** | **float** | Import costs, if not applied, its value must be 0. | [optional]
**discount_amount** | **float** | Discount of your merchant, in case of not applying its value must be 0. | [optional]
**additional_charges** | **array<string,string>** | Additional charges, consists of a key/value object that comprises the description of the charge/amount respectively. | [optional]
**grand_total_amount** | **float** | Sum of subtotalAmount, taxesAmount, localTaxesAmount, importCosts, and each value of additionalCharges minus discountAmount. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
