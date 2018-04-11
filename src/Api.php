<?php
/**
 * User: 96qbhy
 * Date: 2018/4/11
 * Time: 下午3:07
 */

namespace Qbhy\LBSCloud;


use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\RequestOptions;
use Hanson\Foundation\AbstractAPI;

class Api extends AbstractAPI
{

    /** @var string 请求 ak */
    protected $ak;

    const API_SERVICE_GC  = 'cloudgc';   // 云地理编码服务
    const API_SERVICE_RGC = 'cloudrgc';  //

    const API_HOST = 'http://api.map.baidu.com';

    public static $default_params = [];

    public function __construct(LBSCloud $cloud)
    {
        $this->ak               = $cloud->config->get('ak');
        static::$default_params = ['ak' => $this->ak];
    }

    public function request(
        string $service,
        string $version,
        string $fn = '',
        string $method = 'GET',
        array $params = []
    ) {
        $url = $this::API_HOST . "/$service/$version/$fn";

        $method = strtolower($method);

        $option_name = $method === 'get' ? RequestOptions::QUERY : RequestOptions::FORM_PARAMS;

        $options = [$option_name => array_merge(static::$default_params, $params)];

        try {
            $response = $this->getHttp()->request($url, $method, $options);
        } catch (RequestException $exception) {
            $response = $exception->getResponse();
        }

        return json_decode(strval($response->getBody()), true);
    }

}