<?php

/**
 * Created by PhpStorm.
 * User: admin
 * Date: 3/24/16
 * Time: 11:52 AM
 */
//require_once dirname(__FILE__) . '/../web/Wrapper.php'; // Composer set All web Autoload

class WrapperTest extends PHPUnit_Framework_TestCase
{
    function testCanCreateAWrapper() {
        $wrapper = new Wrapper();
    }
}
