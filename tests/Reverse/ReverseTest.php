<?php

declare(strict_types=1);

namespace Tests\Reverse;

use Exercises\Reverse\Reverse;
use PHPUnit\Framework\TestCase;
use function method_exists;

final class ReverseTest extends TestCase
{
    public function testHasMethods(): void
    {
        self::markTestSkipped();
        self::assertTrue(
            method_exists(Reverse::class, 'int'),
            'Class does not have static method int'
        );
        self::assertTrue(
            method_exists(Reverse::class, 'string'),
            'Class does not have static method string'
        );
    }

    public function testCanReverseInt(): void
    {
        self::markTestSkipped();
        self::assertSame(21, Reverse::int(12));
    }

    public function testCanReverseIntWithThreeDigits(): void
    {
        self::markTestSkipped();
        self::assertSame(321, Reverse::int(123));
    }

    public function testCanReverseIntZeros(): void
    {
        self::markTestSkipped();
        self::assertSame(3, Reverse::int(300));
    }

    public function testCanReverseNegativeInt(): void
    {
        self::markTestSkipped();
        self::assertSame(-21, Reverse::int(-12));
    }

    public function testCanReverseNegativeIntWithZeros(): void
    {
        self::markTestSkipped();
        self::assertSame(-21, Reverse::int(-120));
    }

    public function testCanReverseString(): void
    {
        self::markTestSkipped();
        self::assertSame('ytrewq', Reverse::string('qwerty'));
    }

    public function testCanReverseStringWithWhitespace(): void
    {
        self::markTestSkipped();
        self::assertSame('ytr ewq ', Reverse::string(' qwe rty'));
    }
}
