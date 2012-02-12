<?php

namespace Mr\StartBundle\Entity;

/**
 * Mr\StartBundle\Entity\MrRoads
 *
 */
class MrRoads
{
    /**
     * @var array $resume
     */
    private $resume;


    public function __construct(Mr\StartBundle\Entity\MrResume $resume)
    {
      //TODO : find possibilities
      $this->resume = $resume;
    }

    public function fromLastStep($type=null)
    {
      //TODO : find possibilities fom last step
      //$this->resume->getLast($type)
    }

    public static function fromStep(\Mr\StartBundle\Entity\MrUserStep $step)
    {
      //TODO : find possibilities fom last step
      //$this->resume->getLast($type)
    }


}