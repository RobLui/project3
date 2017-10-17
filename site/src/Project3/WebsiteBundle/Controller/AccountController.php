<?php

namespace Project3\WebsiteBundle\Controller;

use Project3\WebsiteBundle\Entity\Contact;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AccountController extends Controller
{

    public function instellingenAction()
    {
        $em = $this->getDoctrine()->getManager();

        $contacts = $em->getRepository('Project3WebsiteBundle:Contact')->findAll();
        return $this->render('Project3WebsiteBundle:Account:instellingen.html.twig',array(
            "contacts" => $contacts,
        ));

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
