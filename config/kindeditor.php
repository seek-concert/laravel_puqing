<?php
/**
 * Created by PhpStorm.
 * Author: ChenHua <Http://www.ichenhua.cn>
 * Date: 2018/6/15 11:31
 */

return [
    "default"     => 'aliyun', //默认返回存储位置url
    "dirver"      => ['aliyun'], //存储平台
    "connections" => [
        "local"  => [
            'prefix' => 'uploads/kindeditor',
        ],
        "qiniu"  => [
            'access_key' => '',
            'secret_key' => '',
            'bucket'     => '',
            'prefix'     => '',
            'domain'     => ''
        ],
        "aliyun" => [
            'ak_id'     => 'LTAICczkrnEG4RSM',
            'ak_secret' => '1gbjh40c3YZvmo56rthLQwP1nyQvk9',
            'end_point' => 'oss-cn-shenzhen.aliyuncs.com',
            'bucket'    => 'puqing',
            'prefix'    => '',
        ],
    ],
];
