<?php
/**
 * InlineResponse4006
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Merged Spec
 *
 * All CyberSource API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Model;

use \ArrayAccess;

/**
 * InlineResponse4006 Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse4006 implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_400_6';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'correlationId' => 'string',
        'details' => '\CyberSource\Model\InlineResponse4006Details[]',
        'informationLink' => 'string',
        'message' => 'string',
        'reason' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'correlationId' => null,
        'details' => null,
        'informationLink' => null,
        'message' => null,
        'reason' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'correlationId' => 'correlationId',
        'details' => 'details',
        'informationLink' => 'informationLink',
        'message' => 'message',
        'reason' => 'reason'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'correlationId' => 'setCorrelationId',
        'details' => 'setDetails',
        'informationLink' => 'setInformationLink',
        'message' => 'setMessage',
        'reason' => 'setReason'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'correlationId' => 'getCorrelationId',
        'details' => 'getDetails',
        'informationLink' => 'getInformationLink',
        'message' => 'getMessage',
        'reason' => 'getReason'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const REASON_INVALID_APIKEY = 'INVALID_APIKEY';
    const REASON_INVALID_SHIPPING_INPUT_PARAMS = 'INVALID_SHIPPING_INPUT_PARAMS';
    const REASON_CAPTURE_CONTEXT_INVALID = 'CAPTURE_CONTEXT_INVALID';
    const REASON_CAPTURE_CONTEXT_EXPIRED = 'CAPTURE_CONTEXT_EXPIRED';
    const REASON_SDK_XHR_ERROR = 'SDK_XHR_ERROR';
    const REASON_UNIFIEDPAYMENTS_VALIDATION_PARAMS = 'UNIFIEDPAYMENTS_VALIDATION_PARAMS';
    const REASON_UNIFIEDPAYMENTS_VALIDATION_FIELDS = 'UNIFIEDPAYMENTS_VALIDATION_FIELDS';
    const REASON_UNIFIEDPAYMENT_PAYMENT_PARAMITERS = 'UNIFIEDPAYMENT_PAYMENT_PARAMITERS';
    const REASON_CREATE_TOKEN_TIMEOUT = 'CREATE_TOKEN_TIMEOUT';
    const REASON_CREATE_TOKEN_XHR_ERROR = 'CREATE_TOKEN_XHR_ERROR';
    const REASON_SHOW_LOAD_CONTAINER_SELECTOR = 'SHOW_LOAD_CONTAINER_SELECTOR';
    const REASON_SHOW_LOAD_INVALID_CONTAINER = 'SHOW_LOAD_INVALID_CONTAINER';
    const REASON_SHOW_TOKEN_TIMEOUT = 'SHOW_TOKEN_TIMEOUT';
    const REASON_SHOW_TOKEN_XHR_ERROR = 'SHOW_TOKEN_XHR_ERROR';
    const REASON_SHOW_PAYMENT_TIMEOUT = 'SHOW_PAYMENT_TIMEOUT';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getReasonAllowableValues()
    {
        return [
            self::REASON_INVALID_APIKEY,
            self::REASON_INVALID_SHIPPING_INPUT_PARAMS,
            self::REASON_CAPTURE_CONTEXT_INVALID,
            self::REASON_CAPTURE_CONTEXT_EXPIRED,
            self::REASON_SDK_XHR_ERROR,
            self::REASON_UNIFIEDPAYMENTS_VALIDATION_PARAMS,
            self::REASON_UNIFIEDPAYMENTS_VALIDATION_FIELDS,
            self::REASON_UNIFIEDPAYMENT_PAYMENT_PARAMITERS,
            self::REASON_CREATE_TOKEN_TIMEOUT,
            self::REASON_CREATE_TOKEN_XHR_ERROR,
            self::REASON_SHOW_LOAD_CONTAINER_SELECTOR,
            self::REASON_SHOW_LOAD_INVALID_CONTAINER,
            self::REASON_SHOW_TOKEN_TIMEOUT,
            self::REASON_SHOW_TOKEN_XHR_ERROR,
            self::REASON_SHOW_PAYMENT_TIMEOUT,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['correlationId'] = isset($data['correlationId']) ? $data['correlationId'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['informationLink'] = isset($data['informationLink']) ? $data['informationLink'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['message'] === null) {
            $invalid_properties[] = "'message' can't be null";
        }
        if ($this->container['reason'] === null) {
            $invalid_properties[] = "'reason' can't be null";
        }
        $allowed_values = $this->getReasonAllowableValues();
        if (!in_array($this->container['reason'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'reason', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['message'] === null) {
            return false;
        }
        if ($this->container['reason'] === null) {
            return false;
        }
        $allowed_values = $this->getReasonAllowableValues();
        if (!in_array($this->container['reason'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets correlationId
     * @return string
     */
    public function getCorrelationId()
    {
        return $this->container['correlationId'];
    }

    /**
     * Sets correlationId
     * @param string $correlationId
     * @return $this
     */
    public function setCorrelationId($correlationId)
    {
        $this->container['correlationId'] = $correlationId;

        return $this;
    }

    /**
     * Gets details
     * @return \CyberSource\Model\InlineResponse4006Details[]
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     * @param \CyberSource\Model\InlineResponse4006Details[] $details
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets informationLink
     * @return string
     */
    public function getInformationLink()
    {
        return $this->container['informationLink'];
    }

    /**
     * Sets informationLink
     * @param string $informationLink
     * @return $this
     */
    public function setInformationLink($informationLink)
    {
        $this->container['informationLink'] = $informationLink;

        return $this;
    }

    /**
     * Gets message
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     * @param string $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets reason
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     * @param string $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $allowed_values = $this->getReasonAllowableValues();
        if (!in_array($reason, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'reason', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['reason'] = $reason;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    #[\ReturnTypeWillChange]
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
     * @param  integer $offset Offset
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this));
    }
}


