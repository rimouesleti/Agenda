<?php

namespace ICGM2\PagesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * entities
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ICGM2\PagesBundle\Entity\entitiesRepository")
 * @ORM\HasLifecycleCallbacks
 */
class entities {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="sort", type="string", length=255)
     */
    private $sort;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255 , nullable = true)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255 , nullable = true)
     */
    private $lastname;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthdate", type="date" , nullable = true)
     */
    private $birthdate;

    /**
     * @var string
     *
     * @ORM\Column(name="speciality", type="string", length=255)
     */
    private $speciality;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=255, nullable = true)
     */
    private $website;

    /**
     * @var integer
     *
     * @ORM\Column(name="employees_number", type="integer" , nullable = true)
     */
    private $employeesNumber = null;

    /**
     * @var integer
     *
     * @ORM\Column(name="zip_code", type="integer", nullable = true)
     */
    private $zipCode;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255 , nullable = true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=255, nullable = true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable = true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="profile_picture", type="string", length=255, nullable = true)
     */
    private $profilePicture;

    /**
     * @var string
     *
     * @ORM\Column(name="position", type="string", length=255, nullable = true)
     */
    private $position;

    /**
     * Image file
     *
     * @var File
     *     
     * @Assert\Valid
     */
    public $file;
    private $filenameForRemove;

    /**
     * @ORM\OneToMany(targetEntity="todos", mappedBy="entity", cascade={"remove"})
     */
    protected $todos;

    /**
     * @ORM\OneToMany(targetEntity="events", mappedBy="entity", cascade={"remove"})
     */
    protected $events;

    public function __construct() {
        $this->events = new ArrayCollection();
        $this->todos = new ArrayCollection();
    }

    /**
     * @ORM\ManyToOne(targetEntity="\ICGM2\UserBundle\Entity\user", inversedBy="entities")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set sort
     *
     * @param string $sort
     * @return entities
     */
    public function setSort($sort) {
        $this->sort = $sort;

        return $this;
    }

    /**
     * Get sort
     *
     * @return string 
     */
    public function getSort() {
        return $this->sort;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return entities
     */
    public function setType($type) {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return entities
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return entities
     */
    public function setFirstname($firstname) {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname() {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return entities
     */
    public function setLastname($lastname) {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname() {
        return $this->lastname;
    }

    /**
     * Set birthdate
     *
     * @param \DateTime $birthdate
     * @return entities
     */
    public function setBirthdate($birthdate) {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get birthdate
     *
     * @return \DateTime 
     */
    public function getBirthdate() {
        return $this->birthdate;
    }

    /**
     * Set speciality
     *
     * @param string $speciality
     * @return entities
     */
    public function setSpeciality($speciality) {
        $this->speciality = $speciality;

        return $this;
    }

    /**
     * Get speciality
     *
     * @return string 
     */
    public function getSpeciality() {
        return $this->speciality;
    }

    /**
     * Set website
     *
     * @param string $website
     * @return entities
     */
    public function setWebsite($website) {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string 
     */
    public function getWebsite() {
        return $this->website;
    }

    /**
     * Set employeesNumber
     *
     * @param integer $employeesNumber
     * @return entities
     */
    public function setEmployeesNumber($employeesNumber) {
        $this->employeesNumber = $employeesNumber;

        return $this;
    }

    /**
     * Get employeesNumber
     *
     * @return integer 
     */
    public function getEmployeesNumber() {
        return $this->employeesNumber;
    }

    /**
     * Set zipCode
     *
     * @param integer $zipCode
     * @return entities
     */
    public function setZipCode($zipCode) {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Get zipCode
     *
     * @return integer 
     */
    public function getZipCode() {
        return $this->zipCode;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return entities
     */
    public function setAddress($address) {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress() {
        return $this->address;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return entities
     */
    public function setCity($city) {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity() {
        return $this->city;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return entities
     */
    public function setCountry($country) {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry() {
        return $this->country;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return entities
     */
    public function setPhone($phone) {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone() {
        return $this->phone;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return entities
     */
    public function setFax($fax) {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax() {
        return $this->fax;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return entities
     */
    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return entities
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set profilePicture
     *
     * @param string $profilePicture
     * @return entities
     */
    public function setProfilePicture($profilePicture) {
        $this->profilePicture = $profilePicture;

        return $this;
    }

    /**
     * Get profilePicture
     *
     * @return string 
     */
    public function getProfilePicture() {
        return $this->profilePicture;
    }

    /**
     * Set position
     *
     * @param string $position
     * @return entities
     */
    public function setPosition($position) {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string 
     */
    public function getPosition() {
        return $this->position;
    }

    /*     * ********************************************* */

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload() {
        if (null !== $this->file) {
            $this->profilePicture = sha1(uniqid(mt_rand(), true)) . '.' . $this->file->guessExtension();
        }
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload() {
        if (null === $this->file) {
            return;
        }
        $this->file->move($this->getUploadRootDir(), $this->profilePicture);
        unset($this->file);
    }

    /**
     * @ORM\PreRemove()
     */
    public function storeFilenameForRemove() {
        $this->filenameForRemove = $this->getAbsolutePath();
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload() {
        if ($this->filenameForRemove) {
            unlink($this->filenameForRemove);
        }
    }

    public function getAbsolutePath() {
        return null === $this->profilePicture ? null : $this->getUploadRootDir() . '/' . $this->profilePicture;
    }

    public function getWebPath() {
        return null === $this->profilePicture ? null : $this->getUploadDir() . '/' . $this->profilePicture;
    }

    protected function getUploadRootDir() {
        // le chemin absolu du répertoire où les documents uploadés doivent être sauvegardés
        return __DIR__ . '/../../../../web/' . $this->getUploadDir();
    }

    protected function getUploadDir() {
        // on se débarrasse de « __DIR__ » afin de ne pas avoir de problème lorsqu'on affiche
        // le entity/image dans la vue.
        return 'uploads/entities';
    }

    public function __toString() {
        return $this->name;
        ;
    }

    /**
     * Add events
     *
     * @param \ICGM2\PagesBundle\Entity\events $events
     * @return entities
     */
    public function addEvent(\ICGM2\PagesBundle\Entity\events $events) {
        $this->events[] = $events;

        return $this;
    }

    /**
     * Remove events
     *
     * @param \ICGM2\PagesBundle\Entity\events $events
     */
    public function removeEvent(\ICGM2\PagesBundle\Entity\events $events) {
        $this->events->removeElement($events);
    }

    /**
     * Get events
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEvents() {
        return $this->events;
    }

    /**
     * Set user
     *
     * @param \ICGM2\PagesBundle\Entity\/ICGM2/UserBundle/Entity/user $user
     * @return entities
     */
    public function setUser(\ICGM2\UserBundle\Entity\user $user = null) {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \ICGM2\UserBundle\Entity\user 
     */
    public function getUser() {
        return $this->user;
    }


    /**
     * Add todos
     *
     * @param \ICGM2\PagesBundle\Entity\todos $todos
     * @return entities
     */
    public function addTodo(\ICGM2\PagesBundle\Entity\todos $todos)
    {
        $this->todos[] = $todos;

        return $this;
    }

    /**
     * Remove todos
     *
     * @param \ICGM2\PagesBundle\Entity\todos $todos
     */
    public function removeTodo(\ICGM2\PagesBundle\Entity\todos $todos)
    {
        $this->todos->removeElement($todos);
    }

    /**
     * Get todos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTodos()
    {
        return $this->todos;
    }
}
