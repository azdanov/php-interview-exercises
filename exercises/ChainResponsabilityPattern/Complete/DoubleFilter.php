<?php

namespace Exercises\ChainResponsabilityPattern\Complete;

class DoubleFilter extends MainFilterAbstract 
{

    public function doFilter($content = null)
    {
       $contentFilter = filter_var($content, FILTER_VALIDATE_INT);
       if($contentFilter !== false)
       {
           return $content * 2;
       }
       return $content;
    }

}