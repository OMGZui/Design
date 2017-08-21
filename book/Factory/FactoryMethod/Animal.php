<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/8/17
 * Time: 21:59
 */

namespace Book\Factory\FactoryMethod;

//动物接口，定义一套规范，实现它的类都必须实现接口的方法
interface Animal
{
    public function play();
}