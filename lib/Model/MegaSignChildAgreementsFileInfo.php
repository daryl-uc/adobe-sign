<?php
/**
 * MegaSignChildAgreementsFileInfo
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
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

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * MegaSignChildAgreementsFileInfo Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MegaSignChildAgreementsFileInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MegaSignChildAgreementsFileInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'child_agreements_info_file_id' => 'string',
        'file_type' => 'string',
        'transient_document_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'child_agreements_info_file_id' => null,
        'file_type' => null,
        'transient_document_id' => null
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
        'child_agreements_info_file_id' => 'childAgreementsInfoFileId',
        'file_type' => 'fileType',
        'transient_document_id' => 'transientDocumentId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'child_agreements_info_file_id' => 'setChildAgreementsInfoFileId',
        'file_type' => 'setFileType',
        'transient_document_id' => 'setTransientDocumentId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'child_agreements_info_file_id' => 'getChildAgreementsInfoFileId',
        'file_type' => 'getFileType',
        'transient_document_id' => 'getTransientDocumentId'
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

    const FILE_TYPE_CSV = 'CSV';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFileTypeAllowableValues()
    {
        return [
            self::FILE_TYPE_CSV,
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
        $this->container['child_agreements_info_file_id'] = isset($data['child_agreements_info_file_id']) ? $data['child_agreements_info_file_id'] : null;
        $this->container['file_type'] = isset($data['file_type']) ? $data['file_type'] : null;
        $this->container['transient_document_id'] = isset($data['transient_document_id']) ? $data['transient_document_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getFileTypeAllowableValues();
        if (!is_null($this->container['file_type']) && !in_array($this->container['file_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'file_type', must be one of '%s'",
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
     * Gets child_agreements_info_file_id
     *
     * @return string
     */
    public function getChildAgreementsInfoFileId()
    {
        return $this->container['child_agreements_info_file_id'];
    }

    /**
     * Sets child_agreements_info_file_id
     *
     * @param string $child_agreements_info_file_id id of the file containg information about the existing childAgreementsInfo associated with the megaSign. Will be ignored in POST call and in case of GET call, this is the only thing that will be returned. The content of the file can be fetched through GET /megaSigns/{megaSignId}/childAgreementsInfo/{childAgreementsInfoFileId} endpoint.
     *
     * @return $this
     */
    public function setChildAgreementsInfoFileId($child_agreements_info_file_id)
    {
        $this->container['child_agreements_info_file_id'] = $child_agreements_info_file_id;

        return $this;
    }

    /**
     * Gets file_type
     *
     * @return string
     */
    public function getFileType()
    {
        return $this->container['file_type'];
    }

    /**
     * Sets file_type
     *
     * @param string $file_type Input type through which participantSetsInfos will be provided. Whichever input type is provided, the values should be provided in its corresponding value object. Currently we are supporting CSV file format for providing megaSIgn child recipients.
     *
     * @return $this
     */
    public function setFileType($file_type)
    {
        $allowedValues = $this->getFileTypeAllowableValues();
        if (!is_null($file_type) && !in_array($file_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'file_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['file_type'] = $file_type;

        return $this;
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
     * @param string $transient_document_id Transient id of the input file which contains participantSetsInfos. Currently only csv format is suppported. More details about CSV format <a href='https://www.adobe.com/go/documentcloud_megasigncsv'>here</a>
     *
     * @return $this
     */
    public function setTransientDocumentId($transient_document_id)
    {
        $this->container['transient_document_id'] = $transient_document_id;

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


