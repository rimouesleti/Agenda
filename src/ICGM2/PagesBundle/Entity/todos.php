<?php

namespace ICGM2\PagesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * todos
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ICGM2\PagesBundle\Entity\todosRepository")
 */
class todos {

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
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="datetime")
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="due_date", type="datetime")
     */
    private $dueDate;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="entities", inversedBy="todos", cascade={"remove"})
     * @ORM\JoinColumn(name="entity_id", referencedColumnName="id")
     */
    protected $entity;
     /**
     * @ORM\ManyToOne(targetEntity="\ICGM2\UserBundle\Entity\user", inversedBy="todos")
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
     * Set subject
     *
     * @param string $subject
     * @return todos
     */
    public function setSubject($subject) {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject() {
        return $this->subject;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return todos
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
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return todos
     */
    public function setStartDate($startDate) {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime 
     */
    public function getStartDate() {
        return $this->startDate;
    }

    /**
     * Set dueDate
     *
     * @param \DateTime $dueDate
     * @return todos
     */
    public function setDueDate($dueDate) {
        $this->dueDate = $dueDate;

        return $this;
    }

    /**
     * Get dueDate
     *
     * @return \DateTime 
     */
    public function getDueDate() {
        return $this->dueDate;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return todos
     */
    public function setStatus($status) {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus() {
        return $this->status;
    }


    /**
     * Set entity
     *
     * @param \ICGM2\PagesBundle\Entity\entities $entity
     * @return todos
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

   

    /**
     * Set user
     *
     * @param \ICGM2\UserBundle\Entity\user $user
     * @return todos
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
}
