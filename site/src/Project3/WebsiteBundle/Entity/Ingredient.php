<?php

namespace Project3\WebsiteBundle\Entity;

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
     * Many Ingredienten have One Gerecht.
     * @ORM\ManyToOne(targetEntity="Project3\WebsiteBundle\Entity\Gerecht", inversedBy="ingredienten")
     * @ORM\JoinColumn(name="gerecht_id", referencedColumnName="id")
     */
    private $gerecht;

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

    function __toString()
    {
        return $this->naam;
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
     * Set gerecht
     *
     * @param \Project3\WebsiteBundle\Entity\Gerecht $gerecht
     *
     * @return Ingredient
     */
    public function setGerecht(\Project3\WebsiteBundle\Entity\Gerecht $gerecht = null)
    {
        $this->gerecht = $gerecht;

        return $this;
    }

    /**
     * Get gerecht
     *
     * @return \Project3\WebsiteBundle\Entity\Gerecht
     */
    public function getGerecht()
    {
        return $this->gerecht;
    }
}
