# 蓝信 PHP SDK

## 关于
> - 此PHP SDK基于[蓝信开放平台API]构建
> - 蓝信开放平台，便于企业应用与蓝信集成，让协同与管理更加高效
> - 蓝信开放接口SDK，便捷调用服务端API，例如：认证授权、通讯录、消息通知、角色权限、媒体素材、组织管理、应用管理等具体可以访问 [蓝信开放平台API] 文档 看看

## 运行环境
> - PHP 7.3 及以上

## 安装方法
#### 方式一：
> - 如果您使用composer管理项目依赖项，请在您的项目根目录中运行以下命令：
```
  composer require laxinplus/openapi-php-sdk
```
> - 您也可以在composer.json文件中声明对 PHP 的蓝信 PHP SDK 的依赖
```
  "require": {
      "laxinplus/openapi-php-sdk": "~1.0"
  }
```
>- 然后运行composer install以安装依赖项。安装 Composer Dependency Manager 后，在 PHP 代码中导入依赖项：
```
  require_once __DIR__ . '/vendor/autoload.php';
```

#### 方式二：
> - 下载SDK源码，可执行 `composer install` 生成 autoload.php文件：
```php
  require_once('/path/to/lanxinplus-openapi-php-sdk/vendor/autoload.php');
```


## 快速使用
#### 获取 APP_TOKEN

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use \GuzzleHttp\Client;

$host = "host"; // 蓝信开放平台网关地址, e.g.: https://example.com/open/apigw
$appId = "appId"; // 应用ID, e.g.: 1234567-7654321
$appSecret = "appSecret"; // 应用密钥, e.g.: D25F65E65D887AEFD9C92B00310286FA

$config = new LanXinPlusOpenAPI\Configuration($host, $appId, $appSecret);
$api = new LanXinPlusOpenAPI\Api\AuthApi(new Client(), $config);
$resp = $api->V1ApptokenCreate("client_credential" ,$appId, $appSecret);
print_r($resp);
```

## 测试用例使用说明
#### 运行test
```bash
composer install
./vendor/bin/phpunit test/api/AuthApiTest.php
```

## 联系我们
- [蓝信官方网站](https://www.lanxin.cn/)
- [蓝信开放平台文档中心](https://openapi.lanxin.cn/doc/#/)

[蓝信开放平台API]: https://openapi.lanxin.cn/doc/#/server-api/
