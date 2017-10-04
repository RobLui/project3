<?php

namespace Project3\WebsiteBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Gerecht
 *
 * @ORM\Table(name="gerecht")
 * @ORM\Entity(repositoryClass="Project3\WebsiteBundle\Repository\GerechtRepository")
 */
class Gerecht
{

    /**
     * One Gerecht has Many Ingredienten.
     * @ORM\OneToMany(targetEntity="Project3\WebsiteBundle\Entity\Ingredient", mappedBy="gerecht")
     */
    private $ingredienten;

    /**
     * One Gerecht has Many Categorieën.
     * @ORM\OneToMany(targetEntity="Project3\WebsiteBundle\Entity\Categorie", mappedBy="gerechten")
     */
    private $categorie;

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

    /**
     * @var string
     *
     * @ORM\Column(name="foto", type="string", length=255, nullable=true)
     */
    private $foto;

    /**
     * @var string
     *
     * @ORM\Column(name="beschrijving", type="text", nullable=true)
     */
    private $beschrijving;

    /**
     * @var int
     *
     * @ORM\Column(name="rating", type="integer", nullable=true)
     */
    private $rating;

    /**
     * @var bool
     *
     * @ORM\Column(name="actief", type="boolean", nullable=true)
     */
    private $actief;

    /**
     * @var string
     *
     * @ORM\Column(name="benodigdheden", type="text", nullable=true)
     */
    private $benodigdheden;

    /**
     * @var string
     *
     * @ORM\Column(name="bereidingswijze", type="text", nullable=true)
     */
    private $bereidingswijze;

//    private $stappen;


    function __toString()
    {
        return  $this->naam;
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
     * @return Gerecht
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
     * Set foto
     *
     * @param string $foto
     *
     * @return Gerecht
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set beschrijving
     *
     * @param string $beschrijving
     *
     * @return Gerecht
     */
    public function setBeschrijving($beschrijving)
    {
        $this->beschrijving = $beschrijving;

        return $this;
    }

    /**
     * Get beschrijving
     *
     * @return string
     */
    public function getBeschrijving()
    {
        return $this->beschrijving;
    }

    /**
     * Set rating
     *
     * @param integer $rating
     *
     * @return Gerecht
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return int
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set actief
     *
     * @param boolean $actief
     *
     * @return Gerecht
     */
    public function setActief($actief)
    {
        $this->actief = $actief;

        return $this;
    }

    /**
     * Get actief
     *
     * @return bool
     */
    public function getActief()
    {
        return $this->actief;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ingredienten = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add ingredienten
     *
     * @param \Project3\WebsiteBundle\Entity\Ingredient $ingredienten
     *
     * @return Gerecht
     */
    public function addIngredienten(\Project3\WebsiteBundle\Entity\Ingredient $ingredienten)
    {
        $this->ingredienten[] = $ingredienten;

        return $this;
    }

    /**
     * Remove ingredienten
     *
     * @param \Project3\WebsiteBundle\Entity\Ingredient $ingredienten
     */
    public function removeIngredienten(\Project3\WebsiteBundle\Entity\Ingredient $ingredienten)
    {
        $this->ingredienten->removeElement($ingredienten);
    }

    /**
     * Get ingredienten
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIngredienten()
    {
        return $this->ingredienten;
    }

    /**
     * Add categorie
     *
     * @param \Project3\WebsiteBundle\Entity\Categorie $categorie
     *
     * @return Gerecht
     */
    public function addCategorie(\Project3\WebsiteBundle\Entity\Categorie $categorie)
    {
        $this->categorie[] = $categorie;

        return $this;
    }

    /**
     * Remove categorie
     *
     * @param \Project3\WebsiteBundle\Entity\Categorie $categorie
     */
    public function removeCategorie(\Project3\WebsiteBundle\Entity\Categorie $categorie)
    {
        $this->categorie->removeElement($categorie);
    }

    /**
     * Get categorie
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategorie()
    {
        return $this->categorie;
    }


    /**
     * Set benodigdheden
     *
     * @param string $benodigdheden
     *
     * @return Gerecht
     */
    public function setBenodigdheden($benodigdheden)
    {
        $this->benodigdheden = $benodigdheden;

        return $this;
    }

    /**
     * Get benodigdheden
     *
     * @return string
     */
    public function getBenodigdheden()
    {
        return $this->benodigdheden;
    }

    /**
     * Set bereidingswijze
     *
     * @param string $bereidingswijze
     *
     * @return Gerecht
     */
    public function setBereidingswijze($bereidingswijze)
    {
        $this->bereidingswijze = $bereidingswijze;

        return $this;
    }

    /**
     * Get bereidingswijze
     *
     * @return string
     */
    public function getBereidingswijze()
    {
        return $this->bereidingswijze;
    }
}
