<?php
/**
 * User: 96qbhy
 * Date: 2018/4/11
 * Time: 下午4:47
 */

namespace Qbhy\LBSCloud\Services\LBS;

use Qbhy\LBSCloud\Services\AbstractService;

/**
 * Class GCService
 *
 * @link http://lbsyun.baidu.com/index.php?title=lbscloud/cloudgc/explain
 * @package Qbhy\LBSCloud\Services
 */
class GCService extends AbstractService
{
    protected $use_version = 'v1';

    const VERSIONS = ['v1'];

    const SERVICE = 'cloudgc'; // 云地理编码服务


}