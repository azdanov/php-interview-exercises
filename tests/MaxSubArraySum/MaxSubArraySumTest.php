<?php

declare(strict_types=1);

namespace Tests\MaxSubArraySum;

use Exercises\MaxSubArraySum\MaxSubArraySum;
use PHPUnit\Framework\TestCase;
use function method_exists;

final class MaxSubArraySumTest extends TestCase
{
    public function testHasMethods(): void
    {
        self::markTestSkipped();
        self::assertTrue(
            method_exists(MaxSubArraySum::class, 'max'),
            'Class does not have static method max'
        );
    }

    public function testMax(): void
    {
        self::markTestSkipped();
        self::assertSame(5, MaxSubArraySum::max([1, 2, 3], 2));
        self::assertSame(19, MaxSubArraySum::max([2, 6, 9, 2, 1, 8, 5, 6, 3], 3));
        self::assertSame(0, MaxSubArraySum::max([1, 2, 3], 5));
    }
}
