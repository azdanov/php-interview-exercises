<?php

declare(strict_types=1);

namespace Tests\ReverseInt;

use Exercises\ReverseInt\ReverseInt;
use PHPUnit\Framework\TestCase;
use function method_exists;

final class ReverseIntTest extends TestCase
{
    public function testHasReverse(): void
    {
        self::markTestSkipped();
        self::assertTrue(
            method_exists(ReverseInt::class, 'reverse'),
            'Class does not have static method reverse'
        );
    }

    public function testCanReverseInt(): void
    {
        self::markTestSkipped();
        self::assertSame(21, ReverseInt::reverse(12));
    }

    public function testCanReverseIntWithThreeDigits(): void
    {
        self::markTestSkipped();
        self::assertSame(321, ReverseInt::reverse(123));
    }

    public function testCanReverseIntZeros(): void
    {
        self::markTestSkipped();
        self::assertSame(3, ReverseInt::reverse(300));
    }

    public function testCanReverseIntNegative(): void
    {
        self::markTestSkipped();
        self::assertSame(-21, ReverseInt::reverse(-12));
    }

    public function testCanReverseIntNegativeWithZeros(): void
    {
        self::markTestSkipped();
        self::assertSame(-21, ReverseInt::reverse(-120));
    }
}
