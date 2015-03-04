<?php
namespace Wpug\PostBundle\EventListener;

use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpFoundation\RedirectResponse;

class LegacyUrlRedirect
{
    private $router;
    private $container;

    public function __construct($router, $container)
    {
        $this->router = $router;
        $this->container = $container;
    }    

    public function onKernelRequest(GetResponseEvent $event)
    {
        
        $path = $this->container->get('request')->getPathInfo();
        if(strpos($path, 'news') > 0) {
            $event->setResponse(new RedirectResponse($this->router->generate('tweet')));
        }
    }
}
