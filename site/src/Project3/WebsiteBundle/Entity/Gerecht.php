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
     * Many Gerechten have One categorie.
     * @ORM\ManyToOne(targetEntity="Project3\WebsiteBundle\Entity\Categorie", inversedBy="gerechten")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    private $categorie;

    /**
     * One Gerecht has Many Stappen.
     * @ORM\OneToMany(targetEntity="Project3\WebsiteBundle\Entity\Stap", mappedBy="gerecht", cascade={"persist", "all"}))
     */
    private $stappen;

    /**
     * Many Ingredienten have Many Gerechten.
     * @ORM\ManyToMany(targetEntity="Project3\WebsiteBundle\Entity\Ingredient", inversedBy="gerechten")
     * @ORM\JoinTable(name="ingredient_gerecht")
     */
    private $ingredienten;

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
     * @ORM\Column(name="foto_vierkant", type="string", length=255, nullable=true)
     */
    private $foto_vierkant;

    /**
     * @var string
     *
     * @ORM\Column(name="foto_rechthoek", type="string", length=255, nullable=true)
     */
    private $foto_rechthoek;
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
     * @var int
     *
     * @ORM\Column(name="bereidingstijd", type="integer", nullable=true)
     */
    private $bereidingstijd;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->stappen = new ArrayCollection();
        $this->ingredienten = new ArrayCollection();
    }

    function __toString()
    {
        return (string)$this->naam ?: 'Nieuw Gerecht';
    }

    public function getNameSuggest()
    {
        return array(
            'input' => $this->getNaam(),
            'output' => $this->getNaam(),
            'payload' => array(
                'id' => $this->getId(),
            ),
        );
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
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
     * Get rating
     *
     * @return integer
     */
    public function getRating()
    {
        return $this->rating;
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
     * Get actief
     *
     * @return boolean
     */
    public function getActief()
    {
        return $this->actief;
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
     * Get benodigdheden
     *
     * @return string
     */
    public function getBenodigdheden()
    {
        return $this->benodigdheden;
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
     * Get categorie
     *
     * @return \Project3\WebsiteBundle\Entity\Categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set categorie
     *
     * @param \Project3\WebsiteBundle\Entity\Categorie $categorie
     *
     * @return Gerecht
     */
    public function setCategorie(\Project3\WebsiteBundle\Entity\Categorie $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Add stappen
     *
     * @param \Project3\WebsiteBundle\Entity\Stap $stappen
     *
     * @return Gerecht
     */
    public function addStappen(\Project3\WebsiteBundle\Entity\Stap $stappen)
    {
        $this->stappen[] = $stappen;

        return $this;
    }

    /**
     * Remove stappen
     *
     * @param \Project3\WebsiteBundle\Entity\Stap $stappen
     */
    public function removeStappen(\Project3\WebsiteBundle\Entity\Stap $stappen)
    {
        $this->stappen->removeElement($stappen);
    }

    /**
     * Get stappen
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStappen()
    {
        return $this->stappen;
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
     * Get bereidingstijd
     *
     * @return integer
     */
    public function getBereidingstijd()
    {
        return $this->bereidingstijd;
    }

    /**
     * Set bereidingstijd
     *
     * @param integer $bereidingstijd
     *
     * @return Gerecht
     */
    public function setBereidingstijd($bereidingstijd)
    {
        $this->bereidingstijd = $bereidingstijd;

        return $this;
    }

    /**
     * Get fotoVierkant
     *
     * @return string
     */
    public function getFotoVierkant()
    {
        return $this->foto_vierkant;
    }

    /**
     * Set fotoVierkant
     *
     * @param string $fotoVierkant
     *
     * @return Gerecht
     */
    public function setFotoVierkant($fotoVierkant)
    {
        $this->foto_vierkant = $fotoVierkant;

        return $this;
    }

    /**
     * Get fotoRechthoek
     *
     * @return string
     */
    public function getFotoRechthoek()
    {
        return $this->foto_rechthoek;
    }

    /**
     * Set fotoRechthoek
     *
     * @param string $fotoRechthoek
     *
     * @return Gerecht
     */
    public function setFotoRechthoek($fotoRechthoek)
    {
        $this->foto_rechthoek = $fotoRechthoek;

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
}
