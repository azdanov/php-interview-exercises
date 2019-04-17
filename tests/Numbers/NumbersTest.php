<?php

declare(strict_types=1);

namespace Tests\Numbers;

use Exercises\Numbers\Numbers;
use PHPUnit\Framework\TestCase;
use function method_exists;

final class NumbersTest extends TestCase
{
    public function testHasMethods(): void
    {
        self::markTestSkipped();
        self::assertTrue(
            method_exists(Numbers::class, 'add'),
            'Class does not have static method add'
        );
    }

    public function testAdd(): void
    {
        self::markTestSkipped();
        self::assertSame(6, Numbers::add(3));
    }
}
