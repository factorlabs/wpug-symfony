<?php

namespace Wpug\PostBundle\Event;

use Symfony\Component\EventDispatcher\Event;
use Wpug\PostBundle\Entity\Post as Entity;

class Post extends Event
{
    protected $entity;

    public function __construct(Entity $entity)
    {
        $this->entity = $entity;
    }

    public function getPost()
    {
        return $this->entity;
    }
}
