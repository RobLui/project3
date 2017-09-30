<?php

namespace Project3\WebsiteBundle\Entity;

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
}

