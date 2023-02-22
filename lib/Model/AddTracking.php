<?php
/**
 * AddTracking
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
 * AddTracking Class Doc Comment
 *
 * @category Class
 * @package  Zenkipay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AddTracking implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AddTracking';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'courier_type' => 'string',
        'tracking_id' => 'string',
        'courier_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'courier_type' => null,
        'tracking_id' => null,
        'courier_name' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'courier_type' => false,
		'tracking_id' => false,
		'courier_name' => false
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
        'courier_type' => 'courierType',
        'tracking_id' => 'trackingId',
        'courier_name' => 'courierName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'courier_type' => 'setCourierType',
        'tracking_id' => 'setTrackingId',
        'courier_name' => 'setCourierName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'courier_type' => 'getCourierType',
        'tracking_id' => 'getTrackingId',
        'courier_name' => 'getCourierName'
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

    public const COURIER_TYPE_EXTERNAL = 'EXTERNAL';
    public const COURIER_TYPE_INTERNAL = 'INTERNAL';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCourierTypeAllowableValues()
    {
        return [
            self::COURIER_TYPE_EXTERNAL,
            self::COURIER_TYPE_INTERNAL,
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
        $this->setIfExists('courier_type', $data ?? [], null);
        $this->setIfExists('tracking_id', $data ?? [], null);
        $this->setIfExists('courier_name', $data ?? [], null);
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

        if ($this->container['courier_type'] === null) {
            $invalidProperties[] = "'courier_type' can't be null";
        }
        $allowedValues = $this->getCourierTypeAllowableValues();
        if (!is_null($this->container['courier_type']) && !in_array($this->container['courier_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'courier_type', must be one of '%s'",
                $this->container['courier_type'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['tracking_id']) && (mb_strlen($this->container['tracking_id']) > 128)) {
            $invalidProperties[] = "invalid value for 'tracking_id', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['courier_name']) && (mb_strlen($this->container['courier_name']) > 128)) {
            $invalidProperties[] = "invalid value for 'courier_name', the character length must be smaller than or equal to 128.";
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
     * Gets courier_type
     *
     * @return string
     */
    public function getCourierType()
    {
        return $this->container['courier_type'];
    }

    /**
     * Sets courier_type
     *
     * @param string $courier_type Courier type used to deliver the product or service.  Possible values: * EXTERNAL - In case of using an existing courier company, it must be indicated that the shipment will be external and the trackingId field must be informed. * INTERNAL - In case of using the merchant's own infrastructure to make the shipment, it must be indicated that the shipment will be internal and the courierName field must be informed.
     *
     * @return self
     */
    public function setCourierType($courier_type)
    {
        $allowedValues = $this->getCourierTypeAllowableValues();
        if (!in_array($courier_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'courier_type', must be one of '%s'",
                    $courier_type,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($courier_type)) {
            throw new \InvalidArgumentException('non-nullable courier_type cannot be null');
        }

        $this->container['courier_type'] = $courier_type;

        return $this;
    }

    /**
     * Gets tracking_id
     *
     * @return string|null
     */
    public function getTrackingId()
    {
        return $this->container['tracking_id'];
    }

    /**
     * Sets tracking_id
     *
     * @param string|null $tracking_id Unique tracking identifier generated by a courier.
     *
     * @return self
     */
    public function setTrackingId($tracking_id)
    {
        if (!is_null($tracking_id) && (mb_strlen($tracking_id) > 128)) {
            throw new \InvalidArgumentException('invalid length for $tracking_id when calling AddTracking., must be smaller than or equal to 128.');
        }


        if (is_null($tracking_id)) {
            throw new \InvalidArgumentException('non-nullable tracking_id cannot be null');
        }

        $this->container['tracking_id'] = $tracking_id;

        return $this;
    }

    /**
     * Gets courier_name
     *
     * @return string|null
     */
    public function getCourierName()
    {
        return $this->container['courier_name'];
    }

    /**
     * Sets courier_name
     *
     * @param string|null $courier_name Internal courier name of the business used to deliver the service or product.
     *
     * @return self
     */
    public function setCourierName($courier_name)
    {
        if (!is_null($courier_name) && (mb_strlen($courier_name) > 128)) {
            throw new \InvalidArgumentException('invalid length for $courier_name when calling AddTracking., must be smaller than or equal to 128.');
        }


        if (is_null($courier_name)) {
            throw new \InvalidArgumentException('non-nullable courier_name cannot be null');
        }

        $this->container['courier_name'] = $courier_name;

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


