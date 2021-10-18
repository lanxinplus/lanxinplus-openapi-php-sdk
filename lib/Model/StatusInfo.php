<?php
/**
 * StatusInfo
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
 * StatusInfo Class Doc Comment
 *
 * @category Class
 * @package  LanXinPlusOpenAPI
 * @author   LanXin+ team
 * @link     https://openapi.lanxin.cn
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class StatusInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StatusInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'baseVersion' => 'string',
        'noDisturb' => 'string',
        'unreadCount' => 'int',
        'userId' => 'string',
        'uuid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'baseVersion' => null,
        'noDisturb' => null,
        'unreadCount' => null,
        'userId' => null,
        'uuid' => null
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
        'baseVersion' => 'baseVersion',
        'noDisturb' => 'noDisturb',
        'unreadCount' => 'unreadCount',
        'userId' => 'userId',
        'uuid' => 'uuid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'baseVersion' => 'setBaseVersion',
        'noDisturb' => 'setNoDisturb',
        'unreadCount' => 'setUnreadCount',
        'userId' => 'setUserId',
        'uuid' => 'setUuid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'baseVersion' => 'getBaseVersion',
        'noDisturb' => 'getNoDisturb',
        'unreadCount' => 'getUnreadCount',
        'userId' => 'getUserId',
        'uuid' => 'getUuid'
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
        $this->container['baseVersion'] = $data['baseVersion'] ?? null;
        $this->container['noDisturb'] = $data['noDisturb'] ?? null;
        $this->container['unreadCount'] = $data['unreadCount'] ?? null;
        $this->container['userId'] = $data['userId'] ?? null;
        $this->container['uuid'] = $data['uuid'] ?? null;
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
     * Gets baseVersion
     *
     * @return string|null
     */
    public function getBaseVersion()
    {
        return $this->container['baseVersion'];
    }

    /**
     * Sets baseVersion
     *
     * @param string|null $baseVersion 保证每次请求时，该值递增。该值由应用服务端维护
     *
     * @return self
     */
    public function setBaseVersion($baseVersion)
    {
        $this->container['baseVersion'] = $baseVersion;

        return $this;
    }

    /**
     * Gets noDisturb
     *
     * @return string|null
     */
    public function getNoDisturb()
    {
        return $this->container['noDisturb'];
    }

    /**
     * Sets noDisturb
     *
     * @param string|null $noDisturb 免打扰标识。\"true\":开启免打扰功能，\"false\":关闭免打扰功能。注：noDistrub和unreadCount为互斥项，只能同时出现一个
     *
     * @return self
     */
    public function setNoDisturb($noDisturb)
    {
        $this->container['noDisturb'] = $noDisturb;

        return $this;
    }

    /**
     * Gets unreadCount
     *
     * @return int|null
     */
    public function getUnreadCount()
    {
        return $this->container['unreadCount'];
    }

    /**
     * Sets unreadCount
     *
     * @param int|null $unreadCount 会话未读数。注：noDistrub和unreadCount为互斥项，只能同时出现一个
     *
     * @return self
     */
    public function setUnreadCount($unreadCount)
    {
        $this->container['unreadCount'] = $unreadCount;

        return $this;
    }

    /**
     * Gets userId
     *
     * @return string|null
     */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
     * Sets userId
     *
     * @param string|null $userId 通知会话所有者，通知的peerId就是通知应用的appId
     *
     * @return self
     */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;

        return $this;
    }

    /**
     * Gets uuid
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string|null $uuid 一个随机字符串(uuid)
     *
     * @return self
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

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


