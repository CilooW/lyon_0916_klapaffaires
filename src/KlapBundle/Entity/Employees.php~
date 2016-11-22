<?php

namespace KlapBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Employees
 */
class Employees
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $videoDescription;

    /**
     * @var string
     */
    private $videoUrl;


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
     * Set firstName
     *
     * @param string $firstName
     * @return Employees
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Employees
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set videoDescription
     *
     * @param string $videoDescription
     * @return Employees
     */
    public function setVideoDescription($videoDescription)
    {
        $this->videoDescription = $videoDescription;

        return $this;
    }

    /**
     * Get videoDescription
     *
     * @return string 
     */
    public function getVideoDescription()
    {
        return $this->videoDescription;
    }

    /**
     * Set videoUrl
     *
     * @param string $videoUrl
     * @return Employees
     */
    public function setVideoUrl($videoUrl)
    {
        $search = "watch?v=";
        $replace = "embed/";

        $this->videoUrl = str_replace($search, $replace, $videoUrl);

        return $this;
    }

    /**
     * Get videoUrl
     *
     * @return string 
     */
    public function getVideoUrl()
    {
        return $this->videoUrl;
    }
}
