<?php

namespace Exercises\ChainResponsabilityPattern\Complete;

use function is_string;
use function strtoupper;

class UpperCaseFilter extends MainFilterAbstract
{

   public function doFilter($content = null)
   {
       if(is_string($content))
       {
           return strtoupper($content);
       }
       return $content;
   }
}