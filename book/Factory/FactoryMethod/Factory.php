<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/8/17
 * Time: 22:08
 */

namespace Book\Factory\FactoryMethod;

//工厂抽象类
abstract class Factory
{
    abstract function createAnimal();
}