<?php
/**
 * GetV1CarrierServices200ResponseShippingOptionsInnerServicesInnerPackagingOptionsInnerContentOptionsInnerRulesAndOptionsInner
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
 * GetV1CarrierServices200ResponseShippingOptionsInnerServicesInnerPackagingOptionsInnerContentOptionsInnerRulesAndOptionsInner Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetV1CarrierServices200ResponseShippingOptionsInnerServicesInnerPackagingOptionsInnerContentOptionsInnerRulesAndOptionsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_v1_carrier_services_200_response_shipping_options_inner_services_inner_packaging_options_inner_content_options_inner_rules_and_options_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'max_measurements' => '\OpenAPI\Client\Model\GetV1CarrierServices200ResponseShippingOptionsInnerServicesInnerPackagingOptionsInnerContentOptionsInnerRulesAndOptionsInnerMaxMeasurements',
        'delivery_confirmation_options' => '\OpenAPI\Client\Model\GetV1CarrierServices200ResponseShippingOptionsInnerServicesInnerPackagingOptionsInnerContentOptionsInnerRulesAndOptionsInnerDeliveryConfirmationOptionsInner[]',
        'insurance_options' => '\OpenAPI\Client\Model\GetV1CarrierServices200ResponseShippingOptionsInnerServicesInnerPackagingOptionsInnerContentOptionsInnerRulesAndOptionsInnerInsuranceOptionsInner[]',
        'advanced_options' => '\OpenAPI\Client\Model\GetV1CarrierServices200ResponseShippingOptionsInnerServicesInnerPackagingOptionsInnerContentOptionsInnerRulesAndOptionsInnerAdvancedOptionsInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'max_measurements' => null,
        'delivery_confirmation_options' => null,
        'insurance_options' => null,
        'advanced_options' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'max_measurements' => false,
		'delivery_confirmation_options' => false,
		'insurance_options' => false,
		'advanced_options' => false
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
        'max_measurements' => 'max_measurements',
        'delivery_confirmation_options' => 'delivery_confirmation_options',
        'insurance_options' => 'insurance_options',
        'advanced_options' => 'advanced_options'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'max_measurements' => 'setMaxMeasurements',
        'delivery_confirmation_options' => 'setDeliveryConfirmationOptions',
        'insurance_options' => 'setInsuranceOptions',
        'advanced_options' => 'setAdvancedOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'max_measurements' => 'getMaxMeasurements',
        'delivery_confirmation_options' => 'getDeliveryConfirmationOptions',
        'insurance_options' => 'getInsuranceOptions',
        'advanced_options' => 'getAdvancedOptions'
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
        $this->setIfExists('max_measurements', $data ?? [], null);
        $this->setIfExists('delivery_confirmation_options', $data ?? [], null);
        $this->setIfExists('insurance_options', $data ?? [], null);
        $this->setIfExists('advanced_options', $data ?? [], null);
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
     * Gets max_measurements
     *
     * @return \OpenAPI\Client\Model\GetV1CarrierServices200ResponseShippingOptionsInnerServicesInnerPackagingOptionsInnerContentOptionsInnerRulesAndOptionsInnerMaxMeasurements|null
     */
    public function getMaxMeasurements()
    {
        return $this->container['max_measurements'];
    }

    /**
     * Sets max_measurements
     *
     * @param \OpenAPI\Client\Model\GetV1CarrierServices200ResponseShippingOptionsInnerServicesInnerPackagingOptionsInnerContentOptionsInnerRulesAndOptionsInnerMaxMeasurements|null $max_measurements max_measurements
     *
     * @return self
     */
    public function setMaxMeasurements($max_measurements)
    {
        if (is_null($max_measurements)) {
            throw new \InvalidArgumentException('non-nullable max_measurements cannot be null');
        }
        $this->container['max_measurements'] = $max_measurements;

        return $this;
    }

    /**
     * Gets delivery_confirmation_options
     *
     * @return \OpenAPI\Client\Model\GetV1CarrierServices200ResponseShippingOptionsInnerServicesInnerPackagingOptionsInnerContentOptionsInnerRulesAndOptionsInnerDeliveryConfirmationOptionsInner[]|null
     */
    public function getDeliveryConfirmationOptions()
    {
        return $this->container['delivery_confirmation_options'];
    }

    /**
     * Sets delivery_confirmation_options
     *
     * @param \OpenAPI\Client\Model\GetV1CarrierServices200ResponseShippingOptionsInnerServicesInnerPackagingOptionsInnerContentOptionsInnerRulesAndOptionsInnerDeliveryConfirmationOptionsInner[]|null $delivery_confirmation_options delivery_confirmation_options
     *
     * @return self
     */
    public function setDeliveryConfirmationOptions($delivery_confirmation_options)
    {
        if (is_null($delivery_confirmation_options)) {
            throw new \InvalidArgumentException('non-nullable delivery_confirmation_options cannot be null');
        }
        $this->container['delivery_confirmation_options'] = $delivery_confirmation_options;

        return $this;
    }

    /**
     * Gets insurance_options
     *
     * @return \OpenAPI\Client\Model\GetV1CarrierServices200ResponseShippingOptionsInnerServicesInnerPackagingOptionsInnerContentOptionsInnerRulesAndOptionsInnerInsuranceOptionsInner[]|null
     */
    public function getInsuranceOptions()
    {
        return $this->container['insurance_options'];
    }

    /**
     * Sets insurance_options
     *
     * @param \OpenAPI\Client\Model\GetV1CarrierServices200ResponseShippingOptionsInnerServicesInnerPackagingOptionsInnerContentOptionsInnerRulesAndOptionsInnerInsuranceOptionsInner[]|null $insurance_options insurance_options
     *
     * @return self
     */
    public function setInsuranceOptions($insurance_options)
    {
        if (is_null($insurance_options)) {
            throw new \InvalidArgumentException('non-nullable insurance_options cannot be null');
        }
        $this->container['insurance_options'] = $insurance_options;

        return $this;
    }

    /**
     * Gets advanced_options
     *
     * @return \OpenAPI\Client\Model\GetV1CarrierServices200ResponseShippingOptionsInnerServicesInnerPackagingOptionsInnerContentOptionsInnerRulesAndOptionsInnerAdvancedOptionsInner[]|null
     */
    public function getAdvancedOptions()
    {
        return $this->container['advanced_options'];
    }

    /**
     * Sets advanced_options
     *
     * @param \OpenAPI\Client\Model\GetV1CarrierServices200ResponseShippingOptionsInnerServicesInnerPackagingOptionsInnerContentOptionsInnerRulesAndOptionsInnerAdvancedOptionsInner[]|null $advanced_options advanced_options
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


