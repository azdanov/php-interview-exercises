<?php

declare(strict_types=1);

namespace Tests\MaxChar;

use Exercises\Ladder\Complete\LadderComplete;
use PHPUnit\Framework\TestCase;

final class LadderTestComplete extends TestCase
{
    public function testPrintLadder(): void
    {
        $this->expectOutputString('#');
        LadderComplete::print1(1);
    }

    public function testPrintLadder1(): void
    {
        $this->expectOutputString('# ##');
        LadderComplete::print1(2);
    }

    public function testPrintLadder2(): void
    {
        $this->expectOutputString('#    ##   ###  #### #####');
        LadderComplete::print1(5);
    }

    public function testPrintLadderRecursive(): void
    {
        $this->expectOutputString('#');
        LadderComplete::print2(1);
    }

    public function testPrintLadderRecursive1(): void
    {
        $this->expectOutputString('# ##');
        LadderComplete::print2(2);
    }

    public function testPrintLadderRecursive2(): void
    {
        $this->expectOutputString('#    ##   ###  #### #####');
        LadderComplete::print2(5);
    }
}
