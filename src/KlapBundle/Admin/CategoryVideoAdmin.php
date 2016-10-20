<?php
/**
 * Created by PhpStorm.
 * User: tangui
 * Date: 20/10/16
 * Time: 11:33
 */

namespace KlapBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class CategoryVideoAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('category');
        $formMapper->add('short_desc');
        $formMapper->add('long_desc');
        $formMapper->add('picture');
        $formMapper->add('category_title');

    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('category');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('category');
    }
}