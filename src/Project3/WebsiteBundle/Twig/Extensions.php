<?php


namespace Project3\WebsiteBundle\Twig;


use Project3\WebsiteBundle\Service\Database;

class Extensions extends \Twig_Extension
{

    /** @var  Database $database */
    protected $database;

    public function __construct(Database $database)
    {
        $this->database = $database;
    }

    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction("slugify", array($this, "slugify"), array('is_safe' => array("html"))),
            new \Twig_SimpleFunction("get_groups", array($this, "getGroups"), array('is_safe' => array("html"))),
        );
    }

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

    public function getGroups()
    {
        return $this->database->getGroups();
    }

}