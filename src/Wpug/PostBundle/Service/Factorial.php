<?php
namespace Wpug\PostBundle\Service;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Factorial
 *
 * @author nobleprog
 */
class Factorial
{
    public function calculate($number)
    {       
        if ((int) $number < 0) {
            throw new \InvalidArgumentException('Argumnet should be natural number (including 0).');
        }
        if ($number === 0) {
            return 1;
        }
        return $number * $this->calculate($number - 1);
    }
}
