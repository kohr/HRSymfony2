<?php

namespace Mr\StartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mr\StartBundle\Entity\MrProvince
 *
 * @ORM\Table(name="mr_province")
 * @ORM\Entity
 */
class MrProvince
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
     * @var Mr\StartBundle\Entity\MrProvince
     */
    private $parent;

    /**
     * @var Mr\StartBundle\Entity\MrProvince
     */
    private $children;

    /**
     * @var Mr\StartBundle\Entity\MrProvince
     */
    private $root;

    /**
     * @var MrCountry
     */
    private $country;

    /**
     * @var Mr\StartBundle\Entity\MrProvince
     */
    private $nearby;


    public function __construct()
    {
        $this->nearby = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set parent
     *
     * @param Mr\StartBundle\Entity\MrProvince $parent
     */
    public function setParent(\Mr\StartBundle\Entity\MrProvince $parent)
    {
        $this->parent = $parent;
    }

    /**
     * Get parent
     *
     * @return Mr\StartBundle\Entity\MrProvince $parent
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set root
     *
     * @param Mr\StartBundle\Entity\MrProvince $root
     */
    public function setRoot(\Mr\StartBundle\Entity\MrProvince $root)
    {
        $this->root = $root;
    }

    /**
     * Get root
     *
     * @return Mr\StartBundle\Entity\MrProvince $root
     */
    public function getRoot()
    {
        return $this->root;
    }
    
    /**
     * Add nearby
     *
     * @param Mr\StartBundle\Entity\MrProvince $nearby
     */
    public function addNearby(\Mr\StartBundle\Entity\MrProvince $nearby)
    {
        $this->nearby[] = $nearby;
    }

    /**
     * Get nearby
     *
     * @return Doctrine\Common\Collections\Collection $nearby
     */
    public function getNearby()
    {
        return $this->nearby;
    }

    /**
     * Add children
     *
     * @param Mr\StartBundle\Entity\MrProvince $children
     */
    public function addChildren(\Mr\StartBundle\Entity\MrProvince $children)
    {
        $this->children[] = $children;
    }

    /**
     * Get children
     *
     * @return Doctrine\Common\Collections\Collection $children
     */
    public function getChildren()
    {
        return $this->children;
    }
}