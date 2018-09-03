<?php
/**
 * Created by PhpStorm.
 * User: xingzhilong
 * Date: 2018/9/3
 * Time: 上午11:20
 */

namespace Tests;


use PHPUnit\Framework\TestCase;

class BLogTest extends TestCase
{
    public function testEqEmpty()
    {
        $this->assertEmpty('');
    }

}