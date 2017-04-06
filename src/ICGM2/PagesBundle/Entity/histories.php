<?php

namespace ICGM2\PagesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * histories
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ICGM2\PagesBundle\Entity\historiesRepository")
 */
class histories {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="\ICGM2\UserBundle\Entity\user", inversedBy="histories")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;

    /**
     * @var integer
     *
     * @ORM\Column(name="feature_id", type="integer", nullable = true)
     */
    private $featureId;

    /**
     * @var string
     *
     * @ORM\Column(name="feature_name", type="string", length=255, nullable = true)
     */
    private $featureName;

    /**
     * @var string
     *
     * @ORM\Column(name="feature_type", type="string", length=255, nullable = true)
     */
    private $featureType;

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=255)
     */
    private $action;

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
    public function getId() {
        return $this->id;
    }

    /**
     * Set action
     *
     * @param string $action
     * @return histories
     */
    public function setAction($action) {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string 
     */
    public function getAction() {
        return $this->action;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return histories
     */
    public function setDate($date) {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Set featureId
     *
     * @param integer $featureId
     * @return histories
     */
    public function setFeatureId($featureId) {
        $this->featureId = $featureId;

        return $this;
    }

    /**
     * Get featureId
     *
     * @return integer 
     */
    public function getFeatureId() {
        return $this->featureId;
    }

    /**
     * Set featureName
     *
     * @param string $featureName
     * @return histories
     */
    public function setFeatureName($featureName) {
        $this->featureName = $featureName;

        return $this;
    }

    /**
     * Get featureName
     *
     * @return string 
     */
    public function getFeatureName() {
        return $this->featureName;
    }

    /**
     * Set featureType
     *
     * @param string $featureType
     * @return histories
     */
    public function setFeatureType($featureType) {
        $this->featureType = $featureType;

        return $this;
    }

    /**
     * Get featureType
     *
     * @return string 
     */
    public function getFeatureType() {
        return $this->featureType;
    }

    /**
     * Set user
     *
     * @param \ICGM2\UserBundle\Entity\user $user
     * @return histories
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

}
