<?php

namespace Project3\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\Group as BaseGroup;
use Project3\WebsiteBundle\Entity\Traits\SluggableTrait;

/**
 * @ORM\Entity
 * @ORM\Table(name="website_usergroup")
 * @ORM\HasLifecycleCallbacks
 */
class Group extends BaseGroup
{
    use SluggableTrait;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    public function __construct($name = null, $roles = array())
    {
        parent::__construct($name, $roles);
    }

    function __toString()
    {
        return $this->getName() ?: "New Group";
    }
}
