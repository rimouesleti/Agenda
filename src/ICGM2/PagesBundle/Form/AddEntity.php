<?php

namespace ICGM2\PagesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class AddEntity extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('name', 'text', array('attr' => array('class' => 'form-control')));
        $builder->add('position', 'text', array(
            'attr' => array('type' => 'hidden'),
            'required' => false
        ));
        $builder->add('sort', 'choice', array(
            'choices' => array('Contact' => 'Contact', 'Entreprise' => 'Entreprise'),
            'translation_domain' => 'PagesBundle',
            'attr' => array('class' => 'form-control')
        ));
        $builder->add('type', 'choice', array(
            'choices' => array('Client' => 'Client', 'Prospect' => 'Prospect', 'Fournisseur' => 'Fournisseur',
                'Livraison' => 'Livraison', 'Autre' => 'Autre'),
            'attr' => array('class' => 'form-control')
        ));
        $builder->add('speciality', 'choice', array(
            'choices' => array('Assurance' => 'Assurance', 'Fabrication' => 'Fabrication'
                , 'Media' => 'Media', 'Livraison' => 'Livraison', 'Technologie' => 'Technologie', 'Telecommunications' => 'Telecommunications', 'Transportation' => 'Transportation'
                , 'Santé' => 'Santé'
                , 'Bancaire' => 'Bancaire', 'Biotechnologie' => 'Biotechnologie', 'Communication' => 'Communication',
                'Construction' => 'Construction', 'Education' => 'Education',
                'Finance' => 'Finance','Vente' => 'Vente', 'Autre' => 'Autre'),
            'translation_domain' => 'PagesBundle',
            'attr' => array('style' => 'width:100%')
        ));
        $builder->add('address', 'text', array('attr' => array('class' => 'form-control')));
        $builder->add('zip_code', 'integer', array('attr' => array('class' => 'form-control')));
        $builder->add('city', 'text', array('attr' => array('class' => 'form-control')));
        $builder->add('country', 'text', array('attr' => array('class' => 'form-control')));
        $builder->add('phone', 'text', array('attr' => array('class' => 'form-control')));
        $builder->add('email', 'email', array('attr' => array('class' => 'form-control')));
        $builder->add('website', 'text', array(
            'attr' => array('class' => 'form-control'),
            'required' => false
        ));
        $builder->add('employees_number', 'text', array(
            'attr' => array('class' => 'form-control'),
            'required' => false
        ));
        $builder->add('fax', 'text', array(
            'attr' => array('class' => 'form-control'),
            'required' => false));
        $builder->add('description', 'textarea', array(
            'attr' => array('class' => 'form-control'),
            'required' => false
        ));
        $builder->add('file', 'file', array(
            'attr' => array('style' => 'display:none'),
            'required' => false
        ));
    }

    /**
     * Returns the default options for this form type.
     * @param array $options
     * @return array The default options
     */
    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'ICGM2\PagesBundle\Entity\entities'
        );
    }

    /**
     * Gets the unique name of this form type
     * @return string
     */
    public function getName()
    {
        return 'icgm2_pagesbundle_entities';
    }

}
