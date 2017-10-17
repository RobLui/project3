<?php

namespace Project3\WebsiteBundle\Controller;

use Project3\WebsiteBundle\Entity\Contact;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AccountController extends Controller
{

    public function instellingenAction(Request $req)
    {
        $em = $this->getDoctrine()->getManager();

        $contact = $em->getRepository('Project3WebsiteBundle:Contact')->find(1);
        return $this->render('Project3WebsiteBundle:Account:instellingen.html.twig',array(
            "contact" => $contact,
        ));

    }
    public function newContact(Request $req)
    {
        // Manager
        $em = $this->getDoctrine()->getManager();

        // Form
        $contact = new Contact();
        $form = $this->createForm('Project3\WebsiteBundle\Form\ContactType', $contact);
        $form->handleRequest($req);

        // POST
        if ($req->isMethod('POST'))
        {
            if($form->isSubmitted() && $form->isValid()) {
                $contact = $form->getData();
                $em->persist($contact);
                $em->flush();
            }
        }

        return $this->render('Project3WebsiteBundle:Account:instellingen.html.twig',array(
                "contact" => $contact,
                "form"  => $form->createView()
        ));

    }
    public function saveAction($email)
    {
        return $this->redirect("/account/instellingen");
    }

    // SHOPPINGLIJSTJES
    public function shoppingLijstjesAction()
    {
        return $this->render('Project3WebsiteBundle:Account:shoppinglijstjes.html.twig');
    }

    // KLAARGEMAAKTE GERECHTEN
    public function klaargemaakteGerechtenAction()
    {
        return $this->render('Project3WebsiteBundle:Account:klaargemaakte-gerechten.html.twig');
    }
}
