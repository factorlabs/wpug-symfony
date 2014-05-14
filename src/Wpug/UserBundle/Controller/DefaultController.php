<?php

namespace Wpug\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('WpugUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
