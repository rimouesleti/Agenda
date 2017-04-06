<?php

namespace ICGM2\PagesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class todosType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {



        $builder
                ->add('subject', 'text', array('attr' => array('class' => 'form-control')))
                ->add('description', 'textarea', array(
                    'attr' => array('class' => 'form-control'),
                    'required' => false))
                ->add('entity')
                ->add('user')
                ->add('status', 'choice', array(
                    'choices' => array('completed' => 'Completed', 'planned' => 'Planned', 'cancelled' => 'Cancelled', 'held' => 'held'),
                    'attr' => array('class' => 'form-control')))
                ->add('startDate', 'date', array(
                    'widget' => 'single_text',
                    'input' => 'datetime',
                    'format' => 'yyyy-MM-dd HH:mm',
                    'attr' => array('style' => 'width:100%')
                ))

                /*   ->add('startDate','datetime',array(
                  'date_format' => 'yyyy-MM-dd HH:mm:ss')) */
                ->add('dueDate', 'date', array(
                    'widget' => 'single_text',
                    'input' => 'datetime',
                    'format' => 'yyyy-MM-dd HH:mm',
                    'attr' => array('style' => 'width:100%')
                ))

        ;
    }

    /**
     * Returns the default options for this form type.
     * @param array $options
     * @return array The default options
     */
    public function getDefaultOptions(array $options) {
        return array(
            'data_class' => 'ICGM2\PagesBundle\Entity\todos'
        );
    }

    /**
     * @return string
     */
    public function getName() {
        return 'icgm2_pagesbundle_todos';
    }

}
