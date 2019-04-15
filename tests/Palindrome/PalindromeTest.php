<?php

declare(strict_types=1);

namespace Tests\Palindrome;

use Exercises\Palindrome\Palindrome;
use PHPUnit\Framework\TestCase;
use function method_exists;

final class PalindromeTest extends TestCase
{
    public function testHasCheck(): void
    {
        self::markTestSkipped();
        self::assertTrue(
            method_exists(Palindrome::class, 'check'),
            'Class does not have static method check'
        );
    }

    public function testFafIsPalindrome(): void
    {
        self::markTestSkipped();
        self::assertTrue(Palindrome::check('faf'));
    }

    public function testFafSpaceIsNotAPalindrome(): void
    {
        self::markTestSkipped();
        self::assertFalse(Palindrome::check('faf '));
    }

    public function testSpaceFafIsNotAPalindrome(): void
    {
        self::markTestSkipped();
        self::assertFalse(Palindrome::check(' faf'));
    }

    public function testHelloIsNotAPalindrome(): void
    {
        self::markTestSkipped();
        self::assertFalse(Palindrome::check('hello'));
    }

    public function test11211IsAPalindrome(): void
    {
        self::markTestSkipped();
        self::assertTrue(Palindrome::check('11211'));
    }

    public function testDogSpaceGodIsNotAPalindrome(): void
    {
        self::markTestSkipped();
        self::assertFalse(Palindrome::check('Dog god'));
    }

    public function testDeifiedIsAPalindrome(): void
    {
        self::markTestSkipped();
        self::assertTrue(Palindrome::check('deified'));
    }
}
