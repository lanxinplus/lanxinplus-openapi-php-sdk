<?php
/**
 * V1StaffsUpdateRequestBody
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
 * V1StaffsUpdateRequestBody Class Doc Comment
 *
 * @category Class
 * @package  LanXinPlusOpenAPI
 * @author   LanXin+ team
 * @link     https://openapi.lanxin.cn
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class V1StaffsUpdateRequestBody implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'V1StaffsUpdateRequestBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'address' => 'string',
        'avatarId' => 'string',
        'birthdate' => 'string',
        'career' => '\LanXinPlusOpenAPI\Model\Resume[]',
        'departments' => '\LanXinPlusOpenAPI\Model\UDepartment[]',
        'duties' => 'string',
        'education' => '\LanXinPlusOpenAPI\Model\Resume[]',
        'email' => 'string',
        'employeeNumber' => 'string',
        'extAttr1' => 'string',
        'extAttr2' => 'string',
        'externalId' => 'string',
        'extraFieldSet' => 'array<string,object>',
        'extraPhones' => '\LanXinPlusOpenAPI\Model\MobilePhone[]',
        'gender' => 'int',
        'idNumber' => 'string',
        'introduction' => '\LanXinPlusOpenAPI\Model\Introduction',
        'loginName' => 'string',
        'loginWays' => 'int[]',
        'mobilePhone' => '\LanXinPlusOpenAPI\Model\MobilePhone',
        'name' => 'string',
        'nationality' => 'string',
        'nativePlace' => 'string',
        'parties' => 'string',
        'signature' => 'string',
        'status' => 'int',
        'tags' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'address' => null,
        'avatarId' => null,
        'birthdate' => null,
        'career' => null,
        'departments' => null,
        'duties' => null,
        'education' => null,
        'email' => null,
        'employeeNumber' => null,
        'extAttr1' => null,
        'extAttr2' => null,
        'externalId' => null,
        'extraFieldSet' => null,
        'extraPhones' => null,
        'gender' => null,
        'idNumber' => null,
        'introduction' => null,
        'loginName' => null,
        'loginWays' => null,
        'mobilePhone' => null,
        'name' => null,
        'nationality' => null,
        'nativePlace' => null,
        'parties' => null,
        'signature' => null,
        'status' => null,
        'tags' => null
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
        'address' => 'address',
        'avatarId' => 'avatarId',
        'birthdate' => 'birthdate',
        'career' => 'career',
        'departments' => 'departments',
        'duties' => 'duties',
        'education' => 'education',
        'email' => 'email',
        'employeeNumber' => 'employeeNumber',
        'extAttr1' => 'extAttr1',
        'extAttr2' => 'extAttr2',
        'externalId' => 'externalId',
        'extraFieldSet' => 'extraFieldSet',
        'extraPhones' => 'extraPhones',
        'gender' => 'gender',
        'idNumber' => 'idNumber',
        'introduction' => 'introduction',
        'loginName' => 'loginName',
        'loginWays' => 'loginWays',
        'mobilePhone' => 'mobilePhone',
        'name' => 'name',
        'nationality' => 'nationality',
        'nativePlace' => 'nativePlace',
        'parties' => 'parties',
        'signature' => 'signature',
        'status' => 'status',
        'tags' => 'tags'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
        'avatarId' => 'setAvatarId',
        'birthdate' => 'setBirthdate',
        'career' => 'setCareer',
        'departments' => 'setDepartments',
        'duties' => 'setDuties',
        'education' => 'setEducation',
        'email' => 'setEmail',
        'employeeNumber' => 'setEmployeeNumber',
        'extAttr1' => 'setExtAttr1',
        'extAttr2' => 'setExtAttr2',
        'externalId' => 'setExternalId',
        'extraFieldSet' => 'setExtraFieldSet',
        'extraPhones' => 'setExtraPhones',
        'gender' => 'setGender',
        'idNumber' => 'setIdNumber',
        'introduction' => 'setIntroduction',
        'loginName' => 'setLoginName',
        'loginWays' => 'setLoginWays',
        'mobilePhone' => 'setMobilePhone',
        'name' => 'setName',
        'nationality' => 'setNationality',
        'nativePlace' => 'setNativePlace',
        'parties' => 'setParties',
        'signature' => 'setSignature',
        'status' => 'setStatus',
        'tags' => 'setTags'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
        'avatarId' => 'getAvatarId',
        'birthdate' => 'getBirthdate',
        'career' => 'getCareer',
        'departments' => 'getDepartments',
        'duties' => 'getDuties',
        'education' => 'getEducation',
        'email' => 'getEmail',
        'employeeNumber' => 'getEmployeeNumber',
        'extAttr1' => 'getExtAttr1',
        'extAttr2' => 'getExtAttr2',
        'externalId' => 'getExternalId',
        'extraFieldSet' => 'getExtraFieldSet',
        'extraPhones' => 'getExtraPhones',
        'gender' => 'getGender',
        'idNumber' => 'getIdNumber',
        'introduction' => 'getIntroduction',
        'loginName' => 'getLoginName',
        'loginWays' => 'getLoginWays',
        'mobilePhone' => 'getMobilePhone',
        'name' => 'getName',
        'nationality' => 'getNationality',
        'nativePlace' => 'getNativePlace',
        'parties' => 'getParties',
        'signature' => 'getSignature',
        'status' => 'getStatus',
        'tags' => 'getTags'
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
        $this->container['address'] = $data['address'] ?? null;
        $this->container['avatarId'] = $data['avatarId'] ?? null;
        $this->container['birthdate'] = $data['birthdate'] ?? null;
        $this->container['career'] = $data['career'] ?? null;
        $this->container['departments'] = $data['departments'] ?? null;
        $this->container['duties'] = $data['duties'] ?? null;
        $this->container['education'] = $data['education'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['employeeNumber'] = $data['employeeNumber'] ?? null;
        $this->container['extAttr1'] = $data['extAttr1'] ?? null;
        $this->container['extAttr2'] = $data['extAttr2'] ?? null;
        $this->container['externalId'] = $data['externalId'] ?? null;
        $this->container['extraFieldSet'] = $data['extraFieldSet'] ?? null;
        $this->container['extraPhones'] = $data['extraPhones'] ?? null;
        $this->container['gender'] = $data['gender'] ?? null;
        $this->container['idNumber'] = $data['idNumber'] ?? null;
        $this->container['introduction'] = $data['introduction'] ?? null;
        $this->container['loginName'] = $data['loginName'] ?? null;
        $this->container['loginWays'] = $data['loginWays'] ?? null;
        $this->container['mobilePhone'] = $data['mobilePhone'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['nationality'] = $data['nationality'] ?? null;
        $this->container['nativePlace'] = $data['nativePlace'] ?? null;
        $this->container['parties'] = $data['parties'] ?? null;
        $this->container['signature'] = $data['signature'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
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
     * Gets address
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address 人员(办公)地址
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets avatarId
     *
     * @return string|null
     */
    public function getAvatarId()
    {
        return $this->container['avatarId'];
    }

    /**
     * Sets avatarId
     *
     * @param string|null $avatarId 人员在蓝信里的头像
     *
     * @return self
     */
    public function setAvatarId($avatarId)
    {
        $this->container['avatarId'] = $avatarId;

        return $this;
    }

    /**
     * Gets birthdate
     *
     * @return string|null
     */
    public function getBirthdate()
    {
        return $this->container['birthdate'];
    }

    /**
     * Sets birthdate
     *
     * @param string|null $birthdate 出生日期。格式：yyyy-mm-dd
     *
     * @return self
     */
    public function setBirthdate($birthdate)
    {
        $this->container['birthdate'] = $birthdate;

        return $this;
    }

    /**
     * Gets career
     *
     * @return \LanXinPlusOpenAPI\Model\Resume[]|null
     */
    public function getCareer()
    {
        return $this->container['career'];
    }

    /**
     * Sets career
     *
     * @param \LanXinPlusOpenAPI\Model\Resume[]|null $career 职业 日期格式：yyyy-mm-dd
     *
     * @return self
     */
    public function setCareer($career)
    {
        $this->container['career'] = $career;

        return $this;
    }

    /**
     * Gets departments
     *
     * @return \LanXinPlusOpenAPI\Model\UDepartment[]|null
     */
    public function getDepartments()
    {
        return $this->container['departments'];
    }

    /**
     * Sets departments
     *
     * @param \LanXinPlusOpenAPI\Model\UDepartment[]|null $departments 人员所在分支，含分支Id和人员在分支里的排序。人员在分支下排序的序号，不确定时可填0，服务端为忽略0值。有效值从1开始
     *
     * @return self
     */
    public function setDepartments($departments)
    {
        $this->container['departments'] = $departments;

        return $this;
    }

    /**
     * Gets duties
     *
     * @return string|null
     */
    public function getDuties()
    {
        return $this->container['duties'];
    }

    /**
     * Sets duties
     *
     * @param string|null $duties 职务
     *
     * @return self
     */
    public function setDuties($duties)
    {
        $this->container['duties'] = $duties;

        return $this;
    }

    /**
     * Gets education
     *
     * @return \LanXinPlusOpenAPI\Model\Resume[]|null
     */
    public function getEducation()
    {
        return $this->container['education'];
    }

    /**
     * Sets education
     *
     * @param \LanXinPlusOpenAPI\Model\Resume[]|null $education 教育程度 日期格式：yyyy-mm-dd
     *
     * @return self
     */
    public function setEducation($education)
    {
        $this->container['education'] = $education;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email 电子邮箱地址
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets employeeNumber
     *
     * @return string|null
     */
    public function getEmployeeNumber()
    {
        return $this->container['employeeNumber'];
    }

    /**
     * Sets employeeNumber
     *
     * @param string|null $employeeNumber 人员号
     *
     * @return self
     */
    public function setEmployeeNumber($employeeNumber)
    {
        $this->container['employeeNumber'] = $employeeNumber;

        return $this;
    }

    /**
     * Gets extAttr1
     *
     * @return string|null
     */
    public function getExtAttr1()
    {
        return $this->container['extAttr1'];
    }

    /**
     * Sets extAttr1
     *
     * @param string|null $extAttr1 扩展字段
     *
     * @return self
     */
    public function setExtAttr1($extAttr1)
    {
        $this->container['extAttr1'] = $extAttr1;

        return $this;
    }

    /**
     * Gets extAttr2
     *
     * @return string|null
     */
    public function getExtAttr2()
    {
        return $this->container['extAttr2'];
    }

    /**
     * Sets extAttr2
     *
     * @param string|null $extAttr2 扩展字段
     *
     * @return self
     */
    public function setExtAttr2($extAttr2)
    {
        $this->container['extAttr2'] = $extAttr2;

        return $this;
    }

    /**
     * Gets externalId
     *
     * @return string|null
     */
    public function getExternalId()
    {
        return $this->container['externalId'];
    }

    /**
     * Sets externalId
     *
     * @param string|null $externalId externalId
     *
     * @return self
     */
    public function setExternalId($externalId)
    {
        $this->container['externalId'] = $externalId;

        return $this;
    }

    /**
     * Gets extraFieldSet
     *
     * @return array<string,object>|null
     */
    public function getExtraFieldSet()
    {
        return $this->container['extraFieldSet'];
    }

    /**
     * Sets extraFieldSet
     *
     * @param array<string,object>|null $extraFieldSet 自定义扩展属性，k代表扩展字段id。
     *
     * @return self
     */
    public function setExtraFieldSet($extraFieldSet)
    {
        $this->container['extraFieldSet'] = $extraFieldSet;

        return $this;
    }

    /**
     * Gets extraPhones
     *
     * @return \LanXinPlusOpenAPI\Model\MobilePhone[]|null
     */
    public function getExtraPhones()
    {
        return $this->container['extraPhones'];
    }

    /**
     * Sets extraPhones
     *
     * @param \LanXinPlusOpenAPI\Model\MobilePhone[]|null $extraPhones 附加联系方式
     *
     * @return self
     */
    public function setExtraPhones($extraPhones)
    {
        $this->container['extraPhones'] = $extraPhones;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return int|null
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param int|null $gender 性别：0-保密， 1-男， 2-女
     *
     * @return self
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets idNumber
     *
     * @return string|null
     */
    public function getIdNumber()
    {
        return $this->container['idNumber'];
    }

    /**
     * Sets idNumber
     *
     * @param string|null $idNumber 身份证号
     *
     * @return self
     */
    public function setIdNumber($idNumber)
    {
        $this->container['idNumber'] = $idNumber;

        return $this;
    }

    /**
     * Gets introduction
     *
     * @return \LanXinPlusOpenAPI\Model\Introduction|null
     */
    public function getIntroduction()
    {
        return $this->container['introduction'];
    }

    /**
     * Sets introduction
     *
     * @param \LanXinPlusOpenAPI\Model\Introduction|null $introduction introduction
     *
     * @return self
     */
    public function setIntroduction($introduction)
    {
        $this->container['introduction'] = $introduction;

        return $this;
    }

    /**
     * Gets loginName
     *
     * @return string|null
     */
    public function getLoginName()
    {
        return $this->container['loginName'];
    }

    /**
     * Sets loginName
     *
     * @param string|null $loginName 人员使用人员名登录蓝信时的人员名，也称staffId。可由组织在创建时指定，并代表一定含义比如工号，创建后不可修改，组织内必须唯一。
     *
     * @return self
     */
    public function setLoginName($loginName)
    {
        $this->container['loginName'] = $loginName;

        return $this;
    }

    /**
     * Gets loginWays
     *
     * @return int[]|null
     */
    public function getLoginWays()
    {
        return $this->container['loginWays'];
    }

    /**
     * Sets loginWays
     *
     * @param int[]|null $loginWays 蓝信登录方式：0-手机号， 1-邮箱， 2-账密。不填时默认手机号且手机号不能为空
     *
     * @return self
     */
    public function setLoginWays($loginWays)
    {
        $this->container['loginWays'] = $loginWays;

        return $this;
    }

    /**
     * Gets mobilePhone
     *
     * @return \LanXinPlusOpenAPI\Model\MobilePhone|null
     */
    public function getMobilePhone()
    {
        return $this->container['mobilePhone'];
    }

    /**
     * Sets mobilePhone
     *
     * @param \LanXinPlusOpenAPI\Model\MobilePhone|null $mobilePhone mobilePhone
     *
     * @return self
     */
    public function setMobilePhone($mobilePhone)
    {
        $this->container['mobilePhone'] = $mobilePhone;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name 人员姓名
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets nationality
     *
     * @return string|null
     */
    public function getNationality()
    {
        return $this->container['nationality'];
    }

    /**
     * Sets nationality
     *
     * @param string|null $nationality 民族
     *
     * @return self
     */
    public function setNationality($nationality)
    {
        $this->container['nationality'] = $nationality;

        return $this;
    }

    /**
     * Gets nativePlace
     *
     * @return string|null
     */
    public function getNativePlace()
    {
        return $this->container['nativePlace'];
    }

    /**
     * Sets nativePlace
     *
     * @param string|null $nativePlace 籍贯
     *
     * @return self
     */
    public function setNativePlace($nativePlace)
    {
        $this->container['nativePlace'] = $nativePlace;

        return $this;
    }

    /**
     * Gets parties
     *
     * @return string|null
     */
    public function getParties()
    {
        return $this->container['parties'];
    }

    /**
     * Sets parties
     *
     * @param string|null $parties 党派
     *
     * @return self
     */
    public function setParties($parties)
    {
        $this->container['parties'] = $parties;

        return $this;
    }

    /**
     * Gets signature
     *
     * @return string|null
     */
    public function getSignature()
    {
        return $this->container['signature'];
    }

    /**
     * Sets signature
     *
     * @param string|null $signature 签名
     *
     * @return self
     */
    public function setSignature($signature)
    {
        $this->container['signature'] = $signature;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int|null $status 成员状态, 更新时允许值 ：NORMAL= 1, 已注册; FROZEN = 2, 冻结
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[]|null $tags 人员标签信息
     *
     * @return self
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

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

