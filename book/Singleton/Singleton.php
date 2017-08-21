<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/8/20
 * Time: 17:02
 */

namespace Book\Singleton;

class Singleton
{
    public static $instance;
    //私有构造方法，不让外部new
    //同时加上final，方法无法覆盖，防止子类捣乱
    final private function __construct()
    {
    }

    //加上final，防止克隆
    final private function __clone()
    {

    }

    //获取对象
    public static function getInstance()
    {
        //恒等于 ===
        if(self::$instance === null){
            self::$instance = new self();
        }
        return self::$instance;
    }
}