<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/8/17
 * Time: 22:03
 */

namespace Book\Factory\FactoryMethod;

class Dog implements Animal
{
    public function run()
    {
        echo "Dog run fast \n";
    }

    public function say()
    {
        echo "Dog class \n";
    }


}