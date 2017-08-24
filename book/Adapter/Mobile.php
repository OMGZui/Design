<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/8/24
 * Time: 17:33
 */
namespace Book\Adapter;

class Mobile
{
    public function used(Usb $usb)
    {
        return $usb->usb();
    }
}