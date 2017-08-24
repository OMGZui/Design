<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/8/24
 * Time: 16:50
 */
namespace Book\Strategy;

class Go
{
    protected $obj;
    public function __construct(GoHome $goHome)
    {
        $this->obj = $goHome;
    }

    public function choose()
    {
        return $this->obj->go();
    }
}