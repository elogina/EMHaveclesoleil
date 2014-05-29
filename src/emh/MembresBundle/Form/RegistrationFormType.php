<?php

namespace emh\MembresBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;


class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
         parent::buildForm($builder, $options);
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('adresse')
            ->add('telephonne')
         
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'emh\MembresBundle\Entity\Membres'
        ));
    }
  

    /**
     * @return string
     */
    public function getName()
    {
        return 'emh_membresbundle_membres';
    }
}
