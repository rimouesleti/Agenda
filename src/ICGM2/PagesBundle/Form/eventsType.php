<?php

namespace ICGM2\PagesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class eventsType extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {



        $builder
                ->add('subject', 'text', array('attr' => array('class' => 'form-control')))
                ->add('qualification', 'text', array('attr' => array('class' => 'form-control'), 'required' => false))
                ->add('description', 'textarea', array(
                    'attr' => array('class' => 'form-control'),
                    'required' => false))
                ->add('entity')
                ->add('location')
                ->add('user')
                ->add('type', 'choice', array(
                    'choices' => array('appointment' => 'Appointment', 'meeting' => 'Meeting', 'workshop' => 'Workshop', 'other' => 'Other'),
                    'translation_domain' => 'PagesBundle',
                    'attr' => array('class' => 'form-control')))
                ->add('status', 'choice', array(
                    'choices' => array('planned' => 'Planned', 'done' => 'Done', 'held' => 'Held', 'cancelled' => 'Cancelled'),
                    'translation_domain' => 'PagesBundle',
                    'attr' => array('class' => 'form-control')))
                ->add('startDate', 'date', array(
                    'widget' => 'single_text',
                    'input' => 'datetime',
                    'format' => 'yyyy-MM-dd HH:mm',
                    'attr' => array('style' => 'width:100%')
                ))

                /*   ->add('startDate','datetime',array(
                  'date_format' => 'yyyy-MM-dd HH:mm:ss')) */
                ->add('endDate', 'date', array(
                    'widget' => 'single_text',
                    'input' => 'datetime',
                    'format' => 'yyyy-MM-dd HH:mm',
                    'attr' => array('style' => 'width:100%')
                ))
                ->add('callback')
                


        ;
    }

    /**
     * Returns the default options for this form type.
     * @param array $options
     * @return array The default options
     */
    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'ICGM2\PagesBundle\Entity\events'
        );
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'icgm2_pagesbundle_events';
    }

}
