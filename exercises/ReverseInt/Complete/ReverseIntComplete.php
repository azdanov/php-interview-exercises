<?php

declare(strict_types=1);

namespace Exercises\ReverseInt\Complete;

use function strrev;

/**
 * Given an integer reverse its digits.
 *
 * @example ReverseInt::reverse(12) === 21
 * @example ReverseInt::reverse(123) === 321
 * @example ReverseInt::reverse(300) === 3
 * @example ReverseInt::reverse(-12) === -21
 * @example ReverseInt::reverse(-120) === -21
 */
final class ReverseIntComplete
{
    public static function reverse(int $number): int
    {
        /** @see https://wiki.php.net/rfc/combined-comparison-operator */
        $sign = $number <=> 0;

        return $sign * (int) strrev((string) $number);
    }
}
