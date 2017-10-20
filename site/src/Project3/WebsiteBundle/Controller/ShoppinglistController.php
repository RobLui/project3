<?php

namespace Project3\WebsiteBundle\Controller;

use Project3\WebsiteBundle\Entity\Shoppinglijst;
use Project3\WebsiteBundle\Form\ShoppinglijstType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ShoppinglistController extends Controller
{

    public function addToShoppinglistAction(Request $request)
    {
//        $manager = $this->container->get('doctrine')->getManager();
//        $shoppinglist = new Shoppinglijst();
//        $form = $this->container->get('form.factory')->create(ShoppinglijstType::class, $shoppinglist,array());
//        if ($request->isMethod("POST")) {
//
//            $form->handleRequest($request);
////            if ($form->isSubmitted() && $form->isValid()) {
//                $manager->persist($shoppinglist);
//                $manager->flush();
////            }
////            dump($form); die;
//
//            dump($form->getData()); die;
//        }
        return $this->render('@Project3Website/Account/shoppinglijstjes.html.twig');
    }
}
