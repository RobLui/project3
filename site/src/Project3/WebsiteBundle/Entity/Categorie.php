<?php

namespace Project3\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity(repositoryClass="Project3\WebsiteBundle\Repository\CategorieRepository")
 */
class Categorie
{

    /**
     * One Categorie has Many gerechten.
     * @ORM\OneToMany(targetEntity="Project3\WebsiteBundle\Entity\Gerecht", mappedBy="categorie")
     */
    private $gerechten;

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
     * @ORM\Column(name="naam", type="string", length=255)
     */
    private $naam;

    function __toString()
    {
        return (string)($this->naam);
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
     * Set naam
     *
     * @param string $naam
     *
     * @return Categorie
     */
    public function setNaam($naam)
    {
        $this->naam = $naam;

        return $this;
    }

    /**
     * Get naam
     *
     * @return string
     */
    public function getNaam()
    {
        return $this->naam;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->gerechten = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add gerechten
     *
     * @param \Project3\WebsiteBundle\Entity\Gerecht $gerechten
     *
     * @return Categorie
     */
    public function addGerechten(\Project3\WebsiteBundle\Entity\Gerecht $gerechten)
    {
        $this->gerechten[] = $gerechten;

        return $this;
    }

    /**
     * Remove gerechten
     *
     * @param \Project3\WebsiteBundle\Entity\Gerecht $gerechten
     */
    public function removeGerechten(\Project3\WebsiteBundle\Entity\Gerecht $gerechten)
    {
        $this->gerechten->removeElement($gerechten);
    }

    /**
     * Get gerechten
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGerechten()
    {
        return $this->gerechten;
    }
}
