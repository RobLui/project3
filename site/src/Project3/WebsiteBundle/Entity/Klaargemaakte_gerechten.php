<?php

namespace Project3\WebsiteBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Klaargemaakte_gerechten
 *
 * @ORM\Table(name="klaargemaakte_gerechten")
 * @ORM\Entity(repositoryClass="Project3\WebsiteBundle\Repository\Klaargemaakte_gerechtenRepository")
 */
class Klaargemaakte_gerechten
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
     * @var \DateTime
     *
     * @ORM\Column(name="datum", type="datetime")
     */
    private $datum;

    /**
     * Many Klaargemaakte_gerechten have Many gerechten.
     * @ORM\ManyToMany(targetEntity="Project3\WebsiteBundle\Entity\Gerecht")
     * @ORM\JoinTable(name="klaar_gerechten",
     *      joinColumns={@ORM\JoinColumn(name="gerecht_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="klaargem_id", referencedColumnName="id")}
     *      )
     */
    private $gerechten;

    public function __construct()
    {
        $this->datum = new \DateTime('now');
        $this->gerechten = new ArrayCollection();
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
     * Get datum
     *
     * @return \DateTime
     */
    public function getDatum()
    {
        return $this->datum;
    }

    /**
     * Set datum
     *
     * @param \DateTime $datum
     *
     * @return Klaargemaakte_gerechten
     */
    public function setDatum($datum)
    {
        $this->datum = $datum;

        return $this;
    }

    /**
     * Add gerechten
     *
     * @param \Project3\WebsiteBundle\Entity\Gerecht $gerechten
     *
     * @return Klaargemaakte_gerechten
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
}
