<?php

namespace KlapBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoryVideo
 */
class CategoryVideo
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
     * @var string
     */
    private $shortDesc;

    /**
     * @var string
     */
    private $longDesc;

    /**
     * @var string
     */
    private $picture;

    /**
     * @var string
     */
    private $categoryTitle;


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
     * Set category
     *
     * @param string $category
     * @return CategoryVideo
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
     * Set shortDesc
     *
     * @param string $shortDesc
     * @return CategoryVideo
     */
    public function setShortDesc($shortDesc)
    {
        $this->shortDesc = $shortDesc;

        return $this;
    }

    /**
     * Get shortDesc
     *
     * @return string 
     */
    public function getShortDesc()
    {
        return $this->shortDesc;
    }

    /**
     * Set longDesc
     *
     * @param string $longDesc
     * @return CategoryVideo
     */
    public function setLongDesc($longDesc)
    {
        $this->longDesc = $longDesc;

        return $this;
    }

    /**
     * Get longDesc
     *
     * @return string 
     */
    public function getLongDesc()
    {
        return $this->longDesc;
    }

    /**
     * Set picture
     *
     * @param string $picture
     * @return CategoryVideo
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
     * @return CategoryVideo
     */
    public function setCategoryTitle($categoryTitle)
    {
        $this->categoryTitle = $categoryTitle;

        return $this;
    }

    /**
     * Get categoryTitle
     *
     * @return string 
     */
    public function getCategoryTitle()
    {
        return $this->categoryTitle;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $integration_video;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->integration_video = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add integrationVideo
     *
     * @param \KlapBundle\Entity\IntegrationVideo $integrationVideo
     *
     * @return CategoryVideo
     */
    public function addIntegrationVideo(\KlapBundle\Entity\IntegrationVideo $integrationVideo)
    {
        $this->integration_video[] = $integrationVideo;

        return $this;
    }

    /**
     * Remove integrationVideo
     *
     * @param \KlapBundle\Entity\IntegrationVideo $integrationVideo
     */
    public function removeIntegrationVideo(\KlapBundle\Entity\IntegrationVideo $integrationVideo)
    {
        $this->integration_video->removeElement($integrationVideo);
    }

    /**
     * Get integrationVideo
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIntegrationVideo()
    {
        return $this->integration_video;
    }
}