<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/8/24
 * Time: 16:47
 */
namespace Book\Strategy;

class HighSpeedTrain implements GoHome
{
    public function go()
    {
        echo "我想早点回家啊啊啊啊啊，我选高铁 \n";
    }
}