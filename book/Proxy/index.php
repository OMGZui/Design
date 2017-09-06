<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/9/6
 * Time: 15:03
 */
namespace Book\Proxy;

include '../../index.php';

echo "-------------------------  代理模式  -------------------------\n";
//小兔子家以前遭遇了坏人骚扰，所以需要找个安全的门，比如需要口令的，这相当于代理，小兔子把需求给代理，代理去完成。
$door = new Security(new LabDoor());
$door->open('快开门啊');
$door->open('小鸡炖蘑菇');
$door->close();