<?php
/**
 * User: 96qbhy
 * Date: 2018/4/11
 * Time: 下午3:28
 */

namespace Qbhy\LBSCloud\Services;

use Qbhy\LBSCloud\Api;
use Qbhy\LBSCloud\LBSCloud;

abstract class AbstractService
{
    const SERVICE = 'service';

    const VERSIONS = [
        'v3', 'v4',
    ];

    const DEFAULT_VERSION = 'v3';

    /** @var Api */
    protected $api;

    public function __construct(LBSCloud $cloud)
    {
        $this->api = $cloud->api;
    }

    public function request($method, $params = [], $fn = '', $version = self::DEFAULT_VERSION)
    {
        return $this->api->request(static::SERVICE, $version, $fn, $method, $params);
    }


}