<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/8/17
 * Time: 22:08
 */
namespace Book\Factory\FactoryMethod;

class DogFactory extends Factory
{
    public function createAnimal()
    {
        return new Dog();
    }
}