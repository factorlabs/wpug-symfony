<?php
namespace Wpug\CategoryBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Wpug\PostBundle\Entity\Category;

class LoadCategoryData implements FixtureInterface
{
    const TIMES = 10;
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $category = new Category();
        for ($i = 1; $i <= self::TIMES; $i++) {
            $_category = clone $category;
            $_category->setName(sprintf('%d_%s', $i, \uniqid('', true)));
            $manager->persist($_category);
        }
        $manager->flush();
    }
    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 2;
    }
}
