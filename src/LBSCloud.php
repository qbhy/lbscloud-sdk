<?php
/**
 * User: 96qbhy
 * Date: 2018/4/11
 * Time: 下午3:03
 */

namespace Qbhy\LBSCloud;

use Hanson\Foundation\Config;
use Hanson\Foundation\Foundation;

/**
 * Class LBSCloud
 *
 * @property Config $config
 * @property Api    $api
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