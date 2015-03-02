<?php
namespace Wpug\PostBundle\EventListener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use Wpug\PostBundle\Entity\Post;
use Wpug\PostBundle\Entity\SearchIndex;
// @doctrine @doctrine-listener
class SearchIndexer
{
    public function postUpdate(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        $entityManager = $args->getEntityManager();

        // perhaps you only want to act on some "Post" entity
        if ($entity instanceof Post) {
            $query = $entityManager
                ->createQuery('DELETE FROM  WpugPostBundle:SearchIndex si WHERE si.post = ?1');
            $query->setParameter(1, $entity->getId());
            $query->execute();
            $words = explode(' ', $entity->getTitle());
            foreach ($words as $word) {
              $found = $entityManager
                ->getRepository('WpugPostBundle:SearchIndex')
                ->findOneBy(array('post' => $entity->getId(), 'word' => $word));
              if ($found == NULL) {
                $searchIndex = new SearchIndex();
                $searchIndex->setPost($entity);
                $searchIndex->setWord($word);
                $entityManager->persist($searchIndex);
                $entityManager->flush();
              }
            }
        }
    }
}
