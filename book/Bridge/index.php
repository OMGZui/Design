<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/8/25
 * Time: 16:56
 */
namespace Book\Bridge;

include '../../index.php';

echo "-------------------------  桥接模式  -------------------------\n";
//桥接模式是为了将对象和实现解耦
//原始：亚索装备了电刀，亚索装备了无尽，亚索装备了攻速鞋，亚索装备了饮血剑，亚索装备了水银弯刀，亚索装备了守护天使
//当亚索6神装的时候需要重复这样写6次，当我换成金克丝呢，又得写6次
//使用桥接模式：亚索、电刀、无尽、攻速鞋、饮血剑、水银弯刀、守护天使、金克丝
//6神装时亚索可以自由搭配6件装备，金克丝也同理自由搭配

$shoes = new Shoes();
$sword = new Sword();

$jinx = new Jinx($shoes);
$yasuo = new Yasuo($sword);
$jinx->equip();
$yasuo->equip();

