<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/8/21
 * Time: 20:36
 */

namespace Book\Factory\AbstractFactory;


class AnimalFactory extends Factory
{
    function CreateDog()
    {
        return new Dog();
    }

    function CreateCat()
    {
        return new Cat();
    }

}