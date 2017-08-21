<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/8/20
 * Time: 15:56
 */

namespace Test;

abstract class Tiger
{
    abstract function climb();
}

class XTiger extends Tiger
{
    function climb()
    {
        echo '摔下来'.PHP_EOL;
    }
}

class MTiger extends Tiger
{
    function climb()
    {
        echo '爬到树上'.PHP_EOL;
    }
}

class Cat
{
    function climb()
    {
        echo '飞上天'.PHP_EOL;
    }
}


class Client
{
    static function call($animal)
    {
        $animal->climb();
    }
}

//java中call()的参数中一定要指明哪个类，多态的形式是用父类来指明，子类可以公用
//php是弱类型，不需要指明哪个类，天然多态，严谨来说还是加上类

Client::call(new XTiger());
Client::call(new MTiger());
//不加类型说明，同样适用
Client::call(new Cat());