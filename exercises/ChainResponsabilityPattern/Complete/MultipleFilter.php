<?php

namespace Exercises\ChainResponsabilityPattern\Complete;

class MultipleFilter extends MainFilterAbstract 
{

    private $multiple = 1;
    
     /**
     * Get the value of multiple
     */ 
    public function getMultiple()
    {
        return $this->multiple;
    }

    /**
     * Set the value of multiple
     *
     * @return  self
     */ 
    public function setMultiple(int $multiple)
    {
        $this->multiple = $multiple;

        return $this;
    }

    /**
     * filter integer 
     *
     * @param [type] $content
     * @return void
     */
    public function doFilter($content = null)
    {
       $contentFilter = filter_var($content, FILTER_VALIDATE_INT);
       
       if($contentFilter !== false)
       {  
           return $content * $this->multiple;
       }
       return $content;
    }
}
