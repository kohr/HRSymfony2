<?php

namespace Mr\StartBundle\Entity;

//use FOS\UserBundle\Entity\User as BaseUser;
use Sonata\UserBundle\Entity\BaseUser;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mr\StartBundle\Entity\MrUser
 *
 * @ORM\Table(name="mr_user")
 * @ORM\Entity
 */
class MrUser extends BaseUser
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string $firstname
     */
    private $firstname;

    /**
     * @var string $lastname
     */
    private $lastname;

    /**
     * @var string $facebookID
     */
    private $facebookID;

    /**
     * @var Mr\StartBundle\Entity\MrUserStep
     */
    private $steps;
    private $resume;

    /**
     * @var Mr\StartBundle\Entity\MrGroup
     */
    protected $groups;

    /**
     * @var Mr\StartBundle\Entity\MrUser
     */
    private $myFriends;

    /**
     * @var Mr\StartBundle\Entity\MrUser
     */
    private $friendsWithMe;

    /**
     * @var Mr\StartBundle\Entity\MrUserStep
     */
    private $acquaintance;

    public function __construct()
    {
        parent::__construct();

        $this->groups = new \Doctrine\Common\Collections\ArrayCollection();
        $this->steps  = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function __toString()
    {
        return $this->getFullname();
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

    /**
     * Set firstname
     *
     * @param string $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * Get firstname
     *
     * @return string $firstname
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * Get lastname
     *
     * @return string $lastname
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Get fullname
     *
     * @return string
     */
    public function getFullname()
    {
        return $this->firstname.' '.$this->lastname;
    }

    /**
     * Set facebookID
     *
     * @param string $facebookID
     */
    public function setFacebookID($facebookID)
    {
        $this->facebookID = $facebookID;
    }

    /**
     * Get facebookID
     *
     * @return string $facebookID
     */
    public function getFacebookID()
    {
        return $this->facebookID;
    }

    /**
     * @param Array
     */
    public function setFBData($fbdata)
    {
        if (isset($fbdata['id'])) {
            $this->setFacebookID($fbdata['id']);
        }
        if (isset($fbdata['first_name'])) {
            $this->setFirstname($fbdata['first_name']);
        }
        if (isset($fbdata['last_name'])) {
            $this->setLastname($fbdata['last_name']);
        }
        if (isset($fbdata['email'])) {
            $this->setEmail($fbdata['email']);
        }
    }

    /**
     * Add groups
     *
     * @param Mr\StartBundle\Entity\MrGroup $groups
     */
    public function addGroups(\Mr\StartBundle\Entity\MrGroup $groups)
    {
        $this->groups[] = $groups;
    }

    /**
     * Get groups
     *
     * @return Doctrine\Common\Collections\Collection $groups
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * Add steps
     *
     * @param Mr\StartBundle\Entity\MrUserStep $steps
     */
    public function addSteps(\Mr\StartBundle\Entity\MrUserStep $steps)
    {
        $this->steps[] = $steps;
    }

    /**
     * Get steps
     *
     * @return Doctrine\Common\Collections\Collection $steps
     */
    public function getSteps()
    {
        return $this->steps;
    }

    /**
     * Get resume
     */
    public function getResume($type=null)
    {
        if ($this->resume == -1) {
          $this->resume = new Mr\StartBundle\Entity\MrResume($this);
        }

        return $this->resume->getSteps($type);
    }

    /**
     * Add myFriends
     *
     * @param Mr\StartBundle\Entity\MrUser $myFriends
     */
    public function addMyFriends(\Mr\StartBundle\Entity\MrUser $myFriends)
    {
        $this->myFriends[] = $myFriends;
    }

    /**
     * Get myFriends
     *
     * @return Doctrine\Common\Collections\Collection $myFriends
     */
    public function getMyFriends()
    {
        return $this->myFriends;
    }

    /**
     * Add friendsWithMe
     *
     * @param Mr\StartBundle\Entity\MrUser $friendsWithMe
     */
    public function addFriendsWithMe(\Mr\StartBundle\Entity\MrUser $friendsWithMe)
    {
        $this->friendsWithMe[] = $friendsWithMe;
    }

    /**
     * Get friendsWithMe
     *
     * @return Doctrine\Common\Collections\Collection $friendsWithMe
     */
    public function getFriendsWithMe()
    {
        return $this->friendsWithMe;
    }

    /**
     * Add acquaintance
     *
     * @param Mr\StartBundle\Entity\MrUserStep $acquaintance
     */
    public function addAcquaintance(\Mr\StartBundle\Entity\MrUserStep $acquaintance)
    {
        $this->acquaintance[] = $acquaintance;
    }

    /**
     * Get acquaintance
     *
     * @return Doctrine\Common\Collections\Collection $acquaintance
     */
    public function getAcquaintance()
    {
        return $this->acquaintance;
    }
}