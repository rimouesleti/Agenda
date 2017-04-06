<?php

namespace ICGM2\PagesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class locationType extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('name', 'text', array('attr' => array('class' => 'form-control')))                
                ->add('address', 'text', array('attr' => array('class' => 'form-control')))
                ->add('city', 'text', array('attr' => array('class' => 'form-control')))
                ->add('country', 'text', array('attr' => array('class' => 'form-control')))
                ->add('zipCode', 'text', array('attr' => array('class' => 'form-control')))
                ->add('position')
            ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ICGM2\PagesBundle\Entity\location'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'icgm2_pagesbundle_location';
    }

}
