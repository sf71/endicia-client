# # PostV1LabelsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from_address** | [**\OpenAPI\Client\Model\Address**](Address.md) |  | [optional]
**return_address** | [**\OpenAPI\Client\Model\Address**](Address.md) |  | [optional]
**to_address** | [**\OpenAPI\Client\Model\Address**](Address.md) |  | [optional]
**service_type** | **string** | _Service Type_&lt;br/&gt;Identifies the Carrier and Service used&lt;br/&gt;**Note:** Not all carriers are enabled for every account. Please contact us to ensure a specific carrier is available and activated for your account. | [optional]
**package** | [**\OpenAPI\Client\Model\Package**](Package.md) |  | [optional]
**delivery_confirmation_type** | **string** | _Delivery Confirmation Type_ | [optional]
**insurance** | [**\OpenAPI\Client\Model\PostV1LabelsRequestInsurance**](PostV1LabelsRequestInsurance.md) |  | [optional]
**customs** | [**\OpenAPI\Client\Model\Customs**](Customs.md) |  | [optional]
**ship_date** | **string** | _Ship Date_ | [optional]
**is_return_label** | **bool** | _Is Return Label_ | [optional]
**advanced_options** | [**\OpenAPI\Client\Model\AdvancedOptions**](AdvancedOptions.md) |  | [optional]
**label_options** | [**\OpenAPI\Client\Model\LabelOptions**](LabelOptions.md) |  | [optional]
**email_label** | [**\OpenAPI\Client\Model\PostV1LabelsRequestEmailLabel**](PostV1LabelsRequestEmailLabel.md) |  | [optional]
**references** | [**\OpenAPI\Client\Model\PostV1LabelsRequestReferences**](PostV1LabelsRequestReferences.md) |  | [optional]
**order_details** | [**\OpenAPI\Client\Model\PostV1LabelsRequestOrderDetails**](PostV1LabelsRequestOrderDetails.md) |  | [optional]
**is_test_label** | **bool** | _Is Test Label_&lt;br/&gt;Set to &#x60;true&#x60; to generate a test/sample label with no account charge | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
