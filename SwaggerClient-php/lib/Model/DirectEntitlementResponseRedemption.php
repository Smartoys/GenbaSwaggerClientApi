<?php
/**
 * DirectEntitlementResponseRedemption
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
 * DirectEntitlementResponseRedemption Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DirectEntitlementResponseRedemption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DirectEntitlementResponseRedemption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'client_transaction_id' => 'string',
        'created' => 'string',
        'end_user_id' => 'string',
        'end_user_ticket' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'client_transaction_id' => null,
        'created' => null,
        'end_user_id' => null,
        'end_user_ticket' => null
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
        'id' => 'ID',
        'client_transaction_id' => 'ClientTransactionID',
        'created' => 'Created',
        'end_user_id' => 'EndUserID',
        'end_user_ticket' => 'EndUserTicket'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'client_transaction_id' => 'setClientTransactionId',
        'created' => 'setCreated',
        'end_user_id' => 'setEndUserId',
        'end_user_ticket' => 'setEndUserTicket'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'client_transaction_id' => 'getClientTransactionId',
        'created' => 'getCreated',
        'end_user_id' => 'getEndUserId',
        'end_user_ticket' => 'getEndUserTicket'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['client_transaction_id'] = isset($data['client_transaction_id']) ? $data['client_transaction_id'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['end_user_id'] = isset($data['end_user_id']) ? $data['end_user_id'] : null;
        $this->container['end_user_ticket'] = isset($data['end_user_ticket']) ? $data['end_user_ticket'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['client_transaction_id'] === null) {
            $invalidProperties[] = "'client_transaction_id' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['end_user_id'] === null) {
            $invalidProperties[] = "'end_user_id' can't be null";
        }
        if ($this->container['end_user_ticket'] === null) {
            $invalidProperties[] = "'end_user_ticket' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Unique ID of the redemption
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets client_transaction_id
     *
     * @return string
     */
    public function getClientTransactionId()
    {
        return $this->container['client_transaction_id'];
    }

    /**
     * Sets client_transaction_id
     *
     * @param string $client_transaction_id The unique ID of the transaction as provided by the client
     *
     * @return $this
     */
    public function setClientTransactionId($client_transaction_id)
    {
        $this->container['client_transaction_id'] = $client_transaction_id;

        return $this;
    }

    /**
     * Gets created
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param string $created Date/time of the redemption
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets end_user_id
     *
     * @return string
     */
    public function getEndUserId()
    {
        return $this->container['end_user_id'];
    }

    /**
     * Sets end_user_id
     *
     * @param string $end_user_id The user id of the end user (Uplay, Steam etc.)
     *
     * @return $this
     */
    public function setEndUserId($end_user_id)
    {
        $this->container['end_user_id'] = $end_user_id;

        return $this;
    }

    /**
     * Gets end_user_ticket
     *
     * @return string
     */
    public function getEndUserTicket()
    {
        return $this->container['end_user_ticket'];
    }

    /**
     * Sets end_user_ticket
     *
     * @param string $end_user_ticket The user ticket handed back from the 3rd party account service (UPlayConnect etc)
     *
     * @return $this
     */
    public function setEndUserTicket($end_user_ticket)
    {
        $this->container['end_user_ticket'] = $end_user_ticket;

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


