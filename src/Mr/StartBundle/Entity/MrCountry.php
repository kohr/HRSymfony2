<?php

namespace Mr\StartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mr\StartBundle\Entity\MrCountry
 *
 * @ORM\Table(name="mr_country")
 * @ORM\Entity
 */
class MrCountry
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
     * @var string $code
     *
     * @ORM\Column(name="code", type="string", length=5, nullable=false)
     */
    private $code;

    /**
     * @var MrContinent
     *
     * @ORM\OneToOne(targetEntity="MrContinent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="continent_id", referencedColumnName="id")
     * })
     */
    private $continent;

    /**
     * @var Mr\StartBundle\Entity\MrCountry
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
     * Set code
     *
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * Get code
     *
     * @return string $code
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set continent
     *
     * @param Mr\StartBundle\Entity\MrContinent $continent
     */
    public function setContinent(\Mr\StartBundle\Entity\MrContinent $continent)
    {
        $this->continent = $continent;
    }

    /**
     * Get continent
     *
     * @return Mr\StartBundle\Entity\MrContinent $continent
     */
    public function getContinent()
    {
        return $this->continent;
    }
    
    /**
     * Add nearby
     *
     * @param Mr\StartBundle\Entity\MrCountry $nearby
     */
    public function addNearby(\Mr\StartBundle\Entity\MrCountry $nearby)
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
     * @var Mr\StartBundle\Entity\MrCountry
     */
    private $children;

    /**
     * @var Mr\StartBundle\Entity\MrCountry
     */
    private $parent;


    /**
     * Add children
     *
     * @param Mr\StartBundle\Entity\MrCountry $children
     */
    public function addChildren(\Mr\StartBundle\Entity\MrCountry $children)
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

    /**
     * Set parent
     *
     * @param Mr\StartBundle\Entity\MrCountry $parent
     */
    public function setParent(\Mr\StartBundle\Entity\MrCountry $parent)
    {
        $this->parent = $parent;
    }

    /**
     * Get parent
     *
     * @return Mr\StartBundle\Entity\MrCountry $parent
     */
    public function getParent()
    {
        return $this->parent;
    }
}