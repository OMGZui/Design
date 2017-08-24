<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/8/24
 * Time: 17:23
 */
namespace Book\Adapter;

class Usb2 implements Usb
{
    public function usb()
    {
        echo "欢迎进入USB2.0时代 \n";
    }
}