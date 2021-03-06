<?php
/**
 * AuthApiTest
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



namespace LanXinPlusOpenAPI\Test\Api;

use PHPUnit\Framework\TestCase;
use \GuzzleHttp\Client;
use \LanXinPlusOpenAPI\Configuration;
use \LanXinPlusOpenAPI\ApiException;
use \LanXinPlusOpenAPI\ObjectSerializer;
use \LanXinPlusOpenAPI\Api\AuthApi;



/**
 * AuthApiTest Class Doc Comment
 *
 * @category Class
 * @package  LanXinPlusOpenAPI
 * @author   LanXin OPEN
 * @link     https://openapi.lanxin.cn
 */
class AuthApiTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    protected static $config;
    public static function setUpBeforeClass(): void
    {
        // 蓝信开放平台网关地址, e.g.: https://example.com/open/apigw
        $host = "host";
        // 应用ID, e.g.: 1234567-7654321
        $appId = "appId";
        // 应用密钥, e.g.: D25F65E65D887AEFD9C92B00310286FA
        $appSecret = "appSecret";

        $config = new Configuration($host, $appId, $appSecret);
        $api = new AuthApi(new Client(), $config);
        $resp = $api->V1ApptokenCreate("client_credential" ,$appId, $appSecret);
        if ($resp->getErrCode() !=0) {
            echo "err in get appToken, errCode:", $resp->getErrCode(), ", errMsg:", $resp->getErrMsg(), PHP_EOL;
        }else{
            $config->setAppToken($resp->getData()->getAppToken());
            self::$config = $config;
        };
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test case for v1AppTokenCreate
     *
     * 获取应用访问TOKEN.
     *
     */
    public function testV1AppTokenCreate()
    {
        $api = new AuthApi(new Client(),self::$config);
        $grant_type = 'grant_type_example'; // string | client_credential 
        $appid = self::$config->getAppId(); // string | 应用ID 
        $secret = self::$config->getAppSecret(); // string | 应用密钥 
        try{
            $resp = $api->v1AppTokenCreate($grant_type, $appid, $secret);
            print_r($resp);
            $this->assertEquals($resp->getErrCode(), 0);
        } catch (Exception $e) {
            echo 'Exception when calling AuthApi->v1AppTokenCreate: ', $e->getMessage(), PHP_EOL;
        }
    }

    /**
     * Test case for v1JsApiTokenCreate
     *
     * 获取jsapi访问TOKEN.
     *
     */
    public function testV1JsApiTokenCreate()
    {
        $api = new AuthApi(new Client(),self::$config);
        $app_token = self::$config->getAppToken(); // string | app_token 
        $user_token = self::$config->getUserToken(); // string | user_token (可选参数)
        try{
            $resp = $api->v1JsApiTokenCreate($app_token);
            print_r($resp);
            $this->assertEquals($resp->getErrCode(), 0);
        } catch (Exception $e) {
            echo 'Exception when calling AuthApi->v1JsApiTokenCreate: ', $e->getMessage(), PHP_EOL;
        }
    }

    /**
     * Test case for v1UserTokenCreate
     *
     * 获取人员访问TOKEN.
     *
     */
    public function testV1UserTokenCreate()
    {
        $api = new AuthApi(new Client(),self::$config);
        $app_token = self::$config->getAppToken(); // string | app_token 
        $grant_type = 'grant_type_example'; // string | 使用固定值 'authorization_code' 
        $code = 'code_example'; // string | 人员免登录授权码 
        $redirect_uri = 'redirect_uri_example'; // string | redirect_uri (可选参数)
        try{
            $resp = $api->v1UserTokenCreate($app_token, $grant_type, $code);
            print_r($resp);
            $this->assertEquals($resp->getErrCode(), 0);
        } catch (Exception $e) {
            echo 'Exception when calling AuthApi->v1UserTokenCreate: ', $e->getMessage(), PHP_EOL;
        }
    }

    /**
     * Test case for v1UsersFetch
     *
     * 获取人员基本信息.
     *
     */
    public function testV1UsersFetch()
    {
        $api = new AuthApi(new Client(),self::$config);
        $app_token = self::$config->getAppToken(); // string | app_token 
        $user_token = self::$config->getUserToken(); // string | user_token 
        try{
            $resp = $api->v1UsersFetch($app_token, $user_token);
            print_r($resp);
            $this->assertEquals($resp->getErrCode(), 0);
        } catch (Exception $e) {
            echo 'Exception when calling AuthApi->v1UsersFetch: ', $e->getMessage(), PHP_EOL;
        }
    }
}
