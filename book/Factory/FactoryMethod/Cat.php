<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/8/17
 * Time: 22:00
 */
namespace Book\Factory\FactoryMethod;

class Cat implements Animal
{
    public function run()
    {
        echo "Cat run slow \n";
    }

    public function say()
    {
        echo "Cat class \n";
    }
}