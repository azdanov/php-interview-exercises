<?php

declare(strict_types=1);

namespace Exercises\Palindrome;

/**
 * Given a string, verify that it is a palindrome.
 * Palindrome is a string that equal itself when reversed.
 * Non-alpha chars must be also included.
 *
 * @example Palindrome::check('asddsa')  === true
 * @example Palindrome::check('asdd')  === false
 */
final class Palindrome
{
    public static function check(string $string): bool
    {
        return (bool) $string;
    }
}
