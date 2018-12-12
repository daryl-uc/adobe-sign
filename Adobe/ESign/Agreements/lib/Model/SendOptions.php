<?php
/**
 * SendOptions
 *
 * PHP version 5
 *
 * @category Class
 * @package  Adobe\ESign\Agreements
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

namespace Adobe\ESign\Agreements\Model;

use \ArrayAccess;
use \Adobe\ESign\Agreements\ObjectSerializer;

/**
 * SendOptions Class Doc Comment
 *
 * @category Class
 * @package  Adobe\ESign\Agreements
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SendOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SendOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'init_emails' => 'string',
        'in_flight_emails' => 'string',
        'completion_emails' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'init_emails' => null,
        'in_flight_emails' => null,
        'completion_emails' => null
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
        'init_emails' => 'initEmails',
        'in_flight_emails' => 'inFlightEmails',
        'completion_emails' => 'completionEmails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'init_emails' => 'setInitEmails',
        'in_flight_emails' => 'setInFlightEmails',
        'completion_emails' => 'setCompletionEmails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'init_emails' => 'getInitEmails',
        'in_flight_emails' => 'getInFlightEmails',
        'completion_emails' => 'getCompletionEmails'
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

    const INIT_EMAILS_ALL = 'ALL';
    const INIT_EMAILS_NONE = 'NONE';
    const IN_FLIGHT_EMAILS_ALL = 'ALL';
    const IN_FLIGHT_EMAILS_NONE = 'NONE';
    const COMPLETION_EMAILS_ALL = 'ALL';
    const COMPLETION_EMAILS_NONE = 'NONE';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInitEmailsAllowableValues()
    {
        return [
            self::INIT_EMAILS_ALL,
            self::INIT_EMAILS_NONE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInFlightEmailsAllowableValues()
    {
        return [
            self::IN_FLIGHT_EMAILS_ALL,
            self::IN_FLIGHT_EMAILS_NONE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCompletionEmailsAllowableValues()
    {
        return [
            self::COMPLETION_EMAILS_ALL,
            self::COMPLETION_EMAILS_NONE,
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
        $this->container['init_emails'] = isset($data['init_emails']) ? $data['init_emails'] : null;
        $this->container['in_flight_emails'] = isset($data['in_flight_emails']) ? $data['in_flight_emails'] : null;
        $this->container['completion_emails'] = isset($data['completion_emails']) ? $data['completion_emails'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getInitEmailsAllowableValues();
        if (!is_null($this->container['init_emails']) && !in_array($this->container['init_emails'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'init_emails', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getInFlightEmailsAllowableValues();
        if (!is_null($this->container['in_flight_emails']) && !in_array($this->container['in_flight_emails'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'in_flight_emails', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCompletionEmailsAllowableValues();
        if (!is_null($this->container['completion_emails']) && !in_array($this->container['completion_emails'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'completion_emails', must be one of '%s'",
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
     * Gets init_emails
     *
     * @return string
     */
    public function getInitEmails()
    {
        return $this->container['init_emails'];
    }

    /**
     * Sets init_emails
     *
     * @param string $init_emails Control notification mails for Agreement initiation events - ACTION_REQUESTED and CREATED
     *
     * @return $this
     */
    public function setInitEmails($init_emails)
    {
        $allowedValues = $this->getInitEmailsAllowableValues();
        if (!is_null($init_emails) && !in_array($init_emails, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'init_emails', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['init_emails'] = $init_emails;

        return $this;
    }

    /**
     * Gets in_flight_emails
     *
     * @return string
     */
    public function getInFlightEmails()
    {
        return $this->container['in_flight_emails'];
    }

    /**
     * Sets in_flight_emails
     *
     * @param string $in_flight_emails Control notification mails for agreement-in-process events - DELEGATED, REPLACED
     *
     * @return $this
     */
    public function setInFlightEmails($in_flight_emails)
    {
        $allowedValues = $this->getInFlightEmailsAllowableValues();
        if (!is_null($in_flight_emails) && !in_array($in_flight_emails, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'in_flight_emails', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['in_flight_emails'] = $in_flight_emails;

        return $this;
    }

    /**
     * Gets completion_emails
     *
     * @return string
     */
    public function getCompletionEmails()
    {
        return $this->container['completion_emails'];
    }

    /**
     * Sets completion_emails
     *
     * @param string $completion_emails Control notification mails for agreement completion events - COMPLETED, CANCELLED, EXPIRED and REJECTED
     *
     * @return $this
     */
    public function setCompletionEmails($completion_emails)
    {
        $allowedValues = $this->getCompletionEmailsAllowableValues();
        if (!is_null($completion_emails) && !in_array($completion_emails, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'completion_emails', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['completion_emails'] = $completion_emails;

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


