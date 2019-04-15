<?php

declare(strict_types=1);

namespace Tests\Sort\Complete;

use Exercises\Sort\Complete\SortComplete;
use PHPUnit\Framework\TestCase;
use function method_exists;

final class SortCompleteTest extends TestCase
{
    /** @var int[] */
    private $input = [220, -32, 405, -114, 0, 23, 5, -1];
    /** @var int[] */
    private $sorted = [-114, -32, -1, 0, 5, 23, 220, 405];

    public function testHasMethods(): void
    {
        self::assertTrue(
            method_exists(SortComplete::class, 'bubble'),
            'Class does not have method bubble'
        );
        self::assertTrue(
            method_exists(SortComplete::class, 'selection'),
            'Class does not have method selection'
        );
        self::assertTrue(
            method_exists(SortComplete::class, 'insertion'),
            'Class does not have method insertion'
        );
        self::assertTrue(
            method_exists(SortComplete::class, 'merge'),
            'Class does not have method merge'
        );
        self::assertTrue(
            method_exists(SortComplete::class, 'quick'),
            'Class does not have method quick'
        );
        self::assertTrue(
            method_exists(SortComplete::class, 'radix'),
            'Class does not have method radix'
        );
    }

    public function testBubbleSort(): void
    {
        self::assertEquals($this->sorted, SortComplete::bubble($this->input));
    }

    public function testSelectionSort(): void
    {
        self::assertEquals($this->sorted, SortComplete::selection($this->input));
    }

    public function testInsertionSort(): void
    {
        self::markTestSkipped();
        self::assertEquals($this->sorted, SortComplete::insertion($this->input));
    }

    public function testMergeSort(): void
    {
        self::markTestSkipped();
        self::assertEquals($this->sorted, SortComplete::merge($this->input));
    }

    public function testQuickSort(): void
    {
        self::markTestSkipped();
        self::assertEquals($this->sorted, SortComplete::quick($this->input));
    }

    public function testRadixSort(): void
    {
        self::markTestSkipped();
        self::assertEquals($this->sorted, SortComplete::radix($this->input));
    }
}
