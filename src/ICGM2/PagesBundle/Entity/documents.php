<?php

namespace ICGM2\PagesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * documents
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ICGM2\PagesBundle\Entity\documentsRepository")
 */
class documents
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
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer")
     */
    private $userId;

    /**
     * @var integer
     *
     * @ORM\Column(name="features_id", type="integer")
     */
    private $featuresId;

    /**
     * @var string
     *
     * @ORM\Column(name="features_name", type="string", length=255)
     */
    private $featuresName;

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=255)
     */
    private $filename;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;


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
     * Set userId
     *
     * @param integer $userId
     * @return documents
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set featuresId
     *
     * @param integer $featuresId
     * @return documents
     */
    public function setFeaturesId($featuresId)
    {
        $this->featuresId = $featuresId;

        return $this;
    }

    /**
     * Get featuresId
     *
     * @return integer 
     */
    public function getFeaturesId()
    {
        return $this->featuresId;
    }

    /**
     * Set featuresName
     *
     * @param string $featuresName
     * @return documents
     */
    public function setFeaturesName($featuresName)
    {
        $this->featuresName = $featuresName;

        return $this;
    }

    /**
     * Get featuresName
     *
     * @return string 
     */
    public function getFeaturesName()
    {
        return $this->featuresName;
    }

    /**
     * Set filename
     *
     * @param string $filename
     * @return documents
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string 
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return documents
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
     * Set description
     *
     * @param string $description
     * @return documents
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
}
