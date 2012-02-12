<?php

namespace Mr\StartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mr\StartBundle\Entity\MrUserStep
 *
 * @ORM\Table(name="mr_user_step")
 * @ORM\Entity
 */
class MrUserStep
{  
    const TYPE_DIPLOMA = 'MrDiploma';
    const TYPE_JOB     = 'MrJob';

    public static function getTypeList()
    {
        return array(
            self::TYPE_DIPLOMA => 'diploma',
            self::TYPE_JOB     => 'job',
        );
    }



    //auto generated

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var Mr\StartBundle\Entity\MrUser
     */
    private $user;

    /**
     * @var integer $object_id
     */
    private $object_id;

    /**
     * @var string $object_type
     */
    private $object_type;

    /**
     * @var Mr\StartBundle\Entity\MrLocation
     */
    private $location;

    /**
     * @var text $comment
     */
    private $comment;

    /**
     * @var Mr\StartBundle\Entity\MrUser
     */
    private $stepacquaintance;

    /**
     * @var date $start_at
     */
    private $start_at;

    /**
     * @var date $end_at
     */
    private $end_at;

    /**
     * @var date $created_at
     */
    private $created_at;

    /**
     * @var datetime $updated_at
     */
    private $updated_at;


    public function __construct()
    {
        $this->stepacquaintance = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set user
     *
     * @param Mr\StartBundle\Entity\MrUser $user
     */
    public function setUser(\Mr\StartBundle\Entity\MrUser $user)
    {
        $this->user = $user;
    }

    /**
     * Get user
     *
     * @return Mr\StartBundle\Entity\MrUser $user
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set location
     *
     * @param Mr\StartBundle\Entity\MrLocation $location
     */
    public function setLocation(\Mr\StartBundle\Entity\MrLocation $location)
    {
        $this->location = $location;
    }

    /**
     * Get location
     *
     * @return Mr\StartBundle\Entity\MrLocation $location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set date
     *
     * @param date $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * Get date
     *
     * @return date $date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set comment
     *
     * @param text $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * Get comment
     *
     * @return text $comment
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set object_id
     *
     * @param integer $objectId
     */
    public function setObjectId($objectId)
    {
        $this->object_id = $objectId;
    }

    /**
     * Get object_id
     *
     * @return integer $objectId
     */
    public function getObjectId()
    {
        return $this->object_id;
    }

    /**
     * Set object_type
     *
     * @param string $objectType
     */
    public function setObjectType($objectType)
    {
        $this->object_type = $objectType;
    }

    /**
     * Get object_type
     *
     * @return string $objectType
     */
    public function getObjectType()
    {
        return $this->object_type;
    }

    /**
     * Add stepacquaintance
     *
     * @param Mr\StartBundle\Entity\MrUser $stepacquaintance
     */
    public function addStepacquaintance(\Mr\StartBundle\Entity\MrUser $stepacquaintance)
    {
        $this->stepacquaintance[] = $stepacquaintance;
    }

    /**
     * Get stepacquaintance
     *
     * @return Doctrine\Common\Collections\Collection $stepacquaintance
     */
    public function getStepacquaintance()
    {
        return $this->stepacquaintance;
    }

    /**
     * Set created_at
     *
     * @param date $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;
    }

    /**
     * Get created_at
     *
     * @return date $createdAt
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param datetime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;
    }

    /**
     * Get updated_at
     *
     * @return datetime $updatedAt
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set start_at
     *
     * @param date $startAt
     */
    public function setStartAt($startAt)
    {
        $this->start_at = $startAt;
    }

    /**
     * Get start_at
     *
     * @return date $startAt
     */
    public function getStartAt()
    {
        return $this->start_at;
    }

    /**
     * Set end_at
     *
     * @param date $endAt
     */
    public function setEndAt($endAt)
    {
        $this->end_at = $endAt;
    }

    /**
     * Get end_at
     *
     * @return date $endAt
     */
    public function getEndAt()
    {
        return $this->end_at;
    }
    /**
     * @var boolean $liked
     */
    private $liked;

    /**
     * @var boolean $current
     */
    private $current;


    /**
     * Set liked
     *
     * @param boolean $liked
     */
    public function setLiked($liked)
    {
        $this->liked = $liked;
    }

    /**
     * Get liked
     *
     * @return boolean $liked
     */
    public function getLiked()
    {
        return $this->liked;
    }

    /**
     * Set current
     *
     * @param boolean $current
     */
    public function setCurrent($current)
    {
        $this->current = $current;
    }

    /**
     * Get current
     *
     * @return boolean $current
     */
    public function getCurrent()
    {
        return $this->current;
    }
}