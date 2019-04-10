<?php

declare(strict_types=1);

namespace Tests\ReverseString;

use Exercises\Vowels\Vowels;
use PHPUnit\Framework\TestCase;
use function method_exists;

final class VowelsTest extends TestCase
{
    public function testHasCount(): void
    {
        $this->assertTrue(
            method_exists(Vowels::class, 'count'),
            'Class does not have static method count'
        );
    }

    public function testCanCount(): void
    {
        self::markTestSkipped();
        self::assertSame(5, Vowels::count('abcdefghijklmnopqrstuvwxyz'));
    }

    public function testCanCountAllUpper(): void
    {
        self::markTestSkipped();
        self::assertSame(5, Vowels::count('AEIOU'));
    }

    public function testCanCountOnly(): void
    {
        self::markTestSkipped();
        self::assertSame(5, Vowels::count('aeiou'));
    }

    public function testCanCountNone(): void
    {
        self::markTestSkipped();
        self::assertSame(0, Vowels::count('bcdfghjkl'));
    }
}
