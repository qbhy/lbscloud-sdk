<?php
/**
 * User: 96qbhy
 * Date: 2018/4/11
 * Time: 下午3:36
 */

namespace Qbhy\LBSCloud\Services;


use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Qbhy\LBSCloud\LBSCloud;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['storage'] = function (LBSCloud $cloud) {
            return new StorageService($cloud);
        };

    }

}