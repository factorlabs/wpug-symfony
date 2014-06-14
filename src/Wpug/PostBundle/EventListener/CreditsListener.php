<?php
namespace Wpug\PostBundle\EventListener;

use Matthias\CreditsBundle\Annotation\RequiresCredits;
use Matthias\CreditsBundle\Exception\InsufficientCreditsException;
use Doctrine\Common\Annotations\Reader;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;

class CreditsListener
{
    private $annotationReader;

    public function __construct(Reader $annotationReader)
    {
    $this->annotationReader = $annotationReader;
    }
    public function onKernelController(FilterControllerEvent $event)
    {
        $controller = $event->getController();

        if (!is_array($controller)) {
            
            return;
        }
        $action = new \ReflectionMethod($controller[0], $controller[1]);
        $annotation = $this
            ->annotationReader
            ->getMethodAnnotation(
                $action,
                'Wpug\PostBundle\Annotation\RequiresCredits'
            );
        if (!($annotation instanceof RequiresCredits)) {
            return;
        }
        $amountOfCreditsRequired = $annotation->credits;
        // somehow determine if the user can afford to call this action
        //$userCanAffordThis = ...;

        if (!$userCanAffordThis) {
        // now what?
        //...
        }
    }
}
