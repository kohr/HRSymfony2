<?php

namespace Mr\GraphBundle\Entity;

use Mr\StartBundle\Entity\MrMap;
use Mr\StartBundle\Entity\MrUserStep;

/**
 * Mr\StartBundle\Entity\MrGraphBuilder
 *
 * besoin de cette classe ?
 */
class MrGraphBuilder
{
  public static $assert = array('direction'     => array('prev', 'next'),
                                'datas_for_map' => array('MrArea', 'MrDiplomaLevel', 'MrDiplomaType'));

  protected $node       = null;
  protected $direction  = null;
  protected $base       = null;
  protected $map        = null;


  /**
  *
  * @param  <mixed>  (MrDiploma, MrJob)
  * @param  <string> direction (next or prev)
  */
  public function __construct($node, $direction) {
    
    assert(in_array($direction, self::$assert['directions']));
    assert(is_object($node));
    
    $this->node      = $node;
    $this->direction = $direction;
    $this->base      = $this->direction == 'next' ? 'from' : 'to';

    //find rules for this node
    $this->initMap();
  }

  /**
  * we get the data from the node
  *
  * then we look for rules with thoses datas, this rules are the map
  *
  * @return <array> mixed (MrDiploma, MrJob)
  */
  public function initMap() {

    $em = $this->getDoctrine()->getEntityManager();
    
    $datas_for_map = $this->node->fillDatasForMap(self::$assert['datas_for_map']));

    $this->map = array();
    foreach ($datas_for_map as $model => $ids) {
      $this->map[$model] = $em->getRepository('MrGraphBundle:MrMap')->findBy(array($this->base.'_type' => $model, 
                                                                                   $this->base.'_id'   => $ids);
    }
  }

  /**
  * we search through the related rules
  *
  * then we look for diploma and jobs separately
  *
  * @return <array> mixed (MrDiploma, MrJob)
  */
  public function searchInMap() {

    //build criteria with map
    $diplomas = $this->searchInMapForDiplomas();
    
    //build criteria for job
    $jobs = $this->searchInMapForJobs();
    
    return array_merge($diplomas, $jobs);
  }

  /**
  * we look for diplomas
  *
  * @return <array> MrDiploma
  */
  public function searchInMapForDiplomas() {
    //area, level, type, diploma, job
    
    //TODO : build SQL criteria
    
  }
  
  /**
  * we look for jobs
  *
  * @return <array> MrJob
  */
  public function searchInMapForJobs() {
    
    //TODO : build SQL criteria
  }

  /**
  * we take the user's steps and we look in on or another direction
  *
  * we want the only steps that lead to another in the required direction
  *
  * @return <array> mixed (MrDiploma, MrJob)
  */
  public function searchInUsersSteps() {

    $roads = array();
    foreach ($this->node->getUserSteps($this->direction) as $user_step) {
      $roads[] = $user_step->{$this->direction}();
    }
    
    return $roads;
  }

  /**
  * we search for roads after the given one
  *
  * we look both in the map rules and in the user's steps
  *
  * @param  <mixed>  (MrDiploma, MrJob)
  * @param  <string> direction (next or prev)
  *
  * @return <array> mixed (MrDiploma, MrJob)
  */
  public static function search($node, $direction) {
    
    $builder = new MrGraphBuilder($node, $direction);
    
    $nodes_map  = $builder->searchInMap();
    $nodes_step = $builder->searchInUsersSteps();

    return array_merge($nodes_map, $nodes_step);
  }


}