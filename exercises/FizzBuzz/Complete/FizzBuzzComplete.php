<?php

declare(strict_types=1);

namespace Exercises\FizzBuzz\Complete;

final class FizzBuzzComplete
{
    public static function print(int $limit): void
    {
        for ($i = 1; $i <= $limit; ++$i) {
            $word = '';

            if ($i % 3 === 0) {
                $word .= 'fizz';
            }
            if ($i % 5 === 0) {
                $word .= 'buzz';
            }

            echo $word ?: $i;
        }
    }
}
