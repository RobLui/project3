<?php

namespace Project3\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render('Project3WebsiteBundle:Default:index.html.twig');
    }
    public function contactAction()
    {
        return $this->render('Project3WebsiteBundle:Account:instellingen.html.twig');
    }

    public function groupAction(Request $request, $slug = null)
    {
        $group = $this->container->get('doctrine')
            ->getManager()
            ->getRepository("Project3WebsiteBundle:Group")
            ->findOneBy(array("slug" => $slug));
        if (!$group) {
            throw  new NotFoundHttpException();
        }
        return $this->render('Project3WebsiteBundle:Default:group.html.twig',array(
            "group" => $group,
        ));
    }

}
