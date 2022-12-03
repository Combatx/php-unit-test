<?php

namespace Ridho\PhpUnitTest;

class Person
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello(?string $name): string
    {
        if ($name === null) throw new \Exception("Name is null");
        return "Hi $name, my name is $this->name";
    }

    public function sayGoodBye(?string $name)
    {
        echo "Good Bye $name" . PHP_EOL;
    }
}
