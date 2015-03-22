<?php
/**
 * Created by PhpStorm.
 * User: kauri
 * Date: 22/03/15
 * Time: 15:26
 */

use Managlea\RDBMS\RDBMS;


class RDBMSTest extends \PHPUnit_Framework_TestCase
{
    public function testGetOrm()
    {
        $foo = 'foo';
        $rdbms = new RDBMS($foo);

        $this->assertEquals($foo, $rdbms->getOrm());
    }
}
