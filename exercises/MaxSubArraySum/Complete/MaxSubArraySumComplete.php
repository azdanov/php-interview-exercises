<?php

declare(strict_types=1);

namespace Exercises\MaxSubArraySum\Complete;

use const INF;
use function count;
use function max;

final class MaxSubArraySumComplete
{
    /** @param int[] $input */
    public static function max1(array $input, int $n): int
    {
        $length = count($input);
        if ($n > $length) {
            return 0;
        }

        $max = -INF;

        for ($i = 0; $i < $length - $n + 1; ++$i) {
            $temp = 0;
            for ($j = 0; $j < $n; ++$j) {
                $temp += $input[$i + $j];
            }
            if ($temp > $max) {
                $max = $temp;
            }
        }

        return $max;
    }
}
