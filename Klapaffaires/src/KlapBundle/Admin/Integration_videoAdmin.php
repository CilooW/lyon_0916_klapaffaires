<?php
/**
 * Created by PhpStorm.
 * User: tangui
 * Date: 18/10/16
 * Time: 14:47
 */

namespace KlapBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class Integration_videoAdmin extends Admin
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