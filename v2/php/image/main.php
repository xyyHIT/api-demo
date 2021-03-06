<?php

require 'lib/utils.php';

$url = 'http://api-img-bj.fengkongcloud.com/v2/saas/anti_fraud/img';
$access_key = '{ACCESS_KEY}';
$uid = '{UID}';
$filename = '../files/demo.png';

$payload = array(
    'accessKey' => $access_key,
    'type' => 'POLITICS_PORN_AD_BEHAVIOR',
    'appId' => 'default',
    'data' => array(
        'img' => base64_encode(file_get_contents($filename)),
        'tokenId' => $uid,
    ),
);

$res = request_post($url, json_encode($payload));
$data = json_decode($res);
// 通过 code 和 riskLevel 判断返回，具体请参考接口文档
var_dump($data);
