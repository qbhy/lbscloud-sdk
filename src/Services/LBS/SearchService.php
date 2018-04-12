<?php
/**
 * User: 96qbhy
 * Date: 2018/4/11
 * Time: 下午4:47
 */

namespace Qbhy\LBSCloud\Services\LBS;

use Qbhy\LBSCloud\Services\AbstractService;

/**
 * Class SearchService
 * @link    http://lbsyun.baidu.com/index.php?title=lbscloud/api/geosearch
 * @package Qbhy\LBSCloud\Services
 */
class SearchService extends AbstractService
{
    protected $use_version = 'v3';

    const VERSIONS = ['v3'];

    const SERVICE = 'geosearch'; // 云检索服务服务


}