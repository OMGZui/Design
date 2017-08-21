<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/8/21
 * Time: 21:52
 */

namespace Book\Observer;

include '../../index.php';

echo "-------------------------  观察者模式  -------------------------\n";
//这里秋水深深的喜欢上了肖红，真是造孽啊，我本人是挺喜欢赵英男的，可惜啊。而且还开启了单例模式。
//秋水选择肖红，发布消息
$observer = new Subject('XH');
//同时通知赵英男和肖红两个观察者加上老妈
$observer->attach(ZYNObserver::getInstance());
$observer->attach(XHObserver::getInstance());
$observer->detach(XHObserver::getInstance());
$observer->attach(MotherObserver::getInstance());
//通知
$observer->notify();
//赵英男收到后显示 "我选择了肖红"
//肖红收到后显示 "我选择了你 -> 肖红"
//老妈收到后显示 "我选择了她 -> 肖红"
