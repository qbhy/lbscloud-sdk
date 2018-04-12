<?php
/**
 * User: 96qbhy
 * Date: 2018/4/11
 * Time: 下午4:47
 */

namespace Qbhy\LBSCloud\Services\LBS;

use Qbhy\LBSCloud\Services\AbstractService;

/**
 * Class StorageService
 *
 * @link http://lbsyun.baidu.com/index.php?title=lbscloud/api/geodataV3
 * @link http://lbsyun.baidu.com/index.php?title=lbscloud/api/geodataV4
 * @package Qbhy\LBSCloud\Services
 */
class StorageService extends AbstractService
{
    protected $use_version = 'v3';

    const VERSIONS = ['v3', 'v4'];

    const SERVICE = 'geodata'; // 云存储服务服务

    /**
     * 创建表（create geotable）接口
     *
     * @param string $name
     * @param int    $geotype
     * @param int    $is_published
     * @param array  $params
     *
     * @return mixed
     */
    public function tableCreate(string $name, int $geotype, int $is_published, array $params = [])
    {
        $params = compact('name', 'geotype', 'is_published') + $params;

        return $this->request('post', 'geotable/create', $params);
    }

    /**
     * 查询表（list geotable）接口
     *
     * @param string|null $name
     *
     * @return mixed
     */
    public function tableQuery(string $name = null)
    {
        $params = compact('name');

        return $this->request('get', 'geotable/list', $params);
    }

    /**
     * 创建数据（create poi）接口
     *
     * @param string $latitude
     * @param string $longitude
     * @param int    $coord_type
     * @param string $geotable_id 创建数据的对应数据表id
     * @param array  $params
     *
     * @return mixed
     */
    public function poiCreate(
        string $latitude,
        string $longitude,
        int $coord_type,
        string $geotable_id,
        array $params = []
    ) {

        $params = compact('latitude', 'longitude', 'coord_type', 'geotable_id') + $params;

        return $this->request('post', 'poi/create', $params);
    }

    /**
     * 查询指定条件的数据（poi）列表接口
     *
     * @param int    $coord_type
     * @param string $geotable_id 创建数据的对应数据表id
     * @param array  $params
     *
     * @return mixed
     */
    public function poiQuery(
        int $coord_type,
        string $geotable_id,
        array $params = []
    ) {

        $params = compact('coord_type', 'geotable_id') + $params;

        return $this->request('get', 'poi/list', $params);
    }

    /**
     * 查询指定id的数据（poi）列表接口
     *
     * @param int    $id          位置数据对应的id
     * @param string $geotable_id 创建数据的对应数据表id
     * @param array  $params
     *
     * @return mixed
     */
    public function poiDetail(
        int $id,
        string $geotable_id,
        array $params = []
    ) {

        $params = compact('id', 'geotable_id') + $params;

        return $this->request('get', 'poi/detail', $params);
    }

    /**
     * 修改数据（update poi）列表接口
     *
     * @param int    $id          位置数据对应的id
     * @param string $geotable_id 创建数据的对应数据表id
     * @param array  $params
     *
     * @return mixed
     */
    public function poiUpdate(
        int $id,
        string $geotable_id,
        array $params = []
    ) {

        $params = compact('id', 'geotable_id') + $params;

        return $this->request('post', 'poi/update', $params);
    }

    /**
     * 删除数据（delete poi）列表接口
     *
     * @param int    $id          位置数据对应的id
     * @param string $geotable_id 创建数据的对应数据表id
     * @param array  $params
     *
     * @return mixed
     */
    public function poiDelete(
        int $id,
        string $geotable_id,
        array $params = []
    ) {

        $params = compact('id', 'geotable_id') + $params;

        return $this->request('post', 'poi/delete', $params);
    }


}