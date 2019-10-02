<?php

declare(strict_types=1);

namespace Tests\ChainResponsabilityPattern\Complete;

use Exercises\ChainResponsabilityPattern\Complete\UpperCaseFilter;
use PHPUnit\Framework\TestCase;
use function method_exists;

final class UpperCaseFilterTest extends TestCase
{
    /**
     * @dataProvider getContentString
     *
     * @param string $content
     * @return void
     */
    public function testDoFilterUpperCaseStringWords(string $content): void
    {
        $upperCaseFilter = new UpperCaseFilter();
        self::assertSame(strtoupper($content), $upperCaseFilter->doFilter($content));
    }

    /**
     *
     * @return array
     */
    public function getContentString(): array
    {
        return [
            ['lowercase'],
            ['MixUpperAndLower'],
            ['string#/'],
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
