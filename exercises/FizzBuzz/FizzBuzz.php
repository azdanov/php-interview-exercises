<?php

declare(strict_types=1);

namespace Exercises\FizzBuzz;

/**
 * Given a function that prints echoes numbers 1 to n.
 * When n is divisible by 3 echo 'fizz'.
 * When n is divisible by 5 echo 'buzz.
 * When n is divisible by both 3 and 5 echo 'fizzbuzz'.
 *
 * @example FizzBuzz::print('5') -> 1, 2, 'fizz', 4, 'buzz'
 */
final class FizzBuzz
{
    public static function print(int $limit): void
    {
        echo $limit;
    }
}
