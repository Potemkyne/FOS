<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('AppBundle:Default:index.html.twig');
           
    }
    /**
     * @Route("/userTest", name="user_test")
     */
    public function userTestAction(Request $request)
    {
        return $this->render('AppBundle:Default:index.html.twig');
           
    }
    /**
     * @Route("/adminTest", name="admin_test")
     */
    public function adminTestAction(Request $request)
    {
        return $this->render('AppBundle:Default:adminTest.html.twig');
           
    }
    /**
     * @Route("/superAdminTest", name="super_admin_test")
     */
    public function superAdminTestAction(Request $request)
    {
        return $this->render('AppBundle:Default:superAdminTest.html.twig');
           
    }
}
