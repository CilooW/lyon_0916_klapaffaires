<?php

namespace KlapBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Testimony
 */
class Testimony
{
    const SERVER_PATH_TO_IMAGE_FOLDER = 'uploads/wpictures';
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $wName;

    /**
     * @var string
     */
    private $wFirstname;

    /**
     * @var string
     */
    private $wDescription;

    /**
     * @var string
     */
    private $wPicturePath;

    private $file;

    private $updated;

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
     * Set wName
     *
     * @param string $wName
     * @return Testimony
     */
    public function setWName($wName)
    {
        $this->wName = $wName;

        return $this;
    }

    /**
     * Get wName
     *
     * @return string 
     */
    public function getWName()
    {
        return $this->wName;
    }

    /**
     * Set wFirstname
     *
     * @param string $wFirstname
     * @return Testimony
     */
    public function setWFirstname($wFirstname)
    {
        $this->wFirstname = $wFirstname;

        return $this;
    }

    /**
     * Get wFirstname
     *
     * @return string 
     */
    public function getWFirstname()
    {
        return $this->wFirstname;
    }

    /**
     * Set wDescription
     *
     * @param string $wDescription
     * @return Testimony
     */
    public function setWDescription($wDescription)
    {
        $this->wDescription = $wDescription;

        return $this;
    }

    /**
     * Get wDescription
     *
     * @return string 
     */
    public function getWDescription()
    {
        return $this->wDescription;
    }

    /**
     * Set wPicturePath
     *
     * @param string $wPicturePath
     * @return Testimony
     */
    public function setWPicturePath($wPicturePath)
    {
        $this->wPicturePath = $wPicturePath;

        return $this;
    }

    /**
     * Get wPicturePath
     *
     * @return string 
     */
    public function getWPicturePath()
    {
        return $this->wPicturePath;
    }




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
            Testimony::SERVER_PATH_TO_IMAGE_FOLDER,
            $this->getFile()->getClientOriginalName()
        );

        $this->wPicturePath = $this->getFile()->getClientOriginalName();

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

    /**
     * @var \DateTime
     */


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
}
