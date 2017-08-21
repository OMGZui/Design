<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/8/21
 * Time: 20:01
 */

namespace Book\Factory;

use Book\Factory\AbstractFactory\AnimalFactory;
use Book\Factory\FactoryMethod\CatFactory;
use Book\Factory\FactoryMethod\DogFactory;
use Book\Factory\SimpleFactory\Factory;

include '../../index.php';

echo "-------------------------  简单工厂模式  -------------------------\n";
//优点：对象的创建和对象的使用分离，用户只需关注如何使用，不用关注如何创建
//缺点：不够灵活，比如要加个老虎，那么就得修改工厂类
$dog = Factory::CreateAnimal('dog');
$dog->play();

$cat = Factory::CreateAnimal('cat');
$cat->play();

echo "-------------------------  工厂方法模式  -------------------------\n";
//包括了简单工厂模式的优点，也更加灵活，比如加个老虎，我们只需建个老虎工厂，符合开闭原则
//一对一关系 狗工厂负责狗，猫工厂负责猫
$dog2 = new DogFactory();
$dog2->createAnimal()->play();

$cat2 = new CatFactory();
$cat2->createAnimal()->play();

echo "-------------------------  抽象工厂模式  -------------------------\n";
//相比工厂方法，我们使得工厂抽象化，我们不需要关注哪个工厂，只需要知道要创建狗还是要猫
//一对多关系 动物工厂既可以负责狗又可以负责猫，还可以负责老虎，而狗猫实现了高低分段动物的接口
$animal = new AnimalFactory();
$animal->CreateDog()->HPlay();
$animal->CreateCat()->LPlay();