<?php

namespace KlapBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IntegrationVideo
 */
class IntegrationVideo
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $iframe;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $addDate;


    private $video;


    public function __construct()
    {
        $this->addDate = new \DateTime("now");
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
     * Set iframe
     *
     * @param string $iframe
     * @return IntegrationVideo
     */
    public function setIframe($iframe)
    {
        $search = "watch?v=";
        $replace = "embed/";

        $this->iframe = str_replace($search, $replace, $iframe);

        return $this;
    }

    /**
     * Get iframe
     *
     * @return string 
     */
    public function getIframe()
    {
        return $this->iframe;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return IntegrationVideo
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
     * Set addDate
     *
     * @param \DateTime $addDate
     * @return IntegrationVideo
     */
    public function setAddDate($addDate)
    {
        $this->addDate = $addDate;

        return $this;
    }

    /**
     * Get addDate
     *
     * @return \DateTime 
     */
    public function getAddDate()
    {
        return $this->addDate;
    }



    /**
     * Set video
     *
     * @param \KlapBundle\Entity\CategoryVideo $video
     *
     * @return IntegrationVideo
     */
    public function setVideo(\KlapBundle\Entity\CategoryVideo $video = null)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get video
     *
     * @return \KlapBundle\Entity\CategoryVideo
     */
    public function getVideo()
    {
        return $this->video;
    }
}
