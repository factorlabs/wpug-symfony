<?php
namespace Wpug\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadUserData implements FixtureInterface, ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * {@inheritDoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        
        $manipulator = $this->container->get('fos_user.util.user_manipulator');
        
        $manipulator->create('admin', 'admin123', 'admin@wpug.pl', true, true);
        
        //$user = $userManager->createUser();
        //$user->setUsername('admin');
        //$user->setEmail('admin@wpug.pl');

        //$userManager->updateUser($user);
    }
}
