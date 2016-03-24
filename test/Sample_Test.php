<?php

/**
 * Created by PhpStorm.
 * User: admin
 * Date: 3/24/16
 * Time: 11:16 AM
 *
 * step run : setUpBeforeClass >> setUp >> test1 >> setUp >> test2 >> setUp >> test3 >>
 */
class Sample_Test extends PHPUnit_Framework_TestCase
{

    static $variable;

    public static function setUpBeforeClass(){
        self::$variable = 123;
    }

    function setUp(){
        $this->variable = self::$variable;
    }

    function test1(){
        $this->assertTrue(true);
    }

    function test2(){
        $this->assertFalse(false);
    }

    function test3(){
        $this->assertEquals(1, 1);
    }

}
