<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/8/17
 * Time: 22:32
 */
namespace Book\Factory\AbstractFactory;

class ProductFactory extends Factory
{
    static function createTV()
    {
        return new HaierTv();
    }

    static function createPC()
    {
        return new LenovoPc();
    }
}