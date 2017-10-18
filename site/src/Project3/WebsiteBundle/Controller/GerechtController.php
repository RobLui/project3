<?php

namespace Project3\WebsiteBundle\Controller;

use function GuzzleHttp\Psr7\str;
use Project3\WebsiteBundle\Entity\Account;
use Project3\WebsiteBundle\Entity\Gerecht;
use Project3\WebsiteBundle\Entity\User;
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
            ->findAll();
            ;
        $gerechten = $em->getRepository('Project3WebsiteBundle:Gerecht')
            ->findBy(
                array(),
                array('bereidingstijd' => 'DESC'),
                12,
                null
            )
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
                ), null,null,null );

        return $this->render('Project3WebsiteBundle:Gerechten:detail.html.twig',
            array(
                'gerecht' => $gerecht,
            ));
    }

    // TOON ALLE GERECHTEN OP BASIS VAN DE QUERY
    public function queryAction(Request $req)
    {
        $finder = $this->container->get('fos_elastica.finder.src.gerecht');

        $searchingput = $req->get('searchinput');
        $gerechten = $finder->find($searchingput);
        $ingredienten = $searchingput;

        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('Project3WebsiteBundle:Categorie')
            ->findAll()
        ;

        return $this->render('Project3WebsiteBundle:Gerechten:query.html.twig',
            array(
                'categories' => $categories,
                'gerechten' => $gerechten,
                'ingredienten' => $ingredienten
            ));
    }

    // TOON EEN SURPRISE GERECHT
    public function surpriseAction()
    {
        return $this->render('Project3WebsiteBundle:Gerechten:surprise.html.twig');
    }

    // SAVE GERECHT
    public function saveAction($id)
    {
        return $this->render('Project3WebsiteBundle:Gerechten:surprise.html.twig');
    }

    // PRINT GERECHT
    public function printAction($id)
    {
        return $this->render('Project3WebsiteBundle:Gerechten:surprise.html.twig');
    }

    // VERSTUUR GERECHT IN MAIL
    public function mailAction(Request $req, $id)
    {
        $account = $this->getDoctrine()->getRepository(Account::class);

        $em = $this->getDoctrine()->getManager();
        $gerecht = $em->getRepository('Project3WebsiteBundle:Gerecht')
            ->findOneBy(
                array(
                    "id" => $id,
                    'actief' => true
                ), null,null,null );

        $user = $this->get('security.context')->getToken()->getUser();
//        $user->getUsername();
        $accountname = $account->findOneByGebruikersnaam($user->getUsername());
        dump($accountname); die;

        $message = \Swift_Message::newInstance()
            ->setSubject(str($gerecht->getNaam()))
            ->setFrom($user)
            ->setTo($accountname)
            ->setBody(
                $this->renderView(
                    '@Project3Website/Gerechten/detail.html.twig',
                    array('gerecht' => $gerecht)
                )
            )
        ;
        $this->container->get('mailer')->send($message);

    }

}
