<?php
namespace emh\DonsBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class DonsAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
          
           ->add('prix')
            ->add('date')
            ->add('paye', 'checkbox', array('label'=> 'payé?',
                                            'required'=>false, ))
           
            ->add('membres','entity', array('multiple' => false,
                                                      'expanded' => false,
                                                       'class'  =>'emhMembresBundle:Membres',
                                                        'property'=>'nom',
                                                          ))
                
                    ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
                
      ->add('prix')
            ->add('date')
            ->add('paye')
            ->add('membres')
             
            
         
            
                          

        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
         ->addIdentifier('id')
         ->add('prix')
         ->add('date')
         ->add('paye')
         ->addIdentifier('membres')
      
            
        ;
    }
}