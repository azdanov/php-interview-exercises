<?php

declare(strict_types=1);

namespace Exercises\Search\Complete;

use function count;
use function intdiv;
use function strlen;

final class SearchComplete
{
    /** @param mixed[] $input */
    public static function linear(array $input, int $n): ?int
    {
        if (count($input) === 0) {
            return null;
        }

        foreach ($input as $i => $v) {
            if ($v === $n) {
                return $i;
            }
        }

        return null;
    }

    /** @param mixed[] $input */
    public static function binary(array $input, int $n): ?int
    {
        if (count($input) === 0) {
            return null;
        }

        $start = 0;
        $end = count($input) - 1;
        $middle = intdiv($start + $end, 2);

        while ($input[$middle] !== $n && $start <= $end) {
            if ($n < $input[$middle]) {
                $end = $middle - 1;
            } else {
                $start = $middle + 1;
            }
            $middle = intdiv($start + $end, 2);
        }

        return $input[$middle] === $n ? $middle : null;
    }

    public static function naive(string $input, string $n): int
    {
        $counter = 0;

        for ($i = 0, $iMax = strlen($input), $nMax = strlen($n); $i < $iMax; ++$i) {
            for ($j = 0; $j < $nMax; ++$j) {
                if ($n[$j] !== $input[$i + $j]) {
                    break;
                }
                if ($j === $nMax - 1) {
                    ++$counter;
                }
            }
        }

        return $counter;
    }
}
