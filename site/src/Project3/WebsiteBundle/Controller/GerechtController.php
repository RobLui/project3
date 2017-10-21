<?php

namespace Project3\WebsiteBundle\Controller;

use function GuzzleHttp\Psr7\str;
use Project3\WebsiteBundle\Entity\Account;
use Project3\WebsiteBundle\Entity\Gerecht;
use Project3\WebsiteBundle\Entity\Klaargemaakte_gerechten;
use Project3\WebsiteBundle\Entity\Shoppinglijst;
use Project3\WebsiteBundle\Entity\User;
use Project3\WebsiteBundle\Form\ShoppinglijstType;
use Swift_Image;
use Swift_Mailer;
use Swift_Message;
use Swift_SmtpTransport;
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

        $klaargemaakt_gerecht = new Klaargemaakte_gerechten();
        $form = $this->createForm('Project3\WebsiteBundle\Form\Klaargemaakte_gerechtenType', $klaargemaakt_gerecht);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($klaargemaakt_gerecht);
            $em->flush();
        }

        $gerecht = $em->getRepository('Project3WebsiteBundle:Gerecht')
            ->findOneBy(
                array(
                    "id" => $id,
                    'actief' => true
                ), null,null,null );

        return $this->render('Project3WebsiteBundle:Gerechten:detail.html.twig',
            array(
                'gerecht' => $gerecht,
                'form' => $form->createView()
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
        $accountname = $user->getEmail();

        $transport = (new Swift_SmtpTransport('smtp.mailgun.org', 587))
            ->setUsername('postmaster@sandboxf055f8120319424b9fa2aa3e52cb83c1.mailgun.org')
            ->setPassword('aea6703953c7416cda54cbcdd3a731f3')
        ;

        $mailer = new Swift_Mailer($transport);

        $message = (new Swift_Message($gerecht->getNaam()))
            ->setFrom(array($user->getEmail()))
            ->setTo(array($accountname))
            ->setCharset('utf-8')
            ->setContentType('text/html')
            ->setBody(
                $this->renderView(
                    '@Project3Website/Ingredienten/email.html.twig',
                    array(
                        'gerecht' => $gerecht,
                    )
                )
            )
        ;


        $result = $mailer->send($message);

        return $this->render('Project3WebsiteBundle:Account:shoppinglijstjes.html.twig');
    }

}
