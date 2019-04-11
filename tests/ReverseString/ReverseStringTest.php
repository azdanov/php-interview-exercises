<?php

declare(strict_types=1);

namespace Tests\ReverseString;

use Exercises\ReverseString\ReverseString;
use PHPUnit\Framework\TestCase;
use function method_exists;

final class ReverseStringTest extends TestCase
{
    public function testHasReverse(): void
    {
        $this->assertTrue(
            method_exists(ReverseString::class, 'reverse'),
            'Class does not have static method reverse'
        );
    }

    public function testCanReverseString(): void
    {
        static::markTestSkipped();
        $this->assertSame('ytrewq', ReverseString::reverse('qwerty'));
    }

    public function testCanReverseStringWithWhitespace(): void
    {
        static::markTestSkipped();
        $this->assertSame('ytr ewq ', ReverseString::reverse(' qwe rty'));
    }
}
