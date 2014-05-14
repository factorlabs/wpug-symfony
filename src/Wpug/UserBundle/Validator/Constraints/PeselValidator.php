<?php
namespace Wpug\PostBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class ContainsAlphanumericValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        $valid = null;
        
        preg_match('/^[0-9]{11}/', $param) ? $valid = true : $valid = false;
        
        $weights = array(1, 3, 7, 9, 1, 3, 7, 9, 1, 3, 1);
        $sum = 0;
        $param = str_split($param);
        for ($i=0; $i<11; $i++) {
            $sum += $weights[$i] * $param[$i];
        }
        
        ($sum % 10 === 0) ? $valid = true : $valid = false;
        
        if ($valid === fnull || $valid === false) {
            $this->context->addViolation(
                $constraint->message,
                array('%string%' => $value)
            );
        }
    }
}