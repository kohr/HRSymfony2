<?php

namespace Mr\StartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Gedmo\Mapping\Annotation as GEDMO;
use Gedmo\Translatable\Translatable;

/**
 * Mr\StartBundle\Entity\MrContinent
 *
 * @ORM\Table(name="mr_continent")
 * @ORM\Entity
 */
class MrContinent
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
     * @GEDMO\Translatable
     */
    protected $name;

    /**
     * Used locale to override Translation listener`s locale
     * this is not a mapped field of entity metadata, just a simple property
     *
     * @GEDMO\Locale
     */
    private $locale;


    public function setTranslatableLocale($locale)
    {
        $this->locale = $locale;
    }

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
}