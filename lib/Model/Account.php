<?php
/**
 * Account
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
 * Account Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Account implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'account';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'customer_id' => 'int',
        'user_id' => 'int',
        'account_id' => 'float',
        'corporation_id' => 'int',
        'account_status' => 'string',
        'gmt_offset_minutes' => 'string',
        'daylight_savings_time' => 'bool',
        'meter_details' => '\OpenAPI\Client\Model\MeterDetails',
        'terms' => '\OpenAPI\Client\Model\Terms',
        'customer_details' => '\OpenAPI\Client\Model\CustomerDetails',
        'capabilities' => 'string[]',
        'plan_details' => '\OpenAPI\Client\Model\PlanDetails',
        'globalpost' => '\OpenAPI\Client\Model\Globalpost',
        'pay_on_use_details' => '\OpenAPI\Client\Model\PayOnUseDetails',
        'configured_carriers' => '\OpenAPI\Client\Model\ConfiguredCarrier[]',
        'date_advance' => '\OpenAPI\Client\Model\DateAdvance',
        'internal_account_details' => '\OpenAPI\Client\Model\InternalAccountDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'customer_id' => null,
        'user_id' => null,
        'account_id' => null,
        'corporation_id' => null,
        'account_status' => null,
        'gmt_offset_minutes' => null,
        'daylight_savings_time' => null,
        'meter_details' => null,
        'terms' => null,
        'customer_details' => null,
        'capabilities' => null,
        'plan_details' => null,
        'globalpost' => null,
        'pay_on_use_details' => null,
        'configured_carriers' => null,
        'date_advance' => null,
        'internal_account_details' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'customer_id' => false,
		'user_id' => false,
		'account_id' => false,
		'corporation_id' => false,
		'account_status' => false,
		'gmt_offset_minutes' => false,
		'daylight_savings_time' => false,
		'meter_details' => false,
		'terms' => false,
		'customer_details' => false,
		'capabilities' => false,
		'plan_details' => false,
		'globalpost' => false,
		'pay_on_use_details' => false,
		'configured_carriers' => false,
		'date_advance' => false,
		'internal_account_details' => false
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
        'customer_id' => 'customer_id',
        'user_id' => 'user_id',
        'account_id' => 'account_id',
        'corporation_id' => 'corporation_id',
        'account_status' => 'account_status',
        'gmt_offset_minutes' => 'gmt_offset_minutes',
        'daylight_savings_time' => 'daylight_savings_time',
        'meter_details' => 'meter_details',
        'terms' => 'terms',
        'customer_details' => 'customer_details',
        'capabilities' => 'capabilities',
        'plan_details' => 'plan_details',
        'globalpost' => 'globalpost',
        'pay_on_use_details' => 'pay_on_use_details',
        'configured_carriers' => 'configured_carriers',
        'date_advance' => 'date_advance',
        'internal_account_details' => 'internal_account_details'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customer_id' => 'setCustomerId',
        'user_id' => 'setUserId',
        'account_id' => 'setAccountId',
        'corporation_id' => 'setCorporationId',
        'account_status' => 'setAccountStatus',
        'gmt_offset_minutes' => 'setGmtOffsetMinutes',
        'daylight_savings_time' => 'setDaylightSavingsTime',
        'meter_details' => 'setMeterDetails',
        'terms' => 'setTerms',
        'customer_details' => 'setCustomerDetails',
        'capabilities' => 'setCapabilities',
        'plan_details' => 'setPlanDetails',
        'globalpost' => 'setGlobalpost',
        'pay_on_use_details' => 'setPayOnUseDetails',
        'configured_carriers' => 'setConfiguredCarriers',
        'date_advance' => 'setDateAdvance',
        'internal_account_details' => 'setInternalAccountDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customer_id' => 'getCustomerId',
        'user_id' => 'getUserId',
        'account_id' => 'getAccountId',
        'corporation_id' => 'getCorporationId',
        'account_status' => 'getAccountStatus',
        'gmt_offset_minutes' => 'getGmtOffsetMinutes',
        'daylight_savings_time' => 'getDaylightSavingsTime',
        'meter_details' => 'getMeterDetails',
        'terms' => 'getTerms',
        'customer_details' => 'getCustomerDetails',
        'capabilities' => 'getCapabilities',
        'plan_details' => 'getPlanDetails',
        'globalpost' => 'getGlobalpost',
        'pay_on_use_details' => 'getPayOnUseDetails',
        'configured_carriers' => 'getConfiguredCarriers',
        'date_advance' => 'getDateAdvance',
        'internal_account_details' => 'getInternalAccountDetails'
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

    public const ACCOUNT_STATUS_ADMIN_HOLD = 'admin_hold';
    public const ACCOUNT_STATUS_ADMIN_HOLD_SELF_RELEASE = 'admin_hold_self_release';
    public const ACCOUNT_STATUS_ACTIVE = 'active';
    public const ACCOUNT_STATUS_PENDING_CLOSURE = 'pending_closure';
    public const ACCOUNT_STATUS_PHONE_VERIFICATION_REQUIRED = 'phone_verification_required';
    public const CAPABILITIES_AUTO_PICKUP_USPS = 'auto_pickup_usps';
    public const CAPABILITIES_INSTALABEL = 'instalabel';
    public const CAPABILITIES_CANADA_POST = 'canada_post';
    public const CAPABILITIES_GP_DOMESTIC = 'gp_domestic';
    public const CAPABILITIES_UPS = 'ups';
    public const CAPABILITIES_FCMI_FLAT_DEL_CON = 'fcmi_flat_del_con';
    public const CAPABILITIES_BYPASS_DOMESTIC_CUSTOMS = 'bypass_domestic_customs';
    public const CAPABILITIES_UNFUNDED_INDICIUM = 'unfunded_indicium';
    public const CAPABILITIES_ALWAYS_INCLUDE_DEFAULT_IMG_ON_SHIPPING_LABELS = 'always_include_default_img_on_shipping_labels';
    public const CAPABILITIES_PMOD = 'pmod';
    public const CAPABILITIES_PMEOD = 'pmeod';
    public const CAPABILITIES_RETAIL_GROUND = 'retail_ground';
    public const CAPABILITIES_PSLW = 'pslw';
    public const CAPABILITIES_POSTAL_OVERRIDE = 'postal_override';
    public const CAPABILITIES_GLOBAL_POST_POSTAL = 'global_post_postal';
    public const CAPABILITIES_PARCEL_GUARD_INSURANCE = 'parcel_guard_insurance';
    public const CAPABILITIES_GLOBAL_POST_PLUS = 'global_post_plus';
    public const CAPABILITIES_MAILING_LABEL = 'mailing_label';
    public const CAPABILITIES_DELAYED_MANIFESTING = 'delayed_manifesting';
    public const CAPABILITIES_ALLOW_NINE_DIGIT_BARCODE = 'allow_nine_digit_barcode';
    public const CAPABILITIES_USPS_RETURN = 'usps_return';
    public const CAPABILITIES_STANDALONE_USPS_RETURN = 'standalone_usps_return';
    public const CAPABILITIES_DELIVERY_DUTY_PAID = 'delivery_duty_paid';
    public const CAPABILITIES_MCW = 'mcw';
    public const CAPABILITIES_FEDEX = 'fedex';
    public const CAPABILITIES_FEDEX_PAY_ON_USE = 'fedex_pay_on_use';
    public const CAPABILITIES_FC_GAP = 'fc_gap';
    public const CAPABILITIES_PS_GAP = 'ps_gap';
    public const CAPABILITIES_INTL_GAP_SINGLE_PIECE = 'intl_gap_single_piece';
    public const CAPABILITIES_ELIGIBLE_FOR_FCI_GAP = 'eligible_for_fci_gap';
    public const CAPABILITIES_ELIGIBLE_FOR_PMI_GAP = 'eligible_for_pmi_gap';
    public const CAPABILITIES_ELIGIBLE_FOR_PMEI_GAP = 'eligible_for_pmei_gap';
    public const CAPABILITIES_ELIGIBLE_FOR_FC_GAP = 'eligible_for_fc_gap';
    public const CAPABILITIES_ELIGIBLE_FOR_PS_GAP = 'eligible_for_ps_gap';
    public const CAPABILITIES_ELIGIBLE_FOR_INTL_GAP_SINGLE_PIECE = 'eligible_for_intl_gap_single_piece';
    public const CAPABILITIES_ENABLE_EX_PRO_SHIPPER_ODBC = 'enable_ex_pro_shipper_odbc';
    public const CAPABILITIES_GAP_PAY_ON_USE = 'gap_pay_on_use';
    public const CAPABILITIES_CHANGE_PAYMENT_TYPE = 'change_payment_type';
    public const CAPABILITIES_DHL_EXPRESS = 'dhl_express';
    public const CAPABILITIES_DHL_EXPRESS_PAY_ON_USE = 'dhl_express_pay_on_use';
    public const CAPABILITIES_LABEL_LOGO = 'label_logo';
    public const CAPABILITIES_CLEANSE_INTL_ADDRESS = 'cleanse_intl_address';
    public const CAPABILITIES_GP_PAY_ON_USE = 'gp_pay_on_use';
    public const CAPABILITIES_GP_SMART_SAVER_PAY_ON_USE = 'gp_smart_saver_pay_on_use';
    public const CAPABILITIES_GP_SMART_SAVER = 'gp_smart_saver';
    public const CAPABILITIES_GLOBALPOST = 'globalpost';
    public const CAPABILITIES_GP_SHIP_TO_CONSOLIDATOR = 'gp_ship_to_consolidator';
    public const CAPABILITIES_USPS_MPOS_LABEL = 'usps_mpos_label';
    public const CAPABILITIES_DISABLE_CONVERSION_TOKEN = 'disable_conversion_token';
    public const CAPABILITIES_CERTIFIED_MAIL = 'certified_mail';
    public const CAPABILITIES_INVOICING = 'invoicing';
    public const CAPABILITIES_CREATE_CRITICAL_MAIL = 'create_critical_mail';
    public const CAPABILITIES_ENVELOPES = 'envelopes';
    public const CAPABILITIES_RETURN_SHIPPING_LABEL = 'return_shipping_label';
    public const CAPABILITIES_MANAGE_USERS = 'manage_users';
    public const CAPABILITIES_NET_STAMPS = 'net_stamps';
    public const CAPABILITIES_EMAIL_NOTIFICATIONS = 'email_notifications';
    public const CAPABILITIES_SCANFORM = 'scanform';
    public const CAPABILITIES_CHANGE_SERVICE_PLAN = 'change_service_plan';
    public const CAPABILITIES_CHANGE_PAYMENT_METHOD = 'change_payment_method';
    public const CAPABILITIES_SHIPPING = 'shipping';
    public const CAPABILITIES_COST_CODES = 'cost_codes';
    public const CAPABILITIES_HIDDEN_POSTAGE = 'hidden_postage';
    public const CAPABILITIES_STAMPS_COM_INSURANCE = 'stamps_com_insurance';
    public const CAPABILITIES_MEMO_ON_SHIPPING_LABEL = 'memo_on_shipping_label';
    public const CAPABILITIES_INTERNATIONAL = 'international';
    public const CAPABILITIES_ADD_FUNDS = 'add_funds';
    public const CAPABILITIES_USPS_RETURN_SERVICE_PREPAID = 'usps_return_service_prepaid';
    public const CAPABILITIES_UPS_PAY_ON_USE_RETURNS = 'ups_pay_on_use_returns';
    public const CAPABILITIES_UPS_RETURNS = 'ups_returns';
    public const CAPABILITIES_UPS_STANDALONE_PAY_ON_USE_RETURNS = 'ups_standalone_pay_on_use_returns';
    public const CAPABILITIES_BRANDED_TRACKING_SMS_SUPPORT = 'branded_tracking_sms_support';
    public const CAPABILITIES_PPL = 'ppl';
    public const CAPABILITIES_DHL_ECOMMERCE = 'dhl_ecommerce';
    public const CAPABILITIES_USPS_RETURN_SERVICE = 'usps_return_service';
    public const CAPABILITIES_EXPORT_PRINT_HISTORY = 'export_print_history';
    public const CAPABILITIES_SCHEDULE_REPORTS = 'schedule_reports';
    public const CAPABILITIES_USE_RATE_ADVISOR = 'use_rate_advisor';
    public const CAPABILITIES_BRANDED_EMAILS = 'branded_emails';
    public const CAPABILITIES_AUTOMATION_RULES = 'automation_rules';
    public const CAPABILITIES_ADVANCED_AUTOMATION_RULES = 'advanced_automation_rules';
    public const CAPABILITIES_FBA = 'fba';
    public const CAPABILITIES_BRANDED_TRACKING = 'branded_tracking';
    public const CAPABILITIES_VIEW_ONLINE_REPORTS = 'view_online_reports';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAccountStatusAllowableValues()
    {
        return [
            self::ACCOUNT_STATUS_ADMIN_HOLD,
            self::ACCOUNT_STATUS_ADMIN_HOLD_SELF_RELEASE,
            self::ACCOUNT_STATUS_ACTIVE,
            self::ACCOUNT_STATUS_PENDING_CLOSURE,
            self::ACCOUNT_STATUS_PHONE_VERIFICATION_REQUIRED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCapabilitiesAllowableValues()
    {
        return [
            self::CAPABILITIES_AUTO_PICKUP_USPS,
            self::CAPABILITIES_INSTALABEL,
            self::CAPABILITIES_CANADA_POST,
            self::CAPABILITIES_GP_DOMESTIC,
            self::CAPABILITIES_UPS,
            self::CAPABILITIES_FCMI_FLAT_DEL_CON,
            self::CAPABILITIES_BYPASS_DOMESTIC_CUSTOMS,
            self::CAPABILITIES_UNFUNDED_INDICIUM,
            self::CAPABILITIES_ALWAYS_INCLUDE_DEFAULT_IMG_ON_SHIPPING_LABELS,
            self::CAPABILITIES_PMOD,
            self::CAPABILITIES_PMEOD,
            self::CAPABILITIES_RETAIL_GROUND,
            self::CAPABILITIES_PSLW,
            self::CAPABILITIES_POSTAL_OVERRIDE,
            self::CAPABILITIES_GLOBAL_POST_POSTAL,
            self::CAPABILITIES_PARCEL_GUARD_INSURANCE,
            self::CAPABILITIES_GLOBAL_POST_PLUS,
            self::CAPABILITIES_MAILING_LABEL,
            self::CAPABILITIES_DELAYED_MANIFESTING,
            self::CAPABILITIES_ALLOW_NINE_DIGIT_BARCODE,
            self::CAPABILITIES_USPS_RETURN,
            self::CAPABILITIES_STANDALONE_USPS_RETURN,
            self::CAPABILITIES_DELIVERY_DUTY_PAID,
            self::CAPABILITIES_MCW,
            self::CAPABILITIES_FEDEX,
            self::CAPABILITIES_FEDEX_PAY_ON_USE,
            self::CAPABILITIES_FC_GAP,
            self::CAPABILITIES_PS_GAP,
            self::CAPABILITIES_INTL_GAP_SINGLE_PIECE,
            self::CAPABILITIES_ELIGIBLE_FOR_FCI_GAP,
            self::CAPABILITIES_ELIGIBLE_FOR_PMI_GAP,
            self::CAPABILITIES_ELIGIBLE_FOR_PMEI_GAP,
            self::CAPABILITIES_ELIGIBLE_FOR_FC_GAP,
            self::CAPABILITIES_ELIGIBLE_FOR_PS_GAP,
            self::CAPABILITIES_ELIGIBLE_FOR_INTL_GAP_SINGLE_PIECE,
            self::CAPABILITIES_ENABLE_EX_PRO_SHIPPER_ODBC,
            self::CAPABILITIES_GAP_PAY_ON_USE,
            self::CAPABILITIES_CHANGE_PAYMENT_TYPE,
            self::CAPABILITIES_DHL_EXPRESS,
            self::CAPABILITIES_DHL_EXPRESS_PAY_ON_USE,
            self::CAPABILITIES_LABEL_LOGO,
            self::CAPABILITIES_CLEANSE_INTL_ADDRESS,
            self::CAPABILITIES_GP_PAY_ON_USE,
            self::CAPABILITIES_GP_SMART_SAVER_PAY_ON_USE,
            self::CAPABILITIES_GP_SMART_SAVER,
            self::CAPABILITIES_GLOBALPOST,
            self::CAPABILITIES_GP_SHIP_TO_CONSOLIDATOR,
            self::CAPABILITIES_USPS_MPOS_LABEL,
            self::CAPABILITIES_DISABLE_CONVERSION_TOKEN,
            self::CAPABILITIES_CERTIFIED_MAIL,
            self::CAPABILITIES_INVOICING,
            self::CAPABILITIES_CREATE_CRITICAL_MAIL,
            self::CAPABILITIES_ENVELOPES,
            self::CAPABILITIES_RETURN_SHIPPING_LABEL,
            self::CAPABILITIES_MANAGE_USERS,
            self::CAPABILITIES_NET_STAMPS,
            self::CAPABILITIES_EMAIL_NOTIFICATIONS,
            self::CAPABILITIES_SCANFORM,
            self::CAPABILITIES_CHANGE_SERVICE_PLAN,
            self::CAPABILITIES_CHANGE_PAYMENT_METHOD,
            self::CAPABILITIES_SHIPPING,
            self::CAPABILITIES_COST_CODES,
            self::CAPABILITIES_HIDDEN_POSTAGE,
            self::CAPABILITIES_STAMPS_COM_INSURANCE,
            self::CAPABILITIES_MEMO_ON_SHIPPING_LABEL,
            self::CAPABILITIES_INTERNATIONAL,
            self::CAPABILITIES_ADD_FUNDS,
            self::CAPABILITIES_USPS_RETURN_SERVICE_PREPAID,
            self::CAPABILITIES_UPS_PAY_ON_USE_RETURNS,
            self::CAPABILITIES_UPS_RETURNS,
            self::CAPABILITIES_UPS_STANDALONE_PAY_ON_USE_RETURNS,
            self::CAPABILITIES_BRANDED_TRACKING_SMS_SUPPORT,
            self::CAPABILITIES_PPL,
            self::CAPABILITIES_DHL_ECOMMERCE,
            self::CAPABILITIES_USPS_RETURN_SERVICE,
            self::CAPABILITIES_EXPORT_PRINT_HISTORY,
            self::CAPABILITIES_SCHEDULE_REPORTS,
            self::CAPABILITIES_USE_RATE_ADVISOR,
            self::CAPABILITIES_BRANDED_EMAILS,
            self::CAPABILITIES_AUTOMATION_RULES,
            self::CAPABILITIES_ADVANCED_AUTOMATION_RULES,
            self::CAPABILITIES_FBA,
            self::CAPABILITIES_BRANDED_TRACKING,
            self::CAPABILITIES_VIEW_ONLINE_REPORTS,
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
        $this->setIfExists('customer_id', $data ?? [], null);
        $this->setIfExists('user_id', $data ?? [], null);
        $this->setIfExists('account_id', $data ?? [], null);
        $this->setIfExists('corporation_id', $data ?? [], null);
        $this->setIfExists('account_status', $data ?? [], null);
        $this->setIfExists('gmt_offset_minutes', $data ?? [], null);
        $this->setIfExists('daylight_savings_time', $data ?? [], null);
        $this->setIfExists('meter_details', $data ?? [], null);
        $this->setIfExists('terms', $data ?? [], null);
        $this->setIfExists('customer_details', $data ?? [], null);
        $this->setIfExists('capabilities', $data ?? [], null);
        $this->setIfExists('plan_details', $data ?? [], null);
        $this->setIfExists('globalpost', $data ?? [], null);
        $this->setIfExists('pay_on_use_details', $data ?? [], null);
        $this->setIfExists('configured_carriers', $data ?? [], null);
        $this->setIfExists('date_advance', $data ?? [], null);
        $this->setIfExists('internal_account_details', $data ?? [], null);
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

        $allowedValues = $this->getAccountStatusAllowableValues();
        if (!is_null($this->container['account_status']) && !in_array($this->container['account_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'account_status', must be one of '%s'",
                $this->container['account_status'],
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
     * Gets customer_id
     *
     * @return int|null
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param int|null $customer_id _Customer ID_
     *
     * @return self
     */
    public function setCustomerId($customer_id)
    {
        if (is_null($customer_id)) {
            throw new \InvalidArgumentException('non-nullable customer_id cannot be null');
        }
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return int|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int|null $user_id _User ID_
     *
     * @return self
     */
    public function setUserId($user_id)
    {
        if (is_null($user_id)) {
            throw new \InvalidArgumentException('non-nullable user_id cannot be null');
        }
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets account_id
     *
     * @return float|null
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param float|null $account_id _Account ID_
     *
     * @return self
     */
    public function setAccountId($account_id)
    {
        if (is_null($account_id)) {
            throw new \InvalidArgumentException('non-nullable account_id cannot be null');
        }
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets corporation_id
     *
     * @return int|null
     */
    public function getCorporationId()
    {
        return $this->container['corporation_id'];
    }

    /**
     * Sets corporation_id
     *
     * @param int|null $corporation_id _Corporation ID_
     *
     * @return self
     */
    public function setCorporationId($corporation_id)
    {
        if (is_null($corporation_id)) {
            throw new \InvalidArgumentException('non-nullable corporation_id cannot be null');
        }
        $this->container['corporation_id'] = $corporation_id;

        return $this;
    }

    /**
     * Gets account_status
     *
     * @return string|null
     */
    public function getAccountStatus()
    {
        return $this->container['account_status'];
    }

    /**
     * Sets account_status
     *
     * @param string|null $account_status _Account Status_
     *
     * @return self
     */
    public function setAccountStatus($account_status)
    {
        if (is_null($account_status)) {
            throw new \InvalidArgumentException('non-nullable account_status cannot be null');
        }
        $allowedValues = $this->getAccountStatusAllowableValues();
        if (!in_array($account_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'account_status', must be one of '%s'",
                    $account_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['account_status'] = $account_status;

        return $this;
    }

    /**
     * Gets gmt_offset_minutes
     *
     * @return string|null
     */
    public function getGmtOffsetMinutes()
    {
        return $this->container['gmt_offset_minutes'];
    }

    /**
     * Sets gmt_offset_minutes
     *
     * @param string|null $gmt_offset_minutes _GMT Offset (Minutes)_
     *
     * @return self
     */
    public function setGmtOffsetMinutes($gmt_offset_minutes)
    {
        if (is_null($gmt_offset_minutes)) {
            throw new \InvalidArgumentException('non-nullable gmt_offset_minutes cannot be null');
        }
        $this->container['gmt_offset_minutes'] = $gmt_offset_minutes;

        return $this;
    }

    /**
     * Gets daylight_savings_time
     *
     * @return bool|null
     */
    public function getDaylightSavingsTime()
    {
        return $this->container['daylight_savings_time'];
    }

    /**
     * Sets daylight_savings_time
     *
     * @param bool|null $daylight_savings_time _Daylight Savings Time_
     *
     * @return self
     */
    public function setDaylightSavingsTime($daylight_savings_time)
    {
        if (is_null($daylight_savings_time)) {
            throw new \InvalidArgumentException('non-nullable daylight_savings_time cannot be null');
        }
        $this->container['daylight_savings_time'] = $daylight_savings_time;

        return $this;
    }

    /**
     * Gets meter_details
     *
     * @return \OpenAPI\Client\Model\MeterDetails|null
     */
    public function getMeterDetails()
    {
        return $this->container['meter_details'];
    }

    /**
     * Sets meter_details
     *
     * @param \OpenAPI\Client\Model\MeterDetails|null $meter_details meter_details
     *
     * @return self
     */
    public function setMeterDetails($meter_details)
    {
        if (is_null($meter_details)) {
            throw new \InvalidArgumentException('non-nullable meter_details cannot be null');
        }
        $this->container['meter_details'] = $meter_details;

        return $this;
    }

    /**
     * Gets terms
     *
     * @return \OpenAPI\Client\Model\Terms|null
     */
    public function getTerms()
    {
        return $this->container['terms'];
    }

    /**
     * Sets terms
     *
     * @param \OpenAPI\Client\Model\Terms|null $terms terms
     *
     * @return self
     */
    public function setTerms($terms)
    {
        if (is_null($terms)) {
            throw new \InvalidArgumentException('non-nullable terms cannot be null');
        }
        $this->container['terms'] = $terms;

        return $this;
    }

    /**
     * Gets customer_details
     *
     * @return \OpenAPI\Client\Model\CustomerDetails|null
     */
    public function getCustomerDetails()
    {
        return $this->container['customer_details'];
    }

    /**
     * Sets customer_details
     *
     * @param \OpenAPI\Client\Model\CustomerDetails|null $customer_details customer_details
     *
     * @return self
     */
    public function setCustomerDetails($customer_details)
    {
        if (is_null($customer_details)) {
            throw new \InvalidArgumentException('non-nullable customer_details cannot be null');
        }
        $this->container['customer_details'] = $customer_details;

        return $this;
    }

    /**
     * Gets capabilities
     *
     * @return string[]|null
     */
    public function getCapabilities()
    {
        return $this->container['capabilities'];
    }

    /**
     * Sets capabilities
     *
     * @param string[]|null $capabilities _Capabilities_
     *
     * @return self
     */
    public function setCapabilities($capabilities)
    {
        if (is_null($capabilities)) {
            throw new \InvalidArgumentException('non-nullable capabilities cannot be null');
        }
        $allowedValues = $this->getCapabilitiesAllowableValues();
        if (array_diff($capabilities, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'capabilities', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['capabilities'] = $capabilities;

        return $this;
    }

    /**
     * Gets plan_details
     *
     * @return \OpenAPI\Client\Model\PlanDetails|null
     */
    public function getPlanDetails()
    {
        return $this->container['plan_details'];
    }

    /**
     * Sets plan_details
     *
     * @param \OpenAPI\Client\Model\PlanDetails|null $plan_details plan_details
     *
     * @return self
     */
    public function setPlanDetails($plan_details)
    {
        if (is_null($plan_details)) {
            throw new \InvalidArgumentException('non-nullable plan_details cannot be null');
        }
        $this->container['plan_details'] = $plan_details;

        return $this;
    }

    /**
     * Gets globalpost
     *
     * @return \OpenAPI\Client\Model\Globalpost|null
     */
    public function getGlobalpost()
    {
        return $this->container['globalpost'];
    }

    /**
     * Sets globalpost
     *
     * @param \OpenAPI\Client\Model\Globalpost|null $globalpost globalpost
     *
     * @return self
     */
    public function setGlobalpost($globalpost)
    {
        if (is_null($globalpost)) {
            throw new \InvalidArgumentException('non-nullable globalpost cannot be null');
        }
        $this->container['globalpost'] = $globalpost;

        return $this;
    }

    /**
     * Gets pay_on_use_details
     *
     * @return \OpenAPI\Client\Model\PayOnUseDetails|null
     */
    public function getPayOnUseDetails()
    {
        return $this->container['pay_on_use_details'];
    }

    /**
     * Sets pay_on_use_details
     *
     * @param \OpenAPI\Client\Model\PayOnUseDetails|null $pay_on_use_details pay_on_use_details
     *
     * @return self
     */
    public function setPayOnUseDetails($pay_on_use_details)
    {
        if (is_null($pay_on_use_details)) {
            throw new \InvalidArgumentException('non-nullable pay_on_use_details cannot be null');
        }
        $this->container['pay_on_use_details'] = $pay_on_use_details;

        return $this;
    }

    /**
     * Gets configured_carriers
     *
     * @return \OpenAPI\Client\Model\ConfiguredCarrier[]|null
     */
    public function getConfiguredCarriers()
    {
        return $this->container['configured_carriers'];
    }

    /**
     * Sets configured_carriers
     *
     * @param \OpenAPI\Client\Model\ConfiguredCarrier[]|null $configured_carriers _Configured Carriers_
     *
     * @return self
     */
    public function setConfiguredCarriers($configured_carriers)
    {
        if (is_null($configured_carriers)) {
            throw new \InvalidArgumentException('non-nullable configured_carriers cannot be null');
        }
        $this->container['configured_carriers'] = $configured_carriers;

        return $this;
    }

    /**
     * Gets date_advance
     *
     * @return \OpenAPI\Client\Model\DateAdvance|null
     */
    public function getDateAdvance()
    {
        return $this->container['date_advance'];
    }

    /**
     * Sets date_advance
     *
     * @param \OpenAPI\Client\Model\DateAdvance|null $date_advance date_advance
     *
     * @return self
     */
    public function setDateAdvance($date_advance)
    {
        if (is_null($date_advance)) {
            throw new \InvalidArgumentException('non-nullable date_advance cannot be null');
        }
        $this->container['date_advance'] = $date_advance;

        return $this;
    }

    /**
     * Gets internal_account_details
     *
     * @return \OpenAPI\Client\Model\InternalAccountDetails|null
     */
    public function getInternalAccountDetails()
    {
        return $this->container['internal_account_details'];
    }

    /**
     * Sets internal_account_details
     *
     * @param \OpenAPI\Client\Model\InternalAccountDetails|null $internal_account_details internal_account_details
     *
     * @return self
     */
    public function setInternalAccountDetails($internal_account_details)
    {
        if (is_null($internal_account_details)) {
            throw new \InvalidArgumentException('non-nullable internal_account_details cannot be null');
        }
        $this->container['internal_account_details'] = $internal_account_details;

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


