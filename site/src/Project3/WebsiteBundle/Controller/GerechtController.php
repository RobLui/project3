<?php

namespace Project3\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class GerechtController extends Controller
{

    public function overzichtAction()
    {
        return $this->render('Project3WebsiteBundle:Gerechten:index.html.twig');
    }

    public function detailAction($id)
    {

    }

}
