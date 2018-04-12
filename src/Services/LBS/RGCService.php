<?php
/**
 * User: 96qbhy
 * Date: 2018/4/11
 * Time: 下午4:47
 */

namespace Qbhy\LBSCloud\Services\LBS;

use Qbhy\LBSCloud\Services\AbstractService;

/**
 * Class RGCService
 *
 * @link http://lbsyun.baidu.com/index.php?title=lbscloud/yunni/explain
 * @package Qbhy\LBSCloud\Services
 */
class RGCService extends AbstractService
{
    protected $use_version = 'v1';

    const VERSIONS = ['v1'];

    const SERVICE = 'cloudrgc'; // 云逆地理编码服务


}