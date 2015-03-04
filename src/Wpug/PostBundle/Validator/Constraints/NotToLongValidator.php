<?php
namespace Wpug\PostBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * @Annotation
 * @validation
 */
class NotToLongValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        if (strlen($value) > $constraint->length) {
            // If you're using the new 2.5 validation API (you probably are!)
            $this->context->buildViolation($constraint->message)
                ->setParameter('%string%', $value)
                ->addViolation();
        }
    }
} 
