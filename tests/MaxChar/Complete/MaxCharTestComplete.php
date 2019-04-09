<?php

declare(strict_types=1);

namespace Tests\MaxChar\Complete;

use Exercises\MaxChar\Complete\MaxCharComplete;
use PHPUnit\Framework\TestCase;
use function method_exists;

final class MaxCharTestComplete extends TestCase
{
    public function testHasGet(): void
    {
        $this->assertTrue(
            method_exists(MaxCharComplete::class, 'get'),
            'Class does not have static method get'
        );
    }

    public function testGetSingleMaxChar(): void
    {
        $this->assertSame('a', MaxCharComplete::get('a'));
    }

    public function testGetMaxChar(): void
    {
        $this->assertSame('q', MaxCharComplete::get('qqweqrty'));
    }

    public function testGetMaxCharWithNumbers(): void
    {
        $this->assertSame('2', MaxCharComplete::get('apple 2202'));
    }
}
