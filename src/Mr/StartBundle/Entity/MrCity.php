<?php

namespace Mr\StartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mr\StartBundle\Entity\MrCity
 *
 * @ORM\Table(name="mr_city")
 * @ORM\Entity
 */
class MrCity
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=250, nullable=false)
     */
    private $name;

    /**
     * @var MrProvince
     *
     * @ORM\ManyToOne(targetEntity="MrProvince")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="province_id", referencedColumnName="id")
     * })
     */
    private $province;

    /**
     * @var date $created_at
     */
    private $created_at;

    /**
     * @var datetime $updated_at
     */
    private $updated_at;


    public function __toString()
    {
        return $this->name;
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
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set province
     *
     * @param Mr\StartBundle\Entity\MrProvince $province
     */
    public function setProvince(\Mr\StartBundle\Entity\MrProvince $province)
    {
        $this->province = $province;
    }

    /**
     * Get province
     *
     * @return Mr\StartBundle\Entity\MrProvince $province
     */
    public function getProvince()
    {
        return $this->province;
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
}