<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/9/6
 * Time: 16:00
 */
namespace Book\Decorator;

include "../../index.php";

echo "-------------------------  装饰器模式  -------------------------\n";
//在不修改基类的情况下，动态的添加类的功能，比如这里原味手抓饼4元，客人根据自己的需求动态选择加料，
//土豪肯定选择9元的原味手抓饼 加鸡蛋 加火腿肠 加里脊价格：￥9
$cake = new OriginCake();
echo $cake->name().'价格：￥'.$cake->money();
echo "\n";
$cake = new EggCake($cake);
echo $cake->name().'价格：￥'.$cake->money();
echo "\n";
$cake = new HamCake($cake);
echo $cake->name().'价格：￥'.$cake->money();
echo "\n";
$cake = new TenderloinCake($cake);
echo $cake->name().'价格：￥'.$cake->money();
