<?php

declare(strict_types=1);

namespace Exercises\Sort\Complete;

use function array_merge;
use function array_shift;
use function array_slice;
use function count;
use function intdiv;

final class SortComplete
{
    /**
     * @param mixed[] $input
     *
     * @return mixed[]
     */
    public static function bubble(array $input): array
    {
        $noSwap = true;
        $length = count($input) - 1;

        while ($noSwap) {
            $noSwap = false;

            for ($i = 0; $i < $length; ++$i) {
                if ($input[$i] > $input[$i + 1]) {
                    self::swap($input[$i], $input[$i + 1]);
                    $noSwap = true;
                }
            }
        }

        return $input;
    }

    /**
     * @param mixed[] $input
     *
     * @return mixed[]
     */
    public static function selection(array $input): array
    {
        for ($i = 0, $min = $i, $length = count($input); $i < $length; $min = ++$i) {
            for ($j = $i + 1; $j < $length; ++$j) {
                if ($input[$j] < $input[$min]) {
                    $min = $j;
                }
            }

            if ($i !== $min) {
                self::swap($input[$i], $input[$min]);
            }
        }

        return $input;
    }

    /**
     * @param mixed[] $input
     *
     * @return mixed[]
     */
    public static function insertion(array $input): array
    {
        foreach ($input as $i => $value) {
            for ($j = $i; $j > 0 && $input[$j - 1] > $value; --$j) {
                $input[$j] = $input[$j - 1];
            }
            $input[$j] = $value;
        }

        return $input;
    }

    /**
     * @param mixed[] $input
     *
     * @return mixed[]
     */
    public static function merge(array $input): array
    {
        $length = count($input);
        if ($length <= 1) {
            return $input;
        }

        $middle = intdiv($length, 2);
        $left = array_slice($input, 0, $middle);
        $right = array_slice($input, $middle);

        $left = self::merge($left);
        $right = self::merge($right);

        return self::merger($left, $right);
    }

    /**
     * @param mixed[] $input
     *
     * @return mixed[]
     */
    public static function quick(
        array &$input,
        ?int $left = 0,
        ?int $right = null
    ): array {
        $right = $right ?? count($input) - 1;

        if ($right - $left < 1) {
            return [];
        }

        $pivotIndex = self::pivot($input, $left, $right);

        self::quick($input, $left, $pivotIndex - 1);
        self::quick($input, $pivotIndex + 1, $right);

        return $input;
    }

    /**
     * @param mixed[] $input
     *
     * @return mixed[]
     */
    public static function radix(array $input): array
    {
        return $input;
    }

    /**
     * @param mixed $x
     * @param mixed $y
     */
    private static function swap(&$x, &$y): void
    {
        $tmp = $x;
        $x = $y;
        $y = $tmp;
    }

    /**
     * Helper method for Merge sort.
     *
     * @param mixed[] $left
     * @param mixed[] $right
     *
     * @return mixed[]
     */
    private static function merger(array $left, array $right): array
    {
        $results = [];

        while (count($left) && count($right)) {
            if ($left[0] < $right[0]) {
                $results[] = array_shift($left);
            } else {
                $results[] = array_shift($right);
            }
        }

        return array_merge($results, $left, $right);
    }

    /** @param mixed[] $input */
    private static function pivot(
        array &$input,
        ?int $start = 0,
        ?int $end = null
    ): int {
        $end = $end ?? count($input) - 1;
        $pivot = $input[$start];
        $swapIndex = $start;

        for ($i = $start + 1; $i <= $end; ++$i) {
            if ($input[$i] < $pivot) {
                self::swap($input[++$swapIndex], $input[$i]);
            }
        }

        self::swap($input[$start], $input[$swapIndex]);

        return $swapIndex;
    }
}
