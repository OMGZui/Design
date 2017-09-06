<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/9/6
 * Time: 14:49
 */
namespace Book\Proxy;

class Security
{
    protected $obj;
    protected $command = '小鸡炖蘑菇';
    function __construct(Door $door)
    {
        $this->obj = $door;
    }

    function open($word)
    {
        if ($this->auth($word)){
            $this->obj->open();
        }else{
            echo "年轻的坏人！\n";
        }
    }

    function auth($word)
    {
        return $word === $this->command;
    }

    function close()
    {
        $this->obj->close();
    }

}