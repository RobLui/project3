<?php

namespace Project3\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends Controller
{
    public function loginAction(Request $request)
    {
        $authenticationUtils = $this->get('security.authentication_utils');
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        if ($error) {
            $error = array("message" => "Helaas zijn de juiste gegevens niet ingegeven, probeer opnieuw");
        }
        return $this->render('@Project3Website/Security/login.html.twig', array(
            'last_username' => $lastUsername,
            'error' => $error,
        ));
    }

    public function loginFormAction(Request $request, $class = null)
    {
        $authenticationUtils = $this->get('security.authentication_utils');
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
        return $this->render('@Project3Website/Security/login_form.html.twig', array(
            'last_username' => $lastUsername,
            'error' => $error,
            'class' => $class,
        ));
    }
}
