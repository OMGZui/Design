<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/8/23
 * Time: 16:48
 */
namespace Book\ChainOfResponsibility;

include '../../index.php';

echo "-------------------------  责任链模式  -------------------------\n";
//为请求创建了一个接收者对象的链，并沿这条链传递该请求，直到有对象处理它为止
//就比如汇报工作，在《人民的名义》里，有这样一条链，孙连城--李达康--沙瑞金--习大大
//这时李达康需要汇报工作，显然直接跳过孙连城和自己，要向沙瑞金汇报工作。
//然而草民呢，那直接是孙连城

$city = new City(5);
$province = new Province(7);
$center = new Center(10);

$city->setNext($province);
$province->setNext($center);

echo "-------------------------  草民  -------------------------\n";
//草民
$city->report(1);
echo "-------------------------  省公安厅厅长  -------------------------\n";
//省公安厅厅长
$city->report(6);