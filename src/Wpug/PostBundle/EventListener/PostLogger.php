<?php

namespace Wpug\PostBundle\EventListener;

use Symfony\Component\EventDispatcher\Event;
use Psr\Log\LoggerInterface;

use Wpug\PostBundle\Event\Post;

class PostLogger
{
    protected $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function onPostCreateEvent(Event $event)
    {  
        $this->logger->info(sprintf('Post "%s" has been updated.', $event->getPost()->getTitle()));
    }
}
