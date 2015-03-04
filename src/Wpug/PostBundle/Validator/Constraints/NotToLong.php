<?php
namespace Wpug\PostBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 * @validation
 */
class NotToLong extends Constraint
{
    public $message = 'The string "%string%" is to long.';
    public $length = 10;
    public function validatedBy()
    {
	    return get_class($this).'Validator';
    }
} 
