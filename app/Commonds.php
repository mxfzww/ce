<?php
/**
 * Notes:
 * User: zhaowei
 * DateTime: 2020/12/28 下午7:23
 */
namespace Zw\Hello;

use Zw\Hello\Lib\Foo;

class Commands
{
    public function getName(){
        (new Foo())->getName();
    }
}