# x-phalcon-helper
Phalcon helper

[![Build Status](https://travis-ci.org/limingxinleo/x-phalcon-helper.svg?branch=master)](https://travis-ci.org/limingxinleo/x-phalcon-helper)

## 获取依赖注入服务
~~~php
<?php
use Phalcon\Config;
use Phalcon\Di\FactoryDefault;

$di = new FactoryDefault();
$di->setShared('config', function () {
    return new Config([
        'version' => '0.0.1',
        'application' => [
            'logDir' => __DIR__ . '/../logs/',
        ],
    ]);
});

$config = di('config');
~~~

## 获取系统环境变量
~~~php
<?php

$name = env('name','limx');
~~~
