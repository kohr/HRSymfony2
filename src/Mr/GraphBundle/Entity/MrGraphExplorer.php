<?php

namespace Mr\GraphBundle\Entity;

use Mr\StartBundle\Entity\MrGraph;

/**
 * Mr\StartBundle\Entity\MrGraphExplorer
 *
 * besoin de cette classe ?
 */
class MrGraphExplorer
{
  protected $node       = null;
  protected $direction  = null;
  protected $base       = null;
  
  /**
  *
  * @param  <mixed>  (MrDiploma, MrJob)
  * @param  <string> direction (next or prev)
  */
  public function __construct($node, $direction) {
    
    assert(in_array($direction, MrGraphBuilder::$assert['directions']));
    assert(is_object($node));
    
    $this->node      = $node;
    $this->direction = $direction;
    $this->base      = $this->direction == 'next' ? 'from' : 'to';

  }

  /**
  * searchInGraph : build elaborated array with apropriate keys
  *
  *
  */
  public function explore() {
    //select from MrGraph 

    // -------
    //searchInGraph : build elaborated array with apropriate keys
    //['MrDiploma']['MrArea']['MrDiplomaLevel']['MrDiplomaType']['MrDiploma']
    //['MrJobs']['MrArea']['MrDiplomaLevel']['MrDiploma']

    return self::sort($nodes);
  }


  public static function sort($nodes) {

    return $nodes;
  }
}