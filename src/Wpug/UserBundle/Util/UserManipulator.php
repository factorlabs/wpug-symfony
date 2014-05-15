<?php
namespace Wpug\UserBundle\Util;

use FOS\UserBundle\Util\UserManipulator as BaseManipulator;
use FOS\UserBundle\Model\UserManagerInterface;

class UserManipulator extends BaseManipulator
{
    private $userManager;

    public function __construct(UserManagerInterface $userManager)
    {
        $this->userManager = $userManager;
    }
    
    public function create(
        $username,
        $password,
        $email,
        $active,
        $superadmin,
        $apiKey
    ) {
        $user = $this->userManager->createUser();
        $user->setUsername($username);
        $user->setEmail($email);
        $user->setPlainPassword($password);
        $user->setEnabled((Boolean) $active);
        $user->setSuperAdmin((Boolean) $superadmin);
        $user->setApiKey($apiKey);
        $this->userManager->updateUser($user);

        return $user;
    }
}
