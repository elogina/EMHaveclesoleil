<?php
namespace emh\AgendaBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class AgendaAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
      
         ->add('titreFr')
         ->add('titreEn')
        ->add('texteFr')
          ->add('texteEn')       
            ->add('sites', 'entity', array('class'  =>'emhcmsPrincipalBundle:Sites',
                                          'property' => 'nomFr'))
                
                    ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
      
         ->add('titreFr')
         ->add('titreEn')
        ->add('texteFr')
          ->add('texteEn') 
           ->add('sites') 
         
            
                          

        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
        
         ->addIdentifier('titreFr')
         ->add('titreEn')
        ->add('texteFr')
          ->add('texteEn') 
      ->add('sites')
            
        ;
    }
}