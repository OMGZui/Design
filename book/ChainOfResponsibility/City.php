<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/8/23
 * Time: 16:28
 */
namespace Book\ChainOfResponsibility;

//市委书记 -> 李达康
class City extends Report
{
    protected $level;
    public function __construct($level)
    {
        $this->level = $level;
    }
}
