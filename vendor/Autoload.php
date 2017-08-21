<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/8/15
 * Time: 21:42
 */

namespace Vendor;

class Autoload
{
    static function autoload($class)
    {
       require BASEDIR.'/'.str_replace('\\','/',lcfirst($class)).'.php';
    }
}