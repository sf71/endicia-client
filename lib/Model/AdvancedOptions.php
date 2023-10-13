<?php
/**
 * AdvancedOptions
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
 * AdvancedOptions Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AdvancedOptions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'advanced_options';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'non_machinable' => 'bool',
        'saturday_delivery' => 'bool',
        'delivered_duty_paid' => 'bool',
        'hold_for_pickup' => 'bool',
        'certified_mail' => 'bool',
        'return_receipt' => 'bool',
        'return_receipt_electronic' => 'bool',
        'collect_on_delivery' => '\OpenAPI\Client\Model\AdvancedOptionsCollectOnDelivery',
        'registered_mail' => '\OpenAPI\Client\Model\AdvancedOptionsRegisteredMail',
        'sunday_delivery' => 'bool',
        'holiday_delivery' => 'bool',
        'restricted_delivery' => 'bool',
        'notice_of_non_delivery' => 'bool',
        'special_handling' => '\OpenAPI\Client\Model\AdvancedOptionsSpecialHandling',
        'no_label' => '\OpenAPI\Client\Model\AdvancedOptionsNoLabel',
        'is_pay_on_use' => 'bool',
        'return_options' => '\OpenAPI\Client\Model\AdvancedOptionsReturnOptions'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'non_machinable' => null,
        'saturday_delivery' => null,
        'delivered_duty_paid' => null,
        'hold_for_pickup' => null,
        'certified_mail' => null,
        'return_receipt' => null,
        'return_receipt_electronic' => null,
        'collect_on_delivery' => null,
        'registered_mail' => null,
        'sunday_delivery' => null,
        'holiday_delivery' => null,
        'restricted_delivery' => null,
        'notice_of_non_delivery' => null,
        'special_handling' => null,
        'no_label' => null,
        'is_pay_on_use' => null,
        'return_options' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'non_machinable' => false,
		'saturday_delivery' => false,
		'delivered_duty_paid' => false,
		'hold_for_pickup' => false,
		'certified_mail' => false,
		'return_receipt' => false,
		'return_receipt_electronic' => false,
		'collect_on_delivery' => false,
		'registered_mail' => false,
		'sunday_delivery' => false,
		'holiday_delivery' => false,
		'restricted_delivery' => false,
		'notice_of_non_delivery' => false,
		'special_handling' => false,
		'no_label' => false,
		'is_pay_on_use' => false,
		'return_options' => false
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
        'non_machinable' => 'non_machinable',
        'saturday_delivery' => 'saturday_delivery',
        'delivered_duty_paid' => 'delivered_duty_paid',
        'hold_for_pickup' => 'hold_for_pickup',
        'certified_mail' => 'certified_mail',
        'return_receipt' => 'return_receipt',
        'return_receipt_electronic' => 'return_receipt_electronic',
        'collect_on_delivery' => 'collect_on_delivery',
        'registered_mail' => 'registered_mail',
        'sunday_delivery' => 'sunday_delivery',
        'holiday_delivery' => 'holiday_delivery',
        'restricted_delivery' => 'restricted_delivery',
        'notice_of_non_delivery' => 'notice_of_non_delivery',
        'special_handling' => 'special_handling',
        'no_label' => 'no_label',
        'is_pay_on_use' => 'is_pay_on_use',
        'return_options' => 'return_options'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'non_machinable' => 'setNonMachinable',
        'saturday_delivery' => 'setSaturdayDelivery',
        'delivered_duty_paid' => 'setDeliveredDutyPaid',
        'hold_for_pickup' => 'setHoldForPickup',
        'certified_mail' => 'setCertifiedMail',
        'return_receipt' => 'setReturnReceipt',
        'return_receipt_electronic' => 'setReturnReceiptElectronic',
        'collect_on_delivery' => 'setCollectOnDelivery',
        'registered_mail' => 'setRegisteredMail',
        'sunday_delivery' => 'setSundayDelivery',
        'holiday_delivery' => 'setHolidayDelivery',
        'restricted_delivery' => 'setRestrictedDelivery',
        'notice_of_non_delivery' => 'setNoticeOfNonDelivery',
        'special_handling' => 'setSpecialHandling',
        'no_label' => 'setNoLabel',
        'is_pay_on_use' => 'setIsPayOnUse',
        'return_options' => 'setReturnOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'non_machinable' => 'getNonMachinable',
        'saturday_delivery' => 'getSaturdayDelivery',
        'delivered_duty_paid' => 'getDeliveredDutyPaid',
        'hold_for_pickup' => 'getHoldForPickup',
        'certified_mail' => 'getCertifiedMail',
        'return_receipt' => 'getReturnReceipt',
        'return_receipt_electronic' => 'getReturnReceiptElectronic',
        'collect_on_delivery' => 'getCollectOnDelivery',
        'registered_mail' => 'getRegisteredMail',
        'sunday_delivery' => 'getSundayDelivery',
        'holiday_delivery' => 'getHolidayDelivery',
        'restricted_delivery' => 'getRestrictedDelivery',
        'notice_of_non_delivery' => 'getNoticeOfNonDelivery',
        'special_handling' => 'getSpecialHandling',
        'no_label' => 'getNoLabel',
        'is_pay_on_use' => 'getIsPayOnUse',
        'return_options' => 'getReturnOptions'
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
        $this->setIfExists('non_machinable', $data ?? [], null);
        $this->setIfExists('saturday_delivery', $data ?? [], null);
        $this->setIfExists('delivered_duty_paid', $data ?? [], null);
        $this->setIfExists('hold_for_pickup', $data ?? [], null);
        $this->setIfExists('certified_mail', $data ?? [], null);
        $this->setIfExists('return_receipt', $data ?? [], null);
        $this->setIfExists('return_receipt_electronic', $data ?? [], null);
        $this->setIfExists('collect_on_delivery', $data ?? [], null);
        $this->setIfExists('registered_mail', $data ?? [], null);
        $this->setIfExists('sunday_delivery', $data ?? [], null);
        $this->setIfExists('holiday_delivery', $data ?? [], null);
        $this->setIfExists('restricted_delivery', $data ?? [], null);
        $this->setIfExists('notice_of_non_delivery', $data ?? [], null);
        $this->setIfExists('special_handling', $data ?? [], null);
        $this->setIfExists('no_label', $data ?? [], null);
        $this->setIfExists('is_pay_on_use', $data ?? [], null);
        $this->setIfExists('return_options', $data ?? [], null);
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
     * Gets non_machinable
     *
     * @return bool|null
     */
    public function getNonMachinable()
    {
        return $this->container['non_machinable'];
    }

    /**
     * Sets non_machinable
     *
     * @param bool|null $non_machinable _Non-Machinable_
     *
     * @return self
     */
    public function setNonMachinable($non_machinable)
    {
        if (is_null($non_machinable)) {
            throw new \InvalidArgumentException('non-nullable non_machinable cannot be null');
        }
        $this->container['non_machinable'] = $non_machinable;

        return $this;
    }

    /**
     * Gets saturday_delivery
     *
     * @return bool|null
     */
    public function getSaturdayDelivery()
    {
        return $this->container['saturday_delivery'];
    }

    /**
     * Sets saturday_delivery
     *
     * @param bool|null $saturday_delivery _Saturday Delivery_
     *
     * @return self
     */
    public function setSaturdayDelivery($saturday_delivery)
    {
        if (is_null($saturday_delivery)) {
            throw new \InvalidArgumentException('non-nullable saturday_delivery cannot be null');
        }
        $this->container['saturday_delivery'] = $saturday_delivery;

        return $this;
    }

    /**
     * Gets delivered_duty_paid
     *
     * @return bool|null
     */
    public function getDeliveredDutyPaid()
    {
        return $this->container['delivered_duty_paid'];
    }

    /**
     * Sets delivered_duty_paid
     *
     * @param bool|null $delivered_duty_paid _Delivered Duty Paid_
     *
     * @return self
     */
    public function setDeliveredDutyPaid($delivered_duty_paid)
    {
        if (is_null($delivered_duty_paid)) {
            throw new \InvalidArgumentException('non-nullable delivered_duty_paid cannot be null');
        }
        $this->container['delivered_duty_paid'] = $delivered_duty_paid;

        return $this;
    }

    /**
     * Gets hold_for_pickup
     *
     * @return bool|null
     */
    public function getHoldForPickup()
    {
        return $this->container['hold_for_pickup'];
    }

    /**
     * Sets hold_for_pickup
     *
     * @param bool|null $hold_for_pickup _Hold for Pickup_
     *
     * @return self
     */
    public function setHoldForPickup($hold_for_pickup)
    {
        if (is_null($hold_for_pickup)) {
            throw new \InvalidArgumentException('non-nullable hold_for_pickup cannot be null');
        }
        $this->container['hold_for_pickup'] = $hold_for_pickup;

        return $this;
    }

    /**
     * Gets certified_mail
     *
     * @return bool|null
     */
    public function getCertifiedMail()
    {
        return $this->container['certified_mail'];
    }

    /**
     * Sets certified_mail
     *
     * @param bool|null $certified_mail _Certified Mail_
     *
     * @return self
     */
    public function setCertifiedMail($certified_mail)
    {
        if (is_null($certified_mail)) {
            throw new \InvalidArgumentException('non-nullable certified_mail cannot be null');
        }
        $this->container['certified_mail'] = $certified_mail;

        return $this;
    }

    /**
     * Gets return_receipt
     *
     * @return bool|null
     */
    public function getReturnReceipt()
    {
        return $this->container['return_receipt'];
    }

    /**
     * Sets return_receipt
     *
     * @param bool|null $return_receipt _Return Receipt (Physical)_
     *
     * @return self
     */
    public function setReturnReceipt($return_receipt)
    {
        if (is_null($return_receipt)) {
            throw new \InvalidArgumentException('non-nullable return_receipt cannot be null');
        }
        $this->container['return_receipt'] = $return_receipt;

        return $this;
    }

    /**
     * Gets return_receipt_electronic
     *
     * @return bool|null
     */
    public function getReturnReceiptElectronic()
    {
        return $this->container['return_receipt_electronic'];
    }

    /**
     * Sets return_receipt_electronic
     *
     * @param bool|null $return_receipt_electronic _Return Receipt (Electronic)_
     *
     * @return self
     */
    public function setReturnReceiptElectronic($return_receipt_electronic)
    {
        if (is_null($return_receipt_electronic)) {
            throw new \InvalidArgumentException('non-nullable return_receipt_electronic cannot be null');
        }
        $this->container['return_receipt_electronic'] = $return_receipt_electronic;

        return $this;
    }

    /**
     * Gets collect_on_delivery
     *
     * @return \OpenAPI\Client\Model\AdvancedOptionsCollectOnDelivery|null
     */
    public function getCollectOnDelivery()
    {
        return $this->container['collect_on_delivery'];
    }

    /**
     * Sets collect_on_delivery
     *
     * @param \OpenAPI\Client\Model\AdvancedOptionsCollectOnDelivery|null $collect_on_delivery collect_on_delivery
     *
     * @return self
     */
    public function setCollectOnDelivery($collect_on_delivery)
    {
        if (is_null($collect_on_delivery)) {
            throw new \InvalidArgumentException('non-nullable collect_on_delivery cannot be null');
        }
        $this->container['collect_on_delivery'] = $collect_on_delivery;

        return $this;
    }

    /**
     * Gets registered_mail
     *
     * @return \OpenAPI\Client\Model\AdvancedOptionsRegisteredMail|null
     */
    public function getRegisteredMail()
    {
        return $this->container['registered_mail'];
    }

    /**
     * Sets registered_mail
     *
     * @param \OpenAPI\Client\Model\AdvancedOptionsRegisteredMail|null $registered_mail registered_mail
     *
     * @return self
     */
    public function setRegisteredMail($registered_mail)
    {
        if (is_null($registered_mail)) {
            throw new \InvalidArgumentException('non-nullable registered_mail cannot be null');
        }
        $this->container['registered_mail'] = $registered_mail;

        return $this;
    }

    /**
     * Gets sunday_delivery
     *
     * @return bool|null
     */
    public function getSundayDelivery()
    {
        return $this->container['sunday_delivery'];
    }

    /**
     * Sets sunday_delivery
     *
     * @param bool|null $sunday_delivery _Sunday Delivery_
     *
     * @return self
     */
    public function setSundayDelivery($sunday_delivery)
    {
        if (is_null($sunday_delivery)) {
            throw new \InvalidArgumentException('non-nullable sunday_delivery cannot be null');
        }
        $this->container['sunday_delivery'] = $sunday_delivery;

        return $this;
    }

    /**
     * Gets holiday_delivery
     *
     * @return bool|null
     */
    public function getHolidayDelivery()
    {
        return $this->container['holiday_delivery'];
    }

    /**
     * Sets holiday_delivery
     *
     * @param bool|null $holiday_delivery _Holiday Delivery_
     *
     * @return self
     */
    public function setHolidayDelivery($holiday_delivery)
    {
        if (is_null($holiday_delivery)) {
            throw new \InvalidArgumentException('non-nullable holiday_delivery cannot be null');
        }
        $this->container['holiday_delivery'] = $holiday_delivery;

        return $this;
    }

    /**
     * Gets restricted_delivery
     *
     * @return bool|null
     */
    public function getRestrictedDelivery()
    {
        return $this->container['restricted_delivery'];
    }

    /**
     * Sets restricted_delivery
     *
     * @param bool|null $restricted_delivery _Restricted Delivery_
     *
     * @return self
     */
    public function setRestrictedDelivery($restricted_delivery)
    {
        if (is_null($restricted_delivery)) {
            throw new \InvalidArgumentException('non-nullable restricted_delivery cannot be null');
        }
        $this->container['restricted_delivery'] = $restricted_delivery;

        return $this;
    }

    /**
     * Gets notice_of_non_delivery
     *
     * @return bool|null
     */
    public function getNoticeOfNonDelivery()
    {
        return $this->container['notice_of_non_delivery'];
    }

    /**
     * Sets notice_of_non_delivery
     *
     * @param bool|null $notice_of_non_delivery _Notice of Non-Delivery_
     *
     * @return self
     */
    public function setNoticeOfNonDelivery($notice_of_non_delivery)
    {
        if (is_null($notice_of_non_delivery)) {
            throw new \InvalidArgumentException('non-nullable notice_of_non_delivery cannot be null');
        }
        $this->container['notice_of_non_delivery'] = $notice_of_non_delivery;

        return $this;
    }

    /**
     * Gets special_handling
     *
     * @return \OpenAPI\Client\Model\AdvancedOptionsSpecialHandling|null
     */
    public function getSpecialHandling()
    {
        return $this->container['special_handling'];
    }

    /**
     * Sets special_handling
     *
     * @param \OpenAPI\Client\Model\AdvancedOptionsSpecialHandling|null $special_handling special_handling
     *
     * @return self
     */
    public function setSpecialHandling($special_handling)
    {
        if (is_null($special_handling)) {
            throw new \InvalidArgumentException('non-nullable special_handling cannot be null');
        }
        $this->container['special_handling'] = $special_handling;

        return $this;
    }

    /**
     * Gets no_label
     *
     * @return \OpenAPI\Client\Model\AdvancedOptionsNoLabel|null
     */
    public function getNoLabel()
    {
        return $this->container['no_label'];
    }

    /**
     * Sets no_label
     *
     * @param \OpenAPI\Client\Model\AdvancedOptionsNoLabel|null $no_label no_label
     *
     * @return self
     */
    public function setNoLabel($no_label)
    {
        if (is_null($no_label)) {
            throw new \InvalidArgumentException('non-nullable no_label cannot be null');
        }
        $this->container['no_label'] = $no_label;

        return $this;
    }

    /**
     * Gets is_pay_on_use
     *
     * @return bool|null
     */
    public function getIsPayOnUse()
    {
        return $this->container['is_pay_on_use'];
    }

    /**
     * Sets is_pay_on_use
     *
     * @param bool|null $is_pay_on_use _Is Pay-On-Use_
     *
     * @return self
     */
    public function setIsPayOnUse($is_pay_on_use)
    {
        if (is_null($is_pay_on_use)) {
            throw new \InvalidArgumentException('non-nullable is_pay_on_use cannot be null');
        }
        $this->container['is_pay_on_use'] = $is_pay_on_use;

        return $this;
    }

    /**
     * Gets return_options
     *
     * @return \OpenAPI\Client\Model\AdvancedOptionsReturnOptions|null
     */
    public function getReturnOptions()
    {
        return $this->container['return_options'];
    }

    /**
     * Sets return_options
     *
     * @param \OpenAPI\Client\Model\AdvancedOptionsReturnOptions|null $return_options return_options
     *
     * @return self
     */
    public function setReturnOptions($return_options)
    {
        if (is_null($return_options)) {
            throw new \InvalidArgumentException('non-nullable return_options cannot be null');
        }
        $this->container['return_options'] = $return_options;

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


