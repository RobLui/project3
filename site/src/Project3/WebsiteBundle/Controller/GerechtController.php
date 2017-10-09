<?php

namespace Project3\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class GerechtController extends Controller
{

    // TOON ALLE GERECHTEN
    public function overzichtAction()
    {
        return $this->render('Project3WebsiteBundle:Gerechten:index.html.twig');
    }

    // TOON DETAIL GERECHT
    public function detailAction($id)
    {
        return $this->render('Project3WebsiteBundle:Gerechten:detail.html.twig');
    }

    // TOON ALLE GERECHTEN OP BASIS VAN DE QUERY
    public function queryAction($query)
    {
        return $this->render('Project3WebsiteBundle:Gerechten:query.html.twig');
    }

    // TOON EEN SURPRISE GERECHT
    public function surpriseAction()
    {
        return $this->render('Project3WebsiteBundle:Gerechten:surprise.html.twig');
    }

}
