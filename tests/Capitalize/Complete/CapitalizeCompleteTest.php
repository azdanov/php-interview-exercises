<?php

declare(strict_types=1);

namespace Tests\Capitalize\Complete;

use Exercises\Capitalize\Complete\CapitalizeComplete;
use PHPUnit\Framework\TestCase;

final class CapitalizeCompleteTest extends TestCase
{
    public function testCapitalizeFirst1(): void
    {
        self::assertSame('Hello There', CapitalizeComplete::get1('hello there'));
    }

    public function testCapitalizeFirst2(): void
    {
        self::assertSame(
            "Hey, So It's Working!",
            CapitalizeComplete::get1("hey, so it's working!")
        );
    }

    public function testCapitalizeSecond1(): void
    {
        self::assertSame('Hello There', CapitalizeComplete::get2('hello there'));
    }

    public function testCapitalizeSecond2(): void
    {
        self::assertSame(
            "Hey, So It's Working!",
            CapitalizeComplete::get2("hey, so it's working!")
        );
    }
}
