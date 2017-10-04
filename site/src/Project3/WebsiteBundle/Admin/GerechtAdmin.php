<?php

namespace Project3\WebsiteBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class GerechtAdmin extends AbstractAdmin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('naam')
            ->add('foto')
            ->add('beschrijving')
            ->add('rating')
            ->add('benodigdheden')
            ->add('ingredienten')
            ->add('actief')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('naam')
            ->add('foto')
            ->add('beschrijving')
            ->add('rating')
            ->add('actief')
            ->add('_action', null, array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                ),
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->tab('Algemeen')
                ->with('Overzicht')
                    ->add('categorie')
                    ->add('naam')
                    ->add('foto')
                    ->add('beschrijving')
                    ->add('rating')
                    ->add('actief')
                ->end()
            ->end()
            ->tab("Recept")
                ->with("Overzicht")
                    ->add('stappen', 'sonata_type_collection', array(
                        'type_options' => array()
                    ), array(
                        'edit' => 'inline',
                        'inline' => 'table',
                        'sortable' => 'sort',
                    ))
                    ->add("benodigdheden", 'ckeditor')
                    ->add("bereidingswijze", 'ckeditor')
                ->end()
            ->end()
            ->tab("Ingredienten")
                ->with("Overzicht")
                    ->add('ingredienten')
                ->end()
            ->end()
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('naam')
            ->add('foto')
            ->add('beschrijving')
            ->add('rating')
            ->add("benodigdheden")
            ->add('actief')
        ;
    }

    public function prePersist($object)
    {
        parent::prePersist($object);
        foreach ($object->getStappen() as $stappen) {
            $stappen->setGerecht($object);
        }
        foreach ($object->getIngredienten() as $ingredienten) {
            $ingredienten->setGerecht($object);
        }
    }

    public function preUpdate($object)
    {
        /* @var \Project3\WebsiteBundle\Entity\Gerecht $object */
        parent::preUpdate($object);
        foreach ($object->getStappen() as $stappen) {
            $stappen->setGerecht($object);
        }
        foreach ($object->getIngredienten() as $ingredienten) {
            $ingredienten->setGerecht($object);
        }
    }
}
