<?php

namespace Project3\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PaginaControllerController extends Controller
{
    public function indexAction()
    {
        return $this->render('Project3WebsiteBundle:Pagina:index.html.twig',
            array(
            // ...
            )
        );
    }
}