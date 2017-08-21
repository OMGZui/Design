<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/8/20
 * Time: 20:56
 */

namespace Book\Observer;

use SplSubject;

class Observer implements \SplObserver
{
    public function update(SplSubject $subject)
    {
        if ($subject->num < 3){
            echo "第{$subject->num}次登陆，正常登陆\n";
        }else{
            echo "第{$subject->num}次登陆，异常登陆\n";
        }
    }
}