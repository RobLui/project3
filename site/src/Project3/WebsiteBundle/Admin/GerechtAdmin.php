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
                ->with('Onderdelen')
//                    ->add('categorie')
                    ->add('naam')
                    ->add('foto')
                    ->add('beschrijving')
                    ->add('rating')
                    ->add('ingredienten')
                    ->add('actief')
                ->end()
            ->end()
            ->tab("Recept")
                ->with("Recept")
//                    ->add('recept')
                ->end()
            ->end()
            ->tab("Ingredienten")
                ->with("Ingredienten")
    //                    ->add('recept')
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
            ->add('actief')
        ;
    }
//
//    public function prePersist($object)
//    {
//        parent::prePersist($object);
//        foreach ($object->getRecept() as $recept) {
//            $recept->setRecept($object);
//        }
//    }
//
//    public function preUpdate($object)
//    {
//        /* @var \Project3\WebsiteBundle\Entity\Recept $object */
//        parent::preUpdate($object);
//        foreach ($object->getRecept() as $recept) {
//            $recept->setRecept($object);
//        }
//    }
}
