<?php

declare(strict_types=1);

namespace Tests\ReverseInt\Complete;

use Exercises\ReverseInt\Complete\ReverseIntComplete;
use PHPUnit\Framework\TestCase;

final class ReverseIntTestComplete extends TestCase
{
    public function testCanReverseInt(): void
    {
        $this->assertSame(21, ReverseIntComplete::reverse(12));
    }

    public function testCanReverseIntWithThreeDigits(): void
    {
        $this->assertSame(321, ReverseIntComplete::reverse(123));
    }

    public function testCanReverseIntZeros(): void
    {
        $this->assertSame(3, ReverseIntComplete::reverse(300));
    }

    public function testCanReverseIntNegative(): void
    {
        $this->assertSame(-21, ReverseIntComplete::reverse(-12));
    }

    public function testCanReverseIntNegativeWithZeros(): void
    {
        $this->assertSame(-21, ReverseIntComplete::reverse(-120));
    }
}
