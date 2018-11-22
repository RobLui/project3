<?php

namespace Project3\WebsiteBundle\Controller;

use Project3\WebsiteBundle\Entity\Klaargemaakte_gerechten;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AccountController extends Controller
{
    // INSTELLINGEN
    public function instellingenAction()
    {
        $em = $this->getDoctrine()->getManager();

        $contacts = $em->getRepository('Project3WebsiteBundle:Contact')->findAll();
        return $this->render('Project3WebsiteBundle:Account:instellingen.html.twig', array(
            "contacts" => $contacts,
        ));
    }

    // SHOPPINGLIJSTJES
    public function shoppingLijstjesAction()
    {
        return $this->render('Project3WebsiteBundle:Account:shoppinglijstjes.html.twig');
    }

    // KLAARGEMAAKTE GERECHTEN
    public function klaargemaakteGerechtenAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $alle_klaargem_gerechten = $em
            ->getRepository('Project3WebsiteBundle:Klaargemaakte_gerechten')
            ->findBy(
                array(),
                array('datum' => 'DESC')
            );

        $klaargemaakt_gerecht = new Klaargemaakte_gerechten();
        $form = $this->createForm('Project3\WebsiteBundle\Form\Klaargemaakte_gerechtenType', $klaargemaakt_gerecht);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($klaargemaakt_gerecht);
            $em->flush();

            return $this->redirectToRoute('project3_account_klaargemaakte_gerechten',
                array(
                    'gerecht' => $alle_klaargem_gerechten
                ));
        }

        return $this->render('Project3WebsiteBundle:Account:klaargemaakte-gerechten.html.twig',
            array(
                'gerechten' => $alle_klaargem_gerechten,
                'form' => $form->createView(),
            ));
    }

}
