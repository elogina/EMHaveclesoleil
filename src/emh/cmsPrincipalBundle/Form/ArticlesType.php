<?php

namespace emh\cmsPrincipalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArticlesType extends AbstractType
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
            ->add('texteFr')
            ->add('texteEn')
            ->add('image')
            ->add('rubriques', 'entity', array('class'  =>'emhcmsPrincipalBundle:Rubriques',
                                                'property' => 'nomFr'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'emh\cmsPrincipalBundle\Entity\Articles'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'emh_cmsprincipalbundle_articles';
    }
}
