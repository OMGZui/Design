<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/11/8
 * Time: 21:34
 */

//抽象被观察者
abstract class Subject
{
    //定义一个观察者数组
    private $observers = array();

    //增加观察者方法
    public function addObserver(Observer $observer)
    {
        $this->observers[] = $observer;
        echo "添加观察者成功" . PHP_EOL;
    }

    //删除观察者方法
    public function delObserver(Observer $observer)
    {
        $key = array_search($observer, $this->observers); //判断是否有该观察者存在
        if ($observer === $this->observers[$key]) { //值虽然相同 但有可能不是同一个对象 ，所以使用全等判断
            unset($this->observers[$key]);
            echo '删除观察者成功' . PHP_EOL;
        } else {
            echo '观察者不存在，无需删除' . PHP_EOL;
        }
    }

    //通知所有观察者
    public function notifyObservers()
    {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }
}

//具体被观察者 服务端
class Server extends Subject
{
    //具体被观察者业务 发布一条信息，并通知所有客户端
    public function publish()
    {
        echo '今天天气很好，我发布了更新包' . PHP_EOL;
        $this->notifyObservers();
    }
}

//抽象观察者接口
Interface Observer
{
    public function update();
}

//具体观察者类
//微信端
class Wechat implements Observer
{
    public function update()
    {
        echo '通知已接收，微信更新完毕' . PHP_EOL;
    }
}

//web端
class Web implements Observer
{
    public function update()
    {
        echo '通知已接收，web端系统更新中' . PHP_EOL;
    }
}

//app端
class App implements Observer
{
    public function update()
    {
        echo '通知已接收，APP端稍后更新' . PHP_EOL;
    }
}

//实例化被观察者
$server = new Server;
//实例化观察者
$wechat = new Wechat;
$web = new Web;
$app = new App;
//添加被观察者
$server->addObserver($wechat);
$server->addObserver($web);
$server->addObserver($app);
//被观察者 发布信息
$server->publish();

//删除观察者
$server->delObserver($wechat);
//再次发布信息
$server->publish();

//尝试删除一个未添加成观察者的对象
$server->delObserver(new Web);
//再次发布信息
$server->publish();