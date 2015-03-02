<?php
// @expression-language
namespace Wpug\PostBundle\Model;

class Customer
{
    private $account;
    public function __construct(Account $account)
    {
        $this->account = $account;
    }
    function setAccount($account)
    {
        $this->account = $account;
    }
    function getAccount()
    {
        return $this->account;
    }
}
