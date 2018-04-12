<?php
/**
 * User: 96qbhy
 * Date: 2018/4/11
 * Time: 下午4:47
 */

namespace Qbhy\LBSCloud\Services\WebAPI;

use Qbhy\LBSCloud\Services\AbstractService;

/**
 * Class GCService
 *
 * @link    http://lbsyun.baidu.com/index.php?title=webapi/guide/changeposition
 * @package Qbhy\LBSCloud\Services
 */
class ConvertService extends AbstractService
{
    protected $use_version = 'v1';

    const VERSIONS = ['v1'];

    const SERVICE = 'geoconv'; // 坐标转换服务

    public function convert($coords, array $params = [])
    {
        return $this->request('get', '', $params);
    }

}