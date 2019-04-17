<?php

declare(strict_types=1);

namespace Tests\Numbers\Complete;

use Exercises\Numbers\Complete\NumbersComplete;
use PHPUnit\Framework\TestCase;

final class NumbersCompleteTest extends TestCase
{
    public function testAdd1(): void
    {
        self::assertSame(6, NumbersComplete::add1(3));
    }

    public function testAdd2(): void
    {
        self::assertSame(6, NumbersComplete::add2(3));
    }
}
