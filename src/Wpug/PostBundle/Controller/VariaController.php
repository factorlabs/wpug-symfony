<?php

namespace Wpug\PostBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\Common\Util\Debug;
use Wpug\PostBundle\Annotation\RequiresCredits;
use Symfony\Component\ExpressionLanguage\ExpressionLanguage;

class User
        {
            public $account;
            function getAccount() {
                return $account;
            }
        }
        class Account
        {
            public $ammount;
        }

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
    /**
     * Test Doctrine debug.
     *
     */
    public function testDoctrineDebugAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('WpugPostBundle:Post')->findAll();
        //Debug::dump($entities);
        //exit;
    }
    /**
     * @RequiresCredits(100)
     */
    public function expensiveAction()
    {
        // @annotation
        //die('123');
    }
    public function testCacheAction()
    {
        // @cache
        $response = new Response();
        $response->setMaxAge(5); //< 10 seconds! you can test this refreshing the page.
        $response->setSharedMaxAge(5);
        $response->setPublic();
 
        return $this->render('WpugPostBundle:Varia:testCache.html.twig', array('rand'=>rand()), $response); //this twig renders a random number to test that the response is actually cached.
 
    }
    public function testExpressionLanguageAction()
    {
        $language = new ExpressionLanguage();
        
        $user = new User();
        $account = new Account();
        $account->amount = 20000;
        $user->account = $account;
        
       $result = $language->evaluate(
            'user.account.amount > 10000',
            array(
                'user' => $user,
            )
        );
       //var_dump($result);
       //exit;

 
    }
}
