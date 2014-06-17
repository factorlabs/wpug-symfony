<?php
namespace Wpug\PostBundle\EventListener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use Wpug\PostBundle\Entity\Post;
// @doctrine @doctrine-listener
class SearchIndexer
{
    public function preUpdate(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        $entityManager = $args->getEntityManager();

        // perhaps you only want to act on some "Product" entity
        if ($entity instanceof Post) {
            $words = explode(' ', $entity->getTitle());
            var_dump($words); exit;
        }
    }
}