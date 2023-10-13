<?php
/**
 * Customs
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
 * Customs Class Doc Comment
 *
 * @category Class
 * @description _Customs Form_
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Customs implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'customs';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'contents_type' => 'string',
        'contents_description' => 'string',
        'non_delivery_option' => 'string',
        'sender_info' => '\OpenAPI\Client\Model\CustomsSenderInfo',
        'recipient_info' => '\OpenAPI\Client\Model\CustomsRecipientInfo',
        'customs_items' => '\OpenAPI\Client\Model\CustomsCustomsItemsInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'contents_type' => null,
        'contents_description' => null,
        'non_delivery_option' => null,
        'sender_info' => null,
        'recipient_info' => null,
        'customs_items' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'contents_type' => false,
		'contents_description' => false,
		'non_delivery_option' => false,
		'sender_info' => false,
		'recipient_info' => false,
		'customs_items' => false
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
        'contents_type' => 'contents_type',
        'contents_description' => 'contents_description',
        'non_delivery_option' => 'non_delivery_option',
        'sender_info' => 'sender_info',
        'recipient_info' => 'recipient_info',
        'customs_items' => 'customs_items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contents_type' => 'setContentsType',
        'contents_description' => 'setContentsDescription',
        'non_delivery_option' => 'setNonDeliveryOption',
        'sender_info' => 'setSenderInfo',
        'recipient_info' => 'setRecipientInfo',
        'customs_items' => 'setCustomsItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contents_type' => 'getContentsType',
        'contents_description' => 'getContentsDescription',
        'non_delivery_option' => 'getNonDeliveryOption',
        'sender_info' => 'getSenderInfo',
        'recipient_info' => 'getRecipientInfo',
        'customs_items' => 'getCustomsItems'
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

    public const CONTENTS_TYPE_GIFT = 'gift';
    public const CONTENTS_TYPE_MERCHANDISE = 'merchandise';
    public const CONTENTS_TYPE_RETURNED_GOODS = 'returned_goods';
    public const CONTENTS_TYPE_DOCUMENTS = 'documents';
    public const CONTENTS_TYPE_SAMPLE = 'sample';
    public const CONTENTS_TYPE_OTHER = 'other';
    public const NON_DELIVERY_OPTION_TREAT_AS_ABANDONED = 'treat_as_abandoned';
    public const NON_DELIVERY_OPTION_RETURN_TO_SENDER = 'return_to_sender';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getContentsTypeAllowableValues()
    {
        return [
            self::CONTENTS_TYPE_GIFT,
            self::CONTENTS_TYPE_MERCHANDISE,
            self::CONTENTS_TYPE_RETURNED_GOODS,
            self::CONTENTS_TYPE_DOCUMENTS,
            self::CONTENTS_TYPE_SAMPLE,
            self::CONTENTS_TYPE_OTHER,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNonDeliveryOptionAllowableValues()
    {
        return [
            self::NON_DELIVERY_OPTION_TREAT_AS_ABANDONED,
            self::NON_DELIVERY_OPTION_RETURN_TO_SENDER,
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
        $this->setIfExists('contents_type', $data ?? [], null);
        $this->setIfExists('contents_description', $data ?? [], null);
        $this->setIfExists('non_delivery_option', $data ?? [], null);
        $this->setIfExists('sender_info', $data ?? [], null);
        $this->setIfExists('recipient_info', $data ?? [], null);
        $this->setIfExists('customs_items', $data ?? [], null);
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

        $allowedValues = $this->getContentsTypeAllowableValues();
        if (!is_null($this->container['contents_type']) && !in_array($this->container['contents_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'contents_type', must be one of '%s'",
                $this->container['contents_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getNonDeliveryOptionAllowableValues();
        if (!is_null($this->container['non_delivery_option']) && !in_array($this->container['non_delivery_option'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'non_delivery_option', must be one of '%s'",
                $this->container['non_delivery_option'],
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
     * Gets contents_type
     *
     * @return string|null
     */
    public function getContentsType()
    {
        return $this->container['contents_type'];
    }

    /**
     * Sets contents_type
     *
     * @param string|null $contents_type _Contents Type_
     *
     * @return self
     */
    public function setContentsType($contents_type)
    {
        if (is_null($contents_type)) {
            throw new \InvalidArgumentException('non-nullable contents_type cannot be null');
        }
        $allowedValues = $this->getContentsTypeAllowableValues();
        if (!in_array($contents_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'contents_type', must be one of '%s'",
                    $contents_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['contents_type'] = $contents_type;

        return $this;
    }

    /**
     * Gets contents_description
     *
     * @return string|null
     */
    public function getContentsDescription()
    {
        return $this->container['contents_description'];
    }

    /**
     * Sets contents_description
     *
     * @param string|null $contents_description _Contents Description_
     *
     * @return self
     */
    public function setContentsDescription($contents_description)
    {
        if (is_null($contents_description)) {
            throw new \InvalidArgumentException('non-nullable contents_description cannot be null');
        }
        $this->container['contents_description'] = $contents_description;

        return $this;
    }

    /**
     * Gets non_delivery_option
     *
     * @return string|null
     */
    public function getNonDeliveryOption()
    {
        return $this->container['non_delivery_option'];
    }

    /**
     * Sets non_delivery_option
     *
     * @param string|null $non_delivery_option _Non-Delivery Option_
     *
     * @return self
     */
    public function setNonDeliveryOption($non_delivery_option)
    {
        if (is_null($non_delivery_option)) {
            throw new \InvalidArgumentException('non-nullable non_delivery_option cannot be null');
        }
        $allowedValues = $this->getNonDeliveryOptionAllowableValues();
        if (!in_array($non_delivery_option, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'non_delivery_option', must be one of '%s'",
                    $non_delivery_option,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['non_delivery_option'] = $non_delivery_option;

        return $this;
    }

    /**
     * Gets sender_info
     *
     * @return \OpenAPI\Client\Model\CustomsSenderInfo|null
     */
    public function getSenderInfo()
    {
        return $this->container['sender_info'];
    }

    /**
     * Sets sender_info
     *
     * @param \OpenAPI\Client\Model\CustomsSenderInfo|null $sender_info sender_info
     *
     * @return self
     */
    public function setSenderInfo($sender_info)
    {
        if (is_null($sender_info)) {
            throw new \InvalidArgumentException('non-nullable sender_info cannot be null');
        }
        $this->container['sender_info'] = $sender_info;

        return $this;
    }

    /**
     * Gets recipient_info
     *
     * @return \OpenAPI\Client\Model\CustomsRecipientInfo|null
     */
    public function getRecipientInfo()
    {
        return $this->container['recipient_info'];
    }

    /**
     * Sets recipient_info
     *
     * @param \OpenAPI\Client\Model\CustomsRecipientInfo|null $recipient_info recipient_info
     *
     * @return self
     */
    public function setRecipientInfo($recipient_info)
    {
        if (is_null($recipient_info)) {
            throw new \InvalidArgumentException('non-nullable recipient_info cannot be null');
        }
        $this->container['recipient_info'] = $recipient_info;

        return $this;
    }

    /**
     * Gets customs_items
     *
     * @return \OpenAPI\Client\Model\CustomsCustomsItemsInner[]|null
     */
    public function getCustomsItems()
    {
        return $this->container['customs_items'];
    }

    /**
     * Sets customs_items
     *
     * @param \OpenAPI\Client\Model\CustomsCustomsItemsInner[]|null $customs_items _Customs Items Array_
     *
     * @return self
     */
    public function setCustomsItems($customs_items)
    {
        if (is_null($customs_items)) {
            throw new \InvalidArgumentException('non-nullable customs_items cannot be null');
        }
        $this->container['customs_items'] = $customs_items;

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


