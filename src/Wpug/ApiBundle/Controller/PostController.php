<?php  
namespace Wpug\ApiBundle\Controller;  

use FOS\RestBundle\Controller\FOSRestController;  
use FOS\RestBundle\Controller\Annotations as Rest;  

class PostController extends FOSRestController  
{     
    /**       
     * @Rest\Get("/posts/{id}")       
     * @Rest\View       
     */    
    public function getPostAction($id)     
    {      
     $em = $this->getDoctrine()->getManager();
     $post = $em->getRepository('WpugPostBundle:Post')->find($id);

     return array('post' => $post);
   }
   /**
    * @Rest\Get("/posts/get.{_format}")
    * @Rest\View
    */
   public function getPostsAction()
   {
       $em = $this->getDoctrine()->getManager();
       $posts = $em->getRepository('WpugPostBindle:Post')->findAll();

       return array('posts' => $posts);
   }
}