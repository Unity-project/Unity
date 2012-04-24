<?php

namespace Unity\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
* @ignore
*/
class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('UnityBlogBundle:Default:index.html.twig', array('name' => $name));
    }
}
