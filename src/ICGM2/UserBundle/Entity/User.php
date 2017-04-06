<?php

// src/ICGM2/UserBundle/Entity/User.php

namespace ICGM2\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Security\Core\Util\SecureRandom;
use FOS\MessageBundle\Model\ParticipantInterface;

/**
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="user")
 */
class User extends BaseUser implements ParticipantInterface
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="last_name", type="string", nullable = true)
     */
    private $last_name;

    /**
     * @ORM\Column(name="first_name", type="string", nullable = true)
     */
    private $first_name;

    /**
     * @ORM\Column(name="language", type="string", nullable = true, options={"default" = "en"})
     */
    private $language;

    /**
     * @ORM\Column(name="departement", type="string", nullable = true)
     */
    private $departement;

    /**
     * @ORM\Column(name="gps_tracking", type="string", nullable = true)
     */
    private $gps_tracking;

    /**
     * @ORM\Column(name="phone", type="string", nullable = true)
     */
    private $phone;

    /**
     * @ORM\Column(name="mphone", type="string", nullable = true)
     */
    private $mphone;

    /**
     * @ORM\Column(name="address", type="string", nullable = true)
     */
    private $address;

    /**
     * @ORM\Column(name="zip_code", type="integer", nullable = true)
     */
    private $zip_code;

    /**
     * @ORM\Column(name="country", type="string", nullable = true)
     */
    private $country;

    /**
     * @ORM\Column(name="city", type="string", nullable = true)
     */
    private $city;

    /**
     * @ORM\Column(name="company_name", type="string", nullable = true)
     */
    private $company_name;

    /**
     * @ORM\Column(name="position", type="string", nullable = true)
     */
    private $position;

    /**
     * @ORM\OneToMany(targetEntity="\ICGM2\PagesBundle\Entity\entities", mappedBy="user")
     */
    protected $entities;

    /**
     * @ORM\OneToMany(targetEntity="\ICGM2\PagesBundle\Entity\todos", mappedBy="user", cascade={"remove"})
     */
    protected $todos;

    /**
     * @ORM\ManyToMany(targetEntity="\ICGM2\PagesBundle\Entity\events", mappedBy="user")
     */
    protected $events;

    /**
     * @ORM\Column(type="string", length=255, nullable=true) 
     */

    /**
     * @ORM\OneToMany(targetEntity="\ICGM2\PagesBundle\Entity\messages", mappedBy="user")
     */
    protected $messages;

    /**
     * @ORM\Column(type="string", length=255, nullable=true) 
     */
    public $path;

    /**
     * @Assert\File(maxSize="6000000") 
     */
    public $file;
    // for temporary storage
    private $tempPath;
    private $filenameForRemove;

    /*     * *************************************************************** */

    /**
     * Sets the file used for profile picture uploads
     * 
     * @param UploadedFile $file
     * @return object
     */
    public function setFile(UploadedFile $file = null)
    {
        // set the value of the holder
        $this->file = $file;
        // check if we have an old image path
        if (isset($this->path)) {
            // store the old name to delete after the update
            $this->t = $this->profilePicturePath;
            $this->tempPath = null;
        } else {
            $this->path = 'initial';
        }

        return $this;
    }

    /**
     * Get the file used for profile picture uploads
     * 
     * @return UploadedFile
     */
    public function getFile()
    {

        return $this->file;
    }

    /**
     * @ORM\PrePersist() 
     * @ORM\PreUpdate() 
     */
    public function preUpload()
    {
        if (null !== $this->getFile()) {
            // a file was uploaded
            // generate a unique filename
            $filename = $this->generateRandomProfilePictureFilename();
            $this->setPath($filename . '.' . $this->getFile()->guessExtension());
        }
    }

    /**
     * Generates a 32 char long random filename
     * 
     * @return string
     */
    public function generateRandomProfilePictureFilename()
    {
        $count = 0;
        do {
            $generator = new SecureRandom();
            $random = $generator->nextBytes(16);
            $randomString = bin2hex($random);
            $count++;
        } while (file_exists($this->getUploadRootDir() . '/' . $randomString . '.' . $this->getFile()->guessExtension()) && $count < 50);

        return $randomString;
    }

    /**
     * @ORM\PostPersist() 
     * @ORM\PostUpdate() 
     */
    public function upload()
    {
        if (null === $this->file) {
            return;
        }
        $this->getFile()->move($this->getUploadRootDir(), $this->getPath());

        if (isset($this->tempPath) && file_exists($this->getUploadRootDir() . '/' . $this->tempPath)) {
            // delete the old image
            unlink($this->getUploadRootDir() . '/' . $this->tempPath);
            // clear the temp image path
            $this->tempPath = null;
        }
        $this->file = null;
    }

    /**
     * @ORM\PreRemove()
     */
    public function storeFilenameForRemove()
    {
        $this->filenameForRemove = $this->getAbsolutePath();
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        if ($this->filenameForRemove) {
            unlink($this->filenameForRemove);
        }
    }

    public function getAbsolutePath()
    {
        return null === $this->path ? null : $this->getUploadRootDir() . '/' . $this->path;
    }

    public function getWebPath()
    {
        return null === $this->path ? null : $this->getUploadDir() . '/' .
                $this->id . '/' . $this->path;
    }

    protected function getUploadRootDir($type = 'profilePicture')
    {
        return __DIR__ . '/../../../../web/' . $this->getUploadDir($type);
    }

    protected function getUploadDir($type = 'profilePicture')
    {
        return 'uploads/user/profilepics';
    }

    /**
     * Get the web path for the user
     * 
     * @return string
     */
    public function getWebProfilePicturePath()
    {

        return '/' . $this->getUploadDir() . '/' . $this->getPath();
    }

    /*     * ************************************************************** */

    public function __construct()
    {
        parent::__construct();
        $this->entities = new ArrayCollection();
        $this->todos = new ArrayCollection();
        $this->messages = new ArrayCollection();
        $this->events = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set last_name
     *
     * @param string $lastName
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->last_name = $lastName;

        return $this;
    }

    /**
     * Get last_name
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Set admin
     *
     * @param boolean $admin
     * @return User
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;

        return $this;
    }

    /**
     * Get admin
     *
     * @return boolean 
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * Set departement
     *
     * @param string $departement
     * @return User
     */
    public function setDepartement($departement)
    {
        $this->departement = $departement;

        return $this;
    }

    /**
     * Get departement
     *
     * @return string 
     */
    public function getDepartement()
    {
        return $this->departement;
    }

    /**
     * Set gps_tracking
     *
     * @param string $gpsTracking
     * @return User
     */
    public function setGpsTracking($gpsTracking)
    {
        $this->gps_tracking = $gpsTracking;

        return $this;
    }

    /**
     * Get gps_tracking
     *
     * @return string 
     */
    public function getGpsTracking()
    {
        return $this->gps_tracking;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return User
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set mphone
     *
     * @param string $mphone
     * @return User
     */
    public function setMphone($mphone)
    {
        $this->mphone = $mphone;

        return $this;
    }

    /**
     * Get mphone
     *
     * @return string 
     */
    public function getMphone()
    {
        return $this->mphone;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return User
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set zip_code
     *
     * @param integer $zipCode
     * @return User
     */
    public function setZipCode($zipCode)
    {
        $this->zip_code = $zipCode;

        return $this;
    }

    /**
     * Get zip_code
     *
     * @return integer 
     */
    public function getZipCode()
    {
        return $this->zip_code;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return User
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return User
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set company_name
     *
     * @param string $companyName
     * @return User
     */
    public function setCompanyName($companyName)
    {
        $this->company_name = $companyName;

        return $this;
    }

    /**
     * Get company_name
     *
     * @return string 
     */
    public function getCompanyName()
    {
        return $this->company_name;
    }

    /**
     * Set position
     *
     * @param string $position
     * @return User
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**

      /**
     * Set first_name
     *
     * @param string $firstName
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->first_name = $firstName;

        return $this;
    }

    /**
     * Get first_name
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Add entities
     *
     * @param \ICGM2\PagesBundle\Entity\entities $entities
     * @return User
     */
    public function addEntity(\ICGM2\PagesBundle\Entity\entities $entities)
    {
        $this->entities[] = $entities;

        return $this;
    }

    /**
     * Remove entities
     *
     * @param \ICGM2\PagesBundle\Entity\entities $entities
     */
    public function removeEntity(\ICGM2\PagesBundle\Entity\entities $entities)
    {
        $this->entities->removeElement($entities);
    }

    /**
     * Get entities
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEntities()
    {
        return $this->entities;
    }

    /*     * ********************************************* */

    public function __toString()
    {
        return $this->first_name . " " . $this->last_name;
        ;
    }

    /**
     * Add todos
     *
     * @param \ICGM2\PagesBundle\Entity\todos $todos
     * @return User
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

    /**
     * Set path
     *
     * @param string $path
     * @return User
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Add messages
     *
     * @param \ICGM2\PagesBundle\Entity\messages $messages
     * @return User
     */
    public function addMessage(\ICGM2\PagesBundle\Entity\messages $messages)
    {
        $this->messages[] = $messages;

        return $this;
    }

    /**
     * Remove messages
     *
     * @param \ICGM2\PagesBundle\Entity\messages $messages
     */
    public function removeMessage(\ICGM2\PagesBundle\Entity\messages $messages)
    {
        $this->messages->removeElement($messages);
    }

    /**
     * Get messages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * Set language
     *
     * @param string $language
     * @return User
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string 
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Add events
     *
     * @param \ICGM2\PagesBundle\Entity\events $events
     * @return User
     */
    public function addEvent(\ICGM2\PagesBundle\Entity\events $events)
    {
        $this->events[] = $events;

        return $this;
    }

    /**
     * Remove events
     *
     * @param \ICGM2\PagesBundle\Entity\events $events
     */
    public function removeEvent(\ICGM2\PagesBundle\Entity\events $events)
    {
        $this->events->removeElement($events);
    }

    /**
     * Get events
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEvents()
    {
        return $this->events;
    }

}
