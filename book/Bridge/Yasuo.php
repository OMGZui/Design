<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/8/25
 * Time: 16:58
 */
namespace Book\Bridge;

class Yasuo implements Hero
{
    protected $obj;
    function __construct(Equipment $equipment)
    {
        $this->obj = $equipment;
    }

    function equip()
    {
        echo "Yasuo equip ".$this->obj->equipment()."-- 亚索装备了".$this->obj->equipment()."\n";
    }
}