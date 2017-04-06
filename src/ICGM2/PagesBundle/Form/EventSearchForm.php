<?php

namespace ICGM2\PagesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class EventSearchForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {        
        $builder->add('keywords', 'text', array('attr' => array('class' => 'form-control')));
    }
    
    public function getName()
    {        
        return 'eventSearch';
    }
}