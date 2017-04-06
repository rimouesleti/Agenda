<?php

namespace ICGM2\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
//        parent::buildForm($builder, $options);


        $builder
                ->add('firstName', 'text', array(
                    'label' => 'form.firstName',
                    'attr' => array('class' => 'form-control'),
                    'translation_domain' => 'FOSUserBundle'))
                ->add('lastName', 'text', array(
                    'label' => 'form.lastName',
                    'attr' => array('class' => 'form-control'),
                    'translation_domain' => 'FOSUserBundle'))
                ->add('departement', 'choice', array(
                    'choices' => array('CEO' => 'CEO', 'Sales Manager' => 'Sales Manager', 'Sales Person' => 'Sales Person'),
                    'attr' => array('class' => 'form-control'),
                    'translation_domain' => 'FOSUserBundle'))
                ->add('phone', 'text', array(
                    'label' => 'form.phone',
                    'required' => false,
                    'attr' => array('class' => 'form-control'),
                    'translation_domain' => 'FOSUserBundle'))
                ->add('mphone', 'text', array(
                    'label' => 'form.mphone',
                    'attr' => array('class' => 'form-control'),
                    'translation_domain' => 'FOSUserBundle'))
                ->add('address', 'text', array(
                    'label' => 'form.address',
                    'attr' => array('class' => 'form-control'),
                    'translation_domain' => 'FOSUserBundle'))
                ->add('zip_code', 'integer', array(
                    'label' => 'form.zip_code',
                    'attr' => array('class' => 'form-control'),
                    'translation_domain' => 'FOSUserBundle'))
                ->add('country', 'text', array(
                    'label' => 'form.country',
                    'attr' => array('class' => 'form-control'),
                    'translation_domain' => 'FOSUserBundle'))
                ->add('city', 'text', array(
                    'label' => 'form.city',
                    'attr' => array('class' => 'form-control'),
                    'translation_domain' => 'FOSUserBundle'))
                ->add('position')
                ->add('plainPassword', 'repeated', array(
                    'type' => 'password',
                    'options' => array('translation_domain' => 'FOSUserBundle', 'attr' => array('class' => 'form-control')),
                    'first_options' => array('label' => 'form.password'),
                    'second_options' => array('label' => 'form.password_confirmation'),
                    'invalid_message' => 'fos_user.password.mismatch',
                        )
        );
        $builder->add('username', 'text', array(
                    'attr' => array('class' => 'form-control')
                ))
                ->add('email', 'email', array(
                    'attr' => array('class' => 'form-control')
                ))
                ->add('roles', 'collection', array(
                    'type' => 'choice',
                    'options' =>
                    array(
                        'label' => false,
                        'choices' => array('ROLE_USER' => 'User', 'ROLE_ADMIN' => 'Admin'),
                        'attr' => array('class' => 'form-control'),
            )))
        ;
        $builder->add('file', 'file', array(
            'attr' => array('style' => 'display:none'),
            'required' => false
        ));
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ICGM2\UserBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'icgm2_userbundle_user';
    }

}
