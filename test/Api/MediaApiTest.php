<?php
/**
 * MediaApiTest
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
use \LanXinPlusOpenAPI\Api\MediaApi;
use \LanXinPlusOpenAPI\Api\AuthApi;


/**
 * MediaApiTest Class Doc Comment
 *
 * @category Class
 * @package  LanXinPlusOpenAPI
 * @author   LanXin OPEN
 * @link     https://openapi.lanxin.cn
 */
class MediaApiTest extends TestCase
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
     * Test case for v1MediasCreate
     *
     * 上传文件.
     *
     */
    public function testV1MediasCreate()
    {
        $api = new MediaApi(new Client(),self::$config);
        $app_token = self::$config->getAppToken(); // string | app_token 
        $type = 'type_example'; // string | 文件类型。取值：VIDEO = 1;IMAGE = 2;AUDIO = 3; 
        $media = "/path/to/file.txt"; // \SplFileObject | Media Body 
        $user_token = self::$config->getUserToken(); // string | user_token (可选参数)
        try{
            $resp = $api->v1MediasCreate($app_token, $type, $media);
            print_r($resp);
            $this->assertEquals($resp->getErrCode(), 0);
        } catch (Exception $e) {
            echo 'Exception when calling MediaApi->v1MediasCreate: ', $e->getMessage(), PHP_EOL;
        }
    }

    /**
     * Test case for v1MediasFetch
     *
     * 下载文件.
     *
     */
    public function testV1MediasFetch()
    {
        $api = new MediaApi(new Client(),self::$config);
        $app_token = self::$config->getAppToken(); // string | app_token 
        $mediaid = 'mediaid_example'; // string | mediaid 
        $user_token = self::$config->getUserToken(); // string | user_token (可选参数)
        try{
            $resp = $api->v1MediasFetch($app_token, $mediaid);
            print_r($resp);
        } catch (Exception $e) {
            echo 'Exception when calling MediaApi->v1MediasFetch: ', $e->getMessage(), PHP_EOL;
        }
    }

    /**
     * Test case for v1MediasPathFetch
     *
     * 获取文件下载路径.
     *
     */
    public function testV1MediasPathFetch()
    {
        $api = new MediaApi(new Client(),self::$config);
        $app_token = self::$config->getAppToken(); // string | app_token 
        $mediaid = 'mediaid_example'; // string | mediaid 
        $user_token = self::$config->getUserToken(); // string | user_token (可选参数)
        try{
            $resp = $api->v1MediasPathFetch($app_token, $mediaid);
            print_r($resp);
            $this->assertEquals($resp->getErrCode(), 0);
        } catch (Exception $e) {
            echo 'Exception when calling MediaApi->v1MediasPathFetch: ', $e->getMessage(), PHP_EOL;
        }
    }
}
