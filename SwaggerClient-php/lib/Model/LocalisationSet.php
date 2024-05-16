<?php
/**
 * LocalisationSet
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
 * LocalisationSet Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LocalisationSet implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LocalisationSet';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'spoken_language_set' => 'string[]',
        'subtitle_language_set' => 'string[]',
        'menu_language_set' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'spoken_language_set' => null,
        'subtitle_language_set' => null,
        'menu_language_set' => null
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
        'spoken_language_set' => 'SpokenLanguageSet',
        'subtitle_language_set' => 'SubtitleLanguageSet',
        'menu_language_set' => 'MenuLanguageSet'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'spoken_language_set' => 'setSpokenLanguageSet',
        'subtitle_language_set' => 'setSubtitleLanguageSet',
        'menu_language_set' => 'setMenuLanguageSet'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'spoken_language_set' => 'getSpokenLanguageSet',
        'subtitle_language_set' => 'getSubtitleLanguageSet',
        'menu_language_set' => 'getMenuLanguageSet'
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
        $this->container['spoken_language_set'] = isset($data['spoken_language_set']) ? $data['spoken_language_set'] : null;
        $this->container['subtitle_language_set'] = isset($data['subtitle_language_set']) ? $data['subtitle_language_set'] : null;
        $this->container['menu_language_set'] = isset($data['menu_language_set']) ? $data['menu_language_set'] : null;
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
     * Gets spoken_language_set
     *
     * @return string[]
     */
    public function getSpokenLanguageSet()
    {
        return $this->container['spoken_language_set'];
    }

    /**
     * Sets spoken_language_set
     *
     * @param string[] $spoken_language_set List of spoken languages
     *
     * @return $this
     */
    public function setSpokenLanguageSet($spoken_language_set)
    {
        $this->container['spoken_language_set'] = $spoken_language_set;

        return $this;
    }

    /**
     * Gets subtitle_language_set
     *
     * @return string[]
     */
    public function getSubtitleLanguageSet()
    {
        return $this->container['subtitle_language_set'];
    }

    /**
     * Sets subtitle_language_set
     *
     * @param string[] $subtitle_language_set List of subtitle languages
     *
     * @return $this
     */
    public function setSubtitleLanguageSet($subtitle_language_set)
    {
        $this->container['subtitle_language_set'] = $subtitle_language_set;

        return $this;
    }

    /**
     * Gets menu_language_set
     *
     * @return string[]
     */
    public function getMenuLanguageSet()
    {
        return $this->container['menu_language_set'];
    }

    /**
     * Sets menu_language_set
     *
     * @param string[] $menu_language_set List of menu languages
     *
     * @return $this
     */
    public function setMenuLanguageSet($menu_language_set)
    {
        $this->container['menu_language_set'] = $menu_language_set;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return bool
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
     * @return mixed
     */
    public function offsetGet($offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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


