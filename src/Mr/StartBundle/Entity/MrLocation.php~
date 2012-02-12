<?php

namespace Mr\StartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mr\StartBundle\Entity\MrLocation
 *
 * @ORM\Table(name="mr_location")
 * @ORM\Entity
 */
class MrLocation
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
     * @var string $type
     *
     * @ORM\Column(name="type", type="string", length=250, nullable=false)
     */
    protected $type;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=250, nullable=false)
     */
    protected $name;

    /**
     * @var string $adress
     *
     * @ORM\Column(name="adress", type="string", length=250, nullable=false)
     */
    protected $adress;

    /**
     * @var MrCity
     *
     * @ORM\ManyToOne(targetEntity="MrCity")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="city_id", referencedColumnName="id")
     * })
     */
    protected $city;

    /**
     * @var integer $zipcode
     */
    private $zipcode;

    /**
     * @var text $twitterhash
     */
    private $twitterhash;

    /**
     * @var Mr\StartBundle\Entity\MrLocation
     */
    private $children;

    /**
     * @var Mr\StartBundle\Entity\MrLocation
     */
    private $parent;

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
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set type
     *
     * @param integer $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Get type
     *
     * @return integer $type
     */
    public function getType()
    {
        return $this->type;
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
     * Set adress
     *
     * @param string $adress
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;
    }

    /**
     * Get adress
     *
     * @return string $adress
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set city
     *
     * @param Mr\StartBundle\Entity\MrCity $city
     */
    public function setCity(\Mr\StartBundle\Entity\MrCity $city)
    {
        $this->city = $city;
    }

    /**
     * Get city
     *
     * @return Mr\StartBundle\Entity\MrCity $city
     */
    public function getCity()
    {
        return $this->city;
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
     * Set twitterhash
     *
     * @param text $twitterhash
     */
    public function setTwitterhash($twitterhash)
    {
        $this->twitterhash = $twitterhash;
    }

    /**
     * Get twitterhash
     *
     * @return text $twitterhash
     */
    public function getTwitterhash()
    {
        return $this->twitterhash;
    }
    
    /**
     * Add children
     *
     * @param Mr\StartBundle\Entity\MrLocation $children
     */
    public function addChildren(\Mr\StartBundle\Entity\MrLocation $children)
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
     * @param Mr\StartBundle\Entity\MrLocation $parent
     */
    public function setParent(\Mr\StartBundle\Entity\MrLocation $parent)
    {
        $this->parent = $parent;
    }

    /**
     * Get parent
     *
     * @return Mr\StartBundle\Entity\MrLocation $parent
     */
    public function getParent()
    {
        return $this->parent;
    }
    /**
     * @var string $url
     */
    private $url;

    /**
     * @var string $email
     */
    private $email;


    /**
     * Set url
     *
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set zipcode
     *
     * @param integer $zipcode
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;
    }

    /**
     * Get zipcode
     *
     * @return integer 
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }
}