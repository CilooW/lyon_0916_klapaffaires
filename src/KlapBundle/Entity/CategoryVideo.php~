<?php

namespace KlapBundle\Entity;

use Cocur\Slugify\Slugify;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * CategoryVideo
 */
class CategoryVideo
{

    const SERVER_PATH_TO_IMAGE_FOLDER = 'uploads/categoryvideos';
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

    private $file;

    protected $integrationVideo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->integrationVideo = new \Doctrine\Common\Collections\ArrayCollection();
        $this->slug = new Slugify();

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


    public function setIntegrationVideo($integrationVideo)
    {
        if (count($integrationVideo) > 0) {
            foreach ($integrationVideo as $i) {
                $this->addIntegrationVideo($i);
            }
        }
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
        $this->integrationVideo[] = $integrationVideo;

        return $this;
    }

    public function addIntegrationVide(\KlapBundle\Entity\IntegrationVideo $integrationVide)
    {
        $integrationVide->setVideo($this);
        $this->integrationVideo->add($integrationVide);
    }

    /**
     * Remove integrationVideo
     *
     * @param \KlapBundle\Entity\IntegrationVideo $integrationVideo
     */
    public function removeIntegrationVideo(\KlapBundle\Entity\IntegrationVideo $integrationVideo)
    {
        $this->integrationVideo->removeElement($integrationVideo);
    }

    /**
     * Get integrationVideo
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIntegrationVideo()
    {
        return $this->integrationVideo;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */


    /**
     * @var \DateTime
     */
    private $updated;


    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;
    }

    public function getFile()
    {
        return $this->file;
    }
    public function upload()
    {
        if(null === $this->getFile())
        {
            return;
        }

        $this->getFile()->move(
            CategoryVideo::SERVER_PATH_TO_IMAGE_FOLDER,
            $this->getFile()->getClientOriginalName()
        );

        $this->picture = $this->getFile()->getClientOriginalName();

        $this->setFile(null);
    }

    public function lifecycleFileUpload()
    {
        $this->upload();
    }

    public function refreshUpdate()
    {
        $this->setUpdated(new \DateTime('now'));
    }

    private function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }
    /**
     * @var string
     */
    private $slug;


    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return CategoryVideo
     */
    public function setSlug($slug)
    {

        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }
}
