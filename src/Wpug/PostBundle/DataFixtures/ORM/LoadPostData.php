<?php
namespace Wpug\PostBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Wpug\PostBundle\Entity\Post;
use Coduo\PHPHumanizer\Number;

class LoadPostData implements FixtureInterface
{
    const TIMES = 10;
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $post = new Post();
        for ($i = 1; $i <= self::TIMES; $i++) {
            $_post = clone $post;
            $_post->setTitle(sprintf('%s Post', Number::ordinalize($i)));
            $_post->setBody(\md5(\uniqid('', true)));
            $_post->setPrivate((boolean) rand(0, 1));
            $manager->persist($_post);
        }
        $manager->flush();
    }
    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 1;
    }
}
