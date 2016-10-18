<?php
/**
 * Created by PhpStorm.
 * User: tangui
 * Date: 18/10/16
 * Time: 13:29
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
        $formMapper->add('wName', 'text');
        $formMapper->add('wFirstname', 'text');
        $formMapper->add('wDescription', 'text');
        $formMapper->add('wPicturePath', 'text');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('wName');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('wName');
    }
}