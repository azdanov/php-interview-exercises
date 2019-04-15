<?php

declare(strict_types=1);

namespace Tests\MaxChar;

use Exercises\ArrayGroup\ArrayGroup;
use PHPUnit\Framework\TestCase;
use function method_exists;

final class ArrayGroupTest extends TestCase
{
    public function testHasGroup(): void
    {
        self::markTestSkipped();
        self::assertTrue(
            method_exists(ArrayGroup::class, 'group'),
            'Class does not have static method group'
        );
    }

    public function testCanGroupFive(): void
    {
        self::markTestSkipped();
        self::assertSame(
            [[1, 2, 3], [4, 5]],
            ArrayGroup::group([1, 2, 3, 4, 5], 3)
        );
    }

    public function testCanGroupFifteen(): void
    {
        self::markTestSkipped();
        self::assertSame(
            [[1, 2, 3, 4, 5], [6, 7, 8, 9, 10], [11, 12, 13, 14, 15]],
            ArrayGroup::group(
                [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15],
                5
            )
        );
    }
}
