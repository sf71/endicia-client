# # PostV1AddressesValidate200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**original_address** | [**\OpenAPI\Client\Model\AddressValidation**](AddressValidation.md) |  |
**matched_address** | [**\OpenAPI\Client\Model\AddressValidation**](AddressValidation.md) |  | [optional]
**candidate_addresses** | [**\OpenAPI\Client\Model\AddressValidation[]**](AddressValidation.md) | _Candidate Addresses_&lt;br/&gt;If the full address is not verified and potential candidate addresses are available, the candidate addresses will be returned in this array. | [optional]
**is_po_box** | **bool** | _Is PO Box_&lt;br/&gt;returned as true if the given address is a PO box | [optional]
**is_apo_fpo** | **bool** | _Is APO/FPO_&lt;br/&gt;returned true if given address is a Miliary APO/FPO/DPO address | [optional]
**validation_results** | [**\OpenAPI\Client\Model\PostV1AddressesValidate200ResponseInnerValidationResults**](PostV1AddressesValidate200ResponseInnerValidationResults.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
