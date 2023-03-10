<?php
/**
 * Order
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
 * Order Class Doc Comment
 *
 * @category Class
 * @description Object that represents the detailed information of an order.
 * @package  Zenkipay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Order implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Order';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'version' => 'string',
        'zenki_order_id' => 'string',
        'order_id' => 'string',
        'cart_id' => 'string',
        'type' => 'string',
        'country_code_iso2' => 'string',
        'status' => 'string',
        'created_at' => 'int',
        'shopper' => '\Zenkipay\Model\Shopper',
        'breakdown' => '\Zenkipay\Model\Breakdown',
        'payment_info' => '\Zenkipay\Model\OrderPaymentInfo',
        'settlement_info' => '\Zenkipay\Model\OrderSettlementInfo',
        'items' => '\Zenkipay\Model\Item[]',
        'metadata' => 'array<string,string>',
        'dispute' => '\Zenkipay\Model\OrderDispute',
        'claim' => '\Zenkipay\Model\OrderClaim',
        '_links' => '\Zenkipay\Model\OrderLinks',
        'payment_signature' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'version' => null,
        'zenki_order_id' => null,
        'order_id' => null,
        'cart_id' => null,
        'type' => null,
        'country_code_iso2' => null,
        'status' => null,
        'created_at' => 'int64',
        'shopper' => null,
        'breakdown' => null,
        'payment_info' => null,
        'settlement_info' => null,
        'items' => null,
        'metadata' => null,
        'dispute' => null,
        'claim' => null,
        '_links' => null,
        'payment_signature' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'version' => false,
		'zenki_order_id' => false,
		'order_id' => false,
		'cart_id' => false,
		'type' => false,
		'country_code_iso2' => false,
		'status' => false,
		'created_at' => false,
		'shopper' => true,
		'breakdown' => false,
		'payment_info' => true,
		'settlement_info' => true,
		'items' => false,
		'metadata' => true,
		'dispute' => false,
		'claim' => false,
		'_links' => true,
		'payment_signature' => false
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
        'version' => 'version',
        'zenki_order_id' => 'zenkiOrderId',
        'order_id' => 'orderId',
        'cart_id' => 'cartId',
        'type' => 'type',
        'country_code_iso2' => 'countryCodeIso2',
        'status' => 'status',
        'created_at' => 'createdAt',
        'shopper' => 'shopper',
        'breakdown' => 'breakdown',
        'payment_info' => 'paymentInfo',
        'settlement_info' => 'settlementInfo',
        'items' => 'items',
        'metadata' => 'metadata',
        'dispute' => 'dispute',
        'claim' => 'claim',
        '_links' => '_links',
        'payment_signature' => 'paymentSignature'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'version' => 'setVersion',
        'zenki_order_id' => 'setZenkiOrderId',
        'order_id' => 'setOrderId',
        'cart_id' => 'setCartId',
        'type' => 'setType',
        'country_code_iso2' => 'setCountryCodeIso2',
        'status' => 'setStatus',
        'created_at' => 'setCreatedAt',
        'shopper' => 'setShopper',
        'breakdown' => 'setBreakdown',
        'payment_info' => 'setPaymentInfo',
        'settlement_info' => 'setSettlementInfo',
        'items' => 'setItems',
        'metadata' => 'setMetadata',
        'dispute' => 'setDispute',
        'claim' => 'setClaim',
        '_links' => 'setLinks',
        'payment_signature' => 'setPaymentSignature'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'version' => 'getVersion',
        'zenki_order_id' => 'getZenkiOrderId',
        'order_id' => 'getOrderId',
        'cart_id' => 'getCartId',
        'type' => 'getType',
        'country_code_iso2' => 'getCountryCodeIso2',
        'status' => 'getStatus',
        'created_at' => 'getCreatedAt',
        'shopper' => 'getShopper',
        'breakdown' => 'getBreakdown',
        'payment_info' => 'getPaymentInfo',
        'settlement_info' => 'getSettlementInfo',
        'items' => 'getItems',
        'metadata' => 'getMetadata',
        'dispute' => 'getDispute',
        'claim' => 'getClaim',
        '_links' => 'getLinks',
        'payment_signature' => 'getPaymentSignature'
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

    public const TYPE_WITH_CARRIER = 'WITH_CARRIER';
    public const TYPE_WITHOUT_CARRIER = 'WITHOUT_CARRIER';
    public const TYPE_MIXED = 'MIXED';
    public const STATUS_PENDING = 'PENDING';
    public const STATUS_READY4_PAY = 'READY4PAY';
    public const STATUS_AWAITING_PAYMENT = 'AWAITING_PAYMENT';
    public const STATUS_AWAITING_DELIVERY = 'AWAITING_DELIVERY';
    public const STATUS_DELIVERED_SERVICE = 'DELIVERED_SERVICE';
    public const STATUS_AWAITING_SHIPMENT = 'AWAITING_SHIPMENT';
    public const STATUS_SHIPPED = 'SHIPPED';
    public const STATUS_SHIPMENT_ERROR = 'SHIPMENT_ERROR';
    public const STATUS_AWAITING_SHOPPER_APPROVAL = 'AWAITING_SHOPPER_APPROVAL';
    public const STATUS_DISPUTED = 'DISPUTED';
    public const STATUS_PENDING_SHOPPER_RETURN = 'PENDING_SHOPPER_RETURN';
    public const STATUS_REFUNDED = 'REFUNDED';
    public const STATUS_COMPLETED = 'COMPLETED';
    public const STATUS_SETTLED = 'SETTLED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_WITH_CARRIER,
            self::TYPE_WITHOUT_CARRIER,
            self::TYPE_MIXED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PENDING,
            self::STATUS_READY4_PAY,
            self::STATUS_AWAITING_PAYMENT,
            self::STATUS_AWAITING_DELIVERY,
            self::STATUS_DELIVERED_SERVICE,
            self::STATUS_AWAITING_SHIPMENT,
            self::STATUS_SHIPPED,
            self::STATUS_SHIPMENT_ERROR,
            self::STATUS_AWAITING_SHOPPER_APPROVAL,
            self::STATUS_DISPUTED,
            self::STATUS_PENDING_SHOPPER_RETURN,
            self::STATUS_REFUNDED,
            self::STATUS_COMPLETED,
            self::STATUS_SETTLED,
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
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('zenki_order_id', $data ?? [], null);
        $this->setIfExists('order_id', $data ?? [], null);
        $this->setIfExists('cart_id', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('country_code_iso2', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('shopper', $data ?? [], null);
        $this->setIfExists('breakdown', $data ?? [], null);
        $this->setIfExists('payment_info', $data ?? [], null);
        $this->setIfExists('settlement_info', $data ?? [], null);
        $this->setIfExists('items', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('dispute', $data ?? [], null);
        $this->setIfExists('claim', $data ?? [], null);
        $this->setIfExists('_links', $data ?? [], null);
        $this->setIfExists('payment_signature', $data ?? [], null);
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

        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ((mb_strlen($this->container['version']) > 9)) {
            $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 9.";
        }

        if ($this->container['zenki_order_id'] === null) {
            $invalidProperties[] = "'zenki_order_id' can't be null";
        }
        if ((mb_strlen($this->container['zenki_order_id']) > 128)) {
            $invalidProperties[] = "invalid value for 'zenki_order_id', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['order_id']) && (mb_strlen($this->container['order_id']) > 128)) {
            $invalidProperties[] = "invalid value for 'order_id', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['cart_id']) && (mb_strlen($this->container['cart_id']) > 128)) {
            $invalidProperties[] = "invalid value for 'cart_id', the character length must be smaller than or equal to 128.";
        }

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['country_code_iso2'] === null) {
            $invalidProperties[] = "'country_code_iso2' can't be null";
        }
        if ((mb_strlen($this->container['country_code_iso2']) > 2)) {
            $invalidProperties[] = "invalid value for 'country_code_iso2', the character length must be smaller than or equal to 2.";
        }

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if (($this->container['created_at'] < 0)) {
            $invalidProperties[] = "invalid value for 'created_at', must be bigger than or equal to 0.";
        }

        if ($this->container['breakdown'] === null) {
            $invalidProperties[] = "'breakdown' can't be null";
        }
        if ($this->container['items'] === null) {
            $invalidProperties[] = "'items' can't be null";
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
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version Data model version, its current value should be v1.0.0.
     *
     * @return self
     */
    public function setVersion($version)
    {
        if (is_null($version)) {
            throw new \InvalidArgumentException('non-nullable version cannot be null');
        }
        if ((mb_strlen($version) > 9)) {
            throw new \InvalidArgumentException('invalid length for $version when calling Order., must be smaller than or equal to 9.');
        }

        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets zenki_order_id
     *
     * @return string
     */
    public function getZenkiOrderId()
    {
        return $this->container['zenki_order_id'];
    }

    /**
     * Sets zenki_order_id
     *
     * @param string $zenki_order_id Unique order identifier generated by Zenkipay.
     *
     * @return self
     */
    public function setZenkiOrderId($zenki_order_id)
    {
        if (is_null($zenki_order_id)) {
            throw new \InvalidArgumentException('non-nullable zenki_order_id cannot be null');
        }
        if ((mb_strlen($zenki_order_id) > 128)) {
            throw new \InvalidArgumentException('invalid length for $zenki_order_id when calling Order., must be smaller than or equal to 128.');
        }

        $this->container['zenki_order_id'] = $zenki_order_id;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string|null $order_id Unique order identifier generated by the merchant.
     *
     * @return self
     */
    public function setOrderId($order_id)
    {
        if (is_null($order_id)) {
            throw new \InvalidArgumentException('non-nullable order_id cannot be null');
        }
        if ((mb_strlen($order_id) > 128)) {
            throw new \InvalidArgumentException('invalid length for $order_id when calling Order., must be smaller than or equal to 128.');
        }

        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets cart_id
     *
     * @return string|null
     */
    public function getCartId()
    {
        return $this->container['cart_id'];
    }

    /**
     * Sets cart_id
     *
     * @param string|null $cart_id Unique identifier of the shopping cart that allows identifying the purchase of one or more products or services.
     *
     * @return self
     */
    public function setCartId($cart_id)
    {
        if (is_null($cart_id)) {
            throw new \InvalidArgumentException('non-nullable cart_id cannot be null');
        }
        if ((mb_strlen($cart_id) > 128)) {
            throw new \InvalidArgumentException('invalid length for $cart_id when calling Order., must be smaller than or equal to 128.');
        }

        $this->container['cart_id'] = $cart_id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Indicates the model for the product delivery or service delivery.  Possible values: * WITH_CARRIER    - If a courier is going to be used for the shipment and delivery of the product or service. * WITHOUT_CARRIER - If a courier is not going to be used for the shipment and delivery of the product or service. * MIXED           - If a courier is going to be used to send part of the products or services and another part is delivered without using a courier.
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets country_code_iso2
     *
     * @return string
     */
    public function getCountryCodeIso2()
    {
        return $this->container['country_code_iso2'];
    }

    /**
     * Sets country_code_iso2
     *
     * @param string $country_code_iso2 Unique identifier of the country, the definition of the ISO_3166-1 standard is used with 2 characters, see: https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2 or https://www.iso.org/iso-3166-country-codes.html
     *
     * @return self
     */
    public function setCountryCodeIso2($country_code_iso2)
    {
        if (is_null($country_code_iso2)) {
            throw new \InvalidArgumentException('non-nullable country_code_iso2 cannot be null');
        }
        if ((mb_strlen($country_code_iso2) > 2)) {
            throw new \InvalidArgumentException('invalid length for $country_code_iso2 when calling Order., must be smaller than or equal to 2.');
        }

        $this->container['country_code_iso2'] = $country_code_iso2;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Order Status  Possible values: * PENDING                   - Waiting for the buyer to pay the payment order. * READY4PAY                 - The buyer has been shown the modal and the order is ready for the buyer to pay for the order with his wallet. * AWAITING_PAYMENT          - A first confirmation has been received by the blockchain network, it is waiting to have the required confirmations. * AWAITING_DELIVERY         - The payment for the product or service has already been made and the delivery of the product or service is in process. * DELIVERED_SERVICE         - The service has already been delivered. * AWAITING_SHIPMENT         - The guide for the products has already been uploaded and the shipment is in process. * SHIPPED                   - The product or service has been shipped. * SHIPMENT_ERROR            - There was a problem in the shipping process. * AWAITING_SHOPPER_APPROVAL - Waiting for approval from the buyer to confirm that they have received the product or service. * DISPUTED                  - The buyer has started a dispute process with the merchant. * PENDING_SHOPPER_RETURN    - The merchant is waiting for the buyer to return the product, as a result of the dispute. * REFUNDED                  - The product or service has been refunded to the buyer. * COMPLETED                 - The buyer confirms the receipt of the product or service satisfactorily and the exchange of the value of the sale to stable currency has been made only if applicable. * SETTLED                   - The merchant transaction has been settled.
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return int
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param int $created_at Date and time when Zenkipay received the request to create the order, in milliseconds and UTC format.  The Unix epoch (or Unix time or POSIX time or Unix timestamp) is the number of seconds elapsed since January 1, 1970 (midnight UTC/GMT), not counting leap seconds (in ISO 8601: 1970-01-01T00: 00:00Z)
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }

        if (($created_at < 0)) {
            throw new \InvalidArgumentException('invalid value for $created_at when calling Order., must be bigger than or equal to 0.');
        }

        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets shopper
     *
     * @return \Zenkipay\Model\Shopper|null
     */
    public function getShopper()
    {
        return $this->container['shopper'];
    }

    /**
     * Sets shopper
     *
     * @param \Zenkipay\Model\Shopper|null $shopper shopper
     *
     * @return self
     */
    public function setShopper($shopper)
    {
        if (is_null($shopper)) {
            array_push($this->openAPINullablesSetToNull, 'shopper');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('shopper', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['shopper'] = $shopper;

        return $this;
    }

    /**
     * Gets breakdown
     *
     * @return \Zenkipay\Model\Breakdown
     */
    public function getBreakdown()
    {
        return $this->container['breakdown'];
    }

    /**
     * Sets breakdown
     *
     * @param \Zenkipay\Model\Breakdown $breakdown breakdown
     *
     * @return self
     */
    public function setBreakdown($breakdown)
    {
        if (is_null($breakdown)) {
            throw new \InvalidArgumentException('non-nullable breakdown cannot be null');
        }
        $this->container['breakdown'] = $breakdown;

        return $this;
    }

    /**
     * Gets payment_info
     *
     * @return \Zenkipay\Model\OrderPaymentInfo|null
     */
    public function getPaymentInfo()
    {
        return $this->container['payment_info'];
    }

    /**
     * Sets payment_info
     *
     * @param \Zenkipay\Model\OrderPaymentInfo|null $payment_info payment_info
     *
     * @return self
     */
    public function setPaymentInfo($payment_info)
    {
        if (is_null($payment_info)) {
            array_push($this->openAPINullablesSetToNull, 'payment_info');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('payment_info', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['payment_info'] = $payment_info;

        return $this;
    }

    /**
     * Gets settlement_info
     *
     * @return \Zenkipay\Model\OrderSettlementInfo|null
     */
    public function getSettlementInfo()
    {
        return $this->container['settlement_info'];
    }

    /**
     * Sets settlement_info
     *
     * @param \Zenkipay\Model\OrderSettlementInfo|null $settlement_info settlement_info
     *
     * @return self
     */
    public function setSettlementInfo($settlement_info)
    {
        if (is_null($settlement_info)) {
            array_push($this->openAPINullablesSetToNull, 'settlement_info');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('settlement_info', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['settlement_info'] = $settlement_info;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Zenkipay\Model\Item[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Zenkipay\Model\Item[] $items Set of products or services considered within the shopping cart.
     *
     * @return self
     */
    public function setItems($items)
    {
        if (is_null($items)) {
            throw new \InvalidArgumentException('non-nullable items cannot be null');
        }
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return array<string,string>|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param array<string,string>|null $metadata Complementary order information that the merchant requires to send and inform Zenkipay.
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        if (is_null($metadata)) {
            array_push($this->openAPINullablesSetToNull, 'metadata');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('metadata', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets dispute
     *
     * @return \Zenkipay\Model\OrderDispute|null
     */
    public function getDispute()
    {
        return $this->container['dispute'];
    }

    /**
     * Sets dispute
     *
     * @param \Zenkipay\Model\OrderDispute|null $dispute dispute
     *
     * @return self
     */
    public function setDispute($dispute)
    {
        if (is_null($dispute)) {
            throw new \InvalidArgumentException('non-nullable dispute cannot be null');
        }
        $this->container['dispute'] = $dispute;

        return $this;
    }

    /**
     * Gets claim
     *
     * @return \Zenkipay\Model\OrderClaim|null
     */
    public function getClaim()
    {
        return $this->container['claim'];
    }

    /**
     * Sets claim
     *
     * @param \Zenkipay\Model\OrderClaim|null $claim claim
     *
     * @return self
     */
    public function setClaim($claim)
    {
        if (is_null($claim)) {
            throw new \InvalidArgumentException('non-nullable claim cannot be null');
        }
        $this->container['claim'] = $claim;

        return $this;
    }

    /**
     * Gets _links
     *
     * @return \Zenkipay\Model\OrderLinks|null
     */
    public function getLinks()
    {
        return $this->container['_links'];
    }

    /**
     * Sets _links
     *
     * @param \Zenkipay\Model\OrderLinks|null $_links _links
     *
     * @return self
     */
    public function setLinks($_links)
    {
        if (is_null($_links)) {
            array_push($this->openAPINullablesSetToNull, '_links');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('_links', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['_links'] = $_links;

        return $this;
    }

    /**
     * Gets payment_signature
     *
     * @return string|null
     */
    public function getPaymentSignature()
    {
        return $this->container['payment_signature'];
    }

    /**
     * Sets payment_signature
     *
     * @param string|null $payment_signature Signature of the payment order information to display the modal.
     *
     * @return self
     */
    public function setPaymentSignature($payment_signature)
    {
        if (is_null($payment_signature)) {
            throw new \InvalidArgumentException('non-nullable payment_signature cannot be null');
        }
        $this->container['payment_signature'] = $payment_signature;

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


