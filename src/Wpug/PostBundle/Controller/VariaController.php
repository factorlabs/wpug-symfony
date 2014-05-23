<?php

namespace Wpug\PostBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Varia controller.
 *
 */
class VariaController extends Controller
{

    /**
     * Test translations.
     *
     */
    public function testTranslationAction(Request $request)
    {

        return $this->render('WpugPostBundle:Varia:testTranslation.html.twig', array(
            'name' => $request->get('name'),
        ));
    }
    /**
     * Test Twig extension.
     *
     */
    public function testTwigExtensionAction($price)
    {

        return $this->render('WpugPostBundle:Varia:testTwigExtension.html.twig', array(
            'price' => $price,
        ));
    }
    /**
     * Test Twig basics.
     *
     */
    public function testTwigBasicsAction()
    {
        $obj = new \stdClass();
        $obj->href = "http://wpug.pl";
        $obj->caption = "WPUG";

        return $this->render('WpugPostBundle:Varia:testTwigBasics.html.twig',array(
            'item' => $obj,
        ));
    }
    public function testFactorialAction($number)
    {
        $factorial = $this->get('wpug.factorial');
        
        return new Response($factorial->calculate($number));
    }
}
