<?php
/**
 * InternalAccountDetails
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
 * InternalAccountDetails Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class InternalAccountDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'internal_account_details';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'usps_rep' => 'bool',
        'merchant' => 'string',
        'endicia_ported_user' => 'bool',
        'balance_id' => 'string',
        'rateset_type' => 'string',
        'rateset_id' => 'string',
        'internal_capabilities' => 'string[]',
        'rate_token' => 'string',
        'customer_data' => 'string',
        'resubmit' => '\OpenAPI\Client\Model\Resubmit'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'usps_rep' => null,
        'merchant' => null,
        'endicia_ported_user' => null,
        'balance_id' => null,
        'rateset_type' => null,
        'rateset_id' => null,
        'internal_capabilities' => null,
        'rate_token' => null,
        'customer_data' => null,
        'resubmit' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'usps_rep' => false,
		'merchant' => false,
		'endicia_ported_user' => false,
		'balance_id' => false,
		'rateset_type' => false,
		'rateset_id' => false,
		'internal_capabilities' => false,
		'rate_token' => false,
		'customer_data' => false,
		'resubmit' => false
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
        'usps_rep' => 'usps_rep',
        'merchant' => 'merchant',
        'endicia_ported_user' => 'endicia_ported_user',
        'balance_id' => 'balance_id',
        'rateset_type' => 'rateset_type',
        'rateset_id' => 'rateset_id',
        'internal_capabilities' => 'internal_capabilities',
        'rate_token' => 'rate_token',
        'customer_data' => 'customer_data',
        'resubmit' => 'resubmit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'usps_rep' => 'setUspsRep',
        'merchant' => 'setMerchant',
        'endicia_ported_user' => 'setEndiciaPortedUser',
        'balance_id' => 'setBalanceId',
        'rateset_type' => 'setRatesetType',
        'rateset_id' => 'setRatesetId',
        'internal_capabilities' => 'setInternalCapabilities',
        'rate_token' => 'setRateToken',
        'customer_data' => 'setCustomerData',
        'resubmit' => 'setResubmit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'usps_rep' => 'getUspsRep',
        'merchant' => 'getMerchant',
        'endicia_ported_user' => 'getEndiciaPortedUser',
        'balance_id' => 'getBalanceId',
        'rateset_type' => 'getRatesetType',
        'rateset_id' => 'getRatesetId',
        'internal_capabilities' => 'getInternalCapabilities',
        'rate_token' => 'getRateToken',
        'customer_data' => 'getCustomerData',
        'resubmit' => 'getResubmit'
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

    public const MERCHANT_STAMPS = 'stamps';
    public const MERCHANT_ENDICIA = 'endicia';
    public const MERCHANT_SHIPWORKS = 'shipworks';
    public const MERCHANT_SHIPSTATION = 'shipstation';
    public const INTERNAL_CAPABILITIES_PURCHASE_USPS_INSURANCE = 'purchase_usps_insurance';
    public const INTERNAL_CAPABILITIES_DISPLAY_FX_BY_DEFAULT = 'display_fx_by_default';
    public const INTERNAL_CAPABILITIES_FX_DIRECT = 'fx_direct';
    public const INTERNAL_CAPABILITIES_FX_INTL = 'fx_intl';
    public const INTERNAL_CAPABILITIES_FX_INTL_SPECIFIED = 'fx_intl_specified';
    public const INTERNAL_CAPABILITIES_RATE_SHOP = 'rate_shop';
    public const INTERNAL_CAPABILITIES_DISPLAY_UPS_BY_DEFAULT = 'display_ups_by_default';
    public const INTERNAL_CAPABILITIES_UPS_DIRECT = 'ups_direct';
    public const INTERNAL_CAPABILITIES_ZERO_POSTAGE_BALANCE = 'zero_postage_balance';
    public const INTERNAL_CAPABILITIES_BLOCK_SLA_FROM_SERVICE_BANNER = 'block_sla_from_service_banner';
    public const INTERNAL_CAPABILITIES_FCI_GAP = 'fci_gap';
    public const INTERNAL_CAPABILITIES_PMI_GAP = 'pmi_gap';
    public const INTERNAL_CAPABILITIES_PMEI_GAP = 'pmei_gap';
    public const INTERNAL_CAPABILITIES_BYPASS_CLEANSE_ADDRESS = 'bypass_cleanse_address';
    public const INTERNAL_CAPABILITIES_CREATE_UNLIMITED_STORES = 'create_unlimited_stores';
    public const INTERNAL_CAPABILITIES_CUBIC = 'cubic';
    public const INTERNAL_CAPABILITIES_ALL_INDICIUM_VALUES = 'all_indicium_values';
    public const INTERNAL_CAPABILITIES_VIEW_REPORTS = 'view_reports';
    public const INTERNAL_CAPABILITIES_ALLOW_RESTRICTED_SHEETS = 'allow_restricted_sheets';
    public const INTERNAL_CAPABILITIES_HIDE_UNAVAILABLE_FEATURES = 'hide_unavailable_features';
    public const INTERNAL_CAPABILITIES_WEB_POSTAGE = 'web_postage';
    public const INTERNAL_CAPABILITIES_VIEW_INSURANCE_HISTORY = 'view_insurance_history';
    public const INTERNAL_CAPABILITIES_HIDE_ESTIMATED_DELIVERY_TIME = 'hide_estimated_delivery_time';
    public const INTERNAL_CAPABILITIES_PURCHASE_FROM_STORE = 'purchase_from_store';
    public const INTERNAL_CAPABILITIES_CHANGE_PHYSICAL_ADDRESS = 'change_physical_address';
    public const INTERNAL_CAPABILITIES_CHANGE_CONTACT_INFO = 'change_contact_info';
    public const INTERNAL_CAPABILITIES_VIEW_ADVANCED_REPORTING = 'view_advanced_reporting';
    public const INTERNAL_CAPABILITIES_ALLOW_ALL_MAIL_CLASSES = 'allow_all_mail_classes';
    public const INTERNAL_CAPABILITIES_EDIT_COST_CODES = 'edit_cost_codes';
    public const INTERNAL_CAPABILITIES_MUST_USE_COST_CODES = 'must_use_cost_codes';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMerchantAllowableValues()
    {
        return [
            self::MERCHANT_STAMPS,
            self::MERCHANT_ENDICIA,
            self::MERCHANT_SHIPWORKS,
            self::MERCHANT_SHIPSTATION,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInternalCapabilitiesAllowableValues()
    {
        return [
            self::INTERNAL_CAPABILITIES_PURCHASE_USPS_INSURANCE,
            self::INTERNAL_CAPABILITIES_DISPLAY_FX_BY_DEFAULT,
            self::INTERNAL_CAPABILITIES_FX_DIRECT,
            self::INTERNAL_CAPABILITIES_FX_INTL,
            self::INTERNAL_CAPABILITIES_FX_INTL_SPECIFIED,
            self::INTERNAL_CAPABILITIES_RATE_SHOP,
            self::INTERNAL_CAPABILITIES_DISPLAY_UPS_BY_DEFAULT,
            self::INTERNAL_CAPABILITIES_UPS_DIRECT,
            self::INTERNAL_CAPABILITIES_ZERO_POSTAGE_BALANCE,
            self::INTERNAL_CAPABILITIES_BLOCK_SLA_FROM_SERVICE_BANNER,
            self::INTERNAL_CAPABILITIES_FCI_GAP,
            self::INTERNAL_CAPABILITIES_PMI_GAP,
            self::INTERNAL_CAPABILITIES_PMEI_GAP,
            self::INTERNAL_CAPABILITIES_BYPASS_CLEANSE_ADDRESS,
            self::INTERNAL_CAPABILITIES_CREATE_UNLIMITED_STORES,
            self::INTERNAL_CAPABILITIES_CUBIC,
            self::INTERNAL_CAPABILITIES_ALL_INDICIUM_VALUES,
            self::INTERNAL_CAPABILITIES_VIEW_REPORTS,
            self::INTERNAL_CAPABILITIES_ALLOW_RESTRICTED_SHEETS,
            self::INTERNAL_CAPABILITIES_HIDE_UNAVAILABLE_FEATURES,
            self::INTERNAL_CAPABILITIES_WEB_POSTAGE,
            self::INTERNAL_CAPABILITIES_VIEW_INSURANCE_HISTORY,
            self::INTERNAL_CAPABILITIES_HIDE_ESTIMATED_DELIVERY_TIME,
            self::INTERNAL_CAPABILITIES_PURCHASE_FROM_STORE,
            self::INTERNAL_CAPABILITIES_CHANGE_PHYSICAL_ADDRESS,
            self::INTERNAL_CAPABILITIES_CHANGE_CONTACT_INFO,
            self::INTERNAL_CAPABILITIES_VIEW_ADVANCED_REPORTING,
            self::INTERNAL_CAPABILITIES_ALLOW_ALL_MAIL_CLASSES,
            self::INTERNAL_CAPABILITIES_EDIT_COST_CODES,
            self::INTERNAL_CAPABILITIES_MUST_USE_COST_CODES,
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
        $this->setIfExists('usps_rep', $data ?? [], null);
        $this->setIfExists('merchant', $data ?? [], null);
        $this->setIfExists('endicia_ported_user', $data ?? [], null);
        $this->setIfExists('balance_id', $data ?? [], null);
        $this->setIfExists('rateset_type', $data ?? [], null);
        $this->setIfExists('rateset_id', $data ?? [], null);
        $this->setIfExists('internal_capabilities', $data ?? [], null);
        $this->setIfExists('rate_token', $data ?? [], null);
        $this->setIfExists('customer_data', $data ?? [], null);
        $this->setIfExists('resubmit', $data ?? [], null);
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

        $allowedValues = $this->getMerchantAllowableValues();
        if (!is_null($this->container['merchant']) && !in_array($this->container['merchant'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'merchant', must be one of '%s'",
                $this->container['merchant'],
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
     * Gets usps_rep
     *
     * @return bool|null
     */
    public function getUspsRep()
    {
        return $this->container['usps_rep'];
    }

    /**
     * Sets usps_rep
     *
     * @param bool|null $usps_rep usps_rep
     *
     * @return self
     */
    public function setUspsRep($usps_rep)
    {
        if (is_null($usps_rep)) {
            throw new \InvalidArgumentException('non-nullable usps_rep cannot be null');
        }
        $this->container['usps_rep'] = $usps_rep;

        return $this;
    }

    /**
     * Gets merchant
     *
     * @return string|null
     */
    public function getMerchant()
    {
        return $this->container['merchant'];
    }

    /**
     * Sets merchant
     *
     * @param string|null $merchant merchant
     *
     * @return self
     */
    public function setMerchant($merchant)
    {
        if (is_null($merchant)) {
            throw new \InvalidArgumentException('non-nullable merchant cannot be null');
        }
        $allowedValues = $this->getMerchantAllowableValues();
        if (!in_array($merchant, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'merchant', must be one of '%s'",
                    $merchant,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['merchant'] = $merchant;

        return $this;
    }

    /**
     * Gets endicia_ported_user
     *
     * @return bool|null
     */
    public function getEndiciaPortedUser()
    {
        return $this->container['endicia_ported_user'];
    }

    /**
     * Sets endicia_ported_user
     *
     * @param bool|null $endicia_ported_user endicia_ported_user
     *
     * @return self
     */
    public function setEndiciaPortedUser($endicia_ported_user)
    {
        if (is_null($endicia_ported_user)) {
            throw new \InvalidArgumentException('non-nullable endicia_ported_user cannot be null');
        }
        $this->container['endicia_ported_user'] = $endicia_ported_user;

        return $this;
    }

    /**
     * Gets balance_id
     *
     * @return string|null
     */
    public function getBalanceId()
    {
        return $this->container['balance_id'];
    }

    /**
     * Sets balance_id
     *
     * @param string|null $balance_id balance_id
     *
     * @return self
     */
    public function setBalanceId($balance_id)
    {
        if (is_null($balance_id)) {
            throw new \InvalidArgumentException('non-nullable balance_id cannot be null');
        }
        $this->container['balance_id'] = $balance_id;

        return $this;
    }

    /**
     * Gets rateset_type
     *
     * @return string|null
     */
    public function getRatesetType()
    {
        return $this->container['rateset_type'];
    }

    /**
     * Sets rateset_type
     *
     * @param string|null $rateset_type rateset_type
     *
     * @return self
     */
    public function setRatesetType($rateset_type)
    {
        if (is_null($rateset_type)) {
            throw new \InvalidArgumentException('non-nullable rateset_type cannot be null');
        }
        $this->container['rateset_type'] = $rateset_type;

        return $this;
    }

    /**
     * Gets rateset_id
     *
     * @return string|null
     */
    public function getRatesetId()
    {
        return $this->container['rateset_id'];
    }

    /**
     * Sets rateset_id
     *
     * @param string|null $rateset_id rateset_id
     *
     * @return self
     */
    public function setRatesetId($rateset_id)
    {
        if (is_null($rateset_id)) {
            throw new \InvalidArgumentException('non-nullable rateset_id cannot be null');
        }
        $this->container['rateset_id'] = $rateset_id;

        return $this;
    }

    /**
     * Gets internal_capabilities
     *
     * @return string[]|null
     */
    public function getInternalCapabilities()
    {
        return $this->container['internal_capabilities'];
    }

    /**
     * Sets internal_capabilities
     *
     * @param string[]|null $internal_capabilities internal_capabilities
     *
     * @return self
     */
    public function setInternalCapabilities($internal_capabilities)
    {
        if (is_null($internal_capabilities)) {
            throw new \InvalidArgumentException('non-nullable internal_capabilities cannot be null');
        }
        $allowedValues = $this->getInternalCapabilitiesAllowableValues();
        if (array_diff($internal_capabilities, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'internal_capabilities', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['internal_capabilities'] = $internal_capabilities;

        return $this;
    }

    /**
     * Gets rate_token
     *
     * @return string|null
     */
    public function getRateToken()
    {
        return $this->container['rate_token'];
    }

    /**
     * Sets rate_token
     *
     * @param string|null $rate_token rate_token
     *
     * @return self
     */
    public function setRateToken($rate_token)
    {
        if (is_null($rate_token)) {
            throw new \InvalidArgumentException('non-nullable rate_token cannot be null');
        }
        $this->container['rate_token'] = $rate_token;

        return $this;
    }

    /**
     * Gets customer_data
     *
     * @return string|null
     */
    public function getCustomerData()
    {
        return $this->container['customer_data'];
    }

    /**
     * Sets customer_data
     *
     * @param string|null $customer_data customer_data
     *
     * @return self
     */
    public function setCustomerData($customer_data)
    {
        if (is_null($customer_data)) {
            throw new \InvalidArgumentException('non-nullable customer_data cannot be null');
        }
        $this->container['customer_data'] = $customer_data;

        return $this;
    }

    /**
     * Gets resubmit
     *
     * @return \OpenAPI\Client\Model\Resubmit|null
     */
    public function getResubmit()
    {
        return $this->container['resubmit'];
    }

    /**
     * Sets resubmit
     *
     * @param \OpenAPI\Client\Model\Resubmit|null $resubmit resubmit
     *
     * @return self
     */
    public function setResubmit($resubmit)
    {
        if (is_null($resubmit)) {
            throw new \InvalidArgumentException('non-nullable resubmit cannot be null');
        }
        $this->container['resubmit'] = $resubmit;

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


