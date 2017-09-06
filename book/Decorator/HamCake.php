<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/9/6
 * Time: 15:55
 */
namespace Book\Decorator;

class HamCake implements Cake
{
    protected $obj;
    function __construct(Cake $cake)
    {
        $this->obj = $cake;
    }

    function money()
    {
        return $this->obj->money() + 1.5;
    }

    function name()
    {
        return $this->obj->name().' 加火腿肠';
    }
}