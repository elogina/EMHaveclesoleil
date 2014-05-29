<?php


namespace emh\InscriptionBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class FormationsAteliersAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('nomFr')
            ->add('nomEn')
            ->add('descriptionFr')
            ->add('descriptionEn')
            ->add('prix')
            ->add('debut')
            ->add('fin')
            ->add('nbmax')
            ->add('sites', 'entity', array('class'  =>'emhcmsPrincipalBundle:Sites',
                                           'property' => 'nomFr'))
            
             
                     
          
                
                
                    ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nomFr')
            ->add('nomEn')
            ->add('descriptionFr')
            ->add('descriptionEn')
            ->add('prix')
            ->add('debut')
            ->add('fin')
            ->add('nbmax')
            ->add('sites')
        
         
            
         
            
                          

        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
           // ->addIdentifier('')
            ->addIdentifier('nomFr')
            ->addIdentifier('nomEn')
            ->add('descriptionFr')
            ->add('descriptionEn')
            ->add('prix')
            ->add('debut')
            ->add('fin')
            ->add('nbmax')
            ->addIdentifier('sites')
           
           
           
       
      
            
        ;
    }
}