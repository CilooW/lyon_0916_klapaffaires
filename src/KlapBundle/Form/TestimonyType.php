<?php

namespace KlapBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class TestimonyType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('wName', 'text', array(
                'label' => 'Nom du témoin'
            ))
            ->add('wFirstname', 'text', array(
                'label' => 'Prénom du témoin'
            ))
            ->add('wDescription', 'text', array(
                'label' => 'Description'
            ))
            ->add('wPicturePath', FileType::class, array(
                'label' => 'Photo du témoignage'
            ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'KlapBundle\Entity\Testimony'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'klapbundle_testimony';
    }


}
