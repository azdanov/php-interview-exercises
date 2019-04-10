<?php

declare(strict_types=1);

namespace Exercises\Anagram;

/**
 * Check to see if two provided strings are anagrams.
 * Two strings are anagrams if same characters are used in both.
 * Only characters, not spaces or punctuation should be counted.
 * Should be case insensitive.
 *
 * @example Anagram::check('rail safety', 'fairy tales') === true
 * @example Anagram::check('roast beef', 'goat roast') === false
 * @example Anagram::check('Elvis, 'lives') === true
 */
final class Anagram
{
    public static function check(string $first, string $second): bool
    {
        return $first && $second;
    }
}
