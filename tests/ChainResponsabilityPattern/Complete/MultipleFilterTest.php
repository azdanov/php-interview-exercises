<?php

declare(strict_types=1);

namespace Tests\ChainResponsabilityPattern\Complete;

use Exercises\ChainResponsabilityPattern\Complete\MultipleFilter;
use Exercises\ChainResponsabilityPattern\Complete\MainFilterAbstract;

use PHPUnit\Framework\TestCase;

final class MultipleFilterTest extends TestCase
{
    /**
     * Multiple param by param given
     * @dataProvider getContentNumbers
     *
     * @param int|double $content
     * @return void
     */
    public function testDoFilterNumber($content, $multiple): void
    {
        $multipleFilter = new MultipleFilter();
        $multipleFilter->setMultiple($multiple);

        self::assertSame($content * $multiple, $multipleFilter->Filter($content));
    }

    /**
     *
     * @return array
     */
    public function getContentNumbers(): array
    {
        return [
            [99999999999999, 2],
            [12, 2],
            [0, 0],
            ['0', 0],
        ];
    }

     /**
     * @dataProvider getContentNoNumbers
     * 
     * @param int|double $content
     * @return void
     */
    public function testDoFilterWithNoNumber($content, int $multiple): void
    {
        $multipleFilter = new MultipleFilter();
        $multipleFilter->setMultiple($multiple);

        self::assertSame($content, $multipleFilter->Filter($content));
    }

    /**
     *
     * @return array
     */
    public function getContentNoNumbers(): array
    {
        return [
            ['Test', 4],
            [4.5, 0],
        ];
    }

}
