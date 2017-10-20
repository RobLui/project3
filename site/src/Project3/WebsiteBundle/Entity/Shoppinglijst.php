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
     * Many Shoppinglijsten have One User.
     * @ORM\ManyToOne(targetEntity="Project3\WebsiteBundle\Entity\User", inversedBy="shoppinglists")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

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
     * @var string
     *
     * @ORM\Column(name="ingredientitems", type="string", length=255, nullable=true)
     */
    private $ingredientitems;


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

    /**
     * Set user
     *
     * @param \Project3\WebsiteBundle\Entity\User $user
     *
     * @return Shoppinglijst
     */
    public function setUser(\Project3\WebsiteBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Project3\WebsiteBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set ingredientitems
     *
     * @param string $ingredientitems
     *
     * @return Shoppinglijst
     */
    public function setIngredientitems($ingredientitems)
    {
        $this->ingredientitems = $ingredientitems;

        return $this;
    }

    /**
     * Get ingredientitems
     *
     * @return string
     */
    public function getIngredientitems()
    {
        return $this->ingredientitems;
    }
}
