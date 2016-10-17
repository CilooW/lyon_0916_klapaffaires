<?php

namespace KlapBundle\Entity;

/**
 * Integration_video
 */
class Integration_video
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


    public function __construct(){

        $this->addDate = new \DateTime();
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set iframe
     *
     * @param string $iframe
     *
     * @return Integration_video
     */
    public function setIframe($iframe)
    {
        $search = 'watch?v=';
        $replace = 'embed/';
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
     *
     * @return Integration_video
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
     *
     * @return Integration_video
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
     * @var \KlapBundle\Entity\category_video
     */
    private $video;


    /**
     * Set video
     *
     * @param \KlapBundle\Entity\category_video $video
     *
     * @return Integration_video
     */
    public function setVideo(\KlapBundle\Entity\category_video $video = null)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get video
     *
     * @return \KlapBundle\Entity\category_video
     */
    public function getVideo()
    {
        return $this->video;
    }
}
