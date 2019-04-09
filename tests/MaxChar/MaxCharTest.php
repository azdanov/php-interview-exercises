<?php

declare(strict_types=1);

namespace Tests\MaxChar;

use Exercises\MaxChar\MaxChar;
use PHPUnit\Framework\TestCase;
use function method_exists;

final class MaxCharTest extends TestCase
{
    public function testHasGet(): void
    {
        $this->assertTrue(
            method_exists(MaxChar::class, 'get'),
            'Class does not have static method get'
        );
    }

    public function testGetSingleMaxChar(): void
    {
        static::markTestSkipped();
        $this->assertSame('a', MaxChar::get('a'));
    }

    public function testGetMaxChar(): void
    {
        static::markTestSkipped();
        $this->assertSame('q', MaxChar::get('qqweqrty'));
    }

    public function testGetMaxCharWithNumbers(): void
    {
        static::markTestSkipped();
        $this->assertSame('2', MaxChar::get('apple 2202'));
    }
}
