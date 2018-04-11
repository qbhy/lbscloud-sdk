<?php
/**
 * User: 96qbhy
 * Date: 2018/4/11
 * Time: 下午3:04
 */

namespace Qbhy\LBSCloud;


use Pimple\Container;
use Pimple\ServiceProviderInterface as BaseServiceProvider;

class ServiceProvider implements BaseServiceProvider
{
    public function register(Container $pimple)
    {
        $pimple['api'] = function (LBSCloud $cloud) {
            return new Api($cloud);
        };

    }

}