<?php


namespace emh\EcommerceBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class AchatsAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            
             ->add('produits')
             ->add('membres')
             ->add('paye', 'checkbox', array('label'=> 'payé?',
                                            'required'=>false, ))
             ->add('date')  
                    ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
             ->add('id')
             ->add('produits')
             ->add('membres')
             ->add('paye')
             ->add('date')
             
            
         
            
                          

        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->add('produits')
            ->add('membres')
            ->add('paye')
            ->add('date')
      
            
        ;
    }
}