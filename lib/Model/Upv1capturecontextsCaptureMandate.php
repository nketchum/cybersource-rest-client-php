<?php
/**
 * Upv1capturecontextsCaptureMandate
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
 * Upv1capturecontextsCaptureMandate Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Upv1capturecontextsCaptureMandate implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'upv1capturecontexts_captureMandate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'billingType' => 'string',
        'requestEmail' => 'bool',
        'requestPhone' => 'bool',
        'requestShipping' => 'bool',
        'shipToCountries' => 'string[]',
        'showAcceptedNetworkIcons' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'billingType' => null,
        'requestEmail' => null,
        'requestPhone' => null,
        'requestShipping' => null,
        'shipToCountries' => null,
        'showAcceptedNetworkIcons' => null
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
        'billingType' => 'billingType',
        'requestEmail' => 'requestEmail',
        'requestPhone' => 'requestPhone',
        'requestShipping' => 'requestShipping',
        'shipToCountries' => 'shipToCountries',
        'showAcceptedNetworkIcons' => 'showAcceptedNetworkIcons'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'billingType' => 'setBillingType',
        'requestEmail' => 'setRequestEmail',
        'requestPhone' => 'setRequestPhone',
        'requestShipping' => 'setRequestShipping',
        'shipToCountries' => 'setShipToCountries',
        'showAcceptedNetworkIcons' => 'setShowAcceptedNetworkIcons'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'billingType' => 'getBillingType',
        'requestEmail' => 'getRequestEmail',
        'requestPhone' => 'getRequestPhone',
        'requestShipping' => 'getRequestShipping',
        'shipToCountries' => 'getShipToCountries',
        'showAcceptedNetworkIcons' => 'getShowAcceptedNetworkIcons'
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
        $this->container['billingType'] = isset($data['billingType']) ? $data['billingType'] : null;
        $this->container['requestEmail'] = isset($data['requestEmail']) ? $data['requestEmail'] : null;
        $this->container['requestPhone'] = isset($data['requestPhone']) ? $data['requestPhone'] : null;
        $this->container['requestShipping'] = isset($data['requestShipping']) ? $data['requestShipping'] : null;
        $this->container['shipToCountries'] = isset($data['shipToCountries']) ? $data['shipToCountries'] : null;
        $this->container['showAcceptedNetworkIcons'] = isset($data['showAcceptedNetworkIcons']) ? $data['showAcceptedNetworkIcons'] : null;
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
     * Gets billingType
     * @return string
     */
    public function getBillingType()
    {
        return $this->container['billingType'];
    }

    /**
     * Sets billingType
     * @param string $billingType This field defines the type of Billing Address information captured through the Manual card Entry UX. FULL, PARTIAL
     * @return $this
     */
    public function setBillingType($billingType)
    {
        $this->container['billingType'] = $billingType;

        return $this;
    }

    /**
     * Gets requestEmail
     * @return bool
     */
    public function getRequestEmail()
    {
        return $this->container['requestEmail'];
    }

    /**
     * Sets requestEmail
     * @param bool $requestEmail Capture email contact information in the manual card acceptance screens.
     * @return $this
     */
    public function setRequestEmail($requestEmail)
    {
        $this->container['requestEmail'] = $requestEmail;

        return $this;
    }

    /**
     * Gets requestPhone
     * @return bool
     */
    public function getRequestPhone()
    {
        return $this->container['requestPhone'];
    }

    /**
     * Sets requestPhone
     * @param bool $requestPhone Capture email contact information in the manual card acceptance screens.
     * @return $this
     */
    public function setRequestPhone($requestPhone)
    {
        $this->container['requestPhone'] = $requestPhone;

        return $this;
    }

    /**
     * Gets requestShipping
     * @return bool
     */
    public function getRequestShipping()
    {
        return $this->container['requestShipping'];
    }

    /**
     * Sets requestShipping
     * @param bool $requestShipping Capture email contact information in the manual card acceptance screens.
     * @return $this
     */
    public function setRequestShipping($requestShipping)
    {
        $this->container['requestShipping'] = $requestShipping;

        return $this;
    }

    /**
     * Gets shipToCountries
     * @return string[]
     */
    public function getShipToCountries()
    {
        return $this->container['shipToCountries'];
    }

    /**
     * Sets shipToCountries
     * @param string[] $shipToCountries List of countries available to ship to. Use the two- character ISO Standard Country Codes.
     * @return $this
     */
    public function setShipToCountries($shipToCountries)
    {
        $this->container['shipToCountries'] = $shipToCountries;

        return $this;
    }

    /**
     * Gets showAcceptedNetworkIcons
     * @return bool
     */
    public function getShowAcceptedNetworkIcons()
    {
        return $this->container['showAcceptedNetworkIcons'];
    }

    /**
     * Sets showAcceptedNetworkIcons
     * @param bool $showAcceptedNetworkIcons Show the list of accepted payment icons in the payment button
     * @return $this
     */
    public function setShowAcceptedNetworkIcons($showAcceptedNetworkIcons)
    {
        $this->container['showAcceptedNetworkIcons'] = $showAcceptedNetworkIcons;

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


