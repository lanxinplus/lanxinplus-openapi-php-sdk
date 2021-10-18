<?php
/**
 * OrgApi
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

namespace LanXinPlusOpenAPI\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use LanXinPlusOpenAPI\ApiException;
use LanXinPlusOpenAPI\Configuration;
use LanXinPlusOpenAPI\HeaderSelector;
use LanXinPlusOpenAPI\ObjectSerializer;

/**
 * OrgApi Class Doc Comment
 *
 * @category Class
 * @package  LanXinPlusOpenAPI
 * @author   LanXin OPEN
 * @link     https://openapi.lanxin.cn
 */
class OrgApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation v1OrgFetch
     *
     * 获取组织详情
     *
     * @param  string $app_token app_token (required)
     * @param  string $orgid orgid (required)
     * @param  string $user_token user_token (optional)
     *
     * @throws \LanXinPlusOpenAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \LanXinPlusOpenAPI\Model\V1OrgFetchResponse
     */
    public function v1OrgFetch($app_token, $orgid, $user_token = null)
    {
        list($response) = $this->v1OrgFetchWithHttpInfo($app_token, $orgid, $user_token);
        return $response;
    }

    /**
     * Operation v1OrgFetchWithHttpInfo
     *
     * 获取组织详情
     *
     * @param  string $app_token app_token (required)
     * @param  string $orgid orgid (required)
     * @param  string $user_token user_token (optional)
     *
     * @throws \LanXinPlusOpenAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \LanXinPlusOpenAPI\Model\V1OrgFetchResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function v1OrgFetchWithHttpInfo($app_token, $orgid, $user_token = null)
    {
        $request = $this->v1OrgFetchRequest($app_token, $orgid, $user_token);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\LanXinPlusOpenAPI\Model\V1OrgFetchResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\LanXinPlusOpenAPI\Model\V1OrgFetchResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\LanXinPlusOpenAPI\Model\V1OrgFetchResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\LanXinPlusOpenAPI\Model\V1OrgFetchResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation v1OrgFetchAsync
     *
     * 获取组织详情
     *
     * @param  string $app_token app_token (required)
     * @param  string $orgid orgid (required)
     * @param  string $user_token user_token (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v1OrgFetchAsync($app_token, $orgid, $user_token = null)
    {
        return $this->v1OrgFetchAsyncWithHttpInfo($app_token, $orgid, $user_token)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation v1OrgFetchAsyncWithHttpInfo
     *
     * 获取组织详情
     *
     * @param  string $app_token app_token (required)
     * @param  string $orgid orgid (required)
     * @param  string $user_token user_token (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v1OrgFetchAsyncWithHttpInfo($app_token, $orgid, $user_token = null)
    {
        $returnType = '\LanXinPlusOpenAPI\Model\V1OrgFetchResponse';
        $request = $this->v1OrgFetchRequest($app_token, $orgid, $user_token);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'v1OrgFetch'
     *
     * @param  string $app_token app_token (required)
     * @param  string $orgid orgid (required)
     * @param  string $user_token user_token (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function v1OrgFetchRequest($app_token, $orgid, $user_token = null)
    {
        // verify the required parameter 'app_token' is set
        if ($app_token === null || (is_array($app_token) && count($app_token) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $app_token when calling v1OrgFetch'
            );
        }
        // verify the required parameter 'orgid' is set
        if ($orgid === null || (is_array($orgid) && count($orgid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $orgid when calling v1OrgFetch'
            );
        }

        $resourcePath = '/v1/org/{orgid}/fetch';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($app_token !== null) {
            if('form' === 'form' && is_array($app_token)) {
                foreach($app_token as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['app_token'] = $app_token;
            }
        }
        // query params
        if ($user_token !== null) {
            if('form' === 'form' && is_array($user_token)) {
                foreach($user_token as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['user_token'] = $user_token;
            }
        }


        // path params
        if ($orgid !== null) {
            $resourcePath = str_replace(
                '{' . 'orgid' . '}',
                ObjectSerializer::toPathValue($orgid),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
