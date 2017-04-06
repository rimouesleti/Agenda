<?php

namespace ICGM2\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Security\Core\Validator\Constraint\UserPassword as OldUserPassword;
use Symfony\Component\Security\Core\Validator\Constraints\UserPassword;

class ProfileFormType extends AbstractType
{

    private $class;

    /**
     * @param string $class The User class name
     */
    public function __construct($class)
    {
        $this->class = $class;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        if (class_exists('Symfony\Component\Security\Core\Validator\Constraints\UserPassword')) {
            $constraint = new UserPassword();
        } else {
            // Symfony 2.1 support with the old constraint class
            $constraint = new OldUserPassword();
        }

//        $this->buildUserForm($builder, $options);

        $builder
                ->add('firstName', 'text', array(
                    'label' => 'form.firstname',
                    'attr' => array('class' => 'form-control'),
                    'translation_domain' => 'FOSUserBundle'))
                ->add('lastName', 'text', array(
                    'label' => 'form.lastname',
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
                    'required' => false,
                    'attr' => array('class' => 'form-control'),
                    'translation_domain' => 'FOSUserBundle'))
                ->add('zip_code', 'integer', array(
                    'label' => 'form.zip_code',
                    'required' => false,
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
                ->add('username', 'text', array(
                    'attr' => array('class' => 'form-control')))
                ->add('email', 'email', array(
                    'attr' => array('class' => 'form-control')))
                ->add('roles', 'collection', array(
                    'type' => 'choice',
                    'options' =>
                    array(
                        'label' => false,
                        'choices' => array('ROLE_USER' => 'User', 'ROLE_ADMIN' => 'Admin'),
                        'attr' => array('class' => 'form-control'))))
                ->add('file', 'file', array(
                    'attr' => array('style' => 'display:none'),
                    'required' => false))
                ->add('language', 'choice', array(
                    'label' => 'form.language',
                    'choices' => array('fr' => 'Frensh', 'en' => 'English'),
                    'attr' => array('class' => 'form-control')))
                ->add('position')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => $this->class,
            'intention' => 'profile',
        ));
    }

    public function getName()
    {
        return 'icgm2_edit_profile';
    }

    /**
     * Builds the embedded form representing the user.
     *
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
//    protected function buildUserForm(FormBuilderInterface $builder, array $options)
//    {
//        $builder
//            ->add('username', null, array('label' => 'form.username', 'translation_domain' => 'FOSUserBundle'))
//            ->add('email', 'email', array('label' => 'form.email', 'translation_domain' => 'FOSUserBundle'))
//        ;
//    }
}
