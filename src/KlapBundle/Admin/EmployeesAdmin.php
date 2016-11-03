<?php
/**
 * Created by PhpStorm.
 * User: tangui
 * Date: 20/10/16
 * Time: 12:00
 */

namespace KlapBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class EmployeesAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('firstName', 'text',
            array(
                'label' => 'Votre Nom'
            ));
        $formMapper->add('lastName', 'text',
            array('label' => 'Votre Prénom'
            ));
        $formMapper->add('videoDescription', 'textarea',
            array('label' => 'Entrez un texte décrivant votre poste'
            ));
        $formMapper->add('videoUrl', 'text',
            array('label' => 'Insérez ici l\'url de la vidéo de présentation'
            ));

    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('firstName');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('firstName', null, array(
            'label' => 'Nom de l\'employé'))
                    ->add('_action', 'actions', array (
                        'actions' => array(
                            'show' => array(),
                            'edit' => array(),
                            'delete' => array(),
                        )
                    ));
    }
}