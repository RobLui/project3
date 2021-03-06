<?php

namespace Project3\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Entity
 * @ORM\Table(name="website_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     *
     * @ORM\ManyToMany(targetEntity="Group")
     * @ORM\JoinTable(name="website_user_group",
     * joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id", onDelete="CASCADE")},
     * inverseJoinColumns={@ORM\JoinColumn(name="group_id", referencedColumnName="id", onDelete="CASCADE")}
     * )
     */
    protected $groups;

    public function __construct()
    {
        parent::__construct();
        $this->setEnabled(true);
        $this->roles = array("ROLE_USER" => "ROLE_USER");
    }

    public function isAdmin()
    {
        return in_array("ROLE_ADMIN", $this->getRoles());
    }

    public function getRoles()
    {
        $roles = parent::getRoles();
        return array_combine($roles, $roles);
    }
}
