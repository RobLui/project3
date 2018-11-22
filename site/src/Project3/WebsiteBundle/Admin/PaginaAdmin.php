<?php

namespace Project3\WebsiteBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class PaginaAdmin extends AbstractAdmin
{
    public function prePersist($object)
    {
        parent::prePersist($object);
        foreach ($object->getBlokken() as $blokken) {
            $blokken->setPagina($object);
        }
    }

    public function preUpdate($object)
    {
        /* @var \Project3\WebsiteBundle\Entity\Pagina $object */
        parent::preUpdate($object);
        foreach ($object->getBlokken() as $blokken) {
            $blokken->setPagina($object);
        }
    }

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('url')
            ->add('naam')
            ->add('seoTitel')
            ->add('seoOmschrijving')
            ->add('seoTrefwoorden')
            ->add('seoAfbeelding')
            ->add('seoRobots')
            ->add('actief');
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('url')
            ->add('naam')
            ->add('seoTitel')
            ->add('seoOmschrijving')
            ->add('seoTrefwoorden')
            ->add('seoAfbeelding')
            ->add('seoRobots')
            ->add('actief')
            ->add('_action', null, array(
                'actions' => array(
                    'edit' => array(),
                ),
            ));
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->tab('Pagina')
            ->with("Pagina")
            ->add('url')
            ->add('naam')
            ->add('seoTitel')
            ->add('seoOmschrijving')
            ->add('seoTrefwoorden')
            ->add('seoAfbeelding')
            ->add('seoRobots')
            ->add('actief')
            ->end()
            ->end()
            ->tab('Blokken')
            ->with('Overzicht')
            ->add('blokken', 'sonata_type_collection', array(
                'type_options' => array()
            ), array(
                'edit' => 'inline',
                'inline' => 'table',
                'sortable' => 'sort',
            ))
            ->end()
            ->end();
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('url')
            ->add('naam')
            ->add('seoTitel')
            ->add('seoOmschrijving')
            ->add('seoTrefwoorden')
            ->add('seoAfbeelding')
            ->add('seoRobots')
            ->add('actief');
    }
}
