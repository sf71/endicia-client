<?php
/**
 * Package
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
 * Package Class Doc Comment
 *
 * @category Class
 * @description _Package_
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Package implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'package';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'packaging_type' => 'string',
        'weight' => 'float',
        'weight_unit' => 'string',
        'length' => 'float',
        'width' => 'float',
        'height' => 'float',
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
        'packaging_type' => null,
        'weight' => null,
        'weight_unit' => null,
        'length' => null,
        'width' => null,
        'height' => null,
        'dimension_unit' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'packaging_type' => false,
		'weight' => false,
		'weight_unit' => false,
		'length' => false,
		'width' => false,
		'height' => false,
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
        'packaging_type' => 'packaging_type',
        'weight' => 'weight',
        'weight_unit' => 'weight_unit',
        'length' => 'length',
        'width' => 'width',
        'height' => 'height',
        'dimension_unit' => 'dimension_unit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'packaging_type' => 'setPackagingType',
        'weight' => 'setWeight',
        'weight_unit' => 'setWeightUnit',
        'length' => 'setLength',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'dimension_unit' => 'setDimensionUnit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'packaging_type' => 'getPackagingType',
        'weight' => 'getWeight',
        'weight_unit' => 'getWeightUnit',
        'length' => 'getLength',
        'width' => 'getWidth',
        'height' => 'getHeight',
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
    public const WEIGHT_UNIT_OUNCE = 'ounce';
    public const WEIGHT_UNIT_POUND = 'pound';
    public const WEIGHT_UNIT_GRAM = 'gram';
    public const WEIGHT_UNIT_KILOGRAM = 'kilogram';
    public const DIMENSION_UNIT_INCH = 'inch';
    public const DIMENSION_UNIT_CENTIMETER = 'centimeter';

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
    public function getWeightUnitAllowableValues()
    {
        return [
            self::WEIGHT_UNIT_OUNCE,
            self::WEIGHT_UNIT_POUND,
            self::WEIGHT_UNIT_GRAM,
            self::WEIGHT_UNIT_KILOGRAM,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDimensionUnitAllowableValues()
    {
        return [
            self::DIMENSION_UNIT_INCH,
            self::DIMENSION_UNIT_CENTIMETER,
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
        $this->setIfExists('packaging_type', $data ?? [], 'package');
        $this->setIfExists('weight', $data ?? [], null);
        $this->setIfExists('weight_unit', $data ?? [], 'ounce');
        $this->setIfExists('length', $data ?? [], null);
        $this->setIfExists('width', $data ?? [], null);
        $this->setIfExists('height', $data ?? [], null);
        $this->setIfExists('dimension_unit', $data ?? [], 'inch');
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

        $allowedValues = $this->getPackagingTypeAllowableValues();
        if (!is_null($this->container['packaging_type']) && !in_array($this->container['packaging_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'packaging_type', must be one of '%s'",
                $this->container['packaging_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getWeightUnitAllowableValues();
        if (!is_null($this->container['weight_unit']) && !in_array($this->container['weight_unit'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'weight_unit', must be one of '%s'",
                $this->container['weight_unit'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDimensionUnitAllowableValues();
        if (!is_null($this->container['dimension_unit']) && !in_array($this->container['dimension_unit'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'dimension_unit', must be one of '%s'",
                $this->container['dimension_unit'],
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
     * Gets weight
     *
     * @return float|null
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param float|null $weight _Weight_
     *
     * @return self
     */
    public function setWeight($weight)
    {
        if (is_null($weight)) {
            throw new \InvalidArgumentException('non-nullable weight cannot be null');
        }
        $this->container['weight'] = $weight;

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
     * @param string|null $weight_unit _Weight Unit_<br/>The units for the associated `weight` field
     *
     * @return self
     */
    public function setWeightUnit($weight_unit)
    {
        if (is_null($weight_unit)) {
            throw new \InvalidArgumentException('non-nullable weight_unit cannot be null');
        }
        $allowedValues = $this->getWeightUnitAllowableValues();
        if (!in_array($weight_unit, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'weight_unit', must be one of '%s'",
                    $weight_unit,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['weight_unit'] = $weight_unit;

        return $this;
    }

    /**
     * Gets length
     *
     * @return float|null
     */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
     * Sets length
     *
     * @param float|null $length _Length_<br/>The units for this field as set in the `dimension_unit` element
     *
     * @return self
     */
    public function setLength($length)
    {
        if (is_null($length)) {
            throw new \InvalidArgumentException('non-nullable length cannot be null');
        }
        $this->container['length'] = $length;

        return $this;
    }

    /**
     * Gets width
     *
     * @return float|null
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param float|null $width _Width_<br/>The units for this field as set in the `dimension_unit` element
     *
     * @return self
     */
    public function setWidth($width)
    {
        if (is_null($width)) {
            throw new \InvalidArgumentException('non-nullable width cannot be null');
        }
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets height
     *
     * @return float|null
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param float|null $height _Height_<br/>The units for this field as set in the `dimension_unit` element
     *
     * @return self
     */
    public function setHeight($height)
    {
        if (is_null($height)) {
            throw new \InvalidArgumentException('non-nullable height cannot be null');
        }
        $this->container['height'] = $height;

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
     * @param string|null $dimension_unit _Dimension Unit_<br/>The units for the associated `length`, `width`, and `height` fields
     *
     * @return self
     */
    public function setDimensionUnit($dimension_unit)
    {
        if (is_null($dimension_unit)) {
            throw new \InvalidArgumentException('non-nullable dimension_unit cannot be null');
        }
        $allowedValues = $this->getDimensionUnitAllowableValues();
        if (!in_array($dimension_unit, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'dimension_unit', must be one of '%s'",
                    $dimension_unit,
                    implode("', '", $allowedValues)
                )
            );
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


