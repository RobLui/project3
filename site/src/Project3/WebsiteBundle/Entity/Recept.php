<?php

namespace Project3\WebsiteBundle\Entity;

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
     * @ORM\Column(name="benodigdheden", type="string", length=255)
     */
    private $benodigdheden;

    /**
     * @var bool
     *
     * @ORM\Column(name="actief", type="boolean")
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
}

