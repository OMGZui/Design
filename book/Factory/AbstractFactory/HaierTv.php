<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/8/17
 * Time: 22:28
 */
namespace Book\Factory\AbstractFactory;

class HaierTv implements TV
{
    function open()
    {
        echo "Open the HaierTv \n";
    }

    function watch()
    {
        echo "Watch the HaierTv \n";
    }
}