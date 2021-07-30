<?php

declare(strict_types=1);

namespace Meditate\Greeting;

class Greeting
{
    /**
     * Create a new Skeleton Instance
     */
    public function __construct()
    {
        // constructor body
    }

    /**
     * Friendly welcome
     *
     * @param string $name Phrase to return
     *
     * @return string Returns the phrase passed in
     */
    public function sayHi(string $name): string
    {
        return "Hi, $name";
    }

    /**
     * @param string $name
     *
     * @return string
     */
    public function sayHello(string $name): string
    {
        return "Hello, $name";
    }
}
