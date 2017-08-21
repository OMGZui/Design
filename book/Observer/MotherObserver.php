<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/8/20
 * Time: 20:56
 */

namespace Book\Observer;

use SplSubject;

//肖红
class MotherObserver implements \SplObserver
{
    private static $instance;

    final private function __construct(){}

    final function __clone(){}

    public static function getInstance()
    {
        if(self::$instance === null){
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function update(SplSubject $subject)
    {
        if($subject->who === 'XH'){
            echo "我选择了她 -> 肖红 \n";
        }else{
            echo "我选择了赵英男 \n";
        }
    }
}