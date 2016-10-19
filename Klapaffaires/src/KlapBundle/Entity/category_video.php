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
    /**
     * @var string
     */
    private $short_desc;

    /**
     * @var string
     */
    private $long_desc;

    /**
     * @var string
     */
    private $picture;

    /**
     * @var string
     */
    private $category_title;


    /**
     * Set shortDesc
     *
     * @param string $shortDesc
     *
     * @return category_video
     */
    public function setShortDesc($shortDesc)
    {
        $this->short_desc = $shortDesc;

        return $this;
    }

    /**
     * Get shortDesc
     *
     * @return string
     */
    public function getShortDesc()
    {
        return $this->short_desc;
    }

    /**
     * Set longDesc
     *
     * @param string $longDesc
     *
     * @return category_video
     */
    public function setLongDesc($longDesc)
    {
        $this->long_desc = $longDesc;

        return $this;
    }

    /**
     * Get longDesc
     *
     * @return string
     */
    public function getLongDesc()
    {
        return $this->long_desc;
    }

    /**
     * Set picture
     *
     * @param string $picture
     *
     * @return category_video
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set categoryTitle
     *
     * @param string $categoryTitle
     *
     * @return category_video
     */
    public function setCategoryTitle($categoryTitle)
    {
        $this->category_title = $categoryTitle;

        return $this;
    }

    /**
     * Get categoryTitle
     *
     * @return string
     */
    public function getCategoryTitle()
    {
        return $this->category_title;
    }
}
