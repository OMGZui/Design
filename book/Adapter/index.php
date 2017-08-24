<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/8/24
 * Time: 17:31
 */
namespace Book\Adapter;

include '../../index.php';

echo "-------------------------  适配器模式  -------------------------\n";
//适配器可以理解为一个转接头，可以兼容本来不适用的接口啥的，
//老的智能机一般都是用普通的usb接口充电和拷贝小电影啥的，速度真的是慢，最新的type-C满足了充电快和拷贝速度
//因此我们需要一个TypeCAdapter转接口。

$typeC = new TypeC();
$typeCAdapter = new TypeCAdapter($typeC);

$mobile = new Mobile();
$mobile->used($typeCAdapter);



