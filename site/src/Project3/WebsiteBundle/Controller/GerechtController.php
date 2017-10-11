<?php

namespace Project3\WebsiteBundle\Controller;

use Project3\WebsiteBundle\Entity\Gerecht;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class GerechtController extends Controller
{

    // TOON ALLE GERECHTEN
    public function overzichtAction()
    {
        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('Project3WebsiteBundle:Categorie')
            ->findAll()
            ;
        $gerechten = $em->getRepository('Project3WebsiteBundle:Gerecht')
            ->findAll()
            ;

        return $this->render('Project3WebsiteBundle:Gerechten:index.html.twig',
            array(
                'categories' => $categories,
                'gerechten' => $gerechten
            ));
    }

    // TOON DETAIL GERECHT
    public function detailAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();

        $gerecht = $em->getRepository('Project3WebsiteBundle:Gerecht')
            ->findOneBy(
                array(
                    "id" => $id,
                    'actief' => true
                ), null, null, null);

        return $this->render('Project3WebsiteBundle:Gerechten:detail.html.twig',
            array(
                'gerecht' => $gerecht,
            ));
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
