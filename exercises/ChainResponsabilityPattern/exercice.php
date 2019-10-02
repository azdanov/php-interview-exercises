<?php
 
namespace Exercises\ChainResponsabilityPattern;
require __DIR__.'/../../vendor/autoload.php';
/**
 * Info Chain of responsibility pattern design permit to classes try response to requests without know capacity of other objects.
 * Exercice we need of filter that permit to :
 *      - if data pass like argument is string then this data return uppercase of this data
 *      - if data pass like argument is int then this data return multiple by 2
 * Example:
 *          echo $mainFilter.filter('kevin schmitt'); KEVIN SCHMITT
 *          echo $mainFilter.filter('360'); 24
 *          echo $mainFilter.filter(12); 24
*/

use  Exercises\ChainResponsabilityPattern\Complete\MultipleFilter;
use  Exercises\ChainResponsabilityPattern\Complete\UpperCaseFilter;

/**
 *  Read after try !!!
 *  Help use abstract method MainFilter and create filter for each filter DoubleFilter  UpperCaseFilter 
 */

$upperCaseFilter = new UpperCaseFilter();
$myFilter = new MultipleFilter();
$myFilter->setSuccessor($upperCaseFilter)
         ->setMultiple(5);

$space = ' ';

echo $myFilter->filter('hello') . $space;
echo $myFilter->filter('24') . $space;
echo $myFilter->filter(360) . $space;
