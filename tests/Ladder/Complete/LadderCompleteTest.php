<?php

declare(strict_types=1);

namespace Tests\Ladder\Complete;

use Exercises\Ladder\Complete\LadderComplete;
use PHPUnit\Framework\TestCase;
use const PHP_EOL;
use function sprintf;

final class LadderCompleteTest extends TestCase
{
    /** @var string */
    private $expectedString1;
    /** @var string */
    private $expectedString2;
    /** @var string */
    private $expectedString5;

    /**
     * @param null    $name
     * @param mixed[] $data
     */
    public function __construct($name = null, array $data = [], string $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->expectedString1 = sprintf('#%s', PHP_EOL);
        $this->expectedString2 = sprintf('# %s##%s', PHP_EOL, PHP_EOL);
        $this->expectedString5 = sprintf(
            '#    %s##   %s###  %s#### %s#####%s',
            PHP_EOL,
            PHP_EOL,
            PHP_EOL,
            PHP_EOL,
            PHP_EOL
        );
    }

    public function testPrint11(): void
    {
        $this->expectOutputString($this->expectedString1);
        LadderComplete::print1(1);
    }

    public function testPrint12(): void
    {
        $this->expectOutputString($this->expectedString2);
        LadderComplete::print1(2);
    }

    public function testPrint15(): void
    {
        $this->expectOutputString($this->expectedString5);
        LadderComplete::print1(5);
    }

    public function testPrint21(): void
    {
        $this->expectOutputString($this->expectedString1);
        LadderComplete::print2(1);
    }

    public function testPrint22(): void
    {
        $this->expectOutputString($this->expectedString2);
        LadderComplete::print2(2);
    }

    public function testPrint25(): void
    {
        $this->expectOutputString($this->expectedString5);
        LadderComplete::print2(5);
    }

    public function testPrint31(): void
    {
        $this->expectOutputString($this->expectedString1);
        LadderComplete::print3(1);
    }

    public function testPrint32(): void
    {
        $this->expectOutputString($this->expectedString2);
        LadderComplete::print3(2);
    }

    public function testPrint35(): void
    {
        $this->expectOutputString($this->expectedString5);
        LadderComplete::print3(5);
    }
}
