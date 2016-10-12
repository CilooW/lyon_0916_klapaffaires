<?php

namespace KlapBundle\Entity;

/**
 * category_video
 */
class category_video
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $category;


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
     * Set category
     *
     * @param string $category
     *
     * @return category_video
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $integration_videos;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->integration_videos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add integrationVideo
     *
     * @param \KlapBundle\Entity\Integration_video $integrationVideo
     *
     * @return category_video
     */
    public function addIntegrationVideo(\KlapBundle\Entity\Integration_video $integrationVideo)
    {
        $this->integration_videos[] = $integrationVideo;

        return $this;
    }

    /**
     * Remove integrationVideo
     *
     * @param \KlapBundle\Entity\Integration_video $integrationVideo
     */
    public function removeIntegrationVideo(\KlapBundle\Entity\Integration_video $integrationVideo)
    {
        $this->integration_videos->removeElement($integrationVideo);
    }

    /**
     * Get integrationVideos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIntegrationVideos()
    {
        return $this->integration_videos;
    }
}
