<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/8/17
 * Time: 21:41
 */
namespace Book\Factory;

use Book\Factory\AbstractFactory\ProductFactory;
use Book\Factory\FactoryMethod\CatFactory;
use Book\Factory\FactoryMethod\DogFactory;
use Book\Factory\SimpleFactory\Factory;
use Book\Observer\Observer;
use Book\Observer\Subject;
use Book\Singleton\Singleton;

include '../index.php';

echo "-------------------------  简单工厂模式  -------------------------\n";
Factory::CreateAnimal('cat');
Factory::CreateAnimal('dog');

//简单工厂模式最大的优点在于实现对象的创建和对象的使用分离，
//将对象的创建交给专门的工厂类负责，但是其最大的缺点在于工厂类不够灵活，
//增加新的具体产品需要修改工厂类的判断逻辑代码，而且产品较多时，工厂方法代码将会非常复杂。


echo "-------------------------  工厂方法模式  -------------------------\n";
$cat = CatFactory::createAnimal();
$cat->say();
$cat->run();

$dog = DogFactory::createAnimal();
$dog->say();
$dog->run();

//工厂方法模式是简单工厂模式的进一步抽象和推广。
//由于使用了面向对象的多态性，工厂方法模式保持了简单工厂模式的优点，而且克服了它的缺点。
//在工厂方法模式中，核心的工厂类不再负责所有产品的创建，而是将具体创建工作交给子类去做。
//这个核心类仅仅负责给出具体工厂必须实现的接口，而不负责产品类被实例化这种细节，
//这使得工厂方法模式可以允许系统在不修改工厂角色的情况下引进新产品。


echo "-------------------------  抽象工厂模式  -------------------------\n";
$newTv = ProductFactory::createTV();
$newTv->open();
$newTv->watch();

$newPc = ProductFactory::createPc();
$newPc->work();
$newPc->play();

echo "-------------------------  单例模式  -------------------------\n";
$s1 = Singleton::getInstance();
$s2 = Singleton::getInstance();

if ($s1 === $s2){
    echo '是同一个对象'.PHP_EOL;
}else{
    echo '不是同一个对象'.PHP_EOL;
}

echo "-------------------------  观察者模式  -------------------------\n";
$observer = new Subject('sports');
$observer->attach(new Observer());
$observer->notify();
