<?php
/**
 * User: 96qbhy
 * Date: 2018/4/11
 * Time: 下午3:03
 */

namespace Qbhy\LBSCloud;

use Hanson\Foundation\Config;
use Hanson\Foundation\Foundation;
use Qbhy\LBSCloud\Services\GCService;
use Qbhy\LBSCloud\Services\RGCService;
use Qbhy\LBSCloud\Services\SearchService;
use Qbhy\LBSCloud\Services\StorageService;

/**
 * Class LBSCloud
 *
 * @property Config         $config
 * @property Api            $api
 * @property SearchService  $search
 * @property StorageService $storage
 * @property GCService      $gc
 * @property RGCService     $rgc
 *
 * @package Qbhy\LBSCloud
 */
class LBSCloud extends Foundation
{
    protected $providers = [
        ServiceProvider::class,
        Services\ServiceProvider::class,
    ];
}