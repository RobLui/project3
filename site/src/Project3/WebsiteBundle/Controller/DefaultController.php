<?php

namespace Project3\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render('Project3WebsiteBundle:Default:index.html.twig');
    }

    public function contactAction()
    {
        return $this->render('Project3WebsiteBundle:Account:instellingen.html.twig');
    }

}
