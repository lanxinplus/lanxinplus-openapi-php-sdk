<?php
/**
 * V1UserTokenCreateData
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  LanXinPlusOpenAPI
 * @author   LanXin OPEN
 * @link     https://openapi.lanxin.cn
 */

/**
 * LanXin+ OpenAPI
 *
 * LanXin+ OpenAPI Platform
 *
 * Generated by: https://openapi.lanxin.cn
 */

/**
 * NOTE: This class is auto generated by LanXin+(https://openapi.lanxin.cn).
 * https://openapi.lanxin.cn
 * Do not edit the class manually.
 */

namespace LanXinPlusOpenAPI\Model;

use \ArrayAccess;
use \LanXinPlusOpenAPI\ObjectSerializer;

/**
 * V1UserTokenCreateData Class Doc Comment
 *
 * @category Class
 * @package  LanXinPlusOpenAPI
 * @author   LanXin+ team
 * @link     https://openapi.lanxin.cn
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class V1UserTokenCreateData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'V1UserTokenCreateData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'expiresIn' => 'int',
        'scope' => 'string',
        'staffId' => 'string',
        'state' => 'string',
        'userToken' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'expiresIn' => null,
        'scope' => null,
        'staffId' => null,
        'state' => null,
        'userToken' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'expiresIn' => 'expiresIn',
        'scope' => 'scope',
        'staffId' => 'staffId',
        'state' => 'state',
        'userToken' => 'userToken'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'expiresIn' => 'setExpiresIn',
        'scope' => 'setScope',
        'staffId' => 'setStaffId',
        'state' => 'setState',
        'userToken' => 'setUserToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'expiresIn' => 'getExpiresIn',
        'scope' => 'getScope',
        'staffId' => 'getStaffId',
        'state' => 'getState',
        'userToken' => 'getUserToken'
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
        return self::$openAPIModelName;
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
        $this->container['expiresIn'] = $data['expiresIn'] ?? null;
        $this->container['scope'] = $data['scope'] ?? null;
        $this->container['staffId'] = $data['staffId'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['userToken'] = $data['userToken'] ?? null;
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
     * Gets expiresIn
     *
     * @return int|null
     */
    public function getExpiresIn()
    {
        return $this->container['expiresIn'];
    }

    /**
     * Sets expiresIn
     *
     * @param int|null $expiresIn Token 有效期（7200秒）
     *
     * @return self
     */
    public function setExpiresIn($expiresIn)
    {
        $this->container['expiresIn'] = $expiresIn;

        return $this;
    }

    /**
     * Gets scope
     *
     * @return string|null
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     *
     * @param string|null $scope 应用授权列表，多个授权请求需要以 scope=\"scope1,scope2\" 形式。
     *
     * @return self
     */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets staffId
     *
     * @return string|null
     */
    public function getStaffId()
    {
        return $this->container['staffId'];
    }

    /**
     * Sets staffId
     *
     * @param string|null $staffId 人员ID
     *
     * @return self
     */
    public function setStaffId($staffId)
    {
        $this->container['staffId'] = $staffId;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state 发起请求的时候携带的随机值，和该重定向请求唯一对应。同时，也能 按 OAUTH2 协议防止 CSRF 攻击
     *
     * @return self
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets userToken
     *
     * @return string|null
     */
    public function getUserToken()
    {
        return $this->container['userToken'];
    }

    /**
     * Sets userToken
     *
     * @param string|null $userToken 人员 Token
     *
     * @return self
     */
    public function setUserToken($userToken)
    {
        $this->container['userToken'] = $userToken;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

