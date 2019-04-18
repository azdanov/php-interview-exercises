<?php

declare(strict_types=1);

namespace Tests\MaxSubArraySum\Complete;

use Exercises\MaxSubArraySum\Complete\MaxSubArraySumComplete;
use PHPUnit\Framework\TestCase;
use function method_exists;

final class MaxSubArrayTestComplete extends TestCase
{
    public function testHasMethods(): void
    {
        self::assertTrue(
            method_exists(MaxSubArraySumComplete::class, 'max1'),
            'Class does not have static method max1'
        );
        self::assertTrue(
            method_exists(MaxSubArraySumComplete::class, 'max2'),
            'Class does not have static method max2'
        );
    }

    public function testMax1(): void
    {
        self::assertSame(5, MaxSubArraySumComplete::max1([1, 2, 3], 2));
        self::assertSame(
            19,
            MaxSubArraySumComplete::max1([2, 6, 9, 2, 1, 8, 5, 6, 3], 3)
        );
        self::assertSame(0, MaxSubArraySumComplete::max1([1, 2, 3], 5));
    }

    public function testMax2(): void
    {
        self::assertSame(5, MaxSubArraySumComplete::max2([1, 2, 3], 2));
        self::assertSame(
            19,
            MaxSubArraySumComplete::max2([2, 6, 9, 2, 1, 8, 5, 6, 3], 3)
        );
        self::assertSame(0, MaxSubArraySumComplete::max1([1, 2, 3], 5));
    }
}
