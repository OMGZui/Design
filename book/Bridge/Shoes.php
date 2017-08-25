<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/8/25
 * Time: 16:54
 */
namespace Book\Bridge;

class Shoes implements Equipment
{
    function equipment()
    {
        return 'Shoes（草鞋）';
    }
}