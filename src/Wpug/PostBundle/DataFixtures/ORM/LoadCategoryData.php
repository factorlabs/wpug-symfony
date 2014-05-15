<?php
namespace Wpug\CategoryBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Wpug\PostBundle\Entity\Category;
use Coduo\PHPHumanizer\Number;

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
            $_category->setName(sprintf('%s Category', Number::ordinalize($i)));
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
