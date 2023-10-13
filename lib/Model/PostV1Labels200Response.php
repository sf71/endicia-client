<?php
/**
 * PostV1Labels200Response
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Stamps.com/Endicia REST API (SERA)
 *
 * The Stamps.com/Endicia REST API (SERA) is the quickest and most convenient way to build a custom carrier-integrated shipping solution. If you run into any problems or have any questions along the way, contact the Stamps.com developer support team at <a href=\"mailto:developersupport@stamps.com\">developersupport@stamps.com</a>. Include your username, if you know it, and as much detail as possible to assist us in helping you. The fastest way for us to be able to help is by sending us a copy of the API request and response in question.  ### What's New On July 9, 2023, USPS is introducing a new ground-based package service: USPS Ground Advantage. This service replaces USPS First-Class Package Service, Parcel Select Ground, and Retail Ground. First-Class Mail Letters and Large Envelopes/Flats will continue to be available.  Description of Change | Endpoints and Methods Impacted ---|--- `usps_ground_advantage` added to `service_type` enumeration for the new USPS Ground Advantage Service | `POST /v1/rates`<br/>`POST /v1/labels`  ##### USPS Ground Advantage USPS is replacing the First-Class Package Service, Parcel Select Ground, and Retail Ground services with USPS Ground Advantage. Ground Advantage delivers packages within the Continental United States in 2-5 business days with free included tracking and $100 of USPS insurance for packages between 0 and 70 lbs.  USPS Ground Advantage is available as service_type `usps_ground_advantage`. For our customers' and partners' convenience, we will temporarily map requests for discontinued USPS package services to the new USPS Ground Advantage service. For example, after July 9, 2023, a `POST /v1/labels` request for service_type `usps_first_class_mail` and packaging_type `package` will return a USPS Ground Advantage label instead of a First-Class Package Service label.  Integrators are encouraged to call for USPS Ground Advantage directly with the service_type `usps_ground_advantage`. In the future we will communicate a date when this update will become mandatory.  ### About REST SERA is a REST (REpresentational State Transfer) API, which means that it follows certain HTTP conventions for things like URLs, methods, headers, and status codes. If you’d like more information, [click here](https://en.wikipedia.org/wiki/Representational_state_transfer).  ### Staging and Production Versioned Environments The staging environment allows you to develop SERA integrations without using real funds to create test labels. There are no service or transaction fees charged for staging accounts and labels. Labels created in the staging environment cannot be used to ship and must be destroyed if printed. Access to the staging environment is available once you register for a Stamps.com developer account.  Note that shipping rates in the staging environment may vary from production and should not be relied on. Other services in staging, such as tracking and pickups, do not reflect any real-world data.  The production environment allows you to take your SERA integration live and rate-shop across multiple carriers, create real shipping labels, schedule pickups, track in-transit shipments, and more.  #### Endpoint Base URLs ##### Sign-In/Authentication Staging: https://signin.testing.stampsendicia.com<br/> Production: https://signin.stampsendicia.com  ##### SERA Staging: https://api.testing.stampsendicia.com/sera<br/> Production: https://api.stampsendicia.com/sera  All Endpoint URLs given in this document are relative to the specific environment host you are connecting to. For example, to add funds to an account in the staging environment, POST the request to https://api.testing.stampsendicia.com/sera/v1/balance/add-funds. To do the same in the production environment, POST the request to https://api.stampsendicia.com/sera/v1/balance/add-funds.  All SERA requests must be made over HTTPS using TLS v1.2+. Calls made over plain-text HTTP or with an obsolete TLS version will fail.  ### Idempotency Because the internet is not a guaranteed service, sometimes network messages (like REST API requests and responses) get lost in transit and are not received. If this happens, it’s usually impossible to know if the request was received and processed successfully, or if not, should be sent again and possibly duplicated. To guard against cases like this, be sure to include a unique `Idempotency-key` value in the request header when calling any SERA endpoint with the POST method.  Whenever any request does not get a response within a reasonable timeout period, simply send it again with the same `Idempotency-key` value. If SERA already processed a request within the past 24 hours with the same Idempotency-key, it will replay the same response without duplicating the transaction. If the key is new, SERA will process the request as normal. `Idempotency-key`s must be a randomly-generated version-4 UUID. Most programming languages support generating random UUIDs out-of-the-box. If an invalid `Idempotency-key` is included with an request, an error will be returned.  ### Versioning Every SERA endpoint contains a version number in the URL. For example, to add funds to an account, call `POST /v1/balance/add-funds`. New versions are created to avoid impacting existing integrations when backwards-incompatible changes are introduced to SERA. Integrators are not required to upgrade versions to maintain existing functionality but may be required to upgrade to gain access to new features as they’re introduced.
 *
 * The version of the OpenAPI document: v1
 * Contact: developersupport@stamps.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.1.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * PostV1Labels200Response Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PostV1Labels200Response implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'post_v1_labels_200_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'label_id' => 'string',
        'tracking_number' => 'string',
        'carrier' => 'string',
        'service_type' => 'string',
        'packaging_type' => 'string',
        'estimated_delivery_days' => 'string',
        'estimated_delivery_date' => 'string',
        'is_guaranteed_service' => 'bool',
        'trackable' => 'string',
        'is_return_label' => 'bool',
        'is_gap' => 'bool',
        'is_smartsaver' => 'bool',
        'is_etoe' => 'bool',
        'shipment_cost' => '\OpenAPI\Client\Model\ShipmentCost',
        'account_balance' => '\OpenAPI\Client\Model\AccountBalance',
        'labels' => 'OneOf[]',
        'forms' => 'OneOf[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'label_id' => null,
        'tracking_number' => null,
        'carrier' => null,
        'service_type' => null,
        'packaging_type' => null,
        'estimated_delivery_days' => null,
        'estimated_delivery_date' => null,
        'is_guaranteed_service' => null,
        'trackable' => null,
        'is_return_label' => null,
        'is_gap' => null,
        'is_smartsaver' => null,
        'is_etoe' => null,
        'shipment_cost' => null,
        'account_balance' => null,
        'labels' => null,
        'forms' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'label_id' => false,
		'tracking_number' => false,
		'carrier' => false,
		'service_type' => false,
		'packaging_type' => false,
		'estimated_delivery_days' => false,
		'estimated_delivery_date' => false,
		'is_guaranteed_service' => false,
		'trackable' => false,
		'is_return_label' => false,
		'is_gap' => false,
		'is_smartsaver' => false,
		'is_etoe' => false,
		'shipment_cost' => false,
		'account_balance' => false,
		'labels' => false,
		'forms' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'label_id' => 'label_id',
        'tracking_number' => 'tracking_number',
        'carrier' => 'carrier',
        'service_type' => 'service_type',
        'packaging_type' => 'packaging_type',
        'estimated_delivery_days' => 'estimated_delivery_days',
        'estimated_delivery_date' => 'estimated_delivery_date',
        'is_guaranteed_service' => 'is_guaranteed_service',
        'trackable' => 'trackable',
        'is_return_label' => 'is_return_label',
        'is_gap' => 'is_gap',
        'is_smartsaver' => 'is_smartsaver',
        'is_etoe' => 'is_etoe',
        'shipment_cost' => 'shipment_cost',
        'account_balance' => 'account_balance',
        'labels' => 'labels',
        'forms' => 'forms'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'label_id' => 'setLabelId',
        'tracking_number' => 'setTrackingNumber',
        'carrier' => 'setCarrier',
        'service_type' => 'setServiceType',
        'packaging_type' => 'setPackagingType',
        'estimated_delivery_days' => 'setEstimatedDeliveryDays',
        'estimated_delivery_date' => 'setEstimatedDeliveryDate',
        'is_guaranteed_service' => 'setIsGuaranteedService',
        'trackable' => 'setTrackable',
        'is_return_label' => 'setIsReturnLabel',
        'is_gap' => 'setIsGap',
        'is_smartsaver' => 'setIsSmartsaver',
        'is_etoe' => 'setIsEtoe',
        'shipment_cost' => 'setShipmentCost',
        'account_balance' => 'setAccountBalance',
        'labels' => 'setLabels',
        'forms' => 'setForms'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'label_id' => 'getLabelId',
        'tracking_number' => 'getTrackingNumber',
        'carrier' => 'getCarrier',
        'service_type' => 'getServiceType',
        'packaging_type' => 'getPackagingType',
        'estimated_delivery_days' => 'getEstimatedDeliveryDays',
        'estimated_delivery_date' => 'getEstimatedDeliveryDate',
        'is_guaranteed_service' => 'getIsGuaranteedService',
        'trackable' => 'getTrackable',
        'is_return_label' => 'getIsReturnLabel',
        'is_gap' => 'getIsGap',
        'is_smartsaver' => 'getIsSmartsaver',
        'is_etoe' => 'getIsEtoe',
        'shipment_cost' => 'getShipmentCost',
        'account_balance' => 'getAccountBalance',
        'labels' => 'getLabels',
        'forms' => 'getForms'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const CARRIER_USPS = 'usps';
    public const CARRIER_GLOBALPOST = 'globalpost';
    public const CARRIER_UPS = 'ups';
    public const CARRIER_FEDEX = 'fedex';
    public const CARRIER_DHL_EXPRESS = 'dhl_express';
    public const CARRIER_CANADA_POST = 'canada_post';
    public const SERVICE_TYPE_USPS_FIRST_CLASS_MAIL = 'usps_first_class_mail';
    public const SERVICE_TYPE_USPS_GROUND_ADVANTAGE = 'usps_ground_advantage';
    public const SERVICE_TYPE_USPS_PRIORITY_MAIL = 'usps_priority_mail';
    public const SERVICE_TYPE_USPS_PRIORITY_MAIL_EXPRESS = 'usps_priority_mail_express';
    public const SERVICE_TYPE_USPS_PARCEL_SELECT = 'usps_parcel_select';
    public const SERVICE_TYPE_USPS_MEDIA_MAIL = 'usps_media_mail';
    public const SERVICE_TYPE_USPS_FIRST_CLASS_MAIL_INTERNATIONAL = 'usps_first_class_mail_international';
    public const SERVICE_TYPE_USPS_PRIORITY_MAIL_INTERNATIONAL = 'usps_priority_mail_international';
    public const SERVICE_TYPE_USPS_PRIORITY_MAIL_EXPRESS_INTERNATIONAL = 'usps_priority_mail_express_international';
    public const SERVICE_TYPE_USPS_PAY_ON_USE_RETURN = 'usps_pay_on_use_return';
    public const SERVICE_TYPE_GLOBALPOST_FIRST_CLASS_SMARTSAVER = 'globalpost_first_class_smartsaver';
    public const SERVICE_TYPE_GLOBALPOST_PARCEL_SELECT_SMARTSAVER = 'globalpost_parcel_select_smartsaver';
    public const SERVICE_TYPE_GLOBALPOST_ECONOMY_INTERNATIONAL = 'globalpost_economy_international';
    public const SERVICE_TYPE_GLOBALPOST_ECONOMY_INTERNATIONAL_SMARTSAVER = 'globalpost_economy_international_smartsaver';
    public const SERVICE_TYPE_GLOBALPOST_STANDARD_INTERNATIONAL = 'globalpost_standard_international';
    public const SERVICE_TYPE_GLOBALPOST_STANDARD_INTERNATIONAL_SMARTSAVER = 'globalpost_standard_international_smartsaver';
    public const SERVICE_TYPE_GLOBALPOST_PLUS = 'globalpost_plus';
    public const SERVICE_TYPE_GLOBALPOST_PLUS_SMARTSAVER = 'globalpost_plus_smartsaver';
    public const SERVICE_TYPE_GLOBALPOST_FIRST_CLASS_INTERNATIONAL = 'globalpost_first_class_international';
    public const SERVICE_TYPE_GLOBALPOST_FIRST_CLASS_INTERNATIONAL_SMARTSAVER = 'globalpost_first_class_international_smartsaver';
    public const SERVICE_TYPE_GLOBALPOST_PRIORITY_MAIL_INTERNATIONAL = 'globalpost_priority_mail_international';
    public const SERVICE_TYPE_GLOBALPOST_PRIORITY_MAIL__INTERNATIONAL_SMARTSAVER = 'globalpost_priority_mail__international_smartsaver';
    public const SERVICE_TYPE_GLOBALPOST_PRIORITY_MAIL_EXPRESS_INTERNATIONAL = 'globalpost_priority_mail_express_international';
    public const SERVICE_TYPE_GLOBALPOST__PRIORITY_MAIL_EXPRESS_INTERNATIONAL_SMARTSAVER = 'globalpost_ priority_mail_express_international_smartsaver';
    public const SERVICE_TYPE_UPS_NEXT_DAY_AIR_EARLY = 'ups_next_day_air_early';
    public const SERVICE_TYPE_UPS_NEXT_DAY_AIR = 'ups_next_day_air';
    public const SERVICE_TYPE_UPS_NEXT_DAY_AIR_SAVER = 'ups_next_day_air_saver';
    public const SERVICE_TYPE_UPS_2ND_DAY_AIR_AM = 'ups_2nd_day_air_am';
    public const SERVICE_TYPE_UPS_2ND_DAY_AIR = 'ups_2nd_day_air';
    public const SERVICE_TYPE_UPS_3_DAY_SELECT = 'ups_3_day_select';
    public const SERVICE_TYPE_UPS_GROUND = 'ups_ground';
    public const SERVICE_TYPE_UPS_STANDARD = 'ups_standard';
    public const SERVICE_TYPE_UPS_WORLDWIDE_EXPRESS = 'ups_worldwide_express';
    public const SERVICE_TYPE_UPS_WORLDWIDE_EXPRESS_PLUS = 'ups_worldwide_express_plus';
    public const SERVICE_TYPE_UPS_WORLDWIDE_EXPEDITED = 'ups_worldwide_expedited';
    public const SERVICE_TYPE_UPS_WORLDWIDE_SAVER = 'ups_worldwide_saver';
    public const SERVICE_TYPE_FEDEX_FIRST_OVERNIGHT = 'fedex_first_overnight';
    public const SERVICE_TYPE_FEDEX_PRIORITY_OVERNIGHT = 'fedex_priority_overnight';
    public const SERVICE_TYPE_FEDEX_STANDARD_OVERNIGHT = 'fedex_standard_overnight';
    public const SERVICE_TYPE_FEDEX_2DAY_AM = 'fedex_2day_am';
    public const SERVICE_TYPE_FEDEX_2DAY = 'fedex_2day';
    public const SERVICE_TYPE_FEDEX_EXPRESS_SAVER = 'fedex_express_saver';
    public const SERVICE_TYPE_FEDEX_GROUND = 'fedex_ground';
    public const SERVICE_TYPE_FEDEX_HOME_DELIVERY = 'fedex_home_delivery';
    public const SERVICE_TYPE_FEDEX_INTERNATIONAL_FIRST = 'fedex_international_first';
    public const SERVICE_TYPE_FEDEX_INTERNATIONAL_PRIORITY = 'fedex_international_priority';
    public const SERVICE_TYPE_FEDEX_INTERNATIONAL_ECONOMY = 'fedex_international_economy';
    public const SERVICE_TYPE_FEDEX_INTERNATIONAL_GROUND = 'fedex_international_ground';
    public const SERVICE_TYPE_DHL_EXPRESS_WORLDWIDE = 'dhl_express_worldwide';
    public const SERVICE_TYPE_CANADA_POST_REGULAR_PARCEL = 'canada_post_regular_parcel';
    public const SERVICE_TYPE_CANADA_POST_XPRESSPOST = 'canada_post_xpresspost';
    public const SERVICE_TYPE_CANADA_POST_PRIORITY = 'canada_post_priority';
    public const SERVICE_TYPE_CANADA_POST_EXPEDITED_PARCEL = 'canada_post_expedited_parcel';
    public const SERVICE_TYPE_CANADA_POST_SMALL_PACKET_AIR_USA = 'canada_post_small_packet_air_usa';
    public const SERVICE_TYPE_CANADA_POST_TRACKED_PACKET_USA = 'canada_post_tracked_packet_usa';
    public const SERVICE_TYPE_CANADA_POST_EXPEDITED_PARCEL_USA = 'canada_post_expedited_parcel_usa';
    public const SERVICE_TYPE_CANADA_POST_XPRESSPOST_USA = 'canada_post_xpresspost_usa';
    public const SERVICE_TYPE_CANADA_POST_PRIORITY_WORLDWIDE_USA = 'canada_post_priority_worldwide_usa';
    public const SERVICE_TYPE_CANADA_POST_SMALL_PACKET_INTERNATIONAL_SURFACE = 'canada_post_small_packet_international_surface';
    public const SERVICE_TYPE_CANADA_POST_SMALL_PACKET_INTERNATIONAL_AIR = 'canada_post_small_packet_international_air';
    public const SERVICE_TYPE_CANADA_POST_INTERNATIONAL_PARCEL_SURFACE = 'canada_post_international_parcel_surface';
    public const SERVICE_TYPE_CANADA_POST_INTERNATIONAL_PARCEL_AIR = 'canada_post_international_parcel_air';
    public const SERVICE_TYPE_CANADA_POST_TRACKED_PACKET_INTERNATIONAL = 'canada_post_tracked_packet_international';
    public const SERVICE_TYPE_CANADA_POST_XPRESSPOST_INTERNATIONAL = 'canada_post_xpresspost_international';
    public const SERVICE_TYPE_CANADA_POST_PRIORITY_WORLDWIDE_INTERNATIONAL = 'canada_post_priority_worldwide_international';
    public const PACKAGING_TYPE_LARGE_ENVELOPE = 'large_envelope';
    public const PACKAGING_TYPE_PACKAGE = 'package';
    public const PACKAGING_TYPE_USPS_SMALL_FLAT_RATE_BOX = 'usps_small_flat_rate_box';
    public const PACKAGING_TYPE_USPS_MEDIUM_FLAT_RATE_BOX = 'usps_medium_flat_rate_box';
    public const PACKAGING_TYPE_USPS_LARGE_FLAT_RATE_BOX = 'usps_large_flat_rate_box';
    public const PACKAGING_TYPE_USPS_FLAT_RATE_ENVELOPE = 'usps_flat_rate_envelope';
    public const PACKAGING_TYPE_USPS_PADDED_FLAT_RATE_ENVELOPE = 'usps_padded_flat_rate_envelope';
    public const PACKAGING_TYPE_USPS_LEGAL_FLAT_RATE_ENVELOPE = 'usps_legal_flat_rate_envelope';
    public const PACKAGING_TYPE_USPS_REGIONAL_RATE_BOX_A = 'usps_regional_rate_box_a';
    public const PACKAGING_TYPE_USPS_REGIONAL_RATE_BOX_B = 'usps_regional_rate_box_b';
    public const PACKAGING_TYPE_UPS_LETTER = 'ups_letter';
    public const PACKAGING_TYPE_UPS_PAK = 'ups_pak';
    public const PACKAGING_TYPE_UPS_TUBE = 'ups_tube';
    public const PACKAGING_TYPE_UPS_EXPRESS_BOX_SMALL = 'ups_express_box_small';
    public const PACKAGING_TYPE_UPS_EXPRESS_BOX_MEDIUM = 'ups_express_box_medium';
    public const PACKAGING_TYPE_UPS_EXPRESS_BOX_LARGE = 'ups_express_box_large';
    public const PACKAGING_TYPE_UPS_10KG_BOX = 'ups_10kg_box';
    public const PACKAGING_TYPE_UPS_25KG_BOX = 'ups_25kg_box';
    public const PACKAGING_TYPE_FEDEX_ENVELOPE = 'fedex_envelope';
    public const PACKAGING_TYPE_FEDEX_PAK = 'fedex_pak';
    public const PACKAGING_TYPE_FEDEX_TUBE = 'fedex_tube';
    public const PACKAGING_TYPE_FEDEX_ONE_RATE_ENVELOPE = 'fedex_one_rate_envelope';
    public const PACKAGING_TYPE_FEDEX_ONE_RATE_PAK = 'fedex_one_rate_pak';
    public const PACKAGING_TYPE_FEDEX_ONE_RATE_TUBE = 'fedex_one_rate_tube';
    public const PACKAGING_TYPE_FEDEX_ONE_RATE_SMALL_BOX = 'fedex_one_rate_small_box';
    public const PACKAGING_TYPE_FEDEX_ONE_RATE_MEDIUM_BOX = 'fedex_one_rate_medium_box';
    public const PACKAGING_TYPE_FEDEX_ONE_RATE_LARGE_BOX = 'fedex_one_rate_large_box';
    public const PACKAGING_TYPE_FEDEX_ONE_RATE_EXTRA_LARGE_BOX = 'fedex_one_rate_extra_large_box';
    public const PACKAGING_TYPE_FEDEX_10KG_BOX = 'fedex_10kg_box';
    public const PACKAGING_TYPE_FEDEX_25KG_BOX = 'fedex_25kg_box';
    public const PACKAGING_TYPE_EXPRESS_ENVELOPE = 'express_envelope';
    public const PACKAGING_TYPE_CANADA_POST_ENVELOPE = 'canada_post_envelope';
    public const PACKAGING_TYPE_CANADA_POST_PAK = 'canada_post_pak';
    public const TRACKABLE_YES = 'yes';
    public const TRACKABLE_PARTIAL = 'partial';
    public const TRACKABLE_NO = 'no';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCarrierAllowableValues()
    {
        return [
            self::CARRIER_USPS,
            self::CARRIER_GLOBALPOST,
            self::CARRIER_UPS,
            self::CARRIER_FEDEX,
            self::CARRIER_DHL_EXPRESS,
            self::CARRIER_CANADA_POST,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getServiceTypeAllowableValues()
    {
        return [
            self::SERVICE_TYPE_USPS_FIRST_CLASS_MAIL,
            self::SERVICE_TYPE_USPS_GROUND_ADVANTAGE,
            self::SERVICE_TYPE_USPS_PRIORITY_MAIL,
            self::SERVICE_TYPE_USPS_PRIORITY_MAIL_EXPRESS,
            self::SERVICE_TYPE_USPS_PARCEL_SELECT,
            self::SERVICE_TYPE_USPS_MEDIA_MAIL,
            self::SERVICE_TYPE_USPS_FIRST_CLASS_MAIL_INTERNATIONAL,
            self::SERVICE_TYPE_USPS_PRIORITY_MAIL_INTERNATIONAL,
            self::SERVICE_TYPE_USPS_PRIORITY_MAIL_EXPRESS_INTERNATIONAL,
            self::SERVICE_TYPE_USPS_PAY_ON_USE_RETURN,
            self::SERVICE_TYPE_GLOBALPOST_FIRST_CLASS_SMARTSAVER,
            self::SERVICE_TYPE_GLOBALPOST_PARCEL_SELECT_SMARTSAVER,
            self::SERVICE_TYPE_GLOBALPOST_ECONOMY_INTERNATIONAL,
            self::SERVICE_TYPE_GLOBALPOST_ECONOMY_INTERNATIONAL_SMARTSAVER,
            self::SERVICE_TYPE_GLOBALPOST_STANDARD_INTERNATIONAL,
            self::SERVICE_TYPE_GLOBALPOST_STANDARD_INTERNATIONAL_SMARTSAVER,
            self::SERVICE_TYPE_GLOBALPOST_PLUS,
            self::SERVICE_TYPE_GLOBALPOST_PLUS_SMARTSAVER,
            self::SERVICE_TYPE_GLOBALPOST_FIRST_CLASS_INTERNATIONAL,
            self::SERVICE_TYPE_GLOBALPOST_FIRST_CLASS_INTERNATIONAL_SMARTSAVER,
            self::SERVICE_TYPE_GLOBALPOST_PRIORITY_MAIL_INTERNATIONAL,
            self::SERVICE_TYPE_GLOBALPOST_PRIORITY_MAIL__INTERNATIONAL_SMARTSAVER,
            self::SERVICE_TYPE_GLOBALPOST_PRIORITY_MAIL_EXPRESS_INTERNATIONAL,
            self::SERVICE_TYPE_GLOBALPOST__PRIORITY_MAIL_EXPRESS_INTERNATIONAL_SMARTSAVER,
            self::SERVICE_TYPE_UPS_NEXT_DAY_AIR_EARLY,
            self::SERVICE_TYPE_UPS_NEXT_DAY_AIR,
            self::SERVICE_TYPE_UPS_NEXT_DAY_AIR_SAVER,
            self::SERVICE_TYPE_UPS_2ND_DAY_AIR_AM,
            self::SERVICE_TYPE_UPS_2ND_DAY_AIR,
            self::SERVICE_TYPE_UPS_3_DAY_SELECT,
            self::SERVICE_TYPE_UPS_GROUND,
            self::SERVICE_TYPE_UPS_STANDARD,
            self::SERVICE_TYPE_UPS_WORLDWIDE_EXPRESS,
            self::SERVICE_TYPE_UPS_WORLDWIDE_EXPRESS_PLUS,
            self::SERVICE_TYPE_UPS_WORLDWIDE_EXPEDITED,
            self::SERVICE_TYPE_UPS_WORLDWIDE_SAVER,
            self::SERVICE_TYPE_FEDEX_FIRST_OVERNIGHT,
            self::SERVICE_TYPE_FEDEX_PRIORITY_OVERNIGHT,
            self::SERVICE_TYPE_FEDEX_STANDARD_OVERNIGHT,
            self::SERVICE_TYPE_FEDEX_2DAY_AM,
            self::SERVICE_TYPE_FEDEX_2DAY,
            self::SERVICE_TYPE_FEDEX_EXPRESS_SAVER,
            self::SERVICE_TYPE_FEDEX_GROUND,
            self::SERVICE_TYPE_FEDEX_HOME_DELIVERY,
            self::SERVICE_TYPE_FEDEX_INTERNATIONAL_FIRST,
            self::SERVICE_TYPE_FEDEX_INTERNATIONAL_PRIORITY,
            self::SERVICE_TYPE_FEDEX_INTERNATIONAL_ECONOMY,
            self::SERVICE_TYPE_FEDEX_INTERNATIONAL_GROUND,
            self::SERVICE_TYPE_DHL_EXPRESS_WORLDWIDE,
            self::SERVICE_TYPE_CANADA_POST_REGULAR_PARCEL,
            self::SERVICE_TYPE_CANADA_POST_XPRESSPOST,
            self::SERVICE_TYPE_CANADA_POST_PRIORITY,
            self::SERVICE_TYPE_CANADA_POST_EXPEDITED_PARCEL,
            self::SERVICE_TYPE_CANADA_POST_SMALL_PACKET_AIR_USA,
            self::SERVICE_TYPE_CANADA_POST_TRACKED_PACKET_USA,
            self::SERVICE_TYPE_CANADA_POST_EXPEDITED_PARCEL_USA,
            self::SERVICE_TYPE_CANADA_POST_XPRESSPOST_USA,
            self::SERVICE_TYPE_CANADA_POST_PRIORITY_WORLDWIDE_USA,
            self::SERVICE_TYPE_CANADA_POST_SMALL_PACKET_INTERNATIONAL_SURFACE,
            self::SERVICE_TYPE_CANADA_POST_SMALL_PACKET_INTERNATIONAL_AIR,
            self::SERVICE_TYPE_CANADA_POST_INTERNATIONAL_PARCEL_SURFACE,
            self::SERVICE_TYPE_CANADA_POST_INTERNATIONAL_PARCEL_AIR,
            self::SERVICE_TYPE_CANADA_POST_TRACKED_PACKET_INTERNATIONAL,
            self::SERVICE_TYPE_CANADA_POST_XPRESSPOST_INTERNATIONAL,
            self::SERVICE_TYPE_CANADA_POST_PRIORITY_WORLDWIDE_INTERNATIONAL,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPackagingTypeAllowableValues()
    {
        return [
            self::PACKAGING_TYPE_LARGE_ENVELOPE,
            self::PACKAGING_TYPE_PACKAGE,
            self::PACKAGING_TYPE_USPS_SMALL_FLAT_RATE_BOX,
            self::PACKAGING_TYPE_USPS_MEDIUM_FLAT_RATE_BOX,
            self::PACKAGING_TYPE_USPS_LARGE_FLAT_RATE_BOX,
            self::PACKAGING_TYPE_USPS_FLAT_RATE_ENVELOPE,
            self::PACKAGING_TYPE_USPS_PADDED_FLAT_RATE_ENVELOPE,
            self::PACKAGING_TYPE_USPS_LEGAL_FLAT_RATE_ENVELOPE,
            self::PACKAGING_TYPE_USPS_REGIONAL_RATE_BOX_A,
            self::PACKAGING_TYPE_USPS_REGIONAL_RATE_BOX_B,
            self::PACKAGING_TYPE_UPS_LETTER,
            self::PACKAGING_TYPE_UPS_PAK,
            self::PACKAGING_TYPE_UPS_TUBE,
            self::PACKAGING_TYPE_UPS_EXPRESS_BOX_SMALL,
            self::PACKAGING_TYPE_UPS_EXPRESS_BOX_MEDIUM,
            self::PACKAGING_TYPE_UPS_EXPRESS_BOX_LARGE,
            self::PACKAGING_TYPE_UPS_10KG_BOX,
            self::PACKAGING_TYPE_UPS_25KG_BOX,
            self::PACKAGING_TYPE_FEDEX_ENVELOPE,
            self::PACKAGING_TYPE_FEDEX_PAK,
            self::PACKAGING_TYPE_FEDEX_TUBE,
            self::PACKAGING_TYPE_FEDEX_ONE_RATE_ENVELOPE,
            self::PACKAGING_TYPE_FEDEX_ONE_RATE_PAK,
            self::PACKAGING_TYPE_FEDEX_ONE_RATE_TUBE,
            self::PACKAGING_TYPE_FEDEX_ONE_RATE_SMALL_BOX,
            self::PACKAGING_TYPE_FEDEX_ONE_RATE_MEDIUM_BOX,
            self::PACKAGING_TYPE_FEDEX_ONE_RATE_LARGE_BOX,
            self::PACKAGING_TYPE_FEDEX_ONE_RATE_EXTRA_LARGE_BOX,
            self::PACKAGING_TYPE_FEDEX_10KG_BOX,
            self::PACKAGING_TYPE_FEDEX_25KG_BOX,
            self::PACKAGING_TYPE_EXPRESS_ENVELOPE,
            self::PACKAGING_TYPE_CANADA_POST_ENVELOPE,
            self::PACKAGING_TYPE_CANADA_POST_PAK,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTrackableAllowableValues()
    {
        return [
            self::TRACKABLE_YES,
            self::TRACKABLE_PARTIAL,
            self::TRACKABLE_NO,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('label_id', $data ?? [], null);
        $this->setIfExists('tracking_number', $data ?? [], null);
        $this->setIfExists('carrier', $data ?? [], null);
        $this->setIfExists('service_type', $data ?? [], null);
        $this->setIfExists('packaging_type', $data ?? [], null);
        $this->setIfExists('estimated_delivery_days', $data ?? [], null);
        $this->setIfExists('estimated_delivery_date', $data ?? [], null);
        $this->setIfExists('is_guaranteed_service', $data ?? [], null);
        $this->setIfExists('trackable', $data ?? [], null);
        $this->setIfExists('is_return_label', $data ?? [], null);
        $this->setIfExists('is_gap', $data ?? [], null);
        $this->setIfExists('is_smartsaver', $data ?? [], null);
        $this->setIfExists('is_etoe', $data ?? [], null);
        $this->setIfExists('shipment_cost', $data ?? [], null);
        $this->setIfExists('account_balance', $data ?? [], null);
        $this->setIfExists('labels', $data ?? [], null);
        $this->setIfExists('forms', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCarrierAllowableValues();
        if (!is_null($this->container['carrier']) && !in_array($this->container['carrier'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'carrier', must be one of '%s'",
                $this->container['carrier'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getServiceTypeAllowableValues();
        if (!is_null($this->container['service_type']) && !in_array($this->container['service_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'service_type', must be one of '%s'",
                $this->container['service_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPackagingTypeAllowableValues();
        if (!is_null($this->container['packaging_type']) && !in_array($this->container['packaging_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'packaging_type', must be one of '%s'",
                $this->container['packaging_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTrackableAllowableValues();
        if (!is_null($this->container['trackable']) && !in_array($this->container['trackable'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'trackable', must be one of '%s'",
                $this->container['trackable'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets label_id
     *
     * @return string|null
     */
    public function getLabelId()
    {
        return $this->container['label_id'];
    }

    /**
     * Sets label_id
     *
     * @param string|null $label_id _Label ID_<br/>Used to identify this print for subsequent calls (e.g. Void a Label)
     *
     * @return self
     */
    public function setLabelId($label_id)
    {
        if (is_null($label_id)) {
            throw new \InvalidArgumentException('non-nullable label_id cannot be null');
        }
        $this->container['label_id'] = $label_id;

        return $this;
    }

    /**
     * Gets tracking_number
     *
     * @return string|null
     */
    public function getTrackingNumber()
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number
     *
     * @param string|null $tracking_number _Tracking Number_
     *
     * @return self
     */
    public function setTrackingNumber($tracking_number)
    {
        if (is_null($tracking_number)) {
            throw new \InvalidArgumentException('non-nullable tracking_number cannot be null');
        }
        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }

    /**
     * Gets carrier
     *
     * @return string|null
     */
    public function getCarrier()
    {
        return $this->container['carrier'];
    }

    /**
     * Sets carrier
     *
     * @param string|null $carrier _Carrier_
     *
     * @return self
     */
    public function setCarrier($carrier)
    {
        if (is_null($carrier)) {
            throw new \InvalidArgumentException('non-nullable carrier cannot be null');
        }
        $allowedValues = $this->getCarrierAllowableValues();
        if (!in_array($carrier, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'carrier', must be one of '%s'",
                    $carrier,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['carrier'] = $carrier;

        return $this;
    }

    /**
     * Gets service_type
     *
     * @return string|null
     */
    public function getServiceType()
    {
        return $this->container['service_type'];
    }

    /**
     * Sets service_type
     *
     * @param string|null $service_type _Service Type_<br/>Identifies the Carrier and Service used<br/>**Note:** Not all carriers are enabled for every account. Please contact us to ensure a specific carrier is available and activated for your account.
     *
     * @return self
     */
    public function setServiceType($service_type)
    {
        if (is_null($service_type)) {
            throw new \InvalidArgumentException('non-nullable service_type cannot be null');
        }
        $allowedValues = $this->getServiceTypeAllowableValues();
        if (!in_array($service_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'service_type', must be one of '%s'",
                    $service_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['service_type'] = $service_type;

        return $this;
    }

    /**
     * Gets packaging_type
     *
     * @return string|null
     */
    public function getPackagingType()
    {
        return $this->container['packaging_type'];
    }

    /**
     * Sets packaging_type
     *
     * @param string|null $packaging_type _Packaging Type_
     *
     * @return self
     */
    public function setPackagingType($packaging_type)
    {
        if (is_null($packaging_type)) {
            throw new \InvalidArgumentException('non-nullable packaging_type cannot be null');
        }
        $allowedValues = $this->getPackagingTypeAllowableValues();
        if (!in_array($packaging_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'packaging_type', must be one of '%s'",
                    $packaging_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['packaging_type'] = $packaging_type;

        return $this;
    }

    /**
     * Gets estimated_delivery_days
     *
     * @return string|null
     */
    public function getEstimatedDeliveryDays()
    {
        return $this->container['estimated_delivery_days'];
    }

    /**
     * Sets estimated_delivery_days
     *
     * @param string|null $estimated_delivery_days _Estimated Delivery Days_
     *
     * @return self
     */
    public function setEstimatedDeliveryDays($estimated_delivery_days)
    {
        if (is_null($estimated_delivery_days)) {
            throw new \InvalidArgumentException('non-nullable estimated_delivery_days cannot be null');
        }
        $this->container['estimated_delivery_days'] = $estimated_delivery_days;

        return $this;
    }

    /**
     * Gets estimated_delivery_date
     *
     * @return string|null
     */
    public function getEstimatedDeliveryDate()
    {
        return $this->container['estimated_delivery_date'];
    }

    /**
     * Sets estimated_delivery_date
     *
     * @param string|null $estimated_delivery_date _Estimated Delivery Date_
     *
     * @return self
     */
    public function setEstimatedDeliveryDate($estimated_delivery_date)
    {
        if (is_null($estimated_delivery_date)) {
            throw new \InvalidArgumentException('non-nullable estimated_delivery_date cannot be null');
        }
        $this->container['estimated_delivery_date'] = $estimated_delivery_date;

        return $this;
    }

    /**
     * Gets is_guaranteed_service
     *
     * @return bool|null
     */
    public function getIsGuaranteedService()
    {
        return $this->container['is_guaranteed_service'];
    }

    /**
     * Sets is_guaranteed_service
     *
     * @param bool|null $is_guaranteed_service _Is Guaranteed Service_
     *
     * @return self
     */
    public function setIsGuaranteedService($is_guaranteed_service)
    {
        if (is_null($is_guaranteed_service)) {
            throw new \InvalidArgumentException('non-nullable is_guaranteed_service cannot be null');
        }
        $this->container['is_guaranteed_service'] = $is_guaranteed_service;

        return $this;
    }

    /**
     * Gets trackable
     *
     * @return string|null
     */
    public function getTrackable()
    {
        return $this->container['trackable'];
    }

    /**
     * Sets trackable
     *
     * @param string|null $trackable _Trackable_
     *
     * @return self
     */
    public function setTrackable($trackable)
    {
        if (is_null($trackable)) {
            throw new \InvalidArgumentException('non-nullable trackable cannot be null');
        }
        $allowedValues = $this->getTrackableAllowableValues();
        if (!in_array($trackable, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'trackable', must be one of '%s'",
                    $trackable,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['trackable'] = $trackable;

        return $this;
    }

    /**
     * Gets is_return_label
     *
     * @return bool|null
     */
    public function getIsReturnLabel()
    {
        return $this->container['is_return_label'];
    }

    /**
     * Sets is_return_label
     *
     * @param bool|null $is_return_label _Is Return Label_
     *
     * @return self
     */
    public function setIsReturnLabel($is_return_label)
    {
        if (is_null($is_return_label)) {
            throw new \InvalidArgumentException('non-nullable is_return_label cannot be null');
        }
        $this->container['is_return_label'] = $is_return_label;

        return $this;
    }

    /**
     * Gets is_gap
     *
     * @return bool|null
     */
    public function getIsGap()
    {
        return $this->container['is_gap'];
    }

    /**
     * Sets is_gap
     *
     * @param bool|null $is_gap _Is GAP_
     *
     * @return self
     */
    public function setIsGap($is_gap)
    {
        if (is_null($is_gap)) {
            throw new \InvalidArgumentException('non-nullable is_gap cannot be null');
        }
        $this->container['is_gap'] = $is_gap;

        return $this;
    }

    /**
     * Gets is_smartsaver
     *
     * @return bool|null
     */
    public function getIsSmartsaver()
    {
        return $this->container['is_smartsaver'];
    }

    /**
     * Sets is_smartsaver
     *
     * @param bool|null $is_smartsaver _Is SmartSaver_
     *
     * @return self
     */
    public function setIsSmartsaver($is_smartsaver)
    {
        if (is_null($is_smartsaver)) {
            throw new \InvalidArgumentException('non-nullable is_smartsaver cannot be null');
        }
        $this->container['is_smartsaver'] = $is_smartsaver;

        return $this;
    }

    /**
     * Gets is_etoe
     *
     * @return bool|null
     */
    public function getIsEtoe()
    {
        return $this->container['is_etoe'];
    }

    /**
     * Sets is_etoe
     *
     * @param bool|null $is_etoe _Is ETOE_
     *
     * @return self
     */
    public function setIsEtoe($is_etoe)
    {
        if (is_null($is_etoe)) {
            throw new \InvalidArgumentException('non-nullable is_etoe cannot be null');
        }
        $this->container['is_etoe'] = $is_etoe;

        return $this;
    }

    /**
     * Gets shipment_cost
     *
     * @return \OpenAPI\Client\Model\ShipmentCost|null
     */
    public function getShipmentCost()
    {
        return $this->container['shipment_cost'];
    }

    /**
     * Sets shipment_cost
     *
     * @param \OpenAPI\Client\Model\ShipmentCost|null $shipment_cost shipment_cost
     *
     * @return self
     */
    public function setShipmentCost($shipment_cost)
    {
        if (is_null($shipment_cost)) {
            throw new \InvalidArgumentException('non-nullable shipment_cost cannot be null');
        }
        $this->container['shipment_cost'] = $shipment_cost;

        return $this;
    }

    /**
     * Gets account_balance
     *
     * @return \OpenAPI\Client\Model\AccountBalance|null
     */
    public function getAccountBalance()
    {
        return $this->container['account_balance'];
    }

    /**
     * Sets account_balance
     *
     * @param \OpenAPI\Client\Model\AccountBalance|null $account_balance account_balance
     *
     * @return self
     */
    public function setAccountBalance($account_balance)
    {
        if (is_null($account_balance)) {
            throw new \InvalidArgumentException('non-nullable account_balance cannot be null');
        }
        $this->container['account_balance'] = $account_balance;

        return $this;
    }

    /**
     * Gets labels
     *
     * @return OneOf[]|null
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param OneOf[]|null $labels labels
     *
     * @return self
     */
    public function setLabels($labels)
    {
        if (is_null($labels)) {
            throw new \InvalidArgumentException('non-nullable labels cannot be null');
        }
        $this->container['labels'] = $labels;

        return $this;
    }

    /**
     * Gets forms
     *
     * @return OneOf[]|null
     */
    public function getForms()
    {
        return $this->container['forms'];
    }

    /**
     * Sets forms
     *
     * @param OneOf[]|null $forms forms
     *
     * @return self
     */
    public function setForms($forms)
    {
        if (is_null($forms)) {
            throw new \InvalidArgumentException('non-nullable forms cannot be null');
        }
        $this->container['forms'] = $forms;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


