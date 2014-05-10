<?php

namespace emh\InscriptionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FormationsAteliersType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomFr')
           // ->add('nomEn')
            ->add('descriptionFr')
            //->add('descriptionEn')
            ->add('prix')
            ->add('date')
            ->add('debut')
            ->add('fin')
            ->add('nbmax')
            ->add('dateinscription')
            ->add('paye')
            ->add('sites')
            //->add('membres')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'emh\InscriptionBundle\Entity\FormationsAteliers'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'emh_inscriptionbundle_formationsateliers';
    }
}
