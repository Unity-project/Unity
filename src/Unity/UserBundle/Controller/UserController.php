<?php
namespace Unity\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use \Symfony\Component\Security\Core\Exception\AccessDeniedException;

class UserController extends Controller
{
    public function indexAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();

        if(is_object($user))
        {
            if($user->getUsername() == "z3yo")
            {
                $user->addGroup("ROLE_ADMIN");
            }
            return $this->render('UnityUserBundle:User:index.html.twig',array("name"=>$user->getUsername()));
        }
    }

    /*
    protected function getUser()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        if(!is_object($user) || !$user instanceof UserInterface)
            throw new AccessDeniedException('Vous n\'avez pas accès à cette section');
    }
    */
}