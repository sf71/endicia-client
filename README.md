# OpenAPIClient-php

The Stamps.com/Endicia REST API (SERA) is the quickest and most convenient way to build a custom carrier-integrated shipping solution. If you run into any problems or have any questions along the way, contact the Stamps.com developer support team at <a href=\"mailto:developersupport@stamps.com\">developersupport@stamps.com</a>. Include your username, if you know it, and as much detail as possible to assist us in helping you. The fastest way for us to be able to help is by sending us a copy of the API request and response in question.

### What's New
On July 9, 2023, USPS is introducing a new ground-based package service: USPS Ground Advantage. This service replaces USPS First-Class Package Service, Parcel Select Ground, and Retail Ground. First-Class Mail Letters and Large Envelopes/Flats will continue to be available.

Description of Change | Endpoints and Methods Impacted
---|---
`usps_ground_advantage` added to `service_type` enumeration for the new USPS Ground Advantage Service | `POST /v1/rates`<br/>`POST /v1/labels`

##### USPS Ground Advantage
USPS is replacing the First-Class Package Service, Parcel Select Ground, and Retail Ground services with USPS Ground Advantage. Ground Advantage delivers packages within the Continental United States in 2-5 business days with free included tracking and $100 of USPS insurance for packages between 0 and 70 lbs.

USPS Ground Advantage is available as service_type `usps_ground_advantage`. For our customers' and partners' convenience, we will temporarily map requests for discontinued USPS package services to the new USPS Ground Advantage service. For example, after July 9, 2023, a `POST /v1/labels` request for service_type `usps_first_class_mail` and packaging_type `package` will return a USPS Ground Advantage label instead of a First-Class Package Service label.

Integrators are encouraged to call for USPS Ground Advantage directly with the service_type `usps_ground_advantage`. In the future we will communicate a date when this update will become mandatory.

### About REST
SERA is a REST (REpresentational State Transfer) API, which means that it follows certain HTTP conventions for things like URLs, methods, headers, and status codes. If you’d like more information, [click here](https://en.wikipedia.org/wiki/Representational_state_transfer).

### Staging and Production Versioned Environments
The staging environment allows you to develop SERA integrations without using real funds to create test labels. There are no service or transaction fees charged for staging accounts and labels. Labels created in the staging environment cannot be used to ship and must be destroyed if printed. Access to the staging environment is available once you register for a Stamps.com developer account.

Note that shipping rates in the staging environment may vary from production and should not be relied on. Other services in staging, such as tracking and pickups, do not reflect any real-world data.

The production environment allows you to take your SERA integration live and rate-shop across multiple carriers, create real shipping labels, schedule pickups, track in-transit shipments, and more.

#### Endpoint Base URLs
##### Sign-In/Authentication
Staging: https://signin.testing.stampsendicia.com<br/>
Production: https://signin.stampsendicia.com

##### SERA
Staging: https://api.testing.stampsendicia.com/sera<br/>
Production: https://api.stampsendicia.com/sera

All Endpoint URLs given in this document are relative to the specific environment host you are connecting to. For example, to add funds to an account in the staging environment, POST the request to https://api.testing.stampsendicia.com/sera/v1/balance/add-funds. To do the same in the production environment, POST the request to https://api.stampsendicia.com/sera/v1/balance/add-funds.

All SERA requests must be made over HTTPS using TLS v1.2+. Calls made over plain-text HTTP or with an obsolete TLS version will fail.

### Idempotency
Because the internet is not a guaranteed service, sometimes network messages (like REST API requests and responses) get lost in transit and are not received. If this happens, it’s usually impossible to know if the request was received and processed successfully, or if not, should be sent again and possibly duplicated. To guard against cases like this, be sure to include a unique `Idempotency-key` value in the request header when calling any SERA endpoint with the POST method.

Whenever any request does not get a response within a reasonable timeout period, simply send it again with the same `Idempotency-key` value. If SERA already processed a request within the past 24 hours with the same Idempotency-key, it will replay the same response without duplicating the transaction. If the key is new, SERA will process the request as normal.
`Idempotency-key`s must be a randomly-generated version-4 UUID. Most programming languages support generating random UUIDs out-of-the-box. If an invalid `Idempotency-key` is included with an request, an error will be returned.

### Versioning
Every SERA endpoint contains a version number in the URL. For example, to add funds to an account, call `POST /v1/balance/add-funds`. New versions are created to avoid impacting existing integrations when backwards-incompatible changes are introduced to SERA. Integrators are not required to upgrade versions to maintain existing functionality but may be required to upgrade to gain access to new features as they’re introduced.

For more information, please visit [https://developer.stamps.com/](https://developer.stamps.com/).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: SERA (Production)
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: SERA (Staging)
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getV1Account();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountInfoApi->getV1Account: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.stampsendicia.com/sera*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountInfoApi* | [**getV1Account**](docs/Api/AccountInfoApi.md#getv1account) | **GET** /v1/account | Get Account Info
*AccountInfoApi* | [**getV1Balance**](docs/Api/AccountInfoApi.md#getv1balance) | **GET** /v1/balance | Get Current Account Balance
*AccountInfoApi* | [**getV1SecurityQuestions**](docs/Api/AccountInfoApi.md#getv1securityquestions) | **GET** /v1/security_questions | Get Available Account Security Questions
*AccountInfoApi* | [**getV1Url**](docs/Api/AccountInfoApi.md#getv1url) | **GET** /v1/url | Get Hosted URL
*AccountInfoApi* | [**postV1BalanceAddFunds**](docs/Api/AccountInfoApi.md#postv1balanceaddfunds) | **POST** /v1/balance/add-funds | Add Funds to Account Balance
*AccountInfoApi* | [**putV1AccountSecurityQuestions**](docs/Api/AccountInfoApi.md#putv1accountsecurityquestions) | **PUT** /v1/account/security_questions | Set Account Security Questions
*AuthApi* | [**getAuthorize**](docs/Api/AuthApi.md#getauthorize) | **GET** /authorize | Get Authorization Code
*AuthApi* | [**postOauthToken**](docs/Api/AuthApi.md#postoauthtoken) | **POST** /oauth/token | Get/Refresh Access Token
*CarriersApi* | [**deleteV1Carriers**](docs/Api/CarriersApi.md#deletev1carriers) | **DELETE** /v1/carriers/{carrier} | Disconnect a Carrier Account
*CarriersApi* | [**deleteV1PickupsPickupId**](docs/Api/CarriersApi.md#deletev1pickupspickupid) | **DELETE** /v1/pickups/{pickup_id} | Cancel a Carrier Pickup
*CarriersApi* | [**getV1CarrierServices**](docs/Api/CarriersApi.md#getv1carrierservices) | **GET** /v1/carrier-services | Get All Available Carrier Services
*CarriersApi* | [**getV1Tracking**](docs/Api/CarriersApi.md#getv1tracking) | **GET** /v1/tracking | Track a Package
*CarriersApi* | [**postV1Carriers**](docs/Api/CarriersApi.md#postv1carriers) | **POST** /v1/carriers/{carrier} | Connect a Carrier Account
*CarriersApi* | [**postV1ContainerLabels**](docs/Api/CarriersApi.md#postv1containerlabels) | **POST** /v1/container-labels | Create a Container Label
*CarriersApi* | [**postV1Manifests**](docs/Api/CarriersApi.md#postv1manifests) | **POST** /v1/manifests | Create a Carrier Manifest or USPS SCAN form
*CarriersApi* | [**postV1Pickups**](docs/Api/CarriersApi.md#postv1pickups) | **POST** /v1/pickups | Request a Carrier Pickup
*LabelsApi* | [**getV1LabelsLabelId**](docs/Api/LabelsApi.md#getv1labelslabelid) | **GET** /v1/labels/{label_id} | Reprint a Label
*LabelsApi* | [**postV1AddressesValidate**](docs/Api/LabelsApi.md#postv1addressesvalidate) | **POST** /v1/addresses/validate | Validate an Address
*LabelsApi* | [**postV1Labels**](docs/Api/LabelsApi.md#postv1labels) | **POST** /v1/labels | Create a Label
*LabelsApi* | [**postV1Rates**](docs/Api/LabelsApi.md#postv1rates) | **POST** /v1/rates | View Shipping Rates
*LabelsApi* | [**putV1LabelsLabelIdVoid**](docs/Api/LabelsApi.md#putv1labelslabelidvoid) | **PUT** /v1/labels/{label_id}/void | Void a Label

## Models

- [Account](docs/Model/Account.md)
- [AccountBalance](docs/Model/AccountBalance.md)
- [Address](docs/Model/Address.md)
- [AddressValidation](docs/Model/AddressValidation.md)
- [AdvancedOptions](docs/Model/AdvancedOptions.md)
- [AdvancedOptionsCollectOnDelivery](docs/Model/AdvancedOptionsCollectOnDelivery.md)
- [AdvancedOptionsNoLabel](docs/Model/AdvancedOptionsNoLabel.md)
- [AdvancedOptionsRegisteredMail](docs/Model/AdvancedOptionsRegisteredMail.md)
- [AdvancedOptionsReturnOptions](docs/Model/AdvancedOptionsReturnOptions.md)
- [AdvancedOptionsSpecialHandling](docs/Model/AdvancedOptionsSpecialHandling.md)
- [CarrierAccountAccessWorldwide](docs/Model/CarrierAccountAccessWorldwide.md)
- [CarrierAccountAmazonBuyShipping](docs/Model/CarrierAccountAmazonBuyShipping.md)
- [CarrierAccountApc](docs/Model/CarrierAccountApc.md)
- [CarrierAccountAsendia](docs/Model/CarrierAccountAsendia.md)
- [CarrierAccountBetterTrucks](docs/Model/CarrierAccountBetterTrucks.md)
- [CarrierAccountCanadaPost](docs/Model/CarrierAccountCanadaPost.md)
- [CarrierAccountDhlEcommerce](docs/Model/CarrierAccountDhlEcommerce.md)
- [CarrierAccountDhlExpress](docs/Model/CarrierAccountDhlExpress.md)
- [CarrierAccountFedex](docs/Model/CarrierAccountFedex.md)
- [CarrierAccountFirstmile](docs/Model/CarrierAccountFirstmile.md)
- [CarrierAccountGlsUs](docs/Model/CarrierAccountGlsUs.md)
- [CarrierAccountIntelliquickDelivery](docs/Model/CarrierAccountIntelliquickDelivery.md)
- [CarrierAccountLandmarkGlobal](docs/Model/CarrierAccountLandmarkGlobal.md)
- [CarrierAccountNewgistics](docs/Model/CarrierAccountNewgistics.md)
- [CarrierAccountOntrac](docs/Model/CarrierAccountOntrac.md)
- [CarrierAccountRrDonnelley](docs/Model/CarrierAccountRrDonnelley.md)
- [CarrierAccountSeko](docs/Model/CarrierAccountSeko.md)
- [CarrierAccountSwyft](docs/Model/CarrierAccountSwyft.md)
- [CarrierAccountUps](docs/Model/CarrierAccountUps.md)
- [ConfiguredCarrier](docs/Model/ConfiguredCarrier.md)
- [ContainerLabelOptions](docs/Model/ContainerLabelOptions.md)
- [CustomerDetails](docs/Model/CustomerDetails.md)
- [Customs](docs/Model/Customs.md)
- [CustomsCustomsItemsInner](docs/Model/CustomsCustomsItemsInner.md)
- [CustomsCustomsItemsInnerUnitValue](docs/Model/CustomsCustomsItemsInnerUnitValue.md)
- [CustomsRecipientInfo](docs/Model/CustomsRecipientInfo.md)
- [CustomsSenderInfo](docs/Model/CustomsSenderInfo.md)
- [DateAdvance](docs/Model/DateAdvance.md)
- [GetV1Account200Response](docs/Model/GetV1Account200Response.md)
- [GetV1CarrierServices200Response](docs/Model/GetV1CarrierServices200Response.md)
- [GetV1CarrierServices200ResponseShippingOptionsInner](docs/Model/GetV1CarrierServices200ResponseShippingOptionsInner.md)
- [GetV1CarrierServices200ResponseShippingOptionsInnerServicesInner](docs/Model/GetV1CarrierServices200ResponseShippingOptionsInnerServicesInner.md)
- [GetV1CarrierServices200ResponseShippingOptionsInnerServicesInnerPackagingOptionsInner](docs/Model/GetV1CarrierServices200ResponseShippingOptionsInnerServicesInnerPackagingOptionsInner.md)
- [GetV1CarrierServices200ResponseShippingOptionsInnerServicesInnerPackagingOptionsInnerContentOptionsInner](docs/Model/GetV1CarrierServices200ResponseShippingOptionsInnerServicesInnerPackagingOptionsInnerContentOptionsInner.md)
- [GetV1CarrierServices200ResponseShippingOptionsInnerServicesInnerPackagingOptionsInnerContentOptionsInnerRulesAndOptionsInner](docs/Model/GetV1CarrierServices200ResponseShippingOptionsInnerServicesInnerPackagingOptionsInnerContentOptionsInnerRulesAndOptionsInner.md)
- [GetV1CarrierServices200ResponseShippingOptionsInnerServicesInnerPackagingOptionsInnerContentOptionsInnerRulesAndOptionsInnerAdvancedOptionsInner](docs/Model/GetV1CarrierServices200ResponseShippingOptionsInnerServicesInnerPackagingOptionsInnerContentOptionsInnerRulesAndOptionsInnerAdvancedOptionsInner.md)
- [GetV1CarrierServices200ResponseShippingOptionsInnerServicesInnerPackagingOptionsInnerContentOptionsInnerRulesAndOptionsInnerAdvancedOptionsInnerIncompatibleOptions](docs/Model/GetV1CarrierServices200ResponseShippingOptionsInnerServicesInnerPackagingOptionsInnerContentOptionsInnerRulesAndOptionsInnerAdvancedOptionsInnerIncompatibleOptions.md)
- [GetV1CarrierServices200ResponseShippingOptionsInnerServicesInnerPackagingOptionsInnerContentOptionsInnerRulesAndOptionsInnerAdvancedOptionsInnerIncompatibleOptionsDeliveryConfirmationOptionsInner](docs/Model/GetV1CarrierServices200ResponseShippingOptionsInnerServicesInnerPackagingOptionsInnerContentOptionsInnerRulesAndOptionsInnerAdvancedOptionsInnerIncompatibleOptionsDeliveryConfirmationOptionsInner.md)
- [GetV1CarrierServices200ResponseShippingOptionsInnerServicesInnerPackagingOptionsInnerContentOptionsInnerRulesAndOptionsInnerAdvancedOptionsInnerIncompatibleOptionsInsuranceInner](docs/Model/GetV1CarrierServices200ResponseShippingOptionsInnerServicesInnerPackagingOptionsInnerContentOptionsInnerRulesAndOptionsInnerAdvancedOptionsInnerIncompatibleOptionsInsuranceInner.md)
- [GetV1CarrierServices200ResponseShippingOptionsInnerServicesInnerPackagingOptionsInnerContentOptionsInnerRulesAndOptionsInnerAdvancedOptionsInnerRequiresOneOfInner](docs/Model/GetV1CarrierServices200ResponseShippingOptionsInnerServicesInnerPackagingOptionsInnerContentOptionsInnerRulesAndOptionsInnerAdvancedOptionsInnerRequiresOneOfInner.md)
- [GetV1CarrierServices200ResponseShippingOptionsInnerServicesInnerPackagingOptionsInnerContentOptionsInnerRulesAndOptionsInnerDeliveryConfirmationOptionsInner](docs/Model/GetV1CarrierServices200ResponseShippingOptionsInnerServicesInnerPackagingOptionsInnerContentOptionsInnerRulesAndOptionsInnerDeliveryConfirmationOptionsInner.md)
- [GetV1CarrierServices200ResponseShippingOptionsInnerServicesInnerPackagingOptionsInnerContentOptionsInnerRulesAndOptionsInnerDeliveryConfirmationOptionsInnerAvailableCountriesInner](docs/Model/GetV1CarrierServices200ResponseShippingOptionsInnerServicesInnerPackagingOptionsInnerContentOptionsInnerRulesAndOptionsInnerDeliveryConfirmationOptionsInnerAvailableCountriesInner.md)
- [GetV1CarrierServices200ResponseShippingOptionsInnerServicesInnerPackagingOptionsInnerContentOptionsInnerRulesAndOptionsInnerInsuranceOptionsInner](docs/Model/GetV1CarrierServices200ResponseShippingOptionsInnerServicesInnerPackagingOptionsInnerContentOptionsInnerRulesAndOptionsInnerInsuranceOptionsInner.md)
- [GetV1CarrierServices200ResponseShippingOptionsInnerServicesInnerPackagingOptionsInnerContentOptionsInnerRulesAndOptionsInnerMaxMeasurements](docs/Model/GetV1CarrierServices200ResponseShippingOptionsInnerServicesInnerPackagingOptionsInnerContentOptionsInnerRulesAndOptionsInnerMaxMeasurements.md)
- [GetV1LabelsLabelId200Response](docs/Model/GetV1LabelsLabelId200Response.md)
- [GetV1SecurityQuestions200ResponseInner](docs/Model/GetV1SecurityQuestions200ResponseInner.md)
- [GetV1Tracking200Response](docs/Model/GetV1Tracking200Response.md)
- [GetV1Tracking200ResponseDestination](docs/Model/GetV1Tracking200ResponseDestination.md)
- [GetV1Tracking200ResponseTrackingEventsInner](docs/Model/GetV1Tracking200ResponseTrackingEventsInner.md)
- [GetV1Url200Response](docs/Model/GetV1Url200Response.md)
- [Globalpost](docs/Model/Globalpost.md)
- [InternalAccountDetails](docs/Model/InternalAccountDetails.md)
- [Invoice](docs/Model/Invoice.md)
- [LabelOptions](docs/Model/LabelOptions.md)
- [ManifestLabelOptions](docs/Model/ManifestLabelOptions.md)
- [MeterDetails](docs/Model/MeterDetails.md)
- [Package](docs/Model/Package.md)
- [PayOnUseDetails](docs/Model/PayOnUseDetails.md)
- [PlanDetails](docs/Model/PlanDetails.md)
- [PostOauthToken200Response](docs/Model/PostOauthToken200Response.md)
- [PostV1AddressesValidate200ResponseInner](docs/Model/PostV1AddressesValidate200ResponseInner.md)
- [PostV1AddressesValidate200ResponseInnerValidationResults](docs/Model/PostV1AddressesValidate200ResponseInnerValidationResults.md)
- [PostV1AddressesValidate200ResponseInnerValidationResultsResultDetailsInner](docs/Model/PostV1AddressesValidate200ResponseInnerValidationResultsResultDetailsInner.md)
- [PostV1BalanceAddFundsRequest](docs/Model/PostV1BalanceAddFundsRequest.md)
- [PostV1CarriersRequest](docs/Model/PostV1CarriersRequest.md)
- [PostV1ContainerLabels200Response](docs/Model/PostV1ContainerLabels200Response.md)
- [PostV1Labels200Response](docs/Model/PostV1Labels200Response.md)
- [PostV1LabelsRequest](docs/Model/PostV1LabelsRequest.md)
- [PostV1LabelsRequestEmailLabel](docs/Model/PostV1LabelsRequestEmailLabel.md)
- [PostV1LabelsRequestInsurance](docs/Model/PostV1LabelsRequestInsurance.md)
- [PostV1LabelsRequestInsuranceInsuredValue](docs/Model/PostV1LabelsRequestInsuranceInsuredValue.md)
- [PostV1LabelsRequestOrderDetails](docs/Model/PostV1LabelsRequestOrderDetails.md)
- [PostV1LabelsRequestOrderDetailsItemsOrderedInner](docs/Model/PostV1LabelsRequestOrderDetailsItemsOrderedInner.md)
- [PostV1LabelsRequestOrderDetailsItemsOrderedInnerItemOptionsInner](docs/Model/PostV1LabelsRequestOrderDetailsItemsOrderedInnerItemOptionsInner.md)
- [PostV1LabelsRequestReferences](docs/Model/PostV1LabelsRequestReferences.md)
- [PostV1Manifests200Response](docs/Model/PostV1Manifests200Response.md)
- [PostV1Manifests200ResponseLabelsInner](docs/Model/PostV1Manifests200ResponseLabelsInner.md)
- [PostV1Pickups200Response](docs/Model/PostV1Pickups200Response.md)
- [PostV1Pickups200ResponseEstimatedCost](docs/Model/PostV1Pickups200ResponseEstimatedCost.md)
- [PostV1Pickups200ResponsePickupWindow](docs/Model/PostV1Pickups200ResponsePickupWindow.md)
- [PostV1Rates200ResponseInner](docs/Model/PostV1Rates200ResponseInner.md)
- [PostV1RatesRequest](docs/Model/PostV1RatesRequest.md)
- [PostV1RatesRequestInsurance](docs/Model/PostV1RatesRequestInsurance.md)
- [PostV1RatesRequestInsuranceInsuredValue](docs/Model/PostV1RatesRequestInsuranceInsuredValue.md)
- [PutV1AccountSecurityQuestionsRequest](docs/Model/PutV1AccountSecurityQuestionsRequest.md)
- [Resubmit](docs/Model/Resubmit.md)
- [ShipmentCost](docs/Model/ShipmentCost.md)
- [ShipmentCostCostDetailsInner](docs/Model/ShipmentCostCostDetailsInner.md)
- [Terms](docs/Model/Terms.md)

## Authorization

Authentication schemes defined for the API:
### SERA (Production)

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://signin.stampsendicia.com/authorize`
- **Scopes**: N/A

### SERA (Staging)

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://signin.testing.stampsendicia.com/authorize`
- **Scopes**: N/A

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

developersupport@stamps.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
