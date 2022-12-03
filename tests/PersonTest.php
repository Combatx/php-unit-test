<?php

namespace Ridho\PhpUnitTest;

use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{

    private Person $person;

    public function setUp(): void
    {
        // $this->person = new Person("Ridho");
    }

    /**
     * @before
     */
    public function createPerson()
    {
        $this->person = new Person("Ridho");
    }

    public function testSuccess()
    {
        self::assertEquals("Hi Ridho, my name is Ridho", $this->person->sayHello("Ridho"));
    }

    public function testException()
    {
        $this->expectException(\Exception::class);
        $this->person->sayHello(null);
    }

    public function testGoodByeSuccess()
    {
        $this->expectOutputString('Good Bye Ridho' . PHP_EOL);
        $this->person->sayGoodBye("Ridho");
    }
}
