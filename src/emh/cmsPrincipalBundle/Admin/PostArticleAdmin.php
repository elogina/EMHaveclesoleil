<?php


namespace emh\cmsPrincipalBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class PostArticleAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
           ->add('nomFr', 'text', array('label' => 'titre FR'))
           ->add('nomEn', 'text', array('label' => 'titre EN'))
           ->add('texteFr', 'text', array('label' => 'texte FR'))
           ->add('texteEn', 'text', array('label' => 'texte EN'))
           ->add('rubriques', 'entity', array('class'  =>'emhcmsPrincipalBundle:Rubriques',
                                          'property' => 'nomFr'))
          
           
                
                    ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
           ->add('nomFr')
           ->add('nomEn')
           ->add('texteFr')
           ->add('texteEn')
             ->add('rubriques')
             
            
         
            
                          

        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('nomFr')
            ->addIdentifier('nomEn')
            ->addIdentifier('texteFr')
            ->addIdentifier('texteEn')
               ->addIdentifier('rubriques')

       
      
            
        ;
    }
}