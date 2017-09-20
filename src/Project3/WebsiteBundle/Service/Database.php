<?php


namespace Project3\WebsiteBundle\Service;


use Doctrine\ORM\EntityManager;
use Project3\WebsiteBundle\Entity\Dummy;
use Project3\WebsiteBundle\Entity\User;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class Database
{

    /** @var ContainerInterface $container */
    protected $container;
    /** @var EntityManager $em */
    protected $em;
    /** @var  boolean $loggedIn */
    protected $isloggedIn = false;
    /** @var bool $isAdmin */
    protected $isAdmin = false;
    /** @var boolean $isDatabaseUser */
    protected $isDatabaseUser = false;
    /** @var User|null $user */
    protected $user;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        $this->em = $this->container->get('doctrine')->getManager();
        if ($this->container->get('security.token_storage')->getToken()) {
            $this->isloggedIn = true;
            $this->user = $this->container->get('security.token_storage')->getToken()->getUser();
            $this->isDatabaseUser = ($this->user instanceof User);
            if (!$this->isDatabaseUser) {
                //HARDCODED SUPER ADMIN
                $this->isAdmin = true;
            } elseif ($this->isDatabaseUser && $this->user->isAdmin()) {
                //DATABASE USER AND ROLE_ADMIN
                $this->isAdmin = true;
            }
        }
    }

    public function getGroups()
    {
        //NOT LOGGED IN
        if (!$this->isloggedIn) {
            return array();
        }
        //NOT ADMIN
        if ($this->isDatabaseUser && !$this->isAdmin) {
            return $this->user->getGroups();
        }
        //ADMIN
        return $this->em->getRepository("Project3WebsiteBundle:Group")->findAll();
    }

}