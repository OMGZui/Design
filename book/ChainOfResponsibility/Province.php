<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/8/23
 * Time: 16:28
 */
namespace Book\ChainOfResponsibility;

//省委书记 -> 沙瑞金
class Province extends Report
{
    protected $level;
    public function __construct($level)
    {
        $this->level = $level;
    }
}
