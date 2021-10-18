<?php
/**
 * V1AppRoamingOrgsFetchData
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
 * V1AppRoamingOrgsFetchData Class Doc Comment
 *
 * @category Class
 * @package  LanXinPlusOpenAPI
 * @author   LanXin+ team
 * @link     https://openapi.lanxin.cn
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class V1AppRoamingOrgsFetchData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'V1AppRoamingOrgsFetchData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'hasMore' => 'bool',
        'latestVersion' => 'string',
        'orgList' => '\LanXinPlusOpenAPI\Model\AppRoamingOrgList[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'hasMore' => null,
        'latestVersion' => null,
        'orgList' => null
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
        'hasMore' => 'hasMore',
        'latestVersion' => 'latestVersion',
        'orgList' => 'orgList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'hasMore' => 'setHasMore',
        'latestVersion' => 'setLatestVersion',
        'orgList' => 'setOrgList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'hasMore' => 'getHasMore',
        'latestVersion' => 'getLatestVersion',
        'orgList' => 'getOrgList'
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
        $this->container['hasMore'] = $data['hasMore'] ?? null;
        $this->container['latestVersion'] = $data['latestVersion'] ?? null;
        $this->container['orgList'] = $data['orgList'] ?? null;
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
     * Gets hasMore
     *
     * @return bool|null
     */
    public function getHasMore()
    {
        return $this->container['hasMore'];
    }

    /**
     * Sets hasMore
     *
     * @param bool|null $hasMore 是否还有下一页数据，有-true，没有-false。
     *
     * @return self
     */
    public function setHasMore($hasMore)
    {
        $this->container['hasMore'] = $hasMore;

        return $this;
    }

    /**
     * Gets latestVersion
     *
     * @return string|null
     */
    public function getLatestVersion()
    {
        return $this->container['latestVersion'];
    }

    /**
     * Sets latestVersion
     *
     * @param string|null $latestVersion 返回数据集所包含的数据中最新的版本号，是一个时间戳字符串，单位：微秒，请求下一页时可以此值作为base_version传入。调用者需要保存该版本号到本地，下次增量请求数据时作为base_version传递到服务端。
     *
     * @return self
     */
    public function setLatestVersion($latestVersion)
    {
        $this->container['latestVersion'] = $latestVersion;

        return $this;
    }

    /**
     * Gets orgList
     *
     * @return \LanXinPlusOpenAPI\Model\AppRoamingOrgList[]|null
     */
    public function getOrgList()
    {
        return $this->container['orgList'];
    }

    /**
     * Sets orgList
     *
     * @param \LanXinPlusOpenAPI\Model\AppRoamingOrgList[]|null $orgList orgList
     *
     * @return self
     */
    public function setOrgList($orgList)
    {
        $this->container['orgList'] = $orgList;

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


