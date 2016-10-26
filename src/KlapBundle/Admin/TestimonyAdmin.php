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
        $formMapper->add('file', 'file',
            array('label' => 'Photo',
                'required' => false
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
        $datagridMapper->add('wName');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('wName');

    }
}