<?php

namespace emh\DonsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DonsType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('prix')
            ->add('date')
            ->add('paye')
            ->add('virementPaypal')
            ->add('membres')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'emh\DonsBundle\Entity\Dons'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'emh_donsbundle_dons';
    }
}
