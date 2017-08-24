<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/8/24
 * Time: 16:45
 */
namespace Book\Strategy;

class SleeperTrain implements GoHome
{
    public function go()
    {
        echo "时间充足还可以省钱，岂不美哉，我选卧铺\n";
    }
}