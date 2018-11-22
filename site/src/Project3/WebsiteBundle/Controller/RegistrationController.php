<?php

namespace Project3\WebsiteBundle\Controller;

use Project3\WebsiteBundle\Entity\User;
use Project3\WebsiteBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RegistrationController extends Controller
{
    public function registerAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $encoder = $this->get('security.password_encoder');
            $password = $encoder->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);

            $user->setRoles(array("ROLE_USER" => "ROLE_USER"));

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('project3_security_login');
        }

        return $this->render('@Project3Website/Security/register.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}


