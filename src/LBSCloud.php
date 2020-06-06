<?php
/**
 * User: 96qbhy
 * Date: 2018/4/11
 * Time: 下午3:03
 */

namespace Qbhy\LBSCloud;

use Hanson\Foundation\Config;
use Hanson\Foundation\Foundation;
use Qbhy\LBSCloud\Services;

/**
 * Class LBSCloud
 *
 * @property Api $api
 * @property Services\LBS\SearchService $search
 * @property Services\LBS\StorageService $storage
 * @property Services\LBS\GCService $gc
 * @property Services\LBS\RGCService $rgc
 * @property Services\WebAPI\ConvertService $converter
 *
 * @package Qbhy\LBSCloud
 */
class LBSCloud extends Foundation
{
    protected $providers = [
        ServiceProvider::class,
        Services\ServiceProvider::class,
    ];

    public function getAk()
    {
        return $this->getConfig('ak');
    }
}