<?php

declare(strict_types=1);

namespace Tests\MaxChar\Complete;

use Exercises\MaxChar\Complete\MaxCharComplete;
use PHPUnit\Framework\TestCase;
use function method_exists;

final class MaxCharCompleteTest extends TestCase
{
    public function testHasGet(): void
    {
        self::assertTrue(
            method_exists(MaxCharComplete::class, 'get'),
            'Class does not have static method get'
        );
    }

    public function testGetSingleMaxChar(): void
    {
        self::assertSame('a', MaxCharComplete::get('a'));
    }

    public function testGetMaxChar(): void
    {
        self::assertSame('q', MaxCharComplete::get('qqweqrty'));
    }

    public function testGetMaxCharWithNumbers(): void
    {
        self::assertSame('2', MaxCharComplete::get('apple 2202'));
    }

    public function testGet1SingleMaxChar(): void
    {
        self::assertSame('a', MaxCharComplete::get1('a'));
    }

    public function testGet1MaxChar(): void
    {
        self::assertSame('q', MaxCharComplete::get1('qqweqrty'));
    }

    public function testGet1MaxCharWithNumbers(): void
    {
        self::assertSame('2', MaxCharComplete::get1('apple 2202'));
    }

    public function testGet2SingleMaxChar(): void
    {
        self::assertSame('a', MaxCharComplete::get2('a'));
    }

    public function testGet2MaxChar(): void
    {
        self::assertSame('q', MaxCharComplete::get2('qqweqrty'));
    }

    public function testGet2MaxCharWithNumbers(): void
    {
        self::assertSame('2', MaxCharComplete::get2('apple 2202'));
    }
}
