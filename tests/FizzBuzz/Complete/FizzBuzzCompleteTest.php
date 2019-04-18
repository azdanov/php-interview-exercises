<?php

declare(strict_types=1);

namespace Tests\MaxChar\Complete;

use Exercises\FizzBuzz\Complete\FizzBuzzComplete;
use PHPUnit\Framework\TestCase;

final class FizzBuzzCompleteTest extends TestCase
{
    public function testPrintFizzBuzz(): void
    {
        $this->expectOutputString('12fizz4buzzfizz78fizzbuzz11fizz1314fizzbuzz');
        FizzBuzzComplete::print(15);
    }
}
