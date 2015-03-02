<?php
// @expression-language
namespace Wpug\PostBundle\Model;

class Account
{
    private $ammount;
    public function __construct($ammount)
    {
        $this->ammount = $ammount;
    }
    function getAmmount()
    {
        return $this->ammount;
    }
}
