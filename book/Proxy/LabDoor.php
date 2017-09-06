<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/9/6
 * Time: 14:47
 */
namespace Book\Proxy;

class LabDoor implements Door
{
    function open()
    {
        echo "小兔子乖乖，已把门开开！\n";
    }

    function close()
    {
        echo "小兔子已关上门！\n";
    }
}