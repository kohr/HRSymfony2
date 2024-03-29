<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class MrStartBundleEntityMrSynonymProxy extends \Mr\StartBundle\Entity\MrSynonym implements \Doctrine\ORM\Proxy\Proxy
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
    
    
    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function setMrObjectId($mrObjectId)
    {
        $this->__load();
        return parent::setMrObjectId($mrObjectId);
    }

    public function getMrObjectId()
    {
        $this->__load();
        return parent::getMrObjectId();
    }

    public function setMrObjectName($mrObjectName)
    {
        $this->__load();
        return parent::setMrObjectName($mrObjectName);
    }

    public function getMrObjectName()
    {
        $this->__load();
        return parent::getMrObjectName();
    }

    public function setSynonym($synonym)
    {
        $this->__load();
        return parent::setSynonym($synonym);
    }

    public function getSynonym()
    {
        $this->__load();
        return parent::getSynonym();
    }

    public function setMrToPartnerId($mrToPartnerId)
    {
        $this->__load();
        return parent::setMrToPartnerId($mrToPartnerId);
    }

    public function getMrToPartnerId()
    {
        $this->__load();
        return parent::getMrToPartnerId();
    }

    public function setCreatedAt($createdAt)
    {
        $this->__load();
        return parent::setCreatedAt($createdAt);
    }

    public function getCreatedAt()
    {
        $this->__load();
        return parent::getCreatedAt();
    }

    public function setUpdatedAt($updatedAt)
    {
        $this->__load();
        return parent::setUpdatedAt($updatedAt);
    }

    public function getUpdatedAt()
    {
        $this->__load();
        return parent::getUpdatedAt();
    }

    public function setCity(\Mr\StartBundle\Entity\MrToPartner $city)
    {
        $this->__load();
        return parent::setCity($city);
    }

    public function getCity()
    {
        $this->__load();
        return parent::getCity();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'mr_object_id', 'mr_object_name', 'synonym', 'mr_to_partner_id', 'created_at', 'updated_at', 'city');
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