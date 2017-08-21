<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/8/17
 * Time: 22:34
 */

namespace Book\Factory\AbstractFactory;

class LenovoPc implements PC
{
    function play()
    {
        echo "Play LenovoPc \n";
    }
    function work()
    {
        echo "work LenovoPc \n";
    }
}