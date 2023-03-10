<?php
/**
 * CryptoPayment
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
 * OpenAPI Generator version: 6.3.0
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
 * CryptoPayment Class Doc Comment
 *
 * @category Class
 * @description Summary of the amount paid in crypto currency by the buyer.
 * @package  Zenkipay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CryptoPayment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CryptoPayment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'string',
        'currency' => 'string',
        'blockchain' => 'string',
        'transaction_hash' => 'string',
        'network_scan_url' => 'string',
        'transaction_status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amount' => null,
        'currency' => null,
        'blockchain' => null,
        'transaction_hash' => null,
        'network_scan_url' => null,
        'transaction_status' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'amount' => false,
		'currency' => false,
		'blockchain' => false,
		'transaction_hash' => true,
		'network_scan_url' => true,
		'transaction_status' => false
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
        'amount' => 'amount',
        'currency' => 'currency',
        'blockchain' => 'blockchain',
        'transaction_hash' => 'transactionHash',
        'network_scan_url' => 'networkScanUrl',
        'transaction_status' => 'transactionStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'blockchain' => 'setBlockchain',
        'transaction_hash' => 'setTransactionHash',
        'network_scan_url' => 'setNetworkScanUrl',
        'transaction_status' => 'setTransactionStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'blockchain' => 'getBlockchain',
        'transaction_hash' => 'getTransactionHash',
        'network_scan_url' => 'getNetworkScanUrl',
        'transaction_status' => 'getTransactionStatus'
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

    public const TRANSACTION_STATUS_CONFIRMING = 'CONFIRMING';
    public const TRANSACTION_STATUS_PARTIALLY_COMPLETED = 'PARTIALLY_COMPLETED';
    public const TRANSACTION_STATUS_COMPLETED = 'COMPLETED';
    public const TRANSACTION_STATUS_CANCELLED = 'CANCELLED';
    public const TRANSACTION_STATUS_REJECTED = 'REJECTED';
    public const TRANSACTION_STATUS_BLOCKED = 'BLOCKED';
    public const TRANSACTION_STATUS_FAILED = 'FAILED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransactionStatusAllowableValues()
    {
        return [
            self::TRANSACTION_STATUS_CONFIRMING,
            self::TRANSACTION_STATUS_PARTIALLY_COMPLETED,
            self::TRANSACTION_STATUS_COMPLETED,
            self::TRANSACTION_STATUS_CANCELLED,
            self::TRANSACTION_STATUS_REJECTED,
            self::TRANSACTION_STATUS_BLOCKED,
            self::TRANSACTION_STATUS_FAILED,
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
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('blockchain', $data ?? [], null);
        $this->setIfExists('transaction_hash', $data ?? [], null);
        $this->setIfExists('network_scan_url', $data ?? [], null);
        $this->setIfExists('transaction_status', $data ?? [], null);
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

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ((mb_strlen($this->container['amount']) > 64)) {
            $invalidProperties[] = "invalid value for 'amount', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ((mb_strlen($this->container['currency']) > 5)) {
            $invalidProperties[] = "invalid value for 'currency', the character length must be smaller than or equal to 5.";
        }

        if ($this->container['blockchain'] === null) {
            $invalidProperties[] = "'blockchain' can't be null";
        }
        if ((mb_strlen($this->container['blockchain']) > 30)) {
            $invalidProperties[] = "invalid value for 'blockchain', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['transaction_hash']) && (mb_strlen($this->container['transaction_hash']) > 300)) {
            $invalidProperties[] = "invalid value for 'transaction_hash', the character length must be smaller than or equal to 300.";
        }

        if (!is_null($this->container['network_scan_url']) && (mb_strlen($this->container['network_scan_url']) > 300)) {
            $invalidProperties[] = "invalid value for 'network_scan_url', the character length must be smaller than or equal to 300.";
        }

        $allowedValues = $this->getTransactionStatusAllowableValues();
        if (!is_null($this->container['transaction_status']) && !in_array($this->container['transaction_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'transaction_status', must be one of '%s'",
                $this->container['transaction_status'],
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
     * Gets amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string $amount Payment amount in cryptocurrency.
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        if ((mb_strlen($amount) > 64)) {
            throw new \InvalidArgumentException('invalid length for $amount when calling CryptoPayment., must be smaller than or equal to 64.');
        }

        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency Code of the cryptocurrency supported by Zenkipay, see: https://developer.zenki.fi/global-v1/docs/zenkipay-recursos-catalogos-criptomonedas-soportadas
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        if ((mb_strlen($currency) > 5)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling CryptoPayment., must be smaller than or equal to 5.');
        }

        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets blockchain
     *
     * @return string
     */
    public function getBlockchain()
    {
        return $this->container['blockchain'];
    }

    /**
     * Sets blockchain
     *
     * @param string $blockchain Supported blockchains list.  Posibles valroes: * Bitcoin * Ethereum * Litecoin * Bitcoin Cash * Solana * Algorand * Polygon * Arbitrum * BSC * Avalanche * Ripple * Terra * Cardano * Polkadot * Tron * Stellar * Ethereum Classic * Hedera Hashgraph * Tezos * EOSIO * Fantom Opera * ZCash * Celo * Dash * XDC Network
     *
     * @return self
     */
    public function setBlockchain($blockchain)
    {
        if (is_null($blockchain)) {
            throw new \InvalidArgumentException('non-nullable blockchain cannot be null');
        }
        if ((mb_strlen($blockchain) > 30)) {
            throw new \InvalidArgumentException('invalid length for $blockchain when calling CryptoPayment., must be smaller than or equal to 30.');
        }

        $this->container['blockchain'] = $blockchain;

        return $this;
    }

    /**
     * Gets transaction_hash
     *
     * @return string|null
     */
    public function getTransactionHash()
    {
        return $this->container['transaction_hash'];
    }

    /**
     * Sets transaction_hash
     *
     * @param string|null $transaction_hash Unique identifier of the transaction, provided by the blockchain.
     *
     * @return self
     */
    public function setTransactionHash($transaction_hash)
    {
        if (is_null($transaction_hash)) {
            array_push($this->openAPINullablesSetToNull, 'transaction_hash');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('transaction_hash', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($transaction_hash) && (mb_strlen($transaction_hash) > 300)) {
            throw new \InvalidArgumentException('invalid length for $transaction_hash when calling CryptoPayment., must be smaller than or equal to 300.');
        }

        $this->container['transaction_hash'] = $transaction_hash;

        return $this;
    }

    /**
     * Gets network_scan_url
     *
     * @return string|null
     */
    public function getNetworkScanUrl()
    {
        return $this->container['network_scan_url'];
    }

    /**
     * Sets network_scan_url
     *
     * @param string|null $network_scan_url URL to check the status of the transaction directly on the blockchain.
     *
     * @return self
     */
    public function setNetworkScanUrl($network_scan_url)
    {
        if (is_null($network_scan_url)) {
            array_push($this->openAPINullablesSetToNull, 'network_scan_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('network_scan_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($network_scan_url) && (mb_strlen($network_scan_url) > 300)) {
            throw new \InvalidArgumentException('invalid length for $network_scan_url when calling CryptoPayment., must be smaller than or equal to 300.');
        }

        $this->container['network_scan_url'] = $network_scan_url;

        return $this;
    }

    /**
     * Gets transaction_status
     *
     * @return string|null
     */
    public function getTransactionStatus()
    {
        return $this->container['transaction_status'];
    }

    /**
     * Sets transaction_status
     *
     * @param string|null $transaction_status Payment status transaction in the blockchain network.  Possible values: * CONFIRMING                        - Pending confirmation on the blockchain. * PARTIALLY_COMPLETED               - One or more of of the transaction records have completed successfully (Only for Aggregated transactions). * COMPLETED                         - Successfully completed. * CANCELLED                         - The transaction was rejected by the Zenkipay Staff or by the 3rd party service. * REJECTED                          - La transacci??n fue rechazada por el servicio de terceros. * BLOCKED                           - The transaction was blocked due to a policy rule. * FAILED                            - The transaction has failed.
     *
     * @return self
     */
    public function setTransactionStatus($transaction_status)
    {
        if (is_null($transaction_status)) {
            throw new \InvalidArgumentException('non-nullable transaction_status cannot be null');
        }
        $allowedValues = $this->getTransactionStatusAllowableValues();
        if (!in_array($transaction_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'transaction_status', must be one of '%s'",
                    $transaction_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transaction_status'] = $transaction_status;

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


