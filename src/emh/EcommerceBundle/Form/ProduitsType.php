<?php

namespace emh\EcommerceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProduitsType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomFr')
            ->add('nomEn')
            ->add('descriptionFr')
            ->add('descriptionEn')
            ->add('image')
            ->add('prix')
            ->add('onoff')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'emh\EcommerceBundle\Entity\Produits'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'emh_ecommercebundle_produits';
    }
}
