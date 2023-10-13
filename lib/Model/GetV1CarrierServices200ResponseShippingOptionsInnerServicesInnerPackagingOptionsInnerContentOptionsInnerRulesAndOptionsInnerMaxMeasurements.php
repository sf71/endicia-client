<?php
/**
 * GetV1CarrierServices200ResponseShippingOptionsInnerServicesInnerPackagingOptionsInnerContentOptionsInnerRulesAndOptionsInnerMaxMeasurements
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
 * GetV1CarrierServices200ResponseShippingOptionsInnerServicesInnerPackagingOptionsInnerContentOptionsInnerRulesAndOptionsInnerMaxMeasurements Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetV1CarrierServices200ResponseShippingOptionsInnerServicesInnerPackagingOptionsInnerContentOptionsInnerRulesAndOptionsInnerMaxMeasurements implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_v1_carrier_services_200_response_shipping_options_inner_services_inner_packaging_options_inner_content_options_inner_rules_and_options_inner_max_measurements';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'max_weight' => 'float',
        'weight_unit' => 'string',
        'max_length' => 'float',
        'max_width' => 'float',
        'max_height' => 'float',
        'max_length_plus_girth' => 'float',
        'max_sum_of_dimensions' => 'float',
        'dimension_unit' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'max_weight' => null,
        'weight_unit' => null,
        'max_length' => null,
        'max_width' => null,
        'max_height' => null,
        'max_length_plus_girth' => null,
        'max_sum_of_dimensions' => null,
        'dimension_unit' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'max_weight' => false,
		'weight_unit' => false,
		'max_length' => false,
		'max_width' => false,
		'max_height' => false,
		'max_length_plus_girth' => false,
		'max_sum_of_dimensions' => false,
		'dimension_unit' => false
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
        'max_weight' => 'max_weight',
        'weight_unit' => 'weight_unit',
        'max_length' => 'max_length',
        'max_width' => 'max_width',
        'max_height' => 'max_height',
        'max_length_plus_girth' => 'max_length_plus_girth',
        'max_sum_of_dimensions' => 'max_sum_of_dimensions',
        'dimension_unit' => 'dimension_unit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'max_weight' => 'setMaxWeight',
        'weight_unit' => 'setWeightUnit',
        'max_length' => 'setMaxLength',
        'max_width' => 'setMaxWidth',
        'max_height' => 'setMaxHeight',
        'max_length_plus_girth' => 'setMaxLengthPlusGirth',
        'max_sum_of_dimensions' => 'setMaxSumOfDimensions',
        'dimension_unit' => 'setDimensionUnit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'max_weight' => 'getMaxWeight',
        'weight_unit' => 'getWeightUnit',
        'max_length' => 'getMaxLength',
        'max_width' => 'getMaxWidth',
        'max_height' => 'getMaxHeight',
        'max_length_plus_girth' => 'getMaxLengthPlusGirth',
        'max_sum_of_dimensions' => 'getMaxSumOfDimensions',
        'dimension_unit' => 'getDimensionUnit'
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
        $this->setIfExists('max_weight', $data ?? [], null);
        $this->setIfExists('weight_unit', $data ?? [], null);
        $this->setIfExists('max_length', $data ?? [], null);
        $this->setIfExists('max_width', $data ?? [], null);
        $this->setIfExists('max_height', $data ?? [], null);
        $this->setIfExists('max_length_plus_girth', $data ?? [], null);
        $this->setIfExists('max_sum_of_dimensions', $data ?? [], null);
        $this->setIfExists('dimension_unit', $data ?? [], null);
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
     * Gets max_weight
     *
     * @return float|null
     */
    public function getMaxWeight()
    {
        return $this->container['max_weight'];
    }

    /**
     * Sets max_weight
     *
     * @param float|null $max_weight max_weight
     *
     * @return self
     */
    public function setMaxWeight($max_weight)
    {
        if (is_null($max_weight)) {
            throw new \InvalidArgumentException('non-nullable max_weight cannot be null');
        }
        $this->container['max_weight'] = $max_weight;

        return $this;
    }

    /**
     * Gets weight_unit
     *
     * @return string|null
     */
    public function getWeightUnit()
    {
        return $this->container['weight_unit'];
    }

    /**
     * Sets weight_unit
     *
     * @param string|null $weight_unit weight_unit
     *
     * @return self
     */
    public function setWeightUnit($weight_unit)
    {
        if (is_null($weight_unit)) {
            throw new \InvalidArgumentException('non-nullable weight_unit cannot be null');
        }
        $this->container['weight_unit'] = $weight_unit;

        return $this;
    }

    /**
     * Gets max_length
     *
     * @return float|null
     */
    public function getMaxLength()
    {
        return $this->container['max_length'];
    }

    /**
     * Sets max_length
     *
     * @param float|null $max_length max_length
     *
     * @return self
     */
    public function setMaxLength($max_length)
    {
        if (is_null($max_length)) {
            throw new \InvalidArgumentException('non-nullable max_length cannot be null');
        }
        $this->container['max_length'] = $max_length;

        return $this;
    }

    /**
     * Gets max_width
     *
     * @return float|null
     */
    public function getMaxWidth()
    {
        return $this->container['max_width'];
    }

    /**
     * Sets max_width
     *
     * @param float|null $max_width max_width
     *
     * @return self
     */
    public function setMaxWidth($max_width)
    {
        if (is_null($max_width)) {
            throw new \InvalidArgumentException('non-nullable max_width cannot be null');
        }
        $this->container['max_width'] = $max_width;

        return $this;
    }

    /**
     * Gets max_height
     *
     * @return float|null
     */
    public function getMaxHeight()
    {
        return $this->container['max_height'];
    }

    /**
     * Sets max_height
     *
     * @param float|null $max_height max_height
     *
     * @return self
     */
    public function setMaxHeight($max_height)
    {
        if (is_null($max_height)) {
            throw new \InvalidArgumentException('non-nullable max_height cannot be null');
        }
        $this->container['max_height'] = $max_height;

        return $this;
    }

    /**
     * Gets max_length_plus_girth
     *
     * @return float|null
     */
    public function getMaxLengthPlusGirth()
    {
        return $this->container['max_length_plus_girth'];
    }

    /**
     * Sets max_length_plus_girth
     *
     * @param float|null $max_length_plus_girth max_length_plus_girth
     *
     * @return self
     */
    public function setMaxLengthPlusGirth($max_length_plus_girth)
    {
        if (is_null($max_length_plus_girth)) {
            throw new \InvalidArgumentException('non-nullable max_length_plus_girth cannot be null');
        }
        $this->container['max_length_plus_girth'] = $max_length_plus_girth;

        return $this;
    }

    /**
     * Gets max_sum_of_dimensions
     *
     * @return float|null
     */
    public function getMaxSumOfDimensions()
    {
        return $this->container['max_sum_of_dimensions'];
    }

    /**
     * Sets max_sum_of_dimensions
     *
     * @param float|null $max_sum_of_dimensions max_sum_of_dimensions
     *
     * @return self
     */
    public function setMaxSumOfDimensions($max_sum_of_dimensions)
    {
        if (is_null($max_sum_of_dimensions)) {
            throw new \InvalidArgumentException('non-nullable max_sum_of_dimensions cannot be null');
        }
        $this->container['max_sum_of_dimensions'] = $max_sum_of_dimensions;

        return $this;
    }

    /**
     * Gets dimension_unit
     *
     * @return string|null
     */
    public function getDimensionUnit()
    {
        return $this->container['dimension_unit'];
    }

    /**
     * Sets dimension_unit
     *
     * @param string|null $dimension_unit dimension_unit
     *
     * @return self
     */
    public function setDimensionUnit($dimension_unit)
    {
        if (is_null($dimension_unit)) {
            throw new \InvalidArgumentException('non-nullable dimension_unit cannot be null');
        }
        $this->container['dimension_unit'] = $dimension_unit;

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


