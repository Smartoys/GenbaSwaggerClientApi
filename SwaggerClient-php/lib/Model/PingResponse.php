<?php
/**
 * PingResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Genba Digital Distribution API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.2
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * PingResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PingResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PingResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'etailer_name' => 'string',
        'customer_account_number' => 'string',
        'token_valid_from' => 'string',
        'token_valid_to' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'etailer_name' => null,
        'customer_account_number' => null,
        'token_valid_from' => null,
        'token_valid_to' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'etailer_name' => 'EtailerName',
        'customer_account_number' => 'CustomerAccountNumber',
        'token_valid_from' => 'TokenValidFrom',
        'token_valid_to' => 'TokenValidTo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'etailer_name' => 'setEtailerName',
        'customer_account_number' => 'setCustomerAccountNumber',
        'token_valid_from' => 'setTokenValidFrom',
        'token_valid_to' => 'setTokenValidTo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'etailer_name' => 'getEtailerName',
        'customer_account_number' => 'getCustomerAccountNumber',
        'token_valid_from' => 'getTokenValidFrom',
        'token_valid_to' => 'getTokenValidTo'
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
        return self::$swaggerModelName;
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
        $this->container['etailer_name'] = isset($data['etailer_name']) ? $data['etailer_name'] : null;
        $this->container['customer_account_number'] = isset($data['customer_account_number']) ? $data['customer_account_number'] : null;
        $this->container['token_valid_from'] = isset($data['token_valid_from']) ? $data['token_valid_from'] : null;
        $this->container['token_valid_to'] = isset($data['token_valid_to']) ? $data['token_valid_to'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['etailer_name'] === null) {
            $invalidProperties[] = "'etailer_name' can't be null";
        }
        if ($this->container['customer_account_number'] === null) {
            $invalidProperties[] = "'customer_account_number' can't be null";
        }
        if ($this->container['token_valid_from'] === null) {
            $invalidProperties[] = "'token_valid_from' can't be null";
        }
        if ($this->container['token_valid_to'] === null) {
            $invalidProperties[] = "'token_valid_to' can't be null";
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
     * Gets etailer_name
     *
     * @return string
     */
    public function getEtailerName()
    {
        return $this->container['etailer_name'];
    }

    /**
     * Sets etailer_name
     *
     * @param string $etailer_name The name of your eTailer
     *
     * @return $this
     */
    public function setEtailerName($etailer_name)
    {
        $this->container['etailer_name'] = $etailer_name;

        return $this;
    }

    /**
     * Gets customer_account_number
     *
     * @return string
     */
    public function getCustomerAccountNumber()
    {
        return $this->container['customer_account_number'];
    }

    /**
     * Sets customer_account_number
     *
     * @param string $customer_account_number Your customer account number
     *
     * @return $this
     */
    public function setCustomerAccountNumber($customer_account_number)
    {
        $this->container['customer_account_number'] = $customer_account_number;

        return $this;
    }

    /**
     * Gets token_valid_from
     *
     * @return string
     */
    public function getTokenValidFrom()
    {
        return $this->container['token_valid_from'];
    }

    /**
     * Sets token_valid_from
     *
     * @param string $token_valid_from Date/time from which your token is valid
     *
     * @return $this
     */
    public function setTokenValidFrom($token_valid_from)
    {
        $this->container['token_valid_from'] = $token_valid_from;

        return $this;
    }

    /**
     * Gets token_valid_to
     *
     * @return string
     */
    public function getTokenValidTo()
    {
        return $this->container['token_valid_to'];
    }

    /**
     * Sets token_valid_to
     *
     * @param string $token_valid_to Expiration date/time of your token
     *
     * @return $this
     */
    public function setTokenValidTo($token_valid_to)
    {
        $this->container['token_valid_to'] = $token_valid_to;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


