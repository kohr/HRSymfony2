<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class MrStartBundleEntityMrProvinceProxy extends \Mr\StartBundle\Entity\MrProvince implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }
    
    
    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }

    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function setName($name)
    {
        $this->__load();
        return parent::setName($name);
    }

    public function getName()
    {
        $this->__load();
        return parent::getName();
    }

    public function setCountry(\Mr\StartBundle\Entity\MrCountry $country)
    {
        $this->__load();
        return parent::setCountry($country);
    }

    public function getCountry()
    {
        $this->__load();
        return parent::getCountry();
    }

    public function setParent(\Mr\StartBundle\Entity\MrProvince $parent)
    {
        $this->__load();
        return parent::setParent($parent);
    }

    public function getParent()
    {
        $this->__load();
        return parent::getParent();
    }

    public function setRoot(\Mr\StartBundle\Entity\MrProvince $root)
    {
        $this->__load();
        return parent::setRoot($root);
    }

    public function getRoot()
    {
        $this->__load();
        return parent::getRoot();
    }

    public function addNearby(\Mr\StartBundle\Entity\MrProvince $nearby)
    {
        $this->__load();
        return parent::addNearby($nearby);
    }

    public function getNearby()
    {
        $this->__load();
        return parent::getNearby();
    }

    public function addChildren(\Mr\StartBundle\Entity\MrProvince $children)
    {
        $this->__load();
        return parent::addChildren($children);
    }

    public function getChildren()
    {
        $this->__load();
        return parent::getChildren();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'name', 'country', 'children', 'parent', 'nearby');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}