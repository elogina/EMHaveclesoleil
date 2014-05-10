<?php

namespace emh\cmsPrincipalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RubriquesType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomFr')
            ->add('sites', 'entity', array('class'  =>'emhcmsPrincipalBundle:Sites',
                                                'property' => 'nomFr'))
            
                
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'emh\cmsPrincipalBundle\Entity\Rubriques'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'emh_cmsprincipalbundle_rubriques';
    }
}
