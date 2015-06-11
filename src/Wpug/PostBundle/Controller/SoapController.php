<?php

namespace Wpug\PostBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Varia controller.
 *
 */
class SoapController extends Controller
{

    public function indexAction()
    {
        $server = new \SoapServer(__DIR__.'/../Resources/config/soap/addition.wsdl');
        $server->setObject($this->get('wpug.factorial'));

        $response = new Response();
        $response->headers->set('Content-Type', 'text/xml; charset=ISO-8859-1');

        ob_start();
        $server->handle();
        $response->setContent(ob_get_clean());

        return $response;
    }
}
