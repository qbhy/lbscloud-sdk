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

    protected $use_version = 'v3';

    /** @var Api */
    protected $api;

    public function __construct(LBSCloud $cloud)
    {
        $this->api = $cloud->api;
    }

    public function request($method = 'GET', $fn = '', $params = [], $version = null)
    {
        return $this->api->request(static::SERVICE, $version ?? $this->use_version, $fn, $method, $params);
    }

    /**
     * @param string $use_version
     *
     * @return static
     */
    public function setUseVersion(string $use_version): self
    {
        $this->use_version = $use_version;

        return $this;
    }


}