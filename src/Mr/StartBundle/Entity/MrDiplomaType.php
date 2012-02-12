<?php

namespace Mr\StartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mr\StartBundle\Entity\MrDiplomaType
 *
 * @ORM\Table(name="mr_diploma_type")
 * @ORM\Entity
 */
class MrDiplomaType
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
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    protected $name;

    /**
     * @var MrDiplomaLevel
     *
     * @ORM\OneToOne(targetEntity="MrDiplomaLevel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="level_id", referencedColumnName="id")
     * })
     */
    protected $level;

    /**
     * @var MrCountry
     *
     * @ORM\OneToOne(targetEntity="MrCountry")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     * })
     */
    protected $country;

    /**
     * @var date $created_at
     */
    private $created_at;

    /**
     * @var datetime $updated_at
     */
    private $updated_at;


    /**
     * To String
     *
     * @return string
     */
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
     * Set level
     *
     * @param Mr\StartBundle\Entity\MrDiplomaLevel $level
     */
    public function setLevel(\Mr\StartBundle\Entity\MrDiplomaLevel $level)
    {
        $this->level = $level;
    }

    /**
     * Get level
     *
     * @return Mr\StartBundle\Entity\MrDiplomaLevel $level
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set country
     *
     * @param Mr\StartBundle\Entity\MrCountry $country
     */
    public function setCountry(\Mr\StartBundle\Entity\MrCountry $country)
    {
        $this->country = $country;
    }

    /**
     * Get country
     *
     * @return Mr\StartBundle\Entity\MrCountry $country
     */
    public function getCountry()
    {
        return $this->country;
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