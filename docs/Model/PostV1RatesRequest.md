# # PostV1RatesRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from_address** | [**\OpenAPI\Client\Model\Address**](Address.md) |  | [optional]
**to_address** | [**\OpenAPI\Client\Model\Address**](Address.md) |  | [optional]
**service_type** | **string** | _Service Type_&lt;br/&gt;Identifies the Carrier and Service used&lt;br/&gt;**Note:** Not all carriers are enabled for every account. Please contact us to ensure a specific carrier is available and activated for your account. | [optional]
**package** | [**\OpenAPI\Client\Model\Package**](Package.md) |  | [optional]
**delivery_confirmation_type** | **string** | _Delivery Confirmation Type_ | [optional]
**insurance** | [**\OpenAPI\Client\Model\PostV1RatesRequestInsurance**](PostV1RatesRequestInsurance.md) |  | [optional]
**customs** | [**\OpenAPI\Client\Model\Customs**](Customs.md) |  | [optional]
**ship_date** | **string** | _Ship Date_ | [optional]
**is_return_label** | **bool** | _Is Return Label_ | [optional]
**advanced_options** | [**\OpenAPI\Client\Model\AdvancedOptions**](AdvancedOptions.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
