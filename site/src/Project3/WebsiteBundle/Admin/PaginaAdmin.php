<?php

namespace Project3\WebsiteBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class PaginaAdmin extends AbstractAdmin
{
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
            ->add('id')
            ->add('url')
            ->add('naam')
            ->add('seoTitel')
            ->add('seoOmschrijving')
            ->add('seoTrefwoorden')
            ->add('seoAfbeelding')
            ->add('seoRobots')
            ->add('actief')
        ;
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
            ->add('actief')
        ;
    }
}
