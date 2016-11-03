<?php
/**
 * Created by PhpStorm.
 * User: tangui
 * Date: 20/10/16
 * Time: 12:35
 */

namespace KlapBundle\Admin;

use KlapBundle\KlapBundle;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class IntegrationVideoAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('iframe', 'text',
            array(
                'label' => 'Mettez ici l\'url de votre vidéo'
            ));
        $formMapper->add('description', 'textarea',
            array(
                'label' => 'Entrez une description de la vidéo'
            ));
        $formMapper->add('video', EntityType::class, array(
            'class' => 'KlapBundle:CategoryVideo',
            'choice_label' => 'category'
        ),
            array(
                'label' => 'Choisissez la catégorie à laquelle vous voulez associer la vidéo'
            ));
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('description', null, array(
            'label' => ''));
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('description')
            ->add('_action', 'actions', array (
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ));
    }

   /* protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('')
    }*/
}