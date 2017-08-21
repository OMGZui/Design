<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/8/21
 * Time: 20:36
 */

namespace Book\Factory\AbstractFactory;

class Cat implements LAnimal
{
    function LPlay()
    {
        echo "猫是LOL青铜段位，自言自语道：终于不是塑料段位了 \n";
    }
}