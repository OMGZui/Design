<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/8/23
 * Time: 16:31
 */
namespace Book\ChainOfResponsibility;

//中央  -> 习大大
class Center extends Report
{
    protected $level;
    public function __construct($level)
    {
        $this->level = $level;
    }
}
