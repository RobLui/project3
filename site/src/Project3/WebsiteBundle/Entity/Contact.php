<?php

namespace Project3\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contact
 *
 * @ORM\Table(name="contact")
 * @ORM\Entity(repositoryClass="Project3\WebsiteBundle\Repository\ContactRepository")
 */
class Contact
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * Many contacts have One User.
     * @ORM\ManyToOne(targetEntity="Project3\WebsiteBundle\Entity\User", inversedBy="contacts")
     * @ORM\JoinColumn(name="contact_id", referencedColumnName="id")
     */
    private $usercontact;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Contact
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set usercontact
     *
     * @param \Project3\WebsiteBundle\Entity\User $usercontact
     *
     * @return Contact
     */
    public function setUsercontact(\Project3\WebsiteBundle\Entity\User $usercontact = null)
    {
        $this->usercontact = $usercontact;

        return $this;
    }

    /**
     * Get usercontact
     *
     * @return \Project3\WebsiteBundle\Entity\User
     */
    public function getUsercontact()
    {
        return $this->usercontact;
    }

    public function  __toString()
    {
        return (string)$this->usercontact;
    }

}