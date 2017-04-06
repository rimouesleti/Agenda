<?php

namespace ICGM2\PagesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class messagesType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                
            ->add('subject', 'text', array('attr' => array(
                'class' => 'form-control',
                'placeholder'=>'Subject...')))
            ->add('text', 'textarea', array('attr' => array(
                'class' => 'form-control',
                'placeholder'=>'Message...')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ICGM2\PagesBundle\Entity\messages'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'icgm2_pagesbundle_messages';
    }
}
