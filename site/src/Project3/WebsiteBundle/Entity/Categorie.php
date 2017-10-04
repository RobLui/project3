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
     * Many Categories have One Product.
     * @ORM\ManyToOne(targetEntity="Project3\WebsiteBundle\Entity\Gerecht", inversedBy="categorie")
     * @ORM\JoinColumn(name="categorie_id", referencedColumnName="id")
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
     * Set gerechten
     *
     * @param \Project3\WebsiteBundle\Entity\Gerecht $gerechten
     *
     * @return Categorie
     */
    public function setGerechten(\Project3\WebsiteBundle\Entity\Gerecht $gerechten = null)
    {
        $this->gerechten = $gerechten;

        return $this;
    }

    /**
     * Get gerechten
     *
     * @return \Project3\WebsiteBundle\Entity\Gerecht
     */
    public function getGerechten()
    {
        return $this->gerechten;
    }
}
