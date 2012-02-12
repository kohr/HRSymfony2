<?php

namespace Mr\StartBundle\Entity;

/**
 * Mr\StartBundle\Entity\MrResume
 *
 */
class MrResume
{

    /**
     * @var array $resume
     */
    private $resume;


    public function __construct(Mr\StartBundle\Entity\MrUser $user)
    {
      $repository = $this->getDoctrine()->getRepository('MrStartBundle:MrUserStep');
      $steps = $repository->findByMrUser($user);
      
      $this->resume = array();
      foreach ($steps as $step) {
        $this->resume[$step->getObjectType()][] = $step;
      }
      
    }

    /**
    * @var string $type
    */
    public function getSteps($type=null)
    {
      if ($type) {
        return isset($this->resume[$type]) ? $this->resume[$type] : null;
      } else {
        return $this->resume;
      }
    }

    /**
    * @var string $type
    */
    public function getLast($type=null)
    {
      if ($type) {
        return isset($this->resume[$type]) ? end($this->resume[$type]) : null;
      } else {
        return end($this->resume);
      }
    }

    /**
    * @var string $type
    */
    public function getFirst($type=null)
    {
      if ($type) {
        return isset($this->resume[$type]) ? array_pop($this->resume[$type]) : null;
      } else {
        return array_pop($this->resume);
      }
    }

    /**
    * @var string $type
    */
    public function getShared($type=null)
    {
      //TODO : retrieve steps shared with friends
    }
    
    
    /**
    * @var string $type
    */
    public function getJuniors($type=null)
    {
      //TODO : retrieve users that i can advice
    }

    /**
    * @var string $type
    */
    public function getSeniors($type=null)
    {
      //TODO : retrieve users that can advice me
    }
}