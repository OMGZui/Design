<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/8/21
 * Time: 20:36
 */

namespace Book\Factory\AbstractFactory;

class Dog implements HAnimal
{
    function HPlay()
    {
        echo "狗是LOL王者段位，自言自语道：无敌是多么寂寞 \n";
    }
}