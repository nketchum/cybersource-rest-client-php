<?php
/**
 * PtsV2PaymentsRefundPost201ResponseClientReferenceInformation
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
 * PtsV2PaymentsRefundPost201ResponseClientReferenceInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PtsV2PaymentsRefundPost201ResponseClientReferenceInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsV2PaymentsRefundPost201Response_clientReferenceInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'submitLocalDateTime' => 'string',
        'ownerMerchantId' => 'string',
        'returnReconciliationId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
        'submitLocalDateTime' => null,
        'ownerMerchantId' => null,
        'returnReconciliationId' => null
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
        'code' => 'code',
        'submitLocalDateTime' => 'submitLocalDateTime',
        'ownerMerchantId' => 'ownerMerchantId',
        'returnReconciliationId' => 'returnReconciliationId'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'submitLocalDateTime' => 'setSubmitLocalDateTime',
        'ownerMerchantId' => 'setOwnerMerchantId',
        'returnReconciliationId' => 'setReturnReconciliationId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'submitLocalDateTime' => 'getSubmitLocalDateTime',
        'ownerMerchantId' => 'getOwnerMerchantId',
        'returnReconciliationId' => 'getReturnReconciliationId'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['submitLocalDateTime'] = isset($data['submitLocalDateTime']) ? $data['submitLocalDateTime'] : null;
        $this->container['ownerMerchantId'] = isset($data['ownerMerchantId']) ? $data['ownerMerchantId'] : null;
        $this->container['returnReconciliationId'] = isset($data['returnReconciliationId']) ? $data['returnReconciliationId'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

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

        return true;
    }


    /**
     * Gets code
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     * @param string $code Merchant-generated order reference or tracking number. It is recommended that you send a unique value for each transaction so that you can perform meaningful searches for the transaction.  #### Used by **Authorization** Required field.  #### PIN Debit Requests for PIN debit reversals need to use the same merchant reference number that was used in the transaction that is being reversed.  Required field for all PIN Debit requests (purchase, credit, and reversal).  #### FDC Nashville Global Certain circumstances can cause the processor to truncate this value to 15 or 17 characters for Level II and Level III processing, which can cause a discrepancy between the value you submit and the value included in some processor reports.
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets submitLocalDateTime
     * @return string
     */
    public function getSubmitLocalDateTime()
    {
        return $this->container['submitLocalDateTime'];
    }

    /**
     * Sets submitLocalDateTime
     * @param string $submitLocalDateTime Date and time at your physical location.  Format: `YYYYMMDDhhmmss`, where YYYY = year, MM = month, DD = day, hh = hour, mm = minutes ss = seconds  #### PIN Debit Optional field for PIN Debit purchase and credit requests.
     * @return $this
     */
    public function setSubmitLocalDateTime($submitLocalDateTime)
    {
        $this->container['submitLocalDateTime'] = $submitLocalDateTime;

        return $this;
    }

    /**
     * Gets ownerMerchantId
     * @return string
     */
    public function getOwnerMerchantId()
    {
        return $this->container['ownerMerchantId'];
    }

    /**
     * Sets ownerMerchantId
     * @param string $ownerMerchantId Merchant ID that was used to create the subscription or customer profile for which the service was requested.  If your CyberSource account is enabled for Recurring Billing, this field is returned only if you are using subscription sharing and if your merchant ID is in the same merchant ID pool as the owner merchant ID.  If your CyberSource account is enabled for Payment Tokenization, this field is returned only if you are using profile sharing and if your merchant ID is in the same merchant ID pool as the owner merchant ID.
     * @return $this
     */
    public function setOwnerMerchantId($ownerMerchantId)
    {
        $this->container['ownerMerchantId'] = $ownerMerchantId;

        return $this;
    }

    /**
     * Gets returnReconciliationId
     * @return string
     */
    public function getReturnReconciliationId()
    {
        return $this->container['returnReconciliationId'];
    }

    /**
     * Sets returnReconciliationId
     * @param string $returnReconciliationId A new ID which is created for refund
     * @return $this
     */
    public function setReturnReconciliationId($returnReconciliationId)
    {
        $this->container['returnReconciliationId'] = $returnReconciliationId;

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


