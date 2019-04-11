<?php

declare(strict_types=1);

namespace Tests\ReverseInt\Complete;

use Exercises\ReverseInt\Complete\ReverseIntComplete;
use PHPUnit\Framework\TestCase;

final class ReverseIntTestComplete extends TestCase
{
    public function testCanReverseIntZero(): void
    {
        self::assertSame(0, ReverseIntComplete::reverse(0));
    }

    public function testCanReverseInt(): void
    {
        self::assertSame(21, ReverseIntComplete::reverse(12));
    }

    public function testCanReverseIntWithThreeDigits(): void
    {
        self::assertSame(321, ReverseIntComplete::reverse(123));
    }

    public function testCanReverseIntZeros(): void
    {
        self::assertSame(3, ReverseIntComplete::reverse(300));
    }

    public function testCanReverseIntNegative(): void
    {
        self::assertSame(-21, ReverseIntComplete::reverse(-12));
    }

    public function testCanReverseIntNegativeWithZeros(): void
    {
        self::assertSame(-21, ReverseIntComplete::reverse(-120));
    }
}
