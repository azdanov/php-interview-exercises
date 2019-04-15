<?php

declare(strict_types=1);

namespace Tests\Sort;

use Exercises\Sort\Sort;
use PHPUnit\Framework\TestCase;
use function method_exists;

final class SortTest extends TestCase
{
    private $input = [220, -32, 405, -114, 0, 23, 5, -1];
    private $sorted = [-114, -32, -1, 0, 5, 23, 220, 405];

    public function testHasMethods(): void
    {
        self::markTestSkipped();
        self::assertTrue(
            method_exists(Sort::class, 'bubble'),
            'Class does not have method bubble'
        );
        self::assertTrue(
            method_exists(Sort::class, 'selection'),
            'Class does not have method selection'
        );
        self::assertTrue(
            method_exists(Sort::class, 'insertion'),
            'Class does not have method insertion'
        );
        self::assertTrue(
            method_exists(Sort::class, 'merge'),
            'Class does not have method merge'
        );
        self::assertTrue(
            method_exists(Sort::class, 'quick'),
            'Class does not have method quick'
        );
        self::assertTrue(
            method_exists(Sort::class, 'radix'),
            'Class does not have method radix'
        );
    }

    public function testBubbleSort(): void
    {
        self::markTestSkipped();
        self::assertEquals($this->sorted, Sort::bubble($this->input));
    }

    public function testSelectionSort(): void
    {
        self::markTestSkipped();
        self::assertEquals($this->sorted, Sort::selection($this->input));
    }

    public function testInsertionSort(): void
    {
        self::markTestSkipped();
        self::assertEquals($this->sorted, Sort::insertion($this->input));
    }

    public function testMergeSort(): void
    {
        self::markTestSkipped();
        self::assertEquals($this->sorted, Sort::merge($this->input));
    }

    public function testQuickSort(): void
    {
        self::markTestSkipped();
        self::assertEquals($this->sorted, Sort::quick($this->input));
    }

    public function testRadixSort(): void
    {
        self::markTestSkipped();
        self::assertEquals($this->sorted, Sort::radix($this->input));
    }
}
