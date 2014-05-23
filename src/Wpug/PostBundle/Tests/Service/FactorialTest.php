<?php

namespace Wpug\PostBundle\Tests\Service;

use Wpug\PostBundle\Service\Factorial;

class DefaultControllerTest extends \PHPUnit_Framework_TestCase
{
    public function testCalculate()
    {
        $factorial = new Factorial();
        $this->assertEquals($factorial->calculate(0), 1);
        $this->assertEquals($factorial->calculate(5), 120);
    }
    public function testException()
    {
        $this->setExpectedException('InvalidArgumentException');
        
        $factorial = new Factorial();
        $factorial->calculate(-1);
    }
}
