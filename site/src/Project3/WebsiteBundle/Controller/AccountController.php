<?php

namespace Project3\WebsiteBundle\Controller;

use Elastica\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AccountController extends Controller
{
    // INSTELLINGEN
    public function instellingenAction()
    {
        $contact = $this->getDoctrine()
            ->getManager()
            ->getRepository('Project3WebsiteBundle:Contact')
            ->find(1);
        $email = $contact->getEmail();
        return $this->render('Project3WebsiteBundle:Account:instellingen.html.twig',array(
               "email" => $email,
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
