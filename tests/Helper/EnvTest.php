<?php
// +----------------------------------------------------------------------
// | BaseTest.php [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------
namespace Tests\Helper;

use Tests\TestCase;

class EnvTest extends TestCase
{
    public function testNotSetEnv()
    {
        $this->assertEquals('limx', env('USER', 'limx'));
    }

    public function testEnv()
    {
        $this->assertEquals('x-phalcon-helper', env('LIBRARY_NAME', 'limx'));
    }

    public function testString()
    {
        $this->assertEquals('xxx', env('STRING'));
        $this->assertEquals('xxx', env('STRING2'));
    }

    public function testInteger()
    {
        $this->assertEquals(100, env('INT'));
    }

    public function testFloat()
    {
        $this->assertEquals(1.11, env('FLOAT'));
    }

    public function testBoolean()
    {
        $this->assertEquals(false, env('BOOLEAN_FALSE'));
        $this->assertEquals(true, env('BOOLEAN_TRUE'));
    }

    public function testEmpty()
    {
        $this->assertEquals('', env('EMPTY'));
        $this->assertEquals('', env('EMPTY2'));
    }

    public function testNull()
    {
        $this->assertEquals(null, env('NULL'));
        $this->assertEquals(null, env('NULL2'));
        $this->assertEquals(null, env('NULL3'));
    }
}
