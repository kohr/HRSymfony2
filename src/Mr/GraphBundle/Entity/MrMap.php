<?php

namespace Mr\GraphBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mr\GraphBundle\Entity\MrMap
 *
 * @ORM\Table(name="mr_map")
 * @ORM\Entity
 */
class MrMap
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $prev_type
     */
    private $prev_type;

    /**
     * @var integer $prev_id
     */
    private $prev_id;

    /**
     * @var string $next_type
     */
    private $next_type;

    /**
     * @var integer $next_id
     */
    private $next_id;

    /**
     * @var integer $distance
     */
    private $distance;

    /**
     * @var integer $count_users
     */
    private $count_users;


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
     * Set prev_type
     *
     * @param string $prevType
     */
    public function setPrevType($prevType)
    {
        $this->prev_type = $prevType;
    }

    /**
     * Get prev_type
     *
     * @return string $prevType
     */
    public function getPrevType()
    {
        return $this->prev_type;
    }

    /**
     * Set prev_id
     *
     * @param integer $prevId
     */
    public function setPrevId($prevId)
    {
        $this->prev_id = $prevId;
    }

    /**
     * Get prev_id
     *
     * @return integer $prevId
     */
    public function getPrevId()
    {
        return $this->prev_id;
    }

    /**
     * Set next_type
     *
     * @param string $nextType
     */
    public function setNextType($nextType)
    {
        $this->next_type = $nextType;
    }

    /**
     * Get next_type
     *
     * @return string $nextType
     */
    public function getNextType()
    {
        return $this->next_type;
    }

    /**
     * Set next_id
     *
     * @param integer $nextId
     */
    public function setNextId($nextId)
    {
        $this->next_id = $nextId;
    }

    /**
     * Get next_id
     *
     * @return integer $nextId
     */
    public function getNextId()
    {
        return $this->next_id;
    }

    /**
     * Set distance
     *
     * @param integer $distance
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;
    }

    /**
     * Get distance
     *
     * @return integer $distance
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * Set count_users
     *
     * @param integer $countUsers
     */
    public function setCountUsers($countUsers)
    {
        $this->count_users = $countUsers;
    }

    /**
     * Get count_users
     *
     * @return integer $countUsers
     */
    public function getCountUsers()
    {
        return $this->count_users;
    }
}