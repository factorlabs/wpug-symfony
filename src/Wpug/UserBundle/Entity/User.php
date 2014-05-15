<?php

namespace Wpug\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

class User extends BaseUser
{
    protected $id;
    protected $apiKey;
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
        
        return $this;
    }
    public function getApiKey()
    {
        return $this->apiKey;
    }
}
