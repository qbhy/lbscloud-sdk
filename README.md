# lbscloud
百度地图开放平台 LBS.云 PHP SDK  
你可能需要给自己的产品弄个地图选点之类的功能。

## 安装
### 安装要求
* php7.0+
* composer

### 安装方法
```bash
$ composer require 96qbhy/lbscloud-sdk
```

## 使用
```php
require_once 'vendor/autoload.php';

$config = [
    'ak' => '百度lbs ak',
];

$lbs = new \Qbhy\LBSCloud\LBSCloud($config);

// 云存储服务
$storage = $lbs->storage;
// 云检索服务
$search = $lbs->search;
// 云地理编码服务
$gc = $lbs->gc;
// 云逆地利编码服务
$rcg = $lbs->rgc;

/**
 * $service->request('fn',[])
 * 云存储服务已经封装了部分业务方法，如 tableCreate、tableQuery、poiCreate、poiQuery 等，如你需要的方法不在已封装的方法内，你可以自行封装，然后提 PR 给我。
 * 其他服务的业务方法暂未封装，原则上我用到的时候会进行封装，当然也欢迎 PR。
 */
```
[96qbhy/lbscloud-sdk](https://github.com/96qbhy/lbscloud-sdk)  
96qbhy@gmail.com