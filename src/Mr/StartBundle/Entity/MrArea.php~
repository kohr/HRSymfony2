<?php

namespace Mr\StartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Gedmo\Mapping\Annotation as GEDMO;
use Gedmo\Translatable\Translatable;

/**
 * Mr\StartBundle\Entity\MrArea
 *
 * @ORM\Table(name="mr_area")
 * @ORM\Entity
 */
class MrArea implements Translatable
{

    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $name
     *
     * @GEDMO\Translatable
     */
    private $name;

    /**
     * @var Mr\StartBundle\Entity\MrArea
     *
     * @ORM\OneToOne(targetEntity="MrArea")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     * })
     */
    private $parent;

    /**
     * @var Mr\StartBundle\Entity\MrArea
     */
    private $root;

    /**
     * @var Mr\StartBundle\Entity\MrArea
     */
    private $children;

    /**
     * @var date $created_at
     */
    private $created_at;

    /**
     * @var datetime $updated_at
     */
    private $updated_at;

    /**
     * Used locale to override Translation listener`s locale
     * this is not a mapped field of entity metadata, just a simple property
     *
     * @GEDMO\Locale
     */
    private $locale;


    public function __construct()
    {
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function __toString()
    {
        return $this->name;
    }

    public function setTranslatableLocale($locale)
    {
        $this->locale = $locale;
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
     * Set parent
     *
     * @param Mr\StartBundle\Entity\MrArea $parent
     */
    public function setParent(\Mr\StartBundle\Entity\MrArea $parent)
    {
        $this->parent = $parent;
    }

    /**
     * Get parent
     *
     * @return Mr\StartBundle\Entity\MrArea $parent
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set root
     *
     * @param Mr\StartBundle\Entity\MrArea $root
     */
    public function setRoot(\Mr\StartBundle\Entity\MrArea $root)
    {
        $this->root = $root;
    }

    /**
     * Get root
     *
     * @return Mr\StartBundle\Entity\MrArea $root
     */
    public function getRoot()
    {
        return $this->root;
    }
    
    /**
     * Add children
     *
     * @param Mr\StartBundle\Entity\MrArea $children
     */
    public function addChildren(\Mr\StartBundle\Entity\MrArea $children)
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