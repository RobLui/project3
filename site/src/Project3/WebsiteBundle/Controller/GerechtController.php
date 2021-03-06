<?php

namespace Project3\WebsiteBundle\Controller;

use Project3\WebsiteBundle\Entity\Account;
use Project3\WebsiteBundle\Entity\Klaargemaakte_gerechten;
use Swift_Mailer;
use Swift_Message;
use Swift_SmtpTransport;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class GerechtController extends Controller
{
    // TOON ALLE GERECHTEN
    public function detailAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $klaargemaakt_gerecht = new Klaargemaakte_gerechten();
        $form = $this->createForm('Project3\WebsiteBundle\Form\Klaargemaakte_gerechtenType', $klaargemaakt_gerecht);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($klaargemaakt_gerecht);
            $em->flush();

            $request->getSession()
                ->getFlashBag()
                ->add('success', 'Dit gerecht werd toegevoegd aan je klaargemaakte gerechten!');
        }

        $gerecht = $em->getRepository('Project3WebsiteBundle:Gerecht')
            ->findOneBy(
                array(
                    "id" => $id,
                    'actief' => true
                ), null, null, null);

        return $this->render('Project3WebsiteBundle:Gerechten:detail.html.twig',
            array(
                'gerecht' => $gerecht,
                'form' => $form->createView(),
            ));
    }

    // TOON DETAIL GERECHT && TOEVOEGEN AAN KLAARGEMAAKTE GERECHTEN

    public function queryAction(Request $req)
    {
        $searchingput = $req->get('searchinput');
        if (!preg_match('#(?<=<)\w+(?=[^<]*?>)#', $searchingput)) {
            $gerechten = [];
        } else {
            $gerechten = [];
        }
        $ingredienten = $searchingput;

        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('Project3WebsiteBundle:Categorie')
            ->findAll();

        return $this->overzichtAction();
    }

    // TOON ALLE GERECHTEN OP BASIS VAN DE QUERY

    public function overzichtAction()
    {
        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('Project3WebsiteBundle:Categorie')
            ->findAll();;
        $gerechten = $em->getRepository('Project3WebsiteBundle:Gerecht')
            ->findBy(
                array(),
                array('bereidingstijd' => 'DESC'),
                12,
                null
            );

        return $this->render('Project3WebsiteBundle:Gerechten:index.html.twig',
            array(
                'categories' => $categories,
                'gerechten' => $gerechten
            ));
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
                ), null, null, null);

        $user = $this->get('security.context')->getToken()->getUser();
        $accountname = $user->getEmail();

        $transport = (new Swift_SmtpTransport('smtp.mailgun.org', 587))
            ->setUsername('postmaster@sandboxf055f8120319424b9fa2aa3e52cb83c1.mailgun.org')
            ->setPassword('aea6703953c7416cda54cbcdd3a731f3');

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
            );

        $result = $mailer->send($message);

        if ($result) {
            $req->getSession()
                ->getFlashBag()
                ->add('success', 'Het gerecht werd naar je e-mail verstuurd!');
        }

        $referer = $req->headers->get('referer');
        return $this->redirect($referer);
    }

}
