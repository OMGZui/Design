<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/8/17
 * Time: 22:31
 */
namespace Book\Factory\AbstractFactory;


abstract class Factory
{
    abstract static function createTV();
    abstract static function createPC();
}