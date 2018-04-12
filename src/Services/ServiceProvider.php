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
            return new LBS\StorageService($cloud);
        };

        $pimple['rgc'] = function (LBSCloud $cloud) {
            return new LBS\RGCService($cloud);
        };

        $pimple['gc'] = function (LBSCloud $cloud) {
            return new LBS\GCService($cloud);
        };

        $pimple['search'] = function (LBSCloud $cloud) {
            return new LBS\SearchService($cloud);
        };

        $pimple['converter'] = function (LBSCloud $cloud) {
            return new WebAPI\ConvertService($cloud);
        };

    }

}