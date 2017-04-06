<?php

namespace ICGM2\MessageBundle\FormType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use FOS\MessageBundle\FormType\NewThreadMessageFormType as BaseType;

class NewThreadMessageFormType extends BaseType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
//
//            ->add('recipients', 'recipients_selector', array(
//                'by_reference' => false,
//                
//                'attr'     => array('class' => 'input-block-level')))
                
                ->add('recipient', 'fos_user_username', array('label' => 'recipient', 'translation_domain' => 'FOSMessageBundle'))
                ->add('subject', 'text', array(
                    'label' => 'Subject',
                    
                    'translation_domain' => 'FOSMessageBundle'))
                ->add('body', 'textarea', array(
                    'label' => 'Body',
                   
                    'translation_domain' => 'FOSMessageBundle'));
    }

   public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'intention'  => 'message',
        ));
    }

    public function getName()
    {
        return 'icgm2_new_thread';
    }

}
