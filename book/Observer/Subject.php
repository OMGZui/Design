<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/8/20
 * Time: 20:03
 */

namespace Book\Observer;

use SplObserver;

class Subject implements \SplSubject
{
    private $observers;
    public $num;
    public $hobby;

    function __construct($hobby)
    {
        $this->num = rand(1, 10);
        $this->hobby = $hobby;
        $this->observers = new \SplObjectStorage();
    }

    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}