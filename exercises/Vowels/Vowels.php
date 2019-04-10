<?php

declare(strict_types=1);

namespace Exercises\Vowels;

/**
 * Given a string count its vowels (aeiou).
 *
 * @example Vowels::count('Hello!')  === 2
 * @example Vowels::count('Why?')  === 0
 */
final class Vowels
{
    public static function count(string $string): int
    {
        return (int) $string;
    }
}
