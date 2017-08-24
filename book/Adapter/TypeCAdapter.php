<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/8/24
 * Time: 17:28
 */
namespace Book\Adapter;

class TypeCAdapter implements Usb
{
    protected $obj;

    public function __construct(TypeC $typeC)
    {
        $this->obj = $typeC;
    }

    //适配普通usb
    public function usb()
    {
        $this->obj->highUsb();
    }
}