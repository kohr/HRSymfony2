<?php

namespace Mr\StartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mr\StartBundle\Entity\MrToPartner
 *
 * @ORM\Table(name="mr_to_partner")
 * @ORM\Entity
 */
class MrToPartner
{  
 
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $mr_object_id
     */
    private $mr_object_id;

    /**
     * @var string $mr_object_name
     */
    private $mr_object_name;

    /**
     * @var integer $partner_id
     */
    private $partner_id;

    /**
     * @var integer $partner_object_id
     */
    private $partner_object_id;

    /**
     * @var date $created_at
     */
    private $created_at;

    /**
     * @var datetime $updated_at
     */
    private $updated_at;

    /**
     * @var Mr\StartBundle\Entity\MrPartner
     */
    private $location;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set mr_object_id
     *
     * @param integer $mrObjectId
     */
    public function setMrObjectId($mrObjectId)
    {
        $this->mr_object_id = $mrObjectId;
    }

    /**
     * Get mr_object_id
     *
     * @return integer 
     */
    public function getMrObjectId()
    {
        return $this->mr_object_id;
    }

    /**
     * Set mr_object_name
     *
     * @param string $mrObjectName
     */
    public function setMrObjectName($mrObjectName)
    {
        $this->mr_object_name = $mrObjectName;
    }

    /**
     * Get mr_object_name
     *
     * @return string 
     */
    public function getMrObjectName()
    {
        return $this->mr_object_name;
    }

    /**
     * Set partner_id
     *
     * @param integer $partnerId
     */
    public function setPartnerId($partnerId)
    {
        $this->partner_id = $partnerId;
    }

    /**
     * Get partner_id
     *
     * @return integer 
     */
    public function getPartnerId()
    {
        return $this->partner_id;
    }

    /**
     * Set partner_object_id
     *
     * @param integer $partnerObjectId
     */
    public function setPartnerObjectId($partnerObjectId)
    {
        $this->partner_object_id = $partnerObjectId;
    }

    /**
     * Get partner_object_id
     *
     * @return integer 
     */
    public function getPartnerObjectId()
    {
        return $this->partner_object_id;
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
     * @return date 
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
     * @return datetime 
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set location
     *
     * @param Mr\StartBundle\Entity\MrPartner $location
     */
    public function setLocation(\Mr\StartBundle\Entity\MrPartner $location)
    {
        $this->location = $location;
    }

    /**
     * Get location
     *
     * @return Mr\StartBundle\Entity\MrPartner 
     */
    public function getLocation()
    {
        return $this->location;
    }
}