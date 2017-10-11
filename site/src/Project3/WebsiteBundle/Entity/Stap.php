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
//
//    /**
//     * Many Stappen have One Recept.
//     * @ORM\ManyToOne(targetEntity="Project3\WebsiteBundle\Entity\Recept", inversedBy="stappen")
//     * @ORM\JoinColumn(name="recept_id", referencedColumnName="id")
//     */
//    private $recept;

    /**
     * Many Stappen have One Gerecht.
     * @ORM\ManyToOne(targetEntity="Project3\WebsiteBundle\Entity\Gerecht", inversedBy="stappen")
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

    function __toString()
    {
        return  "STAP ". (string)($this->stapnummer);
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

    /**
     * Set recept
     *
     * @param \Project3\WebsiteBundle\Entity\Recept $recept
     *
     * @return Stap
     */
    public function setRecept(\Project3\WebsiteBundle\Entity\Recept $recept = null)
    {
        $this->recept = $recept;

        return $this;
    }

    /**
     * Get recept
     *
     * @return \Project3\WebsiteBundle\Entity\Recept
     */
    public function getRecept()
    {
        return $this->recept;
    }

    /**
     * Set gerecht
     *
     * @param \Project3\WebsiteBundle\Entity\Gerecht $gerecht
     *
     * @return Stap
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
