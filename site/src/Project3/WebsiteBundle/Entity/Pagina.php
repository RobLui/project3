<?php

namespace Project3\WebsiteBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Pagina
 *
 * @ORM\Table(name="pagina")
 * @ORM\Entity(repositoryClass="Project3\WebsiteBundle\Repository\PaginaRepository")
 */
class Pagina
{
    /**
     * One Pagina has Many Blokken.
     * @ORM\OneToMany(targetEntity="Project3\WebsiteBundle\Entity\Block", mappedBy="pagina", cascade={"persist", "all"}))
     */
    private $blokken;

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
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="naam", type="string", length=255)
     */
    private $naam;

    /**
     * @var string
     *
     * @ORM\Column(name="seo_titel", type="string", length=255, nullable=true)
     */
    private $seoTitel;

    /**
     * @var string
     *
     * @ORM\Column(name="seo_omschrijving", type="string", length=255, nullable=true)
     */
    private $seoOmschrijving;

    /**
     * @var string
     *
     * @ORM\Column(name="seo_trefwoorden", type="string", length=255, nullable=true)
     */
    private $seoTrefwoorden;

    /**
     * @var string
     *
     * @ORM\Column(name="seo_afbeelding", type="string", length=255, nullable=true)
     */
    private $seoAfbeelding;

    /**
     * @var string
     *
     * @ORM\Column(name="seo_robots", type="string", length=255, nullable=true)
     */
    private $seoRobots;

    /**
     * @var bool
     *
     * @ORM\Column(name="actief", type="boolean")
     */
    private $actief;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->blokken = new ArrayCollection();
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
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Pagina
     */
    public function setUrl($url)
    {
        $this->url = $url;

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
     * Set naam
     *
     * @param string $naam
     *
     * @return Pagina
     */
    public function setNaam($naam)
    {
        $this->naam = $naam;

        return $this;
    }

    /**
     * Get seoTitel
     *
     * @return string
     */
    public function getSeoTitel()
    {
        return $this->seoTitel;
    }

    /**
     * Set seoTitel
     *
     * @param string $seoTitel
     *
     * @return Pagina
     */
    public function setSeoTitel($seoTitel)
    {
        $this->seoTitel = $seoTitel;

        return $this;
    }

    /**
     * Get seoOmschrijving
     *
     * @return string
     */
    public function getSeoOmschrijving()
    {
        return $this->seoOmschrijving;
    }

    /**
     * Set seoOmschrijving
     *
     * @param string $seoOmschrijving
     *
     * @return Pagina
     */
    public function setSeoOmschrijving($seoOmschrijving)
    {
        $this->seoOmschrijving = $seoOmschrijving;

        return $this;
    }

    /**
     * Get seoTrefwoorden
     *
     * @return string
     */
    public function getSeoTrefwoorden()
    {
        return $this->seoTrefwoorden;
    }

    /**
     * Set seoTrefwoorden
     *
     * @param string $seoTrefwoorden
     *
     * @return Pagina
     */
    public function setSeoTrefwoorden($seoTrefwoorden)
    {
        $this->seoTrefwoorden = $seoTrefwoorden;

        return $this;
    }

    /**
     * Get seoAfbeelding
     *
     * @return string
     */
    public function getSeoAfbeelding()
    {
        return $this->seoAfbeelding;
    }

    /**
     * Set seoAfbeelding
     *
     * @param string $seoAfbeelding
     *
     * @return Pagina
     */
    public function setSeoAfbeelding($seoAfbeelding)
    {
        $this->seoAfbeelding = $seoAfbeelding;

        return $this;
    }

    /**
     * Get seoRobots
     *
     * @return string
     */
    public function getSeoRobots()
    {
        return $this->seoRobots;
    }

    /**
     * Set seoRobots
     *
     * @param string $seoRobots
     *
     * @return Pagina
     */
    public function setSeoRobots($seoRobots)
    {
        $this->seoRobots = $seoRobots;

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
     * Set actief
     *
     * @param boolean $actief
     *
     * @return Pagina
     */
    public function setActief($actief)
    {
        $this->actief = $actief;

        return $this;
    }

    function __toString()
    {
        return (string)$this->naam ?: 'Nieuwe pagina';
    }

    /**
     * Add blokken
     *
     * @param \Project3\WebsiteBundle\Entity\Block $blokken
     *
     * @return Pagina
     */
    public function addBlokken(\Project3\WebsiteBundle\Entity\Block $blokken)
    {
        $this->blokken[] = $blokken;

        return $this;
    }

    /**
     * Remove blokken
     *
     * @param \Project3\WebsiteBundle\Entity\Block $blokken
     */
    public function removeBlokken(\Project3\WebsiteBundle\Entity\Block $blokken)
    {
        $this->blokken->removeElement($blokken);
    }

    /**
     * Get blokken
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBlokken()
    {
        return $this->blokken;
    }
}
