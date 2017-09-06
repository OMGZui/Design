<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/9/6
 * Time: 15:53
 */
namespace Book\Decorator;

class OriginCake implements Cake
{
    function money()
    {
        return 4;
    }

    function name()
    {
        return '原味手抓饼';
    }
}