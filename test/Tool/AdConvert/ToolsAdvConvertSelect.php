<?php
/**
 * Created by PhpStorm.
 * User: yueguang
 * Date: 2022/4/1
 * Time: 15:55
 */
require __DIR__ . '/../../../index.php';
require __DIR__ . '/../../config.php';

$client = new ToutiaoSdk\TouTiaoClient(TOKEN);
$req = $client::Tool()->adConvert->advConvertSelect();
$req->setAdvertiserId(ADVERTISER_ID);

print_r($client->excute($req));