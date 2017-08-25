<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/8/25
 * Time: 16:49
 */
namespace Book\Bridge;

interface Hero
{
    function __construct(Equipment $equipment);
    function equip();
}