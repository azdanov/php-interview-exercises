<?php

declare(strict_types=1);

namespace tests;

use exercises\ReverseString\ReverseString;
use PHPUnit\Framework\TestCase;

final class ReverseStringTest extends TestCase
{
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
