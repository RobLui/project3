<?php

namespace Project3\WebsiteBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Recept
 *
 * @ORM\Table(name="recept")
 * @ORM\Entity(repositoryClass="Project3\WebsiteBundle\Repository\ReceptRepository")
 */
class Recept
{
    /**
     * One Recept has Many Stappen.
     * @ORM\OneToMany(targetEntity="Project3\WebsiteBundle\Entity\Stap", mappedBy="recept")
     */
    private $stappen;

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
     * @ORM\Column(name="benodigdheden", type="string", length=255)
     */
    private $benodigdheden;

    /**
     * @var bool
     *
     * @ORM\Column(name="actief", type="boolean")
     */
    private $actief;

    public function __construct() {
        $this->stappen = new ArrayCollection();
    }

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
     * Set benodigdheden
     *
     * @param string $benodigdheden
     *
     * @return Recept
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
     * Set actief
     *
     * @param boolean $actief
     *
     * @return Recept
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
     * Add stappen
     *
     * @param \Project3\WebsiteBundle\Entity\Stap $stappen
     *
     * @return Recept
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
     * Set naam
     *
     * @param string $naam
     *
     * @return Recept
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
}
