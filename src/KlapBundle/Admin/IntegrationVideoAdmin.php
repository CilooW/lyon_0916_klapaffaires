<?php
/**
 * Created by PhpStorm.
 * User: tangui
 * Date: 20/10/16
 * Time: 12:35
 */

namespace KlapBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

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
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('description');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('description');
    }
}