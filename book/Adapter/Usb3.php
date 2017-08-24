<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/8/24
 * Time: 17:23
 */
namespace Book\Adapter;

class Usb3 implements Usb
{
    public function usb()
    {
        echo "欢迎进入USB3.0时代 \n";
    }
}