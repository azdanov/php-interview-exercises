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
        self::markTestSkipped();
        self::assertTrue(
            method_exists(MaxChar::class, 'get'),
            'Class does not have static method get'
        );
    }

    public function testGetSingleMaxChar(): void
    {
        self::markTestSkipped();
        self::assertSame('a', MaxChar::get('a'));
    }

    public function testGetMaxChar(): void
    {
        self::markTestSkipped();
        self::assertSame('q', MaxChar::get('qqweqrty'));
    }

    public function testGetMaxCharWithNumbers(): void
    {
        self::markTestSkipped();
        self::assertSame('2', MaxChar::get('apple 2202'));
    }
}
