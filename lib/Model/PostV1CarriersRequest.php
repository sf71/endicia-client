<?php
/**
 * PostV1CarriersRequest
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
 * PostV1CarriersRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PostV1CarriersRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'post_v1_carriers_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'user_owned_account' => 'bool',
        'username' => 'string',
        'password' => 'string',
        'merchant_seller_id' => 'string',
        'mws_auth_token' => 'string',
        'email' => 'string',
        'account_number' => 'string',
        'ftp_username' => 'string',
        'ftp_password' => 'string',
        'api_key' => 'string',
        'client_id' => 'string',
        'client_secret' => 'string',
        'pickup_number' => 'string',
        'distribution_center' => 'string',
        'address' => '\OpenAPI\Client\Model\Address',
        'agree_to_eula' => 'bool',
        'mailer_id' => 'int',
        'profile_name' => 'string',
        'merchant_id' => 'int',
        'induction_site' => 'string',
        'access_key' => 'string',
        'account_country_code' => 'string',
        'account_postal_code' => 'string',
        'invoice' => '\OpenAPI\Client\Model\Invoice',
        'negotiated_rates' => 'bool',
        'device_identity' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'user_owned_account' => null,
        'username' => null,
        'password' => null,
        'merchant_seller_id' => null,
        'mws_auth_token' => null,
        'email' => 'email',
        'account_number' => null,
        'ftp_username' => null,
        'ftp_password' => null,
        'api_key' => null,
        'client_id' => null,
        'client_secret' => null,
        'pickup_number' => null,
        'distribution_center' => null,
        'address' => null,
        'agree_to_eula' => null,
        'mailer_id' => null,
        'profile_name' => null,
        'merchant_id' => null,
        'induction_site' => null,
        'access_key' => null,
        'account_country_code' => null,
        'account_postal_code' => null,
        'invoice' => null,
        'negotiated_rates' => null,
        'device_identity' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'user_owned_account' => false,
		'username' => false,
		'password' => false,
		'merchant_seller_id' => false,
		'mws_auth_token' => false,
		'email' => false,
		'account_number' => false,
		'ftp_username' => false,
		'ftp_password' => false,
		'api_key' => false,
		'client_id' => false,
		'client_secret' => false,
		'pickup_number' => false,
		'distribution_center' => false,
		'address' => false,
		'agree_to_eula' => false,
		'mailer_id' => false,
		'profile_name' => false,
		'merchant_id' => false,
		'induction_site' => false,
		'access_key' => false,
		'account_country_code' => false,
		'account_postal_code' => false,
		'invoice' => false,
		'negotiated_rates' => false,
		'device_identity' => false
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
        'user_owned_account' => 'user_owned_account',
        'username' => 'username',
        'password' => 'password',
        'merchant_seller_id' => 'merchant_seller_id',
        'mws_auth_token' => 'mws_auth_token',
        'email' => 'email',
        'account_number' => 'account_number',
        'ftp_username' => 'ftp_username',
        'ftp_password' => 'ftp_password',
        'api_key' => 'api_key',
        'client_id' => 'client_id',
        'client_secret' => 'client_secret',
        'pickup_number' => 'pickup_number',
        'distribution_center' => 'distribution_center',
        'address' => 'address',
        'agree_to_eula' => 'agree_to_eula',
        'mailer_id' => 'mailer_id',
        'profile_name' => 'profile_name',
        'merchant_id' => 'merchant_id',
        'induction_site' => 'induction_site',
        'access_key' => 'access_key',
        'account_country_code' => 'account_country_code',
        'account_postal_code' => 'account_postal_code',
        'invoice' => 'invoice',
        'negotiated_rates' => 'negotiated_rates',
        'device_identity' => 'device_identity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'user_owned_account' => 'setUserOwnedAccount',
        'username' => 'setUsername',
        'password' => 'setPassword',
        'merchant_seller_id' => 'setMerchantSellerId',
        'mws_auth_token' => 'setMwsAuthToken',
        'email' => 'setEmail',
        'account_number' => 'setAccountNumber',
        'ftp_username' => 'setFtpUsername',
        'ftp_password' => 'setFtpPassword',
        'api_key' => 'setApiKey',
        'client_id' => 'setClientId',
        'client_secret' => 'setClientSecret',
        'pickup_number' => 'setPickupNumber',
        'distribution_center' => 'setDistributionCenter',
        'address' => 'setAddress',
        'agree_to_eula' => 'setAgreeToEula',
        'mailer_id' => 'setMailerId',
        'profile_name' => 'setProfileName',
        'merchant_id' => 'setMerchantId',
        'induction_site' => 'setInductionSite',
        'access_key' => 'setAccessKey',
        'account_country_code' => 'setAccountCountryCode',
        'account_postal_code' => 'setAccountPostalCode',
        'invoice' => 'setInvoice',
        'negotiated_rates' => 'setNegotiatedRates',
        'device_identity' => 'setDeviceIdentity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'user_owned_account' => 'getUserOwnedAccount',
        'username' => 'getUsername',
        'password' => 'getPassword',
        'merchant_seller_id' => 'getMerchantSellerId',
        'mws_auth_token' => 'getMwsAuthToken',
        'email' => 'getEmail',
        'account_number' => 'getAccountNumber',
        'ftp_username' => 'getFtpUsername',
        'ftp_password' => 'getFtpPassword',
        'api_key' => 'getApiKey',
        'client_id' => 'getClientId',
        'client_secret' => 'getClientSecret',
        'pickup_number' => 'getPickupNumber',
        'distribution_center' => 'getDistributionCenter',
        'address' => 'getAddress',
        'agree_to_eula' => 'getAgreeToEula',
        'mailer_id' => 'getMailerId',
        'profile_name' => 'getProfileName',
        'merchant_id' => 'getMerchantId',
        'induction_site' => 'getInductionSite',
        'access_key' => 'getAccessKey',
        'account_country_code' => 'getAccountCountryCode',
        'account_postal_code' => 'getAccountPostalCode',
        'invoice' => 'getInvoice',
        'negotiated_rates' => 'getNegotiatedRates',
        'device_identity' => 'getDeviceIdentity'
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
        $this->setIfExists('user_owned_account', $data ?? [], false);
        $this->setIfExists('username', $data ?? [], null);
        $this->setIfExists('password', $data ?? [], null);
        $this->setIfExists('merchant_seller_id', $data ?? [], null);
        $this->setIfExists('mws_auth_token', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('account_number', $data ?? [], null);
        $this->setIfExists('ftp_username', $data ?? [], null);
        $this->setIfExists('ftp_password', $data ?? [], null);
        $this->setIfExists('api_key', $data ?? [], null);
        $this->setIfExists('client_id', $data ?? [], null);
        $this->setIfExists('client_secret', $data ?? [], null);
        $this->setIfExists('pickup_number', $data ?? [], null);
        $this->setIfExists('distribution_center', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('agree_to_eula', $data ?? [], false);
        $this->setIfExists('mailer_id', $data ?? [], null);
        $this->setIfExists('profile_name', $data ?? [], null);
        $this->setIfExists('merchant_id', $data ?? [], null);
        $this->setIfExists('induction_site', $data ?? [], null);
        $this->setIfExists('access_key', $data ?? [], null);
        $this->setIfExists('account_country_code', $data ?? [], 'US');
        $this->setIfExists('account_postal_code', $data ?? [], null);
        $this->setIfExists('invoice', $data ?? [], null);
        $this->setIfExists('negotiated_rates', $data ?? [], null);
        $this->setIfExists('device_identity', $data ?? [], null);
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

        if ($this->container['user_owned_account'] === null) {
            $invalidProperties[] = "'user_owned_account' can't be null";
        }
        if ($this->container['username'] === null) {
            $invalidProperties[] = "'username' can't be null";
        }
        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
        }
        if ($this->container['merchant_seller_id'] === null) {
            $invalidProperties[] = "'merchant_seller_id' can't be null";
        }
        if ($this->container['mws_auth_token'] === null) {
            $invalidProperties[] = "'mws_auth_token' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['account_number'] === null) {
            $invalidProperties[] = "'account_number' can't be null";
        }
        if ($this->container['ftp_username'] === null) {
            $invalidProperties[] = "'ftp_username' can't be null";
        }
        if ($this->container['ftp_password'] === null) {
            $invalidProperties[] = "'ftp_password' can't be null";
        }
        if ($this->container['api_key'] === null) {
            $invalidProperties[] = "'api_key' can't be null";
        }
        if ($this->container['client_id'] === null) {
            $invalidProperties[] = "'client_id' can't be null";
        }
        if ($this->container['client_secret'] === null) {
            $invalidProperties[] = "'client_secret' can't be null";
        }
        if ($this->container['pickup_number'] === null) {
            $invalidProperties[] = "'pickup_number' can't be null";
        }
        if ($this->container['distribution_center'] === null) {
            $invalidProperties[] = "'distribution_center' can't be null";
        }
        if ($this->container['mailer_id'] === null) {
            $invalidProperties[] = "'mailer_id' can't be null";
        }
        if ($this->container['merchant_id'] === null) {
            $invalidProperties[] = "'merchant_id' can't be null";
        }
        if ($this->container['access_key'] === null) {
            $invalidProperties[] = "'access_key' can't be null";
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
     * Gets user_owned_account
     *
     * @return bool
     */
    public function getUserOwnedAccount()
    {
        return $this->container['user_owned_account'];
    }

    /**
     * Sets user_owned_account
     *
     * @param bool $user_owned_account user_owned_account
     *
     * @return self
     */
    public function setUserOwnedAccount($user_owned_account)
    {
        if (is_null($user_owned_account)) {
            throw new \InvalidArgumentException('non-nullable user_owned_account cannot be null');
        }
        $this->container['user_owned_account'] = $user_owned_account;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string $username username
     *
     * @return self
     */
    public function setUsername($username)
    {
        if (is_null($username)) {
            throw new \InvalidArgumentException('non-nullable username cannot be null');
        }
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password password
     *
     * @return self
     */
    public function setPassword($password)
    {
        if (is_null($password)) {
            throw new \InvalidArgumentException('non-nullable password cannot be null');
        }
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets merchant_seller_id
     *
     * @return string
     */
    public function getMerchantSellerId()
    {
        return $this->container['merchant_seller_id'];
    }

    /**
     * Sets merchant_seller_id
     *
     * @param string $merchant_seller_id merchant_seller_id
     *
     * @return self
     */
    public function setMerchantSellerId($merchant_seller_id)
    {
        if (is_null($merchant_seller_id)) {
            throw new \InvalidArgumentException('non-nullable merchant_seller_id cannot be null');
        }
        $this->container['merchant_seller_id'] = $merchant_seller_id;

        return $this;
    }

    /**
     * Gets mws_auth_token
     *
     * @return string
     */
    public function getMwsAuthToken()
    {
        return $this->container['mws_auth_token'];
    }

    /**
     * Sets mws_auth_token
     *
     * @param string $mws_auth_token mws_auth_token
     *
     * @return self
     */
    public function setMwsAuthToken($mws_auth_token)
    {
        if (is_null($mws_auth_token)) {
            throw new \InvalidArgumentException('non-nullable mws_auth_token cannot be null');
        }
        $this->container['mws_auth_token'] = $mws_auth_token;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets account_number
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number
     *
     * @param string $account_number account_number
     *
     * @return self
     */
    public function setAccountNumber($account_number)
    {
        if (is_null($account_number)) {
            throw new \InvalidArgumentException('non-nullable account_number cannot be null');
        }
        $this->container['account_number'] = $account_number;

        return $this;
    }

    /**
     * Gets ftp_username
     *
     * @return string
     */
    public function getFtpUsername()
    {
        return $this->container['ftp_username'];
    }

    /**
     * Sets ftp_username
     *
     * @param string $ftp_username ftp_username
     *
     * @return self
     */
    public function setFtpUsername($ftp_username)
    {
        if (is_null($ftp_username)) {
            throw new \InvalidArgumentException('non-nullable ftp_username cannot be null');
        }
        $this->container['ftp_username'] = $ftp_username;

        return $this;
    }

    /**
     * Gets ftp_password
     *
     * @return string
     */
    public function getFtpPassword()
    {
        return $this->container['ftp_password'];
    }

    /**
     * Sets ftp_password
     *
     * @param string $ftp_password ftp_password
     *
     * @return self
     */
    public function setFtpPassword($ftp_password)
    {
        if (is_null($ftp_password)) {
            throw new \InvalidArgumentException('non-nullable ftp_password cannot be null');
        }
        $this->container['ftp_password'] = $ftp_password;

        return $this;
    }

    /**
     * Gets api_key
     *
     * @return string
     */
    public function getApiKey()
    {
        return $this->container['api_key'];
    }

    /**
     * Sets api_key
     *
     * @param string $api_key api_key
     *
     * @return self
     */
    public function setApiKey($api_key)
    {
        if (is_null($api_key)) {
            throw new \InvalidArgumentException('non-nullable api_key cannot be null');
        }
        $this->container['api_key'] = $api_key;

        return $this;
    }

    /**
     * Gets client_id
     *
     * @return string
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id
     *
     * @param string $client_id client_id
     *
     * @return self
     */
    public function setClientId($client_id)
    {
        if (is_null($client_id)) {
            throw new \InvalidArgumentException('non-nullable client_id cannot be null');
        }
        $this->container['client_id'] = $client_id;

        return $this;
    }

    /**
     * Gets client_secret
     *
     * @return string
     */
    public function getClientSecret()
    {
        return $this->container['client_secret'];
    }

    /**
     * Sets client_secret
     *
     * @param string $client_secret client_secret
     *
     * @return self
     */
    public function setClientSecret($client_secret)
    {
        if (is_null($client_secret)) {
            throw new \InvalidArgumentException('non-nullable client_secret cannot be null');
        }
        $this->container['client_secret'] = $client_secret;

        return $this;
    }

    /**
     * Gets pickup_number
     *
     * @return string
     */
    public function getPickupNumber()
    {
        return $this->container['pickup_number'];
    }

    /**
     * Sets pickup_number
     *
     * @param string $pickup_number pickup_number
     *
     * @return self
     */
    public function setPickupNumber($pickup_number)
    {
        if (is_null($pickup_number)) {
            throw new \InvalidArgumentException('non-nullable pickup_number cannot be null');
        }
        $this->container['pickup_number'] = $pickup_number;

        return $this;
    }

    /**
     * Gets distribution_center
     *
     * @return string
     */
    public function getDistributionCenter()
    {
        return $this->container['distribution_center'];
    }

    /**
     * Sets distribution_center
     *
     * @param string $distribution_center distribution_center
     *
     * @return self
     */
    public function setDistributionCenter($distribution_center)
    {
        if (is_null($distribution_center)) {
            throw new \InvalidArgumentException('non-nullable distribution_center cannot be null');
        }
        $this->container['distribution_center'] = $distribution_center;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \OpenAPI\Client\Model\Address|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \OpenAPI\Client\Model\Address|null $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets agree_to_eula
     *
     * @return bool|null
     */
    public function getAgreeToEula()
    {
        return $this->container['agree_to_eula'];
    }

    /**
     * Sets agree_to_eula
     *
     * @param bool|null $agree_to_eula agree_to_eula
     *
     * @return self
     */
    public function setAgreeToEula($agree_to_eula)
    {
        if (is_null($agree_to_eula)) {
            throw new \InvalidArgumentException('non-nullable agree_to_eula cannot be null');
        }
        $this->container['agree_to_eula'] = $agree_to_eula;

        return $this;
    }

    /**
     * Gets mailer_id
     *
     * @return int
     */
    public function getMailerId()
    {
        return $this->container['mailer_id'];
    }

    /**
     * Sets mailer_id
     *
     * @param int $mailer_id mailer_id
     *
     * @return self
     */
    public function setMailerId($mailer_id)
    {
        if (is_null($mailer_id)) {
            throw new \InvalidArgumentException('non-nullable mailer_id cannot be null');
        }
        $this->container['mailer_id'] = $mailer_id;

        return $this;
    }

    /**
     * Gets profile_name
     *
     * @return string|null
     */
    public function getProfileName()
    {
        return $this->container['profile_name'];
    }

    /**
     * Sets profile_name
     *
     * @param string|null $profile_name profile_name
     *
     * @return self
     */
    public function setProfileName($profile_name)
    {
        if (is_null($profile_name)) {
            throw new \InvalidArgumentException('non-nullable profile_name cannot be null');
        }
        $this->container['profile_name'] = $profile_name;

        return $this;
    }

    /**
     * Gets merchant_id
     *
     * @return int
     */
    public function getMerchantId()
    {
        return $this->container['merchant_id'];
    }

    /**
     * Sets merchant_id
     *
     * @param int $merchant_id merchant_id
     *
     * @return self
     */
    public function setMerchantId($merchant_id)
    {
        if (is_null($merchant_id)) {
            throw new \InvalidArgumentException('non-nullable merchant_id cannot be null');
        }
        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets induction_site
     *
     * @return string|null
     */
    public function getInductionSite()
    {
        return $this->container['induction_site'];
    }

    /**
     * Sets induction_site
     *
     * @param string|null $induction_site induction_site
     *
     * @return self
     */
    public function setInductionSite($induction_site)
    {
        if (is_null($induction_site)) {
            throw new \InvalidArgumentException('non-nullable induction_site cannot be null');
        }
        $this->container['induction_site'] = $induction_site;

        return $this;
    }

    /**
     * Gets access_key
     *
     * @return string
     */
    public function getAccessKey()
    {
        return $this->container['access_key'];
    }

    /**
     * Sets access_key
     *
     * @param string $access_key access_key
     *
     * @return self
     */
    public function setAccessKey($access_key)
    {
        if (is_null($access_key)) {
            throw new \InvalidArgumentException('non-nullable access_key cannot be null');
        }
        $this->container['access_key'] = $access_key;

        return $this;
    }

    /**
     * Gets account_country_code
     *
     * @return string|null
     */
    public function getAccountCountryCode()
    {
        return $this->container['account_country_code'];
    }

    /**
     * Sets account_country_code
     *
     * @param string|null $account_country_code account_country_code
     *
     * @return self
     */
    public function setAccountCountryCode($account_country_code)
    {
        if (is_null($account_country_code)) {
            throw new \InvalidArgumentException('non-nullable account_country_code cannot be null');
        }
        $this->container['account_country_code'] = $account_country_code;

        return $this;
    }

    /**
     * Gets account_postal_code
     *
     * @return string|null
     */
    public function getAccountPostalCode()
    {
        return $this->container['account_postal_code'];
    }

    /**
     * Sets account_postal_code
     *
     * @param string|null $account_postal_code account_postal_code
     *
     * @return self
     */
    public function setAccountPostalCode($account_postal_code)
    {
        if (is_null($account_postal_code)) {
            throw new \InvalidArgumentException('non-nullable account_postal_code cannot be null');
        }
        $this->container['account_postal_code'] = $account_postal_code;

        return $this;
    }

    /**
     * Gets invoice
     *
     * @return \OpenAPI\Client\Model\Invoice|null
     */
    public function getInvoice()
    {
        return $this->container['invoice'];
    }

    /**
     * Sets invoice
     *
     * @param \OpenAPI\Client\Model\Invoice|null $invoice invoice
     *
     * @return self
     */
    public function setInvoice($invoice)
    {
        if (is_null($invoice)) {
            throw new \InvalidArgumentException('non-nullable invoice cannot be null');
        }
        $this->container['invoice'] = $invoice;

        return $this;
    }

    /**
     * Gets negotiated_rates
     *
     * @return bool|null
     */
    public function getNegotiatedRates()
    {
        return $this->container['negotiated_rates'];
    }

    /**
     * Sets negotiated_rates
     *
     * @param bool|null $negotiated_rates negotiated_rates
     *
     * @return self
     */
    public function setNegotiatedRates($negotiated_rates)
    {
        if (is_null($negotiated_rates)) {
            throw new \InvalidArgumentException('non-nullable negotiated_rates cannot be null');
        }
        $this->container['negotiated_rates'] = $negotiated_rates;

        return $this;
    }

    /**
     * Gets device_identity
     *
     * @return string|null
     */
    public function getDeviceIdentity()
    {
        return $this->container['device_identity'];
    }

    /**
     * Sets device_identity
     *
     * @param string|null $device_identity device_identity
     *
     * @return self
     */
    public function setDeviceIdentity($device_identity)
    {
        if (is_null($device_identity)) {
            throw new \InvalidArgumentException('non-nullable device_identity cannot be null');
        }
        $this->container['device_identity'] = $device_identity;

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


