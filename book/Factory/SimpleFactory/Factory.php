<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/8/17
 * Time: 21:39
 */
namespace Book\Factory\SimpleFactory;

class Factory
{
    public static function CreateAnimal($name)
    {
        if($name === 'cat'){
            return new Cat();
        }elseif ($name === 'dog'){
            return new Dog();
        }
    }
}