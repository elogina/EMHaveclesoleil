<?php


namespace emh\cmsPrincipalBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class PostAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
           ->add('nomFr', 'text', array('label' => 'titre FR'))
           ->add('nomEn', 'text', array('label' => 'titre EN'))
           ->add('sites', 'entity', array('class'  =>'emhcmsPrincipalBundle:Sites',
                                          'property' => 'nomFr'))
           ->add('choixFormation', 'checkbox', array('label'=> 'est-ce une formation?',
                                                      'required'=>false,))
           
                ->add('choixProduit', 'checkbox', array('label'=> 'est-ce un produit?',
                                                      'required'=>false,))
           
                
                    ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nomFr')
           ->add('nomEn')
           ->add('sites')
             ->add('choixFormation') 
                  ->add('choixProduit') 
            
         
            
                          

        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('nomFr')
            ->addIdentifier('nomEn')
            ->addIdentifier('sites')
        ->add('choixFormation')
                 ->add('choixProduit') 
      
            
        ;
    }
}