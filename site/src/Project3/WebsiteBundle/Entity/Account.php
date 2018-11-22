<?php

namespace Project3\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Account
 *
 * @ORM\Table(name="account")
 * @ORM\Entity(repositoryClass="Project3\WebsiteBundle\Repository\AccountRepository")
 */
class Account
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
     * @ORM\Column(name="gebruikersnaam", type="string", length=255)
     */
    private $gebruikersnaam;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    function __toString()
    {
        return (string)$this->gebruikersnaam ?: 'Nieuw Account';
    }

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
     * Get gebruikersnaam
     *
     * @return string
     */
    public function getGebruikersnaam()
    {
        return $this->gebruikersnaam;
    }

    /**
     * Set gebruikersnaam
     *
     * @param string $gebruikersnaam
     *
     * @return Account
     */
    public function setGebruikersnaam($gebruikersnaam)
    {
        $this->gebruikersnaam = $gebruikersnaam;

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
     * Set email
     *
     * @param string $email
     *
     * @return Account
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
}

