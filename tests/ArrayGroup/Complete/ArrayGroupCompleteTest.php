<?php

declare(strict_types=1);

namespace Tests\MaxChar;

use Exercises\ArrayGroup\Complete\ArrayGroupComplete;
use PHPUnit\Framework\TestCase;

final class ArrayGroupCompleteTest extends TestCase
{
    public function testCanGroupFive(): void
    {
        self::assertSame(
            [[1, 2, 3], [4, 5]],
            ArrayGroupComplete::group([1, 2, 3, 4, 5], 3)
        );
    }

    public function testCanGroupFifteen(): void
    {
        self::assertSame(
            [[1, 2, 3, 4, 5], [6, 7, 8, 9, 10], [11, 12, 13, 14, 15]],
            ArrayGroupComplete::group(
                [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15],
                5
            )
        );
    }

    public function testCanGroupFive1(): void
    {
        self::assertSame(
            [[1, 2, 3], [4, 5]],
            ArrayGroupComplete::group1([1, 2, 3, 4, 5], 3)
        );
    }

    public function testCanGroupFifteen1(): void
    {
        self::assertSame(
            [[1, 2, 3, 4, 5], [6, 7, 8, 9, 10], [11, 12, 13, 14, 15]],
            ArrayGroupComplete::group1(
                [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15],
                5
            )
        );
    }

    public function testCanGroupFive2(): void
    {
        self::assertSame(
            [[1, 2, 3], [4, 5]],
            ArrayGroupComplete::group2([1, 2, 3, 4, 5], 3)
        );
    }

    public function testCanGroupFifteen2(): void
    {
        self::assertSame(
            [[1, 2, 3, 4, 5], [6, 7, 8, 9, 10], [11, 12, 13, 14, 15]],
            ArrayGroupComplete::group2(
                [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15],
                5
            )
        );
    }
}
