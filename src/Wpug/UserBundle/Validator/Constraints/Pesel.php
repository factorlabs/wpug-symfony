<?php
namespace Wpug\PostBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

class Pesel extends Constraint
{
    public $message = 'The PESEL "%pesel%" is not valid.';
    public function validatedBy()
    {
        return get_class($this).'Validator';
    }
}