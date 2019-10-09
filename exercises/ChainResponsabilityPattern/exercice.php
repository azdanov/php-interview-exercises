<?php
 

/**
 * Info Chain of responsibility pattern design permit objects to try response to requests without know capacity of other objects to respond.
 * Exercice we need filters that permit to :
 *      - if data pass in filter is string then this data return like uppercase 
 *      - if data pass in filter is (int or string contain int) then return multiple of this data 
 * Help: use Abstract Method permit to filter if you have to use successor if exist. Use abstract method doFilter for real implementation of filter (multiple and uppercase)
 * Try before read solution ;)
 * Example:
 *          $upperCaseFilter = new UpperCaseFilter();
 *          $multipleFilter = new MultipleFilter();
 *          $multipleFilter->setMultiple(3);
 *          $uppercaseFilter->setSuccessor($uppercaseFilter);
 * 
 *          echo $mainFilter.filter('kevin schmitt'); KEVIN SCHMITT
 *          echo $mainFilter.filter('360'); 24
 *          echo $mainFilter.filter(12); 24
*/






