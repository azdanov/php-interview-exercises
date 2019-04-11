<?php

declare(strict_types=1);

namespace Tests\MaxChar;

use Exercises\Capitalize\Capitalize;
use PHPUnit\Framework\TestCase;
use function method_exists;

final class CapitalizeTest extends TestCase
{
    public function testHasGet(): void
    {
        self::assertTrue(
            method_exists(Capitalize::class, 'get'),
            'Class does not have static method get'
        );
    }

    public function testCapitalize1(): void
    {
        self::markTestSkipped();
        self::assertSame('Hello There', Capitalize::get('hello there'));
    }

    public function testCapitalize2(): void
    {
        self::markTestSkipped();
        self::assertSame(
            "Hey, So It's Working!",
            Capitalize::get("hey, so it's working!")
        );
    }
}
