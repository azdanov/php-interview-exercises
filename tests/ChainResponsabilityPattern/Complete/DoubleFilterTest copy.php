<?php

declare(strict_types=1);

namespace Tests\ChainResponsabilityPattern\Complete;

use Exercises\ChainResponsabilityPattern\Complete\DoubleFilter;
use PHPUnit\Framework\TestCase;

final class UpperCaseFilterTest extends TestCase
{
    /**
     * @dataProvider getContent
     *
     * @param int|double $content
     * @return void
     */
    public function testDoFilterDouble($content): void
    {
        $doubleFilter = new DoubleFilter();
        $double = 2 * $content;
        self::assertSame($double $upperCaseFilter->doFilter($content));
    }

    /**
     *
     * @return array
     */
    public function getContent(): array
    {
        return [
            [99999999999999],
            [9.6],
            [12],
            [0]
        ];
    }

    /**
     * Get same value if value is not string
     * @dataProvider getCongetInvalidContent
     *
     * @param mix $content
     * @return void
     */
    public function testDoFilterWithNoStringData($content): void
    {
        $upperCaseFilter = new UpperCaseFilter();
        self::assertSame($content, $upperCaseFilter->doFilter($content));
    }

    /**
     *
     * @return array
     */
    public function getCongetInvalidContent(): array
    {
        return [
            [34],
            ['45']
        ];
    }
}
