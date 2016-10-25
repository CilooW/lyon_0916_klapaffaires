<?php
/**
 * Created by PhpStorm.
 * User: tangui
 * Date: 20/10/16
 * Time: 12:37
 */

namespace KlapBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class TestimonyAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('wName', 'text',
            array('label' => 'Nom'
            ));
        $formMapper->add('wFirstname', 'text',
            array('label' => 'Prénom'
            ));
        $formMapper->add('wDescription', 'text',
            array('label' => 'Témoignage'
            ));
        $formMapper->add('wPicturePath', 'file',
            array('label' => 'Photo du témoin'
            ));
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('wName', 'text',
            array('label' => 'Nom'
            ));
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('wName', 'text',
            array('label' => 'Nom'
            ));
    }
}