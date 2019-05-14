<?php

declare(strict_types=1);

namespace Tests\Ladder;

use Exercises\Ladder\Ladder;
use PHPUnit\Framework\TestCase;
use function method_exists;

final class LadderTest extends TestCase
{
    public function testHasPrint(): void
    {
        self::markTestSkipped();
        self::assertTrue(
            method_exists(Ladder::class, 'print'),
            'Class does not have static method print'
        );
    }

    public function testPrintLadder(): void
    {
        self::markTestSkipped();
        $this->expectOutputString('#');
        Ladder::print(1);
    }

    public function testPrintLadder1(): void
    {
        self::markTestSkipped();
        $this->expectOutputString('# ##');
        Ladder::print(2);
    }

    public function testPrintLadder2(): void
    {
        self::markTestSkipped();
        $this->expectOutputString('#    ##   ###  #### #####');
        Ladder::print(5);
    }
}
