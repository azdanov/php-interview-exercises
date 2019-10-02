<?php

declare(strict_types=1);

namespace Tests\ChainResponsabilityPattern\Complete;

use Exercises\ChainResponsabilityPattern\Complete\MultipleFilter;
use PHPUnit\Framework\TestCase;

final class MultipleFilterTest extends TestCase
{
    /**
     * Multiple param by param given
     * @dataProvider getContentInteger
     *
     * @param int|double $content
     * @return void
     */
    public function testDoFilterMultiple($content, $multiple): void
    {
        $multipleFilter = new MultipleFilter();
        $multipleFilter->setMultiple($multiple);

        self::assertSame($content * $multiple, $multipleFilter->doFilter($content));
    }

    /**
     *
     * @return array
     */
    public function getContentInteger(): array
    {
        return [
            [99999999999999, 2],
            [12, 2],
            [0, 0],
            ['0', 0],
        ];
    }

     /**
     * @dataProvider getContentNoInteger
     * 
     * @param int|double $content
     * @return void
     */
    public function testDoFilterWithNoInteger($content, int $multiple): void
    {
        $multipleFilter = new MultipleFilter();
        $multipleFilter->setMultiple($multiple);

        self::assertSame($content, $multipleFilter->doFilter($content));
    }

    /**
     *
     * @return array
     */
    public function getContentNoInteger(): array
    {
        return [
            ['Test', 4],
            [4.5, 0],
        ];
    }
}
