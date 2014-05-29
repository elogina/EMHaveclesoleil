<?php
namespace emh\InscriptionBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class InscriptionsAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
             ->add('id')
             ->add('formationsAteliers')
             ->add('membres')
              ->add('paye', 'checkbox', array('label'=> 'payé?',
                                            'required'=>false, ))
             ->add('dateInscription')
          
                     
          
                
                
                    ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
          
            ->add('id')
            ->add('formationsAteliers')
            ->add('membres')
            ->add('paye')
            ->add('dateInscription')
                          

        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
           // ->addIdentifier('')
           ->addIdentifier('id') 
           ->add('formationsAteliers')
           ->add('membres')
           ->add('paye')
           ->add('dateInscription')
       
      
            
        ;
    }
}