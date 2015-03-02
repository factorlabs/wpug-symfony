<?php

namespace Wpug\PostBundle\Entity;

// use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 */
class SearchIndex
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $word;
    
    /**
     * @var integer
     */
    private $post;

    /**
     * Set word
     *
     * @param string $word
     * @return SearchIndex
     */
    public function setWord($word)
    {
        $this->word = $word;

        return $this;
    }

    /**
     * Get word
     *
     * @return string 
     */
    public function getWord()
    {
        return $this->word;
    }

    /**
     * Get id
     *
     * @return guid 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set post
     *
     * @param \Wpug\PostBundle\Entity\Post $post
     * @return SearchIndex
     */
    public function setPost(\Wpug\PostBundle\Entity\Post $post = null)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * Get post
     *
     * @return \Wpug\PostBundle\Entity\Post 
     */
    public function getPost()
    {
        return $this->post;
    }
}
