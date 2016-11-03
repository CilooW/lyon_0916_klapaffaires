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
        $formMapper->add('category', 'text',
            array('label' => 'Categorie'
            ));
        $formMapper->add('short_desc', 'text',
            array(
                'label' => 'Courte description'
            ));
        $formMapper->add('long_desc', 'textarea',
            array(
                'label' => 'Longue description'
            ));
        $formMapper->add('file', 'file',
            array('label' => 'Photo',
                'required' => false
            ));
        $formMapper->add('category_title', 'text',
            array(
                'label' => 'titre de la catégorie'
            ));

    }

    public function prePersist($image)
    {
        $this->manageFileUpload($image);
    }

    public function preUpdate($image)
    {
        $this->manageFileUpload($image);
    }

    public function manageFileUpload($image)
    {
        if ($image->getFile()){
            $image->refreshUpdate();
        }
    }
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('category', null, array(
            'label' => 'Catégories'
        ));
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('category', null, array(
            'label' => 'Catégories'))
            ->add('_action', 'actions', array (
                'actions' => array(
                    'edit' => array(),
                    'delete' => array(),
                )
            ));
    }
}