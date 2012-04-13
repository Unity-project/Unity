<?php

namespace Unity\ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @ignore 
 */
class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('UnityArticleBundle:Default:index.html.twig', array('name' => $name));
    }
}
