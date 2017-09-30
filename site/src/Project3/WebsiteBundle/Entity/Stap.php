<?php

namespace Project3\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stap
 *
 * @ORM\Table(name="stap")
 * @ORM\Entity(repositoryClass="Project3\WebsiteBundle\Repository\StapRepository")
 */
class Stap
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
     * @var int
     *
     * @ORM\Column(name="stapnummer", type="integer")
     */
    private $stapnummer;

    /**
     * @var string
     *
     * @ORM\Column(name="tekst", type="string", length=255, nullable=true)
     */
    private $tekst;


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
     * Set stapnummer
     *
     * @param integer $stapnummer
     *
     * @return Stap
     */
    public function setStapnummer($stapnummer)
    {
        $this->stapnummer = $stapnummer;

        return $this;
    }

    /**
     * Get stapnummer
     *
     * @return int
     */
    public function getStapnummer()
    {
        return $this->stapnummer;
    }

    /**
     * Set tekst
     *
     * @param string $tekst
     *
     * @return Stap
     */
    public function setTekst($tekst)
    {
        $this->tekst = $tekst;

        return $this;
    }

    /**
     * Get tekst
     *
     * @return string
     */
    public function getTekst()
    {
        return $this->tekst;
    }
}

