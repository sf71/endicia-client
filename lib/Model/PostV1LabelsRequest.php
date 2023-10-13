<?php
/**
 * PostV1LabelsRequest
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
 * PostV1LabelsRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PostV1LabelsRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'post_v1_labels_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'from_address' => '\OpenAPI\Client\Model\Address',
        'return_address' => '\OpenAPI\Client\Model\Address',
        'to_address' => '\OpenAPI\Client\Model\Address',
        'service_type' => 'string',
        'package' => '\OpenAPI\Client\Model\Package',
        'delivery_confirmation_type' => 'string',
        'insurance' => '\OpenAPI\Client\Model\PostV1LabelsRequestInsurance',
        'customs' => '\OpenAPI\Client\Model\Customs',
        'ship_date' => 'string',
        'is_return_label' => 'bool',
        'advanced_options' => '\OpenAPI\Client\Model\AdvancedOptions',
        'label_options' => '\OpenAPI\Client\Model\LabelOptions',
        'email_label' => '\OpenAPI\Client\Model\PostV1LabelsRequestEmailLabel',
        'references' => '\OpenAPI\Client\Model\PostV1LabelsRequestReferences',
        'order_details' => '\OpenAPI\Client\Model\PostV1LabelsRequestOrderDetails',
        'is_test_label' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'from_address' => null,
        'return_address' => null,
        'to_address' => null,
        'service_type' => null,
        'package' => null,
        'delivery_confirmation_type' => null,
        'insurance' => null,
        'customs' => null,
        'ship_date' => null,
        'is_return_label' => null,
        'advanced_options' => null,
        'label_options' => null,
        'email_label' => null,
        'references' => null,
        'order_details' => null,
        'is_test_label' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'from_address' => false,
		'return_address' => false,
		'to_address' => false,
		'service_type' => false,
		'package' => false,
		'delivery_confirmation_type' => false,
		'insurance' => false,
		'customs' => false,
		'ship_date' => false,
		'is_return_label' => false,
		'advanced_options' => false,
		'label_options' => false,
		'email_label' => false,
		'references' => false,
		'order_details' => false,
		'is_test_label' => false
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
        'from_address' => 'from_address',
        'return_address' => 'return_address',
        'to_address' => 'to_address',
        'service_type' => 'service_type',
        'package' => 'package',
        'delivery_confirmation_type' => 'delivery_confirmation_type',
        'insurance' => 'insurance',
        'customs' => 'customs',
        'ship_date' => 'ship_date',
        'is_return_label' => 'is_return_label',
        'advanced_options' => 'advanced_options',
        'label_options' => 'label_options',
        'email_label' => 'email_label',
        'references' => 'references',
        'order_details' => 'order_details',
        'is_test_label' => 'is_test_label'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'from_address' => 'setFromAddress',
        'return_address' => 'setReturnAddress',
        'to_address' => 'setToAddress',
        'service_type' => 'setServiceType',
        'package' => 'setPackage',
        'delivery_confirmation_type' => 'setDeliveryConfirmationType',
        'insurance' => 'setInsurance',
        'customs' => 'setCustoms',
        'ship_date' => 'setShipDate',
        'is_return_label' => 'setIsReturnLabel',
        'advanced_options' => 'setAdvancedOptions',
        'label_options' => 'setLabelOptions',
        'email_label' => 'setEmailLabel',
        'references' => 'setReferences',
        'order_details' => 'setOrderDetails',
        'is_test_label' => 'setIsTestLabel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'from_address' => 'getFromAddress',
        'return_address' => 'getReturnAddress',
        'to_address' => 'getToAddress',
        'service_type' => 'getServiceType',
        'package' => 'getPackage',
        'delivery_confirmation_type' => 'getDeliveryConfirmationType',
        'insurance' => 'getInsurance',
        'customs' => 'getCustoms',
        'ship_date' => 'getShipDate',
        'is_return_label' => 'getIsReturnLabel',
        'advanced_options' => 'getAdvancedOptions',
        'label_options' => 'getLabelOptions',
        'email_label' => 'getEmailLabel',
        'references' => 'getReferences',
        'order_details' => 'getOrderDetails',
        'is_test_label' => 'getIsTestLabel'
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
    public const DELIVERY_CONFIRMATION_TYPE_NONE = 'none';
    public const DELIVERY_CONFIRMATION_TYPE_TRACKING = 'tracking';
    public const DELIVERY_CONFIRMATION_TYPE_SIGNATURE = 'signature';
    public const DELIVERY_CONFIRMATION_TYPE_ADULT_SIGNATURE = 'adult_signature';
    public const DELIVERY_CONFIRMATION_TYPE_DIRECT_SIGNATURE = 'direct_signature';
    public const DELIVERY_CONFIRMATION_TYPE_DELIVERY_CONFIRMATION_MAILED = 'delivery_confirmation_mailed';

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
    public function getDeliveryConfirmationTypeAllowableValues()
    {
        return [
            self::DELIVERY_CONFIRMATION_TYPE_NONE,
            self::DELIVERY_CONFIRMATION_TYPE_TRACKING,
            self::DELIVERY_CONFIRMATION_TYPE_SIGNATURE,
            self::DELIVERY_CONFIRMATION_TYPE_ADULT_SIGNATURE,
            self::DELIVERY_CONFIRMATION_TYPE_DIRECT_SIGNATURE,
            self::DELIVERY_CONFIRMATION_TYPE_DELIVERY_CONFIRMATION_MAILED,
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
        $this->setIfExists('from_address', $data ?? [], null);
        $this->setIfExists('return_address', $data ?? [], null);
        $this->setIfExists('to_address', $data ?? [], null);
        $this->setIfExists('service_type', $data ?? [], null);
        $this->setIfExists('package', $data ?? [], null);
        $this->setIfExists('delivery_confirmation_type', $data ?? [], null);
        $this->setIfExists('insurance', $data ?? [], null);
        $this->setIfExists('customs', $data ?? [], null);
        $this->setIfExists('ship_date', $data ?? [], null);
        $this->setIfExists('is_return_label', $data ?? [], null);
        $this->setIfExists('advanced_options', $data ?? [], null);
        $this->setIfExists('label_options', $data ?? [], null);
        $this->setIfExists('email_label', $data ?? [], null);
        $this->setIfExists('references', $data ?? [], null);
        $this->setIfExists('order_details', $data ?? [], null);
        $this->setIfExists('is_test_label', $data ?? [], false);
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

        $allowedValues = $this->getServiceTypeAllowableValues();
        if (!is_null($this->container['service_type']) && !in_array($this->container['service_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'service_type', must be one of '%s'",
                $this->container['service_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDeliveryConfirmationTypeAllowableValues();
        if (!is_null($this->container['delivery_confirmation_type']) && !in_array($this->container['delivery_confirmation_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'delivery_confirmation_type', must be one of '%s'",
                $this->container['delivery_confirmation_type'],
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
     * Gets from_address
     *
     * @return \OpenAPI\Client\Model\Address|null
     */
    public function getFromAddress()
    {
        return $this->container['from_address'];
    }

    /**
     * Sets from_address
     *
     * @param \OpenAPI\Client\Model\Address|null $from_address from_address
     *
     * @return self
     */
    public function setFromAddress($from_address)
    {
        if (is_null($from_address)) {
            throw new \InvalidArgumentException('non-nullable from_address cannot be null');
        }
        $this->container['from_address'] = $from_address;

        return $this;
    }

    /**
     * Gets return_address
     *
     * @return \OpenAPI\Client\Model\Address|null
     */
    public function getReturnAddress()
    {
        return $this->container['return_address'];
    }

    /**
     * Sets return_address
     *
     * @param \OpenAPI\Client\Model\Address|null $return_address return_address
     *
     * @return self
     */
    public function setReturnAddress($return_address)
    {
        if (is_null($return_address)) {
            throw new \InvalidArgumentException('non-nullable return_address cannot be null');
        }
        $this->container['return_address'] = $return_address;

        return $this;
    }

    /**
     * Gets to_address
     *
     * @return \OpenAPI\Client\Model\Address|null
     */
    public function getToAddress()
    {
        return $this->container['to_address'];
    }

    /**
     * Sets to_address
     *
     * @param \OpenAPI\Client\Model\Address|null $to_address to_address
     *
     * @return self
     */
    public function setToAddress($to_address)
    {
        if (is_null($to_address)) {
            throw new \InvalidArgumentException('non-nullable to_address cannot be null');
        }
        $this->container['to_address'] = $to_address;

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
     * Gets package
     *
     * @return \OpenAPI\Client\Model\Package|null
     */
    public function getPackage()
    {
        return $this->container['package'];
    }

    /**
     * Sets package
     *
     * @param \OpenAPI\Client\Model\Package|null $package package
     *
     * @return self
     */
    public function setPackage($package)
    {
        if (is_null($package)) {
            throw new \InvalidArgumentException('non-nullable package cannot be null');
        }
        $this->container['package'] = $package;

        return $this;
    }

    /**
     * Gets delivery_confirmation_type
     *
     * @return string|null
     */
    public function getDeliveryConfirmationType()
    {
        return $this->container['delivery_confirmation_type'];
    }

    /**
     * Sets delivery_confirmation_type
     *
     * @param string|null $delivery_confirmation_type _Delivery Confirmation Type_
     *
     * @return self
     */
    public function setDeliveryConfirmationType($delivery_confirmation_type)
    {
        if (is_null($delivery_confirmation_type)) {
            throw new \InvalidArgumentException('non-nullable delivery_confirmation_type cannot be null');
        }
        $allowedValues = $this->getDeliveryConfirmationTypeAllowableValues();
        if (!in_array($delivery_confirmation_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'delivery_confirmation_type', must be one of '%s'",
                    $delivery_confirmation_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['delivery_confirmation_type'] = $delivery_confirmation_type;

        return $this;
    }

    /**
     * Gets insurance
     *
     * @return \OpenAPI\Client\Model\PostV1LabelsRequestInsurance|null
     */
    public function getInsurance()
    {
        return $this->container['insurance'];
    }

    /**
     * Sets insurance
     *
     * @param \OpenAPI\Client\Model\PostV1LabelsRequestInsurance|null $insurance insurance
     *
     * @return self
     */
    public function setInsurance($insurance)
    {
        if (is_null($insurance)) {
            throw new \InvalidArgumentException('non-nullable insurance cannot be null');
        }
        $this->container['insurance'] = $insurance;

        return $this;
    }

    /**
     * Gets customs
     *
     * @return \OpenAPI\Client\Model\Customs|null
     */
    public function getCustoms()
    {
        return $this->container['customs'];
    }

    /**
     * Sets customs
     *
     * @param \OpenAPI\Client\Model\Customs|null $customs customs
     *
     * @return self
     */
    public function setCustoms($customs)
    {
        if (is_null($customs)) {
            throw new \InvalidArgumentException('non-nullable customs cannot be null');
        }
        $this->container['customs'] = $customs;

        return $this;
    }

    /**
     * Gets ship_date
     *
     * @return string|null
     */
    public function getShipDate()
    {
        return $this->container['ship_date'];
    }

    /**
     * Sets ship_date
     *
     * @param string|null $ship_date _Ship Date_
     *
     * @return self
     */
    public function setShipDate($ship_date)
    {
        if (is_null($ship_date)) {
            throw new \InvalidArgumentException('non-nullable ship_date cannot be null');
        }
        $this->container['ship_date'] = $ship_date;

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
     * Gets advanced_options
     *
     * @return \OpenAPI\Client\Model\AdvancedOptions|null
     */
    public function getAdvancedOptions()
    {
        return $this->container['advanced_options'];
    }

    /**
     * Sets advanced_options
     *
     * @param \OpenAPI\Client\Model\AdvancedOptions|null $advanced_options advanced_options
     *
     * @return self
     */
    public function setAdvancedOptions($advanced_options)
    {
        if (is_null($advanced_options)) {
            throw new \InvalidArgumentException('non-nullable advanced_options cannot be null');
        }
        $this->container['advanced_options'] = $advanced_options;

        return $this;
    }

    /**
     * Gets label_options
     *
     * @return \OpenAPI\Client\Model\LabelOptions|null
     */
    public function getLabelOptions()
    {
        return $this->container['label_options'];
    }

    /**
     * Sets label_options
     *
     * @param \OpenAPI\Client\Model\LabelOptions|null $label_options label_options
     *
     * @return self
     */
    public function setLabelOptions($label_options)
    {
        if (is_null($label_options)) {
            throw new \InvalidArgumentException('non-nullable label_options cannot be null');
        }
        $this->container['label_options'] = $label_options;

        return $this;
    }

    /**
     * Gets email_label
     *
     * @return \OpenAPI\Client\Model\PostV1LabelsRequestEmailLabel|null
     */
    public function getEmailLabel()
    {
        return $this->container['email_label'];
    }

    /**
     * Sets email_label
     *
     * @param \OpenAPI\Client\Model\PostV1LabelsRequestEmailLabel|null $email_label email_label
     *
     * @return self
     */
    public function setEmailLabel($email_label)
    {
        if (is_null($email_label)) {
            throw new \InvalidArgumentException('non-nullable email_label cannot be null');
        }
        $this->container['email_label'] = $email_label;

        return $this;
    }

    /**
     * Gets references
     *
     * @return \OpenAPI\Client\Model\PostV1LabelsRequestReferences|null
     */
    public function getReferences()
    {
        return $this->container['references'];
    }

    /**
     * Sets references
     *
     * @param \OpenAPI\Client\Model\PostV1LabelsRequestReferences|null $references references
     *
     * @return self
     */
    public function setReferences($references)
    {
        if (is_null($references)) {
            throw new \InvalidArgumentException('non-nullable references cannot be null');
        }
        $this->container['references'] = $references;

        return $this;
    }

    /**
     * Gets order_details
     *
     * @return \OpenAPI\Client\Model\PostV1LabelsRequestOrderDetails|null
     */
    public function getOrderDetails()
    {
        return $this->container['order_details'];
    }

    /**
     * Sets order_details
     *
     * @param \OpenAPI\Client\Model\PostV1LabelsRequestOrderDetails|null $order_details order_details
     *
     * @return self
     */
    public function setOrderDetails($order_details)
    {
        if (is_null($order_details)) {
            throw new \InvalidArgumentException('non-nullable order_details cannot be null');
        }
        $this->container['order_details'] = $order_details;

        return $this;
    }

    /**
     * Gets is_test_label
     *
     * @return bool|null
     */
    public function getIsTestLabel()
    {
        return $this->container['is_test_label'];
    }

    /**
     * Sets is_test_label
     *
     * @param bool|null $is_test_label _Is Test Label_<br/>Set to `true` to generate a test/sample label with no account charge
     *
     * @return self
     */
    public function setIsTestLabel($is_test_label)
    {
        if (is_null($is_test_label)) {
            throw new \InvalidArgumentException('non-nullable is_test_label cannot be null');
        }
        $this->container['is_test_label'] = $is_test_label;

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


