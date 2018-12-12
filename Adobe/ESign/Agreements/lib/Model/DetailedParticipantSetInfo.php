<?php
/**
 * DetailedParticipantSetInfo
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
 * DetailedParticipantSetInfo Class Doc Comment
 *
 * @category Class
 * @package  Adobe\ESign\Agreements
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DetailedParticipantSetInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DetailedParticipantSetInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'role' => 'string',
        'name' => 'string',
        'id' => 'string',
        'private_message' => 'string',
        'member_infos' => '\Adobe\ESign\Agreements\Model\DetailedParticipantInfo[]',
        'order' => 'int',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'role' => null,
        'name' => null,
        'id' => null,
        'private_message' => null,
        'member_infos' => null,
        'order' => null,
        'status' => null
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
        'role' => 'role',
        'name' => 'name',
        'id' => 'id',
        'private_message' => 'privateMessage',
        'member_infos' => 'memberInfos',
        'order' => 'order',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'role' => 'setRole',
        'name' => 'setName',
        'id' => 'setId',
        'private_message' => 'setPrivateMessage',
        'member_infos' => 'setMemberInfos',
        'order' => 'setOrder',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'role' => 'getRole',
        'name' => 'getName',
        'id' => 'getId',
        'private_message' => 'getPrivateMessage',
        'member_infos' => 'getMemberInfos',
        'order' => 'getOrder',
        'status' => 'getStatus'
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

    const ROLE_SIGNER = 'SIGNER';
    const ROLE_SENDER = 'SENDER';
    const ROLE_APPROVER = 'APPROVER';
    const ROLE_ACCEPTOR = 'ACCEPTOR';
    const ROLE_CERTIFIED_RECIPIENT = 'CERTIFIED_RECIPIENT';
    const ROLE_FORM_FILLER = 'FORM_FILLER';
    const ROLE_DELEGATE_TO_SIGNER = 'DELEGATE_TO_SIGNER';
    const ROLE_DELEGATE_TO_APPROVER = 'DELEGATE_TO_APPROVER';
    const ROLE_DELEGATE_TO_ACCEPTOR = 'DELEGATE_TO_ACCEPTOR';
    const ROLE_DELEGATE_TO_CERTIFIED_RECIPIENT = 'DELEGATE_TO_CERTIFIED_RECIPIENT';
    const ROLE_DELEGATE_TO_FORM_FILLER = 'DELEGATE_TO_FORM_FILLER';
    const ROLE_SHARE = 'SHARE';
    const STATUS_CANCELLED = 'CANCELLED';
    const STATUS_COMPLETED = 'COMPLETED';
    const STATUS_EXPIRED = 'EXPIRED';
    const STATUS_NOT_YET_VISIBLE = 'NOT_YET_VISIBLE';
    const STATUS_WAITING_FOR_OTHERS = 'WAITING_FOR_OTHERS';
    const STATUS_WAITING_FOR_MY_APPROVAL = 'WAITING_FOR_MY_APPROVAL';
    const STATUS_WAITING_FOR_AUTHORING = 'WAITING_FOR_AUTHORING';
    const STATUS_WAITING_FOR_MY_ACKNOWLEDGEMENT = 'WAITING_FOR_MY_ACKNOWLEDGEMENT';
    const STATUS_WAITING_FOR_MY_ACCEPTANCE = 'WAITING_FOR_MY_ACCEPTANCE';
    const STATUS_WAITING_FOR_MY_FORM_FILLING = 'WAITING_FOR_MY_FORM_FILLING';
    const STATUS_WAITING_FOR_MY_DELEGATION = 'WAITING_FOR_MY_DELEGATION';
    const STATUS_WAITING_FOR_MY_SIGNATURE = 'WAITING_FOR_MY_SIGNATURE';
    const STATUS_WAITING_FOR_MY_VERIFICATION = 'WAITING_FOR_MY_VERIFICATION';
    const STATUS_WAITING_FOR_PREFILL = 'WAITING_FOR_PREFILL';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRoleAllowableValues()
    {
        return [
            self::ROLE_SIGNER,
            self::ROLE_SENDER,
            self::ROLE_APPROVER,
            self::ROLE_ACCEPTOR,
            self::ROLE_CERTIFIED_RECIPIENT,
            self::ROLE_FORM_FILLER,
            self::ROLE_DELEGATE_TO_SIGNER,
            self::ROLE_DELEGATE_TO_APPROVER,
            self::ROLE_DELEGATE_TO_ACCEPTOR,
            self::ROLE_DELEGATE_TO_CERTIFIED_RECIPIENT,
            self::ROLE_DELEGATE_TO_FORM_FILLER,
            self::ROLE_SHARE,
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
            self::STATUS_CANCELLED,
            self::STATUS_COMPLETED,
            self::STATUS_EXPIRED,
            self::STATUS_NOT_YET_VISIBLE,
            self::STATUS_WAITING_FOR_OTHERS,
            self::STATUS_WAITING_FOR_MY_APPROVAL,
            self::STATUS_WAITING_FOR_AUTHORING,
            self::STATUS_WAITING_FOR_MY_ACKNOWLEDGEMENT,
            self::STATUS_WAITING_FOR_MY_ACCEPTANCE,
            self::STATUS_WAITING_FOR_MY_FORM_FILLING,
            self::STATUS_WAITING_FOR_MY_DELEGATION,
            self::STATUS_WAITING_FOR_MY_SIGNATURE,
            self::STATUS_WAITING_FOR_MY_VERIFICATION,
            self::STATUS_WAITING_FOR_PREFILL,
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
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['private_message'] = isset($data['private_message']) ? $data['private_message'] : null;
        $this->container['member_infos'] = isset($data['member_infos']) ? $data['member_infos'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getRoleAllowableValues();
        if (!is_null($this->container['role']) && !in_array($this->container['role'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'role', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
     * Gets role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param string $role Role assumed by all participants in the set (signer, approver etc.). This cannot be changed as part of the PUT call.
     *
     * @return $this
     */
    public function setRole($role)
    {
        $allowedValues = $this->getRoleAllowableValues();
        if (!is_null($role) && !in_array($role, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'role', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of ParticipantSet (it can be empty, but needs not to be unique in a single agreement). Maximum no of characters in participant set name is restricted to 255. This cannot be changed as part of the PUT call.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
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
     * @param string $id The unique identifier of the participant set. This cannot be changed as part of the PUT call.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets private_message
     *
     * @return string
     */
    public function getPrivateMessage()
    {
        return $this->container['private_message'];
    }

    /**
     * Sets private_message
     *
     * @param string $private_message Participant set's private message - all participants in the set will receive the same message. This cannot be changed as part of the PUT call.
     *
     * @return $this
     */
    public function setPrivateMessage($private_message)
    {
        $this->container['private_message'] = $private_message;

        return $this;
    }

    /**
     * Gets member_infos
     *
     * @return \Adobe\ESign\Agreements\Model\DetailedParticipantInfo[]
     */
    public function getMemberInfos()
    {
        return $this->container['member_infos'];
    }

    /**
     * Sets member_infos
     *
     * @param \Adobe\ESign\Agreements\Model\DetailedParticipantInfo[] $member_infos Array of ParticipantInfo objects, containing participant-specific data (e.g. email). All participants in the array belong to the same set
     *
     * @return $this
     */
    public function setMemberInfos($member_infos)
    {
        $this->container['member_infos'] = $member_infos;

        return $this;
    }

    /**
     * Gets order
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param int $order Index indicating sequential signing group (specified for hybrid routing). This cannot be changed as part of the PUT call.
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

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
     * @param string $status The agreement status with respect to the participant set. This cannot be changed as part of the PUT call.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

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


