<?php

declare(strict_types=1);

namespace Meditate\Greeting;

use PHPUnit\Framework\TestCase;

class GreetingTest extends TestCase
{
    /**
     * Test that true does in fact equal true
     */
    public function testSayHi()
    {
        $greeting = new Greeting();
        $name = "Shengyou";
        $expected = "Hi, $name";

        $actual = $greeting->sayHi($name);

        $this->assertEquals($expected, $actual);
    }

    public function testSayHello()
    {
        $greeting = new Greeting();
        $name = "Shengyou";
        $expected = "Hello, $name";

        $actual = $greeting->sayHello($name);

        $this->assertEquals($expected, $actual);
    }
}
