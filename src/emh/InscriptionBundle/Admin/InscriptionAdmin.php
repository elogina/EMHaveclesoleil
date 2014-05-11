<?php


namespace emh\InscriptionBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class InscriptionAdmin extends Admin
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
            //->add('date')
            ->add('debut')
            ->add('fin')
            ->add('nbmax')
            //->add('dateinscription')
            //->add('paye')
            ->add('sites', 'entity', array('class'  =>'emhInscriptionBundle:Sites',
                                                'property' => 'nomFr'))
            //->add('membres')
                
                
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
            //->add('date')
            ->add('debut')
            ->add('fin')
            ->add('nbmax')
            //->add('dateinscription')
            //->add('paye')
            ->add('sites')
            //->add('membres')
            
         
            
                          

        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
           // ->addIdentifier('')
            ->addIdentifier('nomFr')
            ->addIdentifier('nomEn')
            ->addIdentifier('descriptionFr')
            ->addIdentifier('descriptionEn')
            ->addIdentifier('prix')
            //->add('date')
            ->addIdentifier('debut')
            ->addIdentifier('fin')
            ->addIdentifier('nbmax')
            //->add('dateinscription')
            //->add('paye')
            ->addIdentifier('sites')
            //->add('membres')
           
       
      
            
        ;
    }
}