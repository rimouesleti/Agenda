<?php

namespace ICGM2\PagesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * event_history
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ICGM2\PagesBundle\Entity\eventHistoryRepository")
 */
class eventHistory {
      /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="\ICGM2\UserBundle\Entity\user", inversedBy="eventHistory")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;

    /**
     * @ORM\ManyToOne(targetEntity="\ICGM2\PagesBundle\Entity\events", inversedBy="eventHistory")
     * @ORM\JoinColumn(name="event_id", referencedColumnName="id")
     */
    protected $event;

    

    /**
     * @var string
     *
     * @ORM\Column(name="status1", type="string", length=255, nullable = true)
     */
    private $status1;

    /**
     * @var string
     *
     * @ORM\Column(name="status2", type="string", length=255)
     */
    private $status2;

     /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_date1", type="datetime")
     */
    private $startDate1;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date1", type="datetime")
     */
    private $endDate1;

    
     /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_date2", type="datetime")
     */
    private $startDate2;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date2", type="datetime")
     */
    private $endDate2;

    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    public function __construct() {
        $this->date = new \DateTime();
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
     * Set status1
     *
     * @param string $status1
     * @return eventHistory
     */
    public function setStatus1($status1)
    {
        $this->status1 = $status1;

        return $this;
    }

    /**
     * Get status1
     *
     * @return string 
     */
    public function getStatus1()
    {
        return $this->status1;
    }

    /**
     * Set status2
     *
     * @param string $status2
     * @return eventHistory
     */
    public function setStatus2($status2)
    {
        $this->status2 = $status2;

        return $this;
    }

    /**
     * Get status2
     *
     * @return string 
     */
    public function getStatus2()
    {
        return $this->status2;
    }

    /**
     * Set startDate1
     *
     * @param \DateTime $startDate1
     * @return eventHistory
     */
    public function setStartDate1($startDate1)
    {
        $this->startDate1 = $startDate1;

        return $this;
    }

    /**
     * Get startDate1
     *
     * @return \DateTime 
     */
    public function getStartDate1()
    {
        return $this->startDate1;
    }

    /**
     * Set endDate1
     *
     * @param \DateTime $endDate1
     * @return eventHistory
     */
    public function setEndDate1($endDate1)
    {
        $this->endDate1 = $endDate1;

        return $this;
    }

    /**
     * Get endDate1
     *
     * @return \DateTime 
     */
    public function getEndDate1()
    {
        return $this->endDate1;
    }

    /**
     * Set startDate2
     *
     * @param \DateTime $startDate2
     * @return eventHistory
     */
    public function setStartDate2($startDate2)
    {
        $this->startDate2 = $startDate2;

        return $this;
    }

    /**
     * Get startDate2
     *
     * @return \DateTime 
     */
    public function getStartDate2()
    {
        return $this->startDate2;
    }

    /**
     * Set endDate2
     *
     * @param \DateTime $endDate2
     * @return eventHistory
     */
    public function setEndDate2($endDate2)
    {
        $this->endDate2 = $endDate2;

        return $this;
    }

    /**
     * Get endDate2
     *
     * @return \DateTime 
     */
    public function getEndDate2()
    {
        return $this->endDate2;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return eventHistory
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set user
     *
     * @param \ICGM2\UserBundle\Entity\user $user
     * @return eventHistory
     */
    public function setUser(\ICGM2\UserBundle\Entity\user $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \ICGM2\UserBundle\Entity\user 
     */
    public function getUser()
    {
        return $this->user;
    }


    /**
     * Set event
     *
     * @param \ICGM2\PagesBundle\Entity\events $event
     * @return eventHistory
     */
    public function setEvent(\ICGM2\PagesBundle\Entity\events $event = null)
    {
        $this->event = $event;

        return $this;
    }

    /**
     * Get event
     *
     * @return \ICGM2\PagesBundle\Entity\events 
     */
    public function getEvent()
    {
        return $this->event;
    }
}
