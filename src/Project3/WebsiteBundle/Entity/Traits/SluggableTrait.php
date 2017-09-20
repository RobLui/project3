<?php


namespace Project3\WebsiteBundle\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;

trait SluggableTrait
{
    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255, nullable=true, unique=true)
     */
    protected $slug;

    /**
     * Set slug
     *
     * @param string $slug
     * @return $this
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /** @ORM\PrePersist */
    public function prePersistSluggableTrait(LifecycleEventArgs $args)
    {
        $this->setSlug($this->slugify($this->getSlug() ?: (string)$this));
    }

    /** @ORM\PreUpdate */
    public function preUpdateSluggableTrait(PreUpdateEventArgs $args)
    {
        $this->setSlug($this->slugify($this->getSlug() ?: (string)$this));
    }

    /**
     * Slugify a text.
     *
     * @param $text
     *
     * @return string
     */
    public function slugify($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('~[^\\pL\d]+~u', '-', $text);
        // trim
        $text = trim($text, '-');
        // transliterate
        if (function_exists('iconv')) {
            $text = iconv('UTF-8', 'ASCII//TRANSLIT', $text);
        }
        // lowercase
        $text = strtolower($text);
        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);
        return $text;
    }

}