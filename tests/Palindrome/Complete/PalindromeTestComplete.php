<?php

declare(strict_types=1);

namespace tests;

use Exercises\Palindrome\Complete\PalindromeComplete;
use PHPUnit\Framework\TestCase;

final class PalindromeTestComplete extends TestCase
{
    public function testFafIsPalindrome(): void
    {
        $this->assertTrue(PalindromeComplete::check('faf'));
    }

    public function testFafSpaceIsNotAPalindrome(): void
    {
        $this->assertFalse(PalindromeComplete::check('faf '));
    }

    public function testSpaceFafIsNotAPalindrome(): void
    {
        $this->assertFalse(PalindromeComplete::check(' faf'));
    }

    public function testHelloIsNotAPalindrome(): void
    {
        $this->assertFalse(PalindromeComplete::check('hello'));
    }

    public function test11211IsAPalindrome(): void
    {
        $this->assertTrue(PalindromeComplete::check('11211'));
    }

    public function testDogSpaceGodIsNotAPalindrome(): void
    {
        $this->assertFalse(PalindromeComplete::check('Dog god'));
    }

    public function testDeifiedIsAPalindrome(): void
    {
        $this->assertTrue(PalindromeComplete::check('deified'));
    }

    public function testFafIsPalindrome1(): void
    {
        $this->assertTrue(PalindromeComplete::check1('faf'));
    }

    public function testFafSpaceIsNotAPalindrome1(): void
    {
        $this->assertFalse(PalindromeComplete::check1('faf '));
    }

    public function testSpaceFafIsNotAPalindrome1(): void
    {
        $this->assertFalse(PalindromeComplete::check1(' faf'));
    }

    public function testHelloIsNotAPalindrome1(): void
    {
        $this->assertFalse(PalindromeComplete::check1('hello'));
    }

    public function test11211IsAPalindrome1(): void
    {
        $this->assertTrue(PalindromeComplete::check1('11211'));
    }

    public function testDogSpaceGodIsNotAPalindrome1(): void
    {
        $this->assertFalse(PalindromeComplete::check1('Dog god'));
    }

    public function testDeifiedIsAPalindrome1(): void
    {
        $this->assertTrue(PalindromeComplete::check1('deified'));
    }

    public function testFafIsPalindrome2(): void
    {
        $this->assertTrue(PalindromeComplete::check2('faf'));
    }

    public function testFafSpaceIsNotAPalindrome2(): void
    {
        $this->assertFalse(PalindromeComplete::check2('faf '));
    }

    public function testSpaceFafIsNotAPalindrome2(): void
    {
        $this->assertFalse(PalindromeComplete::check2(' faf'));
    }

    public function testHelloIsNotAPalindrome2(): void
    {
        $this->assertFalse(PalindromeComplete::check2('hello'));
    }

    public function test11211IsAPalindrome2(): void
    {
        $this->assertTrue(PalindromeComplete::check2('11211'));
    }

    public function testDogSpaceGodIsNotAPalindrome2(): void
    {
        $this->assertFalse(PalindromeComplete::check2('Dog god'));
    }

    public function testDeifiedIsAPalindrome2(): void
    {
        $this->assertTrue(PalindromeComplete::check2('deified'));
    }
}
