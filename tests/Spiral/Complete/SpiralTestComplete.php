<?php

declare(strict_types=1);

namespace Tests\ReverseString;

use Exercises\Spiral\Complete\SpiralComplete;
use PHPUnit\Framework\TestCase;

final class SpiralTestComplete extends TestCase
{
    public function testCanPrint1x1(): void
    {
        self::assertEquals([[1]], SpiralComplete::make(1));
    }

    public function testCanPrint2x2(): void
    {
        self::assertEquals([[1, 2], [4, 3]], SpiralComplete::make(2));
    }

    public function testCanPrint3x3(): void
    {
        self::assertEquals([
            [1, 2, 3],
            [8, 9, 4],
            [7, 6, 5],
        ], SpiralComplete::make(3));
    }

    public function testCanPrint4x4(): void
    {
        self::assertEquals([
            [1, 2, 3, 4],
            [12, 13, 14, 5],
            [11, 16, 15, 6],
            [10, 9, 8, 7],
        ], SpiralComplete::make(4));
    }
}
