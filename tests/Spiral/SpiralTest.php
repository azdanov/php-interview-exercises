<?php

declare(strict_types=1);

namespace Tests\ReverseString;

use Exercises\Spiral\Spiral;
use PHPUnit\Framework\TestCase;
use function method_exists;

final class SpiralTest extends TestCase
{
    public function testHasMake(): void
    {
        self::markTestSkipped();
        self::assertTrue(
            method_exists(Spiral::class, 'make'),
            'Class does not have static method make'
        );
    }

    public function testCanPrint1x1(): void
    {
        self::markTestSkipped();
        self::assertEquals([[1]], Spiral::make(1));
    }

    public function testCanPrint2x2(): void
    {
        self::markTestSkipped();
        self::assertEquals([[1, 2], [4, 3]], Spiral::make(2));
    }

    public function testCanPrint3x3(): void
    {
        self::markTestSkipped();
        self::assertEquals([[1, 2, 3], [8, 9, 4], [7, 6, 5]], Spiral::make(3));
    }

    public function testCanPrint4x4(): void
    {
        self::markTestSkipped();
        self::assertEquals([
            [1, 2, 3, 4],
            [12, 13, 14, 5],
            [11, 16, 15, 6],
            [10, 9, 8, 7],
        ], Spiral::make(4));
    }
}
