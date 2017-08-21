<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/8/21
 * Time: 21:45
 */

namespace Book\Singleton;

include '../../index.php';

echo "-------------------------  单例模式  -------------------------\n";
//很简单嘛，一次只能交一个对象/女朋友，不能获取对象的时候出现不同的女朋友，那不玩犊子了。
$s1 = Singleton::getInstance();
$s2 = Singleton::getInstance();
if($s1 === $s2){
    echo "是同一个女朋友 \n";
}else{
    echo "两个女朋友？ \n";
}