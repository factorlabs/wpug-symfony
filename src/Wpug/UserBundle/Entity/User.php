<?php

namespace Wpug\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

class User extends BaseUser
{
    protected $id;
    /*protected $pesel;
    public function setPesel($pesel)
    {
        $this->pesel = $pesel;
        
        return $this;
    }
    public function getPesel()
    {
        return $this->pesel;
    }*/
}
