<?php

declare(strict_types=1);

namespace Tests\Sort\Complete;

use Exercises\Sort\Complete\SortComplete;
use PHPUnit\Framework\TestCase;
use ReflectionException;
use Tests\GetReflectionMethod;
use function method_exists;

final class SortCompleteTest extends TestCase
{
    use GetReflectionMethod;

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
            method_exists(SortComplete::class, 'merger'),
            'Class does not have method merger'
        );
        self::assertTrue(
            method_exists(SortComplete::class, 'quick1'),
            'Class does not have method quick1'
        );
        self::assertTrue(
            method_exists(SortComplete::class, 'quick2'),
            'Class does not have method quick2'
        );
        self::assertTrue(
            method_exists(SortComplete::class, 'radix'),
            'Class does not have method radix'
        );
    }

    public function testBubbleSort(): void
    {
        self::assertSame($this->sorted, SortComplete::bubble($this->input));
    }

    public function testSelectionSort(): void
    {
        self::assertSame($this->sorted, SortComplete::selection($this->input));
    }

    public function testInsertionSort(): void
    {
        self::assertSame($this->sorted, SortComplete::insertion($this->input));
    }

    /** @throws ReflectionException */
    public function testMergerHelper(): void
    {
        $left = [1, 9];
        $right = [3, 7, 10];

        $merger = self::getMethod(SortComplete::class, 'merger');

        self::assertSame([1, 3, 7, 9, 10], $merger->invoke(null, $left, $right));
    }

    public function testMergeSort(): void
    {
        self::assertSame($this->sorted, SortComplete::merge($this->input));
    }

    public function testQuick1Sort(): void
    {
        self::assertSame($this->sorted, SortComplete::quick1($this->input));
    }

    public function testQuick2Sort(): void
    {
        SortComplete::quick2($this->input);
        self::assertSame($this->sorted, $this->input);
    }

    public function testRadixSort(): void
    {
        self::assertSame([ 12, 23, 345, 2345, 5467, 9852 ], SortComplete::radix([23, 345, 5467, 12, 2345, 9852]));
    }
}
