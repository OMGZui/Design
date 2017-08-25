<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/8/25
 * Time: 16:50
 */
namespace Book\Bridge;

class Jinx implements Hero
{
    protected $obj;
    function __construct(Equipment $equipment)
    {
        $this->obj = $equipment;
    }

    function equip()
    {
        echo "Jinx equip ".$this->obj->equipment()."-- 金克丝装备了".$this->obj->equipment()."\n";
    }
}