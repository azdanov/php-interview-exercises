<?php

declare(strict_types=1);

namespace Tests\MaxChar;

use Exercises\Fibonacci\Fibonacci;
use PHPUnit\Framework\TestCase;
use function method_exists;

final class FibonacciTest extends TestCase
{
    public function testHasGet(): void
    {
        $this->assertTrue(
            method_exists(Fibonacci::class, 'get'),
            'Class does not have static method get'
        );
    }

    public function testGet0th(): void
    {
        self::markTestSkipped();
        self::assertSame(0, Fibonacci::get(0));
    }

    public function testGet1th(): void
    {
        self::markTestSkipped();
        self::assertSame(1, Fibonacci::get(1));
    }

    public function testGet2th(): void
    {
        self::markTestSkipped();
        self::assertSame(1, Fibonacci::get(2));
    }

    public function testGet3th(): void
    {
        self::markTestSkipped();
        self::assertSame(2, Fibonacci::get(3));
    }

    public function testGet4th(): void
    {
        self::markTestSkipped();
        self::assertSame(3, Fibonacci::get(4));
    }

    public function testGet20th(): void
    {
        self::markTestSkipped();
        self::assertSame(6765, Fibonacci::get(20));
    }
}
