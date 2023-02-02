<?php
/**
 * MerchantMerchantInfo
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  fi.zenki.zenkipay.api
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

namespace fi.zenki.zenkipay.api\fi.zenki.zenkipay.api.model;

use \ArrayAccess;
use \fi.zenki.zenkipay.api\ObjectSerializer;

/**
 * MerchantMerchantInfo Class Doc Comment
 *
 * @category Class
 * @description General information of the merchant.
 * @package  fi.zenki.zenkipay.api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MerchantMerchantInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Merchant_merchantInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'commercial_name' => 'string',
        'legal_name' => 'string',
        'account_type' => 'string',
        'kyc_status' => 'string',
        'integration_status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'commercial_name' => null,
        'legal_name' => null,
        'account_type' => null,
        'kyc_status' => null,
        'integration_status' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'commercial_name' => false,
		'legal_name' => false,
		'account_type' => false,
		'kyc_status' => false,
		'integration_status' => false
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
        'commercial_name' => 'commercialName',
        'legal_name' => 'legalName',
        'account_type' => 'accountType',
        'kyc_status' => 'kycStatus',
        'integration_status' => 'integrationStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'commercial_name' => 'setCommercialName',
        'legal_name' => 'setLegalName',
        'account_type' => 'setAccountType',
        'kyc_status' => 'setKycStatus',
        'integration_status' => 'setIntegrationStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'commercial_name' => 'getCommercialName',
        'legal_name' => 'getLegalName',
        'account_type' => 'getAccountType',
        'kyc_status' => 'getKycStatus',
        'integration_status' => 'getIntegrationStatus'
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

    public const ACCOUNT_TYPE_PERSONAL = 'PERSONAL';
    public const ACCOUNT_TYPE_ENTITY = 'ENTITY';
    public const KYC_STATUS_PENDING = 'PENDING';
    public const KYC_STATUS_APPROVED = 'APPROVED';
    public const KYC_STATUS_REQUEST_INFO = 'REQUEST_INFO';
    public const KYC_STATUS_REJECTED = 'REJECTED';
    public const INTEGRATION_STATUS_PENDING = 'PENDING';
    public const INTEGRATION_STATUS_COMPLETED = 'COMPLETED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAccountTypeAllowableValues()
    {
        return [
            self::ACCOUNT_TYPE_PERSONAL,
            self::ACCOUNT_TYPE_ENTITY,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getKycStatusAllowableValues()
    {
        return [
            self::KYC_STATUS_PENDING,
            self::KYC_STATUS_APPROVED,
            self::KYC_STATUS_REQUEST_INFO,
            self::KYC_STATUS_REJECTED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIntegrationStatusAllowableValues()
    {
        return [
            self::INTEGRATION_STATUS_PENDING,
            self::INTEGRATION_STATUS_COMPLETED,
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
        $this->setIfExists('commercial_name', $data ?? [], null);
        $this->setIfExists('legal_name', $data ?? [], null);
        $this->setIfExists('account_type', $data ?? [], null);
        $this->setIfExists('kyc_status', $data ?? [], null);
        $this->setIfExists('integration_status', $data ?? [], null);
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

        if ($this->container['commercial_name'] === null) {
            $invalidProperties[] = "'commercial_name' can't be null";
        }
        if ((mb_strlen($this->container['commercial_name']) > 300)) {
            $invalidProperties[] = "invalid value for 'commercial_name', the character length must be smaller than or equal to 300.";
        }

        if (!is_null($this->container['legal_name']) && (mb_strlen($this->container['legal_name']) > 300)) {
            $invalidProperties[] = "invalid value for 'legal_name', the character length must be smaller than or equal to 300.";
        }

        if ($this->container['account_type'] === null) {
            $invalidProperties[] = "'account_type' can't be null";
        }
        $allowedValues = $this->getAccountTypeAllowableValues();
        if (!is_null($this->container['account_type']) && !in_array($this->container['account_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'account_type', must be one of '%s'",
                $this->container['account_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['kyc_status'] === null) {
            $invalidProperties[] = "'kyc_status' can't be null";
        }
        $allowedValues = $this->getKycStatusAllowableValues();
        if (!is_null($this->container['kyc_status']) && !in_array($this->container['kyc_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'kyc_status', must be one of '%s'",
                $this->container['kyc_status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['integration_status'] === null) {
            $invalidProperties[] = "'integration_status' can't be null";
        }
        $allowedValues = $this->getIntegrationStatusAllowableValues();
        if (!is_null($this->container['integration_status']) && !in_array($this->container['integration_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'integration_status', must be one of '%s'",
                $this->container['integration_status'],
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
     * Gets commercial_name
     *
     * @return string
     */
    public function getCommercialName()
    {
        return $this->container['commercial_name'];
    }

    /**
     * Sets commercial_name
     *
     * @param string $commercial_name Commercial name of the merchant that you registered when you created your Zenki account.
     *
     * @return self
     */
    public function setCommercialName($commercial_name)
    {
        if ((mb_strlen($commercial_name) > 300)) {
            throw new \InvalidArgumentException('invalid length for $commercial_name when calling MerchantMerchantInfo., must be smaller than or equal to 300.');
        }


        if (is_null($commercial_name)) {
            throw new \InvalidArgumentException('non-nullable commercial_name cannot be null');
        }

        $this->container['commercial_name'] = $commercial_name;

        return $this;
    }

    /**
     * Gets legal_name
     *
     * @return string|null
     */
    public function getLegalName()
    {
        return $this->container['legal_name'];
    }

    /**
     * Sets legal_name
     *
     * @param string|null $legal_name Merchant legal name that you register during the Zenki account activation process.
     *
     * @return self
     */
    public function setLegalName($legal_name)
    {
        if (!is_null($legal_name) && (mb_strlen($legal_name) > 300)) {
            throw new \InvalidArgumentException('invalid length for $legal_name when calling MerchantMerchantInfo., must be smaller than or equal to 300.');
        }


        if (is_null($legal_name)) {
            throw new \InvalidArgumentException('non-nullable legal_name cannot be null');
        }

        $this->container['legal_name'] = $legal_name;

        return $this;
    }

    /**
     * Gets account_type
     *
     * @return string
     */
    public function getAccountType()
    {
        return $this->container['account_type'];
    }

    /**
     * Sets account_type
     *
     * @param string $account_type Merchant account type.  Possible values: * PERSONAL - Natural person with commercial activity. * ENTITY - Company with commercial activity
     *
     * @return self
     */
    public function setAccountType($account_type)
    {
        $allowedValues = $this->getAccountTypeAllowableValues();
        if (!in_array($account_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'account_type', must be one of '%s'",
                    $account_type,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($account_type)) {
            throw new \InvalidArgumentException('non-nullable account_type cannot be null');
        }

        $this->container['account_type'] = $account_type;

        return $this;
    }

    /**
     * Gets kyc_status
     *
     * @return string
     */
    public function getKycStatus()
    {
        return $this->container['kyc_status'];
    }

    /**
     * Sets kyc_status
     *
     * @param string $kyc_status State of the documentary process in which the merchant is located.  Possible values: * PENDING      - Indicates that you still need to send information or documents to complete your KYC process. * APPROVED     - The documentary registration process has been completed and the Zenki staff has authorized the business to operate. * REQUEST_INFO - Zenki Staff requested more information or change in trade documents. * REJECTED     - Zenki Staff definitively rejected the merchant request.
     *
     * @return self
     */
    public function setKycStatus($kyc_status)
    {
        $allowedValues = $this->getKycStatusAllowableValues();
        if (!in_array($kyc_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'kyc_status', must be one of '%s'",
                    $kyc_status,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($kyc_status)) {
            throw new \InvalidArgumentException('non-nullable kyc_status cannot be null');
        }

        $this->container['kyc_status'] = $kyc_status;

        return $this;
    }

    /**
     * Gets integration_status
     *
     * @return string
     */
    public function getIntegrationStatus()
    {
        return $this->container['integration_status'];
    }

    /**
     * Sets integration_status
     *
     * @param string $integration_status Status of the integration process in merchant is located.  Possible values: * PENDING   - It indicates that the merchant has not yet concluded its technical integration process and is not yet in a productive environment. * COMPLETED - Indicates that the merchant has completed its technical integration process and is already in production or live.
     *
     * @return self
     */
    public function setIntegrationStatus($integration_status)
    {
        $allowedValues = $this->getIntegrationStatusAllowableValues();
        if (!in_array($integration_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'integration_status', must be one of '%s'",
                    $integration_status,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($integration_status)) {
            throw new \InvalidArgumentException('non-nullable integration_status cannot be null');
        }

        $this->container['integration_status'] = $integration_status;

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


