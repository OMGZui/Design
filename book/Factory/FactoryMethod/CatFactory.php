<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/8/17
 * Time: 22:08
 */
namespace Book\Factory\FactoryMethod;

class CatFactory extends Factory
{
    public static function createAnimal()
    {
        return new Cat();
    }
}