<?php


namespace Project3\WebsiteBundle\Entity;


use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="website_user")
 */
class User extends BaseUser
{
//
//    /**
//     * One User has Many Shoppinglists.
//     * @ORM\OneToMany(targetEntity="Project3\WebsiteBundle\Entity\Shoppinglijst", mappedBy="user")
//     */
//    private $shoppinglists;
//
//
//    /**
//     * One User has Many contact.
//     * @ORM\OneToMany(targetEntity="Project3\WebsiteBundle\Entity\Contact", mappedBy="usercontact")
//     */
//    private $contacts;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     *
     * @ORM\ManyToMany(targetEntity="Group")
     * @ORM\JoinTable(name="website_user_group",
     * joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id", onDelete="CASCADE")},
     * inverseJoinColumns={@ORM\JoinColumn(name="group_id", referencedColumnName="id", onDelete="CASCADE")}
     * )
     */
    protected $groups;

    public function __construct()
    {
        parent::__construct();
        $this->setEnabled(true);
        $this->roles = array("ROLE_USER" => "ROLE_USER");
    }

    public function getRoles()
    {
        $roles = parent::getRoles();
        return array_combine($roles, $roles);
    }

    public function isAdmin()
    {
        return in_array("ROLE_ADMIN", $this->getRoles());
    }

    /**
     * Add shoppinglist
     *
     * @param \Project3\WebsiteBundle\Entity\Shoppinglijst $shoppinglist
     *
     * @return User
     */
    public function addShoppinglist(\Project3\WebsiteBundle\Entity\Shoppinglijst $shoppinglist)
    {
        $this->shoppinglists[] = $shoppinglist;

        return $this;
    }
//
//    /**
//     * Remove shoppinglist
//     *
//     * @param \Project3\WebsiteBundle\Entity\Shoppinglijst $shoppinglist
//     */
//    public function removeShoppinglist(\Project3\WebsiteBundle\Entity\Shoppinglijst $shoppinglist)
//    {
//        $this->shoppinglists->removeElement($shoppinglist);
//    }
//
//    /**
//     * Get shoppinglists
//     *
//     * @return \Doctrine\Common\Collections\Collection
//     */
//    public function getShoppinglists()
//    {
//        return $this->shoppinglists;
//    }
//
//    /**
//     * Add contact
//     *
//     * @param \Project3\WebsiteBundle\Entity\Contact $contact
//     *
//     * @return User
//     */
//    public function addContact(\Project3\WebsiteBundle\Entity\Contact $contact)
//    {
//        $this->contacts[] = $contact;
//
//        return $this;
//    }
//
//    /**
//     * Remove contact
//     *
//     * @param \Project3\WebsiteBundle\Entity\Contact $contact
//     */
//    public function removeContact(\Project3\WebsiteBundle\Entity\Contact $contact)
//    {
//        $this->contacts->removeElement($contact);
//    }
//
//    /**
//     * Get contacts
//     *
//     * @return \Doctrine\Common\Collections\Collection
//     */
//    public function getContacts()
//    {
//        return $this->contacts;
//    }
}
