<?php

namespace Project3\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Shoppinglijst
 *
 * @ORM\Table(name="shoppinglijst")
 * @ORM\Entity(repositoryClass="Project3\WebsiteBundle\Repository\ShoppinglijstRepository")
 */
class Shoppinglijst
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
     * @ORM\Column(name="datum_aangemaakt", type="datetime")
     */
    private $datumAangemaakt;

    /**
     * @var bool
     *
     * @ORM\Column(name="actief", type="boolean")
     */
    private $actief;

    /**
     * @var string
     *
     * @ORM\Column(name="naam_gerecht", type="string", length=255, nullable=true)
     */
    private $naamGerecht;


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
     * Set datumAangemaakt
     *
     * @param \DateTime $datumAangemaakt
     *
     * @return Shoppinglijst
     */
    public function setDatumAangemaakt($datumAangemaakt)
    {
        $this->datumAangemaakt = $datumAangemaakt;

        return $this;
    }

    /**
     * Get datumAangemaakt
     *
     * @return \DateTime
     */
    public function getDatumAangemaakt()
    {
        return $this->datumAangemaakt;
    }

    /**
     * Set actief
     *
     * @param boolean $actief
     *
     * @return Shoppinglijst
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
     * Set naamGerecht
     *
     * @param string $naamGerecht
     *
     * @return Shoppinglijst
     */
    public function setNaamGerecht($naamGerecht)
    {
        $this->naamGerecht = $naamGerecht;

        return $this;
    }

    /**
     * Get naamGerecht
     *
     * @return string
     */
    public function getNaamGerecht()
    {
        return $this->naamGerecht;
    }
}

