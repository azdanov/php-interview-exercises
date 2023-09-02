<?php

declare(strict_types=1);

namespace Tests\Palindrome\Complete;

use Exercises\Palindrome\Complete\PalindromeComplete;
use PHPUnit\Framework\TestCase;

final class PalindromeCompleteTest extends TestCase
{
    public function testFafIsPalindrome(): void
    {
        self::assertTrue(PalindromeComplete::check('faf'));
    }

    public function testFafSpaceIsNotAPalindrome(): void
    {
        self::assertFalse(PalindromeComplete::check('faf '));
    }

    public function testSpaceFafIsNotAPalindrome(): void
    {
        self::assertFalse(PalindromeComplete::check(' faf'));
    }

    public function testHelloIsNotAPalindrome(): void
    {
        self::assertFalse(PalindromeComplete::check('hello'));
    }

    public function test11211IsAPalindrome(): void
    {
        self::assertTrue(PalindromeComplete::check('11211'));
    }

    public function testDogSpaceGodIsNotAPalindrome(): void
    {
        self::assertFalse(PalindromeComplete::check('Dog god'));
    }

    public function testDeifiedIsAPalindrome(): void
    {
        self::assertTrue(PalindromeComplete::check('deified'));
    }

    public function testFafIsPalindrome1(): void
    {
        self::assertTrue(PalindromeComplete::check1('faf'));
    }

    public function testFafSpaceIsNotAPalindrome1(): void
    {
        self::assertFalse(PalindromeComplete::check1('faf '));
    }

    public function testSpaceFafIsNotAPalindrome1(): void
    {
        self::assertFalse(PalindromeComplete::check1(' faf'));
    }

    public function testHelloIsNotAPalindrome1(): void
    {
        self::assertFalse(PalindromeComplete::check1('hello'));
    }

    public function test11211IsAPalindrome1(): void
    {
        self::assertTrue(PalindromeComplete::check1('11211'));
    }

    public function testDogSpaceGodIsNotAPalindrome1(): void
    {
        self::assertFalse(PalindromeComplete::check1('Dog god'));
    }

    public function testDeifiedIsAPalindrome1(): void
    {
        self::assertTrue(PalindromeComplete::check1('deified'));
    }

    public function testFafIsPalindrome2(): void
    {
        self::assertTrue(PalindromeComplete::check2('faf'));
    }

    public function testFafSpaceIsNotAPalindrome2(): void
    {
        self::assertFalse(PalindromeComplete::check2('faf '));
    }

    public function testSpaceFafIsNotAPalindrome2(): void
    {
        self::assertFalse(PalindromeComplete::check2(' faf'));
    }

    public function testHelloIsNotAPalindrome2(): void
    {
        self::assertFalse(PalindromeComplete::check2('hello'));
    }

    public function test11211IsAPalindrome2(): void
    {
        self::assertTrue(PalindromeComplete::check2('11211'));
    }

    public function testDogSpaceGodIsNotAPalindrome2(): void
    {
        self::assertFalse(PalindromeComplete::check2('Dog god'));
    }

    public function testDeifiedIsAPalindrome2(): void
    {
        self::assertTrue(PalindromeComplete::check2('deified'));
    }

    public function testFafIsPalindrome3(): void
    {
        self::assertTrue(PalindromeComplete::check3('faf'));
    }

    public function testFafSpaceIsNotAPalindrome3(): void
    {
        self::assertFalse(PalindromeComplete::check3('faf '));
    }

    public function testSpaceFafIsNotAPalindrome3(): void
    {
        self::assertFalse(PalindromeComplete::check3(' faf'));
    }

    public function testHelloIsNotAPalindrome3(): void
    {
        self::assertFalse(PalindromeComplete::check3('hello'));
    }

    public function test11211IsAPalindrome3(): void
    {
        self::assertTrue(PalindromeComplete::check3('11211'));
    }

    public function testDogSpaceGodIsNotAPalindrome3(): void
    {
        self::assertFalse(PalindromeComplete::check3('Dog god'));
    }

    public function testDeifiedIsAPalindrome3(): void
    {
        self::assertTrue(PalindromeComplete::check3('deified'));
    }

    public function testFafIsPalindrome4(): void
    {
        self::assertTrue(PalindromeComplete::check4('faf'));
    }

    public function testFafSpaceIsNotAPalindrome4(): void
    {
        self::assertFalse(PalindromeComplete::check4('faf '));
    }

    public function testSpaceFafIsNotAPalindrome4(): void
    {
        self::assertFalse(PalindromeComplete::check4(' faf'));
    }

    public function testHelloIsNotAPalindrome4(): void
    {
        self::assertFalse(PalindromeComplete::check4('hello'));
    }

    public function test11211IsAPalindrome4(): void
    {
        self::assertTrue(PalindromeComplete::check4('11211'));
    }

    public function testDogSpaceGodIsNotAPalindrome4(): void
    {
        self::assertFalse(PalindromeComplete::check4('Dog god'));
    }

    public function testDeifiedIsAPalindrome4(): void
    {
        self::assertTrue(PalindromeComplete::check4('deified'));
    }
}
