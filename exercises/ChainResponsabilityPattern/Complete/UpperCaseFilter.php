<?php

namespace Exercises\ChainResponsabilityPattern\Complete;

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