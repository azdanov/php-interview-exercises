<?php

declare(strict_types=1);

namespace Exercises\Vowels\Complete;

use function preg_replace;
use function str_split;
use function strlen;
use function strpos;
use function strtolower;

final class VowelsComplete
{
    public static function count1(string $string): int
    {
        return strlen(preg_replace('#[^aeiou]#i', '', $string));
    }

    public static function count2(string $string): int
    {
        $counter = 0;

        foreach (str_split(strtolower($string)) as $char) {
            if (strpos('aeiou', $char) === false) {
                continue;
            }

            ++$counter;
        }

        return $counter;
    }
}
