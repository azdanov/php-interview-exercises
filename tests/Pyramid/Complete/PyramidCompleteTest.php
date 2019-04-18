<?php

declare(strict_types=1);

namespace Tests\MaxChar;

use Exercises\Pyramid\Complete\PyramidComplete;
use PHPUnit\Framework\TestCase;

final class PyramidCompleteTest extends TestCase
{
    public function testPrintLadder(): void
    {
        $this->expectOutputString('#');
        PyramidComplete::print1(1);
    }

    public function testPrintLadder1(): void
    {
        $this->expectOutputString(' # ###');
        PyramidComplete::print1(2);
    }

    public function testPrintLadder2(): void
    {
        $this->expectOutputString('    #       ###     #####   ####### #########');
        PyramidComplete::print1(5);
    }

    public function testPrintLadderRecursive(): void
    {
        $this->expectOutputString('#');
        PyramidComplete::print2(1);
    }

    public function testPrintLadderRecursive1(): void
    {
        $this->expectOutputString(' # ###');
        PyramidComplete::print2(2);
    }

    public function testPrintLadderRecursive2(): void
    {
        $this->expectOutputString('    #       ###     #####   ####### #########');
        PyramidComplete::print2(5);
    }
}
