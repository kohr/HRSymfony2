<?php

namespace Mr\StartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mr\StartBundle\Entity\MrSynonym
 *
 * @ORM\Table(name="mr_synonym")
 * @ORM\Entity
 */
class MrSynonym
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
     * @var integer $synonym
     */
    private $synonym;

    /**
     * @var integer $mr_to_partner_id
     */
    private $mr_to_partner_id;

    /**
     * @var date $created_at
     */
    private $created_at;

    /**
     * @var datetime $updated_at
     */
    private $updated_at;

    /**
     * @var Mr\StartBundle\Entity\MrToPartner
     */
    private $city;


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
     * Set synonym
     *
     * @param integer $synonym
     */
    public function setSynonym($synonym)
    {
        $this->synonym = $synonym;
    }

    /**
     * Get synonym
     *
     * @return integer 
     */
    public function getSynonym()
    {
        return $this->synonym;
    }

    /**
     * Set mr_to_partner_id
     *
     * @param integer $mrToPartnerId
     */
    public function setMrToPartnerId($mrToPartnerId)
    {
        $this->mr_to_partner_id = $mrToPartnerId;
    }

    /**
     * Get mr_to_partner_id
     *
     * @return integer 
     */
    public function getMrToPartnerId()
    {
        return $this->mr_to_partner_id;
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
     * Set city
     *
     * @param Mr\StartBundle\Entity\MrToPartner $city
     */
    public function setCity(\Mr\StartBundle\Entity\MrToPartner $city)
    {
        $this->city = $city;
    }

    /**
     * Get city
     *
     * @return Mr\StartBundle\Entity\MrToPartner 
     */
    public function getCity()
    {
        return $this->city;
    }
}