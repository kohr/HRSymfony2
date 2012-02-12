<?php

namespace Mr\StartBundle\Entity;

//use FOS\UserBundle\Entity\Group as BaseGroup;
use Sonata\UserBundle\Entity\BaseGroup;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mr\StartBundle\Entity\MrGroup
 *
 * @ORM\Table(name="mr_group")
 * @ORM\Entity
 */
class MrGroup extends BaseGroup
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var Mr\StartBundle\Entity\MrUser
     */
    protected $users;


    public function __construct()
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function __toString()
    {
        return $this->name;
    }

    /**
     * Add users
     *
     * @param Mr\StartBundle\Entity\MrUser $users
     */
    public function addUsers(\Mr\StartBundle\Entity\MrUser $users)
    {
        $this->users[] = $users;
    }

    /**
     * Get users
     *
     * @return Doctrine\Common\Collections\Collection $users
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }
}