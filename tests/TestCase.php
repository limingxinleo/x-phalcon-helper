<?php
// +----------------------------------------------------------------------
// | TestCase.php [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------
namespace Tests;

use PHPUnit\Framework\TestCase as UnitTestCase;
use Phalcon\Config;
use Phalcon\Di\FactoryDefault;

class TestCase extends UnitTestCase
{
    public $di;

    public function setUp()
    {
        $this->di = new FactoryDefault();
        $this->di->setShared('config', function () {
            return new Config([
                'version' => '0.0.1',
                'application' => [
                    'logDir' => __DIR__ . '/../logs/',
                ],
            ]);
        });
    }
}