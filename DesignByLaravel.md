# Laravel中的设计模式

## 模式列表

1. 创建型模式--Creational

    * 简单工厂模式--SimpleFactory
    * 工厂方法模式--FactoryMethod
    * 抽象工厂模式--AbstractFactory
    * 单例模式--Singleton

2. 结构性模式--Structural

    * 适配器模式--Adapter
    * 桥接模式--Bridge
    * 代理模式--Proxy
    * 装饰器模式--Decorator

3. 行为型模式--Behavioral

    * 责任链模式--ChainOfResponsibility
    * 观察者模式--Observer
    * 策略模式--Strategy
    * 迭代器模式--Iterator

## 暂时顺着生命周期来描述

前言：开始了，好激动

### 生命周期--Request Lifecycle

    When using any tool in the "real world", you feel more confident if you understand how that tool works. Application development is no different. When you understand how your development tools function, you feel more comfortable and confident using them.

很喜欢这两个关键字，`comfortable`+`confident`

下载一份最新laravel代码，打开phpstorm，开始疯狂跳转代码，我们找到了`app.php`里有这样的代码：

```php
// 绑定HTTP到IoC容器
$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    App\Http\Kernel::class
);
// 绑定命令行到IoC容器
$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);
// 绑定异常处理到IoC容器
$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

跳转singleton()方法：

    /**
     * 注册一个共享绑定的容器。
     * Register a shared binding in the container.
     *
     * @param  string|array  抽象接口 $abstract
     * @param  \Closure|string|null  具体类 $concrete
     * @return void
     */
    public function singleton($abstract, $concrete = null)
    {
        $this->bind($abstract, $concrete, true);
    }

```
