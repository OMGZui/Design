<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/8/24
 * Time: 16:49
 */
namespace Book\Strategy;

include '../../index.php';

echo "-------------------------  策略模式  -------------------------\n";
//对于一件事，我们可以选择A方式也可以选择B方式，比如每次放假我们回家的时候，我们可以选择普通火车，也可以选择高铁，豪一把飞机也何尝不可
//说吧，多久没回家了，常回家看看吧
$sleeperTrain = new SleeperTrain();
$go = new Go($sleeperTrain);
$go->choose();

$highSpeedTrain = new HighSpeedTrain();
$go = new Go($highSpeedTrain);
$go->choose();
