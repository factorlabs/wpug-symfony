<?php

namespace Wpug\PostBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('WpugPostBundle:Default:index.html.twig', array('name' => $name));
    }
}
