<?php
/**
 * Merchant
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Zenkipay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Zenkipay API
 *
 * Definition of technical specification of the product; Zenkipay is a gateway cryptocurrency payment system that allows merchant's to receive payments on their e-commerce portals. Unlike other platforms, Zenkipay ensures customer satisfaction through its payment process. guarantee deposit (delivered product and expected quality) to settle payment to the merchant, thus avoiding the loss of client assets due to online scams.
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: support@zenki.fi
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Zenkipay\Model;

use \ArrayAccess;
use \Zenkipay\ObjectSerializer;

/**
 * Merchant Class Doc Comment
 *
 * @category Class
 * @description Merchant information.
 * @package  Zenkipay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Merchant implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Merchant';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'merchant_info' => '\Zenkipay\Model\MerchantMerchantInfo',
        'integration_config' => '\Zenkipay\Model\MerchantIntegrationConfig',
        'crypto_love_percentage' => 'float',
        'crypto_assets' => '\Zenkipay\Model\MerchantCryptoAssetsInner[]',
        'escrow_config' => '\Zenkipay\Model\MerchantEscrowConfig'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'merchant_info' => null,
        'integration_config' => null,
        'crypto_love_percentage' => 'double',
        'crypto_assets' => null,
        'escrow_config' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'merchant_info' => false,
		'integration_config' => false,
		'crypto_love_percentage' => false,
		'crypto_assets' => false,
		'escrow_config' => false
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
        'merchant_info' => 'merchantInfo',
        'integration_config' => 'integrationConfig',
        'crypto_love_percentage' => 'cryptoLovePercentage',
        'crypto_assets' => 'cryptoAssets',
        'escrow_config' => 'escrowConfig'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'merchant_info' => 'setMerchantInfo',
        'integration_config' => 'setIntegrationConfig',
        'crypto_love_percentage' => 'setCryptoLovePercentage',
        'crypto_assets' => 'setCryptoAssets',
        'escrow_config' => 'setEscrowConfig'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'merchant_info' => 'getMerchantInfo',
        'integration_config' => 'getIntegrationConfig',
        'crypto_love_percentage' => 'getCryptoLovePercentage',
        'crypto_assets' => 'getCryptoAssets',
        'escrow_config' => 'getEscrowConfig'
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
        $this->setIfExists('merchant_info', $data ?? [], null);
        $this->setIfExists('integration_config', $data ?? [], null);
        $this->setIfExists('crypto_love_percentage', $data ?? [], null);
        $this->setIfExists('crypto_assets', $data ?? [], null);
        $this->setIfExists('escrow_config', $data ?? [], null);
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

        if ($this->container['merchant_info'] === null) {
            $invalidProperties[] = "'merchant_info' can't be null";
        }
        if ($this->container['integration_config'] === null) {
            $invalidProperties[] = "'integration_config' can't be null";
        }
        if ($this->container['crypto_love_percentage'] === null) {
            $invalidProperties[] = "'crypto_love_percentage' can't be null";
        }
        if (($this->container['crypto_love_percentage'] > 100)) {
            $invalidProperties[] = "invalid value for 'crypto_love_percentage', must be smaller than or equal to 100.";
        }

        if (($this->container['crypto_love_percentage'] < 0)) {
            $invalidProperties[] = "invalid value for 'crypto_love_percentage', must be bigger than or equal to 0.";
        }

        if ($this->container['escrow_config'] === null) {
            $invalidProperties[] = "'escrow_config' can't be null";
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
     * Gets merchant_info
     *
     * @return \Zenkipay\Model\MerchantMerchantInfo
     */
    public function getMerchantInfo()
    {
        return $this->container['merchant_info'];
    }

    /**
     * Sets merchant_info
     *
     * @param \Zenkipay\Model\MerchantMerchantInfo $merchant_info merchant_info
     *
     * @return self
     */
    public function setMerchantInfo($merchant_info)
    {

        if (is_null($merchant_info)) {
            throw new \InvalidArgumentException('non-nullable merchant_info cannot be null');
        }

        $this->container['merchant_info'] = $merchant_info;

        return $this;
    }

    /**
     * Gets integration_config
     *
     * @return \Zenkipay\Model\MerchantIntegrationConfig
     */
    public function getIntegrationConfig()
    {
        return $this->container['integration_config'];
    }

    /**
     * Sets integration_config
     *
     * @param \Zenkipay\Model\MerchantIntegrationConfig $integration_config integration_config
     *
     * @return self
     */
    public function setIntegrationConfig($integration_config)
    {

        if (is_null($integration_config)) {
            throw new \InvalidArgumentException('non-nullable integration_config cannot be null');
        }

        $this->container['integration_config'] = $integration_config;

        return $this;
    }

    /**
     * Gets crypto_love_percentage
     *
     * @return float
     */
    public function getCryptoLovePercentage()
    {
        return $this->container['crypto_love_percentage'];
    }

    /**
     * Sets crypto_love_percentage
     *
     * @param float $crypto_love_percentage Discount in percentage granted by the merchant to the buyer in his purchase for activating crypto love.
     *
     * @return self
     */
    public function setCryptoLovePercentage($crypto_love_percentage)
    {

        if (($crypto_love_percentage > 100)) {
            throw new \InvalidArgumentException('invalid value for $crypto_love_percentage when calling Merchant., must be smaller than or equal to 100.');
        }
        if (($crypto_love_percentage < 0)) {
            throw new \InvalidArgumentException('invalid value for $crypto_love_percentage when calling Merchant., must be bigger than or equal to 0.');
        }


        if (is_null($crypto_love_percentage)) {
            throw new \InvalidArgumentException('non-nullable crypto_love_percentage cannot be null');
        }

        $this->container['crypto_love_percentage'] = $crypto_love_percentage;

        return $this;
    }

    /**
     * Gets crypto_assets
     *
     * @return \Zenkipay\Model\MerchantCryptoAssetsInner[]|null
     */
    public function getCryptoAssets()
    {
        return $this->container['crypto_assets'];
    }

    /**
     * Sets crypto_assets
     *
     * @param \Zenkipay\Model\MerchantCryptoAssetsInner[]|null $crypto_assets Supported crypto currencies list.
     *
     * @return self
     */
    public function setCryptoAssets($crypto_assets)
    {

        if (is_null($crypto_assets)) {
            throw new \InvalidArgumentException('non-nullable crypto_assets cannot be null');
        }

        $this->container['crypto_assets'] = $crypto_assets;

        return $this;
    }

    /**
     * Gets escrow_config
     *
     * @return \Zenkipay\Model\MerchantEscrowConfig
     */
    public function getEscrowConfig()
    {
        return $this->container['escrow_config'];
    }

    /**
     * Sets escrow_config
     *
     * @param \Zenkipay\Model\MerchantEscrowConfig $escrow_config escrow_config
     *
     * @return self
     */
    public function setEscrowConfig($escrow_config)
    {

        if (is_null($escrow_config)) {
            throw new \InvalidArgumentException('non-nullable escrow_config cannot be null');
        }

        $this->container['escrow_config'] = $escrow_config;

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


