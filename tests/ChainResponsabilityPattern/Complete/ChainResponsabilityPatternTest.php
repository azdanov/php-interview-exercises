<?php

declare(strict_types=1);

namespace Tests\ChainResponsabilityPattern\Complete;

use Exercises\ChainResponsabilityPattern\Complete\UpperCaseFilter;
use Exercises\ChainResponsabilityPattern\Complete\MultipleFilter;
use PHPUnit\Framework\TestCase;

/**
 * Permit to test the pattern
 */
final class ChainResponsabilityPatternTest extends TestCase
{
    /**
     * @dataProvider getContent
     * function test pattern with succesor MultipleFilter from UpperCaseFilter
     *
     * @param [type] $content
     * @return void
     */
    public function testPatternSuccessorUppercaseFilter($content) : void
    {
        $content = 24;
        // init
        $upperCaseFilter = new UpperCaseFilter();
        $multipleFilter = new MultipleFilter();

        $multiple = 3;
        $multipleFilter->setMultiple($multiple);

        $upperCaseFilter->setSuccessor($multipleFilter);
     
        $resultContent = $this->getContentExcepted($content, $multiple);
        self::assertSame($resultContent, $upperCaseFilter->Filter($content));
    }

     /**
     * @dataProvider getContent
     * function test pattern with UpperCaseFilter from MultipleFilter
     *
     * @param [type] $content
     * @return void
     */
    public function testPatternSuccessorMultipleFilter($content) : void
    {  
        // init
        $upperCaseFilter = new UpperCaseFilter();
        $multipleFilter = new MultipleFilter();       
        
        $multipleFilter->setSuccessor($upperCaseFilter);
        $resultContent = $this->getContentExcepted($content);

        self::assertSame($resultContent, $upperCaseFilter->Filter($content));
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function getContent()
    {
        return [
            ['test'],
            ['Test'],
            [24],
            ['45hello#'],
            [0],
        ];
    }

    /**
     * get excepted result return by pattern filters
     *
     * @param [type] $content
     * @return void
     */
    private function getContentExcepted($content, int $multiple = 1)
    {
        
        return (filter_var($content, FILTER_VALIDATE_INT) || $content === 0) ? ($multiple * $content) : strtoupper($content);
    }

}
