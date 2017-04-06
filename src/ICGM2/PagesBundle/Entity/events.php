<?php

namespace ICGM2\PagesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JsonSerializable;

/**
 * events
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ICGM2\PagesBundle\Entity\eventsRepository")
 */
class events implements JsonSerializable
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable = true, options={"default" = "0"})
     */
    private $active;

    /**
     * @ORM\ManyToMany(targetEntity="\ICGM2\UserBundle\Entity\user", inversedBy="events")
     */
    protected $user;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=255)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="datetime")
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="datetime")
     */
    private $endDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="callback", type="boolean", nullable = true)
     */
    private $callback;

    /**
     * @var boolean
     *
     * @ORM\Column(name="perso", type="boolean", nullable = true)
     */
    private $perso;

    /**
     * @var string
     *
     * @ORM\Column(name="qualification", type="string", length=255, nullable = true)
     */
    private $qualification;

    /**
     * @ORM\ManyToOne(targetEntity="entities", inversedBy="events" )
     * @ORM\JoinColumn(name="entity_id", referencedColumnName="id" )
     */
    protected $entity;

    /**
     * @ORM\ManyToOne(targetEntity="location", inversedBy="events" )
     * @ORM\JoinColumn(name="location_id", referencedColumnName="id" )
     */
    protected $location;

    /**
     * @var string
     *
     * @ORM\Column(name="position", type="string", length=255, nullable = true)
     */
    private $position;

    /**
     * Get id
     *
     * @return integer 
     */

    /**
     * @ORM\OneToMany(targetEntity="eventHistory", mappedBy="event", cascade={"remove"})
     * @ORM\OrderBy({"date" = "DESC", "id" = "DESC"})
     */
    protected $eventHistory;

    public function getId()
    {
        return $this->id;
    }

    /**
     * Set subject
     *
     * @param string $subject
     * @return events
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return events
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return events
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return events
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime 
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return events
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime 
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set callback
     *
     * @param boolean $callback
     * @return events
     */
    public function setCallback($callback)
    {
        $this->callback = $callback;

        return $this;
    }

    /**
     * Get callback
     *
     * @return boolean 
     */
    public function getCallback()
    {
        return $this->callback;
    }

    /**
     * Set entity
     *
     * @param \ICGM2\PagesBundle\Entity\entities $entity
     * @return events
     */
    public function setEntity(\ICGM2\PagesBundle\Entity\entities $entity = null)
    {
        $this->entity = $entity;

        return $this;
    }

    /**
     * Get entity
     *
     * @return \ICGM2\PagesBundle\Entity\entities 
     */
    public function getEntity()
    {
        return $this->entity;
    }

    public function __toString()
    {
        return $this->startDate;

        ;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
        $this->eventHistory = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add user
     *
     * @param \ICGM2\UserBundle\Entity\user $user
     * @return events
     */
    public function addUser(\ICGM2\UserBundle\Entity\user $user)
    {
        $this->user[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \ICGM2\UserBundle\Entity\user $user
     */
    public function removeUser(\ICGM2\UserBundle\Entity\user $user)
    {
        $this->user->removeElement($user);
    }

    /**
     * Get user
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return events
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set location
     *
     * @param \ICGM2\PagesBundle\Entity\location $location
     * @return events
     */
    public function setLocation(\ICGM2\PagesBundle\Entity\location $location = null)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return \ICGM2\PagesBundle\Entity\location 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return events
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set perso
     *
     * @param boolean $perso
     * @return events
     */
    public function setPerso($perso)
    {
        $this->perso = $perso;

        return $this;
    }

    /**
     * Get perso
     *
     * @return boolean 
     */
    public function getPerso()
    {
        return $this->perso;
    }

    /**
     * Set qualification
     *
     * @param string $qualification
     * @return events
     */
    public function setQualification($qualification)
    {
        $this->qualification = $qualification;

        return $this;
    }

    /**
     * Get qualification
     *
     * @return string 
     */
    public function getQualification()
    {
        return $this->qualification;
    }

    /**
     * Add eventHistory
     *
     * @param \ICGM2\PagesBundle\Entity\eventHistory $eventHistory
     * @return events
     */
    public function addEventHistory(\ICGM2\PagesBundle\Entity\eventHistory $eventHistory)
    {
        $this->eventHistory[] = $eventHistory;

        return $this;
    }

    /**
     * Remove eventHistory
     *
     * @param \ICGM2\PagesBundle\Entity\eventHistory $eventHistory
     */
    public function removeEventHistory(\ICGM2\PagesBundle\Entity\eventHistory $eventHistory)
    {
        $this->eventHistory->removeElement($eventHistory);
    }

    /**
     * Get eventHistory
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEventHistory()
    {
        return $this->eventHistory;
    }

    /**
     * Set position
     *
     * @param string $position
     * @return events
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

    public function jsonSerialize()
    {
        return array(
            'subject' => $this->subject,
            'startDate' => $this->startDate,
            'endDate' => $this->endDate,
            'position' => $this->position,
        );
    }

}
