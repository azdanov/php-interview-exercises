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
        $this->assertTrue(
            method_exists(Palindrome::class, 'check'),
            'Class does not have static method check'
        );
    }

    public function testFafIsPalindrome(): void
    {
        static::markTestSkipped();
        $this->assertTrue(Palindrome::check('faf'));
    }

    public function testFafSpaceIsNotAPalindrome(): void
    {
        static::markTestSkipped();
        $this->assertFalse(Palindrome::check('faf '));
    }

    public function testSpaceFafIsNotAPalindrome(): void
    {
        static::markTestSkipped();
        $this->assertFalse(Palindrome::check(' faf'));
    }

    public function testHelloIsNotAPalindrome(): void
    {
        static::markTestSkipped();
        $this->assertFalse(Palindrome::check('hello'));
    }

    public function test11211IsAPalindrome(): void
    {
        static::markTestSkipped();
        $this->assertTrue(Palindrome::check('11211'));
    }

    public function testDogSpaceGodIsNotAPalindrome(): void
    {
        static::markTestSkipped();
        $this->assertFalse(Palindrome::check('Dog god'));
    }

    public function testDeifiedIsAPalindrome(): void
    {
        static::markTestSkipped();
        $this->assertTrue(Palindrome::check('deified'));
    }
}
