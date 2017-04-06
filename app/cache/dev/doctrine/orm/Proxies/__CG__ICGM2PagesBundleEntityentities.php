<?php

namespace Proxies\__CG__\ICGM2\PagesBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class entities extends \ICGM2\PagesBundle\Entity\entities implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'ICGM2\\PagesBundle\\Entity\\entities' . "\0" . 'id', '' . "\0" . 'ICGM2\\PagesBundle\\Entity\\entities' . "\0" . 'sort', '' . "\0" . 'ICGM2\\PagesBundle\\Entity\\entities' . "\0" . 'type', '' . "\0" . 'ICGM2\\PagesBundle\\Entity\\entities' . "\0" . 'name', '' . "\0" . 'ICGM2\\PagesBundle\\Entity\\entities' . "\0" . 'firstname', '' . "\0" . 'ICGM2\\PagesBundle\\Entity\\entities' . "\0" . 'lastname', '' . "\0" . 'ICGM2\\PagesBundle\\Entity\\entities' . "\0" . 'birthdate', '' . "\0" . 'ICGM2\\PagesBundle\\Entity\\entities' . "\0" . 'speciality', '' . "\0" . 'ICGM2\\PagesBundle\\Entity\\entities' . "\0" . 'website', '' . "\0" . 'ICGM2\\PagesBundle\\Entity\\entities' . "\0" . 'employeesNumber', '' . "\0" . 'ICGM2\\PagesBundle\\Entity\\entities' . "\0" . 'zipCode', '' . "\0" . 'ICGM2\\PagesBundle\\Entity\\entities' . "\0" . 'address', '' . "\0" . 'ICGM2\\PagesBundle\\Entity\\entities' . "\0" . 'city', '' . "\0" . 'ICGM2\\PagesBundle\\Entity\\entities' . "\0" . 'country', '' . "\0" . 'ICGM2\\PagesBundle\\Entity\\entities' . "\0" . 'phone', '' . "\0" . 'ICGM2\\PagesBundle\\Entity\\entities' . "\0" . 'fax', '' . "\0" . 'ICGM2\\PagesBundle\\Entity\\entities' . "\0" . 'email', '' . "\0" . 'ICGM2\\PagesBundle\\Entity\\entities' . "\0" . 'description', '' . "\0" . 'ICGM2\\PagesBundle\\Entity\\entities' . "\0" . 'profilePicture', '' . "\0" . 'ICGM2\\PagesBundle\\Entity\\entities' . "\0" . 'position', 'file', '' . "\0" . 'ICGM2\\PagesBundle\\Entity\\entities' . "\0" . 'filenameForRemove', 'todos', 'events', 'user');
        }

        return array('__isInitialized__', '' . "\0" . 'ICGM2\\PagesBundle\\Entity\\entities' . "\0" . 'id', '' . "\0" . 'ICGM2\\PagesBundle\\Entity\\entities' . "\0" . 'sort', '' . "\0" . 'ICGM2\\PagesBundle\\Entity\\entities' . "\0" . 'type', '' . "\0" . 'ICGM2\\PagesBundle\\Entity\\entities' . "\0" . 'name', '' . "\0" . 'ICGM2\\PagesBundle\\Entity\\entities' . "\0" . 'firstname', '' . "\0" . 'ICGM2\\PagesBundle\\Entity\\entities' . "\0" . 'lastname', '' . "\0" . 'ICGM2\\PagesBundle\\Entity\\entities' . "\0" . 'birthdate', '' . "\0" . 'ICGM2\\PagesBundle\\Entity\\entities' . "\0" . 'speciality', '' . "\0" . 'ICGM2\\PagesBundle\\Entity\\entities' . "\0" . 'website', '' . "\0" . 'ICGM2\\PagesBundle\\Entity\\entities' . "\0" . 'employeesNumber', '' . "\0" . 'ICGM2\\PagesBundle\\Entity\\entities' . "\0" . 'zipCode', '' . "\0" . 'ICGM2\\PagesBundle\\Entity\\entities' . "\0" . 'address', '' . "\0" . 'ICGM2\\PagesBundle\\Entity\\entities' . "\0" . 'city', '' . "\0" . 'ICGM2\\PagesBundle\\Entity\\entities' . "\0" . 'country', '' . "\0" . 'ICGM2\\PagesBundle\\Entity\\entities' . "\0" . 'phone', '' . "\0" . 'ICGM2\\PagesBundle\\Entity\\entities' . "\0" . 'fax', '' . "\0" . 'ICGM2\\PagesBundle\\Entity\\entities' . "\0" . 'email', '' . "\0" . 'ICGM2\\PagesBundle\\Entity\\entities' . "\0" . 'description', '' . "\0" . 'ICGM2\\PagesBundle\\Entity\\entities' . "\0" . 'profilePicture', '' . "\0" . 'ICGM2\\PagesBundle\\Entity\\entities' . "\0" . 'position', 'file', '' . "\0" . 'ICGM2\\PagesBundle\\Entity\\entities' . "\0" . 'filenameForRemove', 'todos', 'events', 'user');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (entities $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setSort($sort)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSort', array($sort));

        return parent::setSort($sort);
    }

    /**
     * {@inheritDoc}
     */
    public function getSort()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSort', array());

        return parent::getSort();
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', array($type));

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', array());

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', array($name));

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstname($firstname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstname', array($firstname));

        return parent::setFirstname($firstname);
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstname', array());

        return parent::getFirstname();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastname($lastname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastname', array($lastname));

        return parent::setLastname($lastname);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastname', array());

        return parent::getLastname();
    }

    /**
     * {@inheritDoc}
     */
    public function setBirthdate($birthdate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBirthdate', array($birthdate));

        return parent::setBirthdate($birthdate);
    }

    /**
     * {@inheritDoc}
     */
    public function getBirthdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBirthdate', array());

        return parent::getBirthdate();
    }

    /**
     * {@inheritDoc}
     */
    public function setSpeciality($speciality)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSpeciality', array($speciality));

        return parent::setSpeciality($speciality);
    }

    /**
     * {@inheritDoc}
     */
    public function getSpeciality()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSpeciality', array());

        return parent::getSpeciality();
    }

    /**
     * {@inheritDoc}
     */
    public function setWebsite($website)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWebsite', array($website));

        return parent::setWebsite($website);
    }

    /**
     * {@inheritDoc}
     */
    public function getWebsite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWebsite', array());

        return parent::getWebsite();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmployeesNumber($employeesNumber)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmployeesNumber', array($employeesNumber));

        return parent::setEmployeesNumber($employeesNumber);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmployeesNumber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmployeesNumber', array());

        return parent::getEmployeesNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setZipCode($zipCode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setZipCode', array($zipCode));

        return parent::setZipCode($zipCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getZipCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getZipCode', array());

        return parent::getZipCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddress($address)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddress', array($address));

        return parent::setAddress($address);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddress', array());

        return parent::getAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setCity($city)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCity', array($city));

        return parent::setCity($city);
    }

    /**
     * {@inheritDoc}
     */
    public function getCity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCity', array());

        return parent::getCity();
    }

    /**
     * {@inheritDoc}
     */
    public function setCountry($country)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCountry', array($country));

        return parent::setCountry($country);
    }

    /**
     * {@inheritDoc}
     */
    public function getCountry()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCountry', array());

        return parent::getCountry();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhone($phone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhone', array($phone));

        return parent::setPhone($phone);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhone', array());

        return parent::getPhone();
    }

    /**
     * {@inheritDoc}
     */
    public function setFax($fax)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFax', array($fax));

        return parent::setFax($fax);
    }

    /**
     * {@inheritDoc}
     */
    public function getFax()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFax', array());

        return parent::getFax();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', array($email));

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', array());

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', array($description));

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', array());

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setProfilePicture($profilePicture)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProfilePicture', array($profilePicture));

        return parent::setProfilePicture($profilePicture);
    }

    /**
     * {@inheritDoc}
     */
    public function getProfilePicture()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProfilePicture', array());

        return parent::getProfilePicture();
    }

    /**
     * {@inheritDoc}
     */
    public function setPosition($position)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPosition', array($position));

        return parent::setPosition($position);
    }

    /**
     * {@inheritDoc}
     */
    public function getPosition()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPosition', array());

        return parent::getPosition();
    }

    /**
     * {@inheritDoc}
     */
    public function preUpload()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'preUpload', array());

        return parent::preUpload();
    }

    /**
     * {@inheritDoc}
     */
    public function upload()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'upload', array());

        return parent::upload();
    }

    /**
     * {@inheritDoc}
     */
    public function storeFilenameForRemove()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'storeFilenameForRemove', array());

        return parent::storeFilenameForRemove();
    }

    /**
     * {@inheritDoc}
     */
    public function removeUpload()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUpload', array());

        return parent::removeUpload();
    }

    /**
     * {@inheritDoc}
     */
    public function getAbsolutePath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAbsolutePath', array());

        return parent::getAbsolutePath();
    }

    /**
     * {@inheritDoc}
     */
    public function getWebPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWebPath', array());

        return parent::getWebPath();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function addEvent(\ICGM2\PagesBundle\Entity\events $events)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEvent', array($events));

        return parent::addEvent($events);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEvent(\ICGM2\PagesBundle\Entity\events $events)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEvent', array($events));

        return parent::removeEvent($events);
    }

    /**
     * {@inheritDoc}
     */
    public function getEvents()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEvents', array());

        return parent::getEvents();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(\ICGM2\UserBundle\Entity\User $user = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', array($user));

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', array());

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function addTodo(\ICGM2\PagesBundle\Entity\todos $todos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTodo', array($todos));

        return parent::addTodo($todos);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTodo(\ICGM2\PagesBundle\Entity\todos $todos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTodo', array($todos));

        return parent::removeTodo($todos);
    }

    /**
     * {@inheritDoc}
     */
    public function getTodos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTodos', array());

        return parent::getTodos();
    }

}
