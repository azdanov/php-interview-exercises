<?php

namespace Exercises\ChainResponsabilityPattern\Complete;

abstract class MainFilterAbstract 
{
  /**
   * @var MainFilterAbstract|null
   */
  protected $_successor = null;
  
  /**
   * getter $_successor
   *
   * @return MainFilterAbstract
   */
  public function getSuccessor() : MainFilterAbstract
  {
     return $this->_successor;
  }
  
  /**
   * setter $_successor
   *
   * @param MainFilterAbstract $succesor
   * @return void
   */
  public function setSuccessor(MainFilterAbstract $succesor = null)
  {
     $this->_successor = $succesor;
     return $this;
  }

  /**
   * filter $content 
   *
   * @param [string|int] $content
   * @return string|int
   */
  public function filter($content)
  {
    $result = $this->doFilter($content);

    if ($this->_successor) { 
        $result = $this->_successor->filter($result);
    }

    return $result;
  }

  abstract public function doFilter();
}