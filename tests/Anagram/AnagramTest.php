<?php

declare(strict_types=1);

namespace Tests\Anagram;

use Exercises\Anagram\Anagram;
use PHPUnit\Framework\TestCase;
use function method_exists;

final class AnagramTest extends TestCase
{
    public function testHasCheck(): void
    {
        self::markTestSkipped();
        self::assertTrue(
            method_exists(Anagram::class, 'check'),
            'Class does not have static method check'
        );
    }

    public function testCanCheckString1(): void
    {
        self::markTestSkipped();
        self::assertTrue(Anagram::check('rail safety', 'fairy tales'));
    }

    public function testCanCheckString2(): void
    {
        self::markTestSkipped();
        self::assertTrue(Anagram::check('Elvis', 'lives'));
    }

    public function testCanCheckString3(): void
    {
        self::markTestSkipped();
        self::assertFalse(Anagram::check('roast beef', 'goat roast'));
    }

    public function testCanCheckStringPunctuation(): void
    {
        self::markTestSkipped();
        self::assertTrue(Anagram::check('Elv.is', 'lives'));
    }

    public function testCanCheckStringWhitespace(): void
    {
        self::markTestSkipped();
        self::assertTrue(Anagram::check('El vis', 'lives'));
    }
}
