<?php

namespace Project3\WebsiteBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Ingredient
 *
 * @ORM\Table(name="ingredient")
 * @ORM\Entity(repositoryClass="Project3\WebsiteBundle\Repository\IngredientRepository")
 */
class Ingredient
{

    /**
     * Many Ingredienten have Many Gerechten.
     * @ORM\ManyToMany(targetEntity="Project3\WebsiteBundle\Entity\Gerecht", mappedBy="ingredienten")
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
     * @ORM\Column(name="naam", type="string", length=255, nullable=true)
     */
    private $naam;

    /**
     * @var float
     *
     * @ORM\Column(name="prijs_delhaize", type="float", nullable=true)
     */
    private $prijsDelhaize;

    function __toString()
    {
        return (string)($this->naam);
    }

    public function __construct() {
        $this->ingredienten = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
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
     * @return Ingredient
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
     * Add gerechten
     *
     * @param \Project3\WebsiteBundle\Entity\Gerecht $gerechten
     *
     * @return Ingredient
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

    /**
     * Set prijsDelhaize
     *
     * @param float $prijsDelhaize
     *
     * @return Ingredient
     */
    public function setPrijsDelhaize($prijsDelhaize)
    {
        $this->prijsDelhaize = $prijsDelhaize;

        return $this;
    }

    /**
     * Get prijsDelhaize
     *
     * @return float
     */
    public function getPrijsDelhaize()
    {
        return $this->prijsDelhaize;
    }
}
