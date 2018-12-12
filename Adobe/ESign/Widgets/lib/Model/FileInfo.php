<?php
/**
 * FileInfo
 *
 * PHP version 5
 *
 * @category Class
 * @package  Adobe\ESign\Widgets
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 6.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Adobe\ESign\Widgets\Model;

use \ArrayAccess;
use \Adobe\ESign\Widgets\ObjectSerializer;

/**
 * FileInfo Class Doc Comment
 *
 * @category Class
 * @package  Adobe\ESign\Widgets
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FileInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FileInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'transient_document_id' => 'string',
        'document' => '\Adobe\ESign\Widgets\Model\Document',
        'label' => 'string',
        'url_file_info' => '\Adobe\ESign\Widgets\Model\URLFileInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'transient_document_id' => null,
        'document' => null,
        'label' => null,
        'url_file_info' => null
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
        'transient_document_id' => 'transientDocumentId',
        'document' => 'document',
        'label' => 'label',
        'url_file_info' => 'urlFileInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transient_document_id' => 'setTransientDocumentId',
        'document' => 'setDocument',
        'label' => 'setLabel',
        'url_file_info' => 'setUrlFileInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transient_document_id' => 'getTransientDocumentId',
        'document' => 'getDocument',
        'label' => 'getLabel',
        'url_file_info' => 'getUrlFileInfo'
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
        $this->container['transient_document_id'] = isset($data['transient_document_id']) ? $data['transient_document_id'] : null;
        $this->container['document'] = isset($data['document']) ? $data['document'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['url_file_info'] = isset($data['url_file_info']) ? $data['url_file_info'] : null;
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
     * Gets transient_document_id
     *
     * @return string
     */
    public function getTransientDocumentId()
    {
        return $this->container['transient_document_id'];
    }

    /**
     * Sets transient_document_id
     *
     * @param string $transient_document_id ID for a transient document that will be added to the widget
     *
     * @return $this
     */
    public function setTransientDocumentId($transient_document_id)
    {
        $this->container['transient_document_id'] = $transient_document_id;

        return $this;
    }

    /**
     * Gets document
     *
     * @return \Adobe\ESign\Widgets\Model\Document
     */
    public function getDocument()
    {
        return $this->container['document'];
    }

    /**
     * Sets document
     *
     * @param \Adobe\ESign\Widgets\Model\Document $document A document that is associated with the widget. This field cannot be provided in POST call. In case of GET call, this is the only field returned in the response
     *
     * @return $this
     */
    public function setDocument($document)
    {
        $this->container['document'] = $document;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label The unique label value of a file info element. In case of custom workflow this will map a file to corresponding file element in workflow definition. This must be specified in case of custom workflow agreement creation request
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets url_file_info
     *
     * @return \Adobe\ESign\Widgets\Model\URLFileInfo
     */
    public function getUrlFileInfo()
    {
        return $this->container['url_file_info'];
    }

    /**
     * Sets url_file_info
     *
     * @param \Adobe\ESign\Widgets\Model\URLFileInfo $url_file_info URL for an external document to add to the agreement
     *
     * @return $this
     */
    public function setUrlFileInfo($url_file_info)
    {
        $this->container['url_file_info'] = $url_file_info;

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


