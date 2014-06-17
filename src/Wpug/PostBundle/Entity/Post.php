<?php

namespace Wpug\PostBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */ 
class Post
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $body;
    /**
     * @var boolean
     */
    private $private;


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
     * Set title
     *
     * @param string $title
     * @return Post
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set body
     *
     * @param string $body
     * @return Post
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string 
     */
    public function getBody()
    {
        return $this->body;
    }
    /**
     * Get isPrivate
     *
     * @return bool 
     */
    public function isPrivate()
    {
        return $this->private;
    }
    /**
     * Set isPrivate
     *
     * @return bool 
     */
    public function setPrivate($private)
    {
        $this->private = $private;
        
        return $this;
    }
    /**
     * @var \Wpug\PostBundle\Entity\Category
     */
    private $category;


    /**
     * Set category
     *
     * @param \Wpug\PostBundle\Entity\Category $category
     * @return Post
     */
    public function setCategory(\Wpug\PostBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Wpug\PostBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }
    public function __toString()
    {
        return $this->title;
    }
    /**
     * @ORM\PreUpdate()
     */
    public function setCreatedAtValue()
    {
        return;
    }
}
