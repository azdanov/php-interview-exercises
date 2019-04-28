<?php

declare(strict_types=1);

namespace Tests\ReverseString;

use Exercises\Vowels\Complete\VowelsComplete;
use PHPUnit\Framework\TestCase;

final class VowelsCompleteTest extends TestCase
{
    public function testCanCount1(): void
    {
        self::assertSame(5, VowelsComplete::count1('abcdefghijklmnopqrstuvwxyz'));
    }

    public function testCanCountAllUpper1(): void
    {
        self::assertSame(5, VowelsComplete::count1('AEIOU'));
    }

    public function testCanCountOnly1(): void
    {
        self::assertSame(5, VowelsComplete::count1('aeiou'));
    }

    public function testCanCountNone1(): void
    {
        self::assertSame(0, VowelsComplete::count1('bcdfghjkl'));
    }

    public function testCanCount2(): void
    {
        self::assertSame(5, VowelsComplete::count2('abcdefghijklmnopqrstuvwxyz'));
    }

    public function testCanCountAllUpper2(): void
    {
        self::assertSame(5, VowelsComplete::count2('AEIOU'));
    }

    public function testCanCountOnly2(): void
    {
        self::assertSame(5, VowelsComplete::count2('aeiou'));
    }

    public function testCanCountNone2(): void
    {
        self::assertSame(0, VowelsComplete::count2('bcdfghjkl'));
    }

    public function testCanCount3(): void
    {
        self::assertSame(5, VowelsComplete::count3('abcdefghijklmnopqrstuvwxyz'));
    }

    public function testCanCountAllUpper3(): void
    {
        self::assertSame(5, VowelsComplete::count3('AEIOU'));
    }

    public function testCanCountOnly3(): void
    {
        self::assertSame(5, VowelsComplete::count3('aeiou'));
    }

    public function testCanCountNone3(): void
    {
        self::assertSame(0, VowelsComplete::count3('bcdfghjkl'));
    }
}
