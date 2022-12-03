<?php

namespace Ridho\PhpUnitTest;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase
{

    private Counter $counter;

    public function setUp(): void
    {
        $this->counter = new Counter();
        echo "Membuat Counter" . PHP_EOL;
    }


    public function testIncrement()
    {
        self::assertEquals(0, $this->counter->getCounter());
        self::markTestIncomplete("Todo do increment");
        echo "Test Test" . PHP_EOL;
    }


    public function testCounter()
    {

        $this->counter->increment();
        Assert::assertEquals(1, $this->counter->getCounter());

        $this->counter->increment();
        $this->assertEquals(2, $this->counter->getCounter());
        $this->counter->increment();
        self::assertEquals(3, $this->counter->getCounter());
    }

    /**
     * @test
     */
    public function increment()
    {

        $this->counter->increment();
        Assert::assertEquals(1, $this->counter->getCounter());
    }

    public function testIncrement2()
    {
        self::markTestSkipped("skip test jika ada error, biar tidak lupa");

        $this->counter->increment();
        Assert::assertEquals(1, $this->counter->getCounter());
    }

    public function testFirst(): Counter
    {
        $this->counter->increment();
        $this->assertEquals(1, $this->counter->getCounter());
        return $this->counter;
    }

    /**
     * @depends testFirst
     */
    public function testSecond(Counter $counter): void
    {
        $counter->increment();
        $this->assertEquals(2, $counter->getCounter());
    }

    protected function tearDown(): void
    {
        echo "Tear Down" . PHP_EOL;
    }

    /**
     * @after
     */
    protected function after(): void
    {
        echo "After" . PHP_EOL;
    }

    /**
     * @requires OSFAMILY Linux
     */
    public function testOnlyLinux()
    {
        self::assertTrue(true, "Only in Linux");
    }

    /**
     * @requires PHP >= 7.4
     * @requires OSFAMILY Windows
     */
    public function testOnlyForWindowsAndPHP7()
    {
        self::assertTrue(true, "Only in Windows dan PHP 7.4");
    }
}
